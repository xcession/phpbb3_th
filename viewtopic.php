<?php
// Modified by xcession

/**
*
* viewtopic [Thai]
*
* @package language
* @version $Id: viewtopic.php 8775 2008-08-21 15:41:12Z Kellanved $
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
	'ATTACHMENT'						=> 'แนบไฟล์',
	'ATTACHMENT_FUNCTIONALITY_DISABLED'	=> 'ส่วนการใช้งานแนบไฟล์ไม่ได้เปิดใช้งาน',

	'BOOKMARK_ADDED'		=> 'บันทึกกระทู้เข้า รายการโปรด เรียบร้อยแล้ว', //CHECK
	'BOOKMARK_ERR'			=> 'Bookmarking the topic failed. Please try again.',
	'BOOKMARK_REMOVED'		=> 'ลบกระทู้จากรายการโปรด เรียบร้อยแล้ว',
	'BOOKMARK_TOPIC'		=> 'รายการโปรด',
	'BOOKMARK_TOPIC_REMOVE'	=> 'ลบออกจากรายการโปรด',
	'BUMPED_BY'				=> 'Last bumped by %1$s on %2$s', //TODO
	'BUMP_TOPIC'			=> 'Bump topic', //TODO

	'CODE'					=> 'Code', //CHECK

	'DELETE_TOPIC'			=> 'ลบกระทู้',
	'DOWNLOAD_NOTICE'		=> 'คุณไม่มีสิทธิ์ที่จะทำการดูไฟล์ที่แนบมาในกระทู้',

	'EDITED_TIMES_TOTAL'	=> 'แก้ไขล่าสุดโดย %1$s เมื่อ %2$s, แก้ไขแล้ว %3$d ครั้ง',
	'EDITED_TIME_TOTAL'		=> 'แก้ไขล่าสุดโดย %1$s เมื่อ %2$s, แก้ไขแล้ว %3$d ครั้ง',
	'EMAIL_TOPIC'			=> 'E-mail เพื่อน',
	'ERROR_NO_ATTACHMENT'	=> 'ไม่สามารถเลือก file ที่เปิดใช้งานอยู่ได้', //CHECK

	'FILE_NOT_FOUND_404'	=> 'ไฟล์ <strong>%s</strong> ไมมีอยู่ในฐานข้อมูล', //CHECK
	'FORK_TOPIC'			=> 'คัดลอกกระทู้',

	'LINKAGE_FORBIDDEN'		=> 'คุณไม่ได้รับอนุญาตให้ดาวน์โหลดหรือ เข้าใช้งาน site นี้', //CHECK
	'LOGIN_NOTIFY_TOPIC'	=> 'คุณได้รับแจ้งจาก Topic นี้ให้ทำการ login ก่อนจึงจะสามารถเข้าใช้งานได้', //TODO
	'LOGIN_VIEWTOPIC'		=> 'เว็บบอร์ดนี้อนุญาตเฉพาะสมาชิกเท่านั้น',

	'MAKE_ANNOUNCE'				=> 'เปลี่ยนเป็น “ประกาศ”',
	'MAKE_GLOBAL'				=> 'เปลี่ยนเป็น “ประกาศโดยรวม”',
	'MAKE_NORMAL'				=> 'เปลี่ยนเป็น “ปกติ”', //CHECK
	'MAKE_STICKY'				=> 'เปลี่ยนเป็น “ปักหมุด”',
	'MAX_OPTIONS_SELECT'		=> 'คุณเลือกได้ <strong>%d</strong> ตัวเลือก', //CHECK
	'MAX_OPTION_SELECT'			=> 'คุณเลือกได้ <strong>1</strong> ตัวเลือก', //CHECK
	'MISSING_INLINE_ATTACHMENT'	=> 'ไฟล์แนบนี้ <strong>%s</strong> ไม่มีอยู่แล้ว', //CHECK
	'MOVE_TOPIC'				=> 'ย้ายกระทู้',

	'NO_ATTACHMENT_SELECTED'=> 'คุณไม่ได้เลือกไฟล์แนบเพื่อที่จะดูหรือดาวน์โหลด',
	'NO_NEWER_TOPICS'		=> 'ไม่มีกระทู้ใหม่ในบอร์ดนี้', //CHECK
	'NO_OLDER_TOPICS'		=> 'ไม่มีกระทู้เก่าในบอร์ดนี้', //CHECK
	'NO_UNREAD_POSTS'		=> 'ไม่มีโพสต์ที่คุณยังไม่ได้อ่านในกระทู้นี้',
	'NO_VOTE_OPTION'		=> 'คุณต้องระบุตัวเลือกที่ต้องการโหวต',
	'NO_VOTES'				=> 'ไม่มีการโหวต',

	'POLL_ENDED_AT'			=> 'แบบสำรวจสิ้นสุดเมื่อ %s',
	'POLL_RUN_TILL'			=> 'แบบสำรวจเริ่มเมื่อ %s',
	'POLL_VOTED_OPTION'		=> 'หัวข้อที่คุณเลือกโหวต',
	'PRINT_TOPIC'			=> 'ตัวอย่างพิมพ์', //CHECK

	'QUICK_MOD'				=> 'เครื่องมือผู้ดูแลบอร์ด', //CHECK
	'QUOTE'					=> 'คำพูด', //CHECK

	'REPLY_TO_TOPIC'		=> 'ตอบกระทู้', //CHECK
	'RETURN_POST'			=> '%sกลับไปยังโพต์ของคุณ%s', //CHECK

	'SUBMIT_VOTE'			=> 'ทำการโหวต',

	'TOTAL_VOTES'			=> 'โหวตทั้งหมด',

	'UNLOCK_TOPIC'			=> 'ปลดล็อคกระทู้',

	'VIEW_INFO'				=> 'รายละเอียดโพสต์',
	'VIEW_NEXT_TOPIC'		=> 'กระทู้ถัดไป',
	'VIEW_PREVIOUS_TOPIC'	=> 'กระทู้ก่อนหน้า',
	'VIEW_RESULTS'			=> 'แสดงผลลัพธ์',
	'VIEW_TOPIC_POST'		=> '1 โพสต์',
	'VIEW_TOPIC_POSTS'		=> '%d โพสต์',
	'VIEW_UNREAD_POST'		=> 'โพสต์แรกที่ยังไม่ได้อ่าน', //CHECK
	'VISIT_WEBSITE'			=> 'www',
	'VOTE_SUBMITTED'		=> 'ผลโหวตของคุณถูกบันทึกเรียบร้อยแล้ว',
	'VOTE_CONVERTED'		=> 'ไม่รองรับการเปลี่ยนผลการสำรวจ สำหรับการสำรวจที่แปลงมา', //CHECK

));

?>