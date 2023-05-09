<?php $this->view('shared/header', 'Main Page'); ?>
<script src="/json/filter.js"></script>
<link rel="stylesheet" type="text/css" href="/css/Main/style.css">

<h1 style="text-align: center;">Products</h1>

<!-- Show product list -->

<form action="/Main/index" method="post">
	<label for="color">Filter:</label>
	<select name="filter" onchange="this.form.submit();" id="filter" aria-label="Filtering">
    	<option value="chooseFilter"><?=_('-Choose Filter-')?></option>
		<option value="default"><?=_('Default')?></option>
    	<option value="ascendingP"><?=_('Price Ascending')?></option>
    	<option value="descendingP"><?=_('Price Descending')?></option>
		<option value="ascendingT"><?=_('Title Ascending')?></option>
    	<option value="descendingT"><?=_('Title Descending')?></option>
  	</select>
</form>

<div class="row row-cols-1 row-cols-md-5" id="prods">
<?php foreach ($data as $product) { ?>
	<main>
		<div class="card" style="width: 18rem;">
			<div class="image">
				<?php if($product->image){ ?>
					<img src="/images/<?= $product->image ?>" alt="No image for this product" style="width: 80%">
				<?php } else { ?>
					<img alt="No image for this product" style="width: 80%">
				<?php } ?>
			</div>
			<div class="card-body">
				<h5 class="card-title"><?= $product->title ?></h5>
				<?php if ($product->discount_price != 0) { ?>
					<p class="card-text">$<del><?= $product->unit_price ?><br></del>$<?= $product->discount_price ?></p>
				<?php } else { ?>
					<p class="card-text">$<?= $product->unit_price ?></p>
				<?php } ?>
				<p class="card-text">Q: <?= $product->quantity ?></p>
				<?php if (isset($_SESSION['role']) && $_SESSION['role'] === 'admin') { ?>
					<a href="/Product/edit/<?= $product->product_id; ?>" class="btn btn-default" style="background-color: #324A5F; color: #FFFFFF;">Edit Product</a>
					<a href="/Product/delete/<?= $product->product_id; ?>" class="btn btn-default" style="background-color: #324A5F; color: #FFFFFF;">Delete Product</a>
				<?php } else { ?>
					<a href="/Cart/addToCart/<?= $product->product_id ?>" class="btn btn-defualt" style="background-color: #324A5F; color: #FFFFFF; ">Add to Cart</a>
				<?php } ?>
				<a href="/Product/details/<?= $product->product_id; ?>" class="btn btn-default" style="background-color: #324A5F; color: #FFFFFF;">View details</a>
			</div>
		</div>
	</main>
<?php } ?>

</div>

<?php $this->view('shared/footer'); ?>