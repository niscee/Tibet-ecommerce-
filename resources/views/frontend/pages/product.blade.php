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

</script><div class="container ">
    <ul class="breadcrumb">
        <li><a href="{{route('index')}}"><i class="fa fa-home"></i></a></li>
        <li>{{$catacollection->category}}</li>
    </ul>
    <div class="row">
     @include('frontend.includes.sidebar')


       {{-- <div id="content" class="col-sm-9">

            <h2 class="page-title">{{$catacollection->category}}</h2>

            <div class="category_filter">
                <div class="col-md-4 btn-list-grid" style="margin-left:800px">
                    <div class="btn-group">
                        <button type="button" id="grid-view" class="btn btn-default grid" data-toggle="tooltip" title="Grid"><i class="fa fa-th"></i></button>
                        <button type="button" id="list-view" class="btn btn-default list" data-toggle="tooltip" title="List"><i class="fa fa-th-list"></i></button>
                    </div>
                </div>--}}
                <div id="content" class="col-sm-9">
                    <div class="category_filter">
                        <div class="col-md-6 btn-list-grid">
                            <div class="btn-group">
                                <div class="col-md-6 text-right sort-by">
                                    <h2 class="page-title">{{$catacollection->category}}</h2>
                                </div>
                            </div>
                        </div>
                        <div class="pagination-right">
                            <div class="sort-by-wrapper">
                                <button type="button" id="grid-view" class="btn btn-default grid" data-toggle="tooltip" title="Grid"><i class="fa fa-th"></i></button>
                                <button type="button" id="list-view" class="btn btn-default list" data-toggle="tooltip" title="List"><i class="fa fa-th-list"></i></button>
                            </div>
                        </div>
                    </div>


            <div class="row cat_prod">
                @foreach($pros as $pro)
                <div class="product-layout product-list col-xs-12">
                    <div class="product-block product-thumb">
                        <div class="product-block-inner">
                            <div class="image">
                                <a href="{{route('product-details',['slug'=>$pro->slug])}}">
                                    <img src="{{URL::to('/frontend/image/product/'.$pro->promain)}}"  style="height:200px; width:300px;" title="{{$pro->proname}}"  class="img-responsive reg-image"/>
                                </a>
                                <div class="button-group">
                                    <span>

                                        <form action="{{route('cart.wishlist')}}" method="POST">

                                                 {{csrf_field()}}
                                            <input type="hidden" name="id" value="{{$pro->id}}">
                                    <input type="hidden" name="proname" value="{{$pro->proname}}">
                                    <input type="hidden" name="price" value="{{$pro->price}}">
                                    <input type="hidden" name="quantity" value="1">
                                    <input type="hidden" name="image" value="{{$pro->promain}}">
                                    <button type="submit" class="wishlist" data-toggle="tooltip" title="" onclick="wishlist.add('47');" data-original-title="Add to Wish List"><i class="fa fa-heart"></i></button>	 </div>
                                </form>



                                <form action="{{route('cart.store')}}" method="POST">
                                    {{csrf_field()}}
                                    <input type="hidden" name="id" value="{{$pro->id}}">
                                    <input type="hidden" name="proname" value="{{$pro->proname}}">
                                    <input type="hidden" name="price" value="{{$pro->price}}">
                                    <input type="hidden" name="quantity" value="1">
                                    <input type="hidden" name="image" value="{{$pro->promain}}">

                                    <button type="submit" class="addtocart">
                                        <i class="fa fa-shopping-cart"></i><span>Add to Cart</span></button>

                                </form>

                                </span>



                            </div>
                            <div class="product-details">
                                <div class="caption">
                                    <h4><a href="{{route('product-details',['slug'=>$pro->slug])}}">{{$pro->proname}}</a></h4>
                                    <div class="rating list-rate">
                                        <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                        <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                        <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                        <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                        <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                    </div>
                                    <p class="desc">{{$pro->description}}</p>

                                    <div class="rating">
                                        @for($star = 1; $star <= 5; $star++)
                                            @if($pro->rating >= $star)
                                                <span class="fa fa-stack"><i class="fa fa-star  fa-stack-2x"></i></span>
                                            @else
                                                <span class="fa fa-stack"><i class="fa fa-half-star  fa-stack-2x"></i></span>
                                            @endif
                                        @endfor
                                    </div>
                                    <a href="{{route('inquiry',['slug'=>$pro->slug])}}"><button class="wishlist" type="button" >Price: Inquiry Now </button></a>
<br>
                                    <form action="{{route('cart.store')}}" method="POST">
                                        {{csrf_field()}}
                                        <input type="hidden" id="pid{{$pro->id}}" name="id" value="{{$pro->id}}">
                                        <input type="hidden" id="pn{{$pro->id}}"  name="proname" value="{{$pro->proname}}">
                                        <input type="hidden"  id="price{{$pro->id}}" name="price" value="{{$pro->price}}">
                                        <input type="hidden"  name="quantity" value="1">
                                        <input type="hidden" name="image" value="{{$pro->promain}}">

                                        <button type="submit" class="addtocart" id="hello{{$pro->id}}" style="width:128px;font-size:10px;">
                                            <i class="fa fa-shopping-cart"></i><span><b>Add to Cart</b></span></button>

                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>



            {{$pros->links()}}
        </div>
    </div>
</div>
</div>
</div>
@endsection