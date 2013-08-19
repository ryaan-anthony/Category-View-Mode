<?php
$installer = $this;
$installer->startSetup();

$installer->addAttribute('catalog_category', 'viewas_mode', array(
    'group'         => 'General',
    'input'         => 'select',
    'type'          => 'varchar',
    'source'        => 'viewas/entity_attribute_source_listMode',
    'label'         => 'List Mode',
    'backend'       => '',
    'visible'       => true,
    'required'      => false,
    'visible_on_front' => true,
    'global'        => Mage_Catalog_Model_Resource_Eav_Attribute::SCOPE_GLOBAL,
));

$installer->endSetup();