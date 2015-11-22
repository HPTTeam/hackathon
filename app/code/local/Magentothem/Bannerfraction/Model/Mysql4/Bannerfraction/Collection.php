<?php

class Magentothem_Bannerfraction_Model_Mysql4_Bannerfraction_Collection extends Mage_Core_Model_Mysql4_Collection_Abstract
{
    public function _construct()
    {
        parent::_construct();
        $this->_init('bannerfraction/bannerfraction');
    }
}