<?php

/**
 * Module configuration
 *
 * @category  Embitel
 * @package   Embitel_ApiDemo
 * @author    Fahim Khan <Faim.khan@embitel.com>
 * @copyright 2018-2019 Embitel technologies (I) Pvt. Ltd
 */

namespace Embitel\ApiDemo\Controller\Adminhtml\Index;

class Grid extends \Magento\Backend\App\Action
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
