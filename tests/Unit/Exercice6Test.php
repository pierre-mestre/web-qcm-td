<?php
namespace Tests\Unit;

use App\Exercice;
use PHPUnit\Framework\TestCase;

class Exercice6Test extends TestCase
{
    /**
     * @runInSeparateProcess
     */
    public function testCanRunMixed()
    {
        $inputs = [
            10,
            -64,
            71,
            -98,
            -60,
            -18,
            41,
            88,
            -2,
            -24,
            63
        ];
        $output = <<<MSG_EOF
-63
71
-97
-59
-17
41
89
-1
-23
63

MSG_EOF;
        $exercice = new Exercice(6);
        $result = call_user_func_array([$exercice, 'run'], $inputs);
        $this->assertEquals($output, $result);
    }

    /**
     * @runInSeparateProcess
     */
    public function testCanRunPositive()
    {
        $inputs = [
            10,
            9000,
            8802,
            2390,
            7628,
            8588,
            4491,
            4912,
            2399,
            5384,
            4315
        ];
        $output = <<<MSG_EOF
9001
8803
2391
7629
8589
4491
4913
2399
5385
4315

MSG_EOF;
        $exercice = new Exercice(6);
        $result = call_user_func_array([$exercice, 'run'], $inputs);
        $this->assertEquals($output, $result);
    }

    /**
     * @runInSeparateProcess
     */
    public function testCanRunNegative()
    {
        $inputs = [
            10,
            -3999,
            -5748,
            -2518,
            -8081,
            -1986,
            -7579,
            -9608,
            -3557,
            -5966,
            -8472
        ];
        $output = <<<MSG_EOF
-3999
-5747
-2517
-8081
-1985
-7579
-9607
-3557
-5965
-8471

MSG_EOF;
        $exercice = new Exercice(6);
        $result = call_user_func_array([$exercice, 'run'], $inputs);
        $this->assertEquals($output, $result);
    }

    /**
     * @runInSeparateProcess
     */
    public function testCanRunZero()
    {
        $inputs = [
            1,
            0
        ];
        $output = <<<MSG_EOF
1

MSG_EOF;
        $exercice = new Exercice(6);
        $result = call_user_func_array([$exercice, 'run'], $inputs);
        $this->assertEquals($output, $result);
    }
}
