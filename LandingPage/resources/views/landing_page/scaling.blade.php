@extends('layouts.main')

@section('content')

    <!-- Hero -->
    <section style="min-height: 70vh; display: flex; align-items: center; padding: 6rem 2rem; background: linear-gradient(135deg, var(--surface) 0%, var(--secondary-bg) 100%); position: relative; overflow: hidden;">
            @include('partials.hero-bg', ['flow' => 'rise'])
        <div class="container-v5">
            <div style="text-align: center; max-width: 900px; margin: 0 auto;">
                <h1 style="font-size: 2.75rem; font-weight: 600; line-height: 1.15; margin-bottom: 1.5rem; color: var(--text-dark);">
                    {{ __('scaling.hero_title') }} <span style="color: var(--primary);">{{ __('scaling.hero_title_accent') }}</span>
                </h1>
                <p style="font-size: 1.15rem; color: var(--text-gray); line-height: 1.8; margin-bottom: 1.5rem;">
                    {{ __('scaling.hero_desc1') }}
                </p>
                <p style="font-size: 1rem; color: var(--text-gray); margin-bottom: 2rem;">
                    {{ __('scaling.hero_desc2') }}
                </p>
            </div>
        </div>
    </section>

    <!-- 6 Scaling Phases -->
    <section style="background: var(--secondary-bg);">
        <div class="container-v5">
            <div class="section-header">
                <h2 class="section-title">{{ __('scaling.phases_title') }}</h2>
                <p class="section-subtitle">{{ __('scaling.phases_subtitle') }}</p>
            </div>

            <div style="display: grid; gap: 2rem;">
                @foreach(__('scaling.phases') as $index => $p)
                <div style="background: var(--surface); border-radius: var(--card-radius); padding: 2.5rem; border: 1px solid var(--border); transition: all 0.3s ease;" onmouseover="this.style.boxShadow='0 12px 30px var(--shadow-hover)';" onmouseout="this.style.boxShadow='';">
                    <div style="display: grid; grid-template-columns: 1fr 1fr 1fr; gap: 2rem; margin-bottom: 1.5rem;">
                        <div>
                            <div style="font-size: 2rem; font-weight: 600; color: var(--primary); margin-bottom: 0.5rem;">
                                {{ __('scaling.label_phase') }} {{ $index + 1 }}
                            </div>
                            <h3 style="font-size: 1.2rem; font-weight: 600; color: var(--text-dark);">
                                {{ $p['phase'] }}
                            </h3>
                        </div>
                        <div>
                            <div style="color: var(--text-gray); font-size: 0.9rem; margin-bottom: 0.5rem;"><strong>{{ __('scaling.label_users') }}:</strong> {{ $p['users'] }}</div>
                            <div style="color: var(--text-gray); font-size: 0.9rem; margin-bottom: 0.5rem;"><strong>{{ __('scaling.label_timeline') }}:</strong> {{ $p['timeline'] }}</div>
                            <div style="color: var(--text-gray); font-size: 0.9rem;"><strong>{{ __('scaling.label_cost') }}:</strong> {{ $p['cost'] }}</div>
                        </div>
                        <div>
                            <div style="background: var(--secondary-bg); padding: 1rem; border-radius: 8px;">
                                <div style="font-weight: 600; color: var(--primary); font-size: 0.9rem; margin-bottom: 0.5rem;">{{ __('scaling.label_architecture') }}</div>
                                <div style="color: var(--text-gray); font-size: 0.9rem;">{{ $p['architecture'] }}</div>
                            </div>
                        </div>
                    </div>
                    <div style="border-top: 1px solid var(--border); padding-top: 1.5rem;">
                        <p style="color: var(--text-gray); line-height: 1.7; margin-bottom: 1rem;">{{ $p['description'] }}</p>
                        <div style="font-size: 0.9rem;">
                            <strong style="color: var(--text-dark);">{{ __('scaling.label_tech_stack') }}:</strong>
                            <span style="color: var(--text-gray); margin-left: 0.3rem;">{{ $p['stack'] }}</span>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- Performance Metrics -->
    <section style="background: var(--surface);">
        <div class="container-v5">
            <div class="section-header">
                <h2 class="section-title">{{ __('scaling.metrics_title') }}</h2>
                <p class="section-subtitle">{{ __('scaling.metrics_subtitle') }}</p>
            </div>

            <div class="card-grid" style="--card-min: 240px; --card-max: 380px; --card-gap: 2rem;">
                @foreach(__('scaling.metrics') as $m)
                <div style="background: var(--secondary-bg); border-radius: var(--card-radius); padding: 2rem; border: 1px solid var(--border); text-align: center; transition: all 0.3s ease;" onmouseover="this.style.backgroundColor='var(--surface)'; this.style.borderColor='var(--primary)';" onmouseout="this.style.backgroundColor='var(--secondary-bg)'; this.style.borderColor='var(--border)';">
                    <div style="font-size: 2rem; font-weight: 600; color: var(--primary); margin-bottom: 0.5rem;">{{ $m['metric'] }}</div>
                    <div style="font-weight: 600; color: var(--text-dark); margin-bottom: 0.5rem;">{{ $m['label'] }}</div>
                    <div style="font-size: 0.9rem; color: var(--text-gray);">{{ $m['desc'] }}</div>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- CTA -->
    <section style="background: var(--surface);">
        <div class="container-v5">
            <div style="background: var(--contrast-panel-bg); border-radius: var(--card-radius); padding: 4rem 2rem; text-align: center; color: var(--contrast-panel-text);">
                <h2 style="font-size: 2rem; font-weight: 600; margin-bottom: 1rem;">{{ __('scaling.cta_title') }}</h2>
                <p style="font-size: 1.1rem; margin-bottom: 2rem; opacity: 0.95;">{{ __('scaling.cta_desc') }}</p>
                <a href="{{ route('landing.contact') }}" style="background: var(--contrast-action-bg); color: var(--contrast-action-text); padding: 1rem 2.5rem; border-radius: 8px; font-weight: 600; text-decoration: none; display: inline-flex; align-items: center; gap: 0.75rem; transition: all 0.3s ease;" onmouseover="this.style.opacity='0.9'; this.style.transform='translateY(-2px)'; this.style.boxShadow='0 8px 20px rgba(0,0,0,0.15)';" onmouseout="this.style.opacity='1'; this.style.transform=''; this.style.boxShadow='';">
                    <span>{{ __('scaling.cta_button') }}</span>
                    <span class="material-symbols-rounded">arrow_forward</span>
                </a>
            </div>
        </div>
    </section>

@endsection
