<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use App\Models\ContentModel;
use App\Models\Permission;
use App\Models\Role;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Zizaco\Entrust\Entrust;

class IndexController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }

    public function index(Request $request) {
        $user = \Auth::user();
//        dump(get_class_methods($user));
        return view('index.index');
    }
}