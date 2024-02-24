<?php
/**
 * Created by PHPStorm
 * User whh
 * Date: 2022/9/11
 * Time: 15:59
 */

namespace think\config\driver;


class Yaml
{
    protected $config;

    public function __construct($config)
    {
        if (!function_exists('yaml_parse_file')) {
            throw new \Exception('yaml不存在');
        }
        if (is_file($config)) {
            $config = yaml_parse_file($config);
        }

        $this->config = $config;
    }

    public function parse()
    {
        return $this->config;
    }
}