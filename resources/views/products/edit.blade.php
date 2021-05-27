@extends('products.layout')


@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Edit product</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('products.index')}}">back</a>
        </div>
    </div>
</div>
@if($errors->any())
    <div class="alert alert-danger">
        <strong>hello</strong> there is a problems with your input <br><br>
        <ul>
            @foreach(@errors->all() as $error)
            <li>{{$error}}</li>
            @endforeach
        </ul>
    </div>
@endif
<form action="{{ route('products.update',$product->id) }}" method="POST">
@csrf
@method('PUT')

    <div clas="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Name</strong>
                <input type="text" name="name" value="{{$product->name}}" class="form-control" placeholder="name">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>model</strong>
                <input type="text" name="model" value="{{$product->model}}" class="form-control" placeholder="model">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>price</strong>
                <input type="decimal" name="price" value="{{$product->price}}" class="form-control" placeholder="price">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Quantity</strong>
                <input type="decimal" name="quantity" value="{{$product->quantity}}" class="form-control" placeholder="quantity">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>status </strong>
                <input type="text" name="status" value="{{$product->status}}" class="form-control" placeholder="status">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
              <button type="Update" class="btn btn-primary">Update</button>
            </div>
    </div>

</form>

@endsection