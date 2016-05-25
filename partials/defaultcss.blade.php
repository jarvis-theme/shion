<link href='//fonts.googleapis.com/css?family=Droid+Serif:400,700' rel='stylesheet' type='text/css'>
{{generate_theme_css('shion/assets/css/bootstrap.css')}}
{{generate_theme_css('shion/assets/css/bootstrap-responsive.css')}}
{{generate_theme_css('shion/assets/css/font-awesome.css')}}

@if($tema->isiCss=='')	
{{generate_theme_css('shion/assets/css/style.css?v=002')}}
@else 	
{{generate_theme_css('shion/assets/css/editstyle.css')}}
@endif	
{{generate_theme_css('shion/assets/css/flexslider.css')}}
{{generate_theme_css('shion/assets/css/sharrre.css')}}

{{ favicon() }}
