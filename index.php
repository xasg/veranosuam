<?php
error_reporting (E_ALL);
// require('controller/conect.php');
include_once('model/database.php'); 
$lugares = view_lugares();
$orgs = view_orgs();
$carreras = view_carreras();
$cat_carreras = view_cat_carreras();
?>

<!doctype html>
<html class="no-js" lang="zxx">
   <head>
      <meta charset="utf-8">
      <meta http-equiv="x-ua-compatible" content="ie=edge">
      <title> Estancias Profesionales de Verano UAMC</title>
      <meta name="description" content="">
      <meta name="viewport" content="width=device-width, initial-scale=1">

      <!-- Place favicon.ico in the root directory -->
      <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.png">

      <!-- CSS here -->
      <link rel="stylesheet" href="assets/app/css/bootstrap.min.css">
      <link rel="stylesheet" href="assets/app/css/meanmenu.min.css">
      <link rel="stylesheet" href="assets/app/css/animate.css">
      <link rel="stylesheet" href="assets/app/css/swiper-bundle.min.css">
      <link rel="stylesheet" href="assets/app/css/slick.css">
      <link rel="stylesheet" href="assets/app/css/backtotop.css">
      <link rel="stylesheet" href="assets/app/css/magnific-popup.css">
      <link rel="stylesheet" href="assets/app/css/fontawesome-pro.css">
      <link rel="stylesheet" href="assets/app/css/spacing.css">
      <link rel="stylesheet" href="assets/app/css/main.css">
   </head>
   <body>

      <!--[if lte IE 9]>
      <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
      <![endif]-->

      <!-- Offcanvas area start -->
      <div class="fix">
         <div class="offcanvas__info">
            <div class="offcanvas__wrapper">
               <div class="offcanvas__content">
                  <div class="offcanvas__top mb-40 d-flex justify-content-between align-items-center">
                     <div class="offcanvas__logo">
                        <a href="index.html">
                        <img src="assets/img/logo/logo.png" alt="logo not found">
                        </a>
                     </div>
                     <div class="offcanvas__close">
                        <button>
                           <i class="fal fa-times"></i>
                        </button>
                     </div>
                  </div>
                  
                  <div class="mobile-menu fix mb-40"></div>
                  <div class="offcanvas__contact mt-30 mb-20">

                     <h4>Contacto</h4>
                     <ul>
                        <li class="d-flex align-items-center">
                           <div class="offcanvas__contact-icon mr-15">
                              <i class="fal fa-map-marker-alt"></i>
                           </div>
                           <div class="offcanvas__contact-text">
                              <a target="_blank" href="https://www.google.com/maps/place/Universidad+Aut%C3%B3noma+Metropolitana+Unidad+Cuajimalpa/@19.3520841,-99.2826256,15z/data=!4m6!3m5!1s0x85d2074a4aea180d:0x1151e61121fd01f3!8m2!3d19.3520841!4d-99.2826256!16s%2Fm%2F03qdkrv" >UAMC</a>
                           </div>
                        </li>
                        <li class="d-flex align-items-center">
                           <div class="offcanvas__contact-icon mr-15">
                              <i class="far fa-phone"></i>
                           </div>
                           <div class="offcanvas__contact-text">
                              <a href="tel:55 5814 6509"> 55 5814 6509</a>
                           </div>
                        </li>
                        <li class="d-flex align-items-center">
                           <div class="offcanvas__contact-icon mr-15">
                              <i class="fal fa-envelope"></i>
                           </div>
                           <div class="offcanvas__contact-text">
                              <a href="tel:+012-345-6789"><span class="mailto:enlace.vinculacion@cua.uam.mx">enlace.vinculacion@cua.uam.mx</span></a>
                           </div>
                        </li>
                     </ul>
                  </div>
                  <div class="offcanvas__social">
                     <ul>
                        <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fab fa-youtube"></i></a></li>
                        <li><a href="#"><i class="fab fa-linkedin"></i></a></li>
                     </ul>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <div class="offcanvas__overlay"></div>
      <div class="offcanvas__overlay-white"></div>
      <!-- Offcanvas area start -->
      
      <!-- Header area start -->
      <header>
         <div id="header-sticky" class="header__area-3 header__transparent">
            <div class="container">
               <div class="row align-items-center">
                  <div class="col-xl-2 col-lg-2 col-6">
                     <div class="header__logo">
                        <a href="index.html">
                           <img src="assets/img/logo/logo.png" alt="logo not found">
                        </a>
                     </div>
                  </div>
                  <div class="col-xl-8 col-lg-8 d-none d-lg-block">
                     <div class="menu__main-wrapper-3 d-flex justify-content-end">
                        <div class="main-menu main-menu-3 d-none d-none d-lg-block">
                           <nav id="mobile-menu">
                              <ul>
                                 
                                 <li>
                                    <a href="#">Inicio</a>
                                 </li>
                                 <li>
                                    <a href="#que_son">¿Qué <?php echo ' son?';?></a>
                                 </li>

                                 <li>
                                    <a href="#ors">OR´s</a>
                                 </li>
                                 
                                 <li>
                                    <a href="#participa">Participa</a>
                                 </li>
                                 
                                 <li>
                                    <a href="./contacto.php">Contacto</a>
                                 </li>
                                 
                                 
                                 <li>
                                    <!-- <a href="#participa">Registro</a> -->
                                 </li>
                              </ul>
                           </nav>
                        </div>
                     </div>
                  </div>
                  <div class="col-xl-2 col-lg-2 col-6">
                     <div class="header__right d-flex align-items-center justify-content-end">
                        <div class="header__btn d-none d-xl-block">
                           <a class="border__btn s-3" target="_blank" href="https://www.cua.uam.mx/conoce-la-uam-unidad-cuajimalpa/coordinaciones-administrativas/coordinacion-de-vinculacion/desarrollo-profesional/estancias-profesionales-de-verano/informacion-para-alumnos?/epv">Convocatoria</a>
                        </div>
                        <div class="header__toggle d-xl-none">
                           <a class="sidebar__active" href="javascript:void(0)">
                              <div class="bar-icon">
                                 <span></span>
                                 <span></span>
                                 <span></span>
                              </div>
                           </a>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </header>
      <!-- Header area end -->
      
      <!-- Body main wrapper start -->
      <main>

      <!-- Hero area stat -->
      
      <section class="hero__area hero__hight d-flex align-items-center include__bg p-relative" data-background="assets/img/shape/c.png">
         <div class="hero__cercle">
            <img src="assets/img/shape//cercle.png" alt="image not found">
         </div>
      
         
         <div class="container">
            <div class="hero__main-wrapper">
               <div class="row align-items-center">
                  <div class="col-xl-6 col-lg-6 col-md-6">
                     <div class="hero__content-wrapper">
                        <div class="hero__content mb-60">
         
                           <span class="wow fadeInUp" data-wow-delay=".2s">Participa <span>en</span> las</span>
                           <h2 class="wow fadeInUp" data-wow-delay=".4s"> Estancias Profesionales de Verano</h2>
                           <p class="wow fadeInUp" data-wow-delay=".6s">Experimenta tu primer acercamiento al mundo laboral y 
                           pon en práctica los conocimientos y competencias adquiridas durante tu formación académica.</p>
                        </div>
                        <div class="hero__btn-link wow fadeInUp" data-wow-delay=".8s">
                           <a class="solid__btn" target="_blank" href="https://www.cua.uam.mx/conoce-la-uam-unidad-cuajimalpa/coordinaciones-administrativas/coordinacion-de-vinculacion/desarrollo-profesional/estancias-profesionales-de-verano/informacion-para-alumnos?/epv">Convocatoria</a>
                           <!--<a class="hero__link popup-video" href="https://www.youtube.com/watch?v=fSv6UgCkuTU"> <i class="fa-solid fa-play"></i></a>-->
                        </div>
                     </div>
                  </div>
                  <div class="col-xl-6 col-lg-6 col-md-6">
                     <div class="hero__thumb-wrapper-2 mb-60">
                        <div class="hero__thumb-2 w-img">
                           <img src="assets/img/hero/hero-thumb-2.png" alt="image not found">
                        </div>
                        <div class="hero__shape-7">
                           <img src="assets/img/shape/hero-shape-5.png" alt="image not found">
                        </div>
                        <div class="hero__shape-8">
                           <img src="assets/img/shape/hero-shape-6.png" alt="image not found">
                        </div>
                        <div class="hero__regtangle">
                           <img src="assets/img/shape/rectangle-3.png" alt="">
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- Hero area end -->

      <!-- Brand area start -->
      <div class="brand__area pt-120 pb-120">
         <div class="container">
            <div class="row justify-content-center wow fadeInUp" data-wow-delay=".3s">
               <div class="col-12">
                  <div class="swiper brand__active">
                     <div class="swiper-wrapper">
                        <div class="swiper-slide">
                           <div class="singel__brand">
                              <img src="assets/logos/empresa1.svg" alt="image not found">
                           </div>
                        </div>
                        <div class="swiper-slide">
                           <div class="singel__brand">
                              <img src="assets/logos/empresa2.svg" alt="image not found">
                              <!-- <img src="assets/img/brand/2.png" alt="image not found"> -->
                           </div>
                        </div>
                        <div class="swiper-slide">
                           <div class="singel__brand">
                              <img src="assets/logos/empresa3.svg" alt="image not found">
                              <!-- <img src="assets/img/brand/3.png" alt="image not found"> -->
                           </div>
                        </div>
                        <div class="swiper-slide">
                           <div class="singel__brand">
                              <img src="assets/logos/empresa4.svg" alt="image not found">
                              <!-- <img src="assets/img/brand/4.png" alt="image not found"> -->
                           </div>
                        </div>
                        <div class="swiper-slide">
                           <div class="singel__brand">
                              <img src="assets/logos/empresa5.svg" alt="image not found">
                              <!-- <img src="assets/img/brand/5.png" alt="image not found"> -->
                           </div>
                        </div>
                        <div class="swiper-slide">
                           <div class="singel__brand">
                              <img src="assets/logos/empresa6.svg" alt="image not found">
                              <!-- <img src="assets/img/brand/5.png" alt="image not found"> -->
                           </div>
                        </div>
                        <div class="swiper-slide">
                           <div class="singel__brand">
                              <img src="assets/logos/empresa7.svg" alt="image not found">
                              <!-- <img src="assets/img/brand/5.png" alt="image not found"> -->
                           </div>
                        </div>
                        <div class="swiper-slide">
                           <div class="singel__brand">
                              <img src="assets/logos/empresa8.svg" alt="image not found">
                              <!-- <img src="assets/img/brand/5.png" alt="image not found"> -->
                           </div>
                        </div>
                        <div class="swiper-slide">
                           <div class="singel__brand">
                              <img src="assets/logos/empresa9.svg" alt="image not found">
                              <!-- <img src="assets/img/brand/5.png" alt="image not found"> -->
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- Brand area start -->

      <!-- About area start -->
      <a name="que_son"></a>
      <div class="about__area grey-bg z-index-11 p-relative pt-120 pb-60">
         <div class="about__shape-1">
            <img src="assets/img/shape/about-shape-1.png" alt="image not found">
         </div>
         <div class="about__shape-2">
            <img src="assets/img/shape/about-shape-2.png" alt="image not found">
         </div>
         <div class="about__shape-3">
            <img src="assets/img/shape/rectangle-3.png" alt="image not found">
         </div>
         <div class="about__shape-4">
            <img src="assets/img/shape/rectangle-4.png" alt="image not found">
         </div>
         
         <div class="container">
            <div class="row align-items-center wow fadeInUp" data-wow-delay=".3s">
               <div class="col-xl-6 col-lg-6">
                  <div class="about__thumb-wrapper mb-60">
                     <div class="about__thumb w-img">
                        <img src="assets/img/about/about-thumb.png" alt="image not found">
                     </div>
                  </div>
               </div>
               <div class="col-xl-6 col-lg-6">
                  <div class="about__content-wapper mb-60">
                     <div class="section__title-wrapper mb-40">
                        <span class="section__subtitle-2">
                           <span>¿Qué</span> son?
                        </span>
                        <h2 class="section__title-2">
                           Estancias Profesionales de Verano
                        </h2>
                     </div>
                     <p>Son estancias en las que los alumnos y recién egresados ponen en práctica los conocimientos, 
                        habilidades y competencias adquiridos durante su formación académica y, también, obtienen su primer acercamiento al mundo laboral.</p>
                        <p>El objetivo de las estancias es coadyuvar en el proceso de formación profesional de alumnos de la Unidad Cuajimalpa mediante 
                           la realización de prácticas profesionales y propiciar la inserción de alumnos en Organizaciones Receptoras (OR’s).
                        </p>
                     <div class="about__features-box">
                        <div class="about__features-item">
                           <div class="about__features-icon">
                              <i class="fa-solid fa-check"></i>
                           </div>
                           <div class="about__features-content">
                              <p>Periodo de inscripción</p>
                              <p>– Del 8 de mayo al 9 de junio</p>
                           </div>
                        </div>
                        <div class="about__features-item">
                           <div class="about__features-icon s-2">
                              <i class="fa-solid fa-check"></i>
                           </div>
                           <div class="about__features-content">
                              <p>Adquiere habilidades laborales</p>
                              <!-- <p>– 6 semanas</p> -->
                           </div>
                        </div>
                        <div class="about__features-item">
                           <div class="about__features-icon s-3">
                              <i class="fa-solid fa-check"></i>
                           </div>
                           <div class="about__features-content">
                              <p>Pon en practica tus conocimientos</p>
                              <!-- <p>– 3 mil pesos al final de la estancia</p> -->
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- About area end -->
      


      <!-- Service area start --
      <div class="service__area service__bg z-index-1 pt-120 pb-90" data-background="assets/img/shape/service-pattren.png">
         <div class="container">
            <div class="row">
               <div class="col-12">
                  <div class="section__title-wrapper text-center mb-65">
                     <span class="section__subtitle">
                        <span>What</span> we do
                     </span>
                     <h2 class="section__title">
                        Our SEO Services
                        <span class="down__mark-middle"></span>
                     </h2>
                  </div>
               </div>
            <div class="row wow fadeInUp" data-wow-delay=".3s">
               <div class="col-xl-4 col-lg-6 col-md-6">
                  <div class="service__item mb-30">
                     <div class="service__thumb include__bg" data-background="assets/img/service/service-1.jpg" style="background-image: url(&quot;assets/img/service/service-1.jpg&quot;);"></div>
                     <div class="service__icon transition-3">
                        <svg id="seocxc" xmlns="http://www.w3.org/2000/svg" width="93.573" height="75" viewBox="0 0 93.573 75">
                           <path id="Path_25607" data-name="Path 25607" d="M61.811,4.78A29.074,29.074,0,1,1,40.9,54.057h9.207a6.525,6.525,0,0,0,1.949-.289,22.17,22.17,0,1,0-.206-39.72,6.664,6.664,0,0,0-2.361-.426H40.938A28.955,28.955,0,0,1,61.811,4.78Z" transform="translate(-9.755 -1.14)" fill="#f8d458" fill-rule="evenodd"></path>
                           <path id="Path_25608" data-name="Path 25608" d="M20.081,26.721H11.6V24.475a3.936,3.936,0,0,0-.327-2.01,1.243,1.243,0,0,0-1.074-.426,1.418,1.418,0,0,0-1.241.586,2.955,2.955,0,0,0-.419,1.751,4.362,4.362,0,0,0,.48,2.284A7.073,7.073,0,0,0,11.6,28.518q6.077,3.141,7.653,5.148t1.584,6.465a9.982,9.982,0,0,1-.883,4.782,6.611,6.611,0,0,1-3.389,2.574,15.047,15.047,0,0,1-5.848,1.043,14.852,14.852,0,0,1-6.26-1.2,6.331,6.331,0,0,1-3.389-3.054A13.791,13.791,0,0,1,.267,39v-2H8.75V40.7A4.3,4.3,0,0,0,9.108,42.9a1.463,1.463,0,0,0,1.264.487,1.558,1.558,0,0,0,1.355-.617,3.112,3.112,0,0,0,.442-1.828c0-1.782-.282-2.955-.845-3.5a27.9,27.9,0,0,0-4.272-2.764,42.508,42.508,0,0,1-4.5-2.833A6.643,6.643,0,0,1,.723,29.4,9.549,9.549,0,0,1,0,25.419a9.769,9.769,0,0,1,1.028-5.1A6.7,6.7,0,0,1,4.356,17.8,14.989,14.989,0,0,1,9.9,16.89a16.577,16.577,0,0,1,6.054.99,6.122,6.122,0,0,1,3.313,2.505,11.615,11.615,0,0,1,.815,5.125v1.211ZM52.026,0A32.726,32.726,0,0,1,79.409,50.64L93.573,66.075,83.811,75,70.157,59.976a32.712,32.712,0,0,1-41.266-4.1,33.3,33.3,0,0,1-2.62-2.955H31.1c.122.122.244.251.366.373A29.08,29.08,0,0,0,72.594,12.169h0a29.084,29.084,0,0,0-41.121,0l-.3.3H26.317a31.858,31.858,0,0,1,2.566-2.886A32.619,32.619,0,0,1,52.026,0ZM24.086,17.507H39.735v6.062h-6.5v5.8h6.092V35.12H33.239V41.8h7.112V47.86H24.086V17.507ZM64.552,35.3a56.592,56.592,0,0,1-.251,6.473,6.648,6.648,0,0,1-1.553,3.48A8.328,8.328,0,0,1,59.2,47.677a14.663,14.663,0,0,1-5.2.845,14.959,14.959,0,0,1-5.056-.8,8.322,8.322,0,0,1-3.61-2.383,6.684,6.684,0,0,1-1.63-3.465,57.069,57.069,0,0,1-.259-6.564V30.117a56.593,56.593,0,0,1,.251-6.473,6.708,6.708,0,0,1,1.553-3.48A8.281,8.281,0,0,1,48.8,17.743,14.664,14.664,0,0,1,54,16.9a14.959,14.959,0,0,1,5.056.8,8.322,8.322,0,0,1,3.61,2.383,6.711,6.711,0,0,1,1.63,3.465,57.071,57.071,0,0,1,.259,6.564V35.3ZM55.4,25.335a8.375,8.375,0,0,0-.267-2.7,1.074,1.074,0,0,0-1.089-.586,1.286,1.286,0,0,0-1.074.48,6.06,6.06,0,0,0-.373,2.818V39.514a12.475,12.475,0,0,0,.244,3.259c.16.419.541.617,1.135.617a1.109,1.109,0,0,0,1.173-.708,13.079,13.079,0,0,0,.251-3.389V25.335Z" fill="#3887fe"></path>
                         </svg>
                     </div>
                     <div class="service__content">
                        <h3><a href="service.html">Technical SEO</a></h3>
                        <p>Our SEO Services wtill get you a high-ranking placement in search results.</p>
                     </div>
                     <div class="service__link">
                        <a href="service.html"><i class="fa-regular fa-arrow-right-long"></i></a>
                     </div>
                  </div>
               </div>
               <div class="col-xl-4 col-lg-6 col-md-6">
                  <div class="service__item mb-30">
                     <div class="service__thumb include__bg" data-background="assets/img/service/service-1.jpg" style="background-image: url(&quot;assets/img/service/service-1.jpg&quot;);"></div>
                     <div class="service__icon transition-3">
                        <svg xmlns="http://www.w3.org/2000/svg" width="63.448" height="75" viewBox="0 0 63.448 75">
                           <g id="Group_26741" data-name="Group 26741" transform="translate(-1030 -1643)">
                             <path id="ppc" d="M26.814,0A26.77,26.77,0,0,1,53.352,30.518a25.7,25.7,0,0,1-.763,3.632,1.361,1.361,0,0,1-2.148.714l-2.295-1.569a1.361,1.361,0,0,1-.519-1.52,21.289,21.289,0,0,0,.427-2.441,21.612,21.612,0,0,0,.146-2.545A21.362,21.362,0,1,0,22.359,47.7a1.373,1.373,0,0,1,1.08,1.221l.214,2.783a1.366,1.366,0,0,1-1.715,1.422,26.477,26.477,0,0,1-7.532-2.6A26.794,26.794,0,0,1,26.814,0Z" transform="translate(1029.949 1643)" fill="#3887fe"></path>
                             <path id="ppc-2" data-name="ppc" d="M51.045,74.792a2.2,2.2,0,0,1-1.5.134,2.075,2.075,0,0,1-1.282-.964L42.891,64.7l-5.115,5.743a6.567,6.567,0,0,1-2.3,1.715,3.052,3.052,0,0,1-1.752.2,2.338,2.338,0,0,1-1.52-1.086,4.327,4.327,0,0,1-.568-1.947L29.512,41.577a15.216,15.216,0,1,1,9.2-5.493l23.09,15.8a4.358,4.358,0,0,1,1.4,1.465,2.313,2.313,0,0,1,.177,1.831,2.966,2.966,0,0,1-1.044,1.41,6.457,6.457,0,0,1-2.637,1.135h-.037l-7.5,1.605,5.341,9.3a2.081,2.081,0,0,1,.2,1.581,2.228,2.228,0,0,1-.928,1.288.2.2,0,0,1-.061.037l-5.542,3.2-.122.055ZM28.9,33.643l-.116-1.453V32.1a1.459,1.459,0,0,1,.134-.665,1.55,1.55,0,0,1,.494-.61.97.97,0,0,1,.3-.146,1.483,1.483,0,0,1,.647-.073,1.63,1.63,0,0,1,.61.189,1.068,1.068,0,0,1,.177.11l.555.378a6.915,6.915,0,0,0,.232-1.9v-.647a4.333,4.333,0,0,0-.458-2.014,3.369,3.369,0,0,0-1.361-1.4,4.486,4.486,0,0,0-2.264-.519h-1.3a1.52,1.52,0,0,1-.952-.25.9.9,0,0,1-.311-.751v-.183a.922.922,0,0,1,.238-.684,1.221,1.221,0,0,1,.659-.305,5.2,5.2,0,0,1,.97-.049c.61,0,1.288,0,2.032.049s1.416.073,2.014.122V19.763c-.378-.092-.8-.177-1.276-.262s-.977-.159-1.514-.214c-.25-.031-.507-.049-.769-.061V17.7h-2.1v1.526a4.883,4.883,0,0,0-2.551.995,3.906,3.906,0,0,0-1.282,3.2v.61a4.164,4.164,0,0,0,1.166,3.326,5.182,5.182,0,0,0,3.424.995h1.031a1.16,1.16,0,0,1,.708.214.732.732,0,0,1,.305.61v.232a.812.812,0,0,1-.214.61,1.367,1.367,0,0,1-.647.311,5.139,5.139,0,0,1-1.068.1H24.953c-.525,0-1.044-.031-1.556-.055s-.989-.061-1.428-.1v2.991c.336.092.684.171,1.05.238s.739.122,1.135.171.8.092,1.221.116h.183v1.66h2.1V33.813a10.613,10.613,0,0,0,1.257-.171ZM49.733,71.7a.22.22,0,0,0,.153,0h.055l4.968-2.783a.3.3,0,0,0,.1-.146.153.153,0,0,0,0-.116L49.269,58.343h0a.964.964,0,0,1-.11-.281.946.946,0,0,1,.739-1.111l8.417-1.41h0A4.419,4.419,0,0,0,60.1,54.8a1.1,1.1,0,0,0,.391-.476.427.427,0,0,0-.043-.372,2.252,2.252,0,0,0-.751-.739l-27.9-18.707.439,6.317,1.886,27.2a2.228,2.228,0,0,0,.262,1.025.421.421,0,0,0,.269.214,1.05,1.05,0,0,0,.61-.1A4.376,4.376,0,0,0,36.787,68l5.194-6.506h0a1.166,1.166,0,0,1,.232-.189.94.94,0,0,1,1.288.342l6.14,10a.14.14,0,0,0,.1.055Z" transform="translate(1029.949 1643)" fill="#f8d458"></path>
                           </g>
                         </svg>       
                     </div>
                     <div class="service__content">
                        <h3><a href="service.html">PPC Management</a></h3>
                        <p>Our SEO Services wtill get you a high-ranking placement in search results.</p>
                     </div>
                     <div class="service__link">
                        <a href="service.html"><i class="fa-regular fa-arrow-right-long"></i></a>
                     </div>
                  </div>
               </div>
               <div class="col-xl-4 col-lg-6 col-md-6">
                  <div class="service__item mb-30">
                     <div class="service__thumb include__bg" data-background="assets/img/service/service-1.jpg" style="background-image: url(&quot;assets/img/service/service-1.jpg&quot;);"></div>
                     <div class="service__icon transition-3">
                        <svg id="seodvv" xmlns="http://www.w3.org/2000/svg" width="93.573" height="75" viewBox="0 0 93.573 75">
                           <path id="Path_2562107" data-name="Path 25607" d="M61.811,4.78A29.074,29.074,0,1,1,40.9,54.057h9.207a6.525,6.525,0,0,0,1.949-.289,22.17,22.17,0,1,0-.206-39.72,6.664,6.664,0,0,0-2.361-.426H40.938A28.955,28.955,0,0,1,61.811,4.78Z" transform="translate(-9.755 -1.14)" fill="#f8d458" fill-rule="evenodd"></path>
                           <path id="Path_25605665218" data-name="Path 25608" d="M20.081,26.721H11.6V24.475a3.936,3.936,0,0,0-.327-2.01,1.243,1.243,0,0,0-1.074-.426,1.418,1.418,0,0,0-1.241.586,2.955,2.955,0,0,0-.419,1.751,4.362,4.362,0,0,0,.48,2.284A7.073,7.073,0,0,0,11.6,28.518q6.077,3.141,7.653,5.148t1.584,6.465a9.982,9.982,0,0,1-.883,4.782,6.611,6.611,0,0,1-3.389,2.574,15.047,15.047,0,0,1-5.848,1.043,14.852,14.852,0,0,1-6.26-1.2,6.331,6.331,0,0,1-3.389-3.054A13.791,13.791,0,0,1,.267,39v-2H8.75V40.7A4.3,4.3,0,0,0,9.108,42.9a1.463,1.463,0,0,0,1.264.487,1.558,1.558,0,0,0,1.355-.617,3.112,3.112,0,0,0,.442-1.828c0-1.782-.282-2.955-.845-3.5a27.9,27.9,0,0,0-4.272-2.764,42.508,42.508,0,0,1-4.5-2.833A6.643,6.643,0,0,1,.723,29.4,9.549,9.549,0,0,1,0,25.419a9.769,9.769,0,0,1,1.028-5.1A6.7,6.7,0,0,1,4.356,17.8,14.989,14.989,0,0,1,9.9,16.89a16.577,16.577,0,0,1,6.054.99,6.122,6.122,0,0,1,3.313,2.505,11.615,11.615,0,0,1,.815,5.125v1.211ZM52.026,0A32.726,32.726,0,0,1,79.409,50.64L93.573,66.075,83.811,75,70.157,59.976a32.712,32.712,0,0,1-41.266-4.1,33.3,33.3,0,0,1-2.62-2.955H31.1c.122.122.244.251.366.373A29.08,29.08,0,0,0,72.594,12.169h0a29.084,29.084,0,0,0-41.121,0l-.3.3H26.317a31.858,31.858,0,0,1,2.566-2.886A32.619,32.619,0,0,1,52.026,0ZM24.086,17.507H39.735v6.062h-6.5v5.8h6.092V35.12H33.239V41.8h7.112V47.86H24.086V17.507ZM64.552,35.3a56.592,56.592,0,0,1-.251,6.473,6.648,6.648,0,0,1-1.553,3.48A8.328,8.328,0,0,1,59.2,47.677a14.663,14.663,0,0,1-5.2.845,14.959,14.959,0,0,1-5.056-.8,8.322,8.322,0,0,1-3.61-2.383,6.684,6.684,0,0,1-1.63-3.465,57.069,57.069,0,0,1-.259-6.564V30.117a56.593,56.593,0,0,1,.251-6.473,6.708,6.708,0,0,1,1.553-3.48A8.281,8.281,0,0,1,48.8,17.743,14.664,14.664,0,0,1,54,16.9a14.959,14.959,0,0,1,5.056.8,8.322,8.322,0,0,1,3.61,2.383,6.711,6.711,0,0,1,1.63,3.465,57.071,57.071,0,0,1,.259,6.564V35.3ZM55.4,25.335a8.375,8.375,0,0,0-.267-2.7,1.074,1.074,0,0,0-1.089-.586,1.286,1.286,0,0,0-1.074.48,6.06,6.06,0,0,0-.373,2.818V39.514a12.475,12.475,0,0,0,.244,3.259c.16.419.541.617,1.135.617a1.109,1.109,0,0,0,1.173-.708,13.079,13.079,0,0,0,.251-3.389V25.335Z" fill="#3887fe"></path>
                         </svg>
                     </div>
                     <div class="service__content">
                        <h3><a href="service.html">Performance Content</a></h3>
                        <p>Our SEO Services wtill get you a high-ranking placement in search results.</p>
                     </div>
                     <div class="service__link">
                        <a href="service.html"><i class="fa-regular fa-arrow-right-long"></i></a>
                     </div>
                  </div>
               </div>
               <div class="col-xl-4 col-lg-6 col-md-6">
                  <div class="service__item mb-30">
                     <div class="service__thumb include__bg" data-background="assets/img/service/service-1.jpg" style="background-image: url(&quot;assets/img/service/service-1.jpg&quot;);"></div>
                     <div class="service__icon transition-3">
                        <svg xmlns="http://www.w3.org/2000/svg" width="49.925" height="75" viewBox="0 0 49.925 75">
                           <g id="Group_27412" data-name="Group 27412" transform="translate(-535 -1727)">
                             <path id="attract-customers" d="M44.6,41.049V33.5H32.705v7.545ZM32.223,44.394a.94.94,0,0,1,1.428-.244,1.276,1.276,0,0,1,.214,1.63L32.07,48.545a.946.946,0,0,1-1.434.244,1.288,1.288,0,0,1-.214-1.636l1.8-2.765ZM43.21,45.841a1.3,1.3,0,0,1,0-1.654.94.94,0,0,1,1.453,0l2.216,2.527a1.294,1.294,0,0,1,0,1.66.94.94,0,0,1-1.453,0L43.2,45.841ZM37.43,45.78a1.032,1.032,0,1,1,2.045,0v3.107a1.032,1.032,0,1,1-2.045,0ZM4.761,44.394a.94.94,0,0,1,1.428-.244A1.276,1.276,0,0,1,6.4,45.78L4.6,48.551a.94.94,0,0,1-1.428.244A1.276,1.276,0,0,1,2.96,47.16l1.831-2.765Zm10.987,1.447a1.3,1.3,0,0,1,0-1.654.94.94,0,0,1,1.453,0l2.216,2.527a1.294,1.294,0,0,1,0,1.66.94.94,0,0,1-1.453,0l-2.222-2.533ZM9.968,45.78a1.1,1.1,0,0,1,1.019-1.19,1.1,1.1,0,0,1,1.025,1.19v3.107a1.111,1.111,0,0,1-.989,1.166,1.093,1.093,0,0,1-1.032-1.16V45.786Zm34.61-18.7V18.837A18.764,18.764,0,0,0,39.066,5.53h0a21.116,21.116,0,0,0-28.494,0h0A18.782,18.782,0,0,0,5.017,18.837v8.234H16.908V18.837a6.9,6.9,0,0,1,2.026-4.883h0a9.573,9.573,0,0,1,5.854-2.02,9.411,9.411,0,0,1,5.854,2.02h0a6.916,6.916,0,0,1,2.045,4.883v8.234ZM5.017,33.5v7.6H16.908V33.5Z" transform="translate(535.243 1727)" fill="#3887fe"></path>
                             <path id="attract-customers-2" data-name="attract-customers" d="M34.384,65.166c-.378-.61-1.087-1.416-1.087-2.118a1.135,1.135,0,0,1,.763-1.032C34.024,61.406,34,60.8,34,60.222V59.166a3.925,3.925,0,0,1,.122-.659,3.766,3.766,0,0,1,1.685-2.136,4.676,4.676,0,0,1,.916-.439c.58-.208.3-1.184.934-1.221a8.466,8.466,0,0,1,4.883,2.35,3.772,3.772,0,0,1,.971,2.442L43.448,62.1a.867.867,0,0,1,.61.537c.2.818-.647,1.831-1.044,2.49s-1.758,2.545-1.758,2.564a.537.537,0,0,0,.122.3c2.167,2.973,8.546,1.1,8.546,7.014H27.468c0-5.915,6.36-4.041,8.546-7.014.11-.153.159-.238.153-.311s-1.6-2.3-1.74-2.527Zm-27.468,0c-.378-.61-1.087-1.416-1.087-2.118a1.135,1.135,0,0,1,.763-1.032c-.037-.61-.061-1.221-.061-1.795V59.166a3.925,3.925,0,0,1,.122-.659,3.766,3.766,0,0,1,1.685-2.136,4.675,4.675,0,0,1,.916-.439c.61-.208.3-1.184.934-1.221a8.484,8.484,0,0,1,4.883,2.35,3.772,3.772,0,0,1,.971,2.442L15.98,62.1a.867.867,0,0,1,.61.537c.2.818-.647,1.831-1.044,2.49s-1.758,2.545-1.758,2.564a.537.537,0,0,0,.122.3c2.167,2.973,8.546,1.1,8.546,7.014H0c0-5.915,6.36-4.041,8.546-7.014.11-.153.159-.238.153-.311s-1.6-2.3-1.74-2.527Z" transform="translate(535 1727)" fill="#f8d458"></path>
                           </g>
                         </svg>                         
                     </div>
                     <div class="service__content">
                        <h3><a href="service.html">Lead Generation</a></h3>
                        <p>Our SEO Services wtill get you a high-ranking placement in search results.</p>
                     </div>
                     <div class="service__link">
                        <a href="service.html"><i class="fa-regular fa-arrow-right-long"></i></a>
                     </div>
                  </div>
               </div>
               <div class="col-xl-4 col-lg-6 col-md-6">
                  <div class="service__item mb-30">
                     <div class="service__thumb include__bg" data-background="assets/img/service/service-1.jpg" style="background-image: url(&quot;assets/img/service/service-1.jpg&quot;);"></div>
                     <div class="service__icon transition-3">
                        <svg xmlns="http://www.w3.org/2000/svg" width="75.95" height="75" viewBox="0 0 75.95 75">
                           <g id="Group_27411" data-name="Group 27411" transform="translate(-922 -1727)">
                             <path id="data-scientist" d="M50.552,62.4c2.169,6.382,11.241,6.623,13.283,0,5.018,4.517,12.979,1.142,14.114,10.219A2.431,2.431,0,0,1,75.412,75H38.969a2.431,2.431,0,0,1-2.537-2.379C37.51,63.988,45.8,66.677,50.552,62.4Zm-1.89-11.7a1.611,1.611,0,0,0-.768.241.685.685,0,0,0-.266.3,1.123,1.123,0,0,0-.089.5,5.113,5.113,0,0,0,.977,2.341l2.055,3.267a17.369,17.369,0,0,0,2.747,3.6,5.506,5.506,0,0,0,3.87,1.561A5.709,5.709,0,0,0,61.3,60.9a18.4,18.4,0,0,0,2.823-3.851l2.309-3.806c.469-1.066.634-1.719.457-2.036-.089-.178-.406-.241-.92-.216a2.3,2.3,0,0,1-1.269-.038l.933-2.633a17.985,17.985,0,0,1-10.543-2.975c-1.129-.717-1.465-1.541-2.588-1.459a3.806,3.806,0,0,0-2.125,1.155,5.481,5.481,0,0,0-1.224,2.4l.685,3.286a2.233,2.233,0,0,1-1.167,0Zm18.4-.945a1.611,1.611,0,0,1,1.047.85c.343.7.2,1.732-.444,3.21h0l-.038.082-2.347,3.832a19.138,19.138,0,0,1-3.058,4.142,6.978,6.978,0,0,1-5.03,1.992,6.807,6.807,0,0,1-4.777-1.9,18.174,18.174,0,0,1-2.981-3.876L47.38,54.815a6.045,6.045,0,0,1-1.18-3.026,2.455,2.455,0,0,1,.209-1.116,2.119,2.119,0,0,1,.749-.863,2.683,2.683,0,0,1,.539-.273,36.659,36.659,0,0,1-.082-4.808,8.19,8.19,0,0,1,.247-1.332,7.9,7.9,0,0,1,3.47-4.44,9.643,9.643,0,0,1,1.9-.907c3.946-1.427,9.173-.634,11.97,2.379a7.968,7.968,0,0,1,2.011,5.037l-.133,4.269Z" transform="translate(920 1727)" fill="#3887fe" fill-rule="evenodd"></path>
                             <path id="data-scientist-2" data-name="data-scientist" d="M3.87,25.571H60.162V4.5a.565.565,0,0,0-.19-.444.577.577,0,0,0-.444-.19H4.5a.565.565,0,0,0-.444.19.488.488,0,0,0-.19.444Zm56.293,3.248H3.87v41.8a.577.577,0,0,0,.19.444.565.565,0,0,0,.444.19l23.2-.063h0a1.9,1.9,0,0,1,0,3.806H4.5a4.517,4.517,0,0,1-3.172-1.332A4.4,4.4,0,0,1,0,70.5V4.5A4.4,4.4,0,0,1,1.332,1.332,4.4,4.4,0,0,1,4.5,0H59.465a4.517,4.517,0,0,1,3.172,1.332A4.4,4.4,0,0,1,63.969,4.5V31.642a1.9,1.9,0,0,1-3.806,0ZM20.743,9.369h4.041a.241.241,0,0,1,.254.254V23.75a.241.241,0,0,1-.254.254H20.743a.241.241,0,0,1-.26-.254V9.623a.241.241,0,0,1,.26-.254Zm9.217,5.367h4.047a.241.241,0,0,1,.254.254V23.7a.241.241,0,0,1-.254.254H29.961a.241.241,0,0,1-.254-.254V14.99a.273.273,0,0,1,.254-.254Zm18.447,0h4.041a.241.241,0,0,1,.26.254V23.7a.241.241,0,0,1-.26.254H48.408a.241.241,0,0,1-.254-.254V14.99A.273.273,0,0,1,48.408,14.736ZM39.184,9.369h4.041a.241.241,0,0,1,.26.254V23.75a.241.241,0,0,1-.26.254H39.184a.241.241,0,0,1-.254-.254V9.623a.241.241,0,0,1,.254-.254ZM11.526,11.311h4.041a.241.241,0,0,1,.26.26V23.75a.241.241,0,0,1-.26.254H11.526a.241.241,0,0,1-.254-.254V11.571c-.051-.159.1-.26.254-.26Zm13.7,40.6L36.1,52.1a11.647,11.647,0,0,1-5.113,9.661l-5.76-9.883Zm-.6-3.324L24.505,35.9v-.844l.831.063h0a15.282,15.282,0,0,1,3.007.514A14.387,14.387,0,0,1,38.835,48.845l.063.831h-.837l-12.6-.381H24.74l-.127-.768Zm1.535-.768,11.07.317A13.093,13.093,0,0,0,30.386,38,13.956,13.956,0,0,0,26.7,36.729c-.216-.038-.438-.076-.634-.1l.127,11.133Zm-4.6,2.931,6.2,10.784a12.426,12.426,0,1,1-6.7-23.2Z" transform="translate(922 1727)" fill="#f8d458" fill-rule="evenodd"></path>
                           </g>
                         </svg>                         
                     </div>
                     <div class="service__content">
                        <h3><a href="service.html">Strategic Planning </a></h3>
                        <p>Our SEO Services wtill get you a high-ranking placement in search results.</p>
                     </div>
                     <div class="service__link">
                        <a href="service.html"><i class="fa-regular fa-arrow-right-long"></i></a>
                     </div>
                  </div>
               </div>
               <div class="col-xl-4 col-lg-6 col-md-6">
                  <div class="service__item mb-30">
                     <div class="service__thumb include__bg" data-background="assets/img/service/service-1.jpg" style="background-image: url(&quot;assets/img/service/service-1.jpg&quot;);"></div>
                     <div class="service__icon transition-3">
                        <svg xmlns="http://www.w3.org/2000/svg" width="77.497" height="75" viewBox="0 0 77.497 75">
                           <g id="Group_26745" data-name="Group 26745" transform="translate(-1685 -1768)">
                             <path id="talk" d="M24.7,0H47.66a5.512,5.512,0,0,1,5.5,5.5V19.9a5.512,5.512,0,0,1-5.5,5.5H34.2l-8.344,7.183a.927.927,0,0,1-1.305-.1.94.94,0,0,1-.221-.631l.448-6.42H24.7a5.512,5.512,0,0,1-5.5-5.5V5.5A5.512,5.512,0,0,1,24.7,0ZM55.859,11.2a5.4,5.4,0,0,1,2.794,1.488A4.932,4.932,0,0,1,60.236,16.3V28.645a5.4,5.4,0,0,1-5.367,5.411h-.2l.574,7.492-9.839-7.726H30.392l5.443-5.531H51.3a4.585,4.585,0,0,0,4.572-4.572V11.2Zm-28.45,4.825a.933.933,0,0,1,0-1.86H41.057a.933.933,0,0,1,0,1.86Zm0-6.162a.946.946,0,0,1,0-1.892h17.7a.946.946,0,1,1,0,1.892Zm20.245-8.01H24.7A3.658,3.658,0,0,0,21.052,5.5V19.9A3.658,3.658,0,0,0,24.7,23.549h1.066a.927.927,0,0,1,.921,1l-.359,5.2,6.887-5.922a.94.94,0,0,1,.631-.271H47.654A3.658,3.658,0,0,0,51.3,19.9V5.5A3.658,3.658,0,0,0,47.654,1.854Z" transform="translate(1684.796 1768)" fill="#f8d458" fill-rule="evenodd"></path>
                             <path id="talk-2" data-name="talk" d="M32.486,56.218c1.3-2.088,1.766-5.38.353-7.568-.568-.877-.341-2.3-.341-3.5,0-11.983-20.964-11.983-20.964,0,0,1.5.341,2.523-.467,3.727-1.381,1.993-.669,5.525.492,7.36,1.179,3.431,5.676,5.424,1.829,8.993S1.57,64.329,0,75H77.5c-1.432-8.621-8.2-4.232-11.012-8.054-2.378-3.191.631-3.841,1.564-6.628.933-1.469,1.507-4.308.4-5.909-.631-.952-.378-1.942-.378-3.153,0-9.643-16.429-9.643-16.429,0,0,.959.183,2.264-.271,2.964-1.135,1.766-.757,4.415.284,6.086.769,2.706,3.866,3.986,1.892,6.71s-6.553,2.2-9.391,3.847c-3-3.677-10.059-2.308-13.206-5.8-3.494-3.879.536-5.235,1.564-8.829Z" transform="translate(1685 1768)" fill="#3887fe" fill-rule="evenodd"></path>
                           </g>
                         </svg>                         
                     </div>
                     <div class="service__content">
                        <h3><a href="service.html">Product Consultation</a></h3>
                        <p>Our SEO Services wtill get you a high-ranking placement in search results.</p>
                     </div>
                     <div class="service__link">
                        <a href="service.html"><i class="fa-regular fa-arrow-right-long"></i></a>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      </div>
      <!-- Service area end -->

      <!-- Recent area start --
      <div class="recent__area grey-bg pt-120 pb-90">
         <div class="container">
            <div class="row">
               <div class="col-12">
                  <div class="recent-content-box mb-65">
                     <div class="recent__video text-center mb-60">
                        <a class="play__btn popup-video play__effect" href="https://www.youtube.com/watch?v=MYE6T_gd7H0">
                           <svg xmlns="http://www.w3.org/2000/svg" width="116" height="116" viewBox="0 0 116 116">
                              <g id="Group_27114" data-name="Group 27114" transform="translate(0.323 0.322)">
                                <circle id="Ellipse_526" data-name="Ellipse 526" cx="58" cy="58" r="58" transform="translate(-0.323 -0.322)" fill="rgba(56,135,254,0.1)"/>
                                <g id="Path_26676" data-name="Path 26676" transform="translate(73.677 41.678) rotate(90)" fill="none">
                                  <path d="M15.745,3.209a2,2,0,0,1,3.509,0L33.381,29.04A2,2,0,0,1,31.627,32H3.373a2,2,0,0,1-1.755-2.96Z" stroke="none"/>
                                  <path d="M 17.50000190734863 3.168291091918945 C 17.32173156738281 3.168291091918945 16.87939262390137 3.21898078918457 16.62263107299805 3.688482284545898 L 2.49591064453125 29.52018165588379 C 2.249221801757812 29.97128105163574 2.425762176513672 30.36266136169434 2.513111114501953 30.51000213623047 C 2.600460052490234 30.6573314666748 2.859142303466797 31.00000190734863 3.373281478881836 31.00000190734863 L 31.62671279907227 31.00000190734863 C 32.14086151123047 31.00000190734863 32.39954376220703 30.65732192993164 32.48689270019531 30.50999069213867 C 32.57424163818359 30.36266136169434 32.75078201293945 29.97128105163574 32.50408172607422 29.52018165588379 L 18.37737274169922 3.688491821289062 C 18.1206111907959 3.21898078918457 17.67826271057129 3.168291091918945 17.50000190734863 3.168291091918945 M 17.49999809265137 2.168292999267578 C 18.18771743774414 2.168292999267578 18.87543678283691 2.515087127685547 19.25474166870117 3.208671569824219 L 33.38145065307617 29.04037094116211 C 34.11033248901367 30.37317085266113 33.14580154418945 32 31.62671279907227 32 L 3.373281478881836 32 C 1.854202270507812 32 0.8896713256835938 30.37317085266113 1.618541717529297 29.04037094116211 L 15.74526214599609 3.208671569824219 C 16.12456130981445 2.515087127685547 16.81227874755859 2.168292999267578 17.49999809265137 2.168292999267578 Z" stroke="none" fill="#3887fe"/>
                                </g>
                              </g>
                            </svg>
                        </a>
                     </div>
                     <div class="section__title-wrapper text-center">
                        <span class="section__subtitle-2">
                           <span>Our Recent</span> Projects
                        </span>
                        <h2 class="section__title-2">
                           Our Handpick SEO Projects
                        </h2>
                     </div>
                  </div>
               </div>
            </div>
            <div class="row wow fadeInUp" data-wow-delay=".3s">
               <div class="col-xl-6 col-lg-6">
                  <div class="recent__thumb mb-30">
                     <img src="assets/img/recent/01.jpg" alt="image not found">
                  </div>
               </div>
               <div class="col-xl-6 col-lg-6">
                  <div class="recent__thumb mb-30">
                     <img src="assets/img/recent/02.jpg" alt="image not found">
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- Recent area end -->

      <!-- Features area start -->

      <a name="ors"></a>
      <section class="features__area p-relative features-bg pt-120 pb-30">
         <div class="features__pattern">
            <img src="assets/img/shape/features-shape.png" alt="image not found">
         </div>
         <div class="container">
            <div class="row wow fadeInUp" data-wow-delay=".3s">
               <div class="col-xl-3 col-lg-3">
                  <div class="features__thumb-wrapper mb-60">
                     <div class="features__thumb">
                        <img src="assets/img/features/02.png" alt="image not found">
                     </div>
                     <div class="features__cercle-1"></div>
                     <div class="features__cercle-2 s-2"></div>
                     <div class="features__shape-1">
                        <div class="features__shape-content">
                           <div class="features__traffic">
                              <div class="content">
                                 <span>Lugares disponibles</span>
                                 <h5><?php  echo $lugares ;  ?> espacios</h5>
                              </div>
                              <div class="icon">
                                 <svg xmlns="http://www.w3.org/2000/svg" width="18.953" height="11.624" viewBox="0 0 18.953 11.624">
                                    <g id="trending-up" transform="translate(1.414 1.414)">
                                       <path id="Path_473" data-name="Path 473" d="M17.125,6l-6.963,6.963L6.5,9.3,1,14.8" transform="translate(-1 -6)" fill="none" stroke="#fff" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"/>
                                       <path id="Pathccx_474" data-name="Path 474" d="M17,6h4.4v4.4" transform="translate(-5.273 -6)" fill="none" stroke="#fff" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"/>
                                    </g>
                                 </svg>                            
                              </div>
                           </div>
                           
                        </div>
                     </div>
                     <div class="features__shape-2">
                        <div class="features__shape-content">
                           <div class="features__traffic s-2">
                              <div class="content">
                                 <span>Instituciones registradas</span>
                                 <h5><?php echo $orgs ?></h5>
                              </div>
                              <div class="icon">
                                 <svg xmlns="http://www.w3.org/2000/svg" width="21.397" height="12.957" viewBox="0 0 21.397 12.957">
                                    <g id="trendincxcxg-up" transform="translate(1.414 1.414)">
                                      <path id="Path_4cc73" data-name="Path 473" d="M19.569,6,11.55,14.018,7.33,9.8,1,16.128" transform="translate(-1 -6)" fill="none" stroke="#fff" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"/>
                                      <path id="Path_4ccx74" data-name="Path 474" d="M17,6h5.064v5.064" transform="translate(-3.496 -6)" fill="none" stroke="#fff" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"/>
                                    </g>
                                  </svg>                                                                                              
                              </div>
                           </div>
                           
                        </div>
                     </div>
                  </div>
               </div>
               
               <div class="col-xl-9 col-lg-9">
                  <div class="features__content-wrapper">
                     <div class="section__title-wrapper mb-25">
                        <span class="section__subtitle">
                           <span> Organizaciones </span> Receptoras
                        </span>
                        <h2 class="section__title">
                           OR's <span class="down__mark-line">    </span> 
                        </h2>
                        <p>Aquí encontrarás información sobre las Organizaciones Receptoras participantes en la convocatoria 2023.</p>
                     </div>

                     <div class="bd-faq__wrapper mb-60">
                           <!-- Hover added -->
                           <div class="mb-3">
                              <label for="" class="form-label">Selecciona tu carrera</label>
                              <select class="form-select form-select-lg" name="cat_carrera" id="cat_carrera">
                              
                              <option value = "0" selected>Selecciona tu Grado</option>
                              <?php
                                    foreach ($carreras as $resul) {
                                       # code...
                                       // while($resul = $carreras->fetch_assoc()){
                                       echo '<option value="'.$resul['id_grado'].'">'.$resul['nombre_grado'].'</option>';    
                                       
                                    }
                                    // while($carreras = $resul->fetch_assoc()){

                                       // echo '<option value="'.$resul['id_carrera'].'">'.$resul['nivel'].'</option>';    
                                    // }

                                     ?>
                              </select>
                              <br>
                              
                              <select id="catalogo" name="catalogo" class="form-select form-select-lg"   hidden="true">
                                 <option selected disabled >Selecciona tu carrera <?php //echo $valorglobal; ?></option>
                              </select>
                              <br> 
                              <!-- <select id="catalogo_org" name="catalogo_org" class="form-select form-select-lg"   hidden="true">
                                 <option selected disabled >Selecciona tu carrera <?php //echo $valorglobal; ?></option>
                              </select>  -->
                              
                           </div>
                           <div class="bd-faq__wrapper mb-60" id="catalogo_org" name="catalogo_org" hidden = true>
                              
                           </div>
                     </div>

                     <!-- <div class="bd-faq__wrapper mb-60">
                        <div class="bd-faq__accordion" data-aos="fade-left" data-aos-duration="1000">
                           <div class="accordion" id="accordionExample">
                              <div class="accordion-item">
                                 <h2 class="accordion-header" id="headingOne">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                       data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                       Instituto Nacional de Medicina Genómica (INMEGEN)
                                    </button>
                                 </h2>
                                 <div id="collapseOne" class="accordion-collapse collapse collapse"
                                    aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                       <table class="table table-striped">
                                          <tr>
                                             <th>Licenciatura</th>
                                             <th>Proyecto</th>
                                             <th>Espacios</th>
                                          </tr>
                                          <tr>
                                             <td>Administración</td>
                                             <td>• Organización, clasificación y depuración de archivos gubernamentales.
                                                • Implementación y programas para autogeneración de recursos.
                                                • Búsqueda y organización de información.
                                                • Apoyo en actividades de diversas áreas funcionales del Instituto.</td>
                                             <td>3</td>
                                           </tr>
                                           <tr>
                                             <td>Derecho</td>
                                             <td>• Apoyo en la fiscalización de procesos administrativos y en la vigilancia del cumplimiento de las obligaciones y el apego a la legalidad de los servidores públicos en el desempeño de sus funciones.
                                                • Lectura, revisión y clasificación de convenios, certificaciones y contratos.</td>
                                             <td>4</td>
                                           </tr>
                                       </table>
                                    </div>
                                 </div>
                              </div>
                              <div class="accordion-item">
                                 <h2 class="accordion-header" id="headingTwo">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                       data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                       Enseña por México A.C.
                                    </button>
                                 </h2>
                                 <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                                    data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                       <p>----------------------------------------------</p>
                                    </div>
                                 </div>
                              </div>
                              <div class="accordion-item">
                                 <h2 class="accordion-header" id="headingThree">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                       data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                       De la O & Asociados Diseño S.A. de C.V.
                                    </button>
                                 </h2>
                                 <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                                    data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                       <p>----------------------------------------------</p>
                                    </div>
                                 </div>
                              </div>
                              <div class="accordion-item">
                                 <h2 class="accordion-header" id="headingFour">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                       data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                       Editorial De otro tipo
                                    </button>
                                 </h2>
                                 <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour"
                                    data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                       <p>----------------------------------------------</p>
                                    </div>
                                 </div>
                              </div>
                              <div class="accordion-item">
                                 <h2 class="accordion-header" id="headingFive">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                       data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                       Hospital Infantil de México Federico Gómez
                                    </button>
                                 </h2>
                                 <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive"
                                    data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                       <p>----------------------------------------------</p>
                                    </div>
                                 </div>
                              </div>
                              <div class="accordion-item">
                                 <h2 class="accordion-header" id="headingSix">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                       data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                                       Instituto Nacional de Antropología e Historia (INAH)
                                    </button>
                                 </h2>
                                 <div id="collapseSix" class="accordion-collapse collapse" aria-labelledby="headingSix"
                                    data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                       <p>----------------------------------------------</p>
                                    </div>
                                 </div>
                              </div>
                              <div class="accordion-item">
                                 <h2 class="accordion-header" id="headingSeven">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                       data-bs-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
                                       Barroso Mayorga & Asociados
                                    </button>
                                 </h2>
                                 <div id="collapseSeven" class="accordion-collapse collapse" aria-labelledby="headingSeven"
                                    data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                       <p>----------------------------------------------</p>
                                    </div>
                                 </div>
                              </div>
                              <div class="accordion-item">
                                 <h2 class="accordion-header" id="headingEight">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                       data-bs-target="#collapseEight" aria-expanded="false" aria-controls="collapseEight">
                                       Hello México
                                    </button>
                                 </h2>
                                 <div id="collapseEight" class="accordion-collapse collapse" aria-labelledby="headingEight"
                                    data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                       <p>----------------------------------------------</p>
                                    </div>
                                 </div>
                              </div>
                              <div class="accordion-item">
                                 <h2 class="accordion-header" id="headingNine">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                       data-bs-target="#collapseNine" aria-expanded="false" aria-controls="collapseNine">
                                       Editorial Modernidades
                                    </button>
                                 </h2>
                                 <div id="collapseNine" class="accordion-collapse collapse" aria-labelledby="headingNine"
                                    data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                       <p>----------------------------------------------</p>
                                    </div>
                                 </div>
                              </div>
                              <div class="accordion-item">
                                 <h2 class="accordion-header" id="headingTen">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                       data-bs-target="#collapseTen" aria-expanded="false" aria-controls="collapseTen">
                                       Sin Fronteras I.A.P.
                                    </button>
                                 </h2>
                                 <div id="collapseTen" class="accordion-collapse collapse" aria-labelledby="headingTen"
                                    data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                       <p>----------------------------------------------</p>
                                    </div>
                                 </div>
                              </div>
                              <div class="accordion-item">
                                 <h2 class="accordion-header" id="headingEleven">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                       data-bs-target="#collapseEleven" aria-expanded="false" aria-controls="collapseEleven">
                                       Escuela de Diseño Aplicado a la Indumentaria y Moda
                                    </button>
                                 </h2>
                                 <div id="collapseEleven" class="accordion-collapse collapse" aria-labelledby="headingEleven"
                                    data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                       <p>----------------------------------------------</p>
                                    </div>
                                 </div>
                              </div>
                              <div class="accordion-item">
                                 <h2 class="accordion-header" id="headingTwelve">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                       data-bs-target="#collapseTwelve" aria-expanded="false" aria-controls="collapseTwelve">
                                       Instituto Nacional de Geriatría (INGER)
                                    </button>
                                 </h2>
                                 <div id="collapseTwelve" class="accordion-collapse collapse" aria-labelledby="headingTwelve"
                                    data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                       <p>----------------------------------------------</p>
                                    </div>
                                 </div>
                              </div>
                              <div class="accordion-item">
                                 <h2 class="accordion-header" id="headingTherteen">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                       data-bs-target="#collapseTherteen" aria-expanded="false" aria-controls="collapseTherteen">
                                       Nosótrikas Tik.-Tank
                                    </button>
                                 </h2>
                                 <div id="collapseTherteen" class="accordion-collapse collapse" aria-labelledby="headingTherteen"
                                    data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                       <p>----------------------------------------------</p>
                                    </div>
                                 </div>
                              </div>
                              <div class="accordion-item">
                                 <h2 class="accordion-header" id="headingFourteen">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                       data-bs-target="#collapseFourteen" aria-expanded="false" aria-controls="collapseFourteen">
                                       The Anglo Mexican Foundation
                                    </button>
                                 </h2>
                                 <div id="collapseFourteen" class="accordion-collapse collapse" aria-labelledby="headingFourteen"
                                    data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                       <p>----------------------------------------------</p>
                                    </div>
                                 </div>
                              </div>
                              <div class="accordion-item">
                                 <h2 class="accordion-header" id="headingFiveteen">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                       data-bs-target="#collapseFiveteen" aria-expanded="false" aria-controls="collapseFiveteen">
                                       Instituto para Devolver al Pueblo lo Robado (INDEP)
                                    </button>
                                 </h2>
                                 <div id="collapseFiveteen" class="accordion-collapse collapse" aria-labelledby="headingFiveteen"
                                    data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                       <p>----------------------------------------------</p>
                                    </div>
                                 </div>
                              </div>
                              <div class="accordion-item">
                                 <h2 class="accordion-header" id="headingSixteen">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                       data-bs-target="#collapseSixteen" aria-expanded="false" aria-controls="collapseSixteen">
                                       Ethos Laboratorio de Políticas Públicas A.C.
                                    </button>
                                 </h2>
                                 <div id="collapseSixteen" class="accordion-collapse collapse" aria-labelledby="headingSixteen"
                                    data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                       <p>----------------------------------------------</p>
                                    </div>
                                 </div>
                              </div>
                              <div class="accordion-item">
                                 <h2 class="accordion-header" id="headingSeventeen">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                       data-bs-target="#collapseSeventeen" aria-expanded="false" aria-controls="collapseSeventeen">
                                       Merka Med Desechables S.A. de C.V.
                                    </button>
                                 </h2>
                                 <div id="collapseSeventeen" class="accordion-collapse collapse" aria-labelledby="headingSeventeen"
                                    data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                       <p>----------------------------------------------</p>
                                    </div>
                                 </div>
                              </div>
                              <div class="accordion-item">
                                 <h2 class="accordion-header" id="headingEighteen">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                       data-bs-target="#collapseEighteen" aria-expanded="false" aria-controls="collapseEighteen">
                                       UNIMEDIOS
                                    </button>
                                 </h2>
                                 <div id="collapseEighteen" class="accordion-collapse collapse" aria-labelledby="headingEighteen"
                                    data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                       <p>----------------------------------------------</p>
                                    </div>
                                 </div>
                              </div>
                              <div class="accordion-item">
                                 <h2 class="accordion-header" id="headingNineteen">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                       data-bs-target="#collapseNineteen" aria-expanded="false" aria-controls="collapseNineteen">
                                       Discierne
                                    </button>
                                 </h2>
                                 <div id="collapseNineteen" class="accordion-collapse collapse" aria-labelledby="headingNineteen"
                                    data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                       <p>----------------------------------------------</p>
                                    </div>
                                 </div>
                              </div>
                              <div class="accordion-item">
                                 <h2 class="accordion-header" id="headingTwenty">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                       data-bs-target="#collapseTwenty" aria-expanded="false" aria-controls="collapseTwenty">
                                       Resa y Asociados S.C.
                                    </button>
                                 </h2>
                                 <div id="collapseTwenty" class="accordion-collapse collapse" aria-labelledby="headingTwenty"
                                    data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                       <p>----------------------------------------------</p>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div> -->
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- Features area end -->

      <!-- Boost area start -->
      <a name="participa"></a>
