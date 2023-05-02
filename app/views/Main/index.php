<?php $this->view('shared/header', 'Main Page'); ?>

<link rel="stylesheet" type="text/css" href="/css/Main/style.css">

<h1 style="text-align: center;">Products</h1>

<!-- Show product list -->
<div class="row row-cols-1 row-cols-md-5">
<?php
foreach ($data as $product) {
	$this->view('Product/partial', $product);
} ?>

</div>

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

<?php $this->view('shared/footer'); ?>