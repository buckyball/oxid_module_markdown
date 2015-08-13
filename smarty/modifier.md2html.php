<?php
/**
 * Markdown Converter as Smarty plugin for Oxid CE
 * Copyright (C) 2014  Sven Wegerhoff
 * Project URL: https://github.com/buckyball/
 */

require_once('Parsedown.php');

/*
 * usage: [{$textvar|@md2html}}
 */
function smarty_modifier_md2html($string)
{
    return Parsedown::instance()->text($string);
}