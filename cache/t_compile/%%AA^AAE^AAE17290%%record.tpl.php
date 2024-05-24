<?php /* Smarty version 2.6.26, created on 2017-12-27 14:39:04
         compiled from /var/www/revistas/plugins/oaiMetadataFormats/marcxml/record.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'strtotime', '/var/www/revistas/plugins/oaiMetadataFormats/marcxml/record.tpl', 16, false),array('modifier', 'date_format', '/var/www/revistas/plugins/oaiMetadataFormats/marcxml/record.tpl', 16, false),array('modifier', 'escape', '/var/www/revistas/plugins/oaiMetadataFormats/marcxml/record.tpl', 20, false),array('modifier', 'count', '/var/www/revistas/plugins/oaiMetadataFormats/marcxml/record.tpl', 37, false),array('modifier', 'to_array', '/var/www/revistas/plugins/oaiMetadataFormats/marcxml/record.tpl', 87, false),array('function', 'url', '/var/www/revistas/plugins/oaiMetadataFormats/marcxml/record.tpl', 74, false),array('function', 'translate', '/var/www/revistas/plugins/oaiMetadataFormats/marcxml/record.tpl', 108, false),)), $this); ?>
<record
	xmlns="http://www.loc.gov/MARC21/slim"
	xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance"
	xsi:schemaLocation="http://www.loc.gov/MARC21/slim http://www.loc.gov/standards/marcxml/schema/MARC21slim.xsd">
	<leader>     nmb a2200000Iu 4500</leader>
	<?php if ($this->_tpl_vars['article']->getDatePublished()): ?>
		<controlfield tag="008">"<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['article']->getDatePublished())) ? $this->_run_mod_handler('strtotime', true, $_tmp) : $this->_plugins['modifier']['strtotime'][0][0]->smartyStrtotime($_tmp)))) ? $this->_run_mod_handler('date_format', true, $_tmp, "%y%m%d %Y") : smarty_modifier_date_format($_tmp, "%y%m%d %Y")); ?>
                        eng  "</controlfield>
	<?php endif; ?>
	<?php if ($this->_tpl_vars['journal']->getSetting('onlineIssn')): ?>
		<datafield tag="022" ind1="#" ind2="#">
			<subfield code="$a"><?php echo ((is_array($_tmp=$this->_tpl_vars['journal']->getSetting('onlineIssn'))) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
</subfield>
		</datafield>
	<?php endif; ?>
	<?php if ($this->_tpl_vars['journal']->getSetting('printIssn')): ?>
		<datafield tag="022" ind1="#" ind2="#">
			<subfield code="$a"><?php echo ((is_array($_tmp=$this->_tpl_vars['journal']->getSetting('printIssn'))) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
</subfield>
		</datafield>
	<?php endif; ?>
	<datafield tag="042" ind1=" " ind2=" ">
		<subfield code="a">dc</subfield>
	</datafield>
	<datafield tag="245" ind1="0" ind2="0">
		<subfield code="a"><?php echo ((is_array($_tmp=$this->_tpl_vars['article']->getTitle($this->_tpl_vars['journal']->getPrimaryLocale()))) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
</subfield>
	</datafield>

	<?php $this->assign('authors', $this->_tpl_vars['article']->getAuthors()); ?>
	<?php $_from = $this->_tpl_vars['authors']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['author']):
?>
		<datafield tag="<?php if (count($this->_tpl_vars['authors']) == 1): ?>100<?php else: ?>720<?php endif; ?>" ind1="1" ind2=" ">
			<subfield code="a"><?php echo ((is_array($_tmp=$this->_tpl_vars['author']->getFullName(true))) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
</subfield>
			<?php $this->assign('affiliation', $this->_tpl_vars['author']->getAffiliation($this->_tpl_vars['journal']->getPrimaryLocale())); ?>
			<?php if ($this->_tpl_vars['affiliation']): ?><subfield code="u"><?php echo ((is_array($_tmp=$this->_tpl_vars['affiliation'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
</subfield><?php endif; ?>
			<?php if ($this->_tpl_vars['author']->getUrl()): ?><subfield code="0"><?php echo ((is_array($_tmp=$this->_tpl_vars['author']->getUrl())) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
</subfield><?php endif; ?>
			<?php if ($this->_tpl_vars['author']->getData('orcid')): ?><subfield code="0"><?php echo ((is_array($_tmp=$this->_tpl_vars['author']->getData('orcid'))) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
</subfield><?php endif; ?>
		</datafield>
	<?php endforeach; endif; unset($_from); ?>
	<?php if ($this->_tpl_vars['subject']): ?><datafield tag="653" ind1=" " ind2=" ">
		<subfield code="a"><?php echo ((is_array($_tmp=$this->_tpl_vars['subject'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
</subfield>
	</datafield><?php endif; ?>
	<?php if ($this->_tpl_vars['abstract']): ?><datafield tag="520" ind1=" " ind2=" ">
		<subfield code="a"><?php echo ((is_array($_tmp=$this->_tpl_vars['abstract'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
</subfield>
	</datafield><?php endif; ?>

	<?php $this->assign('publisher', $this->_tpl_vars['journal']->getTitle($this->_tpl_vars['journal']->getPrimaryLocale())); ?>
	<?php if ($this->_tpl_vars['journal']->getSetting('publisherInstitution')): ?>
		<?php $this->assign('publisher', $this->_tpl_vars['journal']->getSetting('publisherInstitution')); ?>
	<?php endif; ?>
	<datafield tag="260" ind1=" " ind2=" ">
		<subfield code="b"><?php echo ((is_array($_tmp=$this->_tpl_vars['publisher'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
</subfield>
	</datafield>
	<dataField tag="260" ind1=" " ind2=" ">
		<subfield code="c"><?php echo $this->_tpl_vars['issue']->getDatePublished(); ?>
</subfield>
	</dataField>

	<?php $this->assign('identifyType', $this->_tpl_vars['section']->getIdentifyType($this->_tpl_vars['journal']->getPrimaryLocale())); ?>
	<?php if ($this->_tpl_vars['identifyType']): ?><datafield tag="655" ind1=" " ind2="7">
		<subfield code="a"><?php echo ((is_array($_tmp=$this->_tpl_vars['identifyType'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
</subfield>
	</datafield><?php endif; ?>

	<?php $_from = $this->_tpl_vars['article']->getGalleys(); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['galley']):
?>
		<datafield tag="856" ind1=" " ind2=" ">
			<subfield code="q"><?php echo ((is_array($_tmp=$this->_tpl_vars['galley']->getFileType())) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
</subfield>
		</datafield>
	<?php endforeach; endif; unset($_from); ?>
	<datafield tag="856" ind1="4" ind2="0">
		<subfield code="u"><?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('journal' => $this->_tpl_vars['journal']->getPath(),'page' => 'article','op' => 'view','path' => ((is_array($_tmp=$this->_tpl_vars['article']->getBestArticleId())) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp))), $this);?>
</subfield>
	</datafield>

	<datafield tag="786" ind1="0" ind2=" ">
		<subfield code="n"><?php echo ((is_array($_tmp=$this->_tpl_vars['journal']->getTitle($this->_tpl_vars['journal']->getPrimaryLocale()))) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
; <?php echo ((is_array($_tmp=$this->_tpl_vars['issue']->getIssueIdentification())) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
</subfield>
	</datafield>

	<datafield tag="546" ind1=" " ind2=" ">
		<subfield code="a"><?php echo $this->_tpl_vars['language']; ?>
</subfield>
	</datafield>

	<?php $_from = $this->_tpl_vars['article']->getSuppFiles(); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['suppFile']):
?>
		<datafield tag="787" ind1="0" ind2=" ">
			<subfield code="n"><?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('journal' => $this->_tpl_vars['journal']->getPath(),'page' => 'article','op' => 'download','path' => ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['article']->getId())) ? $this->_run_mod_handler('to_array', true, $_tmp, $this->_tpl_vars['suppFile']->getFileId()) : $this->_plugins['modifier']['to_array'][0][0]->smartyToArray($_tmp, $this->_tpl_vars['suppFile']->getFileId())))) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp))), $this);?>
</subfield>
		</datafield>
	<?php endforeach; endif; unset($_from); ?>

	<?php if ($this->_tpl_vars['article']->getCoverageGeo($this->_tpl_vars['journal']->getPrimaryLocale())): ?>
		<datafield tag="500" ind1=" " ind2=" ">
			<subfield code="a"><?php echo ((is_array($_tmp=$this->_tpl_vars['article']->getCoverageGeo($this->_tpl_vars['journal']->getPrimaryLocale()))) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
</subfield>
		</datafield>
	<?php endif; ?>
	<?php if ($this->_tpl_vars['article']->getCoverageChron($this->_tpl_vars['journal']->getPrimaryLocale())): ?>
		<datafield tag="500" ind1=" " ind2=" ">
			<subfield code="a"><?php echo ((is_array($_tmp=$this->_tpl_vars['article']->getCoverageChron($this->_tpl_vars['journal']->getPrimaryLocale()))) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
</subfield>
		</datafield>
	<?php endif; ?>
	<?php if ($this->_tpl_vars['article']->getCoverageSample($this->_tpl_vars['journal']->getPrimaryLocale())): ?>
		<datafield tag="500" ind1=" " ind2=" ">
			<subfield code="a"><?php echo ((is_array($_tmp=$this->_tpl_vars['article']->getCoverageSample($this->_tpl_vars['journal']->getPrimaryLocale()))) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
</subfield>
		</datafield>
	<?php endif; ?>

	<datafield tag="540" ind1=" " ind2=" ">
		<subfield code="a"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "submission.copyrightStatement",'copyrightYear' => $this->_tpl_vars['article']->getCopyrightYear(),'copyrightHolder' => ((is_array($_tmp=$this->_tpl_vars['article']->getCopyrightHolder($this->_tpl_vars['journal']->getPrimaryLocale()))) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp))), $this);?>
</subfield>
	</datafield>
</record>