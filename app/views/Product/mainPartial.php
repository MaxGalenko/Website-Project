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
		<form action="/Cart/add">
			<button class="add">Add to cart</button>
		</form>
		 <a href="/Product/details/<?= $data->product_id; ?>"><button>View details</button></a>
	</div>
	<div class="card" style="width: 18rem;">
	  <div class="image">
			<?php if($data->image){ ?>
				<img src="/images/<?= $data->image ?>" alt="Product Image" style="width: 80%">
			<?php } else { ?>
				<img alt="No image for this product" style="width: 80%">
			<?php 
		} ?>
		</div>
	  <div class="card-body">
	    <h5 class="card-title"><?= $data->title ?></h5>
	    <p class="card-text"><?= $data->unit_price ?></p>
	    <!-- <?php if ($data->discount_price != 0) { ?>
				<p class="discount"><b><del><?php $data->discount_price ?></del></b></p>
			<?php } ?> -->
		<p class="card-text"><b><del><?php $data->discount_price ?></del></b></p>
	    <p class="card-text">Q: <?= $data->quantity ?></p>
	    <a href="#" class="btn btn-primary" style="background-color: #324A5F">Add to Cart</a>
	    <a href="/Product/details/<?= $data->product_id; ?>" class="btn btn-primary" style="background-color: #324A5F">View details</a>
	  </div>
	</div>
</main>