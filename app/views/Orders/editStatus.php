<?php $this->view('shared/header', _('Change Order Status')); ?>

<div class="container">
    <h1><?=_('Order Details')?></h1>
    <div class="row">
        <div class="col-md-6">
            <h2><?=_('Order Information')?></h2>
            <table class="table">
                <tbody>
                    <tr>
                        <td><strong><?=_('Order ID:')?></strong></td>
                        <td><?= $data->order_id; ?></td>
                    </tr>
                    <tr>
                        <td><strong><?=_('Order Date:')?></strong></td>
                        <td><?= $data->order_date ?></td>
                    </tr>
                    <tr>
                        <td><strong><?=_('Status:')?></strong></td>
                        <td>
                            <form action="/Orders/editStatus/<?= $data->order_id ?>" method="POST">
                                <div class="input-group">
                                    <select class="form-select" id="status" name="status" required>
                                        <?php if($data->status == 'In progress') { ?>
                                            <option class="form-item" selected value="In progress">In progress</option>
                                            <option class="form-item" value="Completed">Completed</option>
                                        <?php }else { ?>
                                            <option class="form-item" value="In progress">In progress</option>
                                            <option class="form-item" selected value="Completed">Completed</option>
                                        <?php } ?>
                                    </select>
                                    <div class="input-group-append">
                                        <button class="btn btn-default" type="submit" style="background-color: #324A5F; color: #FFFFFF;"><?=_('Save changes')?></button>
                                    </div>
                                </div>
                            </form>
                        </td>
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
                        <td><?= $data->first_name ?> <?= $data->last_name ?></td>
                    </tr>
                    <tr>
                        <td><strong><?=_('Email:')?></strong></td>
                        <td><?= $data->email ?></td>
                    </tr>
                    <tr>
                        <td><strong><?=_('Phone:')?></strong></td>
                        <td><?= $data->phone_number ?></td>
                    </tr>
                </tbody>
            </table>
        </div>
        <h2><?=_('Address Information')?></h2>
            <table class="table">
                <tbody>
                    <tr>
                        <td><strong><?=_('Street Address:')?></strong></td>
                        <td><?= $data->street_address ?></td>
                    </tr>
                    <tr>
                        <td><strong><?=_('Postal Code:')?></strong></td>
                        <td><?= $data->postal_code ?></td>
                    </tr>
                    <tr>
                        <td><strong><?=_('City:')?></strong></td>
                        <td><?= $data->city ?></td>
                    </tr>
                    <tr>
                        <td><strong><?=_('Province:')?></strong></td>
                        <td><?= $data->province ?></td>
                    </tr>
                    <tr>
                        <td><strong><?=_('Country:')?></strong></td>
                        <td><?= $data->country ?></td>
                    </tr>
                </tbody>
            </table>
    </div>
    <a href="/Orders/orders" class="btn btn-secondary"><?=_('Back')?></a>
</div>

<?php $this->view('shared/footer'); ?>