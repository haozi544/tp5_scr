<?php
/**
 * 容器类
 * Created by PHPStorm
 * User whh
 * Date: 2022/9/12
 * Time: 16:07
 */

namespace di;


class Container
{
    /**
     * 存放容器的数据
     * @var array
     */
    public $instances = [];

    /**
     * 容器中的对象实例
     * @var array
     */
    protected static $instance;

    private function __construct()
    {

    }

    /**
     * 获取当前容器的实例（单例模式）
     * @return array|Container
     */
    public static function getInstance()
    {
        if (is_null(self::$instance)) {
            self::$instance = new self();
        }
        return self::$instance;
    }

    public function set($key, $value) {
        $this->instances[$key] = $value;
    }

    /**
     * 获取容器里面的实例 会用到反射机制
     * @param $key
     * @return mixed
     */
    public function get($key) {
        if (isset($this->instances[$key])) {
            $key = $this->instances[$key];
        }

        $reflect = new \ReflectionClass($key);
        // 获取类的构造函数
        $construct = $reflect->getConstructor();
//        dump($construct);
        if (!$construct) {
            return new $key();
        }

        //获取构造函数的参数
        $params = $construct->getParameters();
//        dump($params);
        if (empty($params)) {
            return new $key();
        }

        foreach ($params as $param) {
            $class = $param->getClass();
//            dump($class);exit;
            if (!$class) {

            } else {
                $args[] = $this->get($class->name);
            }
        }

        // 从给出的参数一个新的类实例
        return $reflect->newInstanceArgs($args);
    }
}