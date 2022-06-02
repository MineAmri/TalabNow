@extends('layouts.app')
@section('content')
 <section id="hero" class="clearfix">
    <div class="container" data-aos="fade-up">
      <div class="hero-img" data-aos="zoom-out" data-aos-delay="200">
        <img src="{{ asset('img/hero-img.svg') }}" alt="" class="img-fluid">
      </div>
      <div class="hero-info" data-aos="zoom-in" data-aos-delay="100">
        <h2>{{ __('sentence.header') }}</h2>
        <div>
          <a href="#contact" class="btn-get-started scrollto">{{ __('sentence.get_started') }}</a>
          <a href="#services" class="btn-services scrollto">{{ __('sentence.our_services') }}</a>
        </div>
      </div>
    </div>
  </section>
  <main id="main">
    <section id="about">
      <div class="container" data-aos="fade-up">
        <header class="section-header">
          <h3>{{ __('sentence.about_us') }}</h3>
          <p>{{ __('sentence.about_p') }}
          </p>
        </header>
        <div class="row about-container">
          <div class="col-lg-6 content order-lg-1 order-2">
            <h3>{{ __('sentence.ab_h3') }}</h3>
            <p>
              {{ __('sentence.ab_p') }}
            </p>

            <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
              <div class="icon"><i class="bi bi-palette-fill"></i></div>
              <h4 class="title"><a href="">{{ __('sentence.des') }}</a></h4>
              <p class="description">{{ __('sentence.p_des') }}</p>
            </div>

            <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
              <div class="icon"><i class="bi bi-code-slash"></i></div>
             <h4 class="title"><a href="">{{ __('sentence.des_webservices') }}</a></h4>
              <p class="description">‎{{ __('sentence.des_desc') }}</p>

            <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
              <div class="icon"><i class="bi bi-megaphone-fill"></i></div>
              <h4 class="title"><a href="">{{ __('sentence.Adv_title') }}</a></h4>
              <p class="description">‎{{ __('sentence.adv_desc‎') }}</p>
            </div>

          </div>

          
        </div>

        <div class="row about-extra">
          <div class="col-lg-6" data-aos="fade-right">
            <img src="{{ asset('/img/about-extra-1.svg') }}" class="img-fluid" alt="">
          </div>
          <div class="col-lg-6 pt-5 pt-lg-0" data-aos="fade-left">
            <h4>{{ __('sentence.what_h4') }}</h4>
            <p>{{ __('sentence.what_p1') }}<br>
              {{ __('sentence.what_p2') }}<br>
              {{ __('sentence.what_p3') }}<br>
              {{ __('sentence.what_p4') }}</p>

             <p><h3>{{ __('sentence.p_h3') }}<h3><br>
              <h3>{{ __('sentence.h3') }}<h3>
                  </div>
        </div>
        <div class="row about-extra">
          <div class="col-lg-6 order-1 order-lg-2" data-aos="fade-left">
            <img src="{{ asset('/img/about-extra-2.svg') }}" class="img-fluid" alt="">
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1" data-aos="fade-right">
            <h4>{{ __('sentence.h4_1') }}</h4>
            <p>{{ __('sentence.h4_p') }}</p>
            <h4>{{ __('sentence.h4_2') }}</h4>
            <p>{{ __('sentence.h4_p2') }}</p>
          </div>
        </div><br>

        <div class="col-lg-6 background order-lg-2" data-aos="fade-right">
            <img src="{{ asset('/img/about-img.svg') }}" class="img-fluid" alt="">
        </div>


      </div>

    </section><!-- End About Section -->
    <section id="services" class="section-bg">
      <div class="container" data-aos="fade-up">
        <header class="section-header">
          <h3>{{ __('sentence.services1') }}</h3>
          <h2>{{ __('sentence.services_h2') }}</h2>
        </header>
        <div class="row justify-content-center">
          <div class="col-md-6 col-lg-5" data-aos="zoom-in" data-aos-delay="100">
            <div class="box">
              <div class="icon"><i class="bi bi-briefcase" style="color: #ff689b;"></i></div>
              <h4 class="title"><a href="">{{ __('sentence.services_h4') }}</a></h4>
              <p class="description">{{ __('sentence.services_p') }}</p>
            </div>
          </div>
          <div class="col-md-6 col-lg-5" data-aos="zoom-in" data-aos-delay="200">
            <div class="box">
              <div class="icon"><i class="bi bi-card-checklist" style="color: #e9bf06;"></i></div>
              <h4 class="title"><a href="">{{ __('sentence.services_h4title') }}</a></h4>
              <p class="description">{{ __('sentence.services_exerience') }}</p>
            </div>
          </div>

          <div class="col-md-6 col-lg-5" data-aos="zoom-in" data-aos-delay="100">
            <div class="box">
              <div class="icon"><i class="bi bi-bar-chart" style="color: #3fcdc7;"></i></div>
              <h4 class="title"><a href="">{{ __('sentence.customer_successh4') }}</a></h4>
              <p class="description">{{ __('sentence.customer_success_desc') }}</p>
            </div>
          </div>
          <div class="col-md-6 col-lg-5" data-aos="zoom-in" data-aos-delay="200">
            <div class="box">
              <div class="icon"><i class="bi bi-hourglass-split" style="color:#41cf2e;"></i></div>
              <h4 class="title"><a href="">{{ __('sentence.customers_education') }}</a></h4>
              <p class="description">{{ __('sentence.customers_education_p') }}</p>
            </div>
          </div>

          <div class="col-md-6 col-lg-5" data-aos="zoom-in" data-aos-delay="100">
            <div class="box">
              <div class="icon"><i class="bi bi-megaphone-fill" style="color: #d6ff22;"></i></div>
              <h4 class="title"><a href="">{{ __('sentence.customers_soccial') }}</a></h4>
              <p class="description">{{ __('sentence.social_desc') }}</p>
            </div>
          </div>
          <div class="col-md-6 col-lg-5" data-aos="zoom-in" data-aos-delay="200">
            <div class="box">
              <div class="icon"><i class="bi bi-calendar4-week" style="color: #4680ff;"></i></div>
              <h4 class="title"><a href="">{{ __('sentence.customers_platforms') }}</a></h4>
              <p class="description">{{ __('sentence.customers_platforms_desc') }}</p>
            </div>
          </div>
        </div>
      </div>
    </section><!-- End Services Section -->
    <section id="why-us">
      <div class="container" data-aos="fade-up">
        <header class="section-header">
          <h3>{{ __('sentence.why_us') }}</h3>
          <p>‎{{ __('sentence.why_us_p') }}</p>
        </header>
        <div class="row row-eq-height justify-content-center">
          <div class="col-lg-4 mb-4">
            <div class="card" data-aos="zoom-in" data-aos-delay="100">
              <i class="bi bi-briefcase-fill"></i>
              <div class="card-body">
                <h5 class="card-title">{{ __('sentence.e_bussiness') }}</h5>
                <p class="card-text">{{ __('sentence.e_buss_p') }}</p>
                  <a href="#" class="readmore">Read more </a>
              </div>
            </div>
          </div>
          <div class="col-lg-4 mb-4">
            <div class="card" data-aos="zoom-in" data-aos-delay="200">
              <i class="bi bi-bullseye"></i>
              <div class="card-body">
                <h5 class="card-title">{{ __('sentence.webcreation') }}</h5>
                <p class="card-text">{{ __('sentence.webcreation_p') }}</p>
                <a href="#" class="readmore">Read more </a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 mb-4">
            <div class="card" data-aos="zoom-in" data-aos-delay="300">
              <i class="bi bi-flower1"></i>
              <div class="card-body">
                <h5 class="card-title">{{ __('sentence.graphic_des') }}</h5>
                <p class="card-text">{{ __('sentence.graphic_des_p') }}</p>
                <a href="#" class="readmore">Read more </a>
              </div>
            </div>
          </div>

        </div>

        <div class="row counters" data-aos="fade-up" data-aos-delay="100">

          <div class="col-lg-3 col-6 text-center">
            <span data-purecounter-start="0" data-purecounter-end="232" data-purecounter-duration="1" class="purecounter"></span>
            <p>{{ __('sentence.clients_p') }}</p>
          </div>

          <div class="col-lg-3 col-6 text-center">
            <span data-purecounter-start="0" data-purecounter-end="421" data-purecounter-duration="1" class="purecounter"></span>
            <p>{{ __('sentence.projectss') }}</p>
          </div>

          <div class="col-lg-3 col-6 text-center">
            <span data-purecounter-start="0" data-purecounter-end="1364" data-purecounter-duration="1" class="purecounter"></span>
            <p>{{ __('sentence.hoursofsupport') }}</p>
          </div>

          <div class="col-lg-3 col-6 text-center">
            <span data-purecounter-start="0" data-purecounter-end="42" data-purecounter-duration="1" class="purecounter"></span>
            <p>{{ __('sentence.hardworker') }}</p>
          </div>

        </div>

      </div>
    </section><!-- End Why Us Section -->
    <section id="portfolio" class="portfolio section-bg">
      <div class="container" data-aos="fade-up">
        <header class="section-header">
          <h3 class="section-title">{{ __('sentence.protofolio') }}</h3>
        </header>
        <div class="row" data-aos="fade-up" data-aos-delay="100">
          <div class="col-lg-12">
            <ul id="portfolio-flters">
              <li data-filter=".filter-Catalogue">{{ __('sentence.Catalogue') }}</li>
              <li data-filter=".filter-Decoration">{{ __('sentence.Decoration') }}</li>
              <li data-filter=".filter-Logo">{{ __('sentence.Logo') }}</li>
              
              <li data-filter=".filter-Plateform">{{ __('sentence.Plateform') }}</li>
              <li data-filter=".filter-ITServices">{{ __('sentence.ITServices') }}</li>
            </ul>
          </div>
        </div>

        <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">

          <div class="col-lg-4 col-md-6 portfolio-item filter-Catalogue">
            <div class="portfolio-wrap">
              <img src="{{ asset('/img/portfolio/Catalogue/Catalogue.jpeg') }}" class="img-fluid" alt="étiquetage By Talab Now">
              <div class="portfolio-info">
                <h4><a>étiquetage Catalogue</a></h4>
                <p>Packing</p>
                <div>
                  <a href="{{ asset('/img/portfolio/Catalogue/Catalogue.jpeg') }}" class="portfolio-lightbox link-preview" data-gallery="portfolioGallery" title="étiquetage Catalogue By Talab Now"><i class="bi bi-eye"></i></a>
                  <a href="#contact" class="link-details" title="Get Service"><i class="bi bi-bag-plus-fill"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-Catalogue">
            <div class="portfolio-wrap">
              <img src="{{ asset('/img/portfolio/Catalogue/Catalogue1.jpeg') }}" class="img-fluid" alt="Menu Snack Catalogue By Talab Now">
              <div class="portfolio-info">
                <h4><a>Menu Snack Catalogue</a></h4>
                <p>Packing</p>
                <div>
                  <a href="{{ asset('/img/portfolio/Catalogue/Catalogue1.jpeg') }}" class="portfolio-lightbox link-preview" data-gallery="portfolioGallery" title="Menu Snack Catalogue By Talab Now"><i class="bi bi-eye"></i></a>
                  <a href="#contact" class="link-details" title="Get Service"><i class="bi bi-bag-plus-fill"></i></a>
                </div>
              </div>
            </div>
          </div>

		<div class="col-lg-4 col-md-6 portfolio-item filter-Catalogue">
            <div class="portfolio-wrap">
              <img src="{{ asset('/img/portfolio/Catalogue/Catalogue2.jpeg') }}" class="img-fluid" alt="Menu Snack Catalogue By Talab Now">
              <div class="portfolio-info">
                <h4><a>Menu Snack Catalogue</a></h4>
                <p>Packing</p>
                <div>
                  <a href="{{ asset('/img/portfolio/Catalogue/Catalogue2.jpeg') }}" class="portfolio-lightbox link-preview" data-gallery="portfolioGallery" title="Menu Snack Catalogue By Talab Now"><i class="bi bi-eye"></i></a>
                  <a href="#contact" class="link-details" title="Get Service"><i class="bi bi-bag-plus-fill"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-Catalogue">
            <div class="portfolio-wrap">
              <img src="{{ asset('/img/portfolio/Catalogue/Catalogue3.jpeg') }}" class="img-fluid" alt="Sachets avec des stickers 🎟 By Talab Now">
              <div class="portfolio-info">
                <h4><a>Sachets avec des stickers 🎟</a></h4>
                <p>Print</p>
                <div>
                  <a href="{{ asset('/img/portfolio/Catalogue/Catalogue3.jpeg') }}" class="portfolio-lightbox link-preview" data-gallery="portfolioGallery" title="Sachets avec des stickers 🎟 By Talab Now"><i class="bi bi-eye"></i></a>
                  <a href="#contact" class="link-details" title="Get Services"><i class="bi bi-bag-plus-fill"></i></a>
                </div>
              </div>
            </div>
          </div>

		<div class="col-lg-4 col-md-6 portfolio-item filter-Catalogue">
            <div class="portfolio-wrap">
              <img src="{{ asset('/img/portfolio/Catalogue/Catalogue4.jpeg') }}" class="img-fluid" alt="Sachets avec des stickers 🎟 By Talab Now">
              <div class="portfolio-info">
                <h4><a>Sachets avec des stickers 🎟</a></h4>
                <p>Print</p>
                <div>
                  <a href="{{ asset('/img/portfolio/Catalogue/Catalogue4.jpeg') }}" data-gallery="portfolioGallery" title="Sachets avec des stickers 🎟 By Talab Now" class="portfolio-lightbox link-preview"><i class="bi bi-eye"></i></a>
                  <a href="#contact" class="link-details" title="Get Services"><i class="bi bi-bag-plus-fill"></i></a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 portfolio-item filter-Catalogue">
            <div class="portfolio-wrap">
              <img src="{{ asset('/img/portfolio/Catalogue/Catalogue5.jpeg') }}" class="img-fluid" alt="Square Carte Visite 🎴 By Talab Now">
              <div class="portfolio-info">
                <h4><a>Square Carte Visite 🎴</a></h4>
                <p>Print</p>
                <div>
                  <a href="{{ asset('/img/portfolio/Catalogue/Catalogue5.jpeg') }}" data-gallery="portfolioGallery" title="Square Carte Visite 🎴 By Talab Now" class="portfolio-lightbox link-preview"><i class="bi bi-eye"></i></a>
                  <a href="#contact" class="link-details" title="Get Service"><i class="bi bi-bag-plus-fill"></i></a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 portfolio-item filter-Catalogue">
            <div class="portfolio-wrap">
              <img src="{{ asset('/img/portfolio/Catalogue/Catalogue6.jpeg') }}" class="img-fluid" alt="Square Carte Visite 🎴 By Talab Now">
              <div class="portfolio-info">
                <h4><a>Square Carte Visite 🎴</a></h4>
                <p>Print</p>
                <div>
                  <a href="{{ asset('/img/portfolio/Catalogue/Catalogue6.jpeg') }}" data-gallery="portfolioGallery" title="Square Carte Visite 🎴 By Talab Now" class="portfolio-lightbox link-preview"><i class="bi bi-eye"></i></a>
                  <a href="#contact" class="link-details" title="Get Service"><i class="bi bi-bag-plus-fill"></i></a>
                </div>
              </div>
            </div>
          </div>
