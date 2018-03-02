@extends('layouts.app')

@section('title')
About Us
@endsection

@section('desc')

@endsection

@section('keywords')

@endsection

@section('css')

@endsection

@section('content')

  <div class="page-top">
      <div class="parallax" style="background:url(images/parallax1.jpg);"></div>
      <div class="container">
          <h1>CONTACT
              <span>US</span>
          </h1>
          <ul>
              <li>
                  <a href="index.html" title="">Home</a>
              </li>
              <li>
                  <a href="contact.html" title="">Contact Us</a>
              </li>
          </ul>
      </div>
  </div>
  <!--- PAGE TOP -->

  <section>
      <div class="block">
          <div class="container">
              <div class="row">
                  <div class="col-md-12">
                      <div class="map">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3184.500469001212!2d32.56267631408851!3d0.40838536399205483!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zMMKwMjQnMzAuMiJOIDMywrAzMyc1My41IkU!5e1!3m2!1sen!2sug!4v1495794081446" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                      </div>
                      <!--- GOOGLE MAP -->
                  </div>
              </div>
          </div>
      </div>
  </section>


  <section>
      <div class="block remove-gap">
          <div class="container">
              <div class="row">
                  <div class="col-md-12">
                      <div class="title2">
                          <h2>LET'S
                              <span>GET IN TOUCH</span>
                          </h2>
                      </div>

                      <div class="row">
                          <div class="col-md-6 column">
                              <h4>CONTACT INFORMATION</h4>
                              <div class="space"></div>
                              <p>Geoffrey rush four seasons in one day, the hawks etihad stadium movida formula onegrand
                                  rix ball, chopper read the espy victory vs heart lygon street spruikers cumulus inc,
                                  citylink spiegeltent bill clinton ate two bowls the emerald peacock collingwood ferals,
                                  Rod aver dumplings dandenong.</p>
                              <div class="space"></div>
                              <p>The emerald peacock empire of the sun, etihad stadium movida swanston spiegeltent fr
                                  on bogans, dandenong neatly trimmed moustaches hu tong dumplings rooftop bars chapel
                                  street, east brunswick club mamasita the G’ kylie minogue trams.</p>
                              <div class="space"></div>
                              <ul class="social-media">
                                  <li>

                                      <a href="#" title="">
                                          <i class="fa fa-linkedin"></i>
                                      </a>
                                  </li>
                                  <li>
                                      <a href="#" title="">
                                          <i class="fa fa-google-plus"></i>
                                      </a>
                                  </li>
                                  <li>
                                      <a href="#" title="">
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
                          <!--- CONTACT INFORMATION -->
                          <div class="col-md-6 column">
                              <h4>FILL IN THE FORM BELOW</h4>
                              <div class="space"></div>
                              <div id="message">
                                @include('includes.success')
                                @include('includes.errors')
                                @include('includes.error')
                              </div>
                              <form class="theme-form" method="post" action="{{ route('contacts.store') }}" name="contactform" id="contactform">
                                  {{ csrf_field() }}
                                  <input name="name" class="half-field form-control" type="text" required id="name" placeholder="Name" />
                                  <input name="email" class="half-field form-control" type="text" required id="email" placeholder="Email" />
                                  <input name="subject" class="half-field form-control" type="text" required id="name" placeholder="Subject" />
                                  <textarea name="message" class="form-control" id="comments" required placeholder="Message"></textarea>
                                  <input class="submit" type="submit" id="submit" value="SUBMIT" />
                              </form>
                              <!--- FORM -->
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </section>

  <section>
      <div class="block remove-gap">
          <div class="container">
              <div class="row">
                  <div class="col-md-12">
                      <div class="contact-info">
                          <div class="col-md-3">
                              <div class="info-block">
                                  <i class="fa fa-home"></i>
                                  <p>310 South Jurack Avenue</p>
                              </div>
                          </div>
                          <div class="col-md-3">
                              <div class="info-block">
                                  <i class="fa fa-info"></i>
                                  <p>www.themes.webinane.com</p>
                              </div>
                          </div>
                          <div class="col-md-3">
                              <div class="info-block">
                                  <i class="fa fa-envelope-o"></i>
                                  <p>youremail@yourdomain.com</p>
                              </div>
                          </div>
                          <div class="col-md-3">
                              <div class="info-block">
                                  <i class="fa fa-mobile"></i>
                                  <p>(000) +123 123 1235</p>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </section>
  <!--- CONTACT INFORMATION -->

@endsection

@section('js')

@endsection
