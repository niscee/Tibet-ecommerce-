
@extends('frontend.includes.master2')

<body class="product-product-47 layout-1">
@section('body')




<!-- ======= Quick view JS ========= -->
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
        <li>Contact Us</li>
    </ul>

    @include('frontend.includes.sidebar')

        <div id="content" class="col-sm-9">
            <h1 class="page-title">Contact Us</h1>

            <div class="panel panel-default">
                <div class="panel-body">
                    <div class="row contact-info">
                        <div class="left">
                            <h3>Cotact Details</h3>
                            <ul class="list-unstyled">
                                <li><a href="#">{{$sites->cname}}</a></li>
                                <li><a href="#">{{$sites->address}}</a></li>
                                <li><a href="#">Phone:  977-{{$sites->phone}}</a></li>
                                <li><a href="#">Email: {{$sites->emailone}}<br/> {{$sites->emailtwo}}</a></li>
                            </ul>
                        </div>
                        <div class="right">
                            <div class="map">
                                <h3>Our Location</h3>
                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3531.3334227110363!2d85.36125101465704!3d27.73786018277932!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39eb1be5b98ca9f5%3A0x11ec732d3e2a9b11!2sTibetan+Handicraft+%26+Paper+Pvt.+Ltd.!5e0!3m2!1sen!2snp!4v1518976930901" width="400" height="250" frameborder="0" style="border:0" allowfullscreen></iframe>
                            </div>
                        </div>

                    </div>
                </div>
            </div>



            <form action="{{route('contact-action')}}" method="post" enctype="multipart/form-data" class="form-horizontal">
                {{csrf_field()}}

                @include('backend.includes.message')



                    <div class="form-group required">
                        <label class="col-sm-2 control-label" for="input-name">Your Name</label>
                        <div class="col-sm-10">
                            <input type="text" name="name"   class="form-control" required/>
                        </div>
                    </div>
                    <div class="form-group required">
                        <label class="col-sm-2 control-label" for="input-phone">Phone Number</label>
                        <div class="col-sm-10">
                            <input type="text" name="phone"   class="form-control" required/>
                        </div>
                    </div>
                    <div class="form-group required">
                        <label class="col-sm-2 control-label" for="input-email">E-Mail Address</label>
                        <div class="col-sm-10">
                            <input type="text" name="email"  class="form-control" required/>
                        </div>
                    </div><div class="form-group required">
                        <label class="col-sm-2 control-label" for="text">Subject </label>
                        <div class="col-sm-10">
                            <input type="text" name="subject"   class="form-control" required/>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label" for="input-payment-company">Company(optional)</label>
                        <div class="col-sm-10">
                            <input type="text" name="company" class="form-control" />
                        </div>
                    </div>


                <div class="form-group required">
                        <label class="col-sm-2 " >Categories</label>
                        <div class="col-sm-10">
                            <select class="form-control" id="nischal"  name="category" required>
                                <option value=""> Choose </option>
                                @foreach($categorys as $cata)
                                    <option value="{{$cata->id}}">{{$cata->category}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>


                    <script src="https://code.jquery.com/jquery-2.2.4.min.js"
                            integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44="
                            crossorigin="anonymous"></script>



                    <script type="text/javascript">

                        $(document).ready(function() {

                            $("select#nischal").on('change',function(){

                                var a = $("select#nischal").val();

                                $.ajax({

                                    type:'Get',
                                    url:  '{{URL::to('find')}}',
                                    data:  {'id':a},
                                    success: function(datas){

                                        $("select#product").empty();
                                        $.each(datas,function(i,data){


                                            $("select#product").append('<option value="'+data.proname+'"> '+data.proname+'</option>');

                                        });

                                    }



                                });

                            });
                        });
                    </script>


                <div class="form-group required">
                        <label class="col-sm-2 " for="input-payment-country"> Products Name</label>
                        <div class="col-sm-10">
                            <select class="form-control" id="product"  name="product" required >

                                <option value=""> Choose </option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group required">
                        <label class="col-sm-2 control-label" for="input-enquiry">Inquiry</label>

                        <textarea name="inquiry" rows="5"  class="form-control" required></textarea>
                    </div>

    <div class="buttons">
        <div class="pull-right">
            <input class="btn btn-primary" type="submit" value="Submit" />
        </div>
    </div>
    </form>
        </div>
    </div>
</div>
@endsection