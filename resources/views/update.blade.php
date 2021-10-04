@extends('base')

@section('content')
<br><br>
<section>
  <div class="container">
    <div class="row">
        <div class="card text-black" style="border-radius: 30px;">
            <div class="row justify-content-center">
              <div class=" col-xl-6">

                <p class="text-center h1 fw-bold  mt-4">Update Vaccine</p>
                <form action="{{url('/home/update/' . $item->id)}}" method="post">
                    @csrf
                    @method('patch')
                    <div class="align-items-center mb-4">
                        <div class="form-outline flex-fill mb-0">
                            <input type="text" name="name" id="name" value="{{$item->name}}" placeholder="Name" class="form-control">
                        </div>
                    </div>

                    <div class="align-items-center mb-4">
                        <div class="form-outline flex-fill mb-0">
                            <input type="text" name="description" id="description" value="{{$item->description}}" placeholder="Description" class="form-control">
                        </div>
                    </div>

                    <div class="align-items-center mb-4">
                        <div class="form-outline flex-fill mb-0">
                            <input type="text" name="price" id="price" value="{{$item->price}}" placeholder="Price" class="form-control">
                        </div>
                    </div>

                    <div class="align-items-center mb-4">
                        <div class="form-outline flex-fill mb-0">
                            <input type="text" name="quantity" id="quantity" value="{{$item->quantity}}" placeholder="Quantity" class="form-control">
                        </div>
                    </div>

                    <div> <button type="submit" class="btn btn-info form-control">Update </button></div>
                    <div class="mt-2"><a href="{{ url('/home') }}" class="btn btn-danger w-100 text-white">Cancel</a></div>
                </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
@endsection