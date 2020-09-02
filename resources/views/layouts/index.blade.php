@extends('layouts.main')
@section('title', "Dashboard")
@section('index-content')
<div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Dashboard</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Home</a></li>
              <li class="breadcrumb-item active">Dashboard v1</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
          <div class="col-lg-4 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
                <h3>{{$product}}</h3>

                <p>Tổng Sản Phẩm</p>
              </div>
              <div class="icon">
                <i class="nav-icon fas fa-briefcase"></i>
              </div>
              <a href="{{route('index')}}" class="small-box-footer">Xem Thêm <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-4 col-6">
            <!-- small box -->
            <div class="small-box bg-warning">
              <div class="inner">
                <h3>{{$categories}}</h3>

                <p>Tổng Danh Mục</p>
              </div>
              <div class="icon">
                <i class="nav-icon fas fa-list"></i>
              </div>
              <a href="{{route('categories')}}" class="small-box-footer">Xem Thêm <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-4 col-6">
            <!-- small box -->
            <div class="small-box bg-danger">
              <div class="inner">
                <h3>{{$users}}</h3>

                <p>Tổng User</p>
              </div>
              <div class="icon">
                <i class="nav-icon far fa-user"></i>
              </div>
              <a href="{{route('users')}}" class="small-box-footer">Xem Thêm <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          
          <!-- ./col -->
        </div>
        <!-- /.row -->
        <!-- Main row -->
        
     
      </div><!-- /.container-fluid -->
    </section>
    @endsection