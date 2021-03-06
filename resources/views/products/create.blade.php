@extends('layout.index')
@section('title','Thêm sảm phẩm')
@section('header','Thêm sảm phẩm')
@section('header-content','Thêm sảm phẩm')

@section('content')

<div class="container">
    <h1>Thêm sảm phẩm</h1>
    <form action="{{route('product.store')}}" method="post" class="form-group" enctype="multipart/form-data">
        @csrf
        <div class="row">
            <div class="col-md-6">
                <div>
                    <label for=""> Name</label>
                    <input type="text" name="name" id="" class="form-control">

                    @error('name')
                    <p style="color:red;">{{$message}}</p>
                    @enderror
                </div>
                <div>
                    <label for="">Name category</label>
                    <select name="category_id" id="" class="form-control">
                        @foreach($categories as $category)
                        <option value="{{$category->id}}">{{$category->name}}</option>
                        @endforeach
                    </select>

                </div>
                <div>
                    <label for=""> Description</label>
                    <textarea class="form-control" rows="5" id="comment" name="desc"></textarea>
                    @error('desc')
                    <p style="color:red;">{{$message}}</p>
                    @enderror
                </div>
                <div class="custom-file">
                    <label class="custom-file-label" for="customFile">Choose file</label>
                    <br>
                    <input type="file" class="custom-file-input" id="customFile" name="image_url">

                </div>
                @error('image_url')
                <p style="color:red;">{{$message}}</p>
                @enderror
            </div>
            <div class="col-md-6">
                <div>
                    <label for=""> Price</label>
                    <input type="number" name="price" id="" class="form-control">

                    @error('price')
                    <p style="color:red;">{{$message}}</p>
                    @enderror
                </div>
                <div>
                    <label for=""> Sale percent</label>
                    <input type="text" name="sale_percent" id="" class="form-control">

                    @error('sale_percent')
                    <p style="color:red;">{{$message}}</p>
                    @enderror
                </div>
                <div>
                    <label for=""> Stocks</label>
                    <input type="text" name="stocks" id="" class="form-control">

                    @error('stocks')
                    <p style="color:red;">{{$message}}</p>
                    @enderror
                </div>
                <div>
                    <label for=""> Status</label>
                    <select name="is_active" id="" class="form-control">
                        <option value="0">no product</option>
                        <option value="1">product</option>
                    </select>

                </div>
                <br>
                <div>
                    <input type="submit" name="" id="dele" class="btn btn-primary" value="Thêm">
                </div>
            </div>
        </div>
    </form>
</div>
@endsection