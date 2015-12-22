<div class="footer">
    <div class="ui container">
        <div class="ui grid centered">
            <div class="eight column row">
               <div class="seven wide column">
                  <p class="mt03">嘉悅醫療集團</p>
                  <p><?php echo $system['footer_desc'] ?></p>
               </div>
                 
               <div class="right floated seven wide column">
                  <p class="icons"><span class="tel"></span><b>+852 2882 6100</b></p>
                  <p class="icons"><span class="mail"></span><b>cs@expertmedical.com.hk</b></p>
                   <p class="icons"><span class="cform"></span><b><a class="unline" href="#">Contact Form</a></b></p>
                   <p class="icons"><span class="add"></span><b>香港皇后大道70號卡佛大廈22樓2206-07室  <a class="unline" href="#">Map ></a></b></p>
                   
               </div>
            </div>
            <div class="eight column row nop">
                <div class="left floated seven wide column">
                  <p class="copyr">Copyright © 2015 Expert Medical Group Limited.</p>
                </div>
            </div>
        </div>
    </div>
</div>

 <!-- build:js(app) /_/js/main.js -->
        <script src="/_/bower_components/jquery/dist/jquery.js"></script>
        <script src="/_/bower_components/html5-boilerplate/js/plugins.js"></script>
<!-- <script src="/_/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>-->
         <script src="/_/bower_components/lightbox2/dist/js/lightbox-plus-jquery.min.js"></script>
         <script src="/_/bower_components/masonry/dist/masonry.pkgd.min.js"></script>

<!--          <script src="/_/bower_components/semantic-ui-form/form.min.js"></script>-->
        <script src="/_/js/functions.js"></script>
        <script src="/_/js/validation.js"></script>
        
        <!-- endbuild -->


<!-- build:remove:dist -->
<script src="//localhost:99/livereload.js"></script>
<script type="text/javascript">
$(document).ready(function(){
  // init Masonry
  var $grid = $('#grid').masonry({
    itemSelector: '.grid-item',
    percentPosition: true,
    columnWidth: '.grid-sizer'
  });
// layout Masonry after each image loads
$grid.imagesLoaded().progress( function() {
  $grid.masonry();
});
});
</script>
<!-- /build -->
    </body>

</html>