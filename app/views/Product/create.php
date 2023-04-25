<?php $this->view('shared/header', 'Create product'); ?>

<h1>Create a new product</h1>

<form method="post" enctype="multipart/form-data">
  <div>
    <label for="title">Title:</label>
    <input type="text" id="title" name="title" required>
  </div>
  <div>
    <label for="type">Type:</label>
    <input type="text" id="type" name="type" required>
  </div>
  <div>
    <label for="description">Description:</label>
    <textarea id="description" name="description" required></textarea>
  </div>
  <div>
    <label for="image">Image:</label>
    <input type="file" id="image" name="image" accept="image/*">
  </div>
  <div>
    <label for="unit_price">Unit Price:</label>
    <input id="unit_price" name="unit_price" required>
  </div>
  <div>
    <label for="quantity">Quantity:</label>
    <input type="number" id="quantity" name="quantity" required>
  </div>
  <input type="submit" name="action" value="Create"/>
</form>

<?php $this->view('shared/footer'); ?>
