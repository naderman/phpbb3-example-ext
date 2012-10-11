<?php
/**
*
* @package VC
* @version $Id$
* @copyright (c) 2006, 2008 phpBB Group
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
*
*/

/**
* @ignore
*/
if (!defined('IN_PHPBB'))
{
	exit;
}

/**
* @package VC
*/
class phpbb_ext_naderman_example_captcha_my_gd_wave_plugin extends phpbb_captcha_plugins_captcha_abstract
{

	function __construct()
	{
		global $phpbb_root_path, $phpEx;

		if (!class_exists('captcha'))
		{
			include_once($phpbb_root_path . 'includes/captcha/captcha_gd_wave.' . $phpEx);
		}
	}

	function get_instance()
	{
		return new self();
	}

	function is_available()
	{
		global $phpbb_root_path, $phpEx;

		if (@extension_loaded('gd'))
		{
			return true;
		}

		if (!function_exists('can_load_dll'))
		{
			include($phpbb_root_path . 'includes/functions_install.' . $phpEx);
		}

		return can_load_dll('gd');
	}

	function get_name()
	{
		return 'MY_EXTENSION_CAPTCHA_GD_3D';
	}

	function get_class_name()
	{
		return 'phpbb_captcha_gd_wave';
	}

	function acp_page($id, &$module)
	{
		global $config, $db, $template, $user;

		trigger_error($user->lang['CAPTCHA_NO_OPTIONS'] . adm_back_link($module->u_action));
	}
}
