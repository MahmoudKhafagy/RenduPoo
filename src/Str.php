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

    public function pregReplace($pattern,$replace)
    {
        $this->string= preg_replace($pattern,$replace,$this->string);
        return$this;
    }

    public function mbStrtolower()
    {
        $this->string= mb_strtolower($this->string);
        return $this;
    }

    // camelCase   Exo 1.5 et Exo 2.5
    public function camelCase()
    {
        return $this->replace('_',' ')->replace('-',' ')->ucwords()->replace(' ','')->lcfirst();
    }
    public function toString()
    {
        return $this->string;
    }

    //snakeCase exercice 3

    public function SnakeCase()
    {
        return $this
            ->replace(' ','_')
            ->replace('-','_')
            ->pregReplace('/(.)(?=[A-Z])/','$1_')
            ->mbStrtolower()
            ->replace('__','_');

    }

    // SlugCase Exercice 4
    public function SlugCase()
    {
       return $this
           ->replace('_','-')
           ->pregReplace('/(.)(?=[A-Z])/','$1-')
           ->mbStrtolower()
           ->replace(' ','-')
           ->replace('--','-');
    }

    // kebabCase Exercice 4.5

    public function kebabCase()
    {
        return $this
            ->replace('_','-')
            ->pregReplace('/(.)(?=[A-Z])/','$1-')
            ->mbStrtolower()
            ->replace(' ','-')
            ->replace('--','-');
    }

    // studlyCase Exercice 5
    public function studlyCase()
    {
    return $this
        ->replace('_',' ')
        ->replace('-', ' ')
        ->ucwords()
        ->replace(' ', '');
    }



}