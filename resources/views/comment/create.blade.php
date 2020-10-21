@extends('layout.index');
@section('title','Thêm comment')
@section('header','Thêm comment')
@section('header-content','Thêm comment')

@section('content')
<div class="container">
    <form action="{{route:('comment.store')}}" method="post" class="form-group">
        @csrf
        <div>
            <label for="">User_id</label>
            <input type="text" name="user_id" id="" class="form-control">
        </div>
        <div>
            <label for="">Product_id</label>
            <input type="text" name="product_id" id="" class="form-control">
        </div>
        <div>
            <label for="">Content</label>
            <input type="text" name="content" id="" class="form-control">
        </div>
        <div>
            <input type="submit" name="" id="" class="btn btn-primary" value="Thêm">
        </div>
    </form>
</div>

@endsection