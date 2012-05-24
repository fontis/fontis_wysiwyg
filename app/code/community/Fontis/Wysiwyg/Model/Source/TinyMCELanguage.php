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

class Fontis_Wysiwyg_Model_Source_TinyMCELanguage
{
    public function toOptionArray()
    {
        // scan the TinyMCE langs directory for javascript files and present
        // thse as languages options
        $langs = array();
        $langsDir = Mage::getBaseDir().'/js/fontis/tiny_mce/langs/';
        if(is_dir($langsDir))
        {
            $locale = Mage::getStoreConfig('general/locale/code');
            if(!$locale)
            {
                $locale = 'en';
            }
            
            $translationList = Zend_Locale::getTranslationList('language', $locale);

            $contents = scandir($langsDir);
            foreach($contents as $item)
            {
                if($item != "." && $item != ".." && is_file($langsDir.$item)
                        && substr($item, -3) == ".js")
                {
                    $code = substr($item, 0, -3);
                    if(array_key_exists($code, $translationList))
                    {
                        $label = $translationList[$code];
                    }
                    else
                    {
                        $label = $code;
                    }

                    $langEntry = array('value' => $code, 'label' => $label);
                    $langs[] = $langEntry;
                }
            }
        }
       
        if(!empty($langs))
        {
            return $langs;
        }
        else
        {
            return array(
                array('value' => 'en', 'label' => 'en')
            );
        }
    }
}
