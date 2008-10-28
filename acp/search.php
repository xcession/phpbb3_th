<?php
/** 
* ภาษาไทย เวอร์ชั่น 1.0.0 
* 05/06/2551 
* ไฟล์ภาษาไทยสำหรับ PHPBB3 โดย www.mindphp.com และ www.phpbbthailand.com
*
*/ 


/**
*
* acp_search [English]
*
* @package language
* @version $Id: search.php,v 1.21 2007/10/04 15:07:24 acydburn Exp $
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
	'ACP_SEARCH_INDEX_EXPLAIN'				=> 'คุณสามารถจัดการดัชนีการค้นหา backend คุณควรลบดัชนีที่คุณไม่ใช้ออกไป หลังจากแก้ไขค่าการค้นหาบางค่า (เข่น จำนวนตัวอักษร ต่ำสุด/สูงสุด ) คุณควรสร้างดัชนีใหม่ เพื่อให้เข้ากับการเปลี่ยนแปลง',
	'ACP_SEARCH_SETTINGS_EXPLAIN'			=> 'คุณสามารถกำหนดว่าดัชนีการค้นหาใดจะถูกใช้สำหรับการโพสและการค้นหาต่างๆ คุณสามารถตั้งค่าได้หลากหลาย ในการกำหนดตัวเลือกที่มีผลกับการประมวลผล ',

	'COMMON_WORD_THRESHOLD'					=> 'ค่านับเริ่มต้นคำสามัญ',
	'COMMON_WORD_THRESHOLD_EXPLAIN'			=> 'คำที่พบในการโพสเป็นส่วนใหญ่ จะถือว่าเป็น คำสามัญ คำสามัญจะถูกละเลยในการค้นหา ตั้งค่าเป็น 0 เพื่อยกเลิก จะมีผลก็ต่อเมื่อมีมากกว่า 100 โพส',
	'CONFIRM_SEARCH_BACKEND'				=> 'คุณแน่ใจที่จะสลับการค้นหา backend เป็นอีกอันหนึ่ง? หลังจากเปลี่ยนแล้ว คุณจำเป็นต้องสร้างดัชนีใหม่ ถ้าคุณไม่ต้องการจะกลับมาใช้ดัชนีเดิม คุณสามารถลบดัชนีเก่าได้เพื่อเป็นการประหยัดทรัพยากร',
	'CONTINUE_DELETING_INDEX'				=> 'ทำกระบวนการลบดัชนีก่อนหน้าต่อไป',
	'CONTINUE_DELETING_INDEX_EXPLAIN'		=> 'กระบวนการลบดัชนีเริ่มขึ้นแล้ว ในการที่จะเข้าถึงดัชนีการค้นหาคุณต้องรอให้มันเสร็จหรือยกเลิก',
	'CONTINUE_INDEXING'						=> 'ทำกระบวนการสร้างดัชนีต่อไป',
	'CONTINUE_INDEXING_EXPLAIN'				=> 'กระบวนการสร้างดัชนีได้เริ่มขึ้นแล้ว ในการที่จะเข้าถึงดัชนีการค้นหาคุณต้องรอให้มันเสร็จหรือยกเลิก',
	'CREATE_INDEX'							=> 'สร้างดัชนี',

	'DELETE_INDEX'							=> 'ลบดัชนี',
	'DELETING_INDEX_IN_PROGRESS'			=> 'กำลังอยู่ในกระบวนการลบดัชนี',
	'DELETING_INDEX_IN_PROGRESS_EXPLAIN'	=> 'การค้นหา backend กำลังทำความสะอาดดัชนี กระบวนการนี้อาจกินเวลา',

	'FULLTEXT_MYSQL_INCOMPATIBLE_VERSION'	=> 'MySQL fulltext backend can only be used with MySQL4 and above.',
	'FULLTEXT_MYSQL_NOT_MYISAM'				=> 'MySQL fulltext indexes can only be used with MyISAM tables.',
	'FULLTEXT_MYSQL_TOTAL_POSTS'			=> 'จำนวนดัชนีโพสทั้งหมด',
	'FULLTEXT_MYSQL_MBSTRING'				=> 'Support for non-latin UTF-8 characters using mbstring:',
	'FULLTEXT_MYSQL_PCRE'					=> 'Support for non-latin UTF-8 characters using PCRE:',
	'FULLTEXT_MYSQL_MBSTRING_EXPLAIN'		=> 'ถ้า PCRE ไม่มีคุณสมบัติ unicode , การค้นหา backend จะพยายามใช้ mbstring’s regular expression แทน',
	'FULLTEXT_MYSQL_PCRE_EXPLAIN'			=> 'การค้นหา backend นี้ต้องการคุณสมบัติ PCRE unicode, มีให้ใช้ใน PHP 4.4, 5.1 และหลังจากนี้ เท่านั้น, ถ้าคุณต้องการค้นหา ตัวอักษรที่เป็น non-latin',

	'GENERAL_SEARCH_SETTINGS'				=> 'การตั้งค่าการค้นหาทั่วไป',
	'GO_TO_SEARCH_INDEX'					=> 'ไปที่หน้าดัชนีการค้นหา',

	'INDEX_STATS'							=> 'สถิติดัชนี',
	'INDEXING_IN_PROGRESS'					=> 'อยู่ระหว่างการทำดัชนี',
	'INDEXING_IN_PROGRESS_EXPLAIN'			=> 'การค้นหา backend กำลังสร้างดัชนีสำหรับโพสทั้งหมดในบอร์ด กระบวนการนี้อาจกินเวลา ขึ้นอยู่กับขนาดบอร์ด',

	'LIMIT_SEARCH_LOAD'						=> 'ขีดจำกัดโหลดของการค้นหา',
	'LIMIT_SEARCH_LOAD_EXPLAIN'				=> 'ถ้าโหลดของระบบภายใน 1 นาที เกินค่านี้ หน้าการค้นหาจะออฟไลน์ ค่า 1.0 เท่ากับการใช้ ~100% ของหนึ่งโปรเซสเซอร์ ',

	'MAX_SEARCH_CHARS'						=> 'จำนวนตัวอักษรสูงสุดของการค้นหา',
	'MAX_SEARCH_CHARS_EXPLAIN'				=> 'จำนวนตัวอักษรที่ไม่เิกินค่านี้สำหรับการค้นหา',
	'MIN_SEARCH_CHARS'						=> 'จำนวนตัวอักษรต่ำสุดของการค้นหา',
	'MIN_SEARCH_CHARS_EXPLAIN'				=> 'จำนวนตัวอักษรที่ไม่ต่ำกว่าค่านี้ ที่จะสนใจในการค้นหา',
	'MIN_SEARCH_AUTHOR_CHARS'				=> 'จำนวนตัวอักษรต่ำสุดของชื่อผู้แต่ง',
	'MIN_SEARCH_AUTHOR_CHARS_EXPLAIN'		=> 'ผู้ใช้ต้องกรอกชื่อของผู้แต่งที่ใช้ในการค้นหาเป็นจำนวนไม่ต่ำกว่าค่านี้ ถ้าชื่อผู้ใช้ที่คุณต้องการค้นหาสั้นกว่าค่านี้ คุณสามารถใส่ชื่อเต็มได้',

	'PROGRESS_BAR'							=> 'Progress bar',

	'SEARCH_GUEST_INTERVAL'					=> 'ช่วงเวลาการค้นหาของแขกที่ต้องรอ',
	'SEARCH_GUEST_INTERVAL_EXPLAIN'			=> 'จำนวนวินาทีที่ต้องรอระหว่างการค้นหาแต่ละครั้ง',
	'SEARCH_INDEX_CREATE_REDIRECT'			=> 'โพสทั้งหมดจนถึงโพส id %1$d ถูกทำดัชนีเรียบร้อยแล้ว เหลือ %2$d โพสที่กำลังอยู่ระหว่างกระบวนการ<br /> อัตราการทำดัชนีอยู่ที่ประมาณ %3$.1f โพสต่อวินาที<br /> อยู่ระหว่างการทำดัชนี…',
	'SEARCH_INDEX_DELETE_REDIRECT'			=> 'โพสทั้งหมดจนถึงโพส id %1$d ถูกลบจากการทำดัชนี <br />อยู่ระหว่างการลบ…',
	'SEARCH_INDEX_CREATED'					=> 'ทำดัชนีการโพสในฐานข้อมูลบอร์ดสำเร็จ',
	'SEARCH_INDEX_REMOVED'					=> 'ลบดัชนีการค้นหาสำเร็จ',
	'SEARCH_INTERVAL'						=> 'ช่วงเวลาที่ผู้ใช้ต้องรอ',
	'SEARCH_INTERVAL_EXPLAIN'				=> 'จำนวนวินาที ที่ผู้ใช้ต้องรอก่อนที่จะทำการค้นหาใหม่ ค่านี้จะถูกตรวจสอบแยกกันในแต่ละผู้ใช้',
	'SEARCH_STORE_RESULTS'					=> 'ความยาวแคชการค้นหา',
	'SEARCH_STORE_RESULTS_EXPLAIN'			=> 'จำนวนวินาทีที่แคชจะหมดอายุ ตั้งค่า 0 เพื่อยกเลิก',
	'SEARCH_TYPE'							=> 'การค้นหา backend',
	'SEARCH_TYPE_EXPLAIN'					=> 'phpBB อนุญาตให้คุณเลือก backend ที่ใช้นการค้นหาเนื้อหาการโพส โดยปกติการค้นหาจะใช้การค้นหาข้อความเต็มของ phpBB ',
	'SWITCHED_SEARCH_BACKEND'				=> 'คุณได้ทำการสลับการค้นหา backend ในการที่จะใช้การค้นหา backend ใหม่ คุณควรตรวจสอบว่ามีดัชนีสำหรับ backend ที่เลือก',

	'TOTAL_WORDS'							=> 'จำนวนคำของดัชนี',
	'TOTAL_MATCHES'							=> 'จำนวนคำที่สัมพันธ์กับดัชนีการโพส',

	'YES_SEARCH'							=> 'ใช้สิ่งอำนวยการค้นหา',
	'YES_SEARCH_EXPLAIN'					=> 'เลือกให้ผู้ใช้สามารถใช้ หน้าที่การค้นหารวมทั้งการค้นหาสมาชิก',
	'YES_SEARCH_UPDATE'						=> 'เลือกการใช้อัพเดทการค้นหาข้อความเต็ม',
	'YES_SEARCH_UPDATE_EXPLAIN'				=> 'อัพเดทดัชนีข้อความเต็มเมื่อโพส จะถูกตั้งค่าทับถ้าไม่ใช้การค้นหา',
));

?>