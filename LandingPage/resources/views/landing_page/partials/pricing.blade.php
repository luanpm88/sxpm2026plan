<!-- Hero -->
<section id="pricing" style="min-height: 60vh; display: flex; align-items: center; padding: 6rem 2rem; background: linear-gradient(135deg, var(--surface) 0%, var(--secondary-bg) 100%);">
    <div class="container-v5">
        <div style="text-align: center; max-width: 900px; margin: 0 auto;">
            <h1 style="font-size: 2.75rem; font-weight: 800; line-height: 1.15; margin-bottom: 1.5rem; color: var(--text-dark);">
                {{ __('pricing.hero_title') }} <span style="color: var(--primary);">{{ __('pricing.hero_title_highlight') }}</span>
            </h1>
            <p style="font-size: 1.15rem; color: var(--text-gray); line-height: 1.8;">
                {{ __('pricing.hero_desc') }}
            </p>
        </div>
    </div>
</section>

<!-- Pricing Plans -->
<section style="background: white;">
    <div class="container-v5">
        <div class="section-header">
            <h2 class="section-title">{{ __('pricing.plans_title') }}</h2>
            <p class="section-subtitle">{{ __('pricing.plans_subtitle') }}</p>
        </div>

        <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 2rem; margin-bottom: 4rem;">
            @php
            $pricing_plans = __('pricing.plans');
            @endphp

            @foreach($pricing_plans as $plan)
            <div style="background: {{ $plan['highlighted'] ? 'linear-gradient(135deg, var(--primary) 0%, var(--primary-light) 100%)' : 'white' }}; border-radius: var(--card-radius); padding: 2.5rem; border: {{ $plan['highlighted'] ? 'none' : '1px solid var(--border)' }}; position: relative; transition: all 0.3s ease;"
                    onmouseover="this.style.transform='translateY(-5px)'; this.style.boxShadow='0 12px 30px rgba(14, 49, 99, 0.15)';"
                    onmouseout="this.style.transform='translateY(0)'; this.style.boxShadow='';">

                @if($plan['highlighted'])
                <div style="position: absolute; top: -15px; left: 50%; transform: translateX(-50%); background: var(--primary); color: white; padding: 0.4rem 1rem; border-radius: 20px; font-size: 0.8rem; font-weight: 700; text-transform: uppercase;">
                    {{ __('pricing.label_popular') }}
                </div>
                @endif

                <h3 style="font-size: 1.3rem; font-weight: 700; color: {{ $plan['highlighted'] ? 'white' : 'var(--text-dark)' }}; margin-bottom: 0.5rem;">
                    {{ $plan['name'] }}
                </h3>
                <p style="color: {{ $plan['highlighted'] ? 'rgba(255,255,255,0.9)' : 'var(--text-gray)' }}; margin-bottom: 1.5rem;">
                    {{ $plan['desc'] }}
                </p>

                <div style="margin-bottom: 2rem;">
                    <div style="font-size: 0.9rem; letter-spacing: 0.5px; text-transform: uppercase; font-weight: 700; color: {{ $plan['highlighted'] ? 'rgba(255,255,255,0.85)' : 'var(--text-gray)' }}; margin-bottom: 0.35rem;">
                        {{ $plan['period'] }}
                    </div>
                    <div style="display: flex; align-items: baseline; gap: 0.5rem; flex-wrap: wrap; margin-bottom: 0.35rem;">
                        <span style="font-size: 2.4rem; font-weight: 800; color: {{ $plan['highlighted'] ? 'white' : 'var(--primary)' }};">
                            {{ $plan['price_from'] }}
                        </span>
                        @if($plan['price_to'])
                        <span style="font-size: 0.95rem; font-weight: 600; color: {{ $plan['highlighted'] ? 'rgba(255,255,255,0.85)' : 'var(--text-gray)' }};">{{ __('pricing.label_to') }}</span>
                        <span style="font-size: 2.05rem; font-weight: 700; color: {{ $plan['highlighted'] ? 'white' : 'var(--primary)' }};">
                            {{ $plan['price_to'] }}
                        </span>
                        @endif
                    </div>
                    <div style="font-size: 0.95rem; color: {{ $plan['highlighted'] ? 'rgba(255,255,255,0.85)' : 'var(--text-gray)' }};">
                        {{ __('pricing.label_per_month') }}
                    </div>
                </div>

                <ul style="list-style: none; padding: 0; margin-bottom: 2rem;">
                    @foreach($plan['features'] as $feature)
                    <li style="display: flex; align-items: center; gap: 0.75rem; margin-bottom: 1rem; color: {{ $plan['highlighted'] ? 'rgba(255,255,255,0.95)' : 'var(--text-gray)' }};">
                        <span class="material-symbols-rounded" style="font-size: 1.25rem; color: {{ $plan['highlighted'] ? 'white' : 'var(--primary)' }};">check_circle</span>
                        {{ $feature }}
                    </li>
                    @endforeach
                </ul>

                <a href="#contact" style="background: {{ $plan['highlighted'] ? 'white' : 'var(--primary)' }}; color: {{ $plan['highlighted'] ? 'var(--primary)' : 'white' }}; padding: 0.75rem 1.5rem; border-radius: 8px; font-weight: 600; text-decoration: none; display: block; text-align: center; transition: all 0.3s ease;"
                    onmouseover="this.style.opacity='0.85';"
                    onmouseout="this.style.opacity='1';">
                    {{ __('pricing.plan_cta') }}
                </a>
            </div>
            @endforeach
        </div>
    </div>
