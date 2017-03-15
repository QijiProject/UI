<?php
/**
 * .

 * Date: 14-9-11
 * Time: 9:58
 */
$action = Yii::app()->controller->action->id;
$saba = strcasecmp($action, 'index') == 0;
$hg = strcasecmp($action, 'hg') == 0;
$bb = strcasecmp($action, 'bb') == 0;
$im = strcasecmp($action, 'im') == 0;
?>
<div class="content mod-sports">
	<div class="mod-tags">
        <a href="/sports/index" <?php if ($saba): ?> class="current" <?php endif; ?>>沙巴体育</a>
        <a href="/sports/im" <?php if ($im): ?> class="current" <?php endif; ?> style="border:none;">IM体育</a>
    </div>
    <div class="<?php if ($hg){ ?>layout1050<? } else { ?>layout1020<? } ?>">
        <iframe id="sb_frame" name="sb_frame" allowTransparency="true" width="100%" height="602" style="border: 0" frameborder=“0” src=""></iframe>
    </div>
</div>
<script type="text/javascript">
    $(document).ready(function () {
        var top = 60;
        var bottom = 0;
        var w_height = $(window).height();
        var height = w_height - top - bottom;
        if (height < 602){
            return false;
            };
        if ($('.top-notice').length > 0) {//检测顶部是否有维护信息
            height -= 30;
        }
        $('#sb_frame').height(height);
    });
    
    $(document).ready(function () {
        <?php if ($saba&&$this->is_login()){ ?>
            $.post("/kz/gp/reg", {gpid: SPON_GP_ID}, function () {
                $("#sb_frame").attr("src", '<?=$url?>');
            });
        <?php }else{ ?>
             $("#sb_frame").attr("src", '<?=$url?>');
        <?php } ?>
    });

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