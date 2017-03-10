<div class="content mod-promotions">
	<!-- 公告 -->
    <?= $this->renderPartial('/layouts/notice') ?>
    <!--end 公告 -->
    <!--焦点图-->
    <div class="mod-banner">
        <div class="slide-wrap clearfix" id="slides">
            <?=Helper::GetSiteTextInfo(106);?>
            <ul>
                <li style="display:block;"><img src="/static/images/promotion_banner_01.jpg" /></li>
            </ul>
        </div>
   	</div>
    <!--end 焦点图-->
    <div class="layout promotions-wrap">
        <ul id="atypes" class="promo-menu clearfix">
            <li atype="0" class="current"><a href="javascript:void(0);">全部优惠</a></li>
            <?php foreach($types as $type): ?>
            <li atype="<?=$type['actypeid'] ?>"><a href="javascript:void(0);"><?=$type['actypename'] ?></a></li>
            <?php endforeach; ?>
        </ul>
        <ul class="info-items" id="info-show">
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