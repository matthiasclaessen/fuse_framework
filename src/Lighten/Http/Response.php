<?php

namespace lumen\framework\src\Lighten\Http;

class Response
{
    public function setStatusCode(int $code)
    {
        http_response_code($code);
    }

    public function redirect(string $uri)
    {
        header('Location: ' . $uri);
        exit();
    }
}