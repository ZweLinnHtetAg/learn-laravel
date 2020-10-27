@extends('layouts.master')

@section('title','New Product')

@section('content')

    <div class="row">
    <section class="div col-6 offset-3">
    <form action="{{route('store-product')}}" method="POST">
        @csrf
        <div class="form-group">
            <label for="">Name</label>
            <input type="text" class="form-control" name="name" autofocus />
        </div>
        <div class="form-group">
            <label for="">Price</label>
            <input type="number" class="form-control" name="price" />
        </div>
        <button type="submit" class="btn btn-primary float-right btn-lg">Add</button>
    </form>
    </section>
    </div>


@endsection