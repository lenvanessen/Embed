<?php

namespace Embed\Adapters;

use Embed\Http\Response;

/**
 * Adapter to provide information from Twitter.
 * Required when Twitter returns a 429 status code.
 */
class Twitter extends Webpage
{
    /**
     * {@inheritdoc}
     */
    public static function check(Response $response)
    {
        return $response->isValid([200, 429]) && $response->getUrl()->match([
                '*.twitter.*',
            ]);
    }
}
