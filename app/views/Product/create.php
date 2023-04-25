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
                    <input type="text" id="type" name="type" class="form-control" required style="color: #324A5F;">
                </div>
                <div class="form-group">
                    <label for="description" style="color: #324A5F;">Description:</label>
                    <textarea id="description" name="description" class="form-control" required style="color: #324A5F;"></textarea>
                </div>
                <div class="form-group">
                    <label for="image" style="color: #324A5F;">Image:</label>
                    <input type="file" id="image" name="image" class="form-control-file" accept="image/*" style="color: #324A5F;">
                </div>
                <div class="form-group">
                    <label for="unit_price" style="color: #324A5F;">Unit Price:</label>
                    <input id="unit_price" name="unit_price" class="form-control" required style="color: #324A5F;">
                </div>
                <div class="form-group">
                    <label for="quantity" style="color: #324A5F;">Quantity:</label>
                    <input type="number" id="quantity" name="quantity" class="form-control" required style="color: #324A5F;">
                </div>
                <button type="submit" class="btn btn-primary" name="action" value='Create' style="background-color: #324A5F;">Create</button>
            </form>
            <a href="/Main/index" class="btn btn-secondary">Back</a>
        </div>
    </div>
</div>

<?php $this->view('shared/footer'); ?>

