<?php
register_nav_menus(
    array('primary-menu'=>'Top menu')
);?>

<?php
register_sidebar(
    array(
        'name'=>"Sidebar Location",
        'id'=>'sidebar'
    ));


    add_theme_support('custom-background');
?>

<?php add_theme_support('post-thumbnails');?>

<?php
function weichie_load_more() { 


  $ajaxposts = new WP_Query([
    'post_type' => 'post',
    'posts_per_page' => 2,
    'orderby' => 'date',
    'order' => 'DESC',
    'paged' => $_POST['paged'],
  ]);

  $postperpage =2;
    $published_posts = wp_count_posts()->publish;

    $totalpagecount = ceil($published_posts /  $postperpage) ;

  $response = '';

  if($_POST['paged'] == $totalpagecount+1) 
  {
    return 0;
  }
// print_r($ajaxposts->have_posts());


  if($ajaxposts->have_posts()) {
    while($ajaxposts->have_posts()) : $ajaxposts->the_post();

  

    $response .= get_template_part('content', 'post');


    
    //   $response .= get_template_part('parts/card', 'publication');
    endwhile;
  } else {
    $response = '';
  }

//   echo json_encode($response);
echo $response;

  exit;
  die();
}
add_action('wp_ajax_weichie_load_more', 'weichie_load_more');
add_action('wp_ajax_nopriv_weichie_load_more', 'weichie_load_more');

?>



