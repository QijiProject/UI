<?php
/**
 * .

 * Date: 14-9-11
 * Time: 9:58
 */
$action = Yii::app()->controller->action->id;
$saba = strcasecmp($action, 'index') == 0;
$hg = strcasecmp($action, 'hg') == 0;
$im = strcasecmp($action, 'im') == 0;
$bb = strcasecmp($action, 'bb') == 0;
?>
<div class="content mod-sports">
    <!-- 公告 -->
    <?= $this->renderPartial('../layouts/notice') ?>
    <!--end 公告 -->
    <div class="mod-tags">
        <a href="/sports/im" <?php if ($im): ?> class="current" <?php endif; ?>>IM体育</a>
        <a href="/sports/hg" <?php if ($hg): ?> class="current" <?php endif; ?>>皇冠体育</a>
        <a href="/sports/index" <?php if ($saba): ?> class="current" <?php endif; ?>>沙巴体育</a>
        <a href="/sports/bb" <?php if ($bb): ?> class="current" <?php endif; ?>>BB体育</a> 
    </div>
    <div class="bb-sport"><div class="bb-wrap"><a href="javascript:void(0);" onclick="load_bbin_sb(<?=$bbin_status?>,'<?=BBIN::SB ?>');">立即游戏</a></div></div>
</div>
<script type="text/javascript" src="/js/game/Game.js"></script>
