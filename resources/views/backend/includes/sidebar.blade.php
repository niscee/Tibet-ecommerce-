<div class="col-md-3 left_col">
    <div class="left_col scroll-view">
        <div class="navbar nav_title" style="border: 0;">
            <a href="" class="site_title"><i class="fa fa-paw"></i> <span style="font-size: 16px;">Tibetan Handicraft</span></a>
        </div>

        <div class="clearfix"></div>

        <!-- menu profile quick info -->
        <div class="profile">
            <div class="profile_pic">
                <a href="{{route('dashboard')}}">
                    <img src="{{URL::to('backend/userimg/'.Auth::user()->image)}}"  class="img-circle profile_img" style="height:110px;width:100px;">
                </a>
            </div>
            <div class="profile_info">
                <span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Welcome,</span>
                <h2><strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{Auth::user()->name}}</strong></h2>
            </div>
        </div>
        <!-- /menu profile quick info -->

        <br><br>
        <br><br>


        <!-- sidebar menu -->
        <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
            <div class="menu_section">
                <br>
                <br>
                <br>
                <ul class="nav side-menu">
                    <li><a href="{{route('admin-site-config')}}"><i class="fa fa-home"></i> Site-Configuration </a>
                    </li>

                    <li><a href="{{route('admin-menu-config')}}"><i class="	fa fa-square-o"></i>Menu-Configuration</a>
                    </li>

                    <li><a><i class="fa fa-shopping-bag"></i>Products<span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu">
                            <li><a href="{{route('admin-product')}}">Add</a></li>
                            <li><a href="{{route('admin-menu-view')}}">View-Category & Subcategory</a></li>
                            <li><a href="{{route('admin-product-view')}}">View-Product</a></li>
                        </ul>
                    </li>

                    <li><a href="{{route('contact-message')}}"><i class="fa fa-envelope-o"></i>Customer Messages</a>
                    </li>

                    <li><a href="{{route('admin-slider')}}"><i class="fa fa-file-picture-o"></i> Slider </a>
                    </li>
                    <li><a href="{{route('admin-information')}}"><i class="fa fa-shopping-cart"></i>Information </a>
                    </li>

                    <li><a href="{{route('admin-associate')}}"><i class="fa fa-bars"></i>Associate Information </a>
                    </li>
                    <li><a href="{{route('admin-member')}}"><i class="fa fa-th"></i>Add Member </a>
                    </li>

                    <li><a href="{{route('admin-browser')}}"><i class="	fa fa-yelp"></i>Browser</a>
                    </li>

                    <li><a href="{{route('admin-subscribe')}}"><i class="fa fa-check-square"></i>Subscriber</a>
                    </li>

                    <li><a href="{{route('admin-metatag')}}"><i class="fa fa-google-wallet"></i>Meta-Tag</a>
                    </li>

                </ul>
            </div>

        </div>
        <!-- /sidebar menu -->

        <!-- /menu footer buttons -->

    </div>
</div>
