<?php
require_once 'init.php';

    
    $stmt  =  $db -> prepare ("SELECT* FROM sharing ");
    $stmt ->execute();
    $sharings = $stmt->fetchAll();
  
  // load template
  $template = $twig->loadTemplate('sharing.html');
  
  // set template variables
  // render template
  echo $template->render(
      array(
           'menu'=>$menu,
         'sharings'=>$sharings,
          'system'=>$system
  )
  
  );

