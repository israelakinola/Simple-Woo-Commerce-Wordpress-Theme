
      <div class="post row " style="margin-bottom:36px;">
        <div class="post-prw-img col-md-7" style="background-image:url('<?php echo get_the_post_thumbnail_url(get_the_ID());  ?>'); background-size:cover;  background-position:center; height:auto; width:350px; :" >
            
        </div>
        <div class="post-prw-text col-md-11" style="">
          <div class="post-prw-links">
            <div class="post-prw-date"><i class="icon-calendar"></i><?php the_date() ?></div>
          </div>
          <h4 class="post-prw-title"><a href="blog-post.html"><? the_title( ) ?></a></h4>
          <div class="post-prw-teaser"><? the_excerpt(  ) ?> </div>
          <div class="post-prw-btn">
            <a href="<? the_permalink(  ) ?>" class="btn btn--sm">Read More</a>
          </div>
        </div>
      </div>
