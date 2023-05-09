<?php $this->view('shared/header', 'Change Order Status'); ?>

<div class="container">
    <h1>Order Details</h1>
    <div class="row">
        <div class="col-md-6">
            <h2>Order Information</h2>
            <table class="table">
                <tbody>
                    <tr>
                        <td><strong>Order ID:</strong></td>
                        <td><?= $data->order_id; ?></td>
                    </tr>
                    <tr>
                        <td><strong>Order Date:</strong></td>
                        <td><?= $data->order_date ?></td>
                    </tr>
                    <tr>
                        <td><strong>Status:</strong></td>
                        <td>
                            <form action="/Orders/editStatus/<?= $data->order_id ?>" method="POST">
                                <div class="input-group">
                                    <input type="text" class="form-control" name="status" value="<?= $data->status ?>">
                                    <div class="input-group-append">
                                        <button class="btn btn-primary" type="submit" style="background-color: #324A5F; color: #FFFFFF;">Save changes</button>
                                    </div>
                                </div>
                            </form>
                        </td>
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
                        <td><?= $data->first_name ?> <?= $data->last_name ?></td>
                    </tr>
                    <tr>
                        <td><strong>Email:</strong></td>
                        <td><?= $data->email ?></td>
                    </tr>
                    <tr>
                        <td><strong>Phone:</strong></td>
                        <td><?= $data->phone_number ?></td>
                    </tr>
                </tbody>
            </table>
        </div>
        <h2>Address Information</h2>
            <table class="table">
                <tbody>
                    <tr>
                        <td><strong>Street Address:</strong></td>
                        <td><?= $data->street_address ?></td>
                    </tr>
                    <tr>
                        <td><strong>Postal Code:</strong></td>
                        <td><?= $data->postal_code ?></td>
                    </tr>
                    <tr>
                        <td><strong>City:</strong></td>
                        <td><?= $data->city ?></td>
                    </tr>
                    <tr>
                        <td><strong>Province:</strong></td>
                        <td><?= $data->province ?></td>
                    </tr>
                    <tr>
                        <td><strong>Country:</strong></td>
                        <td><?= $data->country ?></td>
                    </tr>
                </tbody>
            </table>
    </div>
    <!-- <h1>Order Items</h1>
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
                    <td><?= $detail->quantity * $detail->unit_price ?></td>
                </tr>
            <?php endforeach ?>
        </tbody>
    </table> -->
    <a href="/Orders/orders" class="btn btn-secondary">Back</a>
</div>

<?php $this->view('shared/footer'); ?>
