<?php if (!defined('TL_ROOT')) die('You cannot access this file directly!');

/**
 * Contao Open Source CMS
 * Copyright (C) 2005-2011 Leo Feyer
 *
 * Formerly known as TYPOlight Open Source CMS.
 *
 * This program is free software: you can redistribute it and/or
 * modify it under the terms of the GNU Lesser General Public
 * License as published by the Free Software Foundation, either
 * version 3 of the License, or (at your option) any later version.
 * 
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the GNU
 * Lesser General Public License for more details.
 * 
 * You should have received a copy of the GNU Lesser General Public
 * License along with this program. If not, please visit the Free
 * Software Foundation website at <http://www.gnu.org/licenses/>.
 *
 * PHP version 5
 * @copyright  numero2 - Agentur für Internetdienstleistungen
 * @author     Benny Born <benny.born@numero2.de>
 * @package    xsmultilang
 * @license    LGPL
 * @filesource
 */


/**
 * Table tl_page
 */
$GLOBALS['TL_DCA']['tl_page']['palettes']['regular'] = str_replace(
	';{publish_legend}'
,	';{xsmultilang_legend},xsmultilang_links;{publish_legend}'
,	$GLOBALS['TL_DCA']['tl_page']['palettes']['regular']
);

$GLOBALS['TL_DCA']['tl_page']['fields']['xsmultilang_links'] = array(
	'label'						=> &$GLOBALS['TL_LANG']['tl_page']['xsmultilang_links']
,	'exclude' 					=> true
,	'inputType' 				=> 'multiColumnWizard'
,	'eval' 						=> array(
		'columnFields' => array(
			'lang' => array(
				'label'                   	=> &$GLOBALS['TL_LANG']['tl_page']['language']
			,	'exclude'                 	=> false
			,	'inputType'               	=> 'text'
			,	'eval'                    	=> array( 'mandatory'=>false, 'maxlength'=>2, 'style'=>'width:50px' )
			)
		,	'link' => array(
				'label'                   	=> &$GLOBALS['TL_LANG']['tl_page']['xsmultilang_link']
			,	'exclude'                 	=> false
			,	'inputType'               	=> 'text'
			,	'eval'                    	=> array( 'mandatory'=>false )
			)
		)
	)
);
?>