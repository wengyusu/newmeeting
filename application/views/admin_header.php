<!DOCTYPE html>
<html>
<head>
		<meta charset="utf-8">
	 <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="http://localhost/newmeeting/css/bootstrap.min.css" media="screen">
	<script src="http://localhost/newmeeting/js/jquery.min.js"></script>
	<script src="http://localhost/newmeeting/js/bootstrap.min.js" charset="UTF-8"></script>
	
<<<<<<< HEAD
	<style>
	.container {
		margin-top:5%;
		}
	.leftContent {float:left;}
	</style>
=======
/*	<style>
	.container {margin-top:10%;}
	.leftContent {float:left;}
	</style>*/
>>>>>>> fa340523b5c99084dc38ac6e5372964666abb82f
	<title>签到系统后台管理系统</title>
	<link rel="stylesheet" type="text/css" href="http://localhost/newmeeting/css/admin.css">
</head>
<?php $this->load->helper('url'); ?>
<body>
	<div class="heading">
	<span><?php echo $_SESSION['username'];?></span>
	<span><?php echo "&nbsp;&nbsp;&nbsp;&nbsp;上次登录IP：$_SESSION[ip]"; ?></span>
	<span><?php echo "&nbsp;&nbsp;&nbsp;&nbsp;上次登录时间："; ?></span>
	<span><?php echo date('Y-m-d H:i:s',$_SESSION['time']); ?></span>
	</br>
		<img class="logo" src="http://localhost/newmeeting/img/logo.gif">
<<<<<<< HEAD

		<ul class="fun nav nav-tabs">
<?php  if ($_SESSION['auth']==='0'):  ?>
=======
		<ul class="fun nav nav-tabs">
>>>>>>> fa340523b5c99084dc38ac6e5372964666abb82f
			<li role="presentation"><a href="<?php echo site_url('admin/schooladd'); ?>">新增与会单位</a></li>
			<li role="presentation"><a href="<?php echo site_url('admin/joineradd'); ?>">新增与会人员</a></li>
			<li role="presentation"><a href="<?php echo site_url('admin/alter'); ?>">开启/关闭网站</a></li>
			<li role="presentation"><a href="<?php echo site_url('admin/upload'); ?>">导入外部Excel数据</a></li>
			<li role="presentation"><a href="<?php echo site_url('admin/export'); ?>">导出签到数据</a></li>
			<li role="presentation"><a href="<?php echo site_url('admin/clear'); ?>">清空签到数据</a></li>
<<<<<<< HEAD
<?php endif; ?>
			<a class="btn btn-default" href="<?php echo site_url('admin/logout'); ?>">退出</a>

		</ul>

	</div>

=======
			<a class="btn btn-default" href="<?php echo site_url('admin/logout'); ?>">退出</a>
		</ul>
			
	</div>
>>>>>>> fa340523b5c99084dc38ac6e5372964666abb82f
	<div class="leftContent">
		<ul class="nav nav-pills nav-stacked">
			<li role="presentation" class="contentManu">内容管理</li>
			<li role="presentation"><a href="<?php echo site_url('admin/settime'); ?>">设置会议时间</a></li>
<<<<<<< HEAD
			<li role="presentation"><a href="<?php echo site_url('admin/meetview'); ?>">签到情况预览<span class="badge"><?=$_SESSION['all']?></span></a></li>
			<li role="presentation"><a href="<?php echo site_url('admin/doview/1'); ?>">查看已签到<span class="badge"><?=$_SESSION['yiqian']?></span></a></li>
			<li role="presentation"><a href="<?php echo site_url('admin/doview/0'); ?>">查看未签到<span class="badge"><?=$_SESSION['weiqian']?></span></a></li>
			
		</ul>


		<ul class="nav nav-pills nav-stacked">
<?php if ($_SESSION['auth']==='0'):  ?>
=======
			<li role="presentation"><a href="<?php echo site_url('admin/meetview'); ?>">签到情况预览</a></li>
			<li role="presentation"><a href="<?php echo site_url('admin/doview/1'); ?>">查看已签到</a></li>
			<li role="presentation"><a href="<?php echo site_url('admin/doview/0'); ?>">查看未签到</a></li>
			
		</ul>
		<ul class="nav nav-pills nav-stacked">
>>>>>>> fa340523b5c99084dc38ac6e5372964666abb82f
			<li role="presentation" class="contentManu">权限管理</li>
			<li role="presentation" class="contentManu"><a href="<?php echo site_url('admin/preadd/0'); ?>">新增发布人员</a></li>
			<li role="presentation" class="contentManu"><a href="<?php echo site_url('admin/preadd/2'); ?>">新增查看人员</a></li>
			<li role="presentation" class="contentManu"><a href="<?php echo site_url('admin/showuser'); ?>">查看用户</a></li>
			<li role="presentation" class="contentManu"><a href="<?php echo site_url('admin/change'); ?>">修改用户密码</a></li>
<<<<<<< HEAD
<?php endif; ?>		
</ul>

=======
		</ul>
>>>>>>> fa340523b5c99084dc38ac6e5372964666abb82f
	</div>




