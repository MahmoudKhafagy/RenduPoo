<?php
/**
 * Created by PhpStorm.
 * User: mahmoud
 * Date: 11/12/2017
 * Time: 17:47
 */
namespace Strings;

class Str
{
    //exo 1
    private $string;

    public static function on($string)
    {
        return new self($string);
    }

    public function __construct($string)
    {
        $this->string=$string;

    }

    public function replace($search, $replace)
    {
         $this->string = str_replace($search, $replace, $this->string);
        return $this;
    }
    public function __toString()
    {
        return $this->string;
    }

    public function ucwords()
    {
        $this->string=ucwords($this->string);
        return $this;
    }
    public function lcfirst()
    {
        $this->string= lcfirst($this->string);
        return $this;
    }
    // Exo 1.5 et Exo 2.5
    public function camelCse()
    {
        return $this->replace('_',' ')->replace('-',' ')->ucwords()->replace(' ','')->lcfirst();
    }
    public function toString()
    {
        return $this->string;
    }

    //Exo 3
    public function SnakeCase()
    {

    }


}