<div class="prime" style="padding: 10px 0px; text-align: center; margin-bottom: 30px; border-bottom: 1px dotted #bbb;">
	<h3>Hasil Pencarian</h3>
</div>
<div class="row-fluid search-result">
	@if($jumlahCari!=0)
		@foreach($hasilpro as $myproduk)
		<article style="text-align: justify">
			<div class="span1">
				<a href="{{slugProduk($myproduk)}}">
				<img src="{{URL::to(getPrefixDomain().'/produk/thumb/'.$myproduk->gambar1)}}" alt="{{$myproduk->nama}}" id="gambar" />
				</a>
			</div>
			<div id="desc">
				<a href="{{slugProduk($myproduk)}}"><h4 class="navi-blog" style="float:left">{{$myproduk->nama}}</h4></a><br><br>
				<span style="text-align: left">{{shortDescription($myproduk->deskripsi,100)}}</span>
			</div>
		</article>
		@endforeach
		@foreach($hasilhal as $myhal)
		<article style="text-align: justify">
			<div class="blog-result">
				<a href="{{URL::to('halaman/'.$myhal->slug)}}"><h4 class="navi-blog" style="float:left">{{$myhal->judul}}</h4></a><br><br>
				<span style="text-align: left">{{shortDescription($myhal->isi,100)}}</span>
			</div>
		</article>
		@endforeach
		@foreach($hasilblog as $myblog)
		<article style="text-align: justify">
			<div class="blog-result">
				<a href="{{URL::to('blog/'.$myblog->slug)}}"><h4 class="navi-blog" style="float:left">{{$myblog->judul}}</h4></a><br><br>
				<span style="text-align: left">{{shortDescription($myblog->isi,100)}}</span>
			</div>
		</article>
		@endforeach
	@else
		<article style="text-align: center; border: 0;">
			<i>Hasil tidak ditemukan</i>
		</article>
	@endif
</div>