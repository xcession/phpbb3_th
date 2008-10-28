<?php
// Modified by xcession

/**
*
* acp_posting [Thai]
*
* @package language
* @version $Id: posting.php 8479 2008-03-29 00:22:48Z naderman $
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

// BBCodes
// Note to translators: you can translate everything but what's between { and }
$lang = array_merge($lang, array(
	'ACP_BBCODES_EXPLAIN'		=> 'BBCode เป็นการใช้ HTML แบบพิเศษ ทำให้สามารถควบคุมการแสดงผลได้อย่างดี. ภายในหน้านี้ คุณสามารถเพิ่ม, ลบ และแก้ไข custom BBCodes.',
	'ADD_BBCODE'				=> 'เพิ่ม BBCode',

	'BBCODE_ADDED'				=> 'เพิ่ม BBCode สำเร็จ',
	'BBCODE_EDITED'				=> 'แก้ไข BBCode สำเร็จ',
	'BBCODE_NOT_EXIST'			=> 'BBCode ที่คุณเลือก ไม่มีอยู่จริง',
	'BBCODE_HELPLINE'			=> 'Help line',
	'BBCODE_HELPLINE_EXPLAIN'	=> 'ฟิลด์นี้คือข้อความเมื่อเมาส์เคลื่อนที่มาอยู่เหนือ BBCode',
	'BBCODE_HELPLINE_TEXT'		=> 'Help line text',
	'BBCODE_INVALID_TAG_NAME'	=> 'มี BBCode tag name ที่คุณเลือก อยู่แล้ว',
	'BBCODE_INVALID'			=> 'BBCode ถูกสร้างในรูปแบบที่ผิด',
	'BBCODE_OPEN_ENDED_TAG'		=> 'custom BBCode ต้องประกอบด้วย การเปิดและปิด tag',
	'BBCODE_TAG'				=> 'Tag',
	'BBCODE_TAG_TOO_LONG'		=> 'ชื่อ tag ที่คุณเลือก ยาวเกินไป',
	'BBCODE_TAG_DEF_TOO_LONG'	=> 'คำนิยาม tag ที่คุณระบุ ยาวเกินไป, โปรดทำให้สั้นลง',
	'BBCODE_USAGE'				=> 'BBCode usage',
	'BBCODE_USAGE_EXAMPLE'		=> '[hilight={COLOR}]{TEXT}[/hilight]<br /><br />[font={SIMPLETEXT1}]{SIMPLETEXT2}[/font]',
	'BBCODE_USAGE_EXPLAIN'		=> 'นิยามวิธีใช้ BBCode. แทนที่ตัวแปรนำเข้า ตาม token (%sข้างล่าง%s).',

	'EXAMPLE'						=> 'ตัวอย่าง:',
	'EXAMPLES'						=> 'ตัวอย่างต่างๆ:',

	'HTML_REPLACEMENT'				=> 'การแทนที่ HTML',
	'HTML_REPLACEMENT_EXAMPLE'		=> '&lt;span style="background-color: {COLOR};"&gt;{TEXT}&lt;/span&gt;<br /><br />&lt;span style="font-family: {SIMPLETEXT1};"&gt;{SIMPLETEXT2}&lt;/span&gt;',
	'HTML_REPLACEMENT_EXPLAIN'		=> 'นิยามค่าเริ่มต้น การแทนที่ HTML. อย่าลืมนำ tokens ที่ใช้วางกลับด้านบน!',

	'TOKEN'					=> 'Token',
	'TOKENS'				=> 'Tokens',
	'TOKENS_EXPLAIN'		=> 'Tokens คือตัวรับข้อมูลนำเข้าของผู้ใช้. ข้อมูลนำเข้าจะถูกตรวจสอบก็ต่อเมื่อเข้ากันได้กับนิยามที่มีอยู่. เมื่อจำเป็น, คุณสามารถเพิ่มจำนวนได้โดยการ เพิ่มเลขต่อท้ายระหว่างวงเล็บ เช่น {TEXT1}, {TEXT2}.<br /><br />ในการแทนที่ HTML คุณสามารถใช้ภาษาใดก็ได้เพื่อแสดง/ ไดเรกทอรี่: {L_<em>&lt;STRINGNAME&gt;</em>} ที่ซึ่ง <em>&lt;STRINGNAME&gt;</em> คือชื่อของสตริงคำแปลที่คุณต้องการเพิ่ม. ตัวอย่าง, {L_WROTE} จะแสดงเป็น &quot;wrote&quot; หรือ การแปลตามสถานที่ที่ผู้ใช้อยู่<br /><br /><strong>เฉพาะ tokens ที่อยู่ข้างล่างนี้เท่านั้น ที่สามารถใช้ภายใน custom BBCodes.</strong>',
	'TOKEN_DEFINITION'		=> 'What can it be?',
	'TOO_MANY_BBCODES'		=> 'คุณไม่สามารถสร้าง BBCodes ได้อีก. กรุณาลบ BBCodes ที่มีอยู่ ออกไปก่อน แล้วลองใหม่อีกครั้ง',

	'tokens'	=>	array(
    'TEXT'			=> 'ข้อความใดๆ ที่มีตัวอักษรภาษาต่างประเทศ, ตัวเลข, และอื่นๆ… คุณไม่ควรใช้ในHTML tags. ควรใช้ IDENTIFIER หรือ SIMPLETEXT แทน',
    'SIMPLETEXT'	=> 'ตัวอักษรละติน(A-Z), ตัวเลข, ช่องว่าง, จุลภาค, จุด, เครื่องหมายลบ, เครื่องหมายบวก, ยติภังค์(-) และ ขีดล่าง (_)',
		'IDENTIFIER'	=> 'ตัวอักษรละติน(A-Z), ตัวเลข, ยติภังค์(-) และ ขีดล่าง (_)',
		'NUMBER'		=> 'Any series of digits',
		'EMAIL'			=> 'A valid e-mail address',
		'URL'			=> 'A valid URL using any protocol (http, ftp, etc… cannot be used for javascript exploits). If none is given, &quot;http://&quot; is prefixed to the string.',
		'LOCAL_URL'		=> 'A local URL. The URL must be relative to the topic page and cannot contain a server name or protocol.',
		'COLOR'			=> 'A HTML colour, can be either in the numeric form <samp>#FF1234</samp> or a <a href="http://www.w3.org/TR/CSS21/syndata.html#value-def-color">CSS colour keyword</a> such as <samp>fuchsia</samp> or <samp>InactiveBorder</samp>'
	)
));

// Smilies and topic icons
$lang = array_merge($lang, array(
	'ACP_ICONS_EXPLAIN'		=> 'คุณสามารถเพิ่ม, ลบ และแก้ไข ไอคอนของผู้ใช้ เพื่อใช้ในกระทู้หรือโพส. โดยทั่วไปแล้ว ไอคอนเหล่านี้จะแสดงถัดจากหัวข้อกระทู้, หรือในหัวข้อโพส ในรายการกระทู้. คุณสามารถติดตั้งและสร้างกลุ่มของไอคอนได้ด้วย',
	'ACP_SMILIES_EXPLAIN'	=> 'Smilies หรือ emoticons จะมีขนาดเล็ก. คุณสามารถ เพิ่ม ลบและแก้ไข emoticons ได้ คุณสามารถติดตั้งและสร้างกลุ่มของ smilies ได้ด้วย',
	'ADD_SMILIES'			=> 'เพิ่ม smilies ทีละหลายอัน',
	'ADD_SMILEY_CODE'		=> 'เพิ่ม additional smiley code',
	'ADD_ICONS'				=> 'เพิ่ม icons ทีละหลายอัน',
	'AFTER_ICONS'			=> 'After %s',
	'AFTER_SMILIES'			=> 'After %s',

	'CODE'						=> 'Code',
	'CURRENT_ICONS'				=> 'Current icons',
	'CURRENT_ICONS_EXPLAIN'		=> 'เลือก ว่าจะทำอะไรกับ icons.',
	'CURRENT_SMILIES'			=> 'Current smilies',
	'CURRENT_SMILIES_EXPLAIN'	=> 'เลือก ว่าจะทำอะไรกับ smilies.',

	'DISPLAY_ON_POSTING'		=> 'Display on posting page',
	'DISPLAY_POSTING'			=> 'On posting page',
	'DISPLAY_POSTING_NO'		=> 'Not on posting page',


	
	'EDIT_ICONS'				=> 'แก้ไข icons',
	'EDIT_SMILIES'				=> 'แก้ไข smilies',
	'EMOTION'					=> 'Emotion',
	'EXPORT_ICONS'				=> 'ส่งออกและดาวน์โหลด icons package ',
	'EXPORT_ICONS_EXPLAIN'		=> '%sเมื่อคลิกลิงค์นี้,ไอคอนที่ติดตั้งจะถูกห่อเป็น <samp>icons.pak</samp> ซึ่งเมื่อดาวน์โหลด สามารถใช้สร้างเป็น <samp>.zip</samp> หรือ <samp>.tgz</samp> รวมทั้งไฟล์ปรับแต่ง%s.',
	'EXPORT_SMILIES'			=> 'นำออกและดาวน์โหลด smilies.pak',
	'EXPORT_SMILIES_EXPLAIN'	=> '%sเมื่อคลิกลิงค์นี้, smilies ที่ติดตั้งจะถูกห่อเป็น <samp>smilies.pak</samp> ซึ่งเมื่อดาวน์โหลด สามารถใช้สร้างเป็น <samp>.zip</samp> หรือ <samp>.tgz</samp> รวมทั้งไฟล์ปรับแต่ง%s.',

	'FIRST'			=> 'First',

	'ICONS_ADD'				=> 'สร้างไอคอนใหม่',
	'ICONS_NONE_ADDED'		=> 'ไม่มีไอคอนใดถูกเพิ่ม',
	'ICONS_ONE_ADDED'		=> 'เพิ่มไอคอนสำเร็จ',
	'ICONS_ADDED'			=> 'เพิ่มไอคอนสำเร็จ',
	'ICONS_CONFIG'			=> 'Icon configuration',
	'ICONS_DELETED'			=> 'ลบไอคอนสำเร็จ',
	'ICONS_EDIT'			=> 'แก้ไขไอคอน',
	'ICONS_ONE_EDITED'		=> 'อัพเดทไอคอนสำเร็จ',
	'ICONS_NONE_EDITED'		=> 'ไม่มีไอคอนใดถูกอัพเดท',
	'ICONS_EDITED'			=> 'อัพเดทไอคอนสำเร็จ',
	'ICONS_HEIGHT'			=> 'Icon height',
	'ICONS_IMAGE'			=> 'Icon image',
	'ICONS_IMPORTED'		=> 'ไอคอนแพคติดตั้งสำเร็จ.',
	'ICONS_IMPORT_SUCCESS'	=> 'นำเข้าไอคอนสำเร็จ.',
	'ICONS_LOCATION'		=> 'Icon location',
	'ICONS_NOT_DISPLAYED'	=> 'ไอคอนต่อไปนี้ไม่ถูกแสดง',
	'ICONS_ORDER'			=> 'Icon order',
	'ICONS_URL'				=> 'Icon image file',
	'ICONS_WIDTH'			=> 'Icon width',
	'IMPORT_ICONS'			=> 'ติดตั้ง icons package',
	'IMPORT_SMILIES'		=> 'ติดตั้ง smilies package',

	'KEEP_ALL'			=> 'Keep all',

	'MASS_ADD_SMILIES'	=> 'เพิ่ม smilies ทีละหลายอัน',

	'NO_ICONS_ADD'		=> 'ไม่มีไอคอนสำหรับการเพิ่ม',
	'NO_ICONS_EDIT'		=> 'ไม่มีไอคอนสำหรับการปรับแต่ง',
	'NO_ICONS_EXPORT'	=> 'คุณไม่มีไอคอนที่จะใช้ในการสร้าง package.',
	'NO_ICONS_PAK'		=> 'ไม่พบไอคอน package',
	'NO_SMILIES_ADD'	=> 'ไม่มี smilies สำหรับการเพิ่ม',
	'NO_SMILIES_EDIT'	=> 'ไม่มี smilies สำหรับการปรับแต่ง',
	'NO_SMILIES_EXPORT'	=> 'คุณไม่มี smilies ที่จะใช้ในการสร้าง package.',
	'NO_SMILIES_PAK'	=> 'ไม่พบ smiley package',

	'PAK_FILE_NOT_READABLE'		=> 'อ่านไฟล์ <samp>.pak</samp> ไม่ได้',

	'REPLACE_MATCHES'	=> 'Replace matches',

	'SELECT_PACKAGE'			=> 'เลือกไฟล์ package',
	'SMILIES_ADD'				=> 'เพิ่ม smiley',
	'SMILIES_NONE_ADDED'		=> 'ไม่มี smilies ใดถูกเพิ่ม',
	'SMILIES_ONE_ADDED'			=> 'เพิ่ม smiley สำเร็จ.',
	'SMILIES_ADDED'				=> 'เพิ่ม smiley สำเร็จ.',
	'SMILIES_CODE'				=> 'Smiley code',
	'SMILIES_CONFIG'			=> 'Smiley configuration',
	'SMILIES_DELETED'			=> 'ลบ smiley สำเร็จ.',
	'SMILIES_EDIT'				=> 'แก้ไข smiley',
	'SMILIES_NONE_EDITED'		=> 'ไม่มี smilies ถูกอัพเดท',
	'SMILIES_ONE_EDITED'		=> 'อัพเดท smiley สำเร็จ.',
	'SMILIES_EDITED'			=> 'อัพเดท smiley สำเร็จ.',
	'SMILIES_EMOTION'			=> 'Emotion',
	'SMILIES_HEIGHT'			=> 'Smiley height',
	'SMILIES_IMAGE'				=> 'Smiley image',
	'SMILIES_IMPORTED'			=> 'ติดตั้ง smilies pack สำเร็จ.',
	'SMILIES_IMPORT_SUCCESS'	=> 'นำเข้า smilies pack สำเร็จ.',
	'SMILIES_LOCATION'			=> 'Smiley location',
	'SMILIES_NOT_DISPLAYED'		=> 'smilies ต่อไปนี้ไม่ถูกแสดง',
	'SMILIES_ORDER'				=> 'Smiley order',
	'SMILIES_URL'				=> 'Smiley image file',
	'SMILIES_WIDTH'				=> 'Smiley width',

	'WRONG_PAK_TYPE'	=> 'package ที่ระบุ มีข้อมูลที่ไม่ถูกต้อง',
));

// Word censors
$lang = array_merge($lang, array(
	'ACP_WORDS_EXPLAIN'		=> 'จากแป้นควบคุมนี้ คุณสามารถเพิ่ม แก้ไข ลบ คำต่างๆที่ ได้ถูกกรองออก และคำเหล่านี้ก็ไม่สามารถใช้ในการตั้งชื่อผู้ใช้ได้ คุณสามารถใช้ Wildcards (*) ในการสร้างคำได้ ',
	'ADD_WORD'				=> 'เพิ่มคำใหม่',

	'EDIT_WORD'		=> 'แก้ไขคำกรอง',
	'ENTER_WORD'	=> 'คุณต้องระบุคำกรองและคำแทนที่',

	'NO_WORD'	=> 'ไม่มีคำถูกเลือก',

	'REPLACEMENT'	=> 'คำแทนที่ด้วย',

	'UPDATE_WORD'	=> 'อัพเดทการกรองคำ',

	'WORD'				=> 'คำหรือข้อความ',
	'WORD_ADDED'		=> 'เพิ่มคำที่ต้องการกรองสำเร็จ',
	'WORD_REMOVED'		=> 'ลบคำที่ต้องการกรองสำเร็จ',
	'WORD_UPDATED'		=> 'อัพเดทคำที่ต้องการกรองสำเร็จ',
));

// Ranks
$lang = array_merge($lang, array(
	'ACP_RANKS_EXPLAIN'		=> 'คุณสามารถเพิ่ม แก้ไข ดูและลบอันดับ คุณสามารถสร้างอันดับพิเศษได้ด้วย ซึ่งจะถูกใช้กับผู้ใช้ ผ่านทาง user management facility',
	'ADD_RANK'				=> 'เพิ่มอันดับ',

	'MUST_SELECT_RANK'		=> 'คุณต้องเลือกอันดับ',
	
	'NO_ASSIGNED_RANK'		=> 'ไม่มีการกำหนดอันดับพิเศษ',
	'NO_RANK_TITLE'			=> 'คุณยังไม่ได้ระบุชื่ออันดับ',
	'NO_UPDATE_RANKS'		=> 'การลบอันดับสำเร็จ อย่างไรก็ตาม ผู้ใช้ ที่ใช้อันดับนี้ยังไม่ถูกอัพเดท คุณต้องตั้งค่าใหม่เองกับผู้ใช้เหล่านี้',

	'RANK_ADDED'			=> 'เพิ่มอันดับสำเร็จ',
	'RANK_IMAGE'			=> 'Rank image',
	'RANK_IMAGE_EXPLAIN'	=> 'ใช้ค่านี้เพื่อนิยามรูปภาพเล็กที่จับคู่กับอันดับ. เส้นทางจะสัมพันธ์กับไดเรกทอรี่ ของphpBB',
	'RANK_MINIMUM'			=> 'จำนวนโพสต์น้อยสุด',
	'RANK_REMOVED'			=> 'ลบอันดับสำเร็จ',
	'RANK_SPECIAL'			=> 'ตั้งค่าเป็นลำดับพิเศษ',
	'RANK_TITLE'			=> 'ชื่ออันดับ',
	'RANK_UPDATED'			=> 'อัพเดทอันดับสำเร็จ',
));

// Disอนุญาต Usernames
$lang = array_merge($lang, array(
	'ACP_DISALLOW_EXPLAIN'	=> 'คุณสามารถควบคุมชื่อผู้ใช้ที่ไม่อนุญาตให้ใช้. ชื่อที่ไม่อนุญาตสามารถมี wildcard * ได้. คุณไม่สามารถกำหนดชื่อผู้ใช้ ที่ลงทะเบียนไปแล้ว, คุณต้องลบชื่อนั้นก่อนแล้วจึงกำหนดใหม่',
	'ADD_DISALLOW_EXPLAIN'	=> 'คุณสามารถใช้ wildcard * ในการกำหนดชื่อผู้ใช้ที่ไม่อนุญาตได้',
	'ADD_DISALLOW_TITLE'	=> 'เพิ่มชื่อผู้ใช้ที่ไม่อนุญาต',

	'DELETE_DISALLOW_EXPLAIN'	=> 'คุณสามารถลบรายชื่อได้ โดยการเลือกจากรายการที่มีอยู่แล้วคลิก submit',
	'DELETE_DISALLOW_TITLE'		=> 'ลบชื่อผู้ใช้ที่ไม่อนุญาต',
	'DISALLOWED_ALREADY'		=> 'ชื่อที่คุณระบุ ไม่สามารถกำหนดเป็นชื่อที่ไม่อนุญาตได้ ชื่อนี้อาจจะมีอยู่แล้วในรายการหรืออยู่ในรายการคำกรองหรือตรงกับชื่อผู้ใช้ที่มีอยู่',
	'DISALLOWED_DELETED'		=> 'ลบชื่อผู้ใช้ที่ไม่อนุญาตสำเร็จ',
	'DISALLOW_SUCCESSFUL'		=> 'เพิ่มชื่อผู้ใช้ที่ไม่อนุญาตสำเร็จ',

	'NO_DISALLOWED'				=> 'ไม่มีชื่อผู้ใช้ที่ไม่อนุญาต',
	'NO_USERNAME_SPECIFIED'		=> 'คุณยังไม่ได้เลือก หรือ ระบุ ชื่อผู้ใช้.',
));

// Reasons
$lang = array_merge($lang, array(
	'ACP_REASONS_EXPLAIN'	=> 'คุณสามารถจัดการกับเหตุผล ที่ใช้ในการรายงานและปฏิเสธข้อความเมื่อไม่ให้โพส. มีค่าเหตุผลเริ่มต้นให้อยู่หนึ่งอัน(marked with a *) ที่คุณไม่สามารถลบได้, เหตุผลนี้มักใช้กับข้อความที่หาเหตุผลให้ไม่ได้',
	'ADD_NEW_REASON'		=> 'เพิ่มเหตุผล',
	'AVAILABLE_TITLES'		=> 'ชื่อเหตุผลที่มีอยู่',
	
	'IS_NOT_TRANSLATED'			=> 'เหตุผลยัง <strong>ไม่</strong>ถูกแปล',
	'IS_NOT_TRANSLATED_EXPLAIN'	=> 'เหตุผลยัง<strong>ไม่</strong>ถูกแปล. หากคุณต้องการจะแปล ระบุคำที่ถูกต้องสำหรับไฟล์ภาษา ที่หมวดรายงานเหตุผล',
	'IS_TRANSLATED'				=> 'เหตุผลถูกแปลแล้ว',
	'IS_TRANSLATED_EXPLAIN'		=> 'เหตุผลถูกแปลแล้ว. หากชื่อที่คุณระบุมีอยู่แล้วในไฟล์ภาษาในหมวดรายงานเหตุผล, คำแปลจะถูกนำใช้',
	
	'NO_REASON'					=> 'ไม่พบเหตุผล',
	'NO_REASON_INFO'			=> 'คุณต้องระบุชื่อและคำอธิบายของเหตุผลนี้',
	'NO_REMOVE_DEFAULT_REASON'	=> 'คุณไม่สามารถลบเหตุผล “Other”',

	'REASON_ADD'				=> 'เพิ่มเหตุผล report/denial ',
	'REASON_ADDED'				=> 'เพิ่มเหตุผล Report/denialสำเร็จ',
	'REASON_ALREADY_EXIST'		=> 'เหตุผลที่มีชื่อนี้ มีอยู่แล้ว, กรุณาใส่ชื่อใหม่',
	'REASON_DESCRIPTION'		=> 'คำอธิบายเหตุผล',
	'REASON_DESC_TRANSLATED'	=> 'แสดงคำอธิบายเหตุผล',
	'REASON_EDIT'				=> 'แก้ไขเหตุผล report/denial',
	'REASON_EDIT_EXPLAIN'		=> 'คุณสามารถเพิ่มหรือแก้ไขเหตุผล. ถ้าเหตุผลถูกแปลแล้ว คำแปลจะถูกใช้แทนข้อความที่ระบุนี้',
	'REASON_REMOVED'			=> 'ลบเหตุผล Report/denial สำเร็จ',
	'REASON_TITLE'				=> 'ชื่อเหตุผล',
	'REASON_TITLE_TRANSLATED'	=> 'แสดงชื่อเหตุผล',
	'REASON_UPDATED'			=> 'อัพเดทเหตุผล Report/denial สำเร็จ',

	'USED_IN_REPORTS'		=> 'ใช้ในรายงาน',
));

?>
