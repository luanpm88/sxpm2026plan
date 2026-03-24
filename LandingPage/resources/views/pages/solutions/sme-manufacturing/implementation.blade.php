<section style="background: #ffffff;">
    <div class="container-v5">
        <div class="section-header">
            <h2 class="section-title">{{ __('sme_manufacturing.implementation_title') }}</h2>
            <p class="section-subtitle">{{ __('sme_manufacturing.implementation_subtitle') }}</p>
        </div>

        <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(220px, 1fr)); gap: 1rem;">
            @foreach(__('sme_manufacturing.implementation_steps') as $step)
                <div style="border: 1px solid var(--border); border-radius: 12px; padding: 1.25rem; background: var(--secondary-bg);">
                    <h3 style="font-size: 1rem; font-weight: 700; margin-bottom: 0.5rem;">{{ $step['number'] }}. {{ $step['title'] }}</h3>
                    <p style="margin: 0; color: var(--text-gray); line-height: 1.7;">{{ $step['description'] }}</p>
                </div>
            @endforeach
        </div>

        <div style="margin-top: 1.75rem; background: var(--secondary-bg); border: 1px solid var(--border); border-radius: 12px; padding: 1.5rem;">
            <h3 style="font-size: 1.15rem; font-weight: 700; margin-bottom: 0.75rem;">{{ __('sme_manufacturing.implementation_scrum_title') }}</h3>
            <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(260px, 1fr)); gap: 0.75rem; color: var(--text-gray);">
                @foreach(__('sme_manufacturing.implementation_scrum_steps') as $step)
                    <div>{{ $step }}</div>
                @endforeach
            </div>
        </div>

        <div style="margin-top: 1rem; background: var(--secondary-bg); border: 1px solid var(--border); border-radius: 12px; padding: 1.5rem;">
            <h3 style="font-size: 1.15rem; font-weight: 700; margin-bottom: 0.75rem;">{{ __('sme_manufacturing.implementation_governance_title') }}</h3>
            <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(240px, 1fr)); gap: 0.75rem;">
                @foreach(__('sme_manufacturing.implementation_roles') as $role)
                    <div style="background: #fff; border: 1px solid var(--border); border-radius: 8px; padding: 0.75rem; color: var(--text-gray);">
                        <strong style="color: var(--text-dark);">{{ $role['title'] }}</strong><br>
                        {{ $role['description'] }}
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</section>
