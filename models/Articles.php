<?php

class Articles extends AbstractModel
{
    public $id;

    protected static $table = 'articles';
    protected static $class = 'Articles';

    public static function getByAuthorName($name)
    {
        $db = new DB;
        $sql = 'SELECT * FROM articles
        JOIN authors ON authors.id = articles.author
        WHERE name LIKE "%' . $name . '%"';
        return $db->query($sql);
    }

    public static function getByArticleName($name)
    {
        $db = new DB;
        $sql = 'SELECT * FROM articles
        WHERE title LIKE "%' . $name . '%"';
        return $db->query($sql);
    }
}