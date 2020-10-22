@extends('layout.index')
@section('title','Sửa thể loại')
@section('header','Sửa thể loại')
@section('header-content','Sửa thể loại')

@section('content')

<div class="container">
<form action="{{route('category.update',$category->id)}}" method="POST" class="form-group">
        @csrf
        <input type="hidden" name="_method" value="PUT">
        <div>
           <label for="">Name</label>
        <input type="text" name="name" id="" class="form-control" value="{{$category->name}}"> 
        </div>
        <br>
        <div>
           <label for="">Parent_id</label>
           <select name="parent_id" id="" class="form-control">
               @foreach($allCate as $item)
               <option value="{{$item->id}}"
               {{($item->id)==($category->parent_id) ? "selected" : ""}}    
               >{{$item->name}}</option>
               @endforeach
           </select> 
        </div>
        <br>
        
        <div>
            <input type="submit" name="" id="" class="btn btn-primary" value="Edit">
        </div>

    </form>

</div>

@endsection