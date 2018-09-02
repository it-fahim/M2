<?php

namespace Embitel\Adminmodule\Block\Adminhtml;

class Script extends \Magento\Framework\View\Element\Template
{
    protected $collectionFactory;

    public function __construct(
        \Magento\Framework\View\Element\Template\Context $context,
        \Embitel\Adminmodule\Model\ResourceModel\Post\CollectionFactory $collectionFactory
    )
    {

        parent::__construct($context);
        $this->collectionFactory = $collectionFactory;

    }
    public function getDetails()
    {
        return $this->collectionFactory->create();
    }
}