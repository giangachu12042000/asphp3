@extends('layout.index')
@section('title','Role')
@section('header','Role')
@section('header-content','Role')

@section('content')

<table class="table">
    <thead>
        <th>Name</th>
        <th>Status</th>
       
        <th>
            <a href="{{route('role.create')}}">
                <button type="button" class="btn btn-outline-success"> Add </button>
            </a>
        </th>
    </thead>
    <tbody>
        @foreach($role as $item)
        <tr id="product-{{$item->id}}">
            <td>{{$item->name}}</td>
            <td>{{$item->status}}</td>
            <td>
                <a href="{{route('role.edit',$item->id)}}">
                    <button type="submit" class="btn btn-outline-warning">Edit</button>
                </a>
            </td>
            <td> 
                <button type="submit" class="btn btn-outline-danger" onclick='dele("/role","{{$item->id}}")'>Delete</button>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

@endsection