<footer class="content-info" role="contentinfo">
  <div class="socialstrap">
	  <div class="container">
	    <?php dynamic_sidebar('sidebar-footer'); ?>
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
    	<p>&copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?></p>
	</div>
  </div>
</footer>

<?php wp_footer(); ?>