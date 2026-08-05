<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ __('messages.company_name') }}</title>
    <link rel="icon" href="{{ asset('images/logoo.png') }}" type="image/x-icon">
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&family=Cormorant+Garamond:wght@300;400;500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    
    <!-- Styles -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <!-- Custom CSS -->
    <style>
        body {
            font-family: 'Inter', sans-serif;
            margin: 0;
            padding: 0;
        }

        :root {
        --step-primary: #364e4c;
        --step-accent: #527a77;
        --step-dark: #22332f;
        --step-active: #527a77;
    }

    .navbar {
        background-color: transparent;
        padding: 20px 0;
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        z-index: 1000;
        transition: background-color 0.35s ease, padding 0.35s ease, box-shadow 0.35s ease;
    }

    .navbar-brand {
        display: flex;
        align-items: center;
        gap: 12px;
    }

    .navbar-brand img {
        height: 46px;
        margin-left: 0px;
    }

    .brand-text {
        display: flex;
        flex-direction: column;
        line-height: 1.25;
        text-align: left;
    }

    .brand-name {
        font-size: 15px;
        font-weight: 700;
        color: #ffffff;
        letter-spacing: 0.3px;
        transition: color 0.35s ease;
    }

    .brand-tagline {
        font-size: 11px;
        font-weight: 400;
        color: rgba(255, 255, 255, 0.85);
        letter-spacing: 1px;
        text-transform: uppercase;
        transition: color 0.35s ease;
    }

    .navbar-nav .nav-item {
        margin: 0 6px;
    }

    /* Specificity matches Bootstrap's .navbar-dark .navbar-nav .nav-link so our
       bright white wins over Bootstrap's default translucent rgba(255,255,255,.55) */
    .navbar-dark .navbar-nav .nav-link {
        color: #ffffff;
        font-weight: 500;
        font-size: 15px;
        padding: 10px 20px !important;
        border-radius: 30px;
        position: relative;
        transition: background-color 0.25s ease, color 0.25s ease;
    }

    .navbar-dark .navbar-nav .nav-link:hover,
    .navbar-dark .navbar-nav .nav-link:focus {
        color: #ffffff;
        background-color: rgba(255, 255, 255, 0.12);
    }

    .navbar-nav .nav-link.active {
        background-color: var(--step-active);
        color: #ffffff;
    }

    /* Scrolled state (desktop only — mobile keeps a permanently dark navbar
       so the light hamburger icon always stays visible, see below) */
    @media (min-width: 992px) {
        .navbar.scrolled {
            background-color: #f4f8f7;
            padding: 10px 0;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.12);
        }

        .navbar.scrolled .brand-name {
            color: var(--step-primary);
        }

        .navbar.scrolled .brand-tagline {
            color: rgba(54, 78, 76, 0.65);
        }

        .navbar.scrolled.navbar-dark .navbar-nav .nav-link {
            color: var(--step-primary);
        }

        .navbar.scrolled.navbar-dark .navbar-nav .nav-link:hover {
            color: var(--step-primary);
            background-color: rgba(54, 78, 76, 0.08);
        }

        .navbar.scrolled .navbar-nav .nav-link.active {
            color: #ffffff;
        }
    }

    /* Mobile responsive navbar styles */
    @media (max-width: 992px) {
        .navbar {
            width: 100%;
            max-width: 100%;
            top: 0;
            padding: 12px 0;
            background-color: rgba(34, 51, 47, 0.97);
        }

        .navbar-collapse {
            background-color: var(--step-dark);
            padding: 15px;
            border-radius: 0 0 12px 12px;
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.25);
            max-height: 80vh;
            overflow-y: auto;
            margin-top: 10px;
        }

        .navbar-nav .nav-item {
            margin: 4px 0;
            border-bottom: 1px solid rgba(255, 255, 255, 0.08);
        }

        .navbar-nav .nav-link {
            padding: 12px 16px !important;
            border-radius: 8px;
        }

        .navbar-toggler {
            border: none;
            padding: 0.5rem 0.75rem;
            margin-right: 10px;
        }

        .navbar-toggler:focus {
            box-shadow: none;
            outline: none;
        }

        .navbar-brand {
            padding-left: 10px;
        }

        .navbar-brand img {
            height: 40px;
        }

        .brand-tagline {
            display: none;
        }

        /* Language switcher adjustments for mobile */
        .language-switcher.dropdown {
            border-bottom: none;
        }

        .language-switcher .dropdown-menu {
            position: static !important;
            transform: none !important;
            width: 100%;
            margin-top: 5px;
        }
    }

    /* Small mobile adjustments */
    @media (max-width: 576px) {
        .brand-name {
            font-size: 13px;
        }

        .navbar-brand img {
            height: 34px;
        }
    }

        .modal-content {
            border-radius: 10px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }

        .modal-body ul {
            list-style: none;
            padding: 0;
        }

        .modal-body ul li {
            margin: 10px 0;
        }

        .modal-body ul li a {
            color: #364e4c;
            font-size: 16px;
            text-decoration: none;
        }

        .modal-body ul li a:hover {
            color: #2c3e50;
            text-decoration: underline;
        }

        .shipping-modal-container {
            display: flex;
            flex-direction: row;
            gap: 1rem;
            justify-content: center;
        }

        .shipping-modal-item {
            flex: 0 0 auto;
            text-align: center;
        }

        .shipping-modal-item .card {
            transition: transform 0.2s, box-shadow 0.2s;
        }

        .shipping-modal-item .card:hover {
            transform: translateY(-5px);
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.2);
        }

        .shipping-modal-item .card-title {
            color: #364e4c;
            font-size: 16px;
            margin: 0;
        }

        .shipping-modal-item .ratio {
            width: 250px;
        }

        .hero-section {
            background-size: cover;
            background-position: center;
            height: 100vh;
            position: relative;
            display: flex;
            align-items: center;
            color: white;
        }

        .hero-overlay {
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: rgba(30, 46, 42, 0.6);
            z-index: 1;
        }

        .hero-content {
            position: relative;
            z-index: 2;
            padding-left: 5%;
        }

        .hero-content h2 {
            font-size: 2rem;
            font-weight: 500;
            margin-bottom: 2rem;
        }

        .company-policy-label {
            font-family: 'Inter', sans-serif;
            font-size: 13px;
            font-weight: 600;
            letter-spacing: 3px;
            text-transform: uppercase;
            color: rgba(255, 255, 255, 0.65);
            margin-bottom: 6px;
        }

        .hero-content .company-policy-title {
            font-family: 'Cormorant Garamond', serif;
            font-weight: 300;
            font-size: clamp(2.6rem, 6vw, 4.4rem);
            letter-spacing: 1px;
            color: #ffffff;
            margin: 0;
            line-height: 1.1;
        }

        .brand-acronym {
            display: inline-flex;
            align-items: stretch;
            gap: 40px;
        }

        .acronym-letters {
            display: flex;
            flex-direction: column;
            justify-content: space-between;
        }

        .acronym-letters span {
            font-size: clamp(3.6rem, 9vw, 6.5rem);
            font-weight: 800;
            line-height: 1;
            color: #ffffff;
            text-shadow: 4px 4px 0 var(--step-accent), 0 8px 24px rgba(0, 0, 0, 0.4);
            letter-spacing: 1px;
        }

        .acronym-divider {
            width: 4px;
            border-radius: 4px;
            background: linear-gradient(180deg, rgba(255, 255, 255, 0), var(--step-accent), rgba(255, 255, 255, 0));
        }

        .acronym-words {
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            padding: 10px 0;
        }

        .acronym-words span {
            font-size: clamp(1.6rem, 3.4vw, 2.6rem);
            font-weight: 600;
            color: #ffffff;
            text-transform: uppercase;
            letter-spacing: 2px;
            text-shadow: 0 2px 10px rgba(0, 0, 0, 0.4);
        }

        @media (max-width: 480px) {
            .brand-acronym {
                gap: 20px;
            }
        }

        .language-switcher {
            display: flex;
            align-items: center;
        }

        .language-switcher img {
            width: 20px;
            height: 20px;
            margin-right: 5px;
        }

        .running-text {
            background-color: #364e4c;
            color: white;
            padding: 10px 0;
            font-size: 16px;
            font-weight: 500;
            text-align: center;
            margin: 0;
        }

        .running-text {
            margin: 0 !important;
            padding: 5 !important;
            display: block;
            line-height: 1.5;
        }

        @media (max-width: 992px) {
            .navbar-collapse {
                background-color: white;
                padding: 15px;
            }
            .navbar-nav .nav-item {
                margin: 10px 0;
            }
        }


        .director-card {
            background: #ffffff;
            border-radius: 14px;
            overflow: hidden;
            box-shadow: 0 8px 26px rgba(0, 0, 0, 0.12);
        }

        .director-card img {
            width: 100%;
            height: 280px;
            object-fit: cover;
            object-position: center top;
        }

        .director-caption {
            background: linear-gradient(90deg, var(--step-primary), var(--step-accent));
            color: #ffffff;
            text-align: center;
            padding: 14px 12px;
        }

        .btn-whatsapp {
            display: inline-flex;
            align-items: center;
            gap: 10px;
            background-color: #25d366;
            color: #ffffff;
            font-weight: 600;
            font-size: 15px;
            padding: 12px 22px;
            border-radius: 30px;
            text-decoration: none;
            box-shadow: 0 6px 16px rgba(37, 211, 102, 0.3);
            transition: transform 0.2s ease, box-shadow 0.2s ease;
        }

        .btn-whatsapp i {
            font-size: 20px;
        }

        .btn-whatsapp:hover {
            color: #ffffff;
            transform: translateY(-2px);
            box-shadow: 0 10px 22px rgba(37, 211, 102, 0.4);
        }

        .vision-mission-card {
            background: #ffffff;
            border-left: 4px solid var(--step-accent);
            border-radius: 10px;
            padding: 32px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.06);
            transition: transform 0.25s ease, box-shadow 0.25s ease;
        }

        .vision-mission-card:hover {
            transform: translateY(-4px);
            box-shadow: 0 10px 28px rgba(0, 0, 0, 0.1);
        }

        .vision-mission-card .card-icon {
            width: 48px;
            height: 48px;
            border-radius: 10px;
            background: var(--step-primary);
            color: #fff;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 20px;
        }

        .partner-logo {
            margin: 0 5px;
        }

        .partner-logo img {
            width: 110px;
            height: 55px;
            object-fit: contain;
        }

        .main {
            bottom: -50;
        }

        /* Add these animations to your existing custom CSS section */

        /* Animation Keyframes */
        @keyframes fadeIn {
        from { opacity: 0; }
        to { opacity: 1; }
        }

        @keyframes slideInLeft {
        from {
            transform: translateX(-50px);
            opacity: 0;
        }
        to {
            transform: translateX(0);
            opacity: 1;
        }
        }

        @keyframes slideInRight {
        from {
            transform: translateX(50px);
            opacity: 0;
        }
        to {
            transform: translateX(0);
            opacity: 1;
        }
        }

        @keyframes slideInUp {
        from {
            transform: translateY(50px);
            opacity: 0;
        }
        to {
            transform: translateY(0);
            opacity: 1;
        }
        }

        @keyframes pulse {
        0% { transform: scale(1); }
        50% { transform: scale(1.05); }
        100% { transform: scale(1); }
        }

        @keyframes bounce {
        0%, 20%, 50%, 80%, 100% {transform: translateY(0);}
        40% {transform: translateY(-20px);}
        60% {transform: translateY(-10px);}
        }

        @keyframes rotate {
        from { transform: rotate(0deg); }
        to { transform: rotate(360deg); }
        }

        /* Hero Section Animations */
        .acronym-letters span,
        .acronym-words span {
        animation: slideInLeft 0.8s ease-out forwards;
        opacity: 0;
        }

        .acronym-letters span:nth-child(1), .acronym-words span:nth-child(1) { animation-delay: 0.2s; }
        .acronym-letters span:nth-child(2), .acronym-words span:nth-child(2) { animation-delay: 0.4s; }
        .acronym-letters span:nth-child(3), .acronym-words span:nth-child(3) { animation-delay: 0.6s; }
        .acronym-letters span:nth-child(4), .acronym-words span:nth-child(4) { animation-delay: 0.8s; }

        .acronym-divider {
        animation: fadeIn 1s ease-out 0.3s forwards;
        opacity: 0;
        }

        /* Partner Logo Animations */
        .partner-logo {
        animation: fadeIn 0.5s ease-out forwards;
        opacity: 0;
        transition: transform 0.3s ease;
        }

        .partner-logo:hover {
        transform: scale(1.1);
        }

        /* Staggered delays for partner logos */
        .partner-logo:nth-child(1) { animation-delay: 0.1s; }
        .partner-logo:nth-child(2) { animation-delay: 0.2s; }
        .partner-logo:nth-child(3) { animation-delay: 0.3s; }
        .partner-logo:nth-child(4) { animation-delay: 0.4s; }
        .partner-logo:nth-child(5) { animation-delay: 0.5s; }
        .partner-logo:nth-child(6) { animation-delay: 0.6s; }
        .partner-logo:nth-child(7) { animation-delay: 0.7s; }
        .partner-logo:nth-child(8) { animation-delay: 0.8s; }
        .partner-logo:nth-child(9) { animation-delay: 0.9s; }

        /* Carousel Animation Enhancements */
        .carousel-item {
        transition: transform 0.8s ease, opacity 0.5s ease;
        }

        .carousel-caption {
        animation: fadeIn 1s ease-out forwards;
        }

        /* Running Text Animation Enhancement */
        .running-text {
        position: relative;
        overflow: hidden;
        }

        /* System Modal Animation */
        .modal .card {
        animation: fadeIn 0.5s ease-out forwards;
        opacity: 0;
        }

        .modal-dialog {
        animation: slideInUp 0.5s ease-out;
        }

        /* Scroll Reveal Animations */
        [data-aos] {
        opacity: 0;
        transition-property: opacity, transform;
        transition-duration: 0.8s;
        transition-timing-function: cubic-bezier(0.25, 0.1, 0.25, 1);
        will-change: transform, opacity;
        }

        [data-aos="fade-up"] { transform: translateY(45px); }
        [data-aos="slide-left"] { transform: translateX(90px); }
        [data-aos="slide-right"] { transform: translateX(-90px); }
        [data-aos="zoom-in"] { transform: scale(0.92); }

        [data-aos].aos-visible {
        opacity: 1;
        transform: translate(0, 0) scale(1);
        }

        /* Video Animation */
        video {
        animation: fadeIn 1.5s ease-out;
        }

        .language-switcher .dropdown-menu {
            min-width: 120px;
            border-radius: 5px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }

        .language-switcher .dropdown-item {
            color: #364e4c;
            font-size: 16px;
            padding: 8px 15px;
        }

        .language-switcher .dropdown-item:hover {
            background-color: #f8f9fa;
            color: #2c3e50;
        }

        .certification-container {
            max-width: 1000px;
            margin: 50px auto;
            display: flex;
            background-color: #ffffff;
        }

        .certification-images {
            flex: 1;
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            align-items: center;
            
        }

        .certification-image {
            align-items: center;
            justify-content: center;
        }

        .certification-divider {
            width: 1px;
            background-color: #ffffff;
        }

        .certification-content {
            flex: 1.5;
            padding: 30px 40px;
        }

        .certification-title {
            font-size: 34px;
            font-weight: 800;
            color: #333;
            margin-bottom: 10px;
            line-height: 1.3;
        }

        .certification-highlight {
            font-size: 34px;
            font-weight: 800;
            color: #333;
            margin-bottom: 25px;
        }

        .certification-description {
            font-size: 16px;
            color: #555;
            line-height: 1.6;
            margin-top: 20px;
        }

        /* Responsive Adjustments */
        @media (max-width: 768px) {
            .certification-container {
                flex-direction: column;
                border-left: none;
                border-top: 1px solid #e0e0e0;
            }
            
            
            .certification-images {
                justify-content: center;
            }
            
            .certification-title, .certification-highlight {
                font-size: 28px;
                text-align: center;
            }
        }
    </style>
