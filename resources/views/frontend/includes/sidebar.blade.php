<aside id="column-left" class="col-sm-3 hidden-xs">
    <div class="box">
        <div class="box-heading">Categories</div>
        <div class="box-content ">
            <ul class="box-category treeview-list treeview">

                @foreach($categorys as $cata)
                                   <li class="expandable">

                                       <a href="{{route('product',['slug'=>$cata->slug])}}">{{$cata->category}}</a>

                                       @if($cata->Pmenu->count()>0)
                                       <ul style="display: none;">
                                           <li>
                                               @foreach($cata->Pmenu as $pmenu)
                                                   <a href="{{route('product-menu',['slug'=>$pmenu->slug])}}">{{$pmenu->pmenu}}</a>
                                               @endforeach
                                           </li>
                                       </ul>
                                           @endif
                                       </li>
                               @endforeach










               </ul>
        </div>
    </div>
    <script type="text/javascript"><!--
        $('.bannercarousel').owlCarousel({
            items: 1,
            autoPlay: 3000,
            singleItem: true,
            navigation: false,
            pagination: true,
            transitionStyle: 'fade'
        });
        --></script>    <div class="box">
        <div class="box-heading">Information</div>
        <div class="list-group">
@foreach($informations as $info)
            <a class="list-group-item" href="{{route('infos',['slug'=>$info->slug])}}">{{$info->title}}</a>
          @endforeach
        </div>
    </div>
</aside>