@extends('backend.master')

@section('body')

<center>


    <div class="right_col" role="main">

        <div style="margin-top:65px;">
            @include('backend.includes.message')
        </div>

        <div class="row">
            <div class="col-md-6 col-sm-6 col-xs-6" style="">
                <div class="x_panel"   style="background-color:#00a65a;color:navajowhite;" >

                    <div class="x_title" >
                        <h2><i class="fa fa-tag"></i>&nbsp; Add Site Information </h2>&nbsp;&nbsp;{{--<a href="--}}{{--{{route('admin-information-view')}}--}}{{--"><button class="btn btn-default">Click to View Informations</button></a>--}}
                        <ul class="nav navbar-right panel_toolbox">
                            <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                            </li>
                            <li><a class="close-link"><i class="fa fa-close"></i></a>
                            </li>
                        </ul>
                        <div class="clearfix"></div>
                    </div>

                    <div class="x_content" {{--style="background-color: ghostwhite"--}}>
                        <br>
                        <form class="form-horizontal form-label-left" method="post"
                              action="{{route('admin-information-add')}}">
                            {{csrf_field()}}


                            <div class="form-group  col-md-6">
                                <label for="inputAddress">Title:</label>
                                <input type="text" class="form-control" required name="title" id="title" value="">
                            </div>

                            <div class="form-group  col-md-6">
                                <label for="inputAddress">Slug:</label>
                                <input type="text" class="form-control" required name="slug" id="slug" value="" readonly>
                            </div>
                           <br>

                            <div class="form-group">
                                <label for="category">Detail:</label>
                                <div>
                                    <textarea name="detail" class="form-control" required id="one"  style="width:100px">

                                    </textarea>
                                </div>
                            </div>

                            <script src="{{ asset('vendor/unisharp/laravel-ckeditor/ckeditor.js') }}"></script>
                            <script>
                                CKEDITOR.replace( 'one' );
                            </script>


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




            <div class="col-md-6 col-sm-6 col-xs-6" style="">
                <div class="x_panel"  style="background-color:#00a65a;color:navajowhite;">

                    <div class="x_title">
                        <h2><i class="fa fa-tag"></i>&nbsp; View Informations </h2>
                        <ul class="nav navbar-right panel_toolbox">
                            <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                            </li>
                            <li><a class="close-link"><i class="fa fa-close"></i></a>
                            </li>
                        </ul>
                        <div class="clearfix"></div>
                    </div>

                    <div class="x_content"{{-- style="background-color: ghostwhite"--}}>
                        <br>


                        <table class="table table-striped">
                            <thead>
                            <tr>
                                <th>#</th>

                                <th width="95%">Description</th>
                                <th >Action</th></tr>
                            </thead>
                            <tbody>



                            @foreach($datas as $data)
                                <tr  style="background-color:#00a65a;color:navajowhite;">
                                    <td>{{$loop->index+1}}</td>
                                    <td>Title &nbsp;: {{$data->title}}
                                        <br>

                                        {!! str_limit( $data->detail,400) !!}

                                    </td>

                                    <td>

                                        <a href="{{route('admin-information-edit',['id'=>$data->id])}}" class="btn btn-xs btn-default"><i class="fa fa-edit"  title="Edit"   style="font-size:18px;color:limegreen"></i></a>

                                        <form action="{{route('admin-information-delete',['id'=>$data->id])}}" method="post">
                                            {{ csrf_field() }}

                                            <button class="btn btn-xs btn-default"><span class="glyphicon glyphicon-trash" title="delete" style="font-size:15px;color:limegreen"></span></button>
                                        </form>

                                    </td>


                                </tr>
                            @endforeach
                            </tbody>


                        </table>
                        {{$datas->links()}}

                    </div>
                </div>
            </div>

        </div>
    </div>


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script>
        $(document).ready(function(){

            $("input#title").keyup(function(e){
                var val = $(this).val();
                val = val.replace(/[^\w]+/g, "-");
                $("input#slug").val(val);
            });

        });
    </script>



</center>







    @endsection