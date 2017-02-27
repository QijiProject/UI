<div class="content">
    <div class="mod-error">
        <div class="layout error-wrap">
            <i class="error-icon"></i>
            <div class="error-content">
                <h3><?= CHtml::encode($message) ?></h3>
                <p>错误代码：<?=$code ?></p>
                <a href="" class="refresh-btn"><i></i>刷新网页</a>
                <p><strong>可以尝试的操作:</strong><br />请检查输入的网址是否正确，或者点击 <a href="" class="a-td">咨询客服</a></p>
            </div>
        </div>
    </div>
</div>