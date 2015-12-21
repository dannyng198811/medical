<?php
require_once 'init.php';

    
    $stmt  =  $db -> prepare ("SELECT* FROM news ");
    $stmt ->execute();
    $promotion = $stmt->fetchAll();
  
  // load template
  $template = $twig->loadTemplate('news.html');
  
  // set template variables
  // render template
  echo $template->render(
      array(
           'menu'=>$menu,
         'newses'=>$newses,
          'system'=>$system
  )
  
  );