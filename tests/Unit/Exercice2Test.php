<?php
namespace Tests\Unit;

use App\Exercice;
use PHPUnit\Framework\TestCase;

class Exercice2Test extends TestCase
{
    /**
     * @runInSeparateProcess
     */
    public function testCanRunSimpleCase()
    {
        $exercice = new Exercice(2);
        $result = $exercice->run(4, 'A------X', '*-+-+-+-+-+-+-#', 'X====*', '#_____Z');
        $this->assertEquals('A------X====*-+-+-+-+-+-+-#_____Z', $result);
    }

    /**
     * @runInSeparateProcess
     */
    public function testCanRunValidator1()
    {
        $exercice = new Exercice(2);
        $result = $exercice->run(4, 'A------0', '1-+-+-+-+-+-+-+-+-+-+-:', '0==1', ':_____Z');
        $this->assertEquals('A------0==1-+-+-+-+-+-+-+-+-+-+-:_____Z', $result);
    }

    /**
     * @runInSeparateProcess
     */
    public function testCanRunOnlyTwoParts()
    {
        $exercice = new Exercice(2);
        $result = $exercice->run(2, '+...........Z', 'A..............+');
        $this->assertEquals('A..............+...........Z', $result);
    }

    /**
     * @runInSeparateProcess
     */
    public function testCanRunValidator2()
    {
        $exercice = new Exercice(2);
        $result = $exercice->run(2, '@****Z', 'A*********@');
        $this->assertEquals('A*********@****Z', $result);
    }

    /**
     * @runInSeparateProcess
     */
    public function testCanRunManyLittleParts()
    {
        $exercice = new Exercice(2);
        $result = $exercice->run(10, '\'.', ':Z', '-*', '.,', ',:', '=/', '/\'', 'A+', '+-', '*=');
        $this->assertEquals('A+-*=/\'.,:Z', $result);
    }

    /**
     * @runInSeparateProcess
     */
    public function testCanRunValidator3()
    {
        $exercice = new Exercice(2);
        $result = $exercice->run(10, '/\'', '*=', ':Z', '=+', '\':', '.,', ',*', 'A-', '-.', '+/');
        $this->assertEquals('A-.,*=+/\':Z', $result);
    }

    /**
     * @runInSeparateProcess
     */
    public function testCanRunExtremitiesCharacterAreNotSpecific()
    {
        $exercice = new Exercice(2);
        $result = $exercice->run(3, '-----+++++++++', 'A------', '++++++=======Z');
        $this->assertEquals('A----------++++++++++++++=======Z', $result);
    }

    /**
     * @runInSeparateProcess
     */
    public function testCanRunValidator4()
    {
        $exercice = new Exercice(2);
        $result = $exercice->run(3, '+++++++-----', '----=====Z', 'A+++');
        $this->assertEquals('A+++++++++--------=====Z', $result);
    }

    /**
     * @runInSeparateProcess
     */
    public function testCanRunOnlyOnePart()
    {
        $exercice = new Exercice(2);
        $result = $exercice->run(1, 'A_-_-_-_-_-_-_Z');
        $this->assertEquals('A_-_-_-_-_-_-_Z', $result);
    }

    /**
     * @runInSeparateProcess
     */
    public function testCanRunValidator5()
    {
        $exercice = new Exercice(2);
        $result = $exercice->run(1, 'A-*-*-*-Z');
        $this->assertEquals('A-*-*-*-Z', $result);
    }
}
