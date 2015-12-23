<?php require_once 'init.php';
 

    $stmt = $db->prepare("SELECT* FROM serviceitem where sid=:sid");
    $stmt->bindValue(':sid', $_GET['id'], PDO::PARAM_INT);
    $stmt ->execute();     
    $serviceitems = $stmt->fetchAll();



?>



<?php include 'inc/header.php'  ?>
<div class="content">
    
    <div class="ui container mtb2">
       <div class="ui grid">
          <div class="five column row">
              
            <?php 
               foreach($serviceitems as $svci)
                {
              ?>  
              <div class="column bp1">
                  <a href="<?php echo $svci['link'] ?>">
               <div class="move-cov1">
                 <img src="<?php echo $imgurl.$svci['image'] ?>"/>
                 <div>
                     <p><?php echo $svci['serviceItem'] ?></p>
                     
                 </div>
               </div></a>
              </div>
              
              <?php 
               }
              ?>
             
              
              
              
           </div><!--five column row end-->
           
        </div><!--ui grid end-->
    </div><!--ui container end-->
    
</div><!--content end-->

<?php include 'inc/footer.php'  ?>