<?php

class SimpleTestListener implements \PHPUnit_Framework_TestListener
{
    public function endTest(\PHPUnit_Framework_Test $test, $time)
    {
        printf("Test '%s' terminado y ha tardado %s segundos " . PHP_EOL,
           get_class($test) . '=>' . $test->getName(),
           number_format($time,3)
        );
    }

    public function addError(\PHPUnit_Framework_Test $test, \Exception $e, $time) {

    }

    public function addFailure(\PHPUnit_Framework_Test $test, \PHPUnit_Framework_AssertionFailedError $e, $time) {

    }

    public function addIncompleteTest(\PHPUnit_Framework_Test $test, \Exception $e, $time) {

    }

    public function addSkippedTest(\PHPUnit_Framework_Test $test, \Exception $e, $time) {

    }

    public function endTestSuite(\PHPUnit_Framework_TestSuite $suite) {

    }

    public function startTest(\PHPUnit_Framework_Test $test) {

    }

    public function startTestSuite(\PHPUnit_Framework_TestSuite $suite) {

    }
}