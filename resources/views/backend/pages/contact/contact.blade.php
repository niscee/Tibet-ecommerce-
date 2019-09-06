@extends('backend.master')

@section('body')




    <div class="right_col" role="main">
        <div class="row">
            <div class="col-md-2 "></div>
            <div class=" col-lg-11" style="margin-left: 50px;">
                <div class="x_panel" style="background-color: #00a65a;color:navajowhite;;">
                    <div class="x_title">
                        <h2>Customer Messages <small style="color:white">recent</small> </h2>
                        <ul class="nav navbar-right panel_toolbox">
                            <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                            </li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>

                            </li>
                            <li><a class="close-link"><i class="fa fa-close"></i></a>
                            </li>
                        </ul>
                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content" style="background-color: #00a65a;color:white;">
                        <div class="dashboard-widget-content">

                            <ul class="list-unstyled timeline widget">

                                @foreach($datas as $message)

                                        <div class="block">
                                            <div class="block_content">
                                                <h2 class="title">
                                                    <a href="{{route('message-view',['id' => $message->id])}}">&nbsp;<span style="color:white;font-size: 17px;">{{$message->name}} &nbsp; &nbsp; &nbsp;{{$message->email}}</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="font-size:13px;color:navajowhite;">{!! str_limit($message->inquiry,80) !!}</span><span>  <a href="{{route('confirm-delete',['id' => $message->id])}}" class="btn btn-sm btn-info pull-right" title='delete message'><i class='fa fa-trash'></i></a>
</span></a>
                                                </h2>
                                                <div class="byline">
                                                    <a href="{{route('message-view',['id' => $message->id])}}"> <span style="color:navajowhite;">{{ \Carbon\Carbon::parse($message->created_at)->format('l j F Y')}}</span></a>
                                                </div>
                                                <p class="excerpt"></p></a>
                                                </p>
                                            </div>
                                        </div>
                                <div class="x_title"></div>

                                @endforeach
                            </ul>
{{$datas->links()}}
                        </div>
                    </div>
                </div>
            </div>
        </div>











@endsection