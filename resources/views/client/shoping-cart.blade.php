@extends('layouts.main-shop-list')
@section('main-product')
<!-- Start of Breadcrumbs -->
<div class="breadcrumb-section bgc-offset mb-full">
    <div class="container">
        <div class="row">
            <div class="col-12 col-sm-12 col-md-12">
                <nav class="breadcrumb">
                    <a class="breadcrumb-item" href="{{route('home.page')}}">Home</a>
                    <span class="breadcrumb-item active">Shopping Cart</span>
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
                                        <h2>Shopping Cart</h2>
                                    </div>
                                    <div class="cart_wrapper">
                                        @include('client.components.cart-components')
                                    </div>

                                    <div class="cart-button-wrapper d-flex justify-content-between mt-4">
                                        <a href="{{route('home.page')}}" class="btn btn-secondary dark">Continue Shopping</a>
                                        <a href="{{route('check.out')}}" class="btn btn-secondary dark align-self-end">Checkout</a>
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
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script>
    function cartUpdate(event) {
        event.preventDefault();
        let urlUpdateCart = $('.update_cart_url').data('url');
        let id = $(this).data('id');
        let quantity = $(this).parents('tr').find('input').val();
       
        $.ajax({
            type: "GET",
            url: urlUpdateCart,
            data: {id: id, quantity: quantity},
            success: function (data){
                if(data.code === 200){
                    $('.cart_wrapper').html(data.cart_components);
                    alert('Cập Nhập Số lượng Thành Công');
                }
            },
            error: function(){

            }
        });
    }

    function cartDelete(event){
        event.preventDefault();
        let urlDelete = $('.table-responsive').data('url');
        let id = $(this).data('id');
        $.ajax({
            type: "GET",
            url: urlDelete,
            data: {id: id},
            success: function (data){
                if(data.code === 200){
                    
                    $('.cart_wrapper').html(data.cart_components);
                    alert('Xóa Sản Phẩm Khỏi Giỏ Hàng Thành Công');
                }
            },
            error: function(){

            }
        });
    }

    $(function() {
        $(document).on('click', '.cart_update', cartUpdate)
        $(document).on('click', '.cart_delete', cartDelete)
    })
</script>
@endsection