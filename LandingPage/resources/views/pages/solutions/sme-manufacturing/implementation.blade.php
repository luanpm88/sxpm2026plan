<section class="solution-section--surface">
    <div class="container-v5">
        <div class="section-header">
            <h2 class="section-title">{{ __('sme_manufacturing.implementation_title') }}</h2>
            <p class="section-subtitle">{{ __('sme_manufacturing.implementation_subtitle') }}</p>
        </div>

        <div class="solution-implementation-grid">
            <div class="solution-timeline">
                @foreach(__('sme_manufacturing.implementation_steps') as $step)
                    <article class="solution-timeline__item">
                        <span class="solution-timeline__num">{{ $step['number'] }}</span>
                        <div class="solution-timeline__content">
                            <h3>{{ $step['title'] }}</h3>
                            <p>{{ $step['description'] }}</p>
                        </div>
                    </article>
                @endforeach
            </div>

            <aside class="solution-delivery-stack">
                <div class="solution-flow-panel">
                    <div class="solution-kicker">
                        <span class="material-symbols-rounded" aria-hidden="true">cycle</span>
                        {{ __('sme_manufacturing.implementation_flow_kicker') }}
                    </div>
                    <h3>{{ __('sme_manufacturing.implementation_scrum_title') }}</h3>
                    <ol class="solution-flow-list">
                        @foreach(__('sme_manufacturing.implementation_scrum_steps') as $step)
                            <li>{{ $step }}</li>
                        @endforeach
                    </ol>
                </div>

                <div class="solution-role-panel">
                    <div class="solution-kicker">
                        <span class="material-symbols-rounded" aria-hidden="true">groups</span>
                        {{ __('sme_manufacturing.implementation_roles_kicker') }}
                    </div>
                    <h3>{{ __('sme_manufacturing.implementation_governance_title') }}</h3>
                    <div class="solution-role-grid">
                        @foreach(__('sme_manufacturing.implementation_roles') as $role)
                            <div class="solution-role-card">
                                <strong>{{ $role['title'] }}</strong>
                                <span>{{ $role['description'] }}</span>
                            </div>
                        @endforeach
                    </div>
                </div>
            </aside>
        </div>
    </div>
</section>
