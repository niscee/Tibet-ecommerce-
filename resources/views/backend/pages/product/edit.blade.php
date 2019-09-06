@extends('backend.master')
@section('body')





    <div class="right_col" role="main">

        <div style="margin-top:65px;">
            @include('backend.includes.message')
        </div>

        <div class="row">

            <div class="col-md-10 col-sm-10 col-xs-10" style="margin-left: 100px;">
                <div class="x_panel" style="background-color: #00a65a;color:navajowhite;;">

                    <div class="x_title">
                        <h2><i class="fa fa-tag"></i>&nbsp;Edit&nbsp; Product</h2>
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
                        <form action="{{route('admin-product-edit-action',['id'=>$datas->id])}}" method="post" enctype="multipart/form-data" style="height:400px;">

                            {{csrf_field()}}

                            <div class="form-row">
                                <div class="form-group col-md-4">

                                    <label for="inputEmail4">Select Category:</label>
                                    <select class="form-control" id="category" name="cat_id">
                                        <option value="{{$categorys->id}}">{{$categorys->category}}</option>
                                       @foreach($cats as $cat)
                                          <option value="{{$cat->id}}">{{$cat->category}}</option>
                                        @endforeach
                                    </select>

                                </div>
                            </div>


                            <div class="form-row">
                                <div class="form-group col-md-4">

                                    <label for="inputEmail4">Select Sub-Category:</label>
                                    <select class="form-control" id="subcat" name="pmenu_id" >

                                        @if($pmenu){

                                        <option value="{{$datas->pmenu_id}}">{{$pmenu->pmenu}}</option>
                                        }
                                        @else
                                            {
                                            <option value="0">No Subcategory</option>
                                            }
                                        @endif

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



                            <div class="form-group col-md-4" {{--style="margin-top: 65px;"--}}>
                                <label for="inputAddress">Product Type:</label>
                                <input type="text" class="form-control" id="inputAddress" name="protype" value="{{$datas->protype}}">
                            </div>




                            <div class="form-group col-md-4" {{--style="margin-top: 60px;"--}}>
                                <label for="inputAddress">Product Main Image:</label>
                                <input type="file" class="form-control" id="inputAddress"  name="promain" value="{{$datas->promain}}">

                                <div>
                                    <img src="{{URL::to('/frontend/image/product/'.$datas->promain)}}" style="width:300px;height:130px;">
                                </div>
                            </div>

                           {{-- @foreach($datas->Pimage as $data)--}}
                            <div class="form-group col-md-4"{{-- style="margin-top: 60px;"--}}>
                                <label for="inputAddress">Product Extra Image:</label>
                                <input type="file"  class="form-control" id="inputAddress" name="proextra[]" multiple="true"  {{--value="{{$data->proextra}}"--}}>
                            </div>
                          {{--  @endforeach--}}


                            <div class="form-row">
                                <div class="form-group col-md-4">
                                    <label for="inputEmail4">Product Name:</label>
                                    <input type="text" class="form-control" id="name" required name="proname" value="{{$datas->proname}}">
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="inputPassword4">Slug:</label>
                                    <input type="text" class="form-control" id="slug" required name="slug" value="{{$datas->slug}}" readonly>
                                </div>
                            </div>

                            <div class="form-group col-md-4" {{--style="margin-top: 65px;"--}}>
                                <label for="inputAddress">Availability:</label>
                                <input type="text" class="form-control" required id="inputAddress" name="proav" value="{{$datas->proav}}">
                            </div>

                            <div class="form-group col-md-4" {{--style="margin-top: 65px;"--}}>
                                <label for="inputAddress">Product Code:</label>
                                <input type="text"  class="form-control" id="inputAddress" name="procode" value="{{$datas->procode}}">
                            </div>

                            <div class="form-group col-md-4">

                                <label for="inputEmail4">Product Rating:</label>
                                <select class="form-control" name="rating">
                                    <option value="{{$datas->rating}}">{{$datas->rating}}</option>
                                    @for($i=1;$i<=5;$i++)
                                        @if($datas->rating != $i)
                                        <option value="{{$i}}">{{$i}}</option>
                                        @endif
                                        @endfor
                                </select>

                            </div>

                            <div class="form-group col-md-4" {{--style="margin-top: 65px;"--}}>
                                <label for="inputAddress">Video Url:</label>
                                <input type="text" class="form-control" id="inputAddress" name="video" value="{{$datas->video}}">
                            </div>

                            <div class="form-group col-md-8" style="margin-top: 15px;">
                                <label for="inputAddress">Description:</label>
                                <textarea name="description" class="form-control">{{$datas->description}}</textarea>
                            </div>

                            <center>
                                <button type="submit" class="btn btn-primary"  style="margin-top:30px;margin-right:100px;">Update Now</button>
                            </center>
                        </form>

                           <br><br><br> <div class="x_title"></div>


                          <h2 style="margin-top:30px;"><i class="fa fa-tag"></i>&nbsp;Edit&nbsp; Image</h2>
                         <div class="container" style="background-color: #00a65a;color:white;">
                             <div class="x_title"></div>
                            <div class="row" style="margin-top:40px;">
                                @foreach($datas->Pimage as $data)
                                    <div class="col-md-4">
                                        <div class="thumbnail">
                                            <form action="{{route('admin-product-image-delete',['id'=>$data->id])}}" method="post">
                                                {{ csrf_field() }}

                                                <button class="btn btn-xs btn-default"><span class="glyphicon glyphicon-trash" style="color:black;"></span></button>

                                            </form><br>


                                           <img src="{{URL::to('/frontend/image/product/'.$data->proextra)}}" style="width:120px;height:120px;">

                                        </div>

                                    </div>
                              @endforeach
                            </div>

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