<?php
/**
 * Plugin Name:     GF Force Enable HTML5
 * Plugin URI:      https://github.com/ItinerisLtd/gf-force-enable-html5/
 * Description:     Force Gravity Forms to enable HTML5 output.
 * Version:         0.1.0
 * Author:          Itineris Limited
 * Author URI:      https://www.itineris.co.uk/
 * Text Domain:     gf-force-enable-html5
 */

declare(strict_types=1);

namespace Itineris\GFForceEnableHTML5;

// If this file is called directly, abort.
if (! defined('WPINC')) {
    die;
}

add_filter('pre_option_rg_gforms_enable_html5', '__return_true');
