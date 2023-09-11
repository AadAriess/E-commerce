{{-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit {{$product->name}}</title>
</head>
<body>
    <form action="{{route('update_product', $product)}}" method="post" enctype="multipart/form-data">
        @method('patch')
        @csrf
        <label for="">Name</label> <br>
        <input type="text" name="name" value="{{$product->name}}"> <br>
        <label for="">Description</label> <br>
        <input type="text" name="description" value="{{$product->description}}"> <br>
        <label for="">Price</label> <br>
        <input type="number" name="price" value="{{$product->price}}"> <br>
        <label for="">Stock</label> <br>
        <input type="number" name="stock" value="{{$product->stock}}"> <br>
        <label for="">Image</label> <br>
        <input type="file" name="image"> <br>
        <button type="submit">Update Data</button>
    </form>
</body>
</html> --}}

@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{__('Update Product')}}</div>
                <div class="card-body">
                    <form action="{{route('update_product', $product)}}" method="post" enctype="multipart/form-data">
                        @method('patch')
                        @csrf
                        <div class="form-group">
                            <label for="">Name</label>
                            <input type="text" name="name" placeholder="Name" id="" class="form-control" value="{{$product->name}}">
                        </div>

                        <div class="form-group">
                            <label for="">Description</label>
                            <input type="text" name="description" placeholder="Description" id="" class="form-control" value="{{$product->description}}">
                        </div>

                        <div class="form-group">
                            <label for="">Price</label>
                            <input type="number" name="price" placeholder="Price" id="" class="form-control" value="{{$product->price}}">
                        </div>

                        <div class="form-group">
                            <label for="">Stock</label>
                            <input type="number" name="stock" placeholder="Stock" id="" class="form-control" value="{{$product->stock}}">
                        </div>

                        <div class="form-group">
                            <label for="">Image</label>
                            <input type="file" name="image" class="form-control">
                        </div>

                        <button type="submit" class="btn btn-primary mt-3">Submit data</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
