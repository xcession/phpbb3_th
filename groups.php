<?php
// Modified by xcession

/**
*
* groups [Thai]
*
* @package language
* @version $Id: groups.php 8479 2008-03-29 00:22:48Z naderman $
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
	'ALREADY_DEFAULT_GROUP'			=> 'กลุ่มที่คุณเลือกถูกกำหนดเป็นค่าเริ่มต้นอยู่แล้ว',
	'ALREADY_IN_GROUP'				=> 'คุณเป็นสมาชิกของกลุ่มอยู่แล้ว',
	'ALREADY_IN_GROUP_PENDING'		=> 'คุณได้ร้องขอเพื่อเป็นสมาชิกของกลุ่มนี้แล้ว',

	'CANNOT_JOIN_GROUP'				=> 'You are not able to join this group. You are only able to join open and freely open groups.', //TODO
	'CANNOT_RESIGN_GROUP'			=> 'You are not able to resign from this group. You are only able to resign from open and freely open groups.', //TODO
	'CHANGED_DEFAULT_GROUP'			=> 'การเปลี่ยนแปลงกลุ่มเสร็จสมบูรณ์',

	'GROUP_AVATAR'						=> 'Avatar ประจำกลุ่ม', 
	'GROUP_CHANGE_DEFAULT'				=> 'คุณแน่ใจไช่ไหม ที่จะเปลี่ยนกลุ่มเป็น “%s”?',
	'GROUP_CLOSED'						=> 'ถูกปิด', //CHECK
	'GROUP_DESC'						=> 'รายละเอียดกลุ่ม',
	'GROUP_HIDDEN'						=> 'ซ่อน',
	'GROUP_INFORMATION'					=> 'ข้อมูลของกลุ่ม',
	'GROUP_IS_CLOSED'					=> 'กลุ่มนี้ถูกปิด,สมาชิกใหม่สามารถเข้ามาร่วมเป็นสมาชิกได้ ก็ต่อเมื่อผู้นำกลุ่มเชื้อเชิญเท่านั้น',
	'GROUP_IS_FREE'						=> 'กลุ่มนี้เปิดอิสระ, ยินดีต้อนรับสมาชิกใหม่', 
	'GROUP_IS_HIDDEN'					=> 'กลุ่มนี้ถูกซ่อน, มีเพียงสมาชิกเท่านั้นที่สามารถเห็นสมาชิกท่านอื่นได้',
	'GROUP_IS_OPEN'						=> 'กลุ่มนี้ถูกเปิด, สมาชิกสามารถสมัครได้แล้ว',
	'GROUP_IS_SPECIAL'					=> 'กลุ่มนี้พิเศษ, โดยกลุ่มนี้ถูกดูแลโดยผู้ดูแลบอร์ด', 
	'GROUP_JOIN'						=> 'เข้าร่วมกลุ่ม',
	'GROUP_JOIN_CONFIRM'				=> 'คุณแน่ใจแล้วหรือว่าต้องการเข้าร่วมกลุ่มที่เลือก?',
	'GROUP_JOIN_PENDING'				=> 'ต้องการเข้ากลุ่ม',
	'GROUP_JOIN_PENDING_CONFIRM'		=> 'คุณแน่ใจใช่ไหม ที่จะร้องขอการเข้ากลุ่มนี้?',
	'GROUP_JOINED'						=> 'เข้าร่วมกลุ่มที่เลือกเรียบร้อยแล้ว',
	'GROUP_JOINED_PENDING'				=> 'การร้องขอการเป็นสมาชิกของกลุ่มนี้เสร็จเรียบร้อยแล้ว. กรุณารอผู้นำกลุ่มอนุมัติการสมัครของคุณ.',
	'GROUP_LIST'						=> 'จัดการผู้ใช้งาน',
	'GROUP_MEMBERS'						=> 'สมาชิกกลุ่ม',
	'GROUP_NAME'						=> 'ชื่อกลุ่ม',
	'GROUP_OPEN'						=> 'เปิด',
	'GROUP_RANK'						=> 'อันดับของกลุ่ม', 
	'GROUP_RESIGN_MEMBERSHIP'			=> 'ออกจากสมาชิกกลุ่ม',
	'GROUP_RESIGN_MEMBERSHIP_CONFIRM'	=> 'คุณแน่ใจใช่ไหมที่ต้องการออกจากการเป็นสมาชิกของกลุ่มที่คุณเลือก?',
	'GROUP_RESIGN_PENDING'				=> 'ลาออกจากการเป็นสมาชิกกลุ่มที่ค้างอยู่',
	'GROUP_RESIGN_PENDING_CONFIRM'		=> 'Are you sure you want to resign your pending membership from the selected group?', //TODO
	'GROUP_RESIGNED_MEMBERSHIP'			=> 'คุณได้ย้ายออกจากกลุ่มนี้เรียบร้อยแล้ว.',
	'GROUP_RESIGNED_PENDING'			=> 'Your pending membership was successfully removed from the selected group.', //TODO
	'GROUP_TYPE'						=> 'ประเภทกลุ่ม',
	'GROUP_UNDISCLOSED'					=> 'ซ่อนกลุ่ม',
	'FORUM_UNDISCLOSED'					=> 'Moderating hidden forum(s)', //TODO

	'LOGIN_EXPLAIN_GROUP'			=> 'คุณต้องเข้าสู่ระบบก่อน จึงจะดูข้อมูลของกลุ่มสมาชิกนี้ได้',

	'NO_LEADERS'					=> 'คุณไม่ได้เป็นผู้นำของกลุ่มใดเลย',
	'NOT_LEADER_OF_GROUP'			=> 'ไม่สามารถทำการดำเนินการที่ร้องขอได้เนื่องจากคุณไม่ใช่ผู้นำของกลุ่มที่เลือก.', //TODO
	'NOT_MEMBER_OF_GROUP'			=> 'The requested operation cannot be taken because you are not a member of the selected group or your membership has not been approved yet.', //TODO
	'NOT_RESIGN_FROM_DEFAULT_GROUP'	=> 'You are not allowed to resign from your default group.', //TODO

	'PRIMARY_GROUP'			=> 'กลุ่มหลัก',

	'REMOVE_SELECTED'		=> 'ลบที่เลือก',

	'USER_GROUP_CHANGE'			=> 'จาก “%1$s” กลุ่ม “%2$s”',
	'USER_GROUP_DEMOTE'			=> 'ความเป็นผู้นำถูกลดระดับ', //CHECK
	'USER_GROUP_DEMOTE_CONFIRM'	=> 'คุณแน่ใจหรือไม่ว่าต้องการลดระดับความเป็นผู้นำกลุ่มจากกลุ่มที่เลือก?', //TODO
	'USER_GROUP_DEMOTED'		=> 'ลดระดับความเป็นผู้นำของคุณสำเร็จ.', //TODO
));

?>
