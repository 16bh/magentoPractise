<?php
class Nano_App_Model_User extends Mage_Core_Model_Abstract
{
    public function _construct()
    {
        $this->_init('app/user');
    }
}