<div class="col-lg-4 col-md-6 portfolio-item filter-Catalogue">
            <div class="portfolio-wrap">
              <img src="{{ asset('/img/portfolio/Catalogue/Catalogue7.jpeg') }}" class="img-fluid" alt="Conception des Verres emporté 🔥 By Talab Now">
              <div class="portfolio-info">
                <h4><a>Conception 🔥</a></h4>
                <p>Verres emporté</p>
                <div>
                  <a href="{{ asset('/img/portfolio/Catalogue/Catalogue7.jpeg') }}" data-gallery="portfolioGallery" title="Conception des Verres emporté 🔥 By Talab Now" class="portfolio-lightbox link-preview"><i class="bi bi-eye"></i></a>
                  <a href="#contact" class="link-details" title="Get Service"><i class="bi bi-bag-plus-fill"></i></a>
                </div>
              </div>
            </div>
          </div>
<div class="col-lg-4 col-md-6 portfolio-item filter-Catalogue">
            <div class="portfolio-wrap">
              <img src="{{ asset('/img/portfolio/Catalogue/Catalogue8.jpeg') }}" class="img-fluid" alt="Banner Style 3D Catalogue By Talab Now">
              <div class="portfolio-info">
                <h4><a>Banner Style 3D Catalogue</a></h4>
                <p>Art Design</p>
                <div>
                  <a href="{{ asset('/img/portfolio/Catalogue/Catalogue8.jpeg') }}" data-gallery="portfolioGallery" title="Banner Style 3D Catalogue By Talab Now" class="portfolio-lightbox link-preview"><i class="bi bi-eye"></i></a>
                  <a href="#contact" class="link-details" title="Get Service"><i class="bi bi-bag-plus-fill"></i></a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 portfolio-item filter-Catalogue">
            <div class="portfolio-wrap">
              <img src="{{ asset('/img/portfolio/Catalogue/Catalogue9.jpeg') }}" class="img-fluid" alt="Banner Style 3D Catalogue By Talab Now">
              <div class="portfolio-info">
                <h4><a>Banner Style 3D Catalogue</a></h4>
                <p>Art Design</p>
                <div>
                  <a href="{{ asset('/img/portfolio/Catalogue/Catalogue9.jpeg') }}" data-gallery="portfolioGallery" title="Banner Style 3D Catalogue By Talab Now" class="portfolio-lightbox link-preview"><i class="bi bi-eye"></i></a>
                  <a href="#contact" class="link-details" title="Get Service"><i class="bi bi-bag-plus-fill"></i></a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 portfolio-item filter-Catalogue">
            <div class="portfolio-wrap">
              <img src="{{ asset('/img/portfolio/Catalogue/Catalogue10.jpeg') }}" class="img-fluid" alt="Conception des Verres emporté 🔥 By Talab Now">
              <div class="portfolio-info">
                <h4><a>Conception 🔥</a></h4>
                <p>Verres emporté</p>
                <div>
                  <a href="{{ asset('/img/portfolio/Catalogue/Catalogue10.jpeg') }}" data-gallery="portfolioGallery" title="Conception des Verres emporté 🔥 By Talab Now" class="portfolio-lightbox link-preview"><i class="bi bi-eye"></i></a>
                  <a href="#contact" class="link-details" title="Get Service"><i class="bi bi-bag-plus-fill"></i></a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 portfolio-item filter-Catalogue">
            <div class="portfolio-wrap">
              <img src="{{ asset('/img/portfolio/Catalogue/Catalogue11.jpeg') }}" class="img-fluid" alt="Banner Style 3D Catalogue By Talab Now">
              <div class="portfolio-info">
                <h4><a>Banner Style 3D Catalogue</a></h4>
                <p>Art Design</p>
                <div>
                  <a href="{{ asset('/img/portfolio/Catalogue/Catalogue11.jpeg') }}" data-gallery="portfolioGallery" title="Banner Style 3D Catalogue By Talab Now" class="portfolio-lightbox link-preview"><i class="bi bi-eye"></i></a>
                  <a href="#contact" class="link-details" title="Get Service"><i class="bi bi-bag-plus-fill"></i></a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 portfolio-item filter-Catalogue">
            <div class="portfolio-wrap">
              <img src="{{ asset('/img/portfolio/Catalogue/Catalogue12.jpeg') }}" class="img-fluid" alt="Banner Style 3D Catalogue By Talab Now">
              <div class="portfolio-info">
                <h4><a>Banner Style 3D Catalogue</a></h4>
                <p>Art Design</p>
                <div>
                  <a href="{{ asset('/img/portfolio/Catalogue/Catalogue12.jpeg') }}" data-gallery="portfolioGallery" title="Banner Style 3D Catalogue By Talab Now" class="portfolio-lightbox link-preview"><i class="bi bi-eye"></i></a>
                  <a href="#contact" class="link-details" title="Get Service"><i class="bi bi-bag-plus-fill"></i></a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 portfolio-item filter-Catalogue">
            <div class="portfolio-wrap">
              <img src="{{ asset('/img/portfolio/Catalogue/Catalogue13.jpeg') }}" class="img-fluid" alt="Banner Style 3D Catalogue By Talab Now">
              <div class="portfolio-info">
                <h4><a>Banner Style 3D Catalogue</a></h4>
                <p>Art Design</p>
                <div>
                  <a href="{{ asset('/img/portfolio/Catalogue/Catalogue13.jpeg') }}" data-gallery="portfolioGallery" title="Banner Style 3D Catalogue By Talab Now" class="portfolio-lightbox link-preview"><i class="bi bi-eye"></i></a>
                  <a href="#contact" class="link-details" title="Get Service"><i class="bi bi-bag-plus-fill"></i></a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 portfolio-item filter-Catalogue">
            <div class="portfolio-wrap">
              <img src="{{ asset('/img/portfolio/Catalogue/Catalogue14.jpeg') }}" class="img-fluid" alt="Banner Style 3D Catalogue By Talab Now">
              <div class="portfolio-info">
                <h4><a>Banner Style 3D Catalogue</a></h4>
                <p>Art Design</p>
                <div>
                  <a href="{{ asset('/img/portfolio/Catalogue/Catalogue14.jpeg') }}" data-gallery="portfolioGallery" title="Banner Style 3D Catalogue By Talab Now" class="portfolio-lightbox link-preview"><i class="bi bi-eye"></i></a>
                  <a href="#contact" class="link-details" title="Get Service"><i class="bi bi-bag-plus-fill"></i></a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 portfolio-item filter-Catalogue">
            <div class="portfolio-wrap">
              <img src="{{ asset('/img/portfolio/Catalogue/Catalogue15.jpeg') }}" class="img-fluid" alt="Banner Style 3D Catalogue By Talab Now">
              <div class="portfolio-info">
                <h4><a>Banner Style 3D Catalogue</a></h4>
                <p>Art Design</p>
                <div>
                  <a href="{{ asset('/img/portfolio/Catalogue/Catalogue15.jpeg') }}" data-gallery="portfolioGallery" title="Banner Style 3D Catalogue By Talab Now" class="portfolio-lightbox link-preview"><i class="bi bi-eye"></i></a>
                  <a href="#contact" class="link-details" title="Get Service"><i class="bi bi-bag-plus-fill"></i></a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 portfolio-item filter-Catalogue">
            <div class="portfolio-wrap">
              <img src="{{ asset('/img/portfolio/Catalogue/Catalogue16.jpeg') }}" class="img-fluid" alt="Private carte visite 🚨 By Talab Now">
              <div class="portfolio-info">
                <h4><a>Private carte visite 🚨</a></h4>
                <p>Print</p>
                <div>
                  <a href="{{ asset('/img/portfolio/Catalogue/Catalogue16.jpeg') }}" data-gallery="portfolioGallery" title="Private carte visite 🚨 By Talab Now" class="portfolio-lightbox link-preview"><i class="bi bi-eye"></i></a>
                  <a href="#contact" class="link-details" title="Get Service"><i class="bi bi-bag-plus-fill"></i></a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 portfolio-item filter-Catalogue">
            <div class="portfolio-wrap">
              <img src="{{ asset('/img/portfolio/Catalogue/Catalogue17.jpeg') }}" class="img-fluid" alt="Private carte visite 🚨 By Talab Now">
              <div class="portfolio-info">
                <h4><a>Private carte visite 🚨</a></h4>
                <p>Print</p>
                <div>
                  <a href="{{ asset('/img/portfolio/Catalogue/Catalogue17.jpeg') }}" data-gallery="portfolioGallery" title="Private carte visite 🚨 By Talab Now" class="portfolio-lightbox link-preview"><i class="bi bi-eye"></i></a>
                  <a href="#contact" class="link-details" title="Get Service"><i class="bi bi-bag-plus-fill"></i></a>
                </div>
              </div>
            </div>
          </div>