<br><br><br>
      <div class="boost__area pb-25">
         <div class="container">
            <div class="row  wow fadeInUp" data-wow-delay=".3s">
               <div class="col-xl-6 col-lg-6">
                  <div class="boost__content-wrapper mb-60">
                     <div class="section__title-wrapper mb-40">
                        <span class="section__subtitle-2">
                           <span>Part</span>icipa
                        </span>
                        <h2 class="section__title-2">
                           Postúlate
                        </h2>
                     </div>
                     <p class="mb-0">Solo podrás realizar el registro una vez, asegúrate de tener tu información y documentación completa</p>
                     <div class="approach__features s-2">
                        <div class="approach__features-item">
                           <div class="approach__arrow">
                              <img src="assets/img/svg/arrow-2.svg" alt="">                            
                           </div>
                           <div class="approach__text">
                              <span>Datos generales</span>
                           </div>
                        </div>
                        <div class="approach__features-item">
                           <div class="approach__arrow">
                              <img src="assets/img/svg/arrow-2.svg" alt="">                            
                           </div>
                           <div class="approach__text">
                              <span>Formato de postulación</span>
                           </div>
                        </div>
                        <div class="approach__features-item">
                           <div class="approach__arrow">
                              <img src="assets/img/svg/arrow-2.svg" alt="">                            
                           </div>
                           <div class="approach__text">
                              <span>Constancia de créditos y promedio</span>
                           </div>
                        </div>
                        <div class="approach__features-item">
                           <div class="approach__arrow">
                              <img src="assets/img/svg/arrow-2.svg" alt="">                            
                           </div>
                           <div class="approach__text">
                              <span>Carta compromiso</span>
                           </div>
                        </div>
                        <div class="approach__features-item">
                           <div class="approach__arrow">
                              <img src="assets/img/svg/arrow-2.svg" alt="">                            
                           </div>
                           <div class="approach__text">
                              <span>CV</span>
                           </div>
                        </div>
                        <div class="approach__features-item">
                           <div class="approach__arrow">
                              <img src="assets/img/svg/arrow-2.svg" alt="">                            
                           </div>
                           <div class="approach__text">
                              <span>Comprobante de seguro facultativo</span>
                           </div>
                        </div>
                        <div class="approach__features-item">
                           <div class="approach__arrow">
                              <img src="assets/img/svg/arrow-2.svg" alt="">                            
                           </div>
                           <div class="approach__text">
                              <span>Identificación oficial</span>
                           </div>
                        </div>
                        <div class="approach__features-item">
                           <div class="approach__arrow">
                              <img src="assets/img/svg/arrow-2.svg" alt="">                            
                           </div>
                           <div class="approach__text">
                              <span>CURP</span>
                           </div>
                        </div>
                        <div class="approach__features-item">
                           <div class="approach__arrow">
                              <img src="assets/img/svg/arrow-2.svg" alt="">                            
                           </div>
                           <div class="approach__text">
                              <span>Comprobante de domicilio</span>
                           </div>
                        </div>
                        <div class="approach__features-item">
                           <div class="approach__arrow">
                              <img src="assets/img/svg/arrow-2.svg" alt="">                            
                           </div>
                           <div class="approach__text">
                              <span>Formato de pago por transferencia</span>
                           </div>
                        </div>
                        <div class="approach__features-item">
                           <div class="approach__arrow">
                              <img src="assets/img/svg/arrow-2.svg" alt="">                            
                           </div>
                           <div class="approach__text">
                              <span>Estado de cuenta bancario </span>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-xl-6 col-lg-6">
                  <div class="boost__thumb-wrapper mb-60">
                     <div class="boost__thumb w-img p-relative">
                        <img src="assets/img/boost/boost-01.png" alt="image not found">
                        <div class="boost__shape-1"></div>
                     </div>
                     <div class="boost__shape-2">
                        <svg id="Group_27289" data-name="Group 27289" xmlns="http://www.w3.org/2000/svg" width="25.594" height="19.655" viewBox="0 0 25.594 19.655">
                           <path id="Path_26014" data-name="Path 26014" d="M321.713,46.082l-25.594,3.962,0,.008.163,1.6a23.645,23.645,0,0,0,7.662,14.089Z" transform="translate(-296.119 -46.082)" fill="#f8d458"/>
                         </svg>                         
                     </div>
                     <div class="boost__shape-3"></div>
                     <div class="boost__shape-4">
                        <svg xmlns="http://www.w3.org/2000/svg" width="44.495" height="44.279" viewBox="0 0 44.495 44.279">
                           <path id="Path_26017" data-name="Path 26017" d="M437.625,75.1a11.863,11.863,0,1,1-13.383,10.112l-10.288-1.433a22.245,22.245,0,1,0,25.1-18.964Z" transform="translate(-413.738 -64.809)" fill="#425fec"/>
                         </svg>
                     </div>
                     <div class="hero__btn-link wow fadeInUp" data-wow-delay=".8s">
                        <a class="solid__btn" href="./view/inscribete.php">Inscribete</a>
                     </div>
                  </div>
            </div>
            </div>
         </div>
      </div>
      <!-- Boost area end -->


      <!-- Footer area start -->
      <footer>
         <section class="footer__border footer-bg grey__bg p-relative z-index-11 pt-120 pb-60">
            <div class="footer__shape">
               <img src="assets/img/shape/footer-shape.png" alt="">
            </div>
            <div class="container">
               <div class="row">
                  
                  <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
                     <div class="footer__widget mb-55">
                        <div class="footer__logo mb-20">
                           <a href="index.html">
                              <img src="assets/img/logo/logo.png" alt="logo not found">
                           </a>
                        </div>
                        <div class="footer__contact mb-30">
                           <span>Vasco de Quiroga 4871, Contadero, </span>
                           <span>Cuajimalpa de Morelos, 05348</span>
                           <span>Ciudad de México, CDMX</span>
                        </div>
                        <div class="touch__social">
                           <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
                           <a href="#"><i class="fa-brands fa-twitter"></i></a>
                           <a href="#"><i class="fa-brands fa-youtube"></i></a>
                           <a href="#"><i class="fa-brands fa-linkedin"></i></a>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </section>
         <div class="footer__copyright grey-bg-2">
            <div class="container">
               <div class="copyright__inner-2">
                  <div class="copyright__text text-center">
                     <p>©2023 UAMC</p>
                  </div>
               </div>
            </div>
         </div>
      </footer>
      <!-- Footer area end -->

      </main>
      <!-- Body main wrapper end -->

      <!-- Back to top start -->
      <div class="progress-wrap">
         <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
         </svg>
         
      </div>
      <!-- Back to top end -->

      <!-- JS here -->
      <script src="assets/app/js/vendor/jquery-3.6.0.min.js"></script>
      <script src="assets/app/js/vendor/waypoints.min.js"></script>
      <script src="assets/app/js/bootstrap.min.js"></script>
      <script src="assets/app/js/meanmenu.min.js"></script>
      <script src="assets/app/js/swiper-bundle.min.js"></script>
      <script src="assets/app/js/slick.min.js"></script>
      <script src="assets/app/js/magnific-popup.min.js"></script>
      <script src="assets/app/js/backtotop.js"></script>
      <script src="assets/app/js/counterup.js"></script>
      <script src="assets/app/js/wow.min.js"></script>
      <script src="assets/app/js/imagesloaded.pkgd.min.js"></script>
      <script src="assets/app/js/isotope.pkgd.min.js"></script>
      <script src="assets/app/js/ajax-form.js"></script>
      <script src="assets/app/js/main.js"></script>
      
      <script> 
    $(document).ready(function(){
           $("#cat_carrera").change(function () {         
             $("#cat_carrera option:selected").each(function () {
               id_grado= $(this).val();
               $.post("includes/carrerasObtener.php", { id_grado: id_grado }, function(data){
                 $("#catalogo").html(data);
               });            
             });
           })
         });
         $(document).ready(function(){
           $("#catalogo").change(function () {         
             $("#catalogo option:selected").each(function () {
               id_carrera= $(this).val();
               $.post("includes/espacios_disp.php", { id_carrera: id_carrera }, function(data){
                 $("#catalogo_org").html(data);
               });            
             });
           })
         });
         </script>
      
      <script>
         let ee = document.getElementById('cat_carrera');
         let ef = document.getElementById('catalogo_org');
         var cs = document.getElementById('catalogo');
         ee.addEventListener("change", function(){
            if (ee.value != 0 ) {
               cs.disabled = false;
               cs.hidden = false;
                        
            }else {
               cs.disabled = true;
            }
         });
         cs.addEventListener("change", function(){
            if (cs.value != 0 ) {
               ef.hidden = false;                        
            }else {
               cs.disabled = true;
            }
         });
      </script>
    
    
   </body>
  
</html>
<!--
veranos
Cocacola31416
UhZWoLwfoUm9
-->


