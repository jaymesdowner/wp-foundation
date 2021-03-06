	</div><!-- .row -->
  <!-- Footer -->  
  <footer class="row">
    <div class="large-12 columns">
      <hr />
      <div class="row">
        <div class="large-6 columns">
          <p><?php //here is where copyright message should be ?></p>
        </div>
        <div class="large-6 columns">
         
            <?php //footer menu
            	wp_nav_menu(array( 
				        'container' => false,             // remove menu container
				        'container_class' => '',          // class of container
				        'menu' => '',                     // menu name
				        'menu_class' => 'inline-list right', // adding custom nav class
				        'theme_location' => 'footer-menu',  // where it's located in the theme
				        'before' => '',                   // before each link <a>
				        'after' => '',                    // after each link </a>
				        'link_before' => '',              // before each link text
				        'link_after' => '',               // after each link text
				        'depth' => 1,                     // limit the depth of the nav	
							));
             ?>
         
        </div>
      </div>
    </div> 
  </footer>
  <?php wp_footer(); ?>
  <script>
    // hack to add a class to wordpress generated inputs where id=submit. i.e. commment submit button
		$("input[id=submit]").addClass("button"); 
		// init foundation scripts
    $(document).foundation();
  </script>

  <?php do_action("wp_foundation_did_footer"); ?>
  <!-- End Footer -->
</body>
</html>
