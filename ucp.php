<?php
// Modified by xcession

/**
*
* ucp [Thai]
*
* @package language
* @version $Id: ucp.php 9162 2008-12-03 11:18:31Z acydburn $
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

// Privacy policy and T&C
$lang = array_merge($lang, array(
	'TERMS_OF_USE_CONTENT'	=> 'ในขั้นตอนการสมัครสมาชิก  “%1$s”  ผู้สมัครจะต้องกรอกข้อมูลตามความเป็นจริง หากมีการเปลี่ยนแปลงใดๆ  “%1$s” ขอให้ท่านแก้ไข โดยการเปลี่ยนแปลงข้อมูลดังกล่าวจากปุ่ม "แก้ไขข้อมูลสมาชิก"<br /><br />

1.  “%1$s” ให้บริการรับ และส่งอีเมล์ ผ่านทางเวปและระบบออนไลน์ของ “%1$s” แก่สมาชิกทุกท่าน โดยไม่คิดค่าบริการใดๆ ทั้งสิ้น ซึ่งทางสมาชิกต้องจัดหาอุปกรณ์ในการติดต่อเข้า ระบบอินเทอร์เน็ตพร้อมทั้งเป็นผู้รับผิดชอบในการจ่ายค่าบริการ โทรศัพท์ และค่าบริการอินเทอร์เน็ตเอง ชื่อติดต่อบริการ ( login name) ต้องใช้ภาษาอังกฤษเท่านั้น และต้องมีความยาว ระหว่าง 6-18 ตัวอักษร ใช้ได้เฉพาะตัวอักษร a-z, 0-9, -, _ ไม่เว้นช่องว่าง<br /><br />

2. ไม่ว่าท่านจะอยู่มุมไหนของโลก ก็สามารถใช้บริการ “%1$s” เพียงมีคอมพิวเตอร์ที่เชื่อมต่ออินเทอร์เน็ตได้ ทั้งนี้อยู่ในความรับผิดชอบของผู้ใช้  “%1$s” ที่จะต้องปฏิบัติตามกฎระเบียบ ที่มีผลบังคับใช้ในประเทศต่างๆ  “%1$s” ขอสงวนสิทธิ์ในการให้บริการ และหยุดให้บริการเมื่อใดก็ได้ ตามแต่ความเหมาะสม โดยมิต้องบอกกล่าวให้ท่านทราบล่วงหน้า  “%1$s” ถือว่าความเป็นส่วนตัวเป็นเรื่องสำคัญมากสำหรับ การติดต่อสื่อสาร ทั้งนี้เพื่อความเป็นส่วนตัวของท่านเอง  “%1$s” ขอแจ้งให้ท่านทราบว่า เป็นหน้าที่ของท่านเอง ในการรักษาชื่อติดต่อบริการ ( login name) และรหัสผ่าน ( password) ให้ปลอดภัย ไม่บอกให้ผู้อื่นทราบ<br /><br />

3.  “%1$s”  เปิดให้บริการสำหรับการใช้เพื่อส่วนตัวเท่านั้น ห้ามใช้  “%1$s”  เพื่อผลประโยชน์ทางธุรกิจในทุกรูปแบบ ทั้งการแอบอ้าง หรือขายบริการต่อ (resale) หากท่านทำความเสียหาย ให้กับผู้อื่น ทาง  “%1$s” จะไม่รับผิดชอบต่อข้อเสียหายในทุกกรณี <br /><br />

4. สมาชิก “%1$s”  จะไม่นำบริการไปใช้ในกิจกรรมที่ละเมิดความเป็นส่วนตัวของผู้อื่น รวมทั้งกิจกรรมที่ผิดกฎหมาย หรือขัดต่อความสงบเรียบร้อย และศีลธรรมอันดีของสังคม ทาง  “%1$s”  ไม่รับผิดชอบต่อสิ่งที่ท่านละเมิดและสร้างความเสียหาย ให้กับผู้อื่นในทุกกรณี  “%1$s” เปิดให้บริการสำหรับการใช้เพื่อส่วนตัวเท่านั้น<br /><br />

5. ห้ามใช้ข้อความที่ไม่สุภาพ หรือเป็นการหมิ่นประมาทผู้อื่นในการสื่อสาร ไม่ว่ากรณีใดๆ ทั้งสิ้น ทั้งนี้เพื่อสร้างวัฒนธรรมที่ดี ในการใช้เว็บ<br /><br />

6.  “%1$s” ไม่รับประกันความเสียหายของจดหมายที่เกิดจากการใช้บริการของ  “%1$s” ซึ่งอาจจะไม่สามารถให้บริการได้ตลอด 24 ชั่วโมง เพราะเครื่องเซิร์ฟเวอร์ของ  “%1$s” อาจขัดข้องโดยเหตุสุดวิสัยที่ไม่อาจคาดการณ์ได้ อีกทั้ง  “%1$s” ไม่รับรองความปลอดภัยในการใช้เว็บ เพื่อสั่งซื้อสินค้าผ่านทางอินเทอร์เน็ต อย่างไรก็ดีระบบที่  “%1$s” นำมาให้บริการกับท่านเป็นระบบ ที่มีความปลอดภัยได้มาตรฐาน ซึ่งในภาวะการทำงานปกติจะไม่เกิด ความเสียหายใดๆ ข้อความ ภาพนิ่ง เสียง หรือภาพวิดีโอต่างๆ ที่พ่วงท้ายมากับจดหมาย  “%1$s”  เป็นทรัพย์สินของบริษัท กรุงเทพโทรทัศน์ และวิทยุ จำกัด ทางเราขอสงวนลิขสิทธิ์ในข้อความ ภาพนิ่ง เสียง และภาพวิดีโอเหล่านั้น ห้ามมิให้สมาชิกนำ ไปเผยแพร่ใน รูปแบบใดๆ โดยมิได้รับอนุญาต ทั้งนี้มีผลบังคับรวมไปถึงโลโก้ เครื่องหมายการค้าชื่อสินค้า และบริการต่างๆ ของ “%1$s” ด้วย<br /><br />

7. หากมีการเปลี่ยนแปลงข้อตกลงในการให้บริการ “%1$s” จะแจ้งให้ท่านทราบ โดยจะประกาศ ข้อตกลงใหม่ขึ้นหน้าจอ เพื่อให้ท่านรับทราบ และท่านจะใช้บริการของ “%1$s” ต่อไปได้ เมื่อท่านยอมรับข้อตกลงใหม่ของ “%1$s”  โดยการกดปุ่ม " ยอมรับ" หาก  “%1$s” พบว่าสมาชิก ของ  “%1$s” ละเมิดข้อตกลงที่ได้กำหนดไว้  “%1$s”  ขอสงวนสิทธิ์ในการระงับการให้บริการ โดยมิต้องแจ้งให้ทราบล่วงหน้า
	',

	'PRIVACY_POLICY'		=> 'นโบบายนี้อธิบายถึงรายละเอียดว่า “%1$s” ร่วมกับบริษัทในเครือ  ((ในที่นี้คือ “เรา”, “ของเรา” , “%1$s”, “%2$s”) และ phpBB (ในที่นี้คือ “พวกเขา”, “ของพวกเขา”,  “phpBB software”, “www.phpbb.com”, “phpBB Group”, “phpBB Teams”) ใช้ข้อมูลที่เก็บรวบรวมจากการใช้ของคุณอย่างไร (ในที่นี้คือ “ข้อมูลของคุณ”)<br />
	<br />
	ข้อมูลของคุณถูกเก็บรวบรวมด้วยวิธีการ 2 วิธี 1. การใช้คุกกี้ คุกกี้สองไฟล์แรกจะมี user-id และ session-id อยู่ คุกกี้ไฟล์ที่สามจะสร้างเมื่อคุณอ่านกระทู้ภายใน “%1$s” เพื่อใช้เก็บว่ากระทู้ไหนที่ถูกอ่าน เพื่อปรับปรุงความประทับใจในการใช้ของผู้ใช้ของคุณ <br />
	<br />
	เราอาจจะสร้างคุกกี้ภายนอกให้กับซอฟท์แวร์ phpBB ขณะผู้ใช้ดู “%1$s” ด้วย แม้ว่าสิ่งเหล่านี้จะเกินขอบเขตของเอกสารนี้ที่ตั้งใจครอบคลุมเพียงแค่หน้าที่สร้างโดยซอฟท์แวร์ phpBB 2. เรารวบรวมข้อมูลโดยการให้คุณส่งข้อมูลมาให้เราโดยตรง คุณอาจจะใช้การโพสแบบไม่ประสงค์ออกนามก็ได้<br />
	<br />
	บัญชีของคุณจะประกอบด้วยข้อมูลที่จำเป็นเท่านั้น ได้แก่ ชื่อผู้ใช้ รหัสผ่านและ e-mail address ข้อมูลบัญชีของคุณจะถูกเก็บไว้อย่างปลอดภัยตามกฎหมายป้องกันข้อมูลของประเทศที่เราอาศัยอยู่ ข้อมูลใดๆก็ตามที่  “%1$s”  ต้องการเพิ่มเติมในระหว่างการลงทะเบียนเป็นสิ่งนอกเหนือประเด็น คุณสามารถเลือกได้ว่าจะให้ข้อมูลส่วนไหนถูกแสดงอย่างเปิดเผยหรือปกปิด นอกจากนี้ ภายในบัญชีของคุณเอง คุณมีสิทธิ์ที่จะเลือกให้ ใช้หรือไม่ใช้ การสร้าง e-mail อัตโนมัติจาก ซอฟท์แวร์ phpBB<br />
	<br />
	รหัสผ่านของคุณจะถูกเข้ารหัสซึ่งทำให้มันปลอดภัย อย่างไรก็ตาม เราไม่แนะนำให้คุณใช้รหัสผ่านเดียวกันกับหลายๆเวบ รหัสผ่านของคุณมีความสำคัญต่อ “%1$s” ดังนั้น กรุณาเก็บรักษาเป็นอย่างดี และอย่าให้รหัสผ่านนี้กับใครอื่น จะไม่มีกรณีที่ บริษัทในเครือของเรา, phpBB หรือบุคคลที่สามมาขอรหัสผ่านจากคุณ หากคุณลืมรหัสผ่าน คุณสามารถใช้ “I forgot my password” ที่เรามีให้ กระบวนการนี้จะถามคำถามเกี่ยวกับชื่อผู้ใช้และ e-mail จากนั้น ซอฟท์แวร์ phpBB จะสร้างรหัสผ่านใหม่ให้กับคุณ<br />
	',
));

// Common language entries
$lang = array_merge($lang, array(
	'ACCOUNT_ACTIVE'				=> 'บัญชีรายชื่อของคุณเปิดใช้งานเรียบร้อยแล้ว. ขอบพระคุณที่ให้ความสนใจกับการเป็นสมาชิก.',
	'ACCOUNT_ACTIVE_ADMIN'			=> 'บัญชีนี้ถูกใช้งานแล้ว',
	'ACCOUNT_ACTIVE_PROFILE'		=> 'ขณะนี้บัญชีของคุณถูกใช้งานแล้ว',
	'ACCOUNT_ADDED'					=> 'ขอบคุณคะสำหรับการสมัครสมาชิก ขณะนี้บัญชีนี้ได้ถูกสร้างเรียบร้อยแล้ว คุณสามารถใช้ Username และ Password นี้ในการใช้งานได้',
	'ACCOUNT_COPPA'					=> 'สร้างบัญชีของคุณเรียบร้อยแล้ว แต่คุณต้องทำการยืนยันบัญชีของคุณก่อน ตามวิธีที่แจ้งไว้ใน e-mail ของคุณ',
	'ACCOUNT_EMAIL_CHANGED'			=> 'บันทึกข้อมูลของคุณเรียบร้อยแล้ว แต่คุณต้องทำการยืนยันบัญชี ตามวิธีที่อยู่ใน e-mail อันใหม่ของคุณ',
	'ACCOUNT_EMAIL_CHANGED_ADMIN'	=> 'บันทึกข้อมูลของคุณเรียบร้อยแล้ว แต่คุณจะต้องรอให้ผู้ดูแลบอร์ดทำการยืนยันบัญชีให้คุณ ซึ่งคุณจะได้รับแจ้งทาง e-mail เมื่อบัญชีของคุณได้รับการยืนยันแล้ว',
	'ACCOUNT_INACTIVE'				=> 'สร้างบัญชีของคุณเรียบร้อยแล้ว แต่คุณต้องทำการยืนยันบัญชีของคุณก่อน ตามวิธีที่แจ้งไว้ใน e-mail ของคุณ',
	'ACCOUNT_INACTIVE_ADMIN'		=> 'สร้างบัญชีของคุณเรียบร้อยแล้ว แต่คุณจะต้องรอให้ผู้ดูแลบอร์ดทำการยืนยันบัญชีให้คุณ ซึ่งคุณจะได้รับแจ้งทาง e-mail เมื่อบัญชีของคุณได้รับการยืนยันแล้ว',
	'ACCOUNT_INACTIVE_USER_ADMIN'	=> 'e-mail ของคุณถูก Verified แล้ว กรุณาติดต่อ Administrator เพื่อแก้ไข e-mail นี้',
	'ACTIVATION_EMAIL_SENT'			=> 'ส่งวิธีการยืนยันบัญชีไปที่ e-mail ของคุณเรียบร้อยแล้ว',
	'ADD'							=> 'เพิ่ม',
	'ADD_BCC'						=> 'เพิ่ม [BCC]',
	'ADD_FOES'						=> 'เพิ่มชื่อศัตรู',
	'ADD_FOES_EXPLAIN'				=> 'คุณสามารถเพิ่มทีละหลายรายชื่อได้ โดยให้พิมพ์ชื่อละบรรทัด',
	'ADD_FOLDER'					=> 'เพิ่มโฟลเดอร์',
	'ADD_FRIENDS'					=> 'เพิ่มชื่อเพื่อน',
	'ADD_FRIENDS_EXPLAIN'			=> 'คุณสามารถเพิ่มทีละหลายรายชื่อได้ โดยให้พิมพ์ชื่อละบรรทัด',
	'ADD_NEW_RULE'					=> 'เพิ่มกฎใหม่',
	'ADD_RULE'						=> 'เพิ่มกฎ',
	'ADD_TO'						=> 'เพิ่ม [ถึง]',
	'ADMIN_EMAIL'					=> 'ผู้ดูแลระบบสามารถส่ง e-mail มาได้',
	'AGREE'							=> 'ยอมรับเงื่อนไข',
	'ALLOW_PM'						=> 'อนุญาตให้ผู้อื่นส่งข้อความส่วนตัวมาหาได้',
	'ALLOW_PM_EXPLAIN'				=> 'ผู้ดูแลระบบ และ moderators จะสามารถส่งข้อความถึงคนได้ทุกเมื่อ',
	'ALREADY_ACTIVATED'				=> 'บัญชีของคุณได้รับการยืนยันมาก่อนแล้ว',
	'ATTACHMENTS_EXPLAIN'			=> 'รายการไฟล์แนบของคุณทั้งหมด',
	'ATTACHMENTS_DELETED'			=> 'ลบไฟล์แนบเรียบร้อยแล้ว',
	'ATTACHMENT_DELETED'			=> 'ลบไฟล์แนบเรียบร้อยแล้ว',
	'AVATAR_CATEGORY'				=> 'หมวดหมู่',
	'AVATAR_EXPLAIN'				=> 'ขนาดภาพใหญ่สุดคือ กว้าง %1$d pixel สูง %2$d pixel ขนาดไฟล์ %3$dkB',
	'AVATAR_FEATURES_DISABLED'		=> 'รูปภาพส่วนตัวถูกยกเลิกการใช้งาน',
	'AVATAR_GALLERY'				=> 'Local gallery', //TODO
	'AVATAR_GENERAL_UPLOAD_ERROR'	=> 'ไม่สามารถอัปโหลดรูปประจำตัวไปยัง %s',
	'AVATAR_PAGE'					=> 'หน้า',

	'BACK_TO_DRAFTS'			=> 'กลับไปยังข้อความร่างที่บันทึกไว้',
	'BACK_TO_LOGIN'				=> 'กลับไปหน้าเข้าสู่ระบบ',
	'BIRTHDAY'					=> 'วันเกิด',
	'BIRTHDAY_EXPLAIN'			=> 'ถ้าคุณระบุปีที่เกิด ก็จะสามารถแสดงอายุของคุณได้',
	'BOARD_DATE_FORMAT'			=> 'รูปแบบวันที่',
	'BOARD_DATE_FORMAT_EXPLAIN'	=> 'ให้ใช้ตามรูปแบบเดียวกับฟังก์ชัย <a href="http://www.php.net/date">date()</a> ของ PHP',
	'BOARD_DST'					=> 'Summer Time/<abbr title="Daylight Saving Time">DST</abbr> is in effect', //TODO
	'BOARD_LANGUAGE'			=> 'ภาษาที่ใช้งาน',
	'BOARD_STYLE'				=> 'รูปแบบของบอร์ด',
	'BOARD_TIMEZONE'			=> 'Time-Zone',
	'BOOKMARKS'					=> 'รายการโปรด',
	'BOOKMARKS_EXPLAIN'			=> 'รายการด้านล่างเป็นรายการโปรดที่คุณได้เลือกไว้. คุณสามารถเลือกลบแต่ละรายการโปรดของคุณได้โดยติ๊กเครื่องหมายถูกหน้ารายการโปรดนั้น ๆ จากนั้นกดปุ่ม  "ลบรายการโปรดที่เลือกไว้"',
	'BOOKMARKS_DISABLED'		=> 'รายการโปรด ยังไม่เปิดใช้งานในบอร์ดนี้.',
	'BOOKMARKS_REMOVED'			=> 'ลบรายการโปรดเรียบร้อยแล้ว',

	'CANNOT_EDIT_MESSAGE_TIME'	=> 'คุณไม่สามารถลบหรือแก้ไขข้อความนี้ได้อีกต่อไปแล้ว',
	'CANNOT_MOVE_TO_SAME_FOLDER'=> 'ไม่สามารถย้ายข้อความไปยังโฟลเดอร์ที่กำลังจะถูกลบได้',
	'CANNOT_MOVE_FROM_SPECIAL'	=> 'Messages cannot be moved from the outbox.', //TODO
	'CANNOT_RENAME_FOLDER'		=> 'ไม่สามารถเปลี่ยนชื่อโฟลเดอร์นี้ได้',
	'CANNOT_REMOVE_FOLDER'		=> 'ไม่สามารถลบโฟลเดอร์นี้ได้',
	'CHANGE_DEFAULT_GROUP'		=> 'เปลี่ยนกลุ่มมาตรฐาน',
	'CHANGE_PASSWORD'			=> 'เปลี่ยนรหัสผ่าน',
	'CLICK_RETURN_FOLDER'		=> '%1$sกลับไปยังโฟลเดอร์ “%3$s”%2$s',
	'CONFIRMATION'				=> 'ยืนยันการสมัครสมาชิก',
	'CONFIRM_CHANGES'			=> 'ยืนยันการเปลี่ยนแปลง',	
	'CONFIRM_EMAIL'				=> 'ยืนยัน E-mail',
	'CONFIRM_EMAIL_EXPLAIN'		=> 'ถ้า คุณมีการเปลี่ยนแปลงอีเมล์ คุณต้องกรอกอีเมล์ยืนยันอีกครั้ง',
	'CONFIRM_EXPLAIN'			=> 'เพื่อป้องกันการสมัครสมาชิกด้วยโปรแกรมอัตโนมัติ คุณจำเป็นต้องพิมพ์รหัสยืนยันตามที่คุณเห็นในรูปภาพด้านล่างนี้ ถ้าคุณไม่สามารถอ่านรหัสด้านล่างนี้ได้ กรุณาติดต่อ %sBoard Administrator%s',
	'CONFIRM_PASSWORD'			=> 'ยืนยันรหัสผ่าน',
	'CONFIRM_PASSWORD_EXPLAIN'	=> 'ยืนยันรหัสผ่านอีกครั้ง',
	'COPPA_BIRTHDAY'			=> 'กรุณาเลือกวันเกิดของคุณ',
	'COPPA_COMPLIANCE'			=> 'COPPA compliance', //TODO
	'COPPA_EXPLAIN'				=> 'คลิกปุ่ม ส่ง เพื่อเริ่มสร้างบัญชีของคุณ<!--However it cannot be activated until a parent or guardian approves your registration. You will be emailed a copy of the necessary form with details of where to send it.-->',
	'CREATE_FOLDER'				=> 'เพิ่มโฟลเดอร์…',
	'CURRENT_IMAGE'				=> 'รูปภาพที่คุณใช้อยู่',
	'CURRENT_PASSWORD'			=> 'รหัสผ่านปัจจุบัน',
	'CURRENT_PASSWORD_EXPLAIN'	=> 'คุณต้องใส่รหัสผ่านปัจจุบันของคุณทุกครั้ง ที่มีการเปลี่ยนแปลง ชื่อผู้ใช้งาน อีเมล์ และรหัสผ่าน',
	'CUR_PASSWORD_ERROR'		=> 'คุณใส่รหัสผ่านปัจจุบันไม่ถูกต้อง.',
	'CUSTOM_DATEFORMAT'			=> 'ตั้งค่าเอง…',

	'DEFAULT_ACTION'			=> 'Default action',
	'DEFAULT_ACTION_EXPLAIN'	=> 'แอคชันนี้จะถูกเรียกใช้ ถ้าไม่มีข้อใดใช้ได้',
	'DEFAULT_ADD_SIG'			=> 'ใส่่ลายเซ็น โดยให้เป็นค่าเริ่มต้น',
	'DEFAULT_BBCODE'			=> 'ใช้ BBCode โดยให้เป็นค่าเริ่มต้น',
	'DEFAULT_NOTIFY'			=> 'แจ้งเตือนเมื่อมีผู้ตอบ โดยให้เป็นค่าเริ่มต้น',
	'DEFAULT_SMILIES'			=> 'ใช้รูปแสดงอารมณ์ โดยให้เป็นค่าเริ่มต้น',
	'DEFINED_RULES'				=> 'กฎที่สร้างไว้',
	'DELETED_TOPIC'				=> 'ลบหัวข้อเรียบร้อยแล้ว',
	'DELETE_ATTACHMENT'			=> 'ลบไฟล์แนบ',
	'DELETE_ATTACHMENTS'		=> 'ลบไฟล์แนบ',
	'DELETE_ATTACHMENT_CONFIRM'	=> 'คุณแน่ใจที่จะลบไฟล์แนบนี้หรือ?',
	'DELETE_ATTACHMENTS_CONFIRM'=> 'คุณแน่ใจที่จะลบไฟล์แนบเหล่านี้หรือ?',
	'DELETE_AVATAR'				=> 'ลบรูปภาพนี้',
	'DELETE_COOKIES_CONFIRM'	=> 'คุณต้องการลบข้อมูล cookie ของบอร์ดหรือไม่?<br />(Cookie คือข้อมูลเกี่ยวกับบอร์ดที่ถูกเก็บไว้ในคอมพิวเตอร์ของคุณ ช่วยจดจำข้อมูลต่างๆ เช่น username, password ที่ถูกเข้ารหัสแล้ว)',
	'DELETE_MARKED_PM'			=> 'ลบข้อความที่เลือก',
	'DELETE_MARKED_PM_CONFIRM'	=> 'คุณแน่ใจที่จะลบข้อความที่เลือกไว้หรือ?',
	'DELETE_OLDEST_MESSAGES'	=> 'ลบข้อความที่เก่าที่สุด',
	'DELETE_MESSAGE'			=> 'ลบข้อความ',
	'DELETE_MESSAGE_CONFIRM'	=> 'คุณต้องการลบข้อความส่วนตัวนี้หรือไม่?',
	'DELETE_MESSAGES_IN_FOLDER'	=> 'ลบทุกข้อความที่อยู่ในโฟลเดอร์ที่ถูกลบ',
	'DELETE_RULE'				=> 'ลบกฎ',
	'DELETE_RULE_CONFIRM'		=> 'คุณแน่ใจที่จะลบกฎนี้หรือ?',
	'DEMOTE_SELECTED'			=> 'Demote selected',
	'DISABLE_CENSORS'			=> 'ใช้ระบบคำหวงห้าม',
	'DISPLAY_GALLERY'			=> 'แสดงคลังภาพ',
	'DOMAIN_NO_MX_RECORD_EMAIL'	=> 'ไม่มี MX record ที่ถูกต้องใน domain ของ e-mail นี้',
	'DOWNLOADS'					=> 'ดาวน์โหลด',
	'DRAFTS_DELETED'			=> 'ลบข้อความร่างที่เลือกเรียบร้อยแล้ว',
	'DRAFTS_EXPLAIN'			=> 'คุณสามารถ อ่าน, แก้ไข, และ ลบ ข้อความร่างที่คุณบันทึกไว้',
	'DRAFT_UPDATED'				=> 'บันทึกข้อความร่างเรียบร้อยแล้ว',

	'EDIT_DRAFT_EXPLAIN'		=> 'คุณสามารถแก้ไขข้อความร่างที่คุณบันทึกไว้ ข้อความร่างนี้ไม่สามารถเก็บไฟล์แนบ หรือข้อมูลแบบสำรวจ',
	'EMAIL_BANNED_EMAIL'		=> 'E-mail นี้ถูกห้ามใช้งาน',
	'EMAIL_INVALID_EMAIL'		=> 'คุณพิมพ์ e-mail ไม่ถูกต้อง',
	'EMAIL_REMIND'				=> 'e-mail นี้ใช้ในการสมัครสมาชิก',
	'EMAIL_TAKEN_EMAIL'			=> 'อีเมล์ที่คุณใช้มีผู้ใช้งานแล้วโปรดระบุอีเมล์ใหม่',
	'EMPTY_DRAFT'				=> 'คุณต้องระบุ e-mail ที่คุณเปลี่ยน',
	'EMPTY_DRAFT_TITLE'			=> 'คุณต้องกรอกหัวข้อแบบร่าง',
	'EXPORT_AS_XML'				=> 'ส่งออกเป็นไฟล์ XML',
	'EXPORT_AS_CSV'				=> 'ส่งออกเป็นไฟล์ CSV',
	'EXPORT_AS_CSV_EXCEL'		=> 'ส่งออกเป็นไฟล์ CSV (Excel)',
	'EXPORT_AS_TXT'				=> 'ส่งออกเป็นไฟล์TXT',
	'EXPORT_AS_MSG'				=> 'ส่งออกเป็นไฟล์ MSG',
	'EXPORT_FOLDER'				=> 'ส่งออกเป็นไฟล์ view',

	'FIELD_REQUIRED'					=> 'ฟิล์ดนี้ “%s” ต้องสมบูรณ์',
	'FIELD_TOO_SHORT'					=> 'ฟิล์ดนี้ “%1$s” เล็กมาก, อย่างน้อยต้อง %2$d ตัวอักษร',
	'FIELD_TOO_LONG'					=> 'ฟิล์ดนี้ “%1$s” ยามมาก อย่างมากสุด %2$d ตัวอักษรที่อนุญาต',
	'FIELD_TOO_SMALL'					=> 'ค่า “%1$s” เล็กมาก, ค่าน้อยที่สุดต้อง  %2$d ที่อนุญาต',
	'FIELD_TOO_LARGE'					=> 'ค่า “%1$s” ใหญ่มาก  ค่ามากที่สุดต้อง %2$d  ที่อนุญาต',
	'FIELD_INVALID_CHARS_NUMBERS_ONLY'	=> 'ฟิล์ดนี้ “%s” ไม่สามารถใช้ตัวอักษรได้, อนุญาตเพียงตัวเลขเท่านั้น',
	'FIELD_INVALID_CHARS_ALPHA_ONLY'	=> 'ฟิล์ดนี้ “%s” ไม่สามารถใช้ตัวอักษรได้, อนุญาต A-Z  และ 0-9 เท่านั้น',
	'FIELD_INVALID_CHARS_SPACERS_ONLY'	=> 'ฟิล์ดนี้ “%s” ไม่สามารถใช้ตัวอักษรได้, อนุญาต A-Z , 0-9 , ค่าว่างหรือเครื่องหมาย  -+_[] ',
	'FIELD_INVALID_DATE'				=> 'ฟิล์ดนี้ “%s” ไมอนุญาตให้เป็นวันที่่',

	'FOE_MESSAGE'				=> 'ข้อความจากศัตรู',
	'FOES_EXPLAIN'				=> 'คุณจะไม่เห็นการกระทำของสมาชิกที่เป็นศัตรู เช่น ข้อความที่ศัตรูโพสต์ ข้อความส่วนตัวที่ศัตรูส่งมา แต่คุณจะยังคงเห็นข้อความของ ผู้ดูแล หรือ administrator อยู่',
	'FOES_UPDATED'				=> 'บันทึกรายชื่อศัตรูเรียบร้อยแล้ว',
	'FOLDER_ADDED'				=> 'เพิ่มโฟล์เดอร์เรียบร้อยแล้ว',
	'FOLDER_MESSAGE_STATUS'		=> '%1$d จาก %2$d ข้อความี่เก็บ',
	'FOLDER_NAME_EXIST'			=> 'โฟล์เดอร์ <strong>%s</strong> นี้มีอยู่แล้ว',
	'FOLDER_OPTIONS'			=> 'ปรับแต่งโฟล์เดอร์',
	'FOLDER_RENAMED'			=> 'เปลี่ยนชื่อโฟล์เดอร์เรียบร้อยแล้ว',
	'FOLDER_REMOVED'			=> 'ลบโฟล์เดอร์เรียบร้อยแล้ว',
	'FOLDER_STATUS_MSG'			=> 'ใช้งานพื้นที่ไปแล้ว %1$d%% (ในกล่องข้อความมี %2$d ข้อความ จุได้ทั้งหมด %3$d )',
	'FORWARD_PM'				=> 'PM ส่งต่อ',
	'FORCE_PASSWORD_EXPLAIN'	=> 'ก่อนที่คุณจะเข้าใช้งานในบอร์ดนี้ คุณควรเปลี่ยนรหัสผ่าน',
	'FRIEND_MESSAGE'			=> 'ข้อความจากเพื่อน',
	'FRIENDS'					=> 'เพื่อน',
	'FRIENDS_EXPLAIN'			=> 'คุณจะสามารถติดต่อกับสมาชิกที่เป็นเพื่อนได้ง่ายขึ้น ถ้าหากรูปแบบที่คุณใช้อยู่สนับสนุนฟังก์ชันนี้ จะมีการทำแถบสีเน้นข้อความที่เป็นของเพื่อนคุณด้วย',
	'FRIENDS_OFFLINE'			=> 'ออฟไลน์',
	'FRIENDS_ONLINE'			=> 'ออนไลน์',
	'FRIENDS_UPDATED'			=> 'บันทึกรายชื่อเพื่อนเรียบร้อยแล้ว',
	'FULL_FOLDER_OPTION_CHANGED'=> 'การกระทำนี้จะดำเนินการได้เมื่อโฟลเดอร์ที่เต็มอยู่ถูกเปลี่ยนเรียบร้อยแล้ว',
	'FWD_ORIGINAL_MESSAGE'		=> '-------- ข้อความต้นฉบับ --------',
	'FWD_SUBJECT'				=> 'เรื่อง: %s',
	'FWD_DATE'					=> 'วันที่: %s',
	'FWD_FROM'					=> 'จาก: %s',
	'FWD_TO'					=> 'ถึง: %s',

	'GLOBAL_ANNOUNCEMENT'		=> 'ประกาศทั่วไป',

	'HIDE_ONLINE'				=> 'ซ่อนสถานะการออนไลน์ของฉัน',
	'HIDE_ONLINE_EXPLAIN'		=> 'การเปลี่ยนการตั้งค่านี้ จะไม่มีผลจนกว่าจะเข้าชมบอร์ดครั้งถัดไป',
	'HOLD_NEW_MESSAGES'			=> 'ไม่สามารถรับข้อความใหม่ได้ (ข้อความใหม่อยู่ในพื้นที่เผื่อจนกว่าพื้นที่ในโฟลเดอร์จะว่าง)',
	'HOLD_NEW_MESSAGES_SHORT'	=> 'มีข้อความใหม่ในพื้นที่เผื่อ',

	'IF_FOLDER_FULL'			=> 'โฟลเดอร์เต็ม',
	'IMPORTANT_NEWS'			=> 'ประกาศสำคัญ',
	'INVALID_USER_BIRTHDAY'			=> 'The entered birthday is not a valid date.', //TODO
	'INVALID_CHARS_USERNAME'	=> 'Username ประกอบได้ตัวอักษรที่ไม่ได้รับอนุญาตให้ใช้',
	'INVALID_CHARS_NEW_PASSWORD'=> 'รหัสผ่านประกอบด้วยตัวอักษรที่ไม่ได้รับอนุญาตให้ใช้',
	'ITEMS_REQUIRED'			=> 'ข้อมูลที่ระบุเครื่องหมาย  * เป็นข้อมูลที่ระบบต้องการให้กรอก',

	'JOIN_SELECTED'				=> 'Join selected', //TODO

	'LANGUAGE'					=> 'ภาษา',
	'LINK_REMOTE_AVATAR'		=> 'เชื่อมโยงนอกเวบไซต์',
	'LINK_REMOTE_AVATAR_EXPLAIN'=> 'ระบุ URL ที่อยู่ของภาพประจำตัวที่คุณต้องการเชื่อมโยง',
	'LINK_REMOTE_SIZE'			=> 'ความกว้างยาวของภาพประจำตัว',
	'LINK_REMOTE_SIZE_EXPLAIN'	=> 'กำหนดขนาดของภาพประจำตัว, ปล่อยค่านี้ให้ว่าง เพื่อให้ทำการจตรวจสอบโดยอัตโนมัติ',
	'LOGIN_EXPLAIN_UCP'			=> 'กรุณาเข้าระบบ เพื่อเข้าสู่หน้าแป้นควบคุม',
	'LOGIN_REDIRECT'			=> 'เข้าสู่ระบบเรียบร้อยแล้ว',
	'LOGOUT_FAILED'				=> 'คุณไม่สามารถออกจากระบบได้, เพราะคำร้องขอของคุณไม่สัมพันธ์กับ session กรุณาติดต่อผู้ดูแลระบบหากคุณพบปัญหานี้อีก',
	'LOGOUT_REDIRECT'			=> 'ออกจากระบบเรียบร้อยแล้ว',

	'MARK_IMPORTANT'				=> 'ตั้งเป็นว่า อ่านแล้ว หรือ ยังไม่ได้อ่าน',
	'MARKED_MESSAGE'				=> 'เลือกข้อความ',
	'MAX_FOLDER_REACHED'			=> 'จำนวนโฟลเดอร์ที่ให้ผู้ใช้กำหนดเองได้ มาถึงขีดสุดแล้ว',
	'MESSAGE_BY_AUTHOR'				=> 'โดย',
	'MESSAGE_COLOURS'				=> 'สีข้อความ',
	'MESSAGE_DELETED'				=> 'ลบข้อความเรียบร้อยแล้ว',
	'MESSAGE_HISTORY'				=> 'ประวัติข้อความ',
	'MESSAGE_REMOVED_FROM_OUTBOX'	=> 'ข้อความนี้ถูกย้ายโดยผู้เขียน ก่อนที่มันจะถูกส่งไป',
	'MESSAGE_SENT_ON'				=> 'เมื่อ',
	'MESSAGE_STORED'				=> 'ข้อความถูกส่งไปเรียบร้อยแล้ว',
	'MESSAGE_TO'					=> 'ถึง',
	'MESSAGES_DELETED'				=> 'ลบข้อความเรียบร้อยแล้ว',
	'MOVE_DELETED_MESSAGES_TO'		=> 'ย้ายข้อความไปยังโฟลเดอร์',
	'MOVE_DOWN'						=> 'เลื่อนลง',
	'MOVE_MARKED_TO_FOLDER'			=> 'ย้ายที่เลือกไปยัง %s',
	'MOVE_PM_ERROR'					=> 'เกิดข้อผิดพลาดขณะย้ายข้อความเข้าโฟลเดอร์ใหม่ เพียง %1d จาก %2d ที่่คุณต้องการย้าย.',
	'MOVE_TO_FOLDER'				=> 'ย้ายไปยังโฟล์เดอร์',
	'MOVE_UP'						=> 'เลื่อนขึ้น',

	'NEW_EMAIL_ERROR'				=> 'อีเมล์ยืนยันไม่ตรงกัน โปรดตรวจสอบอีกครั้ง',
	'NEW_FOLDER_NAME'				=> 'ชื่อโฟล์เดอร์',
	'NEW_PASSWORD'					=> 'รหัสผ่านใหม่',
	'NEW_PASSWORD_ERROR'			=> 'รหัสผ่านยืนยัน ไม่ตรงกันโปรดตรวจสอบอีกครั้ง',
	'NOTIFY_METHOD'					=> 'Notification method', //TODO
	'NOTIFY_METHOD_BOTH'			=> 'Both', //TODO
	'NOTIFY_METHOD_EMAIL'			=> 'E-mailอย่างเดียว',
	'NOTIFY_METHOD_EXPLAIN'			=> 'วิธีการส่ง e-mail ในบอร์ดนี้',
	'NOTIFY_METHOD_IM'				=> 'Jabber only', //TODO
	'NOTIFY_ON_PM'					=> 'แจ้งเตือนเมื่อมีข้อความส่วนตัวมาใหม่',
	'NOT_ADDED_FRIENDS_ANONYMOUS'	=> 'คุณไม่สามารถเพิ่มรายชื่อนิรนาม ลงในรายชื่อเพื่อนได้.',
	'NOT_ADDED_FRIENDS_FOES'		=> 'สมาชิกนี้อยู่ในรายชื่อของศัตรู ไม่สามารถเพิ่มในรายชื่อเพื่อนได้',
	'NOT_ADDED_FRIENDS_SELF'		=> 'คุณไม่สามารถเพิ่มชื่อของคุณ ลงในรายชื่อเพื่อนได้',
	'NOT_ADDED_FOES_MOD_ADMIN'		=> 'คุณไม่สามารถเพิ่มชื่อ ผู้ดูแล หรือ administrator ลงในรายชื่อศัตรูได้',
	'NOT_ADDED_FOES_ANONYMOUS'		=> 'คุณไม่สามารถเพิ่มชื่อผู้ใช้ลงรายชื่อศัตรูได้',
	'NOT_ADDED_FOES_FRIENDS'		=> 'สมาชิกนี้อยู่ในรายชื่อของเพื่อน ไม่สามารถเพิ่มในรายชื่อศัตรูได้',
	'NOT_ADDED_FOES_SELF'			=> 'คุณไม่สามารถเพิ่มชื่อรายชื่อนิรนาม ลงในรายชื่อศัตรูได้',
	'NOT_AGREE'						=> 'ไม่ยอมรับเงื่อนไข',
	'NOT_ENOUGH_SPACE_FOLDER'		=> 'โฟลเตอร์ปลายทาง “%s” ใกล้จะเต็ม สิ่งที่คุณร้องขอจึงไม่สามารถทำงานได้',
	'NOT_MOVED_MESSAGE'				=> 'คุณมี 1 ข้อความส่วนตัวที่ถูกหยุดไว้เพราะว่าโฟลเดอร์เต็ม.',
	'NOT_MOVED_MESSAGES'			=> 'คุณมี %d ข้อความซึ่งขณะนี้ถูกหยุดเพราะโฟลเดอร์คุณเต็ม',
	'NO_ACTION_MODE'				=> 'ไม่มีการระบุข้อความแอคชัน',
	'NO_AUTHOR'						=> 'ไม่พบชื่อผู้เขียนในข้อความนี้',
	'NO_AVATAR_CATEGORY'			=> 'ไม่มี',

	'NO_AUTH_DELETE_MESSAGE'		=> 'คุณไม่มีสิทธ์ลบข้อความส่วนตัวนี้',
	'NO_AUTH_EDIT_MESSAGE'			=> 'คุณไม่มีสิทธ์แก้ไขข้อความส่วนตัวนี้',
	'NO_AUTH_FORWARD_MESSAGE'		=> 'คุณไม่มีสิทธ์ส่งต่อข้อความส่วนตัวนี้',
	'NO_AUTH_GROUP_MESSAGE'			=> 'คุณไม่มีสิทธ์ส่งข้อความเข้ากลุ่มนี้',
	'NO_AUTH_PASSWORD_REMINDER'		=> 'You are not authorised to request a new password.', //TODO
	'NO_AUTH_READ_HOLD_MESSAGE'		=> 'You are not authorised to read private messages that are on hold.', //TODO
	'NO_AUTH_READ_MESSAGE'			=> 'คุณไม่มีสิทธ์อ่านข้อความส่วนตัวนี้',
	'NO_AUTH_READ_REMOVED_MESSAGE'	=> 'คุณไม่มีสิทธิฺอ่านข้อความนี้ เนื่องจากเจ้าของข้อความได้ยกเลิกไปแล้ว',
	'NO_AUTH_SEND_MESSAGE'			=> 'คุณไม่สามารถส่งข้อความส่วนตัวนี้',
	'NO_AUTH_SIGNATURE'				=> 'คุณไม่สามารถกำหนดลายเซนต์ส่วนตัวได้',

	'NO_BCC_RECIPIENT'			=> 'ไม่มี',
	'NO_BOOKMARKS'				=> 'คุณไม่มีรายการโปรด',
	'NO_BOOKMARKS_SELECTED'		=> 'You have selected no bookmarks.', //TODO
	'NO_EDIT_READ_MESSAGE'		=> 'Private message cannot be edited because it has already been read.', //TODO
	'NO_EMAIL_USER'				=> 'ไม่สามารถหา e-mail/Username นี้',
	'NO_FOES'					=> 'ไม่มีรายชื่อศัตรู',
	'NO_FRIENDS'				=> 'ไม่มีรายชื่อเพื่อน',
	'NO_FRIENDS_OFFLINE'		=> 'ไม่พบเพื่อนออฟไลน์',
	'NO_FRIENDS_ONLINE'			=> 'ไม่พบเพื่อนออนไลน์',
	'NO_GROUP_SELECTED'			=> 'ไม่มีการกำหนดกลุ่ม',
	'NO_IMPORTANT_NEWS'			=> 'ไม่มีข่าวที่ำ่สำคัญ.',
	'NO_MESSAGE'				=> 'ไม่สามารถส่งข้อมูลส่วนตัวได้',
	'NO_NEW_FOLDER_NAME'		=> 'คุณต้องระบุข้อความส่วนตัว',
	'NO_NEWER_PM'				=> 'ไม่มีข้อความใหม่',
	'NO_OLDER_PM'				=> 'ไม่มีข้อความเก่า',
	'NO_PASSWORD_SUPPLIED'		=> 'โปรดระบุชื่อผู้ใช้งาน และ รหัสผ่าน.',
	'NO_RECIPIENT'				=> 'No recipient defined.', //TODO
	'NO_RULES_DEFINED'			=> 'No rules defined.', //TODO
	'NO_SAVED_DRAFTS'			=> 'ไม่มีข้อความร่างให้บันทึก.',
	'NO_TO_RECIPIENT'			=> 'None', //TODO
	'NO_WATCHED_FORUMS'			=> 'คุณไม่สามารถดูบอร์ด นี้ได้', //CHECK
	'NO_WATCHED_SELECTED'		=> 'You have not selected any subscribed topics or forums.', //TODO
	'NO_WATCHED_TOPICS'			=> 'คุณไม่สามารถดูกระทู้ นี้ได้', //CHECK

	'PASS_TYPE_ALPHA_EXPLAIN'	=> 'รหัสผ่าน ต้องมีความยาว %1$d ถึง %2$d ตัวอักษร จะต้องใช้ทั้งตัวอักษรเล็ก, ใหญ่, และ ตัวเลข ผสมกัน',
	'PASS_TYPE_ANY_EXPLAIN'		=> 'ความยาว %1$d ถึง %2$d ตัวอักษร',
	'PASS_TYPE_CASE_EXPLAIN'	=> 'รหัสผ่าน ต้องมีความยาวระหว่าง %1$d ถึง %2$d ตัวอักษรจะต้องใช้ทั้งตัวอักษรเล็ก, ใหญ่, และ ตัวเลข ผสมกัน',
	'PASS_TYPE_SYMBOL_EXPLAIN'	=> 'รหัสผ่าน ต้องมีความยาวระหว่าง %1$d ถึง%2$d ตัวอักษรจะต้องใช้ทั้งตัวอักษรเล็ก, ใหญ่, และ ตัวเลข ผสมกัน, ต้องประกอบด้วยตัวเลขและสัญลักษณ์',
	'PASSWORD'					=> 'รหัสผ่าน',
	'PASSWORD_ACTIVATED'		=> 'รหัสผ่าน ใหม่ของคุณสามารถใช้งานได้แล้ว',
	'PASSWORD_UPDATED'			=> 'รหัสผ่านของคุณถูกส่งเข้า mail เรียบร้อยแล้ว',
	'PERMISSIONS_RESTORED'		=> 'สิทธิ์การใช้งานถูกฟื้นฟู่เรียบร้อยแล้ว',
	'PERMISSIONS_TRANSFERRED'	=> 'ข้อมูลสิทธ์การใช้งานถูกโอนย้ายเรียบร้อยแล้ว <strong>%s</strong>, คุณสามารถเรียกดูสิทธิ์การใช้งานได้จากบอร์ด.<br />กรุณาแจ้งผู้ดูแลเรื่องสิทธ์การใช้งานหากข้อมูลไม่ถูกโอนย้ายคุณสามารถย้อนคืนสิทธิ์การใช้งานได้ทุกเวลา',
	'PM_DISABLED'				=> 'ข้อความส่วนตัวไม่สามารถใช้ในบอร์ดนี้ได้',
	'PM_FROM'					=> 'จาก',
	'PM_FROM_REMOVED_AUTHOR'	=> 'ข้อความนี้ถูกส่งโดยผู้ใช้ที่ไม่ได้ลงทะเบียน',
	'PM_ICON'					=> 'PM ไอคอน',
	'PM_INBOX'					=> 'ส่งขาเข้า',
	'PM_NO_USERS'				=> 'ไม่พบความต้องการของผู้ใช้.',
	'PM_OUTBOX'					=> 'กล่องขาออก',
	'PM_SENTBOX'				=> 'ส่งข้อความ',
	'PM_SUBJECT'				=> 'เรื่องข้อความที่จะส่ง',
	'PM_TO'						=> 'ส่งถึง',
	'PM_USERS_REMOVED_NO_PM'	=> 'ผู้ใช้บางท่านไม่สามารถรับข้อมูลส่วนตัวได้.',
	'POPUP_ON_PM'				=> 'แสดงหน้าต่าง Pop up ถ้ามีข้อความส่งมาใหม่',
	'POST_EDIT_PM'				=> 'แก้ไขข้อความ',
	'POST_FORWARD_PM'			=> 'ส่งต่อข้อความ',
	'POST_NEW_PM'				=> 'เขียนข้อความ',
	'POST_PM_LOCKED'			=> 'ข้อความส่วนตัวถูกล๊อก',
	'POST_PM_POST'				=> 'โพสต์ใส่คำพูด',
	'POST_QUOTE_PM'				=> 'ข้อความใส่คำพูด',
	'POST_REPLY_PM'				=> 'ตอบกลับข้อความ',
	'PRINT_PM'					=> 'ตัวอย่างการพิมพ์',
	'PREFERENCES_UPDATED'		=> 'การตั้งค่าของคุณถูกบันทึกแล้ว',
	'PROFILE_INFO_NOTICE'		=> 'ข้อมูลเหล่านี้จะสามารถอ่านได้โดยสมาชิกท่านอื่น กรุณาระมัดระวังข้อมูลที่เป็นส่วนตัว และจะต้องกรอกทุกช่องที่มีเครื่องหมาย *',
	'PROFILE_UPDATED'			=> 'บันทึกข้อมูลส่วนตัวของคุณเรียบร้อยแล้ว โปรดรอสักครู่..',

	'RECIPIENT'							=> 'ผู้รับ',
	'RECIPIENTS'						=> 'ผู้รับ',
	'REGISTRATION'						=> 'สมัครสมาชิก',
	'RELEASE_MESSAGES'					=> '%sโปรดหยุดข้อความไว้%s… เราจะทำการเรียงลำดับข้อความใหม่ หากพื้นที่เพียงพอที่จะทำ',
	'REMOVE_ADDRESS'					=> 'ลบที่อยู่',
	'REMOVE_SELECTED_BOOKMARKS'			=> 'ลบรายการโปรดที่เลือกไว้',
	'REMOVE_SELECTED_BOOKMARKS_CONFIRM'	=> 'คุณแน่ใจหรือยังว่าต้องการลบรายการโปรดทั้งหมดที่เลือกไว้?',
	'REMOVE_BOOKMARK_MARKED'			=> 'ลบรายการโปรดที่เลือกไว้',
	'REMOVE_FOLDER'						=> 'ลบโฟล์เดอร์',
	'REMOVE_FOLDER_CONFIRM'				=> 'คุณแน่ใจหรือยังว่าต้องการลบโฟล์เดอร์นี้?',
	'RENAME'							=> 'เปลี่ยนชื่อ',
	'RENAME_FOLDER'						=> 'เปลี่ยนชื่อโฟล์เดอร์',
	'REPLIED_MESSAGE'					=> 'ข้อความตอบกลับ',
	'RESIGN_SELECTED'					=> 'Resign selected', //TODO
	'RETURN_FOLDER'						=> '%1$sย้อนกลับไปโฟล์เดอร์ก่อนหน้านี้%2$s',
	'RETURN_UCP'						=> '%s ย้อนกลับไปหน้าที่แล้ว%s',
	'RULE_ADDED'						=> 'เพิ่มกฏเรียบร้อยแล้ว',
	'RULE_ALREADY_DEFINED'				=> 'กฏนี้ถูกใช้งานก่อนหน้าแล้ว',
	'RULE_DELETED'						=> 'กฏถูกย้ายเรียบร้อยแล้ว.',
	'RULE_NOT_DEFINED'					=> 'กฏนี้ไม่เฉพาะ',
	'RULE_REMOVED_MESSAGE'				=> 'ข้อความส่วนตัวนี้ถูกย้ายไปที่ Filers',
	'RULE_REMOVED_MESSAGES'				=> '%d ข้อความส่วนตัวถูกย้ายลง Filters.',

	'SAME_PASSWORD_ERROR'		=> 'รหัสผ่าน ใหม่ของคุณเหมือนกับ รหัสผ่าน ที่คุณใช้อยู่ปัจจุบัน',
	'SEARCH_YOUR_POSTS'			=> 'แสดงโพลต์ของคุณ',
	'SEND_PASSWORD'				=> 'ส่งรหัสผ่าน',
	'SENT_AT'					=> 'Sent at',
	'SHOW_EMAIL'				=> 'สมาชิกท่านอื่นสามารถติดต่อฉันได้ทางอีเมล์',
	'SIGNATURE_EXPLAIN'			=> 'คุณสามารถปรับเปลี่ยน แก้ไขลายเซ็นต์ของคุณได้ที่นี่ ลายเซ็นต์นี้จะแสดงด้านล่างโพสทุกโพสของคุณ (ถ้าคุณได้ตั้งค่าให้ลายเซ็นต์แสดง). ลายเซ็นต์ไม่ควรเกิน %d ตัวอักษร.',
	'SIGNATURE_PREVIEW'			=> 'ลายเซนต์ของคุณเหมือนกับข้อความที่คุณโฟสต์',
	'SIGNATURE_TOO_LONG'		=> 'ลายเซนต์ของคุณยาวเกินไป',
	'SORT'						=> 'เรียง',
	'SORT_COMMENT'				=> 'File comment', //TODO
	'SORT_DOWNLOADS'			=> 'ดาวน์โหลด',
	'SORT_EXTENSION'			=> 'Extension', //TODO
	'SORT_FILENAME'				=> 'ชื่อไฟล์',
	'SORT_POST_TIME'			=> 'โพสต์เมื่อ',
	'SORT_SIZE'					=> 'ขนาดไฟล์',

	'TIMEZONE'					=> 'Time-Zone', //TODO
	'TO'						=> 'ถึง',
	'TOO_MANY_RECIPIENTS'		=> 'ผู้รับมากเกินไป',
	'TOO_MANY_REGISTERS'		=> 'มีผู็้ลงทะเบียนมากเกินไป กรุณาลองใหม่อีกครั้ง',

	'UCP'						=> 'ตั้งค่าส่วนตัวสมาชิก',
	'UCP_ACTIVATE'				=> 'บัญชีรายชื่อสามารถใช้งานได้',
	'UCP_ADMIN_ACTIVATE'		=> 'คุณต้องระบุ e-mail ที่่สามารถใช้งานได้ เพื่อผู้ดูแลระบบจะตรวจสอบบัญชีรายชื่อและหากอนุมัติคุณจะได้รับแจ้งตาม e-mail ที่คุณระบุ',
	'UCP_AIM'					=> 'AOL Instant Messenger',
	'UCP_ATTACHMENTS'			=> 'แนบไฟล์',
	'UCP_COPPA_BEFORE'			=> 'ก่อน %s',
	'UCP_COPPA_ON_AFTER'		=> 'วันนี้ หรือ หลัง %s',
	'UCP_EMAIL_ACTIVATE'		=> 'คุณต้องระบุ e-mail ที่สามารถใช้งานได้ เพราะคุณจะได้รับ e-mail ในการเปิดใช้งานบัญชีรายชื่อ',
	'UCP_ICQ'					=> 'หมายเลข ICQ',
	'UCP_JABBER'				=> 'Jabber',

	'UCP_MAIN'					=> 'แสดงรายการหลัก',
	'UCP_MAIN_ATTACHMENTS'		=> 'จัดการไฟล์แนบ',
	'UCP_MAIN_BOOKMARKS'		=> 'จัดการรายการโปรด',
	'UCP_MAIN_DRAFTS'			=> 'จัดการหัวข้อที่บันทึกไว้',
	'UCP_MAIN_FRONT'			=> 'รายการหลัก',
	'UCP_MAIN_SUBSCRIBED'		=> 'จัดการข่าวสารที่เลือกรับ',

	'UCP_MSNM'					=> 'MSN',
	'UCP_NO_ATTACHMENTS'		=> 'ไม่มีไฟล์ที่คุณโฟสต์',

	'UCP_PREFS'					=> 'ตั้งค่าบอร์ด',
	'UCP_PREFS_PERSONAL'		=> 'ตั้งค่าทั่วไป',
	'UCP_PREFS_POST'			=> 'ตั้งค่าการโพสต์',
	'UCP_PREFS_VIEW'			=> 'ตั้งค่าการแสดงผล',
	
	'UCP_PM'					=> 'ข้อความส่วนตัว',
	'UCP_PM_COMPOSE'			=> 'เขียนข้อความ',
	'UCP_PM_DRAFTS'				=> 'จัดการข้อความที่บันทึกค้างไว้',
	'UCP_PM_OPTIONS'			=> 'กฏ, โฟร์เดอร์ &amp; การตั้งค่า',
	'UCP_PM_POPUP'				=> 'ข้อความส่วนตัว',
	'UCP_PM_POPUP_TITLE'		=> 'แสดงเตือนข้อความส่วนตัว',
	'UCP_PM_UNREAD'				=> 'ข้อความที่ยังไม่ได้อ่าน',
	'UCP_PM_VIEW'				=> 'แสดงข้อความ',

	'UCP_PROFILE'				=> 'ข้อมูลสมาชิก',
	'UCP_PROFILE_AVATAR'		=> 'แก้ไขรูปประจำตัว',
	'UCP_PROFILE_PROFILE_INFO'	=> 'แก้ไขข้อมูลส่วนตัว',
	'UCP_PROFILE_REG_DETAILS'	=> 'แก้ไขข้อมูลเข้าระบบ',
	'UCP_PROFILE_SIGNATURE'		=> 'แก้ไขลายเซ็นต์',

	'UCP_USERGROUPS'			=> 'กลุ่มสมาชิก',
	'UCP_USERGROUPS_MEMBER'		=> 'เปลี่ยนกลุ่มสมาชิก',
	'UCP_USERGROUPS_MANAGE'		=> 'จัดการกลุ่ม',

	'UCP_REGISTER_DISABLE'			=> 'ไม่สามารถสร้างบัญชีรายชื่อใหม่ได้ ณ ขณะนี้.',
	'UCP_REMIND'					=> 'ส่ง Password',
	'UCP_RESEND'					=> 'ส่ง e-mail',
	'UCP_WELCOME'					=> 'ยินดีต้อนรับเข้าสู่ส่วนการตั้งค่าสมาชิก. คุณสามารถตั้งค่าต่าง ๆ ของคุณจากเมนูนี้, ดูและอัปเดทข้อมูลส่วนตัว, ตั้งค่าการแสดงผลฟอรั่ม, รับ-ยกเลิก รับข่าวสารฟอรั่มและกระทู้. ส่งข้อความส่วนตัวไปยังสมาชิกท่านอื่น ๆ  (ถ้ามีการเปิดสิทธินั้นจาก Admin). หากคุณพร้อมแล้วก็สามารถเลือกและดำเนินการต่อไปได้เลย',
	'UCP_YIM'						=> 'Yahoo Messenger',
	'UCP_ZEBRA'						=> 'เพื่อนและศัตรู',
	'UCP_ZEBRA_FOES'				=> 'รายชื่อศัตรู',
	'UCP_ZEBRA_FRIENDS'				=> 'รายชื่อเพื่อน',
	'UNKNOWN_FOLDER'				=> 'ไม่รู้จักโฟรเดอร์นี้',
	'UNWATCH_MARKED'				=> 'Unwatch marked', //TODO
	'UPLOAD_AVATAR_FILE'			=> 'เลือกรูปจากเครื่องคุณ',
	'UPLOAD_AVATAR_URL'				=> 'เลือกใส่้รูปด้วย URL',
	'UPLOAD_AVATAR_URL_EXPLAIN'		=> 'คุณสามารถนำ URL ของรูปภาพจากเว็บที่ไหนมาใส่ก็ได้เช่นกัน',
	'USERNAME_ALPHA_ONLY_EXPLAIN'	=> 'ชื่อผู้ใช้งาน ควรอยู่ระหว่าง %1$d และไม่เกิน %2$d ตัวอักษรและใช้อักษรภาษาอังกฤษเท่านั้น',
	'USERNAME_ALPHA_SPACERS_EXPLAIN'=> 'ชื่อผู้ใช้งาน ควรอยู่ระหว่าง %1$d และไม่เกิน %2$d ตัวอักษรและสามารถใชภาษาอังกฤษ เว้นวรรค หรือ -+_[]',
	'USERNAME_ASCII_EXPLAIN'		=> 'ชื่อผู้ใช้งาน ควรอยู่ระหว่าง %1$d และไม่เกิน %2$d ตัวอักษร และใช้ได้เฉพาะตัวอักษร ASCII.',
	'USERNAME_LETTER_NUM_EXPLAIN'	=> 'ชื่อผู้ใช้งาน ควรอยู่ระหว่าง %1$d และไม่เกิน %2$d ตัวอักษร และสามารถใช้ตัวเลขร่วมได้',
	'USERNAME_LETTER_NUM_SPACERS_EXPLAIN'=> 'ชื่อผู้ใช้งาน ควรอยู่ระหว่าง %1$d และไม่เกิน %2$d ตัวอักษร และใช้ตัวอักษร, ตัวเลข, ที่ว่าง หรืออักษรพิเศษ -+_[] ',
	'USERNAME_CHARS_ANY_EXPLAIN'	=> 'ชื่อผู้ใช้งาน ควรอยู่ระหว่าง %1$d และไม่เกิน %2$d ตัวอักษร.',
	'USERNAME_TAKEN_USERNAME'		=> 'ชื่อผู้ใช้งาน นี้ถูกสมาชิกท่านอื่นใช้ไปแล้ว กรุณาเปลี่ยน ชื่อผู้ใช้งาน ใหม่',
	'USERNAME_DISALLOWED_USERNAME'	=> 'ชื่อผู้ใช้งาน นี้ถูกระงับไม่ให้ใช้งาน หรือมีข้อความที่ไม่ให้ใช้งาน กรุณาเปลี่ยน ชื่อผู้ใช้งาน ใหม่',
	'USER_NOT_FOUND_OR_INACTIVE'	=> 'ไม่พบ ชื่อผู้ใช้งาน นี้ หรือ ชื่อผู้ใช้งาน นี้อาจยังไม่พร้อมใช้งาน',

	'VIEW_AVATARS'				=> 'แสดงรูปส่วนตัว',
	'VIEW_EDIT'					=> 'แสดง/แก้ไข',
	'VIEW_FLASH'				=> 'แสดงภาพ Flash',
	'VIEW_IMAGES'				=> 'แสดงรูปภาพพร้อมโพสต์',
	'VIEW_NEXT_HISTORY'			=> 'PM ถัดไปในประวัิติ',
	'VIEW_NEXT_PM'				=> 'PM ถัดไป',
	'VIEW_PM'					=> 'แสดงข้อความ',
	'VIEW_PM_INFO'				=> 'รายละเอียดของข้อความ',
	'VIEW_PM_MESSAGE'			=> '1 ข้อความ',
	'VIEW_PM_MESSAGES'			=> '%d ข้อความ',
	'VIEW_PREVIOUS_HISTORY'		=> 'ก่อน PM ในประวัติ',
	'VIEW_PREVIOUS_PM'			=> 'ก่อน PM',
	'VIEW_SIGS'					=> 'แสดงลายเซ็นต์',
	'VIEW_SMILIES'				=> 'แสดงรูปรอยยิ้ม',
	'VIEW_TOPICS_DAYS'			=> 'แสดงกระทู้ของวันก่อน',
	'VIEW_TOPICS_DIR'			=> 'แสดงกระทู้ตามลำดับ',
	'VIEW_TOPICS_KEY'			=> 'เรียงลำดับกระทู้ตาม',
	'VIEW_POSTS_DAYS'			=> 'แสดงข้อความของวันก่อน',
	'VIEW_POSTS_DIR'			=> 'แสดงข้อความตามลำดับ',
	'VIEW_POSTS_KEY'			=> 'เรียงลำดับข้อความตาม',

	'WATCHED_EXPLAIN'			=> 'ภายใต้บอร์ด และ กระทู้ที่คุณมีสิทธ์ คุณสามารถสร้างข้อความใหม่ได้และมีสิทธ์เลือกบอร์ด หรือกระทู้ที่<em>ไม่ต้องการดู</em>',
	'WATCHED_FORUMS'			=> 'ดู Frums',
	'WATCHED_TOPICS'			=> 'ดูกระทู้',
	'WRONG_ACTIVATION'			=> 'Password ไม่สามารถจับคู่กับค่าใดในฐานข้อมูลได้',

	'YOUR_DETAILS'				=> 'ข้อมูลของท่าน',
	'YOUR_FOES'					=> 'รายชื่อศัตรู',
	'YOUR_FOES_EXPLAIN'			=> 'ถ้าต้องการลบ ให้คลิกที่ชื่อสมาชิก แล้วคลิกปุ่ม ส่ง',
	'YOUR_FRIENDS'				=> 'รายชื่อเพื่อน',
	'YOUR_FRIENDS_EXPLAIN'		=> 'ถ้าต้องการลบ ให้คลิกที่ชื่อสมาชิก แล้วคลิกปุ่ม ส่ง',
	'YOUR_WARNINGS'				=> 'ระดับการเตือนของคุณ',

	'PM_ACTION' => array(
		'PLACE_INTO_FOLDER'	=> 'ตำแหน่งในโฟล์เดอร์',
		'MARK_AS_READ'		=> 'เลือกข้อความที่อ่าน',
		'MARK_AS_IMPORTANT'	=> 'เลือกข้อความ',
		'DELETE_MESSAGE'	=> 'ลบข้อความ'
	),
	'PM_CHECK' => array(
		'SUBJECT'	=> 'หัวข้อ',
		'SENDER'	=> 'ผู้ส่ง',
		'MESSAGE'	=> 'ข้อความ',
		'STATUS'	=> 'สถานะข้อความ',
		'TO'		=> 'ส่งให้กับ'
	),
	'PM_RULE' => array(
		'IS_LIKE'		=> 'เหมือน',
		'IS_NOT_LIKE'	=> 'ไม่เหมือน',
		'IS'			=> 'เป็น',
		'IS_NOT'		=> 'ไม่เป็น',
		'BEGINS_WITH'	=> 'เริ่มด้วย',
		'ENDS_WITH'		=> 'จบด้วย',
		'IS_FRIEND'		=> 'เป็นเพื่อน',
		'IS_FOE'		=> 'เป็นศัตรู',
		'IS_USER'		=> 'กลุ่มผู้ใช้',
		'IS_GROUP'		=> 'ในกลุ่มสมาชิก',
		'ANSWERED'		=> 'คำตอบ',
		'FORWARDED'		=> 'ส่งต่อ',
		'TO_GROUP'		=> 'to my default usergroup', //TODO
		'TO_ME'			=> 'ถึงตัวเอง'
	),


	'GROUPS_EXPLAIN'	=> 'กลุ่มสมาชิกสามารถใช้บอร์ดของผู้ดูแลได้  โดยคุณจะถูกแต่งตั้งเป็นกลุ่มเฉพาะ ซึ่งสามารถกำหนดได้ กลุ่มนี้จะปรากฏในทุกๆ ผู้ใช้งาน ตัวอย่างเช่น  Username ที่คุณอ้างถึง ภาพประจำตัว และอื่นๆ ขึ้นอยู่กับว่าผู้ดูแลระบบอนุญาตให้้คุณเปลี่ยนกลุ่ม คุณจะได้รับอนุญาตให้เข้าไปเกี่ยวข้องกับกลุ่มสมาชิกกลุ่มอื่นๆ บางกลุ่มคุณสามารถกำหนดสิทธ์การเข้าดูเนื้อหาหรือเพิ่มความสามารถให้กับพื้นที่นั้นได้',
	'GROUP_LEADER'		=> 'ผู้นำกลุ่ม',
	'GROUP_MEMBER'		=> 'สมาชิก',
	'GROUP_PENDING'		=> 'สมาชิกคงค้าง',
	'GROUP_NONMEMBER'	=> 'ไม่มีสมาชิก',
	'GROUP_DETAILS'		=> 'รายละเอียดกลุ่ม',

	'NO_LEADER'		=> 'ไม่มีผู้นำกลุ่ม',
	'NO_MEMBER'		=> 'ไม่มีกลุ่มสมาชิก',
	'NO_PENDING'	=> 'ไม่มีสมาชิกคงค้าง',
	'NO_NONMEMBER'	=> 'ไม่มีสมาชิกในกลุ่ม',
));

?>