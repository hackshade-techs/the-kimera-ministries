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

          <h1>ABOUT
              <span>US</span>
          </h1>

          <ul>

              <li>
                  <a href="{{ url('/') }}" title="Home">Home</a>
              </li>

              <li>
                  <a href="{{ url('about-us') }}" title="About Us">About Us</a>
              </li>

          </ul>

      </div>

  </div>



  <section>

      <div class="block">

          <div class="container">

              <div class="row">

                  <div class="col-md-6 column">

                      <div class="simple-text">

                          <h3>WHO WE ARE AND WHAT IS OUR MISSION?</h3>

                          <p>
                            The Faith Center Church of all Nations is really a strong prophetic church
                            under the Kimera Ministries and is led by the annoited man of God,
                            Prophet Elijah Kimera James. Our Ministry and church, is located in Kiteezi- Kabwoko.
                            For clear directions and location, click on the contact us Link.
                              <a href="{{ url('contact-us') }}" title="">Contact Us</a>
                          </p>
                          <p>
                            The Kimera Ministry is really a life changing Prophetic Ministry and a solution ground
                            to all problems. It is a fast growing ministry helping and delivering a multitude of
                            people with various aspects in life whom of which are perturbed with the prevailing poverty,
                            joblessness, marital problems, demon attacked, epileptic people, cancer of all forms, various
                            disease attacks, orphans and various worldly problems.
                          </p>

                          <a class="button" href="{{ url('donate-to-us') }}" title="">DONATE NOW</a>

                      </div>

                  </div>

                  <div class="col-md-6 column">

                      <div class="video">

                          <div class="video-img lightbox">

                              <img src="images/resource/video.jpg" alt="" />

                              <a href="http://vimeo.com/44867610" title="" data-poptrox="vimeo">
                                  <i class="fa fa-play"></i>
                              </a>

                          </div>

                      </div>
                      <!-- VIDEO -->

                  </div>

              </div>

          </div>

      </div>

  </section>





  <section>

      <div class="block blackish">

          <div class="parallax" style="background:url(images/parallax3.jpg);"></div>

          <div class="container">

              <div class="row">

                  <div class="col-md-12 column">

                      <div class="pastors-carousel">

                          <div class="pastors-message">

                              <div class="row">

                                  <div class="col-md-3">

                                      <img src="images/resource/pastor1.jpg" alt="" />

                                  </div>

                                  <div class="col-md-9">

                                      <h4>GARY HARREL</h4>

                                      <span>DIRECTOR-BASELINE</span>

                                      <p>Ut ac eleifend mauris, ac porta lacus. Sed pharetra magna massa, sit amet condimentum
                                          risus congue ut. Duis eu neque convallis, auctor lacus sed, tincidunt arcu.
                                          Aliquam vitae hendrerit dolor. Ut ac eleifend mauris, ac porta lacus. Sed
                                          pharetra magna massa, sit amet condimentum risus congue ut. Ut ac eleifend
                                          mauris, ac porta lacus. Sed pharetra magna massa, sit amet condimentum risus
                                          congue ut. Duis eu neque convallis, auctor lacus sed, tincidunt arcu. </p>

                                      <ul class="sermon-media">

                                          <li>
                                              <a href="http://vimeo.com/44867610" data-rel="prettyPhoto" title="">
                                                  <i class="fa fa-film"></i>
                                              </a>
                                          </li>

                                          <li>
                                              <a title="">
                                                  <i class="audio-btn fa fa-headphones"></i>

                                                  <div class="audioplayer">
                                                      <audio src="sermon.mp3"></audio>
                                                      <span class="cross">X</span>
                                                  </div>

                                              </a>
                                          </li>

                                          <li>
                                              <a target="_blank" href="test.html" title="">
                                                  <i class="fa fa-download"></i>
                                              </a>
                                          </li>

                                          <li>
                                              <a target="_blank" href="test-2.html" title="">
                                                  <i class="fa fa-book"></i>
                                              </a>
                                          </li>

                                      </ul>

                                  </div>

                              </div>

                          </div>

                          <div class="pastors-message">

                              <div class="row">

                                  <div class="col-md-3">

                                      <img src="images/resource/pastor2.jpg" alt="" />

                                  </div>

                                  <div class="col-md-9">

                                      <h4>GARY HARREL</h4>

                                      <span>DIRECTOR-BASELINE</span>

                                      <p>Ut ac eleifend mauris, ac porta lacus. Sed pharetra magna massa, sit amet condimentum
                                          risus congue ut. Duis eu neque convallis, auctor lacus sed, tincidunt arcu.
                                          Aliquam vitae hendrerit dolor. Ut ac eleifend mauris, ac porta lacus. Sed
                                          pharetra magna massa, sit amet condimentum risus congue ut. Ut ac eleifend
                                          mauris, ac porta lacus. Sed pharetra magna massa, sit amet condimentum risus
                                          congue ut. Duis eu neque convallis, auctor lacus sed, tincidunt arcu. </p>

                                      <ul class="sermon-media">

                                          <li>
                                              <a href="http://vimeo.com/44867610" data-rel="prettyPhoto" title="">
                                                  <i class="fa fa-film"></i>
                                              </a>
                                          </li>

                                          <li>
                                              <a title="">
                                                  <i class="audio-btn fa fa-headphones"></i>

                                                  <div class="audioplayer">
                                                      <audio src="sermon.mp3"></audio>
                                                      <span class="cross">X</span>
                                                  </div>

                                              </a>
                                          </li>

                                          <li>
                                              <a target="_blank" href="test.html" title="">
                                                  <i class="fa fa-download"></i>
                                              </a>
                                          </li>

                                          <li>
                                              <a target="_blank" href="test-2.html" title="">
                                                  <i class="fa fa-book"></i>
                                              </a>
                                          </li>

                                      </ul>

                                  </div>

                              </div>

                          </div>

                      </div>

                  </div>

              </div>

          </div>

      </div>

  </section>


  <section>

      <div class="block">

          <div class="container">

              <div class="row">

                  <div class="col-md-12">

                      <div class="title">

                          <span>Pellent Esque Tellus</span>

                          <h2>MEET
                              <span>OUR STAFF</span>
                          </h2>

                      </div>



                      <div class="row">

                          <div class="team-carousel">

                              <div class="member">

                                  <div class="team">

                                      <div class="team-img">

                                          <img src="images/resource/team1.jpg" alt="" />

                                      </div>

                                      <div class="member-detail">

                                          <h3>
                                              <a href="team-single.html" title="">BOB SMITH</a>
                                          </h3>

                                          <span>SENIOR PASTOR</span>

                                          <p>Lorem ipsum dolor sit a onsec tetiri adien tashn commodo leg tashn dol tashin
                                              tyons piscin.</p>

                                      </div>

                                  </div>

                              </div>
                              <!-- MEMBER -->

                              <div class="member">

                                  <div class="team">

                                      <div class="team-img">

                                          <img src="images/resource/team2.jpg" alt="" />

                                      </div>

                                      <div class="member-detail">

                                          <h3>
                                              <a href="team-single.html" title="">LEOMA KITN</a>
                                          </h3>

                                          <span>SENIOR PASTOR</span>

                                          <p>Lorem ipsum dolor sit a onsec tetiri adien tashn commodo leg tashn dol tashin
                                              tyons piscin.</p>

                                      </div>

                                  </div>

                              </div>
                              <!-- MEMBER -->

                              <div class="member">

                                  <div class="team">

                                      <div class="team-img">

                                          <img src="images/resource/team3.jpg" alt="" />

                                      </div>

                                      <div class="member-detail">

                                          <h3>
                                              <a href="team-single.html" title="">RIFF KALE</a>
                                          </h3>

                                          <span>SENIOR PASTOR</span>

                                          <p>Lorem ipsum dolor sit a onsec tetiri adien tashn commodo leg tashn dol tashin
                                              tyons piscin.</p>

                                      </div>

                                  </div>

                              </div>
                              <!-- MEMBER -->

                              <div class="member">

                                  <div class="team">

                                      <div class="team-img">

                                          <img src="images/resource/team4.jpg" alt="" />

                                      </div>

                                      <div class="member-detail">

                                          <h3>
                                              <a href="team-single.html" title="">TOM FOBE</a>
                                          </h3>

                                          <span>SENIOR PASTOR</span>

                                          <p>Lorem ipsum dolor sit a onsec tetiri adien tashn commodo leg tashn dol tashin
                                              tyons piscin.</p>

                                      </div>

                                  </div>

                              </div>
                              <!-- MEMBER -->

                              <div class="member">

                                  <div class="team">

                                      <div class="team-img">

                                          <img src="images/resource/team5.jpg" alt="" />

                                      </div>

                                      <div class="member-detail">

                                          <h3>
                                              <a href="team-single.html" title="">SEIMN LINEO</a>
                                          </h3>

                                          <span>SENIOR PASTOR</span>

                                          <p>Lorem ipsum dolor sit a onsec tetiri adien tashn commodo leg tashn dol tashin
                                              tyons piscin.</p>

                                      </div>

                                  </div>

                              </div>
                              <!-- MEMBER -->

                              <div class="member">

                                  <div class="team">

                                      <div class="team-img">

                                          <img src="images/resource/team6.jpg" alt="" />

                                      </div>

                                      <div class="member-detail">

                                          <h3>
                                              <a href="team-single.html" title="">KOJEO SLORM</a>
                                          </h3>

                                          <span>SENIOR PASTOR</span>

                                          <p>Lorem ipsum dolor sit a onsec tetiri adien tashn commodo leg tashn dol tashin
                                              tyons piscin.</p>

                                      </div>

                                  </div>

                              </div>
                              <!-- MEMBER -->

                          </div>
                          <!-- TEAM CAROUSEL -->

                      </div>

                  </div>

              </div>

          </div>

      </div>

  </section>

@endsection

@section('js')

  <script type="text/javascript">

      $(document).ready(function() {

  		$(".pastors-carousel").owlCarousel({

  			autoPlay: 5000,

  			slideSpeed:1000,

  			singleItem : true,

  			transitionStyle : "fadeUp",

  			navigation : false

  		}); /*** PASTORS MESSAGE CAROUSEL ***/



  		$(".team-carousel").owlCarousel({

  			autoPlay: 8000,

  			rewindSpeed : 3000,

  			slideSpeed:2000,

  			items : 4,

  			itemsDesktop : [1199,3],

  			itemsDesktopSmall : [979,2],

  			itemsTablet : [768,2],

  			itemsMobile : [479,1],

  			navigation : false,

  		}); /*** TEAM CAROUSEL ***/



  	});


  				$('audio,video').mediaelementplayer();


      </script>

@endsection
