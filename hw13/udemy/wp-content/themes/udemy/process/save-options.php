<?php

function ju_save_options()
{
  if (current_user_can('edit_theme_options')) {
    wp_die(__('You are not allowed to be on this page'));
  }

  check_admin_referer('ju_options_verify');

  $opts               = get_option('ju_opts');
  $opts['twitter']    = sanitize_text_field($_POST('ju_inputTwitter'));
  $opts['facebook']   = sanitize_text_field($_POST('ju_inputFacebook'));
  $opts['youtube']    = sanitize_text_field($_POST('ju_inputYoutube'));
  $opts['logo_type']  = absint($_POST['ju_inputLogoType']);
  $opts['footer']     = $_POST['ju_inputFooter'];
  $opts['logo']       = esc_url_raw($_POST['ju_inputLogoImg']);

  update_option('ju_opts', $opts);
  wp_redirect(admin_url('admin.php?page=ju_theme_opts&status=1'));
}