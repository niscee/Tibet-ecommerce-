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

                                @include('backend.includes.message')


                               @if($datas['order'] == 0)
                                <h4 style=" font-family: sans-serif;line-height: 1.5em;color:navajowhite;">&nbsp;{{$datas->email}} Subscribed You!!!!</h4>&nbsp;
                               @else

                              <div class="container" style="color:navajowhite">
                                  <h2 style="color:White;">Detail:</h2>
                                   <h4> Name:{{$datas->name}}<br></h4>
                                   <h4> Phone:{{$datas->phone}}<br></h4>
                                   <h4> Email:{{$datas->email}}<br></h4>
                                   <h4>Subject:{{$datas->Subject}}<br></h4>
                                  <h4>Company:{{$datas->company}}<br></h4>
                                  <div class="x_title"></div>
                                  <h2 style="color:White;">Inquiry:</h2>
                                   <h4>{{$datas->inquiry}}</h4>
                                  <div class="x_title"></div>
                                  <h2 style="color:White;">Order:</h2>

                                     @foreach($datas->Order as $or)

                                      <h4>Product_Name-({{$or->proname}}) -- <span style="color:white;font-size:18px;"> quantity:{{$or->quantity}}</span><br></h4>




                                         <div class="jumbotron" style="width:600px;color:black;">
                                             <h4>Product_Code-({{$or->Product->procode}})  <br></h4>
                                             <img src="{{URL::to('/frontend/image/product/'.$or->Product->promain)}}" style="width:400px;">
                                         </div>


                                         @endforeach

                              </div>

                                @endif
                            </ul>

                        </div>
                    </div>
                </div>
            </div>
        </div>











@endsection