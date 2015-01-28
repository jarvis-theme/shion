<div class="row-fluid">
    <div class="row-fluid">
        <div class="span12">
            <div class="option-mobile">
                <p class="product-title">{{$produk->nama}}</p>
                <p class="price">
                    <big>{{ jadiRUpiah($produk->hargaJual) }}</big>
                    <small style="color: #A29B95; text-decoration: line-through;">{{ jadiRUpiah($produk->hargaCoret) }}</small>
                </p>
            </div>
        </div>
    </div>
    <div class="row-fluid">
        <div class="span6">
            <div id="slider" class="flexslider-produk">
                <ul class="slides">
                    @if($produk->gambar1!='')

                    <li data-thumb="{{URL::to(getPrefixDomain().'/produk/'.$produk->gambar1)}}"><a href="{{URL::to(getPrefixDomain().'/produk/'.$produk->gambar1)}}"> {{HTML::image(getPrefixDomain().'/produk/'.$produk->gambar1)}}</a></li>

                    @endif

                    @if($produk->gambar2!='')

                    <li data-thumb="{{URL::to(getPrefixDomain().'/produk/'.$produk->gambar2)}}"><a href="{{URL::to(getPrefixDomain().'/produk/'.$produk->gambar2)}}"> {{HTML::image(getPrefixDomain().'/produk/'.$produk->gambar2)}}</a></li>

                    @endif

                    @if($produk->gambar3!='')

                    <li data-thumb="{{URL::to(getPrefixDomain().'/produk/'.$produk->gambar3)}}"><a href="{{URL::to(getPrefixDomain().'/produk/'.$produk->gambar3)}}"> {{HTML::image(getPrefixDomain().'/produk/'.$produk->gambar3)}}</a></li>

                    @endif

                    @if($produk->gambar4!='')

                    <li data-thumb="{{URL::to(getPrefixDomain().'/produk/'.$produk->gambar4)}}"><a href="{{URL::to(getPrefixDomain().'/produk/'.$produk->gambar4)}}"> {{HTML::image(getPrefixDomain().'/produk/'.$produk->gambar4)}}</a></li>

                    @endif
                </ul>
            </div>
            <div class="email-product hidden-phone">
                <i class="fa fa-envelope"></i> <a class="navi-blog" href="mailto:{{ $setting->email }}?subject={{$produk->nama}}">Email us about this product</a>
            </div>
        </div>
        <div class="span6" style="display:inline-block;">
            <div class="option-title">
                <p class="product-title" style="font-size: 24px;">{{$produk->nama}}</p>
                <p class="price">
                    <big style="font-size: 19px; font-weight: bold !important; display: inline-block; padding-right: 16px;">{{ jadiRUpiah($produk->hargaJual) }}</big>
                    <small style="color: #A29B95; text-decoration: line-through;">{{ jadiRUpiah($produk->hargaCoret) }}</small>
                </p>
                <div class="hidden-phone" style="margin-top:30px; padding-bottom: 20px;">
                    <div id="twitter-produk" data-url="{{Request::url();}}" data-text="{{$produk->nama}} | " style="width:90px;"></div>
                    <div id="facebook-produk" data-url="{{Request::url();}}" data-text="{{$produk->nama}}" layout="button_count" style="padding-right:10px;"></div>
                    <div id="delicious-produk" data-url="{{Request::url();}}" data-text="{{$produk->nama}}" style="padding-right:20px;"></div>
                    <div id="gplus" data-url="{{Request::url();}}" data-text="{{$produk->nama}}" style="width:70px;"></div>
                    <div id="stumbleupon-produk" data-url="{{Request::url();}}" data-text="{{$produk->nama}}" style="padding-right:20px;"></div>
                </div>
            </div>
            <form action="#" id="addorder">
                <div class="option-cart">
                    @if($opsiproduk->count() > 0)                    
                    <label>Opsi :</label>
                    <select>
                        <option value=""> Pilih Opsi </option>
                        @foreach ($opsiproduk as $key => $opsi)
                        <option value="{{$opsi->id}}" {{ $opsi->stok==0 ? 'disabled':''}} >

                        {{$opsi->opsi1.($opsi->opsi2=='' ? '':' / '.$opsi->opsi2).($opsi->opsi3=='' ? '':' / '.$opsi->opsi3)}} {{jadiRupiah($opsi->harga)}}

                        </option>
                        @endforeach
                    </select>
                    @endif
                    <div class="opsi">
                        <label id="qty-label">Quantity</label>
                        <input type="text" value="1" name="qty" class="qty">
                    </div>
                    <button type="submit" class="cart-button">Add to cart</button>
                </div>
            </form>
        
            <div class="description">
                <h3 class="desc-title">DESKRIPSI PRODUK</h3>
                <p>{{$produk->deskripsi}}</p>
            </div>
        </div>
    </div>
</div>