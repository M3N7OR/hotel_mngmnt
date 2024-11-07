@extends('layouts.app')

@section('content')
{{-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>
</div> --}}

<section class="home-slider owl-carousel" style="margin-top:-10px;">
    <div class="slider-item" style="background-image:url('{{ asset ('assets/images/bg_1.jpg') }}');">
        {{-- <div class="overlay"></div> --}}
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-end">
        <div class="col-md-6 ftco-animate">
            <div class="text">
                <h2>More than a hotel... an experience</h2>
              <h1 class="mb-3">Hotel for the whole family, all year round.</h1>
          </div>
        </div>
      </div>
      </div>
    </div>

    <div class="slider-item" style="background-image:url('{{ asset ('assets/images/bg_2.jpg') }}');">
        {{-- <div class="overlay"></div> --}}
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-end">
        <div class="col-md-6 ftco-animate">
            <div class="text">
                <h2>Harbor Lights Hotel &amp; Resort</h2>
              <h1 class="mb-3">It feels like staying in your own home.</h1>
          </div>
        </div>
      </div>
      </div>
    </div>
</section>

{{-- <section class="ftco-booking ftco-section ftco-no-pt ftco-no-pb">
    <div class="container">
        <div class="row no-gutters">
            <div class="col-lg-12">
                <form action="#" class="booking-form aside-stretch">
                <div class="row">
                    <div class="col-md d-flex py-md-4">
                        <div class="form-group align-self-stretch d-flex align-items-end">
                            <div class="wrap align-self-stretch py-3 px-4">
                                    <label for="#">Check-in Date</label>
                                    <input type="text" class="form-control checkin_date" placeholder="Check-in date">
                                </div>
                            </div>
                    </div>
                    <div class="col-md d-flex py-md-4">
                        <div class="form-group align-self-stretch d-flex align-items-end">
                            <div class="wrap align-self-stretch py-3 px-4">
                                    <label for="#">Check-out Date</label>
                                    <input type="text" class="form-control checkout_date" placeholder="Check-out date">
                                </div>
                            </div>
                    </div>
                    <div class="col-md d-flex py-md-4">
                        <div class="form-group align-self-stretch d-flex align-items-end">
                            <div class="wrap align-self-stretch py-3 px-4">
                                  <label for="#">Room</label>
                                  <div class="form-field">
                                    <div class="select-wrap">
                            <div class="icon"><span class="ion-ios-arrow-down"></span></div>
                            <select name="" id="" class="form-control">
                                <option value="">Suite</option>
                              <option value="">Family Room</option>
                              <option value="">Deluxe Room</option>
                              <option value="">Classic Room</option>
                              <option value="">Superior Room</option>
                              <option value="">Luxury Room</option>
                            </select>
                          </div>
                          </div>
                        </div>
                  </div>
                    </div>
                    <div class="col-md d-flex py-md-4">
                        <div class="form-group align-self-stretch d-flex align-items-end">
                            <div class="wrap align-self-stretch py-3 px-4">
                                  <label for="#">Guests</label>
                                  <div class="form-field">
                                    <div class="select-wrap">
                            <div class="icon"><span class="ion-ios-arrow-down"></span></div>
                            <select name="" id="" class="form-control">
                              <option value="">1</option>
                              <option value="">2</option>
                              <option value="">3</option>
                              <option value="">4</option>
                              <option value="">5</option>
                              <option value="">6</option>
                            </select>
                          </div>
                          </div>
                        </div>
                  </div>
                    </div>
                    <div class="col-md d-flex">
                        <div class="form-group d-flex align-self-stretch">
                      <a href="#" class="btn btn-primary py-5 py-md-3 px-4 align-self-stretch d-block"><span>Check Availability <small>Best Price Guaranteed!</small></span></a>
                    </div>
                    </div>
                </div>
            </form>
            </div>
        </div>
    </div>
</section> --}}


<section class="ftco-section ftco-services">
  <div class="container">
    <div class="col-md-13 heading-section text-center ftco-animate">
      <span class="subheading">Welcome to THE SAGA SUITES</span>
    <h2 class="mb-4">OUR HOTELS</h2>
  </div>
    <div class="row">
      @foreach($hotels as $hotel)
        <div class="col-md-4 d-flex services align-self-stretch px-4 ftco-animate">
          <div class="d-block services-wrap text-center">

              <div class="media-body py-4 px-3">
                <h3 class="heading">{{$hotel->name}}</h3>
                <p>{{ $hotel->description}}</p>
                <p>Location: {{$hotel->location}}</p>
                <p><a href="{{route('hotel.rooms',$hotel->id)}}" class="btn btn-outline-primary">View rooms</a></p>
              </div>
          </div>      
        </div>
      @endforeach
    </div>
  </div>
