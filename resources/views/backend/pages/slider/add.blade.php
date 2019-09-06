@extends('backend.master')

@section('body')



    <div class="right_col" role="main">
        <div style="margin-top:65px;">
            @include('backend.includes.message')
        </div>
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel"  style="background-color: #00a65a;color:white;">

                    <div class="x_title">



                        <i class="fa fa-cog fa-spin" style="font-size:30px"></i>&nbsp;&nbsp;&nbsp;
                        <button  class="btn btn-primary btn btn-sm" data-toggle="modal" data-target="#myModal">Add Images</button>

                        <!-- Modal -->
                        <div class="modal fade" id="myModal" role="dialog">
                            <div class="modal-dialog">

                                <!-- Modal content-->
                                <div class="modal-content">
                                    <div class="modal-header" style="background-color:#00c0ef;color:white;">
                                        <button type="button" class="close" data-dismiss="modal">X</button>
                                        <h4 class="modal-title">Add Image</h4>
                                    </div>
                                    <div class="modal-body" style="color:black">
                                        <br>
                                        <center>
                                            <form class="form-horizontal form-label-left" method="post"
                                                  action="{{route('admin-slider-add')}}" enctype="multipart/form-data" style="width:400px;">


                                                {{csrf_field()}}
                                                <div class="form-group">

                                                    <div>

                                                       <label>Image:</label>
                                                        <input type="file" name="image[]" required  class="form-control" multiple="true">
                                                    </div>
                                                </div>


                                                <div class="ln_solid"></div>
                                                <div class="form-group">
                                                    <div>
                                                        <input type="submit" class="btn btn-success" value="Add Now"></input>
                                                    </div>
                                                </div>
                                            </form>
                                        </center>
                                    </div>
                                    <div class="modal-footer" style="background-color:#00c0ef;color:white;">
                                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                    </div>
                                </div>

                            </div>
                        </div>


                        <ul class="nav navbar-right panel_toolbox">
                            <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                            </li>
                            <li><a class="close-link"><i class="fa fa-close"></i></a>
                            </li>
                        </ul>
                        <div class="clearfix"></div>
                    </div>




                    <div class="x_content" >
                    </div>

                    <div class="container"  style="background-color:#00a65a;color:white;">

                        <div class="row">
                           @foreach($imgs as $data)
                                <div class="col-md-4">
                                    <div class="thumbnail">
                                        <form action="{{route('admin-slider-delete',['id'=>$data->id])}}" method="post">
                                            {{ csrf_field() }}

                                            <button class="btn btn-xs btn-default"><span class="glyphicon glyphicon-trash" style="color:black;"></span></button>

                                        </form>
                                        <img src="{{URL::to('/frontend/image/slider/'.$data->image)}}" style="width:150%;height:150px;">

                                    </div>

                                </div>
                           @endforeach
                        </div>

                    </div>

                </div>
            </div>
        </div>
    </div>

@endsection