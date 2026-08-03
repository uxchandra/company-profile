@extends('layouts.app')

@section('content')
<div id="home-section" class="hero-section" style="background-image: url('{{ asset('images/bgstep2.png') }}');">
    <div class="hero-overlay"></div>
    <div class="container hero-content">
        <div class="row">
            <div class="col-12 col-lg-auto">
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
            <div class="col-12" style="width:300px; max-width: 100%; flex: 0 0 auto;">
                <div class="director-card" style="width: 300px; max-width: 100%;">
                    <img src="{{ asset('images/presdir.png') }}" alt="Mr. Yoshida Shizuo - {{ __('messages.president_director') }}" class="w-100 d-block">
                    <div class="director-caption">
                        <h5 class="fw-bold mb-0">Mr. Yoshida Shizuo</h5>
                        <p class="mb-0 small">{{ __('messages.president_director') }}</p>
                    </div>
                </div>
            </div>
            <!-- Kolom Konten -->
            <div class="col-12 col-md">
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
            <div class="col-md-6">
                <div class="vision-mission-card h-100">
                    <div class="card-icon mb-3"><i class="fas fa-eye"></i></div>
                    <h4 class="fw-bold mb-2">{{ __('messages.our_vision') }}</h4>
                    <p class="text-muted mb-0">{{ __('messages.vision_text') }}</p>
                </div>
            </div>
            <div class="col-md-6">
                <div class="vision-mission-card h-100">
                    <div class="card-icon mb-3"><i class="fas fa-flag"></i></div>
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

<!-- Our Plant Section -->
<section id="plant-section" class="py-5">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="display-6 fw-bold">{{ __('messages.our_plant') }}</h2>
            <p class="fs-6">{{ __('messages.plant_subtitle') }}</p>
        </div>
        <div class="row justify-content-center">
            <div class="col-12 col-md-8">
                <div class="card border-0 shadow-sm" style="border-radius: 14px; overflow: hidden;">
                    <img src="{{ asset('images/bgstep.png') }}" alt="{{ __('messages.company_name') }}" class="w-100" style="object-fit: cover; max-height: 380px;">
                    <div class="card-body p-4">
                        <h5 class="fw-bold mb-1">{{ __('messages.company_name') }}</h5>
                        <p class="mb-2" style="color: #527a77; font-weight: 600;">{{ __('messages.plant_established') }}</p>
                        <p class="mb-0 text-muted">{{ __('messages.address_line_1') }}, {{ __('messages.address_line_2') }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Our Products Section with Glassmorphism -->
<section id="products-section" class="position-relative overflow-hidden">
    <!-- Background Blur Elements -->
    <div class="blur-element blur-1"></div>
    <div class="blur-element blur-2"></div>
    <div class="blur-element blur-3"></div>
    
    <!-- Our Products Section -->
    <div class="products-section">
        <h2 class="display-6 fw-bold mt-5 text-center">{{ __('messages.our_products') }}</h2>
        <h6 class="text-center mb-4">{{ __('messages.products_subtitle') }}</h6>
        <div class="products-container">
            <!-- Product 1 -->
            <div class="product-card glass-card">
                <div class="product-image">
                    <img src="images/produk1.png" alt="{{ __('messages.automotive_components') }}">
                </div>
                <div class="product-details">
                    <h4>{{ __('messages.automotive_components') }}</h4>
                    <p>{{ __('messages.automotive_components_description') }}</p>
                </div>
            </div>
            <!-- Product 2 -->
            <div class="product-card glass-card">
                <div class="product-image">
                    <img src="images/produk2.png" alt="{{ __('messages.clamp_hose') }}">
                </div>
                <div class="product-details">
                    <h4>{{ __('messages.clamp_hose') }}</h4>
                    <p>{{ __('messages.clamp_hose_description') }}</p>
                </div>
            </div>
            <!-- Product 3 -->
            <div class="product-card glass-card">
                <div class="product-image">
                    <img src="images/produk3.png" alt="{{ __('messages.precision_stamping_dies') }}">
                </div>
                <div class="product-details">
                    <h4>{{ __('messages.precision_stamping_dies') }}</h4>
                    <p>{{ __('messages.precision_stamping_dies_description') }}</p>
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



<section class="activities-parallax" style="background-image: url('{{ asset('images/family.png') }}');">
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
            max-width: 760px;
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
            font-size: 1.15rem;
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
        <div class="text-center mb-5">
            <h2 class="activities-heading">{{ __('messages.our_activities') }}</h2>
        </div>

        <div id="aktivitasCarousel" class="carousel slide carousel-aktivitas mx-auto" data-bs-ride="carousel" data-bs-interval="2000">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="activity-card">
                        <img src="images/aktivitas/familygathring.png" alt="{{ __('messages.activity_family_gathering') }}">
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
                        <img src="images/aktivitas/birthday.png" alt="{{ __('messages.activity_birthday') }}" style="object-position: 60%;">
                    </div>
                    <div class="carousel-caption-custom">{{ __('messages.activity_birthday') }}</div>
                </div>
                <div class="carousel-item">
                    <div class="activity-card">
                        <img src="images/aktivitas/futsal.png" alt="{{ __('messages.activity_futsal') }}">
                    </div>
                    <div class="carousel-caption-custom">{{ __('messages.activity_futsal') }}</div>
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