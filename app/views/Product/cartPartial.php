<tr>
	<td>
		<div class="cart-info">
			<img src="/images/<?= $data->image ?>">
			<div>
				<p><?= $data->title ?></p>
				<small>Price: $<?= $data->unit_price ?></small>
				<br>
				<a href="/Cart/remove"><?=_('Remove')?></a>
			</div>
		</div>
	</td>
	<td><input type="number" value="1" min="1" max="100" onkeydown="return false"></td>
	<td>$<?= $data->unit_price ?></td>
</tr>