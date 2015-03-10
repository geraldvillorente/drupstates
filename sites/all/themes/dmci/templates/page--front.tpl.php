<div class="login-page">
	<div class="blurred-bg"></div>
	<center class="login-form">
		<div class="msg-box"> <?php print $messages; ?> </div>
		<div class="content page-margin-top">
			<div class="row large-3 small-6 fields large-centered">
				<img src="<?php print $logo; ?>" />
				<?php
				$elements = drupal_get_form("user_login");
				$form = drupal_render($elements);
				print $form;
				?>
			</div>
			<div class="row large-3 small-6 bottom-links">
				<ul>
					<li><a> Need help? </a></li>
					<li><a> Lost Password </a></li>
					<li><a> Request for Account </a></li>
				</ul>
			</div>
		</div>
	</center>
</div>