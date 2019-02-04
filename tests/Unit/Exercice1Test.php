<?php
namespace Tests\Unit;

use App\Exercice;
use PHPUnit\Framework\TestCase;

class Exercice1Test extends TestCase
{
    /**
     * @runInSeparateProcess
     */
    public function testCanRunExercice1WithArgs10()
    {
        $exercice = new Exercice(1);
        $result = $exercice->run(10);
        $this->assertEquals('10 11', $result);
    }

    /**
     * @runInSeparateProcess
     */
    public function testCanRunExercice1WithArgs97()
    {
        $exercice = new Exercice(1);
        $result = $exercice->run(97);
        $this->assertEquals('97 176 847 1595 7546 14003 44044', $result);
    }

    /**
     * @runInSeparateProcess
     */
    public function testCanRunExercice1WithArgs546273()
    {
        $exercice = new Exercice(1);
        $result = $exercice->run(546273);
        $this->assertEquals('546273 918918 1738737 9117108 17134227 89377398', $result);
    }

    /**
     * @runInSeparateProcess
     */
    public function testCanRunExercice1WithArgs12()
    {
        $exercice = new Exercice(1);
        $result = $exercice->run(12);
        $this->assertEquals('12 33', $result);
    }
}
