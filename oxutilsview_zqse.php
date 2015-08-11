<?php
/**
 * Markdown Converter as Smarty plugin for Oxid CE
 * Copyright (C) 2014  Sven Wegerhoff
 *
 * This program is free software;
 * you can redistribute it and/or modify it under the terms of the GNU General Public License as published by the Free Software Foundation;
 * either version 3 of the License, or (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful, but WITHOUT ANY WARRANTY;
 * without even the implied warranty of MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the GNU General Public License for more details.
 * You should have received a copy of the GNU General Public License along with this program; if not, see <http://www.gnu.org/licenses/>
 */


/***
 * Class oxutilsview_zqse
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
