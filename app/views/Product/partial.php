<main>
	<div class="card" style="width: 18rem;">
	  <div class="image">
			<?php if($data->image){ ?>
				<img src="/images/<?= $data->image ?>" alt="No product Image" style="width: 80%">
			<?php } ?>
		</div>
	  <div class="card-body">
	    <h5 class="card-title"><?= $data->title ?></h5>
	    <p class="card-text"><?= $data->unit_price ?></p>
	    <p class="card-text">Q: <?= $data->quantity ?></p>
	    <a href="#" class="btn btn-primary">Add to Cart</a>
	    <a href="#" class="btn btn-primary">View details</a>
	  </div>
	</div>
<!-- <div class="card">
		<div class="image">
			<?php if($data->image){ ?>
				<img src="/images/<?= $data->image ?>" alt="Product Image">
			<?php } ?>
		</div>
		<div class="caption">
			<h6 class="product_name"><?= $data->title ?></h6>
			<p class="price"><b><?= $data->unit_price ?></b></p>
			<?php if ($data->discount_price != 0) { ?>
				<p class="discount"><b><del><?php $data->discount_price ?></del></b></p>
			<?php } ?>
			<p class="discount"><b><del><?php $data->discount_price ?></del></b></p>
			<p class="quantity"><b>Q: <?= $data->quantity ?></b></p>
		</div>
		<form action="/Cart/index">
			<button class="add">Add to cart</button>
		</form>
		<form action="/Product/details/<?= $data->product_id; ?>">
			<button>View details</button>

		</form>
	</div> -->

<!-- 
	<div class="container mt-5" style="min-height: 400px;">
		<div class="row">
			<div class="col-md-4">
				<div class="image">
					<?php if($data->image){ ?>
						<img src="/images/<?= $data->image ?>" alt="Product Image" style="height: 50%;">
					<?php } ?>
				</div>			
			</div>
		</div>
	</div> -->
</main>