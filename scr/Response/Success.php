<?php

namespace Scr\Response;

class Success extends Response
{
    private array $data;

    public function __construct($response)
    {
        if (!empty($response['message'])) {
            parent::__construct($response['message']);
        }
        if (!empty($response['data'])) {
            $this->data = $response['data'];
        }
    }

    public function getData(): mixed
    {
        return $this->data;
    }

    public function hasData(): bool
    {
        return isset($this->data);
    }
}
