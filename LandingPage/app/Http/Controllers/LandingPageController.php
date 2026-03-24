<?php

namespace App\Http\Controllers;

use Illuminate\View\View;

class LandingPageController extends Controller
{
    /**
     * Map of page names and metadata
     */
    private function getPageMetadata(): array
    {
        return [
            'index' => [
                'title' => __('meta.home_title'),
                'description' => __('meta.home_description')
            ],
            'services' => [
                'title' => __('meta.services_title'),
                'description' => __('meta.services_description')
            ],
            'scrum' => [
                'title' => __('meta.scrum_title'),
                'description' => __('meta.scrum_description')
            ],
            'tech-stack' => [
                'title' => __('meta.tech_stack_title'),
                'description' => __('meta.tech_stack_description')
            ],
            'scaling' => [
                'title' => __('meta.scaling_title'),
                'description' => __('meta.scaling_description')
            ],
            'about-us' => [
                'title' => __('meta.about_us_title'),
                'description' => __('meta.about_us_description')
            ],
            'case-studies' => [
                'title' => __('meta.case_studies_title'),
                'description' => __('meta.case_studies_description')
            ],
            'pricing' => [
                'title' => __('meta.pricing_title'),
                'description' => __('meta.pricing_description')
            ],
            'certifications' => [
                'title' => __('meta.certifications_title'),
                'description' => __('meta.certifications_description')
            ],
            'contact' => [
                'title' => __('meta.contact_title'),
                'description' => __('meta.contact_description')
            ]
        ];
    }

    /**
     * Get navigation menu
     */
    private function getNavMenu(): array
    {
        return [
            'index' => 'Trang Chủ',
            'services' => 'Dịch Vụ',
            'scrum' => 'SCRUM',
            'tech-stack' => 'Công Nghệ',
            'scaling' => 'Mở Rộng',
            'about-us' => 'Về Chúng Tôi',
            'case-studies' => 'Case Studies',
            'certifications' => 'Chứng chỉ',
            'pricing' => 'Giá',
            'contact' => 'Liên Hệ'
        ];
    }

    /**
     * Determine current page slug from route
     */
    private function getCurrentPage(): string
    {
        $routeName = \Route::currentRouteName();
        $routeMap = [
            'landing.index' => 'index',
            'landing.services' => 'services',
            'landing.scrum' => 'scrum',
            'landing.tech-stack' => 'tech-stack',
            'landing.scaling' => 'scaling',
            'landing.about-us' => 'about-us',
            'landing.certifications' => 'certifications',
            'landing.case-studies' => 'case-studies',
            'landing.pricing' => 'pricing',
            'landing.contact' => 'contact'
        ];
        
        return $routeMap[$routeName] ?? 'index';
    }

    /**
     * Homepage
     */
    public function index(): View
    {
        $metadata = $this->getPageMetadata();
        $navMenu = $this->getNavMenu();
        $currentPage = $this->getCurrentPage();

        return view('landing_page.index', [
            'pageTitle' => $metadata['index']['title'],
            'pageDescription' => $metadata['index']['description'],
            'navMenu' => $navMenu,
            'currentPage' => $currentPage
        ]);
    }

    /**
     * Services page
     */
    public function services(): View
    {
        $metadata = $this->getPageMetadata();
        $navMenu = $this->getNavMenu();
        $currentPage = $this->getCurrentPage();

        return view('landing_page.services', [
            'pageTitle' => $metadata['services']['title'],
            'pageDescription' => $metadata['services']['description'],
            'navMenu' => $navMenu,
            'currentPage' => $currentPage
        ]);
    }

    /**
     * SCRUM page
     */
    public function scrum(): View
    {
        $metadata = $this->getPageMetadata();
        $navMenu = $this->getNavMenu();
        $currentPage = $this->getCurrentPage();

        return view('landing_page.scrum', [
            'pageTitle' => $metadata['scrum']['title'],
            'pageDescription' => $metadata['scrum']['description'],
            'navMenu' => $navMenu,
            'currentPage' => $currentPage
        ]);
    }

