@extends('layout.index')
@section('title','Comment')
@section('header','Comment')
@section('header-content','Comment')
<?php
    use App\Models\Comment;
?>
@section('content')

<table class="table">
    <thead>
        <th>User Name</th>
        <th>Product Name</th>
        <th>Content</th>
        <th>
        @can('create', Comment::class)
    <!-- The Current User Can Update The Post -->
            <!-- The Current User Can Create New Post -->
            <a href="{{route('comment.create')}}">
                <button type="button" class="btn btn-outline-success"> Add </button>
            </a>
        @endcan
        </th>
    </thead>
    <tbody>
        @foreach($comment as $item)
        <tr id="product-{{$item->id}}">
            <td>{{$item->user ? $item->user->first_name : 'null'}} {{$item->user ? $item->user->last_name : 'null'}}</td>
            <td>{{$item->product->name}}</td>
            <td>{{$item->content}}</td>
            <td>
            @can('update', $item)
                <a href="{{route('comment.edit',$item->id)}}">
                    <button type="submit" class="btn btn-outline-warning">Edit</button>
                </a>
            @endcan
            </td>
            <td> 
            @can('delete', $item)
                <button type="submit" class="btn btn-outline-danger" onclick='dele("/comment","{{$item->id}}")'>Delete</button>
            @endcan
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

@endsection