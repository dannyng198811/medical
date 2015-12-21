<?php

require_once './Twig/Autoloader.php';
Twig_Autoloader::register();
 //read from databases
    $dsn = "mysql:host=localhost;dbname=npc";
    $db = new PDO($dsn, 'root', '123123');
    $db->query('set names utf8;');


     $rs = $db->query("SELECT* FROM system");
    $system = $rs->fetch();
    
    $rs = $db->query("SELECT* FROM menu");
    $menu = $rs->fetchAll();
    
     $rs = $db->query("SELECT * FROM promotion");
    $promotions = $rs->fetchAll();

  $rs = $db->query("SELECT * FROM service");
    $services = $rs->fetchAll();

  $rs = $db->query("SELECT * FROM news");
    $newses = $rs->fetchAll();
    
    $rs = $db->query("SELECT * FROM sharing");
    $sharings = $rs->fetchAll();
     

    
    
    
 $loader = new Twig_Loader_Filesystem('./_/tpls/');
  
  // initialize Twig environment
  $twig = new Twig_Environment($loader, array(
    //'cache' => './lovecache',
));