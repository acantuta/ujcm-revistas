<?php /* Smarty version 2.6.26, created on 2016-09-28 17:06:40
         compiled from author/submission/proofread.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'translate', 'author/submission/proofread.tpl', 15, false),array('function', 'url', 'author/submission/proofread.tpl', 26, false),array('function', 'icon', 'author/submission/proofread.tpl', 43, false),array('modifier', 'escape', 'author/submission/proofread.tpl', 21, false),array('modifier', 'date_format', 'author/submission/proofread.tpl', 39, false),array('modifier', 'default', 'author/submission/proofread.tpl', 39, false),array('modifier', 'assign', 'author/submission/proofread.tpl', 45, false),)), $this); ?>
<?php $this->assign('proofSignoff', $this->_tpl_vars['submission']->getSignoff('SIGNOFF_PROOFREADING_PROOFREADER')); ?>
<?php $this->assign('proofreader', $this->_tpl_vars['submission']->getUserBySignoffType('SIGNOFF_PROOFREADING_PROOFREADER')); ?>

<div id="proofread">
<h3><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "submission.proofreading"), $this);?>
</h3>

<?php if ($this->_tpl_vars['useProofreaders']): ?>
<table width="100%" class="data">
	<tr>
		<td class="label" width="20%"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "user.role.proofreader"), $this);?>
</td>
		<td class="value" width="80%"><?php if ($this->_tpl_vars['proofSignoff']->getUserId()): ?><?php echo ((is_array($_tmp=$this->_tpl_vars['proofreader']->getFullName())) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
<?php else: ?><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.none"), $this);?>
<?php endif; ?></td>
	</tr>
</table>
<?php endif; ?>

<a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'viewMetadata','path' => $this->_tpl_vars['proofSignoff']->getAssocId()), $this);?>
" class="action" target="_new"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "submission.reviewMetadata"), $this);?>
</a>

<table width="100%" class="info">
	<tr>
		<td width="40%" colspan="2">&nbsp;</td>
		<td width="20%" class="heading"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "submission.request"), $this);?>
</td>
		<td width="20%" class="heading"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "submission.underway"), $this);?>
</td>
		<td width="20%" class="heading"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "submission.complete"), $this);?>
</td>
	</tr>
	<tr>
		<td width="5%">1.</td>
		<td width="35%"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "user.role.author"), $this);?>
</td>
		<?php $this->assign('authorProofreadSignoff', $this->_tpl_vars['submission']->getSignoff('SIGNOFF_PROOFREADING_AUTHOR')); ?>
		<td><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['authorProofreadSignoff']->getDateNotified())) ? $this->_run_mod_handler('date_format', true, $_tmp, $this->_tpl_vars['dateFormatShort']) : smarty_modifier_date_format($_tmp, $this->_tpl_vars['dateFormatShort'])))) ? $this->_run_mod_handler('default', true, $_tmp, "&mdash;") : smarty_modifier_default($_tmp, "&mdash;")); ?>
</td>
		<td><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['authorProofreadSignoff']->getDateUnderway())) ? $this->_run_mod_handler('date_format', true, $_tmp, $this->_tpl_vars['dateFormatShort']) : smarty_modifier_date_format($_tmp, $this->_tpl_vars['dateFormatShort'])))) ? $this->_run_mod_handler('default', true, $_tmp, "&mdash;") : smarty_modifier_default($_tmp, "&mdash;")); ?>
</td>
				<td>
			<?php if (! $this->_tpl_vars['authorProofreadSignoff']->getDateNotified() || $this->_tpl_vars['authorProofreadSignoff']->getDateCompleted()): ?>
				<?php echo $this->_plugins['function']['icon'][0][0]->smartyIcon(array('name' => 'mail','disabled' => 'disabled'), $this);?>

			<?php else: ?>
				<?php echo ((is_array($_tmp=$this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.confirmComplete"), $this))) ? $this->_run_mod_handler('assign', true, $_tmp, 'confirmMessage') : $this->_plugins['modifier']['assign'][0][0]->smartyAssign($_tmp, 'confirmMessage'));?>

				<?php echo ((is_array($_tmp=$this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'authorProofreadingComplete','articleId' => $this->_tpl_vars['submission']->getId()), $this))) ? $this->_run_mod_handler('assign', true, $_tmp, 'url') : $this->_plugins['modifier']['assign'][0][0]->smartyAssign($_tmp, 'url'));?>

				<?php echo $this->_plugins['function']['icon'][0][0]->smartyIcon(array('name' => 'mail','onclick' => "return confirm('".($this->_tpl_vars['confirmMessage'])."')",'url' => $this->_tpl_vars['url']), $this);?>

			<?php endif; ?>
			<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['authorProofreadSignoff']->getDateCompleted())) ? $this->_run_mod_handler('date_format', true, $_tmp, $this->_tpl_vars['dateFormatShort']) : smarty_modifier_date_format($_tmp, $this->_tpl_vars['dateFormatShort'])))) ? $this->_run_mod_handler('default', true, $_tmp, "") : smarty_modifier_default($_tmp, "")); ?>

		</td>
	</tr>
	<tr>
		<td>2.</td>
		<td><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "user.role.proofreader"), $this);?>
</td>
		<?php $this->assign('proofreaderProofreadSignoff', $this->_tpl_vars['submission']->getSignoff('SIGNOFF_PROOFREADING_PROOFREADER')); ?>
		<td><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['proofreaderProofreadSignoff']->getDateNotified())) ? $this->_run_mod_handler('date_format', true, $_tmp, $this->_tpl_vars['dateFormatShort']) : smarty_modifier_date_format($_tmp, $this->_tpl_vars['dateFormatShort'])))) ? $this->_run_mod_handler('default', true, $_tmp, "&mdash;") : smarty_modifier_default($_tmp, "&mdash;")); ?>
</td>
		<td><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['proofreaderProofreadSignoff']->getDateUnderway())) ? $this->_run_mod_handler('date_format', true, $_tmp, $this->_tpl_vars['dateFormatShort']) : smarty_modifier_date_format($_tmp, $this->_tpl_vars['dateFormatShort'])))) ? $this->_run_mod_handler('default', true, $_tmp, "&mdash;") : smarty_modifier_default($_tmp, "&mdash;")); ?>
</td>
		<td><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['proofreaderProofreadSignoff']->getDateCompleted())) ? $this->_run_mod_handler('date_format', true, $_tmp, $this->_tpl_vars['dateFormatShort']) : smarty_modifier_date_format($_tmp, $this->_tpl_vars['dateFormatShort'])))) ? $this->_run_mod_handler('default', true, $_tmp, "&mdash;") : smarty_modifier_default($_tmp, "&mdash;")); ?>
</td>
	</tr>
	<tr>
		<td>3.</td>
		<td><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "user.role.layoutEditor"), $this);?>
</td>
		<?php $this->assign('layoutEditorProofreadSignoff', $this->_tpl_vars['submission']->getSignoff('SIGNOFF_PROOFREADING_LAYOUT')); ?>
		<td><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['layoutEditorProofreadSignoff']->getDateNotified())) ? $this->_run_mod_handler('date_format', true, $_tmp, $this->_tpl_vars['dateFormatShort']) : smarty_modifier_date_format($_tmp, $this->_tpl_vars['dateFormatShort'])))) ? $this->_run_mod_handler('default', true, $_tmp, "&mdash;") : smarty_modifier_default($_tmp, "&mdash;")); ?>
</td>
		<td><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['layoutEditorProofreadSignoff']->getDateUnderway())) ? $this->_run_mod_handler('date_format', true, $_tmp, $this->_tpl_vars['dateFormatShort']) : smarty_modifier_date_format($_tmp, $this->_tpl_vars['dateFormatShort'])))) ? $this->_run_mod_handler('default', true, $_tmp, "&mdash;") : smarty_modifier_default($_tmp, "&mdash;")); ?>
</td>
		<td><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['layoutEditorProofreadSignoff']->getDateCompleted())) ? $this->_run_mod_handler('date_format', true, $_tmp, $this->_tpl_vars['dateFormatShort']) : smarty_modifier_date_format($_tmp, $this->_tpl_vars['dateFormatShort'])))) ? $this->_run_mod_handler('default', true, $_tmp, "&mdash;") : smarty_modifier_default($_tmp, "&mdash;")); ?>
</td>
	</tr>
	<tr>
		<td colspan="5" class="separator">&nbsp;</td>
	</tr>
</table>

<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "submission.proofread.corrections"), $this);?>

<?php if ($this->_tpl_vars['submission']->getMostRecentProofreadComment()): ?>
        <?php $this->assign('comment', $this->_tpl_vars['submission']->getMostRecentProofreadComment()); ?>
        <a href="javascript:openComments('<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'viewProofreadComments','path' => $this->_tpl_vars['submission']->getId(),'anchor' => $this->_tpl_vars['comment']->getId()), $this);?>
');" class="icon"><?php echo $this->_plugins['function']['icon'][0][0]->smartyIcon(array('name' => 'comment'), $this);?>
</a><?php echo ((is_array($_tmp=$this->_tpl_vars['comment']->getDatePosted())) ? $this->_run_mod_handler('date_format', true, $_tmp, $this->_tpl_vars['dateFormatShort']) : smarty_modifier_date_format($_tmp, $this->_tpl_vars['dateFormatShort'])); ?>

<?php else: ?>
        <a href="javascript:openComments('<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'viewProofreadComments','path' => $this->_tpl_vars['submission']->getId()), $this);?>
');" class="icon"><?php echo $this->_plugins['function']['icon'][0][0]->smartyIcon(array('name' => 'comment'), $this);?>
</a><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.noComments"), $this);?>

<?php endif; ?>

<?php if ($this->_tpl_vars['currentJournal']->getLocalizedSetting('proofInstructions')): ?>
&nbsp;&nbsp;
<a href="javascript:openHelp('<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'instructions','path' => 'proof'), $this);?>
')" class="action"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "submission.proofread.instructions"), $this);?>
</a>
<?php endif; ?>
</div>