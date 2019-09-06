@extends('backend.master')

@section('body')

    <div class="right_col" role="main">
        <div class="row">
            <div class="col-md-12">
                <div class="x_panel">

                    <div class="x_title">
                        <h2><i class="fa fa-warning"></i>&nbsp; Confirm Delete </h2>
                        <ul class="nav navbar-right panel_toolbox">
                            <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                            </li>
                            <li><a class="close-link"><i class="fa fa-close"></i></a>
                            </li>
                        </ul>
                        <div class="clearfix"></div>
                    </div>

                    <div class="x_content">
                        <div class="row">
                            <div class="col-sm-2">
                                <br>
                                <h1 class="text-danger text-center"><i class="fa fa-warning fa-2x"></i></h1>
                            </div>
                            <div class="col-sm-9">
                                <td> <form action="{{route('message-delete',['id' => $datas->id])}}" method="post">
                                        {{ csrf_field() }}

                                        <button class="btn btn-danger pull-right"><i class='fa fa-trash'>&nbsp;&nbsp;&nbsp;CONFIRM</i></button>
                                    </form>
                                </td>
                                <div class="col-sm-9">
                                    <br>
                                    <h2 class="text-danger"><strong>Deleting message from  '{{$datas->name}}' once will not be recoverable in the
                                            future.</strong></h2>
                                    <h5>You will also loose all the data related with this inquiry message.<br> <strong>Click Confirm if you still want to continue.</strong></h5>
                                    <br>
                                </div>

                            </div>
                        </div>
                        <hr>

                        <td> <a href="{{route('contact-message')}}"
                                class='btn btn-primary pull-center'><i class='fa fa-refresh'></i>&nbsp;Cancel</a></td>

                    </div>
                </div>

            </div>

            <br/>
        </div>
    </div><!-- /page content -->

@endsection