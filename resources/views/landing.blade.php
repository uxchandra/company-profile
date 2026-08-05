@extends('layouts.app')

@section('content')
<div id="home-section" class="hero-section" style="background-image: url('{{ asset('images/bgstep2.png') }}');">
    <div class="hero-overlay"></div>
    <div class="container hero-content">
        <div class="row align-items-center gy-5">
            <div class="col-12 col-lg-7" data-aos="slide-right">
                <div class="brand-acronym">
                    <div class="acronym-letters">
                        <span>F</span>
                        <span>A</span>
                        <span>N</span>
                        <span>S</span>
                    </div>
                    <div class="acronym-divider"></div>
                    <div class="acronym-words">
                        <span>{{ __('messages.fair') }}</span>
                        <span>{{ __('messages.future') }}</span>
                        <span>{{ __('messages.flexibility') }}</span>
                        <span>{{ __('messages.frontier_spirit') }}</span>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-5 d-flex justify-content-lg-end" data-aos="slide-left">
                <div class="company-policy">
                    <div class="company-policy-label">{{ __('messages.company_policy_label') }}</div>
                    <h2 class="company-policy-title">{{ __('messages.company_policy_title') }}</h2>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- <marquee class="running-text" behavior="scroll" direction="left">
    {{ __('messages.running_text') }}
</marquee>   -->

<section id="company-section" class="profil-perusahaan py-5" style="background-color: #f4f8f7;">
    <div class="container py-4">
        <div class="row align-items-center g-4 g-lg-5 mb-5">
            <!-- Kolom Foto Direktur -->
            <div class="col-12" style="width:300px; max-width: 100%; flex: 0 0 auto;" data-aos="slide-right">
                <div class="director-card" style="width: 300px; max-width: 100%;">
                    <img src="{{ asset('images/presdir.png') }}" alt="Mr. Yoshida Shizuo - {{ __('messages.president_director') }}" class="w-100 d-block">
                    <div class="director-caption">
                        <h5 class="fw-bold mb-0">Mr. Yoshida Shizuo</h5>
                        <p class="mb-0 small">{{ __('messages.president_director') }}</p>
                    </div>
                </div>
            </div>
            <!-- Kolom Konten -->
            <div class="col-12 col-md" data-aos="slide-left">
                <h2 class="display-6 fw-bold mb-3">{{ __('messages.company_profile') }}</h2>
                <p class="fs-6 text-muted" style="text-align: justify;">
                    {{ __('messages.company_profile_description') }}
                </p>
                <p class="fs-6 text-muted" style="text-align: justify;">
                    {{ __('messages.company_profile_description_2') }}
                </p>
            </div>
        </div>

        <!-- Visi & Misi -->
        <div class="row g-4">
            <div class="col-md-6" data-aos="slide-right">
                <div class="vision-mission-card h-100">
                    <div class="card-icon mb-3"><i class="fas fa-binoculars"></i></div>
                    <h4 class="fw-bold mb-2">{{ __('messages.our_vision') }}</h4>
                    <p class="text-muted mb-0">{{ __('messages.vision_text') }}</p>
                </div>
            </div>
            <div class="col-md-6" data-aos="slide-left">
                <div class="vision-mission-card h-100">
                    <div class="card-icon mb-3"><i class="fas fa-bullseye"></i></div>
                    <h4 class="fw-bold mb-3">{{ __('messages.our_mission') }}</h4>
                    <ol class="text-muted mb-0 ps-3">
                        <li class="mb-2">{{ __('messages.mission_item_1') }}</li>
                        <li class="mb-2">{{ __('messages.mission_item_2') }}</li>
                        <li class="mb-2">{{ __('messages.mission_item_3') }}</li>
                        <li class="mb-0">{{ __('messages.mission_item_4') }}</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Our Products Section -->
