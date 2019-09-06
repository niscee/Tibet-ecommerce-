
<body class="common-home layout-1">

<nav id="top">
    <div class="container">
        <div id="top-links" class="nav pull-left">
            <div class="lang-curr">
                <div class="pull-left" style="padding-right: 50px;">

                    <a href=""><img src="{{URL::to('/frontend/images/catalog/facebook.png')}}" alt="Facebook" width="30" height="30"></a>
                    <a href=""><img src="{{URL::to('/frontend/images/catalog/instagram.png')}}" alt="Instagram" width="30" height="30"></a>
                    <a href=""><img src="{{URL::to('/frontend/images/catalog/google.png')}}" alt="Google" width="30" height="30"></a>
                    <a href=""><img src="{{URL::to('/frontend/images/catalog/twitter.png')}}" alt="Twitter" width="30" height="30"></a>
                </div>
                <div class="pull-left">
                    <marquee onMouseOver="this.stop()" onMouseOut="this.start()"> <p style="color: #fff">Tibetan Handicraft & Paper Pvt. Ltd. was established first in 1995 by three cousins from Dolkha District east of Kathmandu</p></marquee>
                </div>
            </div>
        </div>

        <div class="headertopright">
            <div class="dropdown myaccount">
                <a href="#" title="My Account" class="dropdown-toggle" data-toggle="dropdown">
                    <span class="hidden-xs hidden-sm hidden-md">Wish List (0)</span>
                </a>
                <ul class="dropdown-menu dropdown-menu-right myaccount-menu">
                    <li><a href="#">Register</a></li>
                    <li><a href="#">Login</a></li>
                    <li><a href="#" >Wish List (0)</a></li>
                    <li><a href="#">Checkout</a></li>
                </ul>
            </div>

        </div>
    </div>
</nav>


<div class="header-container">
    <header>
        <div class="container" style="width:82%">
            <div class="row">
                <div class="header-main">

                    <div class="header-logo">
                        <div id="logo">
                            <a href="{{route('index')}}"><img src="{{URL::to('/frontend/image/logo/'.$logos->logo)}}" title="Tibetan Handicraft Industry" alt="Tibetan Handicraft Industry" class="img-responsive" /></a>
                        </div>
                    </div>


                    <div class="head-right-bottom">
                        <div class="header-cart"><div id="cart" class="btn-group btn-block">
                                <span class="cart_heading" data-toggle="dropdown">Cart</span>
                                <button type="button" data-toggle="dropdown" data-loading-text="Loading..." class="btn btn-inverse btn-block btn-lg dropdown-toggle">
                                    <i class="fa fa-shopping-cart"></i> <span id="cart-total">(0)</span></button>

                                <ul class="dropdown-menu pull-right cart-menu">
                                    <li>
                                        <p class="text-center">Your shopping cart is empty!</p>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div id="search" class="input-group">
                            <span class="search_button"></span>
                            <div class="search_toggle">
                                <div id="searchbox">
                                    <input type="text" name="search" value="" placeholder="Search Products Here" class="form-control input-lg" />
                                    <span class="input-group-btn">
						<button type="button" class="btn btn-default btn-lg"><i class="fa fa-search"></i></button>
						</span>
                                </div>
                            </div>
                        </div>
                        <nav class="nav-container" role="navigation">
                            <div class="nav-inner">
                                <!-- ======= Menu Code START ========= -->
                                <!-- Opencart 3 level Category Menu-->
                                <div id="menu">
                                    <div class="navbar-header collapsed" data-toggle="collapse" data-target=".navbar-ex1-collapse"><span id="category" class="visible-xs">Menu</span>
                                    </div>
                                    <ul class="nav navbar-nav" style="font-size:1.1em;" >
                                        <li style="margin-right:10px margin-top:-50px"> <a href="{{route('index')}}">Home</a></li>
                                        <li style="margin-right:10px" ><a href="{{route('about')}}">About Us</a></li>
                                        <li  style="margin-right:10px"> <a href="{{route('social')}}">Social Contributions</a></li>
                                        <li style="margin-right:10px" class="top_level dropdown"><a href="#">Products Categories</a>
                                            <div class="dropdown-menu megamenu">{{-- column2--}}

                                                <div class="dropdown-inner">

                                                    <ul class="list-unstyled childs_4">
                                                        <li class="dropdown">
                                                            @foreach($categorys as $cats)
                                                                <div class="dropdown-menu">
                                                                    <div class="dropdown-inner">
                                                                        <ul class="list-unstyled childs_2">
                                                                            <a href="{{route('product',['slug'=>$cats->slug])}}">{{$cats->category}}</a>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            @endforeach
                                                        </li>
                                                    </ul>

                                                </div>
                                            </div>
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
            <li><a href="#">Products Categories</a>
                <ul >
                    <li><a href="#"></a>{{$cats->category}}</li>
                    @foreach($cats->Product as $pro)
                        <li><a href="">{{$pro->proname}}</a></li>
                    @endforeach
                </ul>
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