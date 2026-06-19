<section class="solution-section--muted">
    <div class="container-v5">
        <div class="section-header">
            <h2 class="section-title">{{ __('sme_manufacturing.modules_title') }}</h2>
            <p class="section-subtitle">{{ __('sme_manufacturing.modules_subtitle') }}</p>
        </div>

        @php
            $primaryModules = [
                ['icon' => 'precision_manufacturing', 'title' => __('sme_manufacturing.modules_production_title'), 'items' => __('sme_manufacturing.modules_production_items')],
                ['icon' => 'inventory_2', 'title' => __('sme_manufacturing.modules_warehouse_title'), 'items' => __('sme_manufacturing.modules_warehouse_items')],
                ['icon' => 'fact_check', 'title' => __('sme_manufacturing.modules_quality_title'), 'items' => __('sme_manufacturing.modules_quality_items')],
                ['icon' => 'monitoring', 'title' => __('sme_manufacturing.modules_dashboard_title'), 'items' => __('sme_manufacturing.modules_dashboard_items')],
            ];

            $extendedModules = [
                ['icon' => 'local_shipping', 'title' => __('sme_manufacturing.modules_packaging_title'), 'items' => __('sme_manufacturing.modules_packaging_items')],
                ['icon' => 'qr_code_scanner', 'title' => __('sme_manufacturing.modules_barcode_title'), 'items' => __('sme_manufacturing.modules_barcode_items')],
                ['icon' => 'groups', 'title' => __('sme_manufacturing.modules_workforce_title'), 'items' => __('sme_manufacturing.modules_workforce_items')],
                ['icon' => 'query_stats', 'title' => __('sme_manufacturing.modules_reporting_title'), 'items' => __('sme_manufacturing.modules_reporting_items')],
            ];
        @endphp

        <div class="solution-module-grid">
            @foreach($primaryModules as $module)
                <article class="solution-module-card">
                    <div class="solution-module-card__icon">
                        <span class="material-symbols-rounded" aria-hidden="true">{{ $module['icon'] }}</span>
                    </div>
                    <h3>{{ $module['title'] }}</h3>
                    <ul>
                        @foreach($module['items'] as $item)
                            <li>{{ $item }}</li>
                        @endforeach
                    </ul>
                </article>
            @endforeach
        </div>

        <div class="solution-module-grid solution-module-grid--spaced">
            @foreach($extendedModules as $module)
                <article class="solution-module-card">
                    <div class="solution-module-card__icon">
                        <span class="material-symbols-rounded" aria-hidden="true">{{ $module['icon'] }}</span>
                    </div>
                    <h3>{{ $module['title'] }}</h3>
                    <ul>
                        @foreach($module['items'] as $item)
                            <li>{{ $item }}</li>
                        @endforeach
                    </ul>
                </article>
            @endforeach
        </div>

        <div class="shopfloor-matrix">
            <div class="shopfloor-matrix__grid">
                <div>
                    <h3>{{ __('sme_manufacturing.modules_shopfloor_title') }}</h3>
                    <p>{{ __('sme_manufacturing.modules_shopfloor_desc') }}</p>
                </div>

                <div class="shopfloor-matrix__items shopfloor-matrix__items--flush">
                    @foreach(__('sme_manufacturing.modules_shopfloor_items') as $item)
                        <div class="shopfloor-matrix__item">{{ $item }}</div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>