<div class="col-lg-4 col-md-6 portfolio-item filter-Catalogue">
            <div class="portfolio-wrap">
              <img src="{{ asset('/img/portfolio/Catalogue/Catalogue18.jpeg') }}" class="img-fluid" alt="Get Service">
              <div class="portfolio-info">
                <h4><a>Pack Entreprise Catalogue</a></h4>
                <p>Screen Printing</p>
                <div>
                  <a href="{{ asset('/img/portfolio/Catalogue/Catalogue18.jpeg') }}" class="portfolio-lightbox link-preview" data-gallery="portfolioGallery" title="Get Service"><i class="bi bi-eye"></i></a>
                  <a href="#contact" class="link-details" title="Get Service"><i class="bi bi-bag-plus-fill"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-Catalogue">
            <div class="portfolio-wrap">
              <img src="{{ asset('/img/portfolio/Catalogue/Catalogue19.jpeg') }}" class="img-fluid" alt="Get Service">
              <div class="portfolio-info">
                <h4><a>Pack Entreprise Catalogue</a></h4>
                <p>Screen Printing</p>
                <div>
                  <a href="{{ asset('/img/portfolio/Catalogue/Catalogue19.jpeg') }}" class="portfolio-lightbox link-preview" data-gallery="portfolioGallery" title="Get Service"><i class="bi bi-eye"></i></a>
                  <a href="#contact" class="link-details" title="Get Service"><i class="bi bi-bag-plus-fill"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-Catalogue">
            <div class="portfolio-wrap">
              <img src="{{ asset('/img/portfolio/Catalogue/Catalogue24.jpeg') }}" class="img-fluid" alt="Get Service">
              <div class="portfolio-info">
                <h4><a>Pack Entreprise Catalogue</a></h4>
                <p>Screen Printing</p>
                <div>
                  <a href="{{ asset('/img/portfolio/Catalogue/Catalogue24.jpeg') }}" class="portfolio-lightbox link-preview" data-gallery="portfolioGallery" title="Get Service"><i class="bi bi-eye"></i></a>
                  <a href="#contact" class="link-details" title="Get Service"><i class="bi bi-bag-plus-fill"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-Catalogue">
            <div class="portfolio-wrap">
              <img src="{{ asset('/img/portfolio/Catalogue/Catalogue26.jpeg') }}" class="img-fluid" alt="Get Service">
              <div class="portfolio-info">
                <h4><a>Pack Entreprise Catalogue</a></h4>
                <p>Screen Printing</p>
                <div>
                  <a href="{{ asset('/img/portfolio/Catalogue/Catalogue26.jpeg') }}" class="portfolio-lightbox link-preview" data-gallery="portfolioGallery" title="Get Service"><i class="bi bi-eye"></i></a>
                  <a href="#contact" class="link-details" title="Get Service"><i class="bi bi-bag-plus-fill"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-Catalogue">
            <div class="portfolio-wrap">
              <img src="{{ asset('/img/portfolio/Catalogue/Catalogue27.jpeg') }}" class="img-fluid" alt="Get Service">
              <div class="portfolio-info">
                <h4><a>Pack Entreprise Catalogue</a></h4>
                <p>Screen Printing</p>
                <div>
                  <a href="{{ asset('/img/portfolio/Catalogue/Catalogue27.jpeg') }}" class="portfolio-lightbox link-preview" data-gallery="portfolioGallery" title="Get Service"><i class="bi bi-eye"></i></a>
                  <a href="#contact" class="link-details" title="Get Service"><i class="bi bi-bag-plus-fill"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-Catalogue">
            <div class="portfolio-wrap">
              <img src="{{ asset('/img/portfolio/Catalogue/Catalogue28.jpeg') }}" class="img-fluid" alt="Get Service">
              <div class="portfolio-info">
                <h4><a>Pack Entreprise Catalogue</a></h4>
                <p>Screen Printing</p>
                <div>
                  <a href="{{ asset('/img/portfolio/Catalogue/Catalogue28.jpeg') }}" class="portfolio-lightbox link-preview" data-gallery="portfolioGallery" title="Get Service"><i class="bi bi-eye"></i></a>
                  <a href="#contact" class="link-details" title="Get Service"><i class="bi bi-bag-plus-fill"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-Catalogue">
            <div class="portfolio-wrap">
              <img src="{{ asset('/img/portfolio/Catalogue/Catalogue29.jpeg') }}" class="img-fluid" alt="Get Service">
              <div class="portfolio-info">
                <h4><a>Pack Entreprise Catalogue</a></h4>
                <p>Screen Printing</p>
                <div>
                  <a href="{{ asset('/img/portfolio/Catalogue/Catalogue29.jpeg') }}" class="portfolio-lightbox link-preview" data-gallery="portfolioGallery" title="Get Service"><i class="bi bi-eye"></i></a>
                  <a href="#contact" class="link-details" title="Get Service"><i class="bi bi-bag-plus-fill"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-Catalogue">
            <div class="portfolio-wrap">
              <img src="{{ asset('/img/portfolio/Catalogue/Catalogue30.jpeg') }}" class="img-fluid" alt="Get Service">
              <div class="portfolio-info">
                <h4><a>Pack Entreprise Catalogue</a></h4>
                <p>Screen Printing</p>
                <div>
                  <a href="{{ asset('/img/portfolio/Catalogue/Catalogue30.jpeg') }}" class="portfolio-lightbox link-preview" data-gallery="portfolioGallery" title="Get Service"><i class="bi bi-eye"></i></a>
                  <a href="#contact" class="link-details" title="Get Service"><i class="bi bi-bag-plus-fill"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-Catalogue">
            <div class="portfolio-wrap">
              <img src="{{ asset('/img/portfolio/Catalogue/Catalogue31.jpeg') }}" class="img-fluid" alt="Get Service">
              <div class="portfolio-info">
                <h4><a>Pack Entreprise Catalogue</a></h4>
                <p>Screen Printing</p>
                <div>
                  <a href="{{ asset('/img/portfolio/Catalogue/Catalogue31.jpeg') }}" class="portfolio-lightbox link-preview" data-gallery="portfolioGallery" title="Get Service"><i class="bi bi-eye"></i></a>
                  <a href="#contact" class="link-details" title="Get Service"><i class="bi bi-bag-plus-fill"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-Catalogue">
            <div class="portfolio-wrap">
              <img src="{{ asset('/img/portfolio/Catalogue/Catalogue32.jpeg') }}" class="img-fluid" alt="Get Service">
              <div class="portfolio-info">
                <h4><a>Pack Entreprise Catalogue</a></h4>
                <p>Screen Printing</p>
                <div>
                  <a href="{{ asset('/img/portfolio/Catalogue/Catalogue32.jpeg') }}" class="portfolio-lightbox link-preview" data-gallery="portfolioGallery" title="Get Service"><i class="bi bi-eye"></i></a>
                  <a href="#contact" class="link-details" title="Get Service"><i class="bi bi-bag-plus-fill"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-Catalogue">
            <div class="portfolio-wrap">
              <img src="{{ asset('/img/portfolio/Catalogue/Catalogue33.jpeg') }}" class="img-fluid" alt="Get Service">
              <div class="portfolio-info">
                <h4><a>Pack Entreprise Catalogue</a></h4>
                <p>Screen Printing</p>
                <div>
                  <a href="{{ asset('/img/portfolio/Catalogue/Catalogue33.jpeg') }}" class="portfolio-lightbox link-preview" data-gallery="portfolioGallery" title="Get Service"><i class="bi bi-eye"></i></a>
                  <a href="#contact" class="link-details" title="Get Service"><i class="bi bi-bag-plus-fill"></i></a>
                </div>
              </div>
            </div>
          </div>

          	<div class="col-lg-4 col-md-6 portfolio-item filter-Logo">
            <div class="portfolio-wrap">
              <img src="{{ asset('/img/portfolio/Logo/Logo1.jpg') }}" class="img-fluid" alt="Sahara Fish By Talab Now">
              <div class="portfolio-info">
                <h4><a>Sahara Fish</a></h4>
                <p>Logo</p>
                <div>
                  <a href="{{ asset('/img/portfolio/Logo/Logo1.jpg') }}" class="portfolio-lightbox link-preview" data-gallery="portfolioGallery" title="Sahara Fish By Talab Now"><i class="bi bi-eye"></i></a>
                  <a href="#" class="link-details" title="Get Service"><i class="bi bi-bag-plus-fill"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-Logo">
            <div class="portfolio-wrap">
              <img src="{{ asset('/img/portfolio/Logo/Logo2.jpg') }}" class="img-fluid" alt="Firdaous Bio Logo By Talab Now">
              <div class="portfolio-info">
                <h4><a>Firdaous Bio</a></h4>
                <p>Logo</p>
                <div>
                  <a href="{{ asset('/img/portfolio/Logo/Logo2.jpg') }}" class="portfolio-lightbox link-preview" data-gallery="portfolioGallery" title="Firdaous Bio Logo By Talab Now"><i class="bi bi-eye"></i></a>
                  <a href="#" class="link-details" title="Get Service"><i class="bi bi-bag-plus-fill"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-Logo">
            <div class="portfolio-wrap">
              <img src="{{ asset('/img/portfolio/Logo/Logo3.jpg') }}" class="img-fluid" alt="ParaSara Logo By Talab Now">
              <div class="portfolio-info">
                <h4><a>ParaSara Logo</a></h4>
                <p>Logo</p>
                <div>
                  <a href="{{ asset('/img/portfolio/Logo/Logo3.jpg') }}" class="portfolio-lightbox link-preview" data-gallery="portfolioGallery" title="ParaSara Logo By Talab Now"><i class="bi bi-eye"></i></a>
                  <a href="#" class="link-details" title="Get Service"><i class="bi bi-bag-plus-fill"></i></a>
                </div>
              </div>
            </div>
          </div>

         
     	</div>
    </section><!-- End Portfolio Section -->
    <section id="testimonials" class="section-bg">
      <div class="container" data-aso="zoom-in">
        <header class="section-header">
          <h3>{{ __('sentence.Testimonials') }}</h3>
        </header>
        <div class="row justify-content-center">
          <div class="col-lg-8">
            <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
              <div class="swiper-wrapper">
                <div class="swiper-slide">
                  <div class="testimonial-item">
                    <img src="{{ asset('/img/testimonial-1.jpg') }}" class="testimonial-img" alt="">
                    <h3>Walid Loultiti</h3>
                    <h4>Ceo &amp; Founder</h4>
                    <p>
                      great work !
                    </p>
                  </div>
                </div>
                <div class="swiper-slide">
                  <div class="testimonial-item">
                    <img src="{{ asset('/img/testimonial-2.jpg') }}" class="testimonial-img" alt="">
                    <h3>Hamza Assaidi</h3>
                    <h4>Designer</h4>
                    <p>
                      We have the Quality , Trust for Us . peace and love !
                    </p>
                  </div>
                </div><!-- End testimonial item -->

                <div class="swiper-slide">
                  <div class="testimonial-item">
                    <img src="{{ asset('/img/testimonial-3.jpg') }}" class="testimonial-img" alt="">
                    <h3>Fouad Lazkri</h3>
                    <h4>Store Owner</h4>
                    <p>
                      Soon ... We will open it !
                    </p>
                  </div>
                </div><!-- End testimonial item -->
                <div class="swiper-slide">
                  <div class="testimonial-item">
                    <img src="{{ asset('/img/testimonial-4.jpg') }}" class="testimonial-img" alt="">
                    <h3>Hicham Mellali</h3>
                    <h4>Responsable Commercial</h4>
                    <p>
                      Trust no one who don't show the catalogue.
                    </p>
                  </div>
                </div><!-- End testimonial item -->

                <div class="swiper-slide">
                  <div class="testimonial-item">
                    <img src="{{ asset('/img/testimonial-5.jpg') }}" class="testimonial-img" alt="">
                    <h3>Farhan Abennay</h3>
                    <h4>Entrepreneur</h4>
                    <p>
                      he always has wit ! Peace #TalabNow
                    </p>
                  </div>
                </div><!-- End testimonial item -->

              </div>
              <div class="swiper-pagination"></div>
            </div>

          </div>
        </div>

      </div>
    </section>

    <section id="team">
      <div class="container" data-aos="fade-up">
        <div class="section-header">
          <h3>{{ __('sentence.Team') }}</h3>
          <p>{{ __('sentence.Team_p') }}</p>
        </div>
        <div class="row justify-content-md-center">
          <div class="col-lg-3 col-md-6" data-aos="zoom-out" data-aos-delay="100">
            <div class="member">
              <center><img src="{{ asset('/img/team-1.jpg') }}" class="img-fluid" alt=""></center>
              <div class="member-info">
                <div class="member-info-content">
                  <h4>Mohamed Amine Amri</h4>
                  <span>{{ __('sentence.Ceo_span') }}</span>
                  <div class="social">
                    <a href="https://twitter.com/amineamri"><i class="bi bi-twitter"></i></a>
                    <a href="https://www.facebook.com/mohamedamineamriii/"><i class="bi bi-facebook"></i></a>
                    <a href="https://www.instagram.com/mineamri/"><i class="bi bi-instagram"></i></a>
                    <a href="https://www.linkedin.com/in/amriservices/"><i class="bi bi-bag-plus-filledin"></i></a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6" data-aos="zoom-out" data-aos-delay="200">
            <div class="member">
              <center><img src="{{ asset('/img/team-2.jpg') }}" class="img-fluid" alt=""></center>
              <div class="member-info">
                <div class="member-info-content">
                  <h4>El Mahdi Ouhssain</h4>
                  <span>{{ __('sentence.Ceo_dev') }}</span>
                  <div class="social">
                    <a href=""><i class="bi bi-twitter"></i></a>
                    <a href="https://www.facebook.com/elmahdi.ouhssain"><i class="bi bi-facebook"></i></a>
                    <a href="https://www.instagram.com/elmahdi.ouhssain/"><i class="bi bi-instagram"></i></a>
                    <a href="https://www.linkedin.com/in/elmahdi-ouhssain/"><i class="bi bi-bag-plus-filledin"></i></a>
                  </div>
                </div>
              </div>
            </div>
          </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Team Section -->

    <section id="clients" class="section-bg">

      <div class="container" data-aos="fade-up">
        <div class="section-header">
          <h3>{{ __('sentence.Our_Clients') }}</h3>
          <p>{{ __('sentence.clien_p') }}</p>
        </div>

        <div class="row g-0 clients-wrap clearfix" data-aos="zoom-in" data-aos-delay="100">
          <div class="col-lg-3 col-md-4 col-xs-6">
            <div class="client-logo">
              <img src="{{ asset('/img/clients/client-1.png') }}" class="img-fluid" alt="">
            </div>
          </div>
          <div class="col-lg-3 col-md-4 col-xs-6">
            <div class="client-logo">
              <img src="{{ asset('/img/clients/client-2.png') }}" class="img-fluid" alt="">
            </div>
          </div>
          <div class="col-lg-3 col-md-4 col-xs-6">
            <div class="client-logo">
              <img src="{{ asset('/img/clients/client-3.png') }}" class="img-fluid" alt="">
            </div>
          </div>

          <div class="col-lg-3 col-md-4 col-xs-6">
            <div class="client-logo">
              <img src="{{ asset('/img/clients/client-4.png') }}" class="img-fluid" alt="">
            </div>
          </div>

          <div class="col-lg-3 col-md-4 col-xs-6">
            <div class="client-logo">
              <img src="{{ asset('/img/clients/client-5.png') }}" class="img-fluid" alt="">
            </div>
          </div>

          <div class="col-lg-3 col-md-4 col-xs-6">
            <div class="client-logo">
              <img src="{{ asset('/img/clients/client-6.png') }}" class="img-fluid" alt="">
            </div>
          </div>

          <div class="col-lg-3 col-md-4 col-xs-6">
            <div class="client-logo">
              <img src="{{ asset('/img/clients/client-7.png') }}" class="img-fluid" alt="">
            </div>
          </div>

          <div class="col-lg-3 col-md-4 col-xs-6">
            <div class="client-logo">
              <img src="{{ asset('/img/clients/client-8.png') }}" class="img-fluid" alt="">
            </div>
          </div>

        </div>
      </div>

    </section><!-- End Clients Section -->
    <section id="contact">
      <div class="container-fluid" data-aos="fade-up">

        <div class="section-header">
          <h3>{{ __('sentence.Contact_Us') }}</h3>
        </div>
        <div class="row">
          <div class="col-lg-6">
            <div class="map mb-4 mb-lg-0">
              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3441.0458082597697!2d-9.582416985478408!3d30.40644218175205!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xdb3b652c625244b%3A0x28bf34334e46464d!2sRue%20Oued%20Ziz%2C%20Agadir%2080000%2C%20Morocco!5e0!3m2!1sen!2sus!4v1636239777888!5m2!1sen!2sus" frameborder="0" style="border:0; width: 100%; height: 340px;" allowfullscreen loading="lazy"></iframe>
            </div>
          </div>

          <div class="col-lg-6">
            <div class="form">
                <form method="POST" class="contactform"  action="{{url('/')}}">
                  @csrf
                  <center>
                    @include('flash-message')
                    </center>
                <div class="row">
                  <div class="form-group col-lg-6">
                    <input type="text" name="fullname" class="form-control" id="fullname" placeholder="{{ __('sentence.Fname') }}" required>
                  </div>
                  <div class="form-group col-lg-6 mt-3 mt-lg-0">
                    <input type="email" class="form-control" name="email" id="email" placeholder="{{ __('sentence.Your_Email') }}" required>
                  </div>
                </div>
                <div class="form-group mt-3">
                  <input type="text" class="form-control" name="subject" id="subject" placeholder="{{ __('sentence.Subject') }}" required>
                </div>
                <div class="form-group mt-3">
                  <textarea class="form-control" name="message" rows="5" placeholder="{{ __('sentence.Message') }}" required></textarea>
                </div><br>
                <div class="d-grid gap-2">
                  <button type="submit" class="btn btn-primary"><i class="bi bi-envelope"></i> {{ __('sentence.Send') }}</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </section>
  </main>
  @endsection
