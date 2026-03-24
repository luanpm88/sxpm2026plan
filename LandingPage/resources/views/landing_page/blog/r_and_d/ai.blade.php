<!-- AI Knowledge Platform - Deep Dive Article -->
<article>
    <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 3rem; align-items: start;">
        
        <!-- Visual Element -->
        <div style="background: linear-gradient(135deg, #fef3c7 0%, #fde68a 100%); border-radius: 12px; padding: 2.5rem; height: 100%; min-height: 600px; display: flex; flex-direction: column; justify-content: space-between; border: 1px solid #fcd34d; order: 2;">
            <div>
                <div style="font-size: 3.5rem; color: #d97706; margin-bottom: 1.5rem;">
                    <span class="material-symbols-rounded">auto_awesome</span>
                </div>
                <h4 style="font-size: 1.5rem; font-weight: 700; color: var(--text-dark); margin-bottom: 0.75rem;">{{ __('ai_platform.sidebar_title') }}</h4>
                <p style="color: var(--text-gray); font-size: 0.95rem; line-height: 1.6; margin-bottom: 1.5rem;">
                    {{ __('ai_platform.sidebar_desc') }}
                </p>
            </div>

            <div style="background: white; border-radius: 10px; padding: 1.75rem; margin-bottom: 1.5rem; border: 1px solid #fde68a;">
                <h5 style="font-size: 1rem; font-weight: 700; color: var(--text-dark); margin-bottom: 1.25rem;">{{ __('ai_platform.sidebar_focus_title') }}</h5>
                
                <div style="margin-bottom: 1.25rem; padding-bottom: 1.25rem; border-bottom: 1px solid #fef3c7;">
                    <p style="color: var(--text-dark); font-weight: 600; font-size: 0.9rem; margin-bottom: 0.4rem;">{{ __('ai_platform.sidebar_f1_title') }}</p>
                    <p style="color: var(--text-gray); font-size: 0.85rem; line-height: 1.5;">
                        {{ __('ai_platform.sidebar_f1_desc') }}
                    </p>
                </div>

                <div style="margin-bottom: 1.25rem; padding-bottom: 1.25rem; border-bottom: 1px solid #fef3c7;">
                    <p style="color: var(--text-dark); font-weight: 600; font-size: 0.9rem; margin-bottom: 0.4rem;">{{ __('ai_platform.sidebar_f2_title') }}</p>
                    <p style="color: var(--text-gray); font-size: 0.85rem; line-height: 1.5;">
                        {{ __('ai_platform.sidebar_f2_desc') }}
                    </p>
                </div>

                <div style="margin-bottom: 1.25rem; padding-bottom: 1.25rem; border-bottom: 1px solid #fef3c7;">
                    <p style="color: var(--text-dark); font-weight: 600; font-size: 0.9rem; margin-bottom: 0.4rem;">{{ __('ai_platform.sidebar_f3_title') }}</p>
                    <p style="color: var(--text-gray); font-size: 0.85rem; line-height: 1.5;">
                        {{ __('ai_platform.sidebar_f3_desc') }}
                    </p>
                </div>

                <div>
                    <p style="color: var(--text-dark); font-weight: 600; font-size: 0.9rem; margin-bottom: 0.4rem;">{{ __('ai_platform.sidebar_f4_title') }}</p>
                    <p style="color: var(--text-gray); font-size: 0.85rem; line-height: 1.5;">
                        {{ __('ai_platform.sidebar_f4_desc') }}
                    </p>
                </div>
            </div>

            <div style="background: #fef3c7; border-radius: 8px; padding: 1.25rem; border-left: 4px solid #d97706;">
                <p style="color: var(--text-dark); font-size: 0.9rem; line-height: 1.6;">
                    <strong style="color: #d97706;">Vision:</strong> {{ __('ai_platform.sidebar_vision') }}
                </p>
            </div>
        </div>

        <!-- Article Content -->
        <div style="order: 1;">
            <div style="display: inline-block; background: #fef3c7; color: #92400e; padding: 0.4rem 1rem; border-radius: 6px; font-size: 0.8rem; font-weight: 600; margin-bottom: 1rem; text-transform: uppercase;">
                {{ __('ai_platform.badge') }}
            </div>
            
            <h2 style="font-size: 2.5rem; font-weight: 800; color: var(--text-dark); margin-bottom: 1.5rem; line-height: 1.2;">
                {{ __('ai_platform.title') }}
            </h2>
            
            <p style="color: var(--text-gray); font-size: 1.05rem; line-height: 1.8; margin-bottom: 1.5rem;">
                {{ __('ai_platform.intro') }}
            </p>

            <h3 style="font-size: 1.4rem; font-weight: 700; color: var(--text-dark); margin-bottom: 1rem; margin-top: 2rem;">{{ __('ai_platform.problem_title') }}</h3>
            <p style="color: var(--text-gray); line-height: 1.8; margin-bottom: 1.5rem;">
                {{ __('ai_platform.problem_desc') }}
            </p>

            <h3 style="font-size: 1.4rem; font-weight: 700; color: var(--text-dark); margin-bottom: 1rem; margin-top: 2rem;">{{ __('ai_platform.foundation_title') }}</h3>
            <p style="color: var(--text-gray); line-height: 1.8; margin-bottom: 1.5rem;">
                {{ __('ai_platform.foundation_desc') }}
            </p>
            
            <div style="background: #fef3c7; border-left: 4px solid #d97706; padding: 1.5rem; margin-bottom: 2rem; border-radius: 4px;">
                <p style="color: var(--text-dark); font-weight: 600; margin-bottom: 0.75rem;">{{ __('ai_platform.foundation_semantic_title') }}</p>
                <p style="color: var(--text-gray); font-size: 0.95rem; line-height: 1.7;">
                    {{ __('ai_platform.foundation_semantic_desc') }}
                </p>
            </div>

            <div style="background: #fef3c7; border-left: 4px solid #d97706; padding: 1.5rem; margin-bottom: 2rem; border-radius: 4px;">
                <p style="color: var(--text-dark); font-weight: 600; margin-bottom: 0.75rem;">{{ __('ai_platform.foundation_grounded_title') }}</p>
                <p style="color: var(--text-gray); font-size: 0.95rem; line-height: 1.7;">
                    {{ __('ai_platform.foundation_grounded_desc') }}
                </p>
            </div>

            <div style="background: #fef3c7; border-left: 4px solid #d97706; padding: 1.5rem; margin-bottom: 2rem; border-radius: 4px;">
                <p style="color: var(--text-dark); font-weight: 600; margin-bottom: 0.75rem;">{{ __('ai_platform.foundation_heterogeneous_title') }}</p>
                <p style="color: var(--text-gray); font-size: 0.95rem; line-height: 1.7;">
                    {{ __('ai_platform.foundation_heterogeneous_desc') }}
                </p>
            </div>

            <div style="background: #fef3c7; border-left: 4px solid #d97706; padding: 1.5rem; margin-bottom: 2rem; border-radius: 4px;">
                <p style="color: var(--text-dark); font-weight: 600; margin-bottom: 0.75rem;">{{ __('ai_platform.foundation_integration_title') }}</p>
                <p style="color: var(--text-gray); font-size: 0.95rem; line-height: 1.7;">
                    {{ __('ai_platform.foundation_integration_desc') }}
                </p>
            </div>

            <h3 style="font-size: 1.4rem; font-weight: 700; color: var(--text-dark); margin-bottom: 1rem; margin-top: 2rem;">{{ __('ai_platform.impact_title') }}</h3>
            <p style="color: var(--text-gray); line-height: 1.8; margin-bottom: 1.5rem; font-size: 0.95rem;">
                {{ __('ai_platform.impact_desc') }}
            </p>
            <ul style="list-style: none; padding: 0; color: var(--text-gray); line-height: 1.8;">
                @foreach(__('ai_platform.impact_items') as $item)
                <li style="margin-bottom: 0.75rem; display: flex; gap: 0.75rem;">
                    <span style="color: #d97706; font-weight: 700; flex-shrink: 0;">→</span>
                    <span>{{ $item['text'] }}<strong>{{ $item['bold'] }}</strong>{{ $item['suffix'] }}</span>
                </li>
                @endforeach
            </ul>

            <h3 style="font-size: 1.4rem; font-weight: 700; color: var(--text-dark); margin-bottom: 1rem; margin-top: 2rem;">{{ __('ai_platform.research_title') }}</h3>
            <p style="color: var(--text-gray); line-height: 1.8; margin-bottom: 1rem;">
                {{ __('ai_platform.research_desc') }}
            </p>
            <ul style="list-style: none; padding: 0; color: var(--text-gray); line-height: 1.8;">
                @foreach(__('ai_platform.research_items') as $item)
                <li style="margin-bottom: 0.75rem; display: flex; gap: 0.75rem;">
                    <span style="color: #d97706; font-weight: 700; flex-shrink: 0;">→</span>
                    <span><strong>{{ $item['bold'] }}</strong> {{ $item['text'] }}</span>
                </li>
                @endforeach
            </ul>

            <p style="color: var(--text-gray); line-height: 1.8; margin-top: 2rem; padding-top: 1.5rem; border-top: 1px solid var(--border); font-size: 0.95rem; font-style: italic;">
                {{ __('ai_platform.closing') }}
            </p>
        </div>
    </div>
</article>
