<?php $this->view('shared/header', 'Profile Page'); ?>

<div>
    <button type="submit">edit</button>
    <div>
        <h1>First Name: </h1>
        <p><?php echo $data->first_name ?></p>

        <h1>Middle Name:</h1>
        <p><?php echo $data->middle_name ?></p>

        <h1>Last Name:</h1>
        <p><?php echo $data->last_name ?></p>

        <h1>Email:</h1>
        <p><?php echo $data->email ?></p>

        <h1>Phone Number:</h1>
        <p><?php echo $data->phone_number ?></p>
    </div>
</div>

<?php $this->view('shared/footer'); ?>
