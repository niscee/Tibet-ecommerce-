@extends('backend.master')
@section('body')





        <div class="right_col" role="main">

            <div style="margin-top:65px;">
                @include('backend.includes.message')
            </div>

            <div class="row">

                <div class="col-md-4 col-sm-4 col-xs-4">

                    <div class="x_panel"  style="background-color: #00a65a;color:navajowhite;">

                        <div class="x_title">
                            <h2><i class="fa fa-tag"></i>&nbsp; Edit-Logo</h2>
                            <ul class="nav navbar-right panel_toolbox">
                                <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                </li>
                                <li><a class="close-link"><i class="fa fa-close"></i></a>
                                </li>
                            </ul>
                            <div class="clearfix"></div>
                        </div>

                        <div class="x_content" style="/*background-color:ghostwhite;*/ height:405px;">

                            <br>

                            @foreach($logos as $logo)
                            <form action="{{route('admin-site-config-logo',['id'=>$logo->id])}}" class="form-horizontal form-label-left" method="post" enctype="multipart/form-data">

                                {{csrf_field()}}


                                    <div class="form-row">
                                        <div class="form-group col-md-12">
                                            <label for="inputEmail4">Company Logo:</label>
                                            <input type="file" class="form-control" required name="logo" value="">
                                        </div>
                                    </div>
                                <center><button type="submit" class="btn btn-primary">Update Now</button></center>
                            </form>


                                <div class="jumbotron" style="background-color:ghostwhite;">
                                    <img src="{{URL::to('/frontend/image/logo/'.$logo->logo)}}" style="width:150px; height:120px;"/>
                                </div>

                            @endforeach



                        </div>

                    </div>
                </div>




                <div class="col-md-8 col-sm-8 col-xs-8">
                    <div class="x_panel"  style="background-color: #00a65a;color:navajowhite;">

                        <div class="x_title">
                            <h2><i class="fa fa-tag"></i>&nbsp; Edit&nbsp;&nbsp; Site-Configuration</h2>
                            <ul class="nav navbar-right panel_toolbox">
                                <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                </li>
                                <li><a class="close-link"><i class="fa fa-close"></i></a>
                                </li>
                            </ul>
                            <div class="clearfix"></div>
                        </div>

                        <div class="x_content" {{--style="background-color:ghostwhite"--}}>

                            <br>
                            @foreach($datas as $data)
                            <form action="{{route('admin-site-config-add',['id'=>$data->id])}}" class="form-horizontal form-label-left" method="post" enctype="multipart/form-data">

                                {{csrf_field()}}


                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label for="inputEmail4">Company Name:</label>
                                            <input type="text" class="form-control" required name="cname" value="{{$data->cname}}">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="inputPassword4">Address:</label>
                                            <input type="text" class="form-control"  required name="address" value="{{$data->address}}">
                                        </div>
                                    </div>
                                    <div class="form-group  col-md-6">
                                        <label for="inputAddress">Email:</label>
                                        <input type="email" class="form-control" required name="emailone" value="{{$data->emailone}}">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="inputAddress2">Email(secondary):</label>
                                        <input type="email" class="form-control" required name="emailtwo" value="{{$data->emailtwo}}">
                                    </div>

                                    <div class="form-group col-md-6">
                                        <label for="inputAddress2">Phone:</label>
                                        <input type="number" class="form-control" required name="phone" value="{{$data->phone}}">
                                    </div>

                                    <div class="form-group col-md-6">
                                        <label for="inputAddress2">Facebook Link:</label>
                                        <input type="text" class="form-control"  name="fblink" value="{{$data->fblink}}">
                                    </div>

                                    <div class="form-group col-md-6">
                                        <label for="inputAddress2">Instagram Link:</label>
                                        <input type="text" class="form-control"  name="instalink" value="{{$data->instalink}}">
                                    </div>

                                    <div class="form-group col-md-6">
                                        <label for="inputAddress2">Google Link:</label>
                                        <input type="text" class="form-control"  name="googlelink" value="{{$data->googlelink}}">
                                    </div>

                                    <div class="form-group col-md-6">
                                        <label for="inputAddress2">Twitter Link:</label>
                                        <input type="text" class="form-control"  name="twitterlink" value="{{$data->twitterlink}}">
                                    </div>

                                    <div class="form-group col-md-6">
                                        <label for="inputAddress2">Youtube Link:</label>
                                        <input type="text" class="form-control"  name="utubelink" value="{{$data->utubelink}}">
                                    </div>

                                <div class="form-group col-md-12">
                                    <label for="inputAddress2">Slogan:</label>
                                    <textarea  class="form-control"  name="slogan">{{$data->slogan}}</textarea>
                                </div>

                                    <br><br>

                                    <center><button type="submit" class="btn btn-primary">Update Now</button></center>


                            </form>
                            @endforeach


                        </div>
                    </div>
                </div>


            </div>

        </div>







    @endsection