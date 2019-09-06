@extends('frontend.includes.master2')


@section('body')




<!-- ======= Quick view JS ========= -->
{{--<script>

    function quickbox(){
        if ($(window).width() > 767) {
            $('.quickview-button').magnificPopup({
                type:'iframe',
                delegate: 'a',
                preloader: true,
                tLoading: 'Loading image #%curr%...',
            });
        }
    }
    jQuery(document).ready(function() {quickbox();});
    jQuery(window).resize(function() {quickbox();});

</script>--}}


<div class="container">
    <ul class="breadcrumb">
        <li><a href="{{route('index')}}"><i class="fa fa-home"></i></a></li>
        <li><a href="{{route('social')}}">Our Social Contributions</a></li>
    </ul>
    <div class="row">

        @include('frontend.includes.sidebar')


       <div id="content" class="col-sm-9">
            <h1 class="page-title">Our Social Contributions</h1>
            {!! $social->social !!}


        </div>
    </div>
</div>


    @endsection