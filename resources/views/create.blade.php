@extends('base')
<br><br>
@section('content')
<br>
<section>
  <div class="container">
    <div class="row">
        <div class="card text-black" style="border-radius: 30px;">
            <div class="row justify-content-center">
              <div class=" col-xl-6">

                <p class="text-center h1 fw-bold  mt-4">Update Vaccine</p>
                    <form action="{{url('/home/create')}}" method="post">
                        @csrf
                        <div class="align-items-center mb-4">
                            <div class="form-outline flex-fill mb-0">
                            <input type="text" name="name" id="name" placeholder="Name" class="form-control">
                            </div>
                        </div>

                        <div class="align-items-center mb-4">
                            <div class="form-outline flex-fill mb-0">
                                <input type="text" name="description" id="description" placeholder="Description" class="form-control">
                            </div>
                        </div>

                        <div class=" align-items-center mb-4">
                            <div class="form-outline flex-fill mb-0">
                            <input type="text" name="price" id="price" placeholder="Price" class="form-control">
                            </div>
                        </div>

                        <div class=" align-items-center mb-4">
                            <div class="form-outline flex-fill mb-0">
                            <input type="text" name="quantity" id="quantity" placeholder="Quantity" class="form-control">
                            </div>
                        </div>

                        <div> <button type="submit" class="btn btn-info form-control">Add </button></div>
                        <div class="mt-2"><a href="{{ url('/home') }}" class="btn btn-danger w-100 text-white">Cancel</a></div>
                    </form>
                </div>
            </div>
        </div>
      </div>
    </div>
  </div>
@endsection