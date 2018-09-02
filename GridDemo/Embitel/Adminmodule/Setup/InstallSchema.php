<?php

namespace Embitel\Adminmodule\Setup;

use Magento\Framework\Setup\SchemaSetupInterface;
use Magento\Framework\Setup\ModuleContextInterface;

class InstallSchema implements \Magento\Framework\Setup\InstallSchemaInterface
{

    public function install(SchemaSetupInterface $setup, ModuleContextInterface $context)
    {
        $installer = $setup;
        $installer->startsetup();
        if(!$installer->tableExists('custom_adminmodule_post')){

            $table = $installer->getConnection()->newTable(
                $installer->getTable('custom_adminmodule_post')
            )
            ->addColumn(
                'post_id',
                \Magento\Framework\Db\Ddl\Table::TYPE_INTEGER,
                null,
                [
                    'identity'  =>  true,
                    'nullable'  =>  false,
                    'primary'   =>  true,
                    'unsigned'  =>  true  
                ],
                'Post Id'
            )
            ->addColumn(
                'name',
                \Magento\Framework\DB\Ddl\Table::TYPE_TEXT,
                255,
                ['nullable => false'],
                'Post Name'
            )
            ->addColumn(
                'url_key',
                \Magento\Framework\DB\Ddl\Table::TYPE_TEXT,
                255,
                [],
                'Post URL Key'
            )
            ->addColumn(
                'post_content',
                \Magento\Framework\DB\Ddl\Table::TYPE_TEXT,
                '64k',
                [],
                'Post Post Content'
            )
            ->addColumn(
                'tags',
                \Magento\Framework\DB\Ddl\Table::TYPE_TEXT,
                255,
                [],
                'Post Tags'
            )
            ->addColumn(
                'status',
                \Magento\Framework\DB\Ddl\Table::TYPE_INTEGER,
                1,
                [],
                'Post Status'
            )
            ->addColumn(
                'featured_image',
                \Magento\Framework\DB\Ddl\Table::TYPE_TEXT,
                255,
                [],
                'Post Featured Image'
            )
            ->addColumn(
                'created_at',
                \Magento\Framework\DB\Ddl\Table::TYPE_TIMESTAMP,
                null,
                ['nullable' => false, 'default' => \Magento\Framework\DB\Ddl\Table::TIMESTAMP_INIT],
                'Created At'
            )
            ->addColumn(
            'updated_at',
            \Magento\Framework\DB\Ddl\Table::TYPE_TIMESTAMP,
            null,
            ['nullable' => false, 'default' => \Magento\Framework\DB\Ddl\Table::TIMESTAMP_INIT_UPDATE],
            'Updated At')
        ->setComment('Post Table');
        $installer->getConnection()->createTable($table);

        $installer->getConnection()->addIndex(
            $installer->getTable('custom_adminmodule_post'),
            $setup->getIdxName(
                $installer->getTable('custom_adminmodule_post'),
                ['name','url_key','post_content','tags','featured_image'],
                \Magento\Framework\DB\Adapter\AdapterInterface::INDEX_TYPE_FULLTEXT
            ),
            ['name','url_key','post_content','tags','featured_image'],
            \Magento\Framework\DB\Adapter\AdapterInterface::INDEX_TYPE_FULLTEXT
        );
        }
        $installer->endsetup();
    }
}