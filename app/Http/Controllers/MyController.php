<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class MyController extends Controller{
    
    public function getPalindrom(){
        $counter = 0;
        $strings = ["121",'3343',"abba","vbcgh","pop", "lebel", "loool", "kjhj"];
        for ($i = 0; $i< count($strings); $i++) {
            if ($strings[$i] == strrev($strings[$i])) {
                $counter++;
            }
        }
        return $counter. " out of " .count($strings) ." are palindroms";
    }

    public function getSeconds(){
        $time = strtotime('1732-04-14 00:00:00');
        $time = time() - $time;
        return "Seconds passed since 14 April 1732: " .$time ." seconds";
    }

    public function getText(){
        $jsonString =`{"attachments":[{"fallback":"What did the shy pebble wish for? That she was a little boulder.","footer":"<https://icanhazdadjoke.com/j/qjV8EIRfVnb|permalink> - <https://icanhazdadjoke.com|icanhazdadjoke.com>","text":"What did the shy pebble wish for? That she was a little boulder."}],"response_type":"in_channel","username":"icanhazdadjoke"}`;
        $data = json_decode($jsonString);
        echo $data;
    }



    public function getNominee(){
        $students = ["Ali", "Ahmad", "Omar", "Elie", "Nour", "Michel", "Pablo"];
        return $students[array_rand($students)];
    }

}
