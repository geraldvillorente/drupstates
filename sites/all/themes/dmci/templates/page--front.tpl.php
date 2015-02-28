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
				<div class="clear-both"></div>
			</ul>
		</div>
	</div>
</center>

<style>
button {
	padding: 10px 25px !important;
	color: #fff !important;
	font-size: 12px !important;
	text-transform: uppercase;
	box-shadow: 0px;
	border: 0px !important;
	background: #0076a3 !important;
}

.login-form input {
	border-radius: 3px;
	box-shadow: none !important;
	margin: 0px 0px 0px 0px !important;
}

.login-form li {
	padding: 5px 20px;
	padding-bottom: 10px;
	float: left;
	list-style: none;
	text-align: center;
}

.login-form li a {
	color: #000;
	font-size: 11px;
}

.bottom-links {
	margin-top: 10px;
	border-radius: 3px;
	box-shadow: 0px 0px 25px #444;
	background: #fff;
}
</style>