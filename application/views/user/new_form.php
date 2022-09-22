<div id="form" class="container">
    <div class="card col-6 mx-auto my-5">
        <div class="card-header">
            <a href="<?php echo site_url('main') ?>"><i class="fas fa-arrow-left"></i> Back</a>
        </div>
        <div class="card-body">
            <?php echo form_open_multipart('main/add'); ?>
            <div class="mb-3">
                <label for="name" class="form-label">Full Name</label>
                <input type="text" class="form-control" id="name" placeholder="Name" name="name">
                <?php echo form_error('name', '<small class="text-danger pl-3">', '</small>') ?>
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control" id="password" placeholder="Password" name="password">
                <?php echo form_error('password', '<small class="text-danger pl-3">', '</small>') ?>
            </div>
            <div class="mb-3">
                <label for="images" class="form-label">Photo</label>
                <input type="file" class="form-control" id="images" name="images">
            </div>
            <input class="btn btn-primary" type="submit" value="Submit">
            </form>
        </div>
    </div>