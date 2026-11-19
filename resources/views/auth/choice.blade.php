<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Banking App</title>
    <style>
        :root {
            --bg: #f4f7fb;
            --card: rgba(255,255,255,0.82);
            --card-strong: #ffffff;
            --primary: #1d4ed8;
            --primary-dark: #1e3a8a;
            --accent: #22c55e;
            --text: #10213a;
            --muted: #5f6f88;
            --border: rgba(148, 163, 184, 0.32);
            --shadow: 0 25px 50px rgba(15, 23, 42, 0.12);
        }
        * { box-sizing: border-box; }
        body {
            margin: 0;
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            font-family: Arial, sans-serif;
            background: radial-gradient(circle at top left, #dbeafe, transparent 30%),
                        radial-gradient(circle at bottom right, #dcfce7, transparent 25%),
                        var(--bg);
            color: var(--text);
        }
        .auth-shell {
            width: min(1100px, 92vw);
            background: rgba(255,255,255,0.35);
            border: 1px solid rgba(255,255,255,0.55);
            backdrop-filter: blur(12px);
            border-radius: 28px;
            box-shadow: var(--shadow);
            display: grid;
            grid-template-columns: 1.05fr 0.95fr;
            overflow: hidden;
        }
        .hero {
            padding: 56px 52px;
            background: linear-gradient(135deg, rgba(29,78,216,0.95), rgba(14,116,144,0.95));
            color: white;
            position: relative;
        }
        .hero::before {
            content: "";
            position: absolute;
            inset: 0;
            background: linear-gradient(135deg, rgba(255,255,255,0.18), transparent 40%);
        }
        .hero-content {
            position: relative;
            z-index: 1;
            display: flex;
            flex-direction: column;
            justify-content: center;
            height: 100%;
        }
        .badge {
            display: inline-block;
            width: fit-content;
            background: rgba(255,255,255,0.14);
            border: 1px solid rgba(255,255,255,0.2);
            padding: 8px 14px;
            border-radius: 999px;
            font-size: 12px;
            letter-spacing: 0.08em;
            text-transform: uppercase;
            font-weight: 700;
        }
        h1 {
            font-size: clamp(2.5rem, 4vw, 4rem);
            line-height: 1.05;
            margin: 22px 0 16px;
        }
        .hero p {
            font-size: 1.1rem;
            line-height: 1.7;
            color: rgba(255,255,255,0.82);
            max-width: 420px;
        }
        .feature-list {
            display: grid;
            gap: 18px;
            margin-top: 26px;
            max-width: 360px;
        }
        .feature {
            display: flex;
            gap: 12px;
            align-items: center;
            background: rgba(255,255,255,0.06);
            border: 1px solid rgba(255,255,255,0.08);
            border-radius: 14px;
            padding: 12px 14px;
        }
        .dot {
            width: 12px;
            height: 12px;
            border-radius: 50%;
            background: #a7f3d0;
            box-shadow: 0 0 0 6px rgba(167,243,208,0.18);
        }
        .panel {
            background: rgba(255,255,255,0.62);
            padding: 52px 44px;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .panel-inner {
            width: min(100%, 380px);
        }
        .title {
            font-size: 2.2rem;
            margin: 0 0 10px;
            color: var(--text);
        }
        .subtitle {
            margin: 0 0 28px;
            color: var(--muted);
            line-height: 1.6;
        }
        .action-group {
            display: grid;
            gap: 16px;
        }
        .btn {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            width: 100%;
            border: none;
            border-radius: 14px;
            padding: 16px 20px;
            font-size: 1rem;
            font-weight: 700;
            text-decoration: none;
            cursor: pointer;
            transition: transform 0.2s ease, box-shadow 0.2s ease;
        }
        .btn:hover { transform: translateY(-1px); }
        .btn-primary {
            background: linear-gradient(135deg, var(--primary), #3b82f6);
            color: white;
            box-shadow: 0 12px 24px rgba(59,130,246,0.28);
        }
        .btn-secondary {
            background: white;
            color: var(--text);
            border: 1px solid var(--border);
            box-shadow: 0 10px 24px rgba(15, 23, 42, 0.04);
        }
        .divider {
            display: flex;
            align-items: center;
            gap: 14px;
            margin: 18px 0;
            color: var(--muted);
            font-size: 0.9rem;
        }
        .divider::before,
        .divider::after {
            content: "";
            flex: 1;
            height: 1px;
            background: rgba(148,163,184,0.5);
        }
        .mini-card {
            margin-top: 28px;
            background: var(--card-strong);
            border: 1px solid var(--border);
            border-radius: 18px;
            padding: 18px 16px;
            box-shadow: 0 10px 20px rgba(15, 23, 42, 0.04);
        }
        .mini-card strong {
            display: block;
            font-size: 1.3rem;
            margin-bottom: 4px;
        }
        @media (max-width: 860px) {
            .auth-shell {
                grid-template-columns: 1fr;
            }
            .hero, .panel { padding: 32px 24px; }
            .hero { min-height: 320px; }
            .panel { padding-top: 26px; }
        }
    </style>
</head>
<body>
    <div class="auth-shell">
        <div class="hero">
            <div class="hero-content">
                <span class="badge">Secure Banking</span>
                <h1>Grow your money with confidence.</h1>
                <p>Track spending, save smarter, and access your financial dashboard from anywhere.</p>

                <div class="feature-list">
                    <div class="feature">
                        <span class="dot"></span>
                        <span>Instant account access</span>
                    </div>
                    <div class="feature">
                        <span class="dot"></span>
                        <span>Smart savings overview</span>
                    </div>
                    <div class="feature">
                        <span class="dot"></span>
                        <span>Secure transactions</span>
                    </div>
                </div>
            </div>
        </div>

        <div class="panel">
            <div class="panel-inner">
                <h2 class="title">Welcome</h2>
                <p class="subtitle">Choose how you want to continue to your account.</p>

                <div class="action-group">
                    <a href="{{ route('login') }}" class="btn btn-primary">Login</a>
                    <a href="{{ route('register') }}" class="btn btn-secondary">Register</a>
                </div>

                <div class="divider">Your secure portal</div>

                <div class="mini-card">
                    <strong>$24,680</strong>
                    <span>Total balance</span>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
