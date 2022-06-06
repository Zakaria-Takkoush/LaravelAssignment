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
        return $counter;
    }

}
