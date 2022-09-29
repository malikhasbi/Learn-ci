<div id="home" class="container my-5">
    <?php if ($this->session->flashdata('success')) : ?>
        <div class="alert alert-success" role="alert">
            <?php echo $this->session->flashdata('success'); ?>
        </div>
    <?php endif; ?>
    <!-- DataTables -->
    <div class="card mb-3">
        <div class="card-header">
            <a href="<?php echo site_url('main/add') ?>"><i class="fa-solid fa-plus"></i> Add New</a>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-hover" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Password</th>
                            <th>Photo</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($users as $user) : ?>
                            <?php if ($user->id != 0) : ?>
                                <tr>
                                    <td>
                                        <?php echo $user->name ?>
                                    </td>
                                    <td>
                                        <?php echo $user->password ?>
                                    </td>
                                    <td>
                                        <img src="<?php echo base_url('assets/upload/image/' . $user->image) ?>" width="64" />
                                    </td>
                                    <td width="250">
                                        <a href="<?= base_url('main/edit/' . $user->id) ?>" class="btn btn-sm btn-primary"><i class="fa-regular fa-pen-to-square"></i> Edit</a>
                                        <a onclick="deleteConfirm('<?= base_url('main/delete/') . $user->id; ?>')" href="#!" class="btn btn-sm btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="fa-solid fa-trash"></i> Delete</a>
                                    </td>
                                </tr>
                            <?php endif; ?>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Are you sure?</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                Data yang dihapus tidak dapat dikembalikan!
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <a id="btn-delete" class="btn btn-danger" href="#">Delete</a>
            </div>
        </div>
    </div>
</div>