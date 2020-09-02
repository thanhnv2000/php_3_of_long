@extends('layouts.main')
@section('title', "ADD SẢN PHẨM")
@section('main-content')
<div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Thêm Sản Phẩm</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Home</a></li>
              <li class="breadcrumb-item active">Thêm Sản Phẩm</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
<form action="{{route('add.product')}}"  method="POST" enctype="multipart/form-data">
    @csrf
    <div class="row">
        <div class="col-6">
            <div class="form-group">
                <label for="">Tên Sản phẩm</label>
                <input type="text" name="name" class="form-control">
                @error('name')
                    <span class="alert text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="form-group">
                <label for="">Danh mục</label>
                <select name="cate_id" class="form-control">
                    @foreach ($cates as $cate)
                    <option value="{{$cate->id}}">{{$cate->cate_name}}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="">Giá Sản phẩm</label>
                <input type="number" name="price" class="form-control" min="0">
                @error('price')
                    <span class="alert text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="form-group">
                <label for="">Mô tả ngắn</label>
                <textarea name="short_desc" class="form-control" rows="4"></textarea>
                @error('short_desc')
                    <span class="alert text-danger">{{ $message }}</span>
                @enderror
            </div>
        </div>
        <div class="col-6">
        <div class="row">
                <div class="col-4 offset-4">
                    <img src="http://localhost:8000/storage/default-img.jpg" class="img-fluid">
                </div>
            </div>
            <div class="form-group">
                <label for="">ảnh sản phẩm</label>
                <input type="file" name="image" class="form-control">
            </div>
            <div class="form-group">
                <label for="">Đánh giá sản phẩm</label>
                <input type="number" step="0.1" name="star" class="form-control">
                @error('star')
                    <span class="alert text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="form-group">
                <label for="">Lượt xem</label>
                <input type="number" name="views" class="form-control">
                @error('views')
                    <span class="alert text-danger">{{ $message }}</span>
                @enderror
            </div>
        </div>
        <div class="col-12">
            <div class="form-group">
                <label for="">Mô tả chi tiết</label>
                <textarea name="detail" class="form-control" rows="4"></textarea>
                @error('detail')
                    <span class="alert text-danger">{{ $message }}</span>
                @enderror
            </div>
        </div>
        <div class=" col-12 text-center">
            <button type="submit" class="btn btn-info">Lưu</button>
            <a href="{{route('index')}}" class="btn btn-danger">Hủy</a>
        </div>
    </div>
</form>

</div>
@endsection