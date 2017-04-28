<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use App\Models\ContentModel;
use Illuminate\Support\Facades\DB;
class IndexController extends Controller
{
    public function index() {
        return view('index.index');
    }
}