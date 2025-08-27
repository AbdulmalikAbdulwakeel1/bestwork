@php($page_title = 'Best Work - International Manpower & Resources, Inc.')
@include('partials.css')
<body class="is__home home__three">
        <!-- header area -->
        <header class="rts__section rts__header relative__header">
            <div class="container-none">
                <div class="rts__menu__background">
                    <div class="row">
                        <div class="d-flex align-items-center justify-content-between">
                            <div class="rts__logo">
                                <a href="index.html">
                                    <img class="logo__image" src="assets/img/best work new logo.svg" width="160" height="40" alt="logo">
                                </a>
                            </div>
                            <div class="rts__menu d-flex gap-5 align-items-center">
                                <div class="navigation d-none d-lg-block">
    <nav class="navigation__menu" id="offcanvas__menu">
        <ul class="list-unstyled">
            <li class="navigation__menu--item has-child has-arrow">
                <a href="#" class="navigation__menu--item__link">Home</a>
                
            </li>

            <li class="navigation__menu--item has-child has-arrow">
                <a href="#" class="navigation__menu--item__link">About</a>
                
            </li>

            <li class="navigation__menu--item has-child has-arrow">
                <a href="#" class="navigation__menu--item__link">Blogs</a>
               
            </li>

            <li class="navigation__menu--item has-child has-arrow">
                <a href="#" class="navigation__menu--item__link">Terms & Condition</a>
                
            </li>

            <li class="navigation__menu--item has-child has-arrow">
                <a href="#" class="navigation__menu--item__link">Privacy & Policy</a>
                
            </li>

            <li class="navigation__menu--item has-child has-arrow">
                <a href="#" class="navigation__menu--item__link">Faq</a>
                
            </li>

            <li class="navigation__menu--item has-child has-arrow">
                <a href="#" class="navigation__menu--item__link">Contact</a>
                
            </li>
        </ul>
    </nav>
</div>

                                <div class="header__right__btn d-flex gap-3">
                                    <a href="#" class="small__btn he-3 d-none d-sm-flex no__fill__btn border-6 font-xs" aria-label="Login Button" data-bs-toggle="modal" data-bs-target="#loginModal"> 
                                        
                                        Sign In</a>
                                    
                                    <button class="d-md-block d-lg-none" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvas" aria-controls="offcanvas"><i class="fa-sharp fa-regular fa-bars"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- header area end -->

        <!-- banner area -->
        <section class="rts__banner overflow-hidden rts__section home__three__banner ">
            <div class="rts__banner__background">
            </div>
            <div class="container">
                <div class="row">
                    <div class="rts__banner__wrapper d-flex flex-wrap flex-lg-nowrap gap-5 justify-content-between align-items-center">
                        <div class="rts__banner__content max-750">
                            <h1 class="rts__banner__title wow animated fadeInUp ">
                                Unlock Your Dream Career with BestWork
                            </h1>
                            <p class="rts__banner__desc my-40 br-lg-none  wow animated fadeInUp">
                                Looking for a new job can be both exciting and daunting. Navigating the job market <br> involves exploring various avenues, including online job boards.
                            </p>
                            <div class="rts__job__search form-2 max-content  wow animated fadeInUp">
                                <form action="#" class="d-flex align-items-center flex-wrap flex-md-nowrap flex-lg-wrap flex-xl-nowrap gap-4 justify-content-between">
                                    <div class="input-group flex-md-nowrap d-flex gap-4">
                                        <div class="single__input d-flex flex-column">
                                            <input type="text" placeholder="Enter Type of job">
                                            <div class="search__icon fa-light fa-magnifying-glass"></div>
                                        </div>
                                        <div class="single__input d-flex flex-column">
                                            <div class="nice-select" tabindex="0">
                                                <span class="current">Select Location</span>
                                                <ul class="list">
                                                    <li data-value="Nothing" data-display="Select Location" class="option selected focus">Select Location</li>
                                                    <li data-value="1" class="option">Dhaka</li>
                                                    <li data-value="2" class="option">Barisal</li>
                                                    <li data-value="3" class="option">Chittagong</li>
                                                    <li data-value="4" class="option">Rajshahi</li>
                                                </ul>
                                            </div>
                                            <div class="fa-sharp fa-thin fa-location-dot location__icon"></div>
                                        </div>
                                    </div>
                                    <button type="submit" class="rts__btn fill__btn he-3 job__search " aria-label="Search">Search Job</button>

                                </form>
                            </div>
                        </div>
                        <div class="rts__banner__image position-relative">
                            <figure class="banner__image">
                                <img src="{{ asset('assets/img/home-3/banner/man.webp') }}" alt="banner">
                            </figure>
                            <div class="banner__image__shape">
                                <div class="facebook">
                                    <i class="fab fa-linkedin"></i>
                                </div>
                                <div class="twitter">
                                    <i class="fab fa-twitter"></i>
                                </div>
                                <div class="linkedin">
                                    <i class="fab fa-linkedin-in"></i>
                                </div>
                            </div>
                            <div class="current__job d-flex gap-3">
                                <div class="rts__icon">
                                    <img src="{{ asset('assets/img/icon/job.svg') }}" alt="">
                                </div>
                                <div class="rts__text">
                                    <span class="h5 mb-0">100+</span>
                                    <span>New Job</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- banner area end -->

        <!-- job category -->
        <div class="rts__section overflow-hidden pt-100">
            <div class="container">
                <div class="row justify-content-center mb-50 position-relative mtn-1">
                    <div class="col-xl-6 col-lg-10">
    <div class="rts__section__content text-center  wow animated fadeInUp">
        <h3 class="rts__section__title section__mb">Browse Job Category</h3>
        <p class="rts__section__desc">Looking for your next career opportunity. Look no further</p>
    </div>
