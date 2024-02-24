<?php
/**
 * Created by PHPStorm
 * User whh
 * Date: 2023/4/30
 * Time: 10:28
 */

namespace app\facade;


use think\Facade;

class facadeTest extends Facade
{
    /**
     * 获取当前Facade对应类名（或者已经绑定的容器对象标识）
     * @access protected
     * @return string
     */
    protected static function getFacadeClass()
    {
        return 'app\common\facadeTest';
    }
}