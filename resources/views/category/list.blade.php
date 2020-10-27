@extends('layout.index')
@section('title','Thể loại')
@section('header','Thể loại')
@section('header-content','Thể loại')

@section('content')
<?php
use App\Models\Category;
?>
<table class="table">
    <thead>
        <th>Name</th>
        <th>Parent Name</th>
        <th>
        @can('create' ,Category::class)
            <a href="{{route('category.create')}}">
                <button type="button" class="btn btn-outline-success"> Add </button>
            </a>
        @endcan
        </th>

    </thead>
    <tbody>
@foreach($cate as $item)
        <tr id="product-{{$item->id}}">
                <td>{{$item->name}}</td>
                <td>@if (isset($item->category->name))  
                    {{$item->category->name}}
                    @else
                    Null 
                    @endif
                </td>
                <td>
                @can('update',$item)
                <a href="{{route('category.edit',$item->id)}}">
                     <button type="submit" class="btn btn-outline-warning">Edit</button>
                </a>
                @endcan   
                </td>
                <td> 
                @can('delete',$item)
                <button type="submit" class="btn btn-outline-danger" onclick='dele("/category","{{$item->id}}")'>Delete</button>
                @endcan
            </td>
        </tr>
@endforeach
    </tbody>

</table>

@endsection