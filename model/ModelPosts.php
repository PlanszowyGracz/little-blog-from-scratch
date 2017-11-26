<?php

include 'ModelBase.php';
class ModelPosts extends ModelBase
{
     public $title=['Marco','Polo'];


     public $content=['Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium alias consectetur fuga harum, id incidunt iusto nemo nisi numquam, odit quae quos, ratione suscipit tenetur voluptates. Ad dignissimos doloribus sapiente!','Cat ipsum dolor sit amet, where is my slave? I\'m getting hungry but head nudges , so chew on cable. Climb leg. Licks paws. I shredded your linens for you run in circles massacre a bird in the living room and then look like the cutest and most innocent animal on the planet or hate dog, yet favor packaging over toy so annoy kitten brother with poking has closed eyes but still sees you. Rub whiskers on bare skin act innocent lick butt and make a weird face spend all night ensuring people don\'t sleep sleep all day and cats making all the muffins attack feet eat half my food and ask for more, and jump on human and sleep on her all night long be long in the bed, purr in the morning and then give a bite to every human around for not waking up request food, purr loud scratch the walls, the floor, the windows, the humans.'];

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