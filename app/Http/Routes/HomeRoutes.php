<?php
/**
 * Created by PhpStorm.
 * User: zhangxingz
 * Date: 2017/4/28
 * Time: 10:58
 */

namespace App\Http\Routes;

use Illuminate\Contracts\Routing\Registrar;

class HomeRoutes
{
    public function map(Registrar $router) {
        $router->group([], function ($router) {
            $router->get('/', ['as' => 'home', 'uses' => 'Home\IndexController@index']);
        });
    }
}