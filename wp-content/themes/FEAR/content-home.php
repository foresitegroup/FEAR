<?php putRevSlider( 'homepage' ); ?>

<div class="greenband">
  <div class="site-width countdown-wrap">
    <?php echo do_shortcode('[waiting name="Homepage"]'); ?>
  </div>
</div>

<div class="home-content">
  <div class="site-width">
  	<?php the_content(); ?>
  </div>
</div>

<hr>

<div class="site-width home-social">
  <div class="one-third">
    <h2 class="soc-head">@NICOLETFEAR</h2>
    <hr>
    <div id="twitter-feed-head">FOLLOW US ON TWITTER</div>
    <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/inc/twitterFetcher.js"></script>
    <script>
      var config1 = {
        "id": '611538467353333761',
        "domId": 'twitter-feed',
        "maxTweets": 5,
        "enableLinks": true,
        "showTime": false,
        "showUser": false,
        "showRetweet": false,
        "showInteraction": false
      };
      twitterFetcher.fetch(config1);
    </script>
    <div id="twitter-feed"></div>
    <div class="soc-foot">
      <a href="http://twitter.com/NicoletFear"><div class="hexagon twitter"><i class="fa fa-twitter"></i></div> TWEET @nicoletFEAR</a>
    </div>
  </div>

  <div class="two-third last">
    <h2 class="soc-head">#NICOLETFEAR4786</h2>
    <hr>
    <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/inc/instafeed.min.js"></script>
    <script type="text/javascript">
      var userFeed = new Instafeed({
        clientId: '2a5b84a361844297b9f1816cc8d432f8',
        get: 'user',
        userId: '1702006231',
        limit: 12,
        template: '<a href="{{link}}" target="new"><img src="{{image}}" /></a>'
      });
      userFeed.run();
    </script>
    <div id="instafeed"></div>
    <div class="soc-foot">
      <a href="http://instagram.com/nicoletfear4786"><div class="hexagon instagram"><i class="fa fa-instagram"></i></div> VIEW MORE</a>
    </div>
  </div>
</div>

<div id="home-video">
  <a href="<?php dynamic_sidebar( 'home_page_video' ); ?>&rel=0" data-rel="lightbox-video-homepage"><i class="fa fa-play-circle-o"></i></a>
</div>

<div class="site-width">
  <br><br><br>
  "UPCOMING EVENTS" AND "FEAR THIS" GOES HERE
  <br><br><br><br>
</div>

<div class="home-help">
  <div class="site-width">
    <img src="<?php echo get_template_directory_uri(); ?>/images/robot-footer.png">
    HOW CAN I HELP? <a href="#">LEARN MORE</a>
  </div>
</div>

<div class="home-gallery">
  <a href="#">VIEW GALLERY</a>
</div>