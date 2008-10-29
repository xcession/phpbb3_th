<?php
// Modified by xcession

/**
*
* common [Thai]
*
* @package language
* @version $Id: common.php 8555 2008-05-15 14:10:11Z Kellanved $
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
//
// Some characters you may want to copy&paste:
// ’ » “ ” …
//

$lang = array_merge($lang, array(
	'TRANSLATION_INFO'	                => 'Thai Language Pack by xcession.',
	'DIRECTION'			=> 'ltr',
	'DATE_FORMAT'		=> '|d M Y|',	// 01 Jan 2007 (with Relative days enabled)
	'USER_LANG'			=> 'th',
    
	'1_DAY'			=> '1 วัน',
	'1_MONTH'		=> '1 เดือน',
	'1_YEAR'		=> '1 ปี',
	'2_WEEKS'		=> '2 สัปดาห์',
	'3_MONTHS'		=> '3 เดือน',
	'6_MONTHS'		=> '6 เดือน',
	'7_DAYS'		=> '7 วัน',
    
	'ACCOUNT_ALREADY_ACTIVATED'		=> 'บัญชีของคุณได้รับการยืนยันแล้ว',
	'ACCOUNT_DEACTIVATED'			=> 'บัญชีของคุณได้ถูกระงับชั่วคราว มีเพียง Administrator เท่านั้น ที่จะสามารถยืนยันบัญชีให้คุณได้',
	'ACCOUNT_NOT_ACTIVATED'			=> 'บัญชีของคุณยังไม่ได้รับการยืนยัน',
	'ACP'							=> 'Administration Control Panel',
	'ACTIVE'						=> 'active',
	'ACTIVE_ERROR'					=> 'ชื่อผู้ใช้นี้ยังไม่ได้รับการยืนยัน กรุณาติดต่อผู้ดูแลระบบหากคุณไม่สามารถยืนยันบัญชีได้ด้วยตัวเอง',
	'ADMINISTRATOR'					=> 'Administrator',
	'ADMINISTRATORS'				=> 'Administrator',
	'AGE'							=> 'อายุ',
	'AIM'							=> 'AIM',
	'ALLOWED'						=> 'อนุญาต',
	'ALL_FILES'						=> 'ไฟล์ทั้งหมด',
	'ALL_FORUMS'					=> 'บอร์ดทั้งหมด',
	'ALL_MESSAGES'					=> 'ข้อความทั้งหมด',
	'ALL_POSTS'						=> 'โพสต์ทั้งหมด',
	'ALL_TIMES'						=> 'Time-Zone %1$s %2$s',
	'ALL_TOPICS'					=> 'กระทู้ทั้งหมด',
	'AND'							=> 'และ',
	'ARE_WATCHING_FORUM'			=> 'คุณจะได้รับแจ้ง เมื่อมีการโพสข้อความใหม่ในบอร์ด นี้',
	'ARE_WATCHING_TOPIC'			=> 'คุณจะได้รับแจ้ง เมื่อมีการโพสข้อความใหม่ในกระทู้ นี้',
	'ASCENDING'						=> 'น้อยไปมาก',
	'ATTACHMENTS'					=> 'แนบไฟล์',
	'ATTACHED_IMAGE_NOT_IMAGE'		=> 'ไม่รู้จักชนิดของไฟล์รูปภาพที่คุณแนบมา',
	'AUTHOR'						=> 'เจ้าของ', //[CHECK]
	'AUTH_NO_PROFILE_CREATED'		=> 'สร้างข้อมูลส่วนตัวไม่สำเร็จ',
	'AVATAR_DISALLOWED_CONTENT'		=> 'การอัพโหลดถูกปฎิเสธ เนื่องจากเนื้อหาของไฟล์',
	'AVATAR_DISALLOWED_EXTENSION'	=> 'ไฟล์รูปภาพนี้ไม่อนุญาตให้ถูกแสดง เนื่องจากมีนามสกุล <strong>%s</strong>',
	'AVATAR_EMPTY_REMOTE_DATA'		=> 'ไม่สามารถ Upload ภาพ Avatar นี้ได้ เนื่องจากไฟล์ไม่ถูกต้องหรือเกิดความเสียหาย',
	'AVATAR_EMPTY_FILEUPLOAD'		=> 'ไม่มีไฟล์รูปสำหรับ Upload',
	'AVATAR_INVALID_FILENAME'		=> '%s ชื่อไฟล์ไม่ถูกต้อง',
	'AVATAR_NOT_UPLOADED'			=> 'ภาพ Avatar นี้ไม่สามารถ Upload ได้',
	'AVATAR_NO_SIZE'				=> 'ไม่สามารถทราบขนาดความกว้างและความสูงของภาพ Avatar ได้ กรุณาระบุข้อมูลเหล่านี้ด้วยตัวเอง',
	'AVATAR_PARTIAL_UPLOAD'			=> 'ไฟล์ถูก Upload ได้บางส่วนเท่านั้น',
	'AVATAR_PHP_SIZE_NA'			=> 'ภาพ Avatar มีขนาดใหญ่เกินไป <br />ขนาดของภาพในการ Upload สามารถเซตได้ที่ php.ini', //[TODO]
	'AVATAR_PHP_SIZE_OVERRUN'		=> 'ภาพ Avatar มีขนาดใหญ่เกินไป ขนาดสูงสุดที่สามารถ Upload ได้คือ %d MB.<br />กรุณาโน้ตตาม php.ini และไม่สามารถยกเลิกได้ ', //[TODO]
	'AVATAR_URL_INVALID'			=> 'URL นี้ไม่ถูกต้อง',
	'AVATAR_URL_NOT_FOUND'			=> 'ไม่พบไฟล์ที่ระบุ',
	'AVATAR_WRONG_FILESIZE'			=> 'ภาพ Avatar ควรมีขนาดระหว่าง 0 ถึง %1d %2s',
	'AVATAR_WRONG_SIZE'				=> 'ขนาดภาพ Avatar ที่คุณเลือก กว้าง %5$d pixels และสูง %6$d pixels โดยภาพ Avatar ต้องมีขนาดความกว้างอย่างน้อย  %1$d pixels และสูง %2$d pixels แต่ต้องไม่กว้างเกิน %3$d pixels และสูงเกิน %4$d pixels',

	'BACK_TO_TOP'			=> 'ข้างบน',
	'BACK_TO_PREV'			=> 'กลับหน้าที่แล้ว',
	'BAN_TRIGGERED_BY_EMAIL'=> 'E-mail ของคุณถูกแบน',
	'BAN_TRIGGERED_BY_IP'	=> 'IP Address ของคุณถูกแบน',
	'BAN_TRIGGERED_BY_USER'	=> 'ชื่อผู้ใช้ของคุณถูกแบน',
	'BBCODE_GUIDE'			=> 'การใช้งาน BBCode',
	'BCC'					=> 'BCC',
	'BIRTHDAYS'				=> 'วันเกิด',
	'BOARD_BAN_PERM'		=> 'คุณถูกแบน <strong>ถาวร</strong>จากเว็บบอร์ดนี้<br /><br />กรุณาติดต่อ  %2$sAdministrator%3$s เพื่อขอข้อมูลเพิ่มเติม', //[TODO]
	'BOARD_BAN_REASON'		=> 'เหตุผลของการแบน <strong>%s</strong>',
	'BOARD_BAN_TIME'		=> 'คุณถูกแบนจากเว็บบอร์ดนี้จนถึง <strong>%1$s</strong><br /><br />กรุณาติดต่อ  %2$sAdministrator%3$s เพื่อขอข้อมูลเพิ่มเติม',
	'BOARD_DISABLE'			=> 'ขออภัย... เว็บบอร์ดนี้ยังไม่พร้อมใช้งาน',
	'BOARD_DISABLED'		=> 'ขณะนี้เว็บบอร์ดงดใช้งาน',
	'BOARD_UNAVAILABLE'		=> 'ขออภัยคะ เว็บบอร์ดงดใช้งานชั่วคราวคะ, กรุณาเข้าใหม่อีกครั้งนะคะ',
    'BROWSING_FORUM'		=> 'กำลังดูบอร์ดนี้: %1$s ท่าน',
	'BROWSING_FORUM_GUEST'	=> 'กำลังดูบอร์ดนี้: %1$s และ บุคคลทั่วไป %2$d ท่าน',
	'BROWSING_FORUM_GUESTS'	=> 'กำลังดูบอร์ดนี้: %1$s และ บุคคลทั่วไป %2$d ท่าน',
	'BYTES'					=> 'Bytes',

	'CANCEL'				=> 'ยกเลิก',
	'CHANGE'				=> 'เปลี่ยน',
	'CHANGE_FONT_SIZE'		=> 'เปลี่ยนขนาดตัวอักษร',
	'CHANGING_PREFERENCES'	=> 'ตั้งค่าคุณสมบัติของบอร์ด',
	'CHANGING_PROFILE'		=> 'การตั้งค่าส่วนตัว',
	'CLICK_VIEW_PRIVMSG'	=> '%sไปยัง Inbox%s',
	'COLLAPSE_VIEW'			=> 'มุมมองที่พับได้', //[CHECK]
	'CLOSE_WINDOW'			=> 'ปิดหน้าต่างนี้',
	'COLOUR_SWATCH'			=> 'เปลี่ยนสี',
	'COMMA_SEPARATOR'		=> ', ',	// Used in pagination of ACP & prosilver, use localised comma if appropriate, eg: Ideographic or Arabic
	'CONFIRM'				=> 'ยืนยัน',
	'CONFIRM_CODE'			=> 'รหัสยืนยัน',
	'CONFIRM_CODE_EXPLAIN'	=> 'ให้พิมพ์รหัสตามที่เห็นในรูปภาพ กรุณาพิมพ์ตัวอักษรเล็ก-ใหญ่ให้ถูกต้อง และไม่มีเลขศูนย์',
	'CONFIRM_CODE_WRONG'	=> 'รหัสตามที่เห็นในรูปภาพไม่ถูกต้อง',
	'CONFIRM_OPERATION'		=> 'คุณต้องการทำคำสั่งนี้จริงๆหรือ?', //[CHECK]
	'CONGRATULATIONS'		=> 'ขอแสดงความยินดีกับ',
	'CONNECTION_FAILED'		=> 'ไม่สามารถเชื่อมต่อได้',
	'CONNECTION_SUCCESS'	=> 'เชื่อมต่อสำเร็จ',
	'COOKIES_DELETED'		=> 'Cookies ของเว็บบออร์ดนี้ถูกลบเรียบร้อยแล้วคะ',
	'CURRENT_TIME'			=> 'เวลาปัจจุบัน %s',

	'DAY'					=> 'วัน',
	'DAYS'					=> 'วัน',
	'DELETE'				=> 'ลบทิ้ง',
	'DELETE_ALL'			=> 'ลบทิ้งทั้งหมด',
	'DELETE_COOKIES'		=> 'ลบ Cookies',
	'DELETE_MARKED'			=> 'ลบที่เลือกไว้',
	'DELETE_POST'			=> 'ลบโพสต์',
	'DELIMITER'				=> 'Delimiter',
	'DESCENDING'			=> 'มากไปน้อย',
	'DISABLED'				=> 'ไม่ทำงาน',
	'DISPLAY'				=> 'แสดง',
	'DISPLAY_GUESTS'		=> 'แสดงบุคคลทั่วไป',
	'DISPLAY_MESSAGES'		=> 'แสดงข้อความจาก',
	'DISPLAY_POSTS'			=> 'แสดงโพสจาก',
	'DISPLAY_TOPICS'		=> 'แสดงกระทู้จาก',
	'DOWNLOADED'			=> 'ดาวน์โหลด',
	'DOWNLOADING_FILE'		=> 'กำลังดาวน์โหลดไฟล์',
	'DOWNLOAD_COUNT'		=> 'ดาวน์โหลด %d ครั้ง',
	'DOWNLOAD_COUNTS'		=> 'ดาวน์โหลด %d ครั้ง',
	'DOWNLOAD_COUNT_NONE'	=> 'ยังไม่มีการดาวน์โหลด',
	'VIEWED_COUNT'			=> 'เปิดดู %d ครั้ง',
	'VIEWED_COUNTS'			=> 'เปิดดู %d ครั้ง',
	'VIEWED_COUNT_NONE'		=> 'ยังไม่มีการเปิดดู',

	'EDIT_POST'							=> 'แก้ไขโพสต์',
	'EMAIL'								=> 'E-mail',
	'EMAIL_ADDRESS'						=> 'ที่อยู่ E-mail',
	'EMAIL_SMTP_ERROR_RESPONSE'			=> 'การส่ง E-mail มีปัญหา <strong>บรรทัดที่ %1$s</strong> Response: %2$s', //[TODO]
	'EMPTY_SUBJECT'						=> 'กรุณากรอกหัวข้อด้วย',
	'EMPTY_MESSAGE_SUBJECT'				=> 'กรุณากรอกข้อความด้วย',
	'ENABLED'							=> 'เปิดใช้งาน',
	'ENCLOSURE'							=> 'ปิดการใช้งาน', //[CHECK]
	'ERR_CHANGING_DIRECTORY'			=> 'ไม่สามารถเปลี่ยนไดเรกทอรี่ได้',
	'ERR_CONNECTING_SERVER'				=> 'ไม่สามารถเชื่อมต่อกับเซิร์ฟเวอร์ได้',
    'ERR_JAB_AUTH'						=> 'Could not authorise on Jabber server', //[TODO]
	'ERR_JAB_CONNECT'					=> 'Could not connect to Jabber server', //[TODO]
	'ERR_UNABLE_TO_LOGIN'				=> 'ชื่อผู้ใช้ และ รหัสผ่านไม่ถูกต้อง',
	'ERR_WRONG_PATH_TO_PHPBB'			=> 'path ของ PhpBB นี้ไม่ถูกต้อง',
	'EXPAND_VIEW'						=> 'มุมมองที่ขยายได้',
	'EXTENSION'							=> 'ชนิดของไฟล์', //[CHECK]
	'EXTENSION_DISABLED_AFTER_POSTING'	=> 'ชนิดของไฟล์ <strong>%s</strong> ให้ใช้งานไม่ได้ จึงไม่สามารถแสดงผลได้อีกต่อไป', //[CHECK]

	'FAQ'					=> 'FAQ',
	'FAQ_EXPLAIN'			=> 'คำถามที่ถูกถามอยู่บ่อยๆ',
	'FILENAME'				=> 'ชื่อไฟล์',
	'FILESIZE'				=> 'ขนาด',
	'FILEDATE'				=> 'วันที่',
	'FILE_COMMENT'			=> 'คำอธิบาย',
	'FILE_NOT_FOUND'		=> 'ไม่พบไฟล์ที่ต้องการ',
	'FIND_USERNAME'			=> 'ค้นหาสมาชิก',
	'FOLDER'				=> 'โฟล์เดอร์',
	'FORGOT_PASS'			=> 'ลืมรหัสผ่าน',
    'FORM_INVALID'			=> 'The submitted form was invalid. Try submitting again', //[TODO]
	'FORUM'					=> 'บอร์ด',
	'FORUMS'				=> 'บอร์ด',
	'FORUMS_MARKED'			=> 'ทุกบอร์ดถูกทำเป็นว่าได้อ่านหมดทุกหัวข้อเรียบร้อยแล้ว',
	'FORUM_CAT'				=> 'หมวดหมู่',
	'FORUM_INDEX'			=> 'หน้าเว็บบอร์ด',
	'FORUM_LINK'			=> 'ลิงค์บอร์ด',
	'FORUM_LOCATION'		=> 'ตำแหน่งบอร์ด',
	'FORUM_LOCKED'			=> 'บอร์ดถูกล็อค',
	'FORUM_RULES'			=> 'กฎการใช้บอร์ด',
	'FORUM_RULES_LINK'		=> 'กรุณาอ่านกฏการใช้งานบอร์ด',
	'FROM'					=> 'จาก',
	'FSOCK_DISABLED'		=> 'การทำงานนี้ไม่ถูกต้องเพราะฟังก์ชัน <var>fsockopen</var> ไม่สามารถทำงานได้หรือเซิร์ฟเวอร์ค้นหาไม่พบ',

	'FTP_FSOCK_HOST'				=> 'โฮสต์ FTP',
	'FTP_FSOCK_HOST_EXPLAIN'		=> 'เซิร์ฟเวอร์ FTP ที่ใช้เชื่อมต่อไปยังไซต์ของคุณ', //[CHECK]
	'FTP_FSOCK_PASSWORD'			=> 'รหัสผ่าน FTP',
	'FTP_FSOCK_PASSWORD_EXPLAIN'	=> 'รหัสผ่าน FTP ของคุณ',
	'FTP_FSOCK_PORT'				=> 'พอร์ต FTP' ,
	'FTP_FSOCK_PORT_EXPLAIN'		=> 'พอร์ต ที่ใช้เชื่อมต่อไปยังไซต์ของคุณ', //[CHECK]
	'FTP_FSOCK_ROOT_PATH'			=> 'Path to phpBB', //[TODO]
	'FTP_FSOCK_ROOT_PATH_EXPLAIN'	=> 'Path from the root to your phpBB board', //[TODO]
	'FTP_FSOCK_TIMEOUT'				=> 'หมดเวลา สำหรับ FTP', //[CHECK]
	'FTP_FSOCK_TIMEOUT_EXPLAIN'		=> 'ระยะเวลาในหน่วยวินาที ที่ระบบจะรอการตอบกลับจากเซิร์ฟเวอร์', //[CHECK]
	'FTP_FSOCK_USERNAME'			=> 'ชื่อผู้ใช้ FTP',
	'FTP_FSOCK_USERNAME_EXPLAIN'	=> 'ชื่อผู้ใช้ถูกเชื่อมต่อด้วยเซิร์ฟเวอร์ของคุณ', //[CHECK]

	'FTP_HOST'						=> 'โฮสต์ FTP',
	'FTP_HOST_EXPLAIN'				=> 'เซิร์ฟเวอร์ FTP ที่ใช้เชื่อมต่อไปยังไซต์ของคุณ', //[CHECK]
	'FTP_PASSWORD'					=> 'รหัสผ่าน FTP',
	'FTP_PASSWORD_EXPLAIN'			=> 'รหัสผ่าน FTP ของคุณ',
	'FTP_PORT'						=> 'พอร์ต FTP',
	'FTP_PORT_EXPLAIN'				=> 'พอร์ต ถูกเชื่อมต่อด้วยเซิร์ฟเวอร์ของคุณ', //[CHECK]
	'FTP_ROOT_PATH'					=> 'Path to phpBB', //[TODO]
	'FTP_ROOT_PATH_EXPLAIN'			=> 'Path from the root to your phpBB board', //[TODO]
	'FTP_TIMEOUT'					=> 'หมดเวลา สำหรับ FTP', //[CHECK]
	'FTP_TIMEOUT_EXPLAIN'			=> 'ระยะเวลาในหน่วยวินาที ที่ระบบจะรอการตอบกลับจากเซิร์ฟเวอร์', //[CHECK]
	'FTP_USERNAME'					=> 'ชื่อผู้ใช้ FTP',
	'FTP_USERNAME_EXPLAIN'			=> 'ชื่อผู้ใช้ถูกเชื่อมต่อด้วยเซิร์ฟเวอร์ของคุณ', //[CHECK]
	
	'GENERAL_ERROR'				=> 'ข้อผิดพลาดทั่วไป',
	'GO'						=> 'ไป',
	'GOTO_PAGE'					=> 'ไปที่หน้า',
	'GROUP'						=> 'กลุ่ม',
	'GROUPS'					=> 'กลุ่ม',
	'GROUP_ERR_TYPE'			=> 'กลุ่มนี้ไม่เหมาะสม',
	'GROUP_ERR_USERNAME'		=> 'ไม่มีกลุ่มของชื่อที่ระบุ',
	'GROUP_ERR_USER_LONG'		=> 'ชื่อกลุ่มต้องไม่เกิน 60 ตัวอักษร. ชื่อกลุ่มนี้ยาวเกินไป',
	'GUEST'						=> 'บุคคลทั่วไป',
	'GUEST_USERS_ONLINE'		=> 'มี บุคคลทั่วไปออนไลน์ %d ท่าน',
	'GUEST_USERS_TOTAL'			=> 'บุคคลทั่วไป %d ท่าน',
	'GUEST_USERS_ZERO_ONLINE'	=> 'ไม่มีบุคคลทั่วไปออนไลน์',
	'GUEST_USERS_ZERO_TOTAL'	=> 'ไม่มีบุคคลทั่วไป',
	'GUEST_USER_ONLINE'			=> 'มี บุคคลทั่วไปออนไลน์ %d ท่าน',
	'GUEST_USER_TOTAL'			=> 'บุคคลทั่วไป %d ท่าน',
	'G_ADMINISTRATORS'			=> 'Administrator',
	'G_BOTS'					=> 'Bot',
	'G_GUESTS'					=> 'บุคคลทั่วไป',
	'G_REGISTERED'				=> 'สมาชิก',
	'G_REGISTERED_COPPA'		=> 'Registered COPPA users', //[TODO]
	'G_GLOBAL_MODERATORS'		=> 'Global moderators', //[TODO]

	'HIDDEN_USERS_ONLINE'			=> 'ซ่อน %d ท่าน',
	'HIDDEN_USERS_TOTAL'			=> 'ซ่อน %d ท่าน และ ',
	'HIDDEN_USERS_TOTAL_AND'		=> '%d hidden and ', //[TODO]
	'HIDDEN_USERS_ZERO_ONLINE'		=> 'ไม่มีผู้ซ่อน',
	'HIDDEN_USERS_ZERO_TOTAL'		=> 'ไม่มีผู้ซ่อน และ ',
	'HIDDEN_USERS_ZERO_TOTAL_AND'	=> '0 hidden and ', //[TODO]
	'HIDDEN_USER_ONLINE'			=> 'ซ่อน %d ท่าน',
	'HIDDEN_USER_TOTAL'				=> 'ซ่อน %d ท่าน และ ',
	'HIDDEN_USER_TOTAL_AND'			=> '%d hidden and ', //[TODO]
	'HIDE_GUESTS'					=> 'Hide guests',
	'HIDE_ME'						=> 'ซ่อนสถานะการออนไลน์ของฉัน',
	'HOURS'							=> 'ชั่วโมง',
	'HOME'							=> 'หน้าแรก',

	'ICQ'						=> 'ICQ',
	'ICQ_STATUS'				=> 'สถานะ ICQ',	
	'IF'						=> 'ถ้า',
	'IMAGE'						=> 'รูปภาพ',
	'IMAGE_FILETYPE_INVALID'	=> 'ประเภทของไฟล์รูป %d for mimetype %s ไม่รองรับ',
	'IMAGE_FILETYPE_MISMATCH'	=> 'ประเภทของไฟล์รูปไม่สามารถเข้ากับ: expected extension %1$s และ %2$s ที่กำหนดได้',
	'IN'						=> 'ใน',
	'INDEX'						=> 'หน้าแรก',
	'INFORMATION'				=> 'ข้อมูลทั่วไป',
	'INTERESTS'					=> 'งานอดิเรก',
	'INVALID_DIGEST_CHALLENGE'	=> 'Invalid digest challenge.', //[TODO]
	'INVALID_EMAIL_LOG'			=> '<strong>%s</strong> e-mail ของคุณอาจจะไม่ถูกต้อง?',
	'IP'						=> 'IP',
	'IP_BLACKLISTED'			=> 'IP ของคุณ %1$s ถูกกันไม่ให้ใช้งาน เพราะติด Blacklist กรุณาศึกษารายละเอียดได้ที่ <a href="%2$s">%2$s</a>',

	'JABBER'				=> 'Jabber',
	'JOINED'				=> 'ลงทะเบียนเมื่อ',
	'JUMP_PAGE'				=> 'ใส่หมายเลขหน้าที่ต้องการเปิดดู',
	'JUMP_TO'				=> 'ไปที่',
	'JUMP_TO_PAGE'			=> 'คลิกเพื่อไปที่หน้า...',

	'KB'					=> 'KB',
	'KIB'					=> 'KiB',

	'LAST_POST'							=> 'โพสต์ล่าสุด',
	'LAST_UPDATED'						=> 'อัพเดทล่าสุด',
	'LAST_VISIT'						=> 'เข้าชมล่าสุด',
	'LDAP_NO_LDAP_EXTENSION'			=> 'LDAP extension ไม่สามารถใช้งานได้',
	'LDAP_NO_SERVER_CONNECTION'			=> 'ไม่สามารถเชื่อมต่อกับเซิร์ฟเวอร์ LDAP', 
	'LEGEND'							=> 'กลุ่ม', //[CHECK]
	'LOCATION'							=> 'ที่อยู่',
	'LOCK_POST'							=> 'ล็อคโพสต์',
	'LOCK_POST_EXPLAIN'					=> 'ป้องกันการแก้ไข',
	'LOCK_TOPIC'						=> 'ล็อคกระทู้',
	'LOGIN'								=> 'เข้าสู่ระบบ',
	'LOGIN_CHECK_PM'					=> 'เข้าระบบเพื่อตรวจสอบข้อความส่วนตัว',
	'LOGIN_CONFIRMATION'				=> 'ยอมรับการเข้าระบบ',
	'LOGIN_CONFIRM_EXPLAIN'				=> 'เพื่อป้องกันการสุ่มหาบัญชีผู้ใช้ คุณต้องระบุรหัสการยืนยันหลังจากล็อคอินล้มเหลวเกินจำนวนที่กำหนดไว้ ดังรหัสแสดงเป็นภาพดังด้านล่างนี้ หากคุณไม่สามารถมองเห็นได้ด้วยเหตุใด กรุณาติดต่อ %sผู้ดูแลระบบ%s',
	'LOGIN_ERROR_ATTEMPTS'				=> 'คุณพยายามเข้าสู่ระบบไม่สำเร็จหลายครั้งแล้ว คุณจำเป็นจะต้องพิมพ์รหัสยืนยันตามที่คุณเห็นในรูปภาพด้านล่างนี้ด้วย',
	'LOGIN_ERROR_EXTERNAL_AUTH_APACHE'	=> 'คุณไม่สามารถเข้าใช้งานโดยผ่าน Apache ได้ ',
	'LOGIN_ERROR_PASSWORD'				=> 'คุณระบุรหัสผ่านไม่ถูกต้อง กรุณาตรวจสอบและลองใหม่อีกครั้ง ถ้าคุณยังพบปัญหาเดิม กรุณาติดต่อ %sผู้ดูแลระบบ%s',
	'LOGIN_ERROR_PASSWORD_CONVERT'		=> 'ไม่สามารถแปลงรหัสผ่านของคุณได้ ในขณะที่อัพเกรดซอฟต์แวร์ กรุณา %sขอรหัสผ่านใหม่%s ถ้าคุณยังพบปัญหาเดิมกรุณาติอต่อ  %sผู้ดูแลระบบ%s',
	'LOGIN_ERROR_USERNAME'				=> 'คุณระบุชื่อผู้ใช้ไม่ถูกต้อง กรุณาตรวจสอบและลองใหม่อีกครั้ง  ถ้าคุณยังพบปัญหาเดิมกรุณาติอต่อ  %sผู้ดูแลระบบ%s',
	'LOGIN_FORUM'						=> 'การอ่านหรือทำการโพสต์ข้อความในบอร์ดนี้ คุณจำเป็นต้องระบุรหัสผ่าน',
	'LOGIN_INFO'						=> 'จะเข้าระบบได้คุณจำเป็นต้องสมัครสมาชิกก่อน การสมัครสมาชิกจะใช้เวลาไม่นาน ก่อนที่คุณจะเข้าสู่ระบบ กรุณาอ่านเงื่อนไขการใช้งานและนโยบายการปกป้องข้อมูลส่วนตัว และกรุณาอ่านกฎของแต่ละ บอร์ด ด้วย',
	'LOGIN_VIEW_FORUM'					=> 'เว็บบอร์ดนี้ต้องการการลงทะเบียนและเข้าใช้งานในระบบ เพื่อที่จะสามารถอ่านข้อความในบอร์ดนี้ได้',
	'LOGIN_EXPLAIN_EDIT'				=> 'ในการแก้ไขข้อความในบอร์ดนี้ คุณต้องลงทะเบียนการเป็นสมาชิกและเข้าใช้งานในระบบก่อน',
	'LOGIN_EXPLAIN_VIEWONLINE'			=> 'ในการดูข้อความในบอร์ดนี้ คุณต้องลงทะเบียนการเป็นสมาชิกและเข้าใช้งานในระบบก่อน', //[CHECK]
	'LOGOUT'							=> 'ออกจากระบบ',
	'LOGOUT_USER'						=> 'สวัสดี %s [<strong>ออกจากระบบ</strong>]',
	'LOG_ME_IN'							=> 'เข้าสู่ระบบอัตโนมัติ',

	'MARK'					=> 'เลือก',
	'MARK_ALL'				=> 'เลือกทั้งหมด',
	'MARK_FORUMS_READ'      => 'บันทึกว่าอ่านทุกบอร์ด แล้ว',
	'MB'					=> 'MB',
	'MIB'					=> 'MiB',
	'MCP'					=> 'Moderator Control Panel',
	'MEMBERLIST'			=> 'รายชื่อสมาชิก',
	'MEMBERLIST_EXPLAIN'	=> 'ดูรายชื่อสมาชิกทั้งหมด',
	'MERGE'					=> 'รวม',
	'MERGE_POSTS'			=> 'รวมโพสต์',
	'MERGE_TOPIC'			=> 'รวมกระทู้',
	'MESSAGE'				=> 'ข้อความ',
	'MESSAGES'				=> 'ข้อความ',
	'MESSAGE_BODY'			=> 'Message body', //[TODO]
	'MINUTES'				=> 'นาที',
	'MODERATE'				=> 'Moderate', //[CHECK]
	'MODERATOR'				=> 'Moderator',
	'MODERATORS'			=> 'Moderator',
	'MONTH'					=> 'เดือน',
	'MOVE'					=> 'ย้าย',
	'MSNM'					=> 'MSN',

	'NA'						=> 'ไม่มี', //[CHECK]
	'NEWEST_USER'				=> 'สมาชิกล่าสุด <strong>%s</strong>',
	'NEW_MESSAGE'				=> 'ข้อความใหม่',
	'NEW_MESSAGES'				=> 'ข้อความใหม่',
	'NEW_PM'					=> '<strong>%d</strong> ข้อความใหม่',
	'NEW_PMS'					=> '<strong>%d</strong> ข้อความใหม่',
	'NEW_POST'					=> 'โพสต์ใหม่',
	'NEW_POSTS'					=> 'โพสต์ใหม่',
	'NEXT'						=> 'ต่อไป',		// Used in pagination
	'NEXT_STEP'					=> 'ต่อไป',
	'NEVER'						=> 'Never', //[TODO]
	'NO'						=> 'ไม่',
	'NOT_ALLOWED_MANAGE_GROUP'	=> 'คุณไม่ได้รับอนุญาตให้จัดการกลุ่มนี้',
	'NOT_AUTHORISED'			=> 'คุณไม่ได้รับสิทธิ์ให้ใช้งานในพื้นที่นี้', //[CHECK]
	'NOT_WATCHING_FORUM'		=> 'ยกเลิกการส่ง E-mail เมื่อมีกระทู้ใหม่ในบอร์ดนี้',
	'NOT_WATCHING_TOPIC'		=> 'ยกเลิกการส่ง E-mail เมื่อมีคนตอบใน กระทู้นี้',
	'NOTIFY_ADMIN'				=> 'กรุณาแจ้ง ผู้ดูแลระบบ',
	'NOTIFY_ADMIN_EMAIL'		=> 'กรุณาแจ้ง ผู้ดูแลระบบ: <a href="mailto:%1$s">%1$s</a>',
	'NO_ACCESS_ATTACHMENT'		=> 'คุณไม่ได้รับอนุญาตให้เข้าถึงไฟล์นี้',
	'NO_ACTION'					=> 'ไม่สามารถทำอะไรได้', //[CHECK]
	'NO_ADMINISTRATORS'			=> 'ไม่มีผู้ดูแลเว็บบอร์ดนี้',
	'NO_AUTH_ADMIN'				=> 'ไม่อนุญาตให้เข้าใช้งานใน Administration Control Panel เพราะคุณไม่มีสิทธิ์ในการเป็นผู้ดูแลระบบ',
	'NO_AUTH_ADMIN_USER_DIFFER'	=> 'คุณไม่มีสิทธิ์เข้าใช้งานในสถานะผู้ใช้อื่น', //[CHECK]
	'NO_AUTH_OPERATION'			=> 'คุณไม่ได้รับอนุญาตให้กระทำการใดๆ สำเร็จ', //[CHECK]
	'NO_CONNECT_TO_SMTP_HOST'	=> 'ไม่สามารถเชื่อมต่อกับโฮสต์ SMTP : %1$s : %2$s',
	'NO_BIRTHDAYS'				=> 'ไม่มีวันเกิดในวันนี้',
	'NO_EMAIL_MESSAGE'			=> 'ข้อความ E-mail ว่างเปล่า',
	'NO_EMAIL_RESPONSE_CODE'	=> 'ไม่ได้รับ Reponse Code จาก Mail Server', //[CHECK]
	'NO_EMAIL_SUBJECT'			=> 'ไม่ได้ระบุหัวข้อ E-mail',
	'NO_FORUM'					=> 'ไม่มีบอร์ด ที่คุณเลือก',
	'NO_FORUMS'					=> 'เว็บบอร์ดนี้ไม่มี บอร์ด', //[CHECK]
	'NO_GROUP'					=> 'ไม่มีกลุ่มผู้ใช้นี้',
	'NO_GROUP_MEMBERS'			=> 'กลุ่มนี้ยังไม่มีสมาชิก',
	'NO_IPS_DEFINED'			=> 'ไม่ได้ระบุ IP Address หรือโฮสต์',
	'NO_MEMBERS'				=> 'ไม่พบสมาชิกที่คุณค้นหา',
	'NO_MESSAGES'				=> 'ไม่มีข้อความ',
	'NO_MODE'					=> 'No mode specified.', //[TODO]
	'NO_MODERATORS'				=> 'ไม่ได้กำหนด Moderator ในบอร์ดนี้',
	'NO_NEW_MESSAGES'			=> 'ไม่มีข้อความใหม่',
	'NO_NEW_PM'					=> '0 ข้อความใหม่',
	'NO_NEW_POSTS'				=> 'ไม่มีโพสต์ใหม่',
	'NO_ONLINE_USERS'			=> 'สมาชิก 0', //[CHECK]
	'NO_POSTS'					=> 'ไม่มีโพสต์',
	'NO_POSTS_TIME_FRAME'		=> 'ไม่มีโพสต์ในกระทู้นี้', //[CHECK]
	'NO_SUBJECT'				=> 'ไม่มีหัวข้อ',		// Used for posts having no subject defined but displayed within management pages.
	'NO_SUCH_SEARCH_MODULE'		=> 'ไม่พบคำที่ค้นหา', //[CHECK]
	'NO_SUPPORTED_AUTH_METHODS'	=> 'ไม่รองรับการกำหนดสิทธิ์',
	'NO_TOPIC'					=> 'ไม่มีกระทู้นี้',
	'NO_TOPIC_FORUM'			=> 'ไม่มีกระทู้หรือบอร์ดนี้',
	'NO_TOPICS'					=> 'ไม่พบกระทู้หรือโพสต์ใดๆในบอร์ดนี้',
	'NO_TOPICS_TIME_FRAME'		=> 'ไม่มีข้อความในบอร์ด นี้', //[CHECK]
	'NO_UNREAD_PM'				=> '<strong>0</strong> ข้อความที่ไม่ได้อ่าน',
	'NO_UPLOAD_FORM_FOUND'		=> 'การแนบไฟล์ถูกเริ่มต้น แต่ไม่พบไฟล์ที่ต้องการแนบ',
	'NO_USER'					=> 'ไม่มีชื่อผู้ใช้นี้',
	'NO_USERS'					=> 'ไม่มีชื่อผู้ใช้นี้',
	'NO_USER_SPECIFIED'			=> 'ไม่ได้ระบุชื่อผู้ใช้',

	'OCCUPATION'				=> 'ความถนัด',
	'OFFLINE'					=> 'ออฟไลน์',
	'ONLINE'					=> 'ออนไลน์',
	'ONLINE_BUDDIES'			=> 'เพื่อนออนไลน์',
	'ONLINE_USERS_TOTAL'		=> 'กำลังออนไลน์ทั้งหมด <strong>%d</strong> ท่าน :: ',
	'ONLINE_USERS_ZERO_TOTAL'	=> 'กำลังออนไลน์ทั้งหมด <strong>0</strong> ท่าน :: ',
	'ONLINE_USER_TOTAL'			=> 'กำลังออนไลน์ทั้งหมด <strong>%d</strong> ท่าน :: ',
	'OPTIONS'					=> 'ตัวเลือก',

	'PAGE_OF'					=> 'หน้า <strong>%1$d</strong> จากทั้งหมด <strong>%2$d</strong>',
	'PASSWORD'					=> 'รหัสผ่าน',
	'PLAY_QUICKTIME_FILE'		=> 'เล่นไฟล์ Quicktime',
	'PM'						=> 'PM',
	'POSTING_MESSAGE'			=> 'กำลังโพสต์ข้อความใน %s',
	'POSTING_PRIVATE_MESSAGE'	=> 'กำลังเขียนข้อความ', //[CHECK]
	'POST'						=> 'โพสต์',
	'POST_ANNOUNCEMENT'			=> 'ประกาศ',
	'POST_STICKY'				=> 'ปักหมุด',
	'POSTED'					=> 'โพสต์แล้ว',
	'POSTED_IN_  Forum'			=> 'ใน',
	'POSTED_ON_DATE'			=> 'เมื่อ',
	'POSTS'						=> 'โพสต์',
	'POSTS_UNAPPROVED'			=> 'อย่างน้อย 1 ข้อความในกระทู้นี้ถูกอนุมัติ',
	'POST_BY_AUTHOR'			=> 'โดย',
	'POST_BY_FOE'				=> 'ข้อความนี้ถูกโพสต์โดย <strong>%1$s</strong> ซึ่งอยู่ในรายการที่คุณละเลย %2$sDisplay this post%3$s', //[TODO]
	'POST_DAY'					=> '%.2f โพสต์ต่อวัน',
	'POST_DETAILS'				=> 'รายละเอียดโพสต์',
	'POST_NEW_TOPIC'			=> 'โพสต์กระทู้ใหม่',
	'POST_PCT'					=> '%.2f%% จากโพสทั้งหมด',
	'POST_PCT_ACTIVE'			=> '%.2f%% จากโพสทั้งหมดของสมาชิก',
	'POST_PCT_ACTIVE_OWN'		=> '%.2f%% จากโพสทั้งหมดของคุณ',
	'POST_REPLY'				=> 'ตอบกระทู้',
	'POST_REPORTED'				=> 'คลิกที่นี่เพื่ออ่านรายงาน',
	'POST_SUBJECT'				=> 'หัวข้อกระทู้',
	'POST_TIME'					=> 'เวลา',
	'POST_TOPIC'				=> 'ตั้งกระทู้ใหม่',
	'POST_UNAPPROVED'			=> 'โพสต์นี้กำลังรอการอนุมัติ',
	'PREVIEW'					=> 'แสดงตัวอย่าง',
	'PREVIOUS'					=> 'ย้อนกลับ',		// Used in pagination
	'PREVIOUS_STEP'				=> 'ย้อนกลับ',
	'PRIVACY'					=> 'นโยบายการปกป้องข้อมูลส่วนตัว',
	'PRIVATE_MESSAGE'			=> 'ข้อความส่วนตัว',
	'PRIVATE_MESSAGES'			=> 'ข้อความส่วนตัว',
	'PRIVATE_MESSAGING'			=> 'ข้อความส่วนตัว',
	'PROFILE'					=> 'ตั้งค่าส่วนตัว',

	'READING_FORUM'				=> 'กำลังอ่านบอร์ดใน %s',
	'READING_GLOBAL_ANNOUNCE'	=> 'กำลังอ่านประกาศทั่วไป', //[CHECK]
	'READING_LINK'				=> 'เพิ่ม Link สำหรับ Forum %s', //[TODO]
	'READING_TOPIC'				=> 'กำลังอ่านกระทู้ใน %s',
	'READ_PROFILE'				=> 'ข้อมูลส่วนตัว',
	'REASON'					=> 'เหตุผล',
	'RECORD_ONLINE_USERS'		=> 'ออนไลน์มากที่สุด <strong>%1$s</strong> ท่าน เมื่อ %2$s',
	'REDIRECT'					=> 'Redirect', //[TODO]
	'REDIRECTS'					=> 'Total redirects', //[TODO]
	'REGISTER'					=> 'สมัครสมาชิก',
	'REGISTERED_USERS'			=> 'ผู้ใช้งานขณะนี้ :',
	'REG_USERS_ONLINE'			=> 'มี %d สมาชิก และ ',
	'REG_USERS_TOTAL'			=> 'สมาชิก %d ท่าน ',
	'REG_USERS_TOTAL_AND'		=> 'สมาชิก %d ท่าน และ ',
	'REG_USERS_ZERO_ONLINE'		=> 'มี 0 สมาชิกและ ',
	'REG_USERS_ZERO_TOTAL'		=> '0 สมาชิก, ',
	'REG_USERS_ZERO_TOTAL_AND'	=> '0 สมาชิก และ ',
	'REG_USER_ONLINE'			=> 'มี %d สมาชิก และ ',
	'REG_USER_TOTAL'			=> 'สมาชิก %d ท่าน, ',
	'REG_USER_TOTAL_AND'		=> 'สมาชิก %d ท่าน และ ',
	'REMOVE'					=> 'ลบทิ้ง',
	'REMOVE_INSTALL'			=> 'กรุณาลบ, ย้าย, หรือ เปลี่ยนชื่อ ไดเร็คทอรี install ก่อนที่จะเริ่มใช้งานเว็บบอร์ด<br />ถ้ามีไดเร็คทอรี่นี้อยู่ คุณจะสามารถใช้งานได้เพียง Administration Control Panel (ACP) เท่านั้น',
	'REPLIES'					=> 'ตอบกลับ',
	'REPLY_WITH_QUOTE'			=> 'ตอบกลับพร้อมอ้างอิง',
	'REPLYING_GLOBAL_ANNOUNCE'	=> 'กำลังตอบกลับประกาศทั่วไป', //[CHECK]
	'REPLYING_MESSAGE'			=> 'กำลังตอบกลับข้อความใน %s',
	'REPORT_BY'					=> 'รายงานโดย',
	'REPORT_POST'				=> 'รายงานโพสต์นี้',
	'REPORTING_POST'			=> 'กำลังรายงานโพสต์',
	'RESEND_ACTIVATION'			=> 'Resend activation e-mail', //[TODO]
	'RESET'						=> 'แก้ไขใหม่',
	'RESTORE_PERMISSIONS'		=> 'คืนค่ากระอนุญาต',
	'RETURN_INDEX'				=> '%sกลับไปยังหน้าแรกบอร์ด%s',
	'RETURN_FORUM'              => '%sกลับไปหน้าบอร์ด ที่เข้าดูล่าสุด%s',
	'RETURN_PAGE'				=> '%sย้อนกลับไปหน้าที่แล้ว%s',
	'RETURN_TOPIC'				=> '%sกลับไปหน้ากระทู้ที่เข้าดูล่าสุด%s',
	'RETURN_TO'					=> 'ย้อนกลับไปยัง',
	'RULES_ATTACH_CAN'			=> 'คุณ <strong>สามารถ</strong> แนบไฟล์ในบอร์ดนี้ได้',
	'RULES_ATTACH_CANNOT'		=> 'คุณ <strong>ไม่สามารถ</strong> แนบไฟล์ในบอร์ดนี้ได้',
	'RULES_DELETE_CAN'			=> 'คุณ <strong>สามารถ</strong> ลบโพสของคุณในบอร์ดนี้ได้',
	'RULES_DELETE_CANNOT'		=> 'คุณ <strong>ไม่สามารถ</strong> ลบโพสของคุณในบอร์ดนี้ได้',
	'RULES_DOWNLOAD_CAN'		=> 'คุณ <strong>สามารถ</strong> ดาวน์โหลดไฟล์แนบในบอร์ดนี้ได้',
	'RULES_DOWNLOAD_CANNOT'		=> 'คุณ <strong>ไม่สามารถ</strong> ดาวน์โหลดไฟล์แนบในบอร์ดนี้ได้',
	'RULES_EDIT_CAN'			=> 'คุณ <strong>สามารถ</strong> แก้ไขโพสของคุณในบอร์ดนี้ได้',
	'RULES_EDIT_CANNOT'			=> 'คุณ <strong>ไม่สามารถ</strong> แก้ไขโพสของคุณในบอร์ดนี้ได้',
	'RULES_LOCK_CAN'			=> 'คุณ <strong>สามารถ</strong> ล็อคกระทู้ของคุณในบอร์ดนี้ได้',
	'RULES_LOCK_CANNOT'			=> 'คุณ <strong>ไม่สามารถ</strong> ล็อคกระทู้ของคุณในบอร์ดนี้ได้',
	'RULES_POST_CAN'			=> 'คุณ <strong>สามารถ</strong> โพสกระทู้ในบอร์ดนี้ได้',
	'RULES_POST_CANNOT'			=> 'คุณ <strong>ไม่สามารถ</strong> โพสกระทู้ในบอร์ดนี้ได้',
	'RULES_REPLY_CAN'			=> 'คุณ <strong>สามารถ</strong> ตอบกระทู้ในบอร์ดนี้ได้',
	'RULES_REPLY_CANNOT'		=> 'คุณ <strong>ไม่สามารถ</strong> ตอบกระทู้ในบอร์ดนี้ได้',
	'RULES_VOTE_CAN'			=> 'คุณ <strong>สามารถ</strong> โหวตแบบสำรวจในบอร์ดนี้ได้',
	'RULES_VOTE_CANNOT'			=> 'คุณ <strong>ไม่สามารถ</strong> โหวตแบบสำรวจในบอร์ดนี้ได้',

	'SEARCH'					=> 'ค้นหา',
	'SEARCH_MINI'				=> 'ค้นหา…',
	'SEARCH_ADV'				=> 'การค้นหาขั้นสูง',
	'SEARCH_ADV_EXPLAIN'		=> 'แสดงตัวเลือกการค้นหาขั้นสูง',
	'SEARCH_KEYWORDS'			=> 'ค้นหาคีย์เวิร์ด',
	'SEARCHING_FORUMS'			=> 'กำลังค้นหาในบอร์ด',
	'SEARCH_ACTIVE_TOPICS'		=> 'แสดงกระทู้ที่เปิดดูแล้ว', //[CHECK]
	'SEARCH_FOR'				=> 'ค้นหาสำหรับ',
	'SEARCH_FORUM'				=> 'ค้นหาในบอร์ดนี้…',	
	'SEARCH_NEW'				=> 'แสดงโพสต์ที่ยังไม่ได้อ่าน',
	'SEARCH_POSTS_BY'			=> 'ค้นหาโพสต์จาก',
	'SEARCH_SELF'				=> 'แสดงโพสต์ของคุณ',
	'SEARCH_TOPIC'				=> 'ค้นหาในกระทู้นี้…',
	'SEARCH_UNANSWERED'			=> 'แสดงกระทู้ที่ยังไม่มีการตอบ',
	'SECONDS'					=> 'วินาที',
	'SELECT'					=> 'เลือก',
	'SELECT_ALL_CODE'			=> 'เลือกทั้งหมด',
	'SELECT_DESTINATION_FORUM'	=> 'กรุณาเลือกบอร์ดเป้าหมาย',
	'SELECT_FORUM'				=> 'เลือกบอร์ด',
	'SEND_EMAIL'				=> 'E-mail',
	'SEND_EMAIL_USER'			=> 'E-mail',	// Used as: {L_SEND_EMAIL_USER} {USERNAME} -> E-mail UserX	
	'SEND_PRIVATE_MESSAGE'		=> 'ส่งข้อความส่วนตัว',
	'SETTINGS'					=> 'ตั้งค่า',
	'SIGNATURE'					=> 'ลายเซ็นต์',
	'SKIP'						=> 'ข้ามไปที่เนื้อหา',
	'SMTP_NO_AUTH_SUPPORT'		=> 'เซิร์ฟเวอร์ SMTP ไม่รองรับการกำหนดสิทธิ์',
	'SORRY_AUTH_READ'			=> 'คุณไม่สามารถอ่านกระทู้นี้',
	'SORRY_AUTH_VIEW_ATTACH'	=> 'คุณไม่สามารถ Download ไฟล์แนบนี้',
	'SORT_BY'					=> 'เรียงตาม',
	'SORT_JOINED'				=> 'วันที่ลงทะเบียน',
	'SORT_LOCATION'				=> 'ที่อยู่',
	'SORT_RANK'					=> 'ระดับชั้น', //[CHECK]
	'SORT_TOPIC_TITLE'			=> 'หัวข้อกระทู้',
	'SORT_USERNAME'				=> 'ชื่อผู้ใช้',
	'SPLIT_TOPIC'				=> 'แบ่งกระทู้',
	'SQL_ERROR_OCCURRED'		=> 'พบข้อผิดพลาดที่เกิดจาก SQL ขณะเปิดหน้านี้ กรุณาติดต่อ %sผู้ดูแลระบบ%s',
	'STATISTICS'				=> 'สถิติ',
	'START_WATCHING_FORUM'		=> 'E-mail แจ้งเมื่อมีกระทู้ใหม่ในบอร์ดนี้',
	'START_WATCHING_TOPIC'		=> 'E-mail แจ้งเมื่อมีการตอบกระทู้นี้',
	'STOP_WATCHING_FORUM'		=> 'ยกเลิก E-mail แจ้งเมื่อมีกระทู้ใหม่ในบอร์ดนี้',
	'STOP_WATCHING_TOPIC'		=> 'ยกเลิก E-mail แจ้งเมื่อมีการตอบกระทู้นี้',
	'SUB_FORUM'					=> 'บอร์ดย่อย',
	'SUB_FORUMS'			    => 'บอร์ดย่อย',
	'SUBJECT'					=> 'หัวข้อ',
	'SUBMIT'					=> 'ดำเนินการ', //[CHECK]

    'TERMS_USE'			=> 'เงื่อนไขการใช้งาน',
	'TEST_CONNECTION'	=> 'ทดสอบการเชื่อมต่อ',
	'THE_TEAM'			=> 'ทีมงาน',
	'TIME'				=> 'เวลา',

	'TOO_LONG_AIM'					=> 'ชื่อผู้ใช้ AIM ยาวเกินไป',
	'TOO_LONG_CONFIRM_CODE'			=> 'รหัสสำหรับการยืนยัน ยาวเกินไป',
	'TOO_LONG_DATEFORMAT'			=> 'รูปแบบเวลา ยาวเกินไป',
	'TOO_LONG_ICQ'					=> 'หมายเลข ICQ ยาวเกินไป',
	'TOO_LONG_INTERESTS'			=> 'ความสนใจ ยาวเกินไป',
	'TOO_LONG_JABBER'				=> 'ชื่อผู้ใช้ Jabber ยาวเกินไป',
	'TOO_LONG_LOCATION'				=> 'ที่อยู่ ยาวเกินไป',
	'TOO_LONG_MSN'					=> 'ชื่อผู้ใช้ MSN ยาวเกินไป',
	'TOO_LONG_NEW_PASSWORD'			=> 'รหัสผ่าน ยาวเกินไป',
	'TOO_LONG_OCCUPATION'			=> 'ความถนัด ยาวเกินไป',
	'TOO_LONG_PASSWORD_CONFIRM'		=> 'รหัสผ่าน สำหรับการยืนยัน ยาวเกินไป',
	'TOO_LONG_USER_PASSWORD'		=> 'รหัสผ่าน ยาวเกินไป',
	'TOO_LONG_USERNAME'				=> 'ชื่อผู้ใช้ ยาวเกินไป',
	'TOO_LONG_EMAIL'				=> 'ที่อยู่ E-mail ยาวเกินไป',
	'TOO_LONG_EMAIL_CONFIRM'		=> 'ที่อยู่ E-mail สำหรับการยืนยันยาวเกินไป',
	'TOO_LONG_WEBSITE'				=> 'ที่อยู่ website ยาวเกินไป',
	'TOO_LONG_YIM'					=> 'ชื่อผู้ใช้ Yahoo! Messenger ยาวเกินไป',

	'TOO_MANY_VOTE_OPTIONS'			=> 'You have tried to vote for too many options', //[TODO]
    
	'TOO_SHORT_AIM'					=> 'ชื่อผู้ใช้ AIM สั้นเกินไป',
	'TOO_SHORT_CONFIRM_CODE'		=> 'รหัสสำหรับการยืนยันสั้นเกินไป',
	'TOO_SHORT_DATEFORMAT'			=> 'รูปแบบวัน สั้นเกินไป',
	'TOO_SHORT_ICQ'					=> 'หมายเลข ICQ สั้นเกินไป',
	'TOO_SHORT_INTERESTS'			=> 'ความสนใจ สั้นเกินไป',
	'TOO_SHORT_JABBER'				=> 'ชื่อผู้ใช้ Jabber สั้นเกินไป',
	'TOO_SHORT_LOCATION'			=> 'ที่อยู่ สั้นเกินไป',
	'TOO_SHORT_MSN'					=> 'ชื่อผู้ใช้ MSN สั้นเกินไป',
	'TOO_SHORT_NEW_PASSWORD'		=> 'รหัสผ่าน สั้นเกินไป',
	'TOO_SHORT_OCCUPATION'			=> 'ความถนัด สั้นเกินไป',
	'TOO_SHORT_PASSWORD_CONFIRM'	=> 'รหัสผ่านสำหรับการยืนยัน สั้นเกินไป',
	'TOO_SHORT_USER_PASSWORD'		=> 'รหัสผ่าน สั้นเกินไป',
	'TOO_SHORT_USERNAME'			=> 'ชื่อผู้ใช้ สั้นเกินไป',
	'TOO_SHORT_EMAIL'				=> 'ที่อยู่ E-mail สั้นเกินไป',
	'TOO_SHORT_EMAIL_CONFIRM'		=> 'ที่อยู่ E-mail สำหรับการยืนยัน สั้นเกินไป',
	'TOO_SHORT_WEBSITE'				=> 'ที่อยู่ website สั้นเกินไป',
	'TOO_SHORT_YIM'					=> 'ชื่อผู้ใช้ Yahoo! Messenger สั้นเกินไป',

	'TOPIC'				    => 'หัวข้อ', //[CHECK]
	'TOPICS'			    => 'หัวข้อ', //[CHECK]
	'TOPIC_ICON'		    => 'ไอคอนกระทู้',
	'TOPIC_LOCKED'		    => 'กระทู้นี้ถูกล็อค คุณไม่สามารถแก้ไขข้อความ หรือ ตอบกลับในกระทู้นี้',
	'TOPIC_LOCKED_SHORT'	=> 'กระทู้ถูกล็อค',
	'TOPIC_MOVED'		    => 'ย้ายกระทู้',
	'TOPIC_REVIEW'		    => 'ทบทวนกระทู้',
	'TOPIC_TITLE'		    => 'หัวข้อกระทู้',
	'TOPIC_UNAPPROVED'	    => 'กระทู้นี้ไม่ได้รับการอนุมัติ',
	'TOTAL_ATTACHMENTS'	    => 'ไฟล์แนบ',
	'TOTAL_LOG'			    => '1 log',
	'TOTAL_LOGS'		    => '%d log',
	'TOTAL_NO_PM'		    => 'ข้อความส่วนตัวทั้งหมด 0 ข้อความ',
	'TOTAL_PM'			    => 'ข้อความส่วนตัวทั้งหมด 1 ข้อความ',
	'TOTAL_PMS'			    => 'ข้อความส่วนตัวทั้งหมด %d ข้อความ',
	'TOTAL_POSTS'		    => 'โพสต์ทั้งหมด',
	'TOTAL_POSTS_OTHER'	    => 'โพสต์ทั้งหมด <strong>%d</strong>',
	'TOTAL_POSTS_ZERO'		=> 'โพสต์ทั้งหมด <strong>0</strong>',
	'TOPIC_REPORTED'		=> 'กระทู้ถูกรายงานแล้ว',
	'TOTAL_TOPICS_OTHER'	=> 'กระทู้ทั้งหมด <strong>%d</strong>',
	'TOTAL_TOPICS_ZERO'		=> 'กระทู้ทั้งหมด <strong>0</strong>',
	'TOTAL_USERS_OTHER'		=> 'สมาชิกทั้งหมด <strong>%d</strong>',
	'TOTAL_USERS_ZERO'		=> 'สมาชิกทั้งหมด <strong>0</strong>',
	'TRACKED_PHP_ERROR'		=> 'Tracked PHP errors: %s', //[TODO]

	'UNABLE_GET_IMAGE_SIZE'		=> 'ไม่สามารถระบุความกว้างและความสูงของรูปภาพได้',
	'UNABLE_TO_DELIVER_FILE'	=> 'ไม่สามารถส่งไฟล์ได้',
	'UNKNOWN_BROWSER'			=> 'ไม่รู้จัก browser',
	'UNMARK_ALL'				=> 'ยกเลิกที่เลือกทั้งหมด',
	'UNREAD_MESSAGES'			=> 'ข้อความที่ยังไม่ได้อ่าน',
	'UNREAD_PM'					=> '<strong>%d</strong> ข้อความยังไม่ได้อ่าน',
	'UNREAD_PMS'				=> '<strong>%d</strong> ข้อความยังไม่ได้อ่าน',
	'UNWATCHED_FORUMS'			=> 'คุณไม่สามารถดู บอร์ด นี้ได้',
	'UNWATCHED_TOPICS'			=> 'คุณไม่สามารถดูกระทู้นี้ได้',
	'UNWATCHED_FORUMS_TOPICS'	=> 'คุณไม่มีสิทธิ์เข้าใช้งานในบอร์ด นี้',
	'UPDATE'					=> 'อัพเดท',
	'UPLOAD_IN_PROGRESS'		=> 'Upload เรียบร้อยแล้ว',
	'URL_REDIRECT'				=> 'หากบราว์เซอร์ไม่รองรับการย้อนกลับอัตโนมัติ %sกรุณาคลิกที่นี่ เพื่อย้อนกลับ%s',
	'USERGROUPS'				=> 'กลุ่ม',
	'USERNAME'					=> 'ชื่อผู้ใช้',
	'USERNAMES'					=> 'ชื่อผู้ใช้',
	'USER_AVATAR'				=> 'Avatar สมาชิก',
	'USER_CANNOT_READ'			=> 'คุณไม่สามารถอ่านกระทู้ในบอร์ด นี้ได้',
	'USER_POST'					=> '%d โพสต์',
	'USER_POSTS'				=> '%d โพสต์',
	'USERS'						=> 'สมาชิก',
	'USE_PERMISSIONS'			=> 'Test out user’s permissions',

	'VARIANT_DATE_SEPARATOR'	=> ' / ',	// Used in date format dropdown, eg: "Today, 13:37 / 01 Jan 2007, 13:37" ... to join a relative date with calendar date
	'VIEWED'					=> 'วิว', //[CHECK]
	'VIEWING_FAQ'				=> 'กำลังดู FAQ',
	'VIEWING_MEMBERS'			=> 'กำลังดู รายละเอียดสมาชิก', //[CHECK]
	'VIEWING_ONLINE'			=> 'กำลังดู ใครกำลังออนไลน์', //[CHECK]
	'VIEWING_MCP'				=> 'กำลังดู เมนูสำหรับผู้ช่วยดูแลบอร์ด', //[CHECK]
	'VIEWING_MEMBER_PROFILE'	=> 'กำลังดู ข้อมูลส่วนตัวสมาชิก', //[CHECK]
	'VIEWING_PRIVATE_MESSAGES'	=> 'กำลังดู ข้อความส่วนตัว', //[CHECK]
	'VIEWING_REGISTER'			=> 'กำลัง สมัครสมาชิก', //[CHECK]
	'VIEWING_UCP'				=> 'กำลัง ตั้งค่าส่วนตัวสมาชิก', //[CHECK]
	'VIEWS'						=> 'อ่าน', //[CHECK]
	'VIEW_BOOKMARKS'			=> 'ดู Bookmark',
	'VIEW_FORUM_LOGS'			=> 'ดู Logs',
	'VIEW_LATEST_POST'			=> 'ดูข้อความล่าสุด',
	'VIEW_NEWEST_POST'			=> 'View first unread post', //[TODO]
	'VIEW_NOTES'				=> 'View user notes', //[TODO]
	'VIEW_ONLINE_TIME'			=> 'มีการอัพเดททุก ๆ %d นาที',
	'VIEW_ONLINE_TIMES'			=> 'มีการอัพเดททุก ๆ %d นาที',
	'VIEW_TOPIC'				=> 'แสดงกระทู้',
	'VIEW_TOPIC_ANNOUNCEMENT'	=> 'ประกาศ: ',
	'VIEW_TOPIC_GLOBAL'			=> 'ประกาศทั่วไป: ', //[CHECK]
	'VIEW_TOPIC_LOCKED'			=> 'ถูกล็อค ',
	'VIEW_TOPIC_LOGS'			=> 'ดู logs',
	'VIEW_TOPIC_MOVED'			=> 'ถูกย้าย: ',
	'VIEW_TOPIC_POLL'			=> 'แบบสำรวจ: ',
	'VIEW_TOPIC_STICKY'			=> 'ปักหมุด: ',
	'VISIT_WEBSITE'				=> 'เข้าชมเว็บไซต์',

	'WARNINGS'			=> 'คำเตือน', //[CHECK]
	'WARN_USER'			=> 'เตือนผู้ใช้งาน',
	'WELCOME_SUBJECT'	=> 'ยินดีต้อนรับสู่บอร์ด %s ',
	'WEBSITE'			=> 'เว็บไซต์',
	'WHOIS'				=> 'Whois', //[TODO]
	'WHO_IS_ONLINE'		=> 'ผู้ใช้งานขณะนี้',	
	'WRONG_PASSWORD'	=> 'รหัสผ่านไม่ถูกต้อง',
    
	'WRONG_DATA_ICQ'		=> 'หมายเลข ICQ ไม่ถูกต้อง',
	'WRONG_DATA_JABBER'		=> 'บัญชี Jabber ไม่ถูกต้อง',
	'WRONG_DATA_LANG'		=> 'ภาษานี้ไม่ถูกต้อง',
	'WRONG_DATA_WEBSITE'	=> 'ที่อยู่เวบไซต์ไม่ถูกต้อง, ต้องประกอบด้วยโปรโตคอล  ตัวอย่างเช่น http://www.example.com/',
	'WROTE'					=> 'เขียน',
	
	'YEAR'				=> 'ปี',
	'YEAR_MONTH_DAY'	=> '(ปี-เดือน-วัน)',
	'YES'				=> 'ใช่',
	'YIM'				=> 'Yahoo',
	'YOU_LAST_VISIT'	=> 'ใช้งานล่าสุด: %s',
	'YOU_NEW_PM'		=> 'มีข้อความส่วนตัวมาถึงคุณ',
	'YOU_NEW_PMS'		=> 'มีข้อความส่วนตัวมาถึงคุณ',
	'YOU_NO_NEW_PM'		=> 'ไม่มีข้อความส่วนตัว',

	'datetime'	=> array(
		'TODAY'			=> 'วันนี้',
		'TOMORROW'		=> 'พรุ่งนี้',
		'YESTERDAY'		=> 'เมื่อวานนี้',
        
		'Sunday'		=> 'วันอาทิตย์',
		'Monday'		=> 'วันจันทร์',
		'Tuesday'		=> 'วันอังคาร',
		'Wednesday'		=> 'วันพุธ',
		'Thursday'		=> 'วันพฤหัสบดี',
		'Friday'		=> 'วันศุกร์',
		'Saturday'		=> 'วันเสาร์',
        
		'Sun'			=> 'อาทิตย์ ',
		'Mon'			=> 'จันทร์',
		'Tue'			=> 'อังคาร',
		'Wed'			=> 'พุธ',
		'Thu'			=> 'พฤหัสฯ',
		'Fri'			=> 'ศุกร์',
		'Sat'			=> 'เสาร์',
        
		'January'		=> 'มกราคม',
		'February'		=> 'กุมถาพันธ์',
		'March'			=> 'มีนาคม',
		'April'			=> 'เมษายน',
		'May'			=> 'พฤษภาคม',
		'June'			=> 'มิถุนายน',
		'July'			=> 'กรกฏาคม',
		'August'		=> 'สิงหาคม',
		'September'		=> 'กันยายน',
		'October'		=> 'ตุลาคม',
		'November'		=> 'พฤศจิกายน',
		'December'		=> 'ธันวาคม',
        
		'Jan'			=> 'ม.ค.',
		'Feb'			=> 'ก.พ.',
		'Mar'			=> 'มี.ค.',
		'Apr'			=> 'เม.ย.',
		'May_short'		=> 'พ.ค.',	// Short representation of "May". May_short used because in English the short and long date are the same for May.
		'Jun'			=> 'มิ.ย.',
		'Jul'			=> 'ก.ค.',
		'Aug'			=> 'ส.ค.',
		'Sep'			=> 'ก.ย.',
		'Oct'			=> 'ต.ค.',
		'Nov'			=> 'พ.ย.',
		'Dec'			=> 'ธ.ค.',
	),

	'tz'	    => array(
		'-12'	=> 'UTC - 12 ชั่วโมง',
		'-11'	=> 'UTC - 11 ชั่วโมง',
		'-10'	=> 'UTC - 10 ชั่วโมง',
		'-9.5'	=> 'UTC - 9:30 ชั่วโมง',
		'-9'	=> 'UTC - 9 ชั่วโมง',
		'-8'	=> 'UTC - 8 ชั่วโมง',
		'-7'	=> 'UTC - 7 ชั่วโมง',
		'-6'	=> 'UTC - 6 ชั่วโมง',
		'-5'	=> 'UTC - 5 ชั่วโมง',
		'-4'	=> 'UTC - 4 ชั่วโมง',
		'-3.5'	=> 'UTC - 3:30 ชั่วโมง',
		'-3'	=> 'UTC - 3 ชั่วโมง',
		'-2'	=> 'UTC - 2 ชั่วโมง',
		'-1'	=> 'UTC - 1 ชั่วโมง',
		'0'		=> 'UTC',
		'1'		=> 'UTC + 1 ชั่วโมง',
		'2'		=> 'UTC + 2 ชั่วโมง',
		'3'		=> 'UTC + 3 ชั่วโมง',
		'3.5'	=> 'UTC + 3:30 ชั่วโมง',
		'4'		=> 'UTC + 4 ชั่วโมง',
		'4.5'	=> 'UTC + 4:30 ชั่วโมง',
		'5'		=> 'UTC + 5 ชั่วโมง',
		'5.5'	=> 'UTC + 5:30 ชั่วโมง',
		'5.75'	=> 'UTC + 5:45 ชั่วโมง',
		'6'		=> 'UTC + 6 ชั่วโมง',
		'6.5'	=> 'UTC + 6:30 ชั่วโมง',
		'7'		=> 'UTC + 7 ชั่วโมง',
		'8'		=> 'UTC + 8 ชั่วโมง',
		'8.75'	=> 'UTC + 8:45 ชั่วโมง',
		'9'		=> 'UTC + 9 ชั่วโมง',
		'9.5'	=> 'UTC + 9:30 ชั่วโมง',
		'10'	=> 'UTC + 10 ชั่วโมง',
		'10.5'	=> 'UTC + 10:30 ชั่วโมง',
		'11'	=> 'UTC + 11 ชั่วโมง',
		'11.5'	=> 'UTC + 11:30 ชั่วโมง',
		'12'	=> 'UTC + 12 ชั่วโมง',
		'12.75'	=> 'UTC + 12:45 ชั่วโมง',
		'13'	=> 'UTC + 13 ชั่วโมง',
		'14'	=> 'UTC + 14 ชั่วโมง',
		'dst'	=> '[ <abbr title="Daylight Saving Time">DST</abbr> ]',
	),

	'tz_zones'	=> array(
		'-12'	=> '[UTC - 12] Baker Island Time',
		'-11'	=> '[UTC - 11] Niue Time, Samoa Standard Time',
		'-10'	=> '[UTC - 10] Hawaii',
		'-9.5'	=> '[UTC - 9:30] Marquesas Islands Time',
		'-9'	=> '[UTC - 9] Alaska Standard Time, Gambier Island Time',
		'-8'	=> '[UTC - 8] Pacific Standard Time',
		'-7'	=> '[UTC - 7] Mountain Standard Time',
		'-6'	=> '[UTC - 6] Central Standard Time',
		'-5'	=> '[UTC - 5] Eastern Standard Time',
		'-4'	=> '[UTC - 4] Atlantic Standard Time',
		'-3.5'	=> '[UTC - 3:30] Newfoundland Standard Time',
		'-3'	=> '[UTC - 3] Amazon Standard Time, Central Greenland Time',
		'-2'	=> '[UTC - 2] Fernando de Noronha Time, South Georgia &amp; the South Sandwich Islands Time',
		'-1'	=> '[UTC - 1] Azores, Cape Verde Islands',
		'0'		=> '[UTC] Western European Time, Greenwich Mean Time',
		'1'		=> '[UTC + 1] Central European Time, West African Time',
		'2'		=> '[UTC + 2] Eastern European Time, Central African Time',
		'3'		=> '[UTC + 3] Moscow Standard Time, Eastern African Time',
		'3.5'	=> '[UTC + 3:30] Iran Standard Time',
		'4'		=> '[UTC + 4] Gulf Standard Time, Samara Standard Time',
		'4.5'	=> '[UTC + 4:30] Afghanistan Time',
		'5'		=> '[UTC + 5] Pakistan Standard Time, Yekaterinburg Standard Time',
		'5.5'	=> '[UTC + 5:30] Indian Standard Time, Sri Lanka Time',
		'5.75'	=> '[UTC + 5:45] Nepal Time',
		'6'		=> '[UTC + 6] Bangladesh Time, Bhutan Time, Novosibirsk Standard Time',
		'6.5'	=> '[UTC + 6:30] Cocos Islands Time, Myanmar Time',
		'7'		=> '[UTC + 7] (กรุงเทพฯ) Indochina Time, Krasnoyarsk Standard Time',
		'8'		=> '[UTC + 8] Chinese Standard Time, Australian Western Standard Time, Irkutsk Standard Time',
		'8.75'	=> '[UTC + 8:45] Southeastern Western Australia Standard Time',
		'9'		=> '[UTC + 9] Japan Standard Time, Korea Standard Time, Chita Standard Time',
		'9.5'	=> '[UTC + 9:30] Australian Central Standard Time',
		'10'	=> '[UTC + 10] Australian Eastern Standard Time, Vladivostok Standard Time',
		'10.5'	=> '[UTC + 10:30] Lord Howe Standard Time',
		'11'	=> '[UTC + 11] Solomon Island Time, Magadan Standard Time',
		'11.5'	=> '[UTC + 11:30] Norfolk Island Time',
		'12'	=> '[UTC + 12] New Zealand Time, Fiji Time, Kamchatka Standard Time',
		'12.75'	=> '[UTC + 12:45] Chatham Islands Time',
		'13'	=> '[UTC + 13] Tonga Time, Phoenix Islands Time',
		'14'	=> '[UTC + 14] Line Island Time',
	),
	
    // The value is only an example and will get replaced by the current time on view
    'dateformats'	            => array(
		'd M Y, H:i'            => '01 ม.ค. 2007, 13:37',
		'd M Y H:i'             => '01 ม.ค. 2007 13:37',
		'M jS, \'y, H:i'	    => 'ม.ค. 1st, \'07, 13:37',
		'D M d, Y g:i a'	    => 'จันทร์ ม.ค. 01, 2007 1:37 pm',
		'D d M Y g:i a'         => 'จันทร์ 01 ม.ค. 2007 1:37 pm',		
		'F jS, Y, g:i a'	    => 'มกราคม 1st, 2007, 1:37 pm',
		'|d M Y|, H:i'          => 'วันนี้, 13:37 / 01 ม.ค. 2007, 13:37',
		'|F jS, Y|, g:i a'	    => 'วันนี้, 1:37 pm / มกราคม 1st, 2007, 1:37 pm',
	),

    // The default dateformat which will be used on new installs in this language
	// Translators should change this if a the usual date format is different
	'default_dateformat'	=> 'D d M Y g:i a', // Mon 01 Jan 2007 1:37 pm

));

?>
