<?php $this->view('shared/header', 'Edit Product'); ?>
<div class="container">
    <div class="card">
        <div class="card-body">
            <h1>Edit a product</h1>
            <form method="post" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="title">Title:</label>
                    <input type="text" id="title" name="title" class="form-control" value="<?=$data->title ?>" required style="color: #324A5F;">
                </div>
                <div class="form-group">
                    <label for="type">Type:</label>
                    <input type="text" id="type" name="type" class="form-control" value="<?=$data->type ?>" required style="color: #324A5F;">
                </div>
                <div class="form-group">
                    <label for="description">Description:</label>
                    <textarea id="description" name="description" class="form-control" required style="color: #324A5F;"><?=$data->description ?></textarea>
                </div>
                <div class="form-group">
                    <label for="image">Image:</label>
                    <br>
                    <img id='pic_preview' width='200px'/>
                    <br>
                    <?php if(isset($product) && $product->image != '') { ?>
                        <img src="./images/<?= $data->image ?>" width="100"><br>
                    <?php } ?>
                    <input type="file" id="image" name="image" class="form-control-file" accept="image/*" value="<?=$data->image ?>" style="color: #324A5F;">
                </div>
                <div class="form-group">
                    <label for="unit_price">Unit Price:</label>
                    <input id="unit_price" name="unit_price" class="form-control" value="<?=$data->unit_price ?>" required style="color: #324A5F;">
                </div>
                <div class="form-group">
                    <label for="discount_price">Discount Price:</label>
                    <input id="discount_price" name="discount_price" class="form-control" value="<?=$data->discount_price ?>" required style="color: #324A5F;">
                </div>
                <div class="form-group">
                    <label for="quantity">Quantity:</label>
                    <input type="number" id="quantity" name="quantity" class="form-control" value="<?=$data->quantity ?>" required style="color: #324A5F;">
                </div>
                <input type="hidden" name="clear_image" value="false">
                <a href="/Main/index" class="btn btn-secondary">Back</a>
                <button type="button" class="btn btn-default" onclick="clearImage()" style="background-color: #324A5F; color: #FFFFFF; ">Clear Image</button>
                <button type="submit" class="btn btn-default" name="action" value='Save Changes' style="background-color: #324A5F; color: #FFFFFF; ">Save Changes</button>
            </form>
        </div>
    </div>
</div>
<script>
    image.onchange = evt => {
        const [file] = picture.files
        if (file) {
        pic_preview.src = URL.createObjectURL(file)
        }
    }
</script>
<?php $this->view('shared/footer'); ?>
<script>
    function clearImage() {
        document.querySelector('input[name="clear_image"]').value = 'true';
    }
</script>

