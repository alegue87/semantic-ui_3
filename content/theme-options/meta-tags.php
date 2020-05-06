<?php global $Theme; ?>
<div class="ui three column doubling grid">
	<div class="column">
		<div class="ui secondary stacked segment">
		<h3 class="ui center aligned dividing header">Mobile Meta</h3>
			<div class="ui form">
				<div class="inline field">
					<div class="ui toggle checkbox">
						<?php
						printf(
							'<input type="checkbox" value="1" name="%1$s" %2$s>',
							$Theme->option_form_name('mobile_meta'),
							($Theme->get_option('mobile_meta') ? 'checked' : '')
						);
						?>
						<label>Enable Mobile Meta</label>
					</div>
				</div>
				<div class="field">
					<label>Recommended Mobile Screen Width (without the "px")</label>
					<?php
					printf(
						'<input type="text" placeholder="450" name="%1$s" value="%2$s">',
						$Theme->option_form_name('mobile_size'),
						$Theme->get_option('mobile_size')
					);
					?>
				</div>
			</div>
		</div>
	</div>
	<div class="column">
		<div class="ui secondary stacked segment">
		<h3 class="ui center aligned dividing header">Favicon</h3>
			<div class="ui form">
				<div class="inline field">
					<div class="ui toggle checkbox">
						<?php
						printf(
							'<input type="checkbox" value="1" name="%1$s" %2$s>',
							$Theme->option_form_name('meta_favicon_enabled'),
							($Theme->get_option('meta_favicon_enabled') ? 'checked' : '')
						);
						?>
						<label>Enable Favicon</label>
					</div>
				</div>
				<div class="field">
					<label>URL to favicon (png, jpg, or ico)</label>
					<?php
					printf(
						'<input type="text" placeholder="/favicon.png" name="%1$s" value="%2$s">',
						$Theme->option_form_name('meta_favicon'),
						$Theme->get_option('meta_favicon')
					);
					?>
				</div>
			</div>
		</div>
	</div>
	<div class="column">
		<div class="ui secondary stacked segment">
		<h3 class="ui center aligned dividing header">X-UA-Compatible</h3>
			<div class="ui form">
				<div class="inline field">
					<div class="ui toggle checkbox">
						<?php
						printf(
							'<input type="checkbox" value="1" name="%1$s" %2$s>',
							$Theme->option_form_name('meta_x_ua_compatible_enabled'),
							($Theme->get_option('meta_x_ua_compatible_enabled') ? 'checked' : '')
						);
						?>
						<label>Enable X-UA-Compatible</label>
					</div>
				</div>
				<div class="field">
					<label>Configure:</label>
					<?php
					printf(
						'<input type="text" placeholder="IE=edge,chrome=1" name="%1$s" value="%2$s">',
						$Theme->option_form_name('meta_x_ua_compatible'),
						$Theme->get_option('meta_x_ua_compatible')
					);
					?>
				</div>
			</div>
		</div>
	</div>
	<div class="column">
		<div class="ui secondary stacked segment">
		<h3 class="ui center aligned dividing header">Keywords</h3>
			<div class="ui form">
				<div class="inline field">
					<div class="ui toggle checkbox">
						<?php
						printf(
							'<input type="checkbox" value="1" name="%1$s" %2$s>',
							$Theme->option_form_name('meta_keywords_enabled'),
							($Theme->get_option('meta_keywords_enabled') ? 'checked' : '')
						);
						?>
						<label>Enable Keywords</label>
					</div>
				</div>
				<div class="field">
					<label>Comma-delimited list of keywords</label>
					<?php
					printf(
						'<input type="text" placeholder="html5, ui, library, framework, javascript" name="%1$s" value="%2$s">',
						$Theme->option_form_name('meta_keywords'),
						$Theme->get_option('meta_keywords')
					);
					?>
				</div>
			</div>
		</div>
	</div>
</div>
