<section class="product">

    <div style="padding: 10px 0px; text-align: center; margin-bottom: 30px; border-bottom: 1px dotted #bbb;">
        <h3>{{$name}}</h3>
    </div>

    <div class="row-fluid">
        <div class="span3 hidden-phone">
            <div class="sidebar">
                <section>
                    <h5>Kategori</h5>
                    <nav>
                        <ul>
                            {{ generateKategori($kategori,'<li>;</li>','<i class="fa fa-angle-right"></i> ',';',true) }}
                        </ul>
                    </nav>
                </section>

                <section>
                    <ul class="category collection">
                        <h5>Koleksi</h5>
                        @foreach($koleksi as $mykoleksi)
                            <li><a href={{ URL::to('koleksi/'.$mykoleksi->slug) }}>{{$mykoleksi->nama}}</a></li>
                        @endforeach
                    </ul>                    
                </section>

                <section>
                    @foreach(getBanner(1) as $item)
                        <div>
                            <a href="{{URL::to($item->url)}}">
                                <img src="{{URL::to(getPrefixDomain().'/galeri/'.$item->gambar)}}" />
                            </a>
                        </div>
                    @endforeach
                </section>
            </div>
        </div>

        <div class="span9">
            <div class="row-fluid">                
                @foreach(getBanner(2) as $item)
                <div class="hidden-phone" style="width: 100%;margin: 0 auto;margin-bottom: 15px;"><a href="{{URL::to($item->url)}}"><img src="{{URL::to(getPrefixDomain().'/galeri/'.$item->gambar)}}" /></a></div>
                @endforeach
                <div class="tab-content sideline">
                    @foreach($produk as $myproduk)
                    <article style="height: 277px; position: relative;">
                        <span style="float: left; position: relative; top: 10px; left: 20px;" class="badge badge-inverse">{{jadiRupiah($myproduk->hargaJual)}}</span>
                        {{is_terlaris($myproduk)}}
                        {{is_produkbaru($myproduk)}}
                        {{is_outstok($myproduk)}}
                        <div class="view thumb-prod">
                            {{HTML::image(getPrefixDomain().'/produk/'.$myproduk->gambar1, $myproduk->nama, array('class'=>'img1'))}}
                            <div class="mask">
                                <p>{{shortDescription($myproduk->deskripsi,100)}}</p>
                                <a href="{{slugProduk($myproduk)}}" class="tbl-lihat">Lihat</a>
                            </div>
                        </div>
                        <p><a class="navi-blog" href="{{slugProduk($myproduk)}}">{{ shortDescription($myproduk->nama,32) }}</a></p>
                    </article>
                    @endforeach
                </div>
                {{$produk->links()}}
            </div>
        </div>
    </div>
</section>