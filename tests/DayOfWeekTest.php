<?php
    require_once "src/DayOfWeek.php";
    class DayOfWeekTest extends PHPUnit_Framework_TestCase
    {
        function test_getYearCode()
        {
            //Arrange
            $test_DayOfWeek = new DayOfWeek;
            $year = 2016;
            //Act
            $output = $test_DayOfWeek->getYearCode($year);
            //Assert
            $this->assertEquals(6, $output);
        }

        function test_getMonthCode()
        {
            //Arrange
            $test_DayOfWeek = new DayOfWeek;
            $month = 9;
            //Act
            $output = $test_DayOfWeek->getMonthCode($month);
            //Assert
            $this->assertEquals(5, $output);
        }
        function test_getCenturyCode()
        {
            //Arrange
            $test_DayOfWeek = new DayOfWeek;
            $year = 2016;
            //Act
            $output = $test_DayOfWeek->getCenturyCode($year);
            //Assert
            $this->assertEquals(6, $output);
        }

        function test_getLeapYearCode()
        {
            //Arrange
            $test_DayOfWeek = new DayOfWeek;
            $month = 9;
            //Act
            $output = $test_DayOfWeek->getLeapYearCode($month);
            //Assert
            $this->assertEquals(0, $output);
        }

        function test_getDayOfWeek()
        {
            //Arrange
            $test_DayOfWeek = new DayOfWeek;
            $month = 9;
            $day = 15;
            $year = 2016;

            //Act
            $output = $test_DayOfWeek->getDayOfWeek($month, $day, $year);
            //Assert
            $this->assertEquals("Thursday", $output);
        }



    }
        // export PATH=$PATH:./vendor/bin first and then you will only have to run $ phpunit tests

?>
