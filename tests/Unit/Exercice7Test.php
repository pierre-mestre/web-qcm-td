<?php
namespace Tests\Unit;

use App\Exercice;
use PHPUnit\Framework\TestCase;

class Exercice7Test extends TestCase
{
    /**
     * @runInSeparateProcess
     */
    public function testCanRunSimple()
    {
        $inputs = <<<MSG_EOF
5
ADBCE
XOOOO
OOOXO
OXOOO
OOXOO
OOOOX
MSG_EOF;

        $inputs = explode("\n", $inputs);
        $output = <<<MSG_EOF
100
MSG_EOF;
        $exercice = new Exercice(7);
        $result = call_user_func_array([$exercice, 'run'], $inputs);
        $this->assertEquals($output, $result);
    }

    /**
     * @runInSeparateProcess
     */
    public function testCanRunBadScore()
    {
        $inputs = <<<MSG_EOF
10
ABDECCDAAB
XOOOO
OOOOO
OOOXO
OOXOO
OXOOO
XOOOO
OOOXO
OOOXO
OOXOO
OXOOO
MSG_EOF;

        $inputs = explode("\n", $inputs);
        $output = <<<MSG_EOF
40
MSG_EOF;
        $exercice = new Exercice(7);
        $result = call_user_func_array([$exercice, 'run'], $inputs);
        $this->assertEquals($output, $result);
    }
}
