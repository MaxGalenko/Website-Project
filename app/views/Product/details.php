<?php $this->view('shared/header', 'Product Details'); ?>

<div class="container">
    <div class="card">
        <div class="card-body">
            <?php if ($data) { ?>
            	<?php if ($data->image) { ?>
                    <img src="/images/<?= $data->image ?>" width="50%" class="float-img">
                <?php } ?>
            <?php } else { ?>
                <p>Product not found.</p>
            <?php } ?>
                <h1><?= $data->title ?></h1>
                <p><b>Type:</b> <?= $data->type ?></p>
                <p><b>Description:</b> <?= $data->description ?></p>
                <?php if ($data->discount_price != 0) { ?>
                <p class="card-text"><del>$<?= $data->unit_price ?><br></del>$<?= $data->discount_price ?></p>
            <?php } else { ?>
                <p class="card-text"><?= $data->unit_price ?></p>
            <?php } ?>
                <p><b>Quantity:</b> <?= $data->quantity ?></p>

            <br><a href="/Main/index" class="btn btn-secondary">Back</a>
            <a href="/Cart/addToCart/<?= $data->product_id ?>" class="btn btn-defualt" style="background-color: #324A5F; color: #FFFFFF; ">Add to Cart</a>
        </div>
    </div>
</div>
<?php $this->view('shared/footer'); ?>

