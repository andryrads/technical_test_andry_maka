<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MakaController extends Controller
{
    public function index(){
        for($i = 1; $i <= 100; $i++) {
            if ($i % 15 == 0) {
                echo 'Mari Berkarya' . '|';
            } else if ($i % 5 == 0) {
                echo 'Berkarya' . '|';
            } else if ($i % 3 == 0) {
                echo 'Mari' . '|';
            } else {
                echo $i . '|';
            }
        }
    }
}
