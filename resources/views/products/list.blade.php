@extends('layout.index')
@section('title','Thể loại')
@section('header','Thể loại')
@section('header-content','Thể loại')

@section('content')

<table class="table">
    <thead>
        <th>Name</th>
        <th>image</th>
        <th>price</th>
        <th>sale percent</th>
        <th>stocks</th>
        <th>status</th>
        <th>
            <a href="{{route('product.create')}}">
            <button type="button" class="btn btn-outline-success"> Add </button>
            </a>
        </th>
    </thead>
    <tbody>
@foreach($products as $product)
        <tr id="product-{{$product->id}}">
                <td>{{$product->name}}</td>
                <td><img src="{{ substr($product->image_url, 0, 4) == 'http' ? $product->image_url : asset($product->image_url) }}" height="100px" alt=""></td>
                <td>{{$product->price}}</td>
                <td>{{$product->sale_percent}}</td>
                <td>{{$product->stocks}}</td>
                <td>{{$product->is_active}}</td>
                <td>
                    <a href="{{route('product.edit',$product->id)}}">
                        <button type="submit" class="btn btn-outline-warning">Edit</button>
                    </a>
                </td>
                <td> 

                    <!-- <form action="{{route('product.destroy',$product->id)}}" method="POST" >
                          @csrf
                          <input  type="hidden" name="_method" value="DELETE"> -->
                          <button type="submit" class="btn btn-outline-danger" onclick="dele('/product',{{$product->id}})">Delete</button>
                    <!-- </form> -->
                </td>
        </tr>
@endforeach
    </tbody>

</table>

@endsection