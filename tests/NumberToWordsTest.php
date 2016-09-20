<?php
    require_once "src/NumberToWords.php";
    class NumberToWordsTest extends PHPUnit_Framework_TestCase
    {
        function test_singleAndDouble_one_digit()
        {
            //Arrange
            $test_NumberToWords = new NumberToWords;
            $number = 6;
            //Act
            $output = $test_NumberToWords->singleAndDouble($number);
            //Assert
            $this->assertEquals("six ", $output);
        }

        function test_singleAndDouble_two_digit()
        {
            //Arrange
            $test_NumberToWords = new NumberToWords;
            $number = 23;
            //Act
            $output = $test_NumberToWords->singleAndDouble($number);
            //Assert
            $this->assertEquals("twenty three ", $output);
        }
        function test_singleAndDouble_multiple_of_ten()
        {
            //Arrange
            $test_NumberToWords = new NumberToWords;
            $number = 30;
            //Act
            $output = $test_NumberToWords->singleAndDouble($number);
            //Assert
            $this->assertEquals("thirty ", $output);
        }

        function test_hundreds()
        {
            //Arrange
            $test_NumberToWords = new NumberToWords;
            $number = "000000008";
            //Act
            $output = $test_NumberToWords->hundreds($number);
            //Assert
            $this->assertEquals("eight ", $output);
        }

        function test_numberParse(){
            $test_numberParse = new NumberToWords;
            $number = 833;

            $output = $test_numberParse->numberParse($number);

            $this->assertEquals("000000000000833", $output);
        }

        // export PATH=$PATH:./vendor/bin first and then you will only have to run $ phpunit tests
    }
?>
