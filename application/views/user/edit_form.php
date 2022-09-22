<div id="edit" class="container">

    <!-- Card  -->
    <div class="card mb-3">
        <div class="card-header">

            <a href="<?php echo site_url('main') ?>">
                <i class="fas fa-arrow-left"></i>
                Back</a>
        </div>
        <div class="card-body">

            <form action="" method="post" enctype="multipart/form-data">
                <!-- Note: atribut action dikosongkan, artinya action-nya akan diproses 
							oleh controller tempat vuew ini digunakan. Yakni index.php/admin/products/edit/ID --->

                <input type="hidden" name="id" value="<?php echo $user->id ?>" />

                <div class="mb-3">
                    <label for="name" class="form-label">Name</label>
                    <input type="text" class="form-control" id="name" placeholder="Name" name="name" value="<?php echo $user->name ?>">
                    <?php echo form_error('name', '<small class="text-danger pl-3">', '</small>') ?>
                </div>

                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="text" class="form-control" id="password" placeholder="Password" name="password" value="<?php echo $user->password ?>">
                    <?php echo form_error('password', '<small class="text-danger pl-3">', '</small>') ?>
                </div>

                <div class="mb-3">
                    <label for="images" class="form-label">Photo</label>
                    <input type="file" class="form-control" id="images" placeholder="images" name="images" value="<?php echo $user->images ?>">
                    <?php echo form_error('images', '<small class="text-danger pl-3">', '</small>') ?>
                </div>

                <input class="btn btn-success" type="submit" name="btn" value="Save" />
            </form>
        </div>
    </div>