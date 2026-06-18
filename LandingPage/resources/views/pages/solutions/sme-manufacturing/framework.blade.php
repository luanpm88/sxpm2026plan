<section style="background: var(--surface);">
    <div class="container-v5">
        <div class="section-header">
            <h2 class="section-title">{{ __('sme_manufacturing.framework_title') }}</h2>
            <p class="section-subtitle">{{ __('sme_manufacturing.framework_subtitle') }}</p>
        </div>

        <div class="solution-framework">
            <div class="solution-framework__diagram">
                <svg class="factory-map__svg" viewBox="0 0 520 390" role="img" aria-label="Manufacturing operating framework layers">
                    <rect x="22" y="22" width="476" height="346" rx="18" fill="var(--secondary-bg)" stroke="var(--border)" />

                    <rect x="62" y="70" width="396" height="74" rx="14" fill="var(--surface)" stroke="var(--border)" />
                    <text x="260" y="102" text-anchor="middle" font-size="14" font-weight="800" fill="var(--text-dark)">Layer 3</text>
                    <text x="260" y="124" text-anchor="middle" font-size="11" fill="var(--text-gray)">{{ __('sme_manufacturing.framework_layer3_label') }}</text>

                    <rect x="82" y="158" width="356" height="74" rx="14" fill="var(--surface)" stroke="var(--border)" />
                    <text x="260" y="190" text-anchor="middle" font-size="14" font-weight="800" fill="var(--text-dark)">Layer 2</text>
                    <text x="260" y="212" text-anchor="middle" font-size="11" fill="var(--text-gray)">{{ __('sme_manufacturing.framework_layer2_label') }}</text>

                    <rect x="102" y="246" width="316" height="74" rx="14" fill="var(--button-primary-bg)" />
                    <text x="260" y="278" text-anchor="middle" font-size="14" font-weight="800" fill="var(--button-primary-text)">Layer 1</text>
                    <text x="260" y="300" text-anchor="middle" font-size="11" fill="var(--button-primary-text)">{{ __('sme_manufacturing.framework_layer1_label') }}</text>

                    <path d="M 260 246 L 260 232" stroke="var(--primary)" stroke-width="2.5" />
                    <path d="M 260 158 L 260 144" stroke="var(--primary)" stroke-width="2.5" />
                    <text x="260" y="350" text-anchor="middle" font-size="11" font-weight="700" fill="var(--primary)">{{ __('sme_manufacturing.framework_note') }}</text>
                </svg>
            </div>

            <div class="framework-layer-list">
                @foreach([
                    ['num' => '01', 'title' => __('sme_manufacturing.framework_layer1_title'), 'items' => __('sme_manufacturing.framework_layer1_items')],
                    ['num' => '02', 'title' => __('sme_manufacturing.framework_layer2_title'), 'items' => __('sme_manufacturing.framework_layer2_items')],
                    ['num' => '03', 'title' => __('sme_manufacturing.framework_layer3_title'), 'items' => __('sme_manufacturing.framework_layer3_items')],
                ] as $layer)
                    <article class="framework-layer">
                        <span class="framework-layer__num">{{ $layer['num'] }}</span>
                        <div>
                            <h3 style="font-size: 1rem; font-weight: 800; color: var(--text-dark); margin-bottom: 0.55rem;">{{ $layer['title'] }}</h3>
                            <ul>
                                @foreach($layer['items'] as $item)
                                    <li>{{ $item }}</li>
                                @endforeach
                            </ul>
                        </div>
                    </article>
                @endforeach
            </div>
        </div>

        <div style="margin-top: 3rem;">
            <div class="section-header" style="margin-bottom: 1.6rem;">
                <h3 class="section-title" style="font-size: 1.65rem;">{{ __('sme_manufacturing.framework_tech_title') }}</h3>
                <p class="section-subtitle">{{ __('sme_manufacturing.framework_tech_subtitle') }}</p>
            </div>

            @php
                $techCards = [
                    ['icon' => 'dns', 'title' => __('sme_manufacturing.framework_backend_title'), 'items' => __('sme_manufacturing.framework_backend_items')],
                    ['icon' => 'devices', 'title' => __('sme_manufacturing.framework_frontend_title'), 'items' => __('sme_manufacturing.framework_frontend_items')],
                    ['icon' => 'settings_input_antenna', 'title' => __('sme_manufacturing.framework_device_title'), 'items' => __('sme_manufacturing.framework_device_items')],
                    ['icon' => 'admin_panel_settings', 'title' => __('sme_manufacturing.framework_security_title'), 'items' => __('sme_manufacturing.framework_security_items')],
                    ['icon' => 'cloud_sync', 'title' => __('sme_manufacturing.framework_cloud_title'), 'items' => __('sme_manufacturing.framework_cloud_items')],
                ];
            @endphp

            <div class="solution-module-grid">
                @foreach($techCards as $card)
                    <article class="solution-module-card">
                        <div class="solution-module-card__icon">
                            <span class="material-symbols-rounded" aria-hidden="true">{{ $card['icon'] }}</span>
                        </div>
                        <h3>{{ $card['title'] }}</h3>
                        <ul>
                            @foreach($card['items'] as $item)
                                <li>{{ $item }}</li>
                            @endforeach
                        </ul>
                    </article>
                @endforeach
            </div>
        </div>
    </div>
</section>
