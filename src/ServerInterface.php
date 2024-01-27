<?php
declare(strict_types=1);

namespace Skernl\Contract;

/**
 * @ServerInterface
 * @\Skernl\Contract\ServerInterface
 */
interface ServerInterface
{
    public const int SERVER_HTTP = SWOOLE_SOCK_TCP;
    public const int SERVER_WEBSOCKET = SWOOLE_SOCK_TCP;
    public const int SERVER_UDP = SWOOLE_SOCK_UDP;
    public const int SERVER_UNIX_STREAM = SWOOLE_UNIX_STREAM;
    public const int SERVER_HTTPS = SWOOLE_SOCK_TCP | SWOOLE_SSL;
}