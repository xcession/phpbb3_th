<?php
// Modified by xcession

/**
*
* acp_board [Thai]
*
* @package language
* @version $Id: board.php 8554 2008-05-15 13:29:14Z Kellanved $
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

// Board Settings
$lang = array_merge($lang, array(
	'ACP_BOARD_SETTINGS_EXPLAIN'	=> 'คุณสามารถกำหนดค่าพื้นฐานเว็บบอร์ด, เช่น ตั้งชื่อเว็บบอร์ดและตั้งค่าต่างๆของ เวลา และภาษา',
	'CUSTOM_DATEFORMAT'				=> 'กำหนดเอง…',
	'DEFAULT_DATE_FORMAT'			=> 'รูปแบบเวลา',
	'DEFAULT_DATE_FORMAT_EXPLAIN'	=> 'รูปแบบของเวลา เหมือนกับ function <code>date</code>ของ PHP ',
	'DEFAULT_LANGUAGE'				=> 'ภาษาเริ่มต้น',
	'DEFAULT_STYLE'					=> 'รูปแบบเริ่มต้น',
	'DISABLE_BOARD'					=> 'ปิดเว็บบอร์ด',
	'DISABLE_BOARD_EXPLAIN'			=> 'การตั้งค่านี้จะทำให้ผู้ใช้ไม่สามารถใช้เว็บบอร์ดได้ คุณสามารถตั้งข้อความสั้นๆ (255 ตัวอักษร) เพื่อแสดงให้ผู้ใช้ทราบถึงเหตุผลของการปิดเว็บบอร์ด',
	'OVERRIDE_STYLE'				=> 'กำหนดรูปแบบกับผู้ใช้ทุกคน',
	'OVERRIDE_STYLE_EXPLAIN'		=> 'แทนที่รูปแบบผู้ใช้ด้วยค่าเริ่มต้น',
	'SITE_DESC'						=> 'คำอธิบายเว็บบอร์ด',
	'SITE_NAME'						=> 'ชื่อเว็บบอร์ด',
	'SYSTEM_DST'					=> 'Enable Summer Time/<abbr title="Daylight Saving Time">DST</abbr>',
	'SYSTEM_TIMEZONE'				=> 'รูปแบบเวลาของระบบ',
	'WARNINGS_EXPIRE'				=> 'ระยะเวลาการเตือน',
	'WARNINGS_EXPIRE_EXPLAIN'		=> 'จำนวนวัน ก่อนที่ตำเตือนจะหมดอายุโดยอัตโนมัติ',
));

// Board Features
$lang = array_merge($lang, array(
	'ACP_BOARD_FEATURES_EXPLAIN'	=> 'คุณสามารถ ใช้งาน/ยกเลิก feature ของบอร์ด',

	'ALLOW_ATTACHMENTS'			=> 'อนุญาตไฟล์แนบ',
	'ALLOW_BIRTHDAYS'			=> 'อนุญาตวันเกิด',
	'ALLOW_BIRTHDAYS_EXPLAIN'	=> 'อนุญาตให้มีการใส่วันเกิดและแสดงอายุใน profiles. ',
	'ALLOW_BOOKMARKS'			=> 'อนุญาต bookmark กระทู้',
	'ALLOW_BOOKMARKS_EXPLAIN'	=> 'ผู้ใช้ สามารถเก็บ bookmark ส่วนตัว',
	'ALLOW_BBCODE'				=> 'อนุญาต BBCode',
	'ALLOW_FORUM_NOTIFY'		=> 'อนุญาต การสมัคร forums',
	'ALLOW_NAME_CHANGE'			=> 'อนุญาตให้เปลี่ยนชื่อผู้ใช้',
	'ALLOW_NO_CENSORS'			=> 'อนุญาต disabling of word censoring',
	'ALLOW_NO_CENSORS_EXPLAIN'	=> 'ผู้ใช้sสามารถchoose to disable the automatic word censoring of posts and ข้อความส่วนตัว .',
	'ALLOW_PM_ATTACHMENTS'		=> 'อนุญาตไฟล์แนบในข้อความส่วนตัว ',
	'ALLOW_SIG'					=> 'อนุญาตลายเซ็นต์',
	'ALLOW_SIG_BBCODE'			=> 'อนุญาต BBCodeในลายเซ็นต์ผู้ใช้',
	'ALLOW_SIG_FLASH'			=> 'อนุญาตการใช้  <code>[FLASH]</code> BBCode tag ในลายเซ็นต์ผู้ใช้',
	'ALLOW_SIG_IMG'				=> 'อนุญาตการใช้ <code>[IMG]</code> BBCode tag ในลายเซ็นต์ผู้ใช้',
	'ALLOW_SIG_LINKS'			=> 'อนุญาตการใช้ลิงค์ในลายเซ็นต์ผู้ใช้',
	'ALLOW_SIG_LINKS_EXPLAIN'	=> 'ถ้าไม่อนุญาต <code>[URL]</code> BBCode tag และ automatic/magic URLs ถูกห้ามใช้',
	'ALLOW_SIG_SMILIES'			=> 'อนุญาตการใช้ smilies ในลายเซ็นต์ผู้ใช้',
	'ALLOW_SMILIES'				=> 'อนุญาต smilies',
	'ALLOW_TOPIC_NOTIFY'		=> 'อนุญาตให้สมัครแจ้งกระทู้',
	'BOARD_PM'					=> 'ข้อความส่วนตัว',
	'BOARD_PM_EXPLAIN'			=> 'ใช้หรือยกเลิกข้อความส่วนตัวสำหรับผู้ใช้ทุกคน',
));

// Avatar Settings
$lang = array_merge($lang, array(
	'ACP_AVATAR_SETTINGS_EXPLAIN'	=> 'โดยปกติภาพประจำตัวจะมีขนาดเล็ก ผู้ใช้แต่ละคนสามารถใช้ภาพแทนตัวได้ การที่จะอัพโหลดภาพประจำตัว ต้องสร้างไดเรกทอรี่เพื่อให้เวบเซิร์ฟเวอร์สามารถเขียนทับได้ ',

	'ALLOW_LOCAL'					=> 'ใช้งานแกลเลอรี่ภาพประจำตัว',
	'ALLOW_REMOTE'					=> 'ใช้งานภาพประจำตัว remote',
	'ALLOW_REMOTE_EXPLAIN'			=> 'ภาพประจำตัว ที่อ้างอิงจากเวบอื่น',
	'ALLOW_UPLOAD'					=> 'ใช้งานการอัพโหลดภาพประจำตัว',
	'AVATAR_GALLERY_PATH'			=> 'เส้นทางแกลเลอรี่ภาพประจำตัว',
	'AVATAR_GALLERY_PATH_EXPLAIN'	=> 'เส้นทางภายใต้ phpBB ไดเรกทอรี่รากสำหรับ pre-loaded ภาพ, เช่น <samp>ภาพ/ภาพประจำตัวs/แกลเลอรี่</samp>.',
	'AVATAR_STORAGE_PATH'			=> 'เส้นทางเก็บภาพประจำตัว ',
	'AVATAR_STORAGE_PATH_EXPLAIN'	=> 'เส้นทางภายใต้ phpBB ไดเรกทอรี่รากสำหรับ pre-loaded ภาพ, เช่น <samp>ภาพ/ภาพประจำตัวs/แกลเลอรี่</samp>.',
	'MAX_AVATAR_SIZE'				=> 'ความกว้างยาวสูงสุดของภาพประจำตัว',
	'MAX_AVATAR_SIZE_EXPLAIN'		=> 'ความกว้าง x ความสูงในหน่วยพิกเซล',
	'MAX_FILESIZE'					=> 'ขนาดไฟล์สูงสุดของภาพประจำตัว',
	'MAX_FILESIZE_EXPLAIN'			=> 'สำหรับอัพโหลดไฟล์ภาพประจำตัว',
	'MIN_AVATAR_SIZE'				=> 'ความกว้างยาวต่ำสุดของภาพประจำตัว ',
	'MIN_AVATAR_SIZE_EXPLAIN'		=> 'ความกว้าง x ความสูงในพิกเซล',
));

// Message Settings
$lang = array_merge($lang, array(
	'ACP_MESSAGE_SETTINGS_EXPLAIN'		=> 'คุณสามารถตั้งค่าเริ่มต้นสำหรับข้อความ',

	'ALLOW_BBCODE_PM'			=> 'อนุญาต BBCodeในข้อความส่วนตัว ',
	'ALLOW_FLASH_PM'			=> 'อนุญาต การใช้ <code>[FLASH]</code> BBCode tag',
	'ALLOW_FLASH_PM_EXPLAIN'	=> 'การใช้ flash ในข้อความส่วนตัว , ถ้าใช้งาน, ขึ้นกับการอนุญาตด้วย',
	'ALLOW_FORWARD_PM'			=> 'อนุญาตการส่งต่อข้อความส่วนตัว ',
	'ALLOW_IMG_PM'				=> 'อนุญาตการใช้ <code>[IMG]</code> BBCode tag',
	'ALLOW_MASS_PM'				=> 'อนุญาตการส่งข้อความส่วนตัวไปถึงผู้ใช้หลายคนและกลุ่มต่างๆ',
	'ALLOW_PRINT_PM'			=> 'อนุญาตมุมมองการพิมพ์ในข้อความส่วนตัว',
	'ALLOW_QUOTE_PM'			=> 'อนุญาต quotes ในข้อความส่วนตัว ',
	'ALLOW_SIG_PM'				=> 'อนุญาตลายเซ็นต์ในข้อความส่วนตัว ',
	'ALLOW_SMILIES_PM'			=> 'อนุญาต smilies ในข้อความส่วนตัว ',
	'BOXES_LIMIT'				=> 'ข้อความส่วนตัวสูงสุดต่อกล่อง',
	'BOXES_LIMIT_EXPLAIN'		=> 'ผู้ใช้จะได้รับข้อความในในกล่องข้อความไม่เกินที่กำหนดไว้. ตั้งค่านี้เป็น 0 เพื่ออนุญาต ข้อความไม่จำกัด',
	'BOXES_MAX'					=> 'จำนวนโฟลเดอร์ข้อความส่วนตัวสูงสุด',
	'BOXES_MAX_EXPLAIN'			=> 'ผู้ใช้สามารถสร้างโฟลเดอร์ส่วนตัวสำหรับเก็บข้อความส่วนตัว',
	'ENABLE_PM_ICONS'			=> 'ใช้ไอคอนกระทู้ในข้อความส่วนตัว ',
	'FULL_FOLDER_ACTION'		=> 'Full folder default action',
	'FULL_FOLDER_ACTION_EXPLAIN'=> 'Default action to take if a user’s folder is full assuming the user’s folder action, if set at all, is not applicable. The only exception is for the “Sent messages” folder where the default action is always to delete old messages.',
	'HOLD_NEW_MESSAGES'			=> 'Hold new message',
	'PM_EDIT_TIME'				=> 'จำกัดเวลาแก้ไข',
	'PM_EDIT_TIME_EXPLAIN'		=> 'จำกัดเวลาแก้ไขข้อความส่วนตัวที่ยังไม่ได้ส่ง  ตั้งค่าเวลาเป็น 0 เพื่อยกเลิกพฤติกรรมนี้',
));

// Post Settings
$lang = array_merge($lang, array(
	'ACP_POST_SETTINGS_EXPLAIN'			=> 'คุณสามารถตั้งค่าเริ่มต้นทั้งหมดในการโพส',
	'ALLOW_POST_LINKS'					=> 'อนุญาตลิงค์ในโพส/ข้อความส่วนตัว ',
	'ALLOW_POST_LINKS_EXPLAIN'			=> 'ถ้าไม่อนุญาต <code>[URL]</code> BBCode tag และ automatic/magic URLs จะไม่สามารถใช้ได้',
	'ALLOW_POST_FLASH'					=> 'อนุญาตการใช้ <code>[FLASH]</code> BBCode tag ในโพส ',
	'ALLOW_POST_FLASH_EXPLAIN'			=> 'If disallowed the <code>[FLASH]</code> BBCode tag is disabled in posts. Otherwise the permission system controls which users can use the <code>[FLASH]</code> BBCode tag.',

	'BUMP_INTERVAL'					=> 'ช่วงเวลาการ Bump',
	'BUMP_INTERVAL_EXPLAIN'			=> 'จำนวนนาที, ชั่วโมงหรือวันระหว่างการโพสล่าสุดในกระทู้และความสามารถในการ bump กระทู้นี้',
	'CHAR_LIMIT'					=> 'จำนวนตัวอักษรสูงสุด ต่อการโพส',
	'CHAR_LIMIT_EXPLAIN'			=> 'จำนวนตัวอักษรที่อนุญาตในการโพสหนึ่งครั้ง ตั้งค่า 0 เพื่อไม่จำกัดจำนวน',
	'DISPLAY_LAST_EDITED'			=> 'แสดงเวลาแก้ไขล่าสุด',
	'DISPLAY_LAST_EDITED_EXPLAIN'	=> 'เลือกเพื่อให้แสดงเวลาแก้ไขล่าสุดในการโพส',
	'EDIT_TIME'						=> 'จำกัดเวลาแก้ไข',
	'EDIT_TIME_EXPLAIN'				=> 'จำกัดเวลาที่ให้ในการแก้ไขโพสใหม่ ตั้งค่า 0 เพื่อไม่ใช้พฤติกรรมนี้',
	'FLOOD_INTERVAL'				=> 'ช่วงเวลาการ Flood',
	'FLOOD_INTERVAL_EXPLAIN'		=> 'จำนวนวินาทีที่ผู้ใช้ ต้องรอ ระหว่างที่จะโพสข้อความใหม่. ต้องอนุญาต ผู้ใช้ถึงจะสามารถละเลยค่านี้ได้',
	'HOT_THRESHOLD'					=> 'ค่านับจุดเริ่มต้นของกระทู้ยอดนิยม',
	'HOT_THRESHOLD_EXPLAIN'			=> 'ค่านับจุดเริ่มต้นของการโพสต่อกระทู้ ที่จะถือว่าเป็นกระทู้ยอดนิยม ตั้งค่านี้เป็น 0 เพื่อไม่ใช้กระทู้ยอดนิยม',
	'MAX_POLL_OPTIONS'				=> 'จำนวนสูงสุดของตัวเลือกแบบสำรวจ',
	'MAX_POST_FONT_SIZE'			=> 'ขนาดฟอนต์สูงสุดต่อการโพส',
	'MAX_POST_FONT_SIZE_EXPLAIN'	=> 'ขนาดฟอนต์สูงสุดอนุญาตให้โพส ตั้งค่าเป็น 0 เพื่อไม่จำกัดขนาดฟอนต์ ',
	'MAX_POST_IMG_HEIGHT'			=> 'ความสูงภาพสูงสุด',
	'MAX_POST_IMG_HEIGHT_EXPLAIN'	=> 'ขนาดความสูง สูงสุดของไฟล์ image/flash ในการโพส ตั้งค่าเป็น 0 เพื่อไม่จำกัดขนาดความสูง',
	'MAX_POST_IMG_WIDTH'			=> 'ความกว้างภาพสูงสุด',
	'MAX_POST_IMG_WIDTH_EXPLAIN'	=> 'ขนาดความกว้างสูงสุดของไฟล์ image/flash ในการโพส ตั้งค่าเป็น 0 เพื่อไม่จำกัดขนาดความกว้าง',
	'MAX_POST_URLS'					=> 'จำนวนลิงค์สูงสุดต่อโพส',
	'MAX_POST_URLS_EXPLAIN'			=> 'จำนวนสูงสุด URL ในการโพส ตั้งค่าเป็น 0 เพื่อไม่จำกัดจำนวนลิงค์',
	'POSTING'						=> 'การโพส',
	'POSTS_PER_PAGE'				=> 'โพสต่อหนึ่งหน้า',
	'QUOTE_DEPTH_LIMIT'				=> 'จำนวนการอ้างอิงซ้อนสูงสุดต่อโพส',
	'QUOTE_DEPTH_LIMIT_EXPLAIN'		=> 'จำนวนชั้นสูงสุดของการอ้างอิงซ้อนของการโพส  ตั้งค่านี้เป็น 0 เพื่อไม่จำกัดจำนวนชั้นการซ้อน',
	'SMILIES_LIMIT'					=> 'จำนวน smilies สูงสุดต่อโพส',
	'SMILIES_LIMIT_EXPLAIN'			=> 'จำนวน smilies สูงสุดต่อโพส ตั้งค่านี้เป็น 0 เพื่อไม่จำกัดจำนวน',
	'TOPICS_PER_PAGE'				=> 'จำนวนกระทู้ต่อหนึ่งหน้า',
));

// Signature Settings
$lang = array_merge($lang, array(
	'ACP_SIGNATURE_SETTINGS_EXPLAIN'	=> 'คุณสามารถตั้งค่าเริ่มต้นทั้งหมดของลายเซ็นต์',

	'MAX_SIG_FONT_SIZE'				=> 'ขนาดสูงสุดของฟอนต์ในลายเซ็นต์',
	'MAX_SIG_FONT_SIZE_EXPLAIN'		=> 'ขนาดสูงสุดของฟอนต์ที่อนุญาตให้ใช้ในลายเซ็นต์ของผู้ใช้ ตั้งค่านี้เป็น 0 เพื่อไม่จำกัดขนาด',
	'MAX_SIG_IMG_HEIGHT'			=> 'ความสูงภาพสูงสุดใน ลายเซ็นต์ ',
	'MAX_SIG_IMG_HEIGHT_EXPLAIN'	=> 'ความสูง สูงสุดของไฟล์  image/flash ในลายเซ็นต์ ตั้งค่านี้เป็น 0 เพื่อไม่จำกัดขนาด',
	'MAX_SIG_IMG_WIDTH'				=> 'ความกว้างสูงสุดของภาพในลายเซ็นต์',
	'MAX_SIG_IMG_WIDTH_EXPLAIN'		=> 'ความกว้าง สูงสุดของไฟล์ image/flash ในลายเซ็นต์ของผู้ใช้. ตั้งค่านี้เป็น 0 เพื่อไม่จำกัดขนาด',
	'MAX_SIG_LENGTH'				=> 'ความยาวสูงสุดของลายเซ็นต์',
	'MAX_SIG_LENGTH_EXPLAIN'		=> 'ความยาวสูงสุดของตัวอักษรในลายเซ็นต์ของผู้ใช้',
	'MAX_SIG_SMILIES'				=> 'จำนวน smilies สูงสุดต่อลายเซ็นต์',
	'MAX_SIG_SMILIES_EXPLAIN'		=> 'จำนวน smilies สูงสุดที่อนุญาตให้ใช้ในลายเซ็นต์ของผู้ใช้ ตั้งค่านี้เป็น 0 เพื่อไม่จำกัดจำนวน',
	'MAX_SIG_URLS'					=> 'จำนวนลิงค์ลายเซ็นต์สูงสุด ',
	'MAX_SIG_URLS_EXPLAIN'			=> 'จำนวนสูงสุดของลิงค์ในลายเซ็นต์ของผู้ใช้ ตั้งค่านี้เป็น 0 เพื่อไม่จำกัดจำนวน',
));

// Registration Settings
$lang = array_merge($lang, array(
	'ACP_REGISTER_SETTINGS_EXPLAIN'		=> 'คุณสามารถกำหนดการตั้งค่าต่างๆของการลงทะเบียนและประวัติโดยย่อได้',

	'ACC_ACTIVATION'			=> 'การเปิดใช้บัญชีผู้ใช้',
	'ACC_ACTIVATION_EXPLAIN'	=> 'กำหนดว่าจะให้ผู้ใช้สามารถเข้าใช้บอร์ดได้ทันที หรือต้องการการยืนยันก่อนเข้าใช้ คุณสามารถยกเลิกการลงทะเบียนใหม่ได้เช่นกัน',
	'ACC_ADMIN'					=> 'By Admin',
	'ACC_DISABLE'				=> 'ยกเลิก',
	'ACC_NONE'					=> 'ไม่มี',
	'ACC_USER'					=> 'By User',
//	'ACC_USER_ADMIN'			=> 'User + Admin',
	'ALLOW_EMAIL_REUSE'			=> 'อนุญาตให้ e-mail address มีการใช้ใหม่',
	'ALLOW_EMAIL_REUSE_EXPLAIN'	=> 'ผู้ใช้คนละคนสามารถลงทะเบียนด้วย e-mail address เดียวกันได้',
	'COPPA'						=> 'COPPA',
	'COPPA_FAX'					=> 'COPPA fax number',
	'COPPA_MAIL'				=> 'COPPA mailing address',
	'COPPA_MAIL_EXPLAIN'		=> 'This is the mailing address where parents will send COPPA registration forms.',
	'ENABLE_COPPA'				=> 'Enable COPPA',
	'ENABLE_COPPA_EXPLAIN'		=> 'This requires users to declare whether they are 13 or over for compliance with the U.S. COPPA. If this is disabled the COPPA specific groups will no longer be displayed.',
	'MAX_CHARS'					=> 'Max',
	'MIN_CHARS'					=> 'Min',
	'NO_AUTH_PLUGIN'			=> 'ไม่พบ auth plugin.',
	'PASSWORD_LENGTH'			=> 'ความยาวรหัสผ่าน',
	'PASSWORD_LENGTH_EXPLAIN'	=> 'จำนวนต่ำสุดและจำนวนสูงสุดของตัวอักษรในรหัสผ่าน',
	'REG_LIMIT'					=> 'ความพยายามลงทะเบียน',
	'REG_LIMIT_EXPLAIN'			=> 'จำนวนครั้งที่ผู้ใช้สามารถพยายามที่จะลงทะเบียนผ่าน confirmation code ก่อนที่จะทำการล็อก Session',
	'USERNAME_ALPHA_ONLY'		=> 'A-Z และ 0-9 เท่านั้น',
	'USERNAME_ALPHA_SPACERS'	=> 'A-Z, 0-9, ช่องว่าง , -, +, _, [ และ ]',
	'USERNAME_ASCII'			=> 'ASCII (no international unicode)',
	'USERNAME_LETTER_NUM'		=> 'อักษรใดๆและตัวเลข',
	'USERNAME_LETTER_NUM_SPACERS'	=> 'อักษรใดๆ ตัวเลข,ช่องว่าง , -, +, _, [ และ ]',
	'USERNAME_CHARS'			=> 'จำกัดจำนวนตัวอักษรของชื่อผู้ใช้',
	'USERNAME_CHARS_ANY'		=> 'ตัวอักษรใดก็ได้',
	'USERNAME_CHARS_EXPLAIN'	=> 'การกำหนดตัวอักษรที่ให้ใช้ได้ในชื่อผู้ใช้',
	'USERNAME_LENGTH'			=> 'ความยาวชื่อผู้ใช้',
	'USERNAME_LENGTH_EXPLAIN'	=> 'จำนวนต่ำสุดและสูงสุดของตัวอักษรในชื่อผู้ใช้',
));

// Visual Confirmation Settings
$lang = array_merge($lang, array(
	'ACP_VC_SETTINGS_EXPLAIN'		=> 'คุณสามารถตั้งค่าเริ่มต้นของการยืนยันการเห็นและ CAPTCHA',

	'CAPTCHA_GD'							=> 'GD CAPTCHA',
	'CAPTCHA_GD_FOREGROUND_NOISE'			=> 'GD CAPTCHA foreground noise',
	'CAPTCHA_GD_EXPLAIN'					=> 'Use GD to make a more advanced CAPTCHA.',
	'CAPTCHA_GD_FOREGROUND_NOISE_EXPLAIN'	=> 'Use foreground noise to make the GD based CAPTCHA harder.',
	'CAPTCHA_GD_X_GRID'						=> 'GD CAPTCHA background noise x-axis',
	'CAPTCHA_GD_X_GRID_EXPLAIN'				=> 'Use lower settings of this to make the GD based CAPTCHA harder. 0 will disable x-axis background noise.',
	'CAPTCHA_GD_Y_GRID'						=> 'GD CAPTCHA background noise y-axis',
	'CAPTCHA_GD_Y_GRID_EXPLAIN'				=> 'Use lower settings of this to make the GD based CAPTCHA harder. 0 will disable y-axis background noise.',

	'CAPTCHA_PREVIEW_MSG'					=> 'ความเปลี่ยนแปลงที่คุณได้ทำกับการยืนยันการมองเห็นยังไม่ถูกนำไปใช้ นี้เป็นเพืยงแค่การให้ดูก่อน',
	'CAPTCHA_PREVIEW_EXPLAIN'				=> 'The CAPTCHA as it will look like using the current settings. Use the preview button to refresh. Note that captchas are randomized and will differ from one view to the next.',
	'VISUAL_CONFIRM_POST'					=> 'ใช้การยืนยันการมองเห็นสำหรับการโพส',
	'VISUAL_CONFIRM_POST_EXPLAIN'			=> 'ตั้งค่าให้ผู้ใช้ที่ไม่ระบุตัวตนต้องใส่รหัสที่สุ่มให้เพื่อป้องกันการโพสคราวละมากๆ',
	'VISUAL_CONFIRM_REG'					=> 'ใช้การยืนยันการมองเห็นสำหรับการลงทะเบียน',
	'VISUAL_CONFIRM_REG_EXPLAIN'			=> 'ตั้งค่าให้ผู้ใช้ใหม่ต้องใส่รหัสที่สุ่มให้ เพื่อป้องกันการลงทะเบียนคราวละมากๆ',
));

// Cookie Settings
$lang = array_merge($lang, array(
	'ACP_COOKIE_SETTINGS_EXPLAIN'		=> 'รายละเอียดเหล่านี้ กำหนดข้อมูลที่ใช้ส่งคุกกี้ไปให้ผู้ใช้ โดยปกติ ค่าเริ่มต้นควรจะใช้ได้ดีอยู่แล้ว  หากคุณต้องการเปลี่ยนค่าใดๆก็ตาม ควรทำด้วยความระมัดระวัง ค่าที่ไม่ถูกต้องสามารถทำให้ผู้ใช้ไม่สามารถล็อกอินได้',

	'COOKIE_DOMAIN'				=> 'Cookie domain',
	'COOKIE_NAME'				=> 'Cookie name',
	'COOKIE_PATH'				=> 'Cookie path',
	'COOKIE_SECURE'				=> 'Cookie secure',
	'COOKIE_SECURE_EXPLAIN'		=> 'ถ้าเซิร์ฟเวอร์รันผ่าน SSL ตั้งค่านี้เป็น enabled นอกนั้นปล่อยให้เป็น disabled การตั้งค่านี้ให้ enabled แต่ไม่ได้รันผ่าน SSL จะทำให้เซิร์ฟเวอร์ทำงานผิดพลาดขณะรีไดเรก',
	'ONLINE_LENGTH'				=> 'ดูช่วงเวลาออนไลน์',
	'ONLINE_LENGTH_EXPLAIN'		=> 'จำนวนนาทีที่ผู้ใช้ที่ไม่แอคทีฟ จะไม่ปรากฎในรายการ “Who is online” ค่าที่สูงยิ่งต้องการการประมวลผลมากขึ้นในการสร้างรายการ',
	'SESSION_LENGTH'			=> 'Session length',
	'SESSION_LENGTH_EXPLAIN'	=> 'Sessions จะหมดอายุหลังจากเวลานี้,ในหน่วยวินาที',
));

// Load Settings
$lang = array_merge($lang, array(
	'ACP_LOAD_SETTINGS_EXPLAIN'	=> 'คุณสามารถเลือกใช้หรือไม่ใช้บางหน้าที่ของบอร์ด เพื่อลดการประมวลผลได้ ในเซิร์ฟเวอร์ทั่วไป ไม่มีความจำเป็นที่ต้องยกเลิกหน้าที่เหล่านี้ อย่างไรก็ตาม ก็สามารถทำได้หากมีความจำเป็น คุณสามารถจำกัดโหลดและ session ที่แอคทีฟ ก่อนที่บอร์ดจะออฟไลน์',

	'CUSTOM_PROFILE_FIELDS'			=> 'Custom profile fields',
	'LIMIT_LOAD'					=> 'จำกัดโหลดของระบบ',
	'LIMIT_LOAD_EXPLAIN'			=> 'ถ้าโหลดของระบบ ภายใน 1 นาที เกินค่าเฉลี่ย บอร์ดจะออฟไลน์  ค่า 1.0 เท่ากับ ~100% ของหนึ่งโปรเซสเซอร์ หน้าที่นี้ใช้ได้บน UNIX เซิร์ฟเวอร์  ค่านี้จะตั้งค่าตัวเองเป็น 0 ถ้า  phpBB ไม่สามารถตรวจสอบค่าโหลด',
	'LIMIT_SESSIONS'				=> 'จำกัด sessions',
	'LIMIT_SESSIONS_EXPLAIN'		=> 'ถ้า sessions ของระบบภายใน 1 นาที เกินกว่าค่านี้ บอร์ดจะออฟไลน์ ตั้งค่าเป็น 0 เพื่อไม่จำกัด sessions',
	'LOAD_CPF_MEMBERLIST'			=> 'อนุญาติ styles สำหรับ profile ที่กำหนดเองใน memberlist',
	'LOAD_CPF_VIEWPROFILE'			=> 'แสดง custom profile fields ใน user profiles',
	'LOAD_CPF_VIEWTOPIC'			=> 'แสดงข้อมูลที่กำหนดเองบน topic pages',
	'LOAD_USER_ACTIVITY'			=> 'Show user’s activity',
	'LOAD_USER_ACTIVITY_EXPLAIN'	=> 'แสดงแอคทีฟ topic/forum ใน profiles ของผู้ใช้และ แป้นควบคุมผู้ใช้ ค่านี้แนะนำให้เลิกใช้ในบอร์ดที่มีโพสมากกว่าหนึ่งล้าน',
	'RECOMPILE_STYLES'				=> 'Recompile stale style components',
	'RECOMPILE_STYLES_EXPLAIN'		=> 'ตรวจสอบอัพเดทส่วนประกอบของรูปแบบบนระบบไฟล์และคอมไพล์ใหม่',
	'YES_ANON_READ_MARKING'			=> 'อนุญาตให้แขกทำสัญลักษณ์ในกระทู้',
	'YES_ANON_READ_MARKING_EXPLAIN'	=> 'เก็บข้อมูลสถานะ read/unread สำหรับแขก ถ้ายกเลิกค่านี้ แขกจะอ่านโพสได้อย่างเดียว',
	'YES_BIRTHDAYS'					=> 'อนุญาตรายการวันเกิด',
	'YES_BIRTHDAYS_EXPLAIN'			=> 'ถ้าไม่ใช้ค่านี้ รายการวันเกิดจะไม่สามารถแสดงได้ ถ้าหากต้องการให้การตั้งค่านี้มีผลกับวันเกิด ต้องทำการอนุญาต',
	'YES_JUMPBOX'					=> 'อนุญาตการแสดง jumpbox',
	'YES_MODERATORS'				=> 'อนุญาต moderators',
	'YES_ONLINE'					=> 'อนุญาตรายการผู้ใช้ออนไลน์',
	'YES_ONLINE_EXPLAIN'			=> 'แสดงข้อมูลผู้ใช้ออนไลน์บนดัชนี, forum และหน้ากระทู้',
	'YES_ONLINE_GUESTS'				=> 'อนุญาตรายการ guest ออนไลน์',
	'YES_ONLINE_GUESTS_EXPLAIN'		=> 'อนุญาตให้แสดงรายการ guest ออนไลน์',
	'YES_ONLINE_TRACK'				=> 'อนุญาตการแสดงข้อมูลผู้ใช้ ออนไลน์/ออฟไลน์',
	'YES_ONLINE_TRACK_EXPLAIN'		=> 'แสดงข้อมูลผู้ใช้ ออนไลน์/ออฟไลน์ สำหรับ profiles ผู้ใช้และหน้ากระทู้',
	'YES_POST_MARKING'				=> 'Enable dotted topics',
	'YES_POST_MARKING_EXPLAIN'		=> 'บ่งชี้ว่าผู้ใช้ได้ทำการโพสในกระทู้แล้วหรือยัง',
	'YES_READ_MARKING'				=> 'Enable เซิร์ฟเวอร์-side topic marking',
	'YES_READ_MARKING_EXPLAIN'		=> 'เก็บสถานะ read/unread ในฐานข้อมูลแทนการใช้คุกกี้',
));

// Auth settings
$lang = array_merge($lang, array(
	'ACP_AUTH_SETTINGS_EXPLAIN'	=> 'phpBB รองรับ authentication plug-ins, หรือโมดูล ค่าการอนุญาตเหล่านี้กำหนดว่าผู้ใช้จะทำการ authenticated อย่างไร เมื่อพวกเข้าลอกอินเข้าสู่บอร์ด โดยปกติ มี 3 วิธีที่มีไว้ให้ ได้แก่ DB, LDAP และ Apache มีบางวิธีเท่านั้นที่ต้องการข้อมูลเพิ่มเติม ถ้าหากวิธีที่เลือกต้องการข้อมูลเพิ่มเติม ให้กรอกข้อมูลเพิ่มเติมนั้นด้วย',

	'AUTH_METHOD'				=> 'เลือกวิธี  authentication',

	'APACHE_SETUP_BEFORE_USE'	=> 'คุณต้องตั้งค่า apache authentication ก่อนที่คุณ สลับไปใช้ phpBB จำไว้ว่าชื่อผู้ใช้ที่คุณใช้สำหรับ apache authentication ต้องเป็นอย่างเดียวกันกับ phpBB  Apache authentication สามารถใช้กับ mod_php (ไม่ใช้กับด้วยCGI version) และไม่ใช้ safe_mode ',

	'LDAP_DN'						=> 'LDAP base <var>dn</var>',
	'LDAP_DN_EXPLAIN'				=> 'This is the Distinguished Name, locating the user information, e.g. <samp>o=My Company,c=US</samp>.',
	'LDAP_EMAIL'					=> 'LDAP e-mail attribute',
	'LDAP_EMAIL_EXPLAIN'			=> 'ตั้งค่านี้ให้กับชื่อผู้ใช้ ในส่วน e-mail (ถ้ามี) เพื่อที่จะตั้งค่า e-mail ให้อัตโนมัติสำหรับผู้ใช้ใหม่ ปล่อยให้ค่านี้ว่าง ทำให้ส่วน e-mail ของผู้ใช้ที่ล็อกอินครั้งแรกว่างด้วย',
	'LDAP_INCORRECT_USER_PASSWORD'	=> 'ล้มเหลวในการผูกกับ LDAP เซิร์ฟเวอร์ ด้วย user/password ที่ระบุ',
	'LDAP_NO_EMAIL'					=> 'e-mail ที่ระบุไม่มีอยู่จริง.',
	'LDAP_NO_IDENTITY'				=> 'หาล็อกอินสำหรับ %s ไม่เจอ',
	'LDAP_PASSWORD'					=> 'LDAP password',
	'LDAP_PASSWORD_EXPLAIN'			=> 'ปล่อยค่านี้ให้ว่างเพื่อผูกแบบ anonymous หรือไม่ก็กรอก password สำหรับผู้ใช้ด้านบน ต้องการสำหรับแอคทีฟไดเรกทอรี่เซิร์ฟเวอร์ <strong>คำเตือน:</strong> password นี้จะเก็บเป็นข้อความธรรมดาใน ฐานข้อมูล ทุกคนที่เข้าถึงฐานข้อมูลได้ สามารถมองเห็นได้',
	'LDAP_PORT'						=> 'LDAP เซิร์ฟเวอร์ port',
	'LDAP_PORT_EXPLAIN'				=> 'คุณสามารถระบุพอร์ตที่ใช้เพื่อติดต่อกับ LDAP เซิร์ฟเวอร์ แทนที่จะใช้พอร์ตเริ่มต้น 389',
	'LDAP_SERVER'					=> 'LDAP เซิร์ฟเวอร์ name',
	'LDAP_SERVER_EXPLAIN'			=> 'ถ้ากำลังใช้ LDAP นี่คือ hostname หรือ IP address ของ LDAP เซิร์ฟเวอร์ คุณสามารถระบุ URL เช่น ldap://hostname:port/',
	'LDAP_UID'						=> 'LDAP <var>uid</var>',
	'LDAP_UID_EXPLAIN'				=> 'This is the key under which to search for a given login identity, e.g. <var>uid</var>, <var>sn</var>, etc.',
	'LDAP_USER'						=> 'ผู้ใช้ LDAP<var>dn</var>',
	'LDAP_USER_EXPLAIN'				=> 'Leave blank to use anonymous binding. If filled in phpBB uses the specified distinguished name on login attempts to find the correct user, e.g. <samp>uid=Username,ou=MyUnit,o=MyCompany,c=US</samp>. Required for Active Directory Servers.',
	'LDAP_USER_FILTER'				=> 'การกรองผู้ใช้ LDAP',
	'LDAP_USER_FILTER_EXPLAIN'		=> 'Optionally you can further limit the searched objects with additional filters. For example <samp>objectClass=posixGroup</samp> would result in the use of <samp>(&(uid=$username)(objectClass=posixGroup))</samp>',
));

// Server Settings
$lang = array_merge($lang, array(
	'ACP_SERVER_SETTINGS_EXPLAIN'	=> 'คุณกำหนดการตั้งค่าที่ขึ้นต่อกันระหว่างเซิร์ฟเวอร์และโดเมน โปรดตรวจสอบให้แน่ใจว่าทุกอย่างถูกต้อง ความผิดพลาดจะทำให้ e-mail มีข้อมูลที่ผิด เมื่อกรอกโดเมน ต้องมี http:// หรือ โปรโตคอลอื่น คุณควรแก้ไขพอร์ตก็ต่อเมื่อคุณทราบว่าเซิร์ฟเวอร์ของคุณใช้พอร์ตอื่น พอร์ต 80 เป็นค่าเริ่มต้นอยู่แล้ว',

	'ENABLE_GZIP'				=> 'เปิดการบีบอีด GZip',
	'ENABLE_GZIP_EXPLAIN'		=> 'เนื้อหาที่สร้างขึ้นจะถูกบีบอัด ก่อนที่จะส่งให้ผู้ใช้ ทำให้สามารถลดการจราจรในเครือข่ายแต่จะทำให้มีการใช้ CPU มากขึ้น ทั้งที่ฝั่งเซิร์ฟเวอร์และฝั่งลูกข่าย',
	'FORCE_SERVER_VARS'			=> 'Force server URL settings',
	'FORCE_SERVER_VARS_EXPLAIN'	=> 'If set to yes the server settings defined here will be used in favour of the automatically determined values.',
	'ICONS_PATH'				=> 'เส้นทางเก็บไอคอนโพส',
	'ICONS_PATH_EXPLAIN'		=> 'เส้นทางภายใต้ราก phpBB ไดเรกทอรี่, เช่น <samp>images/icons</samp>.',
	'PATH_SETTINGS'				=> 'การตั้งค่าเส้นทาง',
	'RANKS_PATH'				=> 'จัดอันดับเส้นทางที่เก็บภาพ',
	'RANKS_PATH_EXPLAIN'		=> 'เส้นทางภายใต้ราก phpBB ไดเรกทอรี่, e.g. <samp>images/ranks</samp>.',
	'SCRIPT_PATH'				=> 'Script path',
	'SCRIPT_PATH_EXPLAIN'		=> 'เส้นทางที่ phpBB ใช้เพื่อระบุความสัมพันธ์ในโดเมน, e.g. <samp>/phpBB3</samp>.',
	'SERVER_NAME'				=> 'Domain name',
	'SERVER_NAME_EXPLAIN'		=> 'ชื่อโดเมนที่บอร์ดใช้ (ตัวอย่าง: <samp>www.phpbbthailand.com</samp>).',
	'SERVER_PORT'				=> 'Server port',
	'SERVER_PORT_EXPLAIN'		=> 'พอร์ตที่ใช้บนเซิร์ฟเวอร์, โดยทั่วไปเป็นค่า 80, เปลี่ยนเมื่อจำเป็นเท่านั้น',
	'SERVER_PROTOCOL'			=> 'Server protocol',
	'SERVER_PROTOCOL_EXPLAIN'	=> 'นี้คือค่าที่เซิร์ฟเวอร์จะเลือกใช้  ในกรณีที่ปล่อยว่างหรือโปรโตคอลไม่ถูกบังคับโดยคุกกี้(<samp>http://</samp> or <samp>https://</samp>).',
	'SERVER_URL_SETTINGS'		=> 'Server URL settings',
	'SMILIES_PATH'				=> 'Smilies storage path',
	'SMILIES_PATH_EXPLAIN'		=> 'เส้นทางภายใต้ราก phpBB ไดเรกทอรี่, e.g. <samp>images/smilies</samp>.',
	'UPLOAD_ICONS_PATH'			=> 'Extension group icons storage path',
	'UPLOAD_ICONS_PATH_EXPLAIN'	=> 'เส้นทางภายใต้ราก phpBB ไดเรกทอรี่, e.g. <samp>images/upload_icons</samp>.',
));

// Security Settings
$lang = array_merge($lang, array(
	'ACP_SECURITY_SETTINGS_EXPLAIN'		=> 'คุณสามารถกำหนด session และการตั้งค่าล็อกอิน',

	'ALL'							=> 'ทั้งหมด',
	'ALLOW_AUTOLOGIN'				=> 'อนุญาตการล็อกอินแบบอัตโนมัติ',
	'ALLOW_AUTOLOGIN_EXPLAIN'		=> 'กำหนดว่าผู้ใช้สามารถล็อกอินแบบอัตโนมัติ เมื่อเข้าเยี่ยมชมบอร์ดได้หรือไม่',
	'AUTOLOGIN_LENGTH'				=> 'จำนวนวันที่ล็อกอินคีย์หมดอายุ',
	'AUTOLOGIN_LENGTH_EXPLAIN'		=> 'จำนวนวันที่ล็อกอินคีย์หมดอายุ ใส่ค่า 0 เพื่อยกเลิกการล็อกอินอัตโนมัติ',
	'BROWSER_VALID'					=> 'Validate browser',
	'BROWSER_VALID_EXPLAIN'			=> 'ตั้งค่าให้มีการทำ browser validation สำหรับแต่ละ session เพื่อปรับปรุงความปลอดภัย',
	'CHECK_DNSBL'					=> 'ตรวจสอบ IP กับ รายการของ DNS',
	'CHECK_DNSBL_EXPLAIN'			=> 'ถ้าเลือกใช้ IP address ของผู้ใช้จะถูกตรวจสอบกับ DNSBL ดังข้างล่างนี้: <a href="http://spamcop.net">spamcop.net</a>, <a href="http://dsbl.org">dsbl.org</a> and <a href="http://www.spamhaus.org">www.spamhaus.org</a>. This lookup may take a while, depending on the เซิร์ฟเวอร์’s configuration. If slowdowns are experienced or too many false positives reported it is recommended to disable this check.',
	'CLASS_B'						=> 'A.B',
	'CLASS_C'						=> 'A.B.C',
	'EMAIL_CHECK_MX'				=> 'ตรวจสอบ e-mail domain สำหรับความถูกต้องของ MX record',
	'EMAIL_CHECK_MX_EXPLAIN'		=> 'If enabled, the e-mail domain provided on registration and profile changes is checked for a valid MX record.',
	'FORCE_PASS_CHANGE'				=> 'บังคับเปลี่ยน password ',
	'FORCE_PASS_CHANGE_EXPLAIN'		=> 'บังคับให้ผู้ใช้เปลี่ยน password หลังจากตั้งค่า จำนวนวัน ตั้งค่าเป็น 0 เพื่อไม่ใช้พฤติกรรมนี้',
	'FORM_TIME_MAX'					=> 'เวลาสูงสุดที่ส่งค่าจากฟอร์ม',
	'FORM_TIME_MAX_EXPLAIN'			=> 'เวลาสูงสุดที่ส่งฟอร์ม ใช้ -1 เพื่อยกเลิกพฤติกรรมนี้ โปรดทราบว่า ฟอร์มอาจจะไม่ถูกต้องถ้า session หมดอายุ โดยที่ไม่เกี่ยวกับค่านี้',
	'FORM_SID_GUESTS'				=> 'Tie forms to guest sessions',
	'FORM_SID_GUESTS_EXPLAIN'		=> 'If enabled, the form token issued to guests will be session-exclusive. This can cause problems with some ISPs.',
	'FORWARDED_FOR_VALID'			=> 'Validated <var>X_FORWARDED_FOR</var> header',
	'FORWARDED_FOR_VALID_EXPLAIN'	=> 'Sessions will only be continued if the sent <var>X_FORWARDED_FOR</var> header equals the one sentด้วย the previous request. Bans will be checked against IPsใน<var>X_FORWARDED_FOR</var> too.',
	'IP_VALID'						=> 'Session IP validation',
	'IP_VALID_EXPLAIN'				=> 'Determines how much of the users IP is used to validate a session; <samp>All</samp> compares the complete address, <samp>A.B.C</samp> the first x.x.x, <samp>A.B</samp> the first x.x, <samp>None</samp> disables checking. On IPv6 addresses <samp>A.B.C</samp> compares the first 4 blocks and <samp>A.B</samp> the first 3 blocks.',
	'MAX_LOGIN_ATTEMPTS'			=> 'จำนวนครั้งสูงสุด ที่อนุญาตให้พยายามล็อกอินได้',
	'MAX_LOGIN_ATTEMPTS_EXPLAIN'	=> 'ถ้าผู้ใช้พยายามล็อกอินเกินกว่าค่านี้ จะต้องยืนยันการมองเห็นในการล็อกอินด้วย',
	'NO_IP_VALIDATION'				=> 'ไม่มี',
	'PASSWORD_TYPE'					=> 'ความซับซ้อนของ Password',
	'PASSWORD_TYPE_EXPLAIN'			=> 'กำหนดความซับซ้อนของ Password',
	'PASS_TYPE_ALPHA'				=> 'ต้องประกอบด้วย ตัวอักษรและตัวเลข',
	'PASS_TYPE_ANY'					=> 'ไม่มีเงื่อนไข',
	'PASS_TYPE_CASE'				=> 'ต้องมีอักษรตัวเล็กปนตัวใหญ่',
	'PASS_TYPE_SYMBOL'				=> 'ต้องมีสัญลักษณ์',
	'TPL_ALLOW_PHP'					=> 'อนุญาต php ในแม่แบบ',
	'TPL_ALLOW_PHP_EXPLAIN'			=> 'ถ้าเลือกใช้ตัวเลือกนี้ , <code>PHP</code> และ <code>INCLUDEPHP</code> โค้ดจะถูกประมวลในแม่แบบ',
));

// Email Settings
$lang = array_merge($lang, array(
	'ACP_EMAIL_SETTINGS_EXPLAIN'	=> 'ข้อมูลนี้ถูกใช้เมื่อบอร์ดส่ง e-mail ถึงผู้ใช้ โปรดตรวจสอบให้แน่ใจว่า  e-mail address ที่ระบุถูกต้อง, การส่งข้อความไม่ได้หรือข้อความถูกส่งกลับจะมาจาก e-mail address ที่ผิด. ถ้าโฮทส์ไม่มี native (PHP based) e-mail service คุณสามารถส่งข้อความโดยตรงโดยใช้ SMTP แทน การกระทำนี้ต้องการที่อยู่ของเซิร์ฟเวอร์ที่ถูกต้อง. ถ้าเซิร์ฟเวอร์ต้องการ authentication ให้กรอกชื่อผู้ใช้, password และวิธีการ authentication ด้วย',

	'ADMIN_EMAIL'					=> 'Return e-mail address',
	'ADMIN_EMAIL_EXPLAIN'			=> 'ข้อมูลนี้จะถูกใช้เป็นที่อยู่ส่งกลับของ e-mails ทุกอันและ technical e-mail address. ข้อมูลจะถูกใช้เป็น <samp>Return-Path</samp> และ <samp>Sender</samp> address ใน e-mails',
	'BOARD_EMAIL_FORM'				=> 'ผู้ใช้ส่ง e-mail ผ่านทางบอร์ด',
	'BOARD_EMAIL_FORM_EXPLAIN'		=> 'ใช้การส่ง e-mail ผ่านทางบอร์ด แทนที่จะแสดง e-mailของผู้ใช้ ',
	'BOARD_HIDE_EMAILS'				=> 'ซ่อน e-mail addresses',
	'BOARD_HIDE_EMAILS_EXPLAIN'		=> 'หน้าที่นี้ ทำให้ e-mail addresses มีความเป็นส่วนตัว',
	'CONTACT_EMAIL'					=> 'กรอก E-mail ของ Admin ',
	'CONTACT_EMAIL_EXPLAIN'			=> 'ที่อยู่นี้จะใช้เมื่อต้องการข้อมูลสำหรับการติดต่อ ข้อมูลนี้จะถูกใช้เป็น <samp>From</samp> และ <samp>Reply-To</samp> address ใน e-mails',
	'EMAIL_FUNCTION_NAME'			=> 'E-mail function name',
	'EMAIL_FUNCTION_NAME_EXPLAIN'	=> 'The e-mail function used to send mails through PHP.',
	'EMAIL_PACKAGE_SIZE'			=> 'ขนาด E-mail package',
	'EMAIL_PACKAGE_SIZE_EXPLAIN'	=> 'ข้อมูลนี้คือขนาดสูงสุดของ e-mails ที่ส่งออกในหนึ่ง package การตั้งค่านี้จะนำไปใช้กับการจัดข้อความภายใน ตั้งค่านี้เป็น 0 ถ้าหากคุณมีปัญหากับการส่ง หรือมีการแจ้งเตือน e-mails ที่ส่งไม่ได้',
	'EMAIL_SIG'						=> 'ลายเซ็นต์ E-mail',
	'EMAIL_SIG_EXPLAIN'				=> 'ข้อความนี้จะถูกส่งไปกับ e-mails ที่ส่งโดยบอร์ด',
	'ENABLE_EMAIL'					=> 'Enable board-wide e-mails',
	'ENABLE_EMAIL_EXPLAIN'			=> 'ถ้าค่านี้ถูกยกเลิก จะไม่สามารถส่ง e-mail ผ่านบอร์ดได้',
	'SMTP_AUTH_METHOD'				=> 'Authentication method for SMTP',
	'SMTP_AUTH_METHOD_EXPLAIN'		=> 'ให้ใช้เมื่อ ชื่อ ผู้ใช้/password ถูกตั้งค่าแล้ว',
	'SMTP_CRAM_MD5'					=> 'CRAM-MD5',
	'SMTP_DIGEST_MD5'				=> 'DIGEST-MD5',
	'SMTP_LOGIN'					=> 'LOGIN',
	'SMTP_PASSWORD'					=> 'SMTP password',
	'SMTP_PASSWORD_EXPLAIN'			=> 'ให้ตั้งค่านี้เมื่อ SMTP เซิร์ฟเวอร์ ต้องการ password',
	'SMTP_PLAIN'					=> 'PLAIN',
	'SMTP_POP_BEFORE_SMTP'			=> 'POP-BEFORE-SMTP',
	'SMTP_PORT'						=> 'SMTP เซิร์ฟเวอร์พอร์ต',
	'SMTP_PORT_EXPLAIN'				=> 'เปลี่ยนค่านี้เมื่อ SMTP เซิร์ฟเวอร์ใช้ค่าที่ต่างไปจากค่าเริ่มต้น',
	'SMTP_SERVER'					=> 'ที่อยู่ SMTP เซิร์ฟเวอร์',
	'SMTP_SETTINGS'					=> 'การตั้งค่า SMTP',
	'SMTP_USERNAME'					=> 'ชื่อผู้ใช้ SMTP',
	'SMTP_USERNAME_EXPLAIN'			=> 'กรอกชื่อผู้ใช้เมื่อ SMTP เซิร์ฟเวอร์ต้องการ',
	'USE_SMTP'						=> 'ใช้ SMTP เซิร์ฟเวอร์ในการส่ง e-mail',
	'USE_SMTP_EXPLAIN'				=> 'เลือก “Yes” ถ้าคุณต้องการจะส่ง e-mail ผ่านทางเซิร์ฟเวอร์ที่ตั้งชื่อไว้แทนที่จะใช้ local mail',
));

// Jabber settings
$lang = array_merge($lang, array(
	'ACP_JABBER_SETTINGS_EXPLAIN'	=> 'คุณสามารถเลือกใช้และควบคุมการใช้ Jabber สำหรับ instant messaging และการแจ้งบอร์ด Jabber เป็น open source โปรโตคอลและทุกคนมีสิทธิ์ใช้ บาง Jabber เซิร์ฟเวอร์ ประกอบด้วย gateway ที่อนุญาตให้คุณติดต่อผู้ใช้ในเครือข่ายอื่น มีแค่บางเซิร์ฟเวอร์เท่านั้นที่อนุญาตการขนส่งทั้งหมด การเปลี่ยนโปรโตคอลอาจทำให้การขนส่งใช้การไม่ได้ โปรดตรวจสอบข้อมูลให้แน่ใจในการกรอกรายละเอียดบัญชีผู้ใช้ที่ลงทะเบียนแล้ว - phpBB จะใช้รายละเอียดที่คุณกรอก',

	'JAB_ENABLE'				=> 'Enable Jabber',
	'JAB_ENABLE_EXPLAIN'		=> 'Enables use of Jabber messaging and notifications.',
	'JAB_GTALK_NOTE'			=> 'โปรดทราบ ไม่สามารถใช้ GTalk ได้ เพราะว่าไม่พบ <samp>dns_get_record</samp> ฟังก์ชัน ฟังก์ชันนี้ไม่มีใน PHP4 และไม่มีการทำบน Windows platforms และก็ไม่สามารถใช้ได้บน BSD-based systems รวมทั้ง Mac OS',
	'JAB_PACKAGE_SIZE'			=> 'Jabber package size',
	'JAB_PACKAGE_SIZE_EXPLAIN'	=> 'ค่านี้เป็นจำนวนข้อความที่ถูกส่งไปใน 1 package ถ้าตั้งค่าเป็น 0 ข้อความจะถูกส่งทันทีโดยไม่มีการรอจัดลำดับการส่ง',
	'JAB_PASSWORD'				=> 'Jabber password',
	'JAB_PORT'					=> 'Jabber พอร์ต',
	'JAB_PORT_EXPLAIN'			=> 'ปล่อยให้เป็นค่าว่าง นอกเสียจากคุณทราบว่า พอร์ตที่ใช้ ไม่ใช่ 5222',
	'JAB_SERVER'				=> 'Jabber server',
	'JAB_SERVER_EXPLAIN'		=> 'See %sjabber.org%s for a list of servers.',
	'JAB_SETTINGS_CHANGED'		=> 'การเปลี่ยนการตั้งค่า Jabber สำเร็จ',
	'JAB_USE_SSL'				=> 'Use SSL to connect',
	'JAB_USE_SSL_EXPLAIN'		=> 'ถ้าใช้ค่านี้ จะใช้การติดต่อแบบปลอดภัย Jabber จะถูกแก้ไขเป็น 5223 ถ้าพอร์ต 5222 ถูกระบุ',
	'JAB_USERNAME'				=> 'ชื่อผู้ใช้ Jabber',
	'JAB_USERNAME_EXPLAIN'		=> 'ระบุชื่อผู้ใช้ที่ลงทะเบียนแล้ว ชื่อนี้จะไม่ถูกตรวจสอบความถูกต้อง',
));

// Country Flags
$lang = array_merge($lang, array(
	'ACP_FLAG_SETTINGS_EXPLAIN'	=> 'Country flag settings',
	'FLAGS_PATH'				=> 'Country flag images path',
	'FLAGS_PATH_EXPLAIN'		=> 'เส้นทางภายใต้ phpBB ไดเรกทอรี่ราก เช่น <samp>images/flags</samp>',
	'REQUIRE_FLAG' 				=> 'Require country flag field',
	'REQUIRE_FLAG_EXPLAIN' 		=> 'ผู้ใช้ต้องเลือก country flag เมื่อลงทะเบียนใหม่',
));
/*
 * Welcome PM on First Login (WPM)
 * By DualFusion
 */
