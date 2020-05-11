<?php
    $ip_string = null;

    //whether ip is from share internet
    if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
        $ip_address = $_SERVER['HTTP_CLIENT_IP'];
    }
    elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {  //whether ip is from proxy
        $ip_address = $_SERVER['HTTP_X_FORWARDED_FOR'];
    }

    else { //whether ip is from remote address
        $ip_address = $_SERVER['REMOTE_ADDR'];
    }
    for($i = 0; $i < strlen($ip_address); $i++) {
        $ip_string .= getValue($ip_address[$i]);
    }
    echo $ip_string;
    /**
     * @param $val
     * @return string
     */
    function getValue($val)
    {
        if($val == ".") {
            $str = "dot ";
        }
        else {
            switch($val)
            {
                case 0:
                    $str = "zero ";
                    break;
                case 1:
                    $str = "one ";
                    break;
                case 2:
                    $str = "two ";
                    break;
                case 3:
                    $str = "three ";
                    break;
                case 4:
                    $str = "four ";
                    break;
                case 5:
                    $str = "five ";
                    break;
                case 6:
                    $str = "six ";
                    break;
                case 7:
                    $str = "seven ";
                    break;
                case 8:
                    $str = "eight ";
                    break;
                case 9:
                    $str = "nine ";
                    break;
            }
        }
        return $str;
    }