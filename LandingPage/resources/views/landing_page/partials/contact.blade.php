<!-- Contact Hero -->
<section id="contact" style="min-height: 50vh; display: flex; align-items: center; padding: 6rem 2rem; background: linear-gradient(135deg, var(--surface) 0%, var(--secondary-bg) 100%);">
    <div class="container-v5">
        <div style="text-align: center; max-width: 900px; margin: 0 auto;">
            <h1 style="font-size: 2.75rem; font-weight: 600; line-height: 1.15; margin-bottom: 1.5rem; color: var(--text-dark);">
                {{ __('contact.title') }} <span style="color: var(--primary);">{{ __('contact.title_accent') }}</span>
            </h1>
            <p style="font-size: 1.15rem; color: var(--text-gray); line-height: 1.8;">
                {{ __('contact.subtitle') }}
            </p>
        </div>
    </div>
</section>

<!-- Contact Form & Info -->
<section style="background: var(--surface);">
    <div class="container-v5">
        <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 4rem; align-items: start;">
            <!-- Contact Form -->
            <div>
                <h2 style="font-size: 1.75rem; font-weight: 600; color: var(--text-dark); margin-bottom: 2rem;">{{ __('contact.form_title') }}</h2>

                @if(session('contact_success'))
                    <div style="margin-bottom: 1rem; padding: 0.9rem 1rem; border-radius: 8px; background: var(--primary-subtle); border: 1px solid var(--border); color: var(--primary);">
                        {{ session('contact_success') }}
                    </div>
                @endif

                @if($errors->has('contact_form'))
                    <div style="margin-bottom: 1rem; padding: 0.9rem 1rem; border-radius: 8px; background: var(--secondary-bg); border: 1px solid var(--border); color: var(--primary);">
                        {{ $errors->first('contact_form') }}
                    </div>
                @endif

                <form action="{{ route('landing.contact.submit') }}" method="POST" style="display: flex; flex-direction: column; gap: 1.5rem;">
                    @csrf
                    <div>
                        <label style="display: block; font-weight: 600; color: var(--text-dark); margin-bottom: 0.5rem;">{{ __('contact.name_label') }}</label>
                        <input type="text" name="name" value="{{ old('name') }}" placeholder="{{ __('contact.name_placeholder') }}" style="width: 100%; padding: 0.75rem 1rem; border: 1px solid var(--border); border-radius: 8px; font-size: 1rem; font-family: inherit;" required>
                        @error('name')
                            <p style="margin-top: 0.45rem; color: var(--primary); font-size: 0.9rem;">{{ $message }}</p>
                        @enderror
                    </div>

                    <div>
                        <label style="display: block; font-weight: 600; color: var(--text-dark); margin-bottom: 0.5rem;">{{ __('contact.email_label') }}</label>
                        <input type="email" name="email" value="{{ old('email') }}" placeholder="{{ __('contact.email_placeholder') }}" style="width: 100%; padding: 0.75rem 1rem; border: 1px solid var(--border); border-radius: 8px; font-size: 1rem; font-family: inherit;" required>
                        @error('email')
                            <p style="margin-top: 0.45rem; color: var(--primary); font-size: 0.9rem;">{{ $message }}</p>
                        @enderror
                    </div>

                    <div>
                        <label style="display: block; font-weight: 600; color: var(--text-dark); margin-bottom: 0.5rem;">{{ __('contact.phone_label') }}</label>
                        <input type="tel" name="phone" value="{{ old('phone') }}" placeholder="{{ __('contact.phone_placeholder') }}" style="width: 100%; padding: 0.75rem 1rem; border: 1px solid var(--border); border-radius: 8px; font-size: 1rem; font-family: inherit;">
                    </div>

                    <div>
                        <label style="display: block; font-weight: 600; color: var(--text-dark); margin-bottom: 0.5rem;">{{ __('contact.company_label') }}</label>
                        <input type="text" name="company" value="{{ old('company') }}" placeholder="{{ __('contact.company_placeholder') }}" style="width: 100%; padding: 0.75rem 1rem; border: 1px solid var(--border); border-radius: 8px; font-size: 1rem; font-family: inherit;">
                    </div>

                    <div>
                        <label style="display: block; font-weight: 600; color: var(--text-dark); margin-bottom: 0.5rem;">{{ __('contact.project_type_label') }}</label>
                        <select name="project_type" style="width: 100%; height: 56px; padding: 0 1rem; border: 1px solid var(--border); border-radius: 8px; font-size: 1rem; font-family: inherit; line-height: 1.4; appearance: none; background-color: var(--surface);">
                            <option value="">{{ __('contact.project_type_default') }}</option>
                            <option value="{{ __('contact.project_types.custom') }}" @selected(old('project_type') === __('contact.project_types.custom'))>{{ __('contact.project_types.custom') }}</option>
                            <option value="{{ __('contact.project_types.saas') }}" @selected(old('project_type') === __('contact.project_types.saas'))>{{ __('contact.project_types.saas') }}</option>
                            <option value="{{ __('contact.project_types.mobile') }}" @selected(old('project_type') === __('contact.project_types.mobile'))>{{ __('contact.project_types.mobile') }}</option>
                            <option value="{{ __('contact.project_types.ai') }}" @selected(old('project_type') === __('contact.project_types.ai'))>{{ __('contact.project_types.ai') }}</option>
                            <option value="{{ __('contact.project_types.cloud') }}" @selected(old('project_type') === __('contact.project_types.cloud'))>{{ __('contact.project_types.cloud') }}</option>
                            <option value="{{ __('contact.project_types.other') }}" @selected(old('project_type') === __('contact.project_types.other'))>{{ __('contact.project_types.other') }}</option>
                        </select>
                    </div>

                    <div>
                        <label style="display: block; font-weight: 600; color: var(--text-dark); margin-bottom: 0.5rem;">{{ __('contact.budget_label') }}</label>
                        <select name="budget" style="width: 100%; height: 56px; padding: 0 1rem; border: 1px solid var(--border); border-radius: 8px; font-size: 1rem; font-family: inherit; line-height: 1.4; appearance: none; background-color: var(--surface);">
                            <option value="">{{ __('contact.budget_default') }}</option>
                            <option value="{{ __('contact.budgets.lt50') }}" @selected(old('budget') === __('contact.budgets.lt50'))>{{ __('contact.budgets.lt50') }}</option>
                            <option value="{{ __('contact.budgets.50_100') }}" @selected(old('budget') === __('contact.budgets.50_100'))>{{ __('contact.budgets.50_100') }}</option>
                            <option value="{{ __('contact.budgets.100_250') }}" @selected(old('budget') === __('contact.budgets.100_250'))>{{ __('contact.budgets.100_250') }}</option>
                            <option value="{{ __('contact.budgets.250_500') }}" @selected(old('budget') === __('contact.budgets.250_500'))>{{ __('contact.budgets.250_500') }}</option>
                            <option value="{{ __('contact.budgets.gt500') }}" @selected(old('budget') === __('contact.budgets.gt500'))>{{ __('contact.budgets.gt500') }}</option>
                        </select>
                    </div>

                    <div>
                        <label style="display: block; font-weight: 600; color: var(--text-dark); margin-bottom: 0.5rem;">{{ __('contact.message_label') }}</label>
                        <textarea name="message" placeholder="{{ __('contact.message_placeholder') }}" style="width: 100%; padding: 0.75rem 1rem; border: 1px solid var(--border); border-radius: 8px; font-size: 1rem; font-family: inherit; min-height: 150px; resize: vertical;" required>{{ old('message') }}</textarea>
                        @error('message')
                            <p style="margin-top: 0.45rem; color: var(--primary); font-size: 0.9rem;">{{ $message }}</p>
                        @enderror
                    </div>

                    @if(config('services.turnstile.site_key'))
                        <script src="https://challenges.cloudflare.com/turnstile/v0/api.js" async defer></script>
                        <div class="cf-turnstile" data-sitekey="{{ config('services.turnstile.site_key') }}" data-theme="auto"></div>
                    @endif

                    <button type="submit" style="background: var(--button-primary-bg); color: var(--button-primary-text); padding: 1rem 2rem; border: none; border-radius: 8px; font-weight: 600; font-size: 1rem; cursor: pointer; transition: all 0.3s ease;" onmouseover="this.style.backgroundColor='var(--button-primary-hover-bg)';" onmouseout="this.style.backgroundColor='var(--button-primary-bg)';">
                        {{ __('contact.send_message') }}
                    </button>
                </form>
            </div>

            <!-- Contact Info -->
            <style>
                .ct-card{background:var(--secondary-bg);border:1px solid var(--border);border-radius:12px;padding:1.6rem 1.75rem;display:flex;gap:1.15rem;align-items:flex-start}
                .ct-card .ct-ico{width:42px;height:42px;border-radius:10px;background:var(--primary-subtle);color:var(--primary);display:inline-flex;align-items:center;justify-content:center;flex-shrink:0}
                .ct-card h3{font-weight:600;color:var(--text-dark);margin:0 0 .35rem;font-size:1.02rem}
                .ct-card p{color:var(--text-gray);line-height:1.7;margin:0}
                .ct-maplink{display:inline-flex;align-items:center;gap:.3rem;margin-top:.65rem;color:var(--primary);text-decoration:none;font-weight:600;font-size:.9rem}
                .ct-maplink:hover{text-decoration:underline}
                .contact-social{display:inline-flex;align-items:center;justify-content:center;width:42px;height:42px;border-radius:50%;background:var(--primary-subtle);color:var(--primary);transition:background .2s ease,color .2s ease,transform .2s ease}
                .contact-social:hover{background:var(--primary);color:#fff;transform:translateY(-2px)}
                .contact-social svg{width:19px;height:19px;fill:currentColor;display:block}
            </style>
            <div style="display: flex; flex-direction: column; gap: 1.1rem;">
                <h2 style="font-size: 1.75rem; font-weight: 600; color: var(--text-dark); margin-bottom: 0.4rem;">{{ __('contact.info_title') }}</h2>

                <!-- Office -->
                <div class="ct-card">
                    <span class="ct-ico"><span class="material-symbols-rounded">location_on</span></span>
                    <div>
                        <h3>{{ __('contact.hq_title') }}</h3>
                        <p>
                            <span style="display:block;color:var(--text-dark);font-weight:600;">{{ __('contact.legal_name') }}</span>
                            {{ __('contact.hq_address') }}<br>
                            <span style="font-size:.88rem;">{{ __('contact.tax_id_label') }}: {{ __('contact.tax_id') }}</span>
                        </p>
                        <a class="ct-maplink" href="https://maps.google.com/?cid=12996464806759206874" target="_blank" rel="noopener">
                            {{ __('contact.map_label') }} <span class="material-symbols-rounded" style="font-size:1.05rem;">arrow_outward</span>
                        </a>
                    </div>
                </div>

                <!-- Phone & Email -->
                <div class="ct-card">
                    <span class="ct-ico"><span class="material-symbols-rounded">call</span></span>
                    <div>
                        <h3>{{ __('contact.hq_phone_label') }} &middot; Email</h3>
                        <p>
                            {{ __('contact.hq_phone_label') }}: <a href="tel:+842839847690" style="color:var(--text-dark);text-decoration:none;font-weight:600;">(028) 3984 7690</a><br>
                            {{ __('contact.hotline_label') }}: <a href="tel:+84931103988" style="color:var(--text-dark);text-decoration:none;font-weight:600;">0931 103 988</a><br>
                            Email: <a href="mailto:info@hoangkhang.com.vn" style="color:var(--primary);text-decoration:none;font-weight:600;">info@hoangkhang.com.vn</a>
                        </p>
                    </div>
                </div>

                <!-- Business Hours -->
                <div class="ct-card">
                    <span class="ct-ico"><span class="material-symbols-rounded">schedule</span></span>
                    <div>
                        <h3>{{ __('contact.hours_title') }}</h3>
                        <p>
                            {!! nl2br(e(__('contact.hours_content'))) !!}<br>
                            <strong style="color:var(--text-dark);font-weight:600;">{{ __('contact.hours_response') }}</strong>
                        </p>
                    </div>
                </div>

                <!-- Socials -->
                <div style="display:flex;align-items:center;gap:.7rem;padding-left:.25rem;flex-wrap:wrap;">
                    <span style="color:var(--text-gray);font-size:.9rem;font-weight:600;margin-right:.15rem;">{{ __('contact.social_title') }}</span>
                    <a class="contact-social" href="https://www.facebook.com/hoangkhanginco/" target="_blank" rel="noopener" aria-label="Facebook">
                        <svg viewBox="0 0 24 24" aria-hidden="true"><path d="M24 12.07C24 5.4 18.63 0 12 0S0 5.4 0 12.07C0 18.1 4.39 23.09 10.13 24v-8.44H7.08v-3.49h3.05V9.41c0-3.02 1.79-4.69 4.53-4.69 1.31 0 2.68.24 2.68.24v2.97h-1.5c-1.49 0-1.96.93-1.96 1.89v2.25h3.32l-.53 3.49h-2.79V24C19.61 23.09 24 18.1 24 12.07"/></svg>
                    </a>
                    <a class="contact-social" href="https://www.youtube.com/@hoangkhangincotech" target="_blank" rel="noopener" aria-label="YouTube">
                        <svg viewBox="0 0 24 24" aria-hidden="true"><path d="M23.5 6.2a3.02 3.02 0 0 0-2.12-2.14C19.5 3.55 12 3.55 12 3.55s-7.5 0-9.38.51A3.02 3.02 0 0 0 .5 6.2 31.5 31.5 0 0 0 0 12a31.5 31.5 0 0 0 .5 5.8 3.02 3.02 0 0 0 2.12 2.14c1.88.51 9.38.51 9.38.51s7.5 0 9.38-.51a3.02 3.02 0 0 0 2.12-2.14A31.5 31.5 0 0 0 24 12a31.5 31.5 0 0 0-.5-5.8ZM9.6 15.6V8.4l6.2 3.6-6.2 3.6Z"/></svg>
                    </a>
                    <a class="contact-social" href="https://www.linkedin.com/company/79164457/" target="_blank" rel="noopener" aria-label="LinkedIn">
                        <svg viewBox="0 0 24 24" aria-hidden="true"><path d="M20.45 20.45h-3.56v-5.57c0-1.33-.03-3.04-1.85-3.04-1.86 0-2.14 1.45-2.14 2.94v5.67H9.35V9h3.41v1.56h.05c.48-.9 1.64-1.85 3.37-1.85 3.6 0 4.27 2.37 4.27 5.45v6.29ZM5.34 7.43a2.06 2.06 0 1 1 0-4.13 2.06 2.06 0 0 1 0 4.13ZM7.12 20.45H3.55V9h3.57v11.45ZM22.22 0H1.77C.8 0 0 .78 0 1.73v20.53C0 23.22.8 24 1.77 24h20.45c.98 0 1.78-.78 1.78-1.74V1.73C24 .78 23.2 0 22.22 0Z"/></svg>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Location -->
<section class="contact-location-section">
    <div class="container-v5">
        <div class="contact-location-panel">
            <div class="contact-location-map">
                <iframe
                    src="https://www.google.com/maps?q=10.8475931,106.6576869&z=17&hl=vi&output=embed"
                    style="position:absolute; inset:0; width:100%; height:100%; border:0;"
                    loading="lazy" referrerpolicy="no-referrer-when-downgrade"
                    title="{{ __('contact.legal_name') }} — {{ __('contact.hq_address') }}"></iframe>
            </div>

            <div class="contact-location-content">
                <span class="solution-kicker">{{ __('contact.location_kicker') }}</span>
                <h2>{{ __('contact.location_title') }}</h2>
                <p>{{ __('contact.location_desc') }}</p>

                <div class="contact-location-list">
                    @foreach(__('contact.location_points') as $point)
                        <div class="contact-location-item">
                            <span class="material-symbols-rounded">{{ $point['icon'] }}</span>
                            <div>
                                <strong>{{ $point['title'] }}</strong>
                                <small>{{ $point['desc'] }}</small>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>

<!-- FAQ -->
<section style="background: var(--surface);">
    <div class="container-v5">
        <div class="section-header">
            <h2 class="section-title">{{ __('contact.faq_title') }}</h2>
            <p class="section-subtitle">{{ __('contact.faq_subtitle') }}</p>
        </div>

        <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 2rem; max-width: 1000px; margin: 0 auto;">
            @foreach(__('contact.faqs') as $faq)
            <div style="background: var(--secondary-bg); border-radius: 8px; padding: 1.5rem;">
                <h4 style="font-weight: 600; color: var(--text-dark); margin-bottom: 0.75rem; display: flex; align-items: center; gap: 0.75rem;">
                    <span class="material-symbols-rounded" style="color: var(--primary);">help_outline</span>
                    {{ $faq['q'] }}
                </h4>
                <p style="color: var(--text-gray); line-height: 1.6; font-size: 0.95rem;">
                    {{ $faq['a'] }}
                </p>
            </div>
            @endforeach
        </div>
    </div>
</section>

<!-- CTA -->
<section style="background: var(--surface);">
    <div class="container-v5">
        <div style="background: var(--contrast-panel-bg); border-radius: var(--card-radius); padding: 3.5rem 2rem; text-align: center; color: var(--contrast-panel-text);">
            <h2 style="font-size: 2rem; font-weight: 600; margin-bottom: 1rem;">{{ __('contact.learn_more_title') }}</h2>
            <p style="font-size: 1rem; margin-bottom: 2rem; opacity: 0.95;">
                {{ __('contact.learn_more_subtitle') }}
            </p>
            <div style="display: flex; gap: 1rem; justify-content: center; flex-wrap: wrap;">
                <a href="{{ route('landing.contact') }}" style="background: var(--contrast-action-bg); color: var(--contrast-action-text); padding: 0.75rem 2rem; border-radius: 8px; font-weight: 600; text-decoration: none; transition: all 0.3s ease;" onmouseover="this.style.opacity='0.9';" onmouseout="this.style.opacity='1';">
                    <span>{{ __('contact.schedule_call') }}</span>
                </a>
                <a href="mailto:info@hoangkhang.com.vn" style="background: var(--contrast-glass-bg-hover); color: var(--contrast-panel-text); padding: 0.75rem 2rem; border-radius: 8px; font-weight: 600; text-decoration: none; transition: all 0.3s ease;" onmouseover="this.style.backgroundColor='var(--contrast-glass-border)';" onmouseout="this.style.backgroundColor='var(--contrast-glass-bg-hover)';">
                    <span>{{ __('contact.email_us') }}</span>
                </a>
            </div>
        </div>
    </div>
</section>
