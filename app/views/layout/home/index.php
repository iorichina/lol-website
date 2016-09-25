<!doctype html>
<html>
<head>
<title><?php echo empty($title)?'':$title.' - ';?>英雄联盟</title>
<link rel="stylesheet" href="<?php echo Utils::assetsUrl(array('/project/home/lol-player/source/css/'=>array('lol-kit.css', 'initial-announce.css')));?>"/>
<!-- source: http://lol.qq.com/act/a20140617rift/index.shtml -->
<!-- 设计：jasonshuai | smallniding | 创建：20140516 | 团队博客：http://tgideas.qq.com -->
<!-- extended -->
<link rel="stylesheet" href="<?php echo Utils::assetsUrl(array('project/home'=>array('home.0.0.1.css','lol-player/wrapper.css') ) );?>&b"/>
<style>
.nav a {
    color: #456789;
    font-size: 38px;
    line-height: 72px;
    text-decoration: none;
    text-indent: 0;
    background-image: none;
}
.nav .nav-big {
    width: 370px;
    margin-right: 225px;
}
</style>
</head>
<body>
<!--[if lt IE 10]>
<p class="chromeframe">Please <a href="http://windows.microsoft.com/">Update your IE explorer</a>, or download<a href="http://www.google.com/chromeframe/?redirect=true">Google Chrome</a>、<a href="http://www.google.com/chromeframe/?redirect=true">Firefox</a> for better experience!</p>
<![endif]-->
<div id="header" class="header">
    <div class="header-inner layout">
        <a class="logo" href="/" target="_blank" title=""></a>
        <div class="nav ">
            <a class="nav1 nav-big current" href="http://na.leagueoflegends.com/en/" title="">North America</a>
            <a class="nav4" href="http://lol.qq.com/" title="">国服官网</a>
            <a class="nav3" href="/default/champions" title="">返回</a>
        </div>
    </div>
</div>
<!--视差滚动元素集 S-->
<div class="parallax-wrapper">
    <div id="scrolling">
        <div class="fg fg-top-left" data-stellar-ratio="1.4"></div>
        <div class="fg fg-top-right" data-stellar-ratio="1.4"></div>
        <div class="fg fg-mid-left" data-stellar-ratio="1.6"></div>
        <div class="fg fg-mid-right" data-stellar-ratio="1.6"></div>
        <?php if(isset($showHtml['fg-bot'])) {?>
        <div class="fg fg-bot-left" data-stellar-ratio="1.6"></div>
        <div class="fg fg-bot-right" data-stellar-ratio="1.6"></div>
        <?php }?>
        <div class="fg fg-bottom">
            <video class="bot-art-animated" id="bot-left-video" autoplay="autoplay" loop>
                <source src="<?php echo Utils::assetsUrl();?>/project/home/lol-player/source/sru-particles-animation-bot-left.webm"   type='video/webm'/>
                <source src="<?php echo Utils::assetsUrl();?>/project/home/lol-player/source/sru-particles-animation-bot-left.mp4" type='video/mp4' />
            </video>
            <?php if(isset($showHtml['fg-bot'])) {?>
            <video class="bot-art-animated" id="bot-right-video" autoplay="autoplay" loop>
                <source src="<?php echo Utils::assetsUrl();?>/project/home/lol-player/source/sru-particles-animation-bot-right.webm"  type='video/webm' /><source src="<?php echo Utils::assetsUrl();?>/project/home/lol-player/source/sru-particles-animation-bot-right.mp4" type='video/mp4' />
            </video>
            <?php }?>
        </div>
    </div>
</div>
<!--视差滚动元素集 E-->
<!--页面UI背景元素集 S-->
<div class="backdrop" id="backdrop">
    <div class="vingette"></div>
    <video class="top-art-animated" id="top-art-animated" autoplay="autoplay" loop>
        <source src="<?php echo Utils::assetsUrl();?>/project/home/lol-player/source/top-art-animated.webm" type='video/webm' />
        <source src="<?php echo Utils::assetsUrl();?>/project/home/lol-player/source/top-art-animated.mp4" type='video/mp4'/>
    </video>
    <div class="middle-bg"></div>
</div>
<!--页面UI背景元素集 E-->
<!--头部标题 S-->
<div id="breadcrumbs" class="page-title-wrap layout">
    <h1 class="page-title"><!-- 召唤师峡谷 全面升级 --></h1>
