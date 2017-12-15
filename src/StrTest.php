<?php
use PHPUnit\Framework\TestCase;
use Strings\Str;

class StrTest extends TestCase
{
    //    EXERCICE 1

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

    //   camelCase EXERCICE 1_5
    public function testExo1_5()
    {
        $this->assertTrue(Str::on('my_string')
                ->camelCase()
                ->toString() === 'myString'); // true
    }

    //   camelCase EXERCICE 2
    public function testExo2()
    {
        $this->assertTrue(Str::on('my_string')->camelCase()->toString() === 'myString'); // true
        $this->assertTrue(Str::on('myString') ->camelCase()->toString() === 'myString'); // true
        $this->assertTrue(Str::on('my-string')->camelCase()->toString() === 'myString'); // true
        $this->assertTrue(Str::on('my string')->camelCase()->toString() === 'myString'); // true
        $this->assertTrue(Str::on('My String')->camelCase()->toString() === 'myString'); // true
    }


    //   snakeCase EXERCICE 3

    public function testExo3()
    {

        $this->assertSame('my_string', Str::on('my_string')->snakeCase()->toString()); // true
        $this->assertSame('my_string', Str::on('myString')->snakeCase()->toString()); // true
        $this->assertSame('my_string', Str::on('my-string')->snakeCase()->toString()); // true
        $this->assertSame('my_string', Str::on('my string')->snakeCase()->toString()); // true
        $this->assertSame('my_string', Str::on('My String')->snakeCase()->toString()); // true
    }



    public function testExo4()
    {
        $this->assertSame(Str::on('my_string')->SlugCase()->toString()  , 'my-string'); // true
        $this->assertSame(Str::on('myString') ->SlugCase()->toString() , 'my-string') ; // true
        $this->assertEquals(Str::on('my-string')->SlugCase()->toString()  , 'my-string'); // true
        $this->assertEquals(Str::on('my string')->SlugCase()->toString()  , 'my-string'); // true
        $this->assertEquals(Str::on('My String')->SlugCase()->toString()  , 'my-string'); // true
    }

}
