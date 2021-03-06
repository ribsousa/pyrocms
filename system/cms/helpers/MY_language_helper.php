<?php defined('BASEPATH') OR exit('No direct script access allowed.');

/**
 * CodeIgniter Language Helpers
 *
 * @package		CodeIgniter
 * @subpackage	Helpers
 * @category	Helpers
 * @author      PyroCMS Dev Team
 * @copyright   Copyright (c) 2012, PyroCMS LLC
 */

// ------------------------------------------------------------------------

function get_supported_lang()
{
	$supported_lang = Settings::get('supported_languages');

	$arr = array();
	foreach ($supported_lang as $key => $lang)
	{
		$arr[] = $key . '=' . $lang['name'];
	}

	return $arr;
}

if (!function_exists('sprintf_lang'))
{
    function sprintf_lang($line, $variables = array())
    {
        array_unshift($variables, lang($line));
        return call_user_func_array('sprintf', $variables);
    }
}