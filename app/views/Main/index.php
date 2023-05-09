<?php $this->view('shared/header', 'Main Page'); ?>
<script src="/json/filter.js"></script>
<link rel="stylesheet" type="text/css" href="/css/Main/style.css">

<h1 style="text-align: center;">Products</h1>

<!-- Show product list -->

<form action="/Main/index" method="post">
	<label for="color">Filter:</label>
	<select name="filter" onchange="this.form.submit();" id="filter" aria-label="Filtering">
    	<option value="chooseFilter">-Choose Filter-</option>
		<option value="default">Default</option>
    	<option value="ascendingP">Price Ascending</option>
    	<option value="descendingP">Price Descending</option>
		<option value="ascendingT">Title Ascending</option>
    	<option value="descendingT">Title Descending</option>
  	</select>
</form>

<div class="row row-cols-1 row-cols-md-5" id="prods">
<?php
foreach ($data as $product) {
	$this->view('Product/mainPartial', $product);
} ?>

</div>

<?php $this->view('shared/footer'); ?>