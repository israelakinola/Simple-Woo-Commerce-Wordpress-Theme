<div class="col-12 col-md-4 col-lg-3 mt-2">
  <div class="card bg-transparent shadow p-3 mb-5 bg-white">
    <img src="<?php echo get_the_post_thumbnail_url(get_the_ID());  ?>" class="card-img-top" alt="Music Cover">
    <div class="card-body p-2">
      <h5 class="card-title"><?php the_title(); ?></h5>
      <p class="card-text text-secondary"><?php echo  get_post_meta(get_the_ID(),'music_title',true) ?></p>
      <a target="_blank" href="<?php echo get_post_meta(get_the_ID(),'music_link',true) ?>" class="btn btn-dark text-white">Listen Here</a>
    </div>
  </div>
</div>