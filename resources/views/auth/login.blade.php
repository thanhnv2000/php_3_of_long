@extends('layouts.main')
@section('title', "ĐĂNG NHẬP")
@section('main-content')
<section class="content ">
  <div class="container-fluid ">
    <div class="row ">
      <!-- left column -->
      <div class="col-md-6 mx-auto " style="margin-top: 140px;" >
        <!-- jquery validation -->
        <div class="card card-primary">
          <div class="card-header">
            <h3 class="card-title">Đăng Nhập</h3>
          </div>
          <!-- /.card-header -->
          <!-- form start -->
          <form role="form" action="{{route('login')}}"  method="POST">
            <div class="card-body">
              @csrf
              <div class="form-group">
                <label>Địa Chỉ Email</label>
                <input type="email" name="email" class="form-control" placeholder="Nhập email">
                @error('email')
                <span class="alert text-danger">{{ $message }}</span>
                @enderror
                <div class="form-group">
                  <label>Mật Khẩu</label>
                  <input type="password" name="password" class="form-control " placeholder="Mật Khẩu">
                  @error('password')
                  <span class="alert text-danger">{{ $message }}</span>
                  @enderror
                  <div class="form-group mb-0">
                    <br>
                    <button type="submit" class="btn btn-primary">Đăng Nhập</button>
                  </div>
                  <!-- /.card-body -->

          </form>
        </div>
        <!-- /.card -->
      </div>

    </div>
    <!-- /.row -->
  </div><!-- /.container-fluid -->
</section>
@endsection