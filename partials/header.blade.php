<header class="wrap-header">
	<section class="data-content">
		<div class="row">
			<div class="info">
				@if ( ! is_login() )
					<span>Selamat berbelanja</span><span class="divide"></span>
					<span>{{ HTML::link('member', 'Login') }}</span><span class="divide"></span>
					<span>{{ HTML::link('member/create', 'Register') }}</span>
				@else
					<span>Hai, {{ HTML::link('member', user()->nama) }}<span class="divide"></span><span>{{HTML::link('logout', 'Logout')}}</span>
				@endif
			</div>
			<div class="search-column">
				<form method="post" action="{{ URL::to('search') }}">
					<input class="input-large search-query" type="search" name="search" placeholder="Search" id="target"></input>
					<span class="fa fa-search" id="search-pos"></span>
				</form>
			</div>
			<div class="span5">
				<h1 class="brand-title">
					@if(@getimagesize(URL::to(getPrefixDomain().'/galeri/'.$toko->logo)))
					<a href="{{ URL::to('home') }}">
						<img src="{{@URL::to(getPrefixDomain().'/galeri/'.$toko->logo) }}" class="logo">
					</a>
					@else
					<a href="{{URL::to('home')}}">{{ shortText(Theme::place('title'),26) }}</a>
					@endif
				</h1>
			</div>
			<div class="span3 offset2 tools">
				<a href="#" class="search"><i class="fa fa-search"></i> Search</a>
				<a href="{{ URL::to('checkout') }}" class="cart" id="shoppingcartplace">
					<i class="fa fa-shopping-cart"></i> {{ $items = Shpcart::cart()->total_items() }} Items
					<p style="margin-top: 15px; color: #666;">Total: {{ jadiRupiah(Shpcart::cart()->total() )}}</p>
				</a>
			</div>
		</div>

		<div class="navbar navbar-fixed">
			<div class="navbar-inner">
				<div class="container">
					<ul>
						<li class="navi-item btn-nav" data-toggle="collapse" data-target=".nav-collapse">
							<a href="#">
								<span class="fa fa-bars" style="margin-top: -10px;"></span>
							</a>
						</li>
						<li class="navi-item btn-cart">
							<a href="{{ URL::to('checkout') }}"><span class="fa fa-shopping-cart" style="margin-top: -10px;"></span></a>
						</li>
						<li class="navi-item btn-search">
							<a href="#"><span class="fa fa-search" style="margin-top: -10px;"></span></a>
						</li>
						<li class="mobilenav-search" style="border-left: none;">
							<div class="mobile-search" style="">
							<form method="post" action="{{ URL::to('search') }}">
								<input class="search-query" type="search" placeholder="Search" style="width: 80%; height: 30px; border-radius: 25px;" id="target-mobile" name="search"></input>
								<span class="fa fa-search" style="position: absolute; top: -10px; right: 10%; color: #DDD; font-size: 1.5em;"></span>
							</form>
							</div>
						</li>
					</ul>
			  
					<div class="nav-collapse collapse">
						<ul class="nav">
							@foreach($mainMenu as $key=>$link)
								@if($link->halaman=='1')
									<li><a href={{"'".URL::to("halaman/".strtolower($link->linkTo))."'"}}>{{$link->nama}}</a></li>
								@elseif($link->halaman=='2')
									<li><a href={{"'".URL::to("blog/".strtolower($link->linkTo))."'"}}>{{$link->nama}}</a></li>
								@elseif($link->url=='1')
									<li><a href={{"'".URL::to('http://'.strtolower($link->linkTo))."'"}}>{{$link->nama}}</a></li>
								@else
									<li><a href={{"'".URL::to(strtolower($link->linkTo))."'"}}>{{$link->nama}}</a></li>
								@endif
							@endforeach
						</ul>
					</div>
				</div>
			</div>
		</div>
	</section>
	
</header>