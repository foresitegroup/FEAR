<?php
/* Template Name: Board Game Bonanza */

get_header();
?>

<div class="subheader"<?php if(has_post_thumbnail()) echo " style=\"background-image: url(" . wp_get_attachment_url(get_post_thumbnail_id($post->ID)) . ");\""; ?>>
  <div class="site-width board-game">
    <div>
      <?php the_title( '<h2>', '</h2>' ); ?>
      <?php the_subtitle( '<div>', '</div>' ); ?>
    </div>
  </div>
</div>

<div class="site-width mb board-game">
  <?php
  while ( have_posts() ) : the_post();
    the_content();
  endwhile;
  ?>
  
  <br>
  <br>
  <strong>Pre-registration has concluded for the Board Game Bonanza. However there are still PLENTY of seats and tables remaining. Sales can be completed at the door honoring all of the discounts provided through table sales. We hope to see you at the first annual Board Game Bonanza!</strong>

  <!--<h5>Join Us</h5>
  You may purchase tickets and select game preferences here. You may also buy tickets at the door. Best to do it early!<br>
  <br>

  <form class="paypal paypal-group" name="_cart" action="https://www.paypal.com/cgi-bin/webscr" method="post">
    <div>
      <h4>Purchase a group of 4 tickets with the $20 savings</h4>

      <input type="hidden" name="cmd" value="_cart">
      <input type="hidden" name="upload" value="1">
      <input type="hidden" name="business" value="chris.macon@nicolet.us">
      <input type="hidden" name="currency_code" value="USD">
      <input type="hidden" name="return" value="https://<?php echo $_SERVER['HTTP_HOST'] . $_SERVER['SCRIPT_NAME']; ?>">

      <input type="hidden" name="item_name_1" value="FEAR Board Game Bonanza: Group of 4 Tickets">
      <input type="hidden" name="amount_1" value="100">

      <div class="names">
        <input type="hidden" name="on0_1" value="Name 1">
        <input type="text" name="os0_1" placeholder="Name 1">

        <input type="hidden" name="on1_1" value="Name 2">
        <input type="text" name="os1_1" placeholder="Name 2">

        <input type="hidden" name="on2_1" value="Name 3">
        <input type="text" name="os2_1" placeholder="Name 3">

        <input type="hidden" name="on3_1" value="Name 4">
        <input type="text" name="os3_1" placeholder="Name 4">
      </div>

      <fieldset>
        <legend>Our first game preference is</legend>
        <input type="hidden" name="on4_1" value="Our first game preference is">
        <label><input type="radio" name="os4_1" value="Aggravation"> Aggravation</label>
        <label><input type="radio" name="os4_1" value="Sorry"> Sorry</label>
        <label><input type="radio" name="os4_1" value="Trouble"> Trouble</label>
        <label><input type="radio" name="os4_1" value="Mousetrap"> Mousetrap</label>
        <label><input type="radio" name="os4_1" value="Uno"> Uno</label>
      </fieldset>

      <div style="clear: both;"></div>

      <input type="submit" name="submit" value="PURCHASE">
    </div>
  </form>

  <form class="paypal paypal-single" name="_cart" action="https://www.paypal.com/cgi-bin/webscr" method="post">
    <div>
      <h4>Purchase an individual ticket for $30</h4>

      <input type="hidden" name="cmd" value="_cart">
      <input type="hidden" name="upload" value="1">
      <input type="hidden" name="business" value="chris.macon@nicolet.us">
      <input type="hidden" name="currency_code" value="USD">
      <input type="hidden" name="return" value="https://<?php echo $_SERVER['HTTP_HOST'] . $_SERVER['SCRIPT_NAME']; ?>">

      <input type="hidden" name="item_name_1" value="FEAR Board Game Bonanza: Individual Ticket">
      <input type="hidden" name="amount_1" value="30">

      <div class="names">
        <input type="hidden" name="on0_1" value="Name">
        <input type="text" name="os0_1" placeholder="Name">
      </div>

      <fieldset>
        <legend>My first game preference is</legend>
        <input type="hidden" name="on2_1" value="My first game preference is">
        <label><input type="radio" name="os2_1" value="Aggravation"> Aggravation</label>
        <label><input type="radio" name="os2_1" value="Sorry"> Sorry</label>
        <label><input type="radio" name="os2_1" value="Trouble"> Trouble</label>
        <label><input type="radio" name="os2_1" value="Mousetrap"> Mousetrap</label>
        <label><input type="radio" name="os2_1" value="Uno"> Uno</label>
      </fieldset>

      <div style="clear: both;"></div>

      <input type="submit" name="submit" value="PURCHASE">
    </div>
  </form>

  <div style="clear: both; font-size: 70%; line-height: 1.3em; padding: 3em 0; color: #E04E42;">
    NOTICE: This is an ADULTS ONLY event - no students or under age community members will be admitted, be in attendance, or take part in any part of this event.
  </div>-->
</div>

<?php get_footer(); ?>