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
	'LOGO_CENTRE'					=> 'Środek',
	'LOGO_LEFT'						=> 'Lewo',
	'LOGO_RIGHT'					=> 'Prawo',
	'SITE_LOGO'						=> 'Logo forum',
	'SITE_LOGO_EXPLAIN'				=> 'Modyfikacja umożliwia ustawienie własnego logo forum lub usunięcie domyślnego. Ponadto dodaje kilka funkcji, dzięki którym łatwo je dostosujemy.',
	'SITE_LOGO_HEIGHT'				=> 'Wysokość',
	'SITE_LOGO_HEIGHT_EXPLAIN'		=> 'Ustal wysokość, jaką ma mieć logo. Pozostaw pole puste dla domyślnych ustawień (52 px).',
	'SITE_LOGO_IMAGE'				=> 'Ścieżka do logo',
	'SITE_LOGO_IMAGE_EXPLAIN'		=> 'Podaj ścieżkę do obrazu, który chcesz aby pełnił funkcję logo. Pozostaw pole puste jeśli chcesz używać obrazu domyślnego.',
	'SITE_LOGO_LEFT'				=> 'Lewy róg',
	'SITE_LOGO_LEFT_EXPLAIN'		=> 'Zdecyduj, czy chcesz mieć miejsce na banner na lewej stronie od logo.',
	'SITE_LOGO_LOG'					=> 'Konfiguracja została zmieniona.',
	'SITE_LOGO_MANAGE'				=> 'Ustawienia',
	'SITE_LOGO_OPTIONS'				=> 'Ustawienia',
	'SITE_LOGO_PIXELS'				=> 'Zaokrąglenie',
	'SITE_LOGO_PIXELS_EXPLAIN'		=> 'Ustaw liczbę px, jeśli chcesz zaokrąglić logo. W przeciwnym wypadku ustaw wartość 0.',
	'SITE_LOGO_POSITION'			=> 'Pozycja',
	'SITE_LOGO_REMOVE'				=> 'Wyłącz logo',
	'SITE_LOGO_REMOVE_EXPLAIN'		=> 'Zdecyduj, czy chcesz wyłączyć domyślne logo forum.',
	'SITE_LOGO_RIGHT'				=> 'Prawy róg',
	'SITE_LOGO_RIGHT_EXPLAIN'		=> 'Zdecyduj, czy chcesz mieć miejsce na banner na lewej stronie od logo.',
	'SITE_LOGO_WIDTH'				=> 'Szerokość',
	'SITE_LOGO_WIDTH_EXPLAIN'		=> 'Ustal szerokość, jaką ma mieć logo. Pozostaw pole puste dla domyślnych ustawień (149 px).',
	'SITE_NAME_SUPRESS'				=> 'Wyłącz tekst',
	'SITE_NAME_SUPRESS_EXPLAIN'		=> 'Zdecyduj, czy chcesz wyłączyć nazwę strony i jej opis z nagłówka strony.',
	'SITE_SEARCH_REMOVE'			=> 'Wyłącz wyszukiwarkę',
	'SITE_SEARCH_REMOVE_EXPLAIN'	=> 'Zdecyduj, czy chcesz wyłączyć panel wyszukiwania z nagłówka strony.',
));
