
<form action="#">
    <div class="table-responsive" data-url="{{route('cart.delete')}}">
        <table class="table table-bordered update_cart_url" data-url="{{route('update.cart')}}">
            <thead>

                <tr>
                    <td>ID</td>
                    <td>Image</td>
                    <td>Product Name</td>
                    <td>Quantity</td>
                    <td>Unit Price</td>
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
                    <td>{{$id}}</td>
                    <td>
                        <a href="single-product.html"><img src="{{$item['image']}}" alt="Cart Product Image" title="Compete Track Tote" class="img-thumbnail"></a>
                    </td>
                    <td>
                        <a href="single-product.html">{{$item['name']}}</a>

                    </td>

                    <td>
                        <div class="input-group btn-block">
                            <div class="cart-input">
                                <input class="cart-input-box" type="number" value="{{$item['quantity']}}" min="1">
                            </div>
                            <span class="input-group-btn">
                                <button type="submit" data-toggle="tooltip" data-id="{{$id}}" data-direction="top" class="btn btn-primary cart_update" data-original-title="Update"><i class="fa fa-refresh"></i></button>
                                <button onclick="return confirm('Bạn có chắc chắn xóa không');" type="button" data-toggle="tooltip" data-id="{{$id}}" data-direction="top" class="btn btn-danger pull-right cart_delete" data-original-title="Remove"><i class="fa fa-times-circle"></i></button>
                            </span>
                        </div>
                    </td>
                    <td>{{number_format($item['price'])}} VNĐ</td>
                    <td>{{number_format($item['price'] *$item['quantity'])}}VNĐ</td>
                </tr>

                @empty
                <div class="alert alert-danger">KHÔNG CÓ SẢN PHẨM NÀO TRONG GIỎ HÀNG !!!</div>
                @endforelse
            </tbody>
        </table>
    </div>
</form>
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
