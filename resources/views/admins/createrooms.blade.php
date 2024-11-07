@extends('layouts.admin')

@section('content')


<div class="row">
    <div class="col">
      <div class="card">
        <div class="card-body">

            <div class="container">
                @if(session()->has('success'))
                  <div class="alert alert-success">
                    {{ session()->get('success') }}
                  </div>
                @endif
              </div>

          <h5 class="card-title mb-5 d-inline">Create Rooms</h5>
      <form method="POST" action="{{route('rooms.store')}}" enctype="multipart/form-data">
            <!-- Email input -->
            @csrf
            <div class="form-outline mb-4 mt-4">
              <input type="text" name="name" id="form2Example1" class="form-control" placeholder="name" />
             
            </div>
            <div class="form-outline mb-4 mt-4">
              <input type="file" name="image" id="form2Example1" class="form-control" />
             
            </div>  
            <div class="form-outline mb-4 mt-4">
              <input type="text" name="price" id="form2Example1" class="form-control" placeholder="price" />
             
            </div> 
             <div class="form-outline mb-4 mt-4">
              <input type="text" name="max_persons" id="form2Example1" class="form-control" placeholder="num_persons" />
             
            </div> 
            <div class="form-outline mb-4 mt-4">
              <input type="text" name="num_beds" id="form2Example1" class="form-control" placeholder="num_beds" />
             
            </div> 
            <div class="form-outline mb-4 mt-4">
              <input type="text" name="size" id="form2Example1" class="form-control" placeholder="size" />
             
            </div> 
           <select name="country_id" class="form-control">
            <option>Choose Hotel Name</option>
            @foreach($hotels as $hotel)               
                <option value="{{$hotel->id}}">{{$hotel->name}},{{$hotel->location}}</option>
            @endforeach
           </select>
           <br>

           <br>

            <!-- Submit button -->
            <button type="submit" name="submit" class="btn btn-primary  mb-4 text-center">create</button>

      
          </form>

        </div>
      </div>
    </div>
  </div>

@endsection