</head>
<body data-bs-spy="scroll" data-bs-target="#navbarNav" data-bs-offset="120" tabindex="0">
    <header>
        <nav class="navbar navbar-expand-lg navbar-dark fixed-top">
            <div class="container">
                <a class="navbar-brand" href="{{ route('landing') }}#home-section">
                    <img id="navbarLogo" src="{{ asset('images/logo.png') }}" data-logo-default="{{ asset('images/logo.png') }}" data-logo-scrolled="{{ asset('images/logoo.png') }}" alt="{{ __('messages.company_logo_alt') }}">
                    <span class="brand-text">
                        <span class="brand-name">{{ __('messages.company_name') }}</span>
                        <span class="brand-tagline">{{ __('messages.brand_tagline') }}</span>
                    </span>
                </a>

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="{{ __('messages.toggle_navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                    <ul class="navbar-nav align-items-center">
                        <li class="nav-item">
                            <a class="nav-link" href="#home-section">{{ __('messages.home') }}</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#products-section">{{ __('messages.products') }}</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#plant-section">{{ __('messages.plant') }}</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#contact-section">{{ __('messages.contact') }}</a>
                        </li>
                        @php
                            $localeFlags = ['id' => 'id', 'en' => 'gb', 'jp' => 'jp'];
                            $currentFlag = $localeFlags[app()->getLocale()] ?? 'gb';
                        @endphp
                        <li class="nav-item language-switcher dropdown">
                            <a class="nav-link dropdown-toggle d-inline-flex align-items-center gap-2" href="#" id="languageDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <img src="https://flagcdn.com/24x18/{{ $currentFlag }}.png" srcset="https://flagcdn.com/48x36/{{ $currentFlag }}.png 2x" width="24" height="18" alt="" class="rounded-1">
                                {{ strtoupper(app()->getLocale()) }}
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="languageDropdown">
                                <li>
                                    <a class="dropdown-item d-flex align-items-center gap-2" href="{{ route('change.language', 'id') }}">
                                        <img src="https://flagcdn.com/24x18/id.png" srcset="https://flagcdn.com/48x36/id.png 2x" width="24" height="18" alt="" class="rounded-1">
                                        {{ __('messages.language_id') }}
                                    </a>
                                </li>
                                <li>
                                    <a class="dropdown-item d-flex align-items-center gap-2" href="{{ route('change.language', 'en') }}">
                                        <img src="https://flagcdn.com/24x18/gb.png" srcset="https://flagcdn.com/48x36/gb.png 2x" width="24" height="18" alt="" class="rounded-1">
                                        {{ __('messages.language_en') }}
                                    </a>
                                </li>
                                <li>
                                    <a class="dropdown-item d-flex align-items-center gap-2" href="{{ route('change.language', 'jp') }}">
                                        <img src="https://flagcdn.com/24x18/jp.png" srcset="https://flagcdn.com/48x36/jp.png 2x" width="24" height="18" alt="" class="rounded-1">
                                        {{ __('messages.language_jp') }}
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <!-- Systems Modal -->
        <div class="modal fade" id="systemsModal" tabindex="-1" aria-labelledby="systemsModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-xl">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="systemsModalLabel">{{ __('messages.our_systems') }}</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="{{ __('messages.close') }}"></button>
                    </div>
                    <div class="modal-body">
                        <div class="row row-cols-5 g-4">
                            <div class="col">
                            <a href="http://192.168.88.242:80"><!-- <a href="#" data-bs-toggle="modal" data-bs-target="#shippingModal" data-bs-dismiss="modal"> -->
                                    <div class="card h-100">
                                        <div class="ratio ratio-16x9">
                                            <img src="images/system/shipping.png" class="card-img-top" alt="{{ __('messages.shipping_system') }}" style="object-fit: cover;">
                                        </div>
                                        <div class="card-body">
                                            <h5 class="card-title">{{ __('messages.shipping_system') }}</h5>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col">
                                <a href="http://192.168.87.170:81">
                                    <div class="card h-100">
                                        <div class="ratio ratio-16x9">
                                            <img src="images/system/pud.png" class="card-img-top" alt="{{ __('messages.pud_warehouse') }}" style="object-fit: cover;">
                                        </div>
                                        <div class="card-body">
                                            <h5 class="card-title">{{ __('messages.pud_warehouse') }}</h5>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col">
                                <a href="http://192.168.87.170:88">
                                    <div class="card h-100">
                                        <div class="ratio ratio-16x9">
                                            <img src="images/system/invoice.png" class="card-img-top" alt="{{ __('messages.record_delivery_to_invoice') }}" style="object-fit: cover;">
                                        </div>
                                        <div class="card-body">
                                            <h5 class="card-title">{{ __('messages.record_delivery_to_invoice') }}</h5>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col">
                                <a href="http://192.168.87.170:84">
                                    <div class="card h-100">
                                        <div class="ratio ratio-16x9">
                                            <img src="images/system/asset.png" class="card-img-top" alt="{{ __('messages.it_asset_management') }}" style="object-fit: fill;">
                                        </div>
                                        <div class="card-body">
                                            <h5 class="card-title">{{ __('messages.it_asset_management') }}</h5>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col">
                                <a href="https://sos.step.co.id/sos/">
                                    <div class="card h-100">
                                        <div class="ratio ratio-16x9">
                                            <img src="images/system/sos.png" class="card-img-top" alt="{{ __('messages.step_online_system') }}" style="object-fit: fill;">
                                        </div>
                                        <div class="card-body">
                                            <h5 class="card-title">{{ __('messages.step_online_system') }}</h5>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col">
                            <a href="#" data-bs-toggle="modal" data-bs-target="#shippingModal" data-bs-dismiss="modal">
                                    <div class="card h-100">
                                        <div class="ratio ratio-16x9">
                                            <img src="images/system/andon.png" class="card-img-top" alt="{{ __('messages.step_online_system') }}" style="object-fit: fill;">
                                        </div>
                                        <div class="card-body">
                                            <h5 class="card-title">Andon</h5>
                                        </div>
                                    </div>
                                </a>
                                
                            </div>
                            <div class="col">
                            <a href="http://192.168.87.170:83/meeting-room">
                                    <div class="card h-100">
                                        <div class="ratio ratio-16x9">
                                            <img src="images/system/rm.png" class="card-img-top" alt="{{ __('messages.step_online_system') }}" style="object-fit: fit;">
                                        </div>
                                        <div class="card-body">
                                            <h5 class="card-title">Booking Ruang Meeting</h5>
                                        </div>
                                    </div>
                                </a>
                                
                            </div>
                            <div class="col">
                            <a href="http://192.168.87.170:83/peminjaman">
                                    <div class="card h-100">
                                        <div class="ratio ratio-16x9">
                                            <img src="images/system/pinjam.png" class="card-img-top" alt="{{ __('messages.step_online_system') }}" style="object-fit: fill;">
                                        </div>
                                        <div class="card-body">
                                            <h5 class="card-title">Peminjaman Alat</h5>
                                        </div>
                                    </div>
                                </a>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Shipping System Modal -->
        <div class="modal fade" id="shippingModal" tabindex="-1" aria-labelledby="shippingModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-xl modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="shippingModalLabel">{{ __('messages.shipping_system') }}</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="{{ __('messages.close') }}"></button>
                    </div>
                    <div class="modal-body">
                        <div class="shipping-modal-container">
        
                            <a href="http://192.168.88.242:80/andon/preparations" class="shipping-modal-item text-decoration-none">
                                <div class="card h-100">
                                    <div class="ratio ratio-16x9">
                                        <img src="images/system/preparations.png" class="card-img-top" alt="{{ __('messages.shipping_preparations') }}" style="object-fit: cover;">
                                    </div>
                                    <div class="card-body">
                                        <h5 class="card-title">{{ __('messages.shipping_preparations') }}</h5>
                                    </div>
                                </div>
                            </a>
                            <a href="http://192.168.88.242:80/andon/shippings" class="shipping-modal-item text-decoration-none">
                                <div class="card h-100">
                                    <div class="ratio ratio-16x9">
                                        <img src="images/system/shippings.png" class="card-img-top" alt="{{ __('messages.shipping_shippings') }}" style="object-fit: cover;">
                                    </div>
                                    <div class="card-body">
                                        <h5 class="card-title">{{ __('messages.shipping_shippings') }}</h5>
                                    </div>
                                </div>
                            </a>
                            <a href="http://192.168.88.242:80/andon/deliveries" class="shipping-modal-item text-decoration-none">
                                <div class="card h-100">
                                    <div class="ratio ratio-16x9">
                                        <img src="images/system/deliveries.png" class="card-img-top" alt="{{ __('messages.shipping_deliveries') }}" style="object-fit: cover;">
                                    </div>
                                    <div class="card-body">
                                        <h5 class="card-title">{{ __('messages.shipping_deliveries') }}</h5>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <main>
        @yield('content')
    </main>

    <footer id="contact-section" class="footer py-5" style="background-color: #f4f8f7; color: var(--step-primary);">
        <div class="container">
            <div class="row g-5">
                <div class="col-md-6" style="padding-right: 30px;" data-aos="slide-right">
                    <div class="address-section">
                        <h4 class="fw-bold mb-3">{{ __('messages.our_location') }}</h4>
                        <p><strong>{{ __('messages.company_name') }}</strong></p>
                        <p class="text-muted">{{ __('messages.address_line_1') }}</p>
                        <p class="text-muted">{{ __('messages.address_line_2') }}</p>
                        <div class="map-container rounded-3 overflow-hidden shadow-sm">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3950.094022390613!2d107.16844407499977!3d-6.318154661826986!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e698532b5fcfdbf%3A0xf850ed44f66f6c40!2sPT.%20Sari%20Takagi%20Elok%20Produk%20(STEP)%20Plant%201!5e1!3m2!1sid!2sid!4v1745375297523!5m2!1sid!2sid" width="100%" height="425" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                    </div>
                </div>

                <div class="col-md-6" data-aos="slide-left">
                    <div class="contact-section">
                        <h4 class="fw-bold mb-3">{{ __('messages.contact_us') }}</h4>
                        <p class="mb-2">
                            <i class="fas fa-phone me-2" style="color: var(--step-accent);"></i>
                            <strong>{{ __('messages.phone') }}:</strong>
                            <a href="tel:+6289676366158" class="text-muted text-decoration-none">+62 896-7636-6158</a>
                        </p>
                        <p class="mb-2">
                            <i class="fas fa-envelope me-2" style="color: var(--step-accent);"></i>
                            <strong>{{ __('messages.email') }}:</strong>
                            <a href="mailto:step.marketing@step.co.id" class="text-muted text-decoration-none">step.marketing@step.co.id</a>
                        </p>
                        <p class="mb-3">
                            <i class="fas fa-globe me-2" style="color: var(--step-accent);"></i>
                            <strong>{{ __('messages.website') }}:</strong>
                            <a href="https://www.step.co.id" target="_blank" rel="noopener" class="text-muted text-decoration-none">www.step.co.id</a>
                        </p>
                        <p class="mb-1"><strong>{{ __('messages.operating_hours') }}:</strong></p>
                        <ul class="text-muted">
                            <li>{{ __('messages.operating_hours_monday_friday') }}</li>
                            <li>{{ __('messages.operating_hours_weekends') }}</li>
                        </ul>