    /**
     * Tech Stack page
     */
    public function techStack(): View
    {
        $metadata = $this->getPageMetadata();
        $navMenu = $this->getNavMenu();
        $currentPage = $this->getCurrentPage();

        return view('landing_page.tech-stack', [
            'pageTitle' => $metadata['tech-stack']['title'],
            'pageDescription' => $metadata['tech-stack']['description'],
            'navMenu' => $navMenu,
            'currentPage' => $currentPage
        ]);
    }

    /**
     * Scaling page
     */
    public function scaling(): View
    {
        $metadata = $this->getPageMetadata();
        $navMenu = $this->getNavMenu();
        $currentPage = $this->getCurrentPage();

        return view('landing_page.scaling', [
            'pageTitle' => $metadata['scaling']['title'],
            'pageDescription' => $metadata['scaling']['description'],
            'navMenu' => $navMenu,
            'currentPage' => $currentPage
        ]);
    }

    /**
     * About Us page
     */
    public function aboutUs(): View
    {
        $metadata = $this->getPageMetadata();
        $navMenu = $this->getNavMenu();
        $currentPage = $this->getCurrentPage();

        return view('landing_page.about-us', [
            'pageTitle' => $metadata['about-us']['title'],
            'pageDescription' => $metadata['about-us']['description'],
            'navMenu' => $navMenu,
            'currentPage' => $currentPage
        ]);
    }

    /**
     * Case Studies page
     */
    public function caseStudies(): View
    {
        $metadata = $this->getPageMetadata();
        $navMenu = $this->getNavMenu();
        $currentPage = $this->getCurrentPage();

        return view('landing_page.case-studies', [
            'pageTitle' => $metadata['case-studies']['title'],
            'pageDescription' => $metadata['case-studies']['description'],
            'navMenu' => $navMenu,
            'currentPage' => $currentPage
        ]);
    }

    /**
     * Pricing page
     */
    public function pricing(): View
    {
        $metadata = $this->getPageMetadata();
        $navMenu = $this->getNavMenu();
        $currentPage = $this->getCurrentPage();

        return view('landing_page.pricing', [
            'pageTitle' => $metadata['pricing']['title'],
            'pageDescription' => $metadata['pricing']['description'],
            'navMenu' => $navMenu,
            'currentPage' => $currentPage
        ]);
    }

    /**
     * Certifications & Standards page
     */
    public function certifications(): View
    {
        $metadata = $this->getPageMetadata();
        $navMenu = $this->getNavMenu();
        $currentPage = $this->getCurrentPage();

        return view('landing_page.certifications', [
            'pageTitle' => $metadata['certifications']['title'],
            'pageDescription' => $metadata['certifications']['description'],
            'navMenu' => $navMenu,
            'currentPage' => $currentPage
        ]);
    }

    /**
     * Contact page
     */
    public function contact(): View
    {
        $metadata = $this->getPageMetadata();
        $navMenu = $this->getNavMenu();
        $currentPage = $this->getCurrentPage();

        return view('landing_page.contact', [
            'pageTitle' => $metadata['contact']['title'],
            'pageDescription' => $metadata['contact']['description'],
            'navMenu' => $navMenu,
            'currentPage' => $currentPage
        ]);
    }

    /**
     * One-page landing page
     */
    public function onePage(): View
    {
        // No need for metadata/nav, one-page is self-contained
        return view('landing_page.one-page');
    }

    /**
     * R&D Blog page
     */
    public function blog(): View
    {
        $metadata = [
            'title' => __('meta.blog_title'),
            'description' => __('meta.blog_description')
        ];
        $navMenu = $this->getNavMenu();
        $currentPage = 'blog';

        return view('landing_page.blog.r_and_d', [
            'pageTitle' => $metadata['title'],
            'pageDescription' => $metadata['description'],
            'navMenu' => $navMenu,
            'currentPage' => $currentPage
        ]);
    }
}
