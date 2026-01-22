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
                'title' => 'HKIncotech - Enterprise Software Engineering',
                'description' => 'Phát triển phần mềm doanh nghiệp quy mô toàn cầu theo SCRUM'
            ],
            'services' => [
                'title' => 'Dịch Vụ - HKIncotech',
                'description' => 'Custom Software Development, SaaS Platform, AI Knowledge Platform, Security & Compliance'
            ],
            'scrum' => [
                'title' => 'Quy Trình SCRUM - HKIncotech',
                'description' => 'Phương pháp phát triển Agile SCRUM: 6 bước từ khám phá đến triển khai sản phẩm thành công'
            ],
            'tech-stack' => [
                'title' => 'Công Nghệ - HKIncotech',
                'description' => 'Tech stack toàn diện: Frontend, Backend, Data, Cloud, DevOps'
            ],
            'scaling' => [
                'title' => 'Kiến Trúc Mở Rộng - HKIncotech',
                'description' => 'Chiến lược scaling từ MVP đến enterprise solutions'
            ],
            'about-us' => [
                'title' => 'Về Chúng Tôi - HKIncotech',
                'description' => 'Câu chuyện, team, culture, vision của HKIncotech'
            ],
            'case-studies' => [
                'title' => 'Case Studies - HKIncotech',
                'description' => 'Portfolio: 50+ projects, diverse industries, proven results'
            ],
            'pricing' => [
                'title' => 'Giá - HKIncotech',
                'description' => '3 pricing tiers: Startup, Growth, Enterprise'
            ],
            'contact' => [
                'title' => 'Liên Hệ - HKIncotech',
                'description' => 'Liên hệ với chúng tôi để tư vấn free về giải pháp phần mềm'
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
}
