<div class="counter">
    <a href="javascript:void(0);" class="minicart_link" > <span class="item"><b>{{Shpcart::wishlist()->total_items()}}</b> ITEM </span> <span class="price"><b></b></span> </a>
</div>
<div class="cart_drop"> <span class="darw"></span>
    <ul>
    	<!-- Item -->
    	@foreach (Shpcart::wishlist()->contents() as $key => $cart)
        	<li><!-- <img src="images/mini_c_item1.png"> -->
                <a href="#">{{$cart['name']}}</a>
                <span class="price">{{ $cart['qty'] }}</span>
            </li>
        @endforeach
        <!-- endforeach Item shop -->

        <div class="cart_bottom">
            <div class="subtotal_menu"><small>Subtotal:</small><big></big></div>
            <a href="{{URL::to('checkout')}}">Cart</a>
        </div>
    </ul>
</div>