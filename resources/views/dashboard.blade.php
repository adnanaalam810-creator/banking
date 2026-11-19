<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <meta name="theme-color" content="#1d4ed8">
    <meta name="mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="default">
    <link rel="manifest" href="/manifest.webmanifest">
    <link rel="icon" href="/icons/icon-192.svg" type="image/svg+xml">
    <link rel="apple-touch-icon" href="/icons/icon-192.svg">
    <style>
        :root {
            --bg: #f3f7ff;
            --panel: #ffffff;
            --panel-soft: #f8fafc;
            --primary: #1d4ed8;
            --primary-2: #2563eb;
            --primary-dark: #0f172a;
            --success: #16a34a;
            --warning: #f59e0b;
            --danger: #ef4444;
            --text: #0f172a;
            --muted: #64748b;
            --border: rgba(148, 163, 184, 0.22);
            --shadow: 0 30px 60px rgba(15, 23, 42, 0.08);
        }

        * { box-sizing: border-box; }

        body {
            margin: 0;
            min-height: 100vh;
            font-family: Arial, sans-serif;
            background: radial-gradient(circle at top left, #dbeafe 0%, transparent 25%),
                        radial-gradient(circle at bottom right, #dcfce7 0%, transparent 22%),
                        linear-gradient(180deg, #f8fbff 0%, #eef4ff 100%);
            color: var(--text);
        }

        .page {
            max-width: 1320px;
            margin: 0 auto;
            padding: 30px 22px 60px;
        }

        .topbar {
            display: flex;
            justify-content: space-between;
            align-items: center;
            gap: 20px;
            background: rgba(255,255,255,0.75);
            border: 1px solid rgba(255,255,255,0.6);
            border-radius: 22px;
            padding: 18px 24px;
            backdrop-filter: blur(12px);
            box-shadow: var(--shadow);
        }

        .brand {
            display: flex;
            align-items: center;
            gap: 12px;
        }

        .brand-mark {
            width: 14px;
            height: 14px;
            border-radius: 50%;
            background: linear-gradient(135deg, var(--primary), #60a5fa);
            box-shadow: 0 0 0 7px rgba(96,165,250,0.12);
        }

        .brand-name {
            font-weight: 700;
            font-size: 1.1rem;
        }

        .actions {
            display: flex;
            align-items: center;
            gap: 12px;
        }

        .pill {
            background: #e0ecff;
            color: var(--primary);
            border-radius: 999px;
            padding: 8px 14px;
            font-size: 0.82rem;
            font-weight: 700;
        }

        .logout {
            border: none;
            border-radius: 12px;
            background: linear-gradient(135deg, var(--primary-dark), #1e293b);
            color: white;
            padding: 10px 18px;
            font-weight: 700;
            cursor: pointer;
        }

        .layout {
            display: grid;
            grid-template-columns: 260px 1fr;
            gap: 24px;
            margin-top: 26px;
        }

        .sidebar {
            background: rgba(15, 23, 42, 0.96);
            border-radius: 28px;
            padding: 22px 18px;
            color: white;
            box-shadow: var(--shadow);
        }

        .profile {
            display: flex;
            align-items: center;
            gap: 12px;
            padding: 10px 8px 20px;
            border-bottom: 1px solid rgba(148, 163, 184, 0.2);
        }

        .avatar {
            width: 42px;
            height: 42px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            background: linear-gradient(135deg, #dbeafe, #bfdbfe);
            color: #1e3a8a;
            font-weight: 700;
        }

        .profile small {
            display: block;
            color: rgba(255,255,255,0.7);
        }

        .nav {
            display: grid;
            gap: 12px;
            margin-top: 20px;
        }

        .nav-item {
            display: flex;
            align-items: center;
            gap: 12px;
            padding: 12px 14px;
            border-radius: 12px;
            color: rgba(255,255,255,0.8);
            background: rgba(148, 163, 184, 0.04);
            font-weight: 600;
        }

        .nav-item.active {
            background: linear-gradient(135deg, rgba(59,130,246,0.24), rgba(96,165,250,0.12));
            color: white;
        }

        .main {
            display: grid;
            gap: 22px;
        }

        .hero {
            background: linear-gradient(135deg, var(--primary), var(--primary-2));
            border-radius: 28px;
            padding: 28px 28px 20px;
            color: white;
            box-shadow: 0 30px 60px rgba(29, 78, 216, 0.24);
        }

        .hero-top {
            display: flex;
            justify-content: space-between;
            gap: 18px;
            align-items: center;
        }

        .eyebrow {
            display: inline-block;
            font-size: 0.78rem;
            letter-spacing: 0.08em;
            text-transform: uppercase;
            color: rgba(255,255,255,0.75);
            margin-bottom: 12px;
        }

        .hero h1 {
            margin: 0;
            font-size: clamp(2rem, 3vw, 3rem);
        }

        .hero p {
            margin: 10px 0 0;
            color: rgba(255,255,255,0.8);
            line-height: 1.6;
        }

        .cta-row {
            display: flex;
            gap: 12px;
            margin-top: 20px;
        }

        .primary-btn, .secondary-btn {
            border: none;
            border-radius: 12px;
            padding: 12px 18px;
            font-weight: 700;
            cursor: pointer;
        }

        .primary-btn {
            background: white;
            color: var(--primary-dark);
        }

        .secondary-btn {
            background: rgba(255,255,255,0.12);
            color: white;
            border: 1px solid rgba(255,255,255,0.2);
        }

        .stats {
            display: grid;
            grid-template-columns: repeat(4, minmax(0, 1fr));
            gap: 18px;
        }

        .card {
            background: rgba(255,255,255,0.88);
            border: 1px solid var(--border);
            border-radius: 22px;
            padding: 20px 18px;
            box-shadow: var(--shadow);
        }

        .card-label {
            color: var(--muted);
            font-size: 0.8rem;
            letter-spacing: 0.08em;
            text-transform: uppercase;
            margin-bottom: 10px;
        }

        .card-value {
            font-size: clamp(1.8rem, 2vw, 2.3rem);
            font-weight: 700;
        }

        .card-value.success { color: var(--success); }
        .card-value.warning { color: var(--warning); }
        .card-value.danger { color: var(--danger); }

        .content-grid {
            display: grid;
            grid-template-columns: 1.4fr 0.95fr;
            gap: 22px;
        }

        .panel {
            background: rgba(255,255,255,0.88);
            border: 1px solid var(--border);
            border-radius: 24px;
            padding: 22px;
            box-shadow: var(--shadow);
        }

        .panel-head {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 18px;
        }

        .panel-head h3 {
            margin: 0;
            font-size: 1.2rem;
        }

        .panel-action {
            color: var(--primary);
            font-weight: 700;
            text-decoration: none;
            font-size: 0.92rem;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        th, td {
            text-align: left;
            padding: 14px 10px;
            border-bottom: 1px solid rgba(148, 163, 184, 0.18);
        }

        th {
            color: var(--muted);
            font-size: 0.8rem;
            letter-spacing: 0.08em;
            text-transform: uppercase;
        }

        td {
            font-size: 0.96rem;
        }

        .tag {
            display: inline-block;
            padding: 6px 10px;
            border-radius: 999px;
            font-size: 0.75rem;
            font-weight: 700;
        }

        .tag.income { background: #dcfce7; color: #166534; }
        .tag.expense { background: #fee2e2; color: #991b1b; }
        .tag.transfer { background: #dbeafe; color: #1d4ed8; }

        .goals {
            display: grid;
            gap: 16px;
            margin-top: 8px;
        }

        .goal {
            padding: 14px 14px 12px;
            border-radius: 16px;
            background: var(--panel-soft);
            border: 1px solid rgba(148,163,184,0.18);
        }

        .goal-row {
            display: flex;
            justify-content: space-between;
            font-weight: 700;
            margin-bottom: 12px;
        }

        .progress {
            width: 100%;
            height: 10px;
            background: #e2e8f0;
            border-radius: 999px;
            overflow: hidden;
        }

        .progress > span {
            display: block;
            height: 100%;
            border-radius: inherit;
            background: linear-gradient(90deg, var(--primary), #60a5fa);
        }

        @media (max-width: 980px) {
            .layout {
                grid-template-columns: 1fr;
            }
            .stats {
                grid-template-columns: repeat(2, minmax(0, 1fr));
            }
            .content-grid {
                grid-template-columns: 1fr;
            }
        }

        @media (max-width: 640px) {
            .topbar, .hero-top { flex-direction: column; align-items: flex-start; }
            .stats { grid-template-columns: 1fr; }
            .actions { width: 100%; justify-content: space-between; }
        }
    </style>
</head>
<body>
    <div class="page">
        <div class="topbar">
            <div class="brand">
                <div class="brand-mark"></div>
                <div class="brand-name">Banking Dashboard</div>
            </div>

            <div class="actions">
                <div class="pill">Premium Account</div>
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button type="submit" class="logout">Logout</button>
                </form>
            </div>
        </div>

        <div class="layout">
            <aside class="sidebar">
                <div class="profile">
                    <div class="avatar">{{ strtoupper(substr(Auth::user()->name, 0, 1)) }}</div>
                    <div>
                        <strong>{{ Auth::user()->name }}</strong>
                        <small>{{ Auth::user()->email }}</small>
                    </div>
                </div>

                <nav class="nav">
                    <div class="nav-item active">Overview</div>
                    <div class="nav-item">Accounts</div>
                    <div class="nav-item">Transactions</div>
                    <div class="nav-item">Cards</div>
                    <div class="nav-item">Savings</div>
                    <div class="nav-item">Settings</div>
                </nav>
            </aside>

            <main class="main">
                <section class="hero">
                    <div class="hero-top">
                        <div>
                            <span class="eyebrow">Welcome back</span>
                            <h1>Hello, {{ Auth::user()->name }}!</h1>
                        </div>
                    </div>
                    <p>Your financial overview is looking healthy. You’ve saved 18% more this month compared to last month.</p>

                    <div class="cta-row">
                        <button class="primary-btn">Transfer Money</button>
                        <button class="secondary-btn">Add Funds</button>
                    </div>
                </section>

                <section class="stats">
                    <div class="card">
                        <div class="card-label">Balance</div>
                        <div class="card-value">$24,680</div>
                    </div>
                    <div class="card">
                        <div class="card-label">Income</div>
                        <div class="card-value success">+$4,250</div>
                    </div>
                    <div class="card">
                        <div class="card-label">Expenses</div>
                        <div class="card-value warning">$1,820</div>
                    </div>
                    <div class="card">
                        <div class="card-label">Savings</div>
                        <div class="card-value danger">$8,940</div>
                    </div>
                </section>

                <section class="content-grid">
                    <div class="panel">
                        <div class="panel-head">
                            <h3>Recent Transactions</h3>
                            <a href="#" class="panel-action">View all</a>
                        </div>

                        <table>
                            <thead>
                                <tr>
                                    <th>Title</th>
                                    <th>Type</th>
                                    <th>Amount</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Salary Deposit</td>
                                    <td><span class="tag income">Income</span></td>
                                    <td>+$3,200</td>
                                </tr>
                                <tr>
                                    <td>Groceries Market</td>
                                    <td><span class="tag expense">Expense</span></td>
                                    <td>-$145</td>
                                </tr>
                                <tr>
                                    <td>Transfer to Savings</td>
                                    <td><span class="tag transfer">Transfer</span></td>
                                    <td>-$500</td>
                                </tr>
                                <tr>
                                    <td>Freelance Project</td>
                                    <td><span class="tag income">Income</span></td>
                                    <td>+$870</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                    <div class="panel">
                        <div class="panel-head">
                            <h3>Financial Goals</h3>
                            <a href="#" class="panel-action">Plan</a>
                        </div>

                        <div class="goals">
                            <div class="goal">
                                <div class="goal-row">
                                    <span>Emergency Fund</span>
                                    <span>72%</span>
                                </div>
                                <div class="progress"><span style="width: 72%;"></span></div>
                            </div>

                            <div class="goal">
                                <div class="goal-row">
                                    <span>Vacation</span>
                                    <span>48%</span>
                                </div>
                                <div class="progress"><span style="width: 48%;"></span></div>
                            </div>

                            <div class="goal">
                                <div class="goal-row">
                                    <span>Home Down Payment</span>
                                    <span>34%</span>
                                </div>
                                <div class="progress"><span style="width: 34%;"></span></div>
                            </div>
                        </div>
                    </div>
                </section>
            </main>
        </div>
    </div>

    <script>
        if ('serviceWorker' in navigator) {
            window.addEventListener('load', () => {
                navigator.serviceWorker.register('/sw.js').catch(() => {});
            });
        }
    </script>
</body>
</html>
