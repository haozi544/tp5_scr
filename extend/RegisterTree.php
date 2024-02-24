<?php
/**
 * 注册树模式
 * Created by PHPStorm
 * User whh
 * Date: 2022/9/12
 * Time: 10:10
 */

class RegisterTree
{
    // 注册树对象
    protected static $objects = null;

    // 将对象实例保存到注册树上
    public static function set($key, $object)
    {
        self::$objects[$key] = $object;
    }

    // 从注册树上获取对象实例
    public static function get($key)
    {
        if (!isset(self::$objects[$key])) {
            self::$objects[$key] = new $key();
        }
        return self::$objects[$key];
    }

    // 注销注册树的实例对象
    public static function _unset($key)
    {
        unset(self::$objects[$key]);
    }

}