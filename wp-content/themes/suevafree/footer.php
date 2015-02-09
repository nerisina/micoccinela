<footer id="footer">
<div class="container">
	
		<?php if ( is_active_sidebar('bottom-sidebar-area') ) : ?>
        
            <!-- FOOTER WIDGET BEGINS -->
            
                <section class="row widget">
                    <?php dynamic_sidebar('bottom-sidebar-area') ?>
                </section>
                
            <!-- FOOTER WIDGET END -->
            
        <?php endif; ?>

         <div class="row copyright" >
            <div class="span6" >
            <p>
				<?php if (suevafree_setting('suevafree_copyright_text')): ?>
                   <?php echo stripslashes(suevafree_setting('suevafree_copyright_text')); ?>
                <?php else: ?>
                  <?php _e('Copyright','wip'); ?> <?php echo get_bloginfo("name"); ?> <?php echo date("Y"); ?> 
                <?php endif; ?> 

            </p>
            </div>
            <div class="span6" >
                <!-- start social -->
                <div class="socials">
                    <a href="https://twitter.com/Nerisina" target="_blank"><i class="fa fa-twitter fa-lg"></i></a>
                    <a href="http://instagram.com/nerisina/" target="_blank"><i class="fa fa-instagram fa-lg"></i></a>
                    <a href="https://www.pinterest.com/nerisina/" target="_blank"><i class="fa fa-pinterest fa-lg"></i></a>
                </div>
                <!-- end social -->

            </div>
		</div>
	</div>
</footer>

<?php wp_footer() ?>   
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-59494769-1', 'auto');
  ga('send', 'pageview');

</script>

</body>

</html>