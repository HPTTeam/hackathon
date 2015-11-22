<?php
class Magentothem_Bannerfraction_IndexController extends Mage_Core_Controller_Front_Action
{
    public function indexAction()
    {
    	
    	/*
    	 * Load an object by id 
    	 * Request looking like:
    	 * http://site.com/bannerfraction?id=15 
    	 *  or
    	 * http://site.com/bannerfraction/id/15 	
    	 */
    	/* 
		$bannerfraction_id = $this->getRequest()->getParam('id');

  		if($bannerfraction_id != null && $bannerfraction_id != '')	{
			$bannerfraction = Mage::getModel('bannerfraction/bannerfraction')->load($bannerfraction_id)->getData();
		} else {
			$bannerfraction = null;
		}	
		*/
		
		 /*
    	 * If no param we load a the last created item
    	 */ 
    	/*
    	if($bannerfraction == null) {
			$resource = Mage::getSingleton('core/resource');
			$read= $resource->getConnection('core_read');
			$bannerfractionTable = $resource->getTableName('bannerfraction');
			
			$select = $read->select()
			   ->from($bannerfractionTable,array('bannerfraction_id','title','content','status'))
			   ->where('status',1)
			   ->order('created_time DESC') ;
			   
			$bannerfraction = $read->fetchRow($select);
		}
		Mage::register('bannerfraction', $bannerfraction);
		*/

			
		$this->loadLayout();     
		$this->renderLayout();
    }
}