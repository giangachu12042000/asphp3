@extends('layout.index')

@section('title','Danh sách sinh viên')
@section('header','Danh sách sinh viên')
@section('header-content','Danh sách sinh viên ')

@section('content')
    
    <table class="table ">
        <thead>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Email</th>
            <th>Address</th>
            <th>Birthday</th>
            <th>Trạng thái</th>
            <th>
              <a href="{{route('user.create')}}">
                    <button type="button" class="btn btn-outline-success"> Add </button>
              </a>
           </th>
        </thead>

        <tbody>
          @foreach($user as $item)
          <tr id="product-{{$item->id}}">
              <td>{{$item->first_name}}</td>
              <td>{{$item->last_name}}</td>
              <td>{{$item->email}}</td>
              <td>{{$item->address}}</td>
              <td>{{$item->birthday}}</td>
              <td>
                   @if($item->is_active == 0)
                    Nghỉ học
                    @else($item->is_active == 1)
                    Đi học
                   
                    @endif

              </td>
              <td>

                <a href="{{route('user.edit', $item->id)}}">
                <button type="submit" class="btn btn-outline-warning">Edit</button>
                </a>
                </td>
                <td> 
                <button type="submit" class="btn btn-outline-danger" onclick='dele("/user","{{$item->id}}")'>Delete</button>
            </td>
          </tr>
          @endforeach
        </tbody>
    </table>
@endsection