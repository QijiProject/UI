<div class="content">
    <div class="mod-promotions">
        <div class="layout promotions-wrap">
            <div id="atypes" class="tags clearfix">
                <div class="current"><a atype="0" title="全部" href="javascript:void(0);">全部</a></div>
                <?php foreach($types as $type): ?>
                <div><a atype="<?=$type['actypeid'] ?>" title="<?=$type['actypename'] ?>" href="javascript:void(0);"><?=$type['actypename'] ?></a></div>
                <?php endforeach; ?>
            </div>
            <?php foreach($acts as $act): ?>
            <?php 
                 $time = explode('-',DateUtil::short($act['created']));
            ?>
            <div class="item" act="act" atype="<?=$act['actypeid'] ?>">
                <div class="time"> <span class="y"><?=$time[0];?></span> <span class="m"><?=$time[1];?></span>. <span class="d"><?=$time[2];?></span> </div>
                <div class="point"></div>
                <div class="item-box">
                    <div class="item-top"></div>
                    <div class="main">
                        <div class="inner clearfix">
                            <h3><?=$act['actname'] ?></h3>
                            <img src="<?= empty($act['cover']) ? '#' : $img_host.'/iimg/'.$act['cover'] ?>" alt=""/>
                            <p> <?=$act['actdesc'] ?> </p>
                            <?= $act['content'] ?>
                        </div>
                    </div>
                    <div class="item-foot"></div>
                </div>
            </div>
            <?php endforeach; ?>
            <script>
                $(function(){
                    $('#atypes').find('a').on('click',function(){
                        $('#atypes').find('div.current').removeClass('current');
                        $(this).parent().addClass('current');
                        var type = parseInt($(this).attr('atype'));
                        if(!isNaN(type) && type > 0){
                            $('div[act=act][atype='+type+']').show();
                            $('div[act=act][atype!='+type+']').hide();
                        }else{
                            $('div[act=act]').show();
                        }
                    });
                });
            </script>
        </div>
    </div>
</div>