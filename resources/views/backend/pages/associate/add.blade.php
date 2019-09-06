@extends('backend.master')
@section('body')

    <div class="right_col" role="main">

        <div style="margin-top:65px;">
            @include('backend.includes.message')
        </div>

        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel"  style="background-color: #00a65a;color:navajowhite;;">

                    <div class="x_title">
                        <h2><i class="fa fa-tag"></i>&nbsp; Edit-Associate </h2>
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
                        <form class="form-horizontal form-label-left" method="post"
                              action="{{route('admin-associate-edit',['id'=>$datas->id])}}" style="width:600px;margin-left: 200px;">
                            {{csrf_field()}}

                            <div class="form-group">
                                <label for="category">Company-Name:</label>
                                <div>


                                    <input type="text" name="cname" required value="{{$datas->cname}}" class="form-control">
                                </div>
                            </div>


                            <div class="form-group">
                                <label for="category">Address:</label>
                                <div>


                                    <input type="text" name="address" required value="{{$datas->address}}" class="form-control">
                                </div>
                            </div>


                            <div class="form-group">
                                <label for="category">Phone(Primary): </label>
                                <div>


                                    <input type="text" name="phone" required value="{{$datas->phone}}" class="form-control">
                                </div>
                            </div>


                            <div class="form-group">
                                <label for="category">Phone(Secondary): </label>
                                <div>


                                    <input type="text" name="phone2" required value="{{$datas->phone2}}" class="form-control">
                                </div>
                            </div>


                            <div class="form-group">
                                <label for="category">Email: </label>
                                <div>


                                    <input type="text" name="email" required value="{{$datas->email}}" class="form-control">
                                </div>
                            </div>



                            <div class="form-group">
                                <label for="category">Website </label>
                                <div>


                                    <input type="text" name="website"  value="{{$datas->website}}" class="form-control">
                                </div>
                            </div>


                            <div class="ln_solid"></div>
                            <div class="form-group">
                                <div>
                                    <input type="submit" class="btn btn-success" value="Update Now"></input>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

            </div>


            </div>
        </div>
    </div>
@endsection