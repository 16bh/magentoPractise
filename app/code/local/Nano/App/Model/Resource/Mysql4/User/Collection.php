<?php

class Nano_App_Model_Resource_Mysql4_User_Collection extends Mage_Core_Model_Mysql4_Collection_Abstract
{
    public function _construct()
    {
        $this->_init('app/user');
    }

}