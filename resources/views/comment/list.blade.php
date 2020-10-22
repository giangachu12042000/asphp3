@extends('layout.index')
@section('title','Comment')
@section('header','Comment')
@section('header-content','Comment')

@section('content')

<table class="table">
    <thead>
        <th>User Name</th>
        <th>Product Name</th>
        <th>Content</th>
        <th>
            <a href="{{route('comment.create')}}">
                <button type="button" class="btn btn-outline-success"> Add </button>
            </a>
        </th>
    </thead>
    <tbody>
        @foreach($comment as $item)
        <tr id="product-{{$item->id}}">
            <td>{{$item->user->first_name}} {{$item->user->last_name}}</td>
            <td>{{$item->product->name}}</td>
            <td>{{$item->content}}</td>
            <td>
                <a href="{{route('comment.edit',$item->id)}}">
                    <button type="submit" class="btn btn-outline-warning">Edit</button>
                </a>
            </td>
            <td> 
                <button type="submit" class="btn btn-outline-danger" onclick='dele("/comment","{{$item->id}}")'>Delete</button>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

@endsection