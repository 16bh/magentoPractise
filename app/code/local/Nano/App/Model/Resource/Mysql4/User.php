<?php
class Nano_App_Model_Resource_Mysql4_User extends Mage_Core_Model_Mysql4_Abstract
{
    public function _construct()
    {
        $this->_init('app/user','id');
    }
}