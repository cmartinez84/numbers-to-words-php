<?php
    class DayOfWeek
    {
        private $monthCodeArray = array("1"=>0, "2"=>3, "3"=>3, "4"=>6, "5"=>1, "6"=>4, "7"=>6, "8"=>2, "9"=>5, "10"=>0, "11"=>3, "12"=>5);
        private $centuryCodeArray = array("17"=>4, "18"=>2, "19"=>0, "20"=>6, "21"=>4, "22"=>2, "23"=>0);
        private $dayCodeArray = array("0"=>"Sunday", "1"=>"Monday", "2"=>"Tuesday", "3"=>"Wednesday", "4"=>"Thursday", "5"=>"Friday", "6"=>"Saturday");


        function getYearCode($year)
        {
            $year = substr($year, -2);
            $yearCode = ($year + ($year/4)) % 7;
            return $yearCode;
        }


        function getMonthCode($month)
        {
            $monthCode = $this->monthCodeArray[$month];
            return $monthCode;
        }
        function getcenturyCode($year)
        {
            $century = substr($year, -4, 2);
            if($century >=17 && $century <=23){
                $centuryCode = $this->centuryCodeArray[$century];
                return $centuryCode;
            }
            // else{
            //     $centuryCode =  (18-($century)) % 7;
            //     return $centuryCode;
            // }
        }

        // function getDateNumber($day)
        // {
        //     return $day;
        // }

        function getLeapYearCode($month)
        {
            if ($month == 1 || $month == 2) {
                return -1;
            } else {
                return 0;
            }
        }

        function getDayOfWeek($month, $day, $year)
        {
            $dayOfWeekCode = ($this->getYearCode($year) + $this->getMonthCode($month) + $this->getCenturyCode($year) + ($day) - $this->getLeapYearCode($month)) % 7;
            $dayOfWeek = $this->dayCodeArray[$dayOfWeekCode];
            return $dayOfWeek;
        }

    }
?>
