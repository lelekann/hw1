<?php

function ju_theme_opts_page () {
   $theme_opts    = get_option('ju_opts');
  ?>
  <div class="wrap">
    <div class="panel panel-success">
      <div class="panel-heading">
        <h3 class="panel-title"><?php _e('Udemy Theme Settings','udemy'); ?></h3>
      </div>
      <div class="panel-body">
        <form action="admin-post.php" method="post">
          <input type="hidden" name="action" value="ju_save_options">
          <?php wp_nonce_field('ju_options_verify'); ?>
          <h4><?php _e('Social Icons', 'udemy'); ?></h4>
          <div class="form-group">
            <label for="ju_inputTwitter"><?php _e('Twitter', 'udemy'); ?></label>
            <input type="text" class="form-control" name="ju_inputTwitter" id="ju_inputTwitter" value="<?php echo $theme_opts['twitter']; ?>">
          </div>
          <div class="form-group">
            <label for="ju_inputFacebook"><?php _e('Facebook', 'udemy'); ?></label>
            <input type="text" class="form-control" name="ju_inputFacebook" id="ju_inputFacebook" value="<?php echo $theme_opts['facebook']; ?>">
          </div>
          <div class="form-group">
            <label for="ju_inputYoutube"><?php _e('Youtube', 'udemy'); ?></label>
            <input type="text" class="form-control" name="ju_inputYoutube" id="ju_inputYoutube" value="<?php echo $theme_opts['youtube']; ?>">
          </div>
          <h4><?php _e('Logo','udemy'); ?></h4>
          <div class="form-group">
            <label><?php _e('Logo Type','udemy'); ?></label>
            <select name="ju_inputLogoType" class="form-control">
              <option value="1"><?php _e('Site Name','udemy'); ?></option>
              <option value="2"><?php _e('Image','udemy'); ?></option>
            </select>
          </div>
          <div class="input-group">
            <input type="text" class="form-control" placeholder="Logo Image" name="ju_inputLogoImg">
            <span class="input-group-btn">
              <button class="btn btn-primary" id="ju_uploadLogoImgBtn"><?php _e('Upload','udemy'); ?></button>
            </span>
          </div>
          <h4><?php _e('Footer','udemy'); ?></h4>
          <div class="form-group">
            <label for="ju_inputFooter"><?php _e('Footer Text (HTML Allowed)', 'udemy'); ?></label>
            <textarea  class="form-control" name="ju_inputFooter"></textarea>
          </div>
          <div class="form-group">
            <button class="btn btn-primary"><?php _e('Update','udemy'); ?></button>
          </div>
        </form>
      </div>
    </div>
  </div>
<?php
}