<?php

class Math {

    public static function sum($a, $b) {
        return $a + $b;
    }

    public static function operation($a, $b)
    {
        $a =  abs($a);
        if ($b === 0 ) {
            return false;
        }
        return $a / $b;
    }

    public static function oInput($a, $b, $input)
    {
        return $input->getParam() + ($a + $b);
    }
}

class MockInput {
    public function getParam()
    {
        return 1;
    }
}




class Input {
    public function getParam()
    {
        return 1 + 23 + $this->getParam2() - 100;
    }

    public function getParam2()
    {
        return -100;
    }
}



/*
 * Unit test
 * */

function testWithSimpleMock() {
    ;
    return (Math::oInput(3, 4,new MockInput()) === 8) ? 'Success test' : 'Fail test';
}

function testSum() {
    $result =  Math::sum(5, 5);
    return ($result == 10) ? 'Success test' : 'Fail test';
}

function testOperationWithoutZero() {
    return (Math::operation(10, 5) === 2) ? 'Success test' : 'Fail test';
}

function testOperationWithZero() {
    return (Math::operation(10, 0) === false) ? 'Success test' : 'Fail test';
}

function testOperationWithProvider() {
    $data = [
        [10, 0, false],
        [10, 5, 2],
        [-100, 5, -20],
    ];

    foreach ($data as $item) {
        $result = (Math::operation($item[0], $item[1]) === $item[2]) ? 'Success test' : 'Fail test';
        var_dump($result);
    }
}



//var_dump(testSum());
//var_dump(testOperationWithoutZero());
//var_dump(testOperationWithZero());
//testOperationWithProvider();
//var_dump(testWithSimpleMock());
