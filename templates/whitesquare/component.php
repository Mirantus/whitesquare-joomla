<?php
defined('_JEXEC') or die;
$app = JFactory::getApplication();
$doc = JFactory::getDocument();
$menu = $app->getMenu();
$lang = JFactory::getLanguage();

$template_url = $this->baseurl . '/templates/' . $this->template;
$doc->addStyleSheet($template_url . '/css/template.css');
$doc->addStyleSheet('http://fonts.googleapis.com/css?family=Oswald:400,300');

$is_home_page = $menu->getActive() == $menu->getDefault($lang->getTag());
?>

<!doctype html>
<html>
<head>
    <jdoc:include type="head"/>
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <!--[if lt IE 9]>
    <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
</head>
<body>

<div class="wrapper">
    <?php if (!$is_home_page): ?>
        <div class="main-heading">
            <h1><?php echo $this->getTitle();?></h1>
        </div>
    <?php endif;?>
    <jdoc:include type="component"/>
</div>
</body>
</html>