@extends('base')
<br>
@section('content')
<br><br><br>
<section class="vh-100">
<div class="container">
    <div class="row">
        <div class="card text-black" style="border-radius: 30px;">
            <div class="row justify-content-center">
              <div class=" col-xl-6">

                <p class="text-center h1 fw-bold mb-5 mx-1 mx-md-4 mt-4">Delete Vaccine Record?</p>
                <form action="{{url('/home/delete/' . $item->id)}}" method="post">
                    @csrf
                    @method('delete')
                    <h6 class="mt-2 mb-3">
                        Delete this record {{$item->title }}? 
                    </h6>
                    
                    <div>
                        <button class="btn btn-danger" type="submit">Delete</button>
                        <a href="{{ url('/home') }}" class="btn btn-primary text-white">Cancel</a>   
                    </div>
                </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
@endsection