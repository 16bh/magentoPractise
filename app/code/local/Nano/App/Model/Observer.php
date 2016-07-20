<?php

/**
 * Rewrite Captcha Observer because error message should be given when captcha is not correct
 */
class Nano_App_Model_Observer extends Mage_Captcha_Model_Observer
{
    echo 'observer function has been written';die;
}