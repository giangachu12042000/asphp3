@extends('layout.index')
@section('title','Thêm ')
@section('header','Thêm người dùng')
@section('header-content','Thêm người dùng')

@section('content')


<div class="container">
    <form action="{{route('user.store')}}" method="post" class="form-group">
        @csrf
        <div>

            <label for="">First Name</label>
            <input type="text" name="first_name" id="" class="form-control">
            @error('first_name')
           <p style="color:red;">{{$message}}</p>
            @enderror
        </div>

        <div>

            <label for="">Last Name</label>
            <input type="text" name="last_name" id="" class="form-control">
            @error('last_name')
            <p style="color:red;">{{$message}}</p>
            @enderror
        </div>
        <div>

            <label for="">Email</label>
            <input type="email" name="email" id="" class="form-control">
            @error('email')
            <p style="color:red;">{{$message}}</p>
            @enderror
        </div>
        <div>

            <label for="">Password</label>
            <input type="password" name="password" id="" class="form-control">
            @error('password')
            <p style="color:red;">{{$message}}</p>
            @enderror
        </div>
        <div>

            <label for="">Address</label>
            <input type="text" name="address" id="" class="form-control">
            @error('address')
            <p style="color:red;">{{$message}}</p>
            @enderror
        </div>
        <div>

            <label for="">Birthday</label>
            <input type="text" name="birthday" id="" class="form-control">
            @error('birthday')
            <p style="color:red;">{{$message}}</p>
            @enderror
        </div>
        <div>
            <label for="">Quyền</label>
            <select name="role_id" id="" class="form-control">
                <option value="0">user</option>
                <option value="1">admin</option>
            </select>
        </div>
        <br>
        <input type="submit" name="" id="" class="btn btn-primary" value="Thêm">
       
    </form>
</div>

@endsection