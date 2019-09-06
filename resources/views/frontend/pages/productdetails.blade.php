@extends('frontend.includes.master2')
<body class="product-product-47 layout-1">
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
            <li>{{$prodetails->proname}}</li>
        </ul>

        <div class="row">
            <div id="content" class="productpage col-sm-12">
                <div class="row">
                    <div class="col-sm-5 product-left">
                        <div class="product-info">
                            <div class="left product-image thumbnails">

                                <!-- Codezeel Cloud-Zoom Image Effect Start -->
                                <div class="image"><a class="thumbnail elevatezoom-gallery" href="{{URL::to('/frontend/image/product/'.$prodetails->promain)}}" title="{{$prodetails->proname}}" target="_blank" ><img id="czzoom" src="{{URL::to('/frontend/image/product/'.$prodetails->promain)}}"  style="width:600px; height:400px;" data-zoom-image="{{URL::to('/frontend/image/product/'.$prodetails->promain)}}"  alt="{{$prodetails->proname}}" /></a></div>

                                <div class="additional-carousel">
                                    <div class="customNavigation">
                                        <a class="fa prev"></a>
                                        <a class="fa next"></a>
                                    </div>

                                    <div id="additional-carousel" class="image-additional product-carousel">

                                        <div class="slider-item">
                                            <div class="product-block">
                                                <a href="{{URL::to('/frontend/image/product/'.$prodetails->promain)}}"
                                                   target="_blank" title="{{$prodetails->proname}}" class="elevatezoom-gallery"
                                                   data-image="{{URL::to('/frontend/image/product/'.$prodetails->promain)}}"
                                                   data-zoom-image="{{URL::to('/frontend/image/product/'.$prodetails->promain)}}">
                                                    <img src="{{URL::to('/frontend/image/product/'.$prodetails->promain)}}" width="95" height="95"
                                                         title="{{$prodetails->proname}}" alt="{{$prodetails->proname}}" /></a>
                                            </div>
                                        </div>

                                        @foreach($prodetails->Pimage as $pimg)
                                            <div class="slider-item">
                                                <div class="product-block">
                                                 {{--   <a href="{{URL::to('/frontend/image/product/'.$prodetails->promain)}}"
                                                       target="_blank" title="{{$prodetails->proname}}" class="elevatezoom-gallery"
                                                       data-image="{{URL::to('/frontend/image/product/'.$prodetails->promain)}}"
                                                       data-zoom-image="{{URL::to('/frontend/image/product/'.$prodetails->promain)}}">
                                                        <img src="{{URL::to('/frontend/image/product/'.$prodetails->promain)}}" width="95" height="95"
                                                             title="{{$prodetails->proname}}" alt="{{$prodetails->proname}}" /></a>--}}

                                                        <a href="{{URL::to('/frontend/image/product/'.$pimg->proextra)}}" target="_blank" title="{{$prodetails->proname}}" class="elevatezoom-gallery" data-image="{{URL::to('/frontend/image/product/'.$pimg->proextra)}}" data-zoom-image="{{URL::to('/frontend/image/product/'.$pimg->proextra)}}"><img src="{{URL::to('/frontend/image/product/'.$pimg->proextra)}}" width="95" height="95" title="{{$prodetails->proname}}" alt="{{$prodetails->proname}}" /></a>

                                                </div>
                                            </div>
                                        @endforeach

                                    </div>
                                    <span class="additional_default_width" style="display:none; visibility:hidden"></span>
                                </div>


                                <!-- Codezeel Cloud-Zoom Image Effect End-->
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-7 product-right">
                        <h2 class="page-title">{{$prodetails->proname}}</h2>
                        <div class="rating-wrapper">
                            <span><strong>Product Review:</strong> </span>
                            @for($star = 1; $star <= 5; $star++)
                                @if($prodetails->rating >= $star)
                                    <span class="fa fa-stack"><i class="fa fa-star  fa-stack-2x"></i></span>
                                @else
                                    <span class="fa fa-stack"><i class="fa fa-half-star  fa-stack-2x"></i></span>
                                @endif
                            @endfor
                        </div>


                        <ul class="list-unstyled attr">
                            <li><span>Product Type:</span>{{$prodetails->protype}}</li>
                            <li><span>Product Code :</span>{{$prodetails->procode}}</li>
                            <li><span>Availability :</span> {{$prodetails->proav}}</li>
                        </ul>
                        <ul class="list-unstyled price">
                            <li>
                                <a href="{{route('inquiry',['slug'=>$prodetails->slug])}}"><button class="wishlist" type="button" >Price: Inquiry Now </button></a>
                            </li>
                        </ul>
                        <div id="product">
                            <div class="form-group qty">
                                {{--<label class="control-label" for="input-quantity">Qty</label>
                                <input type="text" name="quantity" value="1" size="2" id="input-quantity" class="form-control" />
                                <input type="hidden" name="product_id" value="47" />--}}
                                <!--<br />-->

                                  <span>
                                      <form action="{{route('cart.store')}}" method="POST">
                                        {{csrf_field()}}
                                        <input type="hidden" name="id" value="{{$prodetails->id}}">
                                        <input type="hidden" name="proname" value="{{$prodetails->proname}}">
                                        <input type="hidden" name="price" value="{{$prodetails->price}}">
                                        <input type="hidden" name="quantity" value="1">
                                        <input type="hidden" name="image" value="{{$prodetails->promain}}">

                                        <button type="submit" id="button-cart" data-loading-text="Loading..." class="btn btn-primary btn-lg btn-block">Add to Cart</button>

                                    </form>


                                                    <form action="{{route('cart.wishlist')}}" method="POST">
                                                        {{csrf_field()}}
                                                        <input type="hidden" name="id" value="{{$prodetails->id}}">
                                                        <input type="hidden" name="proname" value="{{$prodetails->proname}}">
                                                        <input type="hidden" name="price" value="{{$prodetails->price}}">
                                                        <input type="hidden" name="quantity" value="1">
                                                        <input type="hidden" name="image" value="{{$prodetails->promain}}">

                                                        <button class="btn btn-default wishlist" type="submit" title="Add to Wish List"
                                                                ;><i class="fa fa-heart"></i></button>
                                                    </form>


                                  </span>

                                    <!--<div class="btn-group">-->

                                <!--</div>-->
                            </div>
                        </div>
                        </li>
                        <iframe width="90%" height="250" src="{{$prodetails->video}}" frameborder="0" allowfullscreen="100%">
                        </iframe>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-12" id="tabs_info">
                    <h1 style="float: left">Description</h1>
                    <hr/>

                    <p style="float: left !important;" >{{$prodetails->details}}</p>

                </div>
                <div class="box">
                    <div class="box-head">
                        <div class="box-heading">Related Products</div>
                    </div>
                    <div class="box-content">
                        <div id="products-related" class="related-products">

                            <div class="customNavigation">
                                <a class="fa prev"></a>
                                <a class="fa next"></a>
                            </div>



                            <div class="box-product product-carousel" id="related-carousel">
                                @foreach($pcata as $pcat)
                                    <div class="slider-item">
                                        <div class="product-block product-thumb transition">
                                            <div class="product-block-inner">
                                                <div class="image">
                                                    <a href="{{route('product-details',['slug'=>$pcat->slug])}}">
                                                        <img src="{{URL::to('/frontend/image/product/'.$pcat->promain)}}" style="width:300px;height:200px;" title="Praesentium Voluptatum" alt="Praesentium Voluptatum" class="img-responsive reg-image"/>
                                                    </a>
                                                    <div class="button-group">
                                                        <form action="{{route('cart.wishlist')}}" method="POST">
                                                            {{csrf_field()}}
                                                            <input type="hidden" name="id" value="{{$pcat->id}}">
                                                            <input type="hidden" name="proname" value="{{$pcat->proname}}">
                                                            <input type="hidden" name="price" value="{{$pcat->price}}">
                                                            <input type="hidden" name="quantity" value="1">
                                                            <input type="hidden" name="image" value="{{$pcat->promain}}">

                                                            <button class="wishlist" type="submit" title="Add to Wish List" ;>
                                                                   <i class="fa fa-heart"></i></button>
                                                        </form>
                                                    </div>

                                                    <form action="{{route('cart.store')}}" method="POST">
                                                        {{csrf_field()}}
                                                        <input type="hidden" name="id" value="{{$pcat->id}}">
                                                        <input type="hidden" name="proname" value="{{$pcat->proname}}">
                                                        <input type="hidden" name="price" value="{{$pcat->price}}">
                                                        <input type="hidden" name="quantity" value="1">
                                                        <input type="hidden" name="image" value="{{$pcat->promain}}">

                                                        <button type="submit" class="addtocart">
                                                            <i class="fa fa-shopping-cart"></i><span>Add to Cart</span></button>

                                                    </form>
                                                </div>

                                                <div class="product-details">
                                                    <div class="caption">
                                                        <h4><a href="{{route('product-details',['slug'=>$pcat->slug])}}">{{$pcat->proname}}</a></h4>
                                                        <div class="price-box">
                                                            <div class="rating">
                                                                @for($star = 1; $star <= 5; $star++)
                                                                    @if($pcat->rating >= $star)
                                                                        <span class="fa fa-stack"><i class="fa fa-star  fa-stack-2x"></i></span>
                                                                    @else
                                                                        <span class="fa fa-stack"><i class="fa fa-half-star  fa-stack-2x"></i></span>
                                                                    @endif
                                                                @endfor
                                                            </div>
                                                            <a href="{{route('inquiry',['slug'=>$pcat->slug])}}"><button class="wishlist" type="button" >Price: Inquiry Now </button></a>
                                                        </div>
                                                    </div>
                                                    <span class="related_default_width" style="display:none; visibility:hidden"></span>
                                                    <!-- Codezeel Related Products Start -->
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <script type="text/javascript"><!--
        $('select[name=\'recurring_id\'], input[name="quantity"]').change(function(){
            $.ajax({
                url: 'index.php?route=product/product/getRecurringDescription',
                type: 'post',
                data: $('input[name=\'product_id\'], input[name=\'quantity\'], select[name=\'recurring_id\']'),
                dataType: 'json',
                beforeSend: function() {
                    $('#recurring-description').html('');
                },
                success: function(json) {
                    $('.alert, .text-danger').remove();

                    if (json['success']) {
                        $('#recurring-description').html(json['success']);
                    }
                }
            });
        });
        //--></script>
    <script type="text/javascript"><!--
        $('#button-cart').on('click', function() {
            $.ajax({
                url: 'index.php?route=checkout/cart/add',
                type: 'post',
                data: $('#product input[type=\'text\'], #product input[type=\'hidden\'], #product input[type=\'radio\']:checked, #product input[type=\'checkbox\']:checked, #product select, #product textarea'),
                dataType: 'json',
                beforeSend: function() {
                    $('#button-cart').button('loading');
                },
                complete: function() {
                    $('#button-cart').button('reset');
                },
                success: function(json) {
                    $('.alert, .text-danger').remove();
                    $('.form-group').removeClass('has-error');

                    if (json['error']) {
                        if (json['error']['option']) {
                            for (i in json['error']['option']) {
                                var element = $('#input-option' + i.replace('_', '-'));

                                if (element.parent().hasClass('input-group')) {
                                    element.parent().before('<div class="text-danger">' + json['error']['option'][i] + '</div>');
                                } else {
                                    element.before('<div class="text-danger">' + json['error']['option'][i] + '</div>');
                                }
                            }
                        }

                        if (json['error']['recurring']) {
                            $('select[name=\'recurring_id\']').after('<div class="text-danger">' + json['error']['recurring'] + '</div>');
                        }

                        // Highlight any found errors
                        $('.text-danger').parent().addClass('has-error');
                    }

                    if (json['success']) {
                        $.notify({
                            message: json['success'],
                            target: '_blank'
                        },{
                            // settings
                            element: 'body',
                            position: null,
                            type: "info",
                            allow_dismiss: true,
                            newest_on_top: false,
                            placement: {
                                from: "top",
                                align: "center"
                            },
                            set: 0,
                            spacing: 10,
                            z_index: 2031,
                            delay: 5000,
                            timer: 1000,
                            url_target: '_blank',
                            mouse_over: null,
                            animate: {
                                enter: 'animated fadeInDown',
                                exit: 'animated fadeOutUp'
                            },
                            onShow: null,
                            onShown: null,
                            onClose: null,
                            onClosed: null,
                            icon_type: 'class',
                            template: '<div data-notify="container" class="col-xs-11 col-sm-3 alert alert-success" role="alert">' +
                            '<button type="button" aria-hidden="true" class="close" data-notify="dismiss">&nbsp;&times;</button>' +
                            '<span data-notify="message"><i class="fa fa-check-circle"></i>&nbsp; {2}</span>' +
                            '<div class="progress" data-notify="progressbar">' +
                            '<div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 0%;"></div>' +
                            '</div>' +
                            '<a href="{3}" target="{4}" data-notify="url"></a>' +
                            '</div>'
                        });

                        $('#cart > button').html('<i class="fa fa-shopping-cart"></i> ' + json['total']);

                        //$('html, body').animate({ scrollTop: 0 }, 'slow');

                        $('#cart > ul').load('index.php?route=common/cart/info ul li');
                    }
                }
            });
        });
        //--></script>
    <script type="text/javascript"><!--
        $('.date').datetimepicker({
            pickTime: false
        });

        $('.datetime').datetimepicker({
            pickDate: true,
            pickTime: true
        });

        $('.time').datetimepicker({
            pickDate: false
        });

        $('button[id^=\'button-upload\']').on('click', function() {
            var node = this;

            $('#form-upload').remove();

            $('body').prepend('<form enctype="multipart/form-data" id="form-upload" style="display: none;"><input type="file" name="file" /></form>');

            $('#form-upload input[name=\'file\']').trigger('click');

            if (typeof timer != 'undefined') {
                clearInterval(timer);
            }

            timer = setInterval(function() {
                if ($('#form-upload input[name=\'file\']').val() != '') {
                    clearInterval(timer);

                    $.ajax({
                        url: 'index.php?route=tool/upload',
                        type: 'post',
                        dataType: 'json',
                        data: new FormData($('#form-upload')[0]),
                        cache: false,
                        contentType: false,
                        processData: false,
                        beforeSend: function() {
                            $(node).button('loading');
                        },
                        complete: function() {
                            $(node).button('reset');
                        },
                        success: function(json) {
                            $('.text-danger').remove();

                            if (json['error']) {
                                $(node).parent().find('input').after('<div class="text-danger">' + json['error'] + '</div>');
                            }

                            if (json['success']) {
                                alert(json['success']);

                                $(node).parent().find('input').val(json['code']);
                            }
                        },
                        error: function(xhr, ajaxOptions, thrownError) {
                            alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);
                        }
                    });
                }
            }, 500);
        });
        //--></script>
    <script type="text/javascript"><!--
        $('#review').delegate('.pagination a', 'click', function(e) {
            e.preventDefault();

            $('#review').fadeOut('slow');

            $('#review').load(this.href);

            $('#review').fadeIn('slow');
        });

        $('#review').load('index.php?route=product/product/review&product_id=47');

        $('#button-review').on('click', function() {
            $.ajax({
                url: 'index.php?route=product/product/write&product_id=47',
                type: 'post',
                dataType: 'json',
                data: $("#form-review").serialize(),
                beforeSend: function() {
                    $('#button-review').button('loading');
                },
                complete: function() {
                    $('#button-review').button('reset');
                },
                success: function(json) {
                    $('.alert-success, .alert-danger').remove();

                    if (json['error']) {
                        $('#review').after('<div class="alert alert-danger"><i class="fa fa-exclamation-circle"></i> ' + json['error'] + '</div>');
                    }

                    if (json['success']) {
                        $('#review').after('<div class="alert alert-success"><i class="fa fa-check-circle"></i> ' + json['success'] + '</div>');

                        $('input[name=\'name\']').val('');
                        $('textarea[name=\'text\']').val('');
                        $('input[name=\'rating\']:checked').prop('checked', false);
                    }
                }
            });
        });

        /*$(document).ready(function() {
         $('.thumbnails').magnificPopup({
         type:'image',
         delegate: 'a',
         gallery: {
         enabled:true
         }
         });
         });*/
        $(document).ready(function() {
            if ($(window).width() > 767) {
                $("#czzoom").elevateZoom({

                    gallery:'additional-carousel',
                    //inner zoom

                    zoomType : "inner",
                    cursor: "zoom-in"

                    /*//tint

                     tint:true,
                     tintColour:'#F90',
                     tintOpacity:0.5

                     //lens zoom

                     zoomType : "lens",
                     lensShape : "round",
                     lensSize : 200

                     //Mousewheel zoom

                     scrollZoom : true*/


                });
                var z_index = 0;

                $(document).on('click', '.thumbnail', function () {
                    $('.thumbnails').magnificPopup('open', z_index);
                    return false;
                });

                $('.additional-carousel a').click(function() {
                    var smallImage = $(this).attr('data-image');
                    var largeImage = $(this).attr('data-zoom-image');
                    var ez =   $('#czzoom').data('elevateZoom');
                    $('.thumbnail').attr('href', largeImage);
                    ez.swaptheimage(smallImage, largeImage);
                    z_index = $(this).index('.additional-carousel a');
                    return false;
                });

            }else{
                $(document).on('click', '.thumbnail', function () {
                    $('.thumbnails').magnificPopup('open', 0);
                    return false;
                });
            }
        });
        $(document).ready(function() {
            $('.thumbnails').magnificPopup({
                delegate: 'a.elevatezoom-gallery',
                type: 'image',
                tLoading: 'Loading image #%curr%...',
                mainClass: 'mfp-with-zoom',
                gallery: {
                    enabled: true,
                    navigateByImgClick: true,
                    preload: [0,1] // Will preload 0 - before current, and 1 after the current image
                },
                image: {
                    tError: '<a href="%url%">The image #%curr%</a> could not be loaded.',
                    titleSrc: function(item) {
                        return item.el.attr('title');
                    }
                }
            });
        });
        //--></script>

@endsection