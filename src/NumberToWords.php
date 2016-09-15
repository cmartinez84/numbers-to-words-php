<?php
    class NumberToWords
    {
        private $zeroNineteenArray = array(0=>"zero", 1=>"one", 2=>"two", 3=>"three", 4=>"four", 5=>"five", 6=>"six", 7=>"seven", 8=>"eight", 9=>"nine", 10=>"ten", 11=>"eleven", 12=>"twelve", 13=>"thirteen", 14=>"fourteen"
        , 15=>"fifteen", 16=>"sixteen", 17=>"seventy", 18=>"eighteen", 19=>"nineteen");
        private $tensArray = array(20=>"twenty", 30=>"thirty", 40=>"forty", 50=>"fifty", 60=>"sixty", 70=>"seventy", 80=>"eighty", 90=>"ninety");

        function getSingleAndDouble($number)
        {
            $number = intval($number);
            if($number < 20 && $number >= 0){
                $word = $this->zeroNineteenArray[$number] . " ";
                return $word;
            } else {
                $firstNumber = substr($number, 0, 1) * 10;
                $secondNumber = substr($number, 1, 1);

                if($secondNumber != 0){
                    $word = $this->tensArray[$firstNumber] ." ". $this->zeroNineteenArray[$secondNumber] . " ";
                    return $word;
                } else {
                    $word = $this->tensArray[$firstNumber] . " ";
                    return $word;
                }
            }
        }

        function getThreeDigits ($number) {
            $number = intval($number);
            $firstnumber = substr($number, 0, 1);
            $restOfNumber = intval(substr($number, 1, 2));
            $word = $this->getSingleAndDouble($firstnumber) . "hundred ";
            if ($restOfNumber > 0) {
                $word = $word . $this->getSingleAndDouble($restOfNumber);
            }
            return $word;
        }

        function addThousandSuffix ($number) {
            $word = "";
            if (strlen($number) == 4) {
                $firstnumber = intval(substr($number, -4, 1));
                $word = $this->getSingleAndDouble($firstnumber) . "thousand ";
            } elseif (strlen($number) == 5) {
                $firstnumber = intval(substr($number, -5, 2));
                $word = $this->getSingleAndDouble($firstnumber) . "thousand ";
            } else {
                $firstnumber = intval(substr($number, -6, 3));
                $word = $this->getThreeDigits($firstnumber) . "thousand ";
            }

            $restOfNumber = intval(substr($number, -3));

            if ($restOfNumber > 0) {
                $word = $word . $this->getThreeDigits($restOfNumber);
            } else {
                $word = $this->getThreeDigits($number);
            }
            return $word;
        }




    }
?>
