<?php $this->view('shared/header', 'Cart Page'); ?>

<link rel="stylesheet" type="text/css" href="/css/Cart/style.css">

<?php
$subtotal = 0;
$tax = 0;
$total = 0;
?>

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
							<a href="/Cart/remove"><?=_('Remove')?></a>
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
</div>

<?php $this->view('shared/footer'); ?>