<?php /* Smarty version 2.6.26, created on 2016-09-29 12:36:41
         compiled from controllers/grid/filter/form/filterForm.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'uniqid', 'controllers/grid/filter/form/filterForm.tpl', 11, false),array('modifier', 'concat', 'controllers/grid/filter/form/filterForm.tpl', 34, false),array('modifier', 'translate', 'controllers/grid/filter/form/filterForm.tpl', 34, false),array('modifier', 'assign', 'controllers/grid/filter/form/filterForm.tpl', 78, false),array('modifier', 'is_a', 'controllers/grid/filter/form/filterForm.tpl', 80, false),array('modifier', 'escape', 'controllers/grid/filter/form/filterForm.tpl', 96, false),array('function', 'translate', 'controllers/grid/filter/form/filterForm.tpl', 23, false),array('function', 'url', 'controllers/grid/filter/form/filterForm.tpl', 25, false),array('function', 'fbvElement', 'controllers/grid/filter/form/filterForm.tpl', 34, false),array('function', 'fieldLabel', 'controllers/grid/filter/form/filterForm.tpl', 76, false),array('function', 'eval', 'controllers/grid/filter/form/filterForm.tpl', 78, false),)), $this); ?>

<?php $this->assign('uid', ((is_array($_tmp="-")) ? $this->_run_mod_handler('uniqid', true, $_tmp) : uniqid($_tmp))); ?>
<div id="editFilterFormContainer<?php echo $this->_tpl_vars['uid']; ?>
">
	<?php if ($this->_tpl_vars['noMoreTemplates']): ?>
		<?php echo '<script type=\'text/javascript\'>
			<!--
			$(function() {
				// Hide the OK button.
				$(\'.ui-dialog:has(#editFilterFormContainer'; ?>
<?php echo $this->_tpl_vars['uid']; ?>
<?php echo ') :button:first\')
						.hide()
			});
			// -->
		</script>'; ?>

		<p><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => 'manager.setup.filter.noMoreTemplates'), $this);?>
</p>
	<?php else: ?>
		<form class="pkp_form" id="editFilterForm" method="post" action="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'updateFilter'), $this);?>
" >
			<h3><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => $this->_tpl_vars['formTitle']), $this);?>
</h3>

			<p><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => $this->_tpl_vars['formDescription'],'filterDisplayName' => $this->_tpl_vars['filterDisplayName']), $this);?>
</p>

			<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/formErrors.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

			<?php if ($this->_tpl_vars['filterTemplates']): ?>
								<?php echo $this->_plugins['function']['fbvElement'][0][0]->smartyFBVElement(array('type' => 'select','id' => ((is_array($_tmp='filterTemplateSelect')) ? $this->_run_mod_handler('concat', true, $_tmp, $this->_tpl_vars['uid']) : $this->_plugins['modifier']['concat'][0][0]->smartyConcat($_tmp, $this->_tpl_vars['uid'])),'name' => 'filterTemplateId','from' => $this->_tpl_vars['filterTemplates'],'translate' => false,'defaultValue' => "-1",'defaultLabel' => ((is_array($_tmp="manager.setup.filter.pleaseSelect")) ? $this->_run_mod_handler('translate', true, $_tmp) : AppLocale::translate($_tmp))), $this);?>

				<?php echo '<script type=\'text/javascript\'>
					<!--
					$(function() {
						// Hide the OK button as long as we
						// don\'t have a filter selected.
						$(\'.ui-dialog:has(#editFilterFormContainer'; ?>
<?php echo $this->_tpl_vars['uid']; ?>
<?php echo ') :button:first\')
								.hide()

						ajaxAction(
							\'post\',
							\'#editFilterFormContainer'; ?>
<?php echo $this->_tpl_vars['uid']; ?>
<?php echo '\',
							\'#filterTemplateSelect'; ?>
<?php echo $this->_tpl_vars['uid']; ?>
<?php echo '\',
							\''; ?>
<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'editFilter'), $this);?>
<?php echo '\',
							undefined,
							\'change\'
						);
					});
					// -->
				</script>'; ?>

			<?php else: ?>
				<?php echo '<script type=\'text/javascript\'>
					<!--
					$(function() {
						// Switch the OK button back on.
						$(\'.ui-dialog:has(#editFilterFormContainer'; ?>
<?php echo $this->_tpl_vars['uid']; ?>
<?php echo ') :button:first\')
								.show()
					});
					// -->
				</script>'; ?>


				<?php $this->assign('hasRequiredField', false); ?>
				<table>
					<?php $_from = $this->_tpl_vars['filterSettings']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['filterSetting']):
?>
						<?php if ($this->_tpl_vars['filterSetting']->getRequired() == @FORM_VALIDATOR_REQUIRED_VALUE): ?>
							<?php $this->assign('filterSettingRequired', '1'); ?>
							<?php $this->assign('hasRequiredField', true); ?>
						<?php else: ?>
							<?php $this->assign('filterSettingRequired', ''); ?>
						<?php endif; ?>
						<tr valign="top">
							<td class="label"><?php echo $this->_plugins['function']['fieldLabel'][0][0]->smartyFieldLabel(array('name' => $this->_tpl_vars['filterSetting']->getName(),'key' => $this->_tpl_vars['filterSetting']->getDisplayName(),'required' => $this->_tpl_vars['filterSettingRequired']), $this);?>
</td>
							<?php ob_start(); ?>{$<?php echo $this->_tpl_vars['filterSetting']->getName(); ?>
}<?php $this->_smarty_vars['capture']['default'] = ob_get_contents();  $this->assign('settingValueVar', ob_get_contents());ob_end_clean(); ?>
							<?php echo ((is_array($_tmp=smarty_function_eval(array('var' => $this->_tpl_vars['settingValueVar']), $this))) ? $this->_run_mod_handler('assign', true, $_tmp, 'settingValue') : $this->_plugins['modifier']['assign'][0][0]->smartyAssign($_tmp, 'settingValue'));?>

							<td class="value">
								<?php if (((is_array($_tmp=$this->_tpl_vars['filterSetting'])) ? $this->_run_mod_handler('is_a', true, $_tmp, 'SetFilterSetting') : is_a($_tmp, 'SetFilterSetting'))): ?>
									<?php echo $this->_plugins['function']['fbvElement'][0][0]->smartyFBVElement(array('type' => 'select','id' => $this->_tpl_vars['filterSetting']->getName(),'name' => $this->_tpl_vars['filterSetting']->getName(),'from' => $this->_tpl_vars['filterSetting']->getLocalizedAcceptedValues(),'selected' => $this->_tpl_vars['settingValue'],'translate' => false), $this);?>

								<?php elseif (((is_array($_tmp=$this->_tpl_vars['filterSetting'])) ? $this->_run_mod_handler('is_a', true, $_tmp, 'BooleanFilterSetting') : is_a($_tmp, 'BooleanFilterSetting'))): ?>
									<?php echo $this->_plugins['function']['fbvElement'][0][0]->smartyFBVElement(array('type' => 'checkbox','id' => $this->_tpl_vars['filterSetting']->getName(),'name' => $this->_tpl_vars['filterSetting']->getName(),'checked' => $this->_tpl_vars['settingValue']), $this);?>

								<?php else: ?>
									<?php echo $this->_plugins['function']['fbvElement'][0][0]->smartyFBVElement(array('type' => 'text','id' => $this->_tpl_vars['filterSetting']->getName(),'name' => $this->_tpl_vars['filterSetting']->getName(),'size' => $this->_tpl_vars['fbvStyles']['size']['LARGE'],'maxlength' => 250,'value' => $this->_tpl_vars['settingValue']), $this);?>

								<?php endif; ?>
							</td>
						</tr>
					<?php endforeach; endif; unset($_from); ?>
				</table>
				<?php if ($this->_tpl_vars['hasRequiredField']): ?><p><span class="formRequired"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.requiredField"), $this);?>
</span></p><?php endif; ?>

				<?php if ($this->_tpl_vars['filterId']): ?><input type="hidden" name="filterId" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['filterId'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
" /><?php endif; ?>
				<?php if ($this->_tpl_vars['filterTemplateId']): ?><input type="hidden" name="filterTemplateId" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['filterTemplateId'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
" /><?php endif; ?>
			<?php endif; ?>
		</form>
	<?php endif; ?>
</div>
