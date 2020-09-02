@extends('layouts.main')
@section('title', "DANH SÁCH USERS")
@section('main-content')
<div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Danh Sách Users</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Users</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      <!-- SEARCH FORM -->
    <form class="form-inline ml-3" action=""  method="get">
    @csrf
    <label style="margin-right: 15px;">Từ Khóa</label>
      <div class="input-group input-group-sm">
        <input class="form-control form-control-navbar" type="search" name="keyword"  placeholder="Search" value="" aria-label="Search">
        <div class="input-group-append">
          <button class="btn btn-primary" type="submit">
            <i class="fas fa-search"></i>
          </button>
        </div>
      </div>
    </form>
            <br>
        <div class="card mb-4">
            <div class="card-header text-light bg-dark"><i class="fas fa-table mr-1"></i>Bảng Users</div>
            <div class="card-body">
        <table class="table table-striped">
            <thead>
                <th>ID</th>
                <th>Name</th>
                <th>Image</th>
                <th>Email</th>
                <th>Tùy Chọn</th>
                <th>
                   <a href="#" class="btn btn-success">Add new</a>
                </th>
            </thead>
            <tbody>    
                @forelse($users as $user)
                <tr>
                    <td>{{$user->id}}</td>
                    <td>{{$user->name}}</td>
                    <td>
                        <img src="{{$user->avatar}}" class="img-avatar" width="60">
                    </td>
                    <td>{{$user->email}}</td>
                    
                    <td>
                        <a href="" class="btn btn-primary">Sửa</a>
                        <a onclick="openConfirm('#')" href="javascript:;" class="btn btn-danger">Xóa</a>
                    </td>
                </tr>
                @empty
                    <div class="alert alert-danger">KHÔNG CÓ USER NÀO !!!</div>
                @endforelse
            </tbody>
        </table>
        <div class="row">
            {{$users->links()}}
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
