<?php $this->view('shared/header', 'Cart Page'); ?>

<link rel="stylesheet" type="text/css" href="/css/Cart/style.css">

<?php
$subtotal = 0;
$tax = 0;
$total = 0;
?>
<form name="checkout-charge" action="/Cart/checkout" method="post">
	<div class="cart-page">
		<table>
			<tr>
				<th><?=_('Product')?></th>
				<th><?=_('Subtotal')?></th>
			</tr>
			<?php
			foreach ($data as $product) { 
				$subtotal += $product->unit_price;
				?>
				<tr>
					<td>
						<div class="cart-info">
							<img src="/images/<?= $product->image ?>">
							<div>
								<p><?= $product->title ?></p>
								<small>Price: $<?= $product->unit_price ?></small>
								<br>
								<a href="/Cart/removeFromCart/<?= $product->order_details_id ?>"><?=_('Remove')?></a>
							</div>
						</div>
					</td>
					<td>$<?= $product->unit_price ?></td>
				</tr>
			<?php } ?>
		</table>

		<?php
		$tax = $subtotal * 0.15;
		$total = $subtotal + $tax;
		?>

		<input type="hidden" name="total" value="<?= $total ?>">

		<div class="total-price">
			<table>
				<tr>
					<td><?=_('Subtotal')?></td>
					<td>$<?= $subtotal ?></td>
				</tr>
				<tr>
					<td><?=_('Tax')?></td>
					<td>$<?= number_format($tax, 2) ?></td>
				</tr>
				<tr>
					<td><?=_('Total')?></td>
					<td>$<?= number_format($total, 2) ?></td>
				</tr>
			</table>
		</div>
		<div class="checkout">
			<button class="btn btn-default" type="submit" name="action" style="background-color: #324A5F; color: #FFFFFF; width: 100%; ">Checkout</button>
			<div class="alert alert-warning" role="alert">
				Note: You will need to contact us to discuss the payment details before receiveing the product
			</div>
		</div>
	</div>
</form>

<?php $this->view('shared/footer'); ?>