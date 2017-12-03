<?php


class RenderView1
{

    public $viewClassName;
    public $viewClass;
    public $mainViewSkeleton;
    public $model;

    //TODO: Add path to template
    //TODO: Check if file exist
    //TODO: if not exist, schow info about this fact
    //TODO: Make some error handling
    //TODO: Better flow of model, think how model should in php look, read about this more.

    /**
     * RenderView1 constructor.
     * @param $viewClassName
     * @param string $mainViewSkeleton
     */
    public function __construct($viewClassName,$mainViewSkeleton='template\VievTest1.html.php')
    {
        include $viewClassName . '.php';
        $this->viewClassName = $viewClassName;
        $this->viewClass = new $viewClassName();
        $this->mainViewSkeleton=$mainViewSkeleton;
    }

    public function loadDataToRenderView($model){
         $this->model=$model;
    }

    public function startView()
    {

        $data=isset($this->model)? $this->model: [' Testowy1Model1 ',' Testowy2Model2 '];
        $this->viewClass->loadDataToView($data);
        $header_get = function () {$this->viewClass->header_get();};
        $content_get = function () {$this->viewClass->content_get();};
        $footer_get =function () { $this->viewClass->footer_get();};
        $script_get = function () {$this->viewClass->script_get();};
        $css_get =function () { $this->viewClass->css_get();};


        include $this->mainViewSkeleton;


    }


}