<!-- Hero -->
<section id="about" style="min-height: 60vh; display: flex; align-items: center; padding: 6rem 2rem; background: linear-gradient(135deg, var(--surface) 0%, var(--secondary-bg) 100%);">
    <div class="container-v5">
        <div style="text-align: center; max-width: 900px; margin: 0 auto;">
            <h1 style="font-size: 2.75rem; font-weight: 800; line-height: 1.15; margin-bottom: 1.5rem; color: var(--text-dark);">
                {{ __('about.hero_title') }} <span style="color: var(--primary);">{{ __('about.hero_title_accent') }}</span>
            </h1>
            <p style="font-size: 1.15rem; color: var(--text-gray); line-height: 1.8;">
                {{ __('about.hero_desc') }}
            </p>
        </div>
    </div>
</section>

<!-- Company Story -->
<section>
    <div class="container-v5">
        <div class="section-header">
            <h2 class="section-title">{{ __('about.story_title') }}</h2>
            <p class="section-subtitle">{{ __('about.story_subtitle') }}</p>
        </div>

        <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 4rem; align-items: center;">

            <div>
                <h3 style="font-size: 1.25rem; font-weight: 700; color: var(--text-dark); margin-bottom: 0.75rem;">
                    {{ __('about.story_start_title') }}
                </h3>
                <p style="color: var(--text-gray); line-height: 1.8; margin-bottom: 1.25rem;">
                    {{ __('about.story_start_desc') }}
                </p>

                <h3 style="font-size: 1.25rem; font-weight: 700; color: var(--text-dark); margin-bottom: 0.75rem;">
                    {{ __('about.story_growth_title') }}
                </h3>
                <p style="color: var(--text-gray); line-height: 1.8; margin-bottom: 1.25rem;">
                    {{ __('about.story_growth_desc') }}
                </p>

                <h3 style="font-size: 1.25rem; font-weight: 700; color: var(--text-dark); margin-bottom: 0.75rem;">
                    {{ __('about.story_expansion_title') }}
                </h3>
                <p style="color: var(--text-gray); line-height: 1.8; margin-bottom: 1.25rem;">
                    {{ __('about.story_expansion_desc') }}
                </p>

                <h3 style="font-size: 1.25rem; font-weight: 700; color: var(--text-dark); margin-bottom: 0.75rem;">
                    {{ __('about.story_today_title') }}
                </h3>
                <p style="color: var(--text-gray); line-height: 1.8;">
                    {{ __('about.story_today_desc') }}
                </p>
            </div>
            
            <div style="background: var(--surface); border-radius: var(--card-radius); padding: 2rem; border: 1px solid var(--border);">
                <div style="position: relative; max-width: 500px; margin: 0 auto;">
                    @php $milestones = __('about.milestones'); @endphp

                    @foreach($milestones as $index => $milestone)
                    <div class="d-flex align-items-start position-relative" style="margin-bottom: {{ $index < count($milestones) - 1 ? '2rem' : '0' }};">
                        <!-- Timeline Line -->
                        @if($index < count($milestones) - 1)
                        <div style="position: absolute; left: 22px; top: 48px; width: 3px; height: calc(100% + 2rem); background: linear-gradient(180deg, var(--primary) 0%, rgba(24, 48, 96, 0.2) 100%);"></div>
                        @endif
                        
                        <!-- Circle Number -->
                        <div class="flex-shrink-0" style="width: 48px; height: 48px; border-radius: 50%; background: {{ $milestone['highlight'] ? 'var(--primary)' : 'var(--surface)' }}; border: 3px solid var(--primary); display: flex; align-items: center; justify-content: center; font-weight: 700; font-size: 1.1rem; color: {{ $milestone['highlight'] ? 'var(--surface)' : 'var(--primary)' }}; box-shadow: 0 2px 8px rgba(24, 48, 96, 0.15); position: relative; z-index: 1;">
                            {{ $index + 1 }}
                        </div>
                        
                        <!-- Content Card -->
                        <div class="flex-grow-1 ms-3" style="background: {{ $milestone['highlight'] ? 'rgba(24, 48, 96, 0.05)' : '#f9fafb' }}; border: {{ $milestone['highlight'] ? '2px solid var(--primary)' : '1px solid #e5e7eb' }}; border-radius: 8px; padding: 1rem 1.25rem;">
                            <h5 class="mb-1" style="color: var(--primary); font-weight: 700; font-size: 1rem;">
                                {{ $milestone['year'] }}: {{ $milestone['title'] }}
                            </h5>
                            <p class="mb-0" style="color: {{ $milestone['highlight'] ? 'var(--primary)' : '#6b7280' }}; font-size: 0.9rem; {{ $milestone['highlight'] ? 'font-weight: 600;' : '' }}">
                                {{ $milestone['desc'] }}
                            </p>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Mission & Values -->
