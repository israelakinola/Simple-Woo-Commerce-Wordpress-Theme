<?php  ?>
<div class="col-md-12 col-lg-4 prod-column">
            <div class="prd-inside">
              <div class="prd-img-area">
                <a href="<?php echo get_permalink( ); ?>" class="image-hover-scale" style="background-image:url('<?php echo get_the_post_thumbnail_url(get_the_ID());  ?>'); background-size:cover;  background-position:center; height:399px; width:350px; ">
                  
                </a>
              </div>
              <div class="prd-info text-center">
                <h2 class="prd-title"><a href="<?php echo get_permalink( ); ?>"><?php the_title();?></a></h2>
                <div class="prd-rating"><i class="icon-star-fill fill"></i><i class="icon-star-fill fill"></i><i class="icon-star-fill fill"></i><i class="icon-star-fill fill"></i><i class="icon-star-fill fill"></i><span></span></div>
                <div class="prd-hover">
                  <div class="prd-price">
                    <div class="price-new"><?php echo $price;?></div>
                  </div>
                  <div class="prd-action">
                    <a href="<?php echo get_permalink( ); ?>" class="btn">Add To Cart</a>
                  </div>
                </div>
              </div>
            </div>
          </div>