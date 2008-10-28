<?php
/** 
* ภาษาไทย เวอร์ชั่น 1.0.0 
* 05/06/2551 
* ไฟล์ภาษาไทยสำหรับ PHPBB3 โดย www.mindphp.com และ www.phpbbthailand.com
*
*/ 

/** 
* acp_permissions_arcade  (phpBB Arcade Permission Set) [English]
*
* @package language
* @version $Id: permissions_arcade.php, jrsweets Exp $
* @copyright (c) 2008 JeffRusso.net 
* @license http://opensource.org/licenses/gpl-license.php GNU Public License 
*/

/**
* DO NOT CHANGE
*/
if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

// DEVELOPERS PLEASE NOTE
//
// All language files should use UTF-8 as their encoding and the files must not contain a BOM.
//
// Placeholders can now contain order information, e.g. instead of
// 'Page %s of %s' you can (and should) write 'Page %1$s of %2$s', this allows
// translators to re-order the output of data while ensuring it remains correct
//
// You do not need this where single placeholders are used, e.g. 'Message %d' is fine
// equally where a string contains only two placeholders which are used to wrap text
// in a url you again do not need to specify an order e.g., 'Click %sHERE%s' is fine

/**
*	MODDERS PLEASE NOTE
*	
*	You are able to put your permission sets into a seperate file too by
*	prefixing the new file with permissions_ and putting it into the acp 
*	language folder.
*
*	An example of how the file could look like:
*
*	<code>
*
*	if (empty($lang) || !is_array($lang))
*	{
*		$lang = array();
*	}
*
*	// Adding new category
*	$lang['permission_cat']['bugs'] = 'Bugs';
*
*	// Adding new permission set
*	$lang['permission_type']['bug_'] = 'Bug Permissions';
*
*	// Adding the permissions
*	$lang = array_merge($lang, array(
*		'acl_bug_view'		=> array('lang' => 'Can view bug reports', 'cat' => 'bugs'),
*		'acl_bug_post'		=> array('lang' => 'Can post bugs', 'cat' => 'post'), // Using a phpBB category here
*	));
*
*	</code>
*/

/*
#The following muse be inserted into the db and then the cache must be cleared for the permissions to show up...
#If you used the installer ignore this

INSERT INTO `phpbb_acl_options` (auth_option, is_global, is_local, founder_only) VALUES ('u_arcade_view', 1, 0, 0);
INSERT INTO `phpbb_acl_options` (auth_option, is_global, is_local, founder_only) VALUES ('u_arcade_play', 1, 0, 0);
INSERT INTO `phpbb_acl_options` (auth_option, is_global, is_local, founder_only) VALUES ('u_arcade_score', 1, 0, 0);
INSERT INTO `phpbb_acl_options` (auth_option, is_global, is_local, founder_only) VALUES ('u_arcade_rate', 1, 0, 0);
INSERT INTO `phpbb_acl_options` (auth_option, is_global, is_local, founder_only) VALUES ('u_arcade_comment', 1, 0, 0);
INSERT INTO `phpbb_acl_options` (auth_option, is_global, is_local, founder_only) VALUES ('u_arcade_download', 1, 0, 0);

INSERT INTO `phpbb_acl_options` (auth_option, is_global, is_local, founder_only) VALUES ('a_arcade_settings', 1, 0, 0);
INSERT INTO `phpbb_acl_options` (auth_option, is_global, is_local, founder_only) VALUES ('a_arcade_game', 1, 0, 0);
INSERT INTO `phpbb_acl_options` (auth_option, is_global, is_local, founder_only) VALUES ('a_arcade_delete_game', 1, 0, 0);
INSERT INTO `phpbb_acl_options` (auth_option, is_global, is_local, founder_only) VALUES ('a_arcade_cat', 1, 0, 0);
INSERT INTO `phpbb_acl_options` (auth_option, is_global, is_local, founder_only) VALUES ('a_arcade_delete_cat', 1, 0, 0);
INSERT INTO `phpbb_acl_options` (auth_option, is_global, is_local, founder_only) VALUES ('a_arcade_scores', 1, 0, 0);
INSERT INTO `phpbb_acl_options` (auth_option, is_global, is_local, founder_only) VALUES ('a_arcade_utilities', 1, 0, 0);

*/

// Define categories and permission types
$lang['permission_cat']['arcade'] = 'phpBB Arcade';


$lang = array_merge($lang, array(	
	'acl_u_arcade_view'		=> array('lang' => 'Can view arcade', 'cat' => 'arcade'),
	'acl_u_arcade_play'		=> array('lang' => 'Can play arcade games', 'cat' => 'arcade'),
	'acl_u_arcade_score'	=> array('lang' => 'Can submit scores', 'cat' => 'arcade'),
	'acl_u_arcade_rate'		=> array('lang' => 'Can rate games', 'cat' => 'arcade'),
	'acl_u_arcade_comment'	=> array('lang' => 'Can submit comments', 'cat' => 'arcade'),
	'acl_u_arcade_download'	=> array('lang' => 'Can download arcade games', 'cat' => 'arcade'),
));

// Admin Permissions
$lang = array_merge($lang, array(		
	'acl_a_arcade_settings'		=> array('lang' => 'Can manage arcade settings', 'cat' => 'arcade'),	
	'acl_a_arcade_game'			=> array('lang' => 'Can add/edit arcade games ', 'cat' => 'arcade'),
	'acl_a_arcade_delete_game'	=> array('lang' => 'Can delete arcade games', 'cat' => 'arcade'),	
	'acl_a_arcade_cat'			=> array('lang' => 'Can add/edit arcade categories', 'cat' => 'arcade'),
	'acl_a_arcade_delete_cat'	=> array('lang' => 'Can delete arcade categories', 'cat' => 'arcade'),	
	'acl_a_arcade_scores'		=> array('lang' => 'Can edit game scores', 'cat' => 'arcade'),	
	'acl_a_arcade_utilities'	=> array('lang' => 'Can use arcade utilities', 'cat' => 'arcade'),
));

?>