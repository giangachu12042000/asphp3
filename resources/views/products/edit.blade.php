@extends('layout.index');
@section('title','Sửa thể loại')
@section('header','Sửa thể loại')
@section('header-content','Sửa thể loại')

@section('content')

<div class="container">
<form action="{{route('product.update',$product->id)}}" method="POST" class="form-group">
        @csrf
        <div class="row">
            <div class="col-md-6">
                <div>
                    <input type="text" name="name" value="{{$product->name}}" class="form-control">
                    <label for=""> Name</label>
                </div>
                <div>
                    <select name="category_id" id="" class="form-control">
                        @foreach($categories as $category)
                            @if($category->id == $product->category_id)
                                <option value="{{$category->id}}" selected>{{$category->name}}</option>
                            @endif
                            <option value="{{$category->id}}">{{$category->name}}</option>
                        @endforeach
                    </select>
                    <label for="">Name category</label>
                </div>
                <div>
                    <textarea class="form-control" rows="5" id="comment" name="desc">
                        {{$product->desc}}
                    </textarea>
                    <label for=""> Description</label>
                </div>
                <div class="custom-file">
                    <input type="file" class="custom-file-input" id="customFile" name="image_url">
                    <label class="custom-file-label" for="customFile">Choose file</label>
                    <img src="{{ substr($product->image_url, 0, 4) == 'http' ? $product->image_url : asset($product->image_url) }}" 
                    alt="" width="100px">
                </div>
            </div>
            <div class="col-md-6">
                <div>
                    <input type="number" name="price" value="{{$product->price}}" class="form-control">
                    <label for=""> Price</label>
                </div>
                <div>
                    <input type="text" name="sale_percent" value="{{$product->sale_percent}}" class="form-control">
                    <label for=""> Sale percent</label>
                </div>
                <div>
                    <input type="text" name="stocks" value="{{$product->stocks}}" class="form-control">
                    <label for=""> Stocks</label>
                </div>
                <div>
                    <select name="is_active" id="" class="form-control">
                        <option value="{{$product->is_active == 0 ? 0 : 1}}">
                            {{$product->is_active == 0 ? 'no product': 'product'}}
                        </option>
                    </select>
                    <label for=""> Status</label>
                </div>
                <div>
                    <input type="submit" name="" id="" class="btn btn-primary" value="Thêm">
                </div>
            </div>
        </div>

    </form>

</div>

@endsection