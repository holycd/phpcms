<?php

namespace App\Http\Controllers;

use App\Models\BaseModel;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

abstract class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    /**
     * @param string $model
     * @return BaseModel| \App\Models\$model . Model
     */
    public function getModel($model) {
        $class = 'App\Models\\'. $model . 'Model';
        if (class_exists($class)) {
            return new $class;
        }
        $class =  new BaseModel();
        // 驼峰转下划线
        $tableName = $str = preg_replace_callback('/([A-Z]{1})/',function($matches){
            return '_'.strtolower($matches[0]);
        },$model);
        $class->setTable($tableName);
        return $class;
    }
}
