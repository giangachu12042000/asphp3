@extends('layout.index');
@section('title','Sửa ')
@section('header','Sửa sinh viên')
@section('header-content','Sửa sinh viên ')

@section('content')

<div class="container">
    <form action="{{route('user.update',$user->id)}}" method="POST" class="form-group">
        @csrf
        <input type="hidden" name="_method" value="PUT">
        <div>
            <label for="">First Name</label>
            <input type="text" name="first_name" id="" class="form-control" value="{{$user->first_name}}">
            @error('first_name')
            <p style="color:red;">{{$message}}</p>
            @enderror
        </div>
        <div>
            <label for="">Last Name</label>
            <input type="text" name="last_name" id="" class="form-control" value="{{$user->last_name}}">
            @error('last_name')
            <p style="color:red;">{{$message}}</p>
            @enderror
        </div>

        <div> 
            <label for="">Email</label>
            <input type="email" name="email" id="" class="form-control" value="{{$user->email}}">
            @error('email')
            <p style="color:red;">{{$message}}</p>
            @enderror
        </div>

        <div>
            <label for="">Password</label>
            <input type="password" name="password" id="" class="form-control" value="{{$user->password}}">

        </div>

        <div>
            <label for="">Address</label>
            <input type="text" name="address" id="" class="form-control" value="{{$user->address}}">
            @error('address')
            <p style="color:red;">{{$message}}</p>
            @enderror
        </div>

        <div>
            <label for="">Birthday</label>
            <input type="text" name="birthday" id="" class="form-control" value="{{$user->birthday}}">
            @error('birthday')
            <p style="color:red;">{{$message}}</p>
            @enderror
        </div>

        <div>
            <label for="">Trang thai</label>

            <input type="radio" name="is_active" value="0" {{$user->is_active ==0 ? "checked" : "" }} /> Nghi hoc
            <input type="radio" name="is_active" value="1" {{$user->is_active ==1 ? "checked" : ""}} /> Di hoc
        </div>


        <input type="submit" name="" id="" class="btn btn-primary" value="Edit">
    </form>
</div>

@endsection