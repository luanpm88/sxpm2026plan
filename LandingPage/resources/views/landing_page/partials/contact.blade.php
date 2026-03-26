<!-- Contact Hero -->
<section id="contact" style="min-height: 50vh; display: flex; align-items: center; padding: 6rem 2rem; background: linear-gradient(135deg, var(--surface) 0%, var(--secondary-bg) 100%);">
    <div class="container-v5">
        <div style="text-align: center; max-width: 900px; margin: 0 auto;">
            <h1 style="font-size: 2.75rem; font-weight: 800; line-height: 1.15; margin-bottom: 1.5rem; color: var(--text-dark);">
                {{ __('contact.title') }} <span style="color: var(--primary);">{{ __('contact.title_accent') }}</span>
            </h1>
            <p style="font-size: 1.15rem; color: var(--text-gray); line-height: 1.8;">
                {{ __('contact.subtitle') }}
            </p>
        </div>
    </div>
</section>

<!-- Contact Form & Info -->
<section style="background: white;">
    <div class="container-v5">
        <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 4rem; align-items: start;">
            <!-- Contact Form -->
            <div>
                <h2 style="font-size: 1.75rem; font-weight: 700; color: var(--text-dark); margin-bottom: 2rem;">{{ __('contact.form_title') }}</h2>

                @if(session('contact_success'))
                    <div style="margin-bottom: 1rem; padding: 0.9rem 1rem; border-radius: 8px; background: #eaf8f2; border: 1px solid #bde8d4; color: #176544;">
                        {{ session('contact_success') }}
                    </div>
                @endif

                @if($errors->has('contact_form'))
                    <div style="margin-bottom: 1rem; padding: 0.9rem 1rem; border-radius: 8px; background: #fff1f2; border: 1px solid #fecdd3; color: #9f1239;">
                        {{ $errors->first('contact_form') }}
                    </div>
                @endif

                <form action="{{ route('landing.contact.submit') }}" method="POST" style="display: flex; flex-direction: column; gap: 1.5rem;">
                    @csrf
                    <div>
                        <label style="display: block; font-weight: 600; color: var(--text-dark); margin-bottom: 0.5rem;">{{ __('contact.name_label') }}</label>
                        <input type="text" name="name" value="{{ old('name') }}" placeholder="{{ __('contact.name_placeholder') }}" style="width: 100%; padding: 0.75rem 1rem; border: 1px solid var(--border); border-radius: 8px; font-size: 1rem; font-family: inherit;" required>
                        @error('name')
                            <p style="margin-top: 0.45rem; color: #b91c1c; font-size: 0.9rem;">{{ $message }}</p>
                        @enderror
                    </div>

                    <div>
                        <label style="display: block; font-weight: 600; color: var(--text-dark); margin-bottom: 0.5rem;">{{ __('contact.email_label') }}</label>
                        <input type="email" name="email" value="{{ old('email') }}" placeholder="{{ __('contact.email_placeholder') }}" style="width: 100%; padding: 0.75rem 1rem; border: 1px solid var(--border); border-radius: 8px; font-size: 1rem; font-family: inherit;" required>
                        @error('email')
                            <p style="margin-top: 0.45rem; color: #b91c1c; font-size: 0.9rem;">{{ $message }}</p>
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
                            <p style="margin-top: 0.45rem; color: #b91c1c; font-size: 0.9rem;">{{ $message }}</p>
                        @enderror
                    </div>

                    <button type="submit" style="background: var(--primary); color: white; padding: 1rem 2rem; border: none; border-radius: 8px; font-weight: 600; font-size: 1rem; cursor: pointer; transition: all 0.3s ease;" onmouseover="this.style.backgroundColor='var(--primary-light)';" onmouseout="this.style.backgroundColor='var(--primary)';">
                        {{ __('contact.send_message') }}
                    </button>
                </form>
            </div>

            <!-- Contact Info -->
            <div style="display: flex; flex-direction: column; gap: 2rem;">
                <h2 style="font-size: 1.75rem; font-weight: 700; color: var(--text-dark); margin-bottom: 1rem;">{{ __('contact.info_title') }}</h2>

                <!-- Headquarters -->
                <div style="background: var(--secondary-bg); border-radius: 8px; padding: 2rem;">
                    <div style="display: flex; gap: 1.5rem; align-items: flex-start;">
                        <div style="font-size: 2rem; color: var(--primary); flex-shrink: 0;">
                            <span class="material-symbols-rounded">location_on</span>
                        </div>
                        <div>
                            <h3 style="font-weight: 700; color: var(--text-dark); margin-bottom: 0.5rem;">{{ __('contact.hq_title') }}</h3>
                            <p style="color: var(--text-gray); line-height: 1.6;">
                                {{ __('contact.hq_city') }}<br>
                                {{ __('contact.hq_address_label') }}: {{ __('contact.hq_address') }}<br>
                                {{ __('contact.hq_phone_label') }}: {{ __('contact.hq_phone') }}
                            </p>
                        </div>
                    </div>
                </div>

                {{-- <!-- Singapore Office -->
                <div class="opacity-75" style="background: var(--secondary-bg); border-radius: 8px; padding: 2rem;">
                    <div style="display: flex; gap: 1.5rem; align-items: flex-start;">
                        <div style="font-size: 2rem; color: var(--primary); flex-shrink: 0;">
                            <span class="material-symbols-rounded">business</span>
                        </div>
                        <div>
                            <h3 style="font-weight: 700; color: var(--text-dark); margin-bottom: 0.5rem;">
                                {{ __('contact.sg_title') }} <span class="badge rounded-pill bg-warning">Draft</span>
                            </h3>
                            <p style="color: var(--text-gray); line-height: 1.6;">
                                Marina Bay, Singapore<br>
                                Address: Central Business District<br>
                                Phone: +65 6123 4567
                            </p>
                        </div>
                    </div>
                </div> --}}

                <!-- Email -->
                <div style="background: var(--secondary-bg); border-radius: 8px; padding: 2rem;">
                    <div style="display: flex; gap: 1.5rem; align-items: flex-start;">
                        <div style="font-size: 2rem; color: var(--primary); flex-shrink: 0;">
                            <span class="material-symbols-rounded">mail</span>
                        </div>
                        <div>
                            <h3 style="font-weight: 700; color: var(--text-dark); margin-bottom: 0.5rem;">{{ __('contact.email_title') }}</h3>
                            <p style="color: var(--text-gray); line-height: 1.6;">
                                {{ __('contact.email_inquiry_label') }}: <a href="mailto:hello@hkincotech.com" style="color: var(--primary); text-decoration: none; font-weight: 600;">hello@hkincotech.com</a><br>
                                {{ __('contact.email_sales_label') }}: <a href="mailto:sales@hkincotech.com" style="color: var(--primary); text-decoration: none; font-weight: 600;">sales@hkincotech.com</a><br>
                                {{ __('contact.email_support_label') }}: <a href="mailto:support@hkincotech.com" style="color: var(--primary); text-decoration: none; font-weight: 600;">support@hkincotech.com</a>
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Business Hours -->
                <div style="background: var(--secondary-bg); border-radius: 8px; padding: 2rem;">
                    <div style="display: flex; gap: 1.5rem; align-items: flex-start;">
                        <div style="font-size: 2rem; color: var(--primary); flex-shrink: 0;">
                            <span class="material-symbols-rounded">schedule</span>
                        </div>
                        <div>
                            <h3 style="font-weight: 700; color: var(--text-dark); margin-bottom: 0.5rem;">{{ __('contact.hours_title') }}</h3>
                            <p style="color: var(--text-gray); line-height: 1.6;">
                                {!! nl2br(e(__('contact.hours_content'))) !!}<br>
                                <strong>{{ __('contact.hours_response') }}</strong>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Map -->
