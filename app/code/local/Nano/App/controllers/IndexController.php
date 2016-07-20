<?php
//自己定义的前台的控制器都应继承Mage_Core_Controller_Front_Action
//类名称的格式为：模块名字空间_模块名称_controller名称
class Nano_App_IndexController extends Mage_Core_Controller_Front_Action
{
    //默认控制器
    public function indexAction()
    {
        header('Content-Type: text/plain'); echo $config = Mage::getConfig() ->loadModulesConfiguration('config.xml') ->getNode() ->asXML(); exit;
    }

    public function insertAction()
    {
        $user = Mage::getModel("app/user");
        $user->setUserName('mengmeng');
        $user->setPassWord('123');
        // $user->setSchoolName('seu');
        $user->setData('schoolName','seu');
        $user->save();
        echo 'inserted!';
    }

    public function selectAction()
    {
        $user = Mage::getModel("app/user");
        $user->load(1);
        echo $user->getUserName().'<br/>';
        echo $user->getData('schoolName').'<hr/>';
        echo 'selected!';
    }

    public function updateAction()
    {
        $user = Mage::getModel("app/user");
        $user->load(1);
        $user->setUserName('xiamengmeng');
        $user->save();
        echo 'updated!';

    }

    public function deleteAction()
    {
        $user = Mage::getModel("app/user");
        $user->load(1);
        $user->delete();
        echo 'deleted!';
    }

    public function collectAction()
    {
        $users = Mage::getModel("app/user")->getCollection();
        foreach($users as $user){
            echo $user->getId().':'.$user->getUserName()."<br/>";
        }
        echo '<hr/>'.'get all data!';
    }


}