</div>
                </div>
                <div class="row">
    <div class="cat__slider overflow-hidden swiper-data cat__style__two  wow animated fadeInUp" data-swiper='
    {
    "slidesPerView": 4, 
    "spaceBetween": 30,
    "loop": true,
    "speed": 1000,
    "autoplay":{
        "delay":"7000"
    },
    "pagination": {
        "el": ".rts__pagination",
        "clickable": true
    },
    "navigation": {
        "nextEl": ".rts__slide__next",
        "prevEl": ".rts__slide__prev"
    },
    "breakpoints": {
        "0": {
            "slidesPerView": 1
        },
        "490": {
            "slidesPerView": 1.5
        },
        "768": {
            "slidesPerView": 2
        },
        "1024": {
            "slidesPerView": 3
        },
        "1200": {
            "slidesPerView": 3.5
        },
        "1400": {
            "slidesPerView": 4
        }
    }

}'
>
        <div class="swiper-wrapper">

            <div class="swiper-slide">
                <div class="single__cat d-flex gap-4">
                    <div class="single__cat__icon color-1">
                        <img src="{{ asset('assets/img/home-1/cat/1.svg') }}" alt="">
                    </div>
                    <div class="single__cat__link d-flex flex-column">
                        <a href="job-list-1.html" aria-label="cat__label">Construction & Infrastructure</a>
                        <span>130+ Jobs</span>
                    </div>
                </div>
            </div>

            <div class="swiper-slide">
                <div class="single__cat d-flex gap-4">
                    <div class="single__cat__icon color-2">
                        <img src="{{ asset('assets/img/home-1/cat/2.svg') }}" alt="">
                    </div>
                    <div class="single__cat__link d-flex flex-column">
                        <a href="job-list-1.html" aria-label="cat__label">Oil & &amp; Gas</a>
                        <span>130+ Jobs</span>
                    </div>
                </div>
            </div>

            <div class="swiper-slide">
                <div class="single__cat d-flex gap-4">
                    <div class="single__cat__icon color-3">
                        <img src="{{ asset('assets/img/home-1/cat/3.svg') }}" alt="">
                    </div>
                    <div class="single__cat__link d-flex flex-column">
                        <a href="job-list-1.html" aria-label="cat__label">Education</a>
                        <span>130+ Jobs</span>
                    </div>
                </div>
            </div>

            <div class="swiper-slide">
                <div class="single__cat d-flex gap-4">
                    <div class="single__cat__icon color-4">
                        <img src="{{ asset('assets/img/home-1/cat/4.svg') }}" alt="">
                    </div>
                    <div class="single__cat__link d-flex flex-column">
                        <a href="job-list-1.html" aria-label="cat__label">Agriculture</a>
                        <span>130+ Jobs</span>
                    </div>
                </div>
            </div>

             <div class="swiper-slide">
                <div class="single__cat d-flex gap-4">
                    <div class="single__cat__icon color-4">
                        <img src="{{ asset('assets/img/home-1/cat/4.svg') }}" alt="">
                    </div>
                    <div class="single__cat__link d-flex flex-column">
                        <a href="job-list-1.html" aria-label="cat__label">Manufacturing</a>
                        <span>130+ Jobs</span>
                    </div>
                </div>
            </div>

             <div class="swiper-slide">
                <div class="single__cat d-flex gap-4">
                    <div class="single__cat__icon color-4">
                        <img src="{{ asset('assets/img/home-1/cat/4.svg') }}" alt="">
                    </div>
                    <div class="single__cat__link d-flex flex-column">
                        <a href="job-list-1.html" aria-label="cat__label">Heavy Equipment</a>
                        <span>130+ Jobs</span>
                    </div>
                </div>
            </div>

            <div class="swiper-slide">
                <div class="single__cat d-flex gap-4">
                    <div class="single__cat__icon color-4">
                        <img src="{{ asset('assets/img/home-1/cat/4.svg') }}" alt="">
                    </div>
                    <div class="single__cat__link d-flex flex-column">
                        <a href="job-list-1.html" aria-label="cat__label">Facility Management</a>
                        <span>130+ Jobs</span>
                    </div>
                </div>
            </div>

            <div class="swiper-slide">
                <div class="single__cat d-flex gap-4">
                    <div class="single__cat__icon color-4">
                        <img src="{{ asset('assets/img/home-1/cat/4.svg') }}" alt="">
                    </div>
                    <div class="single__cat__link d-flex flex-column">
                        <a href="job-list-1.html" aria-label="cat__label">Healthcare (Secondary Sectors)</a>
                        <span>130+ Jobs</span>
                    </div>
                </div>
            </div>

             <div class="swiper-slide">
                <div class="single__cat d-flex gap-4">
                    <div class="single__cat__icon color-4">
                        <img src="{{ asset('assets/img/home-1/cat/4.svg') }}" alt="">
                    </div>
                    <div class="single__cat__link d-flex flex-column">
                        <a href="job-list-1.html" aria-label="cat__label">Hospitality</a>
                        <span>130+ Jobs</span>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
                <div class="rts__slider__control mt-40 dot__style">
                    <div class="rts__pagination"></div>
                </div>
            </div>
        </div>
        <!-- job category end -->

        <!-- work process area -->
        <section class="rts__section section__padding">
            <div class="container">
                <div class="row align-items-center justify-content-center g-30">
                    <div class="col-lg-5 offset-xl-1 col-xl-5">
                        <div class="rts__workprocess__image">
                            <img src="{{ asset('assets/img/home-3/about/about-image.webp') }}" alt="">
                            <div class="rts__applicants  wow animated fadeInLeft">
                                <span class="font-20 mb-3 d-block fw-medium">Applicants</span>
                                <div class="applicant__list">
                                    
                                    <div class="single__list">
                                        <img src="{{ asset('assets/img/author/1.svg') }}" alt="">
                                    </div>
                                    <div class="single__list">
                                        <img src="{{ asset('assets/img/author/2.svg') }}" alt="">
                                    </div>
                                    <div class="single__list">
                                        <img src="{{ asset('assets/img/author/3.svg') }}" alt="">
                                    </div>
                                    <div class="single__list">
                                        <img src="{{ asset('assets/img/author/4.svg') }}" alt="">
                                        <div class="icon-plus"><i class="fa-sharp fa-solid fa-plus"></i></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-7 col-xl-6">
                        <div class="rts__workprocess__content mx-0 mx-lg-5  wow animated fadeInUp">
                            <div class="rts__section__content text-start">
                                <h3 class="rts__section__title mb-3">How BestWork Works</h3>
                                <p class="rts__section__desc">From entry-level positions to executive roles browse through.   </p>
                            </div>
                            <div class="single__feature__list">
                                
                                <div class="single__item d-flex align-items-center flex-wrap flex-sm-nowrap gap-4">
                                    <div class="">
                                        <div class="icon">
                                            <img src="{{ asset('assets/img/icon/create.svg') }}" alt="">
                                        </div>
                                    </div>
                                    <div class="content">
                                        <span class="h6 d-block">Create a Free Account</span>
                                        <p>Consectetur adipisicing elit. Possimus aut mollitia eum ipsum fugiat odio officiis odit mollitia eum ipsum.</p>
                                    </div>
                                </div>
                                <div class="single__item d-flex align-items-center flex-wrap flex-sm-nowrap gap-4">
                                    <div class="">
                                        <div class="icon">
                                            <img src="{{ asset('assets/img/icon/khata.svg') }}" alt="">
                                        </div>
                                    </div>
                                    <div class="content">
                                        <span class="h6 d-block">Make Your Resume Amazing</span>
                                        <p>Consectetur adipisicing elit. Possimus aut mollitia eum ipsum fugiat odio officiis odit mollitia eum ipsum.</p>
                                    </div>
                                </div>
                                <div class="single__item d-flex align-items-center flex-wrap flex-sm-nowrap gap-4">
                                    <div class="">
                                        <div class="icon">
                                            <img src="{{ asset('assets/img/icon/apply.svg') }}" alt="">
                                        </div>
                                    </div>
                                    <div class="content">
                                        <span class="h6 d-block">Apply  job</span>
                                        <p>Consectetur adipisicing elit. Possimus aut mollitia eum ipsum fugiat odio officiis odit mollitia eum ipsum.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- work process area end -->

        <!-- featured job area -->
         <section class="rts__section section__padding featured__job featured__bg">
            <div class="container">
                <div class="row justify-content-between g-4 mb-60">
                    <div class="col-xl-6 col-lg-10">
    <div class="rts__section__content text-start  wow animated fadeInUp">
        <h3 class="rts__section__title section__mb">Featured Jobs</h3>
        <p class="rts__section__desc">From entry-level positions to executive roles browse through.</p>
    </div>
