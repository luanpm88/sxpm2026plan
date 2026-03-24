<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LandingPageController;
use App\Http\Controllers\SolutionController;

/**
 * Root: detect locale from cookie / Accept-Language, then redirect.
 */
Route::get('/', function (Request $request) {
    $supported = ['en', 'vi'];
    $default   = 'en';

    // 1. Cookie
    $locale = $request->cookie('locale');
    if ($locale && in_array($locale, $supported, true)) {
        return redirect("/{$locale}", 302);
    }

    // 2. Accept-Language header
    $header = $request->header('Accept-Language', '');
    foreach (preg_split('/,\s*/', $header) as $tag) {
        $primary = strtolower(explode('-', explode(';', $tag)[0])[0]);
        if (in_array($primary, $supported, true)) {
            return redirect("/{$primary}", 302);
        }
    }

    return redirect("/{$default}", 302);
});

/**
 * Language switch: store in cookie, then redirect back to same page in new locale.
 * Usage: GET /set-locale/vi?redirect=/en/services  →  /vi/services
 */
Route::get('/set-locale/{locale}', function (Request $request, string $locale) {
    $supported = ['en', 'vi'];
    if (!in_array($locale, $supported, true)) {
        $locale = 'en';
    }

    // Convert the previous URL's locale segment to the new one
    $previous = url()->previous('/');
    $pattern  = '#^(https?://[^/]+)/(' . implode('|', $supported) . ')(/.*)?$#';
    if (preg_match($pattern, $previous, $m)) {
        $path = $m[3] ?? '/';
        $redirect = "/{$locale}{$path}";
    } else {
        $redirect = "/{$locale}";
    }

    return redirect($redirect)
        ->cookie('locale', $locale, 525600, '/', null, false, false);
})->name('locale.switch');

/**
 * Locale-prefixed landing & solution routes.
 * All routes share the SetLocale middleware which:
 *   - Sets App::setLocale($locale)
 *   - Sets URL::defaults(['locale' => $locale])  ← makes route() auto-include locale
 */
Route::prefix('{locale}')
    ->where(['locale' => 'en|vi'])
    ->middleware('set.locale')
    ->group(function () {

        // ── Landing Pages ──────────────────────────────────────────────────
        Route::controller(LandingPageController::class)->group(function () {

            Route::get('/', 'index')->name('landing.index');
            Route::get('/services', 'services')->name('landing.services');
            Route::get('/scrum', 'scrum')->name('landing.scrum');
            Route::get('/tech-stack', 'techStack')->name('landing.tech-stack');
            Route::get('/scaling', 'scaling')->name('landing.scaling');
            Route::get('/about-us', 'aboutUs')->name('landing.about-us');
            Route::get('/case-studies', 'caseStudies')->name('landing.case-studies');
            Route::get('/pricing', 'pricing')->name('landing.pricing');
            Route::get('/certifications', 'certifications')->name('landing.certifications');
            Route::get('/contact', 'contact')->name('landing.contact');
            Route::get('/one-page', 'onePage')->name('landing.one-page');
            Route::get('/blog/r_and_d', 'blog')->name('landing.blog.r_and_d');

        });

        // ── Solutions ──────────────────────────────────────────────────────
        Route::controller(SolutionController::class)
            ->prefix('solutions')
            ->name('solutions.')
            ->group(function () {
                Route::get('/sme-manufacturing', 'manufacturing')->name('sme-manufacturing');
            });
    });