<section style="background: var(--secondary-bg);">
    <div class="container-v5">
        <div class="section-header">
            <h2 class="section-title">{{ __('about.values_title') }}</h2>
            <p class="section-subtitle">{{ __('about.values_subtitle') }}</p>
        </div>

        <div class="card-grid" style="--card-min: 280px; --card-max: 420px; --card-gap: 2rem;">
            @foreach(__('about.values') as $v)
            <div style="background: var(--surface); border-radius: var(--card-radius); padding: 2rem; text-align: center;">
                <div style="font-size: 2rem; color: var(--primary); margin-bottom: 1rem;">
                    <span class="material-symbols-rounded">{{ $v['icon'] }}</span>
                </div>
                <h3 style="font-size: 1.1rem; font-weight: 700; color: var(--text-dark); margin-bottom: 0.75rem;">
                    {{ $v['title'] }}
                </h3>
                <p style="color: var(--text-gray); font-size: 0.95rem; line-height: 1.6;">
                    {{ $v['desc'] }}
                </p>
            </div>
            @endforeach
        </div>
    </div>
</section>

<!-- Leadership Team -->
<section>
    <div class="container-v5">
        <div class="section-header">
            <span class="section-label">{{ __('about.section_team') }}</span>
            <h2 class="section-title">{{ __('about.team_title') }}</h2>
            <p class="section-subtitle">{{ __('about.team_subtitle') }}</p>
        </div>

        <div class="card-grid" style="--card-min: 280px; --card-max: 420px; --card-gap: 2rem;">
            @php $leaders = __('about.team'); @endphp
            @foreach($leaders as $leader)
            <div style="background: var(--surface); border: 1px solid var(--border); border-radius: var(--card-radius); overflow: hidden; transition: all 0.3s ease;" onmouseover="this.style.borderColor='var(--primary)'; this.style.boxShadow='0 12px 30px rgba(24, 48, 96, 0.1)';" onmouseout="this.style.borderColor='var(--border)'; this.style.boxShadow='';">
                <div style="background: var(--contrast-panel-bg); height: 150px;"></div>
                <div style="padding: 1.5rem; text-align: center; margin-top: -60px;">
                    <div style="width: 120px; height: 120px; background: var(--surface); border: 3px solid var(--border); border-radius: 50%; margin: 0 auto 1rem; display: flex; align-items: center; justify-content: center;">
                        <div style="font-size: 2rem; color: var(--primary);">
                            <span class="material-symbols-rounded">account_circle</span>
                        </div>
                    </div>
                    <h3 style="font-size: 1.1rem; font-weight: 700; color: var(--text-dark); margin-bottom: 0.25rem;">
                        {{ $leader['name'] }}
                    </h3>
                    <div style="color: var(--primary); font-weight: 600; font-size: 0.9rem; margin-bottom: 1rem;">
                        {{ $leader['title'] }}
                    </div>
                    <p style="color: var(--text-gray); font-size: 0.9rem; line-height: 1.6; margin-bottom: 1rem;">
                        {{ $leader['bio'] }}
                    </p>
                    <div style="display: flex; flex-wrap: wrap; gap: 0.5rem; justify-content: center;">
                        @foreach($leader['skills'] as $skill)
                        <span style="background: var(--secondary-bg); color: var(--primary); padding: 0.3rem 0.75rem; border-radius: 20px; font-size: 0.8rem; font-weight: 600;">
                            {{ $skill }}
                        </span>
                        @endforeach
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

<!-- Achievements -->
<section style="background: var(--surface);">
    <div class="container-v5">
        <div class="section-header">
            <h2 class="section-title">{{ __('about.achievements_title') }}</h2>
            <p class="section-subtitle">{{ __('about.achievements_subtitle') }}</p>
        </div>

        <div class="card-grid" style="--card-min: 250px; --card-max: 390px; --card-gap: 2rem;">
            @foreach(__('about.achievements') as $a)
            <div style="background: var(--surface); border-radius: var(--card-radius); padding: 2.5rem; text-align: center; border: 1px solid var(--border);">
                <div style="font-size: 2rem; font-weight: 800; color: var(--primary); margin-bottom: 0.5rem;">
                    {{ $a['num'] }}
                </div>
                <div style="font-weight: 700; color: var(--text-dark); margin-bottom: 0.5rem;">
                    {{ $a['title'] }}
                </div>
                <div style="font-size: 0.9rem; color: var(--text-gray);">
                    {{ $a['desc'] }}
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

<!-- CTA -->
<section style="background: var(--secondary-bg);">
    <div class="container-v5">
        <div style="background: var(--contrast-panel-bg); border-radius: var(--card-radius); padding: 3.5rem 2rem; text-align: center; color: var(--contrast-panel-text);">
            <h2 style="font-size: 2rem; font-weight: 800; margin-bottom: 1rem;">{{ __('about.cta_title') }}</h2>
            <p style="font-size: 1.1rem; margin-bottom: 2rem; opacity: 0.95;">
                {{ __('about.cta_desc') }}
            </p>
            <a href="#contact" style="background: var(--contrast-action-bg); color: var(--contrast-action-text); padding: 1rem 2.5rem; border-radius: 8px; font-weight: 600; text-decoration: none; display: inline-block; transition: all 0.3s ease;" onmouseover="this.style.opacity='0.9';" onmouseout="this.style.opacity='1';">
                <span>{{ __('about.cta_button') }}</span>
            </a>
        </div>
    </div>
</section>