<?php

class Rubrics extends AbstractModel
{
    public $id;

    protected static $table = 'rubrics';
    protected static $class = 'Rubrics';

    public static function getByRubricName($name)
    {
        $db = new DB;
        $sql = 'SELECT * FROM rubrics
        WHERE name LIKE "%' . $name . '%"';
        return $db->query($sql);
    }
}