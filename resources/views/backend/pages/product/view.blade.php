@extends('backend.master')
@section('body')
    <div class="right_col" role="main">
        <div class="">

            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="x_panel"  style="background-color:#00a65a;color:navajowhite;;">

                        <div class="x_content" >
                            <div class="x_title">
                                <h2><i class="fa fa-users"></i> &nbsp;View Products</h2>
                                <ul class="nav navbar-right panel_toolbox">

                                </ul>
                                <div class="clearfix"></div>
                            </div>


                            <form action="{{route('admin-product-view-search')}}" method="post" >
                                {{csrf_field()}}

                                <div class="form-group col col-md-3 ">

                                    <select class="form-control"  name="cat_id">
                                        <option value="0">LIST ALL</option>
                                        @foreach($cats as $category)
                                            <option value="{{$category->id}}">{{$category->category}}</option>
                                    @endforeach
                                    </select>

                                </div>

                              <div class="form-group col col-md-1">
                                    <button class=" btn btn-md btn btn-primary"><i class="fa fa-search"></i></button>
                                </div>
                            </form>


                            <table class="table table-bordered table-striped " id="products" style=" border-color: 1px solid green;">
                                <tr>
                                    <thead style="background-color:lime;color:darkslategrey;">
                                    <th>#</th>
                                    <th width="70%">Product-Detail</th>
                                    <th width="20%">Image</th>
                                    <th>Action</th>
                                    </thead>
                                    </tr>
                                   @foreach($pros as $pro)
                                    <tbody id="productContent">
                                    <tr style="background-color: #00a65a;color:navajowhite;;">
                                        <td>{{$loop->index+1}}</td>
                                        <td>
                                           Name:{{$pro->proname}} &nbsp;&nbsp;&nbsp;&nbsp; Code:{{$pro->procode}} &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;Availability:{{$pro->proav}}
                                        </td>
                                        <td><img src="{{URL::to('/frontend/image/product/'.$pro->promain) }}" width="150px" height="100px"></td>
                                        <td>

                                            <a href="{{route('admin-product-edit',['id'=>$pro->id])}}" class="btn btn-xs btn-default"><i class="fa fa-edit"  title="Edit"   style="font-size:18px;color:limegreen"></i></a>

                                            <form action="{{route('admin-product-delete',['id'=>$pro->id])}}" method="post">
                                                {{ csrf_field() }}

                                                <button class="btn btn-xs btn-default"><span class="glyphicon glyphicon-trash" title="delete" style="font-size:15px;color:limegreen"></span></button>
                                            </form>

                                        </td>
                                    </tr>
                                    </tbody>

                             @endforeach
                            </table>
                        <center>{{$pros->links()}}</center>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection

