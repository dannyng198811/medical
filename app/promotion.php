<?php
require_once 'init.php';

//    
//    $stmt  =  $db -> prepare ("SELECT* FROM promotion where id=:id");
//    $stmt->bindValue(':id', $_GET['id'], PDO::PARAM_INT);
//    $stmt ->execute();
//    $promotion = $stmt->fetch();
  
  // load template
  $template = $twig->loadTemplate('promotion.html');
  
  // set template variables
  // render template
  echo $template->render(
      array(
           'menu'=>$menu,
//         'promotion'=>$promotion,
          'system'=>$system
  )
  
  );

