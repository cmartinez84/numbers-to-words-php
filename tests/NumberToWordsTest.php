<?php
    require_once "src/NumberToWords.php";
    class NumberToWordsTest extends PHPUnit_Framework_TestCase
    {
        function test_getSingleAndDouble_one_digit()
        {
            //Arrange
            $test_NumberToWords = new NumberToWords;
            $number = 6;
            //Act
            $output = $test_NumberToWords->getSingleAndDouble($number);
            //Assert
            $this->assertEquals("six", $output);
        }

        function test_getSingleAndDouble_two_digit()
        {
            //Arrange
            $test_NumberToWords = new NumberToWords;
            $number = 23;
            //Act
            $output = $test_NumberToWords->getSingleAndDouble($number);
            //Assert
            $this->assertEquals("twenty three", $output);
        }
        function test_getSingleAndDouble_multiple_of_ten()
        {
            //Arrange
            $test_NumberToWords = new NumberToWords;
            $number = 30;
            //Act
            $output = $test_NumberToWords->getSingleAndDouble($number);
            //Assert
            $this->assertEquals("thirty", $output);
        }

        function test_getThreeDigits()
        {
            //Arrange
            $test_NumberToWords = new NumberToWords;
            $number = 300;
            //Act
            $output = $test_NumberToWords->getThreeDigits($number);
            //Assert
            $this->assertEquals("three hundred ", $output);
        }

        function test_addThousandSuffix()
        {
            //Arrange
            $test_NumberToWords = new NumberToWords;
            $number = 111999;
            //Act
            $output = $test_NumberToWords->addThousandSuffix($number);
            //Assert
            $this->assertEquals("three thousand ", $output);
        }





        // export PATH=$PATH:./vendor/bin first and then you will only have to run $ phpunit tests
    }
?>
