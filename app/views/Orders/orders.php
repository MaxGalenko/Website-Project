<?php $this->view('shared/header', 'Orders'); ?>

<div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4">
    <?php foreach ($data as $order): ?>
        <div class="col">
            <div class="card h-100">
                <div class="card-header">
                    <h5 class="card-title">Order #<?= $order->order_id ?></h5>
                    <p class="card-text">Status: <?= $order->status ?></p>
                </div>
                <div class="card-body">
                    <h6 class="card-subtitle mb-2 text-muted"><?= $order->title ?></h6>
                    <p class="card-text">Quantity: <?= $order->quantity ?></p>
                    <p class="card-text">Unit Price: <?= $order->unit_price ?></p>
                    <p class="card-text">Total Price: to do<!-- <?= $order->unit_price ?> --></p>
                    <p class="card-text">Order Date: <?= $order->order_date ?></p>
                </div>
                <div class="card-footer">
                    <a href="#" class="btn btn-primary">Details</a>
                </div>
            </div>
        </div>
    <?php endforeach ?>
</div>

<?php $this->view('shared/footer'); ?>
