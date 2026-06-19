@extends('layouts.main')

@section('content')
    <!-- Hero -->
    <section style="min-height: 60vh; display: flex; align-items: center; padding: 6rem 2rem; background: linear-gradient(135deg, var(--surface) 0%, var(--secondary-bg) 100%);">
        <div class="container-v5">
            <div style="text-align: center; max-width: 900px; margin: 0 auto;">
                <h1 style="font-size: 2.75rem; font-weight: 800; line-height: 1.15; margin-bottom: 1.5rem; color: var(--text-dark);">
                    {{ __('tech_stack.hero_title') }}
                </h1>
                <p style="font-size: 1.15rem; color: var(--text-gray); line-height: 1.8; margin-bottom: 2rem;">
                    {{ __('tech_stack.hero_desc') }}
                </p>
            </div>
        </div>
    </section>

    <!-- Tech Stack Matrix -->
    <section>
        <div class="container-v5">
            <div class="section-header">
                <span class="section-label">{{ __('tech_stack.section_stack') }}</span>
                <h2 class="section-title">{{ __('tech_stack.stack_title') }}</h2>
                <p class="section-subtitle">{{ __('tech_stack.stack_subtitle') }}</p>
            </div>

            <div class="card-grid" style="--card-min: 280px; --card-max: 420px; --card-gap: 2rem;">
                @php
                $tech_categories = __('tech_stack.categories');
                @endphp
                @foreach($tech_categories as $cat)
                <div style="background: var(--surface); border: 1px solid var(--border); border-radius: var(--card-radius); overflow: hidden; transition: all 0.3s ease;" onmouseover="this.style.borderColor='var(--primary)'; this.style.boxShadow='0 12px 30px var(--shadow-hover)';" onmouseout="this.style.borderColor='var(--border)'; this.style.boxShadow='';">
                    <div style="background: var(--contrast-panel-bg); color: var(--contrast-panel-text); padding: 2rem; display: flex; align-items: center; gap: 1rem;">
                        <div style="font-size: 1.75rem;">
                            <span class="material-symbols-rounded">{{ $cat['icon'] }}</span>
                        </div>
                        <h3 style="font-size: 1.25rem; font-weight: 700; margin: 0;">
                            {{ $cat['name'] }}
                        </h3>
                    </div>
                    <div style="padding: 2rem;">
                        <ul style="list-style: none; margin: 0; padding: 0;">
                            @foreach($cat['technologies'] as $tech)
                            <li style="padding: 0.75rem 0; border-bottom: 1px solid var(--border); font-size: 0.95rem; color: var(--text-gray); display: flex; align-items: center; gap: 0.75rem;">
                                <span class="material-symbols-rounded" style="color: var(--primary); font-size: 1.2rem;">check_circle</span>
                                {{ $tech }}
                            </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- Performance Metrics -->
    <section>
        <div class="container-v5">
            <div class="section-header">
                <span class="section-label">{{ __('tech_stack.section_metrics') }}</span>
                <h2 class="section-title">{{ __('tech_stack.metrics_title') }}</h2>
                <p class="section-subtitle">{{ __('tech_stack.metrics_subtitle') }}</p>
            </div>

            <div class="card-grid" style="--card-min: 220px; --card-max: 360px; --card-gap: 2rem; text-align: center;">
                @php
                $metrics = __('tech_stack.metrics');
                @endphp
                @foreach($metrics as $m)
                <div style="background: var(--surface); border: 1px solid var(--border); border-radius: var(--card-radius); padding: 2rem; transition: all 0.3s ease;" onmouseover="this.style.boxShadow='0 12px 30px rgba(14, 49, 99, 0.1)';" onmouseout="this.style.boxShadow='';">
                    <div style="font-size: 2rem; font-weight: 800; color: var(--primary); margin-bottom: 0.5rem;">
                        {{ $m['metric'] }}
                    </div>
                    <div style="font-weight: 700; color: var(--text-dark); margin-bottom: 0.5rem;">
                        {{ $m['label'] }}
                    </div>
                    <div style="font-size: 0.85rem; color: var(--text-gray);">
                        {{ $m['desc'] }}
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- Multi-Platform Coverage -->
    <section style="background: var(--secondary-bg);">
        <div class="container-v5">
            <div class="section-header">
                <span class="section-label">{{ __('tech_stack.section_platforms') }}</span>
                <h2 class="section-title">{{ __('tech_stack.platforms_title') }}</h2>
                <p class="section-subtitle">{{ __('tech_stack.platforms_subtitle') }}</p>
            </div>

            <div class="card-grid" style="--card-min: 300px; --card-max: 440px; --card-gap: 2.5rem; margin-bottom: 4rem;">
                @php
                $platforms = __('tech_stack.platforms');
                @endphp
                @foreach($platforms as $platform)
                <div style="background: var(--surface); border-radius: var(--card-radius); padding: 2.5rem; transition: all 0.3s ease; border: 1px solid var(--border);" onmouseover="this.style.transform='translateY(-8px)'; this.style.boxShadow='0 20px 40px rgba(14, 49, 99, 0.15)';" onmouseout="this.style.transform=''; this.style.boxShadow='';">
                    <div style="font-size: 2rem; color: var(--primary); margin-bottom: 1.5rem;">
                        <span class="material-symbols-rounded" style="font-size: 2rem;">{{ $platform['icon'] }}</span>
                    </div>
                    <h3 style="font-size: 1.4rem; font-weight: 700; color: var(--text-dark); margin-bottom: 1rem;">
                        {{ $platform['title'] }}
                    </h3>
                    <p style="color: var(--text-gray); font-size: 0.95rem; line-height: 1.7; margin-bottom: 1.5rem;">
                        {{ $platform['desc'] }}
                    </p>
                    <div style="margin-bottom: 1.5rem;">
                        <div style="font-size: 0.8rem; font-weight: 600; color: var(--text-light); text-transform: uppercase; letter-spacing: 0.05em; margin-bottom: 0.6rem;">{{ $platform['tech_label'] }}</div>
                        <div style="display: flex; flex-wrap: wrap; gap: 0.4rem;">
                            @foreach(explode(', ', $platform['tech']) as $tag)
                            <span style="display: inline-block; background: var(--primary-subtle); color: var(--primary); padding: 0.25rem 0.7rem; border-radius: 999px; font-size: 0.78rem; font-weight: 600; border: 1px solid rgba(15, 107, 158, 0.15);">{{ trim($tag) }}</span>
                            @endforeach
                        </div>
                    </div>
                    <ul style="list-style: none; padding: 0; margin: 0;">
                        @foreach($platform['features'] as $feature)
                        <li style="padding: 0.5rem 0; color: var(--text-gray); display: flex; align-items: center; gap: 0.75rem; font-size: 0.9rem;">
                            <span class="material-symbols-rounded" style="color: var(--accent); font-size: 1.25rem;">check_circle</span>
                            {{ $feature }}
                        </li>
                        @endforeach
                    </ul>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- Best Practices -->
    <section style="background: var(--surface);">
        <div class="container-v5">
            <div class="section-header">
                <span class="section-label">{{ __('tech_stack.section_practices') }}</span>
                <h2 class="section-title">{{ __('tech_stack.practices_title') }}</h2>
                <p class="section-subtitle">{{ __('tech_stack.practices_subtitle') }}</p>
            </div>

            <div class="card-grid" style="--card-min: 280px; --card-max: 420px; --card-gap: 2rem;">
                @php
                $practices = __('tech_stack.practices');
                @endphp
                @foreach($practices as $p)
                <div style="background: var(--surface); border-radius: var(--card-radius); padding: 2rem; transition: all 0.3s ease; border: 1px solid var(--border);" onmouseover="this.style.borderColor='var(--primary)'; this.style.boxShadow='0 12px 30px rgba(14, 49, 99, 0.1)';" onmouseout="this.style.borderColor='var(--border)'; this.style.boxShadow='';">
                    <div style="font-size: 1.75rem; color: var(--primary); margin-bottom: 1rem;">
                        <span class="material-symbols-rounded">{{ $p['icon'] }}</span>
                    </div>
                    <h3 style="font-size: 1.1rem; font-weight: 700; color: var(--text-dark); margin-bottom: 0.3rem;">
                        {{ $p['title'] }}
                    </h3>
                    {{-- <div style="font-size: 0.85rem; color: var(--primary); font-weight: 600; margin-bottom: 0.75rem;">
                        {{ $p['company'] }}
                    </div> --}}
                    <p style="color: var(--text-gray); font-size: 0.95rem;">
                        {{ $p['desc'] }}
                    </p>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- CTA -->
    <section>
        <div class="container-v5">
            <div style="background: var(--contrast-panel-bg); border-radius: var(--card-radius); padding: 3.5rem 2rem; text-align: center; color: var(--contrast-panel-text);">
                <h2 style="font-size: 2rem; font-weight: 800; margin-bottom: 1rem;">{{ __('tech_stack.cta_title') }}</h2>
                <p style="font-size: 1.1rem; margin-bottom: 2rem; opacity: 0.95;">
                    {{ __('tech_stack.cta_desc') }}
                </p>
                <a href="{{ route('landing.contact') }}" style="background: var(--contrast-action-bg); color: var(--contrast-action-text); padding: 1rem 2.5rem; border-radius: 8px; font-weight: 600; text-decoration: none; display: inline-block; transition: all 0.3s ease;" onmouseover="this.style.opacity='0.9';" onmouseout="this.style.opacity='1';">
                    <span>{{ __('tech_stack.cta_button') }}</span>
                </a>
            </div>
        </div>
    </section>

@endsection
