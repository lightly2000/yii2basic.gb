<?php

namespace app\models;

class Activity extends use yii\base\Model
{
    public $name;
    public $description;
    public $start;
    public $finish;
    public $repeat;
    public $blocker;
    public $status;
    public $reminder;
        

    
}