@extends('layout.index');
@section('title','Thêm role')
@section('header','Thêm role')
@section('header-content','Thêm role')

@section('content')
<div class="container">
    <form action="{{route('role.store')}}" method="post" class="form-group">
        @csrf
        <div>
            <label for="">Name</label>
            <input type="text" name="name" class="form-control">

        </div>
        <div>
            <label for="">Status</label>
            <input type="number" name="status" class="form-control">

        </div>
        
        <br>
        <div>
            <input type="submit" name="" id="" class="btn btn-primary" value="Thêm">
        </div>
    </form>
</div>

@endsection