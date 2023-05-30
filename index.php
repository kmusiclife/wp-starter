<?php get_header() ?>

<div class="lux-body-bg" style="background: linear-gradient(rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.4)), url('https://source.unsplash.com/random/1280x800/?beach');"></div>

<div class="lux" data-direction="right">
    <div class="lux-bg" style="background: linear-gradient(rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.4)), url('https://source.unsplash.com/random/1280x800/?nature');"></div>
    <div class="d-flex flex-row text-light h-100">
        <div class="col-md-6 p-4 bd-highlight align-self-center">
            <h1 class="display-1 fw-bold">WP-STARTER DEMO</h2>
            <h3>right direction</h3>
            <p style="font-size: 0.8rem;">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        </div>
    </div>
</div>
<div class="lux" data-direction="left">
    <div class="lux-bg" style="background: linear-gradient(rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.4)), url('https://source.unsplash.com/random/1280x800/?forest');"></div>
    <div class="lux-fade d-flex flex-row text-light h-100">
        <div class="col-md-6 p-4 bd-highlight align-self-center">
            <h1 class="display-1 fw-bold">LUX.JS DEMO</h2>
            <h3>left direction</h3>
            <p style="font-size: 0.8rem;">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        </div>
    </div>
</div>
<div class="lux" data-direction="top">
    <div class="lux-bg" style="background: linear-gradient(rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.4)), url('https://source.unsplash.com/random/1280x800/?deep+forest');"></div>
    <div class="lux-fade d-flex flex-row text-light h-100">
        <div class="col-md-6 p-4 bd-highlight align-self-center" data-direction="left">
            <h1 class="display-1 fw-bold">LUX.JS DEMO</h2>
            <h3>top direction</h3>
            <p style="font-size: 0.8rem;">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        </div>
    </div>
</div>
<div class="lux" data-direction="bottom">
    <div class="lux-bg" style="background: linear-gradient(rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.4)), url('https://source.unsplash.com/random/1280x800/?beautyful+forest');"></div>
    <div class="lux-fade d-flex flex-row text-light h-100">
        <div class="col-md-6 p-4 bd-highlight align-self-center" data-direction="left">
            <h1 class="display-1 fw-bold">LUX.JS DEMO</h2>
            <h3>top direction</h3>
            <p style="font-size: 0.8rem;">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        </div>
    </div>
</div>

<div class="container py-5">
    <div class="row">
        <div class="col-sm-8">
            <div class="bs5-content" role="main">
	            <?php echo get_custom_content('Main Content 1') ?>
            </div>
        </div>
        <div class="col-sm-4" role="sidebar">
	        <?php include('include-posts-sidebar.php') ?>
        </div>
    </div>
</div>

<div class="bg-light text-dark">
<div class="container py-5">
    
    <div class="bs5-content">
        <h2 class="text-uppercase"><?php echo get_post_type_object('topics')->label ?></h2>
        <?php include('include-posts.php') ?>
    </div>
    <div class="bs5-content">
        <?php echo get_custom_content('Main Content 2') ?>
    </div>

</div>
</div>

<?php get_footer() ?>
