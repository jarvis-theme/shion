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
                        @foreach(list_koleksi() as $mykoleksi)
                            <li><a href={{ URL::to('koleksi/'.$mykoleksi->slug) }}>{{$mykoleksi->nama}}</a></li>
                        @endforeach
                    </ul>                    
                </section>

                <section>
                    @foreach(vertical_banner() as $item)
                        <div>
                            <a href="{{URL::to($item->url)}}">
                                <img src="{{ url(banner_image_url($item->gambar)) }}" />
                            </a>
                        </div>
                    @endforeach
                </section>
            </div>
        </div>

        <div class="span9">
            <div class="row-fluid">                
                
                @foreach(horizontal_banner() as $item)
                <div class="hidden-phone" style="width: 100%;margin: 0 auto;margin-bottom: 15px;"><a href="{{URL::to($item->url)}}"><img src="{{ url(banner_image_url($item->gambar)) }}" /></a></div>
                @endforeach

                <div class="tab-content sideline">
                    @foreach(list_product(12,@$category,@$collection) as $myproduk)
                    <article style="height: 277px; position: relative;">
                        <span style="float: left; position: relative; top: 10px; left: 20px;" class="badge badge-inverse">{{price($myproduk->hargaJual)}}</span>
                        {{is_terlaris($myproduk)}}
                        {{is_produkbaru($myproduk)}}
                        {{is_outstok($myproduk)}}
                        <div class="view thumb-prod">
                            {{HTML::image( product_image_url($myproduk->gambar1,'medium'), $myproduk->nama, array('class'=>'img1'))}}
                            <div class="mask">
                                <p>{{short_description($myproduk->deskripsi,100)}}</p>
                                <a href="{{product_url($myproduk)}}" class="tbl-lihat">Lihat</a>
                            </div>
                        </div>
                        <p><a class="navi-blog" href="{{product_url($myproduk)}}">{{ short_description($myproduk->nama,32) }}</a></p>
                    </article>
                    @endforeach
                </div>
                {{list_product(12,@$category,@$collection)->links()}}
            </div>
        </div>
    </div>
</section>