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
 
    event.preventDefault();
 //#1 get data
var name=$('#name').val()
var age=$('#age').val()
var phone=$('#phone').val()
var email=$('#email').val()
var store=$('#store').val()


var inquiryprojects=[];
 $("input[name='inquiryproject[]']").each(function(){
if($(this).prop('checked'))
inquiryprojects.push($(this).val());
 });


var source=[];
 $("input[name='source[]']").each(function(){
if($(this).prop('checked'))
source.push($(this).val());
 });
var msg=$('#msg').val()

var subscription=$('#subscription').prop('checked')

var read=$('#read').prop('checked')











// 2# validation
if(name==""||age==""||phone==""||email==""||store==""||source==""||inquiryprojects==""){
    
    alert('請完整填妥表單')
    return ;
}

    
if(!read){
    alert('請阅读并同意有关条款')
    return ;
}   

// 3# post data
      $('#mysubmit').attr("disabled",true);   
 $('#mysubmit').html("submitting...");
$.post("mail.php",
     {
    name:name,
  	email :email,
    phone :phone,
    age :age,
    store :store,
    inquiryprojects:inquiryprojects,
    source:source,
    msg:msg,
    subscription:subscription
     },
  function(data,status){
         
         
         if(data!="ok"){
              alert("遞交失敗，請重試！");
            
         }else{
         $('#name').val("");
             $('#email').val("");
              $('#phone').val("");

             $('#msg').val("");
         alert("遞交成功！");
         
         }
      $('#mysubmit').attr("disabled",false); 
     $('#mysubmit').html("submit");
        });
  
     
   
     
 });  











});


