<section style="background: var(--secondary-bg);">
    <div class="container-v5">
        <div class="section-header">
            <h2 class="section-title">{{ __('sme_manufacturing.why_us_title') }}</h2>
            <p class="section-subtitle">{{ __('sme_manufacturing.why_us_subtitle') }}</p>
        </div>

        <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(260px, 1fr)); gap: 1rem;">
            @foreach(__('sme_manufacturing.why_us_items') as $item)
                <div style="background: var(--surface); border: 1px solid var(--border); border-radius: var(--card-radius); padding: 1.5rem;">
                    <h3 style="font-size: 1.05rem; font-weight: 700; margin-bottom: 0.5rem;">{{ $item['title'] }}</h3>
                    <p style="margin: 0; color: var(--text-gray);">{{ $item['description'] }}</p>
                </div>
            @endforeach
        </div>

        <div style="margin-top: 1.5rem; display: grid; grid-template-columns: 1fr 1fr; gap: 1rem;">
            <div style="background: var(--surface); border: 1px solid var(--border); border-radius: var(--card-radius); padding: 1.5rem;">
                <h3 style="font-size: 1.15rem; font-weight: 700; margin-bottom: 0.75rem;">{{ __('sme_manufacturing.why_us_security_title') }}</h3>
                <ul style="margin: 0; padding-left: 1.2rem; color: var(--text-gray); line-height: 1.8;">
                    @foreach(__('sme_manufacturing.why_us_security_items') as $item)
                        <li>{{ $item }}</li>
                    @endforeach
                </ul>
            </div>

            <div style="background: var(--surface); border: 1px solid var(--border); border-radius: var(--card-radius); padding: 1.5rem;">
                <h3 style="font-size: 1.15rem; font-weight: 700; margin-bottom: 0.75rem;">{{ __('sme_manufacturing.why_us_delivery_title') }}</h3>
                <ul style="margin: 0; padding-left: 1.2rem; color: var(--text-gray); line-height: 1.8;">
                    @foreach(__('sme_manufacturing.why_us_delivery_items') as $item)
                        <li>{{ $item }}</li>
                    @endforeach
                </ul>
            </div>
        </div>

        <div style="margin-top: 1rem; background: var(--surface); border: 1px solid var(--border); border-radius: var(--card-radius); padding: 1.5rem;">
            <h3 style="font-size: 1.15rem; font-weight: 700; margin-bottom: 0.5rem;">{{ __('sme_manufacturing.why_us_capability_title') }}</h3>
            <p style="margin: 0; color: var(--text-gray); line-height: 1.8;">
                {{ __('sme_manufacturing.why_us_capability_desc') }}
            </p>
        </div>
    </div>
</section>