</div>
                    <div class="d-flex align-items-end max-content">
                        <a href="#" class="view__all text-white d-flex gap-2 align-items-center">View All Job <i class="fa-regular fa-arrow-right"></i></a>
                    </div>
                </div>
                <div class="row px-3 d-flex flex-column g-30">
                    
                    <!-- single job item -->
<div class="rts__job__card__big d-flex flex-wrap flex-md-nowrap gap-4 align-items-center">
    <div class="company__icon">
        <img src="{{ asset('assets/img/home-1/company/apple.svg') }}" alt="">
    </div>
    <div class="d-flex justify-content-between flex-wrap w-100 gap-3 gap-lg-2">
        <div class="job__meta">
            <div class="d-flex align-items-center justify-content-between gap-3">
                <a href="job-details-3.html" class="job__title h6 fw-semibold">Digital Marketer, Apple</a>
                <span class="badge d-none d-sm-block">Featured</span>
            </div>
            <div class="d-flex gap-3 flex-wrap gap-lg-4 fw-medium">
                <div class="d-flex gap-2 align-items-center">
                    <i class="fa-light fa-location-dot"></i> Manila, Philippines
                </div>
                <div class="d-flex gap-2 align-items-center">
                    <i class="fa-light rt-briefcase"></i> Full Time
                </div>
                <div class="d-flex gap-2 align-items-center">
                    <i class="fa-light fa-clock"></i> 15 Days Ago
                </div>
            </div>
        </div>
        <div class="d-flex gap-3 gap-lg-5 flex-wrap align-items-center">
            <div class="job__tags d-flex flex-wrap gap-3">
                <a href="#">Marketing</a>
                <a href="#">Digital</a> 
            </div>
            <div class="d-flex gap-3 flex-wrap">
                <div class="job__sallery d-flex gap-2 align-items-center">
                    <i class="fa-sharp rt-price-tag"></i> ₱28,000 <span>Monthly</span>
                </div>
                <button class="apply__btn">Apply Now</button>
            </div>
        </div>
    </div>
</div> 
<!-- single job item end --> 

<!-- BPO / Call Center -->
<div class="rts__job__card__big d-flex flex-wrap flex-md-nowrap gap-4 align-items-center">
    <div class="company__icon">
        <img src="{{ asset('assets/img/home-1/company/upwork.svg') }}" alt="">
    </div>
    <div class="d-flex justify-content-between flex-wrap w-100 gap-3 gap-lg-2">
        <div class="job__meta">
            <div class="d-flex align-items-center justify-content-between gap-3">
                <a href="job-details-3.html" class="job__title h6 fw-semibold">Customer Support Representative, BPO</a>
                <span class="badge d-none d-sm-block">Urgent</span>
            </div>
            <div class="d-flex gap-3 flex-wrap gap-lg-4 fw-medium">
                <div class="d-flex gap-2 align-items-center">
                    <i class="fa-light fa-location-dot"></i> Cebu City, Philippines
                </div>
                <div class="d-flex gap-2 align-items-center">
                    <i class="fa-light rt-briefcase"></i> Night Shift
                </div>
                <div class="d-flex gap-2 align-items-center">
                    <i class="fa-light fa-clock"></i> 7 Days Ago
                </div>
            </div>
        </div>
        <div class="d-flex gap-3 gap-lg-5 flex-wrap align-items-center">
            <div class="job__tags d-flex flex-wrap gap-3">
                <a href="#">BPO</a>
                <a href="#">Customer Service</a> 
            </div>
            <div class="d-flex gap-3 flex-wrap">
                <div class="job__sallery d-flex gap-2 align-items-center">
                    <i class="fa-sharp rt-price-tag"></i> ₱23,000 <span>Monthly</span>
                </div>
                <button class="apply__btn">Apply Now</button>
            </div>
        </div>
    </div>
