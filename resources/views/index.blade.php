<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <title>Document</title>
    
</head>

<body>

    <header class="container-fluid fixed">
        <nav class="row">
            <div class="col-xs col-sm-2 col-md-2 col-lg-2 logo-wrapper flex-md-shrink flex-lg-shrink"> <a href="index.html" class="logo"> <img src="https://multi-site-ui.wisharemediacdn.com/images/9849fd5c2849d275c8b783682347cd2e/logo_freight_right_horizontal.svg?v=20210706154217" alt="Freight Right" /> </a> </div>
            <div id="menu"
                class="nav-wrapper col-xs col-md-10 col-lg-10 flex-md-grow flex-lg-grow show-md-flex show-lg-flex end-xs">
                <ul class="list list-flex">
                    <li>
                        <a class="active" href="{{url('/')}}" title="Home">Home</a>
                    </li>
                   
                    <li>
                        <a href="{{url('/about')}}" title="About Us">About Us</a>
                    </li>
                    <li>
                        <a href="{{url('contact-us')}}" title="Contact Us">Contact Us</a>
                    </li>
                    <li>
                        <a href="{{url('our-services')}}" title="Contact Us">Our Services</a>
                    </li>
                    <li>
                        <a data-submenu="#submenu-track-a-shipment" href="#" title="Track a Shipment">Track a
                            Shipment</a>
                        <div id="submenu-track-a-shipment" class="subnav-wrapper">
                            <div class="show-xs-flex flex-xs-column pr-xs-4 pt-xs-4 pb-xs-4 pl-xs-4">
                                <p class="mb-lg-1 text-xs-center text-md-left">Enter Your Tracking Number</p>
                                <form class="show-xs-flex flex-xs-column flex-md-row" method="POST"
                                    action="https://f12jgx-webtracker.wisegrid.net/Login/Login.aspx" target="_blank">
                                    <input type="hidden" name="__VIEWSTATE"
                                        value="/wEPDwUKLTQxMzExODgwNWQYAQUeX19Db250cm9sc1JlcXVpcmVQb3N0QmFja0tleV9fFgEFClpDaGVja0JveDGwVjkmnufBggcIVtWdh179TwIP1g==">
                                    <input type="hidden" name="FindBtn" value="Find">
                                    <input type="hidden" name="__EVENTVALIDATION"
                                        value="/wEdAAuOfNDRTdbqRG63ZhIJg2s55N6GKXPRi5S0DJMsHoMYt843Pz+KF0QwKGUPIy0Nq/LZR4N0D4H5HBFwywDx7UYoI7XYTiiV8Kq6dH9J82YOQTCiy8QkSzThMdjVlcCh87Dil0z6JziwC8YXwif7L6X53Lt2iPZwf5JRYNfIhT10GilUmQzDM3/ylWPOwJCThNPTdDYyJdSkBdHEr7sWz+wqBIRq5vIxFxx5aS8WNpiK+/CjBUoqeZ66DKYWRZJuaPACGEQ3">
                                    <input class="form-control mb-xs-2" type="text"
                                        name="ShipmentHousebillNumberTextbox" />
                                    <button type="submit"
                                        class="text-uppercase btn btn-ouline-sm btn-outline btn-caret ml-lg-1 mb-xs-2">Track
                                        <svg class="svg-inline--fa fa-chevron-right fa-w-10" aria-hidden="true"
                                            focusable="false" data-prefix="fas" data-icon="chevron-right" role="img"
                                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512" data-fa-i2svg="">
                                            <path fill="currentColor"
                                                d="M285.476 272.971L91.132 467.314c-9.373 9.373-24.569 9.373-33.941 0l-22.667-22.667c-9.357-9.357-9.375-24.522-.04-33.901L188.505 256 34.484 101.255c-9.335-9.379-9.317-24.544.04-33.901l22.667-22.667c9.373-9.373 24.569-9.373 33.941 0L285.475 239.03c9.373 9.372 9.373 24.568.001 33.941z">
                                            </path>
                                        </svg>
                                    </button>
                                </form>
                            </div>
                        </div>
                    </li>
                    <li>
                        <a data-submenu="#submenu-login" href="#" title="Login">Login</a>
                        <div id="submenu-login" class="subnav-wrapper">
                            <ul class="list list-flex" style="justify-content: flex-start;">
                                <li style="max-height: 60px;">
                                    <a href="https://customs.freightright.com/" target="_blank"
                                        class="text-xs-center show-xs-flex "> Customers </a>
                                </li>
                                <li style="max-height: 60px;">
                                    <a href="https://f12jgx-webtracker.wisegrid.net/Login/Login.aspx?ReturnUrl=%2fDefault.aspx/Login/Login.aspx?ReturnUrl=%2fDefault.aspx"
                                        class="text-xs-center show-xs-flex "> Supply Chain Visibility </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="hamburger-icon-wrapper col-xs hide-md hide-lg show-xs-flex end-xs middle-xs">
                <a href="#" id="nav-hamb">
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                </a>
            </div>
        </nav>
    </header>
    <div class="wi-page-content">
        <section class="section section-lg hero-video lozad" id="hero-video"
            data-background-image="{{asset('images/605e66f593c2626e8e9c0176ad5cecc1.jpg')}}">
            <a data-smooth="#submenu-section" href="#submenu-section"
                class="go-down hide-xs show-md-block show-lg-block">
                <img class="lozad"
                    data-src="https://multi-site-ui.wisharemediacdn.com/images/9849fd5c2849d275c8b783682347cd2e/icn_angle_double_down.svg?v=20210706154217"
                    alt="Go Down" />
            </a>
            <div class="mask mask-50"></div>
            <video preload='metadata' playsinline="" muted="" loop="">
                <source src="{{asset('videos/home.mp4')}}" type="video/mp4"> Your
                browser does not support the video tag.
            </video>
            <div class="mask-overlay show-xs-flex bottom-md bottom-lg middle-xs">
                <div class="container">
                    <div
                        class="row text-xs-center text-sm-center text-md-left text-lg-left start-xs hero-video-text-wrapper">
                        <div class="col-xs-12 col-sm-12 col-md-7 col-lg-6">
                            <div class="hero-video-text text-white paragraph-heighline mb-lg-3 mb-xs-3">
                                <h3>Simple, reliable logistics.</h3>
                                <p>
                                    <span style="font-size:17px;">W</span>e deliver global supply chain solutions.
                                </p>
                            </div>
                            <ul class="list list-unstyle list-space">
                                <li>
                                    <a href="https://f12jgx-webtracker.wisegrid.net/Login/Login.aspx?ReturnUrl=%2fDefault.aspx/Login/Login.aspx?ReturnUrl=%2fDefault.aspx"
                                        target="_blank"
                                        class="btn btn-outline btn-outline-white btn-outline-lg btn-caret"
                                        title="TRACK A SHIPMENT"> TRACK A SHIPMENT
                                        <svg class="svg-inline--fa fa-chevron-right fa-w-10" aria-hidden="true"
                                            focusable="false" data-prefix="fas" data-icon="chevron-right" role="img"
                                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512" data-fa-i2svg="">
                                            <path fill="currentColor"
                                                d="M285.476 272.971L91.132 467.314c-9.373 9.373-24.569 9.373-33.941 0l-22.667-22.667c-9.357-9.357-9.375-24.522-.04-33.901L188.505 256 34.484 101.255c-9.335-9.379-9.317-24.544.04-33.901l22.667-22.667c9.373-9.373 24.569-9.373 33.941 0L285.475 239.03c9.373 9.372 9.373 24.568.001 33.941z">
                                            </path>
                                        </svg>
                                    </a>
                                </li>
                                <li>
                                    <a href="https://www.freightright.com/quote"
                                        class="btn btn-outline btn-outline-white btn-outline-lg btn-caret"
                                        title="GET A QUOTE"> GET A QUOTE
                                        <svg class="svg-inline--fa fa-chevron-right fa-w-10" aria-hidden="true"
                                            focusable="false" data-prefix="fas" data-icon="chevron-right" role="img"
                                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512" data-fa-i2svg="">
                                            <path fill="currentColor"
                                                d="M285.476 272.971L91.132 467.314c-9.373 9.373-24.569 9.373-33.941 0l-22.667-22.667c-9.357-9.357-9.375-24.522-.04-33.901L188.505 256 34.484 101.255c-9.335-9.379-9.317-24.544.04-33.901l22.667-22.667c9.373-9.373 24.569-9.373 33.941 0L285.475 239.03c9.373 9.372 9.373 24.568.001 33.941z">
                                            </path>
                                        </svg>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="submenu-wrapper" id="submenu-section">
            <a href="https://www.freightright.com/solution/global-forwarding" class="text-xs-center show-xs-flex ">
                <img class="lozad"
                    data-src="https://multi-site-ui.wisharemediacdn.com/images/9849fd5c2849d275c8b783682347cd2e/icn_global_forwarding.svg?v=20210706154217"
                    alt="Global Forwarding"> Global Forwarding
            </a>
            <a href="https://www.freightright.com/solution/amazon-logistics" class="text-xs-center show-xs-flex ">
                <img class="lozad"
                    data-src="https://multi-site-ui.wisharemediacdn.com/images/9849fd5c2849d275c8b783682347cd2e/icn_amazon_logistics.svg?v=20210706154217"
                    alt="Amazon Logistics"> Amazon Logistics
            </a>
            <a href="https://www.freightright.com/solution/drayage" class="text-xs-center show-xs-flex ">
                <img class="lozad"
                    data-src="https://multi-site-ui.wisharemediacdn.com/images/9849fd5c2849d275c8b783682347cd2e/icn_drayage.svg?v=20210706154217"
                    alt="Drayage"> Drayage
            </a>
            <a href="https://www.freightright.com/solution/warehousing" class="text-xs-center show-xs-flex ">
                <img class="lozad"
                    data-src="https://multi-site-ui.wisharemediacdn.com/images/9849fd5c2849d275c8b783682347cd2e/icn_warehousing.svg?v=20210706154217"
                    alt="Warehousing"> Warehousing
            </a>
            <a href="https://www.freightright.com/solution/full-truckload" class="text-xs-center show-xs-flex ">
                <img class="lozad"
                    data-src="https://multi-site-ui.wisharemediacdn.com/images/9849fd5c2849d275c8b783682347cd2e/icn_full_truckIload.svg?v=20210706154217"
                    alt="Full Truckload"> Full Truckload
            </a>
            <a href="https://www.freightright.com/solution/less-than-truckload" class="text-xs-center show-xs-flex ">
                <img class="lozad"
                    data-src="https://multi-site-ui.wisharemediacdn.com/images/9849fd5c2849d275c8b783682347cd2e/icn_less_than_truckload.svg?v=20210706154217"
                    alt="Less-Than-Truckload"> Less-Than-Truckload
            </a>
            <a href="https://www.freightright.com/solution/intermodal" class="text-xs-center show-xs-flex ">
                <img class="lozad"
                    data-src="https://multi-site-ui.wisharemediacdn.com/images/9849fd5c2849d275c8b783682347cd2e/icn_intermodal.svg?v=20210706154217"
                    alt="Intermodal"> Intermodal
            </a>
            <a href="https://www.freightright.com/solution/consulting" class="text-xs-center show-xs-flex ">
                <img class="lozad"
                    data-src="https://multi-site-ui.wisharemediacdn.com/images/9849fd5c2849d275c8b783682347cd2e/icn_consulting.svg?v=20210706154217"
                    alt="Consulting"> Consulting
            </a>
        </section>
        <section class="hover-section" id="home-hover-section">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-xs-12 col-md-4 col-lg-4 hover-wrapper on"
                        onclick="window.location='https://www.freightright.com/solution'">
                        <div class="mask mask-40"></div>
                        <div class="media-container media-container-bg lozad"
                            data-background-image="{{asset('images/9849fd/home/home-solutions-v2.jpg')}}">
                        </div>
                        <div class="mask-overlay">
                            <h2 class="text-white text-lg-center text-xs-left mt-lg-4 mt-xs-4 pl-xs-2 pr-xs-2">
                                <b> Solutions </b>
                            </h2>
                            <div class="hover-info">
                                <div class="text-white">
                                    <p><span style="font-size:17px;">From planning and executing a simple shipment to a
                                            complex, international freight order, we offer a full suite of logistics
                                            services. Our expert team handles the most intricate supply chain demands,
                                            leaving you free to focus on building your business.</span></p>
                                </div>
                                <p>
                                    <a href="https://www.freightright.com/solution"
                                        class="btn btn-outline btn-outline-white btn-outline-sm btn-caret"
                                        title="READ MORE">READ MORE
                                        <svg class="svg-inline--fa fa-chevron-right fa-w-10" aria-hidden="true"
                                            focusable="false" data-prefix="fas" data-icon="chevron-right" role="img"
                                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512" data-fa-i2svg="">
                                            <path fill="currentColor"
                                                d="M285.476 272.971L91.132 467.314c-9.373 9.373-24.569 9.373-33.941 0l-22.667-22.667c-9.357-9.357-9.375-24.522-.04-33.901L188.505 256 34.484 101.255c-9.335-9.379-9.317-24.544.04-33.901l22.667-22.667c9.373-9.373 24.569-9.373 33.941 0L285.475 239.03c9.373 9.372 9.373 24.568.001 33.941z">
                                            </path>
                                        </svg>
                                    </a>
                                </p>
                                <a href="#" class="btn-open">
                                    <img
                                        src="https://multi-site-ui.wisharemediacdn.com/images/9849fd5c2849d275c8b783682347cd2e/icn_chevron_double_right.svg?v=20210706154217">
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-md-4 col-lg-4 hover-wrapper"
                        onclick="window.location='https://www.freightright.com/network'">
                        <div class="mask mask-40"></div>
                        <div class="media-container media-container-bg lozad"
                            data-background-image="{{asset('images/9849fd/home/home-network.jpg')}}">
                        </div>
                        <div class="mask-overlay">
                            <h2 class="text-white text-lg-center text-xs-left mt-lg-4 mt-xs-4 pl-xs-2 pr-xs-2">
                                <b> Network </b>
                            </h2>
                            <div class="hover-info">
                                <div class="text-white">
                                    <p><span style="font-size:17px;">With partners in 180 countries, we have a local
                                            expert on the ground whether you are in Los Angeles or Shanghai.</span></p>
                                </div>
                                <p> <a href="https://www.freightright.com/network"
                                        class="btn btn-outline btn-outline-white btn-outline-sm btn-caret"
                                        title="READ MORE">READ MORE
                                        <svg class="svg-inline--fa fa-chevron-right fa-w-10" aria-hidden="true"
                                            focusable="false" data-prefix="fas" data-icon="chevron-right" role="img"
                                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512" data-fa-i2svg="">
                                            <path fill="currentColor"
                                                d="M285.476 272.971L91.132 467.314c-9.373 9.373-24.569 9.373-33.941 0l-22.667-22.667c-9.357-9.357-9.375-24.522-.04-33.901L188.505 256 34.484 101.255c-9.335-9.379-9.317-24.544.04-33.901l22.667-22.667c9.373-9.373 24.569-9.373 33.941 0L285.475 239.03c9.373 9.372 9.373 24.568.001 33.941z">
                                            </path>
                                        </svg>
                                    </a> </p>
                                <a href="#" class="btn-open">
                                    <img
                                        src="https://multi-site-ui.wisharemediacdn.com/images/9849fd5c2849d275c8b783682347cd2e/icn_chevron_double_right.svg?v=20210706154217">
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-md-4 col-lg-4 hover-wrapper"
                        onclick="window.location='https://www.freightright.com/industries'">
                        <div class="mask mask-40"></div>
                        <div class="media-container media-container-bg lozad"
                            data-background-image="{{asset('images/9849fd/home/home-industry.jpg')}}">
                        </div>
                        <div class="mask-overlay">
                            <h2 class="text-white text-lg-center text-xs-left mt-lg-4 mt-xs-4 pl-xs-2 pr-xs-2">
                                <b> Industry </b>
                            </h2>
                            <div class="hover-info">
                                <div class="text-white">
                                    <p><span style="font-size:17px;">Operating in a complex market like Retail,
                                            Chemical, Automotive, Amusement, or Technology? Our expert team of
                                            logisticians have a solution.</span></p>
                                </div>
                                <p><a href="https://www.freightright.com/industries"
                                        class="btn btn-outline btn-outline-white btn-outline-sm btn-caret"
                                        title="READ MORE">READ MORE
                                        <svg class="svg-inline--fa fa-chevron-right fa-w-10" aria-hidden="true"
                                            focusable="false" data-prefix="fas" data-icon="chevron-right" role="img"
                                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512" data-fa-i2svg="">
                                            <path fill="currentColor"
                                                d="M285.476 272.971L91.132 467.314c-9.373 9.373-24.569 9.373-33.941 0l-22.667-22.667c-9.357-9.357-9.375-24.522-.04-33.901L188.505 256 34.484 101.255c-9.335-9.379-9.317-24.544.04-33.901l22.667-22.667c9.373-9.373 24.569-9.373 33.941 0L285.475 239.03c9.373 9.372 9.373 24.568.001 33.941z">
                                            </path>
                                        </svg>
                                    </a></p>
                                <a href="#" class="btn-open">
                                    <img
                                        src="https://multi-site-ui.wisharemediacdn.com/images/9849fd5c2849d275c8b783682347cd2e/icn_chevron_double_right.svg?v=20210706154217">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="slider-section">
            <div class="swiper-container" id="home-tech-slideshow">
                <div class="swiper-wrapper">
                    <div class="swiper-slide lozad"
                        data-background-image="{{asset('images/dd8eeb74136dc1ce2222932241b3c9a3.jpg')}}">
                        <div class="slide-meta">
                            <h2>Accessibility</h2>
                            <p>View and manage booking information and documents through our online portal.</p>
                            <a href="https://www.freightright.com/technology#accessibility"
                                class="text-uppercase btn btn-outline btn-outline-dark-gray btn-caret">Read More
                                <svg class="svg-inline--fa fa-chevron-right fa-w-10" aria-hidden="true"
                                    focusable="false" data-prefix="fas" data-icon="chevron-right" role="img"
                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512" data-fa-i2svg="">
                                    <path fill="currentColor"
                                        d="M285.476 272.971L91.132 467.314c-9.373 9.373-24.569 9.373-33.941 0l-22.667-22.667c-9.357-9.357-9.375-24.522-.04-33.901L188.505 256 34.484 101.255c-9.335-9.379-9.317-24.544.04-33.901l22.667-22.667c9.373-9.373 24.569-9.373 33.941 0L285.475 239.03c9.373 9.372 9.373 24.568.001 33.941z">
                                    </path>
                                </svg>
                            </a>
                        </div>
                    </div>
                    <div class="swiper-slide swiper-lazy"
                        data-background="{{asset('images/463c801e3e49b35a28fd8260dec6b222.jpg')}}">
                        <div class="slide-meta">
                            <h2>Tracking</h2>
                            <p>Quote, book, and track your shipments online 24/7 day.</p>
                            <a href="https://www.freightright.com/technology#tracking"
                                class="text-uppercase btn btn-outline btn-outline-dark-gray btn-caret">Read More
                                <svg class="svg-inline--fa fa-chevron-right fa-w-10" aria-hidden="true"
                                    focusable="false" data-prefix="fas" data-icon="chevron-right" role="img"
                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512" data-fa-i2svg="">
                                    <path fill="currentColor"
                                        d="M285.476 272.971L91.132 467.314c-9.373 9.373-24.569 9.373-33.941 0l-22.667-22.667c-9.357-9.357-9.375-24.522-.04-33.901L188.505 256 34.484 101.255c-9.335-9.379-9.317-24.544.04-33.901l22.667-22.667c9.373-9.373 24.569-9.373 33.941 0L285.475 239.03c9.373 9.372 9.373 24.568.001 33.941z">
                                    </path>
                                </svg>
                            </a>
                        </div>
                    </div>
                    <div class="swiper-slide swiper-lazy"
                        data-background="{{asset('images/98c6a9cfe69b2bab9bc5f0663f791b1e.jpg')}}">
                        <div class="slide-meta">
                            <h2>Supply Chain</h2>
                            <p>Gain full supply chain visibility with our fully customizable notification systems of
                                commodities.</p>
                            <a href="https://www.freightright.com/technology#supply-chain"
                                class="text-uppercase btn btn-outline btn-outline-dark-gray btn-caret">Read More
                                <svg class="svg-inline--fa fa-chevron-right fa-w-10" aria-hidden="true"
                                    focusable="false" data-prefix="fas" data-icon="chevron-right" role="img"
                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512" data-fa-i2svg="">
                                    <path fill="currentColor"
                                        d="M285.476 272.971L91.132 467.314c-9.373 9.373-24.569 9.373-33.941 0l-22.667-22.667c-9.357-9.357-9.375-24.522-.04-33.901L188.505 256 34.484 101.255c-9.335-9.379-9.317-24.544.04-33.901l22.667-22.667c9.373-9.373 24.569-9.373 33.941 0L285.475 239.03c9.373 9.372 9.373 24.568.001 33.941z">
                                    </path>
                                </svg>
                            </a>
                        </div>
                    </div>
                    <div class="swiper-slide swiper-lazy"
                        data-background="{{asset('images/18a680c6bb975d764a0c51cb379816fd.jpg')}}">
                        <div class="slide-meta">
                            <h2>Technology</h2>
                            <p>We use the best technology available in all processes so that every load is optimized to
                                minimize cost.</p>
                            <a href="https://www.freightright.com/technology#box-left-section-3"
                                class="text-uppercase btn btn-outline btn-outline-dark-gray btn-caret">Read More
                                <svg class="svg-inline--fa fa-chevron-right fa-w-10" aria-hidden="true"
                                    focusable="false" data-prefix="fas" data-icon="chevron-right" role="img"
                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512" data-fa-i2svg="">
                                    <path fill="currentColor"
                                        d="M285.476 272.971L91.132 467.314c-9.373 9.373-24.569 9.373-33.941 0l-22.667-22.667c-9.357-9.357-9.375-24.522-.04-33.901L188.505 256 34.484 101.255c-9.335-9.379-9.317-24.544.04-33.901l22.667-22.667c9.373-9.373 24.569-9.373 33.941 0L285.475 239.03c9.373 9.372 9.373 24.568.001 33.941z">
                                    </path>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="swiper-pagination"></div>
                <div class="swiper-button-next">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 27 44">
                        <path d="M27,22L27,22L5,44l-2.1-2.1L22.8,22L2.9,2.1L5,0L27,22L27,22z">
                    </svg>
                </div>
                <div class="swiper-button-prev">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 27 44">
                        <path d="M0,22L22,0l2.1,2.1L4.2,22l19.9,19.9L22,44L0,22L0,22L0,22z">
                    </svg>
                </div>
            </div>
        </section>
        <section class="hover-section" id="hover-section">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-xs-12 col-md-4 col-lg-4 bg-blue hover-wrapper">
                        <div class="mask-overlay mask-overlay-space-between">
                            <h2 class="text-white text-xs-center mt-lg-4 mt-xs-3">
                                <b> By the Numbers </b>
                            </h2>
                            <div class="swiper-container" id="home-numbers-slideshow">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <div class="swiper-box-info"> 10,000 <span class="text-light-blue">Shipments
                                                Delivered to Amazon</span>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="swiper-box-info"> 100,000 <span class="text-light-blue">Shipments
                                                Delivered</span> </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="swiper-box-info"> 180 <span class="text-light-blue">Countries
                                                Covered</span> </div>
                                    </div>
                                </div>
                                <div class="swiper-pagination swiper-box-pagination"></div>
                                <div class="swiper-button-next swiper-white-button-next"></div>
                                <div class="swiper-button-prev swiper-white-button-prev"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-md-4 col-lg-4 hover-wrapper"> <a
                            href="https://www.freightright.com/customers"
                            class="link-overlay hide-xs show-md-block"></a>
                        <div class="mask-overlay mask-overlay-center">
                            <h2 class="text-white text-xs-center mt-lg-4 mb-xs-4"> <b> Customers </b> </h2>
                            <p class="text-xs-center hide-md"><a href="https://www.freightright.com/solution"
                                    class="btn btn-outline btn-outline-white btn-outline-sm btn-caret"
                                    title="READ MORE">READ MORE <i class="fas fa-chevron-right"></i></a></p>
                        </div>
                        <div class="mask mask-40"></div>
                        <div class="media-container media-container-bg lozad"
                            data-background-image="{{asset('images/9849fd/home/home-customers-v21350.jpg')}}">
                        </div>
                        <div class="hover-info">
                            <div class="text-white">
                                <p><span style="font-size:17px;">Our customers are entrepreneurs, industry leaders,
                                        innovators, and those who wouldn???t settle for ???good enough.??? Sound like
                                        you?</span></p>
                            </div>
                            <p><a href="https://www.freightright.com/customers"
                                    class="btn btn-outline btn-outline-white btn-outline-sm btn-caret"
                                    title="READ MORE">READ MORE <svg class="svg-inline--fa fa-chevron-right fa-w-10"
                                        aria-hidden="true" focusable="false" data-prefix="fas" data-icon="chevron-right"
                                        role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512"
                                        data-fa-i2svg="">
                                        <path fill="currentColor"
                                            d="M285.476 272.971L91.132 467.314c-9.373 9.373-24.569 9.373-33.941 0l-22.667-22.667c-9.357-9.357-9.375-24.522-.04-33.901L188.505 256 34.484 101.255c-9.335-9.379-9.317-24.544.04-33.901l22.667-22.667c9.373-9.373 24.569-9.373 33.941 0L285.475 239.03c9.373 9.372 9.373 24.568.001 33.941z">
                                        </path>
                                    </svg></a></p>
                        </div>
                    </div>
                    <div class="col-xs-12 col-md-4 col-lg-4 hover-wrapper"> <a href="https://www.freightright.com/news"
                            class="link-overlay hide-xs show-md-block"></a>
                        <div class="mask-overlay mask-overlay-center">
                            <h2 class="text-white text-xs-center mt-lg-4 mb-xs-4"> <b> News </b> </h2>
                            <p class="text-xs-center hide-md"><a href="https://www.freightright.com/news"
                                    class="btn btn-outline btn-outline-white btn-outline-sm btn-caret"
                                    title="READ MORE">READ MORE <i class="fas fa-chevron-right"></i></a></p>
                        </div>
                        <div class="mask mask-40"></div>
                        <div class="media-container media-container-bg lozad"
                            data-background-image="{{asset('images/9849fd/home/home-news1350.jpg')}}">
                        </div>
                        <div class="hover-info">
                            <div class="text-white">
                                <p><span style="font-size:17px;">Stay up to date on the latest in freight, trade, and
                                        more.</span></p>
                            </div>
                            <p><a href="https://www.freightright.com/news"
                                    class="btn btn-outline btn-outline-white btn-outline-sm btn-caret"
                                    title="READ MORE">READ MORE <svg class="svg-inline--fa fa-chevron-right fa-w-10"
                                        aria-hidden="true" focusable="false" data-prefix="fas" data-icon="chevron-right"
                                        role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512"
                                        data-fa-i2svg="">
                                        <path fill="currentColor"
                                            d="M285.476 272.971L91.132 467.314c-9.373 9.373-24.569 9.373-33.941 0l-22.667-22.667c-9.357-9.357-9.375-24.522-.04-33.901L188.505 256 34.484 101.255c-9.335-9.379-9.317-24.544.04-33.901l22.667-22.667c9.373-9.373 24.569-9.373 33.941 0L285.475 239.03c9.373 9.372 9.373 24.568.001 33.941z">
                                        </path>
                                    </svg></a></p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <div class="section section-lg section-none-profit lozad"
            data-background-image="{{asset('images/81405a26719cf2879d92fe38860113fd.jpg')}}">
            <h3>Our Impact</h3>
            <article>
                <p>At Freight Right, our success is built on hard work, but we believe that success is meant to be
                    shared. That is why we emphasize giving back to our most vulnerable communities and taking care of
                    our Earth.</p>
                <p class="line-break"></p>
                <p><span style="font-size:21px;"><i><strong>Sponsoring orphanages</strong></i></span></p>
                <p>We make annual financial contributions to orphanages in developing countries around the world. These
                    funds provide basic necessities, education, and healthcare for children in need.</p>
                <p class="line-break"></p>
                <p><span style="font-size:21px;"><i><strong>Green Footprint</strong></i></span></p>
                <p>The freight industry is not the most eco-friendly industry; in fact, the U.S. trucking industry alone
                    contributes about 5.57% of total greenhouse gas emissions, which makes for 1.6 billion metric tons
                    of CO2 per year. We want to change that.</p>
                <p>At Freight Right we prioritize using green alternatives to reduce our carbon footprint. We chose to
                    partner with U.S. Environmental Protection Agency (EPA) SmartWay recommended carriers and are
                    working to become a SmartWay partner ourselves. This would increase accountability to continue
                    improving sustainability in our operations.</p>
            </article> <a href="https://www.freightright.com/contact-us"
                class="btn btn-outline btn-outline-white btn-outline-lg btn-caret" title="CONNECT NOW"> CONNECT NOW <svg
                    class="svg-inline--fa fa-chevron-right fa-w-10" aria-hidden="true" focusable="false"
                    data-prefix="fas" data-icon="chevron-right" role="img" xmlns="http://www.w3.org/2000/svg"
                    viewBox="0 0 320 512" data-fa-i2svg="">
                    <path fill="currentColor"
                        d="M285.476 272.971L91.132 467.314c-9.373 9.373-24.569 9.373-33.941 0l-22.667-22.667c-9.357-9.357-9.375-24.522-.04-33.901L188.505 256 34.484 101.255c-9.335-9.379-9.317-24.544.04-33.901l22.667-22.667c9.373-9.373 24.569-9.373 33.941 0L285.475 239.03c9.373 9.372 9.373 24.568.001 33.941z">
                    </path>
                </svg> </a>
        </div>
        <div class="section section-partner lozad"
            data-background-image="{{asset('images/9849fd/home-partners1350.jpg')}}">
        </div>
    </div>
    <nav id="back-top"><svg class="svg-inline--fa fa-angle-double-up fa-w-10" aria-hidden="true" focusable="false"
            data-prefix="fas" data-icon="angle-double-up" role="img" xmlns="http://www.w3.org/2000/svg"
            viewBox="0 0 320 512" data-fa-i2svg="">
            <path fill="currentColor"
                d="M177 255.7l136 136c9.4 9.4 9.4 24.6 0 33.9l-22.6 22.6c-9.4 9.4-24.6 9.4-33.9 0L160 351.9l-96.4 96.4c-9.4 9.4-24.6 9.4-33.9 0L7 425.7c-9.4-9.4-9.4-24.6 0-33.9l136-136c9.4-9.5 24.6-9.5 34-.1zm-34-192L7 199.7c-9.4 9.4-9.4 24.6 0 33.9l22.6 22.6c9.4 9.4 24.6 9.4 33.9 0l96.4-96.4 96.4 96.4c9.4 9.4 24.6 9.4 33.9 0l22.6-22.6c9.4-9.4 9.4-24.6 0-33.9l-136-136c-9.2-9.4-24.4-9.4-33.8 0z">
            </path>
        </svg></nav>
    <footer>
        <div class="mask mask-40"></div>
        <div class="container">
            <div class="row">
                <div class="col-xs bg-blue flex-xs-grow">
                    <div class="row hide-xs show-md-flex show-lg-flex">
                        <div class="col-xs text-xs-center"> <a href="./" class="logo-footer"> <img
                                    data-src="https://multi-site-ui.wisharemediacdn.com/images/9849fd5c2849d275c8b783682347cd2e/logo_freight_right_vertical.svg?v=20210706154217"
                                    class="lozad" alt="Freight Right" /> </a> </div>
                    </div>
                    <div class="row footer-box-wrapper">
                        <div class="col-xs hide-xs hide-sm show-md-block show-lg-block footer-email-wrapper">
                            <div class="footer-box text-xs-center">
                                <p class="text-white">Email</p>
                                <p><a href="https://www.freightright.com/contact-us" class="link link-white"><span
                                            class="__cf_email__"
                                            data-cfemail="cda5a8a1a1a28dabbfa8a4aaa5b9bfa4aaa5b9e3aea2a0">[email&#160;protected]</span></a>
                                </p> <a href="https://www.freightright.com/contact-us"
                                    class="btn btn-outline btn-outline-white btn-caret">Email Us Now <svg
                                        class="svg-inline--fa fa-chevron-right fa-w-10" aria-hidden="true"
                                        focusable="false" data-prefix="fas" data-icon="chevron-right" role="img"
                                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512" data-fa-i2svg="">
                                        <path fill="currentColor"
                                            d="M285.476 272.971L91.132 467.314c-9.373 9.373-24.569 9.373-33.941 0l-22.667-22.667c-9.357-9.357-9.375-24.522-.04-33.901L188.505 256 34.484 101.255c-9.335-9.379-9.317-24.544.04-33.901l22.667-22.667c9.373-9.373 24.569-9.373 33.941 0L285.475 239.03c9.373 9.372 9.373 24.568.001 33.941z">
                                        </path>
                                    </svg></a>
                            </div>
                        </div>
                        <div class="col-xs hide-xs hide-sm show-md-block show-lg-block footer-phone-wrapper">
                            <div class="footer-box text-xs-center">
                                <p class="text-white">Phone</p>
                                <p><a href="tel://8779097447" class="link link-white">1-877-909-7447</a></p> <a
                                    href="tel://8779097447"
                                    class="btn btn-outline btn-outline-white btn-caret text-uppercase">Call Us Now <svg
                                        class="svg-inline--fa fa-chevron-right fa-w-10" aria-hidden="true"
                                        focusable="false" data-prefix="fas" data-icon="chevron-right" role="img"
                                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512" data-fa-i2svg="">
                                        <path fill="currentColor"
                                            d="M285.476 272.971L91.132 467.314c-9.373 9.373-24.569 9.373-33.941 0l-22.667-22.667c-9.357-9.357-9.375-24.522-.04-33.901L188.505 256 34.484 101.255c-9.335-9.379-9.317-24.544.04-33.901l22.667-22.667c9.373-9.373 24.569-9.373 33.941 0L285.475 239.03c9.373 9.372 9.373 24.568.001 33.941z">
                                        </path>
                                    </svg></a>
                            </div>
                        </div>
                        <div class="col-xs footer-social-media-wrapper">
                            <div class="footer-box text-xs-center">
                                <p class="text-white hide-xs hide-sm show-md-block show-lg-block">Social Media</p>
                                <ul class="list list-flex flex-xs-row around-xs">
                                    <li> <a target="_blank" href="https://www.facebook.com/FreightRight/"
                                            title="Facebook"> <img
                                                data-src="https://multi-site-ui.wisharemediacdn.com/images/9849fd5c2849d275c8b783682347cd2e/icn_facebook.svg?v=20210706154217"
                                                class="lozad" alt="Facebook" width="45" height="45" /> </a> </li>
                                    <li> <a target="_blank" href="https://twitter.com/RightFreight" title="Twitter">
                                            <img data-src="https://multi-site-ui.wisharemediacdn.com/images/9849fd5c2849d275c8b783682347cd2e/icn_twitter.svg?v=20210706154217"
                                                class="lozad" alt="Twitter" width="45" height="45" /> </a> </li>
                                    <li> <a target="_blank" href="https://goo.gl/maps/sYfQ1TwA2bysqq9H6"
                                            title="Google Marketplace"> <img
                                                data-src="https://multi-site-ui.wisharemediacdn.com/images/9849fd5c2849d275c8b783682347cd2e/icn_google_marketplace.svg?v=20210706154217"
                                                class="lozad" alt="Google Marketplace" width="45" height="45" /> </a>
                                    </li>
                                    <li> <a target="_blank" href="https://www.linkedin.com/company/1367445"
                                            title="LinkedIn"> <img
                                                data-src="https://multi-site-ui.wisharemediacdn.com/images/9849fd5c2849d275c8b783682347cd2e/icn_linkedin.svg?v=20210706154217"
                                                class="lozad" alt="LinkedIn" width="45" height="45" /> </a> </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="row menu-footer-wrapper">
                        <div class="col-xs">
                            <ul class="list list-flex flex-xs-row around-md around-lg between-xs between-sm">
								<li> <a href="{{url('about-us')}}" title="About Us">About Us</a> </li>
								<li> <a href="{{url('privacy')}}" title="Privacy Policy">Privacy Policy</a> </li>
								<li> <a href="{{url('terms')}}" title="Terms Of Use">Terms Of Use</a> </li>
								<li> <a href="{{url('tos')}}" title="Terms Of Use">Terms Of Service</a> </li>
								<li class="hide-xs hide-sm show-md-flex show-lg-flex"> <a href="{{url('contact-us')}}"
										title="Contact Us">Contact Us</a> </li>
							</ul>
                        </div>
                    </div>
                    <div class="row copyright-wrapper">
                        <div class="col-xs text-xs-left text-md-center text-sm-left text-lg-center"> Copyright ?? 2021
                            Freight Right Global Logistics </div>
                    </div>
                </div>
                <div class="col-xs bg-light-blue show-xs-flex hide-md hide-lg flex-xs-shrink"> <a
                        href="tel://8779097447" class="footer-mobile-phone text-uppercase" title="Call Us Now"> <i
                            class="fas fa-phone"></i><br />Call Us Now</a> </div>
            </div>
        </div>
    </footer>
    <div id="wi-preview"></div> <span id="wi-preview-close">&#10005;</span>
    <script src="{{asset('js/app.js')}}"></script>
    <script src="{{asset('js/vendor-lite.js')}}"></script>
    <script src="{{asset('js/app1350.js')}}"></script>
   <script src="{{asset('js/email-decode.min.js')}}"></script>    

</body>
</html>