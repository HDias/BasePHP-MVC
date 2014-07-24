<?php
/*
 * To Use public/blog/post/<title_post>
* set the param in the method Ex.: ...postAction($title ='')...
*/
namespace App\Controller;

use App\Core\Controller;

class Blog extends Controller
{
    public function postAction()
    {
        $model =  $this->model('user');
        $name = $model->name = 'Horecio Dias';        
        //echo $model->name;
        
        $this->view('index/index', array('name' => $name));
    }
}
