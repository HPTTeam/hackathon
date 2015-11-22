<?php
/**
 *
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the EULA
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 *
 *
 * =================================================================
 *                 MAGENTO EDITION USAGE NOTICE
 * =================================================================
 * This software is designed to work with Magento community edition and
 * its use on an edition other than specified is prohibited. aheadWorks does not
 * provide extension support in case of incorrect edition use.
 * =================================================================
 *
 * @category   AW
 * @package    AW_Points
 * @version    1.7.3
 * @copyright  Copyright (c) 2010-2012  ()
 * @license
 */


class AW_Points_Model_Source_Cmspages
{
    public function toOptionArray()
    {
        $toReturn = array(
            array(
                'value' => '0',
                'label' => Mage::helper('points')->__('-- None --')
            )
        );
        return array_merge($toReturn, Mage::getModel('cms/page')->getCollection()->toOptionArray());
    }
}