</section>

<!-- What's Included -->
<section style="background: var(--secondary-bg);">
    <div class="container-v5">
        <div class="section-header">
            <h2 class="section-title">{{ __('pricing.services_title') }}</h2>
            <p class="section-subtitle">{{ __('pricing.services_subtitle') }}</p>
        </div>

        <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(250px, 1fr)); gap: 2rem;">
            @php
            $core_services = __('pricing.core_services');
            @endphp

            @foreach($core_services as $service)
            <div style="background: white; border-radius: var(--card-radius); padding: 2rem; text-align: center;">
                <div style="font-size: 2rem; color: var(--primary); margin-bottom: 1rem;">
                    <span class="material-symbols-rounded">{{ $service['icon'] }}</span>
                </div>
                <h3 style="font-size: 1.1rem; font-weight: 700; color: var(--text-dark); margin-bottom: 0.75rem;">
                    {{ $service['title'] }}
                </h3>
                <p style="color: var(--text-gray); font-size: 0.95rem; line-height: 1.6;">
                    {{ $service['desc'] }}
                </p>
            </div>
            @endforeach
        </div>
    </div>
</section>

<!-- Comparison Table -->
<section style="background: white;">
    <div class="container-v5">
        <div class="section-header">
            <h2 class="section-title">{{ __('pricing.comparison_title') }}</h2>
            <p class="section-subtitle">{{ __('pricing.comparison_subtitle') }}</p>
        </div>

        <div style="overflow-x: auto;">
            <table style="width: 100%; border-collapse: collapse;">
                <thead>
                    <tr style="background: var(--secondary-bg);">
                        <th style="padding: 1rem; text-align: left; font-weight: 700; color: var(--text-dark); border-bottom: 2px solid var(--border);">{{ __('pricing.comparison_feature') }}</th>
                        <th style="padding: 1rem; text-align: center; font-weight: 700; color: var(--text-dark); border-bottom: 2px solid var(--border);">{{ __('pricing.comparison_mvp') }}</th>
                        <th style="padding: 1rem; text-align: center; font-weight: 700; color: var(--text-dark); border-bottom: 2px solid var(--border);">{{ __('pricing.comparison_growth') }}</th>
                        <th style="padding: 1rem; text-align: center; font-weight: 700; color: var(--text-dark); border-bottom: 2px solid var(--border);">{{ __('pricing.comparison_enterprise') }}</th>
                    </tr>
                </thead>
                <tbody>
                    @php
                    $features = __('pricing.features');
                    @endphp

                    @foreach($features as $f)
                    <tr style="border-bottom: 1px solid var(--border);">
                        <td style="padding: 1rem; font-weight: 600; color: var(--text-dark);">{{ $f['feature'] }}</td>
                        <td style="padding: 1rem; text-align: center; color: var(--text-gray);">{{ $f['startup'] }}</td>
                        <td style="padding: 1rem; text-align: center; color: var(--primary); font-weight: 600;">{{ $f['growth'] }}</td>
                        <td style="padding: 1rem; text-align: center; color: var(--text-gray);">{{ $f['enterprise'] }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</section>

<!-- FAQ -->
<section style="background: var(--secondary-bg);">
    <div class="container-v5">
        <div class="section-header">
            <h2 class="section-title">{{ __('pricing.faq_title') }}</h2>
            <p class="section-subtitle">{{ __('pricing.faq_subtitle') }}</p>
        </div>

        <div style="max-width: 800px; margin: 0 auto;">
            @php
            $faqs = __('pricing.faqs');
            @endphp

            @foreach($faqs as $faq)
            <div style="background: white; border-radius: 8px; padding: 1.5rem; margin-bottom: 1rem;">
                <div style="font-weight: 700; color: var(--text-dark); margin-bottom: 0.75rem; cursor: pointer; display: flex; align-items: center; gap: 0.75rem;">
                    <span class="material-symbols-rounded" style="color: var(--primary);">expand_more</span>
                    {{ $faq['q'] }}
                </div>
                <p style="color: var(--text-gray); line-height: 1.6; margin-left: 2.5rem;">
                    {{ $faq['a'] }}
                </p>
            </div>
            @endforeach
        </div>
    </div>
</section>

<!-- Custom Quote -->
<section style="background: white;">
    <div class="container-v5">
        <div style="background: linear-gradient(135deg, var(--primary) 0%, var(--primary-light) 100%); border-radius: var(--card-radius); padding: 3.5rem 2rem; text-align: center; color: white;">
            <h2 style="font-size: 2rem; font-weight: 800; margin-bottom: 1rem;">{{ __('pricing.cta_title') }}</h2>
            <p style="font-size: 1.1rem; margin-bottom: 2rem; opacity: 0.95;">
                {{ __('pricing.cta_desc') }}
            </p>
            <a href="#contact" style="background: white; color: var(--primary); padding: 1rem 2.5rem; border-radius: 8px; font-weight: 600; text-decoration: none; display: inline-block; transition: all 0.3s ease;" onmouseover="this.style.backgroundColor='var(--secondary-bg)';" onmouseout="this.style.backgroundColor='white';">
                <span>{{ __('pricing.cta_button') }}</span>
            </a>
        </div>
    </div>
</section>