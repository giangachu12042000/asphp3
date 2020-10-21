@extends('layout.index')
@section('title','Comment')
@section('header','Comment')
@section('header-content','Comment')

@section('content')

<table class="table">
    <thead>
        <th>User Name</th>
        <th>Product Name</th>
        <th>User_id</th>
        <th>Product_id</th>
        <th>Content</th>
        <th>
            <a href="{{route('comment.create')}}">
                <button type="button" class="btn btn-outline-success"> Add </button>
            </a>
        </th>
    </thead>
    <tbody>
        @foreach($comment as $item)
        <tr>
            <td>{{$item->user->first_name}} {{$item->user->last_name}}</td>
            <td>{{$item->product->name}}</td>
            <td>{{$item->user_id}}</td>
            <td>{{$item->product_id}}</td>
            <td>{{$item->content}}</td>
            <td>
                <a href="{{route('comment.edit',$item->id)}}">
                    <button type="submit" class="btn btn-outline-warning">Edit</button>
                </a>
            </td>
            <td>

                <form action="{{route('comment.destroy',$item->id)}}" method="POST" onclick="return confirm('Muốn xóa hay không?')">
                    @csrf
                    <input type="hidden" name="_method" value="DELETE">
                    <button type="submit" class="btn btn-outline-danger">Delete</button>
                </form>

            </td>
        </tr>
        @endforeach
    </tbody>
</table>

@endsection