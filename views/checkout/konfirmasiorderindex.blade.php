@if(Session::has('message'))
<div class="error" id='message' style='display:none'>
	<p>Maaf, kode order anda tidak ditemukan.</p>
</div>
@endif
            
<div style="width: 100%; margin-top: 30px; text-align: center; ">
    
    <h3 style="text-align: center; border-bottom: 1px dotted;">Konfirmasi Order</h3>
        <div class="">

			<p>Silakan masukkan kode order yang mau anda cari!</p>
			{{Form::open(array('url'=>'konfirmasiorder','method'=>'post','class'=>'form-inline'))}}
			<input type="text" class="input-large" placeholder="Kode Order" name='kodeorder' style="height:30px;" required>
		  	<button type="submit" class="cart-button" style="margin-top:0;"><i class="fa fa-check"></i> Cari Kode</button>
			{{Form::close()}}

        </div>
</div>
            
