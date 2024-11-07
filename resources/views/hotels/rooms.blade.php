@extends('layouts.app')

@section('content')



<section class="home-slider owl-carousel" style="margin-top:-10px;">
    <div class="slider-item" style="background-image:url('{{ asset ('assets/images/bg_1.jpg') }}');">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text align-items-center justify-content-center">
              <div class="col-md-9 ftco-animate text-center">
                  <p class="breadcrumbs mb-2"><span class="mr-2"><a href="{{ url('/home')}}" style="text-decoration: none; color:white; font-weight: bold">Home ><i class="fa fa-chevron-right"></i></a></span> <span>Rooms <i class="fa fa-chevron-right"></i></span></p>
                <h1 class="mb-0 bread">Apartment Room</h1>
              </div>
            </div>
          </div>
      </div>
    </div>
</section>


 
    <section class="ftco-section bg-light ftco-no-pt ftco-no-pb">
        <div class="container-fluid px-md-0">
            <div class="row no-gutters">
                
                @foreach($getRooms as $room)

                    <div class="col-lg-6">
                        <div class="room-wrap d-md-flex">
                        <a href="{{ route('hotel.rooms.details',$room->id)}}" class="img" style="background-image: url({{ asset('assets/images/'.$room->image.'')}});"></a>
                            <div class="half left-arrow d-flex align-items-center">
                                <div class="text p-4 p-xl-5 text-center">
                                <p class="star mb-0"><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span></p>
                                <h3 class="mb-3" ><a href="rooms.html" style="font-weight: bolder;">{{$room->name}}</a></h3>
                                <p class="mb-0"><span class="price mr-1">{{$room->price}}</span> <span class="per">per night</span></p>
                                <p class="mb-0"><span class="price mr-1">Max:</span> <span class="per">{{$room->max_persons}}</span></p>
                                <p class="mb-0"><span class="price mr-1">Bed:</span> <span class="per">{{$room->num_beds}}</span></p>
                                <p class="mb-0"><span class="price mr-1">Size:</span> <span class="per">{{$room->size}}</span></p>   
                                <p class="pt-1"><a href="{{ route('hotel.rooms.details',$room->id)}}"  class="btn-custom px-3 py-2">View Room Details <span class="icon-long-arrow-right"></span></a></p>
                                </div>
                            </div>
                        </div>
                    </div>

                @endforeach
            </div>
        </div>
    </section>

@endsection