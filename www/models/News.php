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
        return $db->qwery('SELECT * FROM news', 'News');
    }

}