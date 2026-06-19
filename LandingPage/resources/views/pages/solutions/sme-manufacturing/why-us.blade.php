<section class="solution-section--muted">
    <div class="container-v5">
        <div class="section-header">
            <h2 class="section-title">{{ __('sme_manufacturing.why_us_title') }}</h2>
            <p class="section-subtitle">{{ __('sme_manufacturing.why_us_subtitle') }}</p>
        </div>

        @php
            $principleIcons = [
                'account_tree',
                'all_inclusive',
                'schema',
                'description',
                'support_agent',
                'developer_board',
            ];
        @endphp

        <div class="solution-proof-layout">
            <aside class="solution-proof-feature">
                <div class="solution-proof-feature__icon">
                    <span class="material-symbols-rounded" aria-hidden="true">verified</span>
                </div>
                <div class="solution-kicker">
                    <span class="material-symbols-rounded" aria-hidden="true">domain_verification</span>
                    {{ __('sme_manufacturing.why_us_kicker') }}
                </div>
                <h3>{{ __('sme_manufacturing.why_us_capability_title') }}</h3>
                <p>{{ __('sme_manufacturing.why_us_capability_desc') }}</p>
            </aside>

            <div class="solution-principle-grid">
                @foreach(__('sme_manufacturing.why_us_items') as $item)
                    <article class="solution-principle-card">
                        <div class="solution-principle-card__icon">
                            <span class="material-symbols-rounded" aria-hidden="true">{{ $principleIcons[$loop->index] ?? 'check_circle' }}</span>
                        </div>
                        <h3>{{ $item['title'] }}</h3>
                        <p>{{ $item['description'] }}</p>
                    </article>
                @endforeach
            </div>
        </div>

        <div class="solution-assurance-grid">
            <div class="solution-assurance-panel">
                <div class="solution-kicker">
                    <span class="material-symbols-rounded" aria-hidden="true">shield</span>
                    {{ __('sme_manufacturing.why_us_security_kicker') }}
                </div>
                <h3>{{ __('sme_manufacturing.why_us_security_title') }}</h3>
                <ul class="solution-check-list">
                    @foreach(__('sme_manufacturing.why_us_security_items') as $item)
                        <li>{{ $item }}</li>
                    @endforeach
                </ul>
            </div>

            <div class="solution-assurance-panel">
                <div class="solution-kicker">
                    <span class="material-symbols-rounded" aria-hidden="true">engineering</span>
                    {{ __('sme_manufacturing.why_us_delivery_kicker') }}
                </div>
                <h3>{{ __('sme_manufacturing.why_us_delivery_title') }}</h3>
                <ul class="solution-check-list">
                    @foreach(__('sme_manufacturing.why_us_delivery_items') as $item)
                        <li>{{ $item }}</li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
</section>
