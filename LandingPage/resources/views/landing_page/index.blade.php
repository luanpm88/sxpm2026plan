@extends('layouts.main')

@push('schemas')
<script type="application/ld+json">
{
    "@@context": "https://schema.org",
    "@@type": "FAQPage",
    "mainEntity": [
        {
            "@@type": "Question",
            "name": "What does HKIncotech do?",
            "acceptedAnswer": {
                "@@type": "Answer",
                "text": "HKIncotech is an enterprise software engineering company based in Southeast Asia. We design, build, and operate enterprise software systems, SaaS platforms, applied AI solutions, and security controls for organizations."
            }
        },
        {
            "@@type": "Question",
            "name": "How long does it take to build an MVP?",
            "acceptedAnswer": {
                "@@type": "Answer",
                "text": "Timeline depends on scope, business complexity, integrations, and operating requirements. HKIncotech proposes a staged roadmap after discovery."
            }
        },
        {
            "@@type": "Question",
            "name": "What technologies does HKIncotech use?",
            "acceptedAnswer": {
                "@@type": "Answer",
                "text": "We choose technology according to architecture, maintainability, security, operating model, and growth requirements. Common stacks include React, Node.js, Python, Laravel, PostgreSQL, AWS/GCP, mobile technologies, and applied AI."
            }
        },
        {
            "@@type": "Question",
            "name": "Do I own the source code?",
            "acceptedAnswer": {
                "@@type": "Answer",
                "text": "Yes. Source-code ownership, project documentation, and handover scope are defined clearly in the engagement agreement."
            }
        },
        {
            "@@type": "Question",
            "name": "What security certifications does HKIncotech have?",
            "acceptedAnswer": {
                "@@type": "Answer",
                "text": "HKIncotech references recognized standards such as ISO/IEC 27001, OWASP, NIST CSF, SOC 2, GDPR, PCI DSS, and HIPAA when framing security requirements, architecture reviews, and delivery controls. Formal certification or regulated compliance scope should be confirmed during project discovery."
            }
        }
    ]
}
</script>
@endpush

