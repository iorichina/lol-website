<link rel="stylesheet" type="text/css" href="<?php echo Utils::assetsUrl('/project/champions/info/css/champion-details.css');?>">
<style>
.fg.fg-mid-right {
    height: 1238px;
}
.fg.fg-mid-left {
    height: 836px;
}
#gameplay-text {
    background-repeat: repeat-y;
}
.page-title {
    background-color: rgba(255, 255, 255, 0.5);
    background-image: none;
    border-radius: 10px;
    box-shadow: 0 0 5px 0 rgb(77, 72, 96);
    color: rgb(60, 34, 43);
    text-indent: 0;
}
.white-stone {
    width: 100%;
    padding: 0;
    background-color: rgba(233, 234, 236, 0.6);
    border-radius: 10px;
}
.gs-container > * {
    padding-left: 10px;
}
.stat-label {
    line-height: 25px;
}
</style>
<!--游戏玩法 S-->
<div id="gameplay">
    <div class="accent"></div>
    <div class="gs-container default-2-col default-prefix-1-12 default-suffix-1-12">
        <div></div>
        <div style="top: -25px;">
            <h3 style="text-align: center"><?php echo $info['name'];?></h3>
            <img alt="默认皮肤" src="<?php echo Utils::assetsUrl('/img/lol/champions/en-980x500/');?>/big<?php echo $info['key'];?>000.jpg" style="border-radius: 10px;">
        </div>
    </div>
</div>
<div id="gameplay-text">
    <div class="gs-container default-2-3 default-prefix-1-6 default-suffix-1-6 gameplay">

<!-- properties{ -->
<div class="white-stone">
    <div class="white-stone-content">
        <div class="gs-container">
            <div class="default-1-2">
                <p>
                <span class="stat-label stat-hp">
                Health:
                </span>
                <span class="stat-value">
                <?php echo $info['stats']['hp'];?> (+<?php echo $info['stats']['hpperlevel'];?> per level)
                </span>
                </p>
                <p>
                <span class="stat-label stat-mana">
                Mana:
                </span>
                <span class="stat-value">
                <?php echo $info['stats']['mp'];?> (+<?php echo $info['stats']['mpperlevel'];?> per level)
                </span>
                </p>
                <p>
                <span class="stat-label stat-ad">
                Attack Damage:
                </span>
                <span class="stat-value">
                <?php echo $info['stats']['attackdamage'];?> (+<?php echo $info['stats']['attackdamageperlevel'];?> per level)
                </span>
                </p>
                <p>
                <span class="stat-label stat-as">
                Attack Speed:
                </span>
                <span class="stat-value">
                <?php echo $info['stats']['attackspeed'];?> (+<?php echo $info['stats']['attackspeedperlevel'];?>% per level)
                </span>
                </p>
                <p>
                <span class="stat-label stat-ms">
                Movement Speed:
                </span>
                <span class="stat-value">
                <?php echo $info['stats']['movespeed'];?>
                </span>
                </p>
            </div>
            <div class="default-1-2">
                <p>
                <span class="stat-label stat-hp-regen">
                Health Regen:
                </span>
                <span class="stat-value">
                <?php echo $info['stats']['hpregen'];?> (+<?php echo $info['stats']['hpregenperlevel'];?> per level)
                </span>
                </p>
                <p>
                <span class="stat-label stat-m-regen">
                Mana Regen:
                </span>
                <span class="stat-value">
                <?php echo $info['stats']['mpregen'];?> (+<?php echo $info['stats']['mpregenperlevel'];?> per level)
                </span>
                </p>
                <p>
                <span class="stat-label stat-armor">
                Armor:
                </span>
                <span class="stat-value">
                <?php echo $info['stats']['armor'];?> (+<?php echo $info['stats']['armorperlevel'];?> per level)
                </span>
                </p>
                <p>
                <span class="stat-label stat-mr">
                Magic Resist:
                </span>
                <span class="stat-value">
                <?php echo $info['stats']['spellblock'];?> (+<?php echo $info['stats']['spellblockperlevel'];?> per level)
                </span>
                </p>
            </div>
        </div>
    </div>
</div>
<!-- }properties -->
        
        <div class="panzoom-parent hide">
            <p>
                <span>Level:</span>
                <span>
                    <select class="js-level">
                    <?php for ($i=0; $i < 18; $i++) { ?>
                        <option value="<?php echo $i+1;?>"><?php echo $i+1;?></option>
                    <?php }?>
                    </select>
                </span>
            </p>
        </div>
        <p>
            <pre><?php /*var_dump($info);*/?></pre>
        </p>
        <div class="panzoom-parent hide">
            <!-- <img class="panzoom" src="<?php echo Utils::assetsUrl('/project/home/lol-player/source/gameplay-screenshot.jpg');?>" style=""/> -->
        </div>
        <div class="button-gradient hide">
            <div class="buttons">
                <button class="zoom-out">-</button>
                <input type="range" class="zoom-range" id="rangeinput">
                <button class="zoom-in">+</button>
            </div>
        </div>
        <div class="button-gradient">
            
        </div>
    </div>
</div>
<!--游戏玩法 E-->
<script>
var jQuery_loaded = jQuery_loaded || [];
jQuery_loaded.push({
    "function": function() {
        var img  = "<?php echo Utils::assetsUrl('/img/lol/champions/en/');?>/<?php echo $name;?>.png";
        $("#breadcrumbs h1.page-title").html('\
  <div style="float: left; width: 120px; padding: 14px 25px;"><img alt="" src="'+img+'"></div>\
  <div style="float: right; padding: 20px 10px; width: 540px;">\
  <div><?php echo htmlspecialchars($info['name'], ENT_QUOTES);?></div>\
  <div><?php echo htmlspecialchars($info['title'], ENT_QUOTES);?></div>\
  </div>\
            ');
    }
});
</script>