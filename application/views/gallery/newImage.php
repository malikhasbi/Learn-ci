<div id="newImage" class="container">
    <?php if ($error != " ") : ?>
        <div class="row justify-content-center align-items-center">
            <div class="col">
                <div class="card text-white bg-info">
                    <div class="card-body">
                        <p class="card-text"><?php echo $error; ?></p>
                    </div>
                </div>
            </div>
        </div>
    <?php endif; ?>
    <div class="row my-5 justify-content-center">
        <div class="col-5">
            <div class="card">
                <div class="card-body p-4">
                    <?php echo form_open_multipart('gallery/newImage'); ?>
                    <div class="mb-3 row">
                        <label for="name" class="col-sm-3 col-form-label">Name Image</label>
                        <div class="col-sm">
                            <input type="text" name="name" id="name" class="form-control">
                            <?= form_error('name', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="image" class="col-sm-3 col-form-label">Image</label>
                        <div class="col-sm">
                            <input type="file" class="form-control" id="image" name="image">
                            <?= form_error('image', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                    </div>
                    <div class="mb-4 row">
                        <label for="category" class="col-sm-3 col-form-label">Category</label>
                        <div class="col-sm">
                            <select name="category" class="form-select" aria-label="Default select example" id="category">
                                <option value="0" selected>Select</option>
                                <?php foreach ($category as $item) : ?>
                                    <option value="<?= $item['id']; ?>"><?= $item['name']; ?></option>
                                <?php endforeach; ?>
                            </select>
                            <?= form_error('category', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                    </div>
                    <input type="submit" value="Add" class="btn btn-primary">
                    <a href="<?= base_url('gallery'); ?>" class="btn btn-danger">Back</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>