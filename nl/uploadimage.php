<?php
/**
*
* @package Upload Image
* @copyright (c) 2014 John Peskens (http://ForumHulp.com)
* Dutch translation by Dutch Translators (https://github.com/dutch-translators)
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
*
*/

if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

$lang = array_merge($lang, array(
	'ACP_UPLOAD_IMAGE_TITLE'				=> 'Upload Afbeeldingen',
	'ACP_UPLOAD_IMAGE_TITLE_EXPLAIN'		=> 'Upload Afbeeldingen stelt je in staat om afbeeldingen naar jouw forum te uploaden. De upload map wordt automtatisch aangemaakt als je deze extensie inschakelt en deze wordt gebruikt voor het opslaan van afbeeldingen.<br />Kopieer het afbeeldingspad en plaats het in een bericht. Wees voorzichtig met het verwijderen van afbeeldingen, want er is geen controle om te kijken of de afbeelding nog in gebruik is.',

	'IMAGE_AVAILABLE'		=> 'Beschikbare afbeeldingen',
	'IMAGE_LIST'			=> 'Afbeeldingslijst',
	'IMAGE_PATH'			=> 'Afbeeldingspad',
	'IMAGE_NAME'			=> 'Afbeeldingsnaam',
	'FORMAT'				=> 'Formaat',
	'SIZE'					=> 'Grootte',

	'IMAGE_DELETE'			=> 'Verwijderen',
	'ACP_IMAGE_DELETE_CONFIRM' => 'Weet je zeker dat je de afbeelding wil verwijderen?',
	'NO_IMAGE_CATEGORY'		=> 'Geen categorie',
	'DEVELOPERS'			=> 'Ontwikkelaar(s)'

));
