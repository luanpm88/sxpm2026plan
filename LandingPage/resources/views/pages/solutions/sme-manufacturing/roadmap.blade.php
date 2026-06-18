<section style="background: var(--surface);">
    <div class="container-v5">
        <div class="section-header">
            <h2 class="section-title">{{ __('sme_manufacturing.roadmap_title') }}</h2>
            <p class="section-subtitle">{{ __('sme_manufacturing.roadmap_subtitle') }}</p>
        </div>

        <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(280px, 1fr)); gap: 1rem;">
            @foreach(__('sme_manufacturing.roadmap_phases') as $phase)
                <div style="border: 1px solid var(--border); border-radius: var(--card-radius); padding: 1.75rem; background: var(--secondary-bg);">
                    <h3 style="font-size: 1.15rem; font-weight: 700; margin-bottom: 0.75rem;">{{ $phase['title'] }}</h3>
                    <p style="margin: 0; color: var(--text-gray); line-height: 1.7;">{{ $phase['description'] }}</p>
                </div>
            @endforeach
        </div>

        <p style="margin-top: 1.25rem; color: var(--text-gray); font-weight: 600;">
            {{ __('sme_manufacturing.roadmap_note') }}
        </p>

        <div style="margin-top: 1.75rem; background: var(--secondary-bg); border: 1px solid var(--border); border-radius: var(--card-radius); padding: 1.5rem;">
            <h3 style="font-size: 1.2rem; font-weight: 700; margin-bottom: 0.75rem;">{{ __('sme_manufacturing.roadmap_infrastructure_title') }}</h3>
            <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(260px, 1fr)); gap: 0.75rem; color: var(--text-gray);">
                @foreach(__('sme_manufacturing.roadmap_infrastructure_items') as $item)
                    <div><strong style="color: var(--text-dark);">{{ $item['title'] }}</strong><br>{{ $item['description'] }}</div>
                @endforeach
            </div>
        </div>

        <div style="margin-top: 1rem; background: var(--secondary-bg); border: 1px solid var(--border); border-radius: var(--card-radius); padding: 1.5rem;">
            <h3 style="font-size: 1.2rem; font-weight: 700; margin-bottom: 0.75rem;">{{ __('sme_manufacturing.roadmap_hardware_title') }}</h3>
            <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(260px, 1fr)); gap: 0.75rem;">
                @foreach(__('sme_manufacturing.roadmap_hardware_items') as $item)
                    <div style="background: var(--surface); border: 1px solid var(--border); border-radius: 8px; padding: 0.75rem; color: var(--text-gray);">
                        <strong style="color: var(--text-dark);">{{ $item['title'] }}</strong><br>
                        {{ $item['description'] }}
                    </div>
                @endforeach
            </div>
        </div>

        <div style="margin-top: 1rem; background: var(--secondary-bg); border: 1px solid var(--border); border-radius: var(--card-radius); padding: 1.5rem;">
            <h3 style="font-size: 1.2rem; font-weight: 700; margin-bottom: 0.75rem;">{{ __('sme_manufacturing.roadmap_risk_title') }}</h3>
            <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(280px, 1fr)); gap: 0.75rem;">
                @foreach(__('sme_manufacturing.roadmap_risk_items') as $item)
                    <div style="background: var(--surface); border: 1px solid var(--border); border-radius: 8px; padding: 0.75rem; color: var(--text-gray);">
                        <strong style="color: var(--text-dark);">{{ $item['title'] }}</strong><br>
                        {{ $item['description'] }}
                    </div>
                @endforeach
            </div>
        </div>

        <div style="margin-top: 1rem; background: var(--surface); border: 1px solid var(--border); border-radius: var(--card-radius); padding: 1.25rem; color: var(--text-gray); line-height: 1.8;">
            <strong style="color: var(--text-dark);">{{ __('sme_manufacturing.roadmap_targets') }}</strong>
        </div>
    </div>
</section>
