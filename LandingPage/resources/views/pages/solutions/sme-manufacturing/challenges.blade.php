<section class="solution-section--muted">
    <div class="container-v5">
        <div class="section-header">
            <h2 class="section-title">{{ __('sme_manufacturing.challenges_title') }}</h2>
            <p class="section-subtitle">{{ __('sme_manufacturing.challenges_subtitle') }}</p>
        </div>

        @php
            $challengeIcons = [
                'visibility',
                'table_chart',
                'sync_problem',
                'fact_check',
                'assignment',
                'policy',
                'language',
            ];
        @endphp

        <div class="solution-pain-map">
            <aside class="solution-pain-map__narrative">
                <div class="solution-kicker">
                    <span class="material-symbols-rounded" aria-hidden="true">troubleshoot</span>
                    {{ __('sme_manufacturing.challenges_kicker') }}
                </div>
                <h3>{{ __('sme_manufacturing.challenges_symptoms_heading') }}</h3>
                <p>{{ __('sme_manufacturing.challenges_symptoms_text') }}</p>

                <div class="solution-data-map" aria-label="{{ __('sme_manufacturing.challenges_data_map_title') }}">
                    @foreach(__('sme_manufacturing.challenges_data_map') as $node)
                        <div class="solution-data-map__node">
                            <span class="material-symbols-rounded" aria-hidden="true">{{ $node['icon'] }}</span>
                            <strong>{{ $node['title'] }}</strong>
                            <small>{{ $node['description'] }}</small>
                        </div>
                    @endforeach
                </div>

                <div class="solution-pain-flow">
                    @foreach(__('sme_manufacturing.challenges_flow') as $item)
                        <div class="solution-pain-flow__item">
                            <span class="material-symbols-rounded" aria-hidden="true">{{ $item['icon'] }}</span>
                            <span>{{ $item['text'] }}</span>
                        </div>
                    @endforeach
                </div>
            </aside>

            <div class="solution-pain-grid">
                @foreach(__('sme_manufacturing.challenges_items') as $challenge)
                    <article class="solution-pain-card">
                        <div class="solution-card-head">
                            <div class="solution-pain-card__icon">
                                <span class="material-symbols-rounded" aria-hidden="true">{{ $challengeIcons[$loop->index] ?? 'error' }}</span>
                            </div>
                            <span class="solution-card-index">{{ sprintf('%02d', $loop->iteration) }}</span>
                        </div>
                        <h3>{{ $challenge['title'] }}</h3>
                        <p>{{ $challenge['description'] }}</p>
                    </article>
                @endforeach
            </div>
        </div>
    </div>
</section>
