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
            <!--循环组1开始-->  
              <div class="column bp1 share">
                <video width="445" height="250" controls>
  <source src="movie.mp4" type="video/mp4">
  <source src="movie.ogg" type="video/ogg">
  <source src="movie.webm" type="video/webm">
  <object data="movie.mp4" width="445" height="250">
    <embed src="movie.swf" width="445" height="250">
  </object>
</video> 
            <p>激光美白祛斑疗程</p>
              </div>
              <!--循环组1结束--> 
              
              <!--循环组2开始--> 
               <div class="column bp1 share">
                <video width="445" height="250" controls>
  <source src="movie.mp4" type="video/mp4">
  <source src="movie.ogg" type="video/ogg">
  <source src="movie.webm" type="video/webm">
  <object data="movie.mp4" width="445" height="250">
    <embed src="movie.swf" width="445" height="250">
  </object>
</video> 
              <p>激光美白祛斑疗程</p>
              </div>
              <!--循环组2结束--> 
              
               <!--循环组3开始--> 
               <div class="column bp1 share">
                <video width="445" height="250" controls>
  <source src="movie.mp4" type="video/mp4">
  <source src="movie.ogg" type="video/ogg">
  <source src="movie.webm" type="video/webm">
  <object data="movie.mp4" width="445" height="250">
    <embed src="movie.swf" width="445" height="250">
  </object>
</video> 
              <p>激光美白祛斑疗程</p>
              </div>
              <!--循环组3结束--> 
              
              
           </div><!--two column row end-->
           
        </div><!--ui grid end-->
    </div><!--ui container end-->
    
</div><!--content end-->

<?php include 'inc/footer.php'  ?>