<section style="background: var(--secondary-bg);">
    <div class="container-v5">
        <div class="section-header">
            <h2 class="section-title">{{ __('sme_manufacturing.modules_title') }}</h2>
            <p class="section-subtitle">{{ __('sme_manufacturing.modules_subtitle') }}</p>
        </div>

        <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(280px, 1fr)); gap: 1.25rem;">
            <article style="background: #fff; border: 1px solid var(--border); border-radius: var(--card-radius); padding: 1.75rem;">
                <h3 style="font-size: 1.2rem; font-weight: 700; margin-bottom: 0.75rem;">{{ __('sme_manufacturing.modules_production_title') }}</h3>
                <ul style="margin: 0; padding-left: 1.2rem; color: var(--text-gray); line-height: 1.8;">
                    @foreach(__('sme_manufacturing.modules_production_items') as $item)
                        <li>{{ $item }}</li>
                    @endforeach
                </ul>
            </article>

            <article style="background: #fff; border: 1px solid var(--border); border-radius: var(--card-radius); padding: 1.75rem;">
                <h3 style="font-size: 1.2rem; font-weight: 700; margin-bottom: 0.75rem;">{{ __('sme_manufacturing.modules_warehouse_title') }}</h3>
                <ul style="margin: 0; padding-left: 1.2rem; color: var(--text-gray); line-height: 1.8;">
                    @foreach(__('sme_manufacturing.modules_warehouse_items') as $item)
                        <li>{{ $item }}</li>
                    @endforeach
                </ul>
            </article>

            <article style="background: #fff; border: 1px solid var(--border); border-radius: var(--card-radius); padding: 1.75rem;">
                <h3 style="font-size: 1.2rem; font-weight: 700; margin-bottom: 0.75rem;">{{ __('sme_manufacturing.modules_quality_title') }}</h3>
                <ul style="margin: 0; padding-left: 1.2rem; color: var(--text-gray); line-height: 1.8;">
                    @foreach(__('sme_manufacturing.modules_quality_items') as $item)
                        <li>{{ $item }}</li>
                    @endforeach
                </ul>
            </article>

            <article style="background: #fff; border: 1px solid var(--border); border-radius: var(--card-radius); padding: 1.75rem;">
                <h3 style="font-size: 1.2rem; font-weight: 700; margin-bottom: 0.75rem;">{{ __('sme_manufacturing.modules_dashboard_title') }}</h3>
                <ul style="margin: 0; padding-left: 1.2rem; color: var(--text-gray); line-height: 1.8;">
                    @foreach(__('sme_manufacturing.modules_dashboard_items') as $item)
                        <li>{{ $item }}</li>
                    @endforeach
                </ul>
            </article>
        </div>

        <div style="margin-top: 1.5rem; display: grid; grid-template-columns: repeat(auto-fit, minmax(280px, 1fr)); gap: 1rem;">
            <article style="background: #fff; border: 1px solid var(--border); border-radius: var(--card-radius); padding: 1.5rem;">
                <h3 style="font-size: 1.1rem; font-weight: 700; margin-bottom: 0.75rem;">{{ __('sme_manufacturing.modules_packaging_title') }}</h3>
                <ul style="margin: 0; padding-left: 1.2rem; color: var(--text-gray); line-height: 1.8;">
                    @foreach(__('sme_manufacturing.modules_packaging_items') as $item)
                        <li>{{ $item }}</li>
                    @endforeach
                </ul>
            </article>

            <article style="background: #fff; border: 1px solid var(--border); border-radius: var(--card-radius); padding: 1.5rem;">
                <h3 style="font-size: 1.1rem; font-weight: 700; margin-bottom: 0.75rem;">{{ __('sme_manufacturing.modules_barcode_title') }}</h3>
                <ul style="margin: 0; padding-left: 1.2rem; color: var(--text-gray); line-height: 1.8;">
                    @foreach(__('sme_manufacturing.modules_barcode_items') as $item)
                        <li>{{ $item }}</li>
                    @endforeach
                </ul>
            </article>

            <article style="background: #fff; border: 1px solid var(--border); border-radius: var(--card-radius); padding: 1.5rem;">
                <h3 style="font-size: 1.1rem; font-weight: 700; margin-bottom: 0.75rem;">{{ __('sme_manufacturing.modules_workforce_title') }}</h3>
                <ul style="margin: 0; padding-left: 1.2rem; color: var(--text-gray); line-height: 1.8;">
                    @foreach(__('sme_manufacturing.modules_workforce_items') as $item)
                        <li>{{ $item }}</li>
                    @endforeach
                </ul>
            </article>

            <article style="background: #fff; border: 1px solid var(--border); border-radius: var(--card-radius); padding: 1.5rem;">
                <h3 style="font-size: 1.1rem; font-weight: 700; margin-bottom: 0.75rem;">{{ __('sme_manufacturing.modules_reporting_title') }}</h3>
                <ul style="margin: 0; padding-left: 1.2rem; color: var(--text-gray); line-height: 1.8;">
                    @foreach(__('sme_manufacturing.modules_reporting_items') as $item)
                        <li>{{ $item }}</li>
                    @endforeach
                </ul>
            </article>
        </div>

        <div style="margin-top: 1.5rem; background: #ffffff; border: 1px solid var(--border); border-radius: var(--card-radius); padding: 1.5rem;">
            <h3 style="font-size: 1.15rem; font-weight: 700; margin-bottom: 0.75rem;">{{ __('sme_manufacturing.modules_shopfloor_title') }}</h3>
            <p style="color: var(--text-gray); line-height: 1.8; margin-bottom: 1rem;">
                {{ __('sme_manufacturing.modules_shopfloor_desc') }}
            </p>
            <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(220px, 1fr)); gap: 0.75rem;">
                @foreach(__('sme_manufacturing.modules_shopfloor_items') as $item)
                    <div style="border: 1px dashed var(--border); border-radius: 8px; padding: 0.75rem; color: var(--text-gray);">{{ $item }}</div>
                @endforeach
            </div>
        </div>
    </div>
</section>
