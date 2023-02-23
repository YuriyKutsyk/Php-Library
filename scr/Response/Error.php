<?php

namespace Scr\Response;

class Error extends Response
{
    private string $errorCode;
    private string $respCode;
    private array $errors;
    public function __construct(array $response)
    {
        $this->errorCode = $response['status'];
        if (!empty($response['message'])) {
            parent::__construct($response['message']);
        }
        if (!empty($response['errors'])) {
            $this->errors = $response['errors'];
        }
        if (!empty($response['code'])) {
            $this->respCode = $response['code'];
        }
    }

    public function getResponseCode(): mixed
    {
        return $this->respCode;
    }

    public function getErrorCode(): mixed
    {
        return $this->errorCode;
    }

    public function getErrors(): mixed
    {
        return $this->errors;
    }
}
