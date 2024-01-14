<?php

namespace Php2\Oop\Model;

abstract class AbstractBase
{
    protected $model;
    protected $table;
    abstract function getModel();
    //khai bao 
    abstract function getTable();
}