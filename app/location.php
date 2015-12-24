<?php
require_once 'init.php';?>
<?php include 'inc/header.php'  ?>

<!--放HTML代碼在此-->
<div class="content">
    
    <div class="ui container mtb2">
       <div class="ui grid">
          <div class="six wide column nop">
            <h4 class="tit-style"><span>全港分店地址</span></h4>
             
            <?php echo $system['location'] ?> 
              
                
           </div>
           
           <div class="ten wide column ">
           <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3691.8780091999947!2d114.1534323137488!3d22.282610449170406!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3404007b527c1dfb%3A0x235f1d6961776a74!2z5Lit55Kw55qH5ZCO5aSn6YGT5LitNzDomZ_ljaHkvZvlpKflu4g!5e0!3m2!1szh-TW!2shk!4v1450928997702" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
           </div>
        </div>
    </div>
</div>
<?php include 'inc/footer.php'  ?>