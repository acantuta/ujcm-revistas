<?php /* Smarty version 2.6.26, created on 2017-11-10 20:42:17
         compiled from file:/var/www/revistas/plugins/citationFormats/turabian//citation.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'count', 'file:/var/www/revistas/plugins/citationFormats/turabian//citation.tpl', 15, false),array('modifier', 'escape', 'file:/var/www/revistas/plugins/citationFormats/turabian//citation.tpl', 18, false),array('modifier', 'strip_unsafe_html', 'file:/var/www/revistas/plugins/citationFormats/turabian//citation.tpl', 21, false),array('modifier', 'date_format', 'file:/var/www/revistas/plugins/citationFormats/turabian//citation.tpl', 21, false),array('modifier', 'trim', 'file:/var/www/revistas/plugins/citationFormats/turabian//citation.tpl', 21, false),array('function', 'translate', 'file:/var/www/revistas/plugins/citationFormats/turabian//citation.tpl', 18, false),)), $this); ?>
<div class="separator"></div>

<div id="citation">
<?php $this->assign('authors', $this->_tpl_vars['article']->getAuthors()); ?>
<?php $this->assign('authorCount', count($this->_tpl_vars['authors'])); ?>
<?php $_from = $this->_tpl_vars['authors']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['authors'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['authors']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['i'] => $this->_tpl_vars['author']):
        $this->_foreach['authors']['iteration']++;
?>
	<?php $this->assign('firstName', $this->_tpl_vars['author']->getFirstName()); ?>
	<?php echo ((is_array($_tmp=$this->_tpl_vars['author']->getLastName())) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
, <?php echo ((is_array($_tmp=$this->_tpl_vars['firstName'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
<?php if ($this->_tpl_vars['i'] == $this->_tpl_vars['authorCount']-2): ?>, <?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "rt.context.and"), $this);?>
 <?php elseif ($this->_tpl_vars['i'] < $this->_tpl_vars['authorCount']-1): ?>, <?php else: ?>.<?php endif; ?>
<?php endforeach; endif; unset($_from); ?>

"<?php echo ((is_array($_tmp=$this->_tpl_vars['article']->getLocalizedTitle())) ? $this->_run_mod_handler('strip_unsafe_html', true, $_tmp) : String::stripUnsafeHtml($_tmp)); ?>
" <em><?php echo ((is_array($_tmp=$this->_tpl_vars['journal']->getLocalizedTitle())) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
</em> [<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "rt.captureCite.online"), $this);?>
], <?php if ($this->_tpl_vars['issue'] && $this->_tpl_vars['issue']->getVolume()): ?><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "issue.volume"), $this);?>
 <?php echo ((is_array($_tmp=$this->_tpl_vars['issue']->getVolume())) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
<?php endif; ?><?php if ($this->_tpl_vars['issue'] && $this->_tpl_vars['issue']->getNumber()): ?> <?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "issue.number"), $this);?>
 <?php echo ((is_array($_tmp=$this->_tpl_vars['issue']->getNumber())) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
 <?php endif; ?>(<?php if ($this->_tpl_vars['article']->getDatePublished()): ?><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['article']->getDatePublished())) ? $this->_run_mod_handler('date_format', true, $_tmp, '%e %B %Y') : smarty_modifier_date_format($_tmp, '%e %B %Y')))) ? $this->_run_mod_handler('trim', true, $_tmp) : trim($_tmp)); ?>
<?php elseif ($this->_tpl_vars['issue']->getDatePublished()): ?><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['issue']->getDatePublished())) ? $this->_run_mod_handler('date_format', true, $_tmp, '%e %B %Y') : smarty_modifier_date_format($_tmp, '%e %B %Y')))) ? $this->_run_mod_handler('trim', true, $_tmp) : trim($_tmp)); ?>
<?php else: ?><?php echo ((is_array($_tmp=$this->_tpl_vars['issue']->getYear())) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
<?php endif; ?>)
</div>