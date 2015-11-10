<?php if(is_singular()): ?>
  <div class="subheader">
    <div class="site-width">
      <div>
        <h2>FEAR THIS</h2>
      </div>
    </div>
  </div>
<?php endif; ?>

<div class="site-width mb">
  <div class="blog-entry">
    <?php the_title( '<h2>', '</h2>' ); ?>

    <div class="blog-date"><?php echo get_the_date(); ?></div> 

    <?php the_content(); ?>
  </div>
</div>