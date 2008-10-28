<?php
/** 
* ภาษาไทย เวอร์ชั่น 1.0.0 
* 05/06/2551 
* ไฟล์ภาษาไทยสำหรับ PHPBB3 โดย www.mindphp.com และ www.phpbbthailand.com
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

$lang = array_merge($lang, array(
	'ACTIVE_TOPICS'			=> 'Active topics',
	'ANNOUNCEMENTS'			=> 'ประกาศ',

	'FORUM_PERMISSIONS'		=> 'การอนุญาตของคุณในบอร์ดนี้',

	'ICON_ANNOUNCEMENT'		=> 'ประกาศ',
	'ICON_STICKY'			=> 'ปักหมุด',

	'LOGIN_NOTIFY_FORUM'	=> 'คุณได้รับแจ้งจาก Topic นี้ให้ login ก่อนจึงจะสามารถเข้าใช้งานได้',

	'MARK_TOPICS_READ'		=> 'บันทึกว่าอ่านทุกหัวข้อแล้ว',

	'NEW_POSTS_HOT'			=> 'โพสต์ใหม่ [ ยอดฮิต ]',
	'NEW_POSTS_LOCKED'		=> 'โพสต์ใหม่ [ ปิดหัวข้อ ]',
	'NO_NEW_POSTS_HOT'		=> 'ไม่มีโพสต์ใหม่ [ ยอดฮิต ]',
	'NO_NEW_POSTS_LOCKED'	=> 'ไม่มีโพสต์ใหม่ [ ปิดหัวข้อ ]',
	'NO_READ_ACCESS'		=> 'บอร์ดนี้สงวนสิททิ์ให้เฉพาะสมาชิกเท่านั้น กรุณาสมัครสมาชิกและเข้าสู่ระบบ !',

	'POST_FORUM_LOCKED'		=> 'บอร์ดนี้ถูกล็อกไว้',

	'TOPICS_MARKED'			=> 'บันทึกว่าอ่านทุกหัวข้อแล้ว',

	'VIEW_FORUM'			=> 'บอร์ด',
	'VIEW_FORUM_TOPIC'		=> '1 หัวข้อ',
	'VIEW_FORUM_TOPICS'		=> '%d หัวข้อ',
));

?>