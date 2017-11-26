<?php

include 'InterfaceView.php';

class CreateView2 implements InterfaceView
{
    public $headerName;
    public $footerName;
    public $contentName;
    public $scriptName;
    public $cssName;
    public $dataModel;

    /**
     * CreateView1 constructor.
     * @param $headerName
     * @param $footerName
     * @param $contentName
     * @param $scriptName
     * @param $cssName
     */
    public function __construct($headerName='', $footerName='', $contentName='', $scriptName='', $cssName='')
    {
        $this->headerName = $headerName;
        $this->footerName = $footerName;
        $this->contentName = $contentName;
        $this->scriptName = $scriptName;
        $this->cssName = $cssName;
    }
    public function loadDataToView($model){
        $this->dataModel=$model;
    }

    public function script_get()
    {  $data=$this->dataModel;


    }

    public function css_get(){
        $data=$this->dataModel;
    }


    public function header_get()
    {   $data=$this->dataModel;
        echo "Witam2";
    }

    public function content_get()
    {    $data=$this->dataModel;
        include 'template\ContentTest2.html.php';
    }

    public function footer_get()
    {   $data=$this->dataModel;

        echo 'Żegnam2 <br>';
    }


}