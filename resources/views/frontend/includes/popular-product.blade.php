<div class="row home_row">
    <div id="content" class="col-sm-12">
        <div class="hometab box">
            <div class="container">
                <div class="tab-head">
                    <div class="hometab-heading box-heading">Popular Products</div>



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


                       @foreach($pros as $pro)
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




                                             <form action="{{--{{route('cart.store')}}--}}" method="POST">
                                                    {{csrf_field()}}
                                                    <input type="hidden" id="pid{{$pro->id}}" name="id" value="{{$pro->id}}">
                                                    <input type="hidden" id="pn{{$pro->id}}"  name="proname" value="{{$pro->proname}}">
                                                    <input type="hidden"  id="price{{$pro->id}}" name="price" value="{{$pro->price}}">
                                                    <input type="hidden"  name="quantity" value="1">
                                                    <input type="hidden" name="image" value="{{$pro->promain}}">

                                                 <button type="button" class="addtocart" id="hello{{$pro->id}}">
                                                        <i class="fa fa-shopping-cart"></i><span>Add to Cart</span></button>

                                              </form>




                                                <script src="https://code.jquery.com/jquery-2.2.4.min.js"
                                                        integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44="
                                                        crossorigin="anonymous"></script>



                                                <script type="text/javascript">

                                                    $(document).ready(function(){

                                                        $('#hello{{$pro->id}}').click(function(){
                                                            var a = $("#pid{{$pro->id}}").val();
                                                            var b = $("#pn{{$pro->id}}").val();
                                                            var c = $("#price{{$pro->id}}").val();

                                                            $.ajax({
                                                                type: "POST",
                                                                url:'{{route('cart.store')}}',
                                                                headers: {
                                                                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                                                                },
                                                                data:{'id':a,'proname':b,'price':c},

                                                                success:function(counts){

                                                                    $('#cart-total').load(location.href + ' #cart-total');





                                                                }

                                                            });
                                                        });

                                                    });

                                                </script>



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



                            </div>
                        </div>
                    </div>

                    <center> {!!   $pros->render() !!}</center>
                    <span class="tablatest_default_width" style="display:none; visibility:hidden"></span>
                </div>
            </div>
        </div>