<section style="background: var(--secondary-bg);">
    <div class="container-v5">
        <div style="background: white; border-radius: var(--card-radius); overflow: hidden; height: 400px;">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3919.6047467284906!2d106.6576869!3d10.8475931!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x317529bc96bc31d5%3A0xb45cb7e22ebf8fda!2z188IEvSG0bEgU8OzLCBQaOG7nW5nIEFuIEjhu5lpIMSQ8O0gbiwgVHAuIEjhu5kgQ2jDrSBNaW5o!5e0!3m2!1svi!2svn!4v1705816000000" style="width: 100%; height: 100%; border: none;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </div>
</section>

<!-- FAQ -->
<section style="background: white;">
    <div class="container-v5">
        <div class="section-header">
            <h2 class="section-title">{{ __('contact.faq_title') }}</h2>
            <p class="section-subtitle">{{ __('contact.faq_subtitle') }}</p>
        </div>

        <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 2rem; max-width: 1000px; margin: 0 auto;">
            @foreach(__('contact.faqs') as $faq)
            <div style="background: var(--secondary-bg); border-radius: 8px; padding: 1.5rem;">
                <h4 style="font-weight: 700; color: var(--text-dark); margin-bottom: 0.75rem; display: flex; align-items: center; gap: 0.75rem;">
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
<section style="background: white;">
    <div class="container-v5">
        <div style="background: linear-gradient(135deg, var(--primary) 0%, var(--primary-light) 100%); border-radius: var(--card-radius); padding: 3.5rem 2rem; text-align: center; color: white;">
            <h2 style="font-size: 2rem; font-weight: 800; margin-bottom: 1rem;">{{ __('contact.learn_more_title') }}</h2>
            <p style="font-size: 1rem; margin-bottom: 2rem; opacity: 0.95;">
                {{ __('contact.learn_more_subtitle') }}
            </p>
            <div style="display: flex; gap: 1rem; justify-content: center; flex-wrap: wrap;">
                <a href="https://calendly.com/hkincotech/consultation" style="background: white; color: var(--primary); padding: 0.75rem 2rem; border-radius: 8px; font-weight: 600; text-decoration: none; transition: all 0.3s ease;" onmouseover="this.style.backgroundColor='var(--secondary-bg)';" onmouseout="this.style.backgroundColor='white';">
                    <span>{{ __('contact.schedule_call') }}</span>
                </a>
                <a href="mailto:hello@hkincotech.com" style="background: rgba(255,255,255,0.2); color: white; padding: 0.75rem 2rem; border-radius: 8px; font-weight: 600; text-decoration: none; transition: all 0.3s ease;" onmouseover="this.style.backgroundColor='rgba(255,255,255,0.3)';" onmouseout="this.style.backgroundColor='rgba(255,255,255,0.2)';">
                    <span>{{ __('contact.email_us') }}</span>
                </a>
            </div>
        </div>
    </div>
</section>
