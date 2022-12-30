<header class="">
    <div class="header-top">
        <div class="container-fluid-lg">
            <div class="row">

                <div class="col-xxl-4 d-xxl-block d-none">
                    <div class="top-left-header">
                        <i class="fa fa-phone text-white"></i>
                        <span class="text-white">
                            09-73029482,
                        </span>
                        <span class="text-white">
                            09-264265266,
                        </span>
                        <span class="text-white">
                            09-455455007
                        </span>
                    </div>
                </div>

                <div class="col-xxl-6 col-lg-9 d-lg-block d-none">
                    <div class="header-offer">
                        <div class="notification-slider">
                            <div>
                                <div class="timer-notification">
                                    <h6>
                                        <strong class="me-1">
                                            We believe that puppies should never be kept in cages in pet shops, waiting
                                            to be sold.
                                        </strong>
                                    </h6>
                                </div>
                            </div>

                            <div>
                                <div class="timer-notification">
                                    <h6>
                                        Dog you love is now on sale!
                                        <a href="{{ route('dog.index') }}" class="text-white">
                                            Buy Now!
                                        </a>
                                    </h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-2">
                    <ul class="about-list right-nav-about">
                        <li class="right-nav-list">
                            <div class="dropdown theme-form-select">
                                <button class="btn dropdown-toggle" type="button" id="select-language"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                    <img src="{{ asset('assets/images/country/united-states.png') }}"
                                        class="img-fluid blur-up lazyload" alt="">
                                    <span>English</span>
                                </button>

                                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="select-language">
                                    <li>
                                        <a class="dropdown-item" href="javascript:void(0)" id="english">
                                            <img src="{{ asset('assets/images/country/united-kingdom.png') }}"
                                                class="img-fluid blur-up lazyload" alt="">
                                            <span>English</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div class="top-nav top-header sticky-header" style="background-color: #3A3A3C;">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="navbar-top">
                        <button class="navbar-toggler d-xl-none d-inline navbar-menu-button" type="button"
                            data-bs-toggle="offcanvas" data-bs-target="#primaryMenu">
                            <span class="navbar-toggler-icon">
                                <i class="fa-solid fa-bars"></i>
                            </span>
                        </button>

                        <a href="{{ route('home') }}" class="web-logo nav-logo">
                            <img src="{{ asset('data/logo.jpeg') }}" class="img-fluid blur-up lazyload" alt="">
                        </a>

                        <div class="header-nav-middle">
                            <div class="main-nav navbar navbar-expand-xl navbar-light navbar-sticky">
                                <div class="offcanvas offcanvas-collapse order-xl-2" id="primaryMenu">
                                    <div class="offcanvas-header navbar-shadow">
                                        <h5>Menu</h5>
                                        <button class="btn-close lead" type="button" data-bs-dismiss="offcanvas"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="offcanvas-body" style="background-color: #3A3A3C">
                                        <ul class="navbar-nav">

                                            <li class="nav-item">
                                                <a class="nav-link" style="color: white;" href="{{ route('home') }}">
                                                    HOME
                                                </a>
                                            </li>

                                            <li class="nav-item">
                                                <a class="nav-link" style="color: white;"
                                                    href="{{ route('dog.index') }}">
                                                    DOG
                                                </a>
                                            </li>

                                            <li class="nav-item">
                                                <a class="nav-link" style="color: white;"
                                                    href="{{ route('kennel.index') }}">
                                                    KENNELS
                                                </a>
                                            </li>

                                            <li class="nav-item">
                                                <a class="nav-link" style="color: white;"
                                                    href="{{ route('faq.index') }}">
                                                    FAQS
                                                </a>
                                            </li>

                                            <li class="nav-item" hidden>
                                                <a class="nav-link" style="color: white;" href="javascript:void(0)">
                                                    PEDIGREE
                                                </a>
                                            </li>

                                            <li class="nav-item">
                                                <a class="nav-link" style="color: white;"
                                                    href="{{ route('contact.index') }}">
                                                    CONTACT US
                                                </a>
                                            </li>

                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="rightside-box" style="width: 40%;">
                            <form action="{{ route('dog.index') }}" method="get">
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="Search" name="q">
                                    <div class="input-group-append">
                                        <button class="btn btn-primary" type="submit"
                                            style="background-color: rgb(228, 221, 21);">
                                            Search
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
