<section class="solution-hero">
    <div class="container-v5">
        <div class="solution-hero__grid">
            <div>
                <div class="solution-eyebrow">
                    <span class="material-symbols-rounded" aria-hidden="true">factory</span>
                    {{ __('sme_manufacturing.hero_badge') }}
                </div>

                <h1 class="solution-hero__title">{{ __('sme_manufacturing.hero_title') }}</h1>
                <p class="solution-hero__description">{{ __('sme_manufacturing.hero_description') }}</p>

                @php
                    $proofIcons = ['account_tree', 'hub', 'timeline', 'verified'];
                @endphp
                <div class="solution-proof-grid">
                    @foreach(__('sme_manufacturing.hero_badges') as $badge)
                        <div class="solution-proof">
                            <span class="material-symbols-rounded" aria-hidden="true">{{ $proofIcons[$loop->index] ?? 'check_circle' }}</span>
                            <span>{{ $badge }}</span>
                        </div>
                    @endforeach
                </div>

                <div class="solution-action-row">
                    <a href="https://calendly.com/hkincotech/consultation" class="btn-primary-v5">
                        <span>{{ __('sme_manufacturing.hero_cta_consultation') }}</span>
                        <span class="material-symbols-rounded" aria-hidden="true">arrow_forward</span>
                    </a>
                    <a href="https://calendly.com/hkincotech/consultation" class="btn-secondary-v5">
                        <span>{{ __('sme_manufacturing.hero_cta_assessment') }}</span>
                        <span class="material-symbols-rounded" aria-hidden="true">assessment</span>
                    </a>
                </div>
            </div>

            <aside class="solution-panel" aria-label="{{ __('sme_manufacturing.hero_sidebar_title') }}">
                <div class="factory-map">
                    <div>
                        <h2 class="solution-panel__title">{{ __('sme_manufacturing.hero_sidebar_title') }}</h2>
                        <div class="solution-sidebar-list">
                            @foreach(__('sme_manufacturing.hero_sidebar_items') as $item)
                                <div class="solution-sidebar-list__item">
                                    <span class="material-symbols-rounded" aria-hidden="true">engineering</span>
                                    <span>{{ $item }}</span>
                                </div>
                            @endforeach
                        </div>
                    </div>

                    <div class="factory-map__screen">
                        <svg class="factory-map__svg" viewBox="0 0 520 350" role="img" aria-label="Manufacturing software operating model">
                            <defs>
                                <marker id="sme-flow-arrow" viewBox="0 0 10 10" refX="9" refY="5" markerWidth="6" markerHeight="6" orient="auto-start-reverse">
                                    <path d="M 0 0 L 10 5 L 0 10 z" fill="var(--primary)" />
                                </marker>
                            </defs>

                            <rect x="18" y="18" width="484" height="314" rx="18" fill="var(--surface)" stroke="var(--border)" />
                            <rect x="42" y="48" width="126" height="66" rx="12" fill="var(--primary-subtle)" stroke="var(--border)" />
                            <text x="105" y="74" text-anchor="middle" font-size="12" font-weight="800" fill="var(--text-dark)">{{ __('sme_manufacturing.diagram.shopfloor_title') }}</text>
                            <text x="105" y="94" text-anchor="middle" font-size="10" fill="var(--text-gray)">{{ __('sme_manufacturing.diagram.shopfloor_desc') }}</text>

                            <rect x="42" y="142" width="126" height="66" rx="12" fill="var(--primary-subtle)" stroke="var(--border)" />
                            <text x="105" y="168" text-anchor="middle" font-size="12" font-weight="800" fill="var(--text-dark)">{{ __('sme_manufacturing.diagram.warehouse_title') }}</text>
                            <text x="105" y="188" text-anchor="middle" font-size="10" fill="var(--text-gray)">{{ __('sme_manufacturing.diagram.warehouse_desc') }}</text>

                            <rect x="42" y="236" width="126" height="66" rx="12" fill="var(--primary-subtle)" stroke="var(--border)" />
                            <text x="105" y="262" text-anchor="middle" font-size="12" font-weight="800" fill="var(--text-dark)">{{ __('sme_manufacturing.diagram.quality_title') }}</text>
                            <text x="105" y="282" text-anchor="middle" font-size="10" fill="var(--text-gray)">{{ __('sme_manufacturing.diagram.quality_desc') }}</text>

                            <rect x="214" y="108" width="112" height="134" rx="16" fill="var(--button-primary-bg)" />
                            <text x="270" y="153" text-anchor="middle" font-size="13" font-weight="800" fill="var(--button-primary-text)">{{ __('sme_manufacturing.diagram.core_1') }}</text>
                            <text x="270" y="172" text-anchor="middle" font-size="13" font-weight="800" fill="var(--button-primary-text)">{{ __('sme_manufacturing.diagram.core_2') }}</text>
                            <text x="270" y="198" text-anchor="middle" font-size="10" fill="var(--button-primary-text)">{{ __('sme_manufacturing.diagram.core_desc_1') }}</text>
                            <text x="270" y="214" text-anchor="middle" font-size="10" fill="var(--button-primary-text)">{{ __('sme_manufacturing.diagram.core_desc_2') }}</text>

                            <rect x="370" y="58" width="104" height="78" rx="14" fill="var(--surface)" stroke="var(--border)" />
                            <text x="422" y="88" text-anchor="middle" font-size="12" font-weight="800" fill="var(--text-dark)">{{ __('sme_manufacturing.diagram.dashboard_title') }}</text>
                            <text x="422" y="108" text-anchor="middle" font-size="10" fill="var(--text-gray)">{{ __('sme_manufacturing.diagram.dashboard_desc') }}</text>

                            <rect x="370" y="206" width="104" height="78" rx="14" fill="var(--surface)" stroke="var(--border)" />
                            <text x="422" y="236" text-anchor="middle" font-size="12" font-weight="800" fill="var(--text-dark)">{{ __('sme_manufacturing.diagram.integration_title') }}</text>
                            <text x="422" y="256" text-anchor="middle" font-size="10" fill="var(--text-gray)">{{ __('sme_manufacturing.diagram.integration_desc') }}</text>

                            <path d="M 168 81 C 190 92, 198 116, 214 138" fill="none" stroke="var(--primary)" stroke-width="2.4" marker-end="url(#sme-flow-arrow)" />
                            <path d="M 168 175 L 214 175" fill="none" stroke="var(--primary)" stroke-width="2.4" marker-end="url(#sme-flow-arrow)" />
                            <path d="M 168 269 C 190 258, 198 234, 214 212" fill="none" stroke="var(--primary)" stroke-width="2.4" marker-end="url(#sme-flow-arrow)" />
                            <path d="M 326 146 C 346 122, 352 102, 370 96" fill="none" stroke="var(--primary)" stroke-width="2.4" marker-end="url(#sme-flow-arrow)" />
                            <path d="M 326 204 C 346 224, 352 240, 370 246" fill="none" stroke="var(--primary)" stroke-width="2.4" marker-end="url(#sme-flow-arrow)" />
                        </svg>
                    </div>

                    <div class="factory-map__legend">
                        <div class="factory-map__legend-item">{{ __('sme_manufacturing.diagram.legend_1') }}</div>
                        <div class="factory-map__legend-item">{{ __('sme_manufacturing.diagram.legend_2') }}</div>
                        <div class="factory-map__legend-item">{{ __('sme_manufacturing.diagram.legend_3') }}</div>
                    </div>

                    <p class="factory-map__audience">
                        {{ __('sme_manufacturing.hero_sidebar_audience') }}
                    </p>
                </div>
            </aside>
        </div>
    </div>
</section>
