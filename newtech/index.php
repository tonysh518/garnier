﻿<?php
if (preg_match('/(up.browser|up.link|mmp|symbian|smartphone|midp|wap|phone|android)/i', strtolower($_SERVER['HTTP_USER_AGENT']))) {
    header("Location: m/index.html",true,303);
    die();
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <title>卡尼尔</title>
    <link href="css/layout.css" rel="stylesheet" type="text/css" />
</head>
<body id="">
    <!--  -->
    <div class="header cs-clear">
        <a class="logo" href="index.html"></a>
        <div class="nav">
            <a class="" href="index.html">首页<span></span></a>
            <a class="" href="#">PS产品<span></span></a>
            <a class="" href="#">PS真人秀<span></span></a>
            <a class="" href="#">我要上封面<span></span></a>
            <a class="active" href="#">产品科技<span></span></a>
            <a class="" href="#">TVC花絮<span></span></a>
        </div>
        <div class="share">
            <div class="share_box">
                <span class="share_tit1">一键分享</span>
                <a href="#" class="share_qzone"></a>
                <a href="#" class="share_tt"></a>
                <a href="#" class="share_weibo"></a>
                <a href="#" class="share_renren"></a>
                <span class="share_tit2">分享到微信</span>
                <a href="#" class="share_weixin"></a>
            </div>
            <div class="share_gz">
                <a href="#" class="gz_weibo"></a>
            </div>
        </div>
    </div>
    <!--  -->
    <div class="main">
        <!--  -->
        <div class="menu">
            <div class="menu_item menu_itemon" data-style="margin-right:-30px;" data-animate="margin-right:-10px" data-delay="500" data-time="600" data-easing="easeOutElastic"></div>
            <div class="menu_item" data-style="margin-right:-30px;" data-animate="margin-right:-10px" data-delay="600" data-time="600" data-easing="easeOutElastic"></div>
            <div class="menu_item" data-style="margin-right:-30px;" data-animate="margin-right:-10px" data-delay="700" data-time="600" data-easing="easeOutElastic"></div>
            <div class="menu_item" data-style="margin-right:-30px;" data-animate="margin-right:-10px" data-delay="800" data-time="600" data-easing="easeOutElastic"></div>
            <div class="menu_tit menu_tit1"></div>
        </div>

        <div class="nextIntor" data-style="opacity:0;" data-animate="opacity:1;" data-delay="4000" data-time="500" data-easing="easeOutQuart"></div>

        <div class="Intro Intro1" style="display:block;">
            <div class="bg bg1">
                <div class="bg_green" data-style="opacity:0;transform:rotate(0);" data-animate="opacity:1;transform:rotate(-28deg);" data-delay="1000" data-time="800" data-easing="easeOutQuart"
                     data-0="left:-55%;opacity:1;"
                     data-500="left:-150%;opacity:0;"></div>
                <!-- <div class="bg_red"></div> -->
            </div>
            <div class="Intromod">
                <div class="Intro1tit" data-style="opacity:0;left:-10%;" data-animate="opacity:1;left:50%;" data-delay="2200" data-time="500" data-easing="easeOutQuart"
                     data-0="left:50%;opacity:1;"
                     data-700="left:-50%;opacity:0;"></div>
                <div class="Intro1txt" data-style="opacity:0;left:-10%;" data-animate="opacity:1;left:50%;" data-delay="2400" data-time="500" data-easing="easeOutQuart"
                     data-0="left:50%;opacity:1;"
                     data-600="left:-50%;opacity:0;"></div>
                <div class="Intro1bg" data-style="opacity:0;top:100%;left:100%;" data-animate="opacity:1;top:50%;left:50%;" data-delay="1500" data-time="1500" data-easing="easeOutElastic"
                     data-0="top:50%;opacity:1;"
                     data-600="top:40%;opacity:0;"></div>
                <div class="Intro1pho" data-style="opacity:0;margin-top:-400px;" data-animate="opacity:1;margin-top:-250px;" data-delay="2000" data-time="800" data-easing="easeOutQuart"
                     data-0="top:50%;opacity:1;"
                     data-900="top:0%;opacity:0;"></div>
                <div class="Intro1tips" data-style="opacity:0;margin-top:260px;" data-animate="opacity:1;margin-top:160px;" data-delay="2200" data-time="800" data-easing="easeOutQuart"
                     data-0="top:50%;opacity:1;"
                     data-950="top:70%;opacity:0;"></div>
                <div class="Intro1new" data-style="opacity:0;" data-animate="opacity:1;" data-delay="2600" data-time="500" data-easing="easeOutQuart"
                     data-0="opacity:1;"
                     data-600="opacity:0;"></div>
            </div>
        </div>
        <!--  -->
        <!--  -->
        <div class="Intro Intro2">
            <div class="bg bg2">
                <div class="bg_green"
                     data-600="opacity:0;left:90%;transform:rotate(0deg);"
                     data-900="opacity:1;transform:rotate(-40deg);"
                     data-1300="opacity:1;"
                     data-1500="opacity:0;left:100%;"></div>
                <div class="bg_red"
                     data-400="opacity:0;transform:rotate(90deg);"
                     data-700="opacity:1;transform:rotate(-45deg);"
                     data-1300="opacity:1;left:-55%;"
                     data-1500="opacity:0;left:-100%;"></div>
            </div>
            <div class="Intromod">
                <div class="shade_y"
                     data-600="opacity:0;"
                     data-800="opacity:1;"
                     data-1300="opacity:1;"
                     data-1500="opacity:0;"></div>
                <div class="Intro2how"
                     data-600="left:0%;opacity:0;"
                     data-800="left:50%;opacity:1;"
                     data-1300="left:50%;opacity:1;"
                     data-1500="left:0%;opacity:0;"></div>
                <div class="Intro2howtxt"
                     data-650="left:0%;opacity:0;"
                     data-850="left:50%;opacity:1;"
                     data-1350="left:50%;opacity:1;"
                     data-1550="left:0%;opacity:0;"></div>
                <div class="Intro2lien"
                     data-650="left:0%;opacity:0;"
                     data-850="left:50%;opacity:1;"
                     data-1350="left:50%;opacity:1;"
                     data-1550="left:0%;opacity:0;"></div>
                <div class="Intro2when"
                     data-700="left:0%;opacity:0;"
                     data-900="left:50%;opacity:1;"
                     data-1400="left:50%;opacity:1;"
                     data-1600="left:0%;opacity:0;"></div>
                <div class="Intro2time1"
                     data-750="left:0%;opacity:0;"
                     data-950="left:50%;opacity:1;"
                     data-1450="left:50%;opacity:1;"
                     data-1650="left:0%;opacity:0;"></div>
                <div class="Intro2time2"
                     data-800="left:0%;opacity:0;"
                     data-1000="left:50%;opacity:1;"
                     data-1500="left:50%;opacity:1;"
                     data-1700="left:0%;opacity:0;"></div>
                <div class="Intro2bef"
                     data-800="top:60%;opacity:0;"
                     data-1000="top:50%;opacity:1;"
                     data-1500="top:50%;opacity:1;"
                     data-1700="top:20%;opacity:0;"></div>
            </div>
        </div>
        <!--  -->
        <div class="Intro Intro3">
            <div class="bg bg3">
                <div class="bg_green"
                     data-1200="opacity:0;left:85%;transform:rotate(-90deg);"
                     data-1600="opacity:1;transform:rotate(-40deg);"
                     data-2100="opacity:1;"
                     data-2300="opacity:0;left:100%;"></div>
                <div class="bg_red"
                     data-1200="opacity:0;transform:rotate(-90deg);"
                     data-1600="opacity:1;transform:rotate(33deg);"
                     data-2100="opacity:1;left:-55%;"
                     data-2300="opacity:0;left:-100%;"></div>
            </div>
            <div class="Intromod">
                <div class="shade_x"
                     data-1600="opacity:0;"
                     data-1800="opacity:1;"
                     data-2100="opacity:1;"
                     data-2400="opacity:0;"></div>
                <div class="IntroEffect"
                     data-1600="left:0%;opacity:0;"
                     data-1800="left:50%;opacity:1;"
                     data-2100="left:50%;opacity:1;"
                     data-2400="left:0%;opacity:0;"></div>
                <div class="Intro3Eff1"
                     data-1650="left:0%;opacity:0;"
                     data-1850="left:50%;opacity:1;"
                     data-2150="left:50%;opacity:1;"
                     data-2450="left:0%;opacity:0;"></div>
                <div class="Intro3one"
                     data-1700="left:80%;opacity:0;"
                     data-1900="left:50%;opacity:1;"
                     data-2200="opacity:1;"
                     data-2500="opacity:0;"></div>
                <div class="Intro3two"
                     data-1750="left:80%;opacity:0;"
                     data-1950="left:50%;opacity:1;"
                     data-2250="opacity:1;"
                     data-2550="opacity:0;"></div>
                <div class="Intro3thr"
                     data-1800="left:80%;opacity:0;"
                     data-2000="left:50%;opacity:1;"
                     data-2300="opacity:1;"
                     data-2600="opacity:0;"></div>
            </div>
        </div>
        <!--  -->
        <div class="Intro Intro4">
            <div class="bg bg4">
                <!-- <div class="bg_green"></div> -->
                <div class="bg_green"
                     data-2300="opacity:0;left:90%;transform:rotate(0deg);"
                     data-2600="opacity:1;transform:rotate(-40deg);"
                     data-3200="opacity:1;"
                     data-3500="opacity:0;left:100%;"></div>
                <div class="bg_red"
                     data-2300="opacity:0;transform:rotate(90deg);"
                     data-2600="opacity:1;transform:rotate(-45deg);"
                     data-3200="opacity:1;left:-55%;"
                     data-3500="opacity:0;left:-100%;"></div>
            </div>
            <div class="Intromod">
                <div class="shade_x"
                     data-2400="opacity:0;"
                     data-2600="opacity:1;"
                     data-3250="opacity:1;"
                     data-3450="opacity:0;"></div>
                <div class="IntroEffect"
                     data-2400="left:0%;opacity:0;"
                     data-2600="left:50%;opacity:1;"
                     data-3250="left:50%;opacity:1;"
                     data-3450="left:80%;opacity:0;"></div>
                <div class="Intro4Eff2"
                     data-2450="left:0%;opacity:0;"
                     data-2650="left:50%;opacity:1;"
                     data-3300="left:50%;opacity:1;"
                     data-3500="left:80%;opacity:0;"></div>
                <div class="Intro4txt"
                     data-2500="left:0%;opacity:0;"
                     data-2700="left:50%;opacity:1;"
                     data-3350="left:50%;opacity:1;"
                     data-3550="left:80%;opacity:0;"></div>
                <div class="Intro4pho"
                     data-2500="opacity:0;"
                     data-2700="opacity:1;"
                     data-3300="opacity:1;"
                     data-3500="opacity:0;"></div>
                <div class="Intro4pho2"
                     data-2700="opacity:0;"
                     data-2900="opacity:1;"
                     data-3300="opacity:1;"
                     data-3500="opacity:0;"></div>
                <div class="Intro4pho3"
                     data-2900="opacity:0;"
                     data-3100="opacity:1;"
                     data-3300="opacity:1;"
                     data-3500="opacity:0;"></div>
            </div>
        </div>
        <!--  -->
        <div class="Intro Intro5">
            <div class="bg bg5">
                <div class="bg_green"
                     data-3400="opacity:0;left:85%;transform:rotate(-90deg);"
                     data-3600="opacity:1;transform:rotate(-40deg);"
                     data-4500="opacity:1;"
                     data-4700="opacity:0;left:100%;"></div>
            </div>
            <div class="Intromod">
                <div class="shade_y"
                     data-3500="opacity:0;"
                     data-3700="opacity:1;"
                     data-4500="opacity:1;"
                     data-4700="opacity:0;"></div>
                <div class="shade_circle"
                     data-3500="opacity:0;"
                     data-3700="opacity:1;"
                     data-4500="opacity:1;"
                     data-4700="opacity:0;"></div>
                <div class="IntroEffect"
                     data-3500="left:0%;opacity:0;"
                     data-3700="left:50%;opacity:1;"
                     data-4500="left:50%;opacity:1;"
                     data-4700="left:0%;opacity:0;"></div>
                <div class="Intro5Eff3"
                     data-3550="left:0%;opacity:0;"
                     data-3750="left:50%;opacity:1;"
                     data-4550="left:50%;opacity:1;"
                     data-4750="left:0%;opacity:0;"></div>
                <div class="Intro5fenzi"
                     data-3600="left:0%;opacity:0;"
                     data-3800="left:50%;opacity:1;"
                     data-4600="left:50%;opacity:1;"
                     data-4800="left:0%;opacity:0;"></div>
                <div class="Intro5fenzi2"
                     data-3800="left:0%;opacity:0;"
                     data-3900="left:50%;opacity:1;"
                     data-4600="left:50%;opacity:1;"
                     data-4800="left:0%;opacity:0;"></div>
                <div class="Intro5txt"
                     data-3700="left:0%;opacity:0;"
                     data-3900="left:50%;opacity:1;"
                     data-4650="left:50%;opacity:1;"
                     data-4850="left:0%;opacity:0;"></div>
                <div class="Intro5pho1"
                     data-3800="opacity:0;"
                     data-4000="opacity:1;"
                     data-4500="opacity:1;"
                     data-4700="opacity:0;"></div>
                <div class="Intro5pho2"
                     data-3900="opacity:0;"
                     data-4100="opacity:1;"
                     data-4550="opacity:1;"
                     data-4750="opacity:0;"></div>
                <div class="Intro5pho3"
                     data-4000="opacity:0;"
                     data-4200="opacity:1;"
                     data-4600="opacity:1;"
                     data-4800="opacity:0;"></div>
            </div>
        </div>
        <!--  -->
        <div class="Intro Intro6">
            <div class="bg bg6">
                <div class="bg_red"
                     data-4900="opacity:0;transform:rotate(0deg);"
                     data-5100="opacity:1;transform:rotate(-40deg);"></div>
                <div class="bg_green"
                     data-4800="opacity:0;transform:rotate(-90deg);"
                     data-5000="opacity:1;transform:rotate(33deg);"></div>
            </div>
            <div class="Intro6mod cs-clear">
                <div class="Intro6wrap">
                    <div class="Intro6inner">
                        <div class="Intro6item"
                             data-5000="opacity:0;"
                             data-5200="opacity:1;">
                            <p class="Intro6Q">什么是PS蜜乳？<br/>它有何与众不同？</p>
                            <p class="Intro6A">PS蜜乳是新一代的美肌护肤品，具有隐藏肌肤瑕疵的功效，效果堪比Photoshop处理后而得名。经卡尼尔实验室多年研究发现，独特的光感美白反射因子能多角度反射光线，从而达到即刻美白隐瑕的效果；配以超细微矿物美白成分和维生素CG，隐瑕同时，更呵护肌肤。就现在，只需轻松一抹，卡尼尔PS蜜乳即刻还你无瑕健康美肌。</p>
                        </div>
                        <div class="Intro6item"
                             data-5050="opacity:0;"
                             data-5250="opacity:1;">
                            <p class="Intro6Q">BB霜不透气，时间久了皮肤就很干，甚至还会脱妆，PS蜜乳也会这样吗？</p>
                            <p class="Intro6A">不会。PS蜜乳首创“爆水”科技，一抹爆出无数颗小水珠，调节水油平衡，肌肤全天候水润不干燥；质地粉润的蜜乳更富含矿物美白成分，高度亲肤，平滑肤质，不易脱妆。</p>
                        </div>
                        <div class="Intro6item"
                             data-5100="opacity:0;"
                             data-5300="opacity:1;">
                            <p class="Intro6Q">一般底妆产品都很容易堵塞毛孔，PS蜜乳会吗？</p>
                            <p class="Intro6A">不会。PS蜜乳的超微服帖科技，可以紧密贴合肌肤，质地细腻极易推开，绝对不会堵塞毛孔，用洁面乳即刻彻底清洁肌肤。</p>
                        </div>
                        <div class="Intro6item "
                             data-5150="opacity:0;"
                             data-5350="opacity:1;">
                            <p class="Intro6Q">PS蜜乳需要用卸妆油清洁吗？</p>
                            <p class="Intro6A">不需要。PS蜜乳是一款革命性的护肤产品，它的水润天然配方，只需洁面乳即可彻底清洁。</p>
                        </div>
                    </div>
                </div>
                <div class="Intro6arrow Intro6next "
                     data-5000="opacity:0;"
                     data-5200="opacity:1;"></div>
                <div class="Intro6arrow Intro6prev "
                     data-5000="opacity:0;"
                     data-5200="opacity:1;"></div>
            </div>
        </div>
        <!--  -->
    </div>
    <!--  -->
    <div class="footer cs-clear">
        <div class="ft_phone">卡尼尔客户关怀中心 400-821-5068</div>
        <div class="ft_copyright">隐私条款 © GARNIER 2011 <span>沪ICP备09067306号</span></div>
    </div>
<!--  -->
<!--IE6透明判断-->
<!--[if IE 6]>
    <script src="js/DD_belatedPNG.js"></script>
    <script>
        DD_belatedPNG.fix('*');
        document.execCommand("BackgroundImageCache", false, true);
    </script>

    <link href="css/layoutIE.css" rel="stylesheet" type="text/css" />
<![endif]-->

<!--[if (IE 6)|(IE 7)|(IE 8)]>
    <link href="css/layoutIE.css" rel="stylesheet" type="text/css" />
<![endif]-->
<!--  -->

<script src="../js/modernizr-2.5.3.min.js"></script>
<script src="../js/jquery-1.8.3.min.js"></script>
<script src="../js/skrollr.min.js"></script>
<script src="../js/jquery.easing.1.3.js"></script>
<script src="./js/jquery.bxslider.js"></script>
<script src="./js/jquery.transform2d.js"></script>
<script src="./js/main.js"></script>

<script>
    $(function(){
        $('.Intro').height($(window).height())
    })
</script>
</body>
</html>