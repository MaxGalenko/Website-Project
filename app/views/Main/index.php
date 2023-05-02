<?php $this->view('shared/header', 'Main Page'); ?>

<link rel="stylesheet" type="text/css" href="/css/MainStyle.css">

<h1 style="text-align: center;">Products</h1>

<!-- Show product list -->
<div class="row row-cols-1 row-cols-md-5">
<?php
foreach ($data as $product) { ?>
		<div class="card" style="width: 18rem;">
	  <img src="..." class="card-img-top" alt="...">
	  <div class="card-body">
	    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
	  </div>
	</div>
<?php
}
?>
</div>

<?php $this->view('shared/footer'); ?>