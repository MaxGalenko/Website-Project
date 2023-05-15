<?php $this->view('shared/header', _('Order Details')); ?>

<div class="container">
    <h1><?=_('Order Details')?></h1>
    <div class="row">
        <div class="col-md-6">
            <h2><?=_('Order Information')?></h2>
            <table class="table">
                <tbody>
                    <tr>
                        <td><strong><?=_('Order ID:')?></strong></td>
                        <td><?= $data[0]->order_id; ?></td>
                    </tr>
                    <tr>
                        <td><strong><?=_('Order Date:')?></strong></td>
                        <td><?= $data[0]->order_date ?></td>
                    </tr>
                    <tr>
                        <td><strong><?=_('Status:')?></strong></td>
                        <td><?= $data[0]->status ?></td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="col-md-6">
            <h2><?=_('Profile Information')?></h2>
            <table class="table">
                <tbody>
                    <tr>
                        <td><strong><?=_('Name:')?></strong></td>
                        <td><?= $data[0]->first_name ?> <?= $data[0]->last_name ?></td>
                    </tr>
                    <tr>
                        <td><strong><?=_('Email:')?></strong></td>
                        <td><?= $data[0]->email ?></td>
                    </tr>
                    <tr>
                        <td><strong><?=_('Phone:')?></strong></td>
                        <td><?= $data[0]->phone_number ?></td>
                    </tr>
                </tbody>
            </table>
        </div>
        <h2><?=_('Address Information')?></h2>
            <table class="table">
                <tbody>
                    <tr>
                        <td><strong><?=_('Street Address:')?></strong></td>
                        <td><?= $data[0]->street_address ?></td>
                    </tr>
                    <tr>
                        <td><strong><?=_('Postal Code:')?></strong></td>
                        <td><?= $data[0]->postal_code ?></td>
                    </tr>
                    <tr>
                        <td><strong><?=_('City:')?></strong></td>
                        <td><?= $data[0]->city ?></td>
                    </tr>
                    <tr>
                        <td><strong><?=_('Province:')?></strong></td>
                        <td><?= $data[0]->province ?></td>
                    </tr>
                    <tr>
                        <td><strong><?=_('Country:')?></strong></td>
                        <td><?= $data[0]->country ?></td>
                    </tr>
                </tbody>
            </table>
    </div>
    <h1><?=_('Ordered Items')?></h1>
    <table class="table">
        <thead>
            <tr>
                <th><?=_('Product Title')?></th>
                <th><?=_('Quantity')?></th>
                <th><?=_('Unit Price')?></th>
                <th><?=_('Total Price')?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($data as $detail): ?>
                <tr>
                    <td><?= $detail->title ?> <br> <img src="/images/<?= $detail->image ?>" alt="<?=_('No Image')?>" width="25%"></td>

                    <td><?= $detail->quantity ?></td>
                    <td><?= $detail->unit_price ?></td>
                    <td><?= $detail->total_price ?></td>
                </tr>
            <?php endforeach ?>
        </tbody>
    </table>
    <a href="/Orders/orders" class="btn btn-secondary"><?=_('Back')?></a>
</div>

<?php $this->view('shared/footer'); ?>