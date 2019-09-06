@extends('backend.master')
@section('body')





    <div class="right_col" role="main">

        <div style="margin-top:65px;">
            @include('backend.includes.message')
        </div>

        <div class="row">

            <div class="col-md-4 col-sm-4 col-xs-4">

                <div class="x_panel" style="background-color:#00a65a;color:navajowhite;;">

                    <div class="x_title">
                        <h2><i class="fa fa-tag"></i>&nbsp;Add Category</h2>
                        <ul class="nav navbar-right panel_toolbox">
                            <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                            </li>
                            <li><a class="close-link"><i class="fa fa-close"></i></a>
                            </li>
                        </ul>
                        <div class="clearfix"></div>
                    </div>

                    <div class="x_content" {{--style="background-color:ghostwhite; height:150px;"--}}>

                        <br>
                        <form action="{{route('admin-category')}}" method="post">
                               {{csrf_field()}}
                            <div class="form-group col-md-12">
                                <label for="inputEmail4">Category:</label>
                                <input type="text" class="form-control category" required name="category"  >
                            </div>

                            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
                            <script>
                                $(document).ready(function(){

                                      $("input.category").keyup(function(e){

                                          var val = $(this).val();
                                          val = val.replace(/[^\w]+/g,"-");
                                          $("input.slug").val(val);
                                      });

                                });


                            </script>




                            <div class="form-group col-md-12">
                                <label for="inputEmail4">Slug:</label>
                                <input type="text" class="form-control slug" required name="slug"  readonly>
                            </div>

                            <center><button type="submit" class="btn btn-primary">Add Now</button></center>
                        </form>


                    </div>

                </div>



                <div class="x_panel"  style="background-color:#00a65a;color:navajowhite;;">

                    <div class="x_title">
                        <h2><i class="fa fa-tag"></i>&nbsp;Add Sub-Category</h2>
                        <ul class="nav navbar-right panel_toolbox">
                            <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                            </li>
                            <li><a class="close-link"><i class="fa fa-close"></i></a>
                            </li>
                        </ul>
                        <div class="clearfix"></div>
                    </div>

                    <div class="x_content" {{--style="background-color:ghostwhite;"--}}>

                        <form action="{{route('admin-pmenu-add')}}" method="post">
                            {{csrf_field()}}
                            <div class="form-group col-md-12">


                                    <div class="form-group col-md-12">

                                        <label for="inputEmail4">Category:</label>
                                        <select class="form-control" name="category_id" required>
                                            <option value="0">Choose</option>
                                            @foreach($categorys as $cats)
                                                <option value="{{$cats->id}}">{{$cats->category}}</option>
                                            @endforeach
                                        </select>

                                    </div>


                                <label for="inputEmail4">Sub-Category:</label>
                                <input type="text" class="form-control pmenu" required name="pmenu"  >
                            </div>

                            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
                            <script>
                                $(document).ready(function(){

                                    $("input.pmenu").keyup(function(e){

                                        var val = $(this).val();
                                        val = val.replace(/[^\w]+/g,"-");
                                        $("input.pslug").val(val);
                                    });

                                });


                            </script>




                            <div class="form-group col-md-12">
                                <label for="inputEmail4">Slug:</label>
                                <input type="text" class="form-control pslug" required name="slug"  readonly>
                            </div>

                            <center><button type="submit" class="btn btn-primary">Add Now</button></center>
                        </form>


                    </div>

                </div>

            </div>




            <div class="col-md-8 col-sm-8 col-xs-8">
                <div class="x_panel"  style="background-color:#00a65a;color:navajowhite;;">

                    <div class="x_title">
                        <h2><i class="fa fa-tag"></i>&nbsp;Add&nbsp; Product</h2>
                        <ul class="nav navbar-right panel_toolbox">
                            <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                            </li>
                            <li><a class="close-link"><i class="fa fa-close"></i></a>
                            </li>
                        </ul>
                        <div class="clearfix"></div>
                    </div>

                    <div class="x_content" {{--style="background-color:ghostwhite"--}} >

                        <br>
                        <form action="{{route('admin-product-add')}}" method="post" enctype="multipart/form-data" style="height:550px;">

                            {{csrf_field()}}

                            <div class="form-row">
                                <div class="form-group col-md-6">

                                    <label for="inputEmail4">Select Category:</label>
                                <select class="form-control" id="category" name="cat_id">
                                <option value="0">Choose</option>
                                    @foreach($categorys as $cats)
                                    <option value="{{$cats->id}}">{{$cats->category}}</option>
                                    @endforeach
                                </select>
                                </div>
                            </div>



                            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

                            <script type="text/javascript">

                                $(document).ready(function(){

                                    $(document).on('change','#category',function(){

                                        var a = $(this).val();
                                        $.ajax({

                                            type:'get',
                                            url: '{{URL::to('dashboard/pmenu-find')}}',
                                            data:{'id':a},
                                            success:function(datas){

                                                $("select#subcat").empty();
                                                $.each(datas,function(i,data){


                                                        $("select#subcat").append('<option value="'+data.id+'"> '+data.pmenu+'</option>');
                                                });
                                            }
                                        });

                                    });
                                });

                            </script>


                            <div class="form-row">
                                <div class="form-group col-md-6">

                                    <label for="inputEmail4">Select Sub-Category:</label>
                                    <select class="form-control" id="subcat" name="pmenu_id" >
                                        <option value="0">Choose</option>

                                    </select>

                                </div>
                            </div>

                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="inputEmail4">Product Name:</label>
                                    <input type="text" class="form-control" id="name" required name="product_name">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="inputPassword4">Slug:</label>
                                    <input type="text" class="form-control" id="slug" required name="slug" readonly>
                                </div>
                            </div>


                            <div class="form-group col-md-6" style="margin-top: 30px;">
                                <label for="inputAddress">Product Main Image:</label>
                                <input type="file" class="form-control" id="inputAddress" required name="promain">
                            </div>

                            <div class="form-group col-md-6" style="margin-top: 30px;">
                                <label for="inputAddress">Product Extra Image:</label>
                                <input type="file" required class="form-control" id="inputAddress" name="proextra[]" multiple="true">
                            </div>

                            <div class="form-group col-md-6" style="margin-top: 35px;">
                                <label for="inputAddress">Product Type:</label>
                                <input type="text" class="form-control" id="inputAddress" name="protype">
                            </div>

                                <div class="form-group col-md-6" style="margin-top: 35px;">
                                    <label for="inputAddress">Availability:</label>
                                    <input type="text" class="form-control" required id="inputAddress" name="proav">
                                </div>

                            <div class="form-group col-md-4" style="margin-top: 25px;">
                                <label for="inputAddress">Product Code:</label>
                                <input type="text"  class="form-control" id="inputAddress" name="procode">
                            </div>

                            <div class="form-group col-md-4" style="margin-top: 25px;">
                                <label for="inputAddress">Video Url:</label>
                                <input type="text" class="form-control" id="inputAddress" name="video">
                            </div>


                                <div class="form-group col-md-4"  style="margin-top: 25px;">

                                    <label for="inputEmail4">Product Rating:</label>
                                    <select class="form-control" name="rating">
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                    </select>

                                </div>


                            <div class="form-group col-md-12" style="margin-top: 25px;">
                                <label for="inputAddress">Description:</label>
                              <textarea name="description" class="form-control"></textarea>
                            </div>


                      <center>
                            <button type="submit" class="btn btn-primary"  style="margin-top:30px;margin-right:100px;">Add Now</button>
                     </center>
                        </form>

                    </div>
                </div>
            </div>


        </div>

    </div>


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script>
        $(document).ready(function(){

            $("input#name").keyup(function(e){
                var val = $(this).val();
                val = val.replace(/[^\w]+/g, "-");
                $("input#slug").val(val);
            });

        });
    </script>




@endsection