<?php
$installer = $this;
$installer->startSetup();
$installer->run("
ALTER TABLE `{$this->getTable('app/user')}` ADD `age` INT(4) NOT NULL;
");
$installer->endSetup();