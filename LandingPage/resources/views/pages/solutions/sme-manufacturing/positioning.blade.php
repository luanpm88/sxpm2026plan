<section style="background: #ffffff;">
    <div class="container-v5">
        <div class="section-header">
            <h2 class="section-title">{{ __('sme_manufacturing.positioning_title') }}</h2>
            <p class="section-subtitle">{{ __('sme_manufacturing.positioning_subtitle') }}</p>
        </div>

        <div style="background: var(--secondary-bg); border: 1px solid var(--border); border-radius: 12px; padding: 1.75rem; margin-bottom: 1.5rem;">
            <h3 style="font-size: 1.2rem; font-weight: 700; color: var(--text-dark); margin-bottom: 0.75rem;">{{ __('sme_manufacturing.positioning_context_heading') }}</h3>
            <p style="color: var(--text-gray); line-height: 1.8; margin-bottom: 0.75rem;">
                {{ __('sme_manufacturing.positioning_context_p1') }}
            </p>
            <p style="color: var(--text-gray); line-height: 1.8; margin: 0;">
                {{ __('sme_manufacturing.positioning_context_p2') }}
            </p>
        </div>

        <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(280px, 1fr)); gap: 1.5rem;">
            @foreach(__('sme_manufacturing.positioning_items') as $item)
                <div style="background: var(--secondary-bg); border: 1px solid var(--border); border-radius: 12px; padding: 1.75rem;">
                    <h3 style="font-size: 1.1rem; font-weight: 700; margin-bottom: 0.75rem; color: var(--text-dark);">{{ $item['title'] }}</h3>
                    <p style="color: var(--text-gray); margin: 0; line-height: 1.7;">{{ $item['description'] }}</p>
                </div>
            @endforeach
        </div>

        <div style="margin-top: 1.5rem; display: grid; grid-template-columns: repeat(auto-fit, minmax(240px, 1fr)); gap: 1rem;">
            <div style="background: #fff; border: 1px dashed var(--border); border-radius: 10px; padding: 1rem;">
                <h3 style="font-size: 1rem; font-weight: 700; margin-bottom: 0.4rem; color: var(--text-dark);">{{ __('sme_manufacturing.positioning_buyers_title') }}</h3>
                <p style="margin: 0; color: var(--text-gray); font-size: 0.9rem;">{{ __('sme_manufacturing.positioning_buyers_desc') }}</p>
            </div>
            <div style="background: #fff; border: 1px dashed var(--border); border-radius: 10px; padding: 1rem;">
                <h3 style="font-size: 1rem; font-weight: 700; margin-bottom: 0.4rem; color: var(--text-dark);">{{ __('sme_manufacturing.positioning_targets_title') }}</h3>
                <p style="margin: 0; color: var(--text-gray); font-size: 0.9rem;">{{ __('sme_manufacturing.positioning_targets_desc') }}</p>
            </div>
            <div style="background: #fff; border: 1px dashed var(--border); border-radius: 10px; padding: 1rem;">
                <h3 style="font-size: 1rem; font-weight: 700; margin-bottom: 0.4rem; color: var(--text-dark);">{{ __('sme_manufacturing.positioning_model_title') }}</h3>
                <p style="margin: 0; color: var(--text-gray); font-size: 0.9rem;">{{ __('sme_manufacturing.positioning_model_desc') }}</p>
            </div>
        </div>
    </div>
</section>
