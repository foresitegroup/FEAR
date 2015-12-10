<?php if(is_singular()): ?>
  <div class="subheader" style="background-image: url(<?php echo get_template_directory_uri(); ?>/images/subheader-gray.jpg);">
    <div class="site-width">
      <div>
        <h2>FEAR THIS</h2>
      </div>
    </div>
  </div>
<?php endif; ?>

<div class="site-width mb">
  <div class="blog-entry<?php if(is_singular()) echo " blog-entry-single"; ?>">
    <?php if (has_post_thumbnail()) the_post_thumbnail(); ?>

    <div class="blog-date"><?php echo get_the_date(); ?></div>

    <?php the_title( '<h2>', '</h2>' ); ?>

    <?php if( is_singular() ) the_content();
    else echo get_the_excerpt(); ?>

    <?php if( !is_singular() ): ?>
      <a title="<?php the_title(); ?>" href="<?php the_permalink(); ?>"><strong><?php _e('READ MORE', SH_NAME); ?></strong></a>
    <?php endif; ?>
  </div>
</div>