<?php
declare(strict_types=1);

namespace Skernl\Contract\Exception\Cache;

/**
 * Exception interface for invalid cache arguments.
 *
 * Any time an invalid argument is passed into a method it must throw an
 * exception class which implements Psr\Cache\InvalidArgumentException.
 *
 * @InvalidArgumentExceptionInterface
 * @\Skernl\Contract\Exception\Cache\InvalidArgumentExceptionInterface
 */
interface InvalidArgumentExceptionInterface extends CacheExceptionInterface
{
}