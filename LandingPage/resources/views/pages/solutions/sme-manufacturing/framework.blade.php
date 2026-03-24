<section style="background: #ffffff;">
    <div class="container-v5">
        <div class="section-header">
            <h2 class="section-title">{{ __('sme_manufacturing.framework_title') }}</h2>
            <p class="section-subtitle">{{ __('sme_manufacturing.framework_subtitle') }}</p>
        </div>

        <div style="display: grid; gap: 1.25rem;">
            <div style="background: var(--secondary-bg); border: 1px solid var(--border); border-radius: var(--card-radius); padding: 2rem;">
                <h3 style="font-size: 1.25rem; font-weight: 700; color: var(--text-dark); margin-bottom: 1rem;">{{ __('sme_manufacturing.framework_layer1_title') }}</h3>
                <ul style="margin: 0; padding-left: 1.2rem; color: var(--text-gray); line-height: 1.8;">
                    @foreach(__('sme_manufacturing.framework_layer1_items') as $item)
                        <li>{{ $item }}</li>
                    @endforeach
                </ul>
            </div>

            <div style="background: var(--secondary-bg); border: 1px solid var(--border); border-radius: var(--card-radius); padding: 2rem;">
                <h3 style="font-size: 1.25rem; font-weight: 700; color: var(--text-dark); margin-bottom: 1rem;">{{ __('sme_manufacturing.framework_layer2_title') }}</h3>
                <ul style="margin: 0; padding-left: 1.2rem; color: var(--text-gray); line-height: 1.8;">
                    @foreach(__('sme_manufacturing.framework_layer2_items') as $item)
                        <li>{{ $item }}</li>
                    @endforeach
                </ul>
            </div>

            <div style="background: var(--secondary-bg); border: 1px solid var(--border); border-radius: var(--card-radius); padding: 2rem;">
                <h3 style="font-size: 1.25rem; font-weight: 700; color: var(--text-dark); margin-bottom: 1rem;">{{ __('sme_manufacturing.framework_layer3_title') }}</h3>
                <ul style="margin: 0; padding-left: 1.2rem; color: var(--text-gray); line-height: 1.8;">
                    @foreach(__('sme_manufacturing.framework_layer3_items') as $item)
                        <li>{{ $item }}</li>
                    @endforeach
                </ul>
            </div>
        </div>

        <p style="margin-top: 1.25rem; font-weight: 600; color: var(--primary-dark);">
            {{ __('sme_manufacturing.framework_note') }}
        </p>

        <div style="margin-top: 2rem;">
            <h3 style="font-size: 1.5rem; font-weight: 800; color: var(--text-dark); margin-bottom: 0.75rem;">{{ __('sme_manufacturing.framework_tech_title') }}</h3>
            <p style="color: var(--text-gray); line-height: 1.8; margin-bottom: 1rem;">
                {{ __('sme_manufacturing.framework_tech_subtitle') }}
            </p>

            <div style="display: grid; gap: 1rem;">
                <div style="background: var(--secondary-bg); border: 1px solid var(--border); border-radius: var(--card-radius); padding: 1.25rem;">
                    <h4 style="font-size: 1.05rem; font-weight: 700; margin-bottom: 0.5rem;">{{ __('sme_manufacturing.framework_backend_title') }}</h4>
                    <ul style="margin: 0; padding-left: 1.2rem; color: var(--text-gray); line-height: 1.8;">
                        @foreach(__('sme_manufacturing.framework_backend_items') as $item)
                            <li>{{ $item }}</li>
                        @endforeach
                    </ul>
                </div>

                <div style="background: var(--secondary-bg); border: 1px solid var(--border); border-radius: var(--card-radius); padding: 1.25rem;">
                    <h4 style="font-size: 1.05rem; font-weight: 700; margin-bottom: 0.5rem;">{{ __('sme_manufacturing.framework_frontend_title') }}</h4>
                    <ul style="margin: 0; padding-left: 1.2rem; color: var(--text-gray); line-height: 1.8;">
                        @foreach(__('sme_manufacturing.framework_frontend_items') as $item)
                            <li>{{ $item }}</li>
                        @endforeach
                    </ul>
                </div>

                <div style="background: var(--secondary-bg); border: 1px solid var(--border); border-radius: var(--card-radius); padding: 1.25rem;">
                    <h4 style="font-size: 1.05rem; font-weight: 700; margin-bottom: 0.5rem;">{{ __('sme_manufacturing.framework_device_title') }}</h4>
                    <ul style="margin: 0; padding-left: 1.2rem; color: var(--text-gray); line-height: 1.8;">
                        @foreach(__('sme_manufacturing.framework_device_items') as $item)
                            <li>{{ $item }}</li>
                        @endforeach
                    </ul>
                </div>

                <div style="background: var(--secondary-bg); border: 1px solid var(--border); border-radius: var(--card-radius); padding: 1.25rem;">
                    <h4 style="font-size: 1.05rem; font-weight: 700; margin-bottom: 0.5rem;">{{ __('sme_manufacturing.framework_security_title') }}</h4>
                    <ul style="margin: 0; padding-left: 1.2rem; color: var(--text-gray); line-height: 1.8;">
                        @foreach(__('sme_manufacturing.framework_security_items') as $item)
                            <li>{{ $item }}</li>
                        @endforeach
                    </ul>
                </div>

                <div style="background: var(--secondary-bg); border: 1px solid var(--border); border-radius: var(--card-radius); padding: 1.25rem;">
                    <h4 style="font-size: 1.05rem; font-weight: 700; margin-bottom: 0.5rem;">{{ __('sme_manufacturing.framework_cloud_title') }}</h4>
                    <ul style="margin: 0; padding-left: 1.2rem; color: var(--text-gray); line-height: 1.8;">
                        @foreach(__('sme_manufacturing.framework_cloud_items') as $item)
                            <li>{{ $item }}</li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
