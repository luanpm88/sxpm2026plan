@php
    // Stylized, theme-aware hero background: an even field of smooth streamlines
    // + soft glow + faint dot-matrix + center fade. $flow: 'wave' (calm) | 'rise' (growth).
    $flow = $flow ?? 'wave';
    $id = 'hbg'.substr(md5(uniqid('', true)), 0, 6);
    $path = $flow === 'rise'
        ? 'M-120,300 C 260,270 520,220 800,190 C 1080,160 1320,90 1600,40'
        : 'M-120,120 C 230,60 470,180 760,120 C 1050,60 1300,180 1580,120';
@endphp
<div class="hero-bg" aria-hidden="true">
    <svg viewBox="0 0 1440 620" preserveAspectRatio="xMidYMid slice" xmlns="http://www.w3.org/2000/svg">
        <defs>
            <pattern id="{{ $id }}d" width="38" height="38" patternUnits="userSpaceOnUse">
                <circle class="hero-bg__dot" cx="1.4" cy="1.4" r="1.4"/>
            </pattern>
            <radialGradient id="{{ $id }}g" cx="50%" cy="50%" r="50%">
                <stop class="hero-bg__glow0" offset="0"/><stop class="hero-bg__glow1" offset="1"/>
            </radialGradient>
            <radialGradient id="{{ $id }}f" cx="50%" cy="48%" r="50%">
                <stop class="hero-bg__fade0" offset="0"/><stop class="hero-bg__fade1" offset="0.7"/>
            </radialGradient>
            <path id="{{ $id }}s" d="{{ $path }}"/>
        </defs>
        <rect width="1440" height="620" fill="url(#{{ $id }}d)"/>
        <ellipse cx="1180" cy="160" rx="520" ry="360" fill="url(#{{ $id }}g)"/>
        <ellipse cx="200" cy="510" rx="420" ry="320" fill="url(#{{ $id }}g)" opacity=".6"/>
        <g class="hero-bg__streams">
            @for ($i = -3; $i <= 9; $i++)
                <use href="#{{ $id }}s" y="{{ $i * 62 }}"/>
            @endfor
        </g>
        <rect width="1440" height="620" fill="url(#{{ $id }}f)"/>
    </svg>
</div>
