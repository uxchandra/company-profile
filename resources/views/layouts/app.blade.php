<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ config('app.name', __('messages.company_landing_page')) }}</title>
    <link rel="icon" href="{{ asset('images/logostep.png') }}" type="image/x-icon">
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    
    <!-- Styles -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <!-- Custom CSS -->
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            margin: 0;
            padding: 0;
        }

        .navbar {
        background-color: rgb(255, 255, 255);
        box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        padding: 2px 0;
        position: fixed;
        top: 25px;
        width: 90%;
        max-width: 1200px;
        z-index: 1000;
        border-radius: 10px;
        left: 50%;
        transform: translateX(-50%);
        transition: all 0.3s ease-in-out;
    }

    .navbar.scrolled {
        top: 0;
        border-radius: 0;
        width: 100%;
        max-width: 100%;
    }

    .navbar-nav .nav-item {
        margin: 0 20px;
    }

    .navbar-nav .nav-link {
        color: #364e4c;
        font-weight: 530;
        font-size: 16px;
        padding: 20px 15px;
        position: relative;
    }

    .navbar-nav .nav-link:hover {
        color: #364e4c;
    }

    .navbar-brand img {
        height: 55px;
        margin-left: 0px;
    }

    /* Mobile responsive navbar styles */
    @media (max-width: 992px) {
        .navbar {
            width: 100%;
            max-width: 100%;
            top: 0;
            border-radius: 0;
            padding: 5px 0;
        }
        
        .navbar-collapse {
            background-color: white;
            padding: 15px;
            border-radius: 0 0 10px 10px;
            box-shadow: 0 5px 10px rgba(0, 0, 0, 0.1);
            max-height: 80vh;
            overflow-y: auto;
        }
        
        .navbar-nav .nav-item {
            margin: 5px 0;
            border-bottom: 1px solid #f0f0f0;
        }
        
        .navbar-nav .nav-link {
            padding: 12px 15px;
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
            height: 45px;
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
        .navbar-brand {
            font-size: 0.9rem;
        }
        
        .navbar-brand img {
            height: 35px;
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
            background: rgba(30, 46, 42, 0.472);
            z-index: 1;
        }

        .hero-content {
            position: relative;
            z-index: 2;
            padding-left: 5%;
        }

        .hero-content h1 {
            font-size: 3rem;
            font-weight: 700;
            line-height: 1.2;
            margin-bottom: 1rem;
        }

        .hero-content h2 {
            font-size: 2rem;
            font-weight: 500;
            margin-bottom: 2rem;
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

        .profil-perusahaan {
            margin-top: 10 !important;
            padding-top: 0 !important;
        }

        .profil-perusahaan .container,
        .profil-perusahaan .row {
            margin-top: 0 !important;
            padding-top: 0 !important;
        }

        section.profil-perusahaan {
            border: none !important;
            outline: none !important;
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

        .products-section {
            margin-top: 50px;
        }

        .products-section h3 {
            font-size: 30px;
            color: #232323;
            margin-bottom: 30px;
            text-align: center;
        }

        .products-container {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 50px;
        }

        .product-card {
            width: 350px;
            background-color: #fff;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
        }

        .product-image {
            height: 200px;
        }

        .product-image img {
            width: 100%;
            height: 100%;
            object-fit: contain;
        }

        .product-details {
            padding: 20px;
        }

        .product-details h4 {
            margin-bottom: 10px;
            color: #2c3e50;
        }

        .product-details p {
            color: #555;
            font-size: 14px;
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
        .hero-content h1 {
        animation: slideInLeft 1s ease-out forwards;
        opacity: 0;
        }

        .hero-content h1:nth-child(1) {
        animation-delay: 0.3s;
        }

        .hero-content h1:nth-child(2) {
        animation-delay: 0.6s;
        }

        .hero-content h1:nth-child(3) {
        animation-delay: 0.9s;
        }

        .hero-content div[style*="background-color: #527a77"] {
        animation: fadeIn 1s ease-out 1.2s forwards;
        opacity: 0;
        }

        /* Section Heading Animations */
        .display-6 {
        animation: slideInUp 0.8s ease-out forwards;
        opacity: 0;
        }

        /* Product Card Animations */
        .product-card {
        transition: transform 0.3s ease, box-shadow 0.3s ease;
        animation: fadeIn 0.8s ease-out forwards;
        opacity: 0;
        }

        .product-card:hover {
        transform: translateY(-10px);
        box-shadow: 0 15px 30px rgba(0, 0, 0, 0.2);
        }

        .products-container .product-card:nth-child(1) {
        animation-delay: 0.2s;
        }

        .products-container .product-card:nth-child(2) {
        animation-delay: 0.4s;
        }

        .products-container .product-card:nth-child(3) {
        animation-delay: 0.6s;
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

        /* Footer Animation */
        .footer h1, .footer p, .footer ul {
        animation: fadeIn 0.8s ease-out forwards;
        opacity: 0;
        }

        .footer h1 { animation-delay: 0.2s; }
        .footer p { animation-delay: 0.4s; }
        .footer ul { animation-delay: 0.6s; }

        /* System Modal Animation */
        .modal .card {
        animation: fadeIn 0.5s ease-out forwards;
        opacity: 0;
        }

        .modal-dialog {
        animation: slideInUp 0.5s ease-out;
        }

        /* Animate elements when they come into view */
        .animate-on-scroll {
        opacity: 0;
        transform: translateY(30px);
        transition: opacity 0.8s ease, transform 0.8s ease;
        }

        .animate-on-scroll.visible {
        opacity: 1;
        transform: translateY(0);
        }

        /* Video Animation */
        video {
        animation: fadeIn 1.5s ease-out;
        }

        /* Profile Section Animation */
        .profil-perusahaan p {
        animation: slideInRight 0.8s ease-out forwards;
        opacity: 0;
        animation-delay: 0.4s;
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

        /* Glassmorphism Styles */
        #products-section {
            padding: 40px 20px;
            background: linear-gradient(to bottom right, rgba(255, 255, 255, 0.1), rgba(255, 255, 255, 0.05));
            position: relative;
            z-index: 1;
        }

        /* Glass Effect for Cards */
        .glass-card {
            background: rgba(255, 255, 255, 0.2);
            backdrop-filter: blur(10px);
            -webkit-backdrop-filter: blur(10px);
            border-radius: 15px;
            border: 1px solid rgba(255, 255, 255, 0.3);
            box-shadow: 0 8px 32px 0 rgba(31, 38, 135, 0.1);
            transition: all 0.3s ease;
            overflow: hidden;
            display: flex;
            flex-direction: column;
        }

        .glass-card:hover {
            box-shadow: 0 8px 32px 0 rgba(31, 38, 135, 0.2);
            transform: translateY(-5px);
        }

        /* Background Blur Elements */
        .blur-element {
            position: absolute;
            border-radius: 50%;
            background: #527a77; /* Green color */
            filter: blur(70px);
            z-index: -1;
        }

        .blur-1 {
            width: 300px;
            height: 300px;
            top: -50px;
            left: -100px;
        }

        .blur-2 {
            width: 250px;
            height: 250px;
            bottom: 20%;
            right: -50px;
        }

        .blur-3 {
            width: 200px;
            height: 200px;
            bottom: 10%;
            left: 30%;
        }

        /* Products Container */
        .products-container {
            display: flex;
            flex-wrap: wrap;
            gap: 30px;
            justify-content: center;
            margin-top: 30px;
        }

        .product-card {
            width: 300px;
            padding: 20px;
        }

        /* Image Container Styling - Fixed Height */
        .product-image {
            height: 180px; /* Fixed height for all image containers */
            display: flex;
            align-items: center;
            justify-content: center;
            margin-bottom: 15px;
            overflow: hidden;
        }

        .product-image img {
            max-width: 100%;
            max-height: 100%;
            object-fit: contain; /* This preserves aspect ratio */
            border-radius: 8px;
        }

        .product-details {
            flex-grow: 1;
            display: flex;
            flex-direction: column;
        }

        .product-details h4 {
            margin-bottom: 10px;
            color: #333;
        }

        .product-details p {
            color: #555;
            font-size: 0.9rem;
        }

        #products-section::after {
            content: "";
            position: absolute;
            bottom: 0;
            left: 0;
            width: 100%;
            height: 100px; /* tinggi fade */
            background: linear-gradient(to bottom, rgba(255, 255, 255, 0), #ffffff); /* sesuaikan warna background */
            pointer-events: none;
            z-index: 2;
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
<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-light fixed-top">
            <div class="container">
                <a class="navbar-brand fw-bold" href="/">
                    <img src="{{ asset('images/logostep.png') }}" alt="{{ __('messages.company_logo_alt') }}">
                    {{ __('messages.company_name') }}
                </a>
                
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="{{ __('messages.toggle_navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>
                
                <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                    <ul class="navbar-nav align-items-center">
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('landing') }}#company-section">{{ __('messages.our_company') }}</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('landing') }}#products-section">{{ __('messages.products') }}</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#" data-bs-toggle="modal" data-bs-target="#systemsModal">{{ __('messages.our_systems') }}</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('landing') }}#contact-section">{{ __('messages.contact') }}</a>
                        </li>   
                        <li class="nav-item language-switcher dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="languageDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="fas fa-globe"></i>
                                {{ strtoupper(app()->getLocale()) }}
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="languageDropdown">
                                <li><a class="dropdown-item" href="{{ route('change.language', 'id') }}">{{ __('messages.language_id') }}</a></li>
                                <li><a class="dropdown-item" href="{{ route('change.language', 'en') }}">{{ __('messages.language_en') }}</a></li>
                                <li><a class="dropdown-item" href="{{ route('change.language', 'jp') }}">{{ __('messages.language_jp') }}</a></li>
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

    <footer id="contact-section" class="footer py-5" style="background-color: #364e4c; color: white;">
        <div class="container">
            <div class="row">
                <div class="col-md-6" style="padding-right: 30px;">
                    <div class="address-section">
                        <h1 class="fw-bold">{{ __('messages.our_location') }}</h1>
                        <p><strong>{{ __('messages.company_name') }}</strong></p>
                        <p>{{ __('messages.address_line_1') }}</p>
                        <p>{{ __('messages.address_line_2') }}</p>
                        <div class="map-container">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3950.094022390613!2d107.16844407499977!3d-6.318154661826986!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e698532b5fcfdbf%3A0xf850ed44f66f6c40!2sPT.%20Sari%20Takagi%20Elok%20Produk%20(STEP)%20Plant%201!5e1!3m2!1sid!2sid!4v1745375297523!5m2!1sid!2sid" width="100%" height="425" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                    </div>
                </div>
    
                <div class="col-md-6">
                    <div class="contact-section">
                        <h1 class="fw-bold">{{ __('messages.contact_us') }}</h1>
                        <p><strong>{{ __('messages.phone') }}:</strong> +6221-893-4211</p>
                        <!-- <p><strong>{{ __('messages.email') }}:</strong> mkd@step.com</p> -->
                        <p><strong>{{ __('messages.operating_hours') }}:</strong></p>
                        <ul>
                            <li>{{ __('messages.operating_hours_monday_friday') }}</li>
                            <li>{{ __('messages.operating_hours_weekends') }}</li>
                        </ul>
                        <div style="text-align: left; font-family: 'Arial', sans-serif;">
                            <h6 style="color: #ffffff; margin-bottom: 10px; font-family: 'Poppins', sans-serif; font-weight: bold;">
                                {{ __('messages.prayer_schedule') }}
                            </h6>  
                            <div id="clock" style="font-size: 24px; margin-bottom: 10px; color: #ffffff;">{{ __('messages.loading_time') }}</div>
                            <table style="align-items: left; border-collapse: collapse; font-size: 18px;">
                                <thead>
                                    <tr style="background-color: #527a77; color: white;">
                                        <th style="padding: 10px 20px;">{{ __('messages.prayer') }}</th>
                                        <th style="padding: 10px 20px;">{{ __('messages.time') }}</th>
                                    </tr>
                                </thead>
                                <tbody id="jadwal-sholat" style="background-color: #f9f9f9; color: #333;">
                                    <tr>
                                        <td style="padding: 10px 20px; border-bottom: 1px solid #ddd;">{{ __('messages.subuh') }}</td>
                                        <td style="padding: 10px 20px; border-bottom: 1px solid #ddd;">04:21</td>
                                    </tr>
                                    <tr>
                                        <td style="padding: 10px 20px; border-bottom: 1px solid #ddd;">{{ __('messages.dzuhur') }}</td>
                                        <td style="padding: 10px 20px; border-bottom: 1px solid #ddd;">11:45</td>
                                    </tr>
                                    <tr>
                                        <td style="padding: 10px 20px; border-bottom: 1px solid #ddd;">{{ __('messages.ashar') }}</td>
                                        <td style="padding: 10px 20px; border-bottom: 1px solid #ddd;">14:47</td>
                                    </tr>
                                    <tr>
                                        <td style="padding: 10px 20px; border-bottom: 1px solid #ddd;">{{ __('messages.maghrib') }}</td>
                                        <td style="padding: 10px 20px; border-bottom: 1px solid #ddd;">17:46</td>
                                    </tr>
                                    <tr>
                                        <td style="padding: 10px 20px; border-bottom: 1px solid #ddd;">{{ __('messages.isya') }}</td>
                                        <td style="padding: 10px 20px; border-bottom: 1px solid #ddd;">18:56<td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        
                        <script>
                            // Jam real-time
                            function updateClock() {
                                const now = new Date();
                                const jam = now.getHours().toString().padStart(2, '0');
                                const menit = now.getMinutes().toString().padStart(2, '0');
                                const detik = now.getSeconds().toString().padStart(2, '0');
                                document.getElementById('clock').textContent = `${jam}:${menit}:${detik}`;
                            }
                            setInterval(updateClock, 1000);
                            updateClock();
                        </script>
                    </div>
                </div>
            </div>
    
            <div class="text-center mt-5" style="margin-bottom: -40px;">
                <p>{{ __('messages.copyright', ['year' => date('Y')]) }}</p>
            </div>
        </div>
    </footer>
    
    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        window.addEventListener('scroll', function() {
            const navbar = document.querySelector('.navbar');
            if (window.scrollY > 40) {
                navbar.classList.add('scrolled');
            } else {
                navbar.classList.remove('scrolled');
            }
        });

        document.addEventListener('DOMContentLoaded', function() {
            const elementsToAnimate = [
                '.profil-perusahaan h2', 
                '.profil-perusahaan p', 
                '.products-section h2',
                '.products-section h6',
                '.product-card',
                '.display-6',
                '.partner-logo',
                '.footer .address-section',
                '.footer .contact-section'
            ];
            
            elementsToAnimate.forEach(selector => {
                document.querySelectorAll(selector).forEach(element => {
                    element.classList.add('animate-on-scroll');
                });
            });
            
            function isInViewport(element) {
                const rect = element.getBoundingClientRect();
                return (
                    rect.top <= (window.innerHeight || document.documentElement.clientHeight) * 0.85 &&
                    rect.bottom >= 0
                );
            }
            
            function checkScrollAnimation() {
                const elementsToShow = document.querySelectorAll('.animate-on-scroll:not(.visible)');
                elementsToShow.forEach(element => {
                    if (isInViewport(element)) {
                        element.classList.add('visible');
                    }
                });
            }
            
            window.addEventListener('scroll', checkScrollAnimation);
            checkScrollAnimation();
            
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
            
            document.querySelectorAll('.btn-primary, .hero-content div[style*="background-color: #527a77"]').forEach(button => {
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
            const navbar = document.querySelector('.navbar');
            if (window.scrollY > 40) {
                navbar.classList.add('scrolled');
            } else {
                // Only remove scrolled class if not on mobile
                if (window.innerWidth > 992) {
                    navbar.classList.remove('scrolled');
                }
            }
        });
        
        // Force navbar to be in "scrolled" state on mobile
        function checkMobileNavbar() {
            const navbar = document.querySelector('.navbar');
            if (window.innerWidth <= 992) {
                navbar.classList.add('scrolled');
            } else if (window.scrollY <= 40) {
                navbar.classList.remove('scrolled');
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