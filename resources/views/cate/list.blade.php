@extends('layouts.main')
@section('title', "DANH SÁCH DANH MỤC")
@section('main-content')
<div class="container-fluid">
  <div class="row mb-2">
    <div class="col-sm-6">
      <h1 class="m-0 text-dark">Danh Sách Danh Mục</h1>
    </div><!-- /.col -->
    <div class="col-sm-6">
      <ol class="breadcrumb float-sm-right">
        <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Home</a></li>
        <li class="breadcrumb-item active">Danh Mục</li>
      </ol>
    </div><!-- /.col -->
  </div><!-- /.row -->
  <form class="form-inline ml-3" action="{{route('categories')}}" method="get">
    <!-- @csrf -->
    <label style="margin-right: 15px;">Từ Khóa</label>
    <div class="input-group input-group-sm">
      <input class="form-control form-control-navbar" type="search" name="keyword" placeholder="Search" value="{{$keyword}}" aria-label="Search">
      <div class="input-group-append">
        <button class="btn btn-primary" type="submit">
          <i class="fas fa-search"></i>
        </button>
      </div>
    </div>
  </form>
  <br><br>

  <div class="card mb-4 col-8">
    <div class="card-header text-light bg-dark"><i class="fas fa-table mr-1 "></i>Bảng Danh Mục</div>
    <div class="card-body">
    @if(isset($_GET['msg']))
<div class="alert alert-danger alert-dismissible fade show text-light">
  <strong>{{$msg}}</strong>
</div>
@endif
      <table class="table table-hover">
        <thead>
          <th>ID</th>
          <th>Name</th>
          <th>Total Products</th>
          <th>Show Menu</th>
          <th>Tùy Chọn</th>
          <th>
              
              <a  href="{{route('add.category')}}"  class="text-light btn-wide btn-shadow btn btn-success">
              <span class="btn-icon-wrapper pr-1 opacity-7">
                <i class="fa fa-plus"></i>
              </span>Add New</a>

          </th>
        </thead>
        <tbody>
          @forelse($cates as $cate)
          <tr>
            <td>{{$cate->id}}</td>
            <td>{{$cate->cate_name}}</td>
            <td><span class="badge badge-success">{{count($cate->Products)}}</span></td>
            <td>{{$cate->show_menu}}</td>
            <td>
            
              
              <a href="{{route('edit.category', ['id' => $cate->id])}}"  class="border-1 btn-transition btn btn-outline-primary">
              <span class="btn-icon-wrapper pr-1 opacity-7">
                <i class="fa fa-edit"></i>
              </span>  
              Sửa</a>

           
              
              <button onclick="openConfirm('{{route('cate.remove', ['id' => $cate->id])}}')" href="javascript:;" name="onclick" class="border-1 btn-transition btn btn-outline-danger">
                <fa name="trash" _nghost-serverapp-c2="" ng-reflect-name="trash">
                  <i _ngcontent-serverapp-c2="" aria-hidden="true" class="fa fa-trash" ng-reflect-klass="fa fa-trash" ng-reflect-ng-class="">
                      Xóa
                  </i></fa></button>
             
            </td>
          </tr>
          @empty
          <div class="alert alert-danger">KHÔNG CÓ DANH MỤC NÀO !!!</div>
          @endforelse
        </tbody>
      </table>
      <div class="row">
        {{$cates->links()}}
      </div>
    </div>
  </div>
</div>
</body>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script>
  function openConfirm(removeUrl) {
    swal({
        title: "Cảnh Báo",
        text: "Bạn Có Chắc Chắn Xóa Bảng Ghi ?",
        icon: "warning",
        buttons: true,
        dangerMode: true,
      })
      .then((willDelete) => {
        if (willDelete) {
          window.location.href = removeUrl;
        }
      });
  }
</script>
@endsection