$lang = array_merge($lang, array(
	'ACP_WELCOME_PM_EXPLAIN'	=> 'คุณสามารถกำหนดข้อความที่ผู้ลงทะเบียนใหม่จะได้รับ',

	'WPM_SETTINGS'				=> 'การตั้งค่า',
	'WPM_ENABLE'				=> 'ใช้คำต้อนรับส่วนตัว',
	'WPM_SEND_ID'				=> 'PM Sender ID',
	'WPM_SEND_ID_EXPLAIN'		=> 'The user id of the users that will "send" the PM.',

	'WPM_SUBJECT'				=> 'หัวเรื่อง',
	'WPM_SUBJECT_EXPLAIN'		=> 'หัวเรื่องของข้อความที่จะถูกส่ง',
	'WPM_MESSAGE'				=> 'ข้อความ',
	'WPM_MESSAGE_EXPLAIN'		=> 'เนื้อหาข้อความที่จะถูกส่งไป',
	'WPM_VARS'					=> 'Dyanamic Variables',
	'WPM_VARS_EXPLAIN'			=> 'ตัวแปรที่จะแสดงข้อมูลจริงของผู้ลงทะเบียน',
	'WPM_VARIABLES'				=> '<strong>{USERNAME}</strong>: Username<br /><strong>{USER_IP}</strong>: Users\' IP<br /><strong>{USER_REGDATE}</strong>: Date of registration.<br /><strong>{USER_EMAIL}</strong>: User\'s email.<br /><strong>{SITE_NAME}</strong>: Your site\'s name.<br /><strong>{SITE_DESC}</strong>: Your site\'s description.',

	'WPM_PREVIEW'				=> 'ดูก่อน',
	'WPM_PREVIEW_EXPLAIN'		=> 'ดูข้อความก่อนที่จะถูกส่ง',
));
/* End WPM */

?>
