<section class="solution-section--surface">
    <div class="container-v5">
        <div class="solution-cta-panel">
            <h2>{{ __('sme_manufacturing.cta_title') }}</h2>
            <p>{{ __('sme_manufacturing.cta_description') }}</p>
            <a href="https://calendly.com/hkincotech/consultation" class="solution-cta-panel__button">
                <span>{{ __('sme_manufacturing.cta_button') }}</span>
                <span class="material-symbols-rounded" aria-hidden="true">arrow_forward</span>
            </a>
        </div>

        <div class="solution-commercial">
            <div class="section-header">
                <h2 class="section-title">{{ __('sme_manufacturing.packages_title') }}</h2>
                <p class="section-subtitle">{{ __('sme_manufacturing.packages_subtitle') }}</p>
            </div>

            <div class="solution-packages-grid">
                @foreach(__('sme_manufacturing.packages') as $package)
                    <article class="solution-package-card">
                        <h3>{{ $package['title'] }}</h3>
                        <div class="solution-package-card__price">{{ $package['price'] }}</div>
                        <ul>
                            @foreach($package['items'] as $item)
                                <li>{{ $item }}</li>
                            @endforeach
                        </ul>
                    </article>
                @endforeach
            </div>
        </div>

        <div class="solution-support-grid">
            <div class="solution-assurance-panel">
                <div class="solution-kicker">
                    <span class="material-symbols-rounded" aria-hidden="true">support_agent</span>
                    {{ __('sme_manufacturing.maintenance_kicker') }}
                </div>
                <h3>{{ __('sme_manufacturing.maintenance_title') }}</h3>
                <ul class="solution-check-list">
                    @foreach(__('sme_manufacturing.maintenance_items') as $item)
                        <li>{{ $item }}</li>
                    @endforeach
                </ul>
            </div>

            <div class="solution-assurance-panel">
                <div class="solution-kicker">
                    <span class="material-symbols-rounded" aria-hidden="true">backup</span>
                    {{ __('sme_manufacturing.backup_kicker') }}
                </div>
                <h3>{{ __('sme_manufacturing.backup_title') }}</h3>
                <ul class="solution-check-list">
                    @foreach(__('sme_manufacturing.backup_items') as $item)
                        <li>{{ $item }}</li>
                    @endforeach
                </ul>
            </div>
        </div>

        <div class="solution-note-panel">
            <div class="solution-kicker">
                <span class="material-symbols-rounded" aria-hidden="true">contract</span>
                {{ __('sme_manufacturing.commercial_notes_kicker') }}
            </div>
            <h3>{{ __('sme_manufacturing.commercial_notes_title') }}</h3>
            <ul class="solution-check-list">
                @foreach(__('sme_manufacturing.commercial_notes_items') as $item)
                    <li>{{ $item }}</li>
                @endforeach
            </ul>
        </div>
    </div>
</section>
