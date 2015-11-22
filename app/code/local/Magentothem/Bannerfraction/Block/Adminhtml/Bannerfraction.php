<?php
class Magentothem_Bannerfraction_Block_Adminhtml_Bannerfraction extends Mage_Adminhtml_Block_Widget_Grid_Container
{
  public function __construct()
  {
    $this->_controller = 'adminhtml_bannerfraction';
    $this->_blockGroup = 'bannerfraction';
    $this->_headerText = Mage::helper('bannerfraction')->__('Item Manager');
    $this->_addButtonLabel = Mage::helper('bannerfraction')->__('Add Item');
    parent::__construct();
  }
}