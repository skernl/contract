<?php
declare(strict_types=1);

namespace Skernl\Contract\Cache;

use Psr\Cache\CacheItemInterface as PsrCacheItemInterface;

/**
 * @CacheItemInterface
 * @\Skernl\Contract\CacheItemInterface
 */
interface CacheItemInterface extends PsrCacheItemInterface
{
}