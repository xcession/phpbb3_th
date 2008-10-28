<?php
// Modified by xcession (2008.10.29)

/**
*
* acp_common [Thai]
*
* @package language
* @version $Id: common.php 8591 2008-06-04 11:40:53Z Kellanved $
* @copyright (c) 2005 phpBB Group
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
*
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

// Common
$lang = array_merge($lang, array(
	'ACP_ADMINISTRATORS'		=> 'ผู้ดูแลระบบ',
	'ACP_ADMIN_LOGS'			=> 'Admin log',
	'ACP_ADMIN_ROLES'			=> 'บทบาท Admin',
	'ACP_ATTACHMENTS'			=> 'ไฟล์แนบ',
	'ACP_ATTACHMENT_SETTINGS'	=> 'ตั้งค่าไฟล์แนบ',
	'ACP_AUTH_SETTINGS'			=> 'Authentication',
	'ACP_AUTOMATION'			=> 'อัตโนมัติ',
	'ACP_AVATAR_SETTINGS'		=> 'ตั้งค่าภาพประจำตัว',

	'ACP_BACKUP'				=> 'สำรองฐานข้อมูล',
	'ACP_BAN'					=> 'การแบน',
	'ACP_BAN_EMAILS'			=> 'e-mails ที่ถูกแบน',
	'ACP_BAN_IPS'				=> 'IPs ที่ถูกแบน',
	'ACP_BAN_USERNAMES'			=> 'ชื่อผู้ใช้ที่ถูกแบน',
	'ACP_BBCODES'				=> 'BBCodes',
	'ACP_BOARD_CONFIGURATION'	=> 'การปรับแต่งบอร์ด',
	'ACP_BOARD_FEATURES'		=> 'ลักษณะหน้าตาของบอร์ด',
	'ACP_BOARD_MANAGEMENT'		=> 'การจัดการบอร์ด',
	'ACP_BOARD_SETTINGS'		=> 'ตั้งค่าเว็บบอร์ด',
	'ACP_BOTS'					=> 'Spiders/Robots',
	
	'ACP_CAPTCHA'				=> 'CAPTCHA',

	'ACP_CAT_DATABASE'			=> 'ฐานข้อมูล',
	'ACP_CAT_DOT_MODS'			=> '.MODs',
	'ACP_CAT_FORUMS'			=> 'บอร์ดและหมวดหมู่',
	'ACP_CAT_GENERAL'			=> 'ทั่วไป',
	'ACP_CAT_MAINTENANCE'		=> 'การบำรุงรักษา',
	'ACP_CAT_PERMISSIONS'		=> 'การอนุญาต',
	'ACP_CAT_POSTING'			=> 'กระทู้และหัวข้อ',
	'ACP_CAT_STYLES'			=> 'ปรับแต่งบอร์ด',
	'ACP_CAT_SYSTEM'			=> 'ระบบ',
	'ACP_CAT_USERGROUP'			=> 'กลุ่มผู้ใช้และผู้ใช้',
	'ACP_CAT_USERS'				=> 'ผู้ใช้',
	'ACP_CLIENT_COMMUNICATION'	=> 'การติดต่อสื่อสารกับลูกข่าย',
	'ACP_COOKIE_SETTINGS'		=> 'ตั้งค่า Cookies',
	'ACP_CRITICAL_LOGS'			=> 'Error log',
	'ACP_CUSTOM_PROFILE_FIELDS'	=> 'ฟิลด์ของข้อมูลที่สร้างเอง',
	
	'ACP_DATABASE'				=> 'การจัดการฐานข้อมูล',
	'ACP_DISALLOW'				=> 'ไม่อนุญาต',
	'ACP_DISALLOW_USERNAMES'	=> 'ชื่อผู้ใช้ที่ไม่อนุญาต',
	
	'ACP_EMAIL_SETTINGS'		=> 'การตั้งค่า E-mail',
	'ACP_EXTENSION_GROUPS'		=> 'จัดการกลุ่มเพิ่มเติม',
	
	'ACP_FORUM_BASED_PERMISSIONS'	=> 'การอนุญาตพื้นฐานของบอร์ด',
	'ACP_FORUM_LOGS'				=> 'Forum logs',
	'ACP_FORUM_MANAGEMENT'			=> 'การจัดการบอร์ด',
	'ACP_FORUM_MODERATORS'			=> 'Moderators',
	'ACP_FORUM_PERMISSIONS'			=> 'การอนุญาตของบอร์ด',
	'ACP_FORUM_ROLES'				=> 'บทบาทของบอร์ด',

	'ACP_GENERAL_CONFIGURATION'		=> 'ทั่วไป การปรับแต่ง',
	'ACP_GENERAL_TASKS'				=> 'ทั่วไป tasks',
	'ACP_GLOBAL_MODERATORS'			=> 'Global Moderators',
	'ACP_GLOBAL_PERMISSIONS'		=> 'การอนุญาตทั่วไป',
	'ACP_GROUPS'					=> 'กลุ่ม',
	'ACP_GROUPS_FORUM_PERMISSIONS'	=> 'การอนุญาตกลุ่มของบอร์ด',
	'ACP_GROUPS_MANAGE'				=> 'จัดการกลุ่ม',
	'ACP_GROUPS_MANAGEMENT'			=> 'การจัดการกลุ่ม',
	'ACP_GROUPS_PERMISSIONS'		=> 'การอนุญาตของกลุ่ม',
	
	'ACP_ICONS'					=> 'ไอคอนกระทู้',
	'ACP_ICONS_SMILIES'			=> 'Topic icons/smilies',
	'ACP_IMAGESETS'				=> 'Imagesets',
	'ACP_INACTIVE_USERS'		=> 'ผู้ใช้ที่ไม่ active',
	'ACP_INDEX'					=> 'ACP index',
	
	'ACP_JABBER_SETTINGS'		=> 'ตั้งค่า Jabber',
	
	'ACP_LANGUAGE'				=> 'การจัดการภาษา',
	'ACP_LANGUAGE_PACKS'		=> 'Language packs',
	'ACP_LOAD_SETTINGS'			=> 'ตั้งค่าการโหลดเพจ',
	'ACP_LOGGING'				=> 'Logging',
	
	'ACP_MAIN'					=> 'หน้าหลัก ACP',
	'ACP_MANAGE_EXTENSIONS'		=> 'จัดการชนิดไฟล์',
	'ACP_MANAGE_FORUMS'			=> 'จัดการเว็บบอร์ด',
	'ACP_MANAGE_RANKS'			=> 'จัดการ การจัดอันดับ',
	'ACP_MANAGE_REASONS'		=> 'Manage report/denial reasons',
	'ACP_MANAGE_USERS'			=> 'จัดการ ผู้ใช้',
	'ACP_MASS_EMAIL'			=> 'Mass e-mail',
	'ACP_MESSAGES'				=> 'ข้อความ',
	'ACP_MESSAGE_SETTINGS'		=> 'ตั้งค่าข้อความส่วนตัว',
	'ACP_MODULE_MANAGEMENT'		=> 'จัดการ Module',
	'ACP_MOD_LOGS'				=> 'Moderator log',
	'ACP_MOD_ROLES'				=> 'บทบาท Moderator',

	'ACP_NO_ITEMS'				=> 'ไม่มีข้อมูล',

	'ACP_ORPHAN_ATTACHMENTS'	=> 'ไฟล์แนบที่ไม่มีเจ้าของ',
	
	'ACP_PERMISSIONS'			=> 'การอนุญาต',
	'ACP_PERMISSION_MASKS'		=> 'Permission masks',
	'ACP_PERMISSION_ROLES'		=> 'บทบาทการอนุญาต',
	'ACP_PERMISSION_TRACE'		=> 'การติดตามการอนุญาต',
	'ACP_PHP_INFO'				=> 'ข้อมูล PHP',
	'ACP_POST_SETTINGS'			=> 'ตั้งค่าการโพส',
	'ACP_PRUNE_FORUMS'			=> 'ตัดทอนเว็บบอร์ด',
	'ACP_PRUNE_USERS'			=> 'ตัดทอนผู้ใช้',
	'ACP_PRUNING'				=> 'การตัดทอน',
	
	'ACP_QUICK_ACCESS'			=> 'เมนูลัด',
	
	'ACP_RANKS'					=> 'อันดับ',
	'ACP_REASONS'				=> 'เหตุผลการรายงาน/การปฏิเสธ',
	'ACP_REGISTER_SETTINGS'		=> 'ตั้งค่าการลงทะเบียนผู้ใช้',

	'ACP_RESTORE'				=> 'นำกลับมาใหม่',

	'ACP_SEARCH'				=> 'การปรับแต่งการค้นหา',
	'ACP_SEARCH_INDEX'			=> 'การค้นหาดัชนี',
	'ACP_SEARCH_SETTINGS'		=> 'การตั้งค่าการค้นหา',

	'ACP_SECURITY_SETTINGS'		=> 'ตั้งค่าความปลอดภัย',
	'ACP_SERVER_CONFIGURATION'	=> 'การปรับแต่ง เซิร์ฟเวอร์',
	'ACP_SERVER_SETTINGS'		=> 'ตั้งค่า เซิร์ฟเวอร์',
	'ACP_SIGNATURE_SETTINGS'	=> 'ตั้งค่าลายเซ็นต์',
	'ACP_SMILIES'				=> 'รอยยิ้ม',
	'ACP_STYLE_COMPONENTS'		=> 'ส่วนประกอบของ Styles ',
	'ACP_STYLE_MANAGEMENT'		=> 'การจัด Styles',
	'ACP_STYLES'				=> 'Styles',
	
	'ACP_TEMPLATES'				=> 'Templates',
	'ACP_THEMES'				=> 'Themes',
	
	'ACP_UPDATE'					=> 'Updating',
	'ACP_USERS_FORUM_PERMISSIONS'	=> 'การอนุญาตของผู้ใช้บอร์ด',
	'ACP_USERS_LOGS'				=> 'User logs',
	'ACP_USERS_PERMISSIONS'			=> 'การอนุญาตของผู้ใช้',
	'ACP_USER_ATTACH'				=> 'ไฟล์แนบ',
	'ACP_USER_AVATAR'				=> 'ภาพประจำตัว',
	'ACP_USER_FEEDBACK'				=> 'Feedback',
	'ACP_USER_GROUPS'				=> 'กลุ่ม',
	'ACP_USER_MANAGEMENT'			=> 'การจัดการผู้ใช้',
	'ACP_USER_OVERVIEW'				=> 'การอธิบายโดยสรุป',
	'ACP_USER_PERM'					=> 'การอนุญาต',
	'ACP_USER_PREFS'				=> 'ค่าที่ปรับแต่งไว้แล้ว',
	'ACP_USER_PROFILE'				=> 'ข้อมูลโดยรวม',
	'ACP_USER_RANK'					=> 'อันดับ',
	'ACP_USER_ROLES'				=> 'บทบาทผู้ใช้',
	'ACP_USER_SECURITY'				=> 'ความปลอดภัยผู้ใช้',
	'ACP_USER_SIG'					=> 'ลายเซ็นต์',

	'ACP_VC_SETTINGS'					=> 'ตั้งค่าการยืนยันการมองเห็น',
	'ACP_VC_CAPTCHA_DISPLAY'			=> 'ภาพดูก่อน CAPTCHA ',
	'ACP_VERSION_CHECK'					=> 'ตรวจสอบการอัพเดท',
	'ACP_VIEW_ADMIN_PERMISSIONS'		=> 'เรียกดูการอนุญาตที่เป็นของผู้ดูแลระบบ',
	'ACP_VIEW_FORUM_MOD_PERMISSIONS'	=> 'เรียกดูการอนุญาตที่เป็นของ Moderators',
	'ACP_VIEW_FORUM_PERMISSIONS'		=> 'เรียกดูการอนุญาตพื้นฐานที่เป็นของบอร์ด',
	'ACP_VIEW_GLOBAL_MOD_PERMISSIONS'	=> 'เรียกดูการอนุญาตทั้งหมดที่เป็นของ Global Moderators',
	'ACP_VIEW_USER_PERMISSIONS'			=> 'เรียกดูการอนุญาตพื้นฐานของผู้ใช้',
	
	'ACP_WORDS'					=> 'การกรองคำหยาบ',

	'ACTION'				=> 'การกระทำ',
	'ACTIONS'				=> 'การกระทำต่างๆ',
	'ACTIVATE'				=> 'ทำให้ใช้การได้',
	'ADD'					=> 'เพิ่ม',
	'ADMIN'					=> 'การดูแลระบบ',
	'ADMIN_INDEX'			=> 'Admin index',
	'ADMIN_PANEL'			=> 'ผู้ดูแลระบบ',
	
	'ADM_LOGOUT'			=> 'ออกจากระบบ ACP',
	'ADM_LOGGED_OUT'		=> 'ออกจากระบบ  Administration Control Panel เรียบร้อยแล้ว',

	'BACK'					=> 'ถอยกลับ',

	'COLOUR_SWATCH'			=> 'Web-safe colour swatch',
	'CONFIG_UPDATED'		=> 'ตั้งค่า เรียบร้อยแล้ว.',

	'DEACTIVATE'				=> 'ทำให้ใช้การไม่ได้',
	'DIRECTORY_DOES_NOT_EXIST'	=> 'เส้นทางที่ระบุ “%s” ไม่มีอยู่จริง.',
	'DIRECTORY_NOT_DIR'			=> 'เส้นทางที่ระบุ “%s” ไม่ใช่ไดเรกทอรี่.',
	'DIRECTORY_NOT_WRITABLE'	=> 'เส้นทางที่ระบุ “%s” ไม่สามารถเขียนทับได้.',
	'DISABLE'					=> 'ทำให้ใช้ไม่ได้',
	'DOWNLOAD'					=> 'ดาวน์โหลด',
	'DOWNLOAD_AS'				=> 'ดาวน์โหลดเป็น',
	'DOWNLOAD_STORE'			=> 'ดาวน์โหลดหรือเก็บรักษาไฟล์',
	'DOWNLOAD_STORE_EXPLAIN'	=> 'คุณสามารถดาวน์โหลดไฟล์โดยตรงหรือบันทึกไฟล์ลงในแฟ้มของคุณ',

	'EDIT'					=> 'แก้ไข',
	'ENABLE'				=> 'ทำให้ใช้ได้',
	'EXPORT_DOWNLOAD'		=> 'ดาวน์โหลด',
	'EXPORT_STORE'			=> 'เก็บรักษา',

	'GENERAL_OPTIONS'		=> 'ตัวเลือกทั่วไป',
	'GENERAL_SETTINGS'		=> 'ตั้งค่าทั่วไป',
	'GLOBAL_MASK'			=> 'Global permission mask',

	'INSTALL'				=> 'ติดตั้ง',
	'IP'					=> 'IP ของผู้ใช้',
	'IP_HOSTNAME'			=> 'IP addresses or hostnames',

	'LOGGED_IN_AS'			=> 'คุณล็อกอินในนาม:',
	'LOGIN_ADMIN'			=> 'ในการที่จะเป็นผู้ดูแลบอร์ด คุณต้องเป็นผู้ใช้ที่ได้รับการรับรองก่อน.',
	'LOGIN_ADMIN_CONFIRM'	=> 'กรุณา Login อีกครั้ง ด้วยชื่อผุ้ใช้และรหัสผ่านของ Admin',
	'LOGIN_ADMIN_SUCCESS'	=> 'กำลังเข้าสู่ระบบใน ฐานะ Admin.',
	'LOOK_UP_FORUM'			=> 'เลือกบอร์ด',
	'LOOK_UP_FORUMS_EXPLAIN'=> 'คุณสามารถเลือกบอร์ดได้มากกว่าหนึ่งบอร์ด.',

	'MANAGE'				=> 'จัดการ',
	'MENU_TOGGLE'			=> 'ซ่อนหรือแสดงเมนูด้านข้าง',
	'MOVE_DOWN'				=> 'เลื่อนลง',
	'MOVE_UP'				=> 'เลื่อนขึ้น',

	'NOTIFY'				=> 'การประกาศ',
	'NO_ADMIN'				=> 'คุณไม่ได้รับการรับรองที่จะให้ดูแลบอร์ดนี้.',
	'NO_EMAILS_DEFINED'		=> 'ไม่พบ e-mail address ที่ถูกต้อง.',
	'NO_PASSWORD_SUPPLIED'	=> 'คุณต้องใส่ password เพื่อที่จะเข้าถึงแป้นควบคุมการดูแลระบบ.',	

	'OFF'					=> 'ปิด',
	'ON'					=> 'เปิด',

	'PARSE_BBCODE'						=> 'Parse BBCode',
	'PARSE_SMILIES'						=> 'Parse smilies',
	'PARSE_URLS'						=> 'Parse links',
	'PERMISSIONS_TRANSFERRED'			=> 'การโอนการอนุญาต',
	'PERMISSIONS_TRANSFERRED_EXPLAIN'	=> 'ขณะนี้ คุณมีสิทธิ์จาก %1$s. คุณสามารถที่จะอ่านบอร์ดด้วยสิทธิ์ของผู้ใช้นี้, แต่ไม่สามารถใช้แป้นควบคุมการดูแลระบบได้เนื่องจากการอนุญาตให้ดูและระบบไม่ได้ถูกโอนมา. คุณสามารถ <a href="%2$s"><strong>กลับไปสู่สถานะเดิมของคุณ </strong></a> ได้ทุกเวลา.',
	'PIXEL'								=> 'px',	
	'PROCEED_TO_ACP'					=> '%s กำลังไปที่หน้า ผู้ดูแลระบบ%s',

	'REMIND'							=> 'เตือน',
	'RESYNC'							=> 'Resynchronise',
	'RETURN_TO'							=> 'กลับสู่…',

	'SELECT_ANONYMOUS'		=> 'เลือกผู้ใช้ที่ไม่เปิดเผย',
	'SELECT_OPTION'			=> 'เลือกตัวเลือก',

	'UCP'					=> 'User Control Panel',
	'USERNAMES_EXPLAIN'		=> 'ใส่ชื่อผู้ใช้ คนละบรรทัด บรรทัดละหนึ่งคน.',
	'USER_CONTROL_PANEL'	=> 'User Control Panel',

	'WARNING'				=> 'การเตือน',
));

// PHP info
$lang = array_merge($lang, array(
	'ACP_PHP_INFO_EXPLAIN'	=> 'หน้านี้แสดงรายการของ PHP เวอร์ชันที่ติดตั้งบนเครื่องเซิร์ฟเวอร์นี้. ข้อมูลที่แสดงประกอบไปด้วย โมดูลต่างๆ, ตัวแปรที่มีให้ และค่าเริ่มต้น. ข้อมูลเหล่านี้จะมีประโยชน์เมื่อใช้ในการวินิจฉัยปัญหาต่างๆ. โปรดรับทราบไว้ว่าบางบริษัทจะจำกัดการแสดงข้อมูลบางตัวด้วยเหตุผลด้านความปลอดภัย. คำแนะนำคืออย่าให้ข้อมูลใดๆในหน้านี้แก่ผู้ใด ยกเว้นว่าจะได้รับการร้องขอจาก<a href="http://www.phpbb.com/about/team/">สมาชิกของทีมอย่างเป็นทางการ</a>',

	'NO_PHPINFO_AVAILABLE'	=> 'ไม่สามารถบอกข้อมูลเกี่ยวกับการปรับแต่ง PHP ได้ เนื่องจาก Phpinfo() ถูกปิดการใช้งานด้วยเหตุจำเป็นด้านความปลอดภัย.',
));

// Logs
$lang = array_merge($lang, array(
	'ACP_ADMIN_LOGS_EXPLAIN'	=> 'ข้อความนี้แจกแจงรายละเอียดของกิจกรรมที่ผู้ดูแลระบบได้กระทำไป คุณสามารถเรียงตามชื่อผู้ใช้, วันที่, IP หรือ กิจกรรม ถ้าหากว่าคุณมีสิทธิ์ที่เหมาะสม คุณก็สามารถลบแต่ละกิจกรรมหรือทั้งหมดได้',
	'ACP_CRITICAL_LOGS_EXPLAIN'	=> 'ข้อความนี้แจกแจงรายละเอียดของกิจกรรมที่ตัวบอร์ดเองได้กระทำไป ข้อความเหล่านี้จะช่วยให้คุณสามารถแก้ปัญหาเฉพาะอย่างได้ ยกตัวอย่าง เช่น การหารายการ e-mail ที่ไม่สามารถส่งได้หรือยังไม่ได้ส่ง คุณสามารถเรียงตามชื่อผู้ใช้, วันที่, IP หรือ กิจกรรม ถ้าหากว่าคุณมีสิทธิ์ที่เหมาะสม คุณก็สามารถลบแต่ละกิจกรรมหรือทั้งหมดได้',
	'ACP_MOD_LOGS_EXPLAIN'		=> 'ข้อความนี้แจกแจงรายละเอียดของกิจกรรมที่ถูกกระทำใน forum, กระทู้ และ โพส ที่กระทำโดยผู้ใช้ทั่วไปหรือผู้จัดการบอร์ด รวมทั้งการแบนด้วย คุณสามารถเรียงตามชื่อผู้ใช้, วันที่, IP หรือ กิจกรรม ถ้าหากว่าคุณมีสิทธิ์ที่เหมาะสม คุณก็สามารถลบแต่ละกิจกรรมหรือทั้งหมดได้',
	'ACP_USERS_LOGS_EXPLAIN'	=> 'ข้อความนี้แจกแจงรายละเอียดของกิจกรรมที่ถูกกระทำโดยผู้ใช้ หรือถูกกระทำกับผู้ใช้ (รายงานต่างๆ, การเตือน และ หมายเหตุของผู้ใช้)',
	'ALL_ENTRIES'				=> 'รายการทั้งหมด',

	'DISPLAY_LOG'	=> 'แสดงรายการจากรายการก่อนหน้า',

	'NO_ENTRIES'	=> 'ไม่พบรายการสำหรับช่วงเวลานี้',

	'SORT_IP'		=> 'IP address',
	'SORT_DATE'		=> 'วันที่',
	'SORT_ACTION'	=> 'Log action',
));

// Index page
$lang = array_merge($lang, array(
	'ADMIN_INTRO'				=> 'ขอบคุณที่เลือกใช้ phpBB เป็นเวบบอร์ด หน้าจอนี้จะแสดงข้อมูลสถิติต่างๆของบอร์ดโดยสรุป ลิงค์ทางด้านซ้ายจะช่วยให้คุณควบคุมทุกแง่มุมของบอร์ด แต่ละหน้าจะมีวิธีใช้เครื่องมือต่างๆให้',
	'ADMIN_LOG'					=> 'Logged administrator actions',
	'ADMIN_LOG_INDEX_EXPLAIN'	=> 'ข้อความนี้สรุปกิจกรรมล่าสุด 5 ครั้งที่กระทำโดยผู้ดูแลระบบ ข้อความสำเนาทั้งหมดสามารถดูได้จากเมนูที่จัดไว้ให้แล้วหรือไปตามลิงค์ข้างล่างนี้',
	'AVATAR_DIR_SIZE'			=> 'ขนาดไดเรกทอรีของภาพประจำตัว',

	'BOARD_STARTED'		=> 'เว็บบอร์ดเริ่ม ',
	'BOARD_VERSION'		=> 'เว็บบอร์ดเวอร์ชั่น',

	'DATABASE_SERVER_INFO'	=> 'ข้อมูล ฐานข้อมูล เซิร์ฟเวอร์',
	'DATABASE_SIZE'			=> 'ขนาดฐานข้อมูล',

	'FILES_PER_DAY'		=> 'ไฟล์แนบต่อวัน',
	'FORUM_STATS'		=> 'สถิติต่างๆของบอร์ด',

	'GZIP_COMPRESSION'	=> 'การบีบอัด GZip',

	'NOT_AVAILABLE'		=> 'ไม่มี',
	'NUMBER_FILES'		=> 'จำนวนของไฟล์แนบ',
	'NUMBER_POSTS'		=> 'จำนวนของโพส',
	'NUMBER_TOPICS'		=> 'จำนวนของกระทู้',
	'NUMBER_USERS'		=> 'จำนวนของผู้ใช้',
	'NUMBER_ORPHAN'		=> 'ไฟล์แนบที่ไม่มีเจ้าของ',

	'POSTS_PER_DAY'		=> 'จำนวนการโพสต่อวัน',

	'PURGE_CACHE'			=> 'ลบ cache',
	'PURGE_CACHE_CONFIRM'	=> 'คุณแน่ใจว่าจะลบ cache ?',
	'PURGE_CACHE_EXPLAIN'	=> 'เคลียร์แคชทั้งหมด, การกระทำนี้จะเคลียร์แคชไฟล์แม่แบบหรือการสอบถามทั้งหมด',

	'RESET_DATE'					=> 'ตั้งเวลาเริ่มใช้บอร์ดใหม่',
	'RESET_DATE_CONFIRM'			=> 'คุณแน่ใจว่าคุณต้องการตั้งเวลาเริ่มใช้บอร์ดใหม่ ?',
	'RESET_ONLINE'					=> 'ตั้งค่าผู้ใช้ที่ออนไลน์มากที่สุดใหม่',
	'RESET_ONLINE_CONFIRM'			=> 'คุณแน่ใจว่าคุณต้องการตั้งค่าผู้ใช้ที่ออนไลน์มากที่สุดใหม่ ?',
	'RESYNC_POSTCOUNTS'				=> 'ทำการนับโพสใหม่',
	'RESYNC_POSTCOUNTS_EXPLAIN'		=> 'โพสที่มีอยู่จริงเท่านั้นที่จะถูกนับ การกำจัดโพสจะไม่ถูกนับ',
	'RESYNC_POSTCOUNTS_CONFIRM'		=> 'คุณแน่ใจว่าคุณต้องการจะทำการนับโพสใหม่ ?',
	'RESYNC_POST_MARKING'			=> 'ทำการนับใหม่ สำหรับกระทู้ที่มีการทำลายเซ็นต์',
	'RESYNC_POST_MARKING_CONFIRM'	=> 'คุณแน่ใจว่าคุณต้องการทำการนับใหม่ สำหรับกระทู้ที่มีการทำลายเซ็นต์?',
	'RESYNC_POST_MARKING_EXPLAIN'	=> 'ขั้นแรกให้ทำการลบลายเซ็นต์ของทุกกระทู้ จากนั้นทำลายเซ็นต์กระทู้ที่มีกิจกรรมในช่วง 6 เดือนที่ผ่านมา',
	'RESYNC_STATS'					=> 'ทำการนับสถิติใหม่',
	'RESYNC_STATS_CONFIRM'			=> 'คุณแน่ใจว่าคุณต้องการจะทำการับสถิติใหม่',
	'RESYNC_STATS_EXPLAIN'			=> 'ทำการคำนวณจำนวนโพส, กระทู้, ผู้ใช้และไฟล์ทั้งหมด',
	'RUN'							=> ' ตั้งค่า ',

	'STATISTIC'					=> 'สถิติ',
	'STATISTIC_RESYNC_OPTIONS'	=> 'ทำการนับสถิติใหม่หรือตั้งค่าสถิติใหม่',

	'TOPICS_PER_DAY'	=> 'กระทู้ต่อวัน',

	'UPLOAD_DIR_SIZE'	=> 'ขนาดของไฟล์แนบจากการโพส',
	'USERS_PER_DAY'		=> 'ผู้ใช้ต่อวัน',

	'VALUE'					=> 'ค่า',
	'VIEW_ADMIN_LOG'		=> 'เรียกดู administrator log',
	'VIEW_INACTIVE_USERS'	=> 'เรียกดู ผู้ใช้ที่ไม่มีการเข้าใช้',

	'WELCOME_PHPBB'			=> 'ยินดีต้อนรับสู่ ศูนย์ดำเนินการระบบ',
));

// Inactive Users
$lang = array_merge($lang, array(
	'INACTIVE_DATE'					=> 'Inactive date',
	'INACTIVE_REASON'				=> 'เหตุผล',
	'INACTIVE_REASON_MANUAL'		=> 'บัญชีที่ผู้ดูแลระบบทำให้ใช้ไม่ได้',
	'INACTIVE_REASON_PROFILE'		=> 'รายละเอียดข้อมูลโดยรวมเปลี่ยนแปลงแล้ว',
	'INACTIVE_REASON_REGISTER'		=> 'บัญชีผู้ใช้ที่ลงทะเบียนใหม่',
	'INACTIVE_REASON_REMIND'		=> 'บังคับให้บัญชีผู้ใช้ทำงานได้ใหม่',
	'INACTIVE_REASON_UNKNOWN'		=> 'ไม่ทราบ',
	'INACTIVE_USERS'				=> 'ผู้ใช้ที่ไม่มีการเข้าใช้แล้ว',
	'INACTIVE_USERS_EXPLAIN'		=> 'ข้อความนี้แสดงผู้ใช้ที่มีการลงทะเบียนแต่ไม่มีการเข้าใช้ คุณสามารถ ทำให้บัญชีผู้ใช้ใช้งานได้, ลบบัญชีผู้ใช้หรือเตือน(โดยส่ง e-mail) หากคุณต้องการ',
	'INACTIVE_USERS_EXPLAIN_INDEX'	=> 'ข้อความนี้แสดงผู้ใช้ 10 คนล่าสุดที่ลงทะเบียนแต่ไม่มีการเข้าใช้ รายการทั้งหมดของผู้ใช้ที่ไม่มีการเข้าใช้สามารถเรียกดูได้จากเมนูที่จัดไว้ให้แล้ว หรือ โดยการไปตามลิงค์ข้างล่างนี้ เพื่อที่คุณจะได้ทำการ ทำให้บัญชีผู้ใช้ใช้งานได้, ลบบัญชีผู้ใช้หรือเตือน(โดยส่ง e-mail) หากคุณต้องการ',

	'NO_INACTIVE_USERS'	=> 'ไม่มีผู้ใช้ที่ไม่มีการใช้งาน',

	'SORT_INACTIVE'		=> 'วันที่ไม่มีการใช้งานแล้ว',
	'SORT_LAST_VISIT'	=> 'วันที่เข้าใช้ล่าสุด',
	'SORT_REASON'		=> 'เหตุผล',
	'SORT_REG_DATE'		=> 'วันที่ลงทะเบียน',

	'USER_IS_INACTIVE'		=> 'ผู้ใช้นี้ไม่มีการใช้งาน',
));

// Log Entries
$lang = array_merge($lang, array(
	'LOG_ACL_ADD_USER_GLOBAL_U_'		=> '<strong>เพิ่มหรือลด การอนุญาตของผู้ใช้</strong><br />? %s',
	'LOG_ACL_ADD_GROUP_GLOBAL_U_'		=> '<strong>เพิ่มหรือลด การอนุญาตของกลุ่มผู้ใช้</strong><br />? %s',
	'LOG_ACL_ADD_USER_GLOBAL_M_'		=> '<strong>เพิ่มหรือลด การอนุญาตของผู้จัดการบอร์ด</strong><br />? %s',
	'LOG_ACL_ADD_GROUP_GLOBAL_M_'		=> '<strong>เพิ่มหรือลด การอนุญาตของกลุ่มผู้จัดการบอร์ด</strong><br />? %s',
	'LOG_ACL_ADD_USER_GLOBAL_A_'		=> '<strong>เพิ่มหรือลด การอนุญาตของผู้ดูแลระบบ</strong><br />? %s',
	'LOG_ACL_ADD_GROUP_GLOBAL_A_'		=> '<strong>เพิ่มหรือลด การอนุญาตของกลุ่มผู้ดูแลระบบ</strong><br />? %s',

	'LOG_ACL_ADD_ADMIN_GLOBAL_A_'		=> '<strong>เพิ่มหรือลด ผู้ดูแลระบบ</strong><br />? %s',
	'LOG_ACL_ADD_MOD_GLOBAL_M_'			=> '<strong>เพิ่มหรือลด ผู้จัดการบอร์ดทั้งหมด</strong><br />? %s',

	'LOG_ACL_ADD_USER_LOCAL_F_'			=> '<strong>เพิ่มหรือลด การเข้าถึง forum ของผู้ใช้</strong> from %1$s<br />? %2$s',
	'LOG_ACL_ADD_USER_LOCAL_M_'			=> '<strong>เพิ่มหรือลด การเข้าถึง forum ของผู้จัดการบอร์ด</strong> from %1$s<br />? %2$s',
	'LOG_ACL_ADD_GROUP_LOCAL_F_'		=> '<strong>เพิ่มหรือลด การเข้าถึง forum ของกลุ่มผู้ใช้</strong> from %1$s<br />? %2$s',
	'LOG_ACL_ADD_GROUP_LOCAL_M_'		=> '<strong>เพิ่มหรือลด การเข้าถึง forum ของกลุ่มผู้จัดการบอร์ด</strong> from %1$s<br />? %2$s',

	'LOG_ACL_ADD_MOD_LOCAL_M_'			=> '<strong>เพิ่มหรือลด ผู้จัดการบอร์ด</strong> from %1$s<br />? %2$s',
	'LOG_ACL_ADD_FORUM_LOCAL_F_'		=> '<strong>เพิ่มหรือลด การอนุญาตของ forum </strong> from %1$s<br />? %2$s',

	'LOG_ACL_DEL_ADMIN_GLOBAL_A_'		=> '<strong>ลบผู้ดูแลระบบ</strong><br />? %s',
	'LOG_ACL_DEL_MOD_GLOBAL_M_'			=> '<strong>ลบผู้จัดการบอร์ดทั้งหมด</strong><br />? %s',
	'LOG_ACL_DEL_MOD_LOCAL_M_'			=> '<strong>ลบผู้จัดการบอร์ด</strong> จาก %1$s<br />? %2$s',
	'LOG_ACL_DEL_FORUM_LOCAL_F_'		=> '<strong>ลบการอนุญาตของ ผู้ใช้/กลุ่ม ของ forum</strong> from %1$s<br />? %2$s',

	'LOG_ACL_TRANSFER_PERMISSIONS'		=> '<strong>การอนุญาต การโอนจาก</strong><br />? %s',
	'LOG_ACL_RESTORE_PERMISSIONS'		=> '<strong>ความเป็นเจ้าของการอนุญาตกลับคืนหลังจากใช้การอนุญาตจาก</strong><br />? %s',
	
	'LOG_ADMIN_AUTH_FAIL'		=> '<strong>การพยายามล็อกอินเพื่อดูแลระบบล้มเหลว</strong>',
	'LOG_ADMIN_AUTH_SUCCESS'	=> '<strong>ล็อกอินเพื่อดูแลระบบสำเร็จ</strong>',

	'LOG_ATTACHMENTS_DELETED'	=> '<strong>ลบไฟล์แนบของผู้ใช้</strong><br />? %s',

	'LOG_ATTACH_EXT_ADD'		=> '<strong>เพิ่มหรือลดนามสกุลไฟล์แนบ</strong><br />? %s',
	'LOG_ATTACH_EXT_DEL'		=> '<strong>ลบนามสกุลไฟล์แนบ</strong><br />? %s',
	'LOG_ATTACH_EXT_UPDATE'		=> '<strong>อัพเดทนามสกุลไฟล์แนบ</strong><br />? %s',
	'LOG_ATTACH_EXTGROUP_ADD'	=> '<strong>เพิ่มกลุ่มเสริม</strong><br />? %s',
	'LOG_ATTACH_EXTGROUP_EDIT'	=> '<strong>แก้ไขกลุ่มเสริม</strong><br />? %s',
	'LOG_ATTACH_EXTGROUP_DEL'	=> '<strong>ลบกลุ่มเสริม</strong><br />? %s',
	'LOG_ATTACH_FILEUPLOAD'		=> '<strong>ไฟล์ที่ไม่มีเจ้าของถูกอัพโหลดไปที่โพส</strong><br />? ID %1$d - %2$s',
	'LOG_ATTACH_ORPHAN_DEL'		=> '<strong>ไฟล์ที่ไม่มีเจ้าของถูกลบ</strong><br />? %s',

	'LOG_BAN_EXCLUDE_USER'	=> '<strong>ยกเลิกการแบนผู้ใช้</strong> ด้วยเหตุผล “<em>%1$s</em>”<br />? %2$s',
	'LOG_BAN_EXCLUDE_IP'	=> '<strong>ยกเลิกการแบน IP</strong> ด้วยเหตุผล “<em>%1$s</em>”<br />? %2$s',
	'LOG_BAN_EXCLUDE_EMAIL' => '<strong>ยกเลิกการแบน e-mail</strong> ด้วยเหตุผล “<em>%1$s</em>”<br />? %2$s',
	'LOG_BAN_USER'			=> '<strong>แบนผู้ใช้</strong> ด้วยเหตุผล “<em>%1$s</em>”<br />? %2$s',
	'LOG_BAN_IP'			=> '<strong>แบน IP</strong> ด้วยเหตุผล “<em>%1$s</em>”<br />? %2$s',
	'LOG_BAN_EMAIL'			=> '<strong>แบน e-mail</strong> ด้วยเหตุผล “<em>%1$s</em>”<br />? %2$s',
	'LOG_UNBAN_USER'		=> '<strong>ผู้ใช้ที่ไม่ถูกแบน</strong><br />? %s',
	'LOG_UNBAN_IP'			=> '<strong>IP ที่ไม่ถูกแบน</strong><br />? %s',
	'LOG_UNBAN_EMAIL'		=> '<strong>e-mail ที่ไม่ถูกแบน</strong><br />? %s',

	'LOG_BBCODE_ADD'		=> '<strong>เพิ่ม BBCode ใหม่</strong><br />? %s',
	'LOG_BBCODE_EDIT'		=> '<strong>แก้ไข BBCode</strong><br />? %s',
	'LOG_BBCODE_DELETE'		=> '<strong>ลบ BBCode</strong><br />? %s',

	'LOG_BOT_ADDED'		=> '<strong>เพิ่ม bot ใหม่แล้ว</strong><br />? %s',
	'LOG_BOT_DELETE'	=> '<strong>ลบ bot แล้ว</strong><br />? %s',
	'LOG_BOT_UPDATED'	=> '<strong>bot ที่มีอยู่อัพเดทแล้ว</strong><br />? %s',

	'LOG_CLEAR_ADMIN'		=> '<strong>ลบ admin log</strong>',
	'LOG_CLEAR_CRITICAL'	=> '<strong>ลบ error log</strong>',
	'LOG_CLEAR_MOD'			=> '<strong>ลบ moderator log</strong>',
	'LOG_CLEAR_USER'		=> '<strong>ลบ user log</strong><br />? %s',
	'LOG_CLEAR_USERS'		=> '<strong>ลบ user logs</strong>',

	'LOG_CONFIG_ATTACH'			=> '<strong>ปรับเปลี่ยนการตั้งค่าไฟล์แนบ</strong>',
	'LOG_CONFIG_AUTH'			=> '<strong>ปรับเปลี่ยนการตั้งค่า authentication</strong>',
	'LOG_CONFIG_AVATAR'			=> '<strong>ปรับเปลี่ยนการตั้งค่าภาพประจำตัว</strong>',
	'LOG_CONFIG_COOKIE'			=> '<strong>ปรับเปลี่ยนการตั้งค่า Cookie</strong>',
	'LOG_CONFIG_EMAIL'			=> '<strong>ปรับเปลี่ยนการตั้งค่า e-mail</strong>',
	'LOG_CONFIG_FEATURES'		=> '<strong>ปรับเปลี่ยนการตั้งค่าบอร์ด features</strong>',
	'LOG_CONFIG_LOAD'			=> '<strong>ปรับเปลี่ยนการตั้งค่า load</strong>',
	'LOG_CONFIG_MESSAGE'		=> '<strong>ปรับเปลี่ยนการตั้งค่าข้อความส่วนตัว</strong>',
	'LOG_CONFIG_POST'			=> '<strong>ปรับเปลี่ยนการตั้งค่าโพส</strong>',
	'LOG_CONFIG_REGISTRATION'	=> '<strong>ปรับเปลี่ยนการตั้งค่าการลงทะเบียนผู้ใช้</strong>',
	'LOG_CONFIG_SEARCH'			=> '<strong>ปรับเปลี่ยนการตั้งค่าการค้นหา</strong>',
	'LOG_CONFIG_SECURITY'		=> '<strong>ปรับเปลี่ยนความปลอดภัย</strong>',
	'LOG_CONFIG_SERVER'			=> '<strong>ปรับเปลี่ยน เซิร์ฟเวอร์</strong>',
	'LOG_CONFIG_SETTINGS'		=> '<strong>ปรับเปลี่ยนบอร์ด</strong>',
	'LOG_CONFIG_SIGNATURE'		=> '<strong>ปรับเปลี่ยนลายเซ็นต์</strong>',
	'LOG_CONFIG_VISUAL'			=> '<strong>ปรับเปลี่ยนการยืนยันการมองเห็น</strong>',

	'LOG_APPROVE_TOPIC'			=> '<strong>กระทู้ที่ได้รับการอนุมัติ</strong><br />? %s',
	'LOG_BUMP_TOPIC'			=> '<strong>ผู้ใช้ bumpedกระทู้</strong><br />? %s',
	'LOG_DELETE_POST'			=> '<strong>ลบโพส</strong><br />? %s',
	'LOG_DELETE_TOPIC'			=> '<strong>ลบกระทู้</strong><br />? %s',
	'LOG_FORK'					=> '<strong>กระทู้ถูกคัดลอก</strong><br />? จาก %s',
	'LOG_LOCK'					=> '<strong>กระทู้ถูกล็อก</strong><br />? %s',
	'LOG_LOCK_POST'				=> '<strong>โพสถูกล็อก</strong><br />? %s',
	'LOG_MERGE'					=> '<strong>โพสถูกรวม</strong> intoกระทู้<br />? %s',
	'LOG_MOVE'					=> '<strong>กระทู้ถูกย้าย</strong><br />? จาก %s',
	'LOG_POST_APPROVED'			=> '<strong>โพสที่ได้รับการอนุมัติ</strong><br />? %s',
	'LOG_POST_DISAPPROVED'		=> '<strong>โพสที่ไม่ได้รับการอนุมัติ “%1$s” ด้วยเหตุผลต่อไปนี้</strong><br />? %2$s',
	'LOG_POST_EDITED'			=> '<strong>แก้ไขโพส “%1$s” แก้ไขโดย</strong><br />? %2$s',
	'LOG_REPORT_CLOSED'			=> '<strong>รายงานที่ถูกปิดแล้ว</strong><br />? %s',
	'LOG_REPORT_DELETED'		=> '<strong>รายงานที่ถูกลบแล้ว</strong><br />? %s',
	'LOG_SPLIT_DESTINATION'		=> '<strong>ย้ายโพสที่ถูกแยก</strong><br />? ไปที่ %s',
	'LOG_SPLIT_SOURCE'			=> '<strong>แยกโพส</strong><br />? จาก %s',

	'LOG_TOPIC_DELETED'			=> '<strong>ลบกระทู้</strong><br />? %s',
	'LOG_TOPIC_APPROVED'		=> '<strong>กระทู้ที่ได้รับการอนุมัติ</strong><br />? %s',
	'LOG_TOPIC_DISAPPROVED'		=> '<strong>กระทู้ที่ไม่ได้รับการอนุมัติ “%1$s” ด้วยเหตุผลต่อไปนี้</strong><br />%2$s',
	'LOG_TOPIC_RESYNC'			=> '<strong>Resynchronised ตัวนับกระทู้</strong><br />? %s',
	'LOG_TOPIC_TYPE_CHANGED'	=> '<strong>เปลี่ยนประเภทกระทู้</strong><br />? %s',
	'LOG_UNLOCK'				=> '<strong>ปลดล็อกกระทู้</strong><br />? %s',
	'LOG_UNLOCK_POST'			=> '<strong>ปลดล็อกโพส</strong><br />? %s',

	'LOG_DISALLOW_ADD'		=> '<strong>เพิ่มชื่อผู้ใช้ที่ห้ามใช้</strong><br />? %s',
	'LOG_DISALLOW_DELETE'	=> '<strong>ลบชื่อผู้ใช้ที่ห้ามใช้</strong>',

	'LOG_DB_BACKUP'			=> '<strong>สำรองฐานข้อมูล</strong>',
	'LOG_DB_DELETE'			=> '<strong>ลบฐานข้อมูลสำรอง</strong>',
	'LOG_DB_RESTORE'		=> '<strong>นำฐานข้อมูลสำรองกลับมา</strong>',

	'LOG_DOWNLOAD_EXCLUDE_IP'	=> '<strong>แยก IP/hostname จากรายการดาวน์โหลด</strong><br />? %s',
	'LOG_DOWNLOAD_IP'			=> '<strong>เพิ่ม IP/hostname ในรายการดาวน์โหลด</strong><br />? %s',
	'LOG_DOWNLOAD_REMOVE_IP'	=> '<strong>ลบIP/hostname จากรายการดาวน์โหลด</strong><br />? %s',

	'LOG_ERROR_JABBER'		=> '<strong>Jabber error</strong><br />? %s',
	'LOG_ERROR_EMAIL'		=> '<strong>E-mail error</strong><br />? %s',
	
	'LOG_FORUM_ADD'							=> '<strong>สร้างใหม่</strong><br />? %s',
	'LOG_FORUM_DEL_FORUM'					=> '<strong>ลบบอร์ด</strong><br />? %s',
	'LOG_FORUM_DEL_FORUMS'					=> '<strong>ลบบอร์ดและบอร์ดย่อย</strong><br />? %s',
	'LOG_FORUM_DEL_MOVE_FORUMS'				=> '<strong>ลบบอร์ดและ ย้ายบอร์ดย่อย</strong> ไปที่ %1$s<br />? %2$s',
	'LOG_FORUM_DEL_MOVE_POSTS'				=> '<strong>ลบบอร์ดและ ย้ายโพส </strong> ไปที่ %1$s<br />? %2$s',
	'LOG_FORUM_DEL_MOVE_POSTS_FORUMS'		=> '<strong>ลบบอร์ดและ subforums, ย้ายข้อความ</strong> ไปที่ %1$s<br />? %2$s',
	'LOG_FORUM_DEL_MOVE_POSTS_MOVE_FORUMS'	=> '<strong>ลบบอร์ด, ย้ายกระืทู้</strong> ไปที่ %1$s <strong>และ บอร์ดย่อย</strong> ไปที่ %2$s<br />? %3$s',
	'LOG_FORUM_DEL_POSTS'					=> '<strong>ลบบอร์ด และข้อความ</strong><br />? %s',
	'LOG_FORUM_DEL_POSTS_FORUMS'			=> '<strong>ลบบอร์ด, ข้อความ และบอร์ดย่อย</strong><br />? %s',
	'LOG_FORUM_DEL_POSTS_MOVE_FORUMS'		=> '<strong>ลบบอร์ดและ ข้อความ, ย้ายบอร์ดย่อย</strong> ไปที่ %1$s<br />? %2$s',
	'LOG_FORUM_EDIT'						=> '<strong>แก้ไขรายละเอียดบอร์ด </strong><br />? %s',
	'LOG_FORUM_MOVE_DOWN'					=> '<strong>ย้ายบอร์ด</strong> %1$s <strong>ข้างล่าง</strong> %2$s',
	'LOG_FORUM_MOVE_UP'						=> '<strong>ย้ายบอร์ด</strong> %1$s <strong>ข้างบน</strong> %2$s',
	'LOG_FORUM_SYNC'						=> '<strong>Re-synchronised บอร์ด</strong><br />? %s',

	'LOG_GROUP_CREATED'		=> '<strong>สร้างกลุ่มผู้ใช้ใหม่</strong><br />? %s',
	'LOG_GROUP_DEFAULTS'	=> '<strong>กลุ่ม “%1$s” ถูกตั้งเป็นค่าเริ่มต้นสำหรับสมาชิก</strong><br />? %2$s',
	'LOG_GROUP_DELETE'		=> '<strong>ลบกลุ่มผู้ใช้</strong><br />? %s',
	'LOG_GROUP_DEMOTED'		=> '<strong>ผู้นำลดระดับกลุ่มผู้ใช้</strong> %1$s<br />? %2$s',
	'LOG_GROUP_PROMOTED'	=> '<strong>สมาชิกถูกโปรโมทเป็นผู้นำในกลุ่มผู้ใช้</strong> %1$s<br />? %2$s',
	'LOG_GROUP_REMOVE'		=> '<strong>สมาชิกถูกลบจากกลุ่มผู้ใช้</strong> %1$s<br />? %2$s',
	'LOG_GROUP_UPDATED'		=> '<strong>อัพเดทรายละเอียดกลุ่มผู้ใช้</strong><br />? %s',
	'LOG_MODS_ADDED'		=> '<strong>เพิ่มผู้นำใหม่เข้ากลุ่มผู้ใช้</strong> %1$s<br />? %2$s',
	'LOG_USERS_APPROVED'	=> '<strong>ผู้ใช้ถูกอนุมัติในกลุ่มผู้ใช้</strong> %1$s<br />? %2$s',
	'LOG_USERS_ADDED'		=> '<strong>เพิ่มสมาชิกใหม่เข้ากลุ่มผู้ใช้</strong> %1$s<br />? %2$s',

	'LOG_IMAGESET_ADD_DB'			=> '<strong>เพิ่มกลุ่มรูปภาพใหม่ในฐานข้อมูล</strong><br />? %s',
	'LOG_IMAGESET_ADD_FS'			=> '<strong>เพิ่มกลุ่มรูปภาพใหม่บนระบบไฟล์</strong><br />? %s',
	'LOG_IMAGESET_DELETE'			=> '<strong>ลบกลุ่มรูปภาพ</strong><br />? %s',
	'LOG_IMAGESET_EDIT_DETAILS'		=> '<strong>แก้ไขรายละเอียดกลุ่มรูปภาพ</strong><br />? %s',
	'LOG_IMAGESET_EDIT'				=> '<strong>แก้ไขกลุ่มรูปภาพ</strong><br />? %s',
	'LOG_IMAGESET_EXPORT'			=> '<strong>ส่งกลุ่มรูปภาพออก</strong><br />? %s',
	'LOG_IMAGESET_LANG_MISSING'		=> '<strong>กลุ่มรูปภาพ misses “%2$s” localisation</strong><br />? %1$s',
	'LOG_IMAGESET_LANG_REFRESHED'	=> '<strong>Refreshed “%2$s” localisation ของกลุ่มรูปภาพ</strong><br />? %1$s',
	'LOG_IMAGESET_REFRESHED'		=> '<strong>Refreshed กลุ่มรูปภาพ</strong><br />? %s',

	'LOG_INACTIVE_ACTIVATE'	=> '<strong>ทำให้บัญชีผู้ใช้ที่ไม่มีการเข้าใช้กลับมาใช้งานได้</strong><br />? %s',
	'LOG_INACTIVE_DELETE'	=> '<strong>ลบผู้ใช้ที่ไม่มีการเข้าใช้</strong><br />? %s',
	'LOG_INACTIVE_REMIND'	=> '<strong>ส่ง e-mails แจ้งเตือนไปที่ผู้ใช้ที่ไม่มีการเข้าใช้</strong><br />? %s',
	'LOG_INSTALL_CONVERTED'	=> '<strong>แปลงจาก %1$s เป็น phpBB %2$s</strong>',
	'LOG_INSTALL_INSTALLED'	=> '<strong>ติดตั้ง phpBB %s</strong>',

	'LOG_IP_BROWSER_FORWARDED_CHECK'	=> '<strong>Session IP/browser/X_FORWARDED_FOR check failed</strong><br />?ผู้ใช้ IP “<em>%1$s</em>” checked against session IP “<em>%2$s</em>”, user browser string “<em>%3$s</em>” checked against session browser string “<em>%4$s</em>” และ user X_FORWARDED_FOR string “<em>%5$s</em>” checked against session X_FORWARDED_FOR string “<em>%6$s</em>”.',

	'LOG_JAB_CHANGED'			=> '<strong>Jabber account changed</strong>',
	'LOG_JAB_PASSCHG'			=> '<strong>Jabber password changed</strong>',
	'LOG_JAB_REGISTER'			=> '<strong>Jabber account registered</strong>',
	'LOG_JAB_SETTINGS_CHANGED'	=> '<strong>Jabber ตั้งค่า changed</strong>',

	'LOG_LANGUAGE_PACK_DELETED'		=> '<strong>ลบ language pack</strong><br />? %s',
	'LOG_LANGUAGE_PACK_INSTALLED'	=> '<strong>ติดตั้ง language pack</strong><br />? %s',
	'LOG_LANGUAGE_PACK_UPDATED'		=> '<strong>อัพเดท language pack details</strong><br />? %s',
	'LOG_LANGUAGE_FILE_REPLACED'	=> '<strong>แทนที่ไฟล์ภาษา</strong><br />? %s',
	'LOG_LANGUAGE_FILE_SUBMITTED'	=> '<strong>ส่งไฟล์ภาษาและ วางไว้ในโฟลเดอร์</strong><br />? %s',

	'LOG_MASS_EMAIL'		=> '<strong>Sent mass e-mail</strong><br />? %s',

	'LOG_MCP_CHANGE_POSTER'	=> '<strong>เปลี่ยนโพสเตอร์ในกระทู้ “%1$s”</strong><br />? จาก %2$s เป็น %3$s',

	'LOG_MODULE_DISABLE'	=> '<strong>ทำให้โมดูลใช้ไม่ได้</strong><br />? %s',
	'LOG_MODULE_ENABLE'		=> '<strong>ทำให้โมดูลใช้ได้</strong><br />? %s',
	'LOG_MODULE_MOVE_DOWN'	=> '<strong>ย้ายโมดูล</strong><br />? %1$s ลงข้างล่าง %2$s',
	'LOG_MODULE_MOVE_UP'	=> '<strong>ย้ายโมดูล</strong><br />? %1$s ขึ้นข้างบน %2$s',
	'LOG_MODULE_REMOVED'	=> '<strong>ลบโมดูล</strong><br />? %s',
	'LOG_MODULE_ADD'		=> '<strong>เพิ่มโมดูล</strong><br />? %s',
	'LOG_MODULE_EDIT'		=> '<strong>แก้ไขโมดูล</strong><br />? %s',

	'LOG_A_ROLE_ADD'		=> '<strong>เพิ่มบทบาทผู้ดูแลระบบ</strong><br />? %s',
	'LOG_A_ROLE_EDIT'		=> '<strong>แก้ไขบทบาทผู้ดูแลระบบ</strong><br />? %s',
	'LOG_A_ROLE_REMOVED'	=> '<strong>ลบบทบาทผู้ดูแลระบบ</strong><br />? %s',
	'LOG_F_ROLE_ADD'		=> '<strong>เพิ่มบทบาท Forum</strong><br />? %s',
	'LOG_F_ROLE_EDIT'		=> '<strong>แก้ไขบทบาท Forum</strong><br />? %s',
	'LOG_F_ROLE_REMOVED'	=> '<strong>ลบบทบาท Forum</strong><br />? %s',
	'LOG_M_ROLE_ADD'		=> '<strong>เพิ่มบทบาทผู้จัดการบอร์ด</strong><br />? %s',
	'LOG_M_ROLE_EDIT'		=> '<strong>แก้ไขบทบาทผู้จัดการบอร์ด</strong><br />? %s',
	'LOG_M_ROLE_REMOVED'	=> '<strong>ลบบทบาทผู้จัดการบอร์ด</strong><br />? %s',
	'LOG_U_ROLE_ADD'		=> '<strong>เพิ่มบทบาทผู้ใช้</strong><br />? %s',
	'LOG_U_ROLE_EDIT'		=> '<strong>แก้ไขบทบาทผู้ใช้</strong><br />? %s',
	'LOG_U_ROLE_REMOVED'	=> '<strong>ลบบทบาทผู้ใช้</strong><br />? %s',

	'LOG_PROFILE_FIELD_ACTIVATE'	=> '<strong>ทำให้ฟิลด์ข้อมูลโดยรวมใช้งานได้</strong><br />? %s',
	'LOG_PROFILE_FIELD_CREATE'		=> '<strong>เพิ่มฟิลด์ข้อมูลโดยรวม</strong><br />? %s',
	'LOG_PROFILE_FIELD_DEACTIVATE'	=> '<strong>ทำให้ฟิลด์ข้อมูลโดยรวมใช้งานไม่ได้</strong><br />? %s',
	'LOG_PROFILE_FIELD_EDIT'		=> '<strong>เปลี่ยนฟิลด์ข้อมูลโดยรวม</strong><br />? %s',
	'LOG_PROFILE_FIELD_REMOVED'		=> '<strong>ลบฟิลด์ข้อมูลโดยรวม</strong><br />? %s',

	'LOG_PRUNE'					=> '<strong>กระทู้ที่ถูกตัดออก</strong><br />? %s',
	'LOG_AUTO_PRUNE'			=> '<strong>ตัดทอนอัตโนมัต</strong><br />? %s',
	'LOG_PRUNE_USER_DEAC'		=> '<strong>ทำให้ผู้ใช้ใช้งานไม่ได้</strong><br />? %s',
	'LOG_PRUNE_USER_DEL_DEL'	=> '<strong>ตัดผู้ใช้ออกและลบโพส</strong><br />? %s',
	'LOG_PRUNE_USER_DEL_ANON'	=> '<strong>ตัดผู้ใช้ออกแต่เก็บโพสไว้</strong><br />? %s',

	'LOG_PURGE_CACHE'			=> '<strong>ลบ cache</strong>',

	'LOG_RANK_ADDED'		=> '<strong>เพิ่มอันดับใหม่</strong><br />? %s',
	'LOG_RANK_REMOVED'		=> '<strong>ลบอันดับ</strong><br />? %s',
	'LOG_RANK_UPDATED'		=> '<strong>อัพเดทอันดับ</strong><br />? %s',

	'LOG_REASON_ADDED'		=> '<strong>เพิ่มเหตุผล report/denial</strong><br />? %s',
	'LOG_REASON_REMOVED'	=> '<strong>ลบเหตุผล report/denial</strong><br />? %s',
	'LOG_REASON_UPDATED'	=> '<strong>อัพเดทเหตุผล report/denial</strong><br />? %s',

	'LOG_RESET_DATE'			=> '<strong>ตั้งวันที่เริ่มใช้บอร์ดใหม่</strong>',
	'LOG_RESET_ONLINE'			=> '<strong>ตั้งค่าผู้ใช้ที่ออนไลน์มากที่สุดใหม่</strong>',
	'LOG_RESYNC_POSTCOUNTS'		=> '<strong>ทำการนับโพสใหม่</strong>',
	'LOG_RESYNC_POST_MARKING'	=> '<strong>ทำการนับใหม่ สำหรับกระทู้ที่มีการทำลายเซ็นต์</strong>',
	'LOG_RESYNC_STATS'			=> '<strong>ทำการนับโพส,กระทู้และสถิติผู้ใช้ใหม่</strong>',

	'LOG_SEARCH_INDEX_CREATED'	=> '<strong>สร้างดัชนีการค้นหาสำหรับ</strong><br />? %s',
	'LOG_SEARCH_INDEX_REMOVED'	=> '<strong>ลบดัชนีการค้นหาสำหรับ</strong><br />? %s',
	'LOG_STYLE_ADD'				=> '<strong>เพิ่มรูปแบบใหม่</strong><br />? %s',
	'LOG_STYLE_DELETE'			=> '<strong>ลบรูปแบบ</strong><br />? %s',
	'LOG_STYLE_EDIT_DETAILS'	=> '<strong>แก้ไขรูปแบบ</strong><br />? %s',
	'LOG_STYLE_EXPORT'			=> '<strong>ส่งรูปแบบออก</strong><br />? %s',

	'LOG_TEMPLATE_ADD_DB'			=> '<strong>เพิ่มกลุ่มแม่แบบเข้าฐานข้อมูล</strong><br />? %s',
	'LOG_TEMPLATE_ADD_FS'			=> '<strong>เพิ่มกลุ่ม Template เข้าระบบไฟล์</strong><br />? %s',
	'LOG_TEMPLATE_CACHE_CLEARED'	=> '<strong>ลบแคชของไฟล์ Template ในกลุ่ม Template <em>%1$s</em></strong><br />? %2$s',
	'LOG_TEMPLATE_DELETE'			=> '<strong>ลบกลุ่ม Template </strong><br />? %s',
	'LOG_TEMPLATE_EDIT'				=> '<strong>แก้ไขกลุ่ม Template <em>%1$s</em></strong><br />? %2$s',
	'LOG_TEMPLATE_EDIT_DETAILS'		=> '<strong>แก้ไขรายละเอียด Template </strong><br />? %s',
	'LOG_TEMPLATE_EXPORT'			=> '<strong>ส่งกลุ่ม Template ออก</strong><br />? %s',
	'LOG_TEMPLATE_REFRESHED'		=> '<strong>Refreshed กลุ่ม Template </strong><br />? %s',

	'LOG_THEME_ADD_DB'			=> '<strong>เพิ่ม Theme ใหม่เข้าฐานข้อมูล</strong><br />? %s',
	'LOG_THEME_ADD_FS'			=> '<strong>เพิ่มธีมใหม่เข้าระบบไฟล์</strong><br />? %s',
	'LOG_THEME_DELETE'			=> '<strong>ลบธีม</strong><br />? %s',
	'LOG_THEME_EDIT_DETAILS'	=> '<strong>แก้ไขรายละเอียดธีม</strong><br />? %s',
	'LOG_THEME_EDIT'			=> '<strong>แก้ไขธีม<em>%1$s</em></strong>',
	'LOG_THEME_EDIT_FILE'		=> '<strong>แก้ไข Theme <em>%1$s</em></strong><br />? แก้ไขไฟล์ <em>%2$s</em>',
	'LOG_THEME_EXPORT'			=> '<strong>ส่ง Theme ออก</strong><br />? %s',
	'LOG_THEME_REFRESHED'		=> '<strong>Refreshed  Theme </strong><br />? %s',

	'LOG_UPDATE_DATABASE'	=> '<strong>อัพเดท ฐานข้อมูล จาก เวอร์ชัน %1$sไปเวอร์ชัน %2$s</strong>',
	'LOG_UPDATE_PHPBB'		=> '<strong>อัพเดท phpBB จาก เวอร์ชัน %1$sไปเวอร์ชัน %2$s</strong>',

	'LOG_USER_ACTIVE'		=> '<strong>ผู้ใช้ที่ใช้งานได้</strong><br />? %s',
	'LOG_USER_BAN_USER'		=> '<strong>แบนผู้ใช้ผ่านทาง user management</strong> ด้วยเหตุผล “<em>%1$s</em>”<br />? %2$s',
	'LOG_USER_BAN_IP'		=> '<strong>แบน IP ผ่านทาง user management</strong> ด้วยเหตุผล “<em>%1$s</em>”<br />? %2$s',
	'LOG_USER_BAN_EMAIL'	=> '<strong>แบน e-mail ผ่านทาง user management</strong> ด้วยเหตุผล “<em>%1$s</em>”<br />? %2$s',
	'LOG_USER_DELETED'		=> '<strong>ลบผู้ใช้</strong><br />? %s',
	'LOG_USER_DEL_ATTACH'	=> '<strong>ลบทุกไฟล์แนบที่เป็นของผู้ใช้</strong><br />? %s',
	'LOG_USER_DEL_AVATAR'	=> '<strong>ลบภาพประจำตัวของผู้ใช้</strong><br />? %s',
	'LOG_USER_DEL_POSTS'	=> '<strong>ลบทุกโพสที่เป็นของผู้ใช้</strong><br />? %s',
	'LOG_USER_DEL_SIG'		=> '<strong>ลบลายเซ็นต์ของผู้ใช้</strong><br />? %s',
	'LOG_USER_INACTIVE'		=> '<strong>ผู้ใช้ที่ใช้งานไม่ได้</strong><br />? %s',
	'LOG_USER_MOVE_POSTS'	=> '<strong>ย้ายโพสของผู้ใช้</strong><br />?โพสโดย “%1$s”ไปที่ forum “%2$s”',
	'LOG_USER_NEW_PASSWORD'	=> '<strong>เปลี่ยน password ของผู้ใช้</strong><br />? %s',
	'LOG_USER_REACTIVATE'	=> '<strong>Forced user account reactivation</strong><br />? %s',
	'LOG_USER_UPDATE_EMAIL'	=> '<strong>ผู้ใช้ “%1$s” เปลี่ยน e-mail</strong><br />? จาก “%2$s” เป็น “%3$s”',
	'LOG_USER_UPDATE_NAME'	=> '<strong>เปลี่ยนชื่อผู้ใช้</strong><br />? จาก “%1$s” เป็น “%2$s”',
	'LOG_USER_USER_UPDATE'	=> '<strong>อัพเดทรายละเอียดผู้ใช้</strong><br />? %s',

	'LOG_USER_ACTIVE_USER'		=> '<strong>ทำให้บัญชีผู้ใช้ ใช้งานได้</strong>',
	'LOG_USER_DEL_AVATAR_USER'	=> '<strong>ลบภาพประจำตัวผู้ใช้</strong>',
	'LOG_USER_DEL_SIG_USER'		=> '<strong>ลบลายเซ็นต์ผู้ใช้</strong>',
	'LOG_USER_FEEDBACK'			=> '<strong>เพิ่ม feedback ของผู้ใช้</strong><br />? %s',
	'LOG_USER_GENERAL'			=> '<strong>เพิ่มข้อมูล:</strong><br />? %s',
	'LOG_USER_INACTIVE_USER'	=> '<strong>บัญชีผู้ใช้ที่ไม่สามารถใช้งานได้</strong>',
	'LOG_USER_LOCK'				=> '<strong>ผู้ใช้ล็อกกระทู้ที่เป็นเจ้าของ</strong><br />? %s',
	'LOG_USER_MOVE_POSTS_USER'	=> '<strong>ย้ายโพสทั้งหมดไปที่ forum</strong>? %s',
	'LOG_USER_REACTIVATE_USER'	=> '<strong>Forced user account reactivation</strong>',
	'LOG_USER_UNLOCK'			=> '<strong>ผู้ใช้ปลดล็อกกระทู้ที่เป็นเจ้าของ</strong><br />? %s',
	'LOG_USER_WARNING'			=> '<strong>เพิ่มการเตือนผู้ใช้</strong><br />? %s',
	'LOG_USER_WARNING_BODY'		=> '<strong>คำเตือนต่อไปนี้ถูกส่งไปที่ผู้ใช้</strong><br />? %s',

	'LOG_USER_GROUP_CHANGE'			=> '<strong>ผู้ใช้เปลี่ยนค่ากลุ่มเริ่มต้น</strong><br />? %s',
	'LOG_USER_GROUP_DEMOTE'			=> '<strong>ผู้ใช้ลดระดับจากกลุ่มผู้ใช้</strong><br />? %s',
	'LOG_USER_GROUP_JOIN'			=> '<strong>ผู้ใช้เข้าร่วมกลุ่ม</strong><br />? %s',
	'LOG_USER_GROUP_JOIN_PENDING'	=> '<strong>ผู้ใช้เข้าร่วมกลุ่มและต้องได้รับการอนุมัติ</strong><br />? %s',
	'LOG_USER_GROUP_RESIGN'			=> '<strong>ผู้ใช้ลาออกจากกลุ่ม</strong><br />? %s',

	'LOG_WORD_ADD'			=> '<strong>เพิ่มการกรองคำหยาบ</strong><br />? %s',
	'LOG_WORD_DELETE'		=> '<strong>ลบการกรองคำหยาบ</strong><br />? %s',
	'LOG_WORD_EDIT'			=> '<strong>แก้ไขการกรองคำหยาบ</strong><br />? %s',
	'SUBMIT'				=> ' ตั้งค่า ',
	)
);

?>