</div> 
<!-- single job item end -->

<!-- Nursing / Healthcare -->
<div class="rts__job__card__big d-flex flex-wrap flex-md-nowrap gap-4 align-items-center">
    <div class="company__icon">
        <img src="{{ asset('assets/img/home-1/company/healthcare.svg') }}" alt="">
         <img src="{{ asset('assets/img/home-1/company/upwork.svg') }}" alt="">
    </div>
    <div class="d-flex justify-content-between flex-wrap w-100 gap-3 gap-lg-2">
        <div class="job__meta">
            <div class="d-flex align-items-center justify-content-between gap-3">
                <a href="job-details-3.html" class="job__title h6 fw-semibold">Staff Nurse, St. Luke’s Medical Center</a>
                <span class="badge d-none d-sm-block">Featured</span>
            </div>
            <div class="d-flex gap-3 flex-wrap gap-lg-4 fw-medium">
                <div class="d-flex gap-2 align-items-center">
                    <i class="fa-light fa-location-dot"></i> Quezon City, Philippines
                </div>
                <div class="d-flex gap-2 align-items-center">
                    <i class="fa-light rt-briefcase"></i> Full Time
                </div>
                <div class="d-flex gap-2 align-items-center">
                    <i class="fa-light fa-clock"></i> 10 Days Ago
                </div>
            </div>
        </div>
        <div class="d-flex gap-3 gap-lg-5 flex-wrap align-items-center">
            <div class="job__tags d-flex flex-wrap gap-3">
                <a href="#">Healthcare</a>
                <a href="#">Nursing</a> 
            </div>
            <div class="d-flex gap-3 flex-wrap">
                <div class="job__sallery d-flex gap-2 align-items-center">
                    <i class="fa-sharp rt-price-tag"></i> ₱35,000 <span>Monthly</span>
                </div>
                <button class="apply__btn">Apply Now</button>
            </div>
        </div>
    </div>
</div> 
<!-- single job item end -->

<!-- Hospitality -->
<div class="rts__job__card__big d-flex flex-wrap flex-md-nowrap gap-4 align-items-center">
    <div class="company__icon">
        <img src="{{ asset('assets/img/home-1/company/hotel.svg') }}" alt="">
    </div>
    <div class="d-flex justify-content-between flex-wrap w-100 gap-3 gap-lg-2">
        <div class="job__meta">
            <div class="d-flex align-items-center justify-content-between gap-3">
                <a href="job-details-3.html" class="job__title h6 fw-semibold">Front Desk Officer, Marriott Hotel</a>
                <span class="badge d-none d-sm-block">Urgent</span>
            </div>
            <div class="d-flex gap-3 flex-wrap gap-lg-4 fw-medium">
                <div class="d-flex gap-2 align-items-center">
                    <i class="fa-light fa-location-dot"></i> Makati, Philippines
                </div>
                <div class="d-flex gap-2 align-items-center">
                    <i class="fa-light rt-briefcase"></i> Full Time
                </div>
                <div class="d-flex gap-2 align-items-center">
                    <i class="fa-light fa-clock"></i> 5 Days Ago
                </div>
            </div>
        </div>
        <div class="d-flex gap-3 gap-lg-5 flex-wrap align-items-center">
            <div class="job__tags d-flex flex-wrap gap-3">
                <a href="#">Hospitality</a>
                <a href="#">Customer Service</a> 
            </div>
            <div class="d-flex gap-3 flex-wrap">
                <div class="job__sallery d-flex gap-2 align-items-center">
                    <i class="fa-sharp rt-price-tag"></i> ₱25,000 <span>Monthly</span>
                </div>
                <button class="apply__btn">Apply Now</button>
            </div>
        </div>
    </div>
</div> 
<!-- single job item end -->

<!-- Construction & Skilled Work -->
<div class="rts__job__card__big d-flex flex-wrap flex-md-nowrap gap-4 align-items-center">
    <div class="company__icon">
        <img src="{{ asset('assets/img/home-1/company/construction.svg') }}" alt="">
    </div>
    <div class="d-flex justify-content-between flex-wrap w-100 gap-3 gap-lg-2">
        <div class="job__meta">
            <div class="d-flex align-items-center justify-content-between gap-3">
                <a href="job-details-3.html" class="job__title h6 fw-semibold">Construction Worker, DMCI</a>
                <span class="badge d-none d-sm-block">Featured</span>
            </div>
            <div class="d-flex gap-3 flex-wrap gap-lg-4 fw-medium">
                <div class="d-flex gap-2 align-items-center">
                    <i class="fa-light fa-location-dot"></i> Davao City, Philippines
                </div>
                <div class="d-flex gap-2 align-items-center">
                    <i class="fa-light rt-briefcase"></i> Project Based
                </div>
                <div class="d-flex gap-2 align-items-center">
                    <i class="fa-light fa-clock"></i> 12 Days Ago
                </div>
            </div>
        </div>
        <div class="d-flex gap-3 gap-lg-5 flex-wrap align-items-center">
            <div class="job__tags d-flex flex-wrap gap-3">
                <a href="#">Construction</a>
                <a href="#">Labor</a> 
            </div>
            <div class="d-flex gap-3 flex-wrap">
                <div class="job__sallery d-flex gap-2 align-items-center">
                    <i class="fa-sharp rt-price-tag"></i> ₱18,000 <span>Monthly</span>
                </div>
                <button class="apply__btn">Apply Now</button>
            </div>
        </div>
    </div>
