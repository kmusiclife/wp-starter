<div class="col-6 col-sm-4 col-md-3 pb-3">
    <div class="row">
        <div class="col-12">
            <a href="<?php echo get_the_permalink() ?>"><img src="<?php echo $thumbnail_image_sm ?>" class="w-100" alt="<?php echo get_the_title() ?>"></a>
        </div>
        <div class="col-12 p-1">
            <p class="card-text"><?php echo get_the_excerpt() ?></p>
        </div>
    </div>
</div>
