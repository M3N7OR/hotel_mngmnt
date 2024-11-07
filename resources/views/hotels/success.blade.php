@extends('layouts.app')

@section('content')


<section class="home-slider owl-carousel" style="margin-top:-10px;">
    <div class="slider-item" style="background-image:url('{{ asset ('assets/images/bg_1.jpg') }}');">
        {{-- <div class="overlay"></div> --}}
        <div class="container">
            <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-start">
              <div class="col-md-7">
                  <h2 class="subheading">You Booked This Room Successfully</h2>
                  <h1 class="mb-4"></h1> 
                  {{-- {{$getRooms->name}} --}}
                  <p><a href="{{route('home')}}" class="btn btn-primary">Go Home</a></p>
              </div>
            </div>
        </div>
    </div>
</section>


@endsection