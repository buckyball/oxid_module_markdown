<?php
/**
 * Markdown Converter as Smarty plugin for Oxid CE
 * Copyright (C) 2014  Sven Wegerhoff
 * Project URL: https://github.com/buckyball/
 */



/***
 * Class oxutilsview_zqmd
 * attach custom smarty plugins to the oxid smarty object
 */
class oxutilsview_zqse extends oxutilsview_zqse_parent
{
	public function _fillCommonSmartyProperties($oSmarty)
	{
		parent::_fillCommonSmartyProperties($oSmarty);

		$cfg = oxRegistry::getConfig();

		$aPluginsDir = $oSmarty->plugins_dir;
		$aPluginsDir[] = $cfg->getModulesDir()."/zoq_markdown/smarty/";
		$oSmarty->plugins_dir = $aPluginsDir;
	}
}
