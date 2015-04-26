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
    <header>
        <a href="/"><img src="<?php echo $template_url;?>/images/logo.png" alt="<?php echo JText::_('TPL_WHITESQUARE_LOGO');?>"></a>
        <jdoc:include type="modules" name="search"/>
    </header>
    <nav class="main-navigation">
        <jdoc:include type="modules" name="menu"/>
    </nav>
    <?php if (!$is_home_page): ?>
        <div class="main-heading">
            <h1><?php echo $this->getTitle();?></h1>
        </div>
    <?php endif;?>
    <jdoc:include type="message"/>
    <?php if (!$is_home_page): ?>
        <aside>
            <nav class="aside-navigation">
                <jdoc:include type="modules" name="submenu"/>
            </nav>
            <h2 class="sidebar-heading"><?php echo JText::_('TPL_WHITESQUARE_OFFICES_TITLE');?></h2>
            <div class="map">
                <img src="/images/sample.png" width="230" height="180" alt="<?php echo JText::_('TPL_WHITESQUARE_OFFICES_TITLE');?>">
            </div>
        </aside>
    <?php endif;?>
    <jdoc:include type="component"/>
</div>
<footer>
    <div class="footer-content">
        <div class="twitter">
            <h3 class="footer-heading"><?php echo JText::_('TPL_WHITESQUARE_TWITTER_FEED_TITLE');?></h3>
            <time datetime="2012-10-23"><a href="#" class="twitter-time">23 oct</a></time>
            <p>In ultricies pellentesque massa a porta. Aliquam ipsum enim, hendrerit ut porta nec, ullamcorper et
                nulla. In eget mi dui, sit amet scelerisque nunc. Aenean aug</p>
        </div>
        <div class="sitemap">
            <h3 class="footer-heading"><?php echo JText::_('TPL_WHITESQUARE_SITEMAP_TITLE');?></h3>
            <div class="column first">
                <jdoc:include type="modules" name="sitemap-left"/>
            </div>
            <div class="column">
                <jdoc:include type="modules" name="sitemap-right"/>
            </div>
        </div>
        <div class="social">
            <h3 class="footer-heading"><?php echo JText::_('TPL_WHITESQUARE_SOCIAL_TITLE');?></h3>
            <a href="http://twitter.com/" class="social-icon twitter-icon"></a>
            <a href="http://facebook.com/" class="social-icon facebook-icon"></a>
            <a href="http://plus.google.com/" class="social-icon google-plus-icon"></a>
            <a href="http://vimeo.com/" class="social-icon-small vimeo-icon"></a>
            <a href="http://youtube.com/" class="social-icon-small youtube-icon"></a>
            <a href="http://flickr.com/" class="social-icon-small flickr-icon"></a>
            <a href="http://instagram.com/" class="social-icon-small instagram-icon"></a>
            <a href="/index.php?option=com_content&view=category&id=2&format=feed&type=rss"
               class="social-icon-small rss-icon"></a>
        </div>
        <div class="footer-logo">
            <a href="/"><img src="<?php echo $template_url;?>/images/footer-logo.png" alt="<?php echo JText::_('TPL_WHITESQUARE_LOGO');?>"></a>
            <p><?php echo JText::_('TPL_WHITESQUARE_COPYRIGHT');?></p>
        </div>
    </div>
</footer>
</body>
</html>