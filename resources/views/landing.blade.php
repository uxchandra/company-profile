@extends('layouts.app')

@section('content')
<div class="hero-section" style="background-image: url('{{ asset('images/bgstep2.png') }}');">
    <div class="hero-overlay"></div>
    <div class="container hero-content">
        <div class="row">
            <div class="col-lg-6">
                <h1 style="font-size: 3rem; font-weight: 700;">{{ __('messages.hero_title_pt') }}</h1>
                <h1 style="font-size: 3rem; font-weight: 700;">{{ __('messages.hero_title_sari_takagi') }}</h1>
                <h1 style="font-size: 3rem; font-weight: 700;">{{ __('messages.hero_title_elok_produk') }}</h1>
                <div class="my-4"></div>
                <div style="background-color: #527a77; color: white;" class="d-inline-block px-3 py-2 mt-3">
                    <strong style="color: #172b2a;">S</strong>mart 
                    <strong style="color: #172b2a;">T</strong>eamwork 
                    <strong style="color: #172b2a;">E</strong>xcelent 
                    <strong style="color: #172b2a;">P</strong>rofessional
                </div>
            </div>
        </div>
    </div>
</div>

<marquee class="running-text" behavior="scroll" direction="left">
    {{ __('messages.running_text') }}
</marquee>  

<section id="company-section" class="bg-cover text-dark profil-perusahaan" style="background-image: url('{{ asset('images/bgstep3.png') }}'); background-size: cover; background-position: center; overflow: hidden;">
    <div class="container-fluid px-0" style="margin: 0; padding: 0;">
        <div class="row no-gutters min-vh-30" style="margin-right: 0; margin-left: 0;">
            <!-- Kolom Video -->
            <div class="col-md-6 p-0" style="padding: 0; background-color: #fff;">
                <div class="w-100 h-100" style="margin: 0; padding: 0;">
                    <video autoplay loop muted playsinline class="w-100 h-100" style="object-fit: cover; border: none; outline: none; margin: 0; padding: 0;">
                        <source src="{{ asset('videos/lobby.mp4') }}" type="video/mp4">
                        {{ __('messages.video_not_supported') }}
                    </video>
                </div>
            </div>
            <!-- Kolom Konten -->
            <div class="col-md-6 d-flex align-items-center" style="margin-left: -13px; padding: 0;">
                <div class="p-5" style="margin: 0;">
                    <h2 class="display-6 fw-bold">{{ __('messages.company_profile') }}</h2>
                    <p class="fs-6">
                        {{ __('messages.company_profile_description') }}
                    </p>
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

