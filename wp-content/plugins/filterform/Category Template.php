

<!-- <div class="row services-row services-row-head services-row"> -->

<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
     <p><?php the_post_thumbnail('medium');?></p>
    <h2><h3 href="<?php echo the_permalink() ?>" target="_blank"><?php the_title(); ?></h3></h2>
    <p><?php the_excerpt(); ?></p>
    <p><?php  echo get_the_date() ;?>
<!--<p class="services-more"><a href="#">Find Out More</a></p>  -->
</div>

