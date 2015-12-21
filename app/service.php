<?php
require_once 'init.php';

    
    $stmt  =  $db -> prepare ("SELECT* FROM serviceitem where sid=:sid");
    $stmt->bindValue(':sid', $_GET['sid'], PDO::PARAM_INT);
    $stmt ->execute();
    $promotion = $stmt->fetchAll();
  
  // load template
  $template = $twig->loadTemplate('service.html');
  
  // set template variables
  // render template
  echo $template->render(
      array(
           'menu'=>$menu,
         'serviceitems'=>$serviceitems,
          'system'=>$system
  )
  
  );