<!-- 
                        <a href="https://wa.me/6289676366158" target="_blank" rel="noopener" class="btn-whatsapp mt-3">
                            <i class="fab fa-whatsapp"></i>
                            {{ __('messages.chat_whatsapp') }}
                        </a> -->
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <div class="footer-bottom-bar text-center py-3" style="background-color: var(--step-primary); color: rgba(255, 255, 255, 0.85);">
        <div class="container">
            <p class="mb-0 small">{{ __('messages.copyright', ['year' => date('Y')]) }}</p>
        </div>
    </div>

    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        function setNavbarScrolled(isScrolled) {
            const navbar = document.querySelector('.navbar');
            const logo = document.getElementById('navbarLogo');
            navbar.classList.toggle('scrolled', isScrolled);
            if (logo) {
                logo.src = isScrolled ? logo.dataset.logoScrolled : logo.dataset.logoDefault;
            }
        }

        window.addEventListener('scroll', function() {
            setNavbarScrolled(window.scrollY > 40);
        });

        document.addEventListener('DOMContentLoaded', function() {
            const revealElements = document.querySelectorAll('[data-aos]');

            if ('IntersectionObserver' in window) {
                const revealObserver = new IntersectionObserver((entries, observer) => {
                    entries.forEach(entry => {
                        if (entry.isIntersecting) {
                            entry.target.classList.add('aos-visible');
                            observer.unobserve(entry.target);
                        }
                    });
                }, { threshold: 0.15, rootMargin: '0px 0px -60px 0px' });

                revealElements.forEach(element => revealObserver.observe(element));
            } else {
                revealElements.forEach(element => element.classList.add('aos-visible'));
            }

            const carousel = document.getElementById('aktivitasCarousel');
            if (carousel) {
                carousel.addEventListener('slide.bs.carousel', function() {
                    const activeCaption = document.querySelector('.carousel-item.active .carousel-caption');
                    if (activeCaption) {
                        activeCaption.style.animation = 'none';
                        setTimeout(() => {
                            activeCaption.style.animation = 'fadeIn 0.8s ease-out forwards';
                        }, 10);
                    }
                });
            }
            
            document.querySelectorAll('a[href^="#"]').forEach(anchor => {
                anchor.addEventListener('click', function(e) {
                    const targetId = this.getAttribute('href');
                    if (targetId !== '#' && document.querySelector(targetId)) {
                        e.preventDefault();
                        document.querySelector(targetId).scrollIntoView({
                            behavior: 'smooth'
                        });
                    }
                });
            });
            
            document.querySelectorAll('.btn-primary, .brand-acronym').forEach(button => {
                button.addEventListener('mouseover', function() {
                    this.style.animation = 'pulse 1s infinite';
                });
                button.addEventListener('mouseout', function() {
                    this.style.animation = '';
                });
            });
        });

        document.addEventListener('DOMContentLoaded', function() {
        // Existing scroll event listener
        window.addEventListener('scroll', function() {
            if (window.scrollY > 40) {
                setNavbarScrolled(true);
            } else {
                // Only remove scrolled class if not on mobile
                if (window.innerWidth > 992) {
                    setNavbarScrolled(false);
                }
            }
        });

        // Force navbar to be in "scrolled" state on mobile
        function checkMobileNavbar() {
            if (window.innerWidth <= 992) {
                setNavbarScrolled(true);
            } else if (window.scrollY <= 40) {
                setNavbarScrolled(false);
            }
        }
        
        // Run on load and resize
        checkMobileNavbar();
        window.addEventListener('resize', checkMobileNavbar);
        
        // Close navbar collapse when clicking a nav item
        const navLinks = document.querySelectorAll('.navbar-nav .nav-link');
        const navbarCollapse = document.querySelector('.navbar-collapse');
        navLinks.forEach(link => {
            link.addEventListener('click', () => {
                if (window.innerWidth <= 992) {
                    const bsCollapse = new bootstrap.Collapse(navbarCollapse);
                    bsCollapse.hide();
                }
            });
        });
    }); 
        
    </script>
</body>
</html>