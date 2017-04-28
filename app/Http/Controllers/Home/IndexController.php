<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use App\Models\ContentModel;
use Illuminate\Support\Facades\DB;
class IndexController extends Controller
{
    public function index() {
        $db = new ContentModel();
        var_dump($db->update([ 'content' => 555], ['content' => 55555]));
        return view('index.index');
    }
}