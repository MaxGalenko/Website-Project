<?php $this->view('shared/header', _('Orders')); ?>

<div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4">
    <?php foreach ($data as $order): ?>
        <div class="col">
            <div class="card h-100">
                <div class="card-header">
                    <h5 class="card-title"><?=_('Order ID: ')?><?= $order->order_id ?></h5>
                    <p class="card-text"><?=_('Status: ')?><?= $order->status ?></p>
                    <?php if($_SESSION['role'] == 'admin'): ?>
                        <a href="/Orders/editStatus/<?= $order->order_id ?>" class="btn btn-default" style="background-color: #324A5F; color: #FFFFFF;"><?=_('Change Status')?></a>
                    <?php endif; ?>
                </div>
                <div class="card-body">
                    <h6 class="card-subtitle mb-2 text-muted"><?=_('Products: ')?><?= $order->products ?></h6>
                    <p class="card-text"><?=_('Quantity: ')?><?= $order->quantity ?></p>
                    <p class="card-text"><?=_('Total Price: ')?><?= $order->total_price ?></p>
                    <p class="card-text"><?=_('Order Date: ')?><?= \app\core\TimeHelper::DTOutBrowser($order->order_date) ?></p>
                </div>
                <div class="card-footer">
                    <a href="/Orders/details/<?= $order->order_id; ?>" class="btn btn-default" style="background-color: #324A5F; color: #FFFFFF;"><?=_('View Details')?></a>
                </div>
            </div>
        </div>
    <?php endforeach ?>
</div>

<?php $this->view('shared/footer'); ?>