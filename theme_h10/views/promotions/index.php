<div class="content">
    <div class="mod-promotions">
        <div class="mod-banner">
            <!--焦点图-->
            <div class="slide-wrap" id="slides">
                <?=Helper::GetSiteTextInfo(106);?>
                <ul>
                    <li style="display:block;"><img src="/static/images/promotions_banner_01.jpg" /></li>
                </ul>
            </div>
            <!--end 焦点图-->
            <!-- 公告 -->
            <?= $this->renderPartial('/layouts/notice') ?>
            <!--end 公告 -->
        </div>
        <div class="layout m-t-20">
            <div class="area-sub clearfix">
                <div class="menu-sub">
                    <ul id="atypes">
                        <li atype="0" class="current"><a href="javascript:void(0);">全部优惠</a></li>
                        <?php foreach($types as $type): ?>
                        <li atype="<?=$type['actypeid'] ?>"><a href="javascript:void(0);"><?=$type['actypename'] ?></a></li>
                        <?php endforeach; ?>
                    </ul>
                </div>
            </div>
            <ul class="m-t-30 info-items" id="info-show">
                <?php foreach($acts as $act): ?>
                <li act="act" atype="<?=$act['actypeid'] ?>">
                    <div class="info-tit"><img src="<?= empty($act['cover']) ? '#' : $img_host.'/iimg/'.$act['cover'] ?>" /></div>
                    <div class="info-cont">
                        <h3><?=$act['actname'] ?></h3>
                        <p> <?=$act['actdesc'] ?> </p>
                        <?= $act['content'] ?>
                    </div>
                </li>
                <?php endforeach; ?>
            </ul>
            <script>
            $(function(){
                $('#info-show .info-tit').click(function(){
                    if($(this).siblings('.info-cont').is(":hidden")){
                        $(this).parent().siblings('li').children('.info-cont').hide();
                        $(this).siblings('.info-cont').show();
                        $('html,body').animate({scrollTop: $(this).offset().top},'slow');

                    }else{
                        $(this).siblings('.info-cont').slideUp();
                    }
                })
            });
        
            $(function(){
                $('#atypes').find('li').on('click',function(){
                    $('#atypes').find('li.current').removeClass('current');
                    $(this).addClass('current');
                    var type = parseInt($(this).attr('atype'));
                    if(!isNaN(type) && type > 0){
                        $('li[act=act][atype='+type+']').show();
                        $('li[act=act][atype!='+type+']').hide();
                    }else{
                        $('li[act=act]').show();
                    }
        
                });
            });
        </script>
        </div>
    </div>
</div>