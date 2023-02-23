<?php

namespace Scr\Response;

class Response implements HttpResponse
{
    public function __construct(private readonly ?string $message = null)
    {
    }

    public function getMessage(): ?string
    {
        return $this->message;
    }

    public function hasMessage(): bool
    {
        return !empty($this->message);
    }
}
