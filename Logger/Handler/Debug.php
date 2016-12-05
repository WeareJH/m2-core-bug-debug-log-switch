<?php

namespace Jh\DebugLogSwitch\Logger\Handler;

use Magento\Framework\Logger\Handler\Debug as DebugHandler;
use Magento\Framework\Filesystem\DriverInterface;
use Magento\Framework\App\Config\ScopeConfigInterface;

/**
 * @author: Diego Cabrejas <diego@wearejh.com>
 */
class Debug extends DebugHandler
{

    CONST XML_PATH_DEBUG_LOG_DISABLED = 'dev/debug/debug_log_disabled';

    /**
     * @var ScopeConfigInterface
     */
    protected $scopeConfig;

    public function __construct(
        ScopeConfigInterface $scopeConfig,
        DriverInterface $filesystem,
        $filePath = null
    ) {
        $this->scopeConfig = $scopeConfig;
        parent::__construct($filesystem, $filePath);
    }

    public function isHandling(array $record)
    {
        return $this->scopeConfig->isSetFlag(self::XML_PATH_DEBUG_LOG_DISABLED)
            ? false
            : parent::isHandling($record);
    }

}
