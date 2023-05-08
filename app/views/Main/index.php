<?php $this->view('shared/header', 'Main Page'); ?>
<script src="/json/filter.js"></script>
<link rel="stylesheet" type="text/css" href="/css/Main/style.css">

<h1 style="text-align: center;">Products</h1>

<!-- Show product list -->

<form action="/Main/index" method="post">
	<label for="filter">Filter</label>
	<select name="filter" onchange="this.form.submit();" id="filter">
    	<option value="default">Default</option>
    	<option value="ascending">Ascending</option>
    	<option value="descending">Descending</option>
  	</select>
</form>

<div class="row row-cols-1 row-cols-md-5" id="prods">
<?php
foreach ($data as $product) {
	$this->view('Product/mainPartial', $product);
} ?>

</div>

<?php $this->view('shared/footer'); ?>