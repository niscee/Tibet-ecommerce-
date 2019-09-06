@extends('backend.master')
@section('body')

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <div class="right_col" role="main">

        <div style="margin-top:65px;">
            @include('backend.includes.message')
        </div>

        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel"  style="background-color:#00a65a;color:white;">

                    <div class="x_content">
                        <div class="x_title">
                            <h2><i class="fa fa-users"></i> &nbsp;All Memebers</h2>&nbsp;&nbsp;&nbsp;&nbsp;

                            <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#myModal">Add Member</button>
                            <ul class="nav navbar-right panel_toolbox">
                                <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                </li>
                                <li><a class="close-link"><i class="fa fa-close"></i></a>
                                </li>
                            </ul>
                            <!-- Modal -->
                            <div class="modal fade" id="myModal" role="dialog">
                                <div class="modal-dialog">

                                    <!-- Modal content-->
                                    <div class="modal-content">
                                        <div class="modal-header"  style="background-color: #00c0ef;color:white">
                                            <button type="button" class="close" data-dismiss="modal">&times;             </button>
                                            <h4 class="modal-title">Add Members Detail</h4>
                                        </div>
                                        <center><br>
                                        <form class="form-horizontal form-label-left" method="post"
                                              action="{{route('admin-member-add')}}" enctype="multipart/form-data"  style="width:400px;color:darkslategrey">

                                            {{csrf_field()}}
                                            <div class="form-group">
                                                <label for="category">URL: </label>
                                                <div>


                                                    <input type="text" name="url" required  class="form-control">
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label for="category">Image:</label>
                                                <div>


                                                    <input type="file" name="image" required  class="form-control">
                                                </div>
                                            </div>


                                            <div class="ln_solid"></div>
                                            <div class="form-group">
                                                <div>
                                                    <input type="submit" class="btn btn-success" value="Add Now"></input>
                                                </div>
                                            </div>
                                        </form><br>
                                        </center>
                                        <div class="modal-footer" style="background-color: #00c0ef;color:white">
                                            <button type="button" class="btn btn-default"  class="close" data-dismiss="modal">Close</button>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <ul class="nav navbar-right panel_toolbox">

                            </ul>
                            <div class="clearfix"></div>
                        </div>


                        <table class="table table-bordered table-striped " border="2" id="products" style="width:500px; margin-left: 200px;">
                            <thead style="background-color:lime;color:darkslategrey;">
                            <tr>
                                <th>#</th>
                                <th>Image</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            @foreach($datas as $data)
                                <tbody id="productContent">
                                 <tr  style="background-color:#00a65a;color:navajowhite;;">
                                    <td>{{$loop->index+1}}</td>
                                    <td><img src="{{URL::to('/frontend/image/member/'.$data->image)}}" width="150px" height="70px"></td>

                                    <td>



                                        <form action="{{route('admin-member-delete',['id'=>$data->id])}}" method="post">
                                            {{ csrf_field() }}

                                            <button class="btn btn-xs btn-succcess"><span class="glyphicon glyphicon-trash" title="delete" style="font-size:15px;color:limegreen"></span></button>
                                        </form>

                                    </td>

                                 </tr>
                                </tbody>
                                @endforeach
                        </table>
                      <center>{{$datas->links()}}</center>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>



@endsection
