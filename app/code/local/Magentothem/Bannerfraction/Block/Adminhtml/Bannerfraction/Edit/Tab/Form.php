<?php

class Magentothem_Bannerfraction_Block_Adminhtml_Bannerfraction_Edit_Tab_Form extends Mage_Adminhtml_Block_Widget_Form
{
  protected function _prepareForm()
  {
      $form = new Varien_Data_Form();
      $this->setForm($form);
      $fieldset = $form->addFieldset('bannerfraction_form', array('legend'=>Mage::helper('bannerfraction')->__('Item information')));
     
	  $fieldset->addField('store_id', 'select', array(
            'name'      => 'store_id',
            'label'     => Mage::helper('bannerfraction')->__('Store View'),
            'required'  => false,
            'values'    => Mage::getSingleton('adminhtml/system_store')->getStoreValuesForForm(false, true),
        ));
      $fieldset->addField('image', 'file', array(
          'label'     => Mage::helper('bannerfraction')->__('File'),
          'required'  => false,
          'name'      => 'image',
	  ));
	  

	  $fieldset->addField('width', 'text', array(
          'label'     => Mage::helper('bannerfraction')->__('Width Image'),
          'required'  => true,
          'name'      => 'width',
      ));

	 $fieldset->addField('height', 'text', array(
          'label'     => Mage::helper('bannerfraction')->__('Height Image'),
          'required'  => true,
          'name'      => 'height',
      ));

	  $fieldset->addField('title', 'text', array(
          'label'     => Mage::helper('bannerfraction')->__('Title'),
          'class'     => 'required-entry',
          'required'  => true,
          'name'      => 'title',
      ));
	  
	  $fieldset->addField('title2', 'text', array(
          'label'     => Mage::helper('bannerfraction')->__('Title2'),
          'class'     => 'required-entry',
          'required'  => true,
          'name'      => 'title2',
      ));
	  
      $fieldset->addField('link', 'text', array(
          'label'     => Mage::helper('bannerfraction')->__('Link'),
          'required'  => false,
          'name'      => 'link',
      ));
	  
     
     
      $fieldset->addField('description', 'editor', array(
          'name'      => 'description',
          'label'     => Mage::helper('bannerfraction')->__('Description'),
          'title'     => Mage::helper('bannerfraction')->__('Description'),
          'style'     => 'width:700px; height:250px;',
          'wysiwyg'   => false,
          'required'  => true,
      ));
     


     
		
		
      $fieldset->addField('status', 'select', array(
          'label'     => Mage::helper('bannerfraction')->__('Status'),
          'name'      => 'status',
          'values'    => array(
              array(
                  'value'     => 1,
                  'label'     => Mage::helper('bannerfraction')->__('Enabled'),
              ),

              array(
                  'value'     => 2,
                  'label'     => Mage::helper('bannerfraction')->__('Disabled'),
              ),
          ),
      ));
	  
	  		
      $fieldset->addField('kind_effect', 'select', array(
          'label'     => Mage::helper('bannerfraction')->__('Effect'),
          'name'      => 'kind_effect',
          'values'    => array(
              array(
                  'value'     => 1,
                  'label'     => Mage::helper('bannerfraction')->__('Effect 1 Image From Right -> Fade'),
              ),

              array(
                  'value'     => 2,
                  'label'     => Mage::helper('bannerfraction')->__('Effect 2 Image From Top -> Fade'),
              ),
			    array(
                  'value'     => 3,
                  'label'     => Mage::helper('bannerfraction')->__('Effect 3 Image From Bottom -> Fade'),
              ),
			    array(
                  'value'     => 4,
                  'label'     => Mage::helper('bannerfraction')->__('Effect 4 Image From Bottom -> Left'),
              ),
          ),
      ));
	  
	  $fieldset->addField('order', 'text', array(
          'label'     => Mage::helper('bannerfraction')->__('Order'),
          'required'  => false,
          'name'      => 'order',
      ));
      if ( Mage::getSingleton('adminhtml/session')->getBannerfractionData() )
      {
          $form->setValues(Mage::getSingleton('adminhtml/session')->getBannerfractionData());
          Mage::getSingleton('adminhtml/session')->setBannerfractionData(null);
      } elseif ( Mage::registry('bannerfraction_data') ) {
          $form->setValues(Mage::registry('bannerfraction_data')->getData());
      }
      return parent::_prepareForm();
  }
}