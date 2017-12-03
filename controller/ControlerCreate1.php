<?php

include  'ControllerBase.php';
class ControlerCreate1 extends ControlerBase
{
//TODO:Better flow data from model to controler, read more;
    public function renderSelectedView($name){

        include 'view/RenderView1.php';
        include 'model/ModelPosts.php';
        $testClass=new RenderView1($name);
        $model=new ModelPosts();
        $testClass->loadDataToRenderView([$model->getTitle(1),$model->getContent(1)]);
        $testClass->startView();
    }

}