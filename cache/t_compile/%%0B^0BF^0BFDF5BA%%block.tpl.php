<?php /* Smarty version 2.6.26, created on 2017-11-06 23:39:42
         compiled from file:/var/www/revistas/plugins/blocks/help/block.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'get_help_id', 'file:/var/www/revistas/plugins/blocks/help/block.tpl', 12, false),array('function', 'url', 'file:/var/www/revistas/plugins/blocks/help/block.tpl', 12, false),array('function', 'translate', 'file:/var/www/revistas/plugins/blocks/help/block.tpl', 12, false),array('modifier', 'escape', 'file:/var/www/revistas/plugins/blocks/help/block.tpl', 12, false),)), $this); ?>
<div class="block" id="sidebarHelp">
	<a class="blockTitle" href="javascript:openHelp('<?php if ($this->_tpl_vars['helpTopicId']): ?><?php echo ((is_array($_tmp=$this->_plugins['function']['get_help_id'][0][0]->smartyGetHelpId(array('key' => ($this->_tpl_vars['helpTopicId']),'url' => 'true'), $this))) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp));?>
<?php else: ?><?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('page' => 'help'), $this);?>
<?php endif; ?>')"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "navigation.journalHelp"), $this);?>
</a>
</div>