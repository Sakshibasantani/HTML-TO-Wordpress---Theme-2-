<?php
if (have_posts()) {
  while (have_posts()) {
    the_post();
    ?>
    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
      <?php if (has_post_thumbnail()) : ?>
        <div class="post-thumbnail">
          <?php the_post_thumbnail('medium'); ?>
        </div>
      <?php endif; ?>
      <header class="entry-header">
        <h2 class="entry-title"><?php the_title(); ?></h2>
      </header>
      <div class="entry-content">
        <?php the_content(); ?>
      </div>
    </article>
    <?php
  }
} else {
  echo 'No posts found.';
}
?>
