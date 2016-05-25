<div class="confirm">
	<h3>Konfirmasi Order</h3>
	<div>
		<p>Silakan masukkan kode order yang mau anda cari!</p>
		{{Form::open(array('url'=>'konfirmasiorder','method'=>'post','class'=>'form-inline'))}} 
			<input type="text" class="input-large" placeholder="Kode Order" name="kodeorder" style="height:30px;" required>
			<button type="submit" class="cart-button" style="margin-top:0;"><i class="fa fa-check"></i> Cari Kode</button>
		{{Form::close()}} 
	</div>
</div>
