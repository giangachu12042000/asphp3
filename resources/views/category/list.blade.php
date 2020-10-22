@extends('layout.index')
@section('title','Thể loại')
@section('header','Thể loại')
@section('header-content','Thể loại')

@section('content')

<table class="table">
    <thead>
        <th>Name</th>
        <th>Parent Name</th>
        <th>
            <a href="{{route('category.create')}}">
                <button type="button" class="btn btn-outline-success"> Add </button>
            </a>
        </th>

    </thead>
    <tbody>
@foreach($cate as $item)
        <tr id="product-{{$item->id}}">
                <td>{{$item->name}}</td>
                <td>{{$item->category->name}}</td>
                <td>

                <a href="{{route('category.edit',$item->id)}}">
                     <button type="submit" class="btn btn-outline-warning">Edit</button>
                </a>
                
                </td>
                <td> 
                <button type="submit" class="btn btn-outline-danger" onclick='dele("/category","{{$item->id}}")'>Delete</button>
            </td>
        </tr>
@endforeach
    </tbody>

</table>

@endsection