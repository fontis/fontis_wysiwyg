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

class Fontis_Wysiwyg_Model_Source_FCKToolbarset
{
    public function toOptionArray()
    {
/*        $toolbarSets = array();
        $baseConfigJs = Mage::getBaseDir().'/js/fontis/fckeditor/fckconfig.js';
        $customConfigJs = Mage::getBaseDir().'/js/fontis/fckeditor/custom_config.js';
        
        if (file_exists($baseConfigJs) && is_readable($baseConfigJs)) {
            $file = @fopen($baseConfigJs, "r");
            if ($file) {
                while (!feof($file)) {
                    $line = fgets($file, 1024);
                    if (preg_match("/FCKConfig\.ToolbarSets\[(\"|')(.*?)\\1\]/i", $line, $matches)) {
                        $toolbarSets[] = array('value' => $matches[2], 'label' => ucfirst($matches[2]));
                    }
                }
                fclose($file);
            }
        }
        if (file_exists($customConfigJs) && is_readable($customConfigJs)) {
            $file = @fopen($customConfigJs, "r");
            if ($file) {
                while (!feof($file)) {
                    $line = fgets($file, 1024);
                    if (preg_match("/FCKConfig\.ToolbarSets\[(\"|')(.*?)\\1\]/i", $line, $matches)) {
                        $toolbarSets[] = array('value' => $matches[2], 'label' => ucfirst($matches[2]));
                    }
                }
                fclose($file);
            }
        }
        
        if(!empty($toolbarSets))
        {
            return $toolbarSets;
        }
        else
        {*/
            return array(
                array('value' => 'Default', 'label' => 'Default'),
                array('value' => 'Basic',   'label' => 'Basic'),
                array('value' => 'Custom',  'label' => 'Custom'),
            );
//        }
    }
}