</div> 
<!-- single job item end -->
                </div>
            </div>
         </section>
        <!-- featured job area end -->

        <!-- top employer -->
        <section class="rts__section section__padding">
            <div class="container">
                <div class="row justify-content-center mb-50">
                    <div class="col-xl-6 col-lg-10">
    <div class="rts__section__content text-center  wow animated fadeInUp">
        <h3 class="rts__section__title section__mb">Top Employers</h3>
        <p class="rts__section__desc">Looking for your next career opportunity. Look no further</p>
    </div>
</div>
                </div>
                <div class="row g-30">
                    <div class="col-lg-6">
                        <div class="rts__single__employer d-flex flex-wrap gap-4 justify-content-between align-items-center">
                            <div class="d-flex gap-4 align-items-center">
                                <div class="icon">
                                    <img src="{{ asset('assets/img/icon/linkedin.svg') }}" alt="">
                                </div>
                                <div class="content">
                                    <a href="employer-details-1.html" class="font-20 fw-semibold text-dark">LinkedIn</a>
                                    <span class="d-block">Construction Worker</span>
                                </div>
                            </div>
                            <div class="d-flex gap-4 align-items-center flex-wrap">
                                <div class="d-flex gap-3 align-items-center">
                                    <i class="fa-light fa-location-dot text-dark"></i> Newyork, USA
                                </div>
                                <button class="apply__btn">Open Job (4)</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="rts__single__employer d-flex flex-wrap gap-4 justify-content-between align-items-center">
                            <div class="d-flex gap-4 align-items-center">
                                <div class="icon">
                                    <img src="assets/img/icon/upwork.svg" alt="">
                                </div>
                                <div class="content">
                                    <a href="employer-details-1.html" class="font-20 fw-semibold text-dark">Upwork Inc</a>
                                    <span class="d-block">CSR</span>
                                </div>
                            </div>
                            <div class="d-flex gap-4 align-items-center flex-wrap">
                                <div class="d-flex gap-3 align-items-center">
                                    <i class="fa-light fa-location-dot text-dark"></i> Newyork, USA
                                </div>
                                <button class="apply__btn">Open Job (4)</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="rts__single__employer d-flex flex-wrap gap-4 justify-content-between align-items-center">
                            <div class="d-flex gap-4 align-items-center">
                                <div class="icon">
                                    <img src="{{ asset('assets/img/icon/microsoft.svg') }}" alt="">
                                </div>
                                <div class="content">
                                    <a href="employer-details-1.html" class="font-20 fw-semibold text-dark">Microsoft.com</a>
                                    <span class="d-block">Nurse</span>
                                </div>
                            </div>
                            <div class="d-flex gap-4 align-items-center flex-wrap">
                                <div class="d-flex gap-3 align-items-center">
                                    <i class="fa-light fa-location-dot text-dark"></i> Newyork, USA
                                </div>
                                <button class="apply__btn">Open Job (4)</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="rts__single__employer d-flex flex-wrap gap-4 justify-content-between align-items-center">
                            <div class="d-flex gap-4 align-items-center">
                                <div class="icon">
                                    <img src="{{ asset('assets/img/icon/google.svg') }}" alt="">
                                </div>
                                <div class="content">
                                    <a href="employer-details-1.html" class="font-20 fw-semibold text-dark">Google LLC</a>
                                    <span class="d-block">Admin</span>
                                </div>
                            </div>
                            <div class="d-flex gap-4 align-items-center flex-wrap">
                                <div class="d-flex gap-3 align-items-center">
                                    <i class="fa-light fa-location-dot text-dark"></i> Newyork, USA
                                </div>
                                <button class="apply__btn">Open Job (4)</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- top employer end -->

        <!-- explore job city -->
         <section class="rts__section pb-120">
            <div class="container">
                <div class="row justify-content-between gap-4 mb-50">
                    <div class="col-xl-6 col-lg-10">
    <div class="rts__section__content text-start  wow animated fadeInUp">
        <h3 class="rts__section__title section__mb">Explore Nearby with BestWork</h3>
        <p class="rts__section__desc">Looking for your next career opportunity. Look no further</p>
    </div>
