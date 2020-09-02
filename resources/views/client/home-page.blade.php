@extends('layouts.main-page')
@section('main-product')
<section class="new-arrivals-section">
    <div class="container">
        <div class="row">
            <div class="col-12 col-sm-12 col-md-12">
                <div class="section-title">
                    <h2>SẢN PHẨM MỚI NHẤT</h2>
                   
                </div>
            </div>
        </div> <!-- end of row -->

        <div class="row product-row">
            <div class="col-12 col-sm-12 col-md-12">
                <div class="new-products pos-r">
                    <div class="element-carousel anime-element-multi" data-visible-slide="4" data-loop="false" data-space-between="0" data-speed="1000">

                        <!-- Slides -->
                        <div class="swiper-wrapper">
                            @foreach($products2 as $pro)
                            <div class="swiper-slide">
                                <article class="product-layout">
                                    <div class="product-thumb">
                                        <div class="product-inner">
                                            <div class="product-image">
                                                <div class="label-product label-sale">-20%</div>
                                                <div class="label-product label-new">New</div>
                                                <a href="{{route('detail.product', ['id' => $pro->id])}}">
                                                    <img src="{{$pro->image}}" width="50" alt="Compete Track Tote" title="Compete Track Tote">
                                                </a>
                                                <div class="action-links">
                                                    <a class="action-btn btn-cart add_to_cart"  href="#" data-url="{{route('add.cart', ['id' => $pro->id])}}" title="Add to Cart" ><i class="pe-7s-shopbag"></i></a>
                                                    <a class="action-btn btn-wishlist" href="#" title="Add to Wishlist"><i class="pe-7s-like"></i></a>
                                                    <a class="action-btn btn-compare" href="#" title="Add to Compare"><i class="pe-7s-refresh-2"></i></a>
                                                    <a class="action-btn btn-quickview" data-toggle="modal" data-target="#product_quick_view" href="#" title="Quick View"><i class="pe-7s-search"></i></a>
                                                </div>
                                            </div> <!-- end of product-image -->

                                            <div class="product-caption">
                                                <div class="product-meta d-flex justify-content-between align-items-center">
                                                    <div class="product-manufacturer">
                                                        <a href="{{route('list.cate', ['id' => $pro->cate_id])}}" >{{$pro->Category->cate_name}}</a>
                                                    </div>
                                                    <div class="product-ratings">
                                                        <div class="rating-box">
                                                            <ul class="rating d-flex">
                                                                <li><i class="ion ion-md-star-outline"></i></li>
                                                                <li><i class="ion ion-md-star-outline"></i></li>
                                                                <li><i class="ion ion-md-star-outline"></i></li>
                                                                <li><i class="ion ion-md-star-outline"></i></li>
                                                                <li><i class="ion ion-md-star-outline disabled"></i></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                                <h2 class="product-name"><a href="{{route('detail.product', ['id' => $pro->id])}}">{{$pro->name}}</a></h2>
                                                <p class="product-price">
                                                    <span class="price-old">54.65 VNĐ</span>
                                                    <span class="price-new">{{number_format($pro->price)}} VNĐ</span>
                                                </p>
                                            </div><!-- end of product-caption -->
                                        </div><!-- end of product-inner -->
                                    </div><!-- end of product-thumb -->
                                </article> <!-- end of product-layout -->

                              
                            </div> <!-- end of swiper-slide -->
                            @endforeach
                            



                        <!-- Slider Navigation -->
                        <!-- <div class="swiper-arrow next"><i class="fa fa-angle-right"></i></div>
                        <div class="swiper-arrow prev"><i class="fa fa-angle-left"></i></div> -->
                    </div> <!-- end of element-carousel -->
<br><br>
                    <div class="row">
            <div class="col-12 col-sm-12 col-md-12">
                <div class="section-title">
                    <h2>SẢN PHẨM</h2>
                   
                </div>
            </div>
        </div> <!-- end of row -->

                    <!-- Slides -->
                    <div class="swiper-wrapper">
                            @foreach($products as $pro)
                            <div class="swiper-slide">
                                <article class="product-layout">
                                    <div class="product-thumb">
                                        <div class="product-inner">
                                            <div class="product-image">
                                                <div class="label-product label-sale">-20%</div>
                                                <div class="label-product label-new">New</div>
                                                <a href="{{route('detail.product', ['id' => $pro->id])}}">
                                                    <img src="{{$pro->image}}" width="50" alt="Compete Track Tote" title="Compete Track Tote">
                                                </a>
                                                <div class="action-links">
                                                    <a  class="action-btn btn-cart add_to_cart" href="#" data-url="{{route('add.cart', ['id' => $pro->id])}}"  title="Add to Cart"><i class="pe-7s-shopbag"></i></a>
                                                    <a class="action-btn btn-wishlist" href="#" title="Add to Wishlist"><i class="pe-7s-like"></i></a>
                                                    <a class="action-btn btn-compare" href="#" title="Add to Compare"><i class="pe-7s-refresh-2"></i></a>
                                                    <a class="action-btn btn-quickview" data-toggle="modal" data-target="#product_quick_view" href="#" title="Quick View"><i class="pe-7s-search"></i></a>
                                                </div>
                                            </div> <!-- end of product-image -->

                                            <div class="product-caption">
                                                <div class="product-meta d-flex justify-content-between align-items-center">
                                                    <div class="product-manufacturer">
                                                        <a href="{{route('list.cate', ['id' => $pro->cate_id])}}">{{$pro->Category->cate_name}}</a>
                                                    </div>
                                                    <div class="product-ratings">
                                                        <div class="rating-box">
                                                            <ul class="rating d-flex">
                                                                <li><i class="ion ion-md-star-outline"></i></li>
                                                                <li><i class="ion ion-md-star-outline"></i></li>
                                                                <li><i class="ion ion-md-star-outline"></i></li>
                                                                <li><i class="ion ion-md-star-outline"></i></li>
                                                                <li><i class="ion ion-md-star-outline disabled"></i></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                                <h2 class="product-name"><a href="{{route('detail.product', ['id' => $pro->id])}}">{{$pro->name}}</a></h2>
                                                <p class="product-price">
                                                    <span class="price-old">54.65 VNĐ</span>
                                                    <span class="price-new">{{number_format($pro->price)}} VNĐ</span>
                                                </p>
                                            </div><!-- end of product-caption -->
                                        </div><!-- end of product-inner -->
                                    </div><!-- end of product-thumb -->
                                </article> <!-- end of product-layout -->

                              
                            </div> <!-- end of swiper-slide -->
                            @endforeach
                            



                        <!-- Slider Navigation -->
                        <!-- <div class="swiper-arrow next"><i class="fa fa-angle-right"></i></div>
                        <div class="swiper-arrow prev"><i class="fa fa-angle-left"></i></div> -->
                    </div> <!-- end of element-carousel -->
                </div> <!-- end of new-products -->
            </div>
        </div> <!-- end of row -->
    </div> <!-- end of container -->
</section>
<script src="https://code.jquery.com/jquery-3.5.1.min.js" ></script>
<script>
function addTocart(event) {
    event.preventDefault();
    let urlCart = $(this).data('url');
    $.ajax({
    type : "GET",
    url : urlCart,
    success: function(data){
     if (data.code === 200) {
         alert('Thêm sản phẩm thành công')
     }
    },
    });
}
 $(function () {
     $('.add_to_cart').on('click', addTocart);
 });
</script>

@endsection