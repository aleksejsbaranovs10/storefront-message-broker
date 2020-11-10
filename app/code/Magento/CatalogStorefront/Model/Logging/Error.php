<?php
/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */
declare(strict_types=1);

namespace Magento\CatalogStorefront\Model\Logging;

use Monolog\Logger;

/**
 * Log error message for error log level Logger::ERROR and higher
 */
class Error extends \Magento\Framework\Logger\Handler\Base
{
    /**
     * @var string
     */
    protected $fileName = '/var/log/storefront-catalog.log';

    /**
     * @var int
     */
    protected $loggerType = Logger::ERROR;
}
