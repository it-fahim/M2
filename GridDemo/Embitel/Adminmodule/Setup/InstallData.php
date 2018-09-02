<?php

namespace Embitel\Adminmodule\Setup;

use Magento\Framework\Setup\InstallDataInterface;
use Magento\Framework\Setup\ModuleDataSetupInterface;
use Magento\Framework\Setup\ModuleContextInterface;

class InstallData implements InstallDataInterface
{
    public function install(ModuleDataSetupInterface $setup, ModuleContextInterface $context)
    {
        $setup->startSetup();

        $setup->getConnection()->query(
            "INSERT INTO custom_adminmodule_post
             SET name = 'Test 1',
            url_key = 'www.google.in',
            post_content = 'Hello this is normal and dummy content',
            tags = 'Test 1',
            status = 1"
        );
        $setup->endSetup();

    }
}