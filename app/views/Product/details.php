<?php $this->view('shared/header', 'Product Details'); ?>
<div class="container">
    <div class="card">
        <div class="card-body">
            <?php if ($data) { ?>
                <h1><?= $data->title ?></h1>
                <p><b>Type:</b> <?= $data->type ?></p>
                <p><b>Description:</b> <?= $data->description ?></p>
                <p><b>Unit Price:</b> <?= $data->unit_price ?></p>
                <p><b>Quantity:</b> <?= $data->quantity ?></p>
                <?php if ($data->image) { ?>
                    <img src="/images/<?= $data->image ?>" width="200">
                <?php } ?>
            <?php } else { ?>
                <p>Product not found.</p>
            <?php } ?>
            <br><a href="/Main/index" class="btn btn-secondary">Back</a>
        </div>
    </div>
</div>
<?php $this->view('shared/footer'); ?>

