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


class AW_Points_Model_Rule_Condition_Address extends Mage_Rule_Model_Condition_Abstract
{
    public function loadAttributeOptions()
    {
        $helper = Mage::helper('points');

        $attributes = array(
            'base_subtotal'   => $helper->__('Subtotal'),
            'items_qty'       => $helper->__('Total Items Quantity'),
            'weight'          => $helper->__('Total Weight'),
            'method'          => $helper->__('Payment Method'),
            'shipping_method' => $helper->__('Shipping Method'),
            'postcode'        => $helper->__('Shipping Postcode'),
            'region'          => $helper->__('Shipping Region'),
            'region_id'       => $helper->__('Shipping State/Province'),
            'country_id'      => $helper->__('Shipping Country'),
        );

        $this->setAttributeOption($attributes);
        return $this;
    }

    public function getAttributeElement()
    {
        $element = parent::getAttributeElement();
        $element->setShowAsText(true);
        return $element;
    }

    public function getInputType()
    {
        switch ($this->getAttribute()) {
            case 'base_subtotal':
            case 'weight':
            case 'items_qty':
                return 'numeric';

            case 'shipping_method':
            case 'method':
            case 'country_id':
            case 'region_id':
                return 'select';
        }
        return 'string';
    }

    public function getValueElementType()
    {
        switch ($this->getAttribute()) {
            case 'shipping_method':
            case 'method':
            case 'country_id':
            case 'region_id':
                return 'select';
        }
        return 'text';
    }

    public function getValueSelectOptions()
    {
        if (!$this->hasData('value_select_options')) {
            switch ($this->getAttribute()) {
                case 'country_id':
                    $options = Mage::getModel('adminhtml/system_config_source_country')
                        ->toOptionArray();
                    break;

                case 'region_id':
                    $options = Mage::getModel('adminhtml/system_config_source_allregion')
                        ->toOptionArray();
                    break;

                case 'shipping_method':
                    $options = Mage::getModel('adminhtml/system_config_source_shipping_allmethods')
                        ->toOptionArray();
                    break;

                case 'method':
                    $options = Mage::getModel('adminhtml/system_config_source_payment_allmethods')
                        ->toOptionArray();
                    break;

                default:
                    $options = array();
            }
            $this->setData('value_select_options', $options);
        }
        return $this->getData('value_select_options');
    }

    /**
     * Validate Address Rule Condition
     *
     * @param Varien_Object $object
     *
     * @return bool
     */
    public function validate(Varien_Object $object)
    {

        $objectForParent = $object;
        $adressAttributes = array(
            'weight',
            'shipping_method',
            'postcode',
            'region',
            'region_id',
            'country_id'
        );


        if ($this->getAttribute() == 'method') {
            $objectForParent = $object->getPayment();
        }

        if (in_array($this->getAttribute(), $adressAttributes)) {
            if ($object->isVirtual()) {
                $objectForParent = $object->getBillingAddress();
            } else {
                $objectForParent = $object->getShippingAddress();
            }

            try {
                $countryId = $objectForParent->getCountryId();
                if (!is_null($countryId)) {
                    $numOfCountryRegions = count(
                        Mage::getModel('directory/country')
                            ->loadByCode($countryId)
                            ->getRegions()
                            ->getData()
                    );

                    if ($numOfCountryRegions == 0) {
                        $objectForParent->setRegionId('0');
                    }
                }
            } catch (Exception $e) {
                Mage::log('Exception: ' . $e->getMessage() . ' in ' . __CLASS__ . ' on line ' . __LINE__);
            }
        }

        return parent::validate($objectForParent);
    }
}