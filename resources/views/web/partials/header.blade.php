    <!-- Start header data-bs-toggle="dropdown"
    ============================================= -->
    <header class="header">
        <div class="main-navigation">
            <nav id="navbar_top" class="navbar navbar-expand-lg">
                <div class="container">
                    <a class="navbar-brand" href="{{ route('home.page') }}">
                        <img width="30%" src="{{ asset('web/assets/img/logo/logo.png') }}" class="logo-display"
                            alt="Itsol">
                        <img width="30%" src="{{ asset('web/assets/img/logo/logo-dark.png') }}" class="logo-scrolled"
                            alt="Itsol">
                    </a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#main_nav"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"><i class="ti-menu-alt"></i></span>
                    </button>
                    <div class="collapse navbar-collapse justify-content-center" id="main_nav">
                        <ul id="top-menu" class="navbar-nav v-card-menu">
                            <li class="nav-item {{ Request::is('home.page') ? 'active' : '' }}">
                                <a class="nav-link smooth-menu" href="{{ route('home.page') }}">
                                    HOME
                                </a>
                            </li>
                            <li class="nav-item {{ Request::is('about') ? 'active' : '' }}">
                                <a class="nav-link smooth-menu" href="{{ route('about') }}">
                                    ABOUT US
                                </a>
                            </li>
                            <li class="nav-item {{ Request::is('team') ? 'active' : '' }}">
                                <a class="nav-link smooth-menu" href="{{ route('team') }}">
                                    TEAM
                                </a>
                            </li>
                            <li class="nav-item {{ Request::is('services') ? 'active' : '' }}">
                                <a class="nav-link smooth-menu" href="{{ route('services') }}">
                                    SERVICES
                                </a>
                            </li>
                            <li class="nav-item {{ Request::is('products/view') ? 'active' : '' }}">
                                <a class="nav-link smooth-menu" href="{{ route('productsView') }}">
                                    PRODUCTS
                                </a>
                            </li>                            
                            <li class="nav-item {{ Request::is('contact') ? 'active' : '' }}">
                                <a class="nav-link smooth-menu" href="{{ route('contact') }}">
                                    CONTACT US
                                </a>
                            </li>
                        </ul>
                    </div> <!-- navbar-collapse.// -->
                    <div class="side-menu">
                        <div class="menu-tab">
                            <div id="one"></div>
                            <div id="two"></div>
                            <div id="three"></div>
                        </div>
                        <div class="menu-hide">
                            <div class="side-about">
                                <h5 class="about-sub-title mt-30">
                                    Contact Us
                                </h5>
                            </div>
                            <div class="side-social-content mt-30">
                                <div class="side-address mb-30">
                                    <div class="side-addr-box">
                                        <div class="side-addr-icon">
                                            <i class="fas fa-phone"></i>
                                        </div>
                                        <div class="side-addr-desc">
                                            <span>+44 7507 508 437</span>
                                        </div>
                                    </div>
                                    <div class="side-addr-box">
                                        <div class="side-addr-icon">
                                            <i class="fas fa-envelope"></i>
                                        </div>
                                        <div class="contact-addr-desc">
                                            <span>info@apex-tc.co.uk</span>
                                        </div>
                                    </div>
                                    <div class="side-addr-box">
                                        <div class="side-addr-icon">
                                            <i class="fas fa-map-marker-alt"></i>
                                        </div>
                                        <div class="side-addr-desc">
                                            <span>71-75 Shelton Street</span>
                                        </div>
                                    </div>
                                </div>
                                <ul class="side-social">
                                    <li><a href="https://www.instagram.com/apexglobus?igsh=ZzY1dmZ4NWQ5cW02"><i
                                                class="fab fa-instagram"></i></a></li>
                                    <li><a href="https://x.com/ApexGlobus?t=SpPA3p9wW0d3jk1263Nc5g&s=01"><i
                                                class="fab fa-x-twitter"></i></a></li>
                                    <li><a href="https://www.snapchat.com/add/apexglobus?src=QR_CODE    "><i
                                                class="fab fa-snapchat-ghost"></i></a></li>
                                    <li><a href="https://www.facebook.com/apexglobus"><i
                                                class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="https://www.linkedin.com/company/apexglobus/"><i
                                                class="fab fa-linkedin"></i></a></li>

                                </ul>
                            </div>
                        </div>
                    </div><!-- Side Menu -->
                </div> <!-- container -->
            </nav>
        </div>
    </header>
    <!-- End header -->

    <main class="main">
