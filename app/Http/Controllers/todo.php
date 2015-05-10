<?php


Class todoController extends BaseController  {

    public $restful = true;
    public function get_index(){
    return View::make('todo.index');
}

}

?>