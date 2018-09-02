<?php

namespace Embitel\Tech\Controller\Adminhtml\Index;

class Subscribe extends \Magento\Backend\App\Action
{
    public function __construct(
        \Magento\Backend\App\Action\Context $context,
        \Magento\Framework\View\Result\PageFactory $pageFactory
    ){
        parent::__construct($context);
        $this->pageFactory = $pageFactory;
    }


    public function execute(){
        //echo "hello";
        //die;
        return $this->pageFactory->create();
    }
}
