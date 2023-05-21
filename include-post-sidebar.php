<div class="col-6 col-sm-12 pb-3 pb-sm-2">
	<div class="row">
	    <div class="col-12 col-lg-5">
		    <a href="<?php echo get_the_permalink() ?>"><img src="<?php echo $thumbnail_image_sm ?>" class="w-100 pb-2" alt="<?php echo get_the_title() ?>"></a>
	    </div>
	    <div class="col-12 col-lg-7 p-1">
	        <p class="card-text"><?php echo get_the_excerpt() ?></p>
	    </div>
	</div>
</div>
