<?php $this->view('shared/header', "<?_('Edit Product')?>"); ?>

<div class="container">
    <div class="card">
        <div class="card-body">
            <h1><?=_('Edit a product')?></h1>
            <form method="post" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="title"><?=_('Title:')?></label>
                    <input type="text" id="title" name="title" class="form-control" value="<?=$data->title ?>" required>
                </div>
                <div class="form-group">
                    <label for="type"><?=_('Type:')?></label>
                    <br>
                    <select class="form-select" id="type" name="type" required>
                        <?php if($data->type == 'Desktop') { ?>
                            <option class="form-item" selected value="Desktop">Desktop</option>
                            <option class="form-item" value="Laptop">Laptop</option>
                        <?php }else { ?>
                            <option class="form-item" value="Desktop">Desktop</option>
                            <option class="form-item" selected value="Laptop">Laptop</option>
                        <?php } ?>
                    </select>
                </div>
                <div class="form-group">
                    <label for="description"><?=_('Description:')?></label>
                    <textarea id="description" name="description" class="form-control" required><?=$data->description ?></textarea>
                </div>
                <div class="form-group">
                    <label for="image"><?=_('Image:')?></label>
                    <br>
                    <?php if(isset($product) && $product->image != '') { ?>
                        <img src="./images/<?= $data->image ?>" width="100"><br>
                    <?php } ?>
                    <input type="file" id="image" name="image" class="form-control-file" accept="image/*" value="<?=$data->image ?>">
                    <br>
                    <img id='pic_preview' width='200px'>
                </div>
                <div class="form-group">
                    <label for="unit_price"><?=_('Unit Price:')?></label>
                    <input id="unit_price" name="unit_price" class="form-control" value="<?=$data->unit_price ?>" required pattern="^(([1-9]\d{0,2})|([1-9]\d*))(\.\d{1,2})?$">
                </div>
                <div class="form-group">
                    <label for="discount_price"><?=_('Discount Price:')?></label>
                    <input id="discount_price" name="discount_price" class="form-control" value="<?=$data->discount_price ?>" required pattern="^(0|([1-9]\d{0,2})|([1-9]\d*))(\.\d{1,2})?$">
                </div>
                <div class="form-group">
                    <label for="quantity"><?=_('Quantity:')?></label>
                    <input type="number" id="quantity" name="quantity" class="form-control" value="<?=$data->quantity ?>" required>
                </div>
                <input type="hidden" name="clear_image" value="false">
                <a href="/Main/index" class="btn btn-secondary"><?=_('Back')?></a>
                <button type="button" class="btn btn-default" onclick="clearImage()" style="background-color: #324A5F; color: #FFFFFF; "><?=_('Clear Image')?></button>
                <button type="submit" class="btn btn-default" name="action" value='Save Changes' style="background-color: #324A5F; color: #FFFFFF; "><?=_('Save Changes')?></button>
            </form>
        </div>
    </div>
</div>

<script>
    image.onchange = evt => {
        const [file] = image.files
        if (file) {
        pic_preview.src = URL.createObjectURL(file)
        }
    }
</script>

<script>
    function clearImage() {
        document.querySelector('input[name="clear_image"]').value = 'true';
    }
</script>

<?php $this->view('shared/footer'); ?>