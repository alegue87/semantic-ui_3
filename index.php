<?php
/**
 * Chooses the template to display
 * 
 * On used when the page doesn't have its "page template" option set.
 */
global $Theme;

if (is_404()) {
	// There was an error with the request, display the 404 page.
	template_use_part($Theme->template_sub_path.'/default', $Theme->template_sub_path.'/default-page');
	template_use_part($Theme->content_sub_path.'/loop', $Theme->content_sub_path.'/404');
} elseif (is_front_page() || is_home()) {
	// This the home page, which is typically designed differently from the rest of the site
	template_use_part($Theme->template_sub_path.'/default', $Theme->template_sub_path.'/home');
}
template_part($Theme->template_sub_path.'/default', $Theme->post_type);
