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
class zqse_evets extends oxI18n {

	public static function onActivate() {

		$cfg = oxRegistry::getConfig();

		//clearing cache
		$dir = $cfg->getConfigParam("sCompileDir")."*";
		foreach (glob($dir) as $item) {
			if (!is_dir($item)) {
				unlink($item);
			}
		}
		oxRegistry::get("oxUtilsView")->getSmarty(true);
	}

	public static function onDeactivate() {
		$cfg = oxRegistry::getConfig();
		$dir = $cfg->getConfigParam("sCompileDir")."*";
		foreach (glob($dir) as $item) {
			if (!is_dir($item)) {
				unlink($item);
			}
		}
	}

}

