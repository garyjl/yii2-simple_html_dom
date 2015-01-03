<?php
namespace garyjl\simplehtmldom;

require_once(dirname(__FILE__) . '/lib/simple_html_dom.php');

class SimpleHtmlDom 
{
    // get html dom form file
    public static function file_get_html() 
	{
        return call_user_func_array('file_get_html', func_get_args());
    }

    // get html dom form string
    public static function str_get_html() 
	{
        return call_user_func_array('str_get_html', func_get_args());
    }
	
	// dump html dom tree
    public static function dump_html_tree() 
	{
		call_user_func_array('dump_html_tree', func_get_args());
    }
}
