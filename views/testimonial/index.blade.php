@if(Session::has('msg'))
<div class="success" id='message' style='display:none'>
  <p>Terima kasih, testimonial anda sudah terkirim.</p>
</div>
@endif
@if($errors->all())
<div class="error" id='message' style='display:none'>
    Terjadi kesalahan dalam menyimpan data.<br>
    <ul>
        @foreach($errors->all() as $message)
        <li>{{ $message }}</li>
        @endforeach
    </ul>
</div>
@endif

<div class="pages">
    <h3>{{$nama}}</h3>
</div>
<div class="row-fluid">
    <div class="span8 list">
        @foreach(list_testimonial() as $key=>$value)
        <article class="testimonial">
            <a href="#" class="navi-blog"><h4>{{$value->nama}}</h4></a>
            <p><small class="date"><i class="fa fa-calendar"></i> {{waktuTgl($value->created_at)}}</small></p>
            <p>{{substr($value->isi,0,250)}}</p>
        </article>
        @endforeach
        {{list_testimonial()->links()}}
    </div>
    <aside class="span4" style="padding-top: 10px;">
        <p style="font-size: 16px; margin-bottom: 20px;"><strong>Kirim Testimonial</strong></p>
        <form action="{{url('testimoni')}}" method="post">
            <label>Nama</label>
            <input type="text" name="nama" class="input-text" required style="height: 30px; width: 100%;"><br><br>
            <label>Testimonial</label>
            <textarea name="testimonial" class="textarea" required style="width: 100%;"></textarea><br><br>
            <input type="submit" style="float:right" class="cart-button" value="Kirim Testimonial">
            <br><br>
        </form>
    </aside>
</div>