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
            $router->get('/content1', ['as' => 'content', 'uses' => 'Home\IndexController@content1']);
            $router->get('/content2', ['as' => 'content', 'uses' => 'Home\IndexController@content2']);
        });
    }
}