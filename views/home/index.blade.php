<section class="feat" style="margin-top: 20px;">
    <div class="row-fluid">

        <div class="span12">
            <h3>BARANG POPULER</h3>
            <div class="tab-content">
                @foreach($produk as $key=>$myproduk)

                <div class="tab-pane active" id="feat">

                <article class="span4 article-img">
                    <span style="float: left; position: relative; top: 10px; left: 20px;" class="badge badge-inverse">{{jadiRupiah($myproduk->hargaJual)}}</span>

                    {{is_terlaris($myproduk)}}

                    {{is_produkbaru($myproduk)}}

                    {{is_outstok($myproduk)}}

                    <div class="view view-thumb">

                        <img style="margin:auto;heigth:300px" src="{{URL::to(getPrefixDomain().'/produk/'.$myproduk->gambar1)}}" alt="" />

                        <div class="mask">
                            <p>{{shortDescription($myproduk->deskripsi,100)}}</p>

                            <a href="{{slugProduk($myproduk)}}" class="buy">Beli</a>

                        </div>

                    </div>

                    <p><a class="navi-blog" href="{{slugProduk($myproduk)}}">{{$myproduk->nama}}</a></p>

                </article>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</section>