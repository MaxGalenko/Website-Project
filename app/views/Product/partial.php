<main>
	<div class="card">
		<div class="image">
			<?php if($data->image){ ?>
				<img src="/images/<?= $data->image ?>" alt="Product Image">
			<?php } ?>
		</div>
		<div class="caption">
			<h6 class="product_name"><?= $data->title ?></h6>
			<p class="price"><b><?= $data->unit_price ?></b></p>
			<!-- <?php if ($data->discount_price != 0) { ?>
				<p class="discount"><b><del><?php $data->discount_price ?></del></b></p>
			<?php } ?> -->
			<p class="discount"><b><del><?php $data->discount_price ?></del></b></p>
			<p class="quantity"><b>Q: <?= $data->quantity ?></b></p>
		</div>
		<form action="/Cart/index">
			<button class="add">Add to cart</button>
		</form>
		 <a href="/Product/details/<?= $data->product_id; ?>"><button>View details</button></a>
	</div>
</main>