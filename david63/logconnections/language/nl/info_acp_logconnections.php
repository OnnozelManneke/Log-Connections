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
	'ERROR_LOGIN_ACTIVE' 			=> '<strong>Inactieve gebruiker heeft geprobeerd in te loggen</strong>',
	'ERROR_LOGIN_ATTEMPTS' 			=> '<strong>Gebruiker heeft de inlogpogingen overschreden</strong>',
	'ERROR_LOGIN_BREAK' 			=> '<strong>Het inloggen van de gebruiker is mislukt</strong>',
	'ERROR_LOGIN_PASSWORD' 			=> '<strong>De gebruiker heeft een onjuist wachtwoord ingevoerd</strong>',
	'ERROR_LOGIN_PASSWORD_CONVERT'	=> '<strong>Wachtwoord converteren fout</strong>',
	'ERROR_LOGIN_UNKNOWN' 			=> '<strong>Er is een onverwachte inlogfout (%1$s) opgetreden</strong><br>» %2$s',
	'ERROR_LOGIN_USERNAME' 			=> '<strong>Er is een ongeldige gebruikersnaam ingevoerd</strong><br>» %1$s',

	'LOG_AUTO_LOGIN' 				=> '<strong>Gebruiker automatisch ingelogd</strong>',
	'LOG_AUTO_LOGIN_BROWSER' 		=> '<strong>Gebruiker automatisch ingelogd</strong><br>» %1$s',
	'LOG_CONNECTIONS' 				=> 'Log verbindingen',
	'LOG_CONNECTIONS_LOG' 			=> '<strong>Instellingen voor logboekverbindingen zijn bijgewerkt</strong>',
	'LOG_NEW_USER_CREATED' 			=> '<strong>Nieuwe gebruiker aangemaakt</strong><br>» %1$s<br>» %2$s',
	'LOG_SUCCESSFUL' 				=> '<strong>Gebruiker is succesvol ingelogd</strong>',
	'LOG_SUCCESSFUL_BROWSER' 		=> '<strong>Gebruiker is succesvol ingelogd</strong><br>» %1$s',
	'LOG_USER_LOGOUT' 				=> '<strong>Gebruiker uitgelogd</strong>',

	'MANAGE_DEFAULTS' 				=> 'Beheer instellingen',

	'NO_PASSWORD_ENTERED'			=> '<strong>Geen wachtwoord ingevoerd</strong>',

	'UKNOWN_STATUS_ERROR' 			=> '<strong>Er is een onbekende inlogfout opgetreden</strong><br>» %1$s',
]);
