<?php
require_once 'init.php';?>
<?php include 'inc/header.php'  ?>


 <div class="content">
     <div class="ui container mtb2">
         <div class="ui grid">
            <div class="sixteen wide column">
              <h4 class="tit-style"><span>疗程查询</span></h4>
                <p>Expert Medical 嘉悦医疗 - 美型堂提供专业医学美容及生活美容疗程，想要了解更多， 欢迎作进一步咨询：
</p>
            </div>
         </div>
           <div class="ui grid form-bor">  
             <div class="nine wide column">
               <form class="ui form" action="">
                   
  <div class="field mtb2">
      <label>姓名：<b class="red">*</b></label>
    <input id="name" placeholder="" type="text">
  </div>
      
  <div class="field mtb2">
    <label>年龄：<b class="red">*</b></label>
    <select id="age" class="ui dropdown">
      <option value="18至25">18至25</option>
      <option value="26至32">26至32</option>
      <option value="33至39">33至39</option>
      <option value="40至55">40至55</option>
      <option value="55以上">55以上</option>
    
    </select>
  </div>
 
   <div class="field mtb2">
    <label>电话：<b class="red">*</b></label>
    <input id="phone" placeholder="" type="text">
  </div>
      <div class="field mtb2">
    <label>邮箱：<b class="red">*</b></label>
    <input id="email" placeholder="" type="text">
  </div>
      
                         
  <div class="field mtb2">
    <label>分店：<b class="red">*</b></label>
    <select class="ui dropdown">
      <option value="中环">中环</option>
      <option value="尖沙咀（ 1 ）">尖沙咀（ 1 ）</option>
   <option value="尖沙咀（ 2 ）">尖沙咀（ 2 ）</option>
      <option value="旺角（ 1 ）">旺角（ 1 ）</option>
      <option value="旺角（ 2 ）">旺角（ 2 ）</option>

      <option value="屯门">屯门</option>
      <option value="元朗">元朗</option>
    
    </select>
  </div>
                 
         <div class="two fields mtb2">
           
             <div class="field"> 
           <label>咨询项目：<b class="red">*</b></label>    
        <div class="ui checkbox mtb08">
          <input name="hot-deals" type="checkbox"><label> Hifu紧肤提拉</label>
        </div>
               <div class="ui checkbox mtb08">
          <input name="hot-deals" type="checkbox"><label> GentleLASE 激光脫毛</label>
        </div>
               <div class="ui checkbox mtb08">
          <input name="hot-deals" type="checkbox"><label>Botox Restylane 輪廓塑形</label>
        </div>
               <div class="ui checkbox mtb08">
          <input name="hot-deals" type="checkbox"><label>4D膠原提拉線</label>
        </div>
               <div class="ui checkbox mtb08">
               <input name="hot-deals" type="checkbox"> <label>4D韓式雙眼皮吊線</label>
             </div>
               <div class="ui checkbox mtb08">
               <input name="hot-deals" type="checkbox"> <label>Fraxel Repair 分段式激光換膚</label>
             </div>
               
               
             </div>
             
              <div class="field">
                  <br/>
                 <div class="ui checkbox mtb08">
               <input name="hot-deals" type="checkbox"> <label>Doublo-s 修身提升</label>
             </div>
                 
             <div class="ui checkbox mtb08">
               <input name="hot-deals" type="checkbox"> <label>IR 水光美肌</label>
             </div>
          <div class="ui checkbox mtb08">
              <input name="hot-deals" type="checkbox"> <label>Sculptra 逆齡童顏</label>
            </div>
                  <div class="ui checkbox mtb08">
              <input name="hot-deals" type="checkbox"> <label>心心臉塑形注射</label>
            </div> <div class="ui checkbox mtb08">
              <input name="hot-deals" type="checkbox"> <label>第五代水滴形豐胸</label>
            </div>
                 <div class="ui checkbox mtb08">
              <input name="hot-deals" type="checkbox"> <label>其他療程</label>
            </div>
           
        </div>
          
   </div>    
                   
   <div class="field mtb2">
    <label>咨询内容</label>
    <textarea></textarea>
  </div>
    
    <div class="field mtb2">
        <label>从哪获取本资讯：<b class="red">*</b></label> 
       <div class="ui checkbox mtb08">
          <input name="hot-deals" type="checkbox">
          <label>Facebook专页</label>
        </div>
        
        <div class="ui checkbox mtb08">
          <input name="hot-deals" type="checkbox">
          <label>网上广告</label>
        </div>
        <div class="ui checkbox mtb08">
          <input name="hot-deals" type="checkbox">
          <label>Google/Yahoo 关键字</label>
        </div>
        
        <div class="ui checkbox mtb08">
          <input name="hot-deals" type="checkbox">
          <label>电视/报章/杂志</label>
        </div>
        
        <div class="ui checkbox mtb08">
          <input name="hot-deals" type="checkbox">
          <label>海报/宣传单</label>
        </div>
        
        <div class="ui checkbox mtb08">
          <input name="hot-deals" type="checkbox">
          <label>朋友介绍</label>
        </div>
        
        <div class="ui checkbox mtb08">
          <input name="hot-deals" type="checkbox">
          <label>其他</label>
        </div>
        
   </div>
       
    
       
    <div class="field mtb2">
        <label>隐私保护条例：<b class="red">*</b></label> 
    <div class="ui checkbox mtb08">
          <input name="hot-deals" type="checkbox">
          <label>我已阅读并同意有关条款</label>
        </div>
        
        <div class="ui checkbox mtb08">
          <input name="hot-deals" type="checkbox">
          <label>本人日后愿意收取有关EM嘉悦医疗，美型堂或其他联营机构的宣传及推广资讯</label>
        </div>
   </div>
 
  <button class="ui button"  id="mysubmit">as</button>
</form>
            </div>
           
           <div class="seven wide column">
               <img src="_/img/form-star.png"/>
              
            </div>  
             
             
         </div>
         
         
     </div>
  
 </div>
    




<?php include 'inc/footer.php'  ?>
