<?php

/**
 * Module configuration
 *
 * @category  Embitel
 * @package   Embitel_ApiDemo
 * @author    Fahim Khan <Faim.khan@embitel.com>
 * @copyright 2018-2019 Embitel technologies (I) Pvt. Ltd
 */
 
namespace Embitel\ApiDemo\Api;
 
use Magento\Framework\Api\SearchCriteriaInterface;
use Embitel\ApiDemo\Api\Data\ApiDemoInterface;
 
interface ApiDemoRepositoryInterface
{
    /**
     * @param int $id
     * @return \Embitel\ApiDemo\Api\Data\ApiDemoInterface
     * @throws \Magento\Framework\Exception\NoSuchEntityException
     */
    public function getById($id);
 
    /**
     * @param \Embitel\ApiDemo\Api\Data\ApiDemoInterface $apidemo
     * @return \Embitel\ApiDemo\Api\Data\ApiDemoInterface
     */
    public function save(ApiDemoInterface $apidemo);
 
    /**
     * @param \Embitel\ApiDemo\Api\Data\ApiDemoInterface $hamburger
     * @return void
     */
    public function delete(ApiDemoInterface $apidemo);
 
    /**
     * @param \Magento\Framework\Api\SearchCriteriaInterface $searchCriteria
     * @return \Embitel\ApiDemo\Api\Data\ApiDemoSearchResultInterface
     */
    public function getList(SearchCriteriaInterface $searchCriteria);
}