<section id="products-section" class="products-parallax" style="background-image: url('{{ asset('images/family.png') }}');">
    <style>
        .products-parallax {
            position: relative;
            background-size: cover;
            background-position: center;
            background-attachment: fixed;
            padding: 90px 0;
            overflow: hidden;
        }

        .products-overlay {
            position: absolute;
            inset: 0;
            background: linear-gradient(180deg, rgba(34, 51, 47, 0.82), rgba(54, 78, 76, 0.78));
            z-index: 1;
        }

        .products-content {
            position: relative;
            z-index: 2;
        }

        .products-heading {
            color: #ffffff;
            font-weight: 800;
            text-transform: uppercase;
            letter-spacing: 3px;
            font-size: clamp(1.8rem, 4vw, 2.4rem);
            display: inline-block;
            padding-bottom: 16px;
            position: relative;
            text-shadow: 0 2px 12px rgba(0, 0, 0, 0.45);
        }

        .products-heading::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 50%;
            transform: translateX(-50%);
            width: 60px;
            height: 3px;
            background: #ffffff;
        }

        .product-showcase-card {
            background: rgba(255, 255, 255, 0.96);
            border-radius: 14px;
            overflow: hidden;
            height: 100%;
            box-shadow: 0 15px 40px rgba(0, 0, 0, 0.3);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .product-showcase-card:hover {
            transform: translateY(-8px);
            box-shadow: 0 20px 45px rgba(0, 0, 0, 0.4);
        }

        .product-showcase-title {
            background: var(--step-dark);
            color: #ffffff;
            font-weight: 700;
            font-size: 1.6rem;
            text-align: center;
            padding: 18px 16px;
        }

        .product-showcase-image img {
            width: 100%;
            height: auto;
            display: block;
        }
    </style>

    <div class="products-overlay"></div>

    <div class="container products-content">
        <div class="text-center mb-5" data-aos="fade-up">
            <h2 class="products-heading">{{ __('messages.our_products') }}</h2>
        </div>

        <div class="row justify-content-center" style="max-width: 980px; margin-left: auto; margin-right: auto; --bs-gutter-x: 5rem; row-gap: 3rem;">
            <div class="col-md-6" data-aos="slide-right">
                <div class="product-showcase-card">
                    <div class="product-showcase-title">{{ __('messages.safety_parts') }}</div>
                    <div class="product-showcase-image">
                        <img src="{{ asset('images/products/safety_parts.png') }}" alt="{{ __('messages.safety_parts') }}">
                    </div>
                </div>
            </div>
            <div class="col-md-6" data-aos="slide-left">
                <div class="product-showcase-card">
                    <div class="product-showcase-title">{{ __('messages.electric_parts') }}</div>
                    <div class="product-showcase-image">
                        <img src="{{ asset('images/products/electric_parts.png') }}" alt="{{ __('messages.electric_parts') }}">
                    </div>
                </div>
            </div>
            <div class="col-md-6" data-aos="slide-right">
                <div class="product-showcase-card">
                    <div class="product-showcase-title">{{ __('messages.body_parts') }}</div>
                    <div class="product-showcase-image">
                        <img src="{{ asset('images/products/body_parts.png') }}" alt="{{ __('messages.body_parts') }}">
                    </div>
                </div>
            </div>
            <div class="col-md-6" data-aos="slide-left">
                <div class="product-showcase-card">
                    <div class="product-showcase-title">{{ __('messages.engine_parts') }}</div>
                    <div class="product-showcase-image">
                        <img src="{{ asset('images/products/engine_parts.png') }}" alt="{{ __('messages.engine_parts') }}">
                    </div>
                </div>
            </div>
            <div class="col-md-6" data-aos="slide-right">
                <div class="product-showcase-card">
                    <div class="product-showcase-title">{{ __('messages.interior_parts') }}</div>
                    <div class="product-showcase-image">
                        <img src="{{ asset('images/products/interior_parts.png') }}" alt="{{ __('messages.interior_parts') }}">
                    </div>
                </div>
            </div>
            <div class="col-md-6" data-aos="slide-left">
                <div class="product-showcase-card">
                    <div class="product-showcase-title">{{ __('messages.chassis_parts') }}</div>
                    <div class="product-showcase-image">
                        <img src="{{ asset('images/products/chassis_parts.png') }}" alt="{{ __('messages.chassis_parts') }}">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="plant-section" class="py-5" style="background-color: #f4f8f7;">
    <style>
        .plant-base-label {
            display: inline-block;
            font-size: 12px;
            font-weight: 700;
            letter-spacing: 1.5px;
            text-transform: uppercase;
            color: var(--step-accent);
            background: rgba(82, 122, 119, 0.12);
            padding: 4px 12px;
            border-radius: 20px;
            margin-bottom: 10px;
        }

        .plant-base-block + .plant-base-block {
            margin-top: 28px;
            padding-top: 28px;
            border-top: 1px solid rgba(54, 78, 76, 0.12);
        }

        .plant-network-card {
            background: #ffffff;
            border-radius: 14px;
            padding: 32px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.06);
        }

        .plant-network-group + .plant-network-group {
            margin-top: 22px;
        }

        .plant-network-subheading {
            font-size: 13px;
            font-weight: 700;
            letter-spacing: 0.5px;
            color: var(--step-primary);
            text-transform: uppercase;
            margin-bottom: 8px;
        }

        .plant-network-list {
            list-style: none;
            padding: 0;
            margin: 0;
        }

        .plant-network-list li {
            padding: 6px 0;
            border-bottom: 1px dashed rgba(54, 78, 76, 0.12);
            color: #555;
            font-size: 15px;
        }

        .plant-network-list li:last-child {
            border-bottom: none;
        }

        .plant-network-list li span {
            display: block;
            color: #888;
            font-size: 13px;
        }

        .plant-network-list-compact li {
            padding: 5px 0;
        }
    </style>
    <div class="container">
        <div class="row align-items-center g-4 g-lg-5 mb-5">
            <!-- Kolom Konten -->
            <div class="col-12 col-lg-5" data-aos="slide-right">
                <div class="plant-base-block">
                    <span class="plant-base-label">{{ __('messages.plant_japan_base_label') }}</span>
                    <h5 class="fw-bold mb-2">{{ __('messages.plant_japan_base_name') }}</h5>
                    <p class="text-muted mb-0">{{ __('messages.plant_japan_base_desc') }}</p>
                </div>
                <div class="plant-base-block">
                    <span class="plant-base-label">{{ __('messages.plant_overseas_base_label') }}</span>
                    <h5 class="fw-bold mb-1">{{ __('messages.company_name') }}</h5>
                    <p class="mb-2" style="color: #527a77; font-weight: 600;">{{ __('messages.plant_established') }}</p>
                    <p class="text-muted mb-0">{{ __('messages.address_line_1') }}, {{ __('messages.address_line_2') }}</p>
                </div>
            </div>
            <!-- Kolom Video -->
            <div class="col-12 col-lg-7" data-aos="zoom-in">
                <div class="card border-0 shadow-sm" style="border-radius: 14px; overflow: hidden;">
                    <video autoplay loop muted playsinline class="w-100 d-block" style="height: auto;">
                        <source src="{{ asset('videos/lobby.mp4') }}" type="video/mp4">
                        {{ __('messages.video_not_supported') }}
                    </video>
                </div>
            </div>
        </div>

        <!-- Global Network Breakdown -->
        <div class="row g-4">
            <div class="col-12 col-lg-6" data-aos="fade-up">
                <div class="plant-network-card h-100">
                    <span class="plant-base-label">{{ __('messages.plant_japan_base_label') }}</span>
                    <h5 class="fw-bold mb-3 d-flex align-items-center gap-2">
                        <img src="https://flagcdn.com/24x18/jp.png" srcset="https://flagcdn.com/48x36/jp.png 2x" width="24" height="18" alt="" class="rounded-1">
                        Takagi Group Japan
                    </h5>

                    <div class="row g-4">
                        <div class="col-7">
                            <div class="plant-network-group">
                                <h6 class="plant-network-subheading">{{ __('messages.plant_headquarters') }}</h6>
                                <ul class="plant-network-list">
                                    <li>Nagoya, Aichi Prefecture</li>
                                </ul>
                            </div>

                            <div class="plant-network-group">
                                <h6 class="plant-network-subheading">{{ __('messages.plant_factories') }} (4)</h6>
                                <ul class="plant-network-list">
                                    <li>Okazaki Factory<span>Okazaki City, Aichi Prefecture</span></li>
                                    <li>Shinshiro Factory<span>Shinshiro City, Aichi Prefecture</span></li>
                                    <li>Kyushu Factory<span>Kitakyushu City, Fukuoka Prefecture</span></li>
                                    <li>Okinawa Factory<span>Uruma City, Okinawa Prefecture</span></li>
                                </ul>
                            </div>
                        </div>

                        <div class="col-5">
                            <div class="plant-network-group">
                                <h6 class="plant-network-subheading">{{ __('messages.plant_group_companies') }} (7)</h6>
                                <ul class="plant-network-list plant-network-list-compact">
                                    <li>Fukutaka Co., Ltd</li>
                                    <li>Izumi Industries Co., Ltd</li>
                                    <li>Fukushima Takagi Co., Ltd</li>
                                    <li>Sogyo Co., Ltd</li>
                                    <li>Toshin Tech Co., Ltd</li>
                                    <li>Takagi Transportation Co., Ltd</li>
                                    <li>Higashi Mikawa Takagi Co., Ltd</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-12 col-lg-6" data-aos="fade-up">
                <div class="plant-network-card h-100">
                    <span class="plant-base-label">{{ __('messages.plant_overseas_base_label') }}</span>
                    <h5 class="fw-bold mb-3 d-flex align-items-center gap-2">
                        <i class="fas fa-globe-asia" style="color: var(--step-accent);"></i>
                        Takagi Group Overseas
                    </h5>

                    <div class="plant-network-group">
                        <h6 class="plant-network-subheading d-flex align-items-center gap-2">
                            <img src="https://flagcdn.com/20x15/us.png" srcset="https://flagcdn.com/40x30/us.png 2x" width="20" height="15" alt="" class="rounded-1">
                            {{ __('messages.plant_country_america') }}
                        </h6>
                        <ul class="plant-network-list">
                            <li>Takumi Stamping Ohio Plant</li>
                            <li>Takumi Stamping Texas Plant</li>
                        </ul>
                    </div>

                    <div class="plant-network-group">
                        <h6 class="plant-network-subheading d-flex align-items-center gap-2">
                            <img src="https://flagcdn.com/20x15/ca.png" srcset="https://flagcdn.com/40x30/ca.png 2x" width="20" height="15" alt="" class="rounded-1">
                            {{ __('messages.plant_country_canada') }}
                        </h6>
                        <ul class="plant-network-list">
                            <li>Takumi Stamping Canada</li>
                        </ul>
                    </div>

                    <div class="plant-network-group">
                        <h6 class="plant-network-subheading d-flex align-items-center gap-2">
                            <img src="https://flagcdn.com/20x15/cn.png" srcset="https://flagcdn.com/40x30/cn.png 2x" width="20" height="15" alt="" class="rounded-1">
                            {{ __('messages.plant_country_china') }}
                        </h6>
                        <ul class="plant-network-list">
                            <li>Zhongshan Takagi Autopart</li>
                            <li>Tianjin Takagi Autopart</li>
                        </ul>
                    </div>

                    <div class="plant-network-group">
                        <h6 class="plant-network-subheading d-flex align-items-center gap-2">
                            <img src="https://flagcdn.com/20x15/id.png" srcset="https://flagcdn.com/40x30/id.png 2x" width="20" height="15" alt="" class="rounded-1">
                            {{ __('messages.plant_country_indonesia') }}
                        </h6>
                        <ul class="plant-network-list">
                            <li>{{ __('messages.company_name') }} (STEP)</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<style>

