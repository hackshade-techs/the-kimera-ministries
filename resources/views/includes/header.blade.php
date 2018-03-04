
        <header class="header2">

            <div class="topbar">

                <div class="container">

                    <div class="header-timer">

                        <p>Upcoming Prayers:</p>

                        <ul class="headercounter">

                            <li>
                                <span class="days">00</span>

                                <p class="days_ref">DAYS</p>

                            </li>

                            <li>
                                <span class="hours">00</span>

                                <p class="hours_ref">HOURS</p>

                            </li>

                            <li>
                                <span class="minutes">00</span>

                                <p class="minutes_ref">MINTS</p>

                            </li>

                            <li>
                                <span class="seconds">00</span>

                                <p class="seconds_ref">SECS</p>

                            </li>

                        </ul>

                    </div>

                    <p>
                        <i class="fa fa-mobile"></i> 24/7 Support: {{ Config::get('settings.phone_1') }}</p>
                    <!--- CONTACT -->

                    <p>
                        <i class="fa fa-envelope"></i> {{ Config::get('settings.contact_email') }}</p>
                    <!--- EMAIL -->

                    <ul class="social-media">

                        <li>
                            <a title="Youtube" href="{{ Config::get('settings.youtube') }}">
                                <i class="fa fa-youtube"></i>
                            </a>
                        </li>

                        <li>
                            <a title="Google Plus" href="{{ Config::get('settings.google_plus') }}">
                                <i class="fa fa-google-plus"></i>
                            </a>
                        </li>

                        <li>
                            <a title="Twitter" href="{{ Config::get('settings.twitter') }}">
                                <i class="fa fa-twitter"></i>
                            </a>
                        </li>

                        <li>
                            <a title="Facebook" href="{{ Config::get('settings.facebook') }}">
                                <i class="fa fa-facebook"></i>
                            </a>
                        </li>

                    </ul>

                    <div class="cart-dropdown">

                        <p>
                          <a href="{{ url('join-us') }}">
                            <i class="fa fa-users"></i>
                            <span>Join Us</span>
                          </a>
                        </p>
                    </div>

                </div>

            </div>
            <!--- TOP BAR -->

            <nav class="style1">

                <div class="container">

                    <div class="logo">

                        <a href="#" title="">
                            <img src="{{ asset(Config::get('settings.logo')) }}" alt="" />
                        </a>

                    </div>
                    <!--- LOGO -->

                    @include('includes.navs')

                    <form class="header-search">

                        <input type="text" placeholder="Enter Your Search Keyword" />

                        <input type="submit" value="" />

                    </form>

                </div>

            </nav>

        </header>
        <!--- HEADER -->


        <div class="responsive-header">

            <div class="responsive-prayer">

                <p>Upcoming Prayers:</p>

                <ul class="headercounter">

                    <li>
                        <span class="days">00</span>
                        <p class="days_ref">DAYS</p>
                    </li>

                    <li>
                        <span class="hours">00</span>
                        <p class="hours_ref">HOURS</p>
                    </li>

                    <li>
                        <span class="minutes">00</span>
                        <p class="minutes_ref">MINTS</p>
                    </li>

                    <li>
                        <span class="seconds">00</span>
                        <p class="seconds_ref">SECS</p>
                    </li>

                </ul>

            </div>
            <!-- Responsive Prayer -->

            <div class="responsive-contact">

                <span>

                    <p class="responsive-phone">
                        <i class="fa fa-phone"></i> 24/7 Support: 0800-1924-1</p>

                    <p class="responsive-mail">
                        <i class="fa fa-envelope"></i> Youremail@yourdomain.com</p>

                </span>

                <a class="phone-btn active" href="#" title="">
                    <i class="fa fa-phone"></i>
                </a>

                <a class="mail-btn" href="#" title="">
                    <i class="fa fa-envelope"></i>
                </a>

            </div>
            <!-- Responsive Contact -->

            <div class="responsive-extras">

                <div class="responsive-search">

                    <span>
                        <i class="fa fa-search"></i>
                    </span>

                    <form>

                        <input type="text" placeholder="Enter Your Search Here" />

                        <button type="submit">
                            <i class="fa fa-search"></i>
                        </button>

                    </form>
                    <!-- Responsive Search -->

                </div>

                <div class="responsive-social">

                    <a href="#" title="">
                        <i class="fa fa-twitter"></i>
                    </a>

                    <a href="#" title="">
                        <i class="fa fa-facebook"></i>
                    </a>

                    <a href="#" title="">
                        <i class="fa fa-google-plus"></i>
                    </a>

                    <a href="#" title="">
                        <i class="fa fa-linkedin"></i>
                    </a>

                </div>
                <!-- Responsive Social -->

                <div class="responsive-cart">
                  <a href="{{ url('join-us') }}">
                    <i class="fa fa-users"></i>
                    <span>Join Us</span>
                  </a>
                </div>

            </div>
            <!-- Responsive Extras -->

            <div class="responisve-bar">

                <div class="responsive-logo">
                    <a href="#" title="">
                        <img src="images/logo.png" alt="" />
                    </a>
                </div>

                <span class="responsive-btn">
                    <i class="fa fa-list"></i>
                </span>

            </div>

        </div>
        <!-- Responsive Header -->

        <div class="responsive-menu">
            @include('includes.navs')
        </div>
        <!-- Responsive Menu -->
