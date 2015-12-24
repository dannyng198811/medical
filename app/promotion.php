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
              <img src="<?php echo $imgurl.$promotion['image'] ?>"/>
            </div>
            <div class="six wide column">
               
                      <div class="tip tbg1"><p class="blue"><?php echo $promotion['content_row1'] ?></p></div>
                      <div class="tip tbg2"><p class="blue"><?php echo $promotion['content_row2'] ?></p></div>
                      <div class="tip tbg3"><p class="blue"><?php echo $promotion['content_row3'] ?></p></div>
              
            </div>
             
             <div class="ten wide column">
               <form class="ui form form-bor">
                   
  <div class="field mtb2">
      <label>姓名：<b class="red">*</b></label>
    <input name="first-name" placeholder="" type="text">
  </div>
      
  <div class="field mtb2">
    <label>年龄：<b class="red">*</b></label>
    <select class="ui dropdown">
      <option value="0">18至25</option>
      <option value="1">26至32</option>
      <option value="2">33至39</option>
      <option value="3">40至55</option>
      <option value="4">55以上</option>
    
    </select>
  </div>
 
   <div class="field mtb2">
    <label>电话：<b class="red">*</b></label>
    <input name="first-name" placeholder="" type="text">
  </div>
      <div class="field mtb2">
    <label>邮箱：<b class="red">*</b></label>
    <input name="first-name" placeholder="" type="text">
  </div>
      
                         
  <div class="field mtb2">
    <label>分店：<b class="red">*</b></label>
    <select class="ui dropdown">
      <option value="0">中环</option>
      <option value="1">尖沙咀（ 1 ）</option>
   <option value="1">尖沙咀（ 2 ）</option>
      <option value="4">旺角（ 1 ）</option>
      <option value="4">旺角（ 2 ）</option>

      <option value="2">屯门</option>
      <option value="3">元朗</option>
    
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
 
  <button class="ui button" type="submit">Submit</button>
</form>
            </div>
           
            
             
             
         </div>
         
         
     </div>
  
 </div>
    

             
<?php include 'inc/footer.php'  ?>
