@extends('layouts.main')

@section('content')

    <!-- Hero -->
    <section style="min-height: 60vh; display: flex; align-items: center; padding: 6rem 2rem; background: linear-gradient(135deg, var(--surface) 0%, var(--secondary-bg) 100%);">
        <div class="container-v5">
            <div style="text-align: center; max-width: 900px; margin: 0 auto;">
                <div style="display: inline-block; background: var(--accent-light); color: var(--primary); padding: 0.5rem 1.5rem; border-radius: 20px; margin-bottom: 1.5rem; font-size: 0.9rem; font-weight: 600;">
                    {{ __('r_and_d.badge') }}
                </div>
                <h1 style="font-size: 2.75rem; font-weight: 600; line-height: 1.15; margin-bottom: 1.5rem; color: var(--text-dark);">
                    {{ __('r_and_d.hero_title') }} <span style="color: var(--primary);">{{ __('r_and_d.hero_title_accent') }}</span>
                </h1>
                <p style="font-size: 1.15rem; color: var(--text-gray); line-height: 1.8;">
                    {{ __('r_and_d.hero_desc') }}
                </p>
            </div>
        </div>
    </section>

    <!-- R&D Articles -->
    <section style="background: var(--surface); padding: 4rem 2rem;">
        <div class="container-v5">
            @include('landing_page.blog.r_and_d.hkspace')
            <div style="height: 1px; background: var(--border); margin: 4rem 0;"></div>
            @include('landing_page.blog.r_and_d.ai')
        </div>
    </section>

    <!-- Research Capabilities -->
    <section style="background: var(--secondary-bg); padding: 4rem 2rem;">
        <div class="container-v5">
            <div class="section-header">
                <h2 class="section-title">{{ __('r_and_d.capabilities_title') }}</h2>
                <p class="section-subtitle">{{ __('r_and_d.capabilities_subtitle') }}</p>
            </div>

            <div class="card-grid" style="--card-min: 280px; --card-max: 420px; --card-gap: 2rem;">
                @foreach(__('r_and_d.capabilities') as $cap)
                <div style="background: var(--surface); border-radius: var(--card-radius); padding: 2rem; border: 1px solid var(--border);">
                    <div style="font-size: 1.75rem; color: var(--primary); margin-bottom: 1rem;">
                        <span class="material-symbols-rounded">{{ $cap['icon'] }}</span>
                    </div>
                    <h3 style="font-size: 1.1rem; font-weight: 600; color: var(--text-dark); margin-bottom: 0.75rem;">{{ $cap['title'] }}</h3>
                    <p style="color: var(--text-gray); font-size: 0.95rem; line-height: 1.6;">{{ $cap['desc'] }}</p>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- CTA -->
    <section style="background: var(--surface);">
        <div class="container-v5">
            <div style="background: var(--contrast-panel-bg); border-radius: var(--card-radius); padding: 3.5rem 2rem; text-align: center; color: var(--contrast-panel-text);">
                <h2 style="font-size: 2rem; font-weight: 600; margin-bottom: 1rem;">{{ __('r_and_d.cta_title') }}</h2>
                <p style="font-size: 1.1rem; margin-bottom: 2rem; opacity: 0.95;">{{ __('r_and_d.cta_desc') }}</p>
                <a href="{{ route('landing.contact') }}" style="background: var(--contrast-action-bg); color: var(--contrast-action-text); padding: 1rem 2.5rem; border-radius: 8px; font-weight: 600; text-decoration: none; display: inline-block; transition: all 0.3s ease;" onmouseover="this.style.opacity='0.9';" onmouseout="this.style.opacity='1';">
                    {{ __('r_and_d.cta_button') }}
                </a>
            </div>
        </div>
    </section>

@endsection
