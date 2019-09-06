@extends('backend.master')
@section('body')





    <div class="right_col" role="main">

        <div style="margin-top:65px;">
            @include('backend.includes.message')
        </div>

        <div class="row">


            <div class="col-md-10 col-sm-10 col-xs-10">
                <div class="x_panel"  style="background-color: #00a65a;color:navajowhite;margin-left: 100px;">

                    <div class="x_title">
                        <h2><i class="fa fa-tag"></i>&nbsp; Edit&nbsp;&nbsp;Meta-Tag</h2>
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

                            <form action="{{route('admin-metatag',['id'=>$datas->id])}}" class="form-horizontal form-label-left" method="post" enctype="multipart/form-data">

                                {{csrf_field()}}


                                <div class="form-row">
                                    <div class="form-group col-md-12">
                                        <label for="inputEmail4">Meta-Keywords:</label>
                                        <textarea type="text" class="form-control" required name="keywords">
                                            {{$datas->keywords}}
                                        </textarea>
                                    </div>

                                    <div class="form-group col-md-12">
                                        <label for="inputPassword4">Meta-Descriptions:</label>
                                        <textarea type="text" class="form-control"  required name="description">
                                            {{$datas->description}}
                                        </textarea>
                                    </div>
                                </div>

                                <div class="form-group  col-md-12">
                                    <label for="inputAddress">Meta-Authors:</label>
                                    <textarea type="email" class="form-control" required name="author">
                                        {{$datas->author}}
                                    </textarea>
                                </div>

                                <div class="form-group col-md-12">
                                    <label for="inputAddress2">Meta-Title:</label>
                                    <textarea type="email" class="form-control" required name="title">
                                        {{$datas->title}}
                                    </textarea>
                                </div>


<br><br>
                                <center><button type="submit" class="btn btn-primary">Update Now</button></center>


                            </form>



                    </div>
                </div>
            </div>


        </div>

    </div>







@endsection