<div class="comment-wrap">
  <?php
  foreach ($comments as $comment) {
    ?>
    <h4><a href="<?php comment_author_url(); ?>"><?php comment_author(); ?></a> -
      <small><?php comment_date(); ?></small>
    </h4>
    <div class="comment-body">
      <p><?php comment_text(); ?></p>
    </div><!--comment-body-->
    <?php
  }
  ?>
</div>

<?php
if (comments_open()) {
  ?>
  <h4>Leave a Comment</h4>
  <form action="<?php echo site_url('wp-comments-post.php'); ?>" method="post" id="commentform">
    <input type="hidden" name="comment_post_ID" value="<?php echo $post->ID; ?>" id="comment_post_ID">
    <div class="form-group">
      <label for="autor">Name / Alias (required)</label>
      <input type="text" name="autor" id="autor" class="form-control">
    </div>
    <div class="form-group">
      <label for="email">Email Address (required, not shown)</label>
      <input type="text" name="email" id="email" class="form-control">
    </div>
    <div class="form-group">
      <label for="url">Website (optional)</label>
      <input type="text" name="url" id="url" class="form-control">
    </div>
    <div class="form-group">
      <label>Comment</label>
      <textarea rows="7" cols="60" name="comment" class="form-control"></textarea>
    </div>
    <div class="form-group">
      <button class="btn btn-primary">Add Comment</button>
    </div>
  </form>
  <?php
} else {
  _e('Comments are closed', 'udemy');
}