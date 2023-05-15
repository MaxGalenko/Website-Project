<?php $this->view('shared/header', "<?_('Product Details')?>"); ?>

<div class="container">
    <div class="card">
        <div class="card-body">
            <?php if ($data) { ?>
            	<?php if ($data->image) { ?>
                    <img src="/images/<?= $data->image ?>" width="50%" class="float-img">
                <?php } ?>
            <?php } else { ?>
                <p><?=_('Product not found.')?></p>
            <?php } ?>
                <h1><?= $data->title ?></h1>
                <p><b><?=_('Type:')?></b> <?= $data->type ?></p>
                <p><b><?=_('Description:')?></b> <?= $data->description ?></p>
                <?php if ($data->discount_price != 0) { ?>
                <p class="card-text"><del>$<?= $data->unit_price ?><br></del>$<?= $data->discount_price ?></p>
            <?php } else { ?>
                <p class="card-text"><?= $data->unit_price ?></p>
            <?php } ?>
                <p><b><?=_('Quantity:')?></b> <?= $data->quantity ?></p>

            <br><a href="/Main/index" class="btn btn-secondary"><?=_('Back')?></a>
            <?php if(isset($_SESSION['role']) && $_SESSION['role'] == 'admin'){ ?>
                <a href="/Product/edit/<?= $data->product_id; ?>" id="e<?=$data->product_id;?>" class="btn btn-default" style="background-color: #324A5F; color: #FFFFFF;"><?=_('Edit Product')?></a>
                    <a href="/Product/delete/<?= $data->product_id; ?>" id="d<?=$data->product_id;?>" class="btn btn-default" style="background-color: #324A5F; color: #FFFFFF;"><?=_('Delete Product')?></a>
            <?php } ?>
            <?php if(isset($_SESSION['role']) && $_SESSION['role'] == 'customer'){ ?>
                <a href="/Cart/addToCart/<?= $data->product_id ?>" class="btn btn-defualt" style="background-color: #324A5F; color: #FFFFFF; "><?=_('Add to Cart')?></a>
            <?php } ?>
        </div>
    </div>
</div>

<?php $this->view('shared/footer'); ?>