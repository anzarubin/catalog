<?php

class Authors extends AbstractModel
{
    public $id;

    protected static $table = 'authors';
    protected static $class = 'Authors';

    public static function getByAuthorName($name)
    {
        $db = new DB;
        $sql = 'SELECT * FROM authors
        WHERE name LIKE "%' . $name . '%"';
        return $db->query($sql);
    }
}