@extends('products.layout')


@section('content')
<div calss="row">
    <div class="col-lg-12">
        <div class="pull-left">
        <h2>Lavarel Graphql API CRUD</h2>
            <div class="pull-right">
            <a class ="btn btn-success" href="{{ route ('products.create')}}"> Create new Products</a>
        
        
            </div>
        
        
        </div>
    
    
    </div>
@if($message = Session::get('success'))
<div class="alert alert-success">
    <p>{{$message}}</p>
</div>
@endif

<table class="table table-borderded">
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Model</th>
        <th>Price</th>
        <th>Quantity</th>
        <th>Status</th>
        <th width="115px">Action </th>
    </tr>
    @foreach ($products as $product)
    <tr>
        <td>{{$product->id}}</td>
        <td>{{$product->name}}</td>
        <td>{{$product->model}}</td>
        <td>{{$product->price}}</td>
        <td>{{$product->quantity}}</td>
        <td>{{$product->status}}</td>
        <td> 
        <form action="{{ route('products.destroy',$product->id) }}" method="POST">
                    <a class="btn btn-primary" href="{{ route('products.edit',$product->id) }}">Edit</a>
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
        
        </td>
    </tr>
    @endforeach

</table>
{{ $products->links()}}

</div>


@endsection