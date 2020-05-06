<?php
/**
 * Woocommerce Specific Page.
 * 
 * This page is only used by Woocommerce when it is installed as a plugin. This
 * page is otherwise pointless. This page just replaces the standard loop with
 * the woocommerce content.
 */

template_use_part($Theme->content_sub_path.'/loop', $Theme->content_sub_path.'/woocommerce');
template_part($Theme->template_sub_path.'/default');
