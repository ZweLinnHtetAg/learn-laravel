@extends('layouts.master')

@section('title','Edit Product')

@section('content')

    <div class="row">
    <section class="div col-6 offset-3">
    <form action="{{url('products/edit/'.$product->id)}}" method="POST">
        @csrf
        <div class="form-group">
            <label for="">Name</label>
            <input type="text" class="form-control" name="name" value="{{$product->name}}" />
        </div>
        <div class="form-group">
            <label for="">Price</label>
            <input type="number" class="form-control" name="price" value="{{$product->price}}" />
        </div>
        <button type="submit" class="btn btn-primary float-right btn-lg">Save</button>
    </form>
    </section>
    </div>


@endsection