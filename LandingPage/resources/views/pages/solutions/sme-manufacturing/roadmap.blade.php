<section class="solution-section--surface">
    <div class="container-v5">
        <div class="section-header">
            <h2 class="section-title">{{ __('sme_manufacturing.roadmap_title') }}</h2>
            <p class="section-subtitle">{{ __('sme_manufacturing.roadmap_subtitle') }}</p>
        </div>

        <div class="solution-roadmap-rail">
            @foreach(__('sme_manufacturing.roadmap_phases') as $phase)
                <article class="solution-roadmap-stage">
                    <span class="solution-roadmap-stage__num">{{ $loop->iteration }}</span>
                    <h3>{{ $phase['title'] }}</h3>
                    <p>{{ $phase['description'] }}</p>
                </article>
            @endforeach
        </div>

        <div class="solution-roadmap-note">
            {{ __('sme_manufacturing.roadmap_note') }}
        </div>

        <div class="solution-baseline-grid">
            <div class="solution-baseline-panel">
                <div class="solution-kicker">
                    <span class="material-symbols-rounded" aria-hidden="true">hub</span>
                    {{ __('sme_manufacturing.roadmap_infrastructure_kicker') }}
                </div>
                <h3>{{ __('sme_manufacturing.roadmap_infrastructure_title') }}</h3>
                <div class="solution-mini-grid">
                    @foreach(__('sme_manufacturing.roadmap_infrastructure_items') as $item)
                        <div class="solution-mini-card">
                            <strong>{{ $item['title'] }}</strong>
                            <span>{{ $item['description'] }}</span>
                        </div>
                    @endforeach
                </div>
            </div>

            <div class="solution-baseline-panel">
                <div class="solution-kicker">
                    <span class="material-symbols-rounded" aria-hidden="true">memory</span>
                    {{ __('sme_manufacturing.roadmap_hardware_kicker') }}
                </div>
                <h3>{{ __('sme_manufacturing.roadmap_hardware_title') }}</h3>
                <div class="solution-mini-grid">
                    @foreach(__('sme_manufacturing.roadmap_hardware_items') as $item)
                        <div class="solution-mini-card">
                            <strong>{{ $item['title'] }}</strong>
                            <span>{{ $item['description'] }}</span>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>

        <div class="solution-note-panel">
            <div class="solution-kicker">
                <span class="material-symbols-rounded" aria-hidden="true">crisis_alert</span>
                {{ __('sme_manufacturing.roadmap_risk_kicker') }}
            </div>
            <h3>{{ __('sme_manufacturing.roadmap_risk_title') }}</h3>
            <div class="solution-risk-grid">
                @foreach(__('sme_manufacturing.roadmap_risk_items') as $item)
                    <div class="solution-risk-card">
                        <strong>{{ $item['title'] }}</strong>
                        <span>{{ $item['description'] }}</span>
                    </div>
                @endforeach
            </div>
        </div>

        <div class="solution-note-panel">
            <strong>{{ __('sme_manufacturing.roadmap_targets') }}</strong>
        </div>
    </div>
</section>
