<!DOCTYPE html>
<html lang="en">
<head>
    <title>Tibetan Handicraft Industry</title>
    <!-- Bootstrap -->
    <link href="{{URL::to('backend/css/bootstrap.css')}}" rel="stylesheet">
    <link href="{{URL::to('backend/css/custom.css')}}" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="{{URL::to('backend/lib/font-awesome/css/font-awesome.css')}}" rel="stylesheet">
</head>

<body class="login" style="background-color:#F7F7F7;">
<div >
    <div class="login_wrapper">
        <div class="animate form login_form">
            <section class="login_content">
                <form method="post" action="{{route('admin-login')}}">
                    <h1>Admin Login Form</h1>



                    @if (session('alert'))
                        <div class="alert alert-danger">
                            {{ session('alert') }}
                        </div>
                    @endif


                    @if(count($errors)>0)
                        @foreach($errors->all() as $error )
                            <p class=" alert alert-danger">{{$error}}</p>

                        @endforeach
                    @endif


                    {{csrf_field()}}

                   <h4> Email:</h4>
                    <input type="email" class="form-control" required name="email" value="{{old('email')}}" placeholder="Email">


                    <h4> Password:</h4>
                    <input type="password" class="form-control" required name="password" placeholder="Password">




                    <input type="checkbox" name="remember" class="pull-left">
                    <label for="" class="pull-left">&nbsp;&nbsp; Remember Me</label><br><br>
                  {{-- <a href="{{route('adminregister')}}"><button type="button" class="btn btn-danger pull-right">Click Here To Register</button></a>--}}
                    <button type="submit" class="btn btn-primary pull-right"> Login</button>

                    <div class="clearfix"></div>

                    <div class="separator">

                        <div class="clearfix"></div>
                        <br/>

                        <div>
                            <h1><i class="fa fa-magic"></i>&nbsp; Tibetan Handicraft & Paper Pvt. Ltd. </h1>

                        </div>
                    </div>
                </form>
            </section>
        </div>

    </div>
</div>
</body>
</html>
