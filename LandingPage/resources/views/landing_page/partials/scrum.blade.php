<!-- Hero -->
<section id="scrum" style="min-height: 70vh; display: flex; align-items: center; padding: 6rem 2rem; background: linear-gradient(135deg, var(--surface) 0%, var(--secondary-bg) 100%);">
    <div class="container-v5">
        <div style="text-align: center; max-width: 900px; margin: 0 auto;">
            <h1 style="font-size: 2.75rem; font-weight: 800; line-height: 1.15; margin-bottom: 1.5rem; color: var(--text-dark);">
                {{ __('scrum.hero_title') }} <span style="color: var(--primary);">{{ __('scrum.hero_title_highlight') }}</span>
            </h1>
            <p style="font-size: 1.15rem; color: var(--text-gray); line-height: 1.8; margin-bottom: 2rem;">
                {{ __('scrum.hero_desc') }}
            </p>
            <a href="#contact" class="btn-primary-v5">
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
            <h2 class="section-title">{{ __('scrum.steps_title') }}</h2>
            <p class="section-subtitle">{{ __('scrum.steps_subtitle') }}</p>
        </div>

        <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(240px, 1fr)); gap: 1.5rem;">
            @foreach(__('scrum.steps') as $step)
            <div style="background: white; border-radius: var(--card-radius); padding: 2.5rem 2rem; border: 1px solid var(--border); transition: all 0.3s ease; text-align: center; position: relative;" onmouseover="this.style.borderColor='var(--primary)'; this.style.boxShadow='0 10px 30px rgba(14, 49, 99, 0.1)'; this.style.transform='translateY(-4px)';" onmouseout="this.style.borderColor='var(--border)'; this.style.boxShadow=''; this.style.transform='';">
                <div style="display: inline-flex; align-items: center; justify-content: center; width: 50px; height: 50px; background: var(--primary); color: white; border-radius: 50%; font-weight: 800; font-size: 1.5rem; margin-bottom: 1rem;">
                    {{ $step['num'] }}
                </div>
                <div style="font-size: 2rem; color: var(--primary); margin: 1rem 0;">
                    <span class="material-symbols-rounded">{{ $step['icon'] }}</span>
                </div>
                <h3 style="font-size: 1.1rem; font-weight: 700; color: var(--text-dark); margin-bottom: 0.75rem;">
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

<!-- Sprint Cycle Details -->
<section class="scrum-sprint-cycle-section" style="background: var(--secondary-bg);">
    <div class="container-v5">
        <div class="section-header">
            <h2 class="section-title">{{ __('scrum.sprint_title') }}</h2>
            <p class="section-subtitle">{{ __('scrum.sprint_subtitle') }}</p>
        </div>

        <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 4rem; align-items: stretch;">
            <div>
                <ul style="list-style: none;">
                    @foreach(__('scrum.sprint_items') as $cycle)
                    <li style="padding: 1.5rem; background: white; margin-bottom: 1rem; border-radius: var(--card-radius); border-left: 4px solid var(--primary);">
                        <strong style="display: block; color: var(--text-dark); font-weight: 700; margin-bottom: 0.5rem;">
                            {{ $cycle['title'] }}
                        </strong>
                        <span style="color: var(--text-gray); font-size: 0.9rem;">
                            {{ $cycle['desc'] }}
                        </span>
                    </li>
                    @endforeach
                </ul>
            </div>

            <div class="position-relative" style="background: linear-gradient(135deg, var(--primary) 0%, var(--primary-light) 100%); border-radius: 16px; padding: 2.25rem 1.75rem; color: white; box-shadow: 0 12px 40px rgba(14, 49, 99, 0.25); border: 1px solid rgba(255,255,255,0.15); height: 100%; display: flex; flex-direction: column; justify-content: center;">
                <h3 style="font-size: 1.2rem; font-weight: 800; text-align: center; margin-bottom: 0.45rem;">Sprint Cycle</h3>
                <p style="text-align: center; font-size: 0.92rem; margin-bottom: 1.25rem; color: rgba(255,255,255,0.92);">
                    Plan, execute, review and improve continuously in each sprint.
                </p>
                <div style="display: grid; grid-template-columns: 1fr; gap: 0.65rem;">
                    <div style="background: rgba(255,255,255,0.12); border: 1px solid rgba(255,255,255,0.24); border-radius: 12px; padding: 0.68rem 0.9rem; display: flex; align-items: center; justify-content: space-between;">
                        <span style="font-weight: 700; font-size: 0.95rem;">Plan</span><span style="opacity: 0.9;">→</span><span style="font-weight: 700; font-size: 0.95rem;">Execute</span>
                    </div>
                    <div style="background: rgba(255,255,255,0.12); border: 1px solid rgba(255,255,255,0.24); border-radius: 12px; padding: 0.68rem 0.9rem; display: flex; align-items: center; justify-content: space-between;">
                        <span style="font-weight: 700; font-size: 0.95rem;">Execute</span><span style="opacity: 0.9;">→</span><span style="font-weight: 700; font-size: 0.95rem;">Review</span>
                    </div>
                    <div style="background: rgba(255,255,255,0.12); border: 1px solid rgba(255,255,255,0.24); border-radius: 12px; padding: 0.68rem 0.9rem; display: flex; align-items: center; justify-content: space-between;">
                        <span style="font-weight: 700; font-size: 0.95rem;">Review</span><span style="opacity: 0.9;">→</span><span style="font-weight: 700; font-size: 0.95rem;">Improve</span>
                    </div>
                    <div style="background: rgba(255,255,255,0.12); border: 1px solid rgba(255,255,255,0.24); border-radius: 12px; padding: 0.68rem 0.9rem; display: flex; align-items: center; justify-content: space-between;">
                        <span style="font-weight: 700; font-size: 0.95rem;">Improve</span><span style="opacity: 0.9;">→</span><span style="font-weight: 700; font-size: 0.95rem;">Deliver</span>
                    </div>
                    <div style="background: rgba(255,255,255,0.12); border: 1px solid rgba(255,255,255,0.24); border-radius: 12px; padding: 0.68rem 0.9rem; text-align: center; font-weight: 800; letter-spacing: 0.02em;">
                        Deliver → Plan
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Benefits -->
<section id="benefits">
    <div class="container-v5">
        <div class="section-header">
            <h2 class="section-title">{{ __('scrum.benefits_title') }}</h2>
            <p class="section-subtitle">{{ __('scrum.benefits_subtitle') }}</p>
        </div>

        <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(280px, 1fr)); gap: 2rem;">
            @foreach(__('scrum.benefits') as $b)
            <div style="background: white; border: 1px solid var(--border); border-radius: var(--card-radius); padding: 2rem; transition: all 0.3s ease;" onmouseover="this.style.borderColor='var(--primary)'; this.style.boxShadow='0 12px 30px var(--shadow-hover)';" onmouseout="this.style.borderColor='var(--border)'; this.style.boxShadow='';">
                <div style="font-size: 2rem; color: var(--primary); margin-bottom: 1rem;">
                    <span class="material-symbols-rounded">{{ $b['icon'] }}</span>
                </div>
                <h3 style="font-size: 1.1rem; font-weight: 700; color: var(--text-dark); margin-bottom: 0.75rem;">
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
            <h2 class="section-title">{{ __('scrum.journey_title') }}</h2>
            <p class="section-subtitle">{{ __('scrum.journey_subtitle') }}</p>
        </div>

        <div style="max-width: 900px; margin: 0 auto; position: relative;">
            @foreach(__('scrum.journey') as $index => $j)
            <div style="display: flex; gap: 2rem; align-items: flex-start; margin-bottom: {{ $index < count(__('scrum.journey')) - 1 ? '3rem' : '0' }};">
                <!-- Left side: Circle with connecting line -->
                <div style="position: relative; flex-shrink: 0;">
                    <div style="width: 110px; height: 110px; background: white; border: 3px solid var(--primary); border-radius: 50%; display: flex; align-items: center; justify-content: center; text-align: center; box-shadow: 0 4px 15px rgba(14, 49, 99, 0.15); position: relative; z-index: 2;">
                        <div style="font-size: 1.1rem; font-weight: 700; color: var(--primary); line-height: 1.2;">{{ __('scrum.journey_phase_label') }} {{ $index + 1 }}</div>
                    </div>

                    <!-- Vertical connecting line -->
                    @if($index < count(__('scrum.journey')) - 1)
                    <div style="position: absolute; top: 110px; left: 50%; width: 3px; height: 80px; background: linear-gradient(180deg, var(--primary) 0%, rgba(14, 49, 99, 0.3) 100%); transform: translateX(-50%); z-index: 1;"></div>
                    @endif
                </div>

                <!-- Right side: Content box -->
                <div style="flex: 1; background: white; border-radius: var(--card-radius); padding: 2rem; border: 1px solid var(--border); box-shadow: 0 2px 8px rgba(0,0,0,0.05); transition: all 0.3s ease;" onmouseover="this.style.borderColor='var(--primary)'; this.style.boxShadow='0 8px 20px rgba(14, 49, 99, 0.1)'; this.style.transform='translateX(5px)';" onmouseout="this.style.borderColor='var(--border)'; this.style.boxShadow='0 2px 8px rgba(0,0,0,0.05)'; this.style.transform='translateX(0)';">
                    <h3 style="font-size: 1.15rem; font-weight: 700; color: var(--text-dark); margin-bottom: 0.75rem; line-height: 1.4;">
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
            <h2 class="section-title">{{ __('scrum.why_title') }}</h2>
            <p class="section-subtitle">{{ __('scrum.why_subtitle') }}</p>
        </div>

        <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(280px, 1fr)); gap: 2rem;">
            @foreach(__('scrum.why_items') as $w)
            <div style="background: white; border: 1px solid var(--border); border-radius: var(--card-radius); padding: 2rem; text-align: center; transition: all 0.3s ease;" onmouseover="this.style.borderColor='var(--primary)'; this.style.boxShadow='0 12px 30px var(--shadow-hover)'; this.style.transform='translateY(-5px)';" onmouseout="this.style.borderColor='var(--border)'; this.style.boxShadow=''; this.style.transform='';">
                <h3 style="font-size: 1.1rem; font-weight: 700; color: var(--text-dark); margin-bottom: 0.75rem;">
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
        <div style="background: linear-gradient(135deg, var(--primary) 0%, var(--primary-light) 100%); border-radius: var(--card-radius); padding: 3.5rem 2rem; text-align: center; color: white;">
            <h2 style="font-size: 2rem; font-weight: 800; margin-bottom: 1rem;">{{ __('scrum.cta_title') }}</h2>
            <p style="font-size: 1.1rem; margin-bottom: 2rem; opacity: 0.95;">
                {{ __('scrum.cta_desc') }}
            </p>
            <a href="#contact" style="background: white; color: var(--primary); padding: 1rem 2.5rem; border-radius: 8px; font-weight: 600; text-decoration: none; display: inline-block; transition: all 0.3s ease;" onmouseover="this.style.backgroundColor='var(--secondary-bg)';" onmouseout="this.style.backgroundColor='white';">
                <span>{{ __('scrum.cta_button') }}</span>
            </a>
        </div>
    </div>
</section>
