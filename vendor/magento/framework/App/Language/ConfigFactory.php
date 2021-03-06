<?php
/**
 * Application language config factory
 *
 * Copyright © 2013-2017 Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */
namespace Magento\Framework\App\Language;

/**
 * @codeCoverageIgnore
 */
class ConfigFactory
{
    /**
     * @var \Magento\Framework\ObjectManagerInterface
     */
    protected $_objectManager;

    /**
     * @param \Magento\Framework\ObjectManagerInterface $objectManager
     */
    public function __construct(\Magento\Framework\ObjectManagerInterface $objectManager)
    {
        $this->_objectManager = $objectManager;
    }

    /**
     * Create config
     *
     * @param array $arguments
     * @return Config
     */
    public function create(array $arguments = [])
    {
        return $this->_objectManager->create('Magento\Framework\App\Language\Config', $arguments);
    }
}
