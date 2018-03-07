<?php
/**
*
* @package phpBB Extension - Obscure Contact Us
* @copyright (c) 2015 - HiFiKabin
* Nederlandse vertaling @ Solidjeuh <https://www.muziekpromo.net>
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
	'OBSCURECONTACT_US_ENABLE'				=> 'Schakel Obscure Contacteer Ons in',
	'OBSCURECONTACT_US_ENABLE_EXPLAIN'		=> 'Inschakelen van Obscure Contacteer Ons zal het ingebouwde Contacteer Ons systeem uitschakelen.',

	'ACP_OBSCURECONTACTUS_CONFIG'			=> 'Obscure Contacteer Ons',
	'ACP_OBSCURECONTACTUS_CONFIG_EXPLAIN'	=> 'Dit is de configuratie pagina voor de Obscure Contacteer Ons extensie. </br>Uw e-mailadres wordt weergegeven met javascript waardoor het onzichtbaar wordt voor webcrawlers.',
	'ACP_OBSCURECONTACTUS_CONFIG_SET'		=> 'Configuratie',
	'OBSCURECONTACTUS_CONFIG_SAVED'			=> 'Obscure Contacteer Ons instellingen opgeslagen',

	'OBSCURECONTACTUS_MOUSEOVER'			=> 'Bij Mouseover',
	'OBSCURECONTACTUS_MOUSEOVER_EXPLAIN'	=> 'De tekst die wordt weergegeven wanneer u met de muisaanwijzer over de “Contacteer Ons” link gaat.',

	'OBSCURECONTACTUS_PREFIX'				=> 'E-mail voorvoegsel',
	'OBSCURECONTACTUS_PREFIX_EXPLAIN'		=> 'Het deel van uw e-mailadres dat vóór de @ komt',
	'OBSCURECONTACTUS_PREFIX_PLACEHOLDER'	=> 'naam',

	'OBSCURECONTACTUS_SUBJECT'				=> 'E-mail Onderwerp',
	'OBSCURECONTACTUS_SUBJECT_EXPLAIN'		=> 'Vult de onderwerpregel van de e-mail in.',

	'OBSCURECONTACTUS_SUFFIX'				=> 'E-mail achtervoegsel',
	'OBSCURECONTACTUS_SUFFIX_EXPLAIN'		=> 'Het deel van uw e-mailadres dat na de @ komt',
	'OBSCURECONTACTUS_SUFFIX_PLACEHOLDER'	=> 'adres.be',

	'OBSCURECONTACTUS_REQUIRE_3.1.0'		=> 'Deze extensie vereist phpBB 3.1.0 of hoger en werkt niet met 3.2.0 of nieuwer. Werk je forum bij of download de Obscure Contacteer Ons Extensie voor phpBB 3.2.x',
	'OBSCURECONTACTUS_REQUIRE_3.2.0'		=> 'Deze extensie vereist phpBB 3.2.0 of hoger en werkt niet met eerdere versies.',
));
