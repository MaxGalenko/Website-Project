<main>
<!-- 	<div class="card">
		<div class="image">
			<?php if($data->image){ ?>
				<img src="/images/<?= $data->image ?>" alt="Product Image">
			<?php } ?>
		</div>
		<div class="caption">
			<h6 class="product_name"><?= $data->title ?></h6>
			<p class="price"><b><?= $data->unit_price ?></b></p>
			<?php if ($data->discount_price != 0) { ?>
				<p class="discount"><b><del><?= $data->unit_price ?></del></b></p>
				<p class="discount_price"><b><?= $data->discount_price ?></b></p>
			<?php } ?>
			<p class="quantity"><b>Q: <?= $data->quantity ?></b></p>
		</div>
		<form action="/Cart/add" method="POST">
			<input type="hidden" name="product_id" value="<?= $data->product_id ?>">
			<button class="add" type="submit">Add to cart</button>
		</form>
		<a href="/Product/details/<?= $data->product_id; ?>"><button>View details</button></a>
	</div> -->

	<div class="card" style="width: 18rem;">
	    <div class="image">
	        <?php if($data->image){ ?>
	            <img src="/images/<?= $data->image ?>" alt="Product Image" style="width: 80%">
	        <?php } else { ?>
	            <img alt="No image for this product" style="width: 80%">
	        <?php } ?>
	    </div>
	    <div class="card-body">
	        <h5 class="card-title"><?= $data->title ?></h5>
	        <?php if ($data->discount_price != 0) { ?>
	            <p class="card-text">$<del><?= $data->unit_price ?><br></del>$<?= $data->discount_price ?></p>
	        <?php } else { ?>
	            <p class="card-text"><?= $data->unit_price ?></p>
	        <?php } ?>
	        <p class="card-text">Q: <?= $data->quantity ?></p>
	        <?php if (isset($_SESSION['role']) && $_SESSION['role'] === 'admin') { ?>
	            <a href="/Product/edit/<?= $data->product_id; ?>" class="btn btn-default" style="background-color: #324A5F; color: #FFFFFF;">Edit Product</a>
	            <a href="/Product/delete/<?= $data->product_id; ?>" class="btn btn-default" style="background-color: #324A5F; color: #FFFFFF;">Delete Product</a>
	        <?php } else { ?>
	            <a href="#" class="btn btn-defualt" style="background-color: #324A5F; color: #FFFFFF; ">Add to Cart</a>
	        <?php } ?>
	        <?php if (isset($_SESSION['role']) && $_SESSION['role'] === 'admin') { ?>

	        <?php } else { ?>
	            <a href="/Product/details/<?= $data->product_id; ?>" class="btn btn-default" style="background-color: #324A5F; color: #FFFFFF;">View details</a>
	        <?php } ?>
	    </div>
	</div>


</main>