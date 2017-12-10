<?php


 // echo " test ";
  $uri = $_SERVER["REQUEST_URI"];
 // echo $uri;
 // var_dump($uri);
  $all= explode('/',$uri);
  $all2=implode(' | ', $all);
  //var_dump($all);
  //echo $all2;
//TODO: make redirecting and  better path to resources
//TODO: Better Controler handling. Think more about best way to implement.
include 'controller/ControlerCreate1.php';
$numer=2;
if(isset($_GET['numer'])){
    if(in_array((int)$_GET['numer'],[1,2])) {
        $numer=(int)$_GET['numer'];
    }
}

$testControl=new ControlerCreate1();
$testControl->renderSelectedView('CreateView'.$numer);

