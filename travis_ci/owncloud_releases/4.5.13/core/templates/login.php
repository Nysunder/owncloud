<!--[if IE 8]><style>input[type="checkbox"]{padding:0;}</style><![endif]-->
<form method="post">
	<fieldset>
		<?php if(!empty($_['redirect'])) { echo '<input type="hidden" name="redirect_url" value="'.$_['redirect'].'" />'; } ?>
		<?php if($_['display_lostpassword']): ?>
			<a href="./core/lostpassword/"><?php echo $l->t('Lost your password?'); ?></a>
		<?php endif; ?>
		<p class="infield">
			<label for="user" class="infield"><?php echo $l->t( 'Username' ); ?></label>
			<input type="text" name="user" id="user" value="<?php echo $_['username']; ?>"<?php echo $_['user_autofocus']?' autofocus':''; ?> autocomplete="on" required />
		</p>
		<p class="infield">
			<label for="password" class="infield"><?php echo $l->t( 'Password' ); ?></label>
			<input type="password" name="password" id="password" value="" required<?php echo $_['user_autofocus']?'':' autofocus'; ?> />
		</p>
		<input type="checkbox" name="remember_login" value="1" id="remember_login" /><label for="remember_login"><?php echo $l->t('remember'); ?></label>
		<input type="submit" id="submit" class="login" value="<?php echo $l->t( 'Log in' ); ?>" />
	</fieldset>
</form>
<?php if (!empty($_['alt_login'])) { ?>
<form id="alternative-logins">
	<fieldset>
		<legend><?php echo $l->t('Alternative Logins') ?></legend>
		<ul>
			<?php foreach($_['alt_login'] as $login): ?>
			<li><a class="button" href="<?php echo $login['href']; ?>" ><?php echo $login['name']; ?></a></li>
			<?php endforeach; ?>
		</ul>
	</fieldset>
</form>
<?php }
