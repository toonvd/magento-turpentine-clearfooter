<?php
$installer = $this;
/* @var $installer Mage_Core_Model_Resource_Setup */

$installer->startSetup();

$conn = $installer->getConnection();
$table = $installer->getTable('cms_block');

$installer->getConnection()
    ->addColumn(
        $table,
    'is_footer_block',
    array(
        'nullable' => false,
        'type' => Varien_Db_Ddl_Table::TYPE_BOOLEAN,
        'comment' => 'Is Footer'
    )
);

$installer->endSetup();