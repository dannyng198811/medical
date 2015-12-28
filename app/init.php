<?php

//require_once './Twig/Autoloader.php';
//Twig_Autoloader::register();
 
//read from databases
    try{
    $dsn = "mysql:host=120.24.233.54;dbname=php";
    $db = new PDO($dsn, 'danny', 'Ud0891802183');
    $db->query('set names utf8;');
    }catch(Exception $e){
        echo "Cannot connect to database,Please come back later!";
         
        exit();   
    }

        $imgurl ="http://58.96.172.29/newcmweb.hk/themes/exmed/admin/media/images/";
     $rs = $db->query("SELECT* FROM system");
    $system = $rs->fetch();
    
   
 
     

    
    
//    
// $loader = new Twig_Loader_Filesystem('./_/tpls/');
  
  // initialize Twig environment
 // $twig = new Twig_Environment($loader, array(
  //  'cache' => './lovecache',
//));
