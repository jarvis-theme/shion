<div class="row standard">
	<header class="span12 prime">
		<h3>Konfirmasi Order</h3>
	</header>
</div>

<div class="row-fluid">
	<div class="span12">
		<div class="form-horizontal">
			<div class="table-responsive">
				<table class="table table-bordered" >
					<tr>
						<th align="center">Kode Order</th>
						<th align="center">Tanggal Order</th>
						<th align="center">Order</th>
						<th align="center">Jumlah</th>
						@if($checkouttype != 1)
						<th align="center">Jumlah yg belum di bayar</th>
						@endif
						<th align="center">No Resi</th>
						<th align="center">Status</th>
					</tr>
					<tr>
						<td>
							{{$checkouttype==1 ? prefixOrder().$order->kodeOrder : prefixOrder().$order->kodePreorder}}
						</td>
						<td>{{$checkouttype==1 ? waktu($order->tanggalOrder) : waktu($order->tanggalPreorder)}}</td>
						<td>
							<ul>
							@if ($checkouttype==1)
								@foreach ($order->detailorder as $detail)
									<li>{{$detail->produk->nama}} {{$detail->opsiSkuId !=0 ? '('.$detail->opsisku->opsi1.($detail->opsisku->opsi2 != '' ? ' / '.$detail->opsisku->opsi2:'').($detail->opsisku->opsi3 !='' ? ' / '.$detail->opsisku->opsi3:'').')':''}} - {{$detail->qty}}</li>
								@endforeach
							@else
								{{$order->preorderdata->produk->nama}} 
								({{$order->opsiSkuId==0 ? 'No Opsi' : $order->opsisku->opsi1.($order->opsisku->opsi2!='' ? ' / '.$order->opsisku->opsi2:'').($order->opsisku->opsi3!='' ? ' / '.$order->opsisku->opsi3:'')}})
								 - {{$order->jumlah}}
							@endif                                                  
							</ul>
						</td>
						<td>{{ price($order->total) }}</td>
						@if($checkouttype != 1)
						<td>
							@if($checkouttype==1)
							- {{price($order->total)}}
							
							@else 

								@if($order->status < 2)

								- {{price($order->total)}}
								
								@elseif(($order->status > 1 && $order->status < 4) || $order->status==7)

								- {{price($order->total - $order->dp)}}

								@else

								0
								@endif

							@endif
						</td>
						@endif
						<td>{{$order->noResi}}</td>
						<td>
							@if($checkouttype==1)
								@if($order->status==0)
								<span class="label label-warning">Pending</span>
								@elseif($order->status==1)
								<span class="label label-important">Konfirmasi diterima</span>
								@elseif($order->status==2)
								<span class="label label-info">Pembayaran diterima</span>
								@elseif($order->status==3)
								<span class="label label-success">Terkirim</span>
								@elseif($order->status==4)
								<span class="label label-default">Batal</span>
								@endif
							@else 
								@if($order->status==0)
								<span class="label label-warning">Pending</span>
								@elseif($order->status==1)
								<span class="label label-important">Konfirmasi DP diterima</span>
								@elseif($order->status==2)
								<span class="label label-info">DP terbayar</span>
								@elseif($order->status==3)
								<span class="label label-info">Menunggu pelunasan</span>
								@elseif($order->status==4)
								<span class="label label-info">Pembayaran lunas</span>
								@elseif($order->status==5)
								<span class="label label-success">Terkirim</span>
								@elseif($order->status==6)
								<span class="label label-default">Batal</span>
								@elseif($order->status==7)
								<span class="label label-info">Konfirmasi Pelunasan diterima</span>
								@endif
							@endif
						</td>
					</tr>
				</table>
			</div>
			<br>

			@if($paymentinfo!=null)
				<h3><center>Paypal Payment Details</center></h3>
				<hr>
				<table class='table table-bordered'>
					<tr>
						<td>Payment Status</td><td>:</td><td>{{$paymentinfo['payment_status']}}</td>
					</tr>
					<tr>
						<td>Payment Date</td><td>:</td><td>{{$paymentinfo['payment_date']}}</td>
					</tr>
					<tr>
						<td>Address Name</td><td>:</td><td>{{$paymentinfo['address_name']}}</td>
					</tr>
					<tr>
						<td>Payer Email</td><td>:</td><td>{{$paymentinfo['payer_email']}}</td>
					</tr>
					<tr>
						<td>Item Name</td><td>:</td><td>{{$paymentinfo['item_name1']}}</td>
					</tr>
					<tr>
						<td>Receiver Email</td><td>:</td><td>{{$paymentinfo['receiver_email']}}</td>
					</tr>
					<tr>
						<td>Total Payment</td><td>:</td><td>{{$paymentinfo['payment_gross']}} {{$paymentinfo['mc_currency']}}</td>
					</tr>
				</table>
				<p>Thanks you for your order.</p>
			@endif      

			@if($order->jenisPembayaran==1)
				<div class="well">
					<h3 class="offset2">{{trans('content.step5.confirm_btn')." ".trans('content.step3.transfer')}}</h3>
					<hr>
					@if($checkouttype==1) 
						{{-- */ $url = 'konfirmasiorder/' /* --}} 
					@else 
						{{-- */ $url = 'konfirmasipreorder/' /* --}} 
					@endif

					{{Form::open(array('url'=> $url.$order->id, 'method'=>'put', 'class'=> 'form-horizontal'))}} 
						<div class="control-group">
							<label class="control-label" for="inputEmail" > Nama Pengirim</label>
							<div class="controls">
								<input class="span6" type="text" name="nama" value="{{Input::old('nama')}}" required>
							</div>
						</div>
						<div class="control-group">
							<label class="control-label" for="inputEmail"> No Rekening</label>
							<div class="controls">
								<input type="text" class="span6" name="noRekPengirim" value="{{Input::old('noRekPengirim')}}" required>
							</div>
						</div>
						<div class="control-group">
							<label class="control-label" for="inputEmail"> Rekening Tujuan</label>
							<div class="controls">
								<select name="bank">
									<option value="">-- Pilih Bank Tujuan --</option>
									@foreach ($banktrans as $bank)
										<option value="{{$bank->id}}">{{$bank->bankdefault->nama}} - {{$bank->noRekening}} - A/n {{$bank->atasNama}}</option>
									@endforeach
								</select>
							</div>
						</div>
						<div class="control-group">
							<label class="control-label" for="inputEmail"> Jumlah</label>
							<div class="controls">
							@if($checkouttype==1)
								<input class="span6" type="text" name="jumlah" value="{{$order->total}}" required style="height:30px;">
							@else
								@if($order->status < 2)
								<input class="span6" type="text" name="jumlah" value="{{$order->dp}}" style="height:30px;" required>
								@elseif(($order->status > 1 && $order->status < 4) || $order->status==7)
								<input class="span6" type="text" name="jumlah" value="{{$order->total - $order->dp}}" required style="height:30px;">
								@endif
							@endif
							</div>
						</div>
						
						<div class="control-group">
							<div class="controls">
								<button type="submit" class="cart-button"><i class="fa fa-check"></i> {{trans('content.step5.confirm_btn')}}</button>
							</div>
						</div>
					{{Form::close()}} 
				</div>
			@endif
			@if($order->jenisPembayaran==2)
				<div class="well">
					<center>
						<h3>{{trans('content.step5.confirm_btn')}} Paypal</h3><hr>
						<p>{{trans('content.step5.paypal')}}</p>
					</center><br>
					<center id="paypal">{{$paypalbutton}}</center>
					<br>
				</div>
			@elseif($order->jenisPembayaran==4) 
				@if(($checkouttype==1 && $order->status < 2) || ($checkouttype==3 && ($order->status!=6))) 
				<div class="well">
					<center>
						<h3>{{trans('content.step5.confirm_btn')}} iPaymu</h3><hr>
						<p>{{trans('content.step5.ipaymu')}}</p><br>
						<a class="btn-pay" href="{{url('ipaymu/'.$order->id)}}" target="_blank">{{trans('content.step5.ipaymu_btn')}}</a>
					</center>
					<br>
				</div>
				@endif 
			@elseif($order->jenisPembayaran==5 && $order->status == 0)
				<div class="well">
					<center>
						<h3><b>{{trans('content.step5.confirm_btn')}} DOKU MyShortCart</b></h3><hr>
						<p>{{trans('content.step5.doku')}}</p><br>
						{{ $doku_button }}
					</center>
					<br>
				</div>
			@elseif($order->jenisPembayaran == 6 && $order->status == 0)
				<div class="well">
					<center>
						<h3><b>{{trans('content.step5.confirm_btn')}} Bitcoin</b></h3><hr>
						<p>{{trans('content.step5.bitcoin')}}</p><br>
						{{$bitcoinbutton}}
					</center>
					<br>
				</div>
			@elseif($order->jenisPembayaran == 8 && $order->status == 0)
				<div class="well">
					<center>
						<h3><b>{{trans('content.step5.confirm_btn')}} Veritrans</b></h3><hr>
						<p>{{trans('content.step5.veritrans')}}</p><br>
						<button class="btn-pay" onclick="location.href='{{ $veritrans_payment_url }}'">{{trans('content.step5.veritrans_btn')}}</button>
					</center>
					<br>
				</div>
			@endif
		</div>
	</div>
</div>
