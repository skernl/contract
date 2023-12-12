<?php
declare(strict_types=1);

namespace Skernl\Contract\HttpMessage\Exception;

/**
 * Exception thrown if an error which can only be found on runtime occurs.
 * @link https://php.net/manual/en/class.runtimeexception.php
 *
 * @RuntimeException
 * @\Skernl\Contract\HttpMessage\Exception\RuntimeException
 */
class RuntimeException extends \RuntimeException
{

}