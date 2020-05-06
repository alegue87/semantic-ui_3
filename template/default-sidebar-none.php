<?php
/*
Template Name: Sidebar: None
*/

theme_header();
?>
<main>
	<?php template_part($Theme->content_sub_path.'/loop', $Theme->post_type); ?>
</main>
<?php
theme_footer();
