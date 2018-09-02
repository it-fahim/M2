<?php
 
namespace Embitel\ApiDemo\Model;
 
use Magento\Framework\Api\SearchCriteriaInterface;
use Magento\Framework\Api\SortOrder;
use Magento\Framework\Exception\NoSuchEntityException;
use Embitel\ApiDemo\Api\Data\ApiDemoInterface;
use Embitel\ApiDemo\Api\Data\ApiDemoSearchResultInterface;
use Embitel\ApiDemo\Api\Data\ApiDemoSearchResultInterfaceFactory;
use Embitel\ApiDemo\Api\ApiDemoRepositoryInterface;
use Embitel\ApiDemo\Model\ResourceModel\ApiDemo\Collection as ApiDemoCollectionFactory;
use Embitel\ApiDemo\Model\ResourceModel\ApiDemo\Collection;
 
class ApiDemoRepository implements ApiDemoRepositoryInterface
{
    /**
     * @var ApiDemo
     */
    private $apidemoFactory;
 
    /**
     * @var ApiDemoCollectionFactory
     */
    private $apidemoCollectionFactory;
 
    /**
     * @var ApiDemoSearchResultInterfaceFactory
     */
    private $searchResultFactory;
 
    public function __construct(
        ApiDemo $apidemoFactory,
        ApiDemoCollectionFactory $apidemoCollectionFactory,
        ApiDemoSearchResultInterfaceFactory $apidemoSearchResultInterfaceFactory
    ) {
        $this->apidemoFactory = $apidemoFactory;
        $this->apidemoCollectionFactory = $apidemoCollectionFactory;
        $this->searchResultFactory = $apidemoSearchResultInterfaceFactory;
    }
 
    // ... getById, save and delete methods listed above ...
 
    public function getList(SearchCriteriaInterface $searchCriteria)
    {
        $collection = $this->collectionFactory->create();
 
        $this->addFiltersToCollection($searchCriteria, $collection);
        $this->addSortOrdersToCollection($searchCriteria, $collection);
        $this->addPagingToCollection($searchCriteria, $collection);
 
        $collection->load();
 
        return $this->buildSearchResult($searchCriteria, $collection);
    }
 
    private function addFiltersToCollection(SearchCriteriaInterface $searchCriteria, Collection $collection)
    {
        foreach ($searchCriteria->getFilterGroups() as $filterGroup) {
            $fields = $conditions = [];
            foreach ($filterGroup->getFilters() as $filter) {
                $fields[] = $filter->getField();
                $conditions[] = [$filter->getConditionType() => $filter->getValue()];
            }
            $collection->addFieldToFilter($fields, $conditions);
        }
    }
 
    private function addSortOrdersToCollection(SearchCriteriaInterface $searchCriteria, Collection $collection)
    {
        foreach ((array) $searchCriteria->getSortOrders() as $sortOrder) {
            $direction = $sortOrder->getDirection() == SortOrder::SORT_ASC ? 'asc' : 'desc';
            $collection->addOrder($sortOrder->getField(), $direction);
        }
    }
 
    private function addPagingToCollection(SearchCriteriaInterface $searchCriteria, Collection $collection)
    {
        $collection->setPageSize($searchCriteria->getPageSize());
        $collection->setCurPage($searchCriteria->getCurrentPage());
    }
 
    private function buildSearchResult(SearchCriteriaInterface $searchCriteria, Collection $collection)
    {
        $searchResults = $this->searchResultFactory->create();
 
        $searchResults->setSearchCriteria($searchCriteria);
        $searchResults->setItems($collection->getItems());
        $searchResults->setTotalCount($collection->getSize());
 
        return $searchResults;
    }
}