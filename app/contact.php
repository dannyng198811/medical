<?php


    require_once 'init.php';

 
  // load template
  $template = $twig->loadTemplate('contact.html');
  
  // set template variables
  // render template
  echo $template->render(
      array(
 
           'menu'=>$menu,
         'categories'=> $categories
          ,
          'system'=>$system
  
  )
  
  );
