<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use App\Models\ContentModel;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
class IndexController extends Controller
{
    public function __construct(){
//        $this->middleware('auth');
    }

    public function index() {
        return view('index.index');
    }

    public function content1() {
        return view('content.content1');
    }

    public function content2() {
        return view('content.content2');
    }
}