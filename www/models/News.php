<?php

require_once __DIR__ . '/../classes/DB.php';

class News
{

    public $id;
    public $title;
    public $desc;

    public static function getAll()
    {
        $db = new DB;
        return $db->queryAll('SELECT * FROM news', 'News');
    }

    public static function getOne($id)
    {
        $db = new DB;
        return $db->queryAll('SELECT * FROM news WHERE id='.$id, 'News');
    }

}