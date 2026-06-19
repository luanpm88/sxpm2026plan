<div class="team-roadmap">
    <!-- Copy best team/roadmap content from your slides here -->
    <h3 style="text-align:center;color:var(--primary);font-weight:700;margin-bottom:18px;">{{ __('team_roadmap.title') }}</h3>
    <div class="card-grid" style="--card-min: 260px; --card-max: 400px; --card-gap: 18px;">
        <div class="team-card">
            <h4>{{ __('team_roadmap.ba_po_title') }}</h4>
            <ul><li>{{ __('team_roadmap.ba_po_cert1') }}</li><li>{{ __('team_roadmap.ba_po_cert2') }}</li></ul>
        </div>
        <div class="team-card">
            <h4>{{ __('team_roadmap.senior_dev_title') }}</h4>
            <ul><li>{{ __('team_roadmap.senior_dev_cert1') }}</li><li>{{ __('team_roadmap.senior_dev_cert2') }}</li></ul>
        </div>
        <div class="team-card">
            <h4>{{ __('team_roadmap.lead_fullstack_title') }}</h4>
            <ul><li>{{ __('team_roadmap.lead_fullstack_cert1') }}</li><li>{{ __('team_roadmap.lead_fullstack_cert2') }}</li></ul>
        </div>
        <div class="team-card">
            <h4>{{ __('team_roadmap.qa_tester_title') }}</h4>
            <ul><li>{{ __('team_roadmap.qa_tester_cert1') }}</li><li>{{ __('team_roadmap.qa_tester_cert2') }}</li></ul>
        </div>
    </div>
</div>
<style>
.team-card { background: var(--surface); border: 2px solid var(--border); border-radius: var(--card-radius); padding: 22px 18px; box-shadow: 0 1px 3px rgba(0,0,0,0.06); transition: box-shadow .2s, border .2s; }
.team-card:hover { border-color: var(--primary-light); box-shadow: 0 8px 24px rgba(24, 48, 96,0.13); }
.team-card h4 { color: var(--primary); font-size: 1rem; font-weight: 700; margin-bottom: 8px; }
.team-card ul { color: var(--text-gray); font-size: 0.95rem; margin: 0; padding-left: 18px; }
</style>