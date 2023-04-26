<?php $this->view('shared/header', 'Main Page'); ?>

<h1 style="text-align: center;">Main feed</h1>

<!-- Show product list -->
<?php foreach ($data as $product): ?>
  <div>
    <h2><?php echo $product->title ?></h2>
    <p><?php echo $product->type ?></p>
    <p><?php echo $product->description ?></p>

    <?php if ($product->image): ?>
      <img src="<?php echo "./images/{$product->image}" ?>" alt="Product Image">
    <?php endif; ?>

    <p><?php echo $product->unit_price ?></p>
  </div>
<?php endforeach; ?>

<?php $this->view('shared/footer'); ?>
