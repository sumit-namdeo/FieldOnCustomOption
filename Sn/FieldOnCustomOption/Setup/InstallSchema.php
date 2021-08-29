<?php

namespace Sn\FieldOnCustomOption\Setup;

use Magento\Framework\Setup\InstallSchemaInterface;
use Magento\Framework\Setup\ModuleContextInterface;
use Magento\Framework\Setup\SchemaSetupInterface;
use Magento\Framework\DB\Ddl\Table;

class InstallSchema implements InstallSchemaInterface
{
    public function install(SchemaSetupInterface $setup, ModuleContextInterface $context)
    {
        $setup->startSetup();

        $setup->getConnection()->addColumn(
            $setup->getTable('catalog_product_option'),
            'option_info',
            [
                'type' => Table::TYPE_TEXT,
                'size' => 255,
                'nullable' => true,
                'default' => '',
                'comment' => 'Option Info',
            ]
        );

        $setup->endSetup();
    }
}
