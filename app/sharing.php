<?php require_once 'init.php';
 

    $stmt = $db->prepare("SELECT* FROM sharing ");
    $stmt ->execute();     
    $sharings = $stmt->fetchAll();
    


?>

<?php include 'inc/header.php'  ?>
<div class="content">
    
    <div class="ui container mtb2">
       <div class="ui grid">
          <div class="two column row">
              
                <?php 
               foreach($sharings as $sh)
                {
              ?>
            <!--循环组1开始-->  
              <div class="column bp1 share">

          <iframe width="445" height="250" src="<?php echo $sh['viedo'] ?>" frameborder="0" allowfullscreen>            </iframe>
                  
                  <p><?php echo $sh['sharing'] ?></p>

              </div>
              <!--循环组1结束--> 
               <?php 
               }
              ?>
                
              
              
           </div><!--two column row end-->
           
        </div><!--ui grid end-->
    </div><!--ui container end-->
    
</div><!--content end-->

<?php include 'inc/footer.php'  ?>