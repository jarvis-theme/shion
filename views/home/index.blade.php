<section class="feat" style="margin-top: 20px;">
    <div class="row-fluid">

        <div class="span12">
            <h3>BARANG KAMI</h3>
            <div>
                @foreach(list_product() as $key=>$myproduk)

                <div class="tab-pane active" id="feat">

                <article class="span4 article-img">
                    <span style="float: left; position: relative; top: 10px; left: 20px;" class="badge badge-inverse">{{price($myproduk->hargaJual)}}</span>

                    {{is_terlaris($myproduk)}}

                    {{is_produkbaru($myproduk)}}

                    {{is_outstok($myproduk)}}

                    <div class="view view-thumb">

                        <img style="margin:auto;heigth:300px" src="{{ url(product_image_url($myproduk->gambar1,'medium')) }}" alt="" />

                        <div class="mask">
                            <p>{{short_description($myproduk->deskripsi,100)}}</p>

                            <a href="{{product_url($myproduk)}}" class="buy">Beli</a>

                        </div>

                    </div>

                    <p><a class="navi-blog" href="{{product_url($myproduk)}}">{{$myproduk->nama}}</a></p>

                </article>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</section>