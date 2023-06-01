<?php get_header() ?>
<?php if( have_posts() ): while( have_posts() ): the_post(); include('variables.php'); ?>

<div class="lux" data-direction="top" data-height="33vh">
    <div class="lux-bg" style="background: linear-gradient(rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.4)), url('<?php echo $thumbnail_image ?>');"></div>
	<div class="d-flex flex-row text-light" style="height: 33vh;">
	    <div class="col-md-10 p-4 bd-highlight align-self-center text-uppercase">
	        <h1 class="display-1 fw-bold"><?php the_title() ?></h2>
	        <h3><?php echo bloginfo('sitename') ?></h3>
	    </div>
	</div>
</div>
	
<div class="container py-5">
    <div class="row">
        <div class="col-sm-8">
            <div class="page-content" role="main">
	            <?php echo get_the_content() ?>
            </div>
        </div>
        <div class="col-sm-4" role="sidebar">
	        <?php include('include-posts-sidebar.php') ?>
        </div>
    </div>
</div>

<?php endwhile; endif; ?>
<?php get_footer() ?>
