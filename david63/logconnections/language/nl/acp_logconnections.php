<?php
/**
 *
 * @package Log Connections
 * @copyright (c) 2017 david63
 * @license GNU General Public License, version 2 (GPL-2.0)
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
	$lang = [];
}

/**
 * DEVELOPERS PLEASE NOTE
 *
 * All language files should use UTF-8 as their encoding and the files must not contain a BOM.
 *
 * Placeholders can now contain order information, e.g. instead of
 * 'Page %s of %s' you can (and should) write 'Page %1$s of %2$s', this allows
 * translators to re-order the output of data while ensuring it remains correct
 *
 * You do not need this where single placeholders are used, e.g. 'Message %d' is fine
 * equally where a string contains only two placeholders which are used to wrap text
 * in a url you again do not need to specify an order e.g., 'Click %sHERE%s' is fine
 *
 * Some characters you may want to copy&paste:
 * ’ » “ ” …
 *
 */

$lang = array_merge($lang, [
	'LOG_BROWSER' 				=> 'Log de browser van de gebruiker',
	'LOG_BROWSER_EXPLAIN' 		=> 'Neem de browserinformatie van de gebruiker op in het logboekitem voor gebruikersverbindingen.',
	'LOG_CONNECTION' 			=> 'Log verbinding',
	'LOG_CONNECTION_EXPLAIN' 	=> 'Maak een logboek invoer wanneer een gebruiker inlogt op het forum.',
	'LOG_CONNECTIONS_EXPLAIN'	=> 'Hier kunt u de opties instellen met betrekking tot het type verbinding dat u wilt hebben aangemeld.',
	'LOG_CONNECTIONS_OPTIONS' 	=> 'Log verbindingsopties',
	'LOG_FAILED' 				=> 'Logboek mislukte verbindingen',
	'LOG_FAILED_EXPLAIN' 		=> 'Maak een logboekinvoer wanneer een gebruiker een mislukte poging doet om in te loggen op het forum.',
	'LOG_LOGOUT' 				=> 'Log afmeldingen',
	'LOG_LOGOUT_EXPLAIN' 		=> 'Maak een logboekinvoer wanneer een gebruiker zich afmeldt van het forum.',
	'LOG_NEW_USER' 				=> 'Log nieuwe gebruiker',
	'LOG_NEW_USER_EXPLAIN' 		=> 'Maak een logboekinvoer wanneer een nieuwe gebruiker zich op het bord registreert.',
]);
