<?php require_once 'init.php';
 

    $stmt = $db->prepare("SELECT* FROM news ");
    $stmt ->execute();     
    $newses = $stmt->fetchAll();


?>


<?php include 'inc/header.php'  ?>

<div class="content">
     <div class="ui container mtb2">
        

<div id="grid">
  <div class="grid-sizer"></div>
    
    
    <?php 
               foreach($newses as $ns)
                {
              ?>
  <div class="grid-item">
      <a href="<?php echo $imgurl.$ns['image'] ?>" data-lightbox="roadtrip"> <img src="<?php echo $imgurl.$ns['image'] ?>" /></a>
  </div>

    <?php 
               }
                   ?>
    
</div>

    
    </div>
</div>



<?php include 'inc/footer.php'  ?>
