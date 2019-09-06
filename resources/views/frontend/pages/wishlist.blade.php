@extends('frontend.includes.master2')


@section('body')




    <script>

        function quickbox(){
            if ($(window).width() > 767) {
                $('.quickview-button').magnificPopup({
                    type:'iframe',
                    delegate: 'a',
                    preloader: true,
                    tLoading: 'Loading image #%curr%...',
                });
            }
        }
        jQuery(document).ready(function() {quickbox();});
        jQuery(window).resize(function() {quickbox();});

    </script><div class="container">
        <ul class="breadcrumb">
            <li><a href="{{route('index')}}"><i class="fa fa-home"></i></a></li>
            <li>Shopping Cart</li>
        </ul>
        <div class="row">
            @include('frontend.includes.sidebar')
            <div id="content" class="col-sm-9">
                <h1 class="page-title">Shopping Cart  </h1>
                @include('backend.includes.message')




                <div class="table-responsive">
                    <table class="table table-bordered shopping-cart">
                        <thead>
                        <tr>
                            <td class="text-center">Image</td>
                            <td class="text-left">Product Name</td>
                            <td class="text-left">Action</td>
                        </tr>
                        </thead>
                        <tbody>

                        @if(Cart::instance('wishlist')->count()>0)

                            <h5>{{Cart::count()}} Item has been added!!!</h5>

                            @foreach(Cart::instance('wishlist')->content() as $item)
                                <tr>

                                    <td class="text-center">{{--<a href="#">--}}<img src="{{URL::to('/frontend/image/product/'.$item->model->promain)}}" alt="{{$item->model->promain}}"  class="img-thumbnail" />{{--</a>--}}
                                    </td>

                                    <td class="text-left">{{--<a href="#">--}}{{$item->name}}

                                    </td>
                                    <td>


                                        <form action="{{route('cart.wishlistdelete',$item->rowId)}}" method="POST">
                                            {{csrf_field()}}
                                            {{method_field('DELETE')}}
                                            <button type="submit" title="Remove" class="btn btn-danger" ><i class="fa fa-times-circle"></i></button>
                                        </form>


                                        <form action="{{route('cart.wishlistcartadd')}}" method="POST" >
                                            {{csrf_field()}}
                                            <input type="hidden" name="id" value="{{$item->rowId}}">
                                            <button type="submit"  class="btn btn-danger" style="width:90px;" >Add</button>
                                        </form>


                                    </td>
                                </tr>
                        @endforeach
                        @else
                            <tbody>
                            <h3 style="color:red">NO item in the Wishlist!!</h3>
                            </tbody>
                            @endif

                            </tbody>
                    </table>



                </div>

                <script type="text/javascript">
                </script>

                <div class="buttons clearfix">
                    <div class="pull-left"><a href="{{route('index')}}" class="btn btn-default">Continue Shopping</a></div>

                </div>
            </div>
        </div>
    </div>
@endsection