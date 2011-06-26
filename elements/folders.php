<?php
/**
* @id $Id$
* @author  Joomla Bamboo
* @package  prettyBox
* @copyright Copyright (C) 2006 - 2010 Joomla Bamboo. http://www.joomlabamboo.com  All rights reserved.
* @license  GNU/GPL license: http://www.gnu.org/copyleft/gpl.html
*/
// no direct access
defined('_JEXEC') or die('Restricted access');
class JElementFolders extends JElement
{
   var   $_name = 'Folders';
   function fetchElement($name, $value, &$node, $control_name)
   {
			jimport( 'joomla.filesystem.folder' );
			$filter= '.';
			$exclude = array('.svn', 'CVS','.DS_Store','__MACOSX');
			$path = JPATH_ROOT.DS.'images';
			//get list of image dirs
			$folders = JFolder::folders($path, $filter, true, true, $exclude);
			//if were on windows or local server we replace the DS
			$path = str_replace('\\', '/', $path);
			//find start of local url
			$pos = strpos($path, '/images');
			//remove root path
			$local_image = substr_replace($path, '', 0, $pos);
			$id = '/images';
			$title = '/images'.'/';
			$options =array();
			$options[] = JHTML::_('select.option', $id, $title, 'id', 'title');
			foreach($folders as $folder){
				//if were on windows or local server we replace the DS
				$folder = str_replace('\\', '/', $folder);
				//find start of local url
				$pos = strpos($folder, '/images');
				//remove root path
				$local_image = substr_replace($folder, '', 0, $pos);				
				$id = $local_image;
				$title = $local_image.'/';
				$options[] = JHTML::_('select.option', $id, $title, 'id', 'title');
			}
			return JHTML::_('select.genericlist',  $options, ''.$control_name.'['.$name.'][]', 'class="inputbox"', 'id', 'title', $value, $control_name.$name);
   }
}