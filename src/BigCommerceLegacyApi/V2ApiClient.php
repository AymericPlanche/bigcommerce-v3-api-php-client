<?php

namespace BigCommerce\ApiV2;

use BigCommerce\ApiV3\BaseApiClient;

class V2ApiClient extends BaseApiClient
{
    private const API_URL = 'https://api.bigcommerce.com/stores/%s/v2/';

    protected function defaultBaseUrl(): string
    {
        return self::API_URL;
    }
}
