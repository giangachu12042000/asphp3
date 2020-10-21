@extends('layout.index');
@section('title','Thêm comment')
@section('header','Thêm comment')
@section('header-content','Thêm comment')

@section('content')
<div class="container">
    <form action="{{route('comment.store')}}" method="post" class="form-group">
        @csrf
        <div>
            <label for="">User Name</label>
            <select name="user_id" id="" class="form-control">
                @foreach($users as $item)
                <option value="{{$item->id}}">{{$item->first_name}} {{$item->last_name}}</option>
                @endforeach
            </select>

        </div>
        <div>
            <label for="">Product Name</label>
            <select class="form-control" name="product_id" id="">
                @foreach($products as $item)
                <option value="{{$item->id}}">{{$item->name}}</option>
                @endforeach
            </select>

        </div>
        <div>
            <label for="">Content</label>
            <input type="text" name="content" id="" class="form-control">
        </div>
        <br>

        <div>
            <input type="submit" name="" id="" class="btn btn-primary" value="Thêm">
        </div>
    </form>
</div>

@endsection