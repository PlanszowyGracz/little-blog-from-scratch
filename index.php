<?php


  echo " test ";
  $uri = $_SERVER["REQUEST_URI"];
  echo $uri;
  var_dump($uri);
  $all= explode('/',$uri);
  $all2=implode(' | ', $all);
  var_dump($all);
  echo $all2;

//TODO: Better Controler handling. Think more about best way to implement.
include 'controller/ControlerCreate1.php';

$testControl=new ControlerCreate1();
$testControl->renderSelectedView('CreateView1');

