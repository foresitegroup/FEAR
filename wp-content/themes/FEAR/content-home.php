<?php putRevSlider( 'homepage' ); ?>
<?php //if( function_exists('cyclone_slider') ) cyclone_slider('homepage'); ?>

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
    <h2 class="home-head">@NICOLETFEAR</h2>
    <hr>
    <div id="twitter-feed-head">FOLLOW US ON TWITTER</div>
    <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/inc/twitterFetcher.js"></script>
    <script>
      var config1 = {
        "id": '435921074492948480',
        "domId": 'twitter-feed',
        "maxTweets": 4,
        "enableLinks": true,
        "showTime": true,
        "showUser": true,
        "showRetweet": true,
        "showInteraction": false,
        "dateFunction": dateFormatter
      };
      function dateFormatter(date) {
        //return date.toString();
        var now = Math.round(new Date().getTime()/1000.0);
        var tweetdate = Math.round(new Date(date).getTime()/1000.0);
        var offset = date.getTimezoneOffset();
        var timestamp = tweetdate - (offset * 60);
        var output = "";

        var month = new Array();
        month[0] = "Jan";
        month[1] = "Feb";
        month[2] = "Mar";
        month[3] = "Apr";
        month[4] = "May";
        month[5] = "Jun";
        month[6] = "Jul";
        month[7] = "Aug";
        month[8] = "Sep";
        month[9] = "Oct";
        month[10] = "Nov";
        month[11] = "Dec";

        if (now - timestamp >= 86400) {
          output = month[date.getMonth()] + ' ' + date.getDate();
        } else {
          if (now - timestamp >= 3600) {
            output = Math.round(((now - timestamp) / 60) / 60) + 'h';
          } else {
            var themin = Math.round((now - timestamp) / 60);
            if (themin < 1) {
              output = 'Now';
            } else {
              output = themin + 'm';
            }
          }
        }

        return output;
      }
      twitterFetcher.fetch(config1);
    </script>
    <div id="twitter-feed"></div>
    <div class="soc-foot">
      <a href="http://twitter.com/NicoletFear"><div class="hexagon twitter"><i class="fa fa-twitter"></i></div> TWEET @nicoletFEAR</a>
    </div>
  </div>

  <div class="two-third last">
    <h2 class="home-head">#NICOLETFEAR4786</h2>
    <hr>
    <div id="instafeed">
      <?php
      $i = 1;
      // $json = json_decode(file_get_contents('https://www.instagram.com/nicoletfear4786/?__a=1'));
      $json = json_decode(file_get_contents('https://apinsta.herokuapp.com/u/nicoletfear4786'));
      foreach ($json->graphql->user->edge_owner_to_timeline_media->edges as $key => $value) {
        if ($i <= 6) {
          echo '<a href="'.'https://www.instagram.com/p/'.$value->node->shortcode.'" style="background-image: url('.$value->node->thumbnail_src.');"></a>';
          $i++;
        } else { break; }
      }
      ?>
    </div>
    <div class="soc-foot">
      <a href="http://instagram.com/nicoletfear4786"><div class="hexagon instagram"><i class="fa fa-instagram"></i></div> VIEW MORE</a>
    </div>
  </div>
</div>

<div id="home-video">
  <a href="<?php dynamic_sidebar( 'home_page_video' ); ?>&rel=0&autoplay=1" data-rel="lightbox-video-homepage"><i class="fa fa-play-circle-o"></i></a>
</div>

<div class="site-width home-events-blog">
  <div class="two-third home-events">
    <h2 class="home-head">UPCOMING EVENTS</h2>
    <hr>
    <?php dynamic_sidebar( 'home_page_calendar' ); ?>
    <div class="soc-foot">
      <a href="schedule">FULL SCHEDULE <i class="fa fa-caret-down"></i></a>
    </div>
  </div>

  <div class="one-third last fear-this">
    <h2 class="home-head">FEAR THIS</h2>
    <hr>
    <?php
    $tickler_query = new WP_Query('posts_per_page=3');
    if ($tickler_query->have_posts()) {
      while ($tickler_query->have_posts()) {
        $tickler_query->the_post();
        echo "<div class=\"ft-date\">" . get_the_date() . "</div>";
        echo "<h3>" . get_the_title() . "</h3>";
        echo excerpt(19);
        echo "<a href=\"" . get_permalink() . "\">Continue Reading</a>";
      }
    }
    wp_reset_postdata();
    ?>
    <div class="soc-foot">
      <a href="fear-this/">FEAR THIS BLOG <i class="fa fa-caret-down"></i></a>
    </div>
  </div>
</div>

<div class="home-help">
  <div class="site-width">
    <img src="<?php echo get_template_directory_uri(); ?>/images/robot-footer.png">
    <div class="vert-cent">
      HOW CAN I HELP? <a href="sponsors/how-can-i-help/">LEARN MORE</a>
    </div>
  </div>
</div>

<div class="home-gallery">
  <a href="<?php dynamic_sidebar( 'home_page_gallery_link' ); ?>">VIEW GALLERY</a>
</div>