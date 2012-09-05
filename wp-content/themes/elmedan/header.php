<!doctype html>
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

	<title><?php bloginfo('name'); wp_title();?></title>
	<meta name="description" content="">
	<meta name="author" content="">
	<link rel="stylesheet/less" href="<?php bloginfo('stylesheet_url'); ?>" >
	<script src="<?php bloginfo('template_directory'); ?>/static/js/libs/less.min.js"></script>
    <?php if(is_single()): ?>
    <script> var page_type = "article"; </script>
    <? endif; ?>
    <script data-main="<?php bloginfo('template_directory'); ?>/static/js/main" src="<?php bloginfo('template_directory'); ?>/static/js/libs/require.js"></script>
    <?php wp_head(); ?>
</head>
<body>

<!--START HEADER-->
<div id="header-bar">
    <div class="container">
        <div class="row">
            <div class="span6">
                <div id="search-form">
                    <form >
			<input type="text" name="s" placeholder="بحث عن مقال " method ="get">
		    </form>
                </div>
                <div id="fb-connect"><img src="<?php bloginfo('template_directory'); ?>/static/css/images/facebook.png"/></div>
            </div>
            <div class="span6">
                <ul id="header-bar-menu">
                    <li><i class="home"></i> <a href="<?php get_home_url(); ?>">الرئيسية</a></li>
                    <li><i class="about"></i><a href="#">من نحن</a></li>
                    <li><i class="contact-us"></i><a href="#">إتصل بنا</a></li>
                </ul>
            </div>
        </div>
    </div>
</div>

<div id="header">
    
    <div class="container">
        
        <div class="row">
            <div id="header-content" class="span12">
                <div id="logo"><img src="http://placehold.it/260x90"/></div>
                <div id="ads-728">
                    <object height="90" width="728" id="adbn_swf_N" classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000"><param value="http://ads.yimg.com/ev/eu/any/pentaxrs1000728x90opt.swf" name="movie"><param value="opaque" name="wmode"><param value="true" name="loop"><param value="high" name="quality"><param value="never" name="allowScriptAccess"><param value="clickTAG=http%3A%2F%2Fuk.ard.yahoo.com%2FSIG%3D15udpi2fe%2FM%3D200127833.202031711.203310747.200000042%2FD%3Duksports%2FS%3D96492628%3AN%2FY%3DUKIE%2FEXP%3D1292762022%2FL%3DR7Zz1NkMCTs_ryIpTOU7lACmKWdI600N34YACz6_%2FB%3DWchLONkMAzk-%2FJ%3D1292754822755632%2FK%3DH5bkYmW8WCQ8iE9Wa2__eA%2FA%3D201142177%2FR%3D0%2Fid%3Dflash%2FSIG%3D113gbblb7%2F*http%3A%2F%2Fwww.pentax.co.uk%2Fchameleon&amp;targetTAG=_blank" name="flashvars"><embed height="90" width="728" allowscriptaccess="never" type="application/x-shockwave-flash" flashvars="clickTAG=http%3A%2F%2Fuk.ard.yahoo.com%2FSIG%3D15udpi2fe%2FM%3D200127833.202031711.203310747.200000042%2FD%3Duksports%2FS%3D96492628%3AN%2FY%3DUKIE%2FEXP%3D1292762022%2FL%3DR7Zz1NkMCTs_ryIpTOU7lACmKWdI600N34YACz6_%2FB%3DWchLONkMAzk-%2FJ%3D1292754822755632%2FK%3DH5bkYmW8WCQ8iE9Wa2__eA%2FA%3D201142177%2FR%3D0%2Fid%3Dflash%2FSIG%3D113gbblb7%2F*http%3A%2F%2Fwww.pentax.co.uk%2Fchameleon&amp;targetTAG=_blank" name="adbn_swf_N" quality="high" wmode="opaque" loop="true" src="http://ads.yimg.com/ev/eu/any/pentaxrs1000728x90opt.swf"/></object>
                </div>
            </div>
        </div>
        
        <div class="row">
            <div class="span12">
                <div id="header-menu">
                    <ul>
                        <li><a href="#">نتائج مباشرة</a></li>
                        <li><a href="#">المنتخب الوطني</a></li>
                        <li><a href="#">محترفينا</a></li>
                        <li><a href="#">البطولة المحترفة</a></li>
                        <li><a href="#">كرة العالمية</a></li>
                        <li><a href="#">حوارات</a></li>
                        <li><a href="#">صور</a></li>
                        <li><a href="#">فيديو</a></li>
                    </ul>
                </div>
            </div>
        </div>
        
    </div>
    
</div>
<!--END HEADER-->