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
<div class="panel admin-panel">
  <div class="panel-head"><strong class="icon-reorder"> 内容列表</strong></div>
  <div class="padding border-bottom">
    <button type="button" class="button border-yellow" onclick="window.location.href='#add'"><span class="icon-plus-square-o"></span> 添加板块</button>
  </div>
  <table class="table table-hover text-center">
    <tr>
      <th width="5%">ID</th>
      <th width="15%">板块名称</th>
      <th width="10%">板块内容</th>
      <th width="10%">操作</th>
    </tr>
    <?php foreach($data as $value):?>
    <tr>
      <td><?=$value['cid'];?></td>
      <td><?=$value['classname'];?></td>
      <td><?=$value['description'];?></td>
      <td><div class="button-group"> <a class="button border-red" href="http://localhost/myblog/index.php?m=admin&c=blog&a=del_cate&id=<?=$value['cid'];?>" onclick="return del(1,2)"><span class="icon-trash-o"></span> 删除</a> </div></td>
    </tr>
  <?php endforeach;?>
  </table>
</div>
<script type="text/javascript">
function del(id,mid){
	if(confirm("您确定要删除吗?")){			
		
	}
}
</script>
<div class="panel admin-panel margin-top">
  <div class="panel-head" id="add"><strong><span class="icon-pencil-square-o"></span>添加内容</strong></div>
  <div class="body-content">
    <form method="post" class="form-x" action="http://localhost/myblog/index.php?m=admin&c=blog&a=insert_plate">
     
      <div class="form-group">
        <div class="label">
          <label>分类标题：</label>
        </div>
        <div class="field">
          <input type="text" class="input w50" name="classname" />
          <div class="tips"></div>
        </div>
      </div>
      
      <div class="form-group">
        <div class="label">
          <label>板块描述</label>
        </div>
        <div class="field">
          <input type="text" class="input" name="description" />
        </div>
      </div>
     
      
      <div class="form-group">
        <div class="label">
          <label></label>
        </div>
        <div class="field">
          <button class="button bg-main icon-check-square-o" type="submit"> 提交</button>
        </div>
      </div>
    </form>
  </div>
</div>
</body>
</html>