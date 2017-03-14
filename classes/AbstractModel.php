<?php

abstract class AbstractModel
{

    protected static $table;
    protected static $class;

    /*public static function getAll()
    {
        $db = new DB;
        $sql = 'SELECT * FROM ' . static::$table;
        return $db->query($sql, static::$class);
    }*/

    public static function getAll($param = false, $cond = false)
    {
        $db = new DB;
        $term = false;

        if ($cond != false && $cond != '*') {
            $term = ' WHERE ' . $param . '=' . $cond;
        } else {
            $term = '';
        }

        $sql = 'SELECT * FROM ' . static::$table . $term;
        return $db->query($sql, static::$class);
    }

    public static function getOne($id)
    {
        $db = new DB;
        $sql = 'SELECT * FROM '. static::$table .' WHERE id = ' . $id;
        return $db->query($sql, static::$class)[0];
    }
}

//$s = "SELECT * FROM articles WHERE author = $id";