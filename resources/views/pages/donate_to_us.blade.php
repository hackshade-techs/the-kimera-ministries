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

              	<div class="col-md-12 column">

					<div class="title">


						<h2>DONATE <span>TO US</span></h2>
						<div class="space"></div>
						<h3>The Kimera <span>Ministries</span></h3>
						<div class="space"></div>
						<p>To support the good work of God through our Ministry, please donate to the Kimera Ministries on: </p>

						<p>"This stone, which I have set up as a pillar, will be God's house, and of all that You give me I will surely give a tenth to You." 
GENESIS 28:22</p>

					</div>	

					<div class="tab-style">

						<ul class="nav nav-tabs" id="myTab2">

							<li class="active"><a data-toggle="tab" href="#tab1">MOBILE MONEY DETAILS</a></li>

							<li class=""><a data-toggle="tab" href="#tab2">BANK ACCOUNT DETAILS</a></li>


						</ul>

						<div class="tab-content" id="myTabContent2">

							<div id="tab1" class="tab-pane fade active in">

								<p>
									<blockquote>Mobile Money Name: Kimera Elijah <br> Mobile Money Number: +256 773547331 </blockquote>
								</p>
								

								<div class="space"></div>

							</div>

							<div id="tab2" class="tab-pane fade">

								<p>
									<blockquote>Bank Account Name: James Elijah Kimera <br> Bank Account Number: 0100241812800 </blockquote>
								</p>

							</div>

						</div>

					</div><!-- TABS STYLE -->

				</div>

              </div>

          </div>

      </div>

  </section>



@endsection

@section('js')

@endsection
