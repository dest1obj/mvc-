<!DOCTYPE html>
<html lang="zh-cn">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <meta name="renderer" content="webkit">
    <title>网站信息</title>  
    <link rel="stylesheet" href="public/index/css/pintuer.css">
    <link rel="stylesheet" href="public/index/css/admin.css">
    <script src="public/index/js/jquery.js"></script>
    <script src="public/index/js/pintuer.js"></script>  
</head>
<body>
<?php foreach($data as $value):?>
<div class="panel admin-panel">
  <div class="panel-head"><strong><span class="icon-pencil-square-o"></span> 网站信息</strong></div>
  <div class="body-content">
    <form method="post" class="form-x" action="http://localhost/myblog/index.php?m=admin&c=admin&a=update_info">
      <div class="form-group">
        <div class="label">
          <label>Web Title：</label>
        </div>
        <div class="field">
          <input type="text" class="input" name="titlename" value="<?=$value['titlename'];?>" />
          <div class="tips"></div>
        </div>
      </div>
      
      <div class="form-group">
        <div class="label">
          <label>URLName：</label>
        </div>
        <div class="field">
          <input type="text" class="input" name="urlname" value="<?=$value['urlname'];?>" />
        </div>
      </div>
      <div class="form-group" style="display:none">
        <div class="label">
          <label></label>
        </div>
        <div class="field">
          <input type="text" class="input" name="" value="" />
          <div class="tips"></div>
        </div>
      </div>
      <div class="form-group">
        <div class="label">
          <label>URL address：</label>
        </div>
        <div class="field">
          <textarea class="input" name="url" style="height:80px"><?=$value['url'];?></textarea>
          <div class="tips"></div>
        </div>
      </div>
      <div class="form-group">
        <div class="label">
          <label>Description：</label>
        </div>
        <div class="field">
          <textarea class="input" name="file"><?=$value['file'];?></textarea>
          <div class="tips"></div>
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
<?php endforeach;?>
</body></html>