</div>
                    <div class="d-flex align-items-end max-content">
                        <a href="#" class="view__all text-dark d-flex gap-2 align-items-center">View All <i class="fa-regular fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="explore__job__slider swiper swiper-data" data-swiper='
            {
            "slidesPerView": 6.5, 
            "spaceBetween": 30,
            "loop": true,
            "speed": 1000,
            "centeredSlides": true,
            "autoplay":{
                "delay":"7000"
            },
            "breakpoints": {
                "1200": {
                    "slidesPerView": 5
                },
                "992": {
                    "slidesPerView": 4
                },
                "768": {
                    "slidesPerView": 2.5
                },
                "576": {
                    "slidesPerView": 2
                },
                "0": {
                    "slidesPerView": 1.5
                }
            }
        
        }'>
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="single__destination__item is__full__width">
                            <div class="d-block">
                                <div class="destination__thumb">
                                    <a href="#">
                                        <img src="{{ asset('assets/img/home-3/job/1.webp') }}" alt="">
                                    </a>
                                </div>
                                <div class="destination__meta text-center">
                                    <a href="#" class="d-block h6 mb-0">New York City</a>
                                    <span class="d-block">90+ Jobs</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="single__destination__item is__full__width">
                            <div class="d-block">
                                <div class="destination__thumb">
                                    <a href="#">
                                        <img src="{{ asset('assets/img/home-3/job/2.webp') }}" alt="">
                                    </a>
                                </div>
                                <div class="destination__meta text-center">
                                    <a href="#" class="d-block h6 mb-0">New York City</a>
                                    <span class="d-block">90+ Jobs</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="single__destination__item is__full__width">
                            <div class="d-block">
                                <div class="destination__thumb">
                                    <a href="#">
                                        <img src="{{ asset('assets/img/home-3/job/3.webp') }}" alt="">
                                    </a>
                                </div>
                                <div class="destination__meta text-center">
                                    <a href="#" class="d-block h6 mb-0">New York City</a>
                                    <span class="d-block">90+ Jobs</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="single__destination__item is__full__width">
                            <div class="d-block">
                                <div class="destination__thumb">
                                    <a href="#">
                                        <img src="{{ asset('assets/img/home-3/job/4.webp') }}" alt="">
                                    </a>
                                </div>
                                <div class="destination__meta text-center">
                                    <a href="#" class="d-block h6 mb-0">New York City</a>
                                    <span class="d-block">90+ Jobs</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="single__destination__item is__full__width">
                            <div class="d-block">
                                <div class="destination__thumb">
                                    <a href="#">
                                        <img src="{{ asset('assets/img/home-3/job/5.webp') }}" alt="">
                                    </a>
                                </div>
                                <div class="destination__meta text-center">
                                    <a href="#" class="d-block h6 mb-0">New York City</a>
                                    <span class="d-block">90+ Jobs</span>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
         </section>
        <!-- explore job city end -->

        <!-- funfact section -->
        <div class="rts__section section__padding funfact__bg funfact__style__two  ">
            <div class="container">
                <div class="d-flex flex-wrap gap-5 justify-content-md-between justify-content-center wow animated fadeInUp">
                    <div class="rts__single__counter text-center">
                        <h2 class="fw-bold text-white"><span class="counter">20</span>K</h2>
                        <p class="h6 mb-0 fw-medium">Happy Employer</p>
                    </div>
                    <div class="rts__single__counter text-center">
                        <h2 class="fw-bold text-white"><span class="counter">11</span>K</h2>
                        <p class="h6 mb-0 fw-medium">Opening Position</p>
                    </div>

                    <div class="rts__single__counter text-center">
                        <h2 class="fw-bold text-white"><span class="counter">1</span>M</h2>
                        <p class="h6 mb-0 fw-medium">Daily active users</p>
                    </div>
                
                
                    <div class="rts__single__counter text-center">
                        <h2 class="fw-bold text-white"><span class="counter">100</span>+</h2>
                        <p class="h6 mb-0 fw-medium">Job Categories</p>
                    </div>
                </div>
            </div>
        </div>
        <!-- funfact section end -->

        

        <!-- testimonial section -->
        <div class="rts__section testimonial__style__three">
            <div class="container position-relative">
                <div class="row">
                    <div class="col-lg-10 col-xl-6">
                        <div class="rts__section__content text-start mb-40">
                            <h3 class="rts__section__title">What Our Customer Saying</h3>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-11 col-md-12">
                        <div class="rts__testimonial__active overflow-hidden swiper-data testimonial__style__three" data-swiper='{
                            "slidesPerView": 1,
                            "autoplay": true,
                            "loop": true,
                            "navigation": {
                                "nextEl": ".rts__slide__next",
                                "prevEl": ".rts__slide__prev"
                            }
                        }'>
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="rts__single__testimonial text-start">
                                        <span class="testimonial__text">Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia.</span>
                                        <div class="d-flex align-items-center gap-3 pt-40 max-content">
                                            <div class="author__image">
                                                <img src="assets/img/home-1/testimonial/author.jpg" alt="">
                                            </div>
                                            <div class="author__content text-start">
                                                <span class="h6">Alexander Joy</span>
                                                <p>Oil</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="rts__single__testimonial text-start">
                                        <span class="testimonial__text text-dark h5 fw-semibold">Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia.</span>
                                        <div class="d-flex align-items-center gap-3 pt-40 max-content">
                                            <div class="author__image">
                                                <img src="{{ asset('assets/img/home-1/testimonial/author.jpg') }}" alt="">
                                            </div>
                                            <div class="author__content text-start">
                                                <span class="h6">Alexander Joy</span>
                                                <p>Gas</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="rts__slider__control d-none d-sm-flex d-flex gap-2 max-content position-absolute z-3 end-0 bottom-0">
                        <div class="rts__slide__next slider__btn"><i class="fa-sharp fa-solid fa-chevron-left"></i></div>
                        <div class="rts__slide__prev slider__btn"><i class="fa-sharp fa-solid fa-chevron-right"></i></div>
                    </div>
                </div>
            </div>
        </div>
        <!-- testimonial section end -->


         <!-- brand area -->
         <div class="rts__section rts__brand pb-120 pt-120 style__none text-center">
    <div class="container">
        <div class="row">
            <div class="section__title mb-40">
                <span class="h6 d-block fw-semibold">Trusted by 300+ leading companies</span>
            </div>
        </div>
        <div class="row align-items-center">
            <div class="rts__brand__slider overflow-hidden swiper-data" data-swiper='{
                "slidesPerView":7,
                "loop": true,
                "speed": 1000,
                "autoplay":{
                    "delay":"7000"
                },

                "breakpoints": {
                    "0": {
                        "slidesPerView": 2
                    },
                    "480": {
                        "slidesPerView": 3
                    },
                    "768": {
                        "slidesPerView": 4
                    },
                    "1024": {
                        "slidesPerView": 4
                    },
                    "1200": {
                        "slidesPerView": 6
                    },
                    "1400": {
                        "slidesPerView": 7
                    }
                }

            }'>
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="brand__item">
                            <a href="#" class="brand__item__link" aria-label="brand">
                                <img src="{{ asset('assets/img/home-1/brand/b51.svg') }}" alt="">
                            </a>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="brand__item">
                            <a href="#" class="brand__item__link" aria-label="brand">
                                <img src="{{ asset('assets/img/home-1/brand/image1.svg') }}" alt="">
                            </a>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="brand__item">
                            <a href="#" class="brand__item__link" aria-label="brand">
                                <img src="{{ asset('assets/img/home-1/brand/image2.svg') }}" alt="">
                            </a>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="brand__item">
                            <a href="#" class="brand__item__link" aria-label="brand">
                                <img src="{{ asset('assets/img/home-1/brand/image3.svg') }}" alt="">
                            </a>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="brand__item">
                            <a href="#" class="brand__item__link" aria-label="brand">
                                <img src="{{ asset('assets/img/home-1/brand/image4.svg') }}" alt="">
                            </a>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="brand__item">
                            <a href="#" class="brand__item__link" aria-label="brand">
                                <img src="{{ asset('assets/img/home-1/brand/image5.svg') }}" alt="">
                            </a>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="brand__item">
                            <a href="#" class="brand__item__link" aria-label="brand">
                                <img src="{{ asset('assets/img/home-1/brand/image1.svg') }}" alt="">
                            </a>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="brand__item">
                            <a href="#" class="brand__item__link" aria-label="brand">
                                <img src="{{ asset('assets/img/home-1/brand/linkedin-logo-png-20321.svg') }}" alt="">
                            </a>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
         <!-- brand area end -->

    <footer class="rts__section pt-80 footer__home__three">
    <div class="container">
        <div class="rts__footer__newsletter d-flex flex-wrap flex-lg-nowrap gap-5 justify-content-md-center 
        justify-content-lg-between align-items-center pb-60">
            <div class="text-white text-center text-lg-start">
                <h3 class="text-white text-center text-md-start mb-3">Subscribe To Get Our  Newsletter</h3>
                <p>Looking for your next career opportunity. Look no further</p>
            </div>
            <div class="footer__newsletter__three">
                <form action="#" method="post" class="d-flex justify-content-between">
                    <input type="email" name="semail" id="semail" placeholder="Enter your email" required>
                    <button type="submit" class="rts__btn fill__btn newsletter__btn">Subscribe</button>
                </form>
            </div>
        </div>
    </div>
    <div class="footer__bottom py-40 text-white">
        <div class="container">
            <div class="row">
                <div class="footer__bottom__content d-flex flex-wrap gap-4 
                align-items-center justify-content-between">
                    <a href="#" class="footer__logo">
  <img src="assets/img/best work transparent.png" alt="Best Work Logo" style="width: 100px; height: auto;">
