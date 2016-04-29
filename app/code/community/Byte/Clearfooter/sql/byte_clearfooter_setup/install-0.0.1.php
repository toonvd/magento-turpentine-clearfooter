<?php
$installer = $this;
/* @var $installer Mage_Core_Model_Resource_Setup */

$installer->startSetup();

$conn = $installer->getConnection();
$table = $installer->getTable('cms_block');

$table->addColumn(
    'is_footer_block',
    Varien_Db_Ddl_Table::TYPE_BOOLEAN,
    array(
        'nullable' => false
    ),
    'Is Footer'
);

$installer->endSetup();