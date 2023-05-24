<?php get_header();?>

<!-- sidebar widget  -->

<!--<?php get_sidebar();?>-->




    <!-- Begin #carousel-section -->
    <section id="carousel-section" class="section-global-wrapper"> 
        <div class="container-fluid-kamn">
            <div class="row">
                <div id="carousel-1" class="carousel slide" data-ride="carousel">

                    <!-- Indicators -->
                    <ol class="carousel-indicators visible-lg">
                        <li data-target="#carousel-1" data-slide-to="0" class="active"></li>
                        <li data-target="#carousel-1" data-slide-to="1"></li>
                        <li data-target="#carousel-1" data-slide-to="2"></li>
                    </ol>
        
                    <!-- Wrapper for slides -->
                    <div class="carousel-inner" role="listbox">
                        <!-- Begin Slide 1 -->
                        <div class="item active">
                            <img src="<?php echo get_template_directory_uri();?>/assets/img/slider/slide2.jpg" height="400" alt="Image of first carousel">
                            <div class="carousel-caption">
                                <h3 class="carousel-title hidden-xs">Office BOOTSTRAP TEMPLATE</h3>
                                <p class="carousel-body">RESPONSIVE \ MULTI PAGE</p>
                            </div>
                        </div>
                        <!-- End Slide 1 -->

                        <!-- Begin Slide 2 -->
                        <div class="item">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/slider/slide4.jpg" height="400" alt="Image of second carousel">
                            <div class="carousel-caption">
                                <h3 class="carousel-title hidden-xs">EASY TO CUSTOMIZE</h3>
                                <p class="carousel-body">BEAUTIFUL \ CLEAN \ MINIMAL</p>
                            </div>
                        </div>
                        <!-- End Slide 2 -->

                        <!-- Begin Slide 3 -->
                        <div class="item">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/slider/slide2.jpg" height="400" alt="Image of third carousel">
                            <div class="carousel-caption">
                                <h3 class="carousel-title hidden-xs">MULTI-PURPOSE TEMPLATE</h3>
                                <p class="carousel-body">PORTFOLIO \ CORPORATE \ CREATIVE</p>
                            </div>
                        </div>
                        <!-- End Slide 3 -->
                    </div>
        
                    <!-- Controls -->
                    <a class="left carousel-control" href="#carousel-1" data-slide="prev">
                        <span class="glyphicon glyphicon-chevron-left"></span>
                    </a>
                    <a class="right carousel-control" href="#carousel-1" data-slide="next">
                        <span class="glyphicon glyphicon-chevron-right"></span>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <!-- End #carousel-section -->


    <!-- Begin #services-section -->
    <section id="services" class="services-section section-global-wrapper">
        <div class="container">
            <div class="row">
                <div class="services-header">
                    <h3 class="services-header-title">Our Mission</h3>
                    <p class="services-header-body"><em> Things we provide in Office </em>  </p><hr>
                </div>
            </div>
      
            <!-- Begin Services Row 1-->
            <?php
//        query_posts(array(
//    'post_type' => 'post','order' => 'ASC','posts_per_page'=>'3'));?> 

<?php 
$publications = new WP_Query([
  'post_type' => 'post',
  'posts_per_page' => 2,
  'orderby' => 'date',
  'order' => 'ASC',
  'paged' => 1,
]);

?>


<div class="row services-row services-row-head services-row mydiv">
    <?php
    //  while (have_posts()) : the_post(); ?> 


<?php if($publications->have_posts()): ?> 

   <?php  while ($publications->have_posts()): $publications->the_post();?>


      
     <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
     <p><?php the_post_thumbnail('medium');?></p>
    <h2><h3 href="<?php echo the_permalink() ?>" target="_blank"><?php the_title(); ?></h3></h2>
    <p><?php the_excerpt(); ?></p>
    <!--<p><?php  echo get_the_date() ;?> -->
    <p class="services-more"><a href="#">Find Out More</a></p>

 </div>
 <?php endwhile;?>
 <?php endif; ?>

</div> 

<div class="btn__wrapper">
  <a class="btn btn__primary" id="load-more" name="loadmore">Load more</a>
