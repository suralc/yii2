<?php
namespace yiiunit\framework\web;

use yii\base\BaseObject;

class Post extends BaseObject
{
    public $id;
    public $title;

    public function __construct($id, $title)
    {
        $this->id = $id;
        $this->title = $title;
    }
}
