<?php
/**
 * Created by PHPStorm
 * User whh
 * Date: 2022/9/11
 * Time: 15:58
 */

namespace think\config\driver;


class Php
{
    protected $config;

    public function __construct($config)
    {
        if (is_file($config)) {
            $config = include $config;
        }

        $this->config = $config;
    }

    public function parse()
    {
        return $this->config;
    }
}