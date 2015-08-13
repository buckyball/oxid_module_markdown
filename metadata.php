<?php
/**
/**
 * Markdown Converter as Smarty plugin for Oxid CE
 * Copyright (C) 2014  Sven Wegerhoff
 * Project URL: https://github.com/buckyball/
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
		'oxutilsview' => 'zoq_markdown/oxutilsview_zqmd'
	),
	'files'       => array(
		'zqse_events'    => 'zoq_markdown/zqmd_events.php',
	),
	'events'      => array(
		'onActivate'   => 'zqmd_events::onActivate',
		'onDeactivate' => 'zqmd_events::onDeactivate'
	)
);