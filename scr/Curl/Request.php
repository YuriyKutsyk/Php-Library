<?php

namespace Scr\Curl;

class Request implements HttpRequest
{
    private string $url;
    private array $options;
    private \CurlHandle $handler;
    private string $response;
    public function __construct(
        $url,
        $options = [],
    )
    {
        $this->url = $url;
        $this->options = empty($this->options) ? CURLOPT_URL : $options;
    }

    public function init(): self
    {
        $this->handler = curl_init();
        return $this;
    }

    public function setOption($option = null, $value = null): self
    {
        curl_setopt(
            $this->handler,
            is_null($option) ? $this->options : $option,
            is_null($value) ? $this->url : $value
        );
        return $this;
    }

    public function execute(): bool|string
    {
        return curl_exec($this->handler);
    }

    public function buildQuery(array $array): self
    {
        curl_setopt($this->handler, CURLOPT_POSTFIELDS, http_build_query($array));
        return $this;
    }

    public function decode(): self
    {
        $this->response = json_decode($this->execute(), true);
        return $this;
    }

    public function fetch()
    {
        return json_decode(json_encode($this->response));
    }

    public function close(): self
    {
        curl_close($this->handler);
        return $this;

    }
}
