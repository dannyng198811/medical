$(document).ready(function(){


 $('#flexslider').flexslider({controlNav: false,directionNav: false});
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


$('#mysubmit').click(function(event){
     //event.preventDefault();
 
var name=$('#name').val()
var age=$('#age').val()
var phone=$('#phone').val()
var email=$('#email').val()
var store=$('#store').val()


var inquiryprojects=[];
 $("input[name='inquiryproject[]']").each(function(){
//alert($(this).val());
inquiryprojects.push($(this).val());
console.log(inquiryprojects);
 });

var msg=$('#msg').val()


//validation



//
   




/*ajax post
   $.post("mail.php",
     {
    myname:myname,
  	myemail :myemail,
    mymsg:mymsg
     },
  function(data,status){
         
         
         if(data!="ok"){
              alert("遞交失敗，請重試！");
              $('#mysubmit').attr("disabled",false); 

         }else{
         $('#myname').val("");$('#myemail').val("");$('#mymsg').val("");
         alert("遞交成功！");}
        });
 ajax post*/ 
     
   
     
 });  











});


