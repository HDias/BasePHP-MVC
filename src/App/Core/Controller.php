<?php
namespace App\Core;

abstract class Controller
{
    protected function model($model)
    {
        $class_name = 'App\\Model\\' .  ucfirst($model);
        return new $class_name;
    }
    
    protected function view($view, array $data = array())
    {
        require_once '/../view/' . $view . '.php';
    }
}