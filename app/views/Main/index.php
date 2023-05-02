<?php $this->view('shared/header', 'Main Page'); ?>

<link rel="stylesheet" type="text/css" href="/css/MainStyle.css">

<h1 style="text-align: center;">Products</h1>

<!-- Show product list -->
<div class="row row-cols-1 row-cols-md-5">
<?php foreach ($data as $product) { ?>
	<main>
		<div class="card">
			<div class="image">
				<?php if($product->image){ ?>
					<img src="/images/<?= $product->image ?>" alt="Product Image">
				<?php } ?>
			</div>
			<div class="caption">
				<h6 class="product_name"><?= $product->title ?></h6>
				<p class="price"><b><?= $product->unit_price ?></b></p>
				<!-- <?php if ($product->discount_price != 0) { ?>
					<p class="discount"><b><del><?php $product->discount_price ?></del></b></p>
				<?php } ?> -->
				<p class="discount"><b><del><?php $product->discount_price ?></del></b></p>
				<p class="quantity"><b>Q: <?= $product->quantity ?></b></p>
			</div>
			<button class="add">Add to cart</button>
		</div>
	</main>
<?php } ?>
</div>

<?php $this->view('shared/footer'); ?>