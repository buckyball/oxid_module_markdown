### Oxid CE Markdown module
#### A Oxid eShop CE module providing a Smarty modifier plugin to convert markdown formatted text to HTML

To convert markdown text to HTML this module is using the Parsedown lib by http://parsedown.org


##### Usage:

Upload to modules, activate and use like this (example):

    [{* transform oxlongdesc to HTML *}]
    [{ oxeval var=$oLongdesc|md2html }]
    
in any *.tpl you like.


##### License
 The MIT License
