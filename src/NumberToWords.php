<?php
    class NumberToWords
    {
        private $zeroNineteenArray = array(0=>"zero", 1=>"one", 2=>"two", 3=>"three", 4=>"four", 5=>"five", 6=>"six", 7=>"seven", 8=>"eight", 9=>"nine", 10=>"ten", 11=>"eleven", 12=>"twelve", 13=>"thirteen", 14=>"fourteen"
        , 15=>"fifteen", 16=>"sixteen", 17=>"seventy", 18=>"eighteen", 19=>"nineteen");
        private $tensArray = array(20=>"twenty", 30=>"thirty", 40=>"forty", 50=>"fifty", 60=>"sixty", 70=>"seventy", 80=>"eighty", 90=>"ninety");
        private $outputOutline = array("trillion,", "billion,", "million,", "thousand,", "");
        private $digitsArray = array();

        function singleAndDouble($number)
        {
            $number = $this->trimZeros($number);

            if($number < 20 && $number >= 0){
                $result = $this->zeroNineteenArray[$number] . " ";
            } else {
                $firstNumber = substr($number, 0, 1) * 10;
                $secondNumber = substr($number, 1, 1);

                if($secondNumber != 0){
                    $result = $this->tensArray[$firstNumber] ."-". $this->zeroNineteenArray[$secondNumber] . " ";
                } else {
                    $result = $this->tensArray[$firstNumber] . " ";
                }
            }
            return $result;
        }

        function hundreds ($number) {
            $number = $this->trimZeros($number);
            $strLength = strlen($number);
            $restOfNumber = substr($number, -2);

            if($strLength >= 3){ ////if three digits
                $firstnumber = substr($number, 0 , 1);
                $result = $this->singleAndDouble($firstnumber) . "hundred ";
                if($restOfNumber > 0){
                    $result = $result . $this->singleAndDouble($restOfNumber);
                }
            }
            else{
                $result = $this->singleAndDouble($restOfNumber);
            }
            return $result;
        }
        function getWords($number){
            $placeholders = "000000000000000";
            settype($placeholders, "string");
            settype($number, "string");
            $number = substr($placeholders, strlen($number)) . $number;
            $setsOfThree = str_split($number, 3);
            foreach($setsOfThree as $index => $set){
                settype($set, "integer");
                if($set <1){
                    $this->outputOutline[$index]="";
                }
                else{
                    $this->outputOutline[$index] = $this->hundreds($set) . $this->outputOutline[$index]. " ";
                }
            }
            $output = implode($this->outputOutline, " ");
            return $output;
        }
        function trimZeros($number){
            $number = substr($number, 0);
            $number = intval($number);
            return $number;
        }
    }
?>
