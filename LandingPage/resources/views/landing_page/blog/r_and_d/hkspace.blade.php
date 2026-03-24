<!-- HKSpace Platform - Deep Dive Article -->
<article style="margin-bottom: 3rem;">
    <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 3rem; align-items: start;">
        
        <!-- Article Content -->
        <div>
            <div style="display: inline-block; background: #f0f9ff; color: #0369a1; padding: 0.4rem 1rem; border-radius: 6px; font-size: 0.8rem; font-weight: 600; margin-bottom: 1rem; text-transform: uppercase;">
                {{ __('hkspace.badge') }}
            </div>
            
            <h2 style="font-size: 2.5rem; font-weight: 800; color: var(--text-dark); margin-bottom: 1.5rem; line-height: 1.2;">
                {{ __('hkspace.title') }}
            </h2>
            
            <p style="color: var(--text-gray); font-size: 1.05rem; line-height: 1.8; margin-bottom: 1.5rem;">
                {{ __('hkspace.intro') }}
            </p>

            <h3 style="font-size: 1.4rem; font-weight: 700; color: var(--text-dark); margin-bottom: 1rem; margin-top: 2rem;">{{ __('hkspace.challenge_title') }}</h3>
            <p style="color: var(--text-gray); line-height: 1.8; margin-bottom: 1.5rem;">
                {{ __('hkspace.challenge_desc') }}
            </p>
            <ul style="list-style: none; padding: 0; margin-bottom: 2rem; color: var(--text-gray); line-height: 1.8;">
                @foreach(__('hkspace.challenge_items') as $item)
                <li style="margin-bottom: 0.75rem; display: flex; gap: 0.75rem;">
                    <span style="color: var(--primary); font-weight: 700; flex-shrink: 0;">✓</span>
                    <span>{{ $item }}</span>
                </li>
                @endforeach
            </ul>

            <h3 style="font-size: 1.4rem; font-weight: 700; color: var(--text-dark); margin-bottom: 1rem; margin-top: 2rem;">{{ __('hkspace.strategy_title') }}</h3>
            <p style="color: var(--text-gray); line-height: 1.8; margin-bottom: 1.5rem;">
                {{ __('hkspace.strategy_desc') }}
            </p>
            
            <div style="background: #f8fafc; border-left: 4px solid var(--primary); padding: 1.5rem; margin-bottom: 2rem; border-radius: 4px;">
                <p style="color: var(--text-dark); font-weight: 600; margin-bottom: 0.75rem;">{{ __('hkspace.strategy_composable_title') }}</p>
                <p style="color: var(--text-gray); font-size: 0.95rem; line-height: 1.7;">
                    {{ __('hkspace.strategy_composable_desc') }}
                </p>
            </div>

            <div style="background: #f8fafc; border-left: 4px solid var(--primary); padding: 1.5rem; margin-bottom: 2rem; border-radius: 4px;">
                <p style="color: var(--text-dark); font-weight: 600; margin-bottom: 0.75rem;">{{ __('hkspace.strategy_extensibility_title') }}</p>
                <p style="color: var(--text-gray); font-size: 0.95rem; line-height: 1.7;">
                    {{ __('hkspace.strategy_extensibility_desc') }}
                </p>
            </div>

            <div style="background: #f8fafc; border-left: 4px solid var(--primary); padding: 1.5rem; margin-bottom: 2rem; border-radius: 4px;">
                <p style="color: var(--text-dark); font-weight: 600; margin-bottom: 0.75rem;">{{ __('hkspace.strategy_ai_title') }}</p>
                <p style="color: var(--text-gray); font-size: 0.95rem; line-height: 1.7;">
                    {{ __('hkspace.strategy_ai_desc') }}
                </p>
            </div>

            <h3 style="font-size: 1.4rem; font-weight: 700; color: var(--text-dark); margin-bottom: 1rem; margin-top: 2rem;">{{ __('hkspace.milestones_title') }}</h3>
            <p style="color: var(--text-gray); line-height: 1.8; margin-bottom: 1.5rem; font-size: 0.95rem;">
                {{ __('hkspace.milestones_desc') }}
            </p>
            <ul style="list-style: none; padding: 0; color: var(--text-gray); line-height: 1.8;">
                @foreach(__('hkspace.milestones') as $m)
                <li style="margin-bottom: 0.75rem; display: flex; gap: 0.75rem;">
                    <span style="color: var(--primary); font-weight: 700; flex-shrink: 0;">→</span>
                    <span><strong>{{ $m['bold'] }}</strong> {{ $m['text'] }}</span>
                </li>
                @endforeach
            </ul>

            <h3 style="font-size: 1.4rem; font-weight: 700; color: var(--text-dark); margin-bottom: 1rem; margin-top: 2rem;">{{ __('hkspace.directions_title') }}</h3>
            <p style="color: var(--text-gray); line-height: 1.8; margin-bottom: 1rem;">
                {{ __('hkspace.directions_desc') }}
            </p>
            <ul style="list-style: none; padding: 0; color: var(--text-gray); line-height: 1.8;">
                @foreach(__('hkspace.directions') as $d)
                <li style="margin-bottom: 0.75rem; display: flex; gap: 0.75rem;">
                    <span style="color: var(--primary); font-weight: 700; flex-shrink: 0;">→</span>
                    <span><strong>{{ $d['bold'] }}</strong> {{ $d['text'] }}</span>
                </li>
                @endforeach
            </ul>
        </div>

        <!-- Visual Element -->
        <div style="background: linear-gradient(135deg, #f0f9ff 0%, #ecfdf5 100%); border-radius: var(--card-radius); padding: 2.5rem; height: 100%; min-height: 600px; display: flex; flex-direction: column; justify-content: space-between; border: 1px solid #bfdbfe;">
            <div>
                <div style="font-size: 3.5rem; color: var(--primary); margin-bottom: 1.5rem;">
                    <span class="material-symbols-rounded">hub</span>
                </div>
                <h4 style="font-size: 1.5rem; font-weight: 700; color: var(--text-dark); margin-bottom: 0.75rem;">{{ __('hkspace.sidebar_title') }}</h4>
                <p style="color: var(--text-gray); font-size: 0.95rem; line-height: 1.6; margin-bottom: 1.5rem;">
                    {{ __('hkspace.sidebar_desc') }}
                </p>
            </div>

            <div style="background: white; border-radius: 10px; padding: 1.75rem; margin-bottom: 1.5rem; border: 1px solid #d1e7f5;">
                <h5 style="font-size: 1rem; font-weight: 700; color: var(--text-dark); margin-bottom: 1.25rem;">{{ __('hkspace.sidebar_principles_title') }}</h5>
                
                <div style="margin-bottom: 1.25rem; padding-bottom: 1.25rem; border-bottom: 1px solid #e5f1ff;">
                    <p style="color: var(--text-dark); font-weight: 600; font-size: 0.9rem; margin-bottom: 0.4rem;">{{ __('hkspace.sidebar_p1_title') }}</p>
                    <p style="color: var(--text-gray); font-size: 0.85rem; line-height: 1.5;">
                        {{ __('hkspace.sidebar_p1_desc') }}
                    </p>
                </div>

                <div style="margin-bottom: 1.25rem; padding-bottom: 1.25rem; border-bottom: 1px solid #e5f1ff;">
                    <p style="color: var(--text-dark); font-weight: 600; font-size: 0.9rem; margin-bottom: 0.4rem;">{{ __('hkspace.sidebar_p2_title') }}</p>
                    <p style="color: var(--text-gray); font-size: 0.85rem; line-height: 1.5;">
                        {{ __('hkspace.sidebar_p2_desc') }}
                    </p>
                </div>

                <div style="margin-bottom: 1.25rem; padding-bottom: 1.25rem; border-bottom: 1px solid #e5f1ff;">
                    <p style="color: var(--text-dark); font-weight: 600; font-size: 0.9rem; margin-bottom: 0.4rem;">{{ __('hkspace.sidebar_p3_title') }}</p>
                    <p style="color: var(--text-gray); font-size: 0.85rem; line-height: 1.5;">
                        {{ __('hkspace.sidebar_p3_desc') }}
                    </p>
                </div>

                <div>
                    <p style="color: var(--text-dark); font-weight: 600; font-size: 0.9rem; margin-bottom: 0.4rem;">{{ __('hkspace.sidebar_p4_title') }}</p>
                    <p style="color: var(--text-gray); font-size: 0.85rem; line-height: 1.5;">
                        {{ __('hkspace.sidebar_p4_desc') }}
                    </p>
                </div>
            </div>

            <div style="background: #f0f9ff; border-radius: 8px; padding: 1.25rem; border-left: 4px solid var(--primary);">
                <p style="color: var(--text-dark); font-size: 0.9rem; line-height: 1.6;">
                    <strong style="color: var(--primary);">Vision:</strong> {{ __('hkspace.sidebar_vision') }}
                </p>
            </div>
        </div>
    </div>
</article>
