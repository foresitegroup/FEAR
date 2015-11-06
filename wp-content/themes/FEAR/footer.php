<div class="signup">
  <div class="site-width">
    <div class="one-half">
      <h2>SIGN UP</h2> Stay up to date on FEAR News &amp; Events.
    </div>

    <div class="one-half last">
      <?php dynamic_sidebar( 'mailchimp_signup' ); ?>
    </div>
  </div>
</div>

<div class="footer">
  <div class="site-width">
    <div class="one-half">
      &copy; <?php echo date("Y"); ?> Nicolet FEAR Team 4786. <a href="http://www.foresitegrp.com">Site by Foresite Group.</a>
      </div>

    <div class="one-half last">
      <a href="http://facebook.com/NicoletFear"><div class="hexagon facebook"><i class="fa fa-facebook"></i></div></a>
      <a href="http://twitter.com/NicoletFear"><div class="hexagon twitter"><i class="fa fa-twitter"></i></div></a>
      <a href="http://instagram.com/nicoletfear4786"><div class="hexagon instagram"><i class="fa fa-instagram"></i></div></a>
      <a href="http://youtube.com/NicoletFEAR"><div class="hexagon youtube"><i class="fa fa-youtube"></i></div></a>
      <a href="http://www.usfirst.org"><img src="<?php echo get_template_directory_uri(); ?>/images/first.png" alt="FIRST" id="first"></a>
    </div>
  </div>
</div>

<?php wp_footer(); ?>

</body>
</html>