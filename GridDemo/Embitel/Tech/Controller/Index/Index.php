<?php

namespace Embitel\Tech\Controller\Index;


class Index extends \Magento\Framework\App\Action\Action
{

    private $pageFactory;


    public function __construct(
        \Magento\Framework\App\Action\Context $context,
        \Magento\Framework\View\Result\PageFactory $pageFactory
    )
    {
        $this->pageFactory = $pageFactory;
        parent::__construct($context);
    }

    public function execute()
    {
       // echo "fie";die;
        return $this->pageFactory->create();
    }
}