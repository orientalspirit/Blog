<?php
  foreach ($posts as $post):
    $created = $this->Time->fromString($post['Post']['created']);
?>
<div id="post-<?php echo $post['Post']['id']?>" class="post">
      <div class="post-header">

        <div class="date"><?php echo $this->Time->format('d M', $created); ?> <span><?php echo $this->Time->format('Y', $created);?></span></div>
        <h2><?php echo $this->Html->link($post['Post']['title'], array('action'=> 'view', $post['Post']['id']), array('class' => 'titulo', 'rel' => 'bookmark'));?></h2>
          <div class="author">by <?php echo Configure::read('author');?></div> <!-- TODO: USER ID-->
      </div><!--end post header-->
      <div class="entry clear">
      <?php echo $post['Post']['text']; //TODO Por texto?>
      <?php echo $this->Html->link('Read more...', array('action'=> 'view', $post['Post']['id'], '#comments'));?>
      </div><!--end entry-->
      <div class="post-footer">
        <div class="comments"></a><?php echo $this->Html->link('Leave a comment', array('action'=> 'view', $post['Post']['id'], '#comments'));?></div>
      </div><!--end post footer-->
    </div><!--end post-->
<?php endforeach; ?>