</div>
<!--头部标题 E-->
<!--页面主区域 S-->
<div class="section-wrapper section-wrapper-primary navigation-frame">
    <div class="section-wrapper-content">
        <div class="section-wrapper-outer">
            <div class="section-wrapper-content-wrapper the-feed">
                <div class="section-wrapper-inner">
                    <!--内容1 S-->
                    <div id="opening hide">
                        <!-- <div class="gs-container default-2-3 default-prefix-1-6 default-suffix-1-6 opening">
                            <p class="highlighted">
                                作为我们致力于不断改进游戏的一部分，我们一直在忙于对召唤师峡谷进行升级。
                            </p>
                        </div> -->
                    </div>
                    <!-- <div id="intro" class="hide">
                        <div class="gs-container default-2-3 default-prefix-1-6 default-suffix-1-6 intro">
                            <p>
                               和某些玩家猜到的一样，我们对召唤师峡谷进行的升级工作已经有一段时间了。这次的努力有很大一部分是因为我们对玩家承诺过，要持续不断地改进英雄联盟。我们的精力主要集中于：在保存召唤师峡谷的精华的同时，让地图对游戏体验的传达方式产生进化。
                            </p>
                            <p>
                                鉴于召唤师峡谷对英雄联盟的重要性，这张地图的基本构造仍然未被触碰。可用闪现穿过的墙体，防御塔的射程，每条战线的规模，围绕草丛的互动，还有守卫（眼）的放置点，都和目前的地图一模一样。这么做的目的是，让瞬息万变的英雄联盟保持原貌，同时通过额外的明晰度来改进游戏体验。
                            </p>
                        </div>
                    </div> -->
                    <!--内容1 E-->
                    <!--游戏玩法 S-->
                    <!-- <div id="gameplay" class="hide">
                        <div class="accent"></div>
                        <div class="gs-container default-2-col default-prefix-1-12 default-suffix-1-12">
                            <div></div>
                            <div>
                                <h3>游戏玩法</h3>
                                <p class="highlighted">
                                    英雄和技能应该跃然于峡谷之上，为玩家们提供足够的信息，来让他们做出聪明的举动。
                                </p>
                            </div>
                        </div>
                    </div> -->
                    <!-- <div id="gameplay-text" class="hide">
                        <div class="gs-container default-2-3 default-prefix-1-6 default-suffix-1-6 gameplay">
                            <p>
                                清晰度的意思是，新版地图会更好地将玩家的眼球吸引到目前最为重要的信息上。当战斗爆发时，地图的布景应该成为背景，好让粒子效果和英雄能够弹到屏幕上，并将玩家做出正确决定所必须的关键信息推送给玩家。
                            </p>
                            <div class="panzoom-parent">
                                <img class="panzoom" src="<?php echo Utils::assetsUrl();?>/project/home/lol-player/source/gameplay-screenshot.jpg" style=""/>
                            </div>
                            <div class="button-gradient">
                                <div class="buttons">
                                    <button class="zoom-out">-</button>
                                    <input type="range" class="zoom-range" id="rangeinput">
                                    <button class="zoom-in">+</button>
                                </div>
                            </div>
                        </div>
                    </div> -->
                    <!--游戏玩法 E-->
                    <!--内聚力 S-->
                    <!-- <div id="clarity" class="hide">
                        <div class="accent"></div>
                        <div class="gs-container default-2-col default-prefix-1-6 default-suffix-1-6">
                            <div>
                                <h3>内聚力</h3>
                                <p class="highlighted">
                                    峡谷的每个细节，从地形的颜色到怪物的动作，都应该清楚地显示出“发生了什么”和“当前最重要的是什么”。
                                </p>
                            </div>
                            <div>
                            </div>
                        </div>
                    </div> -->
                    <!-- <div id="clarity-text" class="hide">
                        <div class="gs-container default-2-3 default-prefix-1-6 default-suffix-1-6 clarity">
                            <div class="gs-container">
                                <div class="default-1-3"><img src="<?php echo Utils::assetsUrl();?>/project/home/lol-player/source/clarity-key.jpg" /></div>
                                <div class="default-2-3">
                                    <p>
                                        召唤师峡谷应该帮助玩家和观众们快速确定所在的位置。地图的西（左）半区看上去因纳什男爵的出现而遭受过破坏，而东（右）半区的感觉比较远古和繁茂。还有，在每个象限各自的BUFF怪旁边，给野区的每个地方弄了一些体贴的地标和微妙的颜色特征。
                                    </p>
                                </div>
                            </div>
                            <div class="screen-container">
                                <img src="<?php echo Utils::assetsUrl();?>/project/home/lol-player/source/empty.gif" width="658" height="431" border="0" usemap="#location-map" id="emptyimage" />
                                <div class="num_1"></div>
                                <div class="num_2"></div>
                                <div class="num_3"></div>
                                <div class="num_4"></div>
                                <div id="overlayq1"></div>
                                <div id="overlayq2"></div>
                                <div id="overlayq3"></div>
                                <div id="overlayq4"></div>
                                <img id="Image-Maps-Com-image-maps-2014-06-12-151356" src="<?php echo Utils::assetsUrl();?>/project/home/lol-player/source/quad-screenshot.jpg" border="0" width="638" height="431" orgWidth="658" orgHeight="431" />
                                <map name="location-map" id="location-map">
                                    <area id="q1" class="lightbox cboxElement" href="<?php echo Utils::assetsUrl();?>/project/home/lol-player/source/ss_jungle_1.jpg" shape="poly" coords="325,197,646,0,7,0" shape="poly" coords="13,0,329,206,646,0" style="outline:none;"/>
                                    <area id="q2" class="lightbox cboxElement" href="<?php echo Utils::assetsUrl();?>/project/home/lol-player/source/ss_jungle_2.jpg" shape="poly" coords="335,202,652,4,653,401" shape="poly" coords="340,214,656,8,656,423" style="outline:none;"/>
                                    <area id="q3" class="lightbox cboxElement" href="<?php echo Utils::assetsUrl();?>/project/home/lol-player/source/ss_jungle_3.jpg" shape="poly" coords="325,207,646,404,7,403" shape="poly" coords="327,224,644,431,13,431" style="outline:none;"/>
                                    <area id="q4" class="lightbox cboxElement" href="<?php echo Utils::assetsUrl();?>/project/home/lol-player/source/ss_jungle_4.jpg" shape="poly" coords="320,202,3,5,1,398" shape="poly" coords="313,215,3,9,2,424" style="outline:none;"/>
                                </map>
                            </div>
                            <map name="screenmap" id="screenmap">
                                <area shape="rect" coords="653,403,655,405" alt="Image Map" style="outline:none;" title="Image Map"/>
                                <area  alt="" title="" class="lightbox cboxElement" href="<?php echo Utils::assetsUrl();?>/project/home/lol-player/source/ss_jungle_1.jpg" shape="poly" coords="325,197,646,0,7,0" style="outline:none;" target="_self" onclick="console.log('top');"    />
                                <area  alt="" title="" class="lightbox cboxElement" href="<?php echo Utils::assetsUrl();?>/project/home/lol-player/source/ss_jungle_2.jpg" shape="poly" coords="335,202,652,4,653,401" style="outline:none;" target="_self" onclick="console.log('right');"    />
                                <area  alt="" title="" class="lightbox cboxElement" href="i<?php echo Utils::assetsUrl();?>/project/home/lol-player/source/ss_jungle_3.jpg" shape="poly" coords="325,207,646,404,7,403" style="outline:none;" target="_self" onclick="console.log('bottom');"    />
                                <area  alt="" title="" class="lightbox cboxElement" href="<?php echo Utils::assetsUrl();?>/project/home/lol-player/source/ss_jungle_4.jpg" shape="poly" coords="320,202,3,5,1,398" style="outline:none;" target="_self" onclick="console.log('left')"    />
                            </map>
                            <p>说到野区，有一批全新的野怪在召唤师峡谷安家，它们的动作更能反应它们各自的个性。例如，石甲虫（取代了双石像）的岩石表层，看起来更像是吸收伤害的小型坦克——而且它们看上去就弱于笨重的苍蓝雕纹魔像。</p>
                        </div>
                    </div> -->
                    <!--内聚力 E-->
                    <!--了解更多 S-->
                    <?php /*<div id="feedback">
                        <div class="accent"></div>

<!-- <div class="gs-container default-2-3 default-prefix-1-6 default-suffix-1-6 opening accent hide" style="margin-left: inherit; background: none;">
    <p class="highlighted hide">
        作为我们致力于不断改进游戏的一部分，我们一直在忙于对召唤师峡谷进行升级。
    </p>
</div> -->

                        <div class="gs-container default-2-3 default-prefix-1-6 default-suffix-1-6 feedback">
                            <h3><?php echo  Lang::get('home.lol.search.title'); ?></h3>
                            <p class="highlighted">
                                <?php echo  Lang::get('home.lol.search.fields.name'); ?>: <input type="text" id="name" class="summoners-name">
                            </p>
                            <a href="<?php echo URL::action('Api\\Search\\SummonerController@postIndex'); ?>" data-submit="search" class="discuss-button"><?php echo  Lang::get('home.lol.search.btn.submit'); ?></a>
                            <div class="section-wrapper-bottom bottom-wrap-overlay"></div>
                        </div>
                    </div>*/?>
                    <!--了解更多 E-->


                    <?php echo $content;?>
                </div>
            </div>
        </div>
    </div>
    <!--<div class="section-wrapper-bottom"></div>-->