</section>


<section class="ftco-section">
    <div class="container">
        <div class="row justify-content-center mb-5 pb-3">
        <div class="col-md-7 heading-section text-center ftco-animate">
            <span class="subheading">Welcome to THE SAGA SUITES</span>
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

  <section class="ftco-section ftco-wrap-about ftco-no-pt ftco-no-pb">
    <div class="container">
        <div class="row no-gutters">

            <div class="col-md-7 order-md-last d-flex">
                <div class="img img-1 mr-md-2 ftco-animate" style="background-image: url('{{ asset ('assets/images/about-1.jpg') }}');"></div>
                <div class="img img-2 ml-md-2 ftco-animate" style="background-image: url('{{ asset ('assets/images/about-2.jpg') }}');"></div>
            </div>
            <div class="col-md-5 wrap-about pb-md-3 ftco-animate pr-md-5 pb-md-5 pt-md-4">
              <div class="heading-section mb-4 my-5 my-md-0">
                <span class="subheading">About THE SAGA SUITES</span>
                <h2 class="mb-4">THE SAGA SUITES is the Most Recommended Hotel All Over the World</h2>
              </div>
              <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
            <p><a href="{{route('hotel.rooms',$hotel->id)}}" class="btn btn-secondary rounded">Reserve Your Room Now</a></p>  

            {{-- #===={{route('hotel.rooms')}} --}}
            </div>
        </div>
    </div>
</section>


<section class="ftco-section ftco-no-pb ftco-room">
    <div class="container-fluid px-0">
        <div class="row no-gutters justify-content-center mb-5 pb-3">
      <div class="col-md-7 heading-section text-center ftco-animate">
          <span class="subheading">THE SAGA SUITES Rooms</span>
        <h2 class="mb-4">Hotel Master's Rooms</h2>
      </div>
    </div>  
        <div class="row no-gutters">
          @foreach ($rooms as $room)
              <div class="col-lg-6">
                <div class="room-wrap d-md-flex ftco-animate">
                    <a href="#" class="img" style="background-image: url({{ asset ('assets/images/'.$room->image.'') }});"></a>

                    {{-- #===={{route('hotel.rooms.details')}} --}}
                      <div class="half left-arrow d-flex align-items-center">
                        <div class="text p-4 text-center">
                            <p class="star mb-0"><span class="ion-ios-star"></span><span class="ion-ios-star"></span><span class="ion-ios-star"></span><span class="ion-ios-star"></span><span class="ion-ios-star"></span></p>
                            <h3 class="mb-3"><a href="{{ route('hotel.rooms.details',$room->id)}}" style="text-decoration: none">{{$room->name}}</a></h3>
                            <p class="mb-0"><span class="price mr-1">${{$room->price}}</span> <span class="per">per night</span></p>
                            <p class="mb-0"><span class="price mr-1">Max:</span> <span class="per">{{$room->max_persons}}</span></p>
                            <p class="mb-0"><span class="price mr-1">Bed:</span> <span class="per">{{$room->num_beds}}</span></p>
                            <p class="mb-0"><span class="price mr-1">Size:</span> <span class="per">{{$room->size}}</span></p>   
                            <p class="pt-1"><a href="{{ route('hotel.rooms.details',$room->id)}}" style="text-decoration: none" class="btn-custom px-3 py-2 rounded">View Details <span class="icon-long-arrow-right"></span></a></p>
                        </div>
                    </div>
                </div>
              </div>
          @endforeach

        </div>
    </div>
</section>


<section class="ftco-section ftco-menu bg-light" id="rest">
  <div class="container-fluid px-md-4">
    <div class="row justify-content-center mb-5 pb-3">
      <div class="col-md-7 heading-section text-center ftco-animate">
        <span class="subheading">Restaurant</span>
        <h2>Restaurant</h2>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-6 col-xl-4 d-flex">
        <div class="pricing-entry rounded d-flex ftco-animate">
          <div class="img" style="background-image: url('{{ asset ('assets/images/menu-1.jpg') }}');"></div>
          <div class="desc p-4">
            <div class="d-md-flex text align-items-start">
              <h3><span>Grilled Crab with Onion</span></h3>
              <span class="price">$20.00</span>
            </div>
            <div class="d-block">
              <p>A small river named Duden flows by their place and supplies</p>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-6 col-xl-4 d-flex">
        <div class="pricing-entry rounded d-flex ftco-animate">
          <div class="img" style="background-image: url('{{ asset ('assets/images/menu-2.jpg') }}');"></div>
          <div class="desc p-4">
            <div class="d-md-flex text align-items-start">
              <h3><span>Grilled Crab with Onion</span></h3>
              <span class="price">$20.00</span>
            </div>
            <div class="d-block">
              <p>A small river named Duden flows by their place and supplies</p>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-6 col-xl-4 d-flex">
        <div class="pricing-entry rounded d-flex ftco-animate">
          <div class="img" style="background-image: url('{{ asset ('assets/images/menu-3.jpg') }}');"></div>
          <div class="desc p-4">
            <div class="d-md-flex text align-items-start">
              <h3><span>Grilled Crab with Onion</span></h3>
              <span class="price">$20.00</span>
            </div>
            <div class="d-block">
              <p>A small river named Duden flows by their place and supplies</p>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-6 col-xl-4 d-flex">
        <div class="pricing-entry rounded d-flex ftco-animate">
          <div class="img" style="background-image: url('{{ asset ('assets/images/menu-4.jpg') }}');"></div>
          <div class="desc p-4">
            <div class="d-md-flex text align-items-start">
              <h3><span>Grilled Crab with Onion</span></h3>
              <span class="price">$20.00</span>
            </div>
            <div class="d-block">
              <p>A small river named Duden flows by their place and supplies</p>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-6 col-xl-4 d-flex">
        <div class="pricing-entry rounded d-flex ftco-animate">
          <div class="img" style="background-image: url('{{ asset ('assets/images/menu-5.jpg') }}');"></div>
          <div class="desc p-4">
            <div class="d-md-flex text align-items-start">
              <h3><span>Grilled Crab with Onion</span></h3>
              <span class="price">$20.00</span>
            </div>
            <div class="d-block">
              <p>A small river named Duden flows by their place and supplies</p>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-6 col-xl-4 d-flex">
        <div class="pricing-entry rounded d-flex ftco-animate">
          <div class="img" style="background-image: url('{{ asset ('assets/images/menu-6.jpg')}}');"></div>
          <div class="desc p-4">
            <div class="d-md-flex text align-items-start">
              <h3><span>Grilled Crab with Onion</span></h3>
              <span class="price">$20.00</span>
            </div>
            <div class="d-block">
              <p>A small river named Duden flows by their place and supplies</p>
            </div>
          </div>
        </div>
      </div>
      {{-- <div class="col-md-12 text-center ftco-animate">
        <p><a href="#" class="btn btn-primary rounded">View All Menu</a></p>
      </div> --}}
    </div>
  </div>
</section>




<section class="instagram" style="margin-top: 60px; margin-bottom:-15px;" >
    <div class="container-fluid">
      <div class="row no-gutters justify-content-center pb-5">
        <div class="col-md-7 text-center heading-section ftco-animate">
            <span class="subheading">Photos</span>
          <h2><span>Instagram</span></h2>
        </div>
      </div>
      <div class="row no-gutters">
        <div class="col-sm-12 col-md ftco-animate">
          <a href="images/insta-1.jpg" class="insta-img image-popup" style="background-image: url('{{ asset ('assets/images/insta-1.jpg') }}');">
            <div class="icon d-flex justify-content-center">
              <span class="icon-instagram align-self-center"></span>
            </div>
          </a>
        </div>
        <div class="col-sm-12 col-md ftco-animate">
          <a href="images/insta-2.jpg" class="insta-img image-popup" style="background-image: url('{{ asset ('assets/images/insta-2.jpg') }}');">
            <div class="icon d-flex justify-content-center">
              <span class="icon-instagram align-self-center"></span>
            </div>
          </a>
        </div>
        <div class="col-sm-12 col-md ftco-animate">
          <a href="images/insta-3.jpg" class="insta-img image-popup" style="background-image: url('{{ asset ('assets/images/insta-3.jpg') }}');">
            <div class="icon d-flex justify-content-center">
              <span class="icon-instagram align-self-center"></span>
            </div>
          </a>
        </div>
        <div class="col-sm-12 col-md ftco-animate">
          <a href="images/insta-4.jpg" class="insta-img image-popup" style="background-image: url('{{ asset ('assets/images/insta-4.jpg') }}');">
            <div class="icon d-flex justify-content-center">
              <span class="icon-instagram align-self-center"></span>
            </div>
          </a>
        </div>
        <div class="col-sm-12 col-md ftco-animate">
          <a href="images/insta-5.jpg" class="insta-img image-popup" style="background-image: url('{{ asset ('assets/images/insta-5.jpg') }}');">
            <div class="icon d-flex justify-content-center">
              <span class="icon-instagram align-self-center"></span>
            </div>
          </a>
        </div>
      </div>
    </div>
  </section>
@endsection
