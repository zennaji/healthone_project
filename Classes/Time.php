<?php


class Time
{
    public $id;
    public $day;
    public $open_time	;
    public $close_time	;
 
    public function __construct()
    {
        settype($this->id, 'integer');

    }
}