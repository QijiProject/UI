<?php /* @var $this Controller */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta name="Keywords" content="<?=Helper::GetSiteTextInfo(3);?>" />
<meta name="Description" content="<?=Helper::GetSiteTextInfo(4);?>" />
<link type="image/x-icon" rel="shortcut icon" href="<?=$this->getCdn();?>/static/images/favicon.ico" />
<link rel="stylesheet" type="text/css" href="<?=$this->getCdn();?>/css/base.css" media="screen, projection">
<link rel="stylesheet" type="text/css" href="<?=$this->getCdn();?>/static/style/main.css" media="screen, projection">
<link rel="stylesheet" type="text/css" href="<?=$this->getCdn();?>/static/style/agency-style.css" media="screen, projection">
<link rel="stylesheet" type="text/css" href="<?=$this->getCdn();?>/util/messenger.css">
<script type="text/javascript" src="<?=$this->getCdn();?>/js/jquery/jquery.min.js"></script>
<title><?=Helper::GetSiteTextInfo(2);?> - <?php echo Yii::app()->controller->id; ?></title>
</head>
<body class="<?= isset($this->cls) ? $this->cls : '' ?>">
<!--<?= $this->themeLayout('topNotice') ?>-->
<?= $this->moduleLayout('header') ?>
<?= $content ?>
<?= $this->themeLayout('footer');?>
<script type="text/javascript" src="<?=$this->getCdn();?>/util/all.js"></script>
<script type="text/javascript" src="<?=$this->getCdn();?>/util/rsa.js"></script>
<script type="text/javascript" src="<?=$this->getCdn();?>/util/error.js"></script>
<script type="text/javascript" src="<?=$this->getCdn();?>/js/agent/agent.js"></script>
</body>
</html>