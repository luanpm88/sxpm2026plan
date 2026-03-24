<section style="background: #ffffff;">
    <div class="container-v5">
        <div style="background: linear-gradient(135deg, var(--primary) 0%, var(--primary-light) 100%); border-radius: 12px; padding: 3rem 2rem; text-align: center; color: white;">
            <h2 style="font-size: 2.4rem; font-weight: 800; margin-bottom: 1rem;">{{ __('sme_manufacturing.cta_title') }}</h2>
            <p style="font-size: 1.05rem; margin-bottom: 1.8rem; opacity: 0.95;">
                {{ __('sme_manufacturing.cta_description') }}
            </p>
            <a href="{{ route('landing.contact') }}" style="background: #fff; color: var(--primary); padding: 1rem 2.25rem; border-radius: 8px; font-weight: 700; text-decoration: none; display: inline-flex; align-items: center; gap: 0.5rem;">
                <span>{{ __('sme_manufacturing.cta_button') }}</span>
                <span class="material-symbols-rounded" style="font-size: 1.2rem;">arrow_forward</span>
            </a>
        </div>

        <div style="margin-top: 2rem;">
            <div class="section-header">
                <h2 class="section-title">{{ __('sme_manufacturing.packages_title') }}</h2>
                <p class="section-subtitle">{{ __('sme_manufacturing.packages_subtitle') }}</p>
            </div>

            <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(280px, 1fr)); gap: 1rem;">
                @foreach(__('sme_manufacturing.packages') as $package)
                    <article style="background: var(--secondary-bg); border: 1px solid var(--border); border-radius: 12px; padding: 1.5rem;">
                        <h3 style="font-size: 1.15rem; font-weight: 700; margin-bottom: 0.4rem;">{{ $package['title'] }}</h3>
                        <p style="margin: 0 0 0.75rem 0; color: var(--primary-dark); font-weight: 700;">{{ $package['price'] }}</p>
                        <ul style="margin: 0; padding-left: 1.2rem; color: var(--text-gray); line-height: 1.8;">
                            @foreach($package['items'] as $item)
                                <li>{{ $item }}</li>
                            @endforeach
                        </ul>
                    </article>
                @endforeach
            </div>
        </div>

        <div style="margin-top: 1.5rem; display: grid; grid-template-columns: 1fr 1fr; gap: 1rem;">
            <div style="background: #ffffff; border: 1px solid var(--border); border-radius: 12px; padding: 1.5rem;">
                <h3 style="font-size: 1.15rem; font-weight: 700; margin-bottom: 0.75rem;">{{ __('sme_manufacturing.maintenance_title') }}</h3>
                <ul style="margin: 0; padding-left: 1.2rem; color: var(--text-gray); line-height: 1.8;">
                    @foreach(__('sme_manufacturing.maintenance_items') as $item)
                        <li>{{ $item }}</li>
                    @endforeach
                </ul>
            </div>

            <div style="background: #ffffff; border: 1px solid var(--border); border-radius: 12px; padding: 1.5rem;">
                <h3 style="font-size: 1.15rem; font-weight: 700; margin-bottom: 0.75rem;">{{ __('sme_manufacturing.backup_title') }}</h3>
                <ul style="margin: 0; padding-left: 1.2rem; color: var(--text-gray); line-height: 1.8;">
                    @foreach(__('sme_manufacturing.backup_items') as $item)
                        <li>{{ $item }}</li>
                    @endforeach
                </ul>
            </div>
        </div>

        <div style="margin-top: 1rem; background: var(--secondary-bg); border: 1px solid var(--border); border-radius: 12px; padding: 1.25rem;">
            <h3 style="font-size: 1.05rem; font-weight: 700; margin-bottom: 0.5rem;">{{ __('sme_manufacturing.commercial_notes_title') }}</h3>
            <ul style="margin: 0; padding-left: 1.2rem; color: var(--text-gray); line-height: 1.8;">
                @foreach(__('sme_manufacturing.commercial_notes_items') as $item)
                    <li>{{ $item }}</li>
                @endforeach
            </ul>
        </div>
    </div>
</section>
