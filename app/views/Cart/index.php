<?php $this->view('shared/header', 'Cart Page'); ?>

<link rel="stylesheet" type="text/css" href="/css/Cart/style.css">

<div class="cart-page">
	<table>
		<tr>
			<th>Product</th>
			<th>Quantity</th>
			<th>Subtotal</th>
		</tr>
		<tr>
			<td>
				<div class="cart-info">
					<img src="/images/7-644803ea77d0a.png">
					<div>
						<p>Red Printed TShirt</p>
						<small>Price: $50.00</small>
						<br>
						<a href="">Remove</a>
					</div>
				</div>
			</td>
			<td><input type="number" name="" value="1"></td>
			<td>$50.00</td>
		</tr>
	</table>

	<div class="total-price">
		<table>
			<tr>
				<td>Subtotal</td>
				<td>$200.00</td>
			</tr>
			<tr>
				<td>Tax</td>
				<td>$25.00</td>
			</tr>
			<tr>
				<td>Subtotal</td>
				<td>$225.00</td>
			</tr>
		</table>
	</div>

</div>

<?php $this->view('shared/footer'); ?>