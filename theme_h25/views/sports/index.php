<?php
/**
 * .

 * Date: 14-9-11
 * Time: 9:58
 */
$action = Yii::app()->controller->action->id;
$im = strcasecmp($action, 'im') == 0;
$hg = strcasecmp($action, 'hg') == 0;
$saba = strcasecmp($action, 'index') == 0;
$bb = strcasecmp($action, 'bb') == 0;
?>
<div class="content mod-sports">
    <div class="mod-tags">
        <a href="/sports/hg" <?php if ($hg): ?> class="current" <?php endif; ?>>皇冠体育</a>
    	<a href="/sports/im" <?php if ($im): ?> class="current" <?php endif; ?>>IM体育</a>
        <a href="/sports/index" <?php if ($saba): ?> class="current" <?php endif; ?>>沙巴体育</a>
        <a href="/sports/bb" style="border-top-right-radius:3px; border-bottom-right-radius:3px; border:none;">BB体育</a>
    </div>
    <div class="<?php if ($hg): ?>layout1050 <?php else: ?>layout1020<?php endif; ?>">
        <iframe id="sb_frame" name="sb_frame" allowTransparency="true" width="100%" height="602" style="border: 0" frameborder=“0” src=""></iframe>
    </div>
</div>
<script type="text/javascript">
    $("#sb_frame").attr("src", '<?=$url?>');
    
    var gpid = "<?=$gpid?>";
    if (gpid != "") {
        $.ajax({
            url: "/kz/gp/mt?id=" + gpid,
            type: 'get',
            dataType: 'json',
            success: function (data) {
                if (data.code == 0 && data.data == true) {

                } else {
                    $("#sb_frame").attr("src", '/home/wh');
                }
            },
            cache: false,
            error: function () {
            }
        });
    }
</script>
