<header class="header bgc-white header-type-1">
            <div class="top-bar">
                <div class="container">
                    <div class="row">
                        <div class="col-12 order-2 col-sm-12 order-sm-2 col-md-8 order-md-1 align-self-center">
                            <p>Mid-season sale up to 20% OFF. Use code "SALEOFF20"</p>
                        </div>
                        <div class="col-12 order-1 col-sm-12 order-sm-1 col-md-4 order-md-2">
                            <ul class="list-inline">
                                <li class="currency list-inline-item">
                                    <div class="btn-group">
                                        <button class="btn-link dropdown-toggle"> USD $<i class="fa fa-angle-down"></i></button>
                                        <div class="dropdown-menu">
                                            <ul>
                                               <li><a href="#">Euro €</a></li>
                                               <li><a href="#" class="current">USD $</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </li>
                                <li class="language list-inline-item">
                                    <div class="btn-group">
                                        <button class="btn-link dropdown-toggle">English <i class="fa fa-angle-down"></i></button>
                                        <div class="dropdown-menu">
                                            <ul>
                                               <li><a href="#" class="current"><img src="{!! asset('assets/images/icons/en-gb.png')!!}" alt="Icons"> English</a></li>
                                               <li><a href="#"><img src="{!! asset('assets/images/icons/fr-fr.png')!!}" alt="Icons"> Français</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div> <!-- end of container -->
            </div> <!-- end of top-bar -->

            <div class="header-area">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-6 order-2 col-sm-6 order-sm-2 col-md-4 order-md-1 col-lg-3">
                            <div class="header-search-area">
                                <form action="#">
                                    <div class="input-group">
                                        <input type="text" class="form-control" placeholder="Search entire store here ...">
                                        <div class="input-group-append">
                                            <button class="header-search-btn" type="submit"><i class="pe-7s-search"></i></button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="col-12 order-1 col-sm-12 order-sm-1 col-md-4 order-md-2 col-lg-6">
                            <div class="logo">
                                <a href="index.html"><img src="{!! asset('assets/images/logo.png')!!}" alt="Logo" class="img-fluid"></a>
                            </div>
                        </div>
                        <div class="col-6 order-3 col-sm-6 col-md-4 col-lg-3">
                            <div class="header-cart-area">
                            <div class="header-cart">
                            <div class="btn-group">
                                <button href="{{route('shoping.cart')}}" class="btn-link dropdown-toggle icon-cart">
                                    <i class="pe-7s-shopbag"></i>
                                </button>
                                <div class="dropdown-menu">
                                    <div class="shopping-cart-content">
                                        
                                        <div class="shopping-cart-btn">
                                            <a class="default-btn" href="{{route('shoping.cart')}}">view cart</a>
                                            <a class="default-btn" href="{{route('check.out')}}">checkout</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                                <ul class="list-inline">
                                    <li class="top-links list-inline-item">
                                        <div class="btn-group">
                                            <button class="btn-link dropdown-toggle"><i class="pe-7s-config"></i></button>
                                            <div class="dropdown-menu">
                                                <ul>
                                                   <li><a href="register.html">Register</a></li>
                                                   <li><a href="login.html">Login</a></li>
                                                   <li><a href="my-account.html">My Account</a></li>
                                                   <li><a href="wishlist.html">Wishlist</a></li>
                                                   <li><a href="checkout.html">Checkout</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div> <!-- end of header-cart-area -->
                        </div>
                    </div>
                </div> <!-- end of container -->
            </div> <!-- end of header-top -->



            <!-- Start of Main and Mobile Navigation -->
            <div class="main-nav-area bgc-white">
                <div class="container">
                    <nav id="main_nav" class="stellarnav">
                        <ul>
                            <li><a href="{{route('home.page')}}"><span>Home</span></a>
                               
                            </li>
                            <li class="mega" data-columns="4"><a href="#"><span>Categories</span></a>
                                <ul class="mega-container">
                                    <li><a href="#" class="#"><h3>Cates 01</h3></a>
                                        <ul>
                                            @foreach($categories as $cates)
                                            <li><a href="{{route('list.cate', ['id' => $cates->id])}}">{{$cates->cate_name}}</a></li>
                                           
                                            @endforeach
                                        </ul>
                                    </li>
                                    
                                </ul>
                            </li>
                           
                                <ul>
                                    <li><a href="faqs.html">FAQs Page</a></li>
                                    <li><a href="404.html">404 Page</a></li>
                                </ul>
                            </li>
                            <li><a href="about.html"><span>About Us</span></a></li>
                            <li><a href="contact.html"><span>Contact Us</span></a></li>
                        </ul>
                    </nav>
                </div> <!-- end of container -->
            </div>
            <!-- End of Main and Mobile Navigation -->
        </header>