<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MainController extends AdminBaseController
{
    public function index(){
        return view('admin.main.index');
    }
}
