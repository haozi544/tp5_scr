<?php
/**
 * Created by PHPStorm
 * User whh
 * Date: 2022/9/12
 * Time: 10:43
 */

namespace di;

class Person
{
    private $obj;

    public function __construct($obj, $a = 12)
    {
        $this->obj = $obj;
    }

    /**
     * 依赖：Person依赖Car类
     * 注入：Car类注入Person类
     * @return string
     */
    public function buy()
    {
        return $this->obj->pay();
    }
}