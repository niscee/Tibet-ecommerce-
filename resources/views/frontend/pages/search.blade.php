@extends('frontend.includes.master2')

@section('body')

<div class="container">
<div class="row home_row">
    <div id="content" class="col-sm-12">
        <div class="hometab box">
            <div class="container">
                <div class="tab-head">
                    <div class="hometab-heading box-heading">Search Results:</div>



                    @if(session('success'))
                        <center>
                            <div class="alert alert-success alert-dismissible" style="width:800px;margin-left:320px;margin-top:50px;">
                                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                                <strong>{{session('success')}}</strong>
                            </div>

                        </center>

                    @endif
                </div>


                <div id="tab-latest" class="tab-content">
                    <div class="box">
                        <div class="box-content">


                            <div class="box-product productbox-grid" id="tablatest-grid">

                       @if(Count($results) > 0)



                                @foreach($results as $pro)
                                    <div class="product-items">
                                        <div class="product-block product-thumb transition">
                                            <div class="product-block-inner">


                                                <div class="image">
                                                    <a href="{{route('product-details',['slug'=>$pro->slug])}}">
                                                        <img src="{{URL::to('/frontend/image/product/'.$pro->promain)}}" title="{{$pro->proname}}" alt="{{$pro->proname}}" class="img-responsive reg-image" style="height:200px;"/>
                                                    </a>




                                                    <div class="button-group">
                                                        <form action="{{route('cart.wishlist')}}" method="POST">
                                                            {{csrf_field()}}
                                                            <input type="hidden" name="id" value="{{$pro->id}}">
                                                            <input type="hidden" name="proname" value="{{$pro->proname}}">
                                                            <input type="hidden" name="price" value="{{$pro->price}}">
                                                            <input type="hidden" name="quantity" value="1">
                                                            <input type="hidden" name="image" value="{{$pro->promain}}">

                                                            <button class="wishlist" type="submit" data-toggle="tooltip" title="Add to Wish List"
                                                                    ;><i class="fa fa-heart"></i></button>
                                                        </form>
                                                    </div>




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
                                                </div>

                                                <div class="product-details">
                                                    <div class="caption">

                                                        <h4><a href="{{route('product-details',['slug'=>$pro->slug])}}">{{$pro->proname}}</a></h4>


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
                                                    </div>
                                                </div>

                                            </div>
                                        </div>



                                    </div>



                                @endforeach




                           @else
                               <center> <h1>Sorry!! No results Found</h1></center>


                           @endif
                            </div>
                        </div>
                    </div>
                 {{--<center>{{$results->links()}}</center>--}}
                  <center>  {{$results->appends(Request::only('search'))->links()}} </center>

                    <span class="tablatest_default_width" style="display:none; visibility:hidden"></span>
                </div>
            </div>
        </div>
        <script type="text/javascript">
            $('#tabs a').tabs();
        </script>

    </div>
</div>
</div>
@endsection