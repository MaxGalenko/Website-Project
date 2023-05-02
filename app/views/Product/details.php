<?php $this->view('shared/header', 'Product Details'); ?>

<div class="product-details">
    <div class="image">
        <?php if($product->image){ ?>
            <img src="/images/<?= $product->image ?>" alt="Product Image">
        <?php } ?>
    </div>
    <div class="caption">
        <h1 class="product_name"><?= $product->title ?></h1>
        <p class="price"><b><?= $product->unit_price ?></b></p>
        <?php if ($product->discount_price != 0) { ?>
            <p class="discount"><b><del><?= $product->discount_price ?></del></b></p>
        <?php } ?>
        <p class="description"><?= $product->description ?></p>
        
    </div>
</div>

<?php $this->view('shared/footer'); ?>
