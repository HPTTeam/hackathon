<?php
/*------------------------------------------------------------------------
# Websites: http://www.plazathemes.com/
-------------------------------------------------------------------------*/ 
class Magentothem_Themeoptions_Model_Config_Color
{

    public function toOptionArray()
    {
        return array(
            array('value'=>'red', 'label'=>Mage::helper('adminhtml')->__('red')),
            array('value'=>'green', 'label'=>Mage::helper('adminhtml')->__('green')),
            array('value'=>'blue', 'label'=>Mage::helper('adminhtml')->__('blue')),
            array('value'=>'slate_blue', 'label'=>Mage::helper('adminhtml')->__('slate_blue')),
            array('value'=>'brown', 'label'=>Mage::helper('adminhtml')->__('brown')), 
            array('value'=>'orange', 'label'=>Mage::helper('adminhtml')->__('orange'))
             
        );
    }

}
