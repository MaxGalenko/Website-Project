<?php $this->view('shared/header', 'Order Details'); ?>

<div class="container">
    <h1>Order Details</h1>
    <div class="row">
        <div class="col-md-6">
            <h2>Order Information</h2>
            <table class="table">
                <tbody>
                    <tr>
                        <td><strong>Order ID:</strong></td>
                        <td><?= $data[0]->order_id; ?></td>
                    </tr>
                    <tr>
                        <td><strong>Order Date:</strong></td>
                        <td><?= $data[0]->order_date ?></td>
                    </tr>
                    <tr>
                        <td><strong>Status:</strong></td>
                        <td><?= $data[0]->status ?></td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="col-md-6">
            <h2>Profile Information</h2>
            <table class="table">
                <tbody>
                    <tr>
                        <td><strong>Name:</strong></td>
                        <td><?= $data[0]->first_name ?> <?= $data[0]->last_name ?></td>
                    </tr>
                    <tr>
                        <td><strong>Email:</strong></td>
                        <td><?= $data[0]->email ?></td>
                    </tr>
                    <tr>
                        <td><strong>Phone:</strong></td>
                        <td><?= $data[0]->phone_number ?></td>
                    </tr>
                </tbody>
            </table>
        </div>
        <h2>Address Information</h2>
            <table class="table">
                <tbody>
                    <tr>
                        <td><strong>Street Address:</strong></td>
                        <td><?= $data[0]->street_address ?></td>
                    </tr>
                    <tr>
                        <td><strong>Postal Code:</strong></td>
                        <td><?= $data[0]->postal_code ?></td>
                    </tr>
                    <tr>
                        <td><strong>City:</strong></td>
                        <td><?= $data[0]->city ?></td>
                    </tr>
                    <tr>
                        <td><strong>Province:</strong></td>
                        <td><?= $data[0]->province ?></td>
                    </tr>
                    <tr>
                        <td><strong>Country:</strong></td>
                        <td><?= $data[0]->country ?></td>
                    </tr>
                </tbody>
            </table>
    </div>
    <h1>Ordered Items</h1>
    <table class="table">
        <thead>
            <tr>
                <th>Product Title</th>
                <th>Quantity</th>
                <th>Unit Price</th>
                <th>Total Price</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($data as $detail): ?>
                <tr>
                    <td><?= $detail->title ?> <br> <img src="/images/<?= $detail->image ?>" alt="No Image" width="25%"></td>

                    <td><?= $detail->quantity ?></td>
                    <td><?= $detail->unit_price ?></td>
                    <td><?= $detail->total_price ?></td>
                </tr>
            <?php endforeach ?>
        </tbody>
    </table>
    <a href="/Orders/orders" class="btn btn-secondary">Back</a>
</div>

<?php $this->view('shared/footer'); ?>
