@extends('layouts.main')

@section('content')

    <!-- Hero -->
    <section style="min-height: 70vh; display: flex; align-items: center; padding: 6rem 2rem; background: linear-gradient(135deg, var(--surface) 0%, var(--secondary-bg) 100%);">
        <div class="container-v5">
            <div style="text-align: center; max-width: 900px; margin: 0 auto;">
                <h1 style="font-size: 2.75rem; font-weight: 800; line-height: 1.15; margin-bottom: 1.5rem; color: var(--text-dark);">
                    {{ __('certifications.hero_title') }} <span style="color: var(--primary);">{{ __('certifications.hero_title_accent') }}</span>
                </h1>
                <p style="font-size: 1.15rem; color: var(--text-gray); line-height: 1.8; margin-bottom: 2rem;">
                    {{ __('certifications.hero_desc') }}
                </p>
                <a href="{{ route('landing.contact') }}" class="btn-primary-v5">
                    <span>{{ __('certifications.hero_cta') }}</span>
                    <span class="material-symbols-rounded">arrow_forward</span>
                </a>
            </div>
        </div>
    </section>

    <!-- Compliance & Security -->
    <section id="compliance">
        <div class="container-v5">
            <div class="section-header">
                <span class="section-label">{{ __('certifications.section_compliance') }}</span>
                <h2 class="section-title">{{ __('certifications.compliance_title') }} <span style="color: var(--primary);">{{ __('certifications.compliance_title_accent') }}</span></h2>
                <p class="section-subtitle">{{ __('certifications.compliance_subtitle') }}</p>
            </div>

            <div class="card-grid" style="--card-min: 280px; --card-max: 420px; --card-gap: 2rem;">
                @foreach(__('certifications.compliance') as $cert)
                <div style="background: var(--surface); border-radius: var(--card-radius); padding: 2.5rem 2rem; border: 1px solid var(--border); transition: all 0.3s ease; text-align: center;" onmouseover="this.style.borderColor='var(--primary)'; this.style.boxShadow='0 10px 30px rgba(14, 49, 99, 0.1)'; this.style.transform='translateY(-4px)';" onmouseout="this.style.borderColor='var(--border)'; this.style.boxShadow=''; this.style.transform='';">
                    <div style="font-size: 2rem; color: var(--primary); margin-bottom: 1rem;">
                        <span class="material-symbols-rounded">{{ $cert['icon'] }}</span>
                    </div>
                    <h3 style="font-size: 1.1rem; font-weight: 700; color: var(--text-dark); margin-bottom: 0.5rem;">{{ $cert['name'] }}</h3>
                    <p style="font-size: 0.85rem; color: var(--primary); font-weight: 600; margin-bottom: 1rem;">{{ $cert['subtitle'] }}</p>
                    <p style="font-size: 0.9rem; color: var(--text-gray); line-height: 1.6;">{{ $cert['desc'] }}</p>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- Cloud Provider Certifications -->
    <section style="background: var(--secondary-bg);">
        <div class="container-v5">
            <div class="section-header">
                <span class="section-label">{{ __('certifications.section_cloud') }}</span>
                <h2 class="section-title">{{ __('certifications.cloud_title') }} <span style="color: var(--primary);">{{ __('certifications.cloud_title_accent') }}</span></h2>
                <p class="section-subtitle">{{ __('certifications.cloud_subtitle') }}</p>
            </div>

            <div class="card-grid" style="--card-min: 280px; --card-max: 420px; --card-gap: 2rem;">
                @foreach(__('certifications.cloud_certs') as $cloud)
                <div style="background: var(--surface); border-radius: var(--card-radius); padding: 2rem; border: 1px solid var(--border); transition: all 0.3s ease;" onmouseover="this.style.borderColor='var(--primary)'; this.style.boxShadow='0 10px 30px rgba(14, 49, 99, 0.1)';" onmouseout="this.style.borderColor='var(--border)'; this.style.boxShadow='';">
                    <div style="font-size: 2rem; color: var(--primary); margin-bottom: 1rem;">
                        <span class="material-symbols-rounded">{{ $cloud['icon'] }}</span>
                    </div>
                    <h3 style="font-size: 1.15rem; font-weight: 700; color: var(--text-dark); margin-bottom: 1.5rem;">{{ $cloud['provider'] }}</h3>
                    <ul style="list-style: none; padding: 0; margin: 0;">
                        @foreach($cloud['certs'] as $cert)
                        <li style="padding: 0.75rem 0; display: flex; align-items: flex-start; gap: 0.75rem; border-bottom: 1px solid #e2e8f0;">
                            <span class="material-symbols-rounded" style="color: var(--primary); font-size: 1.2rem; flex-shrink: 0; margin-top: 2px;">check_circle</span>
                            <span style="color: var(--text-gray); font-size: 0.9rem; line-height: 1.5;">{{ $cert }}</span>
                        </li>
                        @endforeach
                    </ul>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- Agile & Development Certifications -->
    <section>
        <div class="container-v5">
            <div class="section-header">
                <span class="section-label">{{ __('certifications.section_agile') }}</span>
                <h2 class="section-title">{{ __('certifications.agile_title') }} <span style="color: var(--primary);">{{ __('certifications.agile_title_accent') }}</span></h2>
                <p class="section-subtitle">{{ __('certifications.agile_subtitle') }}</p>
            </div>

            <div class="card-grid" style="--card-min: 300px; --card-max: 440px; --card-gap: 2rem;">
                @foreach(__('certifications.agile') as $cat)
                <div style="background: var(--surface); border-radius: var(--card-radius); padding: 2.5rem 2rem; border: 2px solid #e2e8f0; transition: all 0.3s ease;" onmouseover="this.style.borderColor='var(--primary)'; this.style.transform='translateX(5px)';" onmouseout="this.style.borderColor='#e2e8f0'; this.style.transform='';">
                    <div style="display: flex; align-items: center; gap: 1rem; margin-bottom: 1.5rem;">
                        <div style="font-size: 2rem; color: var(--primary);">
                            <span class="material-symbols-rounded">{{ $cat['icon'] }}</span>
                        </div>
                        <h3 style="font-size: 1.15rem; font-weight: 700; color: var(--text-dark); margin: 0;">{{ $cat['category'] }}</h3>
                    </div>
                    <ul style="list-style: none; padding: 0; margin: 0;">
                        @foreach($cat['items'] as $item)
                        <li style="padding: 0.75rem 0; color: var(--text-gray); font-size: 0.9rem; line-height: 1.6; display: flex; align-items: center; gap: 0.75rem; border-bottom: 1px solid #f0f0f0;">
                            <span class="material-symbols-rounded" style="color: var(--primary); font-size: 1rem;">verified</span>
                            {{ $item }}
                        </li>
                        @endforeach
                    </ul>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- Technology & Framework Expertise -->
    <section style="background: var(--secondary-bg);">
        <div class="container-v5">
            <div class="section-header">
                <span class="section-label">{{ __('certifications.section_tech') }}</span>
                <h2 class="section-title">{{ __('certifications.tech_title') }} <span style="color: var(--primary);">{{ __('certifications.tech_title_accent') }}</span></h2>
                <p class="section-subtitle">{{ __('certifications.tech_subtitle') }}</p>
            </div>

            <div class="card-grid" style="--card-min: 280px; --card-max: 420px; --card-gap: 2rem;">
                @foreach(__('certifications.technologies') as $tech)
                <div style="background: var(--surface); border-radius: var(--card-radius); padding: 2rem; border: 1px solid var(--border); transition: all 0.3s ease;" onmouseover="this.style.boxShadow='0 8px 20px rgba(14, 49, 99, 0.1)';" onmouseout="this.style.boxShadow='';">
                    <div style="display: flex; align-items: center; gap: 1rem; margin-bottom: 1.5rem;">
                        <div style="font-size: 2rem; color: var(--primary);">
                            <span class="material-symbols-rounded">{{ $tech['icon'] }}</span>
                        </div>
                        <h3 style="font-size: 1rem; font-weight: 700; color: var(--text-dark); margin: 0;">{{ $tech['category'] }}</h3>
                    </div>
                    <ul style="list-style: none; padding: 0; margin: 0;">
                        @foreach($tech['items'] as $item)
                        <li style="padding: 0.5rem 0; color: var(--text-gray); font-size: 0.85rem; display: flex; align-items: center; gap: 0.5rem;">
                            <span style="color: var(--primary); font-weight: 700;">•</span>
                            {{ $item }}
                        </li>
                        @endforeach
                    </ul>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- Team Expertise -->
    <section>
        <div class="container-v5">
            <div class="section-header">
                <span class="section-label">{{ __('certifications.section_team') }}</span>
                <h2 class="section-title">{{ __('certifications.team_title') }} <span style="color: var(--primary);">{{ __('certifications.team_title_accent') }}</span></h2>
                <p class="section-subtitle">{{ __('certifications.team_subtitle') }}</p>
            </div>

            <div class="card-grid" style="--card-min: 280px; --card-max: 420px; --card-gap: 2rem;">
                @foreach(__('certifications.team_profile') as $profile)
                <div style="background: var(--surface); border-radius: var(--card-radius); padding: 2.5rem 2rem; border: 1px solid var(--border); text-align: center; transition: all 0.3s ease;" onmouseover="this.style.borderColor='var(--primary)'; this.style.transform='translateY(-5px)'; this.style.boxShadow='0 10px 30px rgba(14, 49, 99, 0.1)';" onmouseout="this.style.borderColor='var(--border)'; this.style.transform=''; this.style.boxShadow='';">
                    <div style="font-size: 2rem; color: var(--primary); margin-bottom: 1rem;">
                        <span class="material-symbols-rounded">{{ $profile['icon'] }}</span>
                    </div>
                    <h3 style="font-size: 1.1rem; font-weight: 700; color: var(--text-dark); margin-bottom: 0.5rem;">{{ $profile['title'] }}</h3>
                    <p style="font-size: 2rem; font-weight: 800; color: var(--primary); margin: 0.75rem 0;">{{ $profile['count'] }}</p>
                    <p style="color: var(--text-gray); font-size: 0.9rem; line-height: 1.6;">{{ $profile['desc'] }}</p>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- Continuous Learning Culture -->
    <section style="background: var(--secondary-bg);">
        <div class="container-v5">
            <div style="background: var(--contrast-panel-bg); border-radius: var(--card-radius); padding: 3.5rem 2rem; text-align: center; color: var(--contrast-panel-text);">
                <h2 style="font-size: 2rem; font-weight: 800; margin-bottom: 1rem;">{{ __('certifications.learning_title') }}</h2>
                <p style="font-size: 1.1rem; margin-bottom: 2rem; opacity: 0.95;">{{ __('certifications.learning_desc') }}</p>

                <div class="card-grid" style="--card-min: 200px; --card-max: 340px; --card-gap: 2rem; max-width: 1200px; margin: 0 auto;">
                    <div style="background: var(--contrast-decoration-bg); border-radius: 8px; padding: 1.5rem;">
                        <div style="font-size: 2rem; font-weight: 800; margin-bottom: 0.5rem;">{{ __('certifications.learning_stat1_value') }}</div>
                        <div style="font-size: 0.9rem;">{{ __('certifications.learning_stat1_label') }}</div>
                    </div>
                    <div style="background: var(--contrast-decoration-bg); border-radius: 8px; padding: 1.5rem;">
                        <div style="font-size: 2rem; font-weight: 800; margin-bottom: 0.5rem;">{{ __('certifications.learning_stat2_value') }}</div>
                        <div style="font-size: 0.9rem;">{{ __('certifications.learning_stat2_label') }}</div>
                    </div>
                    <div style="background: var(--contrast-decoration-bg); border-radius: 8px; padding: 1.5rem;">
                        <div style="font-size: 2rem; font-weight: 800; margin-bottom: 0.5rem;">{{ __('certifications.learning_stat3_value') }}</div>
                        <div style="font-size: 0.9rem;">{{ __('certifications.learning_stat3_label') }}</div>
                    </div>
                    <div style="background: var(--contrast-decoration-bg); border-radius: 8px; padding: 1.5rem;">
                        <div style="font-size: 2rem; font-weight: 800; margin-bottom: 0.5rem;">{{ __('certifications.learning_stat4_value') }}</div>
                        <div style="font-size: 0.9rem;">{{ __('certifications.learning_stat4_label') }}</div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA -->
    <section>
        <div class="container-v5">
            <div style="background: var(--contrast-panel-bg); border-radius: var(--card-radius); padding: 3.5rem 2rem; text-align: center; color: var(--contrast-panel-text);">
                <h2 style="font-size: 2rem; font-weight: 800; margin-bottom: 1rem;">{{ __('certifications.cta_title') }}</h2>
                <p style="font-size: 1.1rem; margin-bottom: 2rem; opacity: 0.95;">{{ __('certifications.cta_desc') }}</p>
                <a href="{{ route('landing.contact') }}" style="background: var(--contrast-action-bg); color: var(--contrast-action-text); padding: 1rem 2.5rem; border-radius: 8px; font-weight: 600; text-decoration: none; display: inline-block; transition: all 0.3s ease;" onmouseover="this.style.opacity='0.9';" onmouseout="this.style.opacity='1';">
                    {{ __('certifications.cta_button') }}
                </a>
            </div>
        </div>
    </section>

@endsection
