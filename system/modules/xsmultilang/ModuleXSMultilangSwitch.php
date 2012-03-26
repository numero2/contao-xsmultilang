<?php if (!defined('TL_ROOT')) die('You can not access this file directly!');

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


class ModuleXSMultilangSwitch extends Module {

	/**
	 * Template
	 * @var string
	 */
	protected $strTemplate = 'mod_xsmultilangswitch';


	/**
	 * Generate module
	 */
	protected function compile() {
	
        global $objPage;
		
		$aLangLinks = array();
		$aLangLinks = $objPage->xsmultilang_links ? unserialize( $objPage->xsmultilang_links ) : array();
		
		if( !empty($aLangLinks) ) {
		
			foreach( $aLangLinks as $i => $entry ) {
			
				if( strtolower($entry['lang']) == strtolower($objPage->language) )
					$aLangLinks[$i]['active'] = true;
				else
					$aLangLinks[$i]['active'] = false;
			}
		}
		
		$this->Template->links = $aLangLinks;
	}
}

?>