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
 
//use Magento\Framework\Api\ExtensibleDataInterface;
 
interface ApiDemoInterface
{

    /**
     * Constants for keys of data array. Identical to the name of the getter in snake case.
     */
    const ENTITY_ID     =    'entity_id';
    const FIRSTNAME     =    'firstname';
    const LASTNAME      =    'lastname';
    const EMAIL         =    'email';
    const CONTENT       =    'content';
    const IMAGE         =    'image';
    const IS_ACTIVE     =    'is_active';
    const UPDATE_TIME   =    'update_time';
    const CREATED_AT    =    'created_at';


    /**
     * @return int
     */
    public function getEntityId();
 
    /**
     * @param int $entityid
     * @return void
     */
    public function setEntityId($entityid);
 
    /**
     * @return string
     */
    public function getFirstName();
 
    /**
     * @param string $firstname
     * @return void
     */
    public function setFirstName($firstname);

    /**
     * @return string
     */
    public function getLastName();
 
    /**
     * @param string $lastname
     * @return void
     */
    public function setLastName($lastname);

    /**
     * @return string
     */
    public function getEmail();
 
    /**
     * @param string $email
     * @return void
     */
    public function setEmail($email);
     
    /**
     * @return string
     */
    public function getContent();
 
    /**
     * @param string $content
     * @return void
     */
    public function setContent($content);

    /**
     * @return string
     */
    public function getImage();
 
    /**
     * @param string $image
     * @return void
     */
    public function setImage($image);

    /**
    * Get IsActive.
    *
    * @return varchar
    */
    public function getIsActive();

   /**
    * Set StartingPrice.
    */
    public function setIsActive($isActive);

   /**
    * Get UpdateTime.
    *
    * @return varchar
    */
    public function getUpdateTime();

   /**
    * Set UpdateTime.
    */
    public function setUpdateTime($updateTime);

   /**
    * Get CreatedAt.
    *
    * @return varchar
    */
    public function getCreatedAt();

   /**
    * Set CreatedAt.
    */
    public function setCreatedAt($createdAt);
 
    
}