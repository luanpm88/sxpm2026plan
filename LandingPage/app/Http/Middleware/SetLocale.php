<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\URL;
use Symfony\Component\HttpFoundation\Response;

class SetLocale
{
    private const SUPPORTED = ['en', 'vi'];
    private const DEFAULT = 'en';
    private const COOKIE_NAME = 'locale';
    private const COOKIE_MINUTES = 525_600; // 1 year

    public function handle(Request $request, Closure $next): Response
    {
        $locale = $this->resolveLocale($request);

        App::setLocale($locale);
        URL::defaults(['locale' => $locale]);

        /** @var Response $response */
        $response = $next($request);

        // Persist choice in cookie (only set if changed or absent)
        if ($request->cookie(self::COOKIE_NAME) !== $locale) {
            $response->headers->setCookie(
                cookie(self::COOKIE_NAME, $locale, self::COOKIE_MINUTES, '/', null, false, false)
            );
        }

        return $response;
    }

    private function resolveLocale(Request $request): string
    {
        // 1. Explicit URL segment (/{locale}/...)
        $fromRoute = $request->route('locale');
        if ($fromRoute && $this->isSupported($fromRoute)) {
            return $fromRoute;
        }

        // 2. Cookie (user previously chose)
        $fromCookie = $request->cookie(self::COOKIE_NAME);
        if ($fromCookie && $this->isSupported($fromCookie)) {
            return $fromCookie;
        }

        // 3. Browser Accept-Language header
        $fromBrowser = $this->detectFromBrowser($request);
        if ($fromBrowser) {
            return $fromBrowser;
        }

        return self::DEFAULT;
    }

    private function detectFromBrowser(Request $request): ?string
    {
        $header = $request->header('Accept-Language', '');
        if (!$header) {
            return null;
        }

        // Parse "vi-VN,vi;q=0.9,en-US;q=0.8,en;q=0.7"
        $tags = preg_split('/,\s*/', $header);
        foreach ($tags as $tag) {
            // Strip quality value
            $lang = strtolower(explode(';', $tag)[0]);
            // Match primary subtag (e.g. "vi" from "vi-VN")
            $primary = explode('-', $lang)[0];
            if ($this->isSupported($primary)) {
                return $primary;
            }
        }

        return null;
    }

    private function isSupported(string $locale): bool
    {
        return in_array($locale, self::SUPPORTED, true);
    }
}
