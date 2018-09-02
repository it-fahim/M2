<?php
 
 /**
 * Module configuration
 *
 * @category  Embitel
 * @package   Embitel_ApiDemo
 * @author    Fahim Khan <Faim.khan@embitel.com>
 * @copyright 2018-2019 Embitel technologies (I) Pvt. Ltd
 */

namespace Embitel\ApiDemo\Api\Data;
 
use Magento\Framework\Api\SearchResultsInterface;
 
interface ApiDemoSearchResultInterface extends SearchResultsInterface
{
    /**
     * @return \Embitel\ApiDemo\Api\Data\ApiDemoInterface[]
     */
    public function getItems();
 
    /**
     * @param \Embitel\ApiDemo\Api\Data\ApiDemoInterface[] $items
     * @return void
     */
    public function setItems(array $items);
}