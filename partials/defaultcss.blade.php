	{{HTML::style('themes/'.$toko->akunId.'-tema/shion/assets/css/bootstrap.css')}}
	{{HTML::style('themes/'.$toko->akunId.'-tema/shion/assets/css/bootstrap-responsive.css')}}
	{{HTML::style('themes/'.$toko->akunId.'-tema/shion/assets/css/font-awesome.css')}}

	@if($tema->isiCss=='')	
	{{HTML::style('themes/'.$toko->akunId.'-tema/shion/assets/css/style.css')}}
	
	@else 	
	{{HTML::style('themes/'.$toko->akunId.'-tema/shion/assets/css/editstyle.css')}}
	@endif	
	
	{{HTML::style('themes/'.$toko->akunId.'-tema/shion/assets/css/flexslider.css')}}
	{{HTML::style('themes/'.$toko->akunId.'-tema/shion/assets/css/sharrre.css')}}

	<link rel="shortcut icon" href="{{URL::to(getPrefixDomain().'/galeri/'.$toko->logo)}}">