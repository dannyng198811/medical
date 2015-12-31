<?php require_once 'init.php';
 

    $stmt = $db->prepare("SELECT* FROM promotion where id=:id");
    $stmt->bindValue(':id', $_GET['id'], PDO::PARAM_INT);
    $stmt ->execute();     
    $promotion = $stmt->fetch();
?>
<?php include 'inc/header.php'  ?>


 <div class="content">
     <div class="ui container mtb2">
       <div class="">
              <img src="<?php echo $imgurl.$promotion['image'] ?>"/>
            </div>
         <div class="ui grid mtb2">
            
            <div class="six wide column">
               
                      <div class="tip tbg1"><p class="blue"><?php echo $promotion['content_row1'] ?></p></div>
                      <div class="tip tbg2"><p class="blue"><?php echo $promotion['content_row2'] ?></p></div>
                      <div class="tip tbg3"><p class="blue"><?php echo $promotion['content_row3'] ?></p></div>
              
            </div>
             
             <div class="ten wide column">
              <?php include 'form.php'  ?>

            </div>
           
            
             
             
         </div>
         
         
     </div>
  
 </div>
    

             
<?php include 'inc/footer.php'  ?>
