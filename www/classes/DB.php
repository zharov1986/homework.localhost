<?php


class DB
{
    public function __construct()
    {
        mysql_connect('localhost','homework','');
        mysql_select_db('homework');
    }

    public function qwery($sql, $class = 'stdClass')
    {
        $res = mysql_query($sql);
        if(false === $res)
        {
            return false;
        }
        $array[] = $ret;
        while($row = mysql_fetch_object($res, $class))
        {
            $ret[] = $row;
        }
        return $ret;
    }
}