<?php
/**
 * Created by PhpStorm.
 * User: zhangxingz
 * Date: 2017/4/28
 * Time: 10:58
 */

namespace App\Http\Routes;

use Illuminate\Contracts\Routing\Registrar;
use Illuminate\Routing\Route;

class AuthRoutes
{
    public function map(Registrar $router) {
        $router->group([], function ($router) {
            // 认证路由...
            $router->get('auth/login', 'Auth\AuthController@getLogin');
            $router->post('auth/login', 'Auth\AuthController@postLogin');
            $router->get('auth/logout', 'Auth\AuthController@getLogout');
            // 注册路由...
            $router->get('auth/register', 'Auth\AuthController@getRegister');
            $router->post('auth/register', 'Auth\AuthController@postRegister');
        });

    }
}