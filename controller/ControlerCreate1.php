<?php

include  'ControllerBase.php';
class ControlerCreate1 extends ControlerBase
{

    public function renderSelectedView($name){

        include 'view/RenderView1.php';
        include 'model/ModelPosts2.php';
        $testClass=new RenderView1($name);
        $model=new ModelPosts2();
        $testClass->loadModeltoRenderView([$model->getTitle(1),$model->getTitle(0)]);
        $testClass->startView();
    }

}