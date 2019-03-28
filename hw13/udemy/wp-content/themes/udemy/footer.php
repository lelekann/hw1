<footer class="footer">
  <div class="container">
    <?php
    $theme_tops   = get_option('ju_opts');
    echo stripslashes_deep($theme_tops['footer']);
    ?>
  </div>
</footer>

<?php wp_footer(); ?>
</body>
</html>