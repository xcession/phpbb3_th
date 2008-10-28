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
	'ATTACHMENT'						=> 'แนบไฟล์',
	'ATTACHMENT_FUNCTIONALITY_DISABLED'	=> 'ส่วนการใช้งานแนบไฟล์ไม่ได้เปิดใช้งาน.',

	'BOOKMARK_ADDED'		=> 'เก็บหัวข้อเข้า รายการโปรด เรียบร้อยแล้ว',
	'BOOKMARK_REMOVED'		=> 'ลบหัวข้อจาก รายการโปรด เรียบร้อยแล้ว.',
	'BOOKMARK_TOPIC'		=> 'รายการโปรด',
	'BOOKMARK_TOPIC_REMOVE'	=> 'ลบออกจากรายการโปรด',
	'BUMPED_BY'				=> 'Last bumped by %1$s on %2$s.',
	'BUMP_TOPIC'			=> 'Bump topic',

	'CODE'					=> 'โค้ด',

	'DELETE_TOPIC'			=> 'ลบหัวข้อ',
	'DOWNLOAD_NOTICE'		=> 'คุณไม่มีสิทธิ์ที่จะทำการดูไฟล์ที่แนบมาในกระทู้',

	'EDITED_TIMES_TOTAL'	=> 'แก้ไขล่าสุดโดย %1$s เมื่อ %2$s, แก้ไขแล้ว %3$d ครั้ง.',
	'EDITED_TIME_TOTAL'		=> 'แก้ไขล่าสุดโดย %1$s เมื่อ %2$s, แก้ไขแล้ว %3$d ครั้ง',
	'EMAIL_TOPIC'			=> 'อีเมล์เพื่อน',
	'ERROR_NO_ATTACHMENT'	=> 'ไม่สามารถเลือก file ที่เปิดใช้งานอยู่ได้',

	'FILE_NOT_FOUND_404'	=> 'ไฟล์ <strong>%s</strong> ไมมีอยู่ในฐานข้อมูล.',
	'FORK_TOPIC'			=> 'คัดลอกหัวข้อ',

	'LINKAGE_FORBIDDEN'		=> 'คุณไม่ได้รับอนุญาตให้ download หรือ เข้าใช้งาน site นี้',
	'LOGIN_NOTIFY_TOPIC'	=> 'คุณได้รับแจ้งจาก Topic นี้ให้ทำการ login ก่อนจึงจะสามารถเข้าใช้งานได้',
	'LOGIN_VIEWTOPIC'		=> 'เวบบอร์ดนี้อนุญาตเฉพาะสมาชิกเท่านั้น',

	'MAKE_ANNOUNCE'				=> 'เปลี่ยนเป็น “Announcement”',
	'MAKE_GLOBAL'				=> 'เปลี่ยนเป็น “Global”',
	'MAKE_NORMAL'				=> 'เปลี่ยนเป็น “Standard Topic”',
	'MAKE_STICKY'				=> 'เปลี่ยนเป็น “Sticky”',
	'MAX_OPTIONS_SELECT'		=> 'You may select up to <strong>%d</strong> options',
	'MAX_OPTION_SELECT'			=> 'You may select <strong>1</strong> option',
	'MISSING_INLINE_ATTACHMENT'	=> 'The attachment <strong>%s</strong> is no longer available',
	'MOVE_TOPIC'				=> 'ย้ายหัวข้อ',

	'NO_ATTACHMENT_SELECTED'=> 'คุณไม่มีสิทธิ์ที่จะทำการดูไฟล์ที่แนบมาในกระทู้',
	'NO_NEWER_TOPICS'		=> 'ไม่มีกระทู้ใหม่ใน Forum นี้',
	'NO_OLDER_TOPICS'		=> 'ไม่มีกระทู้เก่าใน Forum นี้',
	'NO_UNREAD_POSTS'		=> 'ไม่มี ข้อความใหม่ ที่คุณยังไม่ได้อ่านใน Topic นี้ ',
	'NO_VOTE_OPTION'		=> 'คุณต้องเลือกหัวข้อที่ต้องการโหวต',
	'NO_VOTES'				=> 'ไม่โหวต',

	'POLL_ENDED_AT'			=> 'Poll ended at %s',
	'POLL_RUN_TILL'			=> 'Poll runs till %s',
	'POLL_VOTED_OPTION'		=> 'หัวข้อที่คุณเลือกโหวต',
	'PRINT_TOPIC'			=> 'ตัวอย่างพิมพ์',

	'QUICK_MOD'				=> 'เครื่องมือผู้ดูแลบอร์ด',
	'QUOTE'					=> 'คำพูด',

	'REPLY_TO_TOPIC'		=> 'กลับไปยังกระทู้',
	'RETURN_POST'			=> '%sกลับไปยังข้อความที่คุณโพสต์%s',

	'SUBMIT_VOTE'			=> 'ทำการโหวต',

	'TOTAL_VOTES'			=> 'โหวตทั้งหมด',

	'UNLOCK_TOPIC'			=> 'ปลดล็อกหัวข้อ',

	'VIEW_INFO'				=> 'รายละเอียดโพสต์',
	'VIEW_NEXT_TOPIC'		=> 'หัวข้อถัดไป',
	'VIEW_PREVIOUS_TOPIC'	=> 'หัวข้อก่อนหน้า',
	'VIEW_RESULTS'			=> 'แสดงผลลัพธ์',
	'VIEW_TOPIC_POST'		=> '1 โพสต์',
	'VIEW_TOPIC_POSTS'		=> '%d โพสต์',
	'VIEW_UNREAD_POST'		=> 'First unread post',
	'VISIT_WEBSITE'			=> 'www',
	'VOTE_SUBMITTED'		=> 'ผลโหวตของคุณถูกคำนวณเรียบร้อยแล้ว',
	'VOTE_CONVERTED'		=> 'ไม่รองรับการเปลี่ยนผลการสำรวจ สำหรับการสำรวจที่แปลงมา',

));

?>