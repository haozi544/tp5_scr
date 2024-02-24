<?php
/**
 * Created by PHPStorm
 * User whh
 * Date: 2022/9/12
 * Time: 10:18
 */

class A
{
    /**
     * 成员属性
     * @var int
     */
    private $a = 12;

    /**
     * 获取abc方法
     * @return string
     */
    public function abc()
    {
        echo "abc";
    }

    /**
     * 获取变量a和变量b的方法
     * @param $a
     * @param $b
     */
    public function ab($a, $b)
    {
        echo $a . '|' . $b . '<br/>';
    }
}