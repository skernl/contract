<?php
declare(strict_types=1);

namespace Skernl\Contract;

/**
 * 我们定义静态配置，因为动态的配置不易于继续开发，同时PSR并没有给到定义关于这方面。
 * 如果这个决策无法满足自定义的需求，你可以继承该接口的实现类进行自定义，因为该类仅使用受保护。
 * 如果你对这个决策有更好的建议和方法，请与我联系：https://github.com/wheakerd/。
 *
 * We define static configuration because dynamic configuration is not easy to continue development, and PSR does not
 * provide ideas on this aspect.
 * If this decision cannot meet the customization requirements, you can inherit the implementation class of the
 * interface for customization, as the class only uses protected.
 * If you have better suggestions and methods for this decision, please contact me: https://github.com/wheakerd/ .
 * @ConfigInterface
 * @\Skernl\Contract\ConfigInterface
 */
interface ConfigInterface
{
    /**
     * @param string $key
     * @param mixed $default null
     * @return mixed
     */
    public function get(string $key, mixed $default = null): mixed;

    /**
     * @param string $key
     * @return bool
     */
    public function has(string $key): bool;
}