<!DOCTYPE html>
<html>
    <head>
        <title><?php  ?></title>
                <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Custom Favicon -->
        <link rel="shortcut icon" href="">


        <!-- build:css({.tmp,app}) /_/css/lib/html5bp.css -->
        <link rel="stylesheet" href="/_/bower_components/html5-boilerplate/css/normalize.css">
        <link rel="stylesheet" href="/_/bower_components/html5-boilerplate/css/main.css">
<!--  <link rel="stylesheet" href="/_/bower_components/bootstrap/dist/css/bootstrap.min.css">-->
        <link rel="stylesheet" href="/_/bower_components/lightbox2/dist/css/lightbox.css">
        <link rel="stylesheet" href="/_/bower_components/semantic-ui-form/form.min.css">
        <!-- endbuild -->

        <!-- build:css({.tmp,app}) /_/css/site-styles.css -->
         <link rel="stylesheet" href="/_/css/grid.min.css">
        <link rel="stylesheet" href="/_/css/main.css">
        <link rel="stylesheet" href="/_/css/layout.css">
       

        <!-- endbuild -->

        <!-- build:js /_/js/lib/modernizr/modernizr.js -->
        <script src="/_/bower_components/modernizr/modernizr.js"></script>
        <!-- endbuild -->

    </head>
<body>
  <div class="header">
      <div class="ui container">
         <div class="ui grid">
             <div class="four column row">
                <div class="left floated column">
                   <img src="/_/img/logo.png"/>
                </div>
                <div class="right floated column">
              
                </div>
             </div>
           
         </div><!--ui grid end-->
          
          <nav class="menu">
              <ul>
                  <li><a class="active" href="#">首页</a></li>
                  <li><a href="#">关于我们</a></li>
                  <li class="down-menu">
                       
                      <a href="#">最新推广</a>
                     <ul class="promo">
                         
                      <li><a href="promotion.php?id={{pro.id}}">{{pro.promotion}}</a></li>
                      
                     </ul>
                  </li>
                  
                  <li class="down-menu">
                      <a href="#">EM服务</a>
                  <ul>
                         
                      <li><a href="#">{{svc.service}}</a></li>
                     
                     </ul>
                  
                  </li >
                  <li class="down-menu">
                      <a href="news.php">EM资讯</a>
                     
                  </li>
                  <li  class="down-menu">
                      <a href="sharing.php">星级分享</a>
                  
                  </li>
                  
                  <li><a href="http://www.expertmedical.com.hk/#!blank/cizq">优惠专区</a></li>
                  <li><a href="#">關於我們</a></li>
              </ul>
            
          </nav>

  </div>
</div>      
       