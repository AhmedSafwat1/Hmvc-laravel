<?php

namespace Admins\Http\Controllers\Web;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdminController extends Controller
{
    //
    public function index(){
        return view("admins::users.users");
    }
}
