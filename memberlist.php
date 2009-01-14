<?php
// Modified by xcession

/**
*
* memberlist [Thai]
*
* @package language
* @version $Id: memberlist.php 8574 2008-05-29 13:59:47Z Kellanved $
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

$lang = array_merge($lang, array(
	'ABOUT_USER'			=> 'โปรไฟล์',
	'ACTIVE_IN_FORUM'		=> 'บอร์ดที่ใช้งานมากสุด',
	'ACTIVE_IN_TOPIC'		=> 'กระทู้ที่ใช้งานมากสุด',
	'ADD_FOE'				=> 'เพิ่มศัตรู', //CHECK
	'ADD_FRIEND'			=> 'เพิ่มเพื่อน',
	'AFTER'					=> 'หลังจาก',

	'ALL'					=> 'ทั้งหมด',

	'BEFORE'				=> 'ก่อนหน้า',

	'CC_EMAIL'				=> 'ส่งสำเนา E-mail นี้ถึงตัวคุณเอง',
	'CONTACT_USER'			=> 'ชื่อผู้ติดต่อ', //CHECK

	'DEST_LANG'				=> 'ภาษา',
	'DEST_LANG_EXPLAIN'		=> 'เลือกภาษาที่เหมาะสมกับผู้รับข้อความ',

	'EMAIL_BODY_EXPLAIN'	=> 'ข้อความที่จะส่ง เป็น ข้อความเปล่า ไม่สามารถใช้ HTML หรือ BBCode ได้  ที่อยู่ในการส่งข้อความกลับ ถูกกำหนดให้เป็น E-mail ของคุณ',
	'EMAIL_DISABLED'		=> 'ขออภัย ฟังก์ชันการส่งเมล์ไม่สามารถใช้งานได้',
	'EMAIL_SENT'			=> 'E-mail ถูกส่งเรียบร้อยแล้ว',
	'EMAIL_TOPIC_EXPLAIN'	=> 'ข้อความที่จะส่ง เป็น ข้อความเปล่า ไม่สามารถใช้ HTML หรือ BBCode ได้ ข้อมูลกระทู้ได้ถูกรวมไว้ในข้อความนี้แล้ว ที่อยู่ในการส่งข้อความกลับ ถูกกำหนดให้เป็น E-mail ของคุณ',
	'EMPTY_ADDRESS_EMAIL'	=> 'คุณต้องระบบที่อยู่ E-mail ของผู้รับที่ถูกต้อง',
	'EMPTY_MESSAGE_EMAIL'	=> 'คุณต้องกรอกข้อความที่จะส่ง E-mail',
	'EMPTY_MESSAGE_IM'		=> 'คุณต้องกรอกข้อความที่จะส่ง',
	'EMPTY_NAME_EMAIL'		=> 'คุณต้องระบุชื่อจริงของผู้รับ',
	'EMPTY_SUBJECT_EMAIL'	=> 'คุณจำเป็นต้องใส่หัวข้อ E-mail ด้วย',
	'EQUAL_TO'				=> 'เท่ากับ',

	'FIND_USERNAME_EXPLAIN'	=> 'การค้นหาสมาชิก คุณไม่จำเป็นต้องกรอกให้ครบทุกช่อง ใช้เครื่องหมาย * ในการระบบข้อมูลบางเพียงส่วน เมื่อคุณกรอกวันที่ กรุณากรอกตามรูปแบบ <kbd>YYYY-MM-DD</kbd> ตัวอย่างเช่น <samp>2004-02-29</samp> กรุณาเลือกชื่อผู้ใช้อย่างน้อยหนึ่งชื่อ และเลือกเพื่อให้ย้อนกลับมาหน้านี้', //CHECK
	'FLOOD_EMAIL_LIMIT'		=> 'คุณไม่สามารถส่ง E-mail ได้ในขณะนี้ กรุณาส่งใหม่อีกครั้ง',

	'GROUP_LEADER'			=> 'ผู้นำกลุ่ม',

	'HIDE_MEMBER_SEARCH'	=> 'ซ่อนการค้นหาสมาชิก',

	'IM_ADD_CONTACT'		=> 'เพิ่มชื่อผู้ติดต่อ', //CHECK
	'IM_AIM'				=> 'คุณต้องติดตั้งโปรแกรม AOL Instant Messenger ก่อนจึงจะสามารถใช้งานได้',
	'IM_AIM_EXPRESS'		=> 'AIM Express', //CHECK
	'IM_DOWNLOAD_APP'		=> 'ดาวน์โหลด',
	'IM_ICQ'				=> 'ผู้ใช้อาจเลือกที่จะไม่รับข้อความเชิญชวนได้',
	'IM_JABBER'				=> 'ผู้ใช้อาจเลือกที่จะไม่รับข้อความเชิญชวนได้',
	'IM_JABBER_SUBJECT'		=> 'นี่คือข้อความอัตโนมัติ กรุณาอย่าตอบกลับข้อความนี้จาก %1$s เมื่อ %2$s',
	'IM_MESSAGE'			=> 'ข้อความของคุณ',
	'IM_MSNM'				=> 'คุณต้องติดตั้งโปรแกรม Windows Messenger ก่อนจึงจะสามารถใช้งานได้',
	'IM_MSNM_BROWSER'		=> 'บราว์เซอร์ของคุณไม่รองรับการทำงานนี้',
	'IM_MSNM_CONNECT'		=> 'ไม่สามารถเชื่อมต่อ MSN ได้\nกรุณาเชื่อมต่อ MSN ภายหลัง', //CHECK
	'IM_NAME'				=> 'ชื่อของคุณ',
	'IM_NO_DATA'			=> 'There is no suitable contact information for this user.', //TODO
	'IM_NO_JABBER'			=> 'ขอโทษค่ะ ข้อความจากผู้ใช้ Jabber ไม่รองรับเซิร์ฟเวอร์นี้ คุณต้องเข้าใช้งาน Jabber จากระบบของคุณเพื่อส่งข้อความหาผู้รับเอง', //CHECK
	'IM_RECIPIENT'			=> 'ผู้รับ',
	'IM_SEND'				=> 'ส่งข้อความ',
	'IM_SEND_MESSAGE'		=> 'ส่งข้อความ',
	'IM_SENT_JABBER'		=> 'ข้อความของคุณถึง %1$s ถูกส่งเรียบร้อยแล้ว',
	'IM_USER'				=> 'ส่งข้อความส่วนตัว', //CHECK

	'LAST_ACTIVE'				=> 'ใช้งานล่าสุด',
	'LESS_THAN'					=> 'น้อยกว่า',
	'LIST_USER'					=> 'สมาชิก 1 ท่าน',
	'LIST_USERS'				=> 'สมาชิก %d ท่าน',
	'LOGIN_EXPLAIN_LEADERS'		=> 'คุณจำเป็นต้องลงทะเบียนและเข้าใช้งานในระบบก่อน จึงจะสามารถดูรายชื่อทีมผู้ดูแลได้',
	'LOGIN_EXPLAIN_MEMBERLIST'	=> 'คุณจำเป็นต้องลงทะเบียนและเข้าใช้งานในระบบก่อน จึงจะสามารถดูรายชื่อสมาชิกได้',
	'LOGIN_EXPLAIN_SEARCHUSER'	=> 'คุณจำเป็นต้องลงทะเบียนและเข้าใช้งานในระบบก่อน จึงจะสามารถค้นหาสมาชิกได้',
	'LOGIN_EXPLAIN_VIEWPROFILE'	=> 'คุณจำเป็นต้องลงทะเบียนและเข้าใช้งานในระบบก่อน จึงจะสามารถดูข้อมูลส่วนตัวได้',

	'MORE_THAN'				=> 'มากกว่า',

	'NO_EMAIL'				=> 'คุณไม่มีสิทธิ์ในการส่ง E-mail หาผู้ใช้นี้',
	'NO_VIEW_USERS'			=> 'คุณไม่สามารถดูรายชื่อสมาชิกและประวัติส่วนตัวของสมาชิกได้',

	'ORDER'					=> 'คำสั่ง', //CHECK
	'OTHER'					=> 'อื่น', //CHECK

	'POST_IP'				=> 'โพสต์จาก IP/domain', //CHECK

	'RANK'					=> 'ระดับขั้น',
	'REAL_NAME'				=> 'ชื่อผู้รับ',
	'RECIPIENT'				=> 'ผู้รับ',
	'REMOVE_FOE'			=> 'ลบศัครู', //CHECK
	'REMOVE_FRIEND'			=> 'ลบเพื่อน',

	'SEARCH_USER_POSTS'		=> 'ค้นหาโพสต์ของผู้ใช้',
	'SELECT_MARKED'			=> 'เลือก',
	'SELECT_SORT_METHOD'	=> 'เลือกการเรียงลำดับ',
	'SEND_AIM_MESSAGE'		=> 'ส่งข้อความ AIM',
	'SEND_ICQ_MESSAGE'		=> 'ส่งข้อความ ICQ',
	'SEND_IM'				=> 'ส่งข้อความส่วนตัว', //CHECK
	'SEND_JABBER_MESSAGE'	=> 'ส่งข้อความ Jabber',
	'SEND_MESSAGE'			=> 'ข้อความ',
	'SEND_MSNM_MESSAGE'		=> 'ส่งข้อความ MSN',
	'SEND_YIM_MESSAGE'		=> 'ส่งข้อความ Yahoo',
	'SORT_EMAIL'			=> 'E-mail',
	'SORT_LAST_ACTIVE'		=> 'ใช้งานครั้งล่าสุด',
	'SORT_POST_COUNT'		=> 'จำนวนที่โพสต์',

	'USERNAME_BEGINS_WITH'	=> 'ชื่อผู้ใช้เริ่มต้นด้วย',
	'USER_ADMIN'			=> 'Administrate user', //TODO
	'USER_BAN'				=> 'Banning', //TODO
	'USER_FORUM'			=> 'User statistics', //TODO
	'USER_ONLINE'			=> 'ออนไลน์',
	'USER_PRESENCE'			=> 'Board presence', //TODO

	'VIEWING_PROFILE'		=> 'ดูประวัติส่วนตัว - %s',
	'VISITED'				=> 'ใช้งานล่าสุด',

	'WWW'					=> 'เว็บไซต์',
));

?>