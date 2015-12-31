<?php
require_once 'init.php';?>
<?php include 'inc/header.php'  ?>

 <div class="content">
     <div class="ui container mtb2">
         <div class="ui grid">
            <div class="sixteen wide column">
              <h4 class="tit-style"><span>加入我们</span></h4>
                <p>配合集团业务急速发展，诚邀各有兴趣人士加盟。 本集团提供在职培训、良好晋升机会、薪金待遇、有薪年假等。

</p>
            </div>
         </div>
           <div class="ui grid form-bor">  
             <div class="sixteen wide column">
               <form class="ui form">
  <div class="four fields">                  
  <div class="field mtb2">
      <label>姓名：<b class="red">*</b></label>
    <input id="name" placeholder="姓名" type="text">
  </div>
      
  
 
   <div class="field mtb2">
    <label>电话：<b class="red">*</b></label>
    <input id="tel" placeholder="电话" type="text">
  </div>
       <div class="field mtb2">
    <label>邮箱：<b class="red">*</b></label>
    <input id="email" placeholder="邮箱" type="text">
  </div>
      
      <div class="field mtb2">
    <label>性别：<b class="red">*</b></label>
    <select id="sex" class="ui dropdown">
      <option value="女">女</option>
      <option value="男">男</option>
     
    
    </select>
  </div>
      
      
</div>
                   
 <div class="two fields">
                             
  <div class="field mtb2">
    <label>年龄：<b class="red">*</b></label>
    <select id="age" class="ui dropdown">
      <option value="0">18--25岁</option>
      <option value="1">26--32岁</option>
      <option value="2">33--39岁</option>
      <option value="3">40--55岁</option>
      <option value="4">55岁以上</option>
    
    </select>
  </div> 
     
      <div class="field mtb2">
    <label>工作经验年资：<b class="red">*</b></label>
    <select id="year" class="ui dropdown">
      <option value="0">1年以下</option>
      <option value="1">1--3年</option>
      <option value="2">3--5年</option>
      <option value="4">5年以上</option>
    
    </select>
  </div> 
     
 </div>
               
       <div class="three fields mtb2">
           
           <div class="field"> 
           <label>应聘职位：<b class="red">*</b></label>    
        <div class="ui checkbox mtb08">
          <input name="position[]" type="checkbox"><label> 分店经理</label>
        </div>
         <div class="ui checkbox mtb08">
          <input name="position[]" type="checkbox"><label> 美容治疗师/美容师/按摩师/美容学徒</label>
        </div>
             
             </div>
             
             <div class="field">
                  <br/>
             <div class="ui checkbox mtb08">
               <input name="position[]" type="checkbox"> <label>销售经理</label>
             </div>
            <div class="ui checkbox mtb08">
              <input name="position[]" type="checkbox"> <label>前台接待员</label>
            </div>
           
        </div>
            <div class="field">
                  <br/>
             <div class="ui checkbox mtb08">
               <input name="position[]" type="checkbox"> <label>美容顾问/美容顾问助理</label>
             </div>
            <div class="ui checkbox mtb08">
              <input name="position[]" type="checkbox"> <label>电话客户服务主任</label>
            </div>
           
        </div>
          
   </div>
        
                   
<div class="two fields mtb2">                 
   <div class="field mtb2">
    <label>相关工作经验：</label>
    <textarea id="exp"></textarea>
  </div>
    
     <div class="field mtb2">
    <label>薪金要求<b class="red">*</b>：</label>
    <input id="wage" placeholder="薪金要求" type="text">
  </div>
    
</div> 
      
                   
<div class="two fields mtb2"> 
       
    <div class="field mtb2">
        <label>隐私保护条例：<b class="red">*</b></label> 
    <div class="ui checkbox mtb08">
          <input name="terms[]" type="checkbox">
        <label>本人日后愿意收取有关EM嘉悦医疗，美型堂或其他联营机构的宣传及推广资讯</label>
          
        </div>
    </div>
    <div class="field mtb2">
        <div class="ui checkbox mtb08">
            <br/>
          <input name="terms[]" type="checkbox">
          <label>我已阅读并同意有关条款</label>
        </div>
   </div>
 </div>
  <button id="joinsubmit" class="ui button" type="submit">Submit</button>
</form>
            </div>
           
      
             
         </div>
         
         
     </div>
  
 </div>



<?php include 'inc/footer.php'  ?>