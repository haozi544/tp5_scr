<?php
namespace app\index\controller;

use ali\Sms;
use app\facade\facadeTest;
use di\Person;
use di\Car;

class Index
{
    public function index()
    {
        echo 'hello index';
//        Sms::send();
    }

    public function hello($name = 'ThinkPHP5')
    {
        return 'hello,' . $name;
    }

    public function test()
    {
        // dev 测试分支
        var_dump('这是dev分支版本aaaa开发内容1111');
    }

    /**
     * 调用类似extend文件夹的静态方法
     */
    public function useNameSpace()
    {
//        Send::push();
        \Car::test();
    }

    /**
     * 调用类似composer等vendor组件方法
     */
    public function useVendor()
    {
        Sms::send();
    }

    /**
     * 采用对象方式调用数组方法
     */
    public function useObjArray()
    {
        $obj = new \ObjArray();
        var_dump($obj['title']);
    }

    /**
     * 单例模式测试
     */
    public function single()
    {
        \Single::getInstance()->getAbc();
        \Single::getInstance()->getAbc();
        \Single::getInstance()->getAbc();
    }

    /**
     * 注册树模式测试
     */
    public function registerTree()
    {
        $a = new \A();
        \RegisterTree::set('a', $a);
        \RegisterTree::get('a')->abc();
    }

    /**
     * 依赖注入测试
     */
    public function di()
    {
        $person = new Person(new Car());
        $person->buy();
    }

    /**
     * 反射机制常用方法
     */
    public function rel()
    {
        $obj = new \A();
//        var_dump($obj);
        $obj2 = new \ReflectionClass($obj);     // 创建一个反射类，获取这个类的方法属性等信息
//        var_dump($obj2);
        $instance = $obj2->newInstance();       // 相当于实例化类
//        var_dump($instance);

        // 获取这个类的方法列表
        $methods = $obj2->getMethods();
//        var_dump($methods);
//
//        foreach ($methods as $method) {
//            var_dump($method->getDocComment());     // 获取注释
//        }

//        // 获取类的成员属性列表
//        $property = $obj2->getProperties();
//        var_dump($property);

        // 方法一
//        $method = $obj2->getMethod('ab');
//        $method->invokeArgs($instance, [1,2]);

        // 方法二
        $method = new \ReflectionMethod($obj, 'ab');        // 获取方法的详细信息
        var_dump($method->getParameters());
    }

    /**
     * 门面模式
     */
    public function facade()
    {
        // 调用facade模式 => __callStatic方法 => self::createFacade() => 根据类名称调用Container::make 返回类的实例
        // facade模式优点：调用的时候可以用静态调用，实例化底部非静态方法，方便调用
//        dump(Config::get('app.'));

        // facade模式调用
        facadeTest::test();
    }

    /**
     * 公共方法测试
     */
    public function commonTest()
    {
        commonTest();
    }
}
