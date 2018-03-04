<footer>

    <div class="block blackish">

        <div class="parallax" style="background:url(images/parallax5.jpg);"></div>

        <div class="container">

            <div class="row">

                <div class="col-md-4">

                    <div class="widget">

                        <div class="about">

                            <img src="{{ asset(Config::get('settings.footer_logo')) }}" alt="" />

                            <span>The Kimera Ministries</span>

                            <p>The Faith Center Church of all Nations is under the Kimera Ministries.</p>

                            <div class="contact">

                                <ul>

                                    <li>
                                        <span>
                                            <i class="fa fa-phone"></i>Phone :</span> ( {{ Config::get('settings.phone_1') }} ) ( {{ Config::get('settings.phone_2') }} )</li>

                                    <li>
                                        <span>
                                            <i class="fa fa-envelope"></i>Email:</span> {{ Config::get('settings.contact_email') }} </li>

                                    <li>
                                        <span>
                                            <i class="fa fa-home"></i>Address:</span> {{ Config::get('settings.contact_cc') }}</li>

                                </ul>

                            </div>

                            <ul class="social-media">

                                <li>
                                    <a href="{{ Config::get('settings.youtube') }}" title="">
                                        <i class="fa fa-youtube"></i>
                                    </a>
                                </li>

                                <li>
                                    <a href="{{ Config::get('settings.google_plus') }}" title="">
                                        <i class="fa fa-google-plus"></i>
                                    </a>
                                </li>

                                <li>
                                    <a href="{{ Config::get('settings.twitter') }}" title="">
                                        <i class="fa fa-twitter"></i>
                                    </a>
                                </li>

                                <li>
                                    <a href="{{ Config::get('settings.facebook') }}" title="">
                                        <i class="fa fa-facebook"></i>
                                    </a>
                                </li>

                            </ul>

                        </div>

                    </div>

                </div>
                <!-- ABOUT WIDGET -->

                <div class="col-md-4">

                    <div class="widget">

                        <div class="widget-title">
                            <h4>Quick Message</h4>
                        </div>

                        <div class="quick-message">

                            <div id="message">
                                @include('includes.success')
                                @include('includes.errors')
                                @include('includes.error')
                            </div>

                            <form method="post" action="{{ route('contacts.store') }}" name="contactform" id="contactform">
                                {{ csrf_field() }}

                                <input name="name" required class="half-field form-control" type="text" id="name" placeholder="Name" />

                                <input name="email" required class="half-field form-control" type="text" id="email" placeholder="Email" />

                                <textarea name="message" required class="form-control" id="comments" placeholder="Description"></textarea>

                                <input class="submit" type="submit" id="submit" value="SUBMIT" />

                            </form>
                            <!--- FORM -->

                        </div>

                    </div>

                </div>
                <!-- QUICK MESSAGE WIDGET -->



                <div class="col-md-4">

                    <div class="widget">

                        <div class="widget-title">
                            <h4>Facebook</h4>
                        </div>

                        <div class="remove-ext">

                           <div class="fb-page" data-href="https://www.facebook.com/The-Kimera-Ministries-562927553738787/" data-tabs="timeline" data-width="270" data-height="240" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/The-Kimera-Ministries-562927553738787/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/The-Kimera-Ministries-562927553738787/">The Kimera Ministries</a></blockquote></div>
                        </div>



                    </div>

                </div>
                <!-- RECENT BLOG -->

            </div>

        </div>

    </div>

</footer>
<!-- FOOTER -->

<div class="bottom-footer">

    <div class="container">

        <p>©2018
            <a href="{{ Config::get('settings.website') }}" title="">The Kimera Ministries</a> All rights reserved. Design by
            <a href="https://hackshadetechs.com" title="">Hackshade Techs</a>
        </p>



    </div>

</div>
<!-- BOTTOM FOOTER STRIP -->
