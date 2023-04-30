<?php $this->view('shared/header', 'Main Page'); ?>

<link rel="stylesheet" type="text/css" href="/css/MainStyle.css">

<h1 style="text-align: center;">Main feed</h1>

<!-- Show product list -->
<?php foreach ($data as $product) { ?>
	<main>
	<div class="card">
		<div class="image">
			<?php if($product->image){ ?>
				<img src="/images/<?= $product->image ?>" alt="Product Image">
			<?php } ?>
			
		</div>
		<div class="caption">
			<p class="product_name"><?= $product->title ?></p>
			<p class="price"><b><?= $product->unit_price ?></b></p>
			<p class="discount"><b><del><?= $product->unit_price ?></del></b></p>
		</div>
		<button class="add">Add to cart</button>
	</div>
</main>
<?php } ?>

<?php $this->view('shared/footer'); ?>