<?php
use PHPUnit\Framework\TestCase;
use Strings\Str;

class StrTest extends TestCase
{

    public function testExo1()
    {
        $string = (string) Str::on('my_string')
            ->replace('_', ' ')
            ->ucwords()
            ->replace(' ', '')
            ->lcfirst();
        $this->assertSame('myString',$string);
        dump($string);
    }
    
    public function testExo1_5()
    {
        $this->assertTrue(Str::on('my_string')
                ->camelCase()
                ->toString() === 'myString'); // true
    }

    public function testExo2()
    {
        $this->assertTrue(Str::on('my_string')->camelCase()->toString() === 'myString'); // true
        $this->assertTrue(Str::on('myString') ->camelCase()->toString() === 'myString'); // true
        $this->assertTrue(Str::on('my-string')->camelCase()->toString() === 'myString'); // true
        $this->assertTrue(Str::on('my string')->camelCase()->toString() === 'myString'); // true
        $this->assertTrue(Str::on('My String')->camelCase()->toString() === 'myString'); // true
    }



}
