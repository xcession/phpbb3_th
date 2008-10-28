<?php
// Modified by xcession

/**
*
* mcp [Thai]
*
* @package language
* @version $Id: mcp.php 8479 2008-03-29 00:22:48Z naderman $
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
	'ACTION'				=> 'Action',
	'ACTION_NOTE'			=> 'Action/Note',
	'ADD_FEEDBACK'			=> 'Add feedback',
	'ADD_FEEDBACK_EXPLAIN'	=> 'ถ้าคุณต้องการเพิ่มข้อความในช่องว่างนี้ ต้องเป็นกรอกตัวอักษรอย่างเดียวเท่านั้น  HTML, BBCode, etc.ไม่สามารถใช้ได้',
	'ADD_WARNING'			=> 'Add warning',
	'ADD_WARNING_EXPLAIN'	=> 'การส่งข้อความเตือนให้ผู้ใช้งานทราบ ต้องเป็นกรอกตัวอักษรอย่างเดียวเท่านั้น  HTML, BBCode, etc.ไม่สามารถใช้ได้',
	'ALL_ENTRIES'			=> 'เลือกทั้งหมด',
	'ALL_NOTES_DELETED'		=> 'ข้อมูลทั้งหมด ถูกย้ายเรียบร้อยแล้ว',
	'ALL_REPORTS'			=> 'รายงานทั้งหมด',
	'ALREADY_REPORTED'		=> 'ข้อความนี้ถูกรายงานเรียบร้อยแล้ว',
	'ALREADY_WARNED'		=> 'การเตือนนี้ถูกใช้ในข้อความนี้.',
	'APPROVE'				=> 'อนุมัิติ',
	'APPROVE_POST'			=> 'อนุมัติข้อความ',
	'APPROVE_POST_CONFIRM'	=> 'คุณแน่ใจแล้วใช่ไหม ที่ต้องการให้ข้อความนี้ถูกอนุมัติก่อน?',
	'APPROVE_POSTS'			=> 'อนุมัติข้อความ',
	'APPROVE_POSTS_CONFIRM'	=> 'คุณแน่ใจแล้วใช่ไหม ที่ต้องการให้ข้อความนี้ถูกอนุมัติก่อน?',

	'CANNOT_MOVE_SAME_FORUM'=> 'คุณไม่สามารถย้ายกระทู้นี้ไป Forum อื่นได้',
	'CANNOT_WARN_ANONYMOUS'	=> 'คุณไม่สามารถแจ้งเตือนผู้ใช้งานที่ยังไม่ได้เป็นสมาชิกได้',
	'CANNOT_WARN_SELF'		=> 'คุณไม่สามารถแจ้งเตือนตนเองได้',
	'CAN_LEAVE_BLANK'		=> 'เป็นค่าว่าง',
	'CHANGE_POSTER'			=> 'เปลี่ยนผู้โพสต์',
	'CLOSE_REPORT'			=> 'ปิดรายงาน',
	'CLOSE_REPORT_CONFIRM'	=> 'คุณแน่ใจแล้วใช่ไหม ที่ต้องการปิดรายงานฉบับนี้?',
	'CLOSE_REPORTS'			=> 'ปิดรายงาน',
	'CLOSE_REPORTS_CONFIRM'	=> 'คุณแน่ใจแล้วใช่ไหม ที่ต้องการปิดรายงานฉบับนี้?',

	'DELETE_POSTS'				=> 'ลบข้อความ',
	'DELETE_POSTS_CONFIRM'		=> 'คุณแน่ใจแล้วใช่ไหม ที่ต้องการลบข้อความเหล่านี้?',
	'DELETE_POST_CONFIRM'		=> 'คุณแน่ใจแล้วใช่ไหม ที่ต้องการลบข้อความนี้?',
	'DELETE_REPORT'				=> 'ลบรายงาน',
	'DELETE_REPORT_CONFIRM'		=> 'คุณแน่ใจแล้วใช่ไหม ที่ต้องการลบรายงานนี้?',
	'DELETE_REPORTS'			=> 'ลบรายงาน',
	'DELETE_REPORTS_CONFIRM'	=> 'คุณแน่ใจแล้วใช่ไหม ที่ต้องการลบรายงานนี้?',
	'DELETE_SHADOW_TOPIC'		=> 'ลบกระทู้เงา',
	'DELETE_TOPICS'				=> 'ลบกระทู้ที่เลือก',
	'DELETE_TOPICS_CONFIRM'		=> 'ต้องการลบกระทู้นี้?',
	'DELETE_TOPIC_CONFIRM'		=> 'ต้องการลบกระทู้นี้?',
	'DISAPPROVE'				=> 'ไม่อนุมัิติ',
	'DISAPPROVE_REASON'			=> 'เหตุผลที่ไม่อนุมัิติ',
	'DISAPPROVE_POST'			=> 'ไม่อนุมัิติข้อความนี้',
	'DISAPPROVE_POST_CONFIRM'	=> 'ไม่ต้องการอนุมัิติข้อความนี้?',
	'DISAPPROVE_POSTS'			=> 'ไม่อนุมัิติข้อความเหล่านี้',
	'DISAPPROVE_POSTS_CONFIRM'	=> 'ไม่ต้องการอนุมัิติข้อความเหล่านี้?',
	'DISPLAY_LOG'				=> 'แสดงบอร์ดก่อนหน้านี้',
	'DISPLAY_OPTIONS'			=> 'แสดง options',

	'EMPTY_REPORT'					=> 'คุณต้องเขียนอธิบาย เมื่อคุณต้องการจะระบุเหตุผล',
	'EMPTY_TOPICS_REMOVED_WARNING'	=> 'เลือก หนึ่งหรือหลาย กระทู้ที่ต้องการย้ายจากฐานข้อมูล.',

	'FEEDBACK'				=> 'Feedback',
	'FORK'					=> 'คัดลอก',
	'FORK_TOPIC'			=> 'คัดลอกกระทู้',
	'FORK_TOPIC_CONFIRM'	=> '่ต้องการคัดลอกกระทู้นี้ ?',
	'FORK_TOPICS'			=> 'เลือกคัดลอกกระทู้นี้',
	'FORK_TOPICS_CONFIRM'	=> '่ต้องการคัดลอกกระทู้เหล่านี้ ? ',
	'FORUM_DESC'			=> 'คำอธิบายเว็บบอร์ด',
	'FORUM_NAME'			=> 'ชื่อเว็บบอร์ด',
	'FORUM_NOT_EXIST'		=> 'ไม่มีบอร์ดที่เลือก ',
	'FORUM_NOT_POSTABLE'	=> 'บอร์ดที่เลือก ไม่มีข้อความใดๆ ',
	'FORUM_STATUS'			=> 'สถานะเว็บบอร์ด',
	'FORUM_STYLE'			=> 'หน้าตาเว็บบอร์ด',

	'GLOBAL_ANNOUNCEMENT'	=> 'ประกาศทั่วไป',

	'IP_INFO'				=> 'ข้อมูลเกี่ยวกับ IP address',
	'IPS_POSTED_FROM'		=> 'ผู้ใช้โพสต์ข้อความจาก IP addresses ',

	'LATEST_LOGS'				=> ' 5 log ล่าสุด',
	'LATEST_REPORTED'			=> ' 5 รายงานล่าสุด',
	'LATEST_UNAPPROVED'			=> ' 5 ข้อความที่รอการอนุมัติ',
	'LATEST_WARNING_TIME'		=> 'Latest warning issued',
	'LATEST_WARNINGS'			=> 'Latest 5 warnings',
	'LEAVE_SHADOW'				=> 'เก็บชื่อกระทู้ไว้ที่บอร์ดเดิม ลิงค์ข้อมูลไปที่บอร์ดใหม่',
	'LIST_REPORT'				=> '1 รายงาน',
	'LIST_REPORTS'				=> '%d รายงาน',
	'LOCK'						=> 'ล๊อก',
	'LOCK_POST_POST'			=> 'ล๊อกข้อความ',
	'LOCK_POST_POST_CONFIRM'	=> '่ต้องการป้องกันการแก้ไขข้อความนี้?',
	'LOCK_POST_POSTS'			=> 'ล๊อกข้อความที่เลือก',
	'LOCK_POST_POSTS_CONFIRM'	=> 'ต้องการป้องกันการแก้ไขข้อความที่เลือก ไว้ ?',
	'LOCK_TOPIC_CONFIRM'		=> 'ที่ต้องการล๊อกกระทู้นี้ ?',
	'LOCK_TOPICS'				=> 'ล๊อกกระทู้ที่เลือก',
	'LOCK_TOPICS_CONFIRM'		=> 'ต้องการล๊อกกระทู้ที่เลือก ?',
	'LOGS_CURRENT_TOPIC'		=> 'ดู Log ณ ปัจจุบัน:',
	'LOGIN_EXPLAIN_MCP'			=> 'การจัดการบอร์ดต้องเข้าระบบก่อน',
	'LOGVIEW_VIEWTOPIC'			=> 'ดูกระทู้',
	'LOGVIEW_VIEWLOGS'			=> 'ดู Log กระทู้',
	'LOGVIEW_VIEWFORUM'			=> 'ดู บอร์ด',
	'LOOKUP_ALL'				=> 'ดู IP ทั้งหมด ',
	'LOOKUP_IP'					=> 'ดู IP',

	'MARKED_NOTES_DELETED'		=> ' สมาชิกที่เลือกถูกย้ายเรีบร้อยแล้ว',

	'MCP_ADD'						=> 'เพิ่มการแจ้งเตือน',

	'MCP_BAN'					=> 'การแบน',
	'MCP_BAN_EMAILS'			=> 'แบน E-mail',
	'MCP_BAN_IPS'				=> 'แบน IP',
	'MCP_BAN_USERNAMES'			=> 'แบน Usernames',

	'MCP_LOGS'						=> 'Log ของผู้จัดการบอร์ด',
	'MCP_LOGS_FRONT'				=> 'หน้าหลัก',
	'MCP_LOGS_FORUM_VIEW'			=> ' logs บอร์ด',
	'MCP_LOGS_TOPIC_VIEW'			=> ' log ของกระทู้',

	'MCP_MAIN'						=> 'หน้าแรก',
	'MCP_MAIN_FORUM_VIEW'			=> 'ดูหน้าบอร์ด',
	'MCP_MAIN_FRONT'				=> 'หน้าหลัก',
	'MCP_MAIN_POST_DETAILS'			=> 'รายละเอียดโพส',
	'MCP_MAIN_TOPIC_VIEW'			=> 'ดูกระทู้',
	'MCP_MAKE_ANNOUNCEMENT'			=> 'แก้ไข “ประกาศ”',
	'MCP_MAKE_ANNOUNCEMENT_CONFIRM'	=> '่ต้องการเปลี่ยน  “ประกาศ”?',
	'MCP_MAKE_ANNOUNCEMENTS'		=> 'การแก้ไขประกาศ”',
	'MCP_MAKE_ANNOUNCEMENTS_CONFIRM'=> '่ต้องการแก้ไข “ประกาศ” ที่เลือก ไว้?',
	'MCP_MAKE_GLOBAL'				=> 'การแก้ไข “ประกาศทั่วไป”',
	'MCP_MAKE_GLOBAL_CONFIRM'		=> '่ต้องการแก้ไข “ประกาศทั่วไป”?',
	'MCP_MAKE_GLOBALS'				=> 'การแก้ไข “ประกาศทั่วไป”',
	'MCP_MAKE_GLOBALS_CONFIRM'		=> '่ต้องการแก้ไข “ประกาศทั่วไป”?',
	'MCP_MAKE_STICKY'				=> 'ตั้งให้เป็น “Sticky”',
	'MCP_MAKE_STICKY_CONFIRM'		=> 'ต้องการปักหมุดกระทู้นี้ ?',
	'MCP_MAKE_STICKIES'				=> 'การแก้ไข “Stickies”',
	'MCP_MAKE_STICKIES_CONFIRM'		=> '่ต้องการแก้ไข “Stickies” ที่เลือก ?',
	'MCP_MAKE_NORMAL'				=> 'การแก้ไข “กระทู้มาตรฐาน',
	'MCP_MAKE_NORMAL_CONFIRM'		=> '่ต้องการแก้ไข “กระทู้มาตรฐาน” ที่เลือก ?',
	'MCP_MAKE_NORMALS'				=> 'การแก้ไข “กระทู้มาตรฐาน"',
	'MCP_MAKE_NORMALS_CONFIRM'		=>'่ต้องการแก้ไข “กระทู้มาตรฐาน” ที่เลือก ?',

	'MCP_NOTES'						=> 'บันทึกผู้ใช้งาน',
	'MCP_NOTES_FRONT'				=> 'หน้าหลัก',
	'MCP_NOTES_USER'				=> 'รายละเอียดผู้ใช้',

	'MCP_POST_REPORTS'				=> 'ประเด็นรายงานของข้อความนี้',

	'MCP_REPORTS'					=> 'รายงานโพสต์',
	'MCP_REPORT_DETAILS'			=> 'รายละเอียดรายงาน',
	'MCP_REPORTS_CLOSED'			=> 'รายงานที่ปิดแล้ว',
	'MCP_REPORTS_CLOSED_EXPLAIN'	=> 'นี่คือรายงานทั้งหมดที่ไม่มีการใช้งานแล้ว',
	'MCP_REPORTS_OPEN'				=> 'รายงานที่เปิดอยู่',
	'MCP_REPORTS_OPEN_EXPLAIN'		=> 'นี่คือรายงานทั้งหมดที่มีการจัดการอยู่',

	'MCP_QUEUE'								=> 'การอนุมัติ',
	'MCP_QUEUE_APPROVE_DETAILS'				=> 'รายละเอียดการอนุมัติ',
	'MCP_QUEUE_UNAPPROVED_POSTS'			=> 'ข้อความที่รอการอนุมัติ',
	'MCP_QUEUE_UNAPPROVED_POSTS_EXPLAIN'	=> 'นี่คือรายการข้อความทั้งหมดที่รอการอนุมัติ ก่อนที่ผู้ใช้งานจะเข้าใช้งาน',
	'MCP_QUEUE_UNAPPROVED_TOPICS'			=> 'กระทู้ที่รอการอนุมัติ',
	'MCP_QUEUE_UNAPPROVED_TOPICS_EXPLAIN'	=> 'นี่คือรายการกระทู้ทั้งหมดที่รอการอนุมัติ ก่อนที่ผู้ใช้งานจะเข้าใช้งาน',

	'MCP_VIEW_USER'			=> 'เรียกดูการแจ้งเตือนสำหรับรายผู้ใช้',

	'MCP_WARN'				=> 'การเตือน',
	'MCP_WARN_FRONT'		=> 'หน้าหลัก',
	'MCP_WARN_LIST'			=> 'รายการ เตือน',
	'MCP_WARN_POST'			=> 'เตือนเฉพาะข้อความ',
	'MCP_WARN_USER'			=> '',

	'MERGE_POSTS'			=> 'รวมข้อความ',
	'MERGE_POSTS_CONFIRM'	=> 'คุณแน่ใจใช่ไหม ที่ต้องการรวมข้อความเข้าด้วยกัน',
	'MERGE_TOPIC_EXPLAIN'	=> 'คุณสามารถรวมข้อความระหว่างกับกระทู้อื่นได้ ข้อความเหล่านี้จะไม่ถูกนำกลับมาและจะปรากฏเมื่อผู้ใช้ทำการโพสต์มันลงในข้อความใหม่<br />กรุณาเลือกเลขที่กระทู้ปลยทาง หรือ เลือกกระทู้จากการค้นหา้ ',
	'MERGE_TOPIC_ID'		=> 'Destination topic identification number',
	'MERGE_TOPICS'			=> 'รวมกระทู้เหล่านี้',
	'MERGE_TOPICS_CONFIRM'	=> 'คุณแน่ใจใช่ไหม ที่ต้องการรวมกระทู้ที่เลือก เข้าด้วยกัน?',
	'MODERATE_FORUM'		=> 'บอร์ดที่จัดการ',
	'MODERATE_TOPIC'		=> 'กระทู้ที่จัดการ',
	'MODERATE_POST'			=> 'ข้อความที่จัดการ',
	'MOD_OPTIONS'			=> 'Moderator options',
	'MORE_INFO'				=> 'Further information',
	'MOST_WARNINGS'			=> 'การแจ้งเตือนของผู้ใช้งาน',
	'MOVE_TOPIC_CONFIRM'	=> 'คุณแน่ใจไหมที่ต้องการย้ายกระทู้นี้ ไปที่บอร์ดใหม่?',
	'MOVE_TOPICS'			=> 'ย้ายกระทู้ที่เลือก',
	'MOVE_TOPICS_CONFIRM'	=> 'คุณแน่ใจใช่ไหม ที่ต้องการย้ายกระทู้นี้เข้าบอร์ดใหม่?',

	'NOTIFY_POSTER_APPROVAL'		=> 'รอการอนุมัติ?',
	'NOTIFY_POSTER_DISAPPROVAL'		=> 'ไม่ได้รับการอนุมัติ?',
	'NOTIFY_USER_WARN'				=> 'แจ้งผู้ใช้งานเกี่ยวกับการแจ้งเตือน?',
	'NOT_MODERATOR'					=> 'คุณไม่สามารถจัดการกับบอร์ดนี้ได้',
	'NO_DESTINATION_FORUM'			=> 'กรุณาเลือกบอร์ดปลายทาง',
	'NO_DESTINATION_FORUM_FOUND'	=> 'ไม่พบบอร์ดปลายทาง.',
	'NO_ENTRIES'					=> 'ไม่มี Log.',
	'NO_FEEDBACK'					=> 'ไม่มีการตอบกลับจากผู้ใช้งาน',
	'NO_FINAL_TOPIC_SELECTED'		=> 'คุณต้องเลือกข้อความปลายทางที่ต้องการรวม',
	'NO_MATCHES_FOUND'				=> 'ไม่สามารถจับคู่กันได้',
	'NO_POST'						=> 'คุณต้องเลือกข้อความปลายทางจากที่ผู้ใช้งานกำหนดให้',
	'NO_POST_REPORT'				=> 'ข้อความเหล่านี้ไม่มีรายงาน',
	'NO_POST_SELECTED'				=> 'คุณต้องเลือกการกระทำอย่างน้อยหนึ่งรายการ.',
	'NO_REASON_DISAPPROVAL'			=> 'กรุณาอธิบายเหตุผลของการไม่อนุมัติ',
	'NO_REPORT'						=> 'ไม่พบรายงาน',
	'NO_REPORTS'					=> 'ไม่พบรายงาน',	
	'NO_REPORT_SELECTED'			=>' คุณต้องเลือกการกระทำอย่างน้อยหนึ่งรายการ',
	'NO_TOPIC_ICON'					=> 'ไม่มี',
	'NO_TOPIC_SELECTED'				=> 'คุณต้องเลือกการกระทำอย่างน้อยหนึ่งรายการ',
	'NO_TOPICS_QUEUE'				=> 'ไม่มีกระทู้ที่รออนุมัติ',

	'ONLY_TOPIC'			=> 'เพียง "%s" กระทู้',
	'OTHER_USERS'			=> 'มีผู้ใช้งานท่านอื่นใช้ IP นี้',

	'POSTER'					=> 'ผู้โพสต์',
	'POSTS_APPROVED_SUCCESS'	=> 'ข้อความที่เลือกถูกอนุมััติเรียบร้อยแล้ว.',
	'POSTS_DELETED_SUCCESS'		=> 'ข้อความที่เลือกถูกลบออกจากฐานข้อมูลเรียบร้อยแล้ว',
	'POSTS_DISAPPROVED_SUCCESS'	=> 'ข้อความที่เลือกถูกไม่ได้รับการอนุมัติ',
	'POSTS_LOCKED_SUCCESS'		=> 'ข้อความที่เลือกถูกล๊อกเรียบร้อยแล้ว',
	'POSTS_MERGED_SUCCESS'		=> 'ข้อความที่เลือกถูกรวมกันเรียบร้อยแล้ว',
	'POSTS_UNLOCKED_SUCCESS'	=> 'ข้อความที่เลือกถูกปลดล๊อกเรียบร้อยแล้ว',
	'POSTS_PER_PAGE'			=> 'ข้อความทั้งหมด ต่อ หนึ่งหน้า',
	'POSTS_PER_PAGE_EXPLAIN'	=> '(กำหนดเป็น 0 สำหรับดูทุกโพส)',
	'POST_APPROVED_SUCCESS'		=> 'ข้อความที่เลือกถูกอนุมัติ',
	'POST_DELETED_SUCCESS'		=> 'ข้อความที่เลือกถูกลบออกจากฐานข้อมูลเรียบร้อยแล้ว',
	'POST_DISAPPROVED_SUCCESS'	=> 'ข้อความที่เลือกถูกไม่ได้รับการอนุมัติ',
	'POST_LOCKED_SUCCESS'		=> 'ข้อความถูกล๊อกเรียบร้อยแล้ว',
	'POST_NOT_EXIST'			=> 'ไม่พบข้อความที่คุณต้องการ',
	'POST_REPORTED_SUCCESS'		=> 'ข้อความที่คุณต้องการถูกรายงานเแล้ว.',
	'POST_UNLOCKED_SUCCESS'		=> 'ปลดล๊อกข้อความสำเร็จ',

	'READ_USERNOTES'			=> 'User notes',
	'READ_WARNINGS'				=> 'User warnings',
	'REPORTER'					=> 'ผู้รายงาน',
	'REPORTED'					=> 'ถูกรายงาน',
	'REPORTED_BY'				=> 'ถูกรายงานโดย',
	'REPORTED_ON_DATE'			=> 'on',
	'REPORTS_CLOSED_SUCCESS'	=> 'รายงานที่ถูกเลือกได้ปิดเรียบร้อยแล้ว',
	'REPORTS_DELETED_SUCCESS'	=> 'รายงานที่ถูกเลือกได้ลบเรียบร้อยแล้ว',
	'REPORTS_TOTAL'				=> 'จากทั้งหมด <strong>%d</strong> รายงาน ที่ถูกตรวจสอบ',
	'REPORTS_ZERO_TOTAL'		=> 'ไม่มีรายงานใดถูกอ่าน.',
	'REPORT_CLOSED'				=> 'รายงานฉบับนี้ถูกปิดแล้ว',
	'REPORT_CLOSED_SUCCESS'		=> 'รายงานที่ถูกเลือกได้ปิดเรียบร้อยแล้ว',
	'REPORT_DELETED_SUCCESS'	=> 'รายงานที่ถูกเลือกได้ลบเรียบร้อยแล้ว',
	'REPORT_DETAILS'			=> 'รายละเอียดรายงาน',
	'REPORT_MESSAGE'			=> 'รายงานในข้อความ',
	'REPORT_MESSAGE_EXPLAIN'	=> 'Use this form to report the selected message. Reporting should generally be used only if the message breaks forum rules.',
	'REPORT_NOTIFY'				=> 'Notify me',
	'REPORT_NOTIFY_EXPLAIN'		=> 'Informs you when your report is dealt with.',
	'REPORT_POST_EXPLAIN'		=> 'Use this form to report the selected post to the forum moderators and board administrators. Reporting should generally be used only if the post breaks forum rules.',
	'REPORT_REASON'				=> 'รายงานเหตุผล',
	'REPORT_TIME'				=> 'เวลารายงาน',
	'REPORT_TOTAL'				=> 'จากทั้งหมด <strong> 1 </strong> รายงาน ที่ถูกตรวจสอบ',
	'RESYNC'					=> 'Resync',
	'RETURN_MESSAGE'			=> '%sย้อนกลับไปยังข้อความเดิม%s',
	'RETURN_NEW_FORUM'			=> '%sย้อนกลับไปยัง Forum ใหม่%s',
	'RETURN_NEW_TOPIC'			=> '%sย้อนกลับไปยังกระทู้ใหม่%s',
	'RETURN_POST'				=> '%sย้อนกลับไปยังข้อความ%s',
	'RETURN_QUEUE'				=> '%sย้อนกลับไปยังลำดับ%s',
	'RETURN_REPORTS'			=> '%sย้อนกลับไปยังรายงาน%s',
	'RETURN_TOPIC_SIMPLE'		=> '%sย้อนกลับไปยังกระทู้%s',

	'SEARCH_POSTS_BY_USER'				=> 'ค้นหาโดย',
	'SELECT_ACTION'						=> 'เลือกรายการที่ต้องการ',
	'SELECT_FORUM_GLOBAL_ANNOUNCEMENT'	=> 'Please select the forum you wish this global announcement to be displayed.',
	'SELECT_FORUM_GLOBAL_ANNOUNCEMENTS'	=> 'One or more of the selected topics are global announcements. Please select the forum you wish these to be displayed.',
	'SELECT_MERGE'						=> 'เลือกเพื่อรวม',
	'SELECT_TOPICS_FROM'				=> 'เลือกกระทู้จาก',
	'SELECT_TOPIC'						=> 'เลือกกระทู้',
	'SELECT_USER'						=> 'เลือกสมาชิก',
	'SORT_ACTION'						=> 'Log action',
	'SORT_DATE'							=> 'วันที่',
	'SORT_IP'							=> 'IP',
	'SORT_WARNINGS'						=> 'การเตือน',
	'SPLIT_AFTER'						=> 'แยกจากการโพสที่เลือก',
	'SPLIT_FORUM'						=> 'บอร์ดสำหรับกระทู้ใหม่',
	'SPLIT_POSTS'						=> 'แยกจากการโพสที่เลือก',
	'SPLIT_SUBJECT'						=> 'หัวข้อกระทู้ใหม่',
	'SPLIT_TOPIC_ALL'					=> 'Split topic from selected posts',
	'SPLIT_TOPIC_ALL_CONFIRM'			=> 'คุณแน่ใจหรือ ที่จะแยกกระทู้ออกจากกัน?',
	'SPLIT_TOPIC_BEYOND'				=> 'แยกหัวข้อที่เลือก',
	'SPLIT_TOPIC_BEYOND_CONFIRM'		=> 'แน่ใจหรือว่าต้องการแยกหัวข้อ?',
	'SPLIT_TOPIC_EXPLAIN'				=> 'Using the form below you can split a topic in two, either by selecting the posts individually or by splitting at a selected post.',

	'THIS_POST_IP'				=> 'IP สำหรับกระทู้นี้',
	'TOPICS_APPROVED_SUCCESS'	=> 'กระทู้ที่เลือก ถูกอนุมัติแล้ว',
	'TOPICS_DELETED_SUCCESS'	=> 'กระทู้ที่เลือก ถูกย้ายออกจากฐานข้อมูลเรียบร้อยแล้ว.',
	'TOPICS_DISAPPROVED_SUCCESS'=> 'กระทู้ที่เลือก ไม่ได้รับการอนุมัติ',
	'TOPICS_FORKED_SUCCESS'		=> 'กระทู้ที่เลือก ถูกคัดลอกเรียบร้อยแล้ว',
	'TOPICS_LOCKED_SUCCESS'		=> 'กระทู้ที่เลือก ถูกล๊อกเรียบร้อยแล้ว',
	'TOPICS_MOVED_SUCCESS'		=> 'กระทู้ที่เลือก ถูกย้ายเรียบร้อยแ้ล้ว.',
	'TOPICS_RESYNC_SUCCESS'		=> 'เลือกหัวข้อที่ resynchronise แล้ว',
	'TOPICS_TYPE_CHANGED'		=> 'ชนิดของกระทู้ถูกเปลี่ยนเรียบร้อยแล้ว',
	'TOPICS_UNLOCKED_SUCCESS'	=> 'กระทู้ที่เลือก ถุกปลดล๊อกเรียบร้อยแล้ว',
	'TOPIC_APPROVED_SUCCESS'	=> 'กระทู้ที่เลือก ถูกอนุมัติแล้ว',
	'TOPIC_DELETED_SUCCESS'		=> 'กระทู้ที่เลือก ถูกย้ายออกจากฐานข้อมูลเรียบร้อยแล้ว.',
	'TOPIC_DISAPPROVED_SUCCESS'	=> 'กระทู้ที่เลือก ไม่ได้รับการอนุมัติ',
	'TOPIC_FORKED_SUCCESS'		=> 'กระทู้ที่เลือก ถูกคัดลอกเรียบร้อยแล้ว',
	'TOPIC_LOCKED_SUCCESS'		=> 'กระทู้ที่เลือก ถูกล๊อกเรียบร้อยแล้ว',
	'TOPIC_MOVED_SUCCESS'		=> 'กระทู้ที่เลือก ถูกย้ายเรียบร้อยแ้ล้ว.',
	'TOPIC_NOT_EXIST'			=> 'ไม่พบกระทู้ที่เลือก ',
	'TOPIC_RESYNC_SUCCESS'		=> 'The selected topic has been resynchronised.',
	'TOPIC_SPLIT_SUCCESS'		=> 'กระทู้ที่เลือก แยกเรียบร้อยแ้ล้ว.',
	'TOPIC_TIME'				=> 'Topic time',
	'TOPIC_TYPE_CHANGED'		=> 'ชนิดของกระทู้ถูกเปลี่ยนเรียบร้อยแล้ว',
	'TOPIC_UNLOCKED_SUCCESS'	=> 'กระทู้ที่เลือก ถุกปลดล๊อกเรียบร้อยแล้ว.',
	'TOTAL_WARNINGS'			=> 'Total Warnings',

	'UNAPPROVED_POSTS_TOTAL'		=> 'ทั้งหมด <strong>%d</strong> ข้อความที่รอการอนุมัติ',
	'UNAPPROVED_POSTS_ZERO_TOTAL'	=> 'ไม่มีข้อความที่รอการอนุมัติ',
	'UNAPPROVED_POST_TOTAL'			=> 'ทั้งหมด <strong> 1 </strong> ข้อความที่รอการอนุมัติ',
	'UNLOCK'						=> 'ปลดล๊อก',
	'UNLOCK_POST'					=> 'ข้อความถูกปลดล๊อก',
	'UNLOCK_POST_EXPLAIN'			=> 'อนุญาตให้แก้ไข',
	'UNLOCK_POST_POST'				=> 'ข้อความถูกปลดล๊อก',
	'UNLOCK_POST_POST_CONFIRM'		=> 'ต้องการแก้ไข ?',
	'UNLOCK_POST_POSTS'				=> 'ยกเลิกการล็อคกระทู้ที่เลือก',
	'UNLOCK_POST_POSTS_CONFIRM'		=> 'Are you sure you want to allow editing the selected posts?',
	'UNLOCK_TOPIC'					=> 'ปลดล๊อกกระทู้',
	'UNLOCK_TOPIC_CONFIRM'			=> 'คุณแน่ใจหรือที่จะปลดล๊อกกระทู้นี้?',
	'UNLOCK_TOPICS'					=> 'ปลดล๊อกกระทู้ที่ถูกเลือก',
	'UNLOCK_TOPICS_CONFIRM'			=> 'คุณแน่ใจหรือที่จะปลดล๊อกกระทู้ทั้งหมดที่เลือก ?',
	'USER_CANNOT_POST'				=> 'คุณไม่สามารถโพสต์ข้อความได้',
	'USER_CANNOT_REPORT'			=> 'คุณไม่สามารถรายงานข้อความในกระทู้นี้ได้',
	'USER_FEEDBACK_ADDED'			=> 'User feedback added successfully.',
	'USER_WARNING_ADDED'			=> 'ผู้ใช้ถูกเตือนเรียบร้อยแล้ว',

	'VIEW_DETAILS'			=> 'แสดงรายละเอียด',

	'WARNED_USERS'			=> 'ผู้ใช้ที่ถูกเตือน',
	'WARNED_USERS_EXPLAIN'	=> 'This is a list of users with unexpired warnings issued to them.',
	'WARNING_PM_BODY'		=> 'The following is a warning which has been issued to you by an administrator or moderator of this site.[quote]%s[/quote]',
	'WARNING_PM_SUBJECT'	=> 'Board warning issued',
	'WARNING_POST_DEFAULT'	=> 'This is a warning regarding the following post made by you: %s .',
	'WARNINGS_ZERO_TOTAL'	=> 'ไม่มีการเตือน',

	'YOU_SELECTED_TOPIC'	=> 'จำนวนกระทู้ที่เลือก  %d: %s.',

	'report_reasons'		=> array(
		'TITLE'	=> array(
			'WAREZ'		=> 'Warez',
			'SPAM'		=> 'Spam',
			'OFF_TOPIC'	=> 'Off-topic',
			'OTHER'		=> 'Other',
		),
		'DESCRIPTION' => array(
			'WAREZ'		=> 'The post contains links to illegal or pirated software.',
			'SPAM'		=> 'The reported post has the only purpose to advertise for a website or another product.',
			'OFF_TOPIC'	=> 'The reported post is off topic.',
			'OTHER'		=> 'The reported post does not fit into any other category, please use the further information field.',
		)
	),	
));

?>
