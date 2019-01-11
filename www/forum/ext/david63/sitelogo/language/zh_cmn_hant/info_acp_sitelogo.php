<?php
/**
*
* @package Site Logo Extension
* @copyright (c) 2014 david63
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
	'LOGO_CENTRE'					=> '置中',
	'LOGO_LEFT'						=> '靠左',
	'LOGO_RIGHT'					=> '靠右',

	'SITE_LOGO'						=> '自訂討論區 logo',

	'SITE_LOGO_EXPLAIN'				=> '您可以在這裡自訂討論區 logo 選項及更換預設的 logo 圖片。',

	'SITE_LOGO_HEIGHT'				=> 'Logo 高度',
	'SITE_LOGO_HEIGHT_EXPLAIN'		=> '如果留白，將會套用 logo 的原始高度。<br />logo 的預設高度為 52px.',

	'SITE_LOGO_IMAGE'				=> '自訂討論區 logo 的路徑',
	'SITE_LOGO_IMAGE_EXPLAIN'		=> '若留白將會使用預設的討論區 logo 。<br />如果您想使用遠端圖片作為您的 logo 請輸入完整的 URL，或是您也可以直接輸入上傳至討論區的圖片本地端絕對路徑。',

	'SITE_LOGO_LEFT'				=> '左方圓角',
	'SITE_LOGO_LEFT_EXPLAIN'		=> '這將會使得圖片左側的直角變成圓角。',
	'SITE_LOGO_LOG'					=> '<strong>自訂討論區 logo 選項已更新</strong>',

	'SITE_LOGO_MANAGE'				=> '管理討論區 logo',

	'SITE_LOGO_OPTIONS'				=> '討論區 logo 選項',

	'SITE_LOGO_PIXELS'				=> '圓角像素',
	'SITE_LOGO_PIXELS_EXPLAIN'		=> '輸入圖片的圓角像素值（預設為7）。',
	'SITE_LOGO_POSITION'			=> '討論區 logo 位置',

	'SITE_LOGO_REMOVE'				=> '移除討論區 logo',
	'SITE_LOGO_REMOVE_EXPLAIN'		=> '設定這個選項將會使得討論區 logo 不會顯示。',
	'SITE_LOGO_RIGHT'				=> '右方圓角',
	'SITE_LOGO_RIGHT_EXPLAIN'		=> '這將會使得圖片右側的直角變成圓角。',

	'SITE_LOGO_WIDTH'				=> 'Logo 寬度',
	'SITE_LOGO_WIDTH_EXPLAIN'		=> '如果留白，將會套用 logo 的原始寬度。<br />logo 的預設寬度為 149px.',

	'SITE_NAME_SUPRESS'				=> '禁止顯示文字描述',
	'SITE_NAME_SUPRESS_EXPLAIN'		=> '設定此選項將禁止顯示 <strong>討論區名稱</strong> 以及 <strong>討論區描述</strong>。',

	'SITE_SEARCH_REMOVE'			=> '移除搜尋框',
	'SITE_SEARCH_REMOVE_EXPLAIN'	=> '設定此選項將禁止於首頁的上方顯示搜尋框。',
));
