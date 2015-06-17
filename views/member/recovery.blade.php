@if(Session::has('error'))
    <div class="error" id='message' style='display:none'>
        {{Session::get('error')}}
    </div>
@endif
@if(Session::has('success'))
    <div class="success" id='message' style='display:none'>
        <p>Selamat, anda sudah berhasil register. Silakan check email untuk mengetahui informasi akun anda.</p>
    </div>
@endif
@if(Session::has('errorrecovery'))
    <div class="error" id='message' style='display:none'>
        <p>Maaf, email anda tidak ditemukan.</p>
    </div>
@endif  

<section class="login">
    <div class="row-fluid">
        <header class="span12 pages">
            <h3>Forget Password</h3>
        </header>
    </div>

    <div class="wrap" style="padding: 0 20px;">
        <div class="row-fluid">
            <div class="span7">
                {{Form::open(array('url' => 'member/recovery/'.$id.'/'.$code, 'class' => 'form-horizontal'))}}
                    <div class="control-group">
                        <label class="control-label" for="inputEmail">Password Baru</label>
                        <div class="controls">
                            <input class="form-control" type="password" name="password" placeholder="password baru" style="height: 30px;" required>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="inputEmail">Konfirmasi Password Baru</label>
                        <div class="controls">
                            <input class="form-control" type="password" name="password_confirmation" placeholder="konfirmasi password baru" style="height: 30px;" required>
                        </div>
                    </div>
                    <div class="control-group">
                        <div class="controls">
                            <button type="submit" class="cart-button">Update Password</button>
                        </div>
                    </div>
                {{Form::close()}}
            </div>

            <div class="span5">
                @foreach(vertical_banner() as $item)
                <a href="{{url($item->url)}}">
                    <img src="{{url(banner_image_url($item->gambar))}}" class="pull-right" />
                </a>
                @endforeach
            </div>
        </div>
    </div>
</section>