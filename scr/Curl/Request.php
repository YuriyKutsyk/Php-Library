<?php

namespace Scr\Curl;

use http\Exception\RuntimeException;

class Request implements HttpRequest
{
    public function __construct(
        private readonly string $url,
        private readonly array  $options = []
    )
    {
    }

    public function getResponse(array $postData): string
    {
        $ch = curl_init($this->url);

        foreach ($this->options as $key => $option) {
            curl_setopt($ch, $key, $option);
        }

        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $postData);

        $response = curl_exec($ch);
        $error = curl_error($ch);
        $errno = curl_errno($ch);

        if (is_resource($ch)) {
            curl_close($ch);
        }

        if (0 != $errno) {
            throw new RuntimeException($error, $errno);
        }

        return json_encode($response);
    }
}
