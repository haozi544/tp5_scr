<?php
/**
 * 单例模式：每个进程仅实例化一次
 * Created by PHPStorm
 * User whh
 * Date: 2022/9/11
 * Time: 17:08
 */

class Single
{
    // 静态成员变量用来保证类的实例
    public static $instance;

    // 静态构造方法，防止类的实例化
    private function __construct()
    {
        echo "new single<br/>";
    }

    // 访问实例的静态方法
    public static function getInstance()
    {
        if (!self::$instance) {
            self::$instance = new self();
        }

        return self::$instance;
    }

    public function getAbc()
    {
        echo  'abc';
    }
}