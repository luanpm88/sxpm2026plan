<section style="background: var(--secondary-bg);">
    <div class="container-v5">
        <div class="section-header">
            <h2 class="section-title">{{ __('sme_manufacturing.challenges_title') }}</h2>
            <p class="section-subtitle">{{ __('sme_manufacturing.challenges_subtitle') }}</p>
        </div>

        <div style="background: #ffffff; border: 1px solid var(--border); border-radius: var(--card-radius); padding: 1.5rem; margin-bottom: 1.25rem;">
            <h3 style="font-size: 1.1rem; font-weight: 700; color: var(--text-dark); margin-bottom: 0.5rem;">{{ __('sme_manufacturing.challenges_symptoms_heading') }}</h3>
            <p style="margin: 0; color: var(--text-gray); line-height: 1.8;">
                {{ __('sme_manufacturing.challenges_symptoms_text') }}
            </p>
        </div>

        <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 1rem;">
            @foreach(__('sme_manufacturing.challenges_items') as $challenge)
                <div style="background: #fff; border: 1px solid var(--border); border-radius: var(--card-radius); padding: 1.25rem;">
                    <h3 style="font-size: 1rem; margin-bottom: 0.4rem;">{{ $challenge['title'] }}</h3>
                    <p style="margin: 0; color: var(--text-gray);">{{ $challenge['description'] }}</p>
                </div>
            @endforeach
        </div>
    </div>
</section>
