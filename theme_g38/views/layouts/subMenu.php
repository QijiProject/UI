<?php $subItems = array(
    array('route'=>'/help/about','name'=>'关于我们'),
    array('route'=>'/help/faqs','name'=>'常见问题'),
    array('route'=>'/help/contact','name'=>'联系我们'),
    array('route'=>'/help/privacy','name'=>'隐私政策'),
    array('route'=>'/help/responsibility','name'=>'博彩责任'),
    array('route'=>'/help/terms','name'=>'规则条款'),
); ?>
<div class="menu-sub">
    <ul>
        <?php
        foreach($subItems as $item):
            $route = $this->getRoute();
            $isActive = strcasecmp($route,trim($item['route'],'/')) == 0;
            ?>
        <li <?php if($isActive): ?> class="current" <?php endif; ?>><a href="<?=$item['route'] ?>"><?=$item['name'] ?><em></em></a></li>
        <?php endforeach; ?>
    </ul>
</div>