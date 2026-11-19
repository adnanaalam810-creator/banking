<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome | Banking App</title>
    <meta name="theme-color" content="#1d4ed8">
    <meta name="mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="default">
    <link rel="manifest" href="/manifest.webmanifest">
    <link rel="icon" href="/icons/icon-192.svg" type="image/svg+xml">
    <link rel="apple-touch-icon" href="/icons/icon-192.svg">
    <style>
        :root {
            --lamp-core: #fff1b4;
            --lamp-mid: #ffd36b;
            --lamp-edge: #d48c2f;
            --lamp-rgb: 255, 205, 112;
        }

        * { margin: 0; padding: 0; box-sizing: border-box; }

        body {
            min-height: 100vh;
            background: #08090d;
            color: #ffffff;
            font-family: Arial, sans-serif;
            display: flex;
            align-items: center;
            justify-content: center;
            overflow-x: hidden;
            padding: 24px;
            transition: background .35s ease;
        }

        body::before {
            content: "";
            position: fixed;
            inset: 0;
            pointer-events: none;
            background: radial-gradient(circle at 29% 48%, rgba(var(--lamp-rgb), .30), transparent 24%),
                        radial-gradient(circle at 42% 40%, rgba(var(--lamp-rgb), .12), transparent 38%);
            transition: opacity .35s ease;
            z-index: -1;
        }

        body.lamp-off {
            background: #050609;
        }

        body.lamp-off::before {
            opacity: 0;
        }

        body.lamp-off .container {
            border-color: #34343d;
            box-shadow: 0 0 18px rgba(0, 0, 0, .8);
        }

        .container {
            width: min(850px, 100%);
            min-height: 480px;
            border: 1px solid #555;
            border-radius: 12px;
            display: flex;
            align-items: center;
            justify-content: space-around;
            padding: 35px;
            gap: 25px;
            background: #101116;
            box-shadow: 0 0 35px #272044;
        }

        .lamp-area {
            width: 45%;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
        }

        .lamp-button {
            width: 220px;
            height: 280px;
            padding: 0;
            border: none;
            background: transparent;
            cursor: pointer;
            border-radius: 50%;
        }

        .lamp-button:focus-visible {
            outline: 2px solid #b58aff;
            outline-offset: 8px;
        }

        .lamp {
            position: relative;
            z-index: 1;
            width: 220px;
            height: 280px;
            animation: float 3s ease-in-out infinite;
            filter: drop-shadow(0 22px 18px rgba(0, 0, 0, .45));
        }

        .lamp::before,
        .lamp::after { display: none; }

        .lamp-light-beam,
        .lamp-floor-glow {
            transition: opacity .35s ease;
        }

        .lamp.is-off .lamp-light-beam,
        .lamp.is-off .lamp-floor-glow { opacity: 0; }

        .lamp-svg { position: relative; z-index: 2; width: 220px; height: 280px; display: block; overflow: visible; }

        .lamp-svg .bulb-glow {
            opacity: 1;
            transition: opacity .35s ease;
            filter: url(#softGlow) brightness(1.35);
        }

        .lamp-svg .bulb-core {
            fill: var(--lamp-core);
            filter: drop-shadow(0 0 10px var(--lamp-core));
            transition: fill .35s ease, filter .35s ease;
        }

        .lamp-svg [fill="#ffd97b"] {
            fill: var(--lamp-core);
        }

        .lamp.is-off {
            filter: brightness(.62) saturate(.7) drop-shadow(0 22px 18px rgba(0, 0, 0, .45));
        }
        .lamp.is-off .lamp-svg .bulb-glow { opacity: 0; }
        .lamp.is-off .lamp-svg .bulb-core { fill: #5d5d66; filter: none; }

        @keyframes float {
            0%, 100% { transform: translateY(0) rotate(0); }
            50% { transform: translateY(-9px) rotate(2deg); }
        }

        .login-box {
            width: 300px;
            padding: 30px;
            background: #15161c;
            border: 1px solid #48404f;
            border-radius: 12px;
            box-shadow: 0 0 25px #a15cff22;
            transition: opacity .28s ease, transform .28s ease, visibility .28s;
        }

        .login-box.is-hidden {
            opacity: 0;
            transform: translateX(18px) scale(.96);
            visibility: hidden;
            pointer-events: none;
            position: absolute;
        }

        .login-box h1 {
            text-align: center;
            margin-bottom: 25px;
            color: #b58aff;
            font-size: 1.5rem;
            letter-spacing: 2px;
        }

        form { display: grid; }

        .input-group { margin-bottom: 20px; }

        .input-group label {
            display: block;
            margin-bottom: 8px;
            color: #ccc;
            font-size: 0.92rem;
        }

        .input-group input {
            width: 100%;
            padding: 12px;
            background: #08090d;
            border: 1px solid #555;
            border-radius: 6px;
            color: white;
            outline: none;
        }

        .input-group input:focus {
            border-color: #b58aff;
            box-shadow: 0 0 12px #a15cff66;
        }

        .row {
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 12px;
            margin: -2px 0 18px;
        }

        .remember {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            color: #aaa;
            font-size: 0.82rem;
        }

        .remember input { accent-color: #a15cff; }

        .link {
            color: #b58aff;
            text-decoration: none;
            font-size: 0.82rem;
        }

        .login-box button[type="submit"] {
            width: 100%;
            padding: 13px;
            background: linear-gradient(90deg, #8053d9, #bd81ff);
            color: white;
            font-size: 16px;
            font-weight: bold;
            border: none;
            border-radius: 6px;
            cursor: pointer;
            transition: .3s;
        }

        .login-box button[type="submit"]:hover {
            box-shadow: 0 0 20px #b58aff;
            transform: translateY(-2px);
        }

        .errors {
            margin-bottom: 16px;
            padding: 10px;
            border: 1px solid #8d4b67;
            border-radius: 6px;
            color: #ffc1d2;
            background: #321822;
            font-size: 12px;
            text-align: center;
        }

        .switch {
            margin-top: 14px;
            text-align: center;
            color: #aaa;
            font-size: 0.82rem;
        }

        .switch a { color: #b58aff; text-decoration: none; font-weight: bold; }

        .lamp-status {
            margin-top: 12px;
            color: #aaa;
            font-size: 0.82rem;
            letter-spacing: .08em;
            text-transform: uppercase;
            opacity: 0;
            transition: opacity .25s ease;
        }

        .container.lamp-off .lamp-status {
            opacity: 1;
        }

        .light-controls {
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 9px;
            margin-top: 8px;
            padding: 8px 10px;
            border: 1px solid rgba(255,255,255,.08);
            border-radius: 999px;
            background: rgba(10,11,15,.82);
            box-shadow: 0 10px 24px rgba(0,0,0,.28);
        }

        .light-swatch {
            width: 20px;
            height: 20px;
            border-radius: 50%;
            border: 2px solid rgba(255,255,255,.24);
            cursor: pointer;
            transition: transform .2s ease, box-shadow .2s ease, border-color .2s ease;
        }

        .light-swatch:hover { transform: scale(1.12); }
        .light-swatch.active {
            border-color: #fff;
            box-shadow: 0 0 10px var(--swatch-color), 0 0 0 3px rgba(255,255,255,.08);
        }

        @media (max-width: 600px) {
            body { padding: 12px; }
            .container {
                flex-direction: column;
                padding: 20px;
                min-height: auto;
            }
            .lamp-area { width: 100%; height: 180px; }
            .lamp-button { width: 190px; height: 240px; }
            .lamp { width: 190px; height: 240px; transform: none; }
            .lamp-svg { width: 190px; height: 240px; }
            .login-box { width: 100%; max-width: 330px; }
        }

        @media (prefers-reduced-motion: reduce) {
            .lamp { animation: none; }
        }
    </style>
</head>
<body>
    <main class="container">
        <div class="lamp-area">
            <button class="lamp-button" id="lampButton" type="button" aria-label="Turn lamp off" aria-pressed="true">
                <span class="lamp" id="lamp" aria-hidden="true">
                    <svg class="lamp-svg" viewBox="0 0 220 280" role="presentation">
                        <defs>
                            <linearGradient id="brass" x1="0" y1="0" x2="1" y2="1">
                                <stop offset="0" stop-color="#fff1ad"/><stop offset=".12" stop-color="#b99a45"/><stop offset=".32" stop-color="#6f561e"/><stop offset=".52" stop-color="#d8bd66"/><stop offset=".72" stop-color="#755820"/><stop offset="1" stop-color="#33250d"/>
                            </linearGradient>
                            <linearGradient id="greenShade" x1="0" y1="0" x2="1" y2="1">
                                <stop offset="0" stop-color="#87aa8e"/><stop offset=".09" stop-color="#315842"/><stop offset=".38" stop-color="#153a29"/><stop offset=".68" stop-color="#0b2418"/><stop offset="1" stop-color="#06150e"/>
                            </linearGradient>
                            <radialGradient id="lampRoomGlow">
                                <stop class="lamp-color-core" offset="0" stop-color="#fff5bd" stop-opacity="1"/><stop class="lamp-color-mid" offset=".25" stop-color="#ffd36b" stop-opacity="1"/><stop class="lamp-color-edge" offset=".58" stop-color="#d48c2f" stop-opacity=".42"/><stop class="lamp-color-edge-end" offset="1" stop-color="#d48c2f" stop-opacity="0"/>
                            </radialGradient>
                            <radialGradient id="baseMetal" cx="35%" cy="25%" r="80%">
                                <stop offset="0" stop-color="#f1dc94"/><stop offset=".18" stop-color="#b49a51"/><stop offset=".5" stop-color="#68501f"/><stop offset=".78" stop-color="#33240c"/><stop offset="1" stop-color="#161007"/>
                            </radialGradient>
                            <filter id="realGlow" x="-180%" y="-180%" width="460%" height="460%">
                                <feGaussianBlur stdDeviation="12"/>
                            </filter>
                            <linearGradient id="downBeam" x1="0" y1="0" x2="0" y2="1">
                                <stop class="lamp-color-core" offset="0" stop-color="#fff5bd" stop-opacity=".62"/>
                                <stop class="lamp-color-mid" offset=".55" stop-color="#ffd36b" stop-opacity=".28"/>
                                <stop class="lamp-color-edge" offset="1" stop-color="#d48c2f" stop-opacity="0"/>
                            </linearGradient>
                            <radialGradient id="floorGlow">
                                <stop class="lamp-color-core" offset="0" stop-color="#fff5bd" stop-opacity=".72"/>
                                <stop class="lamp-color-mid" offset=".4" stop-color="#ffd36b" stop-opacity=".32"/>
                                <stop class="lamp-color-edge" offset="1" stop-color="#d48c2f" stop-opacity="0"/>
                            </radialGradient>
                        </defs>

                        <path class="lamp-light-beam" d="M118 98 L144 98 L205 258 L57 258 Z" fill="url(#downBeam)" opacity=".7"/>
                        <ellipse class="lamp-floor-glow" cx="131" cy="258" rx="92" ry="20" fill="url(#floorGlow)" opacity=".85"/>
                        <ellipse cx="112" cy="261" rx="85" ry="11" fill="#020304" opacity=".88"/>
                        <ellipse cx="112" cy="251" rx="72" ry="19" fill="url(#baseMetal)" stroke="#463711" stroke-width="2"/>
                        <ellipse cx="112" cy="243" rx="58" ry="13" fill="#4d3a18" opacity=".62"/>
                        <ellipse cx="112" cy="238" rx="42" ry="8" fill="#c0a458" opacity=".36"/>
                        <ellipse cx="112" cy="249" rx="68" ry="14" fill="none" stroke="#ead18a" stroke-width="1.2" opacity=".45"/>

                        <path d="M112 239 C111 202 107 166 119 135 C130 108 154 91 148 61" fill="none" stroke="#332712" stroke-width="17" stroke-linecap="round"/>
                        <path d="M112 239 C111 202 107 166 119 135 C130 108 154 91 148 61" fill="none" stroke="url(#brass)" stroke-width="11" stroke-linecap="round"/>
                        <path d="M108 239 C108 204 104 168 116 137 C127 111 150 93 145 63" fill="none" stroke="#fff1ad" stroke-width="1.8" opacity=".5" stroke-linecap="round"/>

                        <circle cx="119" cy="135" r="15" fill="url(#baseMetal)" stroke="#d1ba72" stroke-width="2"/>
                        <circle cx="119" cy="135" r="6" fill="#3a2d11" stroke="#e6ce82" stroke-width="2"/>
                        <circle cx="148" cy="61" r="13" fill="url(#baseMetal)" stroke="#d1ba72" stroke-width="2"/>

                        <ellipse class="bulb-glow" cx="136" cy="88" rx="88" ry="72" fill="url(#lampRoomGlow)" opacity=".95"/>
                        <ellipse cx="146" cy="92" rx="58" ry="46" fill="#ffd97b" opacity=".18" filter="url(#realGlow)"/>

                        <path d="M63 88 C74 56 101 32 137 30 C166 29 190 43 199 67 C176 82 151 92 120 96 C96 99 75 96 63 88Z" fill="#07130d" opacity=".9"/>
                        <path d="M68 85 C80 56 104 36 136 34 C163 33 184 44 193 65 C172 75 150 83 119 88 C96 91 79 89 68 85Z" fill="url(#greenShade)" stroke="#10281b" stroke-width="3"/>
                        <path d="M78 77 C93 53 117 40 145 38 C159 37 172 41 181 46 C157 42 127 50 102 67 C91 75 82 83 75 90Z" fill="#a7c1aa" opacity=".16"/>
                        <path d="M65 88 C91 101 169 99 198 68" fill="none" stroke="#b9a44f" stroke-width="5"/>
                        <path d="M68 87 C92 99 167 97 194 69" fill="none" stroke="#eadc91" stroke-width="1.4" opacity=".75"/>

                        <ellipse cx="131" cy="94" rx="64" ry="13" fill="#0a100c" opacity=".65"/>
                        <ellipse cx="131" cy="93" rx="48" ry="9" fill="#d7d0ad" opacity=".18"/>
                        <ellipse class="bulb-core" cx="131" cy="94" rx="13" ry="9"/>
                        <ellipse cx="127" cy="91" rx="5" ry="3" fill="#fffbd1" opacity=".9"/>
                    </svg>
                </span>
            </button>
            <span class="lamp-status" id="lampStatus" aria-live="polite">Lamp off — click to open</span>

            <div class="light-controls" id="lightControls" aria-label="Lamp light color">
                <button class="light-swatch active" type="button" style="--swatch-color:#ffd36b;background:#ffd36b" data-core="#fff1b4" data-mid="#ffd36b" data-edge="#d48c2f" data-rgb="255, 205, 112" aria-label="Warm light" aria-pressed="true"></button>
                <button class="light-swatch" type="button" style="--swatch-color:#fff8df;background:#fff8df" data-core="#fffdf1" data-mid="#fff4b8" data-edge="#d9d0ad" data-rgb="255, 248, 223" aria-label="Daylight" aria-pressed="false"></button>
                <button class="light-swatch" type="button" style="--swatch-color:#72b7ff;background:#72b7ff" data-core="#d7efff" data-mid="#72b7ff" data-edge="#3975b7" data-rgb="114, 183, 255" aria-label="Blue light" aria-pressed="false"></button>
                <button class="light-swatch" type="button" style="--swatch-color:#ff82c8;background:#ff82c8" data-core="#ffd1ec" data-mid="#ff82c8" data-edge="#b43a80" data-rgb="255, 130, 200" aria-label="Pink light" aria-pressed="false"></button>
                <button class="light-swatch" type="button" style="--swatch-color:#78dda2;background:#78dda2" data-core="#d8ffe6" data-mid="#78dda2" data-edge="#378b5b" data-rgb="120, 221, 162" aria-label="Green light" aria-pressed="false"></button>
                <button class="light-swatch" type="button" style="--swatch-color:#b58aff;background:#b58aff" data-core="#eadcff" data-mid="#b58aff" data-edge="#6f43c1" data-rgb="181, 138, 255" aria-label="Purple light" aria-pressed="false"></button>
            </div>
        </div>

        <section class="login-box" id="loginBox">
            <h1>Welcome!</h1>

            @if ($errors->any())
                <div class="errors">{{ $errors->first() }}</div>
            @endif

            <form method="POST" action="{{ route('login.submit') }}">
                @csrf

                <div class="input-group">
                    <label for="email">Email address</label>
                    <input type="email" id="email" name="email" value="{{ old('email') }}" placeholder="you@example.com" required autofocus>
                </div>

                <div class="input-group">
                    <label for="password">Password</label>
                    <input type="password" id="password" name="password" placeholder="Enter password" required>
                </div>

                <div class="row">
                    <label class="remember">
                        <input type="checkbox" name="remember">
                        Remember me
                    </label>
                    <a class="link" href="{{ route('register') }}">Forgot password?</a>
                </div>

                <button type="submit">Sign In</button>

                <p class="switch">
                    New here? <a href="{{ route('register') }}">Create account</a>
                </p>
            </form>

        </section>
    </main>

    <script>
        const lampButton = document.getElementById('lampButton');
        const lamp = document.getElementById('lamp');
        const loginBox = document.getElementById('loginBox');
        const container = document.querySelector('.container');
        const lampStatus = document.getElementById('lampStatus');
        const lightControls = document.getElementById('lightControls');
        const lightSwatches = document.querySelectorAll('.light-swatch');

        lampButton.addEventListener('click', () => {
            const lampIsOn = lampButton.getAttribute('aria-pressed') === 'true';

            lampButton.setAttribute('aria-pressed', String(!lampIsOn));
            lampButton.setAttribute('aria-label', lampIsOn ? 'Turn lamp on' : 'Turn lamp off');

            lamp.classList.toggle('is-off', lampIsOn);
            document.body.classList.toggle('lamp-off', lampIsOn);
            loginBox.classList.toggle('is-hidden', lampIsOn);
            lightControls.setAttribute('aria-hidden', 'false');

            lampStatus.textContent = lampIsOn
                ? 'Lamp off — click to open'
                : 'Lamp on — login open';
        });

        lightSwatches.forEach(swatch => {
            swatch.addEventListener('click', () => {
                document.documentElement.style.setProperty('--lamp-core', swatch.dataset.core);
                document.documentElement.style.setProperty('--lamp-mid', swatch.dataset.mid);
                document.documentElement.style.setProperty('--lamp-edge', swatch.dataset.edge);
                document.documentElement.style.setProperty('--lamp-rgb', swatch.dataset.rgb);

                document.querySelectorAll('.lamp-color-core').forEach(stop => stop.setAttribute('stop-color', swatch.dataset.core));
                document.querySelectorAll('.lamp-color-mid').forEach(stop => stop.setAttribute('stop-color', swatch.dataset.mid));
                document.querySelectorAll('.lamp-color-edge').forEach(stop => stop.setAttribute('stop-color', swatch.dataset.edge));
                document.querySelectorAll('.lamp-color-edge-end').forEach(stop => stop.setAttribute('stop-color', swatch.dataset.edge));

                lightSwatches.forEach(item => {
                    item.classList.remove('active');
                    item.setAttribute('aria-pressed', 'false');
                });
                swatch.classList.add('active');
                swatch.setAttribute('aria-pressed', 'true');

                if (lamp.classList.contains('is-off')) {
                    lampButton.click();
                }
            });
        });

        if ('serviceWorker' in navigator) {
            window.addEventListener('load', () => {
                navigator.serviceWorker.register('/sw.js').catch(() => {});
            });
        }
    </script>
</body>
</html>
