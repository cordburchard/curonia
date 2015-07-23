<?php
// define('WP_SITEURL', 'http://' . $_SERVER['SERVER_NAME'] . '/curonia' . '/wordpress');
// echo WP_SITEURL;
// define('WP_HOME',    'http://' . $_SERVER['SERVER_NAME'] . '/curonia');
// echo WP_HOME;
define('WP_CONTENT_DIR', $_SERVER['DOCUMENT_ROOT'] . '/curonia' . '/wp-content');
echo WP_CONTENT_DIR;
define('WP_CONTENT_URL', 'http://' . $_SERVER['SERVER_NAME'] . '/curonia' . '/wp-content');
echo WP_CONTENT_URL;
?>