@extends('layout.index')
@section('title','Chi tiết')
@section('header','Chi tiết')
@section('header-content','Chi tiết')

@section('content')
<?php

use Illuminate\Support\Facades\Auth;
?>
<div class="container">
    <div class="row">
        <div class="col">
            <img src="{{ substr($product->image_url, 0, 4) == 'http' ? $product->image_url : asset($product->image_url) }}" alt="" width="400">
            <br><br>
            <h4> <b>Category :</b>{{$product->category->name}}</h4>
            <h4> <b>Desc :</b> {{$product->desc}} </h4>
            <h4> <b>Price :</b> {{$product->price}}</h4>
            <h4> <b>Sale percent :</b> {{$product->sale_percent}}</h4>
            <h4> <b>Stocks :</b>{{$product->stocks}}</h4>
        </div>

        <div class="col">


            <label for="">Bình Luận</label>
            <form action="{{route('comment.store')}}" method="post" class="form-group">
                @csrf
                <input type="hidden" name="user_id" id="" value="{{Auth::user()->id}}">
                <input type="hidden" name="product_id" id="" value="{{$product->id}}">

                <input type="text" name="content" id="" class="form-control">


                <br>
                <input type="submit" name="" id="" class="btn btn-primary" value="Gửi">
            </form>

            <label for="">Các bình luận</label>
            <br>

            @foreach($comment as $item)
            <b>Name :</b> {{($item->user->first_name)}}{{($item->user->last_name)}}
            <div>
                {{$item->content}}
            </div>

            @endforeach

        </div>
    </div>
</div>



</div>

@endsection