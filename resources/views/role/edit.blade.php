@extends('layout.index');
@section('title','Sửa role')
@section('header','Sửa role')
@section('header-content','Thêm role')

@section('content')
<div class="container">
    <form action="{{route('role.update', $role->id)}}" method="post" class="form-group">
        @csrf
        <input type="hidden" name="_method" value="PUT">
        <div>
            <label for="">Name</label>
            <input type="text" name="name" value="{{$role->name}}" class="form-control">

        </div>

        <div>
            <label for="">Status</label>
            <select name="status" id="">
                @foreach($roles as $item)
                        <option value="{{$item->status}}" {{($item->status) == ($role->status) ? "selected" : ""}} >
                            {{$item->name}}
                        </option>
                @endforeach
            </select>
        </div>

        <br>
        <div>
            <input type="submit" name="" id="" class="btn btn-primary" value="Sửa">
        </div>
    </form>
</div>

@endsection