</div>
 
                
        
              <!--  <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                    <div class="services-group wow animated zoomIn" data-wow-offset="40">
                        <p class="services-icon"><i class="fa fa-apple fa-5x"></i></p>
                        <h4 class="services-title">Apple</h4>
                        <p class="services-body">Cras interdum placerat libero vel tempor. Curabitur gravida iaculis erat quis dignissim.</p>
                        <p class="services-more"><a href="#">Find Out More</a></p>
                    </div>
                </div>
        
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                    <div class="services-group wow animated fadeInRight" data-wow-offset="40">
                        <p class="services-icon"><i class="fa fa-thumbs-o-up fa-5x"></i></p>
                        <h4 class="services-title">EASY TO USE</h4>
                        <p class="services-body">Cras interdum placerat libero vel tempor. Curabitur gravida iaculis erat quis dignissim.</p>
                        <p class="services-more"><a href="#">Find Out More</a></p>
                    </div>        
                </div>
            </div>
            End Serivces Row 1 
      
             Begin Services Row 2 
            <div class="row services-row services-row-tail services-row-2">
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                    <div class="services-group wow animated fadeInLeft" data-wow-offset="40">
                        <p class="services-icon"><span class="fa fa-windows fa-5x"></span></p>
                        <h4 class="services-title">Windows</h4>
                        <p class="services-body">Cras interdum placerat libero vel tempor. Curabitur gravida iaculis erat quis dignissim.</p>
                        <p class="services-more"><a href="#">Find Out More</a></p>
                    </div>
                </div>
        
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                    <div class="services-group wow animated zoomIn" data-wow-offset="40">
                        <p class="services-icon"><i class="fa fa-eye fa-5x"></i></p>
                        <h4 class="services-title">RETINA READY</h4>
                        <p class="services-body">Cras interdum placerat libero vel tempor. Curabitur gravida iaculis erat quis dignissim.</p>
                        <p class="services-more"><a href="#">Find Out More</a></p>
                    </div>
                </div>
        
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                    <div class="services-group wow animated fadeInRight" data-wow-offset="40">
                        <p class="services-icon"><i class="fa fa-cube fa-5x"></i></p>
                        <h4 class="services-title">Cubic</h4>
                        <p class="services-body">Cras interdum placerat libero vel tempor. Curabitur gravida iaculis erat quis dignissim.</p>
                        <p class="services-more"><a href="#">Find Out More</a></p>
                    </div>
                </div>
            </div>
             End Serivces Row 2 -->
    
        </div>      
    </section>
    <!-- End #services-section -->

<div class="course- container">
    <div class="course-text">
        <h1>course</h1>
    </div>

    <div class="course-box">
        <div class="course-box-left">

        <ul>

        <?php echo do_shortcode('[filterform]'); ?>




        <?php
    if (isset($_GET['category_ids'])) {
        $categoryIDs = explode(',', $_GET['category_ids']);
        
        $args = array(
            'post_type' => 'post',
            'category__in' => $categoryIDs,
            'posts_per_page' => -1
        );
        
        $query = new WP_Query($args);
        
        if ($query->have_posts()) {
            while ($query->have_posts()) {
                $query->the_post();
                // Display your post content here
                the_post_thumbnail();
                the_title('<h2>', '</h2>');
                the_content();
            }
            wp_reset_postdata();
        } else {
            echo 'No posts found.';
        }
    }
?>



  <!--<?php
  wp_list_categories(array(
    'title_li' => '',
    'link'     => 'true', // Add this line to enable category links
  ));
  ?>-->
</ul>




        </div>
    </div>
</div>




















   <?php

$postperpage =2;
    $published_posts = wp_count_posts()->publish;

    $totalpagecount = ceil($published_posts /  $postperpage) ;
?>
    <?php get_footer();?> 

    <script>

 
let currentPage = 1;
$('#load-more').on('click', function() { 
    currentPage++; 

   
   // Do currentPage + 1, because we want to load the next page
  var totalpagecount = '<?php echo $totalpagecount; ?>'; 
  alert(currentPage + "" + totalpagecount)
  
    $.ajax({
    type: 'POST',
    url: '/Themep2/wp-admin/admin-ajax.php',
    dataType: 'html',
    data: {
      action: 'weichie_load_more',
      paged: currentPage,
    },
    success: function (res) {
        alert(res) 
        $('.mydiv').append(res); 
        if(currentPage == totalpagecount) 
        {
              $('#load-more').hide();
         } 

        }

}); 
});
  
 

        </script> 






