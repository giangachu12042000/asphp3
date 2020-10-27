@extends('layout.index')
@section('title','Sửa sản phẩm')
@section('header','Sửa sản phẩm')

@section('content')

<div class="container">
    <h1>Sửa sản phẩm</h1>
    <form action="{{route('product.update',$product->id)}}" method="POST" class="form-group" enctype="multipart/form-data">
        @method('PUT')
        @csrf
        <div class="row">
            <div class="col-md-6">
                <div>
                    <label for=""> Name</label>
                    <input type="text" name="name" value="{{$product->name}}" class="form-control">
                    @error('name')
                    <p style="color: red;">{{$message}}</p>
                    @enderror

                </div>
                <div>
                    <label for="">Name category</label>
                    <select name="category_id" id="" class="form-control">
                        @foreach($categories as $category)
                        @if($category->id == $product->category_id)
                        <option value="{{$category->id}}" selected>{{$category->name}}</option>
                        @endif
                        <option value="{{$category->id}}">{{$category->name}}</option>
                        @endforeach
                    </select>

                </div>
                <div>
                    <label for=""> Description</label>
                    <textarea class="form-control" rows="5" id="comment" name="desc">
                    {{$product->desc}}
                    </textarea>
                    @error('desc')
                    <p style="color:red;">{{$message}}</p>
                    @enderror

                </div>
                <br>
                <div class="custom-file">
                    <label class="custom-file-label" for="customFile">Choose file</label> <br>
                    <input type="file" class="custom-file-input" id="customFile" name="image_url">
                       
                    <img src="{{ substr($product->image_url, 0, 4) == 'http' ? $product->image_url : asset($product->image_url) }}" alt="" width="250px">
                    @error('image_url')
                    <p style="color:red;">{{$message}}</p>
                    @enderror
                </div>
            </div>
            <div class="col-md-6">
                <div>
                    <label for=""> Price</label>
                    <input type="number" name="price" value="{{$product->price}}" class="form-control">
                    @error('price')
                    <p style="color:red;">{{$message}}</p>
                    @enderror
                </div>
                <div>
                    <label for=""> Sale percent</label>
                    <input type="text" name="sale_percent" value="{{$product->sale_percent}}" class="form-control">
                    @error('sale_percent')
                    <p style="color:red;">{{$message}}</p>
                    @enderror
                </div>
                <div>
                    <label for=""> Stocks</label>
                    <input type="text" name="stocks" value="{{$product->stocks}}" class="form-control">
                    @error('stocks')
                    <p style="color:red;">{{$message}}</p>
                    @enderror
                </div>
                <div>
                    <label for=""> Status</label>
                    <select name="is_active" id="" class="form-control">
                        <option value="{{$product->is_active == 0 ? 0 : 1}}">
                            {{$product->is_active == 0 ? 'no product': 'product'}}
                        </option>
                    </select>

                </div>
                <br>
                <div>
                    <input type="submit" name="" id="" class="btn btn-primary" value="Sửa">
                </div>
            </div>
        </div>

    </form>

</div>

@endsection