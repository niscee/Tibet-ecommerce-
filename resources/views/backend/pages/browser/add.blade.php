@extends('backend.master')
@section('body')





    <div class="right_col" role="main">

        <div style="margin-top:65px;">
            @include('backend.includes.message')
        </div>

        <div class="row">

            <div class="col-md-12 col-sm-12 col-xs-12">

                <div class="x_panel"  style="background-color: #00a65a;color:navajowhite;">

                    <div class="x_title">
                        <h2><i class="fa fa-tag"></i>&nbsp;Add Browser</h2>
                        <ul class="nav navbar-right panel_toolbox">
                            <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                            </li>
                            <li><a class="close-link"><i class="fa fa-close"></i></a>
                            </li>
                        </ul>
                        <div class="clearfix"></div>
                    </div>

                    <div class="x_content" {{--style="background-color:ghostwhite; height:1000px;"--}}>

                        <div id="czbannercmsblock" class="block czbanners">
                                            <div class="czbanner_container container">
                                                <div class="container">
                                                    <div class="row">
                                                        <div class="col-sm-4">
                                                            <div class="thumbnail" style="width:350px;height:550px;">

                                                                <img src="{{URL::to('frontend/image/browser/'.$datas->title1)}}" style="width:350px;height:600px;" alt="cms-banner1" class="banner-image1">
                                                            </div>

                                                            <form action="{{route('admin-browser-add1')}}" method="Post" enctype="multipart/form-data">
                                                                {{csrf_field()}}
                                                                <label>Image:</label>
                                                                <input type="file" name="image1" class="form-control" value=""><br>

                                                                <label>Link:</label>
                                                                <input type="text" name="url1" class="form-control" value="{{$datas->url1}}"><br>

                                                                <button class="btn btn-primary btn btn-sm" type="submit">Update</button>
                                                            </form>
                                                            <br>
                                                        </div>





                                                        <div class="col-sm-8">
                                                            <div class="thumbnail"  style="width:600px;margin-left:80px;">

                                                                <img src="{{URL::to('frontend/image/browser/'.$datas->title2)}}" style="width:600px;" alt="cms-banner2" class="banner-image2">
                                                            </div>

                                                            <form action="{{route('admin-browser-add2',['id'=>$datas->id])}}" method="Post" style="width:400px;margin-left:80px;" enctype="multipart/form-data">
                                                                {{csrf_field()}}
                                                                <label>Image:</label>
                                                                <input type="file" name="image2" class="form-control" value=""><br>
                                                                <label>Link:</label>
                                                                <input type="text" name="url2" class="form-control" value="{{$datas->url2}}"><br>
                                                                <button class="btn btn-primary btn btn-sm" type="submit">Update</button>
                                                            </form>
                                                            <br><br>





                                                 <div class="wrapper">
                                                            <div class="thumbnail"  style="width:250px;margin-left:80px;">

                                                                <img src="{{URL::to('frontend/image/browser/'.$datas->title3)}}" style="width:250px;"  alt="cms-banner3" class="banner-image3">
                                                            </div>

                                                            <form action="{{route('admin-browser-add3',['id'=>$datas->id])}}" method="Post" style="width:250px;margin-left:80px;" enctype="multipart/form-data">
                                                                {{csrf_field()}}
                                                                <label>Image:</label>
                                                                <input type="file" name="image3" class="form-control" value=""><br>
                                                                <label>Link:</label>
                                                                <input type="text" name="url3" class="form-control" value="{{$datas->url3}}"><br>
                                                                <button class="btn btn-primary btn btn-sm" type="submit">Update</button>
                                                            </form>



                                                           <div class="nischal" style="float:right;margin-top:-400px;">
                                                            <div class="thumbnail"  style="width:250px;margin-left:80px;">

                                                                <a href="#"><img src="{{URL::to('frontend/image/browser/'.$datas->title4)}}" style="width:250px;"  alt="cms-banner4" class="banner-image4"></a>
                                                            </div>

                                                            <form action="{{route('admin-browser-add4',['id'=>$datas->id])}}" method="Post" style="width:250px;margin-left:80px;" enctype="multipart/form-data">
                                                                {{csrf_field()}}
                                                                <label>Image:</label>
                                                                <input type="file" name="image4" class="form-control" value=""><br>
                                                                <label>Link:</label>
                                                                <input type="text" name="url4" class="form-control" value="{{$datas->url4}}"><br>
                                                                <button class="btn btn-primary btn btn-sm" type="submit">Update</button>
                                                            </form>
                                                           </div>
                                                 </div>




                                                        </div>
                                                    </div>



                                                </div>
                                            </div>
                                        </div>

                    </div>

                </div>
            </div>






        </div>

    </div>







@endsection