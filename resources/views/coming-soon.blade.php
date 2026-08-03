<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ __('messages.coming_soon_badge') }} — {{ __('messages.company_name') }}</title>
    <meta name="robots" content="noindex, nofollow">
    <link rel="icon" href="{{ asset('images/logostep.png') }}" type="image/x-icon">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

    <style>
        :root {
            --step-dark: #22332f;
            --step-primary: #364e4c;
            --step-accent: #527a77;
            --step-gold: #d8b568;
        }

        * { box-sizing: border-box; }

        html, body {
            height: 100%;
        }

        body {
            margin: 0;
            font-family: 'Poppins', sans-serif;
            color: #fff;
            background: linear-gradient(160deg, var(--step-dark) 0%, var(--step-primary) 55%, var(--step-accent) 100%);
            min-height: 100vh;
            display: flex;
            flex-direction: column;
            position: relative;
            overflow-x: hidden;
        }

        /* Ambient blur blobs */
        .blob {
            position: absolute;
            border-radius: 50%;
            filter: blur(90px);
            z-index: 0;
            opacity: 0.55;
            pointer-events: none;
        }

        .blob-1 {
            width: 420px;
            height: 420px;
            top: -140px;
            left: -120px;
            background: var(--step-gold);
            animation: float1 12s ease-in-out infinite;
        }

        .blob-2 {
            width: 380px;
            height: 380px;
            bottom: -160px;
            right: -100px;
            background: #6fa39f;
            animation: float2 14s ease-in-out infinite;
        }

        .blob-3 {
            width: 260px;
            height: 260px;
            top: 45%;
            left: 60%;
            background: #ffffff;
            opacity: 0.08;
            animation: float1 16s ease-in-out infinite reverse;
        }

        @keyframes float1 {
            0%, 100% { transform: translate(0, 0) scale(1); }
            50% { transform: translate(40px, 30px) scale(1.08); }
        }

        @keyframes float2 {
            0%, 100% { transform: translate(0, 0) scale(1); }
            50% { transform: translate(-30px, -40px) scale(1.1); }
        }

        /* Subtle grid overlay for texture */
        .grid-overlay {
            position: absolute;
            inset: 0;
            z-index: 0;
            background-image:
                linear-gradient(rgba(255,255,255,0.035) 1px, transparent 1px),
                linear-gradient(90deg, rgba(255,255,255,0.035) 1px, transparent 1px);
            background-size: 42px 42px;
            pointer-events: none;
        }

        .lang-switch {
            position: relative;
            z-index: 2;
            display: flex;
            justify-content: flex-end;
            padding: 24px clamp(20px, 5vw, 60px) 0;
        }

        .lang-switch .dropdown-toggle {
            background: rgba(255,255,255,0.08);
            border: 1px solid rgba(255,255,255,0.25);
            color: #fff;
            padding: 8px 16px;
            border-radius: 30px;
            font-size: 14px;
            font-weight: 500;
            display: inline-flex;
            align-items: center;
            gap: 8px;
            cursor: pointer;
            backdrop-filter: blur(6px);
            transition: background 0.25s ease;
        }

        .lang-switch .dropdown-toggle:hover {
            background: rgba(255,255,255,0.18);
        }

        .lang-switch .dropdown-menu {
            position: absolute;
            top: 44px;
            right: 0;
            background: #fff;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 12px 30px rgba(0,0,0,0.25);
            min-width: 150px;
            display: none;
            flex-direction: column;
        }

        .lang-switch .dropdown-menu.show { display: flex; }

        .lang-switch .dropdown-menu a {
            padding: 10px 16px;
            color: var(--step-primary);
            text-decoration: none;
            font-size: 14px;
            font-weight: 500;
        }

        .lang-switch .dropdown-menu a:hover {
            background: #f2f5f4;
        }

        main {
            position: relative;
            z-index: 2;
            flex: 1;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 20px clamp(20px, 6vw, 60px) 40px;
        }

        .content {
            width: 100%;
            max-width: 780px;
            text-align: center;
        }

        .logo-wrap {
            margin-bottom: 28px;
            opacity: 0;
            animation: fadeInUp 0.8s ease-out 0.1s forwards;
        }

        .logo-wrap img {
            height: 68px;
        }

        .badge-soon {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            padding: 8px 20px;
            border-radius: 30px;
            background: rgba(216, 181, 104, 0.15);
            border: 1px solid rgba(216, 181, 104, 0.5);
            color: var(--step-gold);
            font-size: 13px;
            font-weight: 600;
            letter-spacing: 1.5px;
            text-transform: uppercase;
            margin-bottom: 24px;
            opacity: 0;
            animation: fadeInUp 0.8s ease-out 0.25s forwards;
        }

        .badge-soon .dot {
            width: 8px;
            height: 8px;
            border-radius: 50%;
            background: var(--step-gold);
            animation: pulseDot 1.6s ease-in-out infinite;
        }

        @keyframes pulseDot {
            0%, 100% { opacity: 1; transform: scale(1); }
            50% { opacity: 0.4; transform: scale(1.3); }
        }

        h1.title {
            font-size: clamp(1.9rem, 4.5vw, 3.2rem);
            font-weight: 700;
            line-height: 1.25;
            margin: 0 0 18px;
            opacity: 0;
            animation: fadeInUp 0.8s ease-out 0.4s forwards;
        }

        p.subtitle {
            font-size: clamp(1rem, 2vw, 1.15rem);
            font-weight: 300;
            color: rgba(255,255,255,0.82);
            max-width: 560px;
            margin: 0 auto 40px;
            line-height: 1.7;
            opacity: 0;
            animation: fadeInUp 0.8s ease-out 0.55s forwards;
        }

        .progress-track {
            width: 100%;
            max-width: 420px;
            height: 6px;
            border-radius: 6px;
            background: rgba(255,255,255,0.15);
            margin: 0 auto 46px;
            overflow: hidden;
            opacity: 0;
            animation: fadeInUp 0.8s ease-out 0.7s forwards;
        }

        .progress-track .bar {
            height: 100%;
            width: 40%;
            border-radius: 6px;
            background: linear-gradient(90deg, var(--step-gold), #f0dba8);
            animation: loadingBar 2.4s ease-in-out infinite;
        }

        @keyframes loadingBar {
            0% { transform: translateX(-100%); width: 40%; }
            50% { width: 55%; }
            100% { transform: translateX(250%); width: 40%; }
        }

        .contact-row {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 16px;
            opacity: 0;
            animation: fadeInUp 0.8s ease-out 0.85s forwards;
        }

        .contact-pill {
            display: inline-flex;
            align-items: center;
            gap: 10px;
            padding: 12px 22px;
            border-radius: 40px;
            background: rgba(255,255,255,0.08);
            border: 1px solid rgba(255,255,255,0.18);
            color: #fff;
            text-decoration: none;
            font-size: 14px;
            font-weight: 500;
            backdrop-filter: blur(6px);
            transition: transform 0.25s ease, background 0.25s ease;
        }

        .contact-pill:hover {
            background: rgba(255,255,255,0.16);
            transform: translateY(-2px);
            color: #fff;
        }

        .contact-pill i {
            color: var(--step-gold);
        }

        @keyframes fadeInUp {
            from { opacity: 0; transform: translateY(24px); }
            to { opacity: 1; transform: translateY(0); }
        }

        footer.page-footer {
            position: relative;
            z-index: 2;
            text-align: center;
            padding: 22px 20px 28px;
            font-size: 13px;
            color: rgba(255,255,255,0.55);
        }

        footer.page-footer .divider {
            width: 40px;
            height: 2px;
            background: rgba(255,255,255,0.25);
            margin: 0 auto 14px;
            border-radius: 2px;
        }

        @media (max-width: 480px) {
            .logo-wrap img { height: 50px; }
            .contact-pill { font-size: 13px; padding: 10px 16px; }
        }
    </style>
</head>
<body>
    <div class="grid-overlay"></div>
    <div class="blob blob-1"></div>
    <div class="blob blob-2"></div>
    <div class="blob blob-3"></div>

    <!-- <div class="lang-switch">
        <div class="dropdown" style="position: relative;">
            <button type="button" class="dropdown-toggle" id="langToggle">
                <i class="fas fa-globe"></i> {{ strtoupper(app()->getLocale()) }}
            </button>
            <div class="dropdown-menu" id="langMenu">
                <a href="{{ route('change.language', 'id') }}">{{ __('messages.language_id') }}</a>
                <a href="{{ route('change.language', 'en') }}">{{ __('messages.language_en') }}</a>
                <a href="{{ route('change.language', 'jp') }}">{{ __('messages.language_jp') }}</a>
            </div>
        </div>
    </div> -->

    <main>
        <div class="content">
            <div class="logo-wrap">
                <img src="{{ asset('images/logostep.png') }}" alt="{{ __('messages.company_logo_alt') }}">
            </div>

            <div class="badge-soon">
                <span class="dot"></span>
                {{ __('messages.coming_soon_badge') }}
            </div>

            <h1 class="title">{{ __('messages.coming_soon_title') }}</h1>
            <p class="subtitle">{{ __('messages.coming_soon_subtitle') }}</p>

            <!-- <div class="progress-track">
                <div class="bar"></div>
            </div> -->

            <div class="contact-row">
                <a class="contact-pill" href="#" onclick="return false;">
                    <i class="fas fa-map-marker-alt"></i> {{ __('messages.company_name') }}
                </a>
            </div>
        </div>
    </main>

    <footer class="page-footer">
        <div class="divider"></div>
        <p style="margin:0;">&copy; {{ date('Y') }} {{ __('messages.company_name') }}. {{ __('messages.coming_soon_footer') }}</p>
    </footer>

    <script>
        document.getElementById('langToggle').addEventListener('click', function (e) {
            e.stopPropagation();
            document.getElementById('langMenu').classList.toggle('show');
        });
        document.addEventListener('click', function () {
            document.getElementById('langMenu').classList.remove('show');
        });
    </script>
</body>
</html>
