@extends('layout.index')
@section('title','Sửa thể loại')
@section('header','Sửa thể loại')
@section('header-content','Sửa thể loại')

@section('content')

<div class="container">
<form action="{{route('category.update',$cate->id)}}" method="POST" class="form-group">
        @csrf
        <input type="hidden" name="_method" value="PUT">
        <div>
           <label for="">Name</label>
        <input type="text" name="name" id="" class="form-control" value="{{$cate->name}}"> 
        </div>
        <br>
        <div>
           <label for="">Parent_id</label>
           <input type="number" name="parent_id" id="" class="form-control" value="{{$cate->parent_id}}"> 
        </div>
        <br>
        
        <div>
            <input type="submit" name="" id="" class="btn btn-primary" value="Edit">
        </div>

    </form>

</div>

@endsection