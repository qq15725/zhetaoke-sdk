<?php

namespace Zhetaoke\Auth;

use SDK\Kernel\AccessToken as BaseAccessToken;

class AccessToken extends BaseAccessToken
{
    protected function appendQuery(): array
    {
        return [
            'appkey' => $this->app->config->get('appkey'),
            'sid' => $this->app->config->get('sid'),
        ];
    }
}