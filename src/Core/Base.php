<?php

namespace Php2\Oop\Core;

class Base
{
    const VAT = 0.1; //(Khai bao hang so viet hoa)

    public static $document;

    private $name = "PHP";
    public function getName()
    {
        return $this->name;
    }
    public function setName($language)
    {
        echo self::VAT . "<br>";
        $this->name = $language;
    }
    public static function getVAT()
    {
        return self::VAT;
    }
    public static function getDocumentUrl()
    {
        return self::$document;
    }
}