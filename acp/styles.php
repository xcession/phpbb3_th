<?php
/** 
* ภาษาไทย เวอร์ชั่น 1.0.0 
* 05/06/2551 
* ไฟล์ภาษาไทยสำหรับ PHPBB3 โดย www.mindphp.com และ www.phpbbthailand.com
*
*/ 


/**
*
* acp_styles [English]
*
* @package language
* @version $Id: styles.php,v 1.40 2007/10/04 15:07:24 acydburn Exp $
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
	'ACP_IMAGESETS_EXPLAIN'	=> 'imagesets ประกอบด้วย ปุ่ม, forum, โฟลเดอร์, etc. และรูปอื่นที่ใช้ภายในบอร์ด. คุณสามารถแก้ไข ส่งออกหรือลบ imagesets และนำเข้า หรือ ใช้อันใหม่.',
	'ACP_STYLES_EXPLAIN'	=> 'คุณสามารถจัดการรูปแบบที่มีอยู่.รูปแบบประกอบไปด้วย Templates,Themes และ ณmageset. คุณสามารถปรับแต่งรูปแบบที่มีอยู่ได้. คุณสามารถดูรูปแบบได้ก่อนจาก preview. รูปแบบเริ่มต้นจะมี (*) บอก.',
	'ACP_TEMPLATES_EXPLAIN'	=> 'คุณสามารถปรับแต่ง Template ได้ . คุณยังสามารถใช้ BBCode เพื่อปรับแต่ง Template ได้ด้วย',
	'ACP_THEMES_EXPLAIN'	=> 'คุณสามารปรับแต่ง Theme ได้. ตัวเลือกในการปรับแต่ง ขึ้นอยู่กับสิ่งที่ติดตั้งบนเซิร์ฟเวอร์ และการติดตั้ง phpBB, โปรดอ่านคู่มือสำหรับรายละเอียดเพิ่มเติม',
	'ADD_IMAGESET'			=> 'Imageset',
	'ADD_IMAGESET_EXPLAIN'	=> 'คุณสามารถสร้าง imageset ได้ ตัวเลือกในการปรับแต่ง ขึ้นอยู่กับการตั้งค่าของเซิร์ฟเวอร์และการอนุญาตให้ใช้ไฟล์.',
	'ADD_STYLE'				=> 'รูปแบบ',
	'ADD_STYLE_EXPLAIN'		=> 'คุณสามารถสร้างรูปแบบได้ ตัวเลือกในการปรับแต่ง ขึ้นอยู่กับการตั้งค่าของเซิร์ฟเวอร์และการอนุญาตให้ใช้ไฟล์.',
	'ADD_TEMPLATE'			=> ' Template ',
	'ADD_TEMPLATE_EXPLAIN'	=> 'คุณสามารถสร้าง Template ได้ ตัวเลือกในการปรับแต่ง ขึ้นอยู่กับการตั้งค่าของเซิร์ฟเวอร์และการอนุญาตให้ใช้ไฟล์.',
	'ADD_THEME'				=> 'Theme',
	'ADD_THEME_EXPLAIN'		=> 'คุณสามารถสร้าง Theme  ตัวเลือกในการปรับแต่ง ขึ้นอยู่กับการตั้งค่าของเซิร์ฟเวอร์และการอนุญาตให้ใช้ไฟล์.',
	'ARCHIVE_FORMAT'		=> 'Archive file type',
	'AUTOMATIC_EXPLAIN'		=> 'Leave blank to attempt automatic detection.',

	'พื้นหลัง'			=> 'พื้นหลัง',
	'BACKGROUND_COLOUR'		=> 'สีพื้นหลัง',
	'BACKGROUND_IMAGE'		=> 'ภาพพื้นหลัง',
	'BACKGROUND_REPEAT'		=> 'ทำพื้นหลังซ้ำ',
	'BOLD'					=> 'Bold',

	'CACHE'							=> 'Cache',
	'CACHE_CACHED'					=> 'Cached',
	'CACHE_FILENAME'				=> 'ไฟล์ Template ',
	'CACHE_FILESIZE'				=> 'File size',
	'CACHE_MODIFIED'				=> 'Modified',
	'CONFIRM_IMAGESET_REFRESH'		=> 'คุณแน่ใจที่จะ refresh imageset ทั้งหมด? การตั้งค่านี้ จะเขียนทับทุกการปรับแต่ง',
	'CONFIRM_TEMPLATE_CLEAR_CACHE'	=> 'คุณแน่ใจที่จะ ลบทุกไฟล์เวอร์ชันของแคช Template ?',
	'CONFIRM_TEMPLATE_REFRESH'		=> 'คุณแน่ใจที่จะ refresh ข้อมูล Template ทุกอันในฐานข้อมูล ด้วยเนื้อหาในไฟล์ Template บนระบบไฟล์? การกระทำนี้จะเขียนทับทุกการปรับแต่งที่ได้ทำไปแล้วในฐานข้อมูล.',
	'CONFIRM_THEME_REFRESH'			=> 'คุณแน่ใจที่จะ refresh  Theme ที่เก็บอยู่ในฐานข้อมูลด้วยเนื้อหาในไฟล์ Theme บนระบบไฟล์? การกระทำนี้จะเขียนทับทุกการปรับแต่งที่ได้ทำไปแล้วในฐานข้อมูล.',
	'COPYRIGHT'						=> 'Copyright',
	'CREATE_IMAGESET'				=> ' เพิ่ม imageset',
	'CREATE_STYLE'					=> ' เพิ่ม Style',
	'CREATE_TEMPLATE'				=> ' เพิ่ม Template',
	'CREATE_THEME'					=> ' เพิ่ม Theme',
	'CURRENT_IMAGE'					=> ' รูปปัจจุบัน',

	'DEACTIVATE_DEFAULT'		=> 'คุณไม่สามารถยกเลิกรูปแบบเริ่มต้นได้',
	'DELETE_FROM_FS'			=> 'ลบจากระบบไฟล์',
	'DELETE_IMAGESET'			=> 'ลบ imageset',
	'DELETE_IMAGESET_EXPLAIN'	=> 'คุณสามารถลบ imageset ที่เลือกจากฐานข้อมูล. นอกจากนี้ หากว่าคุณมีสิทธิ์ คุณสามารถเลือกที่จะลบจากระบบไฟล์ได้ด้วย. การกระทำนี้ ไม่สามารถย้อนกลับได้ เมื่อลบแล้ว ไม่สามารถเรียกคืนได้ จึงแนะนำว่า คุณควร ส่งออกไฟล์เก็บไว้ก่อนเผื่อการกลับมาใช้ในอนาคต',
	'DELETE_STYLE'				=> 'ลบรูปแบบ',
	'DELETE_STYLE_EXPLAIN'		=> 'คุณสามารถลบรูปแบบที่เลือกจากฐานข้อมูล. คุณไม่สามารถลบทั้งหมดได้จากที่นี่.รูปแบบเหล่านี้จะต้องถูกลบทีละอันผ่านหน้าที่จัดไว้ให้. ก่อนจะลบควรแน่ใจ เพราะไม่สามารถเรียกคืนได้ ',
	'DELETE_TEMPLATE'			=> 'ลบ Template',
	'DELETE_TEMPLATE_EXPLAIN'	=> 'คุณสามารถลบ Template ที่เลือกจากฐานข้อมูล. นอกจากนี้ หากว่าคุณมีสิทธิ์ คุณสามารถเลือกที่จะลบจากระบบไฟล์ได้ด้วย. การกระทำนี้ ไม่สามารถย้อนกลับได้ เมื่อลบแล้ว ไม่สามารถเรียกคืนได้ จึงแนะนำว่า คุณควร ส่งออกไฟล์เก็บไว้ก่อนเผื่อการกลับมาใช้ในอนาคต',
	'DELETE_THEME'				=> 'ลบ Theme',
	'DELETE_THEME_EXPLAIN'		=> 'คุณสามารถลบ Theme ที่เลือกจากฐานข้อมูล. นอกจากนี้ หากว่าคุณมีสิทธิ์ คุณสามารถเลือกที่จะลบจากระบบไฟล์ได้ด้วย. การกระทำนี้ ไม่สามารถย้อนกลับได้ เมื่อลบแล้ว ไม่สามารถเรียกคืนได้ จึงแนะนำว่า คุณควร ส่งออกไฟล์เก็บไว้ก่อนเผื่อการกลับมาใช้ในอนาคต',
	'รายละเอียด'					=> 'รายละเอียด',
	'DIMENSIONS_EXPLAIN'		=> 'เลือก yes ที่นี่จะรวมค่าความกว้าง/สูง',

	'EDIT_DETAILS_IMAGESET'				=> 'แก้ไข imageset รายละเอียด',
	'EDIT_DETAILS_IMAGESET_EXPLAIN'		=> 'คุณสามารถแก้ไขรายละเอียดของ imageset ตัวอย่างเช่น ชื่อ',
	'EDIT_DETAILS_STYLE'				=> 'แก้ไข Style',
	'EDIT_DETAILS_STYLE_EXPLAIN'		=> 'ใช้ฟอร์มข้างล่างเพื่อแก้ไข Style ที่มีอยู่ คุณอาจจะผสม ปรับแต่ง Template Theme และ imageset ที่ประกอบกันเป็นรูปแบบได้ และยังสามารถกำหนดรูปแบบเริ่มต้นได้',
	'EDIT_DETAILS_TEMPLATE'				=> 'แก้ไขรายละเอียด Template ',
	'EDIT_DETAILS_TEMPLATE_EXPLAIN'		=> 'คุณสามารถแก้ไขรายละเอียด Template เช่น ชื่อ คุณยังสามารถสลับที่เก็บระหว่าง stylesheet จากระบบไฟล์ไปเป็นฐานข้อมูลหรือในทางกลับกันก็ได้. 
ตัวเลือกนี้ขึ้นกับการปรับแต่ง PHP และขึ้นกับว่า Template ของคุณสามารถเขียนลงบนเวบเซิร์ฟเวอร์ได้หรือไม่',
	'EDIT_DETAILS_THEME'				=> 'แก้ไขรายละเอียด Theme ',
	'EDIT_DETAILS_THEME_EXPLAIN'		=> 'คุณสามารถแก้ไขรายละเอียด Theme เช่น ชื่อ คุณยังสามารถสลับที่เก็บระหว่างstylesheet จากระบบไฟล์ไปเป็นฐานข้อมูลหรือในทางกลับกันก็ได้. 
ตัวเลือกนี้ขึ้นกับการปรับแต่ง PHP และขึ้นกับว่า Template ของคุณสามารถเขียนลงบนเวบเซิร์ฟเวอร์ได้หรือไม่',
	'EDIT_IMAGESET'						=> 'แก้ไข imageset',
	'EDIT_IMAGESET_EXPLAIN'				=> 'คุณสามารถแก้ไขแต่ละภาพที่นิยาม imageset. คุณยังสามารถระบุความกว้างยาวของรูปภาพได้ด้วย ความกว้างยาวเป็นตัวเลือกที่ไม่จำเป็นต้องตั้งค่าก็ได้ แต่การตั้งค่าจะทำให้การแสดงภาพไม่มีปัญหากับบราวเซอร์',
	'EDIT_TEMPLATE'						=> 'แก้ไข Template',
	'EDIT_TEMPLATE_EXPLAIN'				=> 'คุณสามารถแก้ไข Template ได้โดยตรง แต่ระวังไว้ว่าการปรับแต่งนั้นไม่สามารถย้อนกลับได้เมื่อได้ submit ไปแล้ว . ควรแน่ใจเมื่อมีการแก้ไข Template ',
	'EDIT_TEMPLATE_STORED_DB'			=> 'ไฟล์ Template ไม่สามารถเขียนทับได้ ดังนั้น Template จะเก็บในฐานข้อมูล',
	'EDIT_THEME'						=> 'แก้ไข Theme ',
	'EDIT_THEME_EXPLAIN'				=> 'คุณสามารถแก้ไข Theme ที่เลือก เช่น สี',
	'EDIT_THEME_STORED_DB'				=> 'ไฟล์ไม่สามารถเขียนทับได้ ดังนั้นจะเก็บในฐานข้อมูล',
	'EDIT_THEME_STORE_PARSED'			=> ' Theme ต้องการให้ stylesheet ของมันถูกตรวจสอบไวยากรณ์ นี้คือทางเดียว ถ้าหากจะเก็บในฐานข้อมูล',
	'EXPORT'							=> 'ส่งออก',

	'FOREGROUND'			=> 'พื้นหน้า',
	'FONT_COLOUR'			=> 'สีฟอนต์',
	'FONT_FACE'				=> 'หน้าฟอนต์',
	'FONT_FACE_EXPLAIN'		=> 'คุณสามารถระบุฟอนต์ทีละหลายฟอนต์ได้ โดยคั่นด้วยจุลภาค.',
	'FONT_SIZE'				=> 'ขนาดฟอนต์',

	'GLOBAL_IMAGES'			=> 'Global',

	'HIDE_CSS'				=> 'Hide raw CSS',

	'IMAGE_WIDTH'				=> 'ความกว้างภาพ',
	'IMAGE_HEIGHT'				=> 'ความสูงภาพ',
	'IMAGE'						=> 'ภาพ',
	'IMAGE_NAME'				=> 'ชื่อภาพ',
	'IMAGE_PARAMETER'			=> 'พารามิเตอร์',
	'IMAGE_VALUE'				=> 'ค่า',
	'IMAGESET_ADDED'			=> 'imageset ใหม่ เพิ่มระบบไฟล์.',
	'IMAGESET_ADDED_DB'			=> 'imageset ใหม่เพิ่มในฐานข้อมูล.',
	'IMAGESET_DELETED'			=> 'ลบ imageset สำเร็จ.',
	'IMAGESET_DELETED_FS'		=> 'ลบ imageset จากฐานข้อมูลแล้วแต่บางไฟล์ยังคงเหลืออยู่ในระบบไฟล์.',
	'IMAGESET_DETAILS_UPDATED'	=> 'อัพเดทรายละเอียด imageset สำเร็จ',
	'IMAGESET_ERR_ARCHIVE'		=> 'เลือกวิธีการเก็บเอกสาร',
	'IMAGESET_ERR_COPY_LONG'	=> 'copyright ต้องไม่เกิน 60 ตัวอักษร',
	'IMAGESET_ERR_NAME_CHARS'	=> 'ชื่อ imageset ต้องเป็นตัวอักษร A-Z, 0-9, -, +, _ และช่องว่าง',
	'IMAGESET_ERR_NAME_EXIST'	=> 'มี imageset ชื่อนี้อยู่แล้ว',
	'IMAGESET_ERR_NAME_LONG'	=> 'ชื่อ imageset ต้องไม่ยาวไปกว่า 30 ตัวอักษร',
	'IMAGESET_ERR_NOT_IMAGESET'	=> 'เอกสารที่ระบุมี imageset ที่ไม่ถูกต้อง',
	'IMAGESET_ERR_STYLE_NAME'	=> 'คุณต้องระบุชื่อของ imageset.',
	'IMAGESET_EXPORT'			=> 'ส่งออก imageset',
	'IMAGESET_EXPORT_EXPLAIN'	=> 'คุณสามารถส่งออก imagesetในรูปแบบเอกสาร  คุณอาจจะเลือกระหว่าง ดาวน์โหลดไฟล์โดยตรง หรือ วางไว้ในที่เก็บเพื่อการดาวน์โหลดในภายหลังหรือผ่านทาง FTP',
	'IMAGESET_EXPORTED'			=> 'ส่งออก imageset สำเร็จ และเก็บใน%s.',
	'IMAGESET_NAME'				=> 'ชื่อ imageset',
	'IMAGESET_REFRESHED'		=> 'refresh imageset สำเร็จ.',
	'IMAGESET_UPDATED'			=> 'อัพเดท imageset สำเร็จ.',
	'ITALIC'					=> 'Italic',

	'IMG_CAT_BUTTONS'		=> 'Localised buttons',
	'IMG_CAT_CUSTOM'		=> 'Custom images',
	'IMG_CAT_FOLDERS'		=> 'กระทู้ icons',
	'IMG_CAT_FORUMS'		=> 'Forum icons',
	'IMG_CAT_ICONS'			=> 'General icons',
	'IMG_CAT_LOGOS'			=> 'Logos',
	'IMG_CAT_POLLS'			=> 'Polling images',
	'IMG_CAT_UI'			=> 'General user interface elements',
	'IMG_CAT_USER'			=> 'รูปเพิ่มเติม',

	'IMG_SITE_LOGO'			=> 'Main logo',
	'IMG_UPLOAD_BAR'		=> 'Upload progress bar',
	'IMG_POLL_LEFT'			=> 'Poll left end',
	'IMG_POLL_CENTER'		=> 'Poll centre',
	'IMG_POLL_RIGHT'		=> 'Poll right end',
	'IMG_ICON_FRIEND'		=> 'เพิ่มเป็นเพื่อน',
	'IMG_ICON_FOE'			=> 'เพิ่มเป็นศัตรู',

	'IMG_FORUM_LINK'			=> 'Forum link',
	'IMG_FORUM_READ'			=> 'Forum',
	'IMG_FORUM_READ_LOCKED'		=> 'Forum locked',
	'IMG_FORUM_READ_SUBFORUM'	=> 'Subforum',
	'IMG_FORUM_UNREAD'			=> 'Forum new posts',
	'IMG_FORUM_UNREAD_LOCKED'	=> 'Forum new posts locked',
	'IMG_FORUM_UNREAD_SUBFORUM'	=> 'Subforum new posts',
	'IMG_SUBFORUM_READ'			=> 'Legend subforum',
	'IMG_SUBFORUM_UNREAD'		=> 'Legend subforum new posts',
	
	'IMG_TOPIC_MOVED'			=> 'กระทู้ถูกย้าย',

	'IMG_TOPIC_READ'				=> 'กระทู้',
	'IMG_TOPIC_READ_MINE'			=> 'กระทู้ ที่โพส',
	'IMG_TOPIC_READ_HOT'			=> 'กระทู้ยอดนิยม',
	'IMG_TOPIC_READ_HOT_MINE'		=> 'กระทู้ยอดนิยม ที่โพส',
	'IMG_TOPIC_READ_LOCKED'			=> 'กระทู้ ถูกล็อก',
	'IMG_TOPIC_READ_LOCKED_MINE'	=> 'กระทู้ ถูกล็อก ที่โพส',

	'IMG_TOPIC_UNREAD'				=> 'กระทู้ โพสใหม่',
	'IMG_TOPIC_UNREAD_MINE'			=> 'กระทู้ ที่โพสใหม่',
	'IMG_TOPIC_UNREAD_HOT'			=> 'กระทู้ ยอดนิยม โพสใหม่',
	'IMG_TOPIC_UNREAD_HOT_MINE'		=> 'กระทู้ ยอดนิยม ที่โพสใหม่',
	'IMG_TOPIC_UNREAD_LOCKED'		=> 'กระทู้ ล็อก ใหม่',
	'IMG_TOPIC_UNREAD_LOCKED_MINE'	=> 'กระทู้ ล็อก ที่โพสใหม่',

	'IMG_STICKY_READ'				=> 'กระทู้ Sticky',
	'IMG_STICKY_READ_MINE'			=> 'กระทู้ Sticky ที่โพส',
	'IMG_STICKY_READ_LOCKED'		=> 'กระทู้ Sticky ล็อก',
	'IMG_STICKY_READ_LOCKED_MINE'	=> 'กระทู้ Sticky ล็อก ที่โพส',
	'IMG_STICKY_UNREAD'				=> 'กระทู้ Sticky โพสใหม่',
	'IMG_STICKY_UNREAD_MINE'		=> 'กระทู้ Sticky ที่โพสใหม่',
	'IMG_STICKY_UNREAD_LOCKED'		=> 'กระทู้ Sticky ล็อก โพสใหม่',
	'IMG_STICKY_UNREAD_LOCKED_MINE'	=> 'กระทู้ Sticky ล็อก ที่โพสใหม่',

	'IMG_ANNOUNCE_READ'					=> 'ประกาศ',
	'IMG_ANNOUNCE_READ_MINE'			=> 'ประกาศ ที่โพส',
	'IMG_ANNOUNCE_READ_LOCKED'			=> 'ประกาศ ล็อก',
	'IMG_ANNOUNCE_READ_LOCKED_MINE'		=> 'ประกาศ ล็อกที่โพส',
	'IMG_ANNOUNCE_UNREAD'				=> 'ประกาศ โพสใหม่',
	'IMG_ANNOUNCE_UNREAD_MINE'			=> 'ประกาศ ที่โพสใหม่',
	'IMG_ANNOUNCE_UNREAD_LOCKED'		=> 'ประกาศ ล็อก โพสใหม่',
	'IMG_ANNOUNCE_UNREAD_LOCKED_MINE'	=> 'ประกาศ ล็อก ที่โพสใหม่',

	'IMG_GLOBAL_READ'					=> 'Global',
	'IMG_GLOBAL_READ_MINE'				=> 'Global ที่โพส',
	'IMG_GLOBAL_READ_LOCKED'			=> 'Global ล็อก',
	'IMG_GLOBAL_READ_LOCKED_MINE'		=> 'Global ล็อก ที่โพส',
	'IMG_GLOBAL_UNREAD'					=> 'Global โพสใหม่',
	'IMG_GLOBAL_UNREAD_MINE'			=> 'Global ที่โพสใหม่',
	'IMG_GLOBAL_UNREAD_LOCKED'			=> 'Global ล็อก โพสใหม่',
	'IMG_GLOBAL_UNREAD_LOCKED_MINE'		=> 'Global ล็อก ที่โพสใหม่',

	'IMG_PM_READ'		=> 'อ่านข้อความส่วนตัว',
	'IMG_PM_UNREAD'		=> 'ข้อความส่วนตัวที่ยังไม่ได้อ่าน',

	'IMG_ICON_BACK_TOP'		=> 'Top',

	'IMG_ICON_CONTACT_AIM'		=> 'AIM',
	'IMG_ICON_CONTACT_EMAIL'	=> 'Send e-mail',
	'IMG_ICON_CONTACT_ICQ'		=> 'ICQ',
	'IMG_ICON_CONTACT_JABBER'	=> 'Jabber',
	'IMG_ICON_CONTACT_MSNM'		=> 'MSNM',
	'IMG_ICON_CONTACT_PM'		=> 'Send message',
	'IMG_ICON_CONTACT_YAHOO'	=> 'YIM',
	'IMG_ICON_CONTACT_WWW'		=> 'Website',

	'IMG_ICON_POST_DELETE'			=> 'ลบโพส',
	'IMG_ICON_POST_EDIT'			=> 'แก้ไขโพส ',
	'IMG_ICON_POST_INFO'			=> 'แสดงรายละเอียดโพส',
	'IMG_ICON_POST_QUOTE'			=> 'คัดลอกโพส',
	'IMG_ICON_POST_REPORT'			=> 'รายงานโพส',
	'IMG_ICON_POST_TARGET'			=> 'Minipost',
	'IMG_ICON_POST_TARGET_UNREAD'	=> 'New minipost',


	'IMG_ICON_TOPIC_ATTACH'			=> 'ไฟล์แนบ',
	'IMG_ICON_TOPIC_LATEST'			=> 'Last post',
	'IMG_ICON_TOPIC_NEWEST'			=> 'Last unread post',
	'IMG_ICON_TOPIC_REPORTED'		=> 'Post reported',
	'IMG_ICON_TOPIC_UNAPPROVED'		=> 'Post unapproved',

	'IMG_ICON_USER_ONLINE'		=> 'ผู้ใช้ online',
	'IMG_ICON_USER_OFFLINE'		=> 'ผู้ใช้ offline',
	'IMG_ICON_USER_PROFILE'		=> 'Show profile',
	'IMG_ICON_USER_SEARCH'		=> 'Search posts',
	'IMG_ICON_USER_WARN'		=> 'Warn user',

	'IMG_BUTTON_PM_FORWARD'		=> 'ส่งต่อ ข้อความส่วนตัว ',
	'IMG_BUTTON_PM_NEW'			=> 'ข้อความส่วนตัวใหม่',
	'IMG_BUTTON_PM_REPLY'		=> 'ตอบกลับข้อความส่วนตัว ',
	'IMG_BUTTON_TOPIC_LOCKED'	=> 'กระทู้ locked',
	'IMG_BUTTON_TOPIC_NEW'		=> 'กระทู้ใหม่',
	'IMG_BUTTON_TOPIC_REPLY'	=> 'ตอบกระทู้',

	'IMG_USER_ICON1'		=> 'ภาพผู้ใช้  1',
	'IMG_USER_ICON2'		=> 'ภาพผู้ใช้   2',
	'IMG_USER_ICON3'		=> 'ภาพผู้ใช้   3',
	'IMG_USER_ICON4'		=> 'ภาพผู้ใช้   4',
	'IMG_USER_ICON5'		=> 'ภาพผู้ใช้   5',
	'IMG_USER_ICON6'		=> 'ภาพผู้ใช้   6',
	'IMG_USER_ICON7'		=> 'ภาพผู้ใช้   7',
	'IMG_USER_ICON8'		=> 'ภาพผู้ใช้   8',
	'IMG_USER_ICON9'		=> 'ภาพผู้ใช้    9',
	'IMG_USER_ICON10'		=> 'ภาพผู้ใช้    10',

	'INCLUDE_DIMENSIONS'		=> 'รวม ความกว้างยาว',
	'INCLUDE_IMAGESET'			=> 'รวม imageset',
	'INCLUDE_TEMPLATE'			=> 'รวม  Template ',
	'INCLUDE_THEME'				=> 'รวม  Theme ',
	'INSTALL_IMAGESET'			=> 'รวม imageset',
	'INSTALL_IMAGESET_EXPLAIN'	=> 'คุณสามารถติดตั้ง imageset. คุณสามารถแก้ไขรายละเอียดได้ตามต้องการ หรือใช่ค่าเริ่มต้นของการติดตั้ง',
	'INSTALL_STYLE'				=> 'ติดตั้งรูปแบบ',
	'INSTALL_STYLE_EXPLAIN'		=> 'คุณสามารถติดตั้งรูปแบบใหม่. หากคุณมีรูปแบบที่เกี่ยวข้องติดตั้งอยู่แล้วจะไม่ถูกเขียนทับ บางรูปแบบต้องการรูปแบบที่มีอยู่ตั้งแต่ตอนติดตั้งแล้ว',
	'INSTALL_TEMPLATE'			=> 'ติดตั้ง Template ',
	'INSTALL_TEMPLATE_EXPLAIN'	=> 'คุณสามารถติดตั้ง Template ใหม่',
	'INSTALL_THEME'				=> 'ติดตั้ง Theme ',
	'INSTALL_THEME_EXPLAIN'		=> 'คุณสามารถติดตั้ง Theme ที่เลือกได้. คุณสามารถแก้ไขรายละเอียดได้ตามต้องการ หรือใช่ค่าเริ่มต้นของการติดตั้ง',
	'INSTALLED_IMAGESET'		=> 'ติดตั้ง imagesets',
	'INSTALLED_STYLE'			=> 'ติดตั้งรูปแบบ',
	'INSTALLED_TEMPLATE'		=> 'ติดตั้ง Template หลายอัน',
	'INSTALLED_THEME'			=> 'Theme ที่ติดตั้งไว้แล้ว',

	'LINE_SPACING'				=> 'Line spacing',
	'LOCALISED_IMAGES'			=> 'Localised',

	'NO_CLASS'					=> 'ไม่พบคลาสใน stylesheet.',
	'NO_IMAGESET'				=> 'ไม่พบ imageset ในระบบไฟล์.',
	'NO_IMAGE'					=> 'ไม่มีรูปภาพ',
	'NO_IMAGE_ERROR'			=> 'ไม่พบภาพในระบบไฟล์.',
	'NO_STYLE'					=> 'ไม่พบรูปแบบในระบบไฟล์.',
	'NO_TEMPLATE'				=> 'ไม่พบ Template ในระบบไฟล์.',
	'NO_THEME'					=> 'ไม่พบ Theme ในระบบไฟล์.',
	'NO_UNINSTALLED_IMAGESET'	=> 'ไม่พบการยกเลิกการติดตั้ง imagesets',
	'NO_UNINSTALLED_STYLE'		=> 'ไม่พบการยกเลิกการติดตั้งรูปแบบ',
	'NO_UNINSTALLED_TEMPLATE'	=> 'ไม่พบการยกเลิกการติดตั้ง  Template ',
	'NO_UNINSTALLED_THEME'		=> 'ไม่พบการยกเลิกการติดตั้ง  Theme ',
	'NO_UNIT'					=> 'ไม่มี',

	'ONLY_IMAGESET'			=> 'นี้คือ imageset สุดท้าย, คุณลบไม่ได้',
	'ONLY_STYLE'			=> 'นี้คือรูปแบบสุดท้าย, คุณลบไม่ได้',
	'ONLY_TEMPLATE'			=> 'นี้คือ Template สุดท้าย, คุณลบไม่ได้',
	'ONLY_THEME'			=> 'นี้คือ Theme สุดท้าย, คุณลบไม่ได้',
	'OPTIONAL_BASIS'		=> 'Optional basis',

	'REFRESH'					=> 'Refresh',
	'REPEAT_NO'					=> 'ไม่มี',
	'REPEAT_X'					=> 'Only horizontally',
	'REPEAT_Y'					=> 'Only vertically',
	'REPEAT_ALL'				=> 'Both directions',
	'REPLACE_IMAGESET'			=> 'แทนที่ imageset ด้วย',
	'REPLACE_IMAGESET_EXPLAIN'	=> 'imageset นี้จะแทนที่อันที่คุณลบไปในรูปแบบทุกอันที่ใช้มัน',
	'REPLACE_STYLE'				=> 'แทนที่รูปแบบด้วย',
	'REPLACE_STYLE_EXPLAIN'		=> 'รูปแบบนึ้จะแทนที่อันที่คุณลบไปในรูปแบบทุกอันที่ใช้มัน',
	'REPLACE_TEMPLATE'			=> 'แทนที่ Template ด้วย',
	'REPLACE_TEMPLATE_EXPLAIN'	=> ' Template นี้จะแทนที่อันที่คุณลบไปในรูปแบบทุกอันที่ใช้มัน',
	'REPLACE_THEME'				=> 'แทนที่ Theme with',
	'REPLACE_THEME_EXPLAIN'		=> ' Theme นี้จะแทนที่อันที่คุณลบไปในรูปแบบทุกอันที่ใช้มัน',
	'REQUIRES_IMAGESET'			=> 'รูปแบบนึ้ ต้องการการติดตั้ง %s imageset',
	'REQUIRES_TEMPLATE'			=> 'รูปแบบนึ้ ต้องการการติดตั้ง %s  Template ',
	'REQUIRES_THEME'			=> 'รูปแบบนึ้ ต้องการการติดตั้ง %s  Theme ',

	'SELECT_IMAGE'				=> 'เลือก ภาพ',
	'SELECT_TEMPLATE'			=> 'เลือกไฟล์ Template ',
	'SELECT_THEME'				=> 'เลือกไฟล์ Theme ',
	'SELECTED_IMAGE'			=> 'ภาพที่เลือก',
	'SELECTED_IMAGESET'			=> 'imageset ที่เลือก ',
	'SELECTED_TEMPLATE'			=> ' Template ที่เลือก',
	'SELECTED_TEMPLATE_FILE'	=> 'ไฟล์ Template ที่เลือก',
	'SELECTED_THEME'			=> ' Theme ที่เลือก',
	'SELECTED_THEME_FILE'		=> 'ไฟล์ Theme เลือก',
	'STORE_DATABASE'			=> 'ฐานข้อมูล',
	'STORE_FILESYSTEM'			=> 'ระบบไฟล์',
	'STYLE_ACTIVATE'			=> 'ทำให้ใช้งานได้',
	'STYLE_ACTIVE'				=> 'ใช้งานอยู่',
	'STYLE_ADDED'				=> 'เพิ่มรูปแบบสำเร็จ.',
	'STYLE_DEACTIVATE'			=> 'ทำให้ใช้งานไม่ได้',
	'STYLE_DEFAULT'				=> 'ทำให้เป็นรูปแบบเริ่มต้น',
	'STYLE_DELETED'				=> 'ลบรูปแบบสำเร็จ.',
	'STYLE_DETAILS_UPDATED'		=> 'แก้ไขรูปแบบสำเร็จ.',
	'STYLE_ERR_ARCHIVE'			=> 'โปรดเลือกวิธีการเก็บเอกสาร',
	'STYLE_ERR_COPY_LONG'		=> 'copyright ต้องไม่ยาวไปกว่า 60 ตัวอักษร',
	'STYLE_ERR_MORE_ELEMENTS'	=> 'คุณต้องเลือกรูปแบบอย่างน้อยหนึ่งอัน',
	'STYLE_ERR_NAME_CHARS'		=> 'ชื่อรูปแบบต้องเป็นตัวอักษร A-Z, 0-9, -, +, _ และช่องว่าง',
	'STYLE_ERR_NAME_EXIST'		=> 'มีรูปแบบชื่อนี้อยู่แล้ว',
	'STYLE_ERR_NAME_LONG'		=> 'ชื่อรูปแบบต้องไม่ยาวไปกว่า 30 ตัวอักษร',
	'STYLE_ERR_NO_IDS'			=> 'คุณต้องเลือก Template , Theme และ imageset สำหรับรูปแบบนี้',
	'STYLE_ERR_NOT_STYLE'		=> 'ไฟล์ที่นำเข้าหรืออัพโหลด มีรูปแบบเอกสารที่ไม่ถูกต้อง',
	'STYLE_ERR_STYLE_NAME'		=> 'คุณต้องระบุชื่อสำหรับรูปแบบนี้',
	'STYLE_EXPORT'				=> 'ส่งออกรูปแบบ',
	'STYLE_EXPORT_EXPLAIN'		=> 'คุณสามารถส่งออกรูปแบบในแบบเอกสาร คุณสามารถเลือกที่จะดาวน์โหลดไฟล์โดยตรงหรือวางในโฟลเดอร์สำหรับการดาวน์โหลดทีหลัง หรือผ่านทาง',
	'STYLE_EXPORTED'			=> 'ส่งออกรูปแบบสำเร็จ และเก็บใน%s.',
	'STYLE_IMAGESET'			=> 'imageset',
	'STYLE_NAME'				=> 'ชื่อรูปแบบ',
	'STYLE_TEMPLATE'			=> ' Template ',
	'STYLE_THEME'				=> ' Theme ',
	'STYLE_USED_BY'				=> 'Used by (including robots)',

	'TEMPLATE_ADDED'			=> 'เพิ่ม Template และเก็บลงระบบไฟล์.',
	'TEMPLATE_ADDED_DB'			=> 'เพิ่ม Template และเก็บในฐานข้อมูล.',
	'TEMPLATE_CACHE'			=> ' Template แคช',
	'TEMPLATE_CACHE_EXPLAIN'	=> 'โดยทั่วไป phpBB จะเก็บ Template ที่เวอร์ชันที่ compiled ไว้แล้ว เพื่อลดการโหลดเซิร์ฟเวอร์ในแต่ละครั้งที่มีการเรียกดู คุณสามารถเรียกดูสถานะแคชของแต่ละไฟล์และสามารถลบแต่ละไฟล์ต่างหากได้ หรือลบทั้งหมด',
	'TEMPLATE_CACHE_CLEARED'	=> 'ลบ Template แคชสำเร็จ',
	'TEMPLATE_CACHE_EMPTY'		=> 'ไม่มีแคช Template ',
	'TEMPLATE_DELETED'			=> 'ลบ Template สำเร็จ.',
	'TEMPLATE_DELETED_FS'		=> 'ลบ Template จากฐานข้อมูลแต่บางไฟล์ยังคงเหลืออยู่ในระบบไฟล์.',
	'TEMPLATE_DETAILS_UPDATED'	=> 'อัพเดทรายละเอียด Template สำเร็จ',
	'TEMPLATE_EDITOR'			=> 'Raw HTML Template editor',
	'TEMPLATE_EDITOR_HEIGHT'	=> 'Template editor height',
	'TEMPLATE_ERR_ARCHIVE'		=> 'โปรดเลือกวิธีการเก็บเอกสาร',
	'TEMPLATE_ERR_CACHE_READ'	=> 'แคช ไดเรกทอรี่ ที่ใช้เก็บแคชเวอร์ชันไฟล์ Template  ไม่สามารถเปิดได้',
	'TEMPLATE_ERR_COPY_LONG'	=> 'copyright ต้องไม่ยาวไปกว่า 60 ตัวอักษร',
	'TEMPLATE_ERR_NAME_CHARS'	=> 'ชื่อ Template ต้องเป็นตัวอักษร A-Z, 0-9, -, +, _ และช่องว่าง',
	'TEMPLATE_ERR_NAME_EXIST'	=> 'มี Template ชื่อนี้อยู่แล้ว',
	'TEMPLATE_ERR_NAME_LONG'	=> 'ชื่อ Template ต้องยาวไม่เกิน 30 ตัวอักษร',
	'TEMPLATE_ERR_NOT_TEMPLATE'	=> 'เอกสารที่คุณระบุ มี Template ที่ไม่ถูกต้อง',
	'TEMPLATE_ERR_STYLE_NAME'	=> 'คุณต้องระบุชื่อสำหรับ Template นี้',
	'TEMPLATE_EXPORT'			=> 'ส่งออก Template ',
	'TEMPLATE_EXPORT_EXPLAIN'	=> 'คุณสามารถส่งออก Template ในแบบเอกสาร ไฟล์เอกสารนี้จะมีไฟล์ที่จำเป็นในการติดตั้ง Template ในอีกบอร์ดหนึ่ง คุณสามารถเลือกที่จะดาวน์โหลดไฟล์โดยตรงหรือวางไฟล์ไว้ในโฟลเดอร์เพื่อที่จะดาวน์โหลดทีหลังหรือผ่านทาง FTP',
	'TEMPLATE_EXPORTED'			=> ' Template ส่งออกสำเร็จ และเก็บใน%s.',
	'TEMPLATE_FILE'				=> 'ไฟล์ Template ',
	'TEMPLATE_FILE_UPDATED'		=> 'ไฟล์ Template อัพเดทสำเร็จ.',
	'TEMPLATE_LOCATION'			=> 'เก็บ Template ใน',
	'TEMPLATE_LOCATION_EXPLAIN'	=> 'ภาพ ถูกเก็บในระบบไฟล์เสมอ',
	'TEMPLATE_NAME'				=> 'ชื่อ Template ',
	'TEMPLATE_REFRESHED'		=> ' Template  refresh สำเร็จ',

	'THEME_ADDED'				=> 'เพิ่ม Theme ใหม่ในระบบไฟล์',
	'THEME_ADDED_DB'			=> 'เพิ่ม Theme ใหม่ในฐานข้อมูล',
	'THEME_CLASS_ADDED'			=> 'เพิ่ม Custom class สำเร็จ',
	'THEME_DELETED'				=> 'ลบ Theme สำเร็จ',
	'THEME_DELETED_FS'			=> 'ลบ Theme จากฐานข้อมูลแล้ว แต่ยังเหลือไฟล์อยู่ในระบบไฟล์.',
	'THEME_DETAILS_UPDATED'		=> 'อัพเดทรายละเอียด Theme สำเร็จ',
	'THEME_EDITOR'				=> 'หน้าจอแก้ไข Theme',
	'THEME_EDITOR_HEIGHT'		=> 'ความสูงของหน้าจอแก้ไขนี้',
	'THEME_ERR_ARCHIVE'			=> 'โปรดเลือกวิธีการเก็บเอกสาร',
	'THEME_ERR_CLASS_CHARS'		=> 'ชื่อ Class ต้องเป็นตัวอักษร A-Z, 0-9, -, +, _ และช่องว่าง',
	'THEME_ERR_COPY_LONG'		=> 'copyright ต้องไม่ยาวไปกว่า 60 ตัวอักษร',
	'THEME_ERR_NAME_CHARS'		=> 'ชื่อ Theme ต้องเป็นตัวอักษร A-Z, 0-9, -, +, _ และช่องว่าง',
	'THEME_ERR_NAME_EXIST'		=> 'มี Theme ชื่อนี้อยู่แล้ว',
	'THEME_ERR_NAME_LONG'		=> 'ชื่อ Theme ต้องไม่ยาวไปกว่า 30 ตัวอักษร',
	'THEME_ERR_NOT_THEME'		=> 'เอกสารที่คุณระบุ มี Theme ที่ไม่ถูกต้อง',
	'THEME_ERR_REFRESH_FS'		=> ' Theme นี้เก็บในระบบไฟล์ ดั้งนั้นไม่จำเป็นต้อง refresh ',
	'THEME_ERR_STYLE_NAME'		=> 'คุณต้องระบุชื่อ Theme นี้',
	'THEME_FILE'				=> 'ไฟล์ Theme ',
	'THEME_EXPORT'				=> 'ส่งออก Theme ',
	'THEME_EXPORT_EXPLAIN'		=> 'คุณสามารถส่งออก Theme ในรูปแบบของเอกสาร เอกสารนี้จะมีไฟล์ที่จำเป็นที่จะติดตั้ง Theme บนบอร์ดอีกอันหนึ่ง คุณสามารถเลือกที่จะดาวน์โหลดไฟล์โดยตรงหรือวางไฟล์ไว้ในโฟลเดอร์เพื่อที่จะดาวน์โหลดทีหลังหรือผ่านทาง FTP',
	'THEME_EXPORTED'			=> 'ส่งออก Theme สำเร็จ และเก็บใน%s.',
	'THEME_LOCATION'			=> 'Storestylesheet in',
	'THEME_LOCATION_EXPLAIN'	=> 'ภาพจะเก็บในระบบไฟล์เสมอ',
	'THEME_NAME'				=> 'ชื่อ Theme ',
	'THEME_REFRESHED'			=> ' Theme  refresh สำเร็จ',
	'THEME_UPDATED'				=> 'อัพเดท Theme สำเร็จ',

	'UNDERLINE'				=> 'Underline',
	'UNINSTALLED_IMAGESET'	=> 'ยกเลิกการติดตั้ง imagesets',
	'UNINSTALLED_STYLE'		=> 'ยกเลิกการติดตั้งรูปแบบ',
	'UNINSTALLED_TEMPLATE'	=> 'ยกเลิกการติดตั้ง Template ',
	'UNINSTALLED_THEME'		=> 'Theme ที่ได้ยกเลิกการติดตั้ง',
	'UNSET'					=> 'ไม่ระบุ',

));

?>