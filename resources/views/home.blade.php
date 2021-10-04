@extends('base')
<br><br>
@section('content')
<br><br><br>
<div class="container">
    <div class="main-body">
        <div class="row gutters-sm">
            <div class="col-md-12 mb-8">
            <div class="mb-1 float-end">
                <a href="{{url('home/create')}}" class="btn btn-dark p-3">
                    Add Vaccine
                </a>
            </div>
                <h1 class="text-blue">Vaccines</h1>
                <table class="table ">
                    <thead class="thead-dark">
                        <th>Name</th>
                        <th>Description</th>
                        <th>Price</th>
                        <th>Quantity</th>
                        <th>&nbsp;</th>
                    </thead>
                    <tbody>
                        @foreach($items as $book)
                        <tr>
                            <td>{{$book->name}}</td>
                            <td>{{$book->description}}</td>
                            <td>{{$book->price}}</td>
                            <td>{{$book->quantity}}</td>
                            <td>
                                <a href="{{ url('home/update/' . $book->id) }}" style="margin-right: 5px;" class="btn btn-primary btn-sm d-inline">
                                    Edit
                                </a>
                                <a href="{{ url('home/delete/' . $book->id) }}" class="btn btn-danger btn-sm" type="submit">
                                    Delete
                                </a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@stop