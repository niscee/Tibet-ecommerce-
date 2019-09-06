@extends('frontend.includes.master2')


@section('body')



<!-- ======= Quick view JS ========= -->
{{--<script>

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

</script>--}}


<div class="container">

    <ul class="breadcrumb">
        <li><a href="{{route('index')}}"><i class="fa fa-home"></i></a></li>
        <li>Custom Product</li>
    </ul>
    <div class="row">

        @include('frontend.includes.sidebar')

        <div id="content" class="col-sm-9">
            <h2>Custom Product </h2>
            <p>{!! $customs->customproduct !!}</p>
            <hr/>
            <h3>Product Inquiry</h3>
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
                        <label class="col-sm-2 control-label" for="input-payment-company">Company</label>
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