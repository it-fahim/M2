<?php

namespace Embitel\Tech\ViewModel;

use Magento\Cms\Api\BlockRepositoryInterface;
use Magento\Framework\Api\SearchCriteriaBuilder;
use Magento\Framework\UrlInterface;
use Magento\Framework\View\Element\Block\ArgumentInterface;

class CmsBlocksList implements ArgumentInterface
{
    /**
     * @var PageRepositoryInterface;
     */

    private $blockRepository;

    /**
     * @var SearchCriteriaInterface;
     */
    private $searchCriteriaBuilder;
    
    /**
     * @var UrlInterface;
     */
    
     private $url;

    public function __construct(
        BlockRepositoryInterface $blockRepository,
        SearchCriteriaBuilder $searchCriteriaBuilder,
        \Magento\Customer\Model\Session $customerSession,
        UrlInterface $url
    )
    {
        $this->customerSession = $customerSession;
        $this->blockRepository = $blockRepository;
        $this->searchCriteriaBuilder = $searchCriteriaBuilder;
        $this->url = $url;
    }

    /**
     * @return string 
    */

    public function getItemsJson()
    {
        
        $result = [];
        foreach($this->getItems() as $block)
        {
            $result[$block->getIdentifier()] = [
                'title' => $block->getTitle(),
                'content'   => $block->getIdentifier()
                
            ];
        }

        return json_encode($result);
    }

    private function getItems()
    {
        $searchCriteria = $this->searchCriteriaBuilder->create();
        $blockSearchResult = $this->blockRepository->getList($searchCriteria);
        return $blockSearchResult->getItems();
    }

    public function getName()
    {
        $name= '';
        if($this->customerSession->isLoggedIn())
        {
            return $this->customerSession->getCustomer()->getFirstname();
        }
    }

}