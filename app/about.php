<?php
require_once 'init.php';?>
<?php include 'inc/header.php'  ?>


<div class="content">
     <div class="ui container mtb2">
         <div class="ui grid">
         
             <div class="eight wide column">
                <h4 class="tit-style"><span>集团简介</span></h4> 
                <p><?php echo $system['about_group_desc'] ?></p>
                <h4 class="tit-style"><span>集团品牌</span></h4> 
                <p><?php echo $system['about_brand_desc'] ?> </p>
                 <h4 class="tit-style"><span>集团使命</span></h4> 
                <p><?php echo $system['about_mission_desc'] ?> </p>
                 <h4 class="tit-style"><span>集团核心价值</span></h4> 
                <p><?php echo $system['about_value_desc'] ?></p>
             </div>
             
             <div class="eight wide column">
                <img src="/_/img/about-star.png"/>
             </div>
             <div class="six column row">
                 <div class="column">
                     <a href="/_/img/about2.jpg" data-lightbox="image1" data-title=""><img src="/_/img/about-store1.jpg"/></a>
                 </div>
                 
                  <div class="column">
                     <a href="/_/img/about2.jpg" data-lightbox="image1" data-title=""><img src="/_/img/about-store1.jpg"/></a>
                 </div>
                 
                  <div class="column">
                     <a href="/_/img/about2.jpg" data-lightbox="image1" data-title=""><img src="/_/img/about-store1.jpg"/></a>
                 </div>
                  <div class="column">
                     <a href="/_/img/about2.jpg" data-lightbox="image1" data-title=""><img src="/_/img/about-store1.jpg"/></a>
                 </div>
                 
                  <div class="column">
                     <a href="/_/img/about2.jpg" data-lightbox="image1" data-title=""><img src="/_/img/about-store1.jpg"/></a>
                 </div>
                 
                  <div class="column">
                     <a href="/_/img/about2.jpg" data-lightbox="image1" data-title=""><img src="/_/img/about-store1.jpg"/></a>
                 </div>
                 
             </div>
             
             <div class="column row nop"><p class="mt03">全港分店地址： </p></div>
             <div class="three column row nop">
               <div class="column">
                <?php //echo $system['location'] ?> 
               </div>
                
             </div>
             
             
             
         </div>
         
         
     </div>
  
 </div>
 



<?php include 'inc/footer.php'  ?>