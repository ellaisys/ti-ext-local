<?php if (isset($gallery['images']) AND count($gallery['images'])) { ?>
    <h1 class="h4"><b><?= $gallery['title']; ?></b></h1>
    <p><?= $gallery['description']; ?></p><br/>
    <div class="row gallery">
        <?php foreach ($gallery['images'] as $image) { ?>
            <div class="col-sm-4">
                <img
                    class="img-responsive img-rounded"
                    src="<?= $image['thumb']; ?>">
                <div class="overlay">
                    <a href="<?= $image['link']; ?>" target="_blank">
                        <i class="fa fa-eye"></i>
                    </a>
                </div>
            </div>
        <?php } ?>
    </div>
<?php } else { ?>
    <p><?= lang('sampoyigi.local::default.text_empty_gallery'); ?></p>
<?php } ?>
