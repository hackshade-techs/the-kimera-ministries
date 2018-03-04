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
          <h1>GET 
              <span>INVOLVED</span>
          </h1>
          <ul>
              <li>
                  <a href="{{ url('/') }}" title="">Home</a>
              </li>
              <li>
                  <a href="{{ url('get-involved') }}" title="">Get Involved</a>
              </li>
          </ul>
      </div>
  </div>
  <!--- PAGE TOP -->


  <section>
      <div class="block remove-gap">
          <div class="container">
              <div class="row">
                  <div class="col-md-12">
                  	<div class="space"></div>
                      <div class="title2">
                          <h2>WANT TO
                              <span>VOLUNTEER</span>
                          </h2>
                      </div>

                      <div class="row">
                          <div class="col-md-6 column">
                              <h4>VOLUNTEER</h4>
                              <div class="space"></div>
                             	<p>"Then Jacob awoke from his sleep and said, "Surely the LORD is in this place, and I did not know it." 
								He was afraid and said, "How awesome is this place! This is none other than the house of God, and this is the gate of heaven."<br>Genesis 28:16-17<br>
								<br>The Faith Center Church of all Nations led by the annoited Man of God, Prophet Elijah Kimera James and the Kimera Ministries, call you to join us today and volunteer in establishing the work of God across the globe such as preaching the gospel, helping the needy and support God's work.</p>
                              <div class="space"></div>
                              
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
                              <form class="theme-form" method="post" action="{{ route('volunteers.store') }}" name="contactform" id="contactform">
                                  {{ csrf_field() }}
                                  <input name="first_name" class="half-field form-control" type="text" required id="name" placeholder="First Name" />
	                              <input name="last_name" class="half-field form-control" type="text" required id="name" placeholder="Last Name" />
	                              <input name="email" class="half-field form-control" type="text" required id="email" placeholder="Email" />
	                              <input name="phone" class="half-field form-control" type="text" required id="name" placeholder="Phone" />
	                              <input name="address" class="half-field form-control" type="text" required id="name" placeholder="Address" />
                                  <input name="city" class="half-field form-control" type="text" required id="name" placeholder="City" />
                                  <input name="state" class="half-field form-control" type="text" required id="name" placeholder="State" />
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


@endsection

@section('js')

@endsection
