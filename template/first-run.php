<?php
/*
Template Name: First-Run
*/
global $Theme;

template_use_part($Theme->content_sub_path.'/modals', $Theme->content_sub_path.'/empty');

theme_header('none');
?>
<main>
	<div class="empty size-10">&nbsp;</div>
	<img src="<?php echo esc_url($Theme->uri.'/logo.png'); ?>" class="ui centered image">
	<h1 class="ui center aligned dividing header">
		Welcome to Semantic UI for WordPress!
		<?php
		if (current_user_can('edit_theme_options')) {
			?>
			<div class="sub header">This is the first-run page, you can disable it from the <a href="<?php echo $Theme->options_uri(); ?>">Theme Options</a> page.</div>
			<?php
		} else {
			?>
			<div class="sub header">This is the first-run page, <strong>once you login</strong>, you can disable it from the Theme Options page.</div>
			<?php
		}
		?>
	</h1>
	<div class="ui basic segment">
		<?php template_part($Theme->content_sub_path.'/first-run'); ?>
	</div>
</main>
<?php
theme_footer('none');
