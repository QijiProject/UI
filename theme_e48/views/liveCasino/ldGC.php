<?php
?>
<form id="ld_form" method="post" action="<?=urldecode($ld_url); ?>">
    <?php foreach($fields as $key=>$val):?>
        <input type="hidden" name="<?=$key ?>" value="<?=$val ?>" />
    <?php endforeach;?>
</form>
<script>
   document.getElementById('ld_form').submit();
</script>