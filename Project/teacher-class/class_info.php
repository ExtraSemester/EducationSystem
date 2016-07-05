<?php
/**
 * Created by PhpStorm.
 * User: whx
 * Date: 2016/7/5
 * Time: 15:39
 */

$class_name = $_GET['class_name'];

ClassInfo::$class_name = $class_name;

class ClassInfo{
    
    public static $class_name;
    public static $class_id;

    /**
     * @param mixed $class_id
     */
    public static function setClassId($class_id)
    {
        self::$class_id = $class_id;
    }

    /**
     * @return mixed
     */
    public static function getClassId()
    {
        return self::$class_id;
    }

    /**
     * @param mixed $class_name
     */
    public static function setClassName($class_name)
    {
        self::$class_name = $class_name;
    }

    /**
     * @return mixed
     */
    public static function getClassName()
    {
        return self::$class_name;
    }
}