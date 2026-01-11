<?php

namespace App\Http\Controllers;

abstract class Controller
{
    public function maka(){
        for($i = 1; $i <= 100; $i++) {
            echo $i;
        }
    }
}
