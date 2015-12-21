<?php
require_once 'init.php';

    /*
    $stmt  =  $db -> prepare ("SELECT* FROM page where id=:id");
    $stmt->bindValue(':id', $_GET['page_id'], PDO::PARAM_INT);
    $stmt ->execute();
    $page = $stmt->fetch();
    
    */
 
  
  // load template
  $template = $twig->loadTemplate('about.html');
  
  // set template variables
  // render template
  echo $template->render(
      array(
 
           'menu'=>$menu,
        
          'system'=>$system
  
  )
  
  );

