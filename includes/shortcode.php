<?php
// This file enqueues a shortcode.

defined('ABSPATH') or die('Direct script access disallowed.');

add_shortcode('alkw_widget', function ($atts) {
    $default_atts = array();
    $args = shortcode_atts($default_atts, $atts);
    return "<style>.alkw-root {width: 100%;height: 90rem;position: relative; overflow: scroll}@media screen and (min-device-width: 1200px)@media screen and (min-width: 48em) {.alkw-root {overflow: inherit !important;}} {.erw-root {width: 1020px;height: 70rem;position: relative;}}</style><div id='alkw-root' class='alkw-root'></div>";
});
