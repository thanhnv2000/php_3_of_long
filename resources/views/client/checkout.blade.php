@extends('layouts.main-shop-list')
@section('main-product')
<!-- Start of Breadcrumbs -->
<div class="breadcrumb-section bgc-offset mb-full">
    <div class="container">
        <div class="row">
            <div class="col-12 col-sm-12 col-md-12">
                <nav class="breadcrumb">
                    <a class="breadcrumb-item" href="{{route('home.page')}}">Home</a>
                    <span class="breadcrumb-item active">CheckOut</span>
                </nav>
            </div>
        </div> <!-- end of row -->
    </div> <!-- end of container -->
</div>
<!-- End of Breadcrumbs -->

<!-- Start of Main Content Wrapper -->
<div id="content" class="main-content-wrapper">

    <!-- Start of Shopping Cart Wrapper -->
    <div class="shopping-cart-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                    <main id="primary" class="site-main">
                        <div class="shopping-cart">
                            <div class="row">
                                <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                                    <div class="section-title">
                                        <h2>Đơn Hàng Của Bạn</h2>
                                    </div>
                                    <div class="cart_wrapper">

                                        <div class="cart-button-wrapper d-flex justify-content-between mt-4 mb-3">

                                            <a href="{{route('shoping.cart')}}" class="btn btn-secondary dark">View Shopping-Cart</a>
                                        </div>

                                        <div class="table-responsive" data-url="{{route('cart.delete')}}">
                                            <table class="table table-bordered update_cart_url" data-url="{{route('update.cart')}}">
                                                <thead>

                                                    <tr>

                                                        <td>Image</td>
                                                        <td>Product Name</td>
                                                        <td>Quantity</td>
                                                        <td>Total</td>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @php
                                                    $total = 0;
                                                    @endphp
                                                    
                                                    @forelse($carts as $id => $item)
                                                    
                                                    @php
                                                        $total += $item['price'] *$item['quantity'];
                                                   
                                                    @endphp
                                                    <tr>

                                                        <td>
                                                            <a href="single-product.html"><img src="{{$item['image']}}" alt="Cart Product Image" title="Compete Track Tote" class="img-thumbnail"></a>
                                                        </td>
                                                        <td>
                                                            <a href="single-product.html">{{$item['name']}}</a>

                                                        </td>

                                                        <td>
                                                            <span class="badge badge-success">{{$item['quantity']}}</span>
                                                        </td>

                                                        <td>{{number_format($item['price'] *$item['quantity'])}}VNĐ</td>
                                                    </tr>

                                                    @empty
                                                    <div class="alert alert-danger">KHÔNG CÓ SẢN PHẨM NÀO TRONG ĐƠN HÀNG !!!</div>
                                                    @endforelse
                                                </tbody>
                                            </table>
                                        </div>

                                        <div class="cart-amount-wrapper">
                                            <div class="row">
                                                <div class="col-12 col-sm-12 col-md-4 offset-md-8">
                                                    <table class="table table-bordered">
                                                        <tbody>
                                                            <tr>
                                                                <td><strong>Total:</strong></td>
                                                                <td><span class="color-primary">{{number_format($total)}} VNĐ</span></td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- form thông tin -->
                                        <div class="checkout-form">
                                            <div class="section-title left-aligned">
                                                <h2>Điền Thông Tin Đơn Hàng</h2>
                                            </div>

                                            <form action="{{route('save.order')}}" method="post">
                                                @csrf
                                                <div class="form-row mb-3">
                                                    <div class="form-group col-12 col-sm-12 col-md-6">
                                                        <label for="first_name">Họ Và Tên <span class="text-danger">*</span></label>
                                                        <input type="text" name="customer_name" class="form-control" id="first_name" required="">
                                                    </div>

                                                </div>
                                                <div class="form-row mb-3">

                                                    <div class="form-group col-12 col-sm-12 col-md-6">
                                                        <label for="email_address">Địa Chỉ Email <span class="text-danger">*</span></label>
                                                        <input type="email" name="customer_email" class="form-control" id="email_address" required="">
                                                    </div>
                                                </div>


                                                <div class="form-row mb-3">
                                                    <div class="form-group col-12 col-sm-12 col-md-6">
                                                        <label for="tel_number">Số Điện Thoại <span class="text-danger">*</span></label>
                                                        <input type="number" name="customer_phone_number" class="form-control" required="" id="tel_number">
                                                    </div>

                                                </div>
                                                <div class="form-row mb-3">
                                                    <div class="form-group col-12 col-sm-12 col-md-12">
                                                        <label for="p_address">Địa Chỉ <span class="text-danger">*</span></label>
                                                        <input type="text" name="customer_address" class="form-control" id="p_address" required="">
                                                    </div>
                                                </div>

                                                <div class="cart-button-wrapper d-flex justify-content-between mt-4">
                                                   
                                                    <button type="submit" class="btn btn-info"> Đặt Hàng </button>
                                                </div>


                                        </div>


                                        <!-- end form thông tin -->
                                        </form>
                                       
                                    </div>

                                    <div class="cart-button-wrapper d-flex justify-content-between mt-4">
                                        <a href="{{route('home.page')}}" class="btn btn-secondary dark">Continue Shopping</a>
                                    </div>
                                </div>
                            </div>
                        </div> <!-- end of shopping-cart -->
                    </main> <!-- end of #primary -->
                </div>
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div>
    <!-- End of Shopping Cart Wrapper -->
</div>
<!-- End of Main Content Wrapper -->
@endsection