@extends('layouts.app')

@section('content')


<div class="hero-wrap js-fullheight" style="background-image: url('{{ asset ('assets/images/bg_1.jpg') }}');">
    {{-- <div class="overlay"></div> --}}
    <div class="container">
      <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-start">
        <h1 class="subheading" style="font-size: 6rem; color:black">My Bookings</h1>
          <!-- <p><a href="#" class="btn btn-primary">Learn more</a> <a href="#" class="btn btn-white">Contact us</a></p> -->
        <table class="table mt-10">
            <thead>
              <tr>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <th scope="col">Contact</th>
                <th scope="col">Check_in</th>
                <th scope="col">Check_out</th>
                <th scope="col">days</th>
                <th scope="col">price</th>
                <th scope="col">room_name</th>
                <th scope="col">Status</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($bookings as $booking)
                <tr>
                    <th scope="row">{{$booking->name}}</th>
                    <td>{{$booking->email}}</td>
                    <td>{{$booking->phone_number}}</td>
                    <td>{{$booking->check_in}}</td>
                    <td>{{$booking->check_out}}</td>
                    <td>{{$booking->days}}</td>
                    <td>{{$booking->price}}</td>
                    <td>{{$booking->room_name}}</td>
                    <td>{{$booking->status}}</td>
                  </tr>
                @endforeach
            </tbody>
        </table>
      </div>
    </div>
</div>
@endsection