<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LandingPageController;

/**
 * Landing Page Routes
 * All landing page routes grouped with 'landing' prefix for easy management
 */
Route::controller(LandingPageController::class)->group(function () {
    // Homepage
    Route::get('/', 'index')->name('landing.index');

    // Services
    Route::get('/services', 'services')->name('landing.services');

    // SCRUM Methodology
    Route::get('/scrum', 'scrum')->name('landing.scrum');

    // Technology Stack
    Route::get('/tech-stack', 'techStack')->name('landing.tech-stack');

    // Scaling & Infrastructure
    Route::get('/scaling', 'scaling')->name('landing.scaling');

    // About Us
    Route::get('/about-us', 'aboutUs')->name('landing.about-us');

    // Case Studies & Portfolio
    Route::get('/case-studies', 'caseStudies')->name('landing.case-studies');

    // Pricing
    Route::get('/pricing', 'pricing')->name('landing.pricing');

    // Certifications & Standards
    Route::get('/certifications', 'certifications')->name('landing.certifications');

    // Contact
    Route::get('/contact', 'contact')->name('landing.contact');

    // One-page landing page route
    Route::get('/one-page', 'onePage')->name('landing.one-page');
});
