<?php
namespace Tests\Unit;

use App\Exercice;
use PHPUnit\Framework\TestCase;

class Exercice3Test extends TestCase
{
    /**
     * @runInSeparateProcess
     */
    public function testCanRunSimpleCase()
    {
        $exercice = new Exercice(3);
        $result = $exercice->run('1234', '0204');
        $this->assertEquals('++', $result);
    }

    /**
     * @runInSeparateProcess
     */
    public function testCanRunValidator1()
    {
        $exercice = new Exercice(3);
        $result = $exercice->run('15765', '15765');
        $this->assertEquals('+++++', $result);
    }

    /**
     * @runInSeparateProcess
     */
    public function testCanRunUncorrected()
    {
        $exercice = new Exercice(3);
        $result = $exercice->run('254368', '516298');
        $this->assertEquals('+---', $result);
    }

    /**
     * @runInSeparateProcess
     */
    public function testCanRunValidator2()
    {
        $exercice = new Exercice(3);
        $result = $exercice->run('326365475767585', '132435646757589');
        $this->assertEquals('+++++-------', $result);
    }

    /**
     * @runInSeparateProcess
     */
    public function testCanRunError()
    {
        $exercice = new Exercice(3);
        $result = $exercice->run('1245', '476564546');
        $this->assertEquals('ERROR', $result);
    }

    /**
     * @runInSeparateProcess
     */
    public function testCanRunValidator3()
    {
        $exercice = new Exercice(3);
        $result = $exercice->run('123456789Z9687298765KJGJ987982987979875434567+#098098687686', 'AZTYhiuhi');
        $this->assertEquals('ERROR', $result);
    }

    /**
     * @runInSeparateProcess
     */
    public function testCanRunLongOne()
    {
        $exercice = new Exercice(3);
        $result = $exercice->run('Coding game is a wonderful site and I like unicorns and pizzas ;-)', 'The solution to this one is just 42 (trust me I invented this one)');
        $this->assertEquals('++++--------------------------------------', $result);
    }

    /**
     * @runInSeparateProcess
     */
    public function testCanRunIJustRolledMyHeadOnTheKeyboard()
    {
        $exercice = new Exercice(3);
        $result = $exercice->run('fgeqhffdlihsfdkqhsjlfkhfekjdfqhkljehdqfkqkdjfhkdjhfkqdhfkdhqfdqdfLJHDFLJZHDFJHDLKjlkFJDLKFKLJDFoIHJFLDJFOPDFEJDFLEDHFKJEHDFCKDJFHKDJFHKDJfhKDJFHC,NDBf,NEBD,FBED,nfbKHLkjzljljdjlEBKFBDFKHEOFHKEJfhLJEOFIJICHEN,PFDPOJENOIJIIII', 'hgfkghgfghjkliygljhbslkjan+jBAIIHOHOIOJHOjpjpjpjpjJLKJLDNAMEJ,FOIJZ#KFPZJEMFJZLKJEFJZEMFKJZELFKNKJbznlkhnecoqjrolnrfoqnonn;,n,dojnibzhepfjoehzojrKFJBEKJBLIHEBCKIQBLZRKJFKBjhifbezmkjbflzbflkrbgfzlkjrbhfkzjhjfkefhzkjfhkzejhfz');
        $this->assertEquals('+++++++++------------------------------------------------------------------------------------------------------------------------------------', $result);
    }

    /**
     * @runInSeparateProcess
     */
    public function testCanRunNoResemblance()
    {
        $exercice = new Exercice(3);
        $result = $exercice->run('1234', '5678');
        $this->assertEquals('NOTHING', $result);
    }

    /**
     * @runInSeparateProcess
     */
    public function testCanRunValidator5()
    {
        $exercice = new Exercice(3);
        $result = $exercice->run('AZERTYUIOPTDFCGHJKHGFDTRSDFGHJKPOJIHGUYF', 'azertyuioptdfcghjkhgfdtrsdfghjkpojihguyf');
        $this->assertEquals('NOTHING', $result);
    }
}
