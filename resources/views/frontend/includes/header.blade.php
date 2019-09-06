
<nav id="top">
    <div class="container">
        <div id="top-links" class="nav pull-left">
            <div class="lang-curr">
                <div class="pull-left" style="padding-right: 50px;">
                    <a href="{{$sites->fblink}}"><img src="{{URL::to('/frontend/images/catalog/facebook.png')}}" alt="Facebook" width="30" height="30"></a>
                    <a href="{{$sites->instalink}}"><img src="{{URL::to('/frontend/images/catalog/instagram.png')}}" alt="Instagram" width="30" height="30"></a>
                    <a href="{{$sites->googlelink}}"><img src="{{URL::to('/frontend/images/catalog/google.png')}}" alt="Google" width="30" height="30"></a>
                    <a href="{{$sites->twitterlink}}"><img src="{{URL::to('/frontend/images/catalog/twitter.png')}}" alt="Twitter" width="30" height="30"></a>
                </div>
                <div class="pull-left">
                    <marquee onMouseOver="this.stop()" onMouseOut="this.start()"> <p style="color: #fff">{{$sites->slogan}}</p></marquee>
                </div>
            </div>
        </div>

        <div class="headertopright">
            <div class="dropdown myaccount">
                <a href="{{route('cart.wishlistindex')}}" title="My Account">
                    <span class="hidden-xs hidden-sm hidden-md ">Wishlist({{Cart::instance('wishlist')->count()}})</span>
                </a>
                <!-- <ul class="dropdown-menu dropdown-menu-right myaccount-menu">
                        <li><a href="#">Register</a></li>
                        <li><a href="#">Login</a></li>
                        <li><a href="#" >Wish List (0)</a></li>
                        <li><a href="#">Checkout</a></li>
                </ul> -->
            </div>

        </div>
    </div>
</nav>


<div class="header-container">
    <header>
        <div class="container">
            <div class="row">
                <div class="header-main">

                    <div class="header-logo">
                        <div id="logo">
                            <a href="{{route('index')}}"><img src="{{URL::to('/frontend/image/logo/'.$logos->logo)}}" title="Tibetan Handicraft Industry" alt="Tibetan Handicraft Industry" class="img-responsive" style="width:80px;height:50px;" /></a>
                        </div>
                    </div>


                    <div class="head-right-bottom">
                        <div class="header-cart" id="cart-total"><div id="cart" class="btn-group btn-block">
                                <a href="{{route('cart.index')}}"><span class="cart_heading">Cart</span></a>

                                    @if(Cart::instance('default')->count()>0)

                                        <span  class="badge" style="color:white;background-color:red"> {{Cart::instance('default')->count()}}
                             </span>
                                @endif

                                {{--        <ul class="dropdown-menu pull-right cart-menu">
                                             <li>
                                                 <p class="text-center">Your shopping cart is empty!</p>
                                             </li>
                                         </ul>--}}
                            </div>
                        </div>
                        <div id="search" class="input-group">
                            <span class="search_button"></span>
                            <div class="search_toggle">
                                <div id="searchbox">
                                    <form action="{{route('search')}}" method="get">
                                        {{csrf_field()}}
                                        <input type="text" name="search" placeholder="Search Products Here" class="form-control input-lg" />
                                        <span class="input-group-btn">
					      	<button type="submit" class="btn btn-default btn-lg"><i class="fa fa-search"></i></button></span>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <nav class="nav-container" role="navigation">
                            <div class="nav-inner">
                                <!-- ======= Menu Code START ========= -->
                                <!-- Opencart 3 level Category Menu-->
                                <div id="menu" class="main-menu">
                                    <div class="navbar-header collapsed" data-toggle="collapse" data-target=".navbar-ex1-collapse"><span id="category" class="visible-xs">Menu</span>
                                    </div>
                                    <ul class="nav navbar-nav">
                                        <li> <a href="{{route('index')}}">Home</a></li>
                                        <li><a href="{{route('about')}}">About Us</a></li>
                                        <li><a href="{{route('social')}}">Social Contributions</a></li>
                                        <li class="top_level dropdown"><a href="{{route('pmenu')}}">Products Categories</a>

                                        </li>
                                        <li ><a href="{{route('custom')}}">Custom Products</a>
                                        <li> <a href="{{route('contact')}}">Contact Us</a></li>
                                    </ul>
                                </div>
                            </div>
                            <!-- ======= Menu Code END ========= -->
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </header>


    <!--  =============================================== Mobile menu start  =============================================  -->
    <div id="res-menu" class="main-menu nav-container1 container">
        <div class="nav-responsive"><span>Menu</span><div class="expandable"></div></div>
        <ul class="main-navigation">
            <li><a href="{{route('index')}}">Home</a></li>
            <li><a href="{{route('about')}}">About Us</a></li>
            <li><a href="{{route('social')}}">Our Social Contributions</a></li>
            <li class="top_level dropdown"><a href="{{route('pmenu')}}">Products Categories</a>

            </li>

            <li><a href="{{route('contact')}}">Contact Us</a></li>
        </ul>
    </div>
    <!--  ================================ Mobile menu end   ======================================   -->
    <div class="wrap-breadcrumb parallax-breadcrumb">
        <div class="container"></div>
    </div>
</div>
</div>