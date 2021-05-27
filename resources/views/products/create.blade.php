@extends('Products.layout')

@section('content')

<div class="row">
<div class="col-lg-12  margin-tb">
    <div class="pull-left">
        <h2> ADD new product</h2>
    </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('products.index') }}">back</a>
        </div>
</div>
</div>
@if ($errors->any())
    <div class="alert alert-danger">
        <strong>Whoops!</strong> There were some problems with your input.<br><br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form action="{{ route('products.store') }}" method="POST">
@csrf 
<div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Name:</strong>
                <input type="text" name="name" class="form-control" placeholder="Name">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Model:</strong>
                <input type="text" name="model" class="form-control" placeholder="Model">
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Price:</strong>
                <input type="decimal" name="price" class="form-control" placeholder="Price">
            </div>
        </div>


        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Quantity:</strong>
                <input type="decimal" name="quantity" class="form-control" placeholder="quantity">
            </div>
        </div>


        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Status:</strong>
                <input type="text" name="status" class="form-control" placeholder="Status">
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <button type="submit" class="btn btn-primary">submit </button>
        
        </div>
    
    </div>

</form>

@endsection