</style>

{{-- <div class="certification-container">
    <div class="certification-images">
        <!-- Logo ISO 9001 -->
        <div class="certification-image">
            <img src="images/isooo.png" alt="ISO 9001:2015" style="width: 400px; height: auto;">
          </div>
          
    </div>
    
    <div class="certification-divider"></div>
    
    <div class="certification-content">
        <div style="font-size: 30px; line-height: 1.6;">
            <span style="font-weight:900;">ISO 9001:2015,</span>
            <span style="font-weight:900;"> ISO 14001:2015 </span>
            <span style="font-weight:300;">and</span>
            <span style="font-weight:900;"> IATF 16949:2016 </span>
            <span style="font-weight:300;">certified.</span>
          </div>
          
        
        <p class="certification-description">
            Leading in metal stamping industry, PT Sari Takagi Elok Produk has obtained two ISOs from the International Certificate Board (SGS), ISO 9001:2015 Quality Management and ISO 14001:2015 Environmental Management. PT Sari Takagi Elok Produk is committed to satisfy customers with on high quality and on time product delivery while producing it in a better healthy working environment for all employees.
        </p>
        
        <p class="certification-description">
            Selain itu, kami juga memiliki sertifikasi IATF 16949:2016 untuk industri otomotif dan OHSAS 18001 untuk sistem manajemen kesehatan dan keselamatan kerja, menegaskan komitmen kami untuk keunggulan operasional di semua bidang.
        </p>
    </div>
</div> --}}



