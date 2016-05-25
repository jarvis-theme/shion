<style type="text/css"></style>
<div id="flexslider" class="flexslider">
	<ul class="slides span12" style="width: 100%; transition-duration: 0s; transform: translate3d(-1880px, 0px, 0px);">
		@foreach (slideshow() as $val)
		<li>
			@if(!empty($val->url))
			<a href="{{filter_link_url($val->url)}}" target="_blank">
			@else
			<a href="#">
			@endif
				<img alt="{{ $val->title }}" src="{{url(slide_image_url($val->gambar))}}" />
			</a>
		</li>
		@endforeach
	</ul>
</div>