<?php

namespace App\Http\Controllers\Index;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ComplaintController extends Controller
{
    public function index(){
        return view('index.complaint.setting');
    }
}
