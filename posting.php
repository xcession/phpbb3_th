<?php
/**
*
* posting [Thai]
*
* @package language
* @version $Id: posting.php Modified by xcession $
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
	'ADD_ATTACHMENT'			=> 'แนบไฟล์',
	'ADD_ATTACHMENT_EXPLAIN'	=> 'ถ้าคุณต้องการแนบไฟล์ไปกับข้อความนี้ กรุณากรอกรายละเอียดที่ด้านล่าง',
	'ADD_FILE'					=> 'ส่งไฟล์ที่เลือก',
	'ADD_POLL'					=> 'แบบสอบถาม',
	'ADD_POLL_EXPLAIN'			=> 'หากคุณไม่ต้องการเพิ่มแบบสอบถาม กรุณาปล่อยกล่องข้อความหัวข้อให้ค่าว่างไว้',
	'ALREADY_DELETED'			=> 'ขออภัยคุณไม่สามารถลบข้อความนี้ได้',
	'ATTACH_QUOTA_REACHED'		=> 'ขออภัยบอร์ดนี้มีการกำหนด Quotaไว้',
	'ATTACH_SIG'				=> 'แนบลายเซ็น (แก้ไขลายเซ็นได้ที่หน้า แก้ไขข้อมูลส่วนตัว)',

	'BBCODE_A_HELP'				=> 'Inline uploaded attachment: [attachment=]filename.ext[/attachment]',
	'BBCODE_B_HELP'				=> 'Bold text: [b]text[/b]',
	'BBCODE_C_HELP'				=> 'Code display: [code]code[/code]',
	'BBCODE_E_HELP'				=> 'List: Add list element',
	'BBCODE_F_HELP'				=> 'Font size: [size=x-small]small text[/size]',
	'BBCODE_IS_OFF'				=> '%sBBCode%s <em>ปิด</em>',
	'BBCODE_IS_ON'				=> '%sBBCode%s <em>เปิด</em>',
	'BBCODE_I_HELP'				=> 'Italic text: [i]text[/i]',
	'BBCODE_L_HELP'				=> 'List: [list]text[/list]',
	'BBCODE_LISTITEM_HELP'		=> 'List item: [*]text[/*]',
	'BBCODE_O_HELP'				=> 'Ordered list: [list=]text[/list]',
	'BBCODE_P_HELP'				=> 'Insert image: [img]http://image_url[/img]',
	'BBCODE_Q_HELP'				=> 'Quote text: [quote]text[/quote]',
	'BBCODE_S_HELP'				=> 'Font color: [color=red]text[/color]  ทิป: ท่านสามารถใช้โค้ดสี = #FF0000',
	'BBCODE_U_HELP'				=> 'ขีดเส้นใต้ข้อความ: [u]text[/u]',
	'BBCODE_W_HELP'				=> 'ใส่ URL: [url]http://url[/url] or [url=http://url]URL text[/url]',
	'BBCODE_D_HELP'				=> 'Flash: [flash=width,height]http://url[/flash]',
	'BUMP_ERROR'				=> 'คุณไม่สามารถ bump กระทู้นี้ได้ทันทีหลังจากการโพสครั้งสุดท้าย',

	'CANNOT_DELETE_REPLIED'		=> 'คุณสามารถลบโพสที่ยังไม่ได้มีการตอบกลับเท่านั้น',
	'CANNOT_EDIT_POST_LOCKED'	=> 'ข้อความนี้ถูกล๊อก คุณไม่สามารถแก้ไขหรือลบข้อความนี้ได้',
	'CANNOT_EDIT_TIME'			=> 'คุณไม่สามารถแก้ไขหรือลบข้อความนี้ได้',
	'CANNOT_POST_ANNOUNCE'		=> 'ขออภัยคะ คุณไม่สามารถโฟสประกาศได้',
	'CANNOT_POST_STICKY'		=> 'ขออภัยคะ คุณไม่สามารถโพสกระทู้ที่ Sticky ได้',
	'CHANGE_TOPIC_TO'			=> 'เปลี่ยนประเภทของกระทู้',
	'CLOSE_TAGS'				=> 'ปิด tags',
	'CURRENT_TOPIC'				=> 'กระทู้ปัจจุบัน',

	'DELETE_FILE'				=> 'ลบไฟล์นี้',
	'DELETE_MESSAGE'			=> 'ลบข้อความ',
	'DELETE_MESSAGE_CONFIRM'	=> 'คุณแน่ใจแล้วใช่ไหม ที่ต้องการลบข้อความนี้?',
	'DELETE_OWN_POSTS'			=> 'ขออภัยคะ คุณสามารถลบข้อความได้แต่ข้อความที่คุณเป็นเจ้าของเท่านั้น',
	'DELETE_POST_CONFIRM'		=> 'คุณแน่ใจแล้วใช่ไหม ที่ต้องการลบข้อความนี้?',
	'DELETE_POST_WARN'			=> 'หากลบข้อความแล้วไม่สามารถกู้คืนได้',
	'DISABLE_BBCODE'			=> 'ไม่ใช้ BBCode ในข้อความนี้',
	'DISABLE_MAGIC_URL'			=> 'ไม่ต้องแปลง URL ให้เป็นลิงค์',
	'DISABLE_SMILIES'			=> 'ไม่ใช้รูปแสดงอารมณ์ในข้อความนี้',
	'DISALLOWED_CONTENT'		=> 'ข้อมูลในไฟล์ที่อัพโหลดผิดพลาด.',
	'DISALLOWED_EXTENSION'		=> 'ชนิดของไฟล์ %s ไม่อนุญาต.',
	'DRAFT_LOADED'				=> 'โหลดข้อความร่างเข้าพื้นที่โพสต์, คุณอาจจะต้องการให้ข้อความนี้เสร็จสิ้น<br />ข้อความร่างของคุณต้องถูกลบเมื่อคุณได้บันทึกข้อความที่คุณโพสต์แล้ว',
	'DRAFT_LOADED_PM'			=> 'โหลดข้อความร่างเข้าพื้นที่โพสต์, คุณอาจจะต้องการให้ข้อความส่วนตัวนี้เสร็จสิ้น.<br />Yoข้อความร่างของคุณต้องถูกลบเมื่อคุณได้บันทึกข้อความส่วนตัวที่คุณโพสต์แล้ว',
	'DRAFT_SAVED'				=> 'ข้อความร่างถูกบันทึกเรียบร้อย',
	'DRAFT_TITLE'				=> 'หัวข้อข้อความร่าง',

	'EDIT_REASON'				=> 'เหตุผลสำหรับการแก้ไขข้อความนี้',
	'EMPTY_FILEUPLOAD'			=> 'ไม่มีไฟล์ที่ Upload',
	'EMPTY_MESSAGE'				=> 'คุณต้องระบุข้อความเมื่อคุณโฟสต์',
	'EMPTY_REMOTE_DATA'			=> 'ไฟล์ไม่สามารถ Upload ได้ , กรุณา Upload ใหม่อีกครั้ง',

	'FLASH_IS_OFF'				=> '[flash]  <em>ปิด</em>',
	'FLASH_IS_ON'				=> '[flash]  <em>เปิด</em>',
	'FLOOD_ERROR'				=> 'คุณไม่สามารถโพสติดต่อกันภายในเวลาที่เร็วเกินไป.',
	'FONT_COLOR'				=> 'สีตัวอักษร',
	'FONT_COLOR_HIDE'			=> 'ไม่แสดงสีตัวอักษร',
	'FONT_HUGE'					=> 'ใหญ่มาก',
	'FONT_LARGE'				=> 'ใหญ่',
	'FONT_NORMAL'				=> 'ปรกติ',
	'FONT_SIZE'					=> 'ขนาดตัวอักษร',
	'FONT_SMALL'				=> 'เล็ก',
	'FONT_TINY'					=> 'เล็กมาก',

	'GENERAL_UPLOAD_ERROR'		=> 'ไม่สามารถ Upload ไฟล์ %s.',

	'IMAGES_ARE_OFF'			=> '[img] <em>ปิด</em>',
	'IMAGES_ARE_ON'				=> '[img] <em>เปิด</em>',
	'INVALID_FILENAME'			=> '%s ชื่อไฟล์นี้ไม่สามารถใช้งานได้',

	'LOAD'						=> 'โหลด..',
	'LOAD_DRAFT'				=> 'Load draft',
	'LOAD_DRAFT_EXPLAIN'		=> 'คุณสามารถเลือกข้อความร่างที่คุณเขียนค้างไว้เพื่อเขียนต่อ โพสปัจจุบันของคุณจะถูกยกเลิก เนื้อหาการโพสทั้งหมดจะถูกลบ คุณสามารถดู แก้ไข ลบข้อความร่างได้จากแป้นควบคุมของผู้ใช้',
	'LOGIN_EXPLAIN_BUMP'		=> 'คุณต้องเข้าระบบก่อนเพื่อแก้ไขกระทู้ในบอร์ดนี้',
	'LOGIN_EXPLAIN_DELETE'		=> 'คุณต้องเข้าระบบก่อนเพื่อลบกระทู้ในบอร์ดนี้',
	'LOGIN_EXPLAIN_POST'		=> 'คุณต้องเข้าระบบก่อนเพื่อโพสต์ข้อความในบอร์ดนี้',
	'LOGIN_EXPLAIN_QUOTE'		=> 'คุณต้องเข้าระบบก่อนเพื่ออ้างอิงข้อความในบอร์ดนี้',
	'LOGIN_EXPLAIN_REPLY'		=> 'คุณต้องทำการล็อกอินเข้าสู่ระบบสมาชิกก่อนจึงจะสามารถทำการตอบหัวข้อได้.',

	'MAX_FONT_SIZE_EXCEEDED'	=> 'คุณอาจจะใช้ฟอร์นขนาดมากสุดคือ %1$d.',
	'MAX_FLASH_HEIGHT_EXCEEDED'	=> 'ไฟล์ Flash ของคุณมีขนาดความสูงได้มากสุดคือ %1$d pixels',
	'MAX_FLASH_WIDTH_EXCEEDED'	=> 'ไฟล์ Flash ของคุณมีขนาดความกว้างได้มากสุดคือ %1$d pixels',
	'MAX_IMG_HEIGHT_EXCEEDED'	=> 'ไฟล์รูปภาพของคุณมีขนาดความสูงได้มากสุดคือ  %1$d pixels',
	'MAX_IMG_WIDTH_EXCEEDED'	=> 'ไฟล์รูปภาพของคุณมีขนาดความกว้างได้มากสุดคือ  %1$d pixels',

	'MESSAGE_BODY_EXPLAIN'		=> 'กรุณากรอกข้อความของคุณที่นี้,ต้องประกอบด้วยตัวอักษรไม่เกิน <strong>%d</strong> ตัว',
	'MESSAGE_DELETED'			=> 'ข้อความถูกลบเรียบร้อยแล้ว',
	'MORE_SMILIES'				=> 'รูปแสดงอารมณ์อื่นๆ',

	'NOTIFY_REPLY'				=> 'แจ้งเตือนเมื่อมีผู้ตอบ',
	'NOT_UPLOADED'				=> 'ไฟล์ไม่สามารถ Upload ได้',
	'NO_DELETE_POLL_OPTIONS'	=> 'คุณไม่สามารถลบแบบสำรวจได้',
	'NO_PM_ICON'				=> 'ไม่มี ไอคอน PM ',
	'NO_POLL_TITLE'				=> 'คุณต้องกรอกหัวข้อแบบสำรวจ',
	'NO_POST'					=> 'ไม่สามารถโพสต์ข้อความได้',
	'NO_POST_MODE'				=> 'ไม่มีการระบุโพสโหมด',

	'PARTIAL_UPLOAD'			=> 'ระบบสามารถ Upload ไฟล์ได้เพียงบางส่วนเท่านั้น',
	'PHP_SIZE_NA'				=> 'ไฟล์แนบมีขนาดใหญ่เกินไป <br />ไม่สามารถระบุขนาดสูงสุดที่กำหนดโดย PHP ในไฟล์ php.ini ได้',
	'PHP_SIZE_OVERRUN'			=> 'ไฟล์แนบมีขนาดใหญ่เกินไป, ขนาดไฟล์ที่ใหญ่ที่สุดคือ %d MB.<br />กรุณากำหนดค่าใน php.ini และไม่สามารถยกเลิกได้',
	'PLACE_INLINE'				=> 'แสดงในข้อความ',
	'POLL_DELETE'				=> 'ลบแบบสอบถาม',
	'POLL_FOR'					=> 'เริ่มแบบสอบถามใน',
	'POLL_FOR_EXPLAIN'			=> 'ใส่ 0 หรือปล่อยว่างไว้ เมื่อไม่ต้องการกำหนดระยะเวลา',
	'POLL_MAX_OPTIONS'			=> 'ตัวเลือกสำหรับผู้ใช้ระบบ',
	'POLL_MAX_OPTIONS_EXPLAIN'	=> 'นี่คือจำนวนตัวเลือกที่ผู้ใช้แต่ละคนเลือกได้ในการโหวต',
	'POLL_OPTIONS'				=> 'ตัวเลือกของแบบสำรวจ',
	'POLL_OPTIONS_EXPLAIN'		=> 'วางแต่ละตัวเลือกไว้คนละบรรทัด คุณสามารถกรอกได้ไม่เกิน <strong>%d</strong> ตัวเลือก',
	'POLL_QUESTION'				=> 'คำถามสำหรับแบบสำรวจ',
	'POLL_TITLE_TOO_LONG'		=> 'หัวข้อแบบสำรวจควรมีตัวอักษรอย่างน้อย 100 ตัวอักษร',
	'POLL_TITLE_COMP_TOO_LONG'	=> 'หัวข้อแบบสำรวจมีขนาดใหญ่เกินไป, ควรลบ BBCodes หรือรอยยิ้มออก',
	'POLL_VOTE_CHANGE'			=> 'อนุญาตให้โหวตใหม่ได้',
	'POLL_VOTE_CHANGE_EXPLAIN'	=> 'ถ้าผู้ใช้ระบบสามารถเปลี่ยนแปลงผลการโหวต',
	'POSTED_ATTACHMENTS'		=> 'ไฟล์แนบเอกสาร',
	'POST_CONFIRMATION'			=> 'ยืนยันการโพสต์',
	'POST_CONFIRM_EXPLAIN'		=> 'จำเป็นต้องยืนยันการโพส ถ้าไม่มีรูปขึ้นกรุณาติดต่อ %sBoard Administrator%s.',
	'POST_DELETED'				=> 'ข้อความถูกลบเรียบร้อยแล้ว',
	'POST_EDITED'				=> 'ข้อความถูกแก้ไขเรียบร้อยแล้ว.',
	'POST_EDITED_MOD'			=> 'ข้อความถูกแก้ไขเรียบร้อยแล้ว, แต่ต้องถูกอนุมัติจากผู้ดูแลบอร์ดก่อนถึงจะแสดงในที่สาธารณะได้. คุณจะได้รับการแจ้งเตือนเมื่อข้อความของคุณได้รับการอนุมัติแล้ว',
	'POST_GLOBAL'				=> 'ทั่วไป',
	'POST_ICON'					=> 'ไอคอนโพสต์',
	'POST_NORMAL'				=> 'ปกติ',
	'POST_REVIEW'				=> 'แสดงตัวอย่างการโพสต์',
	'POST_REVIEW_EXPLAIN'		=> 'มีข้อความใหม่ในหระทู้นี้. คุณควรที่จะดูตัวอย่างของข้อความที่คุณโพสต์.',
	'POST_STORED'				=> 'ข้อความของคุณถูกโพสต์เรียบร้อบแล้ว',
	'POST_STORED_MOD'			=> 'ข้อความของคุณถูกบันทึกเรียบร้อยแล้ว, แต่มันจะต้องถูกผู้ดูแลบอร์ดก่อนที่จะแสดงในที่สาธารณะ. คุณจะได้รับการแจ้งเตือน เมื่อข้อความของคุณถูกอนุมัติแล้วYou will be notified when your post has been approved.',
	'POST_TOPIC_AS'				=> 'รูปแบบของหัวข้อ',
	'PROGRESS_BAR'				=> 'แถบสถานะการทำงาน',

	'QUOTE_DEPTH_EXCEEDED'		=> 'คุณอาจจะ %1$d อ้างถึงข้อความอื่น',

	'SAVE'						=> 'จัดเก็บ',
	'SAVE_DATE'					=> 'จัดเก็บเมื่อ',
	'SAVE_DRAFT'				=> 'จัดเก็บข้อความร่าง',
	'SAVE_DRAFT_CONFIRM'		=> 'ข้อความร่างของคุณจะประกอบด้วยหัวเรื่องและข้อความเท่านั้น, ส่วนประกอบอื่นๆจะถูกลบ คุณต้องการจัดเก็บข้อความร่างหรือไม่?',
	'SMILIES'					=> 'Smilies',
	'UI'						=> 'อัพโหลดรูปภาพได้ที่นี่ !!',
	'SMILIES_ARE_OFF'			=> 'Smilies <em>ปิด</em>',
	'SMILIES_ARE_ON'			=> 'Smilies <em>เปิด</em>',
	'STICKY_ANNOUNCE_TIME_LIMIT'=> 'Sticky/Announcement time limit',
	'STICK_TOPIC_FOR'			=> 'Stick หัวข้อสำหรับ',
	'STICK_TOPIC_FOR_EXPLAIN'	=> 'ใส่ 0 หรือค่าว่าง สำหรับไม่กำหนดเวลา Sticky/Announcement.',
	'STYLES_TIP'				=> 'ทิป: Styles can be applied quickly to selected text.',

	'TOO_FEW_CHARS'				=> 'คุณพิมพ์ข้อความสั้นเกินไป',
	'TOO_FEW_POLL_OPTIONS'		=> 'คุณต้องกรอกข้อในแบบสำรวจอย่างน้อย 2 ข้อ',
	'TOO_MANY_ATTACHMENTS'		=> 'ไม่สามารถแนบไฟล์ได้, %d คือค่าสูงสุดแล้ว',
	'TOO_MANY_CHARS'			=> 'ข้อความของคุณยาวเกินไป',
	'TOO_MANY_POLL_OPTIONS'		=> 'You have tried to enter too many poll options.',
	'TOO_MANY_SMILIES'			=> 'ข้อความของคุณมีรูปรอยยิ้มมากเกินไป.จำนวนสูงสุดของรูปรอยยิ้มที่อนุญาต %d.',
	'TOO_MANY_URLS'				=> 'ข้อความของคุณมี URL มากเกินไป.จำนวนสูงสุดของ URL ที่อนุญาต %d.',
	'TOO_MANY_USER_OPTIONS'		=> 'You cannot specify more options per user than existing poll options.',
	'TOPIC_BUMPED'				=> 'กระทู้ของคุณถูกแก้ไขเรียบร้อยแล้ว',

	'UNAUTHORISED_BBCODE'		=> 'คุณไม่สามารถใช้งาน BBCodes: %s.',
	'UNGLOBALISE_EXPLAIN'		=> 'การเปลี่ยนแปลงประเภทของกระทู้จากทั่วไปเป็นธรรมดา, คุณต้องเลือกกระทู้ที่ยังไม่ได้แสดง.',
	'UPDATE_COMMENT'			=> 'แก้ไขคำแนะนำ',
	'URL_INVALID'				=> 'URL นี้ไม่สามารถใช้งานได้',
	'URL_NOT_FOUND'				=> 'ไฟล์ที่คุณระบุไม่มี.',
	'URL_IS_OFF'				=> '[url] <em>ปิด</em>',
	'URL_IS_ON'					=> '[url] <em>เปิด</em>',
	'USER_CANNOT_BUMP'			=> 'คุณไม่สามารถ bump กระทู้ในบอร์ดนี้ได้',
	'USER_CANNOT_DELETE'		=> 'คุณไม่สามารถ ลบ ข้อความในบอร์ดนี้ได้',
	'USER_CANNOT_EDIT'			=> 'คุณไม่สามารถ แก้ไข ข้อความในบอร์ดนี้ได้',
	'USER_CANNOT_REPLY'			=> 'คุณไม่สามารถ ตอบกลับในบอร์ดนี้ได้',
	'USER_CANNOT_FORUM_POST'	=> 'คุณไม่สามารถโพสต์ข้อความได้ เนื่องจากบอร์ดนี้ไม่รองรับ',

	'VIEW_MESSAGE'				=> '%s ดูข้อความที่คุณโพสต์ %s',

	'WRONG_FILESIZE'			=> 'ไฟล์มีขนาดใหญ่, ขนาดใหญ่สุดคือ %1d %2s.',
	'WRONG_SIZE'				=> 'รูปภาพนี้ควรมีขนาดอย่างน้อยกว้าง  %1$d pixels และสูง %2$d pixels และมากที่สุด กว้าง  %3$d pixels และสูง %4$d pixels รูปภาพของคุณมีขนาดกว้าง %5$d pixels และสูง %6$d pixels ',
));

?>