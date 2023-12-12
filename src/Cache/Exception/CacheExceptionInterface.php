<?php
declare(strict_types=1);

namespace Skernl\Contract\Cache\Exception;

use Throwable;

/**
 * Throwable is the base interface for any object that can be thrown via a throw statement in PHP 7,
 *
 * including Error and Exception.
 * @link https://php.net/manual/en/class.throwable.php
 * @since 7.0
 * /
 *
 * @CacheExceptionInterface
 * @\Skernl\Contract\Exception\Cache\CacheExceptionInterface
 */
interface CacheExceptionInterface extends Throwable
{
}
