<?php



class ControlerBase
{
    public $model;

    /**
     * ControlerCreate1 constructor.
     */
    public function __construct()
    {
    }

    public function loadModelToController($model){
        $this->model=$model;
    }
    //TODO: Read about how contoller should interact with model. And make this.
    public function changeModel($parametr, $data){

    }

    public function renderSelectedView($name){

        include '../view/RenderView1.php';
        $testClass=new RenderView1($name);
        $testClass->startView();
    }
}