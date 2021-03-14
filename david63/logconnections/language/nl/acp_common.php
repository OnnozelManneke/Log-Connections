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
	'CLICK_DONATE' 				=> 'Klik hier om te doneren',

	'DONATE' 					=> 'Doneer',
	'DONATE_EXTENSIONS' 		=> 'Doneer aan mijn extensies',
	'DONATE_EXTENSIONS_EXPLAIN'	=> 'Deze extensie is, net als al mijn extensies, volledig gratis. Als u er baat bij heeft gehad, overweeg dan om een ​​donatie te doen door op de PayPal donatieknop te klikken, of gebruik de QR afbeelding “Scan, Pay, Go”, hiernaast - Ik zou het op prijs stellen.<br><br>Ik beloof je dat er geen spam zal zijn of verzoeken om verdere donaties, hoewel ze altijd welkom zouden zijn.',

	'NEW_VERSION' 				=> 'Nieuwe versie - %s',
	'NEW_VERSION_EXPLAIN' 		=> 'Versie %1$s van deze extensie kan nu worden gedownload.<br>%2$s',
	'NEW_VERSION_LINK' 			=> 'Download hier',
	'NO_JS' 					=> 'Het lijkt erop dat javascript is uitgeschakeld.<br>A.U.B. <a href="https://enablejavascript.co/">Schakel</a> het in uw browser in om te kunnen profiteren van alle functies op deze pagina.',
	'NO_VERSION_EXPLAIN' 		=> 'Versie-update informatie is niet beschikbaar.',

	'PAYPAL_BUTTON' 			=> 'Doneer met de PayPal knop',
	'PAYPAL_TITLE' 				=> 'PayPal - De veiligere, gemakkelijkere manier om online te betalen!',
	'PHP_NOT_VALID' 			=> 'Jouw ersie van PHP is niet compatibel met deze extensie.',
	'PHPBB_NOT_VALID' 			=> 'Jouw versie van phpBB is niet compatibel met deze extensie.',

	'SAVE' 						=> 'Opslagen',
	'SAVE_CHANGES' 				=> 'Wijzigingen opslaan',

	'VERSION' 					=> 'Versie',
]);
