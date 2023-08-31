<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

use Illuminate\Support\Facades\DB;

//  Get some models
use App\Models\subject;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;
    protected $user_type;
    protected $subjects;


    public function __construct(){
        $u_type = DB::select("select * from user_types where (id != 1) and (id != 6)");
        $this->user_type = $u_type;

        $subjects = subject::all();
        $this->subjects = $subjects;
    }
}
