@extends('layouts.main')
@section('title', "SỬA DANH MỤC")
@section('main-content')
<div class="container">
    <h1 class="mt-4">Sửa Danh Mục</h1>
    <form action="" method="POST">
        @csrf
        <div class="row">
            <div class="col-6">

                <div class="form-group">
                    <label for="">Danh danh mục</label>
                    <input type="text" name="cate_name" value="{{$cates->cate_name}}" class="form-control">
                    @error('cate_name')
                    <div style="color: red">{{$message}}</div>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="">ShowMenu</label>
                    <div class="btn-group" data-toggle="buttons">
                        <label class="btn btn-danger active">
                            <input type="checkbox" @if($cates->show_menu == 1)
                            checked
                            @endif
                            name="show_menu" value="1" autocomplete="off">
                        </label>
                    </div>

                </div>

                <div class=" col-12 ">
                    <button type="submit" class="btn btn-info">Lưu</button>
                    <a href="{{route('categories')}}" class="btn btn-danger">Hủy</a>
                </div>
            </div>

        </div>
        @endsection