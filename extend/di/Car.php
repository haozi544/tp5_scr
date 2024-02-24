<?php
/**
 * Created by PHPStorm
 * User whh
 * Date: 2022/9/12
 * Time: 10:43
 */

namespace di;


class Car
{
    public function pay()
    {
        echo '123';
    }

    public static function test()
    {
        echo '23444';
    }

    public static function __callStatic($name, $arguments)
    {
        // TODO: Implement __callStatic() method.
        var_dump($name);
        var_dump($arguments);
    }
}