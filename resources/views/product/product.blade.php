@extends('layouts.main')
@section('title', "DANH SÁCH SẢN PHẨM")
@section('main-content')
<div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Danh Sách Sản Phẩm</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Home</a></li>
              <li class="breadcrumb-item active">Products</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      <!-- SEARCH FORM -->
    <form class="form-inline ml-3" action="{{route('index')}}"  method="get">
    @csrf
    <label style="margin-right: 15px;">Từ Khóa</label>
      <div class="input-group input-group-sm">
        <input class="form-control form-control-navbar" type="search" name="keyword"  placeholder="Search" value="{{$keyword}}" aria-label="Search">
        <div class="input-group-append">
          <button class="btn btn-primary" type="submit">
            <i class="fas fa-search"></i>
          </button>
        </div>
      </div>
    </form>
<!-- <form action="{{route('index')}}" method="get" class="col-12">
            <div class="form-group">
                @csrf
                <label for="">Từ Khóa</label>
                <input type="text" name="keyword" class="form-control" value="{{$keyword}}" placeholder="Search...">
            </div>
            <div class=" text-center ">
                <button type="submit" class="btn btn-primary btn-sm">Tìm Kiếm</button>

            </div> -->
            <br>
        <div class="card mb-4">
            <div class="card-header text-light bg-dark"><i class="fas fa-table mr-1"></i>Bảng Sản Phẩm</div>
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
                <th>Image</th>
                <th>Price</th>
                <th>Danh Mục</th>
                <th>Tùy Chọn</th>
                <th>
                
              
              <a href="{{route('add.product')}}"  class="text-light btn-wide btn-shadow btn btn-success">
              <span class="btn-icon-wrapper pr-1 opacity-7">
                <i class="fa fa-plus"></i>
              </span>  
              Add New</a>
            
                   
                </th>
            </thead>
            <tbody>    
                @forelse($product as $pro)
                <tr>
                    <td>{{$pro->id}}</td>
                    <td>{{$pro->name}}</td>
                    <td>
                        <img src="{{$pro->image}}" class="img-avatar" width="100">
                    </td>
                    <td>{{number_format($pro->price)}} VNĐ</td>
                    <td>{{$pro->Category->cate_name}}</td>
                    <td>
                   
              
              <a href="{{route('edit.product', ['id' => $pro->id])}}"  class="border-1 btn-transition btn btn-outline-primary">
              <span class="btn-icon-wrapper pr-1 opacity-7">
                <i class="fa fa-edit"></i>
              </span>  
              Sửa</a>
       
              
              <button onclick="openConfirm('{{route('remove-product', ['id' => $pro->id])}}')" href="javascript:;" name="onclick" class="border-1 btn-transition btn btn-outline-danger">
                <fa name="trash" _nghost-serverapp-c2="" ng-reflect-name="trash">
                  <i _ngcontent-serverapp-c2="" aria-hidden="true" class="fa fa-trash" ng-reflect-klass="fa fa-trash" ng-reflect-ng-class="">
                      Xóa
                  </i></fa></button>
                        
                    </td>
                </tr>
                @empty
                    <div class="alert alert-danger">KHÔNG CÓ SẢN PHẨM NÀO !!!</div>
                @endforelse
            </tbody>
        </table>
        <div class="row">
            {{$product->links()}}
        </div>
        </div>
          </div>
          </div><!-- /.container-fluid -->
          <br>
          <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script>
   function openConfirm(removeUrl){
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
