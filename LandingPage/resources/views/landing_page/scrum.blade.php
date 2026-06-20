@extends('layouts.main')

@section('content')
    <!-- Hero -->
    <section style="min-height: 70vh; display: flex; align-items: center; padding: 6rem 2rem; background: linear-gradient(135deg, var(--surface) 0%, var(--secondary-bg) 100%);">
        <div class="container-v5">
            <div style="text-align: center; max-width: 900px; margin: 0 auto;">
                <h1 style="font-size: 2.75rem; font-weight: 600; line-height: 1.15; margin-bottom: 1.5rem; color: var(--text-dark);">
                    {{ __('scrum.hero_title') }} <span style="color: var(--primary);">{{ __('scrum.hero_title_highlight') }}</span>
                </h1>
                <p style="font-size: 1.15rem; color: var(--text-gray); line-height: 1.8; margin-bottom: 2rem;">
                    {{ __('scrum.hero_desc') }}
                </p>
                <a href="{{ route('landing.contact') }}" class="btn-primary-v5">
                    <span>{{ __('scrum.hero_cta') }}</span>
                    <span class="material-symbols-rounded">arrow_forward</span>
                </a>
            </div>
        </div>
    </section>

    <!-- 6-Step Process -->
    <section id="process">
        <div class="container-v5">
            <div class="section-header">
                <span class="section-label">{{ __('scrum.section_process') }}</span>
                <h2 class="section-title">{{ __('scrum.steps_title') }}</h2>
                <p class="section-subtitle">{{ __('scrum.steps_subtitle') }}</p>
            </div>

            <div class="card-grid" style="--card-min: 240px; --card-max: 380px; --card-gap: 1.5rem;">
                @foreach(__('scrum.steps') as $step)
                <div style="background: var(--surface); border-radius: var(--card-radius); padding: 2.5rem 2rem; border: 1px solid var(--border); transition: all 0.3s ease; text-align: center; position: relative;" onmouseover="this.style.borderColor='var(--primary)'; this.style.boxShadow='0 10px 30px rgba(24, 48, 96, 0.1)'; this.style.transform='translateY(-4px)';" onmouseout="this.style.borderColor='var(--border)'; this.style.boxShadow=''; this.style.transform='';">
                    <div style="display: inline-flex; align-items: center; justify-content: center; width: 50px; height: 50px; background: var(--button-primary-bg); color: var(--button-primary-text); border-radius: 50%; font-weight: 600; font-size: 1.5rem; margin-bottom: 1rem;">
                        {{ $step['num'] }}
                    </div>
                    <div style="font-size: 2rem; color: var(--primary); margin: 1rem 0;">
                        <span class="material-symbols-rounded">{{ $step['icon'] }}</span>
                    </div>
                    <h3 style="font-size: 1.1rem; font-weight: 600; color: var(--text-dark); margin-bottom: 0.75rem;">
                        {{ $step['title'] }}
                    </h3>
                    <p style="font-size: 0.9rem; color: var(--text-gray); line-height: 1.6;">
                        {{ $step['desc'] }}
                    </p>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- Sprint Delivery Operating Model -->
    <section class="scrum-operating-section">
        <div class="container-v5">
            <div class="section-header">
                <span class="section-label">{{ __('scrum.section_sprint') }}</span>
                <h2 class="section-title">{{ __('scrum.sprint_title') }}</h2>
                <p class="section-subtitle">{{ __('scrum.sprint_subtitle') }}</p>
            </div>

            <div class="scrum-operating-grid">
                <div class="scrum-sprint-stack">
                    @foreach(__('scrum.sprint_items') as $cycle)
                        <article class="scrum-sprint-card">
                            <div class="scrum-sprint-card__head">
                                <span class="scrum-sprint-card__icon material-symbols-rounded" aria-hidden="true">{{ $cycle['icon'] }}</span>
                                <span class="scrum-sprint-card__index">{{ sprintf('%02d', $loop->iteration) }}</span>
                            </div>
                            <h3>{{ $cycle['title'] }}</h3>
                            <p>{{ $cycle['desc'] }}</p>
                            <div class="scrum-sprint-card__artifact">{{ $cycle['artifact'] }}</div>
                        </article>
                    @endforeach
                </div>

                <aside class="scrum-operating-model">
                    <div class="solution-kicker">
                        <span class="material-symbols-rounded" aria-hidden="true">account_tree</span>
                        {{ __('scrum.sprint_model_kicker') }}
                    </div>
                    <h3>{{ __('scrum.sprint_model_title') }}</h3>
                    <p>{{ __('scrum.sprint_model_desc') }}</p>

                    <div class="scrum-flow-board">
                        @foreach(__('scrum.sprint_model_stages') as $stage)
                            <div class="scrum-flow-node">
                                <span class="material-symbols-rounded" aria-hidden="true">{{ $stage['icon'] }}</span>
                                <strong>{{ $stage['title'] }}</strong>
                                <small>{{ $stage['desc'] }}</small>
                            </div>
                        @endforeach
                    </div>

                    <div class="scrum-control-grid">
                        @foreach(__('scrum.sprint_controls') as $control)
                            <div class="scrum-control-card">
                                <span class="material-symbols-rounded" aria-hidden="true">{{ $control['icon'] }}</span>
                                <strong>{{ $control['title'] }}</strong>
                                <small>{{ $control['desc'] }}</small>
                            </div>
                        @endforeach
                    </div>
                </aside>
            </div>
        </div>
    </section>

    <!-- Benefits -->
    <section id="benefits">
        <div class="container-v5">
            <div class="section-header">
                <span class="section-label">{{ __('scrum.section_benefits') }}</span>
                <h2 class="section-title">{{ __('scrum.benefits_title') }}</h2>
                <p class="section-subtitle">{{ __('scrum.benefits_subtitle') }}</p>
            </div>

            <div class="card-grid" style="--card-min: 280px; --card-max: 420px; --card-gap: 2rem;">
                @foreach(__('scrum.benefits') as $b)
                <div style="background: var(--surface); border: 1px solid var(--border); border-radius: var(--card-radius); padding: 2rem; transition: all 0.3s ease;" onmouseover="this.style.borderColor='var(--primary)'; this.style.boxShadow='0 12px 30px var(--shadow-hover)';" onmouseout="this.style.borderColor='var(--border)'; this.style.boxShadow='';">
                    <div style="font-size: 2rem; color: var(--primary); margin-bottom: 1rem;">
                        <span class="material-symbols-rounded">{{ $b['icon'] }}</span>
                    </div>
                    <h3 style="font-size: 1.1rem; font-weight: 600; color: var(--text-dark); margin-bottom: 0.75rem;">
                        {{ $b['title'] }}
                    </h3>
                    <p style="color: var(--text-gray); font-size: 0.95rem; line-height: 1.6;">
                        {{ $b['desc'] }}
                    </p>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- Client Journey Timeline -->
    <section style="background: var(--secondary-bg);">
        <div class="container-v5">
            <div class="section-header">
                <span class="section-label">{{ __('scrum.section_journey') }}</span>
                <h2 class="section-title">{{ __('scrum.journey_title') }}</h2>
                <p class="section-subtitle">{{ __('scrum.journey_subtitle') }}</p>
            </div>

            <div style="max-width: 900px; margin: 0 auto; position: relative;">
                @foreach(__('scrum.journey') as $index => $j)
                <div style="display: flex; gap: 2rem; align-items: flex-start; margin-bottom: {{ $index < count(__('scrum.journey')) - 1 ? '3rem' : '0' }};">
                    <!-- Left side: Circle with connecting line -->
                    <div style="position: relative; flex-shrink: 0;">
                        <div style="width: 110px; height: 110px; background: var(--surface); border: 3px solid var(--primary); border-radius: 50%; display: flex; align-items: center; justify-content: center; text-align: center; box-shadow: 0 4px 15px rgba(24, 48, 96, 0.15); position: relative; z-index: 2;">
                            <div style="font-size: 1.1rem; font-weight: 600; color: var(--primary); line-height: 1.2;">{{ __('scrum.journey_phase_label') }} {{ $index + 1 }}</div>
                        </div>

                        <!-- Vertical connecting line -->
                        @if($index < count(__('scrum.journey')) - 1)
                        <div style="position: absolute; top: 110px; left: 50%; width: 3px; height: 80px; background: linear-gradient(180deg, var(--primary) 0%, rgba(24, 48, 96, 0.3) 100%); transform: translateX(-50%); z-index: 1;"></div>
                        @endif
                    </div>
                    
                    <!-- Right side: Content box -->
                    <div style="flex: 1; background: var(--surface); border-radius: var(--card-radius); padding: 2rem; border: 1px solid var(--border); box-shadow: 0 2px 8px rgba(0,0,0,0.05); transition: all 0.3s ease;" onmouseover="this.style.borderColor='var(--primary)'; this.style.boxShadow='0 8px 20px rgba(24, 48, 96, 0.1)'; this.style.transform='translateX(5px)';" onmouseout="this.style.borderColor='var(--border)'; this.style.boxShadow='0 2px 8px rgba(0,0,0,0.05)'; this.style.transform='translateX(0)';">
                        <h3 style="font-size: 1.15rem; font-weight: 600; color: var(--text-dark); margin-bottom: 0.75rem; line-height: 1.4;">
                            {{ $j['phase'] }}
                        </h3>
                        <p style="color: var(--text-gray); font-size: 0.95rem; line-height: 1.7; margin: 0;">
                            {{ $j['content'] }}
                        </p>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- Why Choose -->
    <section id="why">
        <div class="container-v5">
            <div class="section-header">
                <span class="section-label">{{ __('scrum.section_why') }}</span>
                <h2 class="section-title">{{ __('scrum.why_title') }}</h2>
                <p class="section-subtitle">{{ __('scrum.why_subtitle') }}</p>
            </div>

            <div class="card-grid" style="--card-min: 280px; --card-max: 420px; --card-gap: 2rem;">
                @foreach(__('scrum.why_items') as $w)
                <div style="background: var(--surface); border: 1px solid var(--border); border-radius: var(--card-radius); padding: 2rem; text-align: center; transition: all 0.3s ease;" onmouseover="this.style.borderColor='var(--primary)'; this.style.boxShadow='0 12px 30px var(--shadow-hover)'; this.style.transform='translateY(-5px)';" onmouseout="this.style.borderColor='var(--border)'; this.style.boxShadow=''; this.style.transform='';">
                    <h3 style="font-size: 1.1rem; font-weight: 600; color: var(--text-dark); margin-bottom: 0.75rem;">
                        {{ $w['title'] }}
                    </h3>
                    <p style="color: var(--text-gray); font-size: 0.95rem;">
                        {{ $w['desc'] }}
                    </p>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- CTA -->
    <section style="background: var(--secondary-bg);">
        <div class="container-v5">
            <div style="background: var(--contrast-panel-bg); border-radius: var(--card-radius); padding: 3.5rem 2rem; text-align: center; color: var(--contrast-panel-text);">
                <h2 style="font-size: 2rem; font-weight: 600; margin-bottom: 1rem;">{{ __('scrum.cta_title') }}</h2>
                <p style="font-size: 1.1rem; margin-bottom: 2rem; opacity: 0.95;">
                    {{ __('scrum.cta_desc') }}
                </p>
                <a href="{{ route('landing.contact') }}" style="background: var(--contrast-action-bg); color: var(--contrast-action-text); padding: 1rem 2.5rem; border-radius: 8px; font-weight: 600; text-decoration: none; display: inline-block; transition: all 0.3s ease;" onmouseover="this.style.opacity='0.9';" onmouseout="this.style.opacity='1';">
                    <span>{{ __('scrum.cta_button') }}</span>
                </a>
            </div>
        </div>
    </section>

@endsection
