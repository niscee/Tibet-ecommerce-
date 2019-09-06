
<footer>


    <div class="footerbefore">
        <div class="container">
            <div class="newsletter">
                <h5 class="news-title">Get our latest news and special sales</h5>
                <div class="newsright">


            {{--        @if( Session::has("success") )
                        <div class="alert alert-success alert-block" role="alert">
                            <button class="close" data-dismiss="alert"></button>
                            {{ Session::get("success") }}
                        </div>
                    @endif


                    @if( Session::has("error") )
                        <div class="alert alert-danger alert-block" role="alert">
                            <button class="close" data-dismiss="alert"></button>
                            {{ Session::get("error") }}
                        </div>
                    @endif--}}



                       <form action="{{route('subscribe')}}" method="POST">
                             {{csrf_field()}}
                        <div class="form-group required">
                            <label class="col-sm-2 control-label ">Email</label>
                            <div class="input-news">
                                <input type="email" name="email"  placeholder="Enter Your Email Address" class="form-control input-lg emailsent" />
                            </div>
                            <div class="subscribe-btn">
                                <button type="submit" class="btn btn-default btn-lg submit" style="height:46px;">Subscribe</button>
                            </div>
                        </div>

                       </form>




{{--                    <script src="https://code.jquery.com/jquery-2.2.4.min.js"
                            integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44="
                            crossorigin="anonymous"></script>



                    <script type="text/javascript">


                    $('.submit').click(function(){
                    var c = $(".emailsent").val();

                        $.ajax({
                            type: "POST",
                            url:'{{URL::to('subscribe')}}',
                            headers: {
                                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                            },
                            data:{'email':c},
                            success:function(data){
                                location.reload();
                            }

                        })


                    });

</script>--}}
                </div>
            </div>
        </div>
    </div>

    <div id="footer">
        <div class="container">
            <div class="row">
                <div class="footer-blocks">
                    <div id="info" class="col-sm-3 column">
                        <h5>Membership </h5>

                        <ul class="list-unstyled">
                            @foreach($membs as $mem)
                            <a href="{{$mem->url}}"><img src="{{URL::to('/frontend/image/member/'.$mem->image)}}"  width="100" height="100px;"></a>
                            @endforeach
                        </ul>

                    </div>



                    <div id="extra-link" class="col-sm-3 column">
                        <h5>Associate Company</h5>

                        <ul class="list-unstyled">
                            <li>{{$assos->cname}}</li>
                            <li>{{$assos->address}} </li>
                            <li>Phone: 01-{{$assos->phone}}</li>
                            <li>Email: {{$assos->email}}</li>
                            <li>Website: {{$assos->website}}</li>
                        </ul>
                    </div>


                    <div id="info" class="col-sm-3 column">
                        <h5>Information</h5>
                        @foreach($informations as $information)
                        <ul class="list-unstyled">
                            <li><a href="{{route('infos',['slug'=>$information->slug])}}">{{$information->title}}</a></li>
                        </ul>
                            @endforeach
                    </div>

                    <div class="col-sm-3 column">
                        <h5>Contact Details</h5>
                        <ul class="list-unstyled">
                            <li>{{$sites->cname}}</li>
                            <li>{{$sites->address}}</li>
                            <li>Phone:  977-{{$sites->phone}}</li>
                            <li>Email: {{$sites->emailone}}<br/> {{$sites->emailtwo}}</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <div class="bottomfooter">
            <div class="container">
                <div class="row">
                    <p class="powered"> ©Copyright Tibetan Handicraf & Paper Pvt. Ltd. All Rights Reserved. Powered By: <a href="http://grafiastech.com" target="_blank"> Grafias Technology</a> </p>
                    <div class="paiement_logo_block footer-block">
                        <span>Follow Us:</span>
                        <a href="{{$sites->fblink}}"><img src="{{URL::to('frontend/images/catalog/facebook.png')}}" alt="Facebook" width="30" height="30"></a>
                        <a href="{{$sites->fblink}}"><img src="{{URL::to('frontend/images/catalog/instagram.png')}}" alt="Instagram" width="30" height="30"></a>
                        <a href="{{$sites->fblink}}"><img src="{{URL::to('frontend/images/catalog/google.png')}}" alt="Google" width="30" height="30"></a>
                        <a href="{{$sites->fblink}}"><img src="{{URL::to('frontend/images/catalog/twitter.png')}}" alt="Twitter" width="30" height="30"></a>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <link href="{{URL::to('/frontend/javascript/jquery/owl-carousel/owl.carousel.css')}}" type="text/css" rel="stylesheet" media="screen" />
    <link href="{{URL::to('/frontend/javascript/jquery/owl-carousel/owl.transitions.css')}}" type="text/css" rel="stylesheet" media="screen" />
    <script type="text/javascript" src="{{URL::to('/frontend/javascript/codezeel/custom.js')}}"></script>
    <script type="text/javascript" src="{{URL::to('/frontend/javascript/codezeel/jstree.min.js')}}"></script>
    <script type="text/javascript" src="{{URL::to('/frontend/javascript/codezeel/carousel.min.js')}}"></script>
    <script type="text/javascript" src="{{URL::to('/frontend/javascript/codezeel/codezeel.min.js')}}"></script>
    <script type="text/javascript" src="{{URL::to('/frontend/javascript/codezeel/jquery.custom.min.js')}}"></script>
    <script type="text/javascript" src="{{URL::to('/frontend/javascript/codezeel/jquery.formalize.min.js')}}"></script>
    <script type="text/javascript" src="{{URL::to('/frontend/javascript/lightbox/lightbox-2.6.min.js')}}"></script>
    <script type="text/javascript" src="{{URL::to('/frontend/javascript/codezeel/tabs.js')}}"></script>
    <script type="text/javascript" src="{{URL::to('/frontend/javascript/codezeel/jquery.elevatezoom.min.js')}}"></script>
    <script type="text/javascript" src="{{URL::to('/frontend/javascript/codezeel/bootstrap-notify.min.js')}}"></script>
    <script type="text/javascript" src="{{URL::to('/frontend/javascript/codezeel/jquery-migrate-1.2.1.min.js')}}"></script>
    <script type="text/javascript" src="{{URL::to('/frontend/javascript/codezeel/jquery.easing.1.3.js')}}"></script>
    <script type="text/javascript" src="{{URL::to('/frontend/javascript/codezeel/doubletaptogo.js')}}"></script>
    <script type="text/javascript" src="{{URL::to('/frontend/javascript/codezeel/parallax.js')}}"></script>
    <script type="text/javascript" src="{{URL::to('/frontend/javascript/jquery/magnific/jquery.magnific-popup.min.js')}}"></script>

</footer>

</body>
</html>