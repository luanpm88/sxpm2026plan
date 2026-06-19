<section class="solution-section--surface">
    <div class="container-v5">
        <div class="section-header">
            <h2 class="section-title">{{ __('sme_manufacturing.positioning_title') }}</h2>
            <p class="section-subtitle">{{ __('sme_manufacturing.positioning_subtitle') }}</p>
        </div>

        <div class="solution-context">
            <div class="solution-copy-stack">
                <h3>{{ __('sme_manufacturing.positioning_context_heading') }}</h3>
                <p>{{ __('sme_manufacturing.positioning_context_p1') }}</p>
                <p>{{ __('sme_manufacturing.positioning_context_p2') }}</p>
            </div>

            <div class="solution-panel solution-panel--flat solution-fit-panel">
                <div class="solution-fit-panel__items">
                    <div class="solution-fit-panel__item">
                        <h3>{{ __('sme_manufacturing.positioning_buyers_title') }}</h3>
                        <p>{{ __('sme_manufacturing.positioning_buyers_desc') }}</p>
                    </div>
                    <div class="solution-fit-panel__item">
                        <h3>{{ __('sme_manufacturing.positioning_targets_title') }}</h3>
                        <p>{{ __('sme_manufacturing.positioning_targets_desc') }}</p>
                    </div>
                    <div class="solution-fit-panel__item">
                        <h3>{{ __('sme_manufacturing.positioning_model_title') }}</h3>
                        <p>{{ __('sme_manufacturing.positioning_model_desc') }}</p>
                    </div>
                </div>
            </div>
        </div>

        @php
            $positioningIcons = ['manage_search', 'schema', 'view_module', 'handshake'];
        @endphp
        <div class="solution-card-grid solution-card-grid--spaced">
            @foreach(__('sme_manufacturing.positioning_items') as $item)
                <article class="solution-card">
                    <div class="solution-card__icon">
                        <span class="material-symbols-rounded" aria-hidden="true">{{ $positioningIcons[$loop->index] ?? 'check_circle' }}</span>
                    </div>
                    <h3>{{ $item['title'] }}</h3>
                    <p>{{ $item['description'] }}</p>
                </article>
            @endforeach
        </div>
    </div>
</section>
