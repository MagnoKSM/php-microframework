<?php

namespace MagnoKsm\Router;

class Router
{
    private $collection;
    private $method;
    private $path;

    public function __construct(string $method, string $path)
    {
        $this->collection = new RouterCollection();
        $this->method = $method;
        $this->path = $path;
    }

    public function get($path, $fn)
    {
        $this->request('GET', $path, $fn);
    }

    public function post($path, $fn)
    {
        $this->request('POST', $path, $fn);
    }

    public function request($method, $path, $fn)
    {
        $this->collection->add($method, $path, $fn);
    }

    public function run()
    {
        $data = $this->collection->filter($this->method);

        foreach ($data as $key => $value) {
            $result = $this->checkUrl($key, $this->path);
        }
    }

    public function checkUrl()
    {

    }
}