<?php
require_once 'init.php';
  
  // load template
  $template = $twig->loadTemplate('home.html');
  
  // set template variables
  // render template
  echo $template->render(
      array(
           'menu'=>$menu,
         'promotions'=> $promotions,
                   'services'=> $services,
                   'newses'=> $newses,

          'system'=>$system
          
  
  )
  
  );



