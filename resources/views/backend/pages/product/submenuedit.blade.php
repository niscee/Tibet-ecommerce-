@extends('backend.master')
@section('body')




    <div class="right_col" role="main">

        <div style="margin-top:65px;">
            @include('backend.includes.message')
        </div>

        <div class="row">

            <div class="col-md-6 col-sm-6 col-xs-6">

                <div class="x_panel" style="background-color:#00a65a;color:navajowhite;margin-left:200px;">

                    <div class="x_title">
                        <h2><i class="fa fa-tag"></i>&nbsp;Update Sub-Category</h2>
                        <ul class="nav navbar-right panel_toolbox">
                            <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                            </li>
                            <li><a class="close-link"><i class="fa fa-close"></i></a>
                            </li>
                        </ul>
                        <div class="clearfix"></div>
                    </div>

                    <div class="x_content" {{--style="background-color:ghostwhite; height:150px;"--}}>

                        <br>
                        <form action="{{route('admin-pmenu-edit-action',['id'=>$datas->id])}}" method="post">
                            {{csrf_field()}}

                            <div class="form-group col-md-12">

                                <label for="inputEmail4">Category:</label>
                                <select class="form-control" name="category_id" required>
                                    <option value="{{$datas->Category->id}}">{{$datas->Category->category}}</option>
                                    @foreach($categorys as $cats)
                                        <option value="{{$cats->id}}">{{$cats->category}}</option>
                                    @endforeach
                                </select>

                            </div>



                            <div class="form-group col-md-12">
                                <label for="inputEmail4">Subcategory:</label>
                                <input type="text" class="form-control category" required name="pmenu" value="{{$datas->pmenu}}" >
                            </div>

                            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
                            <script>
                                $(document).ready(function(){

                                    $("input.category").keyup(function(e){

                                        var val = $(this).val();
                                        val = val.replace(/[^\w]+/g,"-");
                                        $("input.slug").val(val);
                                    });

                                });


                            </script>




                            <div class="form-group col-md-12">
                                <label for="inputEmail4">Slug:</label>
                                <input type="text" class="form-control slug"  value="{{$datas->slug}}" name="slug"  readonly>
                            </div>

                            <center><button type="submit" class="btn btn-primary">Update Now</button></center>
                        </form>


                    </div>

                </div>


            </div>
        </div>
    </div>






@endsection