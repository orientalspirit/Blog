<?php global $titan; ?>
</div><!--end wrapper-->
</div><!--end content-background-->
<div id="footer">
  <div class="wrapper clear">
    <div id="footer-about" class="footer-column">
      <h2><?php _e('About', 'titan') ?></h2>
        <?php if ($titan->footerAbout() != '') : ?>
          <?php echo $titan->footerAbout(); ?>
        <?php else : ?>
          <p><?php _e("Did you know you can write your own about section just like this one? It's really easy. Head into the the <em>Titan Options</em> menu and check out the footer section. Type some stuff in the box, click save, and your new about section shows up in the footer.", "titan") ?></p>
          <p><?php _e("Wondering about those Flickr photos on the right?", "titan") ?></p>
          <p><?php _e("We didn't take them, they are a random sampling of the most popular photos on Flickr with the tag 'nature'. All rights are reserved to the original copyright holders where applicable.", "titan") ?></p>
        <?php endif; ?>
    </div>
    <div id="footer-flickr" class="footer-column">
      <?php if ($titan->flickrState() == 'true') : ?>
        <ul>
          <?php if ( !function_exists('dynamic_sidebar')|| !dynamic_sidebar('footer_sidebar') ) : ?>
            <li class="widget widget_categories">
              <h2 class="widgettitle"><?php _e('Categories'); ?></h2>
              <ul>
                <?php wp_list_cats('sort_column=name&hierarchical=0'); ?>
              </ul>
            </li>
          <?php endif; ?>
        </ul>
      <?php else : ?>
        <h2><?php _e('Flickr', 'titan') ?></h2>
        <?php 
          if ($titan->flickrLink() != '') : 
            $url = $titan->flickrLink();
          else :
            $url = "http://www.flickr.com/badge_code_v2.gne?count=6&display=popular&size=s&layout=x&source=all_tag&tag=nature";
          endif;
        ?>
        <?php
          $html = file_get_contents($url);
          preg_match_all("/<div.*div>/", $html, $matches); 
            foreach($matches[0] as $div) { 
              echo str_replace("></a>", "/></a>", $div);
            }
        ?>  
      <?php endif; ?>
    </div>
    <div id="footer-search" class="footer-column">
      <h2><?php _e('Search', 'titan') ?></h2>
       <?php if (is_file(STYLESHEETPATH . '/searchform.php')) include (STYLESHEETPATH . '/searchform.php'); else include(TEMPLATEPATH . '/searchform.php'); ?>
    </div>
    <div id="copyright">
      <?php/* 
              Hey there code reader! Hope you are enjoying Titan so far. I wanted to let you know the footer attribution link plays a vital role in exposing our open source themes to the WordPress community. I would really appreciate it if you could leave this message and the links below intact. Go ahead and add a 'Modified by' or similar next to the link if you have made changes. Questions? Send an email to themes {at} jestro.com.
      */?>
          <p class="copyright-notice"><?php _e('Copyright', 'titan') ?> &copy; <?php echo date('Y') ?> <?php echo $titan->copyrightName(); ?>. <a href="http://themes.jestro.com/titan/">Titan Theme</a> by <a href="http://www.jestro.com">Jestro</a>.</p>
    </div><!--end copyright-->
  </div><!--end wrapper-->
</div><!--end footer-->

<?php wp_footer(); ?>
<?php
  if ($titan->statsCode() != '') {
    echo $titan->statsCode();
  }
?>
</body>
</html> 