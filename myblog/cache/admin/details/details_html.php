<!DOCTYPE html>
<html lang="zh-cn">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <meta name="renderer" content="webkit">
    <title></title>  
    <link rel="stylesheet" href="public/index/css/pintuer.css">
    <link rel="stylesheet" href="public/index/css/admin.css">
    <script src="public/index/js/jquery.js"></script>
    <script src="public/index/js/pintuer.js"></script>  
</head>
<body>
<form method="post" action="http://localhost/myblog/index.php?m=admin&c=details&a=details_audio">
  <div class="panel admin-panel">
    <div class="panel-head"><strong class="icon-reorder"> 评论管理</strong></div>
    <div class="padding border-bottom">
      <ul class="search">
        <li>
          <button type="button"  class="button border-green" id="checkall"><span class="icon-check"></span> 全选</button>
          <button type="submit" class="button border-red"><span class="icon-trash-o"></span> 批量删除</button>
        </li>
      </ul>
    </div>
    <table class="table table-hover text-center">
      <tr>
        <th width="120">ID</th>
        <th>用户</th>       
        <th>板块</th>
        <th>内容</th>
        <th>板块描述</th>
        <th width="25%">留言时间</th>

        <th>操作</th>       
      </tr>  
    <?php if(!empty($data)):?>  
      <?php foreach($data as $value):?>  
        <tr>
          <td><input type="checkbox" name="id[]" value="<?=$value['did'];?>" />
            <?=$value['did'];?></td>
          <td><?=$value['username'];?></td>
          <td><?=$value['classname'];?></td>
          <td><?=$value['content'];?></td>  
           <td><?=$value['description'];?></td>         
          <td><?=$value['create_time'];?></td>
          
          <td><div class="button-group"> <a class="button border-red" href="http://localhost/myblog/index.php?m=admin&c=details&a=detail_radio&did=<?=$value['did'];?>" onclick="return del(1)"><span class="icon-trash-o"></span> 删除</a> </div></td>
        </tr>
      <?php endforeach;?>
    <?php endif;?>
      <tr>
        <td colspan="8"><div class="pagelist"><a href="<?=$url['first'];?>">首页</a> <a href="<?=$url['pre'];?>">上一页</a><a href="<?=$url['next'];?>">下一页</a><a href="<?=$url['last'];?>">尾页</a> </div></td>
      </tr>
    </table>
  </div>
</form>
<script type="text/javascript">

function del(id){
	if(confirm("您确定要删除吗?")){
		
	}
}

$("#checkall").click(function(){ 
  $("input[name='id[]']").each(function(){
	  if (this.checked) {
		  this.checked = false;
	  }
	  else {
		  this.checked = true;
	  }
  });
})

function DelSelect(){
	var Checkbox=false;
	 $("input[name='id[]']").each(function(){
	  if (this.checked==true) {		
		Checkbox=true;	
	  }
	});
	if (Checkbox){
		var t=confirm("您确认要删除选中的内容吗？");
		if (t==false) return false; 		
	}
	else{
		alert("请选择您要删除的内容!");
		return false;
	}
}

</script>
</body></html>