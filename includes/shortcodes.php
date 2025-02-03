<?php

namespace Shortcodes;

require_once CORE_SHORTCODE . "nwcf_home_display.php";


\Shortcodes\initialize();

function initialize()
{
    add_shortcode( 'nwcf_home_display', '\nwcf_home_display' );
}