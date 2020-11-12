<?php

namespace Zhetaoke;

use SDK\Kernel\ServiceContainer;

/**
 * Class Application.
 *
 * @link https://www.zhetaoke.com/user/index.html
 *
 * @property \Zhetaoke\Goods\GoodsClient $goods 商品
 */
class Application extends ServiceContainer
{
    /**
     * @var array
     */
    protected $providers = [
        Auth\ServiceProvider::class,
        Goods\ServiceProvider::class,
    ];

    /**
     * @var array
     */
    protected $defaultConfig = [
        'http' => [
            'timeout' => 30.0,
            'base_uri' => 'https://api.zhetaoke.com:10001'
        ],
    ];

    public function __construct(
        string $appkey = null,
        string $sid = null,
        array $config = [],
        array $prepends = []
    )
    {
        $config = array_merge([
            'appkey' => $appkey,
            'sid' => $sid,
        ], $config);
        parent::__construct($config, $prepends);
    }
}