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

$aModule = array(
	'id'          => 'zoq_markdown',
	'title'       => '<strong style="color:#2e5fc7;border: 1px solid #6a8fc7;padding: 0 2px;background:white;">zoq</strong> Markdown Extension',
	'description' => 'create all article descriptions in markdown and convert to HTML upon view within the shop.<hr/>Easy export to marketplaces who does not allow HTML in product descriptions.',
	'thumbnail'   => 'zoq-markdown.png',
	'version'     => '1.0',
	'author'      => 'Sven Wegerhoff',
	'email'       => 'sw@zoq.de',
	'url'         => 'https://github.com/buckyball/',
	'extend'      => array(
		'oxutilsview' => 'zoq_markdown/oxutilsview_zqse'
	),
	'files'       => array(
		'zqse_events'    => 'zoq_markdown/zqse_events.php',
	),
	'events'      => array(
		'onActivate'   => 'zqse_events::onActivate',
		'onDeactivate' => 'zqse_events::onDeactivate'
	)
);