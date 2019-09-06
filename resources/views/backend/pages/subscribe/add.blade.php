@extends('backend.master')
@section('body')



    <div class="right_col" role="main">

        <div style="margin-top:65px;">
            @include('backend.includes.message')
        </div>


        <div class="row">
            <div class="col-md-8 col-sm-8 col-xs-8" style="margin-left: 150px;">
                <div class="x_panel">

                    <div class="x_title">
                        <h2><i class="fa fa-tags"></i> Subscriber List </h2>
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
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>Email</th>
                                <th width="5%">Action</th></tr>
                            </thead>
                            <tbody>



                            @foreach($datas as $data)
                                <tr>
                                    <td>{{$loop->index+1}}</td>
                                    <td>{{$data->email}}</td>

                                    <td>



                                        <form action="{{route('admin-subscribe-delete',['id'=>$data->id])}}" method="post">
                                            {{ csrf_field() }}

                                            <button class="btn btn-xs btn-default"><span class="glyphicon glyphicon-trash" style="font-size:15px;color:limegreen">Delete</span></button>
                                        </form>

                                    </td>


                                </tr>
                           @endforeach
                            </tbody>


                        </table>





                    </div>
                </div>

            </div>


        </div>


</div>

@endsection