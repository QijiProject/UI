<?php
$action = Yii::app()->controller->action->id;
$saba = strcasecmp($action, 'index') == 0;
$bb = strcasecmp($action, 'bb') == 0;
$hg = strcasecmp($action, 'hg') == 0;
$im = strcasecmp($action, 'im') == 0;
?>
<div class="content mod-sports">
    <div class="mod-tags">
        <a href="/sports/im">IM体育</a>
        <a href="/sports/hg">皇冠体育</a>
        <a href="/sports/index">沙巴体育</a>
        <a href="/sports/bb" <?php if ($bb): ?> class="current" <?php endif; ?> style="border:none;">BB体育</a>
    </div>
    <div class="bb-sport"><div class="bb-wrap"><a href="javascript:void(0);" onclick="load_bbin_sb(<?=$bbin_status?>,'<?=BBIN::SB ?>');">立即游戏</a></div></div>
</div>
