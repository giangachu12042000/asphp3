@extends('layout.index');
@section('title','Thêm sảm phẩm')
@section('header','Thêm sảm phẩm')
@section('header-content','Thêm sảm phẩm')

@section('content')
<!-- - PK: id
- name
- category_id
- image_url
- description
- price
- sale_percent
- stocks
- is_active -->
<div class="container">
<form action="{{route('product.store')}}" method="post" class="form-group"  enctype="multipart/form-data">
        @csrf
        <div class="row">
            <div class="col-md-6">
                <div>
                    <input type="text" name="name" id="" class="form-control">
                    <label for=""> Name</label>
                </div>
                <div>
                    <select name="category_id" id="" class="form-control">
                        @foreach($categories as $category)
                        <option value="{{$category->id}}">{{$category->name}}</option>
                        @endforeach
                    </select>
                    <label for="">Name category</label>
                </div>
                <div>
                    <textarea class="form-control" rows="5" id="comment" name="desc"></textarea>
                    <label for=""> Description</label>
                </div>
                <div class="custom-file">
                    <input type="file" class="custom-file-input" id="customFile" name="image_url">
                    <label class="custom-file-label" for="customFile">Choose file</label>
                </div>
            </div>
            <div class="col-md-6">
                <div>
                    <input type="number" name="price" id="" class="form-control">
                    <label for=""> Price</label>
                </div>
                <div>
                    <input type="text" name="sale_percent" id="" class="form-control">
                    <label for=""> Sale percent</label>
                </div>
                <div>
                    <input type="text" name="stocks" id="" class="form-control">
                    <label for=""> Stocks</label>
                </div>
                <div>
                    <select name="is_active" id="" class="form-control">
                        <option value="0">no product</option>
                        <option value="1">product</option>
                    </select>
                    <label for=""> Status</label>
                </div>
                <div>
                    <input type="submit" name="" id="dele" class="btn btn-primary" value="Thêm">
                </div>
            </div>
        </div>
    </form>
</div>
@endsection