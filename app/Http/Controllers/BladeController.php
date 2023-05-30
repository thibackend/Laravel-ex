<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BladeController extends Controller
{
    public function Index ()
    {
        $a = "thi ddep trai";
        $element= ["thi moi nhaap moon"];
        $arr =[
            // "jet1"=>[
            //     "name" =>"Thi dep trai",
            //     "age" => 19,
            //     "address" =>"Kon tum"
            // ],
            // "jet2"=>[
            //     "name" =>"Thi dep trai",
            //     "age" => 19,
            //     "address" =>"Kon tum"
            //     ]
           
        ];

        return view('clients.home');
    }
}
