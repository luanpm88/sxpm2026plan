<section style="min-height: 70vh; display: flex; align-items: center; padding: 6rem 2rem; background: linear-gradient(135deg, var(--surface) 0%, var(--secondary-bg) 100%);">
    <div class="container-v5">
        <div style="display: grid; grid-template-columns: 1.1fr 0.9fr; gap: 3rem; align-items: center;">
            <div>
                <div style="display: inline-flex; align-items: center; gap: 0.5rem; background: var(--accent-light); color: var(--primary); padding: 0.5rem 1rem; border-radius: 999px; font-size: 0.85rem; font-weight: 600; margin-bottom: 1rem;">
                    <span class="material-symbols-rounded" style="font-size: 1rem;">factory</span>
                    {{ __('sme_manufacturing.hero_badge') }}
                </div>
                <h1 style="font-size: 2.75rem; font-weight: 800; line-height: 1.15; margin-bottom: 1.25rem; color: var(--text-dark);">
                    {{ __('sme_manufacturing.hero_title') }}
                </h1>
                <p style="font-size: 1.1rem; color: var(--text-gray); line-height: 1.8; margin-bottom: 2rem; max-width: 760px;">
                    {{ __('sme_manufacturing.hero_description') }}
                </p>

                <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(180px, 1fr)); gap: 0.75rem; margin-bottom: 2rem;">
                    @foreach(__('sme_manufacturing.hero_badges') as $badge)
                        <div style="background: var(--surface); border: 1px solid var(--border); border-radius: 8px; padding: 0.75rem; font-size: 0.9rem; color: var(--text-gray);">{{ $badge }}</div>
                    @endforeach
                </div>

                <div style="display: flex; gap: 1rem; flex-wrap: wrap;">
                    <a href="https://calendly.com/hkincotech/consultation" class="btn-primary-v5">
                        <span>{{ __('sme_manufacturing.hero_cta_consultation') }}</span>
                        <span class="material-symbols-rounded">arrow_forward</span>
                    </a>
                    <a href="https://calendly.com/hkincotech/consultation" class="btn-secondary-v5">
                        <span>{{ __('sme_manufacturing.hero_cta_assessment') }}</span>
                        <span class="material-symbols-rounded">event</span>
                    </a>
                </div>
            </div>

            <div style="background: var(--surface); border: 1px solid var(--border); border-radius: var(--card-radius); padding: 2rem; box-shadow: 0 10px 30px rgba(26, 77, 94, 0.08);">
                <h2 style="font-size: 1.2rem; font-weight: 700; color: var(--text-dark); margin-bottom: 1rem;">{{ __('sme_manufacturing.hero_sidebar_title') }}</h2>
                <div style="display: grid; gap: 0.75rem; margin-bottom: 1rem;">
                    @foreach(__('sme_manufacturing.hero_sidebar_items') as $item)
                        <div style="display: flex; align-items: center; gap: 0.75rem; color: var(--text-gray);">
                            <span class="material-symbols-rounded" style="color: var(--primary);">engineering</span>
                            {{ $item }}
                        </div>
                    @endforeach
                </div>
                <div style="border-top: 1px solid var(--border); padding-top: 1rem; color: var(--text-gray); font-size: 0.9rem; line-height: 1.7;">
                    {{ __('sme_manufacturing.hero_sidebar_audience') }}
                </div>
            </div>
        </div>
    </div>
</section>
