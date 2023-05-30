
<footer class="bg-dark pb-3">
<div class="container text-light py-md-5 py-4 px-3">
    <div class="row">
        <div class="col-md-4 mx-auto pb-3">
            <ul class="list-group list-group-flush">
                <?php 
                    $nav_menus = get_custom_menu('Menu 1');
                    foreach($nav_menus as $nav_menu):
                ?>
					<li class="list-group-item bg-transparent text-center border-0">
						<a href="<?php echo $nav_menu->url ?>" class="text-decoration-none text-light"><?php echo $nav_menu->title ?></a>
					</li>
                <?php endforeach; ?>
            </ul>

        </div>
        <div class="col-12 text-center">
            <?php echo get_custom_content('Footer') ?>
            <p>Copyright <?php echo date('Y') ?> <?php echo bloginfo('sitename') ?></p>
        </div>
    </div>
</div>
</footer>

<button id="hamburger" class="hamburger hamburger--criss-cross position-fixed top-0 end-0" style="z-index: 1100;" type="button"  data-bs-toggle="offcanvas" data-bs-target="#offcanvasWithBothOptions" aria-controls="offcanvasWithBothOptions">
    <div class="inner">
        <span class="bar"></span>
        <span class="bar"></span>
        <span class="bar"></span>
    </div>
</button>

<div class="offcanvas offcanvas-start" style="background: linear-gradient(rgba(0,0,0,0.6),rgba(0,0,0,0.4)), url('https://source.unsplash.com/random/1280x800/?beautyful+nature'); background-size: cover; background-repeat: no-repeat; background-position: right;" data-bs-scroll="true" tabindex="-1" id="offcanvasWithBothOptions" aria-labelledby="offcanvasWithBothOptionsLabel" aria-modal="true" role="dialog">
    <div class="row g-0 h-100 text-light">
        <div class="col-8 col-md-5 mx-auto py-4 position-relative" style="height: 100vh;">
            <div class="text-center pb-4">
	            <h3><?php echo bloginfo('sitename') ?></h3>
	        </div>
            <ul class="list-group list-group-flush">
                <?php 
                    $nav_menus = get_custom_menu('Menu 1');
                    foreach($nav_menus as $nav_menu):
                ?>
                    <li class="list-group-item bg-transparent text-center small">
                    	<a href="<?php echo $nav_menu->url ?>" class="text-light text-decoration-none"><?php echo $nav_menu->title ?></a>
                    </li>
                <?php endforeach; ?>
            </ul>
            <div class="p-3 mb-3 position-absolute bottom-0 w-100 text-center">
                <p><?php echo bloginfo('sitename') ?></p>
                <?php echo get_custom_content('Footer') ?>
                <p>Copyright <?php echo date('Y') ?> <?php echo bloginfo('sitename') ?></p>
            </div>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/gh/kmusiclife/lux.js@main/lux.min.js"></script>
<script src="https://cdn.jsdelivr.net/gh/kmusiclife/bs5-starter@mmain/dist/js/main.js"></script>
<?php wp_footer() ?>
</body>
</html>
