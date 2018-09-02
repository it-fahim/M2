<?php
     
namespace Embitel\Tech\Plugin;

class AddFund
{
    
    public function __construct(){

    }
    
    public function beforeAddProduct(
        \Magento\Checkout\Model\Cart $subject,
        $productInfo,
        $requestInfo = null
    ) {
        $requestInfo['qty'] = 10; // increasing quantity to 10
        return array($productInfo, $requestInfo);
    }
}


