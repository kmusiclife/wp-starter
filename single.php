<?php get_header() ?>

<div class="lux" data-direction="right" data-height="50vh">
    <div class="lux-bg" style="background: linear-gradient(rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.4)), url('https://source.unsplash.com/random/1280x800/?nature');"></div>
	<div class="d-flex flex-row text-light" style="height: 50vh;">
	    <div class="col-md-6 p-4 bd-highlight align-self-center">
	        <h1 class="display-1 fw-bold">WP-STARTER DEMO</h2>
	        <h3>right direction</h3>
	    </div>
	</div>
</div>
	
<div class="bg-light text-dark">
<div class="container py-5">
    <div class="row">
        <div class="col-sm-8">
            <div class="page-content" role="main">
	            <?php echo get_custom_content('Main Content 1') ?>
            </div>
        </div>
        <div class="col-sm-4" role="sidebar">
	        <?php include('include-posts-sidebar.php') ?>
        </div>
    </div>
</div>
</div>

<div class="container py-5">
    <div class="row">
        <div class="col-sm-8">
            <div class="page-content" role="main">
	            <?php echo get_custom_content('Main Content 1') ?>
            </div>
        </div>
        <div class="col-sm-4" role="sidebar">
	        <?php include('include-posts-sidebar.php') ?>
        </div>
    </div>
</div>


<?php get_footer() ?>
