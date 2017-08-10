<!doctype html>
<html>
<head>
<meta charset="gb2312">
<title>心若向阳 无畏悲伤</title>
<meta name="Keywords" content="杨青个人博客网站,杨青网站，杨青博客,个人博客,原创博客,个人博客网站,独立个人博客模板下载,个人网站博客设计,html5 个人博客网站" >
<meta name="Description" content="个人原创博客，提供本站博客div+css源码分享，喜欢的朋友可以直接下载。如果需要整站asp代码，请到留言版留下你的邮箱..." >
<link href="public/index/css/index.css" rel="stylesheet">
<!--[if lt IE 9]>
<script src="js/modernizr.js"></script>
<![endif]-->
</head>
<body>
<header>
  <h1><a href="/">碧海青天夜夜心</a></h1>
  <?php foreach($blogs as $valu):?>
  <p><?=$valu['description'];?></p>
  <?php endforeach;?>

</header>
<!--nav begin-->
<div class="navswf">
<object id="customMenu" data="images/nav.swf" width="100" height="70" type="application/x-shockwave-flash"><param name="allowScriptAccess" value="always"><param name="allownetworking" value="all"><param name="allowFullScreen" value="true"><param name="wmode" value="transparent"><param name="menu" value="false"><param name="scale" value="noScale"><param name="salign" value="1">
</object>
<!-- 展示页面开始 -->
<div id="nav">

	<ul>
        <li><a href="http://localhost/myblog/index.php" >网站首页</a></li>

        <?php foreach($classname as $val):?>
        <li><a href="http://localhost/myblog/index.php?cid=<?=$val['cid'];?>"  title="<?=$val['classname'];?>"><?=$val['classname'];?></a></li>
        
        <?php endforeach;?>
        
      
       <li><a href="http://localhost/myblog/index.php?c=book&a=word" target="_blank" title="留言版">留言版</a></li>
	  
	</ul
</div>


</div>

<!-- 展示页面结束-->


<article>
<form action="http://localhost/myblog/index.php?c=list&a=book_insert" method="post" >
  
                      <div class="blog">
					  <?php foreach($shows as $v):?>
<!-- blog list begin-->
     <h2><a href=""><?=$v['title'];?></a></h2>
     <p class="datetime"><?=$v['create_time'];?></p>
     
     <ul class="content">
<p><?=$v['content'];?></p>

     </ul>....
  <?php endforeach;?>
    <!-- blog list end-->
	<div style="background-color:red;width:100%;height:10px;"></div>
  <?php if(!empty($data)):?>
  <?php foreach($data as $val):?>
	<p style="float:right; color:blue" ><--: <?=$val['username'];?></p>
	<div style="clear:both;"></div>
  <p style="float:right; color:#666; margin-right:20px;" ><--: <?=$val['create_time'];?></p>
	<div style="clear:both;"></div>
	<div style="clear:both;"></div>
  
	<p style="float:right; margin-right: 140px;color:red;"><?=$val['content'];?></p>
  <div style="clear:both;"></div>
  <div style="background-color:green;width:100%;height:10px;"></div>
	<?php endforeach;?>
  <?php endif;?>
                       </div>
<input type="hidden" name="cid" value="<?=$cid;?>"/>
  <input type="hidden" name="did" value="<?=$did;?>"/>

<div style="clear:both;"></div>

<div style="position:fixed;bottom:10px;left:1150px;">

	<textarea name="content" rows="10" cols="20"></textarea>
	<input type="submit"value="评论" >
</div>

<aside> 
<h2>博客分类</h2>
<ul>
   <?php foreach($classname as $val):?>
        <li><a href="http://localhost/myblog/index.php?cid=<?=$val['cid'];?>"  title="慢生活"><?=$val['classname'];?></a></li>
        
   <?php endforeach;?>
</ul>
<h2>近期文章</h2>
<ul>
<?php foreach($time as $sql):?>
  <li><a href="http://localhost/myblog/index.php?c=list&a=show&id=<?=$sql['did'];?>"><?=$sql['title'];?></a></li>
<?php endforeach;?>

  
</ul>

<h2>友情链接</h2>
<ul>
  <li><a href="http://www.baidu.com">狗蛋个人博客</a></li>
  <li><a href="http://www.baidu.com">百度</a></li>
  <li><a href="http://www.baidu.com">Google</a></li>
</ul>
<!-- Baidu Button BEGIN -->
<!-- <div id="bdshare" class="bdshare_t bds_tools_32 get-codes-bdshare share">
<a class="bds_tsina"></a>
<a class="bds_qzone"></a>
<a class="bds_tqq"></a>
<a class="bds_renren"></a>
<span class="bds_more"></span> -->
</form>
</div>
<script type="text/javascript" id="bdshare_js" data="type=tools&amp;uid=6574585" ></script>
<script type="text/javascript" id="bdshell_js"></script>
<script type="text/javascript">
document.getElementById("bdshell_js").src = "http://bdimg.share.baidu.com/static/js/shell_v2.js?cdnversion=" + Math.ceil(new Date()/3600000)
</script>
<!-- Baidu Button END -->
</aside>  
</article>
<div class="blank"></div>
<div id="copright"><a href="<?=$uri['first'];?>">首页</a><a href="" style="margin-left:20px;"></a><a href="<?=$uri['pre'];?>">上一页</a><a href="" style="margin-left:20px;"></a><a href="<?=$uri['next'];?>">下一页</a><a href="" style="margin-left:20px;"></a><a href="<?=$uri['last'];?>">尾页</a></div>
<script src="js/silder.js"></script>
</body>
</html>
