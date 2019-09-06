@extends('backend.master')
@section('body')



    <div class="right_col" role="main">

        <div style="margin-top:65px;">
            @include('backend.includes.message')
        </div>


        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel"  style="background-color: #00a65a;color:navajowhite;">

                    <div class="x_title">
                        <h2><i class="fa fa-tag"></i>&nbsp; Edit Menu-Configuration </h2>
                        <ul class="nav navbar-right panel_toolbox">
                            <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                            </li>
                            <li><a class="close-link"><i class="fa fa-close"></i></a>
                            </li>
                        </ul>
                        <div class="clearfix"></div>
                    </div>




                    <div class="x_content" {{--style="background-color:whitesmoke"--}}>
                        <br>
                        @foreach($datas as $data)
                        <form class="form-horizontal form-label-left" method="post"
                              action="{{route('admin-menu-config-action',['id'=>$data->id])}}" style="width:900px; margin-left:80px;">

                            {{csrf_field()}}
                            <div class="form-group">
                                <label for="category">About-Us Details:</label>
                                <div>
                                    <textarea name="about" class="form-control" required id="one"  style="width:100px">
                                   {!! $data->About !!}
                                    </textarea>
                                </div>
                            </div>

                            <script src="{{ asset('vendor/unisharp/laravel-ckeditor/ckeditor.js') }}"></script>
                            <script>
                                CKEDITOR.replace( 'one' );
                            </script>


                            <div class="form-group">
                                <label for="category">Social-Contribution Details:</label>
                                <div>
                                    <textarea name="social" class="form-control" required id="two"   style="width:100px">
                                    {!! $data->social !!}
                                    </textarea>
                                </div>
                            </div>

                            <script src="{{ asset('vendor/unisharp/laravel-ckeditor/ckeditor.js') }}"></script>
                            <script>
                                CKEDITOR.replace( 'two' );
                            </script>


                            <div class="form-group">
                                <label for="category">Custom-Products Details:</label>
                                <div>
                                    <textarea name="customproduct" class="form-control" required id="three"   style="width:100px">
                                    {!! $data->customproduct !!}
                                    </textarea>
                                </div>
                            </div>

                            <script src="{{ asset('vendor/unisharp/laravel-ckeditor/ckeditor.js') }}"></script>
                            <script>
                                CKEDITOR.replace( 'three' );
                            </script>


                            <div class="ln_solid"></div>
                            <div class="form-group">
                                <div>
                                    <center>
                                    <input type="submit" class="btn btn-success" value="Update Now"></input>
                                    </center>
                                </div>
                            </div>
                            @endforeach
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection