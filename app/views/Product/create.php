<?php $this->view('shared/header', 'Create product'); ?>

<div class="container">
    <div class="card">
        <div class="card-body">
            <h1>Create a new product</h1>
            <form method="post" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="title" style="color: #324A5F;">Title:</label>
                    <input type="text" id="title" name="title" class="form-control" required style="color: #324A5F;">
                </div>
                <div class="form-group">
                    <label for="type" style="color: #324A5F;">Type:</label>
                    <br>
                    <select class="form-select" id="type" name="type" required>
                        <option class="form-item" value="Desktop">Desktop</option>
                        <option class="form-item" value="Laptop">Laptop</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="description" style="color: #324A5F;">Description:</label>
                    <textarea id="description" name="description" class="form-control" required style="color: #324A5F;"></textarea>
                </div>
                <div class="form-group">
                    <label for="image" style="color: #324A5F;">Image:</label>
                    <input type="file" id="image" name="image" class="form-control-file" accept="image/*" style="color: #324A5F;">
                    <br>
                    <img id='pic_preview' width='200px'>
                </div>
                <div class="form-group">
                    <label for="unit_price" style="color: #324A5F;">Unit Price:</label>
                    <input id="unit_price" name="unit_price" class="form-control" required style="color: #324A5F;">
                </div>
                <div class="form-group">
                    <label for="discount_price" style="color: #324A5F;">Discount Price:</label>
                    <input id="discount_price" name="discount_price" class="form-control" required style="color: #324A5F;">
                </div>
                <div class="form-group">
                    <label for="quantity" style="color: #324A5F;">Quantity:</label>
                    <input type="number" id="quantity" name="quantity" class="form-control" required style="color: #324A5F;">
                </div>
                <a href="/Main/index" class="btn btn-secondary">Back</a>
                <button type="submit" class="btn btn-default" name="action" value='Create' style="background-color: #324A5F; color: #FFFFFF; ">Create</button>
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

<?php $this->view('shared/footer'); ?>