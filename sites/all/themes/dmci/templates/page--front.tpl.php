<div class="login-page">
	<div class="blurred-bg"></div>
	<center class="login-form">
		<?php print $messages; ?>
		<div class="content page-margin-top">
			<div class="row large-3 fields large-centered">
				<img src="http://dmci.dev/sites/default/files/dmci-logo.jpg" />
				<?php
				$elements = drupal_get_form("user_login");
				$form = drupal_render($elements);
				print $form;
				?>
			</div>
			<div class="row large-3 bottom-links">
				<ul>
					<li><a> Need help? </a></li>
					<li><a> Lost Password </a></li>
					<li><a> Request for Account </a></li>
				</ul>
			</div>
		</div>
	</center>
</div>