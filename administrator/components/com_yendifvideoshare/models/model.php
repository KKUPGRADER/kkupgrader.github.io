<?php

/*
 * @version		$Id: model.php 1.2.8 07-03-2019 $
 * @package		Yendif Video Share
 * @copyright   Copyright (C) 2014-2019 Yendif Technologies (P) Ltd
 * @license     GNU/GPL http://www.gnu.org/licenses/gpl-2.0.html
*/

// no direct access
defined('_JEXEC') or die('Restricted access');

jimport('joomla.application.component.model');

class YendifVideoShareModel extends JModelLegacy {
	
	public static function addIncludePath( $path = '', $prefix = '' ) {
	
    	return parent::addIncludePath( $path, $prefix );
		
    }

}