<?php
class Magentothem_Bannerfraction_Block_Bannerfraction extends Mage_Core_Block_Template
{
	public function _prepareLayout()
    {
		return parent::_prepareLayout();
	
    }
   protected function _construct()
	   { 
		 if($this->getConfig('enabled') != 1) return false;
		   parent::_construct();
	   }
     public function getBannerfraction()     
     { 
        if (!$this->hasData('bannerfraction')) {
            $this->setData('bannerfraction', Mage::registry('bannerfraction'));
        }
        return $this->getData('bannerfraction');
        
    }
	public function getDataBannerFraction()
    {
  	
		$collection = Mage::getResourceModel('bannerfraction/bannerfraction_collection');
             $collection->getSelect()
			 ->where('find_in_set(0, store_id) OR find_in_set(?, store_id)', (int)(Mage::app()->getStore()->getId()))
            ->where('status=1');
		 if(count($collection)>0) 
			return 	$collection;		
			return array();
    }
	
	function sorting_array ($array, $mode='tang'){ 
        if($mode=='tang'){ 
            $length = count($array); 
            for ($i = 0; $i < $length-1; $i++){ 
                $k = $i; 
                for ($j = $i+1; $j < $length; $j++) 
                    if ($array[$j]['order'] < $array[$k]['order'])  
                        $k = $j; 
                $t = $array[$k]; 
                $array[$k] = $array[$i]; 
                $array[$i] = $t; 
            } 
        } 
        if($mode=='giam'){ 
            $length = count($array); 
            for ($i = 0; $i < $length-1; $i++){ 
                $k = $i; 
                for ($j = $i+1; $j < $length; $j++) 
                    if ($array[$j]['order'] > $array[$k]['order'])  
                        $k = $j; 
                $t = $array[$k]; 
                $array[$k] = $array[$i]; 
                $array[$i] = $t; 
            } 
        } 
        return $array; 
    }
	public function getConfig($att) 
	{
		$config = Mage::getStoreConfig('bannerfraction');
		if (isset($config['bannerfraction_config']) ) {
			$value = $config['bannerfraction_config'][$att];
			return $value;
		} else {
			throw new Exception($att.' value not set');
		}
	}
}