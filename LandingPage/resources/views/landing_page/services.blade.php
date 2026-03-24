@extends('layouts.main')

@section('content')

    <!-- Hero -->
    <section style="min-height: 70vh; display: flex; align-items: center; padding: 6rem 2rem; background: linear-gradient(135deg, #ffffff 0%, var(--secondary-bg) 100%);">
        <div class="container-v5">
            <div style="text-align: center; max-width: 900px; margin: 0 auto;">
                <h1 style="font-size: 3.5rem; font-weight: 800; line-height: 1.15; margin-bottom: 1.5rem; color: var(--text-dark);">
                    {{ __('services.hero_title') }}
                </h1>
                <p style="font-size: 1.15rem; color: var(--text-gray); line-height: 1.8; margin-bottom: 1.5rem;">
                    {{ __('services.hero_desc') }}
                </p>
                <p style="font-size: 1rem; color: var(--text-gray); margin-bottom: 2rem;">
                    {{ __('services.hero_subtitle') }}
                </p>
            </div>
        </div>
    </section>

    <!-- Services Grid Overview -->
    <section style="background: white;">
        <div class="container-v5">
            <div class="section-header">
                <h2 class="section-title">{{ __('services.overview_title') }}</h2>
                <p class="section-subtitle">{{ __('services.overview_subtitle') }}</p>
            </div>

            <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(280px, 1fr)); gap: 2rem;">
                @foreach(__('services.services') as $s)
                <div style="background: white; border: 1px solid var(--border); border-radius: 12px; padding: 2rem; text-align: center; transition: all 0.3s ease;" onmouseover="this.style.borderColor='var(--primary)'; this.style.boxShadow='0 12px 30px rgba(15, 107, 158, 0.12)'; this.style.transform='translateY(-4px)';" onmouseout="this.style.borderColor='var(--border)'; this.style.boxShadow=''; this.style.transform='';">
                    <div style="display: inline-flex; align-items: center; justify-content: center; width: 50px; height: 50px; background: var(--primary); color: white; border-radius: 50%; font-weight: 800; font-size: 1.3rem; margin-bottom: 1rem;">
                        {{ $loop->iteration }}
                    </div>
                    <div style="font-size: 2.5rem; color: var(--primary); margin-bottom: 1rem;">
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
                    <h3 style="font-size: 1.15rem; font-weight: 700; color: var(--text-dark); margin-bottom: 0.75rem;">
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
    <section style="background: var(--secondary-bg);">
        <div class="container-v5">
            <div class="section-header">
                <h2 class="section-title">{{ __('services.service1.title') }}</h2>
                <p class="section-subtitle">{{ __('services.service1.subtitle') }}</p>
            </div>

            <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 3rem; align-items: center; margin-bottom: 4rem;">
                <div style="background: white; border-radius: 12px; padding: 2.5rem; border: 1px solid var(--border);">
                    <h3 style="font-size: 1.3rem; font-weight: 700; color: var(--text-dark); margin-bottom: 1.5rem;">{{ __('services.service1.process_title') }}</h3>
                    <p style="color: var(--text-gray); line-height: 1.8; margin-bottom: 1.5rem;">
                        {{ __('services.service1.process_desc') }}
                    </p>
                    <div style="background: var(--secondary-bg); padding: 1.5rem; border-radius: 8px; margin-bottom: 1.5rem;">
                        <h4 style="font-size: 1.1rem; font-weight: 700; color: var(--primary); margin-bottom: 1rem;">{{ __('services.service1.transparency_title') }}</h4>
                        <ul style="list-style: none; margin: 0;">
                            <li style="padding: 0.5rem 0; color: var(--text-gray); display: flex; align-items: flex-start; gap: 0.75rem;">
                                <span class="material-symbols-rounded" style="color: var(--primary); font-size: 1.2rem; flex-shrink: 0;">verified</span>
                                <span><strong>{{ __('services.service1.sprint_planning_title') }}:</strong> {{ __('services.service1.sprint_planning_desc') }}</span>
                            </li>
                            <li style="padding: 0.5rem 0; color: var(--text-gray); display: flex; align-items: flex-start; gap: 0.75rem;">
                                <span class="material-symbols-rounded" style="color: var(--primary); font-size: 1.2rem; flex-shrink: 0;">visibility</span>
                                <span><strong>{{ __('services.service1.daily_updates_title') }}:</strong> {{ __('services.service1.daily_updates_desc') }}</span>
                            </li>
                            <li style="padding: 0.5rem 0; color: var(--text-gray); display: flex; align-items: flex-start; gap: 0.75rem;">
                                <span class="material-symbols-rounded" style="color: var(--primary); font-size: 1.2rem; flex-shrink: 0;">preview</span>
                                <span><strong>{{ __('services.service1.sprint_demo_title') }}:</strong> {{ __('services.service1.sprint_demo_desc') }}</span>
                            </li>
                            <li style="padding: 0.5rem 0; color: var(--text-gray); display: flex; align-items: flex-start; gap: 0.75rem;">
                                <span class="material-symbols-rounded" style="color: var(--primary); font-size: 1.2rem; flex-shrink: 0;">code</span>
                                <span><strong>{{ __('services.service1.code_quality_title') }}:</strong> {{ __('services.service1.code_quality_desc') }}</span>
                            </li>
                            <li style="padding: 0.5rem 0; color: var(--text-gray); display: flex; align-items: flex-start; gap: 0.75rem;">
                                <span class="material-symbols-rounded" style="color: var(--primary); font-size: 1.2rem; flex-shrink: 0;">track_changes</span>
                                <span><strong>{{ __('services.service1.full_visibility_title') }}:</strong> {{ __('services.service1.full_visibility_desc') }}</span>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="opacity-75" style="background: white; border-radius: 12px; padding: 2.5rem; border: 1px solid var(--border);">
                    <h3 style="font-size: 1.3rem; font-weight: 700; color: var(--text-dark); margin-bottom: 1.5rem;">{{ __('services.service1.cycle_title') }}
                        <span class="badge  rounded-pill bg-warning">
                            <span class="spinner-border spinner-border-sm me-1" role="status">
                                <span class="visually-hidden">Loading...</span>
                            </span>
                            Update Diagram
                        </span>

                    </h3>
                    <svg viewBox="0 0 300 280" style="width: 100%; max-width: 300px; margin: 0 auto; display: block;">
                        <!-- Sprint Cycle Circle -->
                        <circle cx="150" cy="140" r="90" fill="none" stroke="#e5e7eb" stroke-width="3"/>

                        <!-- Planning -->
                        <circle cx="150" cy="50" r="25" fill="#0f6b9e"/>
                        <text x="150" y="50" text-anchor="middle" font-size="10" fill="white" font-weight="bold" dy="5">Planning</text>

                        <!-- Development -->
                        <circle cx="235" cy="100" r="25" fill="#10b981"/>
                        <text x="235" y="100" text-anchor="middle" font-size="10" fill="white" font-weight="bold" dy="5">Dev</text>

                        <!-- Testing -->
                        <circle cx="235" cy="180" r="25" fill="#f59e0b"/>
                        <text x="235" y="180" text-anchor="middle" font-size="10" fill="white" font-weight="bold" dy="5">Testing</text>

                        <!-- Demo/Review -->
                        <circle cx="150" cy="230" r="25" fill="#7c3aed"/>
                        <text x="150" y="230" text-anchor="middle" font-size="10" fill="white" font-weight="bold" dy="5">Demo</text>

                        <!-- Deploy -->
                        <circle cx="65" cy="180" r="25" fill="#059669"/>
                        <text x="65" y="180" text-anchor="middle" font-size="10" fill="white" font-weight="bold" dy="5">Deploy</text>

                        <!-- Retrospective -->
                        <circle cx="65" cy="100" r="25" fill="#0f6b9e" opacity="0.7"/>
                        <text x="65" y="100" text-anchor="middle" font-size="10" fill="white" font-weight="bold" dy="5">Retro</text>

                        <!-- Center: 2 weeks -->
                        <text x="150" y="135" text-anchor="middle" font-size="14" fill="#0f6b9e" font-weight="bold">{{ __('services.service1.cycle_2week') }}</text>
                        <text x="150" y="152" text-anchor="middle" font-size="13" fill="#059669" font-weight="bold">{{ __('services.service1.cycle_sprint') }}</text>

                        <!-- Arrows -->
                        <path d="M 150 75 L 150 85" stroke="#0f6b9e" stroke-width="2" marker-end="url(#arrowhead)"/>
                        <defs>
                            <marker id="arrowhead" markerWidth="10" markerHeight="10" refX="5" refY="3" orient="auto">
                                <polygon points="0 0, 5 3, 0 6" fill="#0f6b9e" />
                            </marker>
                        </defs>
                    </svg>
                    <p style="text-align: center; color: var(--text-gray); font-size: 0.9rem; margin-top: 1rem; line-height: 1.6;">
                        {{ __('services.service1.cycle_desc') }}
                    </p>
                </div>
            </div>

            <div style="background: white; border-radius: 12px; padding: 2.5rem; border: 1px solid var(--border);">
                <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 2rem;">
                    <div>
                        <h4 style="font-weight: 700; color: var(--text-dark); margin-bottom: 0.5rem;">{{ __('services.service1.tech_title') }}</h4>
                        <p style="color: var(--text-gray); font-size: 0.95rem; margin: 0;">{{ __('services.service1.tech_desc') }}</p>
                    </div>
                    <a href="{{ route('landing.tech-stack') }}" style="background: var(--primary); color: white; padding: 0.75rem 1.5rem; border-radius: 8px; text-decoration: none; font-weight: 600; white-space: nowrap; display: inline-flex; align-items: center; gap: 0.5rem; transition: all 0.3s ease;" onmouseover="this.style.backgroundColor='#0a5a82';" onmouseout="this.style.backgroundColor='var(--primary)';">
                        <span>{{ __('services.service1.view_details') }}</span>
                        <span class="material-symbols-rounded" style="font-size: 1.2rem;">arrow_forward</span>
                    </a>
                </div>

                <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(280px, 1fr)); gap: 2rem;">
                    @foreach(__('services.tech_categories') as $cat)
                    <div style="background: var(--secondary-bg); border-radius: 10px; padding: 1.5rem; transition: all 0.3s ease;" onmouseover="this.style.backgroundColor='white'; this.style.boxShadow='0 4px 12px rgba(0,0,0,0.08)';" onmouseout="this.style.backgroundColor='var(--secondary-bg)'; this.style.boxShadow='';">
                        <div style="display: flex; align-items: center; gap: 0.75rem; margin-bottom: 1rem;">
                            <div style="width: 40px; height: 40px; background: @switch($loop->iteration)
                                @case(1)
                                    #0f6b9e
                                @break
                                @case(2)
                                    #059669
                                @break
                                @case(3)
                                    #10b981
                                @break
                                @case(4)
                                    #0f6b9e
                                @break
                                @case(5)
                                    #7c3aed
                                @break
                                @case(6)
                                    #059669
                                @break
                            @endswitch; border-radius: 8px; display: flex; align-items: center; justify-content: center;">
                                <span class="material-symbols-rounded" style="color: white; font-size: 1.5rem;">
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
                            <h5 style="font-weight: 700; color: var(--text-dark); margin: 0; font-size: 1rem;">{{ $cat['title'] }}</h5>
                        </div>
                        <div style="display: flex; flex-wrap: wrap; gap: 0.5rem;">
                            @foreach($cat['techs'] as $tech)
                            <span style="background: white; border: 1px solid var(--border); padding: 0.4rem 0.75rem; border-radius: 6px; font-size: 0.85rem; color: var(--text-gray); font-weight: 500;">{{ $tech }}</span>
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
                    <h2 class="section-title">{{ __('services.ai.title') }}</h2>
                    <p class="section-subtitle">{{ __('services.ai.subtitle') }}</p>
                </div>

                <!-- Foundation Overview -->
                <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 3rem; align-items: center; margin-bottom: 3rem;">

                    <div style="background: white; border-radius: 12px; padding: 2.5rem; border: 1px solid var(--border);">
                        <h3 style="font-size: 1.3rem; font-weight: 700; color: var(--text-dark); margin-bottom: 1rem;">{{ __('services.ai.foundation_title') }}</h3>
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

                    <div class="position-relative opacity-75" style="background: white; border-radius: 12px; padding: 2.5rem; border: 1px solid var(--border); text-align: center;">
                        <span class="badge  rounded-pill bg-warning position-absolute fs-6 top-0 mt-3 start-0 ms-3">
                            <span class="spinner-border spinner-border-sm me-1" role="status">
                                <span class="visually-hidden">Loading...</span>
                            </span>
                            Update Diagram
                        </span>
                        <svg viewBox="0 0 280 280" style="width: 100%; max-width: 280px;">
                            <!-- Query -->
                            <rect x="120" y="40" width="40" height="25" fill="#0ea5e9" rx="6"/>
                            <text x="140" y="57" text-anchor="middle" font-size="10" fill="white" font-weight="bold">Query</text>

                            <!-- NLP -->
                            <circle cx="140" cy="90" r="18" fill="#f59e0b"/>
                            <text x="140" y="95" text-anchor="middle" font-size="9" fill="white" font-weight="bold">NLP</text>
                            <text x="140" y="106" text-anchor="middle" font-size="8" fill="white" opacity="0.9">Processing</text>

                            <!-- Branches -->
                            <rect x="30" y="140" width="80" height="35" fill="#10b981" rx="8"/>
                            <text x="70" y="160" text-anchor="middle" font-size="9" fill="white" font-weight="bold">Vector DB</text>
                            <text x="70" y="170" text-anchor="middle" font-size="8" fill="white">Storage</text>

                            <circle cx="140" cy="160" r="22" fill="#059669"/>
                            <text x="140" y="160" text-anchor="middle" font-size="9" fill="white" font-weight="bold">LLM</text>
                            <text x="140" y="172" text-anchor="middle" font-size="8" fill="white" opacity="0.9">Generation</text>

                            <rect x="200" y="140" width="60" height="35" fill="#8b5cf6" rx="8"/>
                            <text x="230" y="160" text-anchor="middle" font-size="9" fill="white" font-weight="bold">RAG</text>
                            <text x="230" y="170" text-anchor="middle" font-size="8" fill="white">Pipeline</text>

                            <!-- Output -->
                            <rect x="110" y="240" width="60" height="25" fill="#0ea5e9" rx="6"/>
                            <text x="140" y="257" text-anchor="middle" font-size="9" fill="white" font-weight="bold">Intelligent Response</text>

                            <!-- Lines -->
                            <line x1="140" y1="65" x2="140" y2="72" stroke="#0ea5e9" stroke-width="2"/>
                            <line x1="140" y1="85" x2="50" y2="150" stroke="#059669" stroke-width="2"/>
                            <line x1="140" y1="85" x2="140" y2="140" stroke="#059669" stroke-width="2"/>
                            <line x1="140" y1="85" x2="230" y2="150" stroke="#059669" stroke-width="2"/>
                            <line x1="140" y1="210" x2="140" y2="240" stroke="#0f6b9e" stroke-width="2"/>
                        </svg>
                    </div>
                </div>

                <!-- AI Capabilities Banner -->
                <div style="background: linear-gradient(135deg, var(--primary) 0%, #0a4a78 100%); border-radius: 16px; padding: 3rem 2rem; color: white; box-shadow: 0 12px 48px rgba(15, 107, 158, 0.25); margin-bottom: 2.5rem;">
                    <div style="max-width: 1200px; margin: 0 auto;">
                        <h3 style="font-size: 1.6rem; font-weight: 800; text-align: center; margin-bottom: 0.5rem;">{{ __('services.ai.capabilities_title') }}</h3>
                        <p style="text-align: center; font-size: 1.02rem; margin-bottom: 2rem; opacity: 0.95;">{{ __('services.ai.capabilities_desc') }}</p>
                        <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(260px, 1fr)); gap: 1.75rem;">
                            @foreach(__('services.ai.components') as $comp)
                            <div style="background: rgba(255,255,255,0.12); border: 1px solid rgba(255,255,255,0.25); border-radius: 12px; padding: 1.5rem; backdrop-filter: blur(8px); transition: all 0.3s ease;" onmouseover="this.style.background='rgba(255,255,255,0.18)'; this.style.transform='translateY(-2px)';" onmouseout="this.style.background='rgba(255,255,255,0.12)'; this.style.transform='';">
                                <div style="display: flex; align-items: center; gap: 0.75rem; margin-bottom: 0.75rem;">
                                    <span class="material-symbols-rounded" style="font-size: 1.7rem; color: #fbbf24;">
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
                                    <h4 style="font-size: 1.05rem; font-weight: 700; margin: 0; color: white;">{{ $comp['title'] }}</h4>
                                </div>
                                <p style="color: rgba(255,255,255,0.92); font-size: 0.9rem; line-height: 1.6; margin: 0;">{{ $comp['desc'] }}</p>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>

                <!-- Reference Tech Stack -->
                <div style="background: white; border-radius: 12px; padding: 2rem; border: 1px solid var(--border); margin-bottom: 2.5rem;">
                    <h3 style="font-size: 1.2rem; font-weight: 800; color: var(--text-dark); margin-bottom: 0.75rem;">{{ __('services.ai.reference_tech_title') }}</h3>
                    <p style="color: var(--text-gray); font-size: 0.95rem; line-height: 1.7;">
                        {{ __('services.ai.reference_tech_desc') }}
                    </p>
                </div>

                <!-- Example Flow -->
                <div style="background: white; border-radius: 12px; padding: 2rem; border: 1px solid var(--border);">
                    <h3 style="font-size: 1.2rem; font-weight: 800; color: var(--text-dark); margin-bottom: 1rem; text-align: center;">{{ __('services.ai.flow_title') }}</h3>
                    <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(260px, 1fr)); gap: 1rem;">
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
        </section>

    <!-- Service 2: SaaS Platform -->
    <section style="background: linear-gradient(135deg, var(--secondary-bg) 0%, white 100%);">
        <div class="container-v5">
            <div class="section-header">
                <h2 class="section-title">{{ __('services.saas.title') }}</h2>
                <p class="section-subtitle">{{ __('services.saas.subtitle') }}</p>
            </div>

            <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 3rem; align-items: center; margin-bottom: 4rem;">
                <div class="position-relative opacity-75" style="background: white; border-radius: 12px; padding: 2.5rem; border: 2px solid var(--primary); box-shadow: 0 8px 32px rgba(15, 107, 158, 0.15);">
                    <span class="badge  rounded-pill bg-warning position-absolute fs-6 top-0 mt-3 start-0 ms-3">
                        <span class="spinner-border spinner-border-sm me-1" role="status">
                            <span class="visually-hidden">Loading...</span>
                        </span>
                        Update Diagram
                    </span>
                    <svg viewBox="0 0 280 280" style="width: 100%; max-width: 280px;">
                        <!-- Multiple users -->
                        <circle cx="60" cy="60" r="15" fill="#0f6b9e" opacity="0.7"/>
                        <circle cx="100" cy="40" r="15" fill="#0f6b9e" opacity="0.7"/>
                        <circle cx="140" cy="35" r="15" fill="#0f6b9e" opacity="0.7"/>
                        <circle cx="180" cy="50" r="15" fill="#0f6b9e" opacity="0.7"/>
                        <circle cx="210" cy="85" r="15" fill="#0f6b9e" opacity="0.7"/>

                        <!-- Central Platform -->
                        <rect x="80" y="120" width="120" height="80" fill="#0f6b9e" rx="8"/>
                        <text x="140" y="155" text-anchor="middle" font-size="12" fill="white" font-weight="bold">Multi-Tenant</text>
                        <text x="140" y="170" text-anchor="middle" font-size="12" fill="white" font-weight="bold">Platform</text>

                        <!-- Database -->
                        <rect x="100" y="240" width="80" height="20" fill="#10b981" rx="4"/>
                        <text x="140" y="253" text-anchor="middle" font-size="9" fill="white" font-weight="bold">Shared Infrastructure</text>

                        <!-- Connections -->
                        <line x1="80" y1="75" x2="100" y2="125" stroke="#0ea5e9" stroke-width="2" stroke-dasharray="4"/>
                        <line x1="120" y1="55" x2="110" y2="125" stroke="#0ea5e9" stroke-width="2" stroke-dasharray="4"/>
                        <line x1="140" y1="50" x2="140" y2="125" stroke="#0ea5e9" stroke-width="2" stroke-dasharray="4"/>
                        <line x1="160" y1="60" x2="170" y2="125" stroke="#0ea5e9" stroke-width="2" stroke-dasharray="4"/>
                        <line x1="200" y1="100" x2="180" y2="125" stroke="#0ea5e9" stroke-width="2" stroke-dasharray="4"/>
                        <line x1="140" y1="200" x2="140" y2="240" stroke="#059669" stroke-width="2"/>
                    </svg>
                </div>

                <div>
                    <h3 style="font-size: 1.3rem; font-weight: 700; color: var(--text-dark); margin-bottom: 1rem;">{{ __('services.saas.hkspace_title') }}</h3>
                    <p style="color: var(--text-gray); line-height: 1.8; margin-bottom: 1.5rem;">
                        {{ __('services.saas.subtitle') }}
                    </p>

                    <div style="display: grid; gap: 1.5rem;">
                        @foreach(__('services.saas.ecosystem_items') as $item)
                        <div style="background: white; border-left: 4px solid var(--primary); padding: 1.25rem; border-radius: 6px;">
                            <h4 style="font-weight: 700; color: var(--text-dark); margin-bottom: 0.5rem;">{{ $item['title'] }}</h4>
                            <p style="color: var(--text-gray); font-size: 0.9rem; line-height: 1.6; margin: 0;">{{ $item['desc'] }}</p>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>

            <!-- SaaS Capabilities Banner -->
            <div style="margin-bottom: 3rem;">
                <div style="text-align: center; margin-bottom: 2rem;">
                    <h3 style="font-size: 1.4rem; font-weight: 800; color: var(--text-dark); margin-bottom: 0.5rem;">{{ __('services.saas.ecosystem_title') }}</h3>
                </div>
                <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 1.5rem; margin-bottom: 2rem;">
                    @foreach(__('services.saas.features') as $feature)
                    <div style="background: white; border: 1px solid var(--border); border-radius: 12px; padding: 1.75rem; transition: all 0.3s ease;" onmouseover="this.style.boxShadow='0 8px 24px rgba(15, 107, 158, 0.1)'; this.style.transform='translateY(-4px)';" onmouseout="this.style.boxShadow=''; this.style.transform='';">
                        <div style="display: flex; align-items: center; gap: 1rem; margin-bottom: 1rem;">
                            <div style="width: 48px; height: 48px; background: var(--secondary-bg); border-radius: 10px; display: flex; align-items: center; justify-content: center;">
                                <span class="material-symbols-rounded" style="color: var(--primary); font-size: 1.5rem;">{{ $feature['icon'] }}</span>
                            </div>
                            <h4 style="font-weight: 700; color: var(--text-dark); margin: 0; font-size: 1rem;">{{ $feature['title'] }}</h4>
                        </div>
                        <p style="color: var(--text-gray); font-size: 0.9rem; line-height: 1.6; margin: 0;">{{ $feature['desc'] }}</p>
                    </div>
                    @endforeach
                </div>
                <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 1.5rem;">
                    @foreach(__('services.saas.saas_features') as $feature)
                    <div style="background: white; border: 1px solid var(--border); border-radius: 12px; padding: 1.75rem; transition: all 0.3s ease;" onmouseover="this.style.boxShadow='0 8px 24px rgba(15, 107, 158, 0.1)'; this.style.transform='translateY(-4px)';" onmouseout="this.style.boxShadow=''; this.style.transform='';">
                        <div style="display: flex; align-items: center; gap: 1rem; margin-bottom: 1rem;">
                            <div style="width: 48px; height: 48px; background: var(--secondary-bg); border-radius: 10px; display: flex; align-items: center; justify-content: center;">
                                <span class="material-symbols-rounded" style="color: var(--primary); font-size: 1.5rem;">{{ $feature['icon'] }}</span>
                            </div>
                            <h4 style="font-weight: 700; color: var(--text-dark); margin: 0; font-size: 1rem;">{{ $feature['title'] }}</h4>
                        </div>
                        <p style="color: var(--text-gray); font-size: 0.9rem; line-height: 1.6; margin: 0;">{{ $feature['desc'] }}</p>
                    </div>
                    @endforeach
                </div>
            </div>

            <!-- Why Choose HKIncotech for SaaS -->
            <div style="background: linear-gradient(135deg, var(--secondary-bg) 0%, white 100%); border-radius: 16px; padding: 3rem; border: 1px solid var(--border);">
                <h3 style="font-size: 1.3rem; font-weight: 800; color: var(--text-dark); text-align: center; margin-bottom: 2rem;">{{ __('services.why_us.title') }}</h3>
                <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 2rem;">
                    @foreach(__('services.why_us.highlights') as $highlight)
                    <div style="text-align: center;">
                        <h4 style="font-weight: 700; color: var(--primary); margin-bottom: 0.5rem;">{{ $highlight['title'] }}</h4>
                        <p style="color: var(--text-gray); font-size: 0.95rem; line-height: 1.6;">{{ $highlight['desc'] }}</p>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>

    <!-- Service 3: Security & Compliance -->
    <section style="background: white;">
        <div class="container-v5">
            <div class="section-header">
                <h2 class="section-title">{{ __('services.security.title') }}</h2>
                <p class="section-subtitle">{{ __('services.security.subtitle') }}</p>
            </div>

            <div style="background: linear-gradient(135deg, var(--primary) 0%, #0a4a78 100%); border-radius: 16px; padding: 2.5rem; color: white; margin-bottom: 2rem;">
                <p style="text-align: center; font-size: 1.1rem; margin-bottom: 0; font-weight: 600;">{{ __('services.security.standards') }}</p>
            </div>

            <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 1.5rem;">
                @foreach(__('services.security.features') as $feature)
                <div style="background: white; border: 1px solid var(--border); border-radius: 12px; padding: 1.75rem;">
                    <h4 style="font-weight: 700; color: var(--text-dark); margin-bottom: 0.75rem;">{{ $feature['title'] }}</h4>
                    <p style="color: var(--text-gray); font-size: 0.9rem; line-height: 1.6; margin: 0;">{{ $feature['desc'] }}</p>
                </div>
                @endforeach
            </div>

            <div style="background: var(--secondary-bg); border-radius: 12px; padding: 2rem; margin-top: 2rem;">
                <h3 style="font-weight: 700; color: var(--text-dark); margin-bottom: 1rem;">Compliance Highlights</h3>
                <ul style="list-style: none; margin: 0; display: grid; grid-template-columns: repeat(auto-fit, minmax(250px, 1fr)); gap: 1rem;">
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
                <h2 class="section-title">{{ __('services.engagement.title') }}</h2>
                <p class="section-subtitle">{{ __('services.engagement.subtitle') }}</p>
            </div>

            <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(320px, 1fr)); gap: 2rem;">
                @foreach(__('services.engagement.models') as $model)
                <div style="background: white; border: 1px solid var(--border); border-radius: 12px; padding: 2rem; text-align: center; transition: all 0.3s ease;" onmouseover="this.style.boxShadow='0 12px 30px rgba(15, 107, 158, 0.15)'; this.style.transform='translateY(-4px)';" onmouseout="this.style.boxShadow=''; this.style.transform='';">
                    <h3 style="font-size: 1.15rem; font-weight: 700; color: var(--text-dark); margin-bottom: 0.75rem;">{{ $model['title'] }}</h3>
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
