<?php
require_once 'init.php';



$rs = $db->query("SELECT * FROM sharing");
    $sharings = $rs->fetchAll();

?>

<?php include 'inc/header.php'  ?>

    <!--[if lt IE 9]>
        <p class="chromeframe">You are using an <strong>outdated</strong> browser. 
        Please <a href="http://browsehappy.com/">upgrade your browser</a> 
        or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
          <script src="//cdn.bootcss.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="//cdn.bootcss.com/respond.js/1.4.2/respond.min.js"></script>  
    <![endif]-->

<div class="content">
    
  <div class="ui container">
         

 
      
      <div id="owl-demo" class="owl-carousel">
  <div class="item">  <img src="/_/img/ban1.jpg" data-thumb="/_/img/ban1.jpg" alt="" data-transition="slideInLeft"/> </div>
  <div class="item"> <img src="/_/img/ban2.jpg" data-thumb="/_/img/ban2.jpg" alt=""  data-transition="slideInLeft"/> </div>
    <div class="item"> <img src="/_/img/ban3.jpg" data-thumb="/_/img/ban3.jpg" alt=""  data-transition="slideInLeft"/> </div>
  <div class="item"> <img src="/_/img/ban4.jpg" data-thumb="/_/img/ban4.jpg" alt=""  data-transition="slideInLeft"/> </div>
  <div class="item"> <img src="/_/img/ban5.jpg" data-thumb="/_/img/ban5.jpg" alt=""  data-transition="slideInLeft"/> </div>

 
</div>
      
      
       <div class="ui grid">
           
                <div class="eight wide column">
                   <h4 class="tit-style"><span>EM简介</span></h4> 
                <p>  <?php echo $system['home_desc'] ?></p>
                    
                </div>
                 
                <div class="eight wide column">
                   <h4 class="tit-style"><span>热门疗程</span></h4> 
                     <div class="ui five column grid padded">
                       <div class="column"><img style="height:130px;"src="/_/img/m1.png"/></div>
                     
                       <div class="column"><img style="height:130px;" src="/_/img/m2.png"/></div>
                         
                           <div class="column"><img style="height:130px;" src="/_/img/m3.png"/></div>
                        <div class="column"><img style="height:130px;" src="/_/img/m4.png"/></div>
                                                 <div class="column"><img style="height:130px;" src="/_/img/m5.png"/></div>

                      
                     </div>
                </div>
            
           
         </div><!--ui grid end-->
      
      
      <div class="ui grid">
             <div class="ui ten column grid padded">
                      
                       <div class="column nop"><img src="/_/img/1.png"/></div>
                                        <div class="column nop"><img src="/_/img/in6.jpg"/></div>

                       <div class="column nop"><img src="/_/img/in2.jpg"/></div>
                       <div class="column nop"><img src="/_/img/in3.jpg"/></div>
                       <div class="column nop"><img src="/_/img/in4.jpg"/></div>
                                        <div class="column nop"><img src="/_/img/6.png"/></div>

                       <div class="column nop"><img src="/_/img/in5.jpg"/></div>
                       <div class="column nop"><img src="/_/img/in7.png"/></div>
                       <div class="column nop"><img src="/_/img/in8.jpg"/></div>
                     </div>
               
      
      </div>
      <div class="ui grid">
        <div class="column">
          <h4 class="tit-style"><span>星级分享</span></h4>
        </div> 
      </div><!--ui grid end-->
      <div class="ui grid">
          <div class="five column row">  
            <?php foreach( $sharings as $sh){?>
            
              <div class="column bp1">
               <a target="blank" href="<?php echo $sh['url'] ?>">
               <div class="move-cov">
                 <img src="<?php echo $imgurl.$sh['image'] ?>"/>
                 <div>
                     <p>立即体验分享</p>
                     
                 </div>
               </div></a>
               
               <p class="mtb03 blue"><?php echo $sh['sharing'] ?></p>
               <p class="mtb03"><?php echo $sh['desc'] ?></p>
            </div><!--a group end-->
           
            <?php } ?>

             
          
        </div>
      </div><!--ui grid end-->
      
    
      
  </div>


</div>



<?php include 'inc/footer.php'  ?>