</a>

                    <div class="rts__social d-flex gap-3 social__three">
    <a href="https://facebook.com"  aria-label="facebook">
        <i class="fa-brands fa-facebook"></i>
    </a>
    <a href="https://instagram.com"  aria-label="instagram">
        <i class="fa-brands fa-instagram"></i>
    </a>
    <a href="https://linkedin.com"  aria-label="linkedin">
        <i class="fa-brands fa-linkedin"></i>
    </a>
    <a href="https://pinterest.com"  aria-label="pinterest">
        <i class="fa-brands fa-pinterest"></i>
    </a>
    <a href="https://youtube.com"  aria-label="youtube">
        <i class="fa-brands fa-youtube"></i>
    </a>
</div>
                    <p>Copyright &copy; 2025 All Rights Reserved by <a href="index.html">Best Work</a></p>
                </div>
            </div>
        </div>
    </div>
</footer>


    

<div class="modal similar__modal fade " id="loginModal">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="max-content similar__form form__padding">
            <div class="d-flex mb-3 align-items-center justify-content-between">
                <h6 class="mb-0">Login To Best Work</h6>
                <button type="button" data-bs-dismiss="modal" aria-label="Close">
                    <i class="fa-regular fa-xmark text-primary"></i>
                </button>
            </div>
            <div class="d-block has__line text-center"><p>Choose your Account Type</p></div>
            
            <div class="tab__switch flex-wrap flex-sm-nowrap nav-tab mt-30 mb-30">
                <button class="rts__btn nav-link  active"><i class="fa-light fa-user"></i>Candidate</button>
                <button class="rts__btn nav-link"><i class="rt-briefcase"></i> Employer</button>
            </div>
            <div class="tab-content" id="">
                
            </div>
            <form action="candidate-dashboard.html" method="post" class="d-flex flex-column gap-3">
                <div class="form-group">
                    <label for="email" class="fw-medium text-dark mb-3">Your Email</label>
                    <div class="position-relative">
                        <input type="email" name="email" id="email" value="user@test.com" placeholder="Enter your email" required>
                        <i class="fa-light fa-user icon"></i>
                    </div>
                </div>
                <div class="form-group">
                    <label for="password" class="fw-medium text-dark mb-3">Password</label>
                    <div class="position-relative">
                        <input type="password" name="password" value="1234" id="password" placeholder="Enter your password" required>
                        <i class="fa-light fa-lock icon"></i>
                    </div>
                </div>
                <div class="d-flex flex-wrap justify-content-between align-items-center fw-medium">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                        <label class="form-check-label" for="flexCheckDefault">
                            Remember me
                        </label>
                    </div>
                    <a href="#" class="forgot__password text-para" data-bs-toggle="modal" data-bs-target="#forgotModal" >Forgot Password?</a>
                </div>
                <div class="form-group my-3">
                    <button class="rts__btn w-100 fill__btn">Login</button>
                </div>
            </form>
            <div class="d-block has__line text-center"><p>Or</p></div>
            <div class="d-flex gap-4 flex-wrap justify-content-center mt-20 mb-20">
                <div class="is__social google">
                    <button><img src="{{ asset('img/icon/google-small.svg') }}" alt="">Continue with Google</button>
                </div>
                <div class="is__social facebook">
                    <button><img src="{{ asset('assets/img/icon/facebook-small.svg') }}" alt="">Continue with Facebook</button>
                </div>
            </div>
            <span class="d-block text-center fw-medium">Don`t have an account? <a href="#" data-bs-target="#signupModal" data-bs-toggle="modal" class="text-primary">Sign Up</a> </span>
        </div>
      </div>
    </div>
</div>

<!-- signup form -->
<div class="modal similar__modal fade " id="signupModal">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="max-content similar__form form__padding">
            <div class="d-flex mb-3 align-items-center justify-content-between">
                <h6 class="mb-0">Create A Free Account</h6>
                <button type="button" data-bs-dismiss="modal" aria-label="Close">
                    <i class="fa-regular fa-xmark text-primary"></i>
                </button>
            </div>
            <div class="d-block has__line text-center"><p>Choose your Account Type</p></div>
            
            <div class="tab__switch flex-wrap flex-sm-nowrap nav-tab mt-30 mb-30">
                <button class="rts__btn nav-link  active"><i class="fa-light fa-user"></i>Candidate</button>
                <button class="rts__btn nav-link"><i class="rt-briefcase"></i> Employer</button>
            </div>
            <form action="#" class="d-flex flex-column gap-3">
                
                <div class="form-group">
                    <label for="sname" class="fw-medium text-dark mb-3">Your Name</label>
                    <div class="position-relative">
                        <input type="text" name="sname" id="sname" placeholder="Candidate" required>
                        <i class="fa-light fa-user icon"></i>
                    </div>
                </div>

                <div class="form-group">
                    <label for="signemail" class="fw-medium text-dark mb-3">Your Email</label>
                    <div class="position-relative">
                        <input type="email" name="signemail" id="signemail" placeholder="Enter your email" required>
                        <i class="fa-sharp fa-light fa-envelope icon"></i>
                    </div>
                </div>
                <div class="form-group">
                    <label for="spassword" class="fw-medium text-dark mb-3">Password</label>
                    <div class="position-relative">
                        <input type="password" name="spassword" id="spassword" placeholder="Enter your password" required>
                        <i class="fa-light fa-lock icon"></i>
                    </div>
                </div>
                
                <div class="form-group my-3">
                    <button class="rts__btn w-100 fill__btn">Login</button>
                </div>
            </form>
            <div class="d-block has__line text-center"><p>Or</p></div>
            <div class="d-flex flex-wrap justify-content-center gap-4 mt-20 mb-20">
                <div class="is__social google">
                    <button><img src="{{ asset('img/icon/google-small.svg') }}" alt="">Continue with Google</button>
                </div>
                <div class="is__social facebook">
                    <button><img src="{{ asset('img/icon/facebook-small.svg') }}" alt="">Continue with Facebook</button>
                </div>
            </div>
            <span class="d-block text-center fw-medium">Have an account? <a href="#" data-bs-target="#loginModal" data-bs-toggle="modal" class="text-primary">Login</a> </span>
        </div>
      </div>
    </div>
</div>

<!-- forgot password form -->
<div class="modal similar__modal fade " id="forgotModal">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="max-content similar__form form__padding">
            <div class="d-flex mb-3 align-items-center justify-content-between">
                <h6 class="mb-0">Forgot Password</h6>
                <button type="button" data-bs-dismiss="modal" aria-label="Close">
                    <i class="fa-regular fa-xmark text-primary"></i>
                </button>
            </div>
            <form action="#" class="d-flex flex-column gap-3">
                
                <div class="form-group">
                    <label for="fmail" class="fw-medium text-dark mb-3">Your Email</label>
                    <div class="position-relative">
                        <input type="email" name="email" id="fmail" placeholder="Enter your email" required>
                        <i class="fa-sharp fa-light fa-envelope icon"></i>
                    </div>
                </div>
                
                <div class="form-group my-3">
                    <button class="rts__btn w-100 fill__btn">Reset Password</button>
                </div>
            </form>
        
            <span class="d-block text-center fw-medium">Remember Your Password? <a href="#" data-bs-target="#loginModal" data-bs-toggle="modal" class="text-primary">Login</a> </span>
        </div>
      </div>
    </div>
</div>
  
    

  
  <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvas" aria-labelledby="offcanvasLabel">
    <div class="offcanvas-header p-0 mb-5 mt-4">
      <a href="index.html" class="offcanvas-title" id="offcanvasLabel">
        <img src="{{ asset('img/logo/header__one.svg') }}" alt="logo">
      </a> 
      <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <!-- login offcanvas -->
     <div class="mb-4 d-block d-sm-none">
      <div class="header__right__btn d-flex justify-content-center gap-3">
        <a href="#" class="small__btn no__fill__btn border-6 font-xs" aria-label="Login Button" data-bs-toggle="modal" data-bs-target="#loginModal"> <i class="rt-login"></i>Sign In</a>
        
    </div>
     </div>
    <div class="offcanvas-body p-0">
      <div class="rts__offcanvas__menu overflow-hidden">
        <div class="offcanvas__menu"></div>
      </div>
      <p class="max-auto font-20 fw-medium text-center text-decoration-underline mt-4">Our Social Links</p>
      <div class="rts__social d-flex justify-content-center gap-3 mt-3">
    <a href="https://facebook.com"  aria-label="facebook">
        <i class="fa-brands fa-facebook"></i>
    </a>
    <a href="https://instagram.com"  aria-label="instagram">
        <i class="fa-brands fa-instagram"></i>
    </a>
    <a href="https://linkedin.com"  aria-label="linkedin">
        <i class="fa-brands fa-linkedin"></i>
    </a>
    <a href="https://pinterest.com"  aria-label="pinterest">
        <i class="fa-brands fa-pinterest"></i>
    </a>
    <a href="https://youtube.com"  aria-label="youtube">
        <i class="fa-brands fa-youtube"></i>
    </a>
</div>
    </div>
  </div>
<!-- THEME PRELOADER START -->
<div class="loader-wrapper">
    <div class="loader">
    </div>
    <div class="loader-section section-left"></div>
    <div class="loader-section section-right"></div>
</div>
<!-- THEME PRELOADER END -->
<button type="button" class="rts__back__top" id="rts-back-to-top">
    <i class="fas fa-arrow-up"></i>
</button>
<!-- all plugin js -->

@include('partials.js')

</body>
</html>