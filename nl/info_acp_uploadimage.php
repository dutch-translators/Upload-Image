<?php
/**
*
* @package Upload Image
* @copyright (c) 2014 John Peskens (http://ForumHulp.com)
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
	'ACP_IMAGE_MANAGEMENT'			=> 'Upload Afbeeldingen',
	'ACP_IMAGE_TITLE'				=> 'Upload Afbeelding',

	'ACP_IMAGE_DELETE_ERRORED'		=> 'Er ging iets mis.',
	'ACP_IMAGE_DELETE_SUCCESS'		=> 'Afbeelding succesvol verwijderd',
	'ACP_IMAGE_DELETED_LOG'			=> '<strong>Afbeelding verwijderd</strong><br />» %1s',
));
