<footer class="content-info" role="contentinfo">
  <div class="socialstrap">
	  <div class="container">
	    <?php dynamic_sidebar('sidebar-social-footer'); ?>
	  </div>
  </div>
  
  <div class="footerwidgets">
	  <div class="container">
	  	<div class="row">
	  		<div class="span4">
	  			<?php dynamic_sidebar('sidebar-bottom-left'); ?>
	  		</div>
	  		<div class="span4">
	  			<?php dynamic_sidebar('sidebar-bottom-middle'); ?>
	  		</div>
	  		<div class="span4">
	  			<?php dynamic_sidebar('sidebar-bottom-right'); ?>
	  		</div>
	  	</div>
	  </div>
  </div>
  
  <div class="bottom-footer">
  	<div class="container">
    	<div class="perspec-logo pull-right hidden-phone">
    		<a href="http://www.perspectivedesign.co.uk"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo-small.png" alt="Perspective Design"></a>
    	</div>
    	<p>&copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?> - Website Design and Hosting by <a href="http://www.perspectivedesign.co.uk">Perspective Design</a></p>
	</div>
  </div>
</footer>

<?php wp_footer(); ?>