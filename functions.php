<?php

require_once get_template_directory().'/inc/tgm.php';

require_once get_template_directory().'/inc/setup.php';

require_once get_template_directory().'/inc/custom-post.php';

//require_once get_template_directory().'/template-parts/testimonial.php';


require_once get_template_directory().'/inc/widget.php';

require_once get_template_directory().'/inc/enqueue.php';

require_once get_template_directory().'/template-parts/theme-option.php';


function add_menuclass($ulclass) {
		   return preg_replace('/<a /', '<a class="nav-link"', $ulclass);
			}
		add_filter('wp_nav_menu','add_menuclass');

		function add_liclass($liclass) {
		   return preg_replace('/<li /', '<li class="nav-item"', $liclass);
			}
		add_filter('wp_nav_menu','add_liclass');

















