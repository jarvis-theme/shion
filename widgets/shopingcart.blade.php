<i class="fa fa-shopping-cart"></i> {{ Shpcart::cart()->total_items() }} Items
<p style="margin-top: 15px; color: #666;">Total: {{ price(Shpcart::cart()->total() )}}</p>