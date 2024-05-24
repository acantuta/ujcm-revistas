<?php /* Smarty version 2.6.26, created on 2021-05-13 02:28:14
         compiled from editor/issues/issueGalleyForm.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'translate', 'editor/issues/issueGalleyForm.tpl', 15, false),array('function', 'url', 'editor/issues/issueGalleyForm.tpl', 19, false),array('function', 'fieldLabel', 'editor/issues/issueGalleyForm.tpl', 25, false),array('function', 'html_options', 'editor/issues/issueGalleyForm.tpl', 45, false),array('modifier', 'to_array', 'editor/issues/issueGalleyForm.tpl', 19, false),array('modifier', 'escape', 'editor/issues/issueGalleyForm.tpl', 26, false),array('modifier', 'default', 'editor/issues/issueGalleyForm.tpl', 45, false),array('modifier', 'date_format', 'editor/issues/issueGalleyForm.tpl', 68, false),)), $this); ?>
<?php echo ''; ?><?php $this->assign('pageTitle', "editor.issues.galley"); ?><?php echo ''; ?><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/header.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?><?php echo ''; ?>

<div id="galleyForm">
<h3><?php if ($this->_tpl_vars['galleyId']): ?><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "submission.layout.editGalley"), $this);?>
<?php else: ?><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "submission.layout.addGalley"), $this);?>
<?php endif; ?></h3>

<br />

<form method="post" action="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'saveIssueGalley','path' => ((is_array($_tmp=$this->_tpl_vars['issueId'])) ? $this->_run_mod_handler('to_array', true, $_tmp, $this->_tpl_vars['galleyId']) : $this->_plugins['modifier']['to_array'][0][0]->smartyToArray($_tmp, $this->_tpl_vars['galleyId']))), $this);?>
" enctype="multipart/form-data">
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/formErrors.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<div id="galleyFileData">
<p><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "submission.layout.galleyFileData"), $this);?>
</p>
<table class="data" width="100%">
<tr valign="top">
	<td width="20%" class="label"><?php echo $this->_plugins['function']['fieldLabel'][0][0]->smartyFieldLabel(array('name' => 'label','required' => 'true','key' => "submission.layout.galleyLabel"), $this);?>
</td>
	<td width="80%" class="value"><input type="text" id="label" name="label" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
" size="40" maxlength="32" class="textField" /></td>
</tr>

<?php if ($this->_tpl_vars['enablePublicGalleyId']): ?>
	<tr valign="top">
		<td class="label"><?php echo $this->_plugins['function']['fieldLabel'][0][0]->smartyFieldLabel(array('name' => 'publicGalleyId','key' => "submission.layout.publicGalleyId"), $this);?>
</td>
		<td class="value"><input type="text" name="publicGalleyId" id="publicGalleyId" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['publicGalleyId'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
" size="20" maxlength="255" class="textField" /></td>
	</tr>
<?php endif; ?>
<tr valign="top">
	<td>&nbsp;</td>
	<td class="instruct"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "submission.layout.galleyLabelInstructions"), $this);?>
</td>
</tr>

<tr valign="top">
	<td class="label"><?php echo $this->_plugins['function']['fieldLabel'][0][0]->smartyFieldLabel(array('name' => 'galleyLocale','required' => 'true','key' => "common.language"), $this);?>
</td>
	<td class="value">
		<select name="galleyLocale" id="galleyLocale" class="selectMenu">
		<?php echo smarty_function_html_options(array('options' => $this->_tpl_vars['supportedLocales'],'selected' => ((is_array($_tmp=@$this->_tpl_vars['galleyLocale'])) ? $this->_run_mod_handler('default', true, $_tmp, @$this->_tpl_vars['formLocale']) : smarty_modifier_default($_tmp, @$this->_tpl_vars['formLocale']))), $this);?>

		</select>
	</td>
</tr>

<tr valign="top">
	<td class="label"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.fileName"), $this);?>
</td>
	<td class="value"><a class="action" href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'downloadIssueFile','path' => ((is_array($_tmp=$this->_tpl_vars['issueId'])) ? $this->_run_mod_handler('to_array', true, $_tmp, $this->_tpl_vars['galley']->getFileId()) : $this->_plugins['modifier']['to_array'][0][0]->smartyToArray($_tmp, $this->_tpl_vars['galley']->getFileId()))), $this);?>
"><?php echo ((is_array($_tmp=$this->_tpl_vars['galley']->getFileName())) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
</a>&nbsp;</td>
</tr>
<tr valign="top">
	<td class="label"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.originalFileName"), $this);?>
</td>
	<td class="value"><?php echo ((is_array($_tmp=$this->_tpl_vars['galley']->getOriginalFileName())) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
</td>
</tr>
<tr valign="top">
	<td class="label"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.fileType"), $this);?>
</td>
	<td class="value"><?php echo ((is_array($_tmp=$this->_tpl_vars['galley']->getFileType())) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
</td>
</tr>
<tr valign="top">
	<td class="label"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.fileSize"), $this);?>
</td>
	<td class="value"><?php echo $this->_tpl_vars['galley']->getNiceFileSize(); ?>
</td>
</tr>
<tr valign="top">
	<td class="label"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.dateUploaded"), $this);?>
</td>
	<td class="value"><?php echo ((is_array($_tmp=$this->_tpl_vars['galley']->getDateUploaded())) ? $this->_run_mod_handler('date_format', true, $_tmp, $this->_tpl_vars['dateFormatShort']) : smarty_modifier_date_format($_tmp, $this->_tpl_vars['dateFormatShort'])); ?>
</td>
</tr>

<tr valign="top">
	<td class="label"><?php if ($this->_tpl_vars['galleyId']): ?><?php echo $this->_plugins['function']['fieldLabel'][0][0]->smartyFieldLabel(array('name' => 'galleyFile','key' => "layoutEditor.galley.replaceGalley"), $this);?>
<?php else: ?><?php echo $this->_plugins['function']['fieldLabel'][0][0]->smartyFieldLabel(array('name' => 'galleyFile','key' => "common.upload"), $this);?>
<?php endif; ?></td>
	<td class="value">
		<input type="file" name="galleyFile" id="galleyFile" class="uploadField" />&nbsp;&nbsp;<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "form.saveToUpload"), $this);?>

	</td>
</tr>
</table>
</div>

<br />

<p><input type="submit" value="<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.save"), $this);?>
" class="button defaultButton" /> <input type="button" value="<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.cancel"), $this);?>
" class="button" onclick="document.location.href='<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'issueGalleys','path' => $this->_tpl_vars['issueId'],'escape' => false), $this);?>
'" /></p>

<p><span class="formRequired"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.requiredField"), $this);?>
</span></p>

</form>
</div>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/footer.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>