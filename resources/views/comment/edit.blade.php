@extends('layout.index');
@section('title','Sửa comment')
@section('header','Sửa comment')
@section('header-content','Thêm comment')

@section('content')
<div class="container">
    <form action="{{route('comment.update', $comment->id)}}" method="post" class="form-group">
        @csrf
        <input type="hidden" name="_method" value="PUT">
        <div>
            <label for="">User Name</label>
            <select name="user_id" id="" class="form-control">
                @foreach($users as $item)
                <option value="{{$item->id}}" @if($item->id == $comment->user_id)

                    selected
                    @endif

                    >{{$item->first_name}} {{$item->last_name}}</option>
                @endforeach
            </select>

        </div>
        <div>
            <label for="">Product Name</label>
            <select class="form-control" name="product_id" id="">
                @foreach($products as $item)
                <option value="{{$item->id}}" @if($item->id == $comment->product_id)

                    selected
                    @endif

                    >{{$item->name}}</option>
                @endforeach
            </select>
        </div>
        <div>
            <label for="">Content</label>
            <textarea name="content" id="" cols="30" rows="5" class="form-control">{{$comment->content}}</textarea>
            @error('content')
            <p style="color: red;">{{$message}}</p>
            @enderror


        </div>
        <br>
        <div>
            <input type="submit" name="" id="" class="btn btn-primary" value="Sửa">
        </div>
    </form>
</div>

@endsection