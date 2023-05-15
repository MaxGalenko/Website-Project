<?php $this->view('shared/header', 'Create product'); ?>

<div class="container">
    <div class="card">
        <div class="card-body">
            <h1>Create a new product</h1>
            <form method="post" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="title">Title:</label>
                    <input type="text" id="title" name="title" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="type">Type:</label>
                    <br>
                    <select class="form-select" id="type" name="type" required>
                        <option class="form-item" value="Desktop">Desktop</option>
                        <option class="form-item" value="Laptop">Laptop</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="description">Description:</label>
                    <textarea id="description" name="description" class="form-control" required></textarea>
                </div>
                <div class="form-group">
                    <label for="image">Image:</label>
                    <input type="file" id="image" name="image" class="form-control-file" accept="image/*">
                    <br>
                    <img id='pic_preview' width='200px'>
                </div>
                <div class="form-group">
                    <label for="unit_price">Unit Price:</label>
                    <input id="unit_price" name="unit_price" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="discount_price">Discount Price:</label>
                    <input id="discount_price" name="discount_price" class="form-control" value="0" required>
                </div>
                <div class="form-group">
                    <label for="quantity">Quantity:</label>
                    <input type="number" id="quantity" name="quantity" class="form-control" value="1" min="1" required>
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