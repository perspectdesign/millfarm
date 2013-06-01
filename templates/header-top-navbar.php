<header class="banner navbar navbar-inverse navbar-fixed-top" role="banner">
  <div class="container">
  	<div class="row header-top">
  		<div class="span4 text-center"><a href="http://www.millfarmnursery.com"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo-white-small.png" alt="Mill Farm Nursery"></a></div>
  		<div class="span8 topnav">
		  	<div class="navbar-inner">
			    <div class="container">
			      <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
			        <span class="icon-bar"></span>
			        <span class="icon-bar"></span>
			        <span class="icon-bar"></span>
			      </a>
			      <nav class="nav-main nav-collapse collapse" role="navigation">
			        <?php
			          if (has_nav_menu('primary_navigation')) :
			            wp_nav_menu(array('theme_location' => 'primary_navigation', 'menu_class' => 'nav'));
			          endif;
			        ?>
			      </nav>
			    </div>
			</div>
		</div>
	</div>
  </div>
  <div class="container text-center strapline">
  	<?php dynamic_sidebar('sidebar-header'); ?>
  </div>
</header>