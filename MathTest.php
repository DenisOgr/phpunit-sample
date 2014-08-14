<?php
/**
 * User: Denis Porplenko <denis.porplenko@gmail.com>
 * Date: 13.08.14
 * Time: 23:08
 */

class MathTest  extends PHPUnit_Framework_TestCase{

    public function testSimple()
    {
        $this->assertFalse(1 + 1 == 3);
        $this->assertTrue(1 + 1 == 2);
    }

    public function testSum()
    {
        $this->assertSame(Math::sum(1, 2), 3);
    }

    /**
     * @dataProvider provider
     * @param $a
     * @param $b
     * @param $result
     */
    public function testOperation($a, $b, $result)
    {
        $this->assertSame(Math::operation($a, $b), $result);
    }

    /**
     * @return array
     */
    public static function provider()
    {
        return [
            [10, 2, 5],
            [100, 20, 5],
            [100, 0, false],
            [-100, 5, -20],
        ];
    }


} 