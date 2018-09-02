<?php

/**
 * Module configuration
 *
 * @category  Embitel
 * @package   Embitel_ApiDemo
 * @author    Fahim Khan <Faim.khan@embitel.com>
 * @copyright 2018-2019 Embitel technologies (I) Pvt. Ltd
 */

namespace Embitel\ApiDemo\Model;

use Embitel\ApiDemo\Api\Data\ApiDemoInterface;

class ApiDemo extends \Magento\Framework\Model\AbstractModel implements ApiDemoInterface
{
    /**
     * CMS page cache tag.
     */
    const CACHE_TAG = 'apidemo_records';

    /**
     * @var string
     */
    protected $_cacheTag = 'apidemo_records';

    /**
     * Prefix of model events names.
     *
     * @var string
     */
    protected $_eventPrefix = 'apidemo_records';

    /**
     * Initialize resource model.
     */
    protected function _construct()
    {
        $this->_init('Embitel\ApiDemo\Model\ResourceModel\ApiDemo');
    }
    /**
     * Get EntityId.
     *
     * @return int
     */
    public function getEntityId()
    {
        return $this->getData(self::ENTITY_ID);
    }

    /**
     * Set EntityId.
     */
    public function setEntityId($entityid)
    {
        return $this->setData(self::ENTITY_ID, $entityid);
    }

    /**
     * Get Firstname.
     *
     * @return varchar
     */
    public function getFirstName()
    {
        return $this->getData(self::FIRSTNAME);
    }

    /**
     * Set Firstname.
     */
    public function setFirstName($firstname)
    {
        return $this->setData(self::FIRSTNAME, $firstname);
    }

    /**
     * Get Lastname.
     *
     * @return varchar
     */
    public function getLastName()
    {
        return $this->getData(self::LASTNAME);
    }

    /**
     * Set Firstname.
     */
    public function setLastName($lastname)
    {
        return $this->setData(self::LASTNAME, $lastname);
    }

    /**
     * Get Firstname.
     *
     * @return varchar
     */
    public function getEmail()
    {
        return $this->getData(self::EMAIL);
    }

    /**
     * Set Firstname.
     */
    public function setEmail($email)
    {
        return $this->setData(self::EMAIL, $email);
    }

    /**
     * Get getContent.
     *
     * @return varchar
     */
    public function getContent()
    {
        return $this->getData(self::CONTENT);
    }

    /**
     * Set Content.
     */
    public function setContent($content)
    {
        return $this->setData(self::CONTENT, $content);
    }

    /**
     * Get PublishDate.
     *
     * @return varchar
     */
    public function getImage()
    {
        return $this->getData(self::IMAGE);
    }

    /**
     * Set PublishDate.
     */
    public function setImage($image)
    {
        return $this->setData(self::IMAGE, $image);
    }

    /**
     * Get IsActive.
     *
     * @return varchar
     */
    public function getIsActive()
    {
        return $this->getData(self::IS_ACTIVE);
    }

    /**
     * Set IsActive.
     */
    public function setIsActive($isActive)
    {
        return $this->setData(self::IS_ACTIVE, $isActive);
    }

    /**
     * Get UpdateTime.
     *
     * @return varchar
     */
    public function getUpdateTime()
    {
        return $this->getData(self::UPDATE_TIME);
    }

    /**
     * Set UpdateTime.
     */
    public function setUpdateTime($updateTime)
    {
        return $this->setData(self::UPDATE_TIME, $updateTime);
    }

    /**
     * Get CreatedAt.
     *
     * @return varchar
     */
    public function getCreatedAt()
    {
        return $this->getData(self::CREATED_AT);
    }

    /**
     * Set CreatedAt.
     */
    public function setCreatedAt($createdAt)
    {
        return $this->setData(self::CREATED_AT, $createdAt);
    }
}
