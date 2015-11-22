<?php

class Magentothem_Bannerfraction_Model_Bannerfraction extends Mage_Core_Model_Abstract
{
    public function _construct()
    {
        parent::_construct();
        $this->_init('bannerfraction/bannerfraction');
    }
}