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

class Fontis_Wysiwyg_Model_Source_FCKLanguage
{
    public function toOptionArray()
    {
        return array(
            array('value' => 'auto', 'label' => 'Auto-detect based on client'),
            array('value' => 'af', 'label' => 'Afrikaans'),
            array('value' => 'ar', 'label' => 'Arabic'),
            array('value' => 'eu', 'label' => 'Basque'),
            array('value' => 'bn', 'label' => 'Bengali/Bangla'),
            array('value' => 'bg', 'label' => 'Bulgarian'),
            array('value' => 'ca', 'label' => 'Catalan'),
            array('value' => 'zh-cn', 'label' => 'Chinese Simplified'),
            array('value' => 'zh', 'label' => 'Chinese Traditional'),
            array('value' => 'hr', 'label' => 'Croatian'),
            array('value' => 'cs', 'label' => 'Czech'),
            array('value' => 'da', 'label' => 'Danish'),
            array('value' => 'nl', 'label' => 'Dutch'),
            array('value' => 'eo', 'label' => 'Esperanto'),
            array('value' => 'fo', 'label' => 'Faroese'),
            array('value' => 'fi', 'label' => 'Finnish'),
            array('value' => 'fr', 'label' => 'French'),
            array('value' => 'gl', 'label' => 'Galician'),
            array('value' => 'de', 'label' => 'German'),
            array('value' => 'gr', 'label' => 'Greek'),
            array('value' => 'hi', 'label' => 'Hindi'),
            array('value' => 'hu', 'label' => 'Hungarian'),
            array('value' => 'it', 'label' => 'Italian'),
            array('value' => 'jp', 'label' => 'Japanese'),
            array('value' => 'ko', 'label' => 'Korean'),
            array('value' => 'lt', 'label' => 'Lithuanian'),
            array('value' => 'no', 'label' => 'Norwegian'),
            array('value' => 'fa', 'label' => 'Persian'),
            array('value' => 'pl', 'label' => 'Polish'),
            array('value' => 'pt-br', 'label' => 'Portuguese - Brazil'),
            array('value' => 'pt', 'label' => 'Portuguese - Portugal'),
            array('value' => 'ro', 'label' => 'Romanian'),
            array('value' => 'ru', 'label' => 'Russian'),
            array('value' => 'sr', 'label' => 'Serbian Cyrillic'),
            array('value' => 'sr-latn', 'label' => 'Serbian Latin'),
            array('value' => 'sk', 'label' => 'Slovak'),
            array('value' => 'sl', 'label' => 'Slovenian'),
            array('value' => 'es', 'label' => 'Spanish'),
            array('value' => 'sv', 'label' => 'Swedish'),
            array('value' => 'th', 'label' => 'Thai'),
            array('value' => 'tr', 'label' => 'Turkish'),
            array('value' => 'uk', 'label' => 'Ukrainian'),
            array('value' => 'vi', 'label' => 'Vietnamese'), 
        );
    }
}
