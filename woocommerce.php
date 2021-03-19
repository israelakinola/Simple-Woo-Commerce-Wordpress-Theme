<?php

get_header();
?>
<div class="one-toronto-section-div" style="background-image:url('<?php echo get_theme_file_uri('images/bg.png');  ?>'); margin-bottom:36px;">
		<div class="container">
			<h1 class="p-4 text-white">Shop</h1>
		</div>
	</div>
	<div class="container">
		<?php woocommerce_content(); ?>
	</div>
<?php
get_footer();
