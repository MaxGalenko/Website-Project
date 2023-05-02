<?php $this->view('shared/header', 'Cart Page'); ?>

<div class="small-container cart-page">
	<table>
		<tr>
			<th>Product</th>
			<th>Quantity</th>
			<th>Subtotal</th>
		</tr>
		<tr>
			<td>
				<div class="cart-info">
					<img src="">
					<div>
						<p>Red Printed TShirt</p>
						<small>Price: $50.00</small>
						<a href="">Remove</a>
					</div>
				</div>
			</td>
			<td><input type="number" name="" value="1"></td>
			<td>$50.00</td>
		</tr>
	</table>
</div>

<?php $this->view('shared/footer'); ?>