<section class="py-5">
    <div class="row">
        <div class="col-12 text-center mb-5">
            <h2 class="display-6 fw-bold mt-5">{{ __('messages.trusted_by') }}</h2>
        </div>
    </div>

    <!-- 1st tier (Partner Utama) -->
    <div class="row justify-content-center mb-5">
        <h5 class="text-center mb-4">{{ __('messages.oem_customers') }}</h5>
        <div class="d-flex justify-content-center flex-wrap">
            <div class="partner-logo mb-3">
                <img src="images/tmmin.png" alt="{{ __('messages.logo_tmmin') }}" class="img-fluid">
            </div>
            <div class="partner-logo mb-3">
                <img src="images/adm.png" alt="{{ __('messages.logo_adm') }}" class="img-fluid">
            </div>
            <div class="partner-logo mb-3">
                <img src="images/hino.png" alt="{{ __('messages.logo_hino') }}" class="img-fluid">
            </div>
            <div class="partner-logo mb-3">
                <img src="images/hpm.png" alt="{{ __('messages.logo_hpm') }}" class="img-fluid">
            </div>
            <div class="partner-logo mb-3">
                <img src="images/mitsubishi.png" alt="{{ __('messages.logo_mitsubishi') }}" class="img-fluid">
            </div>
            <div class="partner-logo mb-3">
                <img src="images/isuzu.png" alt="{{ __('messages.logo_isuzu') }}" class="img-fluid">
            </div>
        </div>
    </div>

    <!-- 2nd tier (Partner Pendukung) -->
    <div class="row justify-content-center">
        <h5 class="text-center mb-4">{{ __('messages.part_makers_customers') }}</h5>

        <!-- Baris 1 -->
        <div class="row justify-content-center">
            <div class="col-auto partner-logo mb-4">
                <img src="images/tam.png" alt="{{ __('messages.logo_tam') }}" class="img-fluid">
            </div>
            <div class="col-auto partner-logo mb-4">
                <img src="images/aisin.png" alt="{{ __('messages.logo_aisin') }}" class="img-fluid">
            </div>
            <div class="col-auto partner-logo mb-4">
                <img src="images/gayamotor.png" alt="{{ __('messages.logo_gayamotor') }}" class="img-fluid">
            </div>
            <div class="col-auto partner-logo mb-4">
                <img src="images/tbina.png" alt="{{ __('messages.logo_tbina') }}" class="img-fluid">
            </div>
            <div class="col-auto partner-logo mb-4">
                <img src="images/fujiseat.png" alt="{{ __('messages.logo_fujiseat') }}" class="img-fluid">
            </div>
            <div class="col-auto partner-logo mb-4">
                <img src="images/nt.png" alt="{{ __('messages.logo_nt') }}" class="img-fluid">
            </div>
            <div class="col-auto partner-logo mb-4">
                <img src="images/ani.png" alt="{{ __('messages.logo_ani') }}" class="img-fluid">
            </div>
            <div class="col-auto partner-logo mb-4">
                <img src="images/denso.png" alt="{{ __('messages.logo_denso') }}" class="img-fluid">
            </div>
            <div class="col-auto partner-logo mb-4">
                <img src="images/futaba.png" alt="{{ __('messages.logo_futaba') }}" class="img-fluid">
            </div>
        </div>

        <!-- Baris 2 -->
        <div class="row justify-content-center mt-4">
            <div class="col-auto partner-logo mb-4">
                <img src="images/jtek.png" alt="{{ __('messages.logo_jtek') }}" class="img-fluid">
            </div>
            <div class="col-auto partner-logo mb-4">
                <img src="images/metindo.png" alt="{{ __('messages.logo_metindo') }}" class="img-fluid">
            </div>
            <div class="col-auto partner-logo mb-4">
                <img src="images/sugity.png" alt="{{ __('messages.logo_sugity') }}" class="img-fluid">
            </div>
            <div class="col-auto partner-logo mb-4">
                <img src="images/oi.png" alt="{{ __('messages.logo_oi') }}" class="img-fluid">
            </div>
            <div class="col-auto partner-logo mb-4">
                <img src="images/mtat.png" alt="{{ __('messages.logo_mtat') }}" class="img-fluid">
            </div>
            <div class="col-auto partner-logo mb-4">
                <img src="images/ati.png" alt="{{ __('messages.logo_ati') }}" class="img-fluid">
            </div>
            <div class="col-auto partner-logo mb-4">
                <img src="images/cii.png" alt="{{ __('messages.logo_cii') }}" class="img-fluid">
            </div>
            <div class="col-auto partner-logo mb-4">
                <img src="images/fukoku.png" alt="{{ __('messages.logo_fukoku') }}" class="img-fluid">
            </div>
            <div class="col-auto partner-logo mb-4">
                <img src="images/advios.png" alt="{{ __('messages.logo_advios') }}" class="img-fluid">
            </div>
        </div>
    </div>
</section>

