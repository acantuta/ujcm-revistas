<?php /* Smarty version 2.6.26, created on 2016-09-25 15:41:12
         compiled from core:user/login.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'translate', 'core:user/login.tpl', 24, false),array('function', 'url', 'core:user/login.tpl', 33, false),array('modifier', 'strip_unsafe_html', 'core:user/login.tpl', 48, false),array('modifier', 'escape', 'core:user/login.tpl', 48, false),)), $this); ?>
<?php echo ''; ?><?php $this->assign('pageTitle', "user.login"); ?><?php echo ''; ?><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/header.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?><?php echo ''; ?>


<?php if (! $this->_tpl_vars['registerOp']): ?>
	<?php $this->assign('registerOp', 'register'); ?>
<?php endif; ?>
<?php if (! $this->_tpl_vars['registerLocaleKey']): ?>
	<?php $this->assign('registerLocaleKey', "user.login.registerNewAccount"); ?>
<?php endif; ?>

<?php if ($this->_tpl_vars['loginMessage']): ?>
	<span class="instruct"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => ($this->_tpl_vars['loginMessage'])), $this);?>
</span>
	<br />
	<br />
<?php endif; ?>

<?php if ($this->_tpl_vars['implicitAuth'] === @IMPLICIT_AUTH_OPTIONAL): ?>
	<h3><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "user.login.implicitAuth"), $this);?>
</h3>
<?php endif; ?>
<?php if ($this->_tpl_vars['implicitAuth']): ?>
	<a id="implicitAuthLogin" href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('page' => 'login','op' => 'implicitAuthLogin'), $this);?>
"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "user.login.implicitAuthLogin"), $this);?>
</a>
<?php endif; ?>
<?php if ($this->_tpl_vars['implicitAuth'] === @IMPLICIT_AUTH_OPTIONAL): ?>
	<h3><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "user.login.localAuth"), $this);?>
</h3>
<?php endif; ?>
<?php if (! $this->_tpl_vars['implicitAuth'] || $this->_tpl_vars['implicitAuth'] === @IMPLICIT_AUTH_OPTIONAL): ?>
	<form id="signinForm" method="post" action="<?php echo $this->_tpl_vars['loginUrl']; ?>
">
<?php endif; ?>

<?php if ($this->_tpl_vars['error']): ?>
	<span class="pkp_form_error"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => ($this->_tpl_vars['error']),'reason' => $this->_tpl_vars['reason']), $this);?>
</span>
	<br />
	<br />
<?php endif; ?>

<input type="hidden" name="source" value="<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['source'])) ? $this->_run_mod_handler('strip_unsafe_html', true, $_tmp) : String::stripUnsafeHtml($_tmp)))) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
" />

<?php if (! $this->_tpl_vars['implicitAuth'] || $this->_tpl_vars['implicitAuth'] === @IMPLICIT_AUTH_OPTIONAL): ?>
	<table id="signinTable" class="data">
	<tr>
		<td class="label"><label for="loginUsername"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "user.username"), $this);?>
</label></td>
		<td class="value"><input type="text" id="loginUsername" name="username" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['username'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
" size="20" maxlength="32" class="textField" /></td>
	</tr>
	<tr>
		<td class="label"><label for="loginPassword"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "user.password"), $this);?>
</label></td>
		<td class="value"><input type="password" id="loginPassword" name="password" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['password'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
" size="20" class="textField" /></td>
	</tr>
	<?php if ($this->_tpl_vars['showRemember']): ?>
	<tr valign="middle">
		<td></td>
		<td class="value"><input type="checkbox" id="loginRemember" name="remember" value="1"<?php if ($this->_tpl_vars['remember']): ?> checked="checked"<?php endif; ?> /> <label for="loginRemember"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "user.login.rememberUsernameAndPassword"), $this);?>
</label></td>
	</tr>
	<?php endif; ?>
	<tr>
		<td></td>
		<td><input type="submit" value="<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "user.login"), $this);?>
" class="button" /></td>
	</tr>
	</table>

	<ul>
		<?php if (! $this->_tpl_vars['hideRegisterLink']): ?><li><a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('page' => 'user','op' => $this->_tpl_vars['registerOp']), $this);?>
"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => $this->_tpl_vars['registerLocaleKey']), $this);?>
</a></li><?php endif; ?>
		<li><a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('page' => 'login','op' => 'lostPassword'), $this);?>
"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "user.login.forgotPassword"), $this);?>
</a></li>
	</ul>

<script type="text/javascript">
<!--
	document.getElementById('<?php if ($this->_tpl_vars['username']): ?>loginPassword<?php else: ?>loginUsername<?php endif; ?>').focus();
// -->
</script>
</form>
<?php endif; ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/footer.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>