@extends('layouts.app')

@section('content')


<section class="home-slider owl-carousel" style="margin-top:-10px;">
    <div class="slider-item" style="background-image:url({{ asset ('assets/images/'.$getRooms->image.'') }});">
        {{-- <div class="overlay"></div> --}}
        <div class="container">
            <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-start" data-scrollax-parent="true">
              <div class="col-md-7 ftco-animate">
                  <h2 class="subheading">Welcome to SAGA SUITES</h2>
                  <h1 class="mb-4">{{$getRooms->name}}</h1>
                <!-- <p><a href="#" class="btn btn-primary">Learn more</a> <a href="#" class="btn btn-white">Contact us</a></p> -->
              </div>
            </div>
        </div>
    </div>
</section>

  <div class="container">
    @if(session()->has('error'))
    <div class="alert alert-success">
        {{ session()->get('error') }}
    </div>
    @endif
  </div>

  <div class="container">
    @if(session()->has('error_dates'))
      <div class="alert alert-success">
        {{ session()->get('error_dates') }}
      </div>
    @endif
  </div>


  <section class="ftco-section ftco-book ftco-no-pt ftco-no-pb">
      <div class="container">
          <div class="row justify-content-end">
              <div class="col-lg-4">
                  <form action="{{ route('hotel.rooms.booking',$getRooms->id)}}" method="POST" class="appointment-form" style="margin-top: -568px;">
                    @csrf  
                    <h3 class="mb-3" style="font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif; font-weight:bold; font-size:3rem">Book this room</h3>
                      <div class="row">
                          <div class="col-md-12">
                              <div class="form-group">
                                  <input name=" email" type="text" class="form-control" placeholder="Email">
                              </div>
                          </div>
                         
                          <div class="col-md-12">
                              <div class="form-group">
                                  <input name="name" type="text" class="form-control" placeholder="Full Name">
                              </div>
                          </div>

                          <div class="col-md-12">
                              <div class="form-group">
                                  <input name="phone_number" type="text" class="form-control" placeholder="Phone Number">
                              </div>
                          </div>

                          <div class="col-md-6">
                              <div class="form-group">
                              <div class="input-wrap">
                                  <div class="icon"><span class="ion-md-calendar"></span></div>
                                  <label for="" style="font-weight:bolder; font-size:18px; color:white;">Check-In</label>
                                      <input type="date" name="check_in" class="form-control appointment_date-check-in" placeholder="Check-In">
                                  </div>
                              </div>
                          </div>
                      
                          <div class="col-md-6">
                                  <div class="form-group">
                                      <div class="icon"><span class="ion-md-calendar"></span></div>
                                      <label for="" style="font-weight:bolder; font-size:18px; color:white;">Check-Out</label>
                                      <input type="date" name="check_out" class="form-control appointment_date-check-out" placeholder="Check-Out">
                                  </div>
                          </div>
                                                
                          <div class="col-md-12">
                              <div class="form-group">
                                @if(isset(Auth::user()->id))
                                  <input type="submit" value="Book and Pay Now" class="btn btn-primary">
                                @else
                                  <p class="alert alert-success">Login to Book a Room</p>
                                @endif
                              </div>
                          </div>
                      </div>
              </form>
              </div>
          </div>
      </div>
  </section>
 





  <section class="ftco-section">
    <div class="container">
        <div class="row justify-content-center mb-5 pb-3">
        <div class="col-md-7 heading-section text-center ftco-animate">
            <span class="subheading">Welcome to Harbor Lights Hotel</span>
          <h2 class="mb-4">You'll Never Want To Leave</h2>
        </div>
      </div>  
      <div class="row d-flex">
        <div class="col-md pr-md-1 d-flex align-self-stretch ftco-animate">
          <div class="media block-6 services py-4 d-block text-center">
            <div class="d-flex justify-content-center">
                <div class="icon d-flex align-items-center justify-content-center">
                    <span class="flaticon-reception-bell"></span>
                </div>
            </div>
            <div class="media-body">
              <h3 class="heading mb-3">Friendly Service</h3>
            </div>
          </div>      
        </div>
        <div class="col-md px-md-1 d-flex align-self-stretch ftco-animate">
          <div class="media block-6 services active py-4 d-block text-center">
            <div class="d-flex justify-content-center">
                <div class="icon d-flex align-items-center justify-content-center">
                    <span class="flaticon-serving-dish"></span>
                </div>
            </div>
            <div class="media-body">
              <h3 class="heading mb-3">Get Breakfast</h3>
            </div>
          </div>    
        </div>
        <div class="col-md px-md-1 d-flex align-sel Searchf-stretch ftco-animate">
          <div class="media block-6 services py-4 d-block text-center">
            <div class="d-flex justify-content-center">
                <div class="icon d-flex align-items-center justify-content-center">
                    <span class="flaticon-car"></span>
                </div>
            </div>
            <div class="media-body">
              <h3 class="heading mb-3">Transfer Services</h3>
            </div>
          </div>      
        </div>
        <div class="col-md px-md-1 d-flex align-self-stretch ftco-animate">
          <div class="media block-6 services py-4 d-block text-center">
            <div class="d-flex justify-content-center">
                <div class="icon d-flex align-items-center justify-content-center">
                    <span class="flaticon-spa"></span>
                </div>
            </div>
            <div class="media-body">
              <h3 class="heading mb-3">Suits &amp; SPA</h3>
            </div>
          </div>      
        </div>
        <div class="col-md pl-md-1 d-flex align-self-stretch ftco-animate">
          <div class="media block-6 services py-4 d-block text-center">
            <div class="d-flex justify-content-center">
                <div class="icon d-flex align-items-center justify-content-center">
                    <span class="ion-ios-bed"></span>
                </div>
            </div>
            <div class="media-body">
              <h3 class="heading mb-3">Cozy Rooms</h3>
            </div>
          </div>      
        </div>
      </div>
    </div>
</section>
      
  <section class="ftco-intro" style="background-image: url(images/image_2.jpg);" data-stellar-background-ratio="0.5">
          <div class="overlay"></div>
          <div class="container">
              <div class="row justify-content-center">
                  <div class="col-md-9 text-center">
                      <h2>Ready to get started</h2>
                      <p class="mb-4">It’s safe to book online with us! Get your dream stay in clicks or drop us a line with your questions.</p>
                      <p class="mb-0"><a href="#" class="btn btn-primary px-4 py-3">Learn More</a> <a href="#" class="btn btn-white px-4 py-3">Contact us</a></p>
                  </div>
              </div>
          </div>
  </section>


@endsection