<div class="box featured">
    <div class="container">
        <div class="box-head">
            <div class="box-heading">Latest Products</div>
        </div>
        <div class="box-content">
            <div class="customNavigation">
                <a class="fa prev"></a>
                <a class="fa next"></a>
            </div>

            <div class="box-product product-carousel" id="related-carousel">
                @foreach($latests as $late)
                <div class="slider-item">
                    <div class="product-block product-thumb transition">

                        <div class="product-block-inner">
                            <div class="image">
                                <a href="{{route('product-details',['slug'=>$late->slug])}}">
                                    <img src="{{URL::to('/frontend/image/product/'.$late->promain)}}" style="height:200px;width:400px;" title="Voluptas Assumenda" alt="Voluptas Assumenda" class="img-responsive reg-image"/>
                                </a>
                                <div class="button-group">
                                    <div class="button-group">
                                        <form action="{{route('cart.wishlist')}}" method="POST">
                                            {{csrf_field()}}
                                            <input type="hidden" name="id" value="{{$late->id}}">
                                            <input type="hidden" name="proname" value="{{$late->proname}}">
                                            <input type="hidden" name="price" value="{{$late->price}}">
                                            <input type="hidden" name="quantity" value="1">
                                            <input type="hidden" name="image" value="{{$late->promain}}">

                                            <button class="wishlist" type="submit" data-toggle="tooltip" title="Add to Wish List"
                                                    ;><i class="fa fa-heart"></i></button>
                                        </form>
                                    </div>
                                </div>
                                <form action="{{route('cart.store')}}" method="POST">
                                    {{csrf_field()}}
                                    <input type="hidden" name="id" value="{{$late->id}}">
                                    <input type="hidden" name="proname" value="{{$late->proname}}">
                                    <input type="hidden" name="price" value="{{$late->price}}">
                                    <input type="hidden" name="quantity" value="1">
                                    <input type="hidden" name="image" value="{{$late->promain}}">

                                    <button type="submit" class="addtocart">
                                        <i class="fa fa-shopping-cart"></i><span>Add to Cart</span></button>

                                </form>
                            </div>
                            <div class="product-details">
                                <div class="caption">
                                    <h4><a href="{{route('product-details',['slug'=>$late->slug])}}">{{$late->proname}}</a></h4>
                                    <div class="price-box">

                                        <div class="rating">
                                            @for($star = 1; $star <= 5; $star++)
                                                 @if($late->rating >= $star)
                                            <span class="fa fa-stack"><i class="fa fa-star  fa-stack-2x"></i></span>
                                             @else
                                                    <span class="fa fa-stack"><i class="fa fa-half-star  fa-stack-2x"></i></span>
                                                @endif
                                            @endfor



                     {{--                       <span class="fa fa-stack"><i class="fa fa-star  fa-stack-2x"></i></span>
                                            <span class="fa fa-stack"><i class="fa fa-star  fa-stack-2x"></i></span>
                                            <span class="fa fa-stack"><i class="fa fa-star  fa-stack-2x"></i></span>
                                            <span class="fa fa-stack"><i class="fa fa-star  fa-stack-2x"></i></span>--}}
                                        </div>
                                        <a href="{{route('inquiry',['slug'=>$late->slug])}}"><button class="wishlist" type="button" >Price: Inquiry Now </button></a>
                                    </div>
                                </div>
                            </div>
                            <span class="related_default_width" style="display:none; visibility:hidden"></span>
                            <!-- Codezeel Related Products Start -->
                        </div>

                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
    <span class="featured_default_width" style="display:none; visibility:hidden"></span>
</div>








</div>
<div id="czbannercmsblock" class="block czbanners">
    <div class="czbanner_container container">
        <div class="cmsbanners">
            <div class="cmsbanner-part1">
                <div class="cmsbanner-inner">
                    <div class="cmsbanner cmsbanner1"><a href="{{$brows->url1}}"><img src="{{URL::to('frontend/image/browser/'.$brows->title1)}}" alt="cms-banner1" class="banner-image1" style="height:430px;"></a></div>
                </div>
            </div>
            <div class="cmsbanner-part2">
                <div class="cmsbanner-inner banner-bottom">
                    <div class="cmsbanner cmsbanner2"><a href="{{$brows->url2}}"><img src="{{URL::to('frontend/image/browser/'.$brows->title2)}}" alt="cms-banner2" class="banner-image2" style="height:200px;width:680px;"></a></div>
                </div>
                <div class="cmsbanner-inner banner-top">
                    <div class="cmsbanner cmsbanner3"><a href="{{$brows->url3}}"><img src="{{URL::to('frontend/image/browser/'.$brows->title3)}}" alt="cms-banner3" class="banner-image3" style="height:200px;"></a></div>
                    <div class="cmsbanner cmsbanner4"><a href="{{$brows->url4}}"><img src="{{URL::to('frontend/image/browser/'.$brows->title4)}}" alt="cms-banner4" class="banner-image4" style="height:200px;"></a></div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
{{--

@--}}
{{--if(session('ok'))


          <p class="alert alert-success" style="width:800px;margin-left:300px;margin-top:50px;">{{session('ok')}}</p></strong>

@endif





@if(session('sorry'))

        <p class="alert alert-danger" style="width:800px;margin-left:300px;margin-top:50px;">  {{session('sorry')}} </p></strong>

@endif--}}--}}
