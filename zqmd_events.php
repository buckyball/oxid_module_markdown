<?php
/**
 * Markdown Converter as Smarty plugin for Oxid CE
 * Copyright (C) 2014  Sven Wegerhoff
 * Project URL: https://github.com/buckyball/
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

