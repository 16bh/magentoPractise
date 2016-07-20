<?php

require_once Mage::getModuleDir('controllers', "Mage_Customer").DS."AccountController.php";
class Nano_App_AccountController extends Mage_Customer_AccountController
{
    /**
     * Login post action
     */
    public function loginPostAction()
    {
        echo 'login post has been rewritten';
    }
} 