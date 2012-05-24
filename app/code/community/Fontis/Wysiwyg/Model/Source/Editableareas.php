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

class Fontis_Wysiwyg_Model_Source_EditableAreas
{
    public function toOptionArray()
    {
        return array(
            array('value' => 'description',             'label' => Mage::helper('fontis_wysiwyg')->__('Product Description')),
            array('value' => 'short_description',       'label' => Mage::helper('fontis_wysiwyg')->__('Product Short Description')),
            array('value' => 'page_content',            'label' => Mage::helper('fontis_wysiwyg')->__('CMS Page Content')),
            array('value' => 'block_content',           'label' => Mage::helper('fontis_wysiwyg')->__('Static Block Content')),
            array('value' => '_generaldescription',     'label' => Mage::helper('fontis_wysiwyg')->__('Category Description')),
            array('value' => 'text',                    'label' => Mage::helper('fontis_wysiwyg')->__('Newsletter Template')),
            array('value' => 'template_text',           'label' => Mage::helper('fontis_wysiwyg')->__('Email Templates')),
        );
    }
}

