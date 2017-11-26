<?php

include 'ModelBase.php';
class ModelPosts2 extends ModelBase
{
    public $title=['Smile','Joker'];


    public $content=['Slowa sa tutaj','Przypadkowo powiązane znaki są tutaj'];
    /**
     * ModelPosts constructor.
     */
    public function __construct()
    {
    }


    public function getTitle($index)
    {
        return $this->title[$index];
    }


    public function setTitle($index,$title)
    {
        $this->title[$index] = $title;
    }


    public function getContent($index)
    {
        return $this->content[$index];
    }


    public function setContent($index,$content)
    {
        $this->content[$index] = $content;
    }







}