@extends('backend.master')
@section('body')



    <div class="right_col" role="main">

        <div style="margin-top:65px;">
            @include('backend.includes.message')
        </div>


        <div class="row">
            <div class="col-md-6 col-sm-6 col-xs-6">
                <div class="x_panel" style="background-color:#00a65a;color:navajowhite;;">

                    <div class="x_title">
                        <h2><i class="fa fa-tag"></i>&nbsp; Category-View </h2>
                        <ul class="nav navbar-right panel_toolbox">
                            <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                            </li>
                            <li><a class="close-link"><i class="fa fa-close"></i></a>
                            </li>
                        </ul>
                        <div class="clearfix"></div>
                    </div>




                    <div class="x_content">
                        <br>
                        <table class="table table-striped">
                            <thead style="background-color:lime;color:darkslategrey;">
                            <tr style="background-color: #00a65a;color:navajowhite;;">
                                <th>#</th>
                                <th width="60%">Category</th>
                                <th width="5%">Action</th></tr>
                            </thead>
                            <tbody>



                            @foreach($cata as $cat)
                                <tr style="background-color: #00a65a;color:navajowhite;;">
                                    <td>{{$loop->index+1}}</td>
                                    <td>{{$cat->category}}</td>

                                    <td>

                                        <form action="{{route('admin-category-delete',['id'=>$cat->id])}}" method="post">
                                            {{ csrf_field() }}

                                            <button class="btn btn-xs btn-default"><span class="glyphicon glyphicon-trash" title="delete" style="font-size:13px;color:limegreen"></span></button>
                                        </form>
                                        <a href="{{route('admin-menu-edit',['id'=>$cat->id])}}" class="btn btn-xs btn-default"><i class="fa fa-edit"  title="Edit"   style="font-size:13px;color:limegreen"></i></a>

                                    </td>

                                    @endforeach
                                </tr>

                            </tbody>


                        </table>

                    </div>
                </div>





            </div>



            <div class="col-md-6 col-sm-6 col-xs-6">
                <div class="x_panel" style="background-color:#00a65a;color:navajowhite;;">

                    <div class="x_title">
                        <h2><i class="fa fa-tags"></i>  SubCategories-View </h2>
                        <ul class="nav navbar-right panel_toolbox">
                            <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                            </li>
                            <li><a class="close-link"><i class="fa fa-close"></i></a>
                            </li>
                        </ul>
                        <div class="clearfix"></div>
                    </div>

                    <div class="x_content">
                        <br>

                        <table class="table table-striped">
                            <thead style="background-color:lime;color:darkslategrey;">
                            <tr style="background-color: #00a65a;color:navajowhite;;">
                                <th>#</th>
                                <th width="60%">Category</th>
                                <th width="5%">Action</th></tr>
                            </thead>
                            <tbody>



                            @foreach($pmenu as $pm)
                                <tr style="background-color: #00a65a;color:navajowhite;;">
                                    <td>{{$loop->index+1}}</td>
                                    <td>{{$pm->pmenu}}</td>

                                    <td>

                                        <form action="{{route('admin-pmenu-delete',['id'=>$pm->id])}}" method="post">
                                            {{ csrf_field() }}

                                            <button class="btn btn-xs btn-default"><span class="glyphicon glyphicon-trash" title="delete" style="font-size:13px;color:limegreen"></span></button>
                                        </form>
                                        <a href="{{route('admin-pmenu-edit',['id'=>$pm->id])}}" class="btn btn-xs btn-default"><i class="fa fa-edit"  title="Edit"   style="font-size:13px;color:limegreen"></i></a>

                                    </td>

                                    @endforeach
                                </tr>

                            </tbody>


                        </table>



                    </div>
                </div>

            </div>

        </div>
        </div>
        <!-- /page content -->



@endsection