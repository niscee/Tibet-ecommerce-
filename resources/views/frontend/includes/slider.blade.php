<div class="content-top">

    <div class="main-slider">
        <div id="a" class="owl-carousel" style="opacity: 1;">
            @foreach($sliders as $slider)
            <div class="item">
                <a href="#"><img src="{{URL::to('/frontend/image/slider/'.$slider->image)}}"  class="img-responsive" style="height:600px;width:100%;"/></a>
            </div>
            @endforeach
        </div>

    </div>


 <script type="text/javascript">
        $('#a').owlCarousel({
            items: 6,
            autoPlay: 5000,
            singleItem: true,
            navigation: true,
            navigationText: ['<i class="fa fa-chevron-left fa-5x"></i>', '<i class="fa fa-chevron-right fa-5x"></i>'],
            pagination: true,
            transitionStyle : "fade"
        });
    </script>
    <script type="text/javascript">
        // Can also be used with $(document).ready()
        $(window).load(function() {
            $("#spinner").fadeOut("slow");
        });
    </script>

