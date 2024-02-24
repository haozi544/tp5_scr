<?php
/**
 * 数组形式访问对象属性类
 * Created by PHPStorm
 * User whh
 * Date: 2022/9/11
 * Time: 11:37
 */

class ObjArray implements \ArrayAccess
{
    private $testData = [
        'title' => 'singwa',
    ];

    // 当访问对象属性存在
    public function offsetExists($offset)
    {
        echo 'offsetExists' . $offset . '<br/>';
        return isset($this->testData[$offset]);
    }
    // 获取对象属性
    public function offsetGet($offset)
    {
        echo 'offsetGet' . $offset . '<br/>';
        return $this->testData[$offset];
    }
    // 设置对象属性
    public function offsetSet($offset, $value)
    {
        echo 'offsetSet' . $offset . '<br/>';
        $this->testData[$offset] = $value;
    }
    // 删除对象属性
    public function offsetUnset($offset)
    {
        echo 'offsetGet' . $offset . '<br/>';
        unset($this->testData[$offset]);
    }
}