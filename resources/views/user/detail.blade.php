@extends('layout.index')

@section('title','Chi tiết người dùng')
@section('header','Chi tiết người dùng')
@section('header-content','Chi tiết người dùng')

@section('content')
    <div class="container">
        <h1>Chi tiết user</h1>
        <h3><b>Name :</b>{{$user->first_name}}{{$user->first_name}}</h3>
        <h3><b>Email :</b>{{$user->email}}</h3>
        <h3><b>Address :</b>{{$user->address}}</h3>
        <h3><b>Birthday :</b>{{$user->birthday}}</h3>
       
    </div>
   
@endsection