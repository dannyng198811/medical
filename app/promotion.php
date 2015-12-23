<?php require_once 'init.php';
 

    $stmt = $db->prepare("SELECT* FROM promotion where id=:id");
    $stmt->bindValue(':id', $_GET['id'], PDO::PARAM_INT);
    $stmt ->execute();     
    $promotion = $stmt->fetch();
?>
<?php include 'inc/header.php'  ?>


 <div class="content">
     <div class="ui container mtb2">
         <div class="ui grid">
            <div class="sixteen wide column">
              <img src="http://www.expertmedical.cn/admin/media/images/<?php echo $promotion['image'] ?>"/>
            </div>
            <div class="six wide column">
               
                      <div class="tip tbg1"><p class="blue"><?php echo $promotion['content_row1'] ?></p></div>
                      <div class="tip tbg2"><p class="blue"><?php echo $promotion['content_row2'] ?></p></div>
                      <div class="tip tbg3"><p class="blue"><?php echo $promotion['content_row3'] ?></p></div>
              
            </div>
             
             <div class="ten wide column">
               <form class="ui form">
                   
  <div class="field">
      <label>姓名：<b class="red">*</b></label>
    <input name="first-name" placeholder="First Name" type="text">
  </div>
      
  <div class="field">
    <label>年龄：<b class="red">*</b></label>
    <select class="ui dropdown">
      <option value="0">18至25</option>
      <option value="1">26至32</option>
      <option value="2">33至39</option>
      <option value="3">40至55</option>
      <option value="4">55以上</option>
    
    </select>
  </div>
 
   <div class="field">
    <label>姓名：<b class="red">*</b></label>
    <input name="first-name" placeholder="First Name" type="text">
  </div>
       
    <div class="field">
    <div class="ui checkbox">
      <input class="hidden" tabindex="0" type="checkbox">
      <label>I agree to the Terms and Conditions</label>
    </div>
   </div>
 
  <button class="ui button" type="submit">Submit</button>
</form>
            </div>
           
            
             
             
         </div>
         
         
     </div>
  
 </div>
    

             
<?php include 'inc/footer.php'  ?>
