<style>
.fg.fg-mid-right {
    height: 1238px;
}
.fg.fg-mid-left {
    height: 836px;
}
.waiting-results {
    padding: 20px 100px;
}
.champion-grid li div .content-border a .img, .champion-grid li div .content-border a img {
  height: 81px;
  max-width: none;
  width: 81px;
}
.content-border {
  background-color: rgba(0, 0, 0, 0.1);
  border-color: rgba(84, 84, 84, 0.3) rgba(255, 255, 255, 0.6) rgba(255, 255, 255, 0.6) rgba(84, 84, 84, 0.3);
  border-left: 1px solid rgba(84, 84, 84, 0.3);
  border-style: solid;
  border-width: 1px;
  box-sizing: border-box;
  margin-top: 20px;
  padding: 4px;
}
span.content-border {
  display: inline-block;
  max-width: 100%;
  width: auto;
}
.champion-grid div {
    background-color: rgba(239, 239, 239, 0.1);
}
#intro {
    background-repeat: repeat-y;
}
</style>
<div id="opening">
    <div class="gs-container default-2-3 default-prefix-1-6 default-suffix-1-6 opening">
        <p class="highlighted">
            从峡谷中召唤您的英雄
        </p>
    </div>
</div>

<div id="intro">
    <?php /*<div class="gs-container default-2-3 default-prefix-1-6 default-suffix-1-6 intro">
        <p>
           和某些玩家猜到的一样，我们对召唤师峡谷进行的升级工作已经有一段时间了。这次的努力有很大一部分是因为我们对玩家承诺过，要持续不断地改进英雄联盟。我们的精力主要集中于：在保存召唤师峡谷的精华的同时，让地图对游戏体验的传达方式产生进化。
        </p>
        <p>
            鉴于召唤师峡谷对英雄联盟的重要性，这张地图的基本构造仍然未被触碰。可用闪现穿过的墙体，防御塔的射程，每条战线的规模，围绕草丛的互动，还有守卫（眼）的放置点，都和目前的地图一模一样。这么做的目的是，让瞬息万变的英雄联盟保持原貌，同时通过额外的明晰度来改进游戏体验。
        </p>
    </div>*/?>
    <div class="content-border">
        <div id="champion-grid-content">
            <div data-control="cont4" class=" rg-box-container rg-display-Riot.champions.GridView">
                <ul class="champion-grid grid-list gs-container gs-no-gutter default-7-col content-center">
                    <!-- <li id="champion-grid-aatrox">
                        <div>
                            <span class="content-border">
                                <a href="aatrox/">
                                    <img style="display: inline;" class="img" src="//ddragon.leagueoflegends.com/cdn/4.14.2/img/champion/Aatrox.png"
                                    data-original="//ddragon.leagueoflegends.com/cdn/4.14.2/img/champion/Aatrox.png">
                                </a>
                            </span>
                            <div class="champ-name">
                                <a href="aatrox/">
                                    Aatrox
                                </a>
                            </div>
                        </div>
                    </li> -->
                </ul>
                <div class="wait-stone waiting-results">
                    please waiting while data loading ...
                </div>
                <div style="display: none;" class="white-stone no-results">
                    <div class="white-stone-content">
                        No champions match your criteria.
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
var jQuery_loaded = jQuery_loaded || [];
jQuery_loaded.push({
    "function": function() {
        $.ajax({
            "url": "/fast-api/champion-list",
            "dataType": "json",
            "success": function(json) {
                if (!json || typeof(json) !=='object') {
                    $(".no-results").show();
                };
                $(".no-results").hide();
                var html = "";
                for (var p in json) {
                    var name = json[p],
                        img_ = "<?php echo Utils::assetsUrl('/img/lol/');?>/place-holder.gif",
                        img_ = 
                        img  = "<?php echo Utils::assetsUrl('/img/lol/champions/en/');?>/"+name+".png";
                    html+= '\
                    <li id="champion-grid-'+name+'">\
                        <div>\
                            <span class="content-border">\
                                <a href="?'+name+'">\
                                    <img style="display: inline;" class="img" src="'+img_+'"\
                                    data-original="'+img+'">\
                                </a>\
                            </span>\
                            <div class="champ-name">\
                                <a href="?'+name+'">\
                                    '+name+'\
                                </a>\
                            </div>\
                        </div>\
                    </li>\
                    ';
                };
                $("ul.champion-grid").empty().html(html);

                // 这里的a href属性不能用“#”，与roit-kit-all.js init方法冲突
                $("[id^='champion-grid-'] a[href^='?']").click(function(e){
                    e.preventDefault();
                    var name = $(this).attr('href').substr(1);
                    location.href = "<?php echo URL::action('Champions\\InfoController@getDetailOf');?>"+name+'#breadcrumbs';
                });
            },
            "error": function() {
                $(".no-results").show();
            },
            "complete": function() {
                $(".waiting-results").hide();
            }
        });
    }
});
</script>