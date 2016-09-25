<style>
#feedback .accent {
    background-image: url("<?php echo Utils::assetsUrl('/project/home/lol-player/source/feedback-accent-no-bg.png');?>");
}
.fg.fg-mid-right {
    height: 1000px;
}
.fg.fg-mid-left {
    height: 590px;
}
</style>
<div id="feedback">
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
</div>