</div>
<!--页面主区域 E-->

<script src="<?php echo Utils::assetsUrl(array(
    '/js/jquery/jquery-1.9.0.min.js', 
    '/project/home/lol-player/source/js/'=>array(
        'riot-all.js', 'riot-kit-all.js', 'vendors.min.js'
    ), 
    '/js/main/main.0.0.1.js', 
    '/project/home/lol-player/action.js' 
    ) );?>&ad"></script>
<script>
    var SmoothScroll = (function (){
        var $window = $(window),
            scrollTime = .7,
            scrollDistance = 170;
        return {
            ready: function () {
                $window.on("mousewheel DOMMouseScroll", function(event){
                    event.preventDefault();

                    var delta = event.originalEvent.wheelDelta/120 || -event.originalEvent.detail/3;
                    var scrollTop = $window.scrollTop();
                    var finalScroll = scrollTop - parseInt(delta*scrollDistance);

                    TweenMax.to($window, scrollTime, {
                        scrollTo : { y: finalScroll, autoKill:true },
                        ease: Power1.easeOut,
                        overwrite: 5
                    });
                });

            }
        };
    }());
    var Overview = (function () {
        return {
            ready: function () {
                $.stellar({
                    horizontalScrolling: false,
                    verticalOffset: 150,
                    hideDistantElements: false
                });
                var $section = $('#gameplay-text');
                $section.find('.panzoom').panzoom({
                    $zoomIn: $section.find(".zoom-in"),
                    $zoomOut: $section.find(".zoom-out"),
                    $zoomRange: $section.find(".zoom-range"),
                    $reset: $section.find(".reset"),
                    increment: 0.1,
                    minScale: 1,
                    maxScale: 2.5,
                    startTransform: "scale(0)",
                    contain: 'invert'
                }).panzoom('zoom');

                if($('#location-map')) {
                    $('#location-map area').each(function() {
                        var id = $(this).attr('id');
                        $(this).mouseover(function() {
                            $('#overlay'+id).css('opacity','.4');

                        });

                        $(this).mouseout(function() {
                            var id = $(this).attr('id');
                            $('#overlay'+id).css('opacity','0');
                        });

                    });
                }

            },
            load: function () {
                document.getElementById('backdrop').style.opacity="1";
                document.body.style.background="#2e4042";
            }
        };
    }());

    (function($){
        $(document).ready(function(){
            SmoothScroll.ready();
            Overview.ready();
        });
        $(window).load(Overview.load);

        if (typeof jQuery_loaded != 'undefined') {
            for (var i = jQuery_loaded.length - 1; i >= 0; i--) {
                if (typeof(jQuery_loaded[i]) === 'function') {
                    jQuery_loaded[i]();
                }else if (typeof(jQuery_loaded[i]) === 'object') {
                    var obj = jQuery_loaded[i];
                    if (!obj.function) {
                        continue;
                    };
                    obj.args= obj.args || [];
                    obj.function.apply(obj.function, obj.args);
                };
            };
        };
    }) (jQuery);
</script>
</body>
</html>