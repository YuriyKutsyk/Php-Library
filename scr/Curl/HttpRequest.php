<?php

namespace Scr\Curl;

interface HttpRequest
{
    public function init();

    public function setOption($option, $value);

    public function execute();

    public function buildQuery(array $array);

    public function decode();

    public function fetch();

    public function close();
}
