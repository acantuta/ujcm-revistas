<?php /* Smarty version 2.6.26, created on 2016-09-29 12:58:40
         compiled from /home/repositorio/ojs/plugins/oaiMetadataFormats/marc/record.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'strtotime', '/home/repositorio/ojs/plugins/oaiMetadataFormats/marc/record.tpl', 14, false),array('modifier', 'date_format', '/home/repositorio/ojs/plugins/oaiMetadataFormats/marc/record.tpl', 14, false),array('modifier', 'escape', '/home/repositorio/ojs/plugins/oaiMetadataFormats/marc/record.tpl', 18, false),array('modifier', 'count', '/home/repositorio/ojs/plugins/oaiMetadataFormats/marc/record.tpl', 35, false),array('modifier', 'to_array', '/home/repositorio/ojs/plugins/oaiMetadataFormats/marc/record.tpl', 85, false),array('function', 'url', '/home/repositorio/ojs/plugins/oaiMetadataFormats/marc/record.tpl', 72, false),array('function', 'translate', '/home/repositorio/ojs/plugins/oaiMetadataFormats/marc/record.tpl', 106, false),)), $this); ?>
<oai_marc status="c" type="a" level="m" encLvl="3" catForm="u"
	xmlns="http://www.openarchives.org/OAI/1.1/oai_marc" xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance"
	xsi:schemaLocation="http://www.openarchives.org/OAI/1.1/oai_marc http://www.openarchives.org/OAI/1.1/oai_marc.xsd">
	<?php if ($this->_tpl_vars['article']->getDatePublished()): ?>
		<fixfield id="008">"<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['article']->getDatePublished())) ? $this->_run_mod_handler('strtotime', true, $_tmp) : $this->_plugins['modifier']['strtotime'][0][0]->smartyStrtotime($_tmp)))) ? $this->_run_mod_handler('date_format', true, $_tmp, "%y%m%d %Y") : smarty_modifier_date_format($_tmp, "%y%m%d %Y")); ?>
                        eng  "</fixfield>
	<?php endif; ?>
	<?php if ($this->_tpl_vars['journal']->getSetting('onlineIssn')): ?>
		<varfield tag="022" ind1="#" ind2="#">
			<subfield label="$a"><?php echo ((is_array($_tmp=$this->_tpl_vars['journal']->getSetting('onlineIssn'))) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
</subfield>
		</varfield>
	<?php endif; ?>
	<?php if ($this->_tpl_vars['journal']->getSetting('printIssn')): ?>
		<varfield tag="022" ind1="#" ind2="#">
			<subfield label="$a"><?php echo ((is_array($_tmp=$this->_tpl_vars['journal']->getSetting('printIssn'))) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
</subfield>
		</varfield>
	<?php endif; ?>
	<varfield tag="042" ind1=" " ind2=" ">
		<subfield label="a">dc</subfield>
	</varfield>
	<varfield tag="245" ind1="0" ind2="0">
		<subfield label="a"><?php echo ((is_array($_tmp=$this->_tpl_vars['article']->getTitle($this->_tpl_vars['journal']->getPrimaryLocale()))) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
</subfield>
	</varfield>

	<?php $this->assign('authors', $this->_tpl_vars['article']->getAuthors()); ?>
	<?php $_from = $this->_tpl_vars['authors']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['author']):
?>
		<varfield tag="<?php if (count($this->_tpl_vars['authors']) == 1): ?>100<?php else: ?>720<?php endif; ?>" ind1="1" ind2=" ">
			<subfield label="a"><?php echo ((is_array($_tmp=$this->_tpl_vars['author']->getFullName(true))) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
</subfield>
			<?php $this->assign('affiliation', $this->_tpl_vars['author']->getAffiliation($this->_tpl_vars['journal']->getPrimaryLocale())); ?>
			<?php if ($this->_tpl_vars['affiliation']): ?><subfield label="u"><?php echo ((is_array($_tmp=$this->_tpl_vars['affiliation'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
</subfield><?php endif; ?>
			<?php if ($this->_tpl_vars['author']->getUrl()): ?><subfield label="0"><?php echo ((is_array($_tmp=$this->_tpl_vars['author']->getUrl())) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
</subfield><?php endif; ?>
			<?php if ($this->_tpl_vars['author']->getData('orcid')): ?><subfield label="0"><?php echo ((is_array($_tmp=$this->_tpl_vars['author']->getData('orcid'))) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
</subfield><?php endif; ?>
		</varfield>
	<?php endforeach; endif; unset($_from); ?>
	<?php if ($this->_tpl_vars['subject']): ?><varfield tag="653" ind1=" " ind2=" ">
		<subfield label="a"><?php echo ((is_array($_tmp=$this->_tpl_vars['subject'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
</subfield>
	</varfield><?php endif; ?>
	<?php if ($this->_tpl_vars['abstract']): ?><varfield tag="520" ind1=" " ind2=" ">
		<subfield label="a"><?php echo ((is_array($_tmp=$this->_tpl_vars['abstract'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
</subfield>
	</varfield><?php endif; ?>

	<?php $this->assign('publisher', $this->_tpl_vars['journal']->getTitle($this->_tpl_vars['journal']->getPrimaryLocale())); ?>
	<?php if ($this->_tpl_vars['journal']->getSetting('publisherInstitution')): ?>
		<?php $this->assign('publisher', $this->_tpl_vars['journal']->getSetting('publisherInstitution')); ?>
	<?php endif; ?>
	<varfield tag="260" ind1=" " ind2=" ">
		<subfield label="b"><?php echo ((is_array($_tmp=$this->_tpl_vars['publisher'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
</subfield>
	</varfield>
	<dataField tag="260" ind1=" " ind2=" ">
		<subfield label="c"><?php echo $this->_tpl_vars['issue']->getDatePublished(); ?>
</subfield>
	</dataField>

	<?php $this->assign('identifyType', $this->_tpl_vars['section']->getIdentifyType($this->_tpl_vars['journal']->getPrimaryLocale())); ?>
	<?php if ($this->_tpl_vars['identifyType']): ?><varfield tag="655" ind1=" " ind2="7">
		<subfield label="a"><?php echo ((is_array($_tmp=$this->_tpl_vars['identifyType'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
</subfield>
	</varfield><?php endif; ?>

	<?php $_from = $this->_tpl_vars['article']->getGalleys(); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['galley']):
?>
		<varfield tag="856" ind1=" " ind2=" ">
			<subfield label="q"><?php echo ((is_array($_tmp=$this->_tpl_vars['galley']->getFileType())) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
</subfield>
		</varfield>
	<?php endforeach; endif; unset($_from); ?>
	<varfield tag="856" ind1="4" ind2="0">
		<subfield label="u"><?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('journal' => $this->_tpl_vars['journal']->getPath(),'page' => 'article','op' => 'view','path' => ((is_array($_tmp=$this->_tpl_vars['article']->getBestArticleId())) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp))), $this);?>
</subfield>
	</varfield>

	<varfield tag="786" ind1="0" ind2=" ">
		<subfield label="n"><?php echo ((is_array($_tmp=$this->_tpl_vars['journal']->getTitle($this->_tpl_vars['journal']->getPrimaryLocale()))) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
; <?php echo ((is_array($_tmp=$this->_tpl_vars['issue']->getIssueIdentification())) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
</subfield>
	</varfield>

	<varfield tag="546" ind1=" " ind2=" ">
		<subfield label="a"><?php echo $this->_tpl_vars['language']; ?>
</subfield>
	</varfield>

	<?php $_from = $this->_tpl_vars['article']->getSuppFiles(); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['suppFile']):
?>
		<varfield tag="787" ind1="0" ind2=" ">
			<subfield label="n"><?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('journal' => $this->_tpl_vars['journal']->getPath(),'page' => 'article','op' => 'download','path' => ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['article']->getId())) ? $this->_run_mod_handler('to_array', true, $_tmp, $this->_tpl_vars['suppFile']->getFileId()) : $this->_plugins['modifier']['to_array'][0][0]->smartyToArray($_tmp, $this->_tpl_vars['suppFile']->getFileId())))) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp))), $this);?>
</subfield>
		</varfield>
	<?php endforeach; endif; unset($_from); ?>

	<?php if ($this->_tpl_vars['article']->getCoverageGeo($this->_tpl_vars['journal']->getPrimaryLocale())): ?>
		<varfield tag="500" ind1=" " ind2=" ">
			<subfield label="a"><?php echo ((is_array($_tmp=$this->_tpl_vars['article']->getCoverageGeo($this->_tpl_vars['journal']->getPrimaryLocale()))) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
</subfield>
		</varfield>
	<?php endif; ?>
	<?php if ($this->_tpl_vars['article']->getCoverageChron($this->_tpl_vars['journal']->getPrimaryLocale())): ?>
		<varfield tag="500" ind1=" " ind2=" ">
			<subfield label="a"><?php echo ((is_array($_tmp=$this->_tpl_vars['article']->getCoverageChron($this->_tpl_vars['journal']->getPrimaryLocale()))) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
</subfield>
		</varfield>
	<?php endif; ?>
	<?php if ($this->_tpl_vars['article']->getCoverageSample($this->_tpl_vars['journal']->getPrimaryLocale())): ?>
		<varfield tag="500" ind1=" " ind2=" ">
			<subfield label="a"><?php echo ((is_array($_tmp=$this->_tpl_vars['article']->getCoverageSample($this->_tpl_vars['journal']->getPrimaryLocale()))) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
</subfield>
		</varfield>
	<?php endif; ?>

	<varfield tag="540" ind1=" " ind2=" ">
		<subfield label="a"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "submission.copyrightStatement",'copyrightYear' => $this->_tpl_vars['article']->getCopyrightYear(),'copyrightHolder' => ((is_array($_tmp=$this->_tpl_vars['article']->getCopyrightHolder($this->_tpl_vars['journal']->getPrimaryLocale()))) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp))), $this);?>
</subfield>
	</varfield>
</oai_marc>