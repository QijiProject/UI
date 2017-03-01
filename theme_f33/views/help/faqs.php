<div class="area-main fr" id="faqs">
    <h2>常见问题</h2>
    <?=Helper::GetSiteTextInfo(6);?>
</div>
<script>
    $(function(){
        $('#faqs h3').click(function(){
            $(this).addClass("current");
            $(this).siblings('h3').removeClass("current");
            if(
                $(this).next('div.answer').is(":hidden")){
                $(this).next('div.answer').slideDown();
                $(this).siblings('h3').next('div.answer').slideUp();
            }else{
                $(this).next('div.answer').slideUp();
                $(this).removeClass("current");
            }
        })
    })
</script>