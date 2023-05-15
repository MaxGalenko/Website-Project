<?php $this->view('shared/header', _('Profile Page')); ?>

<link rel="stylesheet" href="/css/Profile/style.css">

<!-- This is the container to preview both address and profile side by side -->
<div id="personalInfoAddressContainer">

    <!-- Personal Info Content Container -->
    <div class="contentContainers contentContainerL">
        <h1><?=_('Personal Information')?></h1>

        <!-- This is the button to move to the Editable content file -->
        <form method="post" action="/Profile/editProfileInfo">
            <button type="submit"><?=_('edit')?></button>
        </form>

        <!-- This is the preview information content -->
        <div>
            <h2><?=_('First Name:')?></h2>
            <p><?= $data->first_name ?></p>

            <h2><?=_('Middle Name:')?></h2>
            <p><?= $data->middle_name ?></p>

            <h2><?=_('Last Name:')?></h2>
            <p><?= $data->last_name ?></p>

            <h2><?=_('Email:')?></h2>
            <p><?= $data->email ?></p>

            <h2><?=_('Phone Number:')?></h2>
            <p><?= $data->phone_number ?></p>
        </div>

    </div>

    <!-- Address Info Content Container -->
    <div class="contentContainers contentContainerR">
        <h1><?=_('Address Information')?></h1>

        <!-- This is the button to move to the Editable content file -->
        <form method="post" action="/Profile/editAddressInfo">
            <button type="submit"><?=_('edit')?></button>
        </form>
        
        <!-- This is the preview information content per address-->
        <div>
            <h2><?=_('Street Address:')?> </h2>
            <p><?=$data->street_address  ?></p>

            <h2><?=_('Postal Code:')?></h2>
            <p><?= $data->postal_code ?></p>

            <h2><?=_('City:')?></h2>
            <p><?= $data->city ?></p>

            <h2><?=_('Province:')?></h2>
            <p><?=$data->province ?></p>

            <h2><?=_('Country:')?></h2>
            <p><?= $data->country ?></p>
        </div>
    </div>
</div>

<?php $this->view('shared/footer'); ?>
