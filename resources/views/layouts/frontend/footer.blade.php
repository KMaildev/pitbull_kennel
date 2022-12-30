<!-- Footer Start -->
<footer class="section-t-space footer-section-2 footer-color-2" style="background-color: #3A3A3C;">
    <div class="container-fluid-lg">
        <div class="main-footer">
            <div class="row g-md-4 gy-sm-5">
                <div class="col-xxl-3 col-xl-3 col-sm-6">
                    <a href="{{ route('home') }}" class="foot-logo theme-logo">
                        <img src="{{ asset('data/logo.jpeg') }}" class="img-fluid blur-up lazyload" alt="">
                    </a>
                    <br><br>
                    <div id="fb-root"></div>
                    <script async defer crossorigin="anonymous"
                        src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v14.0&appId=210045094312905&autoLogAppEvents=1"
                        nonce="PosYNXjc"></script>

                    <div class="fb-page" data-href="https://www.facebook.com/shwehtantaw7milefarm" data-tabs="timeline"
                        data-width="" data-height="200" data-small-header="false" data-adapt-container-width="true"
                        data-hide-cover="false" data-show-facepile="true">
                        <blockquote cite="https://www.facebook.com/shwehtantaw7milefarm" class="fb-xfbml-parse-ignore">
                            <a href="https://www.facebook.com/shwehtantaw7milefarm">Facebook</a>
                        </blockquote>
                    </div>

                    <ul class="social-icon">
                        <li class="light-bg">
                            <a href="https://www.facebook.com/shwehtantaw7milefarm" class="footer-link-color"
                                target="_blank">
                                <i class="fab fa-facebook-f"></i>
                            </a>
                        </li>

                        <li class="light-bg">
                            <a href="https://twitter.com/" class="footer-link-color">
                                <i class="fab fa-twitter"></i>
                            </a>
                        </li>
                        <li class="light-bg">
                            <a href="https://www.instagram.com/" class="footer-link-color">
                                <i class="fab fa-instagram"></i>
                            </a>
                        </li>
                    </ul>
                </div>


                <div class="col-xxl-3 col-xl-3 col-sm-6">
                    <div class="footer-title">
                        <h4 class="text-white">Useful Link</h4>
                    </div>
                    <ul class="footer-list footer-list-light footer-contact">

                        <li>
                            <a class="light-text" href="{{ route('home') }}">
                                HOME
                            </a>
                        </li>

                        <li>
                            <a class="light-text" href="{{ route('dog.index') }}">
                                DOG
                            </a>
                        </li>

                        <li>
                            <a class="light-text" href="{{ route('kennel.index') }}">
                                KENNELS
                            </a>
                        </li>

                        <li>
                            <a class="light-text" href="{{ route('faq.index') }}">
                                FAQS
                            </a>
                        </li>

                        <li hidden>
                            <a class="light-text" href="javascript:void(0)">
                                PEDIGREE
                            </a>
                        </li>

                        <li>
                            <a class="light-text" href="{{ route('contact.index') }}">
                                CONTACT US
                            </a>
                        </li>
                    </ul>
                </div>


                <div class="col-xxl-3 col-xl-3 col-sm-6">
                    <div class="footer-title">
                        <h4 class="text-white">
                            HEAD OFFICE
                        </h4>
                    </div>
                    <ul class="footer-address footer-contact">
                        <li>
                            <a href="javascript:void(0)" class="light-text">
                                <div class="inform-box flex-start-box">
                                    <i data-feather="map-pin"></i>
                                    <p>
                                        Yangon - Mandalay Expy
                                    </p>
                                </div>
                            </a>
                        </li>

                        <li>
                            <a href="javascript:void(0)" class="light-text">
                                <div class="inform-box">
                                    <i data-feather="phone"></i>
                                    <p>Call us: 09-73029482</p>
                                </div>
                            </a>
                        </li>

                        <li>
                            <a href="javascript:void(0)" class="light-text">
                                <div class="inform-box">
                                    <i data-feather="phone"></i>
                                    <p>Call us: 09-264265266</p>
                                </div>
                            </a>
                        </li>

                        <li>
                            <a href="javascript:void(0)" class="light-text">
                                <div class="inform-box">
                                    <i data-feather="phone"></i>
                                    <p>Call us: 09-455455007</p>
                                </div>
                            </a>
                        </li>

                        <li>
                            <a href="javascript:void(0)" class="light-text">
                                <div class="inform-box">
                                    <i data-feather="mail"></i>
                                    <p>shwehtantaw2022@gmail.com</p>
                                </div>
                            </a>
                        </li>
                    </ul>
                </div>


                <div class="col-xxl-3 col-xl-3 col-sm-6">
                    <div class="footer-title">
                        <h4 class="text-white">Google Map</h4>
                    </div>

                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d7623.892690086401!2d96.200159!3d17.172821!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x291ba33aa11c0fb9!2sSHWE%20HTAN%20TAW%207%20Mile%20Farm!5e0!3m2!1sen!2smm!4v1672417840741!5m2!1sen!2smm"
                        width="100%" height="280" style="border:0;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"></iframe>

                </div>
            </div>
        </div>

        <div class="sub-footer sub-footer-lite section-b-space section-t-space">
            <div class="left-footer">
                <p class="light-text">
                    Copyright © {{ now()->year }} <span>Mingalapar Pitbull Kennel</span>. All Right Reserved
                </p>
            </div>
        </div>
    </div>
</footer>
<!-- Footer End -->


<!-- Bg overlay Start -->
<div class="bg-overlay"></div>
<!-- Bg overlay End -->
