<?php

class Home
{
    public static function planets(){
        // path to swiss ephemeris library files
        $libPath = '../astro_engine/model/sweph/';
        putenv("PATH=$libPath");
        //$usersTimezone = 'Asia/Kathmandu';
        //$currentDate = new DateTime("now", new DateTimeZone($usersTimezone) );
        $currentDate = new DateTime("now");

        $date = $currentDate->format('d.m.Y');
        $time = $currentDate->format('H:i:s');
        // SIDEREAL ZODIAC using Lahiri Ayanamsa | Planetary position for single day
        exec ("swetest.exe -edir$libPath -b$date -ut$time -p0123456789mt -n1 -sid1 -eswe -fPls -g, -head", $output_s);
        // var_dump($output_s);  
        foreach ($output_s as $op){
            echo ($op."<br>");
        }       
    }
}
?>