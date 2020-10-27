@extends('layout.index')
@section('title','Thể loại')
@section('header','Thể loại')
@section('header-content','Thể loại')

@section('content')
<?php
    use App\models\Product;
?>

<div class="container">
<table class="table">
    <thead>
        <th>Name</th>
        <th>image</th>
        <th>price</th>
        <th>sale percent</th>
        <th>stocks</th>
        <th>status</th>
        <th>
            @can('create', Product::class)
                <a href="{{route('product.create')}}">
                    <button type="button" class="btn btn-outline-success"> Add </button>
                </a>
            @endcan
        </th>
    </thead>
    <tbody>
@foreach($products as $product)
    <tr id="product-{{$product->id}}">
            <td>{{$product->name}}</td>
            <td><img src="{{ substr($product->image_url, 0, 4) == 'http' ? $product->image_url : asset($product->image_url) }}" width="200px" alt=""></td>
            <td>{{$product->price}}</td>
            <td>{{$product->sale_percent}}</td>
            <td>{{$product->stocks}}</td>
            <td>{{$product->is_active}}</td>
            <td>
                @can('update', $product)
                    <a href="{{route('product.edit',$product->id)}}">
                        <button type="submit" class="btn btn-outline-warning">Edit</button>
                    </a>
                @endcan
            </td>
            <td> 
                @can('delete', $product)
                    <button type="submit" class="btn btn-outline-danger" onclick='dele("/product","{{$product->id}}")'>Delete</button>
                @endcan
            </td>
            <td>
                @can('view', $product)
                    <a href="{{route('product.show',$product->id)}}">
                        <button type="submit" class="btn btn-outline-info">Detail</button>
                    </a>
                @endcan
            </td>
    </tr>
@endforeach
    </tbody>

</table>
</div>
@endsection