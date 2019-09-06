@extends('frontend.includes.master2')


@section('body')



<div class="container">
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
                            <td class="text-left">Product Price</td>
                            <td class="text-left">Quantity</td>
                            <td class="text-left">Sub-Total</td>
                            <td class="text-left">Action</td>

                        </tr>
                        </thead>
                        <tbody>

                        @if(Cart::count()>0)

                            <h5>{{Cart::count()}} Item has been added!!!</h5>

                            @foreach(Cart::content() as $item)
                                <tr>

                                    <td class="text-center">{{--<a href="#">--}}<img src="{{URL::to('/frontend/image/product/'.$item->model->promain)}}" alt="{{$item->model->promain}}"  class="img-thumbnail" />{{--</a>--}}
                                    </td>

                                    <td class="text-left">{{--<a href="#">--}}{{$item->name}} {{--</a>--}}

                                    </td>

                                    <td class="text-left"><span id="price">{{$item->price}}</span></td>

                                    <td>

                                        <input type="hidden" value="{{$item->rowId}}" id="hidden{{$item->id}}">
                                        <input type="number" style="width:50px;height:30px;" min="1"  value="{{$item->qty}}" class="qty{{$item->id}}">
                                    </td>




                                    <script type="text/javascript">

                                        $(document).ready(function(){
                                            $(".qty{{$item->id}}").on('change keyup', function(){
                                                var a =   $(".qty{{$item->id}}").val();
                                                var b =   $("#hidden{{$item->id}}").val();
                                                $.ajax({

                                                    url : '{{URL::to('cart-update')}}',
                                                    data: {'id': b,'qty':a},
                                                    type : 'get',
                                                    success : function(datas){

                                                        /*console.log(datas);*/

                                                        $("#total{{$item->id}}").empty();
                                                        $("#total{{$item->id}}").append('<span id="total"> '+datas.subtotal+'</span>');
                                                        $("#ototal").load(location.href + ' #ototal');
                                                        $('#cart-total').load(location.href + ' #cart-total');

                                                    }


                                                });
                                            });
                                        });

                                    </script>



                                    <td>Rs.<span id="total{{$item->id}}">{{$item->subtotal()}}</span></td>


                                    <td>


                                        <form action="{{route('cart.delete',$item->rowId)}}" method="POST">
                                            {{csrf_field()}}
                                            {{method_field('DELETE')}}
                                            <button type="submit" title="Remove" class="btn btn-danger" ><i class="fa fa-times-circle"></i></button>
                                        </form>




                                    </td>



                                </tr>



                        @endforeach



                        @else
                            <tbody>
                            <h3 style="color:red">NO item in the Cart!!</h3>
                            </tbody>
                            @endif

                            </tbody>



                    </table>



                </div>

                <script type="text/javascript">
                </script>

                <div class="buttons clearfix" >
                    <div class="pull-left"><a href="{{route('index')}}" class="btn btn-default">Continue Shopping</a></div>
                    <div class="pull-right"><a href="{{route('checkout')}}" class="btn btn-primary">Checkout</a></div>&nbsp;&nbsp;&nbsp;
                    <div class="pull-right" id="ototal"><a class="btn btn-success">Total : {{cart::total()}} </a></div>
                </div>
            </div>
        </div>
    </div>
@endsection