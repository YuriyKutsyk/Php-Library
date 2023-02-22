<?php

namespace Scr\Curl;

interface HttpRequest
{
    public function getResponse(array $postData);
}