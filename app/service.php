<?php require_once 'init.php';
 

    $stmt = $db->prepare("SELECT* FROM serviceitem where sid=:sid");
    $stmt->bindValue(':sid', $_GET['id'], PDO::PARAM_INT);
    $stmt ->execute();     
    $serviceitems = $stmt->fetchAll();

 foreach($serviceitems as $svc)
{
 
}

?>



<?php include 'inc/header.php'  ?>
<div class="content">
    
    <div class="ui container mtb2">
       <div class="ui grid">
          <div class="five column row">
              
              
              <div class="column bp1">
                  <a href="#">
               <div class="move-cov1">
                 <img src="_/img/em1.jpg"/>
                 <div>
                     <p>激光治疗仪</p>
                     
                 </div>
               </div></a>
              </div>
              
              
               <div class="column bp1">
                  <a href="#">
               <div class="move-cov1">
                 <img src="_/img/em1.jpg"/>
                 <div>
                     <p>激光治疗仪</p>
                     
                 </div>
               </div></a>
              </div>
              
               <div class="column bp1">
                  <a href="#">
               <div class="move-cov1">
                 <img src="_/img/em1.jpg"/>
                 <div>
                     <p>激光治疗仪</p>
                     
                 </div>
               </div></a>
              </div>
              
               <div class="column bp1">
                  <a href="#">
               <div class="move-cov1">
                 <img src="_/img/em1.jpg"/>
                 <div>
                     <p>激光治疗仪</p>
                     
                 </div>
               </div></a>
              </div>
              
               <div class="column bp1">
                  <a href="#">
               <div class="move-cov1">
                 <img src="_/img/em1.jpg"/>
                 <div>
                     <p>激光治疗仪</p>
                     
                 </div>
               </div></a>
              </div>
              
               <div class="column bp1">
                  <a href="#">
               <div class="move-cov1">
                 <img src="_/img/em1.jpg"/>
                 <div>
                     <p>激光治疗仪</p>
                     
                 </div>
               </div></a>
              </div>
              
               <div class="column bp1">
                  <a href="#">
               <div class="move-cov1">
                 <img src="_/img/em1.jpg"/>
                 <div>
                     <p>激光治疗仪</p>
                     
                 </div>
               </div></a>
              </div>
              
              
              
           </div><!--five column row end-->
           
        </div><!--ui grid end-->
    </div><!--ui container end-->
    
</div><!--content end-->

<?php include 'inc/footer.php'  ?>