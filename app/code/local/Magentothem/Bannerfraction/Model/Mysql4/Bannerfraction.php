<?php

class Magentothem_Bannerfraction_Model_Mysql4_Bannerfraction extends Mage_Core_Model_Mysql4_Abstract
{
    public function _construct()
    {    
        // Note that the bannerfraction_id refers to the key field in your database table.
        $this->_init('bannerfraction/bannerfraction', 'bannerfraction_id');
    }
}