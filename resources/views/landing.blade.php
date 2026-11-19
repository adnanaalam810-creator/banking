<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>sifr banking.com | Smart Banking</title>
    <meta name="theme-color" content="#1d4ed8">
    <meta name="mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="default">
    <link rel="manifest" href="/manifest.webmanifest">
    <link rel="icon" href="/icons/icon-192.svg" type="image/svg+xml">
    <link rel="apple-touch-icon" href="/icons/icon-192.svg">
    <style>
        :root {
            --bg: #f3f7ff;
            --bg-2: #eef4ff;
            --primary: #1d4ed8;
            --primary-2: #2563eb;
            --secondary: #0f172a;
            --text: #0f172a;
            --muted: #5b6b82;
            --light: #edf4ff;
            --card: rgba(255,255,255,0.85);
            --white: #ffffff;
            --line: rgba(148,163,184,0.24);
            --success: #16a34a;
            --shadow: 0 30px 60px rgba(15,23,42,0.09);
        }

        * { box-sizing: border-box; }
        html { scroll-behavior: smooth; }
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background: linear-gradient(180deg, #f8fbff 0%, #eef4ff 100%);
            color: var(--text);
        }

        a { text-decoration: none; }
        img { max-width: 100%; }

        .container {
            width: min(1200px, calc(100% - 32px));
            margin: 0 auto;
        }

        header {
            position: sticky;
            top: 0;
            z-index: 20;
            backdrop-filter: blur(12px);
            background: rgba(248, 251, 255, 0.72);
            border-bottom: 1px solid rgba(148, 163, 184, 0.2);
        }

        .nav {
            display: flex;
            align-items: center;
            justify-content: space-between;
            height: 78px;
        }

        .logo {
            display: flex;
            align-items: center;
            gap: 12px;
            font-weight: 700;
            font-size: 1.2rem;
        }

        .logo-dot {
            width: 14px;
            height: 14px;
            border-radius: 50%;
            background: linear-gradient(135deg, var(--primary), #60a5fa);
            box-shadow: 0 0 0 7px rgba(96,165,250,0.12);
        }

        .nav-links {
            display: flex;
            align-items: center;
            gap: 30px;
            color: var(--muted);
            font-weight: 600;
        }

        .nav-actions {
            display: flex;
            align-items: center;
            gap: 12px;
        }

        .btn {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            padding: 14px 22px;
            border-radius: 12px;
            font-weight: 700;
            transition: transform 0.25s ease, box-shadow 0.25s ease;
        }

        .btn:hover {
            transform: translateY(-2px);
        }

        .btn-primary {
            background: linear-gradient(135deg, var(--primary), var(--primary-2));
            color: white;
            box-shadow: 0 18px 35px rgba(37,99,235,0.2);
        }

        .btn-secondary {
            background: rgba(29,78,216,0.08);
            color: var(--primary);
        }

        .hero {
            padding: 70px 0 60px;
            position: relative;
            overflow: hidden;
        }

        .hero-grid {
            display: grid;
            grid-template-columns: 1.1fr 0.9fr;
            align-items: center;
            gap: 38px;
        }

        .eyebrow {
            display: inline-block;
            padding: 8px 14px;
            border-radius: 999px;
            background: rgba(29,78,216,0.08);
            color: var(--primary);
            font-size: 0.72rem;
            letter-spacing: 0.08em;
            text-transform: uppercase;
            font-weight: 700;
            margin-bottom: 20px;
        }

        .hero h1 {
            font-size: clamp(2.8rem, 5vw, 5rem);
            line-height: 1.02;
            margin: 0;
            letter-spacing: -0.06em;
        }

        .hero .highlight {
            background: linear-gradient(135deg, #022c86, #2563eb, #60a5fa);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }

        .subtext {
            color: var(--muted);
            font-size: 1.08rem;
            line-height: 1.8;
            max-width: 620px;
            margin: 22px 0 28px;
        }

        .hero-actions {
            display: flex;
            gap: 16px;
            flex-wrap: wrap;
            margin-bottom: 28px;
        }

        .hero-metrics {
            display: flex;
            gap: 28px;
            flex-wrap: wrap;
        }

        .metric strong {
            display: block;
            font-size: 1.55rem;
        }

        .metric span {
            color: var(--muted);
            font-size: 0.92rem;
        }

        .phone-card {
            position: relative;
            width: min(470px, 100%);
            margin-left: auto;
            background: linear-gradient(180deg, rgba(15,23,42,0.96), rgba(30,41,59,0.94));
            border: 1px solid rgba(255,255,255,0.08);
            border-radius: 32px;
            padding: 18px;
            box-shadow: 0 35px 80px rgba(15,23,42,0.18);
            animation: floatCard 4s ease-in-out infinite;
        }

        @keyframes floatCard {
            0%, 100% { transform: translateY(0px); }
            50% { transform: translateY(-12px); }
        }

        .mini-screen {
            background: linear-gradient(180deg, #dbeafe 0%, #eff6ff 100%);
            border-radius: 24px;
            padding: 22px 18px 18px;
        }

        .balance-top {
            display: flex;
            justify-content: space-between;
            align-items: center;
            color: var(--secondary);
            margin-bottom: 22px;
        }

        .balance-chip {
            background: rgba(37,99,235,0.1);
            color: var(--primary);
            font-size: 0.75rem;
            font-weight: 700;
            border-radius: 999px;
            padding: 6px 10px;
        }

        .amount {
            font-size: clamp(2rem, 4vw, 3rem);
            font-weight: 800;
            color: var(--secondary);
        }

        .card-grid {
            display: grid;
            grid-template-columns: repeat(2, minmax(0, 1fr));
            gap: 12px;
            margin-top: 18px;
        }

        .tiny-card {
            padding: 16px 14px;
            border-radius: 16px;
            background: rgba(255,255,255,0.72);
            border: 1px solid rgba(148,163,184,0.18);
        }

        .tiny-label {
            color: var(--muted);
            font-size: 0.72rem;
            text-transform: uppercase;
            letter-spacing: 0.08em;
            margin-bottom: 10px;
        }

        .tiny-value {
            font-size: 1.25rem;
            font-weight: 700;
            color: var(--secondary);
        }

        .floating-badge {
            position: absolute;
            right: -10px;
            bottom: 26px;
            background: #ffffff;
            border-radius: 16px;
            padding: 14px 16px;
            box-shadow: var(--shadow);
            border: 1px solid rgba(148,163,184,0.18);
            animation: popIn 2s ease-in-out infinite alternate;
        }

        @keyframes popIn {
            from { transform: scale(0.98); }
            to { transform: scale(1.04); }
        }

        .floating-badge strong {
            display: block;
            font-size: 1.2rem;
        }

        section {
            padding: 90px 0;
        }

        .section-head {
            text-align: center;
            max-width: 700px;
            margin: 0 auto 40px;
        }

        .section-head h2 {
            font-size: clamp(2.1rem, 3vw, 3rem);
            line-height: 1.1;
            margin: 0 0 14px;
        }

        .section-head p {
            color: var(--muted);
            margin: 0;
            line-height: 1.8;
        }

        .dual-grid {
            display: grid;
            grid-template-columns: 1.1fr 0.9fr;
            gap: 26px;
            align-items: center;
        }

        .info-panel {
            background: rgba(255,255,255,0.9);
            border: 1px solid var(--line);
            border-radius: 24px;
            padding: 28px;
            box-shadow: var(--shadow);
        }

        .info-panel h3 {
            margin-top: 0;
            margin-bottom: 18px;
            font-size: clamp(1.8rem, 2.6vw, 2.5rem);
        }

        .info-panel p {
            color: var(--muted);
            line-height: 1.8;
            margin-bottom: 18px;
        }

        .mini-list {
            display: grid;
            gap: 16px;
            margin-top: 22px;
        }

        .mini-item {
            display: flex;
            gap: 12px;
            align-items: center;
            color: var(--secondary);
            font-weight: 600;
        }

        .mini-icon {
            width: 32px;
            height: 32px;
            border-radius: 10px;
            background: rgba(29,78,216,0.09);
            color: var(--primary);
            display: grid;
            place-items: center;
            font-weight: 800;
        }

        .features-grid {
            display: grid;
            grid-template-columns: repeat(4, minmax(0, 1fr));
            gap: 22px;
        }

        .feature-box {
            background: rgba(255,255,255,0.9);
            border: 1px solid var(--line);
            border-radius: 22px;
            padding: 26px 20px;
            box-shadow: var(--shadow);
            transition: transform 0.25s ease, box-shadow 0.25s ease;
        }

        .feature-box:hover {
            transform: translateY(-4px);
            box-shadow: 0 35px 60px rgba(15,23,42,0.08);
        }

        .icon-wrap {
            width: 52px;
            height: 52px;
            display: grid;
            place-items: center;
            background: linear-gradient(135deg, rgba(29,78,216,0.1), rgba(96,165,250,0.18));
            border-radius: 16px;
            margin-bottom: 18px;
            color: var(--primary);
            font-size: 1.4rem;
            font-weight: 700;
        }

        .feature-box h3 {
            margin: 0 0 10px;
            font-size: 1.2rem;
        }

        .feature-box p {
            margin: 0;
            color: var(--muted);
            line-height: 1.7;
        }

        .benefits {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 24px;
            align-items: center;
        }

        .benefit-panel {
            background: linear-gradient(135deg, #0f172a, #1e293b);
            color: white;
            border-radius: 28px;
            padding: 28px;
            box-shadow: 0 35px 60px rgba(15,23,42,0.16);
        }

        .benefit-panel h3 {
            font-size: clamp(1.8rem, 2.5vw, 2.6rem);
            margin: 0 0 18px;
        }

        .benefit-list {
            display: grid;
            gap: 16px;
            margin-top: 26px;
        }

        .benefit-item {
            display: flex;
            gap: 12px;
            align-items: flex-start;
            color: rgba(255,255,255,0.82);
            line-height: 1.7;
        }

        .check {
            width: 22px;
            height: 22px;
            border-radius: 50%;
            background: rgba(34,197,94,0.18);
            display: grid;
            place-items: center;
            color: #86efac;
            font-weight: 700;
            flex-shrink: 0;
            margin-top: 2px;
        }

        .stats-panel {
            display: grid;
            gap: 20px;
        }

        .stat-box {
            background: rgba(255,255,255,0.9);
            border: 1px solid var(--line);
            border-radius: 22px;
            padding: 22px 20px;
            box-shadow: var(--shadow);
        }

        .stat-box h4 {
            margin: 0 0 10px;
            color: var(--muted);
            font-size: 0.85rem;
            text-transform: uppercase;
            letter-spacing: 0.08em;
        }

        .stat-box .big {
            font-size: 2rem;
            font-weight: 800;
            margin-bottom: 8px;
        }

        .bar {
            width: 100%;
            height: 12px;
            border-radius: 999px;
            background: #e2e8f0;
            overflow: hidden;
        }

        .bar > span {
            display: block;
            height: 100%;
            border-radius: inherit;
            background: linear-gradient(90deg, var(--primary), #60a5fa);
        }

        .pricing {
            display: grid;
            grid-template-columns: repeat(3, minmax(0, 1fr));
            gap: 24px;
        }

        .price-card {
            background: rgba(255,255,255,0.9);
            border: 1px solid var(--line);
            border-radius: 24px;
            padding: 28px 22px;
            box-shadow: var(--shadow);
        }

        .price-card.popular {
            background: linear-gradient(180deg, rgba(29,78,216,0.08), rgba(255,255,255,0.96));
            border: 1px solid rgba(29,78,216,0.25);
            transform: scale(1.02);
        }

        .price-card .plan {
            color: var(--primary);
            font-weight: 700;
            text-transform: uppercase;
            letter-spacing: 0.08em;
            font-size: 0.78rem;
        }

        .price-card h3 {
            font-size: 2.2rem;
            margin: 18px 0 10px;
        }

        .price-card p {
            color: var(--muted);
            line-height: 1.7;
        }

        .price-card ul {
            list-style: none;
            padding: 0;
            margin: 18px 0 24px;
            display: grid;
            gap: 10px;
            color: var(--secondary);
        }

        .price-card li::before {
            content: "✓";
            color: var(--success);
            font-weight: 700;
            margin-right: 8px;
        }

        .cta-band {
            background: linear-gradient(135deg, #0f172a, #1e3a8a);
            color: white;
            border-radius: 28px;
            padding: 34px 28px;
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 22px;
            box-shadow: 0 30px 60px rgba(15,23,42,0.15);
        }

        .cta-band h3 {
            margin: 0;
            font-size: clamp(1.8rem, 3vw, 2.8rem);
        }

        .cta-band p {
            margin: 8px 0 0;
            color: rgba(255,255,255,0.8);
        }

        .stats-strip {
            display: grid;
            grid-template-columns: repeat(4, minmax(0, 1fr));
            gap: 18px;
        }

        .stats-strip .stat-box {
            min-height: 160px;
        }

        .comparison-table {
            display: grid;
            grid-template-columns: 1.1fr 1fr 1fr 1fr;
            gap: 0;
            border-radius: 22px;
            overflow: hidden;
            border: 1px solid var(--line);
            background: rgba(255,255,255,0.9);
            box-shadow: var(--shadow);
        }

        .table-header,
        .table-row {
            display: contents;
        }

        .table-head-cell,
        .table-cell {
            padding: 18px 16px;
            border-bottom: 1px solid var(--line);
            border-right: 1px solid var(--line);
            background: rgba(255,255,255,0.8);
        }

        .table-head-cell {
            font-size: 0.75rem;
            text-transform: uppercase;
            letter-spacing: 0.08em;
            color: var(--muted);
            background: rgba(239,246,255,0.95);
            font-weight: 700;
        }

        .table-cell {
            color: var(--secondary);
            font-weight: 600;
        }

        .table-cell.good {
            color: var(--success);
        }

        .process-grid,
        .product-grid,
        .testimonial-grid,
        .faq-grid {
            display: grid;
            gap: 22px;
        }

        .process-grid {
            grid-template-columns: repeat(4, minmax(0, 1fr));
        }

        .product-grid {
            grid-template-columns: repeat(3, minmax(0, 1fr));
        }

        .testimonial-grid {
            grid-template-columns: repeat(3, minmax(0, 1fr));
        }

        .faq-grid {
            grid-template-columns: repeat(2, minmax(0, 1fr));
        }

        .process-card,
        .product-card,
        .testimonial-card,
        .faq-card {
            background: rgba(255,255,255,0.9);
            border: 1px solid var(--line);
            border-radius: 22px;
            padding: 24px 20px;
            box-shadow: var(--shadow);
        }

        .process-step {
            width: 44px;
            height: 44px;
            border-radius: 14px;
            background: linear-gradient(135deg, var(--primary), #60a5fa);
            color: white;
            display: grid;
            place-items: center;
            font-weight: 700;
            margin-bottom: 16px;
        }

        .product-card h3,
        .testimonial-card h3,
        .faq-card h3 {
            margin-top: 0;
            margin-bottom: 12px;
        }

        .product-card p,
        .testimonial-card p,
        .faq-card p {
            margin: 0;
            color: var(--muted);
            line-height: 1.8;
        }

        .quote {
            font-size: 1.1rem;
            color: var(--secondary);
            line-height: 1.8;
        }

        .person {
            display: flex;
            align-items: center;
            gap: 12px;
            margin-top: 18px;
            color: var(--muted);
            font-weight: 700;
        }

        .avatar {
            width: 38px;
            height: 38px;
            border-radius: 50%;
            background: linear-gradient(135deg, var(--primary), #60a5fa);
            display: grid;
            place-items: center;
            color: white;
            font-size: 0.9rem;
        }

        .faq-card {
            padding: 24px 22px;
        }

        .timeline {
            display: grid;
            grid-template-columns: repeat(4, minmax(0, 1fr));
            gap: 18px;
        }

        .timeline-card {
            padding: 24px 20px;
            border-radius: 22px;
            background: linear-gradient(180deg, rgba(29,78,216,0.08), rgba(255,255,255,0.9));
            border: 1px solid rgba(29,78,216,0.14);
        }

        .timeline-card strong {
            display: block;
            font-size: 2rem;
            margin-bottom: 8px;
            color: var(--primary);
        }

        footer {
            padding: 30px 0 50px;
            color: var(--muted);
            text-align: center;
        }

        @media (max-width: 980px) {
            .hero-grid,
            .benefits,
            .pricing,
            .features-grid,
            .dual-grid,
            .stats-strip,
            .process-grid,
            .product-grid,
            .testimonial-grid,
            .faq-grid,
            .timeline {
                grid-template-columns: 1fr;
            }
            .comparison-table {
                grid-template-columns: 1fr 1fr;
            }
            .nav-links {
                display: none;
            }
        }

        @media (max-width: 560px) {
            .hero {
                padding-top: 40px;
            }
            .hero-actions, .nav-actions {
                width: 100%;
            }
            .hero-actions .btn, .nav-actions .btn {
                width: 100%;
            }
            .cta-band {
                flex-direction: column;
                align-items: flex-start;
            }
        }
    </style>
</head>
<body>
    <header>
        <div class="container nav">
            <div class="logo">
                <span class="logo-dot"></span>
                <span>BlueBank</span>
            </div>

            <nav class="nav-links">
                <a href="#features">Features</a>
                <a href="#benefits">Benefits</a>
                <a href="#plans">Plans</a>
                <a href="#about">About</a>
            </nav>

            <div class="nav-actions">
                <a href="{{ route('login') }}" class="btn btn-secondary">Login</a>
                <a href="{{ route('register') }}" class="btn btn-primary">Open Account</a>
            </div>
        </div>
    </header>

    <main>
        <section class="hero">
            <div class="container hero-grid">
                <div>
                    <div class="eyebrow">Smart Banking for Everyone</div>
                    <h1>Banking that moves <span class="highlight">with you</span>.</h1>
                    <p class="subtext">
                        Manage spending, save faster, and grow wealth with a modern digital banking experience built for everyday life.
                    </p>

                    <div class="hero-actions">
                        <a href="{{ route('register') }}" class="btn btn-primary">Get Started</a>
                        <a href="#features" class="btn btn-secondary">See Features</a>
                    </div>

                    <div class="hero-metrics">
                        <div class="metric">
                            <strong>3.5M+</strong>
                            <span>Happy customers</span>
                        </div>
                        <div class="metric">
                            <strong>99.9%</strong>
                            <span>Uptime</span>
                        </div>
                        <div class="metric">
                            <strong>24/7</strong>
                            <span>Support</span>
                        </div>
                    </div>
                </div>

                <div class="phone-card">
                    <div class="mini-screen">
                        <div class="balance-top">
                            <span>Available balance</span>
                            <span class="balance-chip">Primary</span>
                        </div>
                        <div class="amount">$24,680</div>

                        <div class="card-grid">
                            <div class="tiny-card">
                                <div class="tiny-label">Income</div>
                                <div class="tiny-value">+$4,250</div>
                            </div>
                            <div class="tiny-card">
                                <div class="tiny-label">Savings</div>
                                <div class="tiny-value">$8,940</div>
                            </div>
                            <div class="tiny-card">
                                <div class="tiny-label">Cards</div>
                                <div class="tiny-value">3</div>
                            </div>
                            <div class="tiny-card">
                                <div class="tiny-label">Growth</div>
                                <div class="tiny-value">18%</div>
                            </div>
                        </div>
                    </div>

                    <div class="floating-badge">
                        <span>Monthly gain</span>
                        <strong>+$1,280</strong>
                    </div>
                </div>
            </div>
        </section>

        <section id="features">
            <div class="container">
                <div class="section-head">
                    <h2>Everything you need to manage money better</h2>
                    <p>From bank accounts to savings goals, our tools help you stay in control with confidence.</p>
                </div>

                <div class="features-grid">
                    <div class="feature-box">
                        <div class="icon-wrap">01</div>
                        <h3>Instant Transfers</h3>
                        <p>Send money securely in seconds with clear transaction tracking.</p>
                    </div>
                    <div class="feature-box">
                        <div class="icon-wrap">02</div>
                        <h3>Smart Savings</h3>
                        <p>Set goals and automate monthly transfers toward what matters most.</p>
                    </div>
                    <div class="feature-box">
                        <div class="icon-wrap">03</div>
                        <h3>Spending Insights</h3>
                        <p>Understand where your money goes with intelligent category insights.</p>
                    </div>
                    <div class="feature-box">
                        <div class="icon-wrap">04</div>
                        <h3>Secure Protection</h3>
                        <p>Bank with confidence using advanced fraud monitoring and security layers.</p>
                    </div>
                </div>
            </div>
        </section>

        <section id="benefits">
            <div class="container benefits">
                <div class="benefit-panel">
                    <h3>Built to help you grow financially.</h3>
                    <div class="benefit-list">
                        <div class="benefit-item">
                            <span class="check">✓</span>
                            <span>Track spending in real time with detailed financial analytics.</span>
                        </div>
                        <div class="benefit-item">
                            <span class="check">✓</span>
                            <span>Automate budgets and savings goals with one tap.</span>
                        </div>
                        <div class="benefit-item">
                            <span class="check">✓</span>
                            <span>Enjoy global payments, cards, and secure account access everywhere.</span>
                        </div>
                    </div>
                </div>

                <div class="stats-panel">
                    <div class="stat-box">
                        <h4>Portfolio growth</h4>
                        <div class="big">+24.8%</div>
                        <div class="bar"><span style="width: 75%;"></span></div>
                    </div>
                    <div class="stat-box">
                        <h4>Average monthly save</h4>
                        <div class="big">$1,940</div>
                        <div class="bar"><span style="width: 60%;"></span></div>
                    </div>
                    <div class="stat-box">
                        <h4>Customer satisfaction</h4>
                        <div class="big">4.9/5</div>
                        <div class="bar"><span style="width: 90%;"></span></div>
                    </div>
                </div>
            </div>
        </section>

        <section id="insights">
            <div class="container">
                <div class="section-head">
                    <h2>See your money clearly</h2>
                    <p>Smarter tools help you track your goals, cash flow, and next big milestone.</p>
                </div>
                <div class="stats-strip">
                    <div class="stat-box">
                        <h4>Accounts</h4>
                        <div class="big">8+</div>
                        <div class="bar"><span style="width: 72%;"></span></div>
                    </div>
                    <div class="stat-box">
                        <h4>Cash saved</h4>
                        <div class="big">$87K</div>
                        <div class="bar"><span style="width: 82%;"></span></div>
                    </div>
                    <div class="stat-box">
                        <h4>Response time</h4>
                        <div class="big">8 min</div>
                        <div class="bar"><span style="width: 68%;"></span></div>
                    </div>
                    <div class="stat-box">
                        <h4>Investment lift</h4>
                        <div class="big">+12.3%</div>
                        <div class="bar"><span style="width: 88%;"></span></div>
                    </div>
                </div>
            </div>
        </section>

        <section id="security">
            <div class="container dual-grid">
                <div class="info-panel">
                    <h3>Banking security built for peace of mind</h3>
                    <p>We combine encrypted transactions, biometric access, and live fraud monitoring to protect your account around the clock.</p>
                    <div class="mini-list">
                        <div class="mini-item"><span class="mini-icon">✓</span> 256-bit encryption across every transfer</div>
                        <div class="mini-item"><span class="mini-icon">✓</span> Instant card controls and alerts</div>
                        <div class="mini-item"><span class="mini-icon">✓</span> Real-time fraud detection and recovery tools</div>
                    </div>
                </div>
                <div class="info-panel">
                    <h3>Protected by design</h3>
                    <p>Every transaction is validated through layered authentication and proactive AI monitoring for safer daily banking.</p>
                    <div class="bar"><span style="width: 95%;"></span></div>
                    <p style="margin-top: 18px; color: var(--secondary); font-weight: 700;">Security confidence: 95%</p>
                </div>
            </div>
        </section>

        <section id="comparison">
            <div class="container">
                <div class="section-head">
                    <h2>Why customers switch to sifr banking.com</h2>
                </div>
                <div class="comparison-table">
                    <div class="table-header">
                        <div class="table-head-cell">Features</div>
                        <div class="table-head-cell">sifr banking.com</div>
                        <div class="table-head-cell">Typical bank</div>
                        <div class="table-head-cell">Traditional app</div>
                    </div>
                    <div class="table-row">
                        <div class="table-cell">Instant transfers</div>
                        <div class="table-cell good">Included</div>
                        <div class="table-cell">Often delayed</div>
                        <div class="table-cell">Limited</div>
                    </div>
                    <div class="table-row">
                        <div class="table-cell">Savings automation</div>
                        <div class="table-cell good">Included</div>
                        <div class="table-cell">Advanced fee</div>
                        <div class="table-cell">Manual</div>
                    </div>
                    <div class="table-row">
                        <div class="table-cell">Analytics</div>
                        <div class="table-cell good">Smart AI</div>
                        <div class="table-cell">Basic</div>
                        <div class="table-cell">Limited</div>
                    </div>
                    <div class="table-row">
                        <div class="table-cell">Support access</div>
                        <div class="table-cell good">24/7 live</div>
                        <div class="table-cell">Limited hours</div>
                        <div class="table-cell">Slow</div>
                    </div>
                </div>
            </div>
        </section>

        <section id="process">
            <div class="container">
                <div class="section-head">
                    <h2>How it works in 4 steps</h2>
                    <p>Open, manage, grow, and protect your money with one modern platform.</p>
                </div>
                <div class="process-grid">
                    <div class="process-card">
                        <div class="process-step">1</div>
                        <h3>Open account</h3>
                        <p>Start with fast verification and your secure digital profile.</p>
                    </div>
                    <div class="process-card">
                        <div class="process-step">2</div>
                        <h3>Fund instantly</h3>
                        <p>Transfer money from cards, wallets, or direct deposits in seconds.</p>
                    </div>
                    <div class="process-card">
                        <div class="process-step">3</div>
                        <h3>Set goals</h3>
                        <p>Track budgets and automate recurring transfers to your priorities.</p>
                    </div>
                    <div class="process-card">
                        <div class="process-step">4</div>
                        <h3>Grow wealth</h3>
                        <p>Use insights and smart planning to build stronger financial habits.</p>
                    </div>
                </div>
            </div>
        </section>

        <section id="products">
            <div class="container">
                <div class="section-head">
                    <h2>Financial products that fit your life</h2>
                    <p>From everyday spending to business finance, we’ve built the tools you need.</p>
                </div>
                <div class="product-grid">
                    <div class="product-card">
                        <h3>Personal accounts</h3>
                        <p>Simple, secure checking and savings for daily financial wins.</p>
                    </div>
                    <div class="product-card">
                        <h3>Business banking</h3>
                        <p>Cash flow visibility, cards, and smarter team spending controls.</p>
                    </div>
                    <div class="product-card">
                        <h3>Investment tools</h3>
                        <p>Track wealth growth and save with tailored, data-driven insights.</p>
                    </div>
                </div>
            </div>
        </section>

        <section id="testimonials">
            <div class="container">
                <div class="section-head">
                    <h2>Trusted by people moving forward</h2>
                    <p>People use sifr banking.com to simplify life and protect their future.</p>
                </div>
                <div class="testimonial-grid">
                    <div class="testimonial-card">
                        <div class="quote">“The app feels premium and the savings automation helped me build my emergency fund faster.”</div>
                        <div class="person"><span class="avatar">A</span> Ayesha K.</div>
                    </div>
                    <div class="testimonial-card">
                        <div class="quote">“I switched from a legacy bank because the experience is faster, smarter, and easier to trust.”</div>
                        <div class="person"><span class="avatar">M</span> Malik R.</div>
                    </div>
                    <div class="testimonial-card">
                        <div class="quote">“Our business account setup was quick and the reporting is exactly what our team needed.”</div>
                        <div class="person"><span class="avatar">S</span> Sana T.</div>
                    </div>
                </div>
            </div>
        </section>

        <section id="rewards">
            <div class="container">
                <div class="benefit-panel">
                    <h3>Rewards, insights, and more value</h3>
                    <div class="benefit-list">
                        <div class="benefit-item"><span class="check">✓</span><span>Boost savings with personalized automatic deposits.</span></div>
                        <div class="benefit-item"><span class="check">✓</span><span>Unlock cashback offers and spending categories that match your goals.</span></div>
                        <div class="benefit-item"><span class="check">✓</span><span>Stay in control through smarter alerts and better visibility.</span></div>
                    </div>
                </div>
            </div>
        </section>

        <section id="app">
            <div class="container dual-grid">
                <div class="info-panel">
                    <h3>Bank anywhere with the mobile app</h3>
                    <p>Track spending, send money, and manage your accounts from a single secure dashboard wherever you are.</p>
                    <div class="mini-list">
                        <div class="mini-item"><span class="mini-icon">⇆</span> Real-time transfers</div>
                        <div class="mini-item"><span class="mini-icon">◎</span> Card controls</div>
                        <div class="mini-item"><span class="mini-icon">★</span> Smart insights</div>
                    </div>
                </div>
                <div class="phone-card" style="margin-left: 0; width: 100%; max-width: 420px;">
                    <div class="mini-screen">
                        <div class="balance-top">
                            <span>Weekly spend</span>
                            <span class="balance-chip">Safe</span>
                        </div>
                        <div class="amount">$2,390</div>
                        <div class="card-grid">
                            <div class="tiny-card"><div class="tiny-label">Travel</div><div class="tiny-value">$680</div></div>
                            <div class="tiny-card"><div class="tiny-label">Food</div><div class="tiny-value">$430</div></div>
                            <div class="tiny-card"><div class="tiny-label">Bills</div><div class="tiny-value">$890</div></div>
                            <div class="tiny-card"><div class="tiny-label">Goal</div><div class="tiny-value">$390</div></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="faq">
            <div class="container">
                <div class="section-head">
                    <h2>Frequent questions</h2>
                </div>
                <div class="faq-grid">
                    <div class="faq-card">
                        <h3>Is opening an account quick?</h3>
                        <p>Yes. Most accounts can be opened in a few minutes with secure digital onboarding.</p>
                    </div>
                    <div class="faq-card">
                        <h3>Can I move money internationally?</h3>
                        <p>Yes. We support international transfers with clear rates and real-time tracking.</p>
                    </div>
                    <div class="faq-card">
                        <h3>Is there a mobile app?</h3>
                        <p>Yes. You can manage your account and cards from anywhere on iOS and Android devices.</p>
                    </div>
                    <div class="faq-card">
                        <h3>How safe is my money?</h3>
                        <p>We use encrypted processing, active monitoring, and strong account protections at every step.</p>
                    </div>
                </div>
            </div>
        </section>

        <section id="pricing">
            <div class="container">
                <div class="section-head">
                    <h2>Choose your perfect plan</h2>
                    <p>Simple pricing for personal banking, professionals, and growing businesses.</p>
                </div>

                <div class="pricing">
                    <div class="price-card">
                        <div class="plan">Starter</div>
                        <h3>$0</h3>
                        <p>Great for everyday personal banking needs.</p>
                        <ul>
                            <li>Basic account access</li>
                            <li>Instant transfers</li>
                            <li>Monthly spending report</li>
                        </ul>
                        <a href="{{ route('register') }}" class="btn btn-secondary" style="width:100%;">Try Free</a>
                    </div>

                    <div class="price-card popular">
                        <div class="plan">Premium</div>
                        <h3>$19</h3>
                        <p>For people wanting better insight, rewards, and flexibility.</p>
                        <ul>
                            <li>Everything in Starter</li>
                            <li>Priority support</li>
                            <li>Advanced analytics</li>
                        </ul>
                        <a href="{{ route('register') }}" class="btn btn-primary" style="width:100%;">Get Premium</a>
                    </div>

                    <div class="price-card">
                        <div class="plan">Business</div>
                        <h3>$49</h3>
                        <p>Built for fast growing teams and business finance operations.</p>
                        <ul>
                            <li>Multi-user access</li>
                            <li>Cash flow dashboards</li>
                            <li>Custom payment workflows</li>
                        </ul>
                        <a href="{{ route('register') }}" class="btn btn-secondary" style="width:100%;">Start Business</a>
                    </div>
                </div>
            </div>
        </section>

        <section id="timeline">
            <div class="container">
                <div class="section-head">
                    <h2>From launch to long-term growth</h2>
                </div>
                <div class="timeline">
                    <div class="timeline-card"><strong>1m</strong> users in first year</div>
                    <div class="timeline-card"><strong>42%</strong> more savings habits</div>
                    <div class="timeline-card"><strong>99.9%</strong> uptime reliability</div>
                    <div class="timeline-card"><strong>24/7</strong> customer support</div>
                </div>
            </div>
        </section>

        <section id="cta">
            <div class="container">
                <div class="cta-band">
                    <div>
                        <h3>Ready to build your future?</h3>
                        <p>Open your account today and take control of your money with confidence.</p>
                    </div>
                    <a href="{{ route('register') }}" class="btn btn-primary">Open an Account</a>
                </div>
            </div>
        </section>
    </main>

    <footer>
        <div class="container">© 2026 sifr banking.com. All rights reserved.</div>
    </footer>

    <script>
        if ('serviceWorker' in navigator) {
            window.addEventListener('load', () => {
                navigator.serviceWorker.register('/sw.js').catch(() => {});
            });
        }
    </script>
</body>
</html>
