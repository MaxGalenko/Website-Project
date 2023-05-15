<?php $this->view('shared/header', _('Edit Address')); ?>

<link rel="stylesheet" href="/css/Profile/style.css">

<!-- This is the container to preview both address and profile side by side -->
<div class="contentContainerC">
    <form name='action' action="/Profile/editAddressInfo" method="post">
        
        <h1>Address Information</h1>
        <button type="submit" name="action">save</button> 
         <div>
            <h1>Street Address: </h1>
            <input type="text" name="street" value="<?= $data->street_address ?>">

            <h1>Postal Code:</h1>
            <input type="text" name="postal" value="<?= $data->postal_code ?>">

            <h1>City:</h1>
            <input type="text" name="city" value="<?= $data->city ?>">

            <h1>Province:</h1>
            <input type="text" name="province" value="<?= $data->province ?>">

            <h1>Country:</h1>
            <input type="text" name="country" value="<?= $data->country ?>">
        </div>  
    </form> 
</div>

<?php $this->view('shared/footer'); ?>