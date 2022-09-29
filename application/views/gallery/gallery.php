<div id="gallery" class="container">
    <div class="row justify-content-center">
        <div class="col-12">
            <?= $this->session->flashdata('message'); ?>
        </div>
        <div class="col-12  d-flex justify-content-center">
            <button type="button" id="primary" class="btn btn-primary m-1">Primary</button>
        </div>
    </div>
    <div class="row my-5 justify-content-center">
        <?php foreach ($gallery as $image) : ?>
            <div class="col-3 mb-5">
                <div class="card">
                    <img src="<?= base_url('assets/upload/image/') . $image->image; ?>" class="card-img-top" alt="<?= $image->gName; ?>">
                    <div class="card-body">
                        <p class="card-text">Name : <?= $image->gName; ?></p>
                        <p class="card-text">Category : <?= $image->cName; ?></p>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>