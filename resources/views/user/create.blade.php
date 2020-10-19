@extends('layout.index');
@section('title','Thêm ')
@section('header','Thêm sinh viên')
@section('header-content','Thêm sinh viên ')

@section('content')

<?php
$is_active = [1 => 'Đi học', 2 => 'Nghỉ học'];

?>
<div class="container">
    <form action="{{route('user.store')}}" method="post" class="form-group">
        @csrf
        <div>

            <label for="">First Name</label>
            <input type="text" name="first_name" id="" class="form-control">
            @error('first_name')
            <div class="alert alert-danger">{{$message}}</div>
            @enderror
        </div>

        <div>

            <label for="">Last Name</label>
            <input type="text" name="last_name" id="" class="form-control">
            @error('last_name')
            <div class="alert alert-danger">{{$message}}</div>
            @enderror
        </div>
        <div>

            <label for="">Email</label>
            <input type="email" name="email" id="" class="form-control">
            @error('email')
            <div class="alert alert-danger">{{$message}}</div>
            @enderror
        </div>
        <div>

            <label for="">Password</label>
            <input type="password" name="password" id="" class="form-control">
            @error('password')
            <div class="alert alert-danger">{{$message}}</div>
            @enderror
        </div>
        <div>

            <label for="">Address</label>
            <input type="text" name="address" id="" class="form-control">
            @error('address')
            <div class="alert alert-danger">{{$message}}</div>
            @enderror
        </div>
        <div>

            <label for="">Birthday</label>
            <input type="text" name="birthday" id="" class="form-control">
            @error('birthday')
            <div class="alert alert-danger">{{$message}}</div>
            @enderror
        </div>
        <div>
            <label for="">Trang thai</label>
            <br>
            @foreach($is_active as $key => $item)
            <input type="radio" name="is_active" id="" value="{{$key}}">{{$item}} &nbsp;
            @endforeach
        </div>
        <br>
        <br>
        <br>
        <input type="submit" name="" id="" class="btn btn-primary" value="Thêm">
    </form>
</div>

@endsection