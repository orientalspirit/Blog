    <div id="post-1" class="post">
      <div class="post-header">

        <div class="date">25 jan <span>2009</span></div>
        <h2><a href="#" rel="bookmark" title="titulo">Titulo</a></h2>
          <div class="author">by Pedro Nascimento</div>
      </div><!--end post header-->
      <div class="entry clear">
      <?php //echo $content_for_layout; //TODO Por texto?>
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

