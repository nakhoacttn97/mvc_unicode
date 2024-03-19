<?php
class BaseController{

    public function model($model){
        if(file_exists(_DIR_ROOT.'/app/models/'.$model.'.php')){
            require_once _DIR_ROOT.'/app/models/'.$model.'.php';
            if(class_exists($model)){
                $model = new $model();
                return $model;
            }
        }
       
        return false;
    }

    // render views
    public function render($view, $data = []){
        // handle arr data => ...
        extract($data);

        // load views
        if(file_exists(_DIR_ROOT.'/app/views/'.$view.'.php')){
            require_once _DIR_ROOT.'/app/views/'.$view.'.php';
        }
    }
}


/**
 * Note:
 *      su dung bien extract($data); chuyen doi cac phan tu cua mang data -> cac bien doc lap
 *          Ex: $data = ['name' => 'John','age' => 30];
 *              => $name = 'John';
 *              => $age = '30';
 */