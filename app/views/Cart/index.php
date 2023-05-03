<?php $this->view('shared/header', 'Cart Page'); ?>

<link rel="stylesheet" type="text/css" href="/css/Cart/style.css">

<div class="cart-page">
	<table>
		<tr>
			<th><?=_('Product')?></th>
			<th><?=_('Quantity')?></th>
			<th><?=_('Subtotal')?></th>
		</tr>
		<?php
		foreach ($data as $product) {
			$this->view('Product/cartPartial', $product);
		} ?>
	</table>

	<div class="total-price">
		<table>
			<tr>
				<td><?=_('Subtotal')?></td>
				<td>$200.00</td>
			</tr>
			<tr>
				<td><?=_('Tax')?></td>
				<td>$25.00</td>
			</tr>
			<tr>
				<td><?=_('Total')?></td>
				<td>$225.00</td>
			</tr>
		</table>
	</div>
</div>

<?php $this->view('shared/footer'); ?>