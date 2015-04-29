<style type="text/css">.flex-viewport {width:100%;float:none;}</style>
<div id="flexslider" class="flexslider">
    <ul class="slides span12" style="width: 1000%; transition-duration: 0s; transform: translate3d(-1880px, 0px, 0px);">
        @foreach (slideshow() as $val)
            <li>
                <img alt="{{ $val->text }}" src="{{url(slide_image_url($val->gambar))}}" />
                <!-- <p class="flex-caption">{{-- $val->text --}}</p> -->
            </li>
        @endforeach
    </ul>
</div>