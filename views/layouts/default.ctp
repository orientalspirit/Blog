<?php
/**
 *
 * PHP versions 4 and 5
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright 2005-2009, Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright 2005-2009, Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       cake
 * @subpackage    cake.cake.console.libs.templates.skel.views.layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       MIT License (http://www.opensource.org/licenses/mit-license.php)
 */
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<?php echo $this->Html->charset(); ?>
	<title>
		<?php echo Configure::read('name'); ?>
		<?php echo ' - '; //keep prettyness ?>
		<?php echo $title_for_layout; ?>
	</title>
	<!-- Basic Meta Data -->
  <meta name="Copyright" content="Titan Theme Design: Copyright 2009 Jestro LLC" />
  <meta http-equiv="imagetoolbar" content="no" />
	<?php
		echo $this->Html->meta('icon');
    echo $this->Html->css('master');
		//echo $this->Html->css('cake.generic');

		echo $scripts_for_layout;
	?>
</head>
<body>
  <div id="header" class="clear">
    <div id="follow">
      <div class="wrapper clear">
        <dl>
          <dt>follow:</dt>
            <dd><a class="rss" href="#">rss</a></dd>
            <dd><a class="email" href="<?php echo Configure::read('email');?>">email</a></dd>
            <dd><a class="twitter" href="<?php echo Configure::read('twitter');?>">twitter</a></dd>
        </dl>
      </div><!--end wrapper-->
    </div><!--end follow-->
    <div class="wrapper">
      <div id="title"><?php echo $this->Html->link(Configure::read('name'), $this->webroot)?></div>
      <div id="description"><?php echo Configure::read('description')?></div>
      <div id="navigation index">
        <ul id="nav">
        <li class="page_item current_page_item">
          <a href="#">Home</a>
          </li>
        </ul>
      </div><!--end navigation-->
     </div><!--end wrapper-->
  </div><!--end header-->
  <div class="content-background">
<div class="wrapper">
  <?php
    $flash = $this->Session->flash();
    if ($flash):
  ?>
  <div class="notice">
      <?php echo $flash; ?>
  </div><!--end notice-->
  <?php endif; ?>
   <div id="content">
<?php echo $content_for_layout; //TODO Por texto?>
    <div class="navigation index">
      <div class="alignleft">&laquo; Older Entries</div>
      <div class="alignright">Newer Entries &raquo;</div>
    </div><!--end navigation-->
  </div><!--end content-->
  <div id="sidebar">
    <!--<div id="sidebox">Eh isso ae neguim</div>-->
    <ul>
      <ul>
        <li class="widget widget_categories">
          <h2 class="widgettitle">Search</h2>

      <form method="get" id="search_form" action="">
      <div>
        <input type="text"  name="s" id="s" class="search"/>
    <input type="submit" id="searchsubmit" value="Search" />
  </div>
</form>

        </li>
        <li class="widget widget_recent_entries">
          <h2 class="widgettitle">Recent Articles</h2>
          <ul>
            <li><a href="#">Post 1</a></li>
          </ul>
        </li>
        <li class="widget widget_categories">
          <h2 class="widgettitle">Tags</h2>
          <ul>
            <li><a href="#">Tag</a></li>
          </ul>
        </li>
        <li class="widget widget_archive">
          <h2 class="widgettitle">Archives</h2>
          <ul>
            <li><a href="#">Janeiro</a></li>
          </ul>
        </li>
      </ul>
    <ul>
  </div><!--end sidebar-->
</div><!--end wrapper-->
</div><!--end content-background-->
<div id="footer">
  <div class="wrapper clear">
    <div id="footer-about" class="footer-column">
      <h2>About</h2>
      <p>Did you know you can write your own about section just like this one? It's really easy. Head into the the <em>Titan Options</em> menu and check out the footer section. Type some stuff in the box, click save, and your new about section shows up in the footer</p>
    </div>
    <div id="footer-flickr" class="footer-column">
      <h2>Flickr</h2>
        <?php
          $url = "http://www.flickr.com/badge_code_v2.gne?count=6&display=popular&size=s&layout=x&source=all_tag&tag=nature";
          //$html = file_get_contents($url);
          //preg_match_all("/<div.*div>/", $html, $matches);
          //  foreach($matches[0] as $div) {
          //    echo str_replace("></a>", "/></a>", $div);
            //}
        ?>
    </div>
    <div id="footer-search" class="footer-column">
    <h2>Twitter</h2>
    </div>
  </div><!--end wrapper-->
</div><!--end footer-->