<section class="activities-parallax" style="background-image: url('{{ asset('images/mesin.png') }}');">
    <style>
        .activities-parallax {
            position: relative;
            background-size: cover;
            background-position: center;
            background-attachment: fixed;
            padding: 90px 0;
            overflow: hidden;
        }

        .activities-overlay {
            position: absolute;
            inset: 0;
            background: linear-gradient(180deg, rgba(34, 51, 47, 0.7), rgba(54, 78, 76, 0.65));
            z-index: 1;
        }

        .activities-content {
            position: relative;
            z-index: 2;
        }

        .activities-heading {
            color: #ffffff;
            font-weight: 800;
            text-transform: uppercase;
            letter-spacing: 3px;
            font-size: clamp(1.8rem, 4vw, 2.4rem);
            display: inline-block;
            padding-bottom: 16px;
            position: relative;
            text-shadow: 0 2px 12px rgba(0, 0, 0, 0.45);
        }

        .activities-heading::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 50%;
            transform: translateX(-50%);
            width: 60px;
            height: 3px;
            background: #ffffff;
        }

        .carousel-aktivitas {
            max-width: 1100px;
        }

        .activity-card {
            background: rgba(255, 255, 255, 0.08);
            border: 1px solid rgba(255, 255, 255, 0.15);
            border-radius: 14px;
            padding: 16px;
            box-shadow: 0 15px 40px rgba(0, 0, 0, 0.3);
        }

        .carousel-aktivitas .activity-card img {
            width: 100%;
            height: 420px;
            object-fit: cover;
            border-radius: 8px;
            display: block;
        }

        .carousel-aktivitas .carousel-caption-custom {
            position: static;
            margin-top: 20px;
            color: #ffffff;
            font-size: 2rem;
            font-weight: 700;
            text-align: center;
            text-shadow: 0 2px 10px rgba(0, 0, 0, 0.45);
        }

        .carousel-aktivitas .carousel-control-prev,
        .carousel-aktivitas .carousel-control-next {
            width: 50px;
            opacity: 1;
        }

        .carousel-aktivitas .carousel-control-prev {
            left: -70px;
        }

        .carousel-aktivitas .carousel-control-next {
            right: -70px;
        }

        @media (max-width: 900px) {
            .carousel-aktivitas .carousel-control-prev {
                left: 0;
            }

            .carousel-aktivitas .carousel-control-next {
                right: 0;
            }
        }

        .carousel-aktivitas .carousel-control-prev-icon,
        .carousel-aktivitas .carousel-control-next-icon {
            background-color: rgba(255, 255, 255, 0.15);
            border-radius: 50%;
            padding: 20px;
        }
    </style>

    <div class="activities-overlay"></div>

    <div class="container activities-content">
        <div class="text-center mb-5" data-aos="fade-up">
            <h2 class="activities-heading">{{ __('messages.our_activities') }}</h2>
        </div>

        <div id="aktivitasCarousel" class="carousel slide carousel-aktivitas mx-auto" data-bs-ride="carousel" data-bs-interval="2000" data-aos="zoom-in">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="activity-card">
                        <img src="images/aktivitas/familygathring.jpg" alt="{{ __('messages.activity_family_gathering') }}">
                    </div>
                    <div class="carousel-caption-custom">{{ __('messages.activity_family_gathering') }}</div>
                </div>
                <div class="carousel-item">
                    <div class="activity-card">
                        <img src="images/aktivitas/kaizen.png" alt="{{ __('messages.activity_kaizen') }}" style="object-position: 60%;">
                    </div>
                    <div class="carousel-caption-custom">{{ __('messages.activity_kaizen') }}</div>
                </div>
                <div class="carousel-item">
                    <div class="activity-card">
                        <img src="images/aktivitas/qurban.png" alt="{{ __('messages.activity_qurban') }}" style="object-position: 75% 50%;">
                    </div>
                    <div class="carousel-caption-custom">{{ __('messages.activity_qurban') }}</div>
                </div>
                <div class="carousel-item">
                    <div class="activity-card">
                        <img src="images/aktivitas/jumsih.png" alt="{{ __('messages.activity_jumat_bersih') }}" style="object-position: 75% 50%;">
                    </div>
                    <div class="carousel-caption-custom">{{ __('messages.activity_jumat_bersih') }}</div>
                </div>
                <div class="carousel-item">
                    <div class="activity-card">
                        <img src="images/aktivitas/bukber.png" alt="{{ __('messages.activity_buka_puasa') }}" style="object-position: 50% 75%;">
                    </div>
                    <div class="carousel-caption-custom">{{ __('messages.activity_buka_puasa') }}</div>
                </div>
                <div class="carousel-item">
                    <div class="activity-card">
                        <img src="images/aktivitas/safetyriding.png" alt="{{ __('messages.activity_safety_riding') }}" style="object-position: 80% 50%;">
                    </div>
                    <div class="carousel-caption-custom">{{ __('messages.activity_safety_riding') }}</div>
                </div>
                <div class="carousel-item">
                    <div class="activity-card">
                        <img src="images/aktivitas/gangsing.png" alt="{{ __('messages.activity_gangsing') }}" style="object-position: 80% 50%;">
                    </div>
                    <div class="carousel-caption-custom">{{ __('messages.activity_gangsing') }}</div>
                </div>
                <div class="carousel-item">
                    <div class="activity-card">
                        <img src="images/aktivitas/santunan.png" alt="{{ __('messages.activity_santunan') }}" style="object-position: 80% 50%;">
                    </div>
                    <div class="carousel-caption-custom">{{ __('messages.activity_santunan') }}</div>
                </div>
                <div class="carousel-item">
                    <div class="activity-card">
                        <img src="images/aktivitas/mangrove.png" alt="{{ __('messages.activity_mangrove') }}" style="object-position: 50% 30%;">
                    </div>
                    <div class="carousel-caption-custom">{{ __('messages.activity_mangrove') }}</div>
                </div>
                <div class="carousel-item">
                    <div class="activity-card">
                        <img src="images/aktivitas/posyandu.png" alt="{{ __('messages.activity_posyandu') }}" style="object-position: center;">
                    </div>
                    <div class="carousel-caption-custom">{{ __('messages.activity_posyandu') }}</div>
                </div>
                <!-- <div class="carousel-item">
                    <div class="activity-card">
                        <img src="images/aktivitas/ekspedisi.png" alt="{{ __('messages.activity_ekspedisi') }}" style="object-position: 50% 43%;">
                    </div>
                    <div class="carousel-caption-custom">{{ __('messages.activity_ekspedisi') }}</div>
                </div> -->
            </div>

            <button class="carousel-control-prev" type="button" data-bs-target="#aktivitasCarousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#aktivitasCarousel" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
            </button>
        </div>
    </div>
</section>

@endsection