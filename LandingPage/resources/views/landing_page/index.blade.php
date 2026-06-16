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
                "text": "HKIncotech is an enterprise software engineering company based in Southeast Asia. We build custom software, SaaS platforms, AI solutions, and provide security & compliance services for startups, scale-ups, and enterprises."
            }
        },
        {
            "@@type": "Question",
            "name": "How long does it take to build an MVP?",
            "acceptedAnswer": {
                "@@type": "Answer",
                "text": "MVP delivery typically takes 4-8 weeks using our SCRUM process with 2-week sprints and live demos every cycle. Full products take 4-12 months depending on complexity."
            }
        },
        {
            "@@type": "Question",
            "name": "What technologies does HKIncotech use?",
            "acceptedAnswer": {
                "@@type": "Answer",
                "text": "We use 50+ enterprise-grade technologies including React, Node.js, Python, AWS, Kubernetes, PostgreSQL, GPT-4, Flutter, and Terraform across 8 technology categories."
            }
        },
        {
            "@@type": "Question",
            "name": "Do I own the source code?",
            "acceptedAnswer": {
                "@@type": "Answer",
                "text": "Yes. Full IP and source code ownership belongs to you. No licensing fees, no royalties. You can walk away with everything at any time."
            }
        },
        {
            "@@type": "Question",
            "name": "What security certifications does HKIncotech have?",
            "acceptedAnswer": {
                "@@type": "Answer",
                "text": "We are ISO 27001, SOC 2 Type II, GDPR, PCI DSS, and HIPAA certified. Our team includes 8+ security experts and we follow OWASP standards with Zero Trust architecture."
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
            <div class="section-header">
                <span class="section-label">{{ __('index.section_services') }}</span>
                <h2 id="heading-services" class="section-title">{{ __('index.services_title') }}</h2>
                <p class="section-subtitle">{{ __('index.services_subtitle') }}</p>
            </div>

            <div class="grid-4col">
                @php
                $services = [
                    ['icon' => 'code', 'key' => 'custom', 'cta_key' => 'custom_cta'],
                    ['icon' => 'workspace_premium', 'key' => 'saas', 'cta_key' => 'saas_cta'],
                    ['icon' => 'psychology', 'key' => 'ai', 'cta_key' => 'ai_cta'],
                    ['icon' => 'shield', 'key' => 'security', 'cta_key' => 'security_cta'],
                ];
                @endphp

                @foreach($services as $svc)
                <div class="service-card">
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
                    <a href="{{ route('landing.services') }}" class="service-card__link" data-ga-event="service_explore" data-ga-service="{{ $svc['key'] }}">
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
                    ['key' => 'build', 'color' => '#3b82f6'],
                    ['key' => 'scale', 'color' => '#10b981'],
                    ['key' => 'secure', 'color' => '#8b5cf6'],
                    ['key' => 'ai', 'color' => '#f59e0b'],
                    ['key' => 'mfg', 'color' => '#ef4444'],
                    ['key' => 'ship', 'color' => '#06b6d4'],
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

            <div class="grid-3col">
                @php
                $whys = [
                    ['icon' => 'star', 'color' => '#3b82f6', 'key' => 'expertise'],
                    ['icon' => 'groups', 'color' => '#10b981', 'key' => 'team'],
                    ['icon' => 'bolt', 'color' => '#f59e0b', 'key' => 'fast'],
                    ['icon' => 'shield', 'color' => '#8b5cf6', 'key' => 'security'],
                    ['icon' => 'trending_up', 'color' => '#06b6d4', 'key' => 'scalable'],
                    ['icon' => 'handshake', 'color' => '#ef4444', 'key' => 'partnership'],
                ];
                @endphp
                @foreach($whys as $w)
                <div class="why-card">
                    <div class="why-card__icon" style="background: {{ $w['color'] }}12; color: {{ $w['color'] }};">
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
                    ['num' => '1', 'badge_color' => 'var(--primary)', 'badge_bg' => 'var(--primary-subtle)', 'techs' => ['PHP', 'REST API', 'PostgreSQL', 'React']],
                    ['num' => '2', 'badge_color' => '#10b981', 'badge_bg' => '#10b98115', 'techs' => ['Python', 'ML', 'PostgreSQL', 'React', 'Node.js']],
                    ['num' => '3', 'badge_color' => '#8b5cf6', 'badge_bg' => '#8b5cf615', 'techs' => ['Node.js', 'PostgreSQL', 'React', 'AWS', 'Microservices']],
                ];
                @endphp

                @foreach($cases as $case)
                <div class="case-card" data-ga-event="case_study_view" data-ga-case="{{ __('index.case' . $case['num'] . '_badge') }}">
                    <div class="case-card-badge" style="background: {{ $case['badge_bg'] }}; color: {{ $case['badge_color'] }};">{{ __('index.case' . $case['num'] . '_badge') }}</div>
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
                    <div class="case-card-tech">
                        @foreach($case['techs'] as $tech)
                        <span>{{ $tech }}</span>
                        @endforeach
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
                        <div class="testimonial-avatar" style="background: linear-gradient(135deg, {{ $t === 1 ? '#3b82f6, #2563eb' : '#10b981, #059669' }});">
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
