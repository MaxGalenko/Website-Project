<?php $this->view('shared/header', 'Orders'); ?>

<table>
    <thead>
        <tr>
            <th>Order ID</th>
            <th>Status</th>
            <th>Product Title</th>
            <th>Quantity</th>
            <th>Total Price</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($data as $order): ?>
            <tr>
                <td><?= $order->order_id ?></td>
                <td><?= $order->status ?></td>
                <td><?= $order->title ?></td>
                <td><?= $order->quantity ?></td>
                <td><?= $order->unit_price ?></td>
            </tr>
        <?php endforeach ?>
    </tbody>
</table>


<?php $this->view('shared/footer'); ?>