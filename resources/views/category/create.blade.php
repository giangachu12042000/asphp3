@extends('layout.index');
@section('title','Thêm thể loại')
@section('header','Thêm thể loại')
@section('header-content','Thêm thể loại')

@section('content')

<div class="container">
<form action="{{route('category.store')}}" method="post" class="form-group">
        @csrf
        <div>
            <label for=""> Name</label>
            <input type="text" name="name" id="" class="form-control">
            @error('name')
            <p style="color: red;">{{$message}}</p>
            @enderror
        </div>
        
        <div>
            <label for="">Parent_id</label>
            <input type="number" name="parent_id" id="" class="form-control">

        </div>
        
        <div>
            <input type="submit" name="" id="" class="btn btn-primary" value="Thêm">
        </div>
        
        
    </form>

</div>

@endsection