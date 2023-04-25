<?php $this->view('shared/header', 'Edit Product'); ?>

<form method="post" enctype="multipart/form-data">
    <label>Title: <input type="text" name="title" value="<?=$data->title ?>" required></label><br/>
    <label>Type: <input type="text" name="type" value="<?=$data->type ?>" required></label><br/>
    <label>Description: <textarea name="description"><?=$data->description ?></textarea></label><br/>
    <label>Image: </label><br>
    <?php if(isset($product) && $product->image != '') { ?>
        <img src="./images/<?= $data->image ?>" width="100"><br>
    <?php } ?>
    <input type="file" name="image" value="<?=$data->image ?>" ><br>
    <label>Unit Price: <input type="number" name="unit_price" value="<?=$data->unit_price ?>" required></label><br/>
    <input type="hidden" name="clear_image" value="false">
    <button type="button" onclick="clearImage()">Clear Image</button><br>
    <input type="submit" name="action" value="Save Changes">
</form>

<a href="/Main/index">Back</a>

<?php $this->view('shared/footer'); ?>

<script>
    function clearImage() {
        document.querySelector('input[name="clear_image"]').value = 'true';
    }
</script>
