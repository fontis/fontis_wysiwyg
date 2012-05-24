<?php
/**
 * Fontis WYSIWYG Editor Extension
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Open Software License (OSL 3.0)
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * http://opensource.org/licenses/osl-3.0.php
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to license@magentocommerce.com so we can send you a copy immediately.
 *
 * @category   Fontis
 * @package    Fontis_Wysiwyg
 * @author     Peter Spiller
 * @author     Lloyd Hazlett
 * @copyright  Copyright (c) 2008 Fontis Pty. Ltd. (http://www.fontis.com.au)
 * @license    http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 */

class Fontis_Wysiwyg_Model_Source_TinyMCEPlugins
{
    public function toOptionArray()
    {
        // scan the TinyMCE plugins directory for subdirectories and present
        // thse as plugin options
        $plugins = array();
        $pluginDir = Mage::getBaseDir().'/js/fontis/tiny_mce/plugins/';
        if(is_dir($pluginDir))
        {
            $contents = scandir($pluginDir);
            foreach($contents as $item)
            {
                if($item != "." and $item != ".." and is_dir($pluginDir.$item))
                {
                    $pluginEntry = array('value' => $item, 'label' => $item);
                    $plugins[] = $pluginEntry;
                }
            }
        }

        return $plugins;
        
        /*if(!empty($plugins))
        {
            return $plugins;
        }
        else
        {
            return array(
                array('value' => 'default', 'label' => 'Default'),
                array('value' => 'office2003', 'label' => 'Office2003'),
                array('value' => 'silver', 'label' => 'Silver'),
            );
        }*/
    }
}
