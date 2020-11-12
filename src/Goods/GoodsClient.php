<?php

namespace Zhetaoke\Goods;

use SDK\Kernel\BaseClient;

class GoodsClient extends BaseClient
{
    /**
     * 商品详情
     *
     * @param $id
     *
     * @link https://www.zhetaoke.com/user/open/open_item_info.aspx
     *
     * @return array
     */
    public function find($id)
    {
        return $this->httpGet('api/open_item_info.ashx', [
            'num_iids' => is_array($id) ? join(',', $id) : $id,
        ]);
    }
}