@extends('layouts.app')

@section('title')
Home
@endsection

@section('desc')

@endsection

@section('keywords')

@endsection

@section('css')

@endsection

@section('content')

  <section>

      <div class="block">

          <div class="container">

              <div class="row">

                  <div class="title2">

                      <span>The Kimera Ministries</span>

                      <h2>CHURCH
                          <span>ACTIVITIES</span>
                      </h2>

                  </div>



                  <div class="col-md-12 column">

                      <div class="remove-ext">

                          @include('includes.church-activities')


                      </div>

                  </div>


              </div>

          </div>

      </div>

  </section>


  <section>

      <div class="block blackish">

          <div class="parallax" style="background:url(images/parallax2.jpg);"></div>

          <div class="container">

              <div class="row">

                  <div class="col-md-12">

                      <div class="upcoming-event">

                          <div class="row">

                              <div class="col-md-6 column">

                                  <h3>
                                      <i class="fa fa-bank"></i>Church Services</h3>



                                  <div class="remaining-time">

                                      <div class="col-md-12 column">
                                          <div class="table-responsive">
                                            <table class="table table-hover">
                                              <tr>
                                                <th>Day</th>
                                                <th>Service</th>
                                                <th>Time</th>
                                              </tr>
                                              <tbody>
                                                <tr>
                                                  <td>Sundays</td>
                                                  <td>Main Service</td>
                                                  <td>7:00 am - 1:00 pm</td>
                                                </tr>
                                                <tr>
                                                  <td>Tuesdays</td>
                                                  <td>Bible Study</td>
                                                  <td>3:00 pm - 5:00 pm</td>
                                                </tr>
                                                <tr>
                                                  <td>Wednesdays</td>
                                                  <td>Deliverance</td>
                                                  <td>8:00 am - 1:00 pm</td>
                                                </tr>
                                                <tr>
                                                  <td>Thursdays</td>
                                                  <td>Counselling</td>
                                                  <td>12:00 am - 1:00 pm</td>
                                                </tr>
                                              </tbody>
                                            </table>
                                          </div>

                                      </div>



                                     
                                  </div>

                              </div>



                              <div class="col-md-6 column">

                                  <iframe src="{{ asset(Config::get('settings.video')) }}" height="280"></iframe>

                              </div>

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
