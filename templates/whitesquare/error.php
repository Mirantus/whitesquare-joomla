<?php
defined('_JEXEC') or die;
$template_url = $this->baseurl . '/templates/' . $this->template;
?>

<!doctype html>
<html>
<head>
	<title><?php echo $this->error->getCode(); ?> <?php echo $this->error->getMessage(); ?></title>
	<link rel="stylesheet" href="<?php echo $template_url; ?>/css/template.css" type="text/css"/>
	<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Oswald:400,300" type="text/css"/>
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <!--[if lt IE 9]>
    <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
</head>
<body>

<div class="wrapper">
    <header>
        <a href="/"><img src="<?php echo $template_url;?>/images/logo.png" alt="<?php echo JText::_('TPL_WHITESQUARE_LOGO');?>"></a>
    </header>	
	<div class="main-heading">
		<h1><?php echo JText::_('TPL_WHITESQUARE_ERROR');?></h1>
	</div>
    <?php echo $this->error->getCode(); ?> <?php echo $this->error->getMessage(); ?>
</div>
</body>
</html>