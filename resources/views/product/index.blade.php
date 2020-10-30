@extends('layouts.master')

@section('title','Products')
   
@section('content')

    <a href="{{route('new-product')}}" class="btn btn-primary my-5 float-right">Add New</a>

    <table class="table text-center">
    <thead>
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Price</th>
        <th></th>
    </tr>
    </thead>
    <tbody>
    @foreach($products as $product) 
    <tr>
        <td>{{$product->id}}</td>
        <td>{{$product->name}}</td>
        <td>{{$product->price}}</td>
        <td>
            <a href="{{url('products/edit/'.$product->id)}}" class="btn btn-success">Edit</a>
            <a href="{{url('products/delete/'.$product->id)}}" class="btn btn-danger">Delete</a>
        </td>
    </tr>
    @endforeach
    </tbody>
    </table>

@endsection


