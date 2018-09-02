<?php

namespace Embitel\Adminmodule\Model;



class Post extends \Magento\Framework\Model\AbstractModel implements \Magento\Framework\DataObject\IdentityInterface
{
	const CACHE_TAG = 'custom_adminmodule_post';

	protected $_cacheTag = 'custom_adminmodule_post';

	protected $_eventPrefix = 'custom_adminmodule_post';

	protected function _construct()
	{
		$this->_init('Embitel\Adminmodule\Model\ResourceModel\Post');
	}

	public function getIdentities()
	{
		return [self::CACHE_TAG . '_' . $this->getId()];
	}

	public function getDefaultValues()
	{
		$values = [];

		return $values;
	}
}