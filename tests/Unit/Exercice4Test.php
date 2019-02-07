<?php
namespace Tests\Unit;

use App\Exercice;
use PHPUnit\Framework\TestCase;

class Exercice4Test extends TestCase
{
    /**
     * @runInSeparateProcess
     */
    public function testCanRunTest1()
    {
        $exercice = new Exercice(4);
        $result = $exercice->run('8809');
        $this->assertEquals('6', $result);
    }

    /**
     * @runInSeparateProcess
     */
    public function testCanRunTest2()
    {
        $exercice = new Exercice(4);
        $result = $exercice->run('9313 0000 2222 3333 5555');
        $this->assertEquals('5', $result);
    }

    /**
     * @runInSeparateProcess
     */
    public function testCanRunTest3()
    {
        $exercice = new Exercice(4);
        $result = $exercice->run('7111 2172 6666');
        $this->assertEquals('4', $result);
    }

    /**
     * @runInSeparateProcess
     */
    public function testCanRunTest4()
    {
        $exercice = new Exercice(4);
        $result = $exercice->run('5648 1124 8956 5487 5624 45556 564561 215487');
        $this->assertEquals('15', $result);
    }
}