@section('content')

    {{-- 1. HERO --}}
    @include('landing_page.partials.hero')


    {{-- 2. PAIN — Sound Familiar? --}}
    <section id="pain" aria-labelledby="heading-pain" class="section-alt">
        <div class="container-v5">
            <div class="section-header">
                <span class="section-label">{{ __('index.section_pain') }}</span>
                <h2 id="heading-pain" class="section-title">{{ __('index.pain_title') }}</h2>
                <p class="section-subtitle">{{ __('index.pain_subtitle') }}</p>
            </div>

            <div class="pain-grid">
                @for($i = 1; $i <= 4; $i++)
                <div class="pain-card">
                    <span class="pain-icon material-symbols-rounded">warning</span>
                    <p class="pain-text">{{ __('index.pain_' . $i) }}</p>
                </div>
                @endfor
            </div>
        </div>
    </section>


    {{-- 3. SERVICES --}}
    <section id="services" aria-labelledby="heading-services">
        <div class="container-v5">
            <div class="section-header section-header--with-visual">
                <span class="section-label">{{ __('index.section_services') }}</span>
                <h2 id="heading-services" class="section-title">{{ __('index.services_title') }}</h2>
                <p class="section-subtitle">{{ __('index.services_subtitle') }}</p>
                <div class="section-header__visual-row" aria-hidden="true">
                    @php
                    $visualSteps = [
                        ['icon' => 'checklist', 'label' => __('index.services_visual_1')],
                        ['icon' => 'architecture', 'label' => __('index.services_visual_2')],
                        ['icon' => 'code', 'label' => __('index.services_visual_3')],
                        ['icon' => 'shield', 'label' => __('index.services_visual_4')],
                        ['icon' => 'monitoring', 'label' => __('index.services_visual_5')],
                    ];
                    @endphp
                    @foreach($visualSteps as $i => $step)
                        <div class="section-header__visual-step">
                            <span class="section-header__visual-icon material-symbols-rounded">{{ $step['icon'] }}</span>
                            <span class="section-header__visual-label">{{ $step['label'] }}</span>
                        </div>
                        @if($i < count($visualSteps) - 1)
                            <span class="section-header__visual-connector"></span>
                        @endif
                    @endforeach
                </div>
            </div>

            <div class="grid-4col">
                @php
                $services = [
                    ['icon' => 'account_tree', 'key' => 'industry', 'cta_key' => 'industry_cta', 'route' => 'landing.scrum', 'featured' => true, 'badge_key' => 'industry_badge'],
                    ['icon' => 'code', 'key' => 'custom', 'cta_key' => 'custom_cta', 'route' => 'landing.services'],
                    ['icon' => 'workspace_premium', 'key' => 'saas', 'cta_key' => 'saas_cta', 'route' => 'landing.services'],
                    ['icon' => 'psychology', 'key' => 'ai', 'cta_key' => 'ai_cta', 'route' => 'landing.services'],
                    ['icon' => 'shield', 'key' => 'security', 'cta_key' => 'security_cta', 'route' => 'landing.services'],
                ];
                @endphp

                @foreach($services as $svc)
                <div class="service-card {{ !empty($svc['featured']) ? 'service-card--featured' : '' }}">
                    @if(!empty($svc['badge_key']))
                    <div class="service-card__badge">
                        <span class="material-symbols-rounded">verified</span>
                        {{ __('index.' . $svc['badge_key']) }}
                    </div>
                    @endif
                    <div class="service-card__icon">
                        <span class="material-symbols-rounded">{{ $svc['icon'] }}</span>
                    </div>
                    <h3 class="service-card__title">{{ __('index.' . $svc['key'] . '_title') }}</h3>
                    <p class="service-card__desc">{{ __('index.' . $svc['key'] . '_desc') }}</p>
                    <ul class="service-card__features">
                        @for($i = 1; $i <= 4; $i++)
                        <li>
                            <span class="dot"></span>
                            {{ __('index.' . $svc['key'] . '_feature_' . $i) }}
                        </li>
                        @endfor
                    </ul>
                    <a href="{{ route($svc['route']) }}" class="service-card__link" data-ga-event="service_explore" data-ga-service="{{ $svc['key'] }}">
                        {{ __('index.' . $svc['cta_key']) }}
                        <span class="material-symbols-rounded">arrow_forward</span>
                    </a>
                </div>
                @endforeach
            </div>
        </div>
    </section>


    {{-- 4. CAPABILITIES --}}
    <section id="capabilities" aria-labelledby="heading-capabilities" class="section-alt">
        <div class="container-v5">
            <div class="section-header">
                <span class="section-label">{{ __('index.section_capabilities') }}</span>
                <h2 id="heading-capabilities" class="section-title">{{ __('index.capabilities_title') }}</h2>
                <p class="section-subtitle">{{ __('index.capabilities_subtitle') }}</p>
            </div>

            <div class="capabilities-grid">
                @php
                $caps = [
                    ['key' => 'build', 'color' => '#183060'],
                    ['key' => 'scale', 'color' => '#1a4585'],
                    ['key' => 'secure', 'color' => '#2f6abf'],
                    ['key' => 'ai', 'color' => '#183060'],
                    ['key' => 'mfg', 'color' => '#1a4585'],
                    ['key' => 'ship', 'color' => '#4f5965'],
                ];
                @endphp

                @foreach($caps as $cap)
                <div class="capability-card">
                    <div class="capability-icon" style="background: {{ $cap['color'] }}15; color: {{ $cap['color'] }};">
                        <span class="material-symbols-rounded">{{ __('index.cap_' . $cap['key'] . '_icon') }}</span>
                    </div>
                    <h3 class="capability-title">{{ __('index.cap_' . $cap['key'] . '_title') }}</h3>
                    <p class="capability-desc">{{ __('index.cap_' . $cap['key'] . '_desc') }}</p>
                </div>
                @endforeach
            </div>

            <div class="section-cta">
                <a href="{{ route('landing.tech-stack') }}" class="btn-secondary-v5" data-ga-event="cta_click" data-ga-cta="capabilities_tech">
                    <span>{{ __('index.capabilities_cta') }}</span>
                    <span class="material-symbols-rounded">arrow_forward</span>
                </a>
            </div>
        </div>
    </section>


    {{-- 5. PROCESS --}}
    <section id="process" aria-labelledby="heading-process">
        <div class="container-v5">
            <div class="section-header">
                <span class="section-label">{{ __('index.section_process') }}</span>
                <h2 id="heading-process" class="section-title">{{ __('index.process_title') }}</h2>
                <p class="section-subtitle">{{ __('index.process_subtitle') }}</p>
            </div>

            <div class="process-steps">
                @for($i = 1; $i <= 3; $i++)
                <div class="process-step">
                    <div class="process-step-number">{{ str_pad($i, 2, '0', STR_PAD_LEFT) }}</div>
                    <div class="process-step-icon">
                        <span class="material-symbols-rounded">{{ __('index.process_step' . $i . '_icon') }}</span>
                    </div>
                    <h3 class="process-step-title">{{ __('index.process_step' . $i . '_title') }}</h3>
                    <p class="process-step-desc">{{ __('index.process_step' . $i . '_desc') }}</p>
                </div>
                @if($i < 3)
                <div class="process-step-connector">
                    <span class="material-symbols-rounded">arrow_forward</span>
                </div>
                @endif
                @endfor
            </div>

            <div class="section-cta">
                <a href="{{ route('landing.scrum') }}" class="btn-primary-v5" data-ga-event="cta_click" data-ga-cta="process_scrum">
                    <span>{{ __('index.process_cta') }}</span>
                    <span class="material-symbols-rounded">arrow_forward</span>
                </a>
            </div>
        </div>
    </section>


    {{-- 6. WHY US --}}
    <section id="why-us" aria-labelledby="heading-why" class="section-alt">
        <div class="container-v5">
            <div class="section-header">
                <span class="section-label">{{ __('index.section_why') }}</span>
                <h2 id="heading-why" class="section-title">{{ __('index.why_title') }}</h2>
                <p class="section-subtitle">{{ __('index.why_subtitle') }}</p>
            </div>

            <div class="governance-panel">
                <div class="governance-panel__intro">
                    <span class="material-symbols-rounded">rule_settings</span>
                    <div>
                        <h3>{{ __('index.governance_title') }}</h3>
                        <p>{{ __('index.governance_desc') }}</p>
                    </div>
                </div>
                <div class="governance-panel__grid">
                    @php
                    $governance = [
                        ['icon' => 'account_tree', 'key' => '1'],
                        ['icon' => 'monitoring', 'key' => '2'],
                        ['icon' => 'verified_user', 'key' => '3'],
                    ];
                    @endphp
                    @foreach($governance as $item)
                    <div class="governance-panel__item">
                        <span class="material-symbols-rounded">{{ $item['icon'] }}</span>
                        <h4>{{ __('index.governance_' . $item['key'] . '_title') }}</h4>
                        <p>{{ __('index.governance_' . $item['key'] . '_desc') }}</p>
                    </div>
                    @endforeach
                </div>
            </div>

            <div class="grid-3col">
                @php
                $whys = [
                    ['icon' => 'travel_explore', 'key' => 'expertise'],
                    ['icon' => 'hub', 'key' => 'team'],
                    ['icon' => 'conversion_path', 'key' => 'fast'],
                    ['icon' => 'shield_lock', 'key' => 'security'],
                    ['icon' => 'query_stats', 'key' => 'scalable'],
                    ['icon' => 'handshake', 'key' => 'partnership'],
                ];
                @endphp
                @foreach($whys as $w)
                <div class="why-card">
                    <div class="why-card__icon">
                        <span class="material-symbols-rounded">{{ $w['icon'] }}</span>
                    </div>
                    <div>
                        <h3 class="why-card__title">{{ __('index.why_' . $w['key']) }}</h3>
                        <p class="why-card__desc">{{ __('index.why_' . $w['key'] . '_desc') }}</p>
                    </div>
                </div>
                @endforeach
            </div>

            <div class="section-cta">
                <a href="{{ route('landing.contact') }}" class="btn-primary-v5" data-ga-event="cta_click" data-ga-cta="why_us_consultation">
                    <span class="material-symbols-rounded">calendar_month</span>
                    <span>{{ __('index.why_cta') }}</span>
                </a>
            </div>
        </div>
    </section>


    {{-- 7. CASE STUDIES --}}
    <section id="case-studies" aria-labelledby="heading-cases">
        <div class="container-v5">
            <div class="section-header">
                <span class="section-label">{{ __('index.section_cases') }}</span>
                <h2 id="heading-cases" class="section-title">{{ __('index.case_title') }}</h2>
                <p class="section-subtitle">{{ __('index.case_subtitle') }}</p>
            </div>

            <div class="grid-3col">
                @php
                $cases = [
                    [
                        'num' => '1',
                        'stack' => ['Laravel', 'REST API', 'PostgreSQL', 'Redis', 'React', 'React Native', 'Queue Worker', 'RBAC'],
                        'patterns' => ['Domain Modeling', 'Workflow Rules', 'Audit Log', 'Data Validation', 'Role-based Reports', 'Peak-period Scaling'],
                    ],
                    [
                        'num' => '2',
                        'stack' => ['Python', 'Node.js', 'PostgreSQL', 'Redis', 'React', 'Barcode', 'Forecasting', 'Warehouse API'],
                        'patterns' => ['Inventory Reconciliation', 'Event Queue', 'Branch Sync', 'Exception Handling', 'Dashboard KPI', 'Access Control'],
                    ],
                    [
                        'num' => '3',
                        'stack' => ['Node.js', 'PostgreSQL', 'React', 'AWS', 'Docker', 'Elasticsearch', 'Microservices', 'BI Dashboard'],
                        'patterns' => ['Bounded Context', 'Approval Flow', 'Ledger Sync', 'Audit Trail', 'Integration API', 'Observability'],
                    ],
                ];
                @endphp

                @foreach($cases as $case)
                <div class="case-card" data-ga-event="case_study_view" data-ga-case="{{ __('index.case' . $case['num'] . '_badge') }}">
                    <div class="case-card-badge">{{ __('index.case' . $case['num'] . '_badge') }}</div>
                    <h3 class="case-card-title">{{ __('index.case' . $case['num'] . '_title') }}</h3>
                    <p class="case-card-desc">{{ __('index.case' . $case['num'] . '_desc') }}</p>
                    <div class="case-card-metrics">
                        @for($m = 1; $m <= 3; $m++)
                        <div class="case-metric">
                            <span class="case-metric-value">{{ __('index.case' . $case['num'] . '_metric' . $m . '_value') }}</span>
                            <span class="case-metric-label">{{ __('index.case' . $case['num'] . '_metric' . $m . '_label') }}</span>
                        </div>
                        @endfor
                    </div>
                    <div class="case-card-practices">
                        <div class="case-card-practices__head">
                            <span>{{ __('index.case_stack_label') }}</span>
                            <small>{{ __('index.case_practice_hint') }}</small>
                        </div>
                        <div class="case-card-tech">
                            @foreach($case['stack'] as $tech)
                            <span>{{ $tech }}</span>
                            @endforeach
                        </div>
                        <div class="case-card-practices__label">{{ __('index.case_patterns_label') }}</div>
                        <div class="case-card-tech case-card-tech--patterns">
                            @foreach($case['patterns'] as $pattern)
                            <span>{{ $pattern }}</span>
                            @endforeach
                        </div>
                    </div>
                </div>
                @endforeach
            </div>

            <div class="section-cta">
                <a href="{{ route('landing.case-studies') }}" class="btn-primary-v5" data-ga-event="cta_click" data-ga-cta="cases_view_all">
                    <span>{{ __('index.case_view_more') }}</span>
                    <span class="material-symbols-rounded">arrow_forward</span>
                </a>
            </div>
        </div>
    </section>


    {{-- 8. TESTIMONIALS --}}
    <section id="testimonials" aria-labelledby="heading-testimonials" class="section-alt">
        <div class="container-v5">
            <div class="section-header">
                <span class="section-label">{{ __('index.section_testimonials') }}</span>
                <h2 id="heading-testimonials" class="section-title">{{ __('index.testimonials_title') }}</h2>
            </div>

            <div class="testimonials-grid">
                @for($t = 1; $t <= 2; $t++)
                <div class="testimonial-card">
                    <div class="testimonial-quote-mark">"</div>
                    <blockquote class="testimonial-text">{{ __('index.testimonial' . $t . '_quote') }}</blockquote>
                    <div class="testimonial-author">
                        <div class="testimonial-avatar" style="background: linear-gradient(135deg, {{ $t === 1 ? '#183060, #1a4585' : '#1a4585, #0F203D' }});">
                            {{ mb_substr(__('index.testimonial' . $t . '_name'), 0, 1) }}
                        </div>
                        <div>
                            <div class="testimonial-name">{{ __('index.testimonial' . $t . '_name') }}</div>
                            <div class="testimonial-role">{{ __('index.testimonial' . $t . '_title') }}</div>
                        </div>
                    </div>
                </div>
                @endfor
            </div>
        </div>
    </section>


    {{-- 9. CTA --}}
    <section id="cta" class="cta-banner" aria-labelledby="heading-cta">
        <div class="container-v5 cta-banner__inner">
            <span class="section-label cta-banner__label">{{ __('index.section_cta') }}</span>
            <h2 id="heading-cta" class="cta-banner__title">
                {{ __('index.cta_title') }}
            </h2>
            <p class="cta-banner__subtitle">
                {{ __('index.cta_subtitle') }}
            </p>
            <div class="cta-banner__buttons">
                <a href="{{ route('landing.contact') }}" class="btn-cta-white" data-ga-event="cta_click" data-ga-cta="bottom_consultation">
                    <span class="material-symbols-rounded">calendar_month</span>
                    <span>{{ __('index.cta_consultation') }}</span>
                </a>
                <a href="{{ route('landing.pricing') }}" class="btn-cta-ghost" data-ga-event="cta_click" data-ga-cta="bottom_pricing">
                    <span>{{ __('index.cta_pricing') }}</span>
                    <span class="material-symbols-rounded">arrow_forward</span>
                </a>
            </div>
        </div>
    </section>

@endsection
