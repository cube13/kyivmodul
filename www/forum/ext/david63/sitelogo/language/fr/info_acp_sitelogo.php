<?php
/**
*
* Site Logo extension for the phpBB Forum Software package.
* French translation by Galixte (http://www.galixte.com)
*
* @copyright (c) 2015 david63
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
// ’ « » “ ” …
//

$lang = array_merge($lang, array(
	'LOGO_CENTRE'					=> 'Centre',
	'LOGO_LEFT'						=> 'Gauche',
	'LOGO_RIGHT'					=> 'Droite',

	'SITE_LOGO'						=> 'Logo du site personnalisé',

	'SITE_LOGO_EXPLAIN'				=> 'Sur cette page il est possible de paramétrer les options pour personnaliser un logo du site afin de remplacer celui par défaut.',

	'SITE_LOGO_HEIGHT'				=> 'Hauteur du logo',
	'SITE_LOGO_HEIGHT_EXPLAIN'		=> 'Laisser vide pour utiliser la hauteur par défaut du logo.<br />La hauteur par défaut du logo est de 52px.',

	'SITE_LOGO_IMAGE'				=> 'Chemin vers le logo personnalisé',
	'SITE_LOGO_IMAGE_EXPLAIN'		=> 'Laisser vide pour utiliser le logo par défaut.<br />Si une image distante doit être utilisée comme logo saisir l’adresse URL complète en lieu et place du chemin vers le logo du site.',

	'SITE_LOGO_LEFT'				=> 'Coins à gauche',
	'SITE_LOGO_LEFT_EXPLAIN'		=> 'Permet d’arrondir les coins du côté gauche pour correspondre à la bannière.',
	'SITE_LOGO_LOG'					=> '<strong>Les options du logo du site personnalisé ont été mises à jour</strong>',

	'SITE_LOGO_MANAGE'				=> 'Gérer le logo du site',

	'SITE_LOGO_OPTIONS'				=> 'Options du logo du site',

	'SITE_LOGO_PIXELS'				=> 'Pixels',
	'SITE_LOGO_PIXELS_EXPLAIN'		=> 'Permet de définir le nombre de pixels pour l’arrondissement.',
	'SITE_LOGO_POSITION'			=> 'Position du logo du site',

	'SITE_LOGO_REMOVE'				=> 'Retirer le logo du site',
	'SITE_LOGO_REMOVE_EXPLAIN'		=> 'Permet de ne pas afficher le logo du site.',
	'SITE_LOGO_RIGHT'				=> 'Coins à droite',
	'SITE_LOGO_RIGHT_EXPLAIN'		=> 'Permet d’arrondir les coins du côté droit pour correspondre à la bannière.',

	'SITE_LOGO_WIDTH'				=> 'Largeur du logo',
	'SITE_LOGO_WIDTH_EXPLAIN'		=> 'Laisser vide pour utiliser la largeur par défaut du logo.<br />La largeur par défaut du logo est de 149px.',

	'SITE_NAME_BELOW'				=> 'Nom & description du site en dessous du logo',
	'SITE_NAME_BELOW_EXPLAIN'		=> 'Permet de déplacer le nom et la description du site en dessous du logo. Cela déplace aussi la boite de recherche sur la barre de navigation supérieure. Le texte est positionné à gauche, au centre ou à droite comme le logo.',
	'SITE_NAME_SUPRESS'				=> 'Supprimer l’affichage du texte',
	'SITE_NAME_SUPRESS_EXPLAIN'		=> 'Permet de ne pas afficher le <strong>Nom du site</strong> et la <strong>description du site</strong>.',

	'SITE_SEARCH_REMOVE'			=> 'Retirer la boite de recherche',
	'SITE_SEARCH_REMOVE_EXPLAIN'	=> 'Permet de ne pas afficher la boite de recherche dans le haut du forum.',
));
