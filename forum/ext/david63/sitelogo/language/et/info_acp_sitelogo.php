<?php
/**
*
* @package Site Logo Extension
* @copyright (c) 2014 david63
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
* Estonian translation by phpBBeesti.com (http://www.phpbbeesti.com/)
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
	'LOGO_CENTRE'					=> 'Keskele',
	'LOGO_LEFT'						=> 'Vasakule',
	'LOGO_RIGHT'					=> 'Paremale',

	'SITE_LOGO'						=> 'Kohandatud foorumi logo',

	'SITE_LOGO_EXPLAIN'				=> 'Siin saad seadistada oma foorumile kohandatud logo, asendamaks vaikimisi phpBB logo.',

	'SITE_LOGO_HEIGHT'				=> 'Logo kõrgus',
	'SITE_LOGO_HEIGHT_EXPLAIN'		=> 'Jättes välja tühjaks kasutatakse logo vaikimisi kõrgust.<br />Vaikimsi logo kõrgus on 52px.',

	'SITE_LOGO_IMAGE'				=> '“Kohandatud foorumi logo” teekond.',
	'SITE_LOGO_IMAGE_EXPLAIN'		=> 'Jättes välja tühjaks kasutatakse vaikimsi logo.<br />Juhul, kui soovid kasutada eemal asetsevat pilti (remote), siis sisesta siia pildi täielik URL aadress. Vastasel korral sisesta siia oma pildi asukoht serveris.',

	'SITE_LOGO_LEFT'				=> 'Vasakud nurgad',
	'SITE_LOGO_LEFT_EXPLAIN'		=> 'Ümarda logo nurgad vasakult poolt sobivamaks päisega. (Näiteks kui vaikimisi kuvatakse valgeid nurki siis seadistus jah võtab need maha ja teeb nurgad ümaraks).',
	'SITE_LOGO_LOG'					=> '<strong>“Kohandatud foorumi logo” seaded on uuendatud</strong>',

	'SITE_LOGO_MANAGE'				=> 'Seaded',

	'SITE_LOGO_OPTIONS'				=> 'Foorumi logo valikud',

	'SITE_LOGO_PIXELS'				=> 'Pikslid',
	'SITE_LOGO_PIXELS_EXPLAIN'		=> 'Seadista pikslite arv ümardamiseks.',
	'SITE_LOGO_POSITION'			=> 'Foorumi logo asukoht',

	'SITE_LOGO_REMOVE'				=> 'Eemalda foorumi logo',
	'SITE_LOGO_REMOVE_EXPLAIN'		=> 'See valik muudab foorumi logo avalikusest nähtamatuks.',
	'SITE_LOGO_RIGHT'				=> 'Paremad nurgad',
	'SITE_LOGO_RIGHT_EXPLAIN'		=> 'Ümarda logo nurgad paremalt poolt sobivamaks päisega. (Näiteks kui vaikimisi kuvatakse valgeid nurki siis seadistus jah võtab need maha ja teeb nurgad ümaraks).',

	'SITE_LOGO_WIDTH'				=> 'Logo laius',
	'SITE_LOGO_WIDTH_EXPLAIN'		=> 'Jättes selle tühjaks kasutatakse logo vaikimisi laiust.<br />Vaikimisi logo laius on 149px.',

	'SITE_NAME_SUPRESS'				=> 'Varja teksti näitamine',
	'SITE_NAME_SUPRESS_EXPLAIN'		=> 'Selle seadega saad ära hoida <strong>Foorumi nime</strong> ja <strong>Foorumi kirjelduse</strong> näitamise.',

	'SITE_SEARCH_REMOVE'			=> 'Eemalda otsingukast',
	'SITE_SEARCH_REMOVE_EXPLAIN'	=> 'Selle seadega saad eemaldada päises asetseva otsingukasti.',
));
