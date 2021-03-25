
<?php 
  //Get WP Appreance Logo
  $custom_logo_id = get_theme_mod( 'custom_logo' );
  $logo_src = wp_get_attachment_image_src( $custom_logo_id , 'full' );

  ?>

<footer>
  <div class="w-layout-grid footer">
        <a href="/" aria-current="page" class="logo-link w-inline-block w--current footer-logo-link"><img src="<?php echo  $logo_src[0]; ?>" width="65" alt="" class="logo-image"></a>
        <div id="w-node-_88a386dd-8f07-0c34-70f0-2d9f87e2971d-87e29718" class="label">Menu</div>
         <!-- Nav  Menu -->
        <div id="w-node-_88a386dd-8f07-0c34-70f0-2d9f87e2971f-87e29718" class="links-section-footer">
          <?php wp_nav_menu( ['container' => false,'menu_class'=>'footer-link','theme_location'=>'Header Menu','menu'=> get_nav_menu_locations('Header Menu')['header_menu']] ) ?>
        </div>
         <!-- Nav Menu Ends -->
        <div id="w-node-_88a386dd-8f07-0c34-70f0-2d9f87e29724-87e29718" class="label">Categories</div>
        <div id="w-node-_88a386dd-8f07-0c34-70f0-2d9f87e29726-87e29718" class="links-section-footer">
          <div class="w-dyn-list">
            <div role="list" class="w-dyn-items">
              <div role="listitem" class="w-dyn-item">
                <a href="#" class="footer-link"></a>
              </div>
            </div>
            <div class="status-message w-dyn-empty">
              <div>No items found.</div>
            </div>
          </div>
        </div>
        <div id="w-node-_88a386dd-8f07-0c34-70f0-2d9f87e2972d-87e29718" class="label">Help</div>
        <!-- Help Menu -->
        <div id="w-node-_88a386dd-8f07-0c34-70f0-2d9f87e2972f-87e29718" class="links-section-footer">
           <?php wp_nav_menu( ['container' => false,'menu_class'=>'footer-link','theme_location'=>'Help Menu','menu'=> get_nav_menu_locations('Help Menu')['Help_menu']] ) ?>
        </div>
         <!-- Help Menu Ends -->
        <div id="w-node-_88a386dd-8f07-0c34-70f0-2d9f87e29736-87e29718" class="label">Follow</div>
         <!-- Social Menu -->
        <div id="w-node-_88a386dd-8f07-0c34-70f0-2d9f87e29738-87e29718" class="links-section-footer">
            <?php wp_nav_menu( ['container' => false,'menu_class'=>'footer-link social-link','theme_location'=>'Social Menu','menu'=> get_nav_menu_locations('Social Menu')['social_menu']] ) ?>
        </div>
         <!-- Social Menu -->
      </div>


<div class="footer-bar">
    <h5 class="right-statement">© <?php echo bloginfo('name') . " "; echo date("Y"); ?>. All rights reserved.</h5>
  </div>

</body>
</html>


<?php wp_footer(); ?>