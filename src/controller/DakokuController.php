<?php

namespace Src\controller;

use App\Http\Controllers\Controller;
use App\User;

class DakokuController extends Controller
{
    public function getDakoku()
    {
        return response()->json([
            "status"=>"success",
            "result"=>[
                "dakoku"=>[
                    "goingWork"=>[
                        "id"=>555555,
                        "dakokuType"=>1,
                        "time"=>"2021-02-02 20:04:39"
                    ],
                    "leavingWork"=>[
                        "id"=>0,
                        "dakokuType"=>2,
                        "time"=>"未"
                    ],
                    "inTime"=>[]
                ],
                "currentDateTime"=>"2021-02-02 20:04:39"
            ]
        ]);
    }
}
