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
		<?php __('Blog sem nome -'); ?>
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
            <dd><a class="email" href="#">email</a></dd>
            <dd><a class="twitter" href="#">twitter</a></dd>
        </dl>
      </div><!--end wrapper-->
    </div><!--end follow-->
    <div class="wrapper">
      <div id="title"><a href="#">Teste</a><?php //echo $title_for_layout ?></div>
      <div id="description">Descricao</div>
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
  <div class="notice">
      <div><strong>Atenção:</strong> Flash aqui.</div>
  </div><!--end notice-->
   <div id="content">
    <div id="post-1" class="post">
      <div class="post-header">

        <div class="date">25 jan <span>2009</span></div>
        <h2><a href="#" rel="bookmark" title="titulo">Titulo</a></h2>
          <div class="author">by Pedro Nascimento</div>
      </div><!--end post header-->
      <div class="entry clear">
      <?php echo $content_for_layout; ?>
      <a href="#">Read more...</a>
      </div><!--end entry-->
      <div class="post-footer">
        <div class="comments"><a href="#">Leave a comment</a></div>
      </div><!--end post footer-->
    </div><!--end post-->
    <div id="comments">
      <div class="comment-number"><span>One Comment</span>
      <a id="leavecomment" href="#respond" title="Leave one"> &rarr;</a>
      </div><!--end comment-number-->
      <p class="note">Comments are closed.</p>
      </div><!--end comments-->
      <div id="respond">
      <h4 id="postcomment">Leave a reply</h4>
      <form method="post" id="commentform">

        <fieldset>
          <label for="author" class="comment-field"><small>Name (required):</small></label>
          <input class="text-input" type="text" name="author" id="author" value=""  tabindex="1" />
        </fieldset>
        <label for="email" class="comment-field"><small>Email: (required):</small></label>
          <input class="text-input" type="text" name="email" id="email" value="" tabindex="2" />
        </fieldset>
        <fieldset>
          <label for="url" class="comment-field"><small>Website:</small></label>
          <input class="text-input" type="text" name="url" id="url" value="" tabindex="3" />
        </fieldset>
        <label for="comment" class="comment-field"><small>Comment:</small></label>
        <textarea name="comment" id="comment" cols="50" rows="10" tabindex="4"></textarea>
      </fieldset>
      <p class="guidelines"><strong>Note:</strong> XHTML is allowed. Your email address will <strong>never</strong> be published.</p>
      <p class="comments-rss"><a href="#">Subscribe to this comment feed via RSS</a></p>
      <fieldset>
        <input name="submit" type="submit" id="submit" tabindex="5" value="Submit Comment" />
        <input type="hidden" name="comment_post_ID" value="id" />
      </fieldset>
      </form>

    </div><!--end respond-->

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
