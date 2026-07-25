@extends('layouts.main')

@section('content')

    <!-- Hero -->
    <section class="page-hero-compact">
        @include('partials.hero-bg', ['flow' => 'wave'])
        <div class="container-v5">
            <div class="page-hero-compact__inner">
                <h1 class="page-hero-compact__title">
                    {{ __('services.hero_title') }}
                </h1>
                <p class="page-hero-compact__lead">
                    {{ __('services.hero_desc') }}
                </p>
                <p class="page-hero-compact__support">
                    {{ __('services.hero_subtitle') }}
                </p>
            </div>
        </div>
    </section>

    <!-- Services Grid Overview -->
    <section style="background: var(--surface);">
        <div class="container-v5">
            <div class="section-header">
                <span class="section-label">{{ __('services.section_services') }}</span>
                <h2 class="section-title">{{ __('services.overview_title') }}</h2>
                <p class="section-subtitle">{{ __('services.overview_subtitle') }}</p>
            </div>

            <div class="card-grid" style="--card-min: 280px; --card-max: 420px; --card-gap: 2rem;">
                @foreach(__('services.services') as $s)
                <div style="background: var(--surface); border: 1px solid var(--border); border-radius: var(--card-radius); padding: 2rem; text-align: center; transition: all 0.3s ease;" onmouseover="this.style.borderColor='var(--primary)'; this.style.boxShadow='0 12px 30px var(--shadow-hover)'; this.style.transform='translateY(-4px)';" onmouseout="this.style.borderColor='var(--border)'; this.style.boxShadow=''; this.style.transform='';">
                    <div style="display: inline-flex; align-items: center; justify-content: center; width: 50px; height: 50px; background: var(--button-primary-bg); color: var(--button-primary-text); border-radius: 50%; font-weight: 600; font-size: 1.3rem; margin-bottom: 1rem;">
                        {{ $loop->iteration }}
                    </div>
                    <div style="font-size: 2rem; color: var(--primary); margin-bottom: 1rem;">
                        <span class="material-symbols-rounded">
                            @switch($loop->iteration)
                                @case(1)
                                    code
                                    @break
                                @case(2)
                                    workspace_premium
                                    @break
                                @case(3)
                                    psychology
                                    @break
                                @case(4)
                                    shield
                                    @break
                            @endswitch
                        </span>
                    </div>
                    <h3 style="font-size: 1.15rem; font-weight: 600; color: var(--text-dark); margin-bottom: 0.75rem;">
                        {{ $s['title'] }}
                    </h3>
                    <p style="color: var(--text-gray); font-size: 0.95rem; line-height: 1.6;">
                        {{ $s['desc'] }}
                    </p>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- Service 1: Custom Software Development (DETAILED) -->
    <section class="custom-delivery-section">
        <div class="container-v5">
            <div class="section-header">
                <span class="section-label">{{ __('services.section_custom') }}</span>
                <h2 class="section-title">{{ __('services.service1.title') }}</h2>
                <p class="section-subtitle">{{ __('services.service1.subtitle') }}</p>
            </div>

            <div class="custom-delivery-stack">
                <article class="custom-process-panel">
                    <div class="custom-process-panel__intro">
                        <span class="custom-process-panel__icon material-symbols-rounded" aria-hidden="true">account_tree</span>
                        <h3>{{ __('services.service1.process_title') }}</h3>
                        <p>{{ __('services.service1.process_desc') }}</p>
                    </div>

                    <div class="custom-transparency-card">
                        <h4>{{ __('services.service1.transparency_title') }}</h4>
                        <ul class="custom-transparency-list">
                            <li class="custom-transparency-item">
                                <span class="custom-transparency-icon material-symbols-rounded" aria-hidden="true">verified</span>
                                <span><strong>{{ __('services.service1.sprint_planning_title') }}:</strong> {{ __('services.service1.sprint_planning_desc') }}</span>
                            </li>
                            <li class="custom-transparency-item">
                                <span class="custom-transparency-icon material-symbols-rounded" aria-hidden="true">visibility</span>
                                <span><strong>{{ __('services.service1.daily_updates_title') }}:</strong> {{ __('services.service1.daily_updates_desc') }}</span>
                            </li>
                            <li class="custom-transparency-item">
                                <span class="custom-transparency-icon material-symbols-rounded" aria-hidden="true">preview</span>
                                <span><strong>{{ __('services.service1.sprint_demo_title') }}:</strong> {{ __('services.service1.sprint_demo_desc') }}</span>
                            </li>
                            <li class="custom-transparency-item">
                                <span class="custom-transparency-icon material-symbols-rounded" aria-hidden="true">code</span>
                                <span><strong>{{ __('services.service1.code_quality_title') }}:</strong> {{ __('services.service1.code_quality_desc') }}</span>
                            </li>
                            <li class="custom-transparency-item">
                                <span class="custom-transparency-icon material-symbols-rounded" aria-hidden="true">track_changes</span>
                                <span><strong>{{ __('services.service1.full_visibility_title') }}:</strong> {{ __('services.service1.full_visibility_desc') }}</span>
                            </li>
                        </ul>
                    </div>
                </article>

                <article class="custom-scrum-panel">
                    <div class="custom-scrum-panel__head">
                        <div>
                            <span class="custom-scrum-panel__eyebrow">{{ __('services.service1.cycle_kicker') }}</span>
                            <h3>{{ __('services.service1.cycle_title') }}</h3>
                        </div>
                        <p>{{ __('services.service1.cycle_desc') }}</p>
                    </div>

                    @php($deliveryMap = __('services.service1.delivery_map'))
                    <div class="custom-scrum-flow" role="img" aria-label="{{ __('services.service1.cycle_title') }}">
                        <span class="custom-scrum-flow__line" aria-hidden="true"></span>
                        @foreach($deliveryMap as $index => $step)
                            <div class="custom-scrum-step {{ $index === 2 ? 'is-active' : '' }}">
                                <span class="custom-scrum-step__num">{{ $step['num'] }}</span>
                                <div class="custom-scrum-step__card">
                                    <h4>{{ $step['title'] }}</h4>
                                    <p>{{ $step['desc'] }}</p>
                                </div>
                            </div>
                        @endforeach
                    </div>

                    <div class="custom-scrum-governance">
                        <span class="material-symbols-rounded" aria-hidden="true">fact_check</span>
                        <strong>{{ __('services.service1.delivery_governance') }}</strong>
                    </div>
                </article>
            </div>

            <div class="services-tech-stack-block" style="background: var(--surface); border-radius: var(--card-radius); padding: 2.5rem; border: 1px solid var(--border);">
                <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 2rem;">
                    <div>
                        <h4 style="font-weight: 600; color: var(--text-dark); margin-bottom: 0.5rem;">{{ __('services.service1.tech_title') }}</h4>
                        <p style="color: var(--text-gray); font-size: 0.95rem; margin: 0;">{{ __('services.service1.tech_desc') }}</p>
                    </div>
                    <a href="{{ route('landing.tech-stack') }}" style="background: var(--button-primary-bg); color: var(--button-primary-text); padding: 0.75rem 1.5rem; border-radius: 8px; text-decoration: none; font-weight: 600; white-space: nowrap; display: inline-flex; align-items: center; gap: 0.5rem; transition: all 0.3s ease;" onmouseover="this.style.backgroundColor='var(--button-primary-hover-bg)';" onmouseout="this.style.backgroundColor='var(--button-primary-bg)';">
                        <span>{{ __('services.service1.view_details') }}</span>
                        <span class="material-symbols-rounded" style="font-size: 1.2rem;">arrow_forward</span>
                    </a>
                </div>

                <div class="card-grid" style="--card-min: 280px; --card-max: 420px; --card-gap: 2rem;">
                    @foreach(__('services.tech_categories') as $cat)
                    <div style="background: var(--secondary-bg); border-radius: 10px; padding: 1.5rem; transition: all 0.3s ease; border: 1px solid transparent;" onmouseover="this.style.borderColor='var(--primary)'; this.style.boxShadow='0 4px 12px rgba(0,0,0,0.08)';" onmouseout="this.style.borderColor='transparent'; this.style.boxShadow='';">
                        <div style="display: flex; align-items: center; gap: 0.75rem; margin-bottom: 1rem;">
                            <div class="services-tech-icon {{ $loop->even ? 'services-tech-icon--subtle' : '' }}">
                                <span class="material-symbols-rounded">
                                    @switch($loop->iteration)
                                        @case(1)
                                            web
                                        @break
                                        @case(2)
                                            storage
                                        @break
                                        @case(3)
                                            database
                                        @break
                                        @case(4)
                                            cloud
                                        @break
                                        @case(5)
                                            psychology
                                        @break
                                        @case(6)
                                            shield
                                        @break
                                    @endswitch
                                </span>
                            </div>
                            <h5 style="font-weight: 600; color: var(--text-dark); margin: 0; font-size: 1rem;">{{ $cat['title'] }}</h5>
                        </div>
                        <div style="display: flex; flex-wrap: wrap; gap: 0.5rem;">
                            @foreach($cat['techs'] as $tech)
                            <span style="background: var(--surface); border: 1px solid var(--border); padding: 0.4rem 0.75rem; border-radius: 6px; font-size: 0.85rem; color: var(--text-gray); font-weight: 500;">{{ $tech }}</span>
                            @endforeach
                        </div>
                    </div>
                    @endforeach
                </div>

                <div style="text-align: center; margin-top: 2rem; padding-top: 2rem; border-top: 1px solid var(--border);">
                    <p style="color: var(--text-gray); font-size: 0.95rem; margin-bottom: 1rem;">
                        <strong style="color: var(--primary);">{{ __('services.service1.tech_details') }}</strong> {{ __('services.service1.tech_details_full') }}
                    </p>
                    <a href="{{ route('landing.tech-stack') }}" style="color: var(--primary); font-weight: 600; text-decoration: none; display: inline-flex; align-items: center; gap: 0.5rem;" onmouseover="this.style.textDecoration='underline';" onmouseout="this.style.textDecoration='none';">
                        <span>{{ __('services.service1.view_tech_full') }}</span>
                        <span class="material-symbols-rounded" style="font-size: 1.2rem;">arrow_forward</span>
                    </a>
                </div>
            </div>
        </div>
    </section>


    <!-- AI Knowledge Platform -->
        <section style="background: var(--secondary-bg);">
            <div class="container-v5">
                <div class="section-header">
                    <span class="section-label">{{ __('services.section_ai') }}</span>
                    <h2 class="section-title">{{ __('services.ai.title') }}</h2>
                    <p class="section-subtitle">{{ __('services.ai.subtitle') }}</p>
                </div>

            <div style="text-align: center; margin: 0 auto 2rem; display: flex; justify-content: center;">
                <a href="#ai-how-it-works"
                   class="btn-secondary-v5"
                   style="text-decoration: none; align-items: center; gap: 0.55rem; white-space: nowrap;"
                   aria-label="{{ __('services.ai.see_how_it_works') }}">
                    {{ __('services.ai.see_how_it_works') }}
                    <span class="material-symbols-rounded" style="font-size: 1.1rem;">arrow_downward</span>
                </a>
            </div>

                <!-- Foundation Overview -->
                <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 3rem; align-items: center; margin-bottom: 3rem;">

                    <div style="background: var(--surface); border-radius: var(--card-radius); padding: 2.5rem; border: 1px solid var(--border);">
                        <h3 style="font-size: 1.1rem; font-weight: 600; color: var(--text-dark); margin-bottom: 1rem;">{{ __('services.ai.foundation_title') }}</h3>
                        <p style="color: var(--text-gray); line-height: 1.8; margin-bottom: 1rem;">
                            {{ __('services.ai.foundation_desc') }}
                        </p>
                        <ul style="list-style: none; margin: 0;">
                            @foreach(__('services.ai.foundation_items') as $item)
                            <li style="padding: 0.55rem 0; color: var(--text-gray); font-size: 0.95rem; padding-left: 1.75rem; position: relative;">
                                <span class="material-symbols-rounded" style="position: absolute; left: 0; color: var(--primary); font-size: 1.2rem; display: flex; align-items: center;">check_circle</span>
                                {{ $item }}
                            </li>
                            @endforeach
                        </ul>
                    </div>

                    <div class="position-relative" style="background: var(--surface); border-radius: var(--card-radius); padding: 1.5rem; border: 1px solid var(--border);">
                        <svg viewBox="0 0 420 300" style="width: 100%;">
                            <defs>
                                <filter id="llm-glow" x="-60%" y="-60%" width="220%" height="220%">
                                    <feGaussianBlur stdDeviation="5" result="blur"/>
                                    <feMerge>
                                        <feMergeNode in="blur"/>
                                        <feMergeNode in="SourceGraphic"/>
                                    </feMerge>
                                </filter>
                                <linearGradient id="flow-grad" x1="0%" y1="0%" x2="100%" y2="0%">
                                    <stop offset="0%" stop-color="var(--primary)"/>
                                    <stop offset="100%" stop-color="var(--primary-light)"/>
                                </linearGradient>
                            </defs>

                            <text x="12" y="22" font-size="10" fill="var(--text-dark)" font-weight="600">{{ __('services.ai.diagram_title') }}</text>

                            <!-- Node 1 -->
                            <rect x="12" y="54" width="74" height="56" rx="10" fill="var(--primary-subtle)" stroke="var(--border)"/>
                            <text x="49" y="74" text-anchor="middle" font-size="8" fill="var(--primary)" font-weight="600">{{ __('services.ai.diagram_data_title') }}</text>
                            <text x="49" y="90" text-anchor="middle" font-size="6.5" fill="var(--text-gray)">{{ __('services.ai.diagram_data_desc') }}</text>

                            <!-- Node 2 -->
                            <rect x="94" y="54" width="74" height="56" rx="10" fill="var(--primary-subtle)" stroke="var(--border)"/>
                            <text x="131" y="74" text-anchor="middle" font-size="8" fill="var(--primary)" font-weight="600">{{ __('services.ai.diagram_processing_title') }}</text>
                            <text x="131" y="90" text-anchor="middle" font-size="6.5" fill="var(--text-gray)">{{ __('services.ai.diagram_processing_desc') }}</text>

                            <!-- Node 3 -->
                            <rect x="176" y="54" width="74" height="56" rx="10" fill="var(--primary-subtle)" stroke="var(--border)"/>
                            <text x="213" y="74" text-anchor="middle" font-size="8" fill="var(--primary-light)" font-weight="600">{{ __('services.ai.diagram_vector_title') }}</text>
                            <text x="213" y="90" text-anchor="middle" font-size="6.5" fill="var(--text-gray)">{{ __('services.ai.diagram_vector_desc') }}</text>

                            <!-- Node 4 -->
                            <rect x="258" y="54" width="74" height="56" rx="10" fill="var(--secondary-bg)" stroke="var(--accent)"/>
                            <circle cx="295" cy="82" r="18" fill="var(--accent)" opacity="0.18" filter="url(#llm-glow)">
                                <animate attributeName="opacity" values="0.12;0.35;0.12" dur="2.2s" repeatCount="indefinite"/>
                            </circle>
                            <text x="295" y="74" text-anchor="middle" font-size="8" fill="var(--accent)" font-weight="600">{{ __('services.ai.diagram_llm_title') }}</text>
                            <text x="295" y="90" text-anchor="middle" font-size="6.5" fill="var(--text-gray)">{{ __('services.ai.diagram_llm_desc') }}</text>

                            <!-- Node 5 -->
                            <rect x="340" y="54" width="68" height="56" rx="10" fill="var(--primary-subtle)" stroke="var(--border)"/>
                            <text x="374" y="74" text-anchor="middle" font-size="8" fill="var(--primary)" font-weight="600">{{ __('services.ai.diagram_output_title') }}</text>
                            <text x="374" y="90" text-anchor="middle" font-size="6.5" fill="var(--text-gray)">{{ __('services.ai.diagram_output_desc') }}</text>

                            <!-- Flow line -->
                            <path id="data-flow-path" d="M 49 126 C 120 154, 304 154, 374 126" fill="none" stroke="url(#flow-grad)" stroke-width="2.5" stroke-linecap="round" opacity="0.75"/>
                            <circle r="4" fill="var(--primary)">
                                <animateMotion dur="2.6s" repeatCount="indefinite" rotate="auto">
                                    <mpath href="#data-flow-path"/>
                                </animateMotion>
                            </circle>

                            <!-- Mapping block -->
                            <rect x="12" y="170" width="396" height="112" rx="12" fill="var(--secondary-bg)" stroke="var(--border)"/>
                            <text x="24" y="190" font-size="9" fill="var(--text-dark)" font-weight="600">Platform Mapping</text>

                            <rect x="24" y="200" width="184" height="32" rx="8" fill="var(--surface)" stroke="var(--border)"/>
                            <text x="34" y="219" font-size="7.5" fill="var(--text-dark)" font-weight="600">{{ __('services.ai.diagram_ingestion_title') }}</text>
                            <text x="150" y="219" font-size="7" fill="var(--text-light)">{{ __('services.ai.diagram_ingestion_desc') }}</text>

                            <rect x="214" y="200" width="184" height="32" rx="8" fill="var(--surface)" stroke="var(--border)"/>
                            <text x="224" y="219" font-size="7.5" fill="var(--text-dark)" font-weight="600">{{ __('services.ai.diagram_search_title') }}</text>
                            <text x="294" y="219" font-size="7" fill="var(--text-light)">{{ __('services.ai.diagram_search_desc') }}</text>

                            <rect x="24" y="238" width="184" height="32" rx="8" fill="var(--surface)" stroke="var(--border)"/>
                            <text x="34" y="257" font-size="7.5" fill="var(--text-dark)" font-weight="600">{{ __('services.ai.diagram_routing_title') }}</text>
                            <text x="93" y="257" font-size="7" fill="var(--text-light)">{{ __('services.ai.diagram_routing_desc') }}</text>

                            <rect x="214" y="238" width="184" height="32" rx="8" fill="var(--surface)" stroke="var(--border)"/>
                            <text x="224" y="257" font-size="7.5" fill="var(--text-dark)" font-weight="600">{{ __('services.ai.diagram_rag_title') }}</text>
                            <text x="286" y="257" font-size="7" fill="var(--text-light)">{{ __('services.ai.diagram_rag_desc') }}</text>
                        </svg>
                    </div>
                </div>

                <!-- AI Capabilities Banner -->
                <div style="background: var(--contrast-panel-bg); border-radius: 16px; padding: 3rem 2rem; color: var(--contrast-panel-text); box-shadow: 0 12px 48px rgba(24, 48, 96, 0.25); margin-bottom: 2.5rem;">
                    <div style="max-width: 1200px; margin: 0 auto;">
                        <h3 style="font-size: 1.6rem; font-weight: 600; text-align: center; margin-bottom: 0.5rem;">{{ __('services.ai.capabilities_title') }}</h3>
                        <p style="text-align: center; font-size: 1.02rem; margin-bottom: 2rem; opacity: 0.95;">{{ __('services.ai.capabilities_desc') }}</p>
                        <div class="card-grid" style="--card-min: 260px; --card-max: 400px; --card-gap: 1.75rem;">
                            @foreach(__('services.ai.components') as $comp)
                            <div style="background: var(--contrast-glass-bg); border: 1px solid var(--contrast-glass-border); border-radius: var(--card-radius); padding: 1.5rem; backdrop-filter: blur(8px); transition: all 0.3s ease;" onmouseover="this.style.background='var(--contrast-glass-bg-hover)'; this.style.transform='translateY(-2px)';" onmouseout="this.style.background='var(--contrast-glass-bg)'; this.style.transform='';">
                                <div style="display: flex; align-items: center; gap: 0.75rem; margin-bottom: 0.75rem;">
                                    <span class="material-symbols-rounded" style="font-size: 1.7rem; color: var(--contrast-panel-text);">
                                        @switch($loop->iteration)
                                            @case(1)
                                                input
                                            @break
                                            @case(2)
                                                database
                                            @break
                                            @case(3)
                                                smart_toy
                                            @break
                                            @case(4)
                                                build_circle
                                            @break
                                            @case(5)
                                                security
                                            @break
                                            @case(6)
                                                monitoring
                                            @break
                                        @endswitch
                                    </span>
                                    <h4 style="font-size: 1.05rem; font-weight: 600; margin: 0; color: var(--contrast-panel-text);">{{ $comp['title'] }}</h4>
                                </div>
                                <p style="color: var(--contrast-panel-muted-strong); font-size: 0.9rem; line-height: 1.6; margin: 0;">{{ $comp['desc'] }}</p>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>

                <!-- Reference Tech Stack -->
                <div style="background: var(--surface); border-radius: var(--card-radius); padding: 2rem; border: 1px solid var(--border); margin-bottom: 2.5rem;">
                    <h3 style="font-size: 1.2rem; font-weight: 600; color: var(--text-dark); margin-bottom: 0.75rem;">{{ __('services.ai.reference_tech_title') }}</h3>
                    <p style="color: var(--text-gray); font-size: 0.95rem; line-height: 1.7;">
                        {{ __('services.ai.reference_tech_desc') }}
                    </p>
                </div>

                <!-- Example Flow -->
                <div style="background: var(--surface); border-radius: var(--card-radius); padding: 2rem; border: 1px solid var(--border);">
                    <h3 style="font-size: 1.2rem; font-weight: 600; color: var(--text-dark); margin-bottom: 1rem; text-align: center;">{{ __('services.ai.flow_title') }}</h3>
                    <div class="card-grid" style="--card-min: 260px; --card-max: 400px; --card-gap: 1rem;">
                        @foreach(__('services.ai.flow_steps') as $step)
                        <div style="display: flex; align-items: center; gap: 0.75rem; padding: 0.9rem 1rem; border: 1px solid var(--border); border-radius: 10px;">
                            <span class="material-symbols-rounded" style="font-size: 1.4rem; color: var(--primary);">
                                @switch($loop->iteration)
                                    @case(1)
                                        input
                                    @break
                                    @case(2)
                                        rule
                                    @break
                                    @case(3)
                                        fork_right
                                    @break
                                    @case(4)
                                        precision_manufacturing
                                    @break
                                    @case(5)
                                        outbox
                                    @break
                                @endswitch
                            </span>
                            <span style="font-weight: 600; color: var(--text-dark); font-size: 0.95rem;">{{ $step['text'] }}</span>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>

            <!-- How it works (new section) -->
            <section id="ai-how-it-works" style="scroll-margin-top: 120px; background: var(--surface); border-radius: var(--section-radius); padding: 3rem 2.5rem; border: 1px solid var(--border); margin-bottom: 4rem;">
                <div style="max-width: 1200px; margin: 0 auto;">
                    <div style="text-align: center; margin-bottom: 2rem;">
                        <h3 style="font-size: 1.6rem; font-weight: 600; color: var(--text-dark); margin-bottom: 0.75rem; letter-spacing: 0;">
                            {{ __('services.ai.how_it_works_title') }}
                        </h3>
                        <p style="color: var(--text-gray); font-size: 1.02rem; line-height: 1.8; margin: 0 auto; max-width: 760px;">
                            {{ __('services.ai.how_it_works_subtitle') }}
                        </p>
                    </div>

                    <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 2rem; align-items: start;">
                        <div style="background: var(--secondary-bg); border: 1px solid var(--border); border-radius: var(--card-radius); padding: 1.75rem;">
                                <h4 style="font-size: 1.05rem; font-weight: 600; color: var(--text-dark); margin-bottom: 1rem;">{{ __('services.ai.how_it_works_foundation_title') }}</h4>
                            <ul style="list-style: none; padding: 0; margin: 0; color: var(--text-gray); line-height: 1.9;">
                                @foreach(__('services.ai.foundation_items') as $item)
                                    <li style="display: flex; gap: 0.75rem; margin-bottom: 0.65rem;">
                                        <span class="material-symbols-rounded" style="color: var(--primary); font-size: 1.1rem; margin-top: 0.1rem; flex-shrink: 0;">check_circle</span>
                                        <span>{{ $item }}</span>
                                    </li>
                                @endforeach
                            </ul>
                        </div>

                        <div style="background: var(--surface); border: 1px solid var(--border); border-radius: var(--card-radius); padding: 1.75rem;">
                                <h4 style="font-size: 1.05rem; font-weight: 600; color: var(--text-dark); margin-bottom: 1rem;">{{ __('services.ai.how_it_works_flow_title') }}</h4>
                            <div style="display: grid; gap: 0.9rem;">
                                @foreach(__('services.ai.flow_steps') as $step)
                                    <div style="display: flex; align-items: center; gap: 0.9rem; padding: 0.9rem 1rem; border: 1px solid var(--border); border-radius: 12px;">
                                        <div style="width: 28px; height: 28px; border-radius: 10px; background: var(--primary-subtle); color: var(--primary); display: flex; align-items: center; justify-content: center; font-weight: 600;">
                                            {{ $loop->iteration }}
                                        </div>
                                        <div style="color: var(--text-gray); font-weight: 600;">
                                            {{ $step['text'] }}
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </section>

    <!-- Service 2: SaaS Platform -->
    <section style="background: linear-gradient(135deg, var(--secondary-bg) 0%, var(--surface) 100%);">
        <div class="container-v5">
            <div class="section-header">
                <span class="section-label">{{ __('services.section_saas') }}</span>
                <h2 class="section-title">{{ __('services.saas.title') }}</h2>
                <p class="section-subtitle">{{ __('services.saas.subtitle') }}</p>
            </div>

            <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 3rem; align-items: center; margin-bottom: 4rem;">
                <div class="position-relative" style="background: var(--surface); border-radius: var(--card-radius); padding: 1.5rem; border: 2px solid var(--primary); box-shadow: 0 8px 32px rgba(24, 48, 96, 0.15);">
                    <svg viewBox="0 0 420 300" style="width: 100%;">
                        <text x="12" y="22" font-size="10" fill="var(--text-dark)" font-weight="600">{{ __('services.saas.diagram_title') }}</text>

                        <!-- KPI row -->
                        <rect x="12" y="34" width="126" height="56" rx="10" fill="var(--primary-subtle)" stroke="var(--border)"/>
                        <text x="24" y="52" font-size="8" fill="var(--text-light)">{{ __('services.saas.diagram_workspace_label') }}</text>
                        <text x="24" y="72" font-size="14" fill="var(--primary)" font-weight="600">{{ __('services.saas.diagram_workspace_value') }}</text>
                        <rect x="146" y="34" width="126" height="56" rx="10" fill="var(--primary-subtle)" stroke="var(--border)"/>
                        <text x="158" y="52" font-size="8" fill="var(--text-light)">{{ __('services.saas.diagram_availability_label') }}</text>
                        <text x="158" y="72" font-size="14" fill="var(--primary-light)" font-weight="600">{{ __('services.saas.diagram_availability_value') }}</text>
                        <rect x="280" y="34" width="128" height="56" rx="10" fill="var(--secondary-bg)" stroke="var(--accent)"/>
                        <text x="292" y="52" font-size="8" fill="var(--text-light)">{{ __('services.saas.diagram_api_label') }}</text>
                        <text x="292" y="72" font-size="14" fill="var(--accent)" font-weight="600">{{ __('services.saas.diagram_api_value') }}</text>

                        <!-- Main modules -->
                        <rect x="12" y="106" width="128" height="84" rx="10" fill="var(--secondary-bg)" stroke="var(--border)"/>
                        <text x="24" y="126" font-size="9" fill="var(--text-dark)" font-weight="600">{{ __('services.saas.diagram_workspace_module') }}</text>
                        <text x="24" y="143" font-size="7" fill="var(--text-gray)">{{ __('services.saas.diagram_workspace_desc_1') }}</text>
                        <text x="24" y="156" font-size="7" fill="var(--text-gray)">{{ __('services.saas.diagram_workspace_desc_2') }}</text>

                        <rect x="146" y="106" width="128" height="84" rx="10" fill="var(--secondary-bg)" stroke="var(--border)"/>
                        <text x="158" y="126" font-size="9" fill="var(--text-dark)" font-weight="600">{{ __('services.saas.diagram_collab_module') }}</text>
                        <text x="158" y="143" font-size="7" fill="var(--text-gray)">{{ __('services.saas.diagram_collab_desc_1') }}</text>
                        <text x="158" y="156" font-size="7" fill="var(--text-gray)">{{ __('services.saas.diagram_collab_desc_2') }}</text>

                        <rect x="280" y="106" width="128" height="84" rx="10" fill="var(--secondary-bg)" stroke="var(--border)"/>
                        <text x="292" y="126" font-size="9" fill="var(--text-dark)" font-weight="600">{{ __('services.saas.diagram_billing_module') }}</text>
                        <text x="292" y="143" font-size="7" fill="var(--text-gray)">{{ __('services.saas.diagram_billing_desc_1') }}</text>
                        <text x="292" y="156" font-size="7" fill="var(--text-gray)">{{ __('services.saas.diagram_billing_desc_2') }}</text>

                        <!-- Tenant strip -->
                        <text x="12" y="212" font-size="9" fill="var(--text-dark)" font-weight="600">{{ __('services.saas.diagram_isolation') }}</text>
                        <rect x="12" y="220" width="396" height="60" rx="10" fill="var(--secondary-bg)" stroke="var(--border)"/>
                        <rect x="24" y="236" width="82" height="28" rx="8" fill="var(--primary)"/>
                        <text x="65" y="253" text-anchor="middle" font-size="8" fill="var(--contrast-panel-text)" font-weight="600">{{ __('services.saas.diagram_tenant_a') }}</text>
                        <rect x="116" y="236" width="82" height="28" rx="8" fill="var(--primary-light)"/>
                        <text x="157" y="253" text-anchor="middle" font-size="8" fill="var(--contrast-panel-text)" font-weight="600">{{ __('services.saas.diagram_tenant_b') }}</text>
                        <rect x="208" y="236" width="82" height="28" rx="8" fill="var(--primary-dark)"/>
                        <text x="249" y="253" text-anchor="middle" font-size="8" fill="var(--contrast-panel-text)" font-weight="600">{{ __('services.saas.diagram_tenant_c') }}</text>
                        <rect x="300" y="236" width="96" height="28" rx="8" fill="var(--surface)" stroke="var(--border)"/>
                        <text x="348" y="253" text-anchor="middle" font-size="8" fill="var(--text-gray)" font-weight="600">{{ __('services.saas.diagram_others') }}</text>
                    </svg>
                </div>

                <div>
                    <h3 style="font-size: 1.8rem; font-weight: 600; color: var(--text-dark); margin-bottom: 0.8rem; line-height: 1.25;">
                        {{ __('services.saas.platform_heading') }}
                    </h3>
                    <p style="color: var(--text-gray); line-height: 1.7; margin-bottom: 0.7rem; font-size: 1rem;">
                        {{ __('services.saas.platform_desc') }}
                    </p>
                    <p style="color: var(--text-gray); line-height: 1.7; margin-bottom: 1.4rem; font-size: 0.95rem;">
                        {{ __('services.saas.platform_note') }}
                    </p>
                    <div style="display: flex; flex-wrap: wrap; gap: 0.75rem; margin-bottom: 1.6rem;">
                        <a href="{{ route('landing.contact') }}" class="btn-primary-v5">{{ __('services.saas.platform_cta_primary') }}</a>
                        <a href="{{ route('landing.case-studies') }}" class="btn-secondary-v5">{{ __('services.saas.platform_cta_secondary') }}</a>
                    </div>

                    <div style="display: grid; gap: 1.5rem;">
                        @foreach(__('services.saas.ecosystem_items') as $item)
                        <div style="background: var(--surface); border-left: 4px solid var(--primary); padding: 1.25rem; border-radius: 6px;">
                            <h4 style="font-weight: 600; color: var(--text-dark); margin-bottom: 0.5rem;">{{ $item['title'] }}</h4>
                            <p style="color: var(--text-gray); font-size: 0.9rem; line-height: 1.6; margin: 0;">{{ $item['desc'] }}</p>
                        </div>
                        @endforeach
                        
                    </div>
                </div>
            </div>

            <!-- SaaS Capabilities Banner -->
            <div style="margin-bottom: 3rem;">
                <div style="text-align: center; margin-bottom: 2rem;">
                    <h3 style="font-size: 1.4rem; font-weight: 600; color: var(--text-dark); margin-bottom: 0.5rem;">{{ __('services.saas.ecosystem_title') }}</h3>
                </div>
                <div class="card-grid" style="--card-min: 300px; --card-max: 440px; --card-gap: 1.5rem; margin-bottom: 2rem;">
                    @foreach(__('services.saas.features') as $feature)
                    <div style="background: var(--surface); border: 1px solid var(--border); border-radius: var(--card-radius); padding: 1.75rem; transition: all 0.3s ease;" onmouseover="this.style.boxShadow='0 8px 24px rgba(24, 48, 96, 0.1)'; this.style.transform='translateY(-4px)';" onmouseout="this.style.boxShadow=''; this.style.transform='';">
                        <div style="display: flex; align-items: center; gap: 1rem; margin-bottom: 1rem;">
                            <div style="width: 48px; height: 48px; background: var(--secondary-bg); border-radius: 10px; display: flex; align-items: center; justify-content: center;">
                                <span class="material-symbols-rounded" style="color: var(--primary); font-size: 1.5rem;">{{ $feature['icon'] }}</span>
                            </div>
                            <h4 style="font-weight: 600; color: var(--text-dark); margin: 0; font-size: 1rem;">{{ $feature['title'] }}</h4>
                        </div>
                        <p style="color: var(--text-gray); font-size: 0.9rem; line-height: 1.6; margin: 0;">{{ $feature['desc'] }}</p>
                    </div>
                    @endforeach
                </div>
                <div class="card-grid" style="--card-min: 300px; --card-max: 440px; --card-gap: 1.5rem;">
                    @foreach(__('services.saas.saas_features') as $feature)
                    <div style="background: var(--surface); border: 1px solid var(--border); border-radius: var(--card-radius); padding: 1.75rem; transition: all 0.3s ease;" onmouseover="this.style.boxShadow='0 8px 24px rgba(24, 48, 96, 0.1)'; this.style.transform='translateY(-4px)';" onmouseout="this.style.boxShadow=''; this.style.transform='';">
                        <div style="display: flex; align-items: center; gap: 1rem; margin-bottom: 1rem;">
                            <div style="width: 48px; height: 48px; background: var(--secondary-bg); border-radius: 10px; display: flex; align-items: center; justify-content: center;">
                                <span class="material-symbols-rounded" style="color: var(--primary); font-size: 1.5rem;">{{ $feature['icon'] }}</span>
                            </div>
                            <h4 style="font-weight: 600; color: var(--text-dark); margin: 0; font-size: 1rem;">{{ $feature['title'] }}</h4>
                        </div>
                        <p style="color: var(--text-gray); font-size: 0.9rem; line-height: 1.6; margin: 0;">{{ $feature['desc'] }}</p>
                    </div>
                    @endforeach
                </div>
            </div>

            <!-- Why Choose Hoàng Khang Incotech for SaaS -->
            <div style="background: linear-gradient(135deg, var(--secondary-bg) 0%, var(--surface) 100%); border-radius: 16px; padding: 3rem; border: 1px solid var(--border);">
                <h3 style="font-size: 1.1rem; font-weight: 600; color: var(--text-dark); text-align: center; margin-bottom: 2rem;">{{ __('services.why_us.title') }}</h3>
                <div class="card-grid" style="--card-min: 300px; --card-max: 440px; --card-gap: 2rem;">
                    @foreach(__('services.why_us.highlights') as $highlight)
                    <div style="text-align: center;">
                        <h4 style="font-weight: 600; color: var(--primary); margin-bottom: 0.5rem;">{{ $highlight['title'] }}</h4>
                        <p style="color: var(--text-gray); font-size: 0.95rem; line-height: 1.6;">{{ $highlight['desc'] }}</p>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>

    <!-- Service 3: Security & Compliance -->
    <section style="background: var(--surface);">
        <div class="container-v5">
            <div class="section-header">
                <span class="section-label">{{ __('services.section_security') }}</span>
                <h2 class="section-title">{{ __('services.security.title') }}</h2>
                <p class="section-subtitle">{{ __('services.security.subtitle') }}</p>
            </div>

            <div style="background: var(--contrast-panel-bg); border-radius: 16px; padding: 2.5rem; color: var(--contrast-panel-text); margin-bottom: 2rem;">
                <p style="text-align: center; font-size: 1.1rem; margin-bottom: 0; font-weight: 600;">{{ __('services.security.standards') }}</p>
            </div>

            <div class="card-grid" style="--card-min: 300px; --card-max: 440px; --card-gap: 1.5rem;">
                @foreach(__('services.security.features') as $feature)
                <div style="background: var(--surface); border: 1px solid var(--border); border-radius: var(--card-radius); padding: 1.75rem;">
                    <h4 style="font-weight: 600; color: var(--text-dark); margin-bottom: 0.75rem;">{{ $feature['title'] }}</h4>
                    <p style="color: var(--text-gray); font-size: 0.9rem; line-height: 1.6; margin: 0;">{{ $feature['desc'] }}</p>
                </div>
                @endforeach
            </div>

            <div style="background: var(--secondary-bg); border-radius: var(--card-radius); padding: 2rem; margin-top: 2rem;">
                <h3 style="font-weight: 600; color: var(--text-dark); margin-bottom: 1rem;">{{ __('services.security.compliance_highlights_title') }}</h3>
                <ul class="card-grid" style="list-style: none; margin: 0; --card-min: 250px; --card-max: 390px; --card-gap: 1rem;">
                    @foreach(__('services.security.compliance_highlights') as $item)
                    <li style="color: var(--text-gray); display: flex; align-items: flex-start; gap: 0.75rem;">
                        <span class="material-symbols-rounded" style="color: var(--primary); font-size: 1.2rem; flex-shrink: 0; margin-top: 0.2rem;">check_circle</span>
                        <span>{{ $item }}</span>
                    </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </section>

    <!-- Engagement Models -->
    <section style="background: var(--secondary-bg);">
        <div class="container-v5">
            <div class="section-header">
                <span class="section-label">{{ __('services.section_engagement') }}</span>
                <h2 class="section-title">{{ __('services.engagement.title') }}</h2>
                <p class="section-subtitle">{{ __('services.engagement.subtitle') }}</p>
            </div>

            <div class="card-grid" style="--card-min: 320px; --card-max: 460px; --card-gap: 2rem;">
                @foreach(__('services.engagement.models') as $model)
                <div style="background: var(--surface); border: 1px solid var(--border); border-radius: var(--card-radius); padding: 2rem; text-align: center; transition: all 0.3s ease;" onmouseover="this.style.boxShadow='0 12px 30px rgba(24, 48, 96, 0.15)'; this.style.transform='translateY(-4px)';" onmouseout="this.style.boxShadow=''; this.style.transform='';">
                    <h3 style="font-size: 1.15rem; font-weight: 600; color: var(--text-dark); margin-bottom: 0.75rem;">{{ $model['title'] }}</h3>
                    <p style="color: var(--text-gray); font-size: 0.95rem; line-height: 1.6; margin-bottom: 1.5rem;">{{ $model['desc'] }}</p>
                    <div style="background: var(--secondary-bg); padding: 1rem; border-radius: 8px;">
                        <p style="color: var(--primary); font-weight: 600; margin: 0; font-size: 0.95rem;">{{ $model['timeline'] }}</p>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>

@endsection