<section class="py-5 bg-white" style="margin-bottom: 0;">
    <style>
        .carousel-aktivitas .carousel-item {
            position: relative;
        }

        .carousel-aktivitas .carousel-item img {
            width: 100%;
            height: 500px;
            object-fit: cover;
            object-position: 50% 75%;
        }

        .carousel-aktivitas .carousel-caption {
            position: absolute;
            bottom: 0;
            left: 50%;
            transform: translateX(-50%);
            width: 100%;
            padding: 10px 0;
            background-color: rgba(0, 0, 0, 0.7);
            color: white;
            text-align: center;
            font-size: 24px;
            font-weight: bold;
        }

        .carousel-aktivitas .carousel-control-prev-icon,
        .carousel-aktivitas .carousel-control-next-icon {
            background-color: rgba(0, 0, 0, 0.5);
            border-radius: 50%;
        }
    </style>

    <div class="text-center mb-4">
        <h2 class="display-6 fw-bold">{{ __('messages.our_activities') }}</h2>
    </div>

    <div id="aktivitasCarousel" class="carousel slide carousel-aktivitas" data-bs-ride="carousel" data-bs-interval="2000">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="images/aktivitas/familygathring.png" alt="{{ __('messages.activity_family_gathering') }}" class="d-block w-100">
                <div class="carousel-caption">{{ __('messages.activity_family_gathering') }}</div>
            </div>
            <div class="carousel-item">
                <img src="images/aktivitas/kaizen.png" alt="{{ __('messages.activity_kaizen') }}" class="d-block w-100" style="object-position: 60%;">
                <div class="carousel-caption">{{ __('messages.activity_kaizen') }}</div>
            </div>
            <div class="carousel-item">
                <img src="images/aktivitas/birthday.png" alt="{{ __('messages.activity_birthday') }}" class="d-block w-100" style="object-position: 60%;">
                <div class="carousel-caption">{{ __('messages.activity_birthday') }}</div>
            </div>
            <div class="carousel-item">
                <img src="images/aktivitas/futsal.png" alt="{{ __('messages.activity_futsal') }}" class="d-block w-100">
                <div class="carousel-caption">{{ __('messages.activity_futsal') }}</div>
            </div>
            <div class="carousel-item">
                <img src="images/aktivitas/qurban.png" alt="{{ __('messages.activity_qurban') }}" class="d-block w-100" style="object-position: 75% 50%;">
                <div class="carousel-caption">{{ __('messages.activity_qurban') }}</div>
            </div>
            <div class="carousel-item">
                <img src="images/aktivitas/jumsih.png" alt="{{ __('messages.activity_jumat_bersih') }}" class="d-block w-100" style="object-position: 75% 50%;">
                <div class="carousel-caption">{{ __('messages.activity_jumat_bersih') }}</div>
            </div>
            <div class="carousel-item">
                <img src="images/aktivitas/bukber.png" alt="{{ __('messages.activity_buka_puasa') }}" class="d-block w-100" style="object-position: 50% 75%;">
                <div class="carousel-caption">{{ __('messages.activity_buka_puasa') }}</div>
            </div>
            <div class="carousel-item">
                <img src="images/aktivitas/safetyriding.png" alt="{{ __('messages.activity_safety_riding') }}" class="d-block w-100" style="object-position: 80% 50%;">
                <div class="carousel-caption">{{ __('messages.activity_safety_riding') }}</div>
            </div>
            <div class="carousel-item">
                <img src="images/aktivitas/gangsing.png" alt="{{ __('messages.activity_gangsing') }}" class="d-block w-100" style="object-position: 80% 50%;">
                <div class="carousel-caption">{{ __('messages.activity_gangsing') }}</div>
            </div>
            <div class="carousel-item">
                <img src="images/aktivitas/santunan.png" alt="{{ __('messages.activity_santunan') }}" class="d-block w-100" style="object-position: 80% 50%;">
                <div class="carousel-caption">{{ __('messages.activity_santunan') }}</div>
            </div>
            <div class="carousel-item">
                <img src="images/aktivitas/mangrove.png" alt="{{ __('messages.activity_mangrove') }}" class="d-block w-100" style="object-position: 50% 30%;">
                <div class="carousel-caption">{{ __('messages.activity_mangrove') }}</div>
            </div>
            <div class="carousel-item">
                <img src="images/aktivitas/posyandu.png" alt="{{ __('messages.activity_posyandu') }}" class="d-block w-100" style="object-position: center;">
                <div class="carousel-caption">{{ __('messages.activity_posyandu') }}</div>
            </div>
            <!-- <div class="carousel-item">
                <img src="images/aktivitas/ekspedisi.png" alt="{{ __('messages.activity_ekspedisi') }}" class="d-block w-100" style="object-position: 50% 43%;">
                <div class="carousel-caption">{{ __('messages.activity_ekspedisi') }}</div>
            </div> -->
        </div>

        <button class="carousel-control-prev" type="button" data-bs-target="#aktivitasCarousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#aktivitasCarousel" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
        </button>
    </div>
</section>

@endsection