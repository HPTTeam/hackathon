<?php

class Magentothem_Bannerfraction_Block_Adminhtml_Bannerfraction_Edit_Tabs extends Mage_Adminhtml_Block_Widget_Tabs
{

  public function __construct()
  {
      parent::__construct();
      $this->setId('bannerfraction_tabs');
      $this->setDestElementId('edit_form');
      $this->setTitle(Mage::helper('bannerfraction')->__('Item Information'));
  }

  protected function _beforeToHtml()
  {
      $this->addTab('form_section', array(
          'label'     => Mage::helper('bannerfraction')->__('Item Information'),
          'title'     => Mage::helper('bannerfraction')->__('Item Information'),
          'content'   => $this->getLayout()->createBlock('bannerfraction/adminhtml_bannerfraction_edit_tab_form')->toHtml(),
      ));
     
      return parent::_beforeToHtml();
  }
}