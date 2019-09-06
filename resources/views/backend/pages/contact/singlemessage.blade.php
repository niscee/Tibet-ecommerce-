@extends('backend.master')

@section('body')

    <div class="right_col" role="main" style="height:600px;">
        <div class="row">

            <div class=" col-lg-10" >
                <div class="x_panel" style="background-color: #00a65a;color:white;margin-left: 80px;">
                    <div class="x_title">
                        <a href="{{route('contact-message')}}"><i class="fa fa-arrow-circle-left" style="font-size:20px;color:white">&nbsp;<span style="font-size: 18px;color:white">BACK</span></i></a></span>
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
                    <div class="x_content" >
                        <div class="dashboard-widget-content">

                            <ul class="list-unstyled timeline widget">
                                <a href="{{route('confirm-delete',['id' => $datas->id])}}" class="btn btn-sm btn-info pull-right" title='delete message'><i class='fa fa-trash'></i></a>
                                <div class="byline" style="color:black;line-height: 1em;">
                                    <span>Date:&nbsp;&nbsp;{{ \Carbon\Carbon::parse($datas->created_at)->format('l j F Y')}}</span><br>
                                    <h4 style=" font-family:'Tangerine', serif; ">Name:&nbsp;&nbsp;{{$datas->name}}</h4>
                                   <h4 style=" font-family:'Tangerine', serif; ">Phone:&nbsp;&nbsp;{{$datas->phone}}</h4>
                                    <h4 style=" font-family:'Tangerine', serif; ">Email:&nbsp;&nbsp;{{$datas->email}}</h4>
                                    <h4 style=" font-family:'Tangerine', serif; ">Company:&nbsp;&nbsp;{{$datas->company}}</h4>
                                   <h4 style=" font-family:'Tangerine', serif; ">Subject:&nbsp;&nbsp;{{$datas->Subject}}</h4>

                                </div>





                                @include('backend.includes.message')

                                <div class="x_title"></div>

                                    <h4 style=" font-family: sans-serif;line-height: 1.5em;color:navajowhite;">{{$datas->inquiry}}</h4>&nbsp;


                                        <div class="x_title"></div>
                                    <h4 style=" font-family: 'Tangerine', serif;color:black;">Category:{{$das->category}}&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Product:{{$datas->product}}</h4>&nbsp;<br>


                               <h4>Procode:{{$pros->procode}}</h4>

                              <img src="{{URL::to('/frontend/image/product/'.$pros->promain)}}" style="height:200px;width:240px;"/>





                            </ul>

                        </div>
                    </div>
                </div>
            </div>
        </div>











@endsection