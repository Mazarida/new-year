<div class="footer-d">
    <div class="flex-row typical-cntainer ctr-ftr">
        <div class="sc2__wheel-l"></div>
        <div class="sc2__meta-r">
            <a href="#" class="foot-link-d">Оферта</a>
            <a href="#" class="foot-link-d">Правила конкурса</a>
        </div>
    </div>
</div>


<div class="typical-modal modal-uploadr">
    <div class="typical-modal-overlay"></div>
    <div class="typical-modal-body-wrap">
        <div class="modal-xcross"></div>
        <div class="modal-upload-contents">
            <div class="upload-headr">
                Загрузите чек и получите <br>
                <span class="red-accent">+1 попытку</span> крутить колесо
            </div>
            <form class="upload-formz" action="/" enctype="multipart/form-data" method="post">
                <label class="upload-dropzone">
                    <input type="file" required accept="image/png, image/jpeg" onchange="checkInput(this)" name="check_image" class="invis-uploadr checks-upload-holder">
                    <span class="uploadr-cta">
                        Загрузить файл или перетащите его прямо сюда
                    </span>
                    <span class="uploadr-legend">
                        до 3 Мб, JPG, PNG
                    </span>
                    <span class="uploadr-legend greener flz"></span>
                </label>
                <button class="mdl-btn-sbmitd" type="submit">Загрузить</button>
            </form>
            <?php $my_txs = get_my_txs(); ?>
            <?php if (!empty($my_txs)) { ?>
                <div class="tx-hst-header">
                    История транзакций
                </div>
                <div class="tx-hist-table-wrap">
                    <table class="tx-hist-table">
                        <tbody>
                        <?php foreach ($my_txs as $my_tx) { ?>
                            <tr class="tx-hist-row">
                                <td class="tx-hist-col col-datetime"><?=str_replace(' ', '<br>', $my_tx['datetime'])?></td>
                                <td class="tx-hist-col col-descr"><?=$my_tx['message']?></td>
                                <td class="tx-hist-col col-status"><?php
                                    if ($my_tx['is_check_tx'] == 'y') {
                                        if ($my_tx['tx_approved'] == 'y') {
                                            echo '<span class="greener">+'.$my_tx['change'].' попытка</span>';
                                        } else if ($my_tx['tx_approved'] == 'n') {
                                            echo '<span class="reeder">Отказано</span>';
                                        } else {
                                            echo '<span class="yeeler">На модерации</span>';
                                        }
                                    } else {
                                        if ($my_tx['change'] > 0) {
                                            echo '<span class="greener">+'.$my_tx['change'].' попытка</span>';
                                        } else if ($my_tx['change'] < 0) {
                                            echo '<span class="reeder">'.$my_tx['change'].' попытка</span>';
                                        }
                                    }
                                    ?></td>
                            </tr>
                        <?php } ?>
                        </tbody>
                    </table>
                </div>
            <?php } ?>
        </div>
    </div>
</div>

<div class="typical-modal modal-pcodey">
    <div class="typical-modal-overlay"></div>
    <div class="typical-modal-body-wrap">
        <div class="modal-xcross"></div>
        <div class="modal-upload-contents">
            <div class="upload-headr">
                Мои <span class="red-accent">промокоды</span>
            </div>
            <div class="pcodes-wrapd">
                <?php echo get_pcodes_html(); ?>
            </div>
        </div>
    </div>
</div>

<div class="typical-modal <?=(isset($_GET['upload-success']) ? 'typical-modal-active modal-alert modal-success' : 'modal-alert')?>">
    <div class="typical-modal-overlay"></div>
    <div class="typical-modal-body-wrap">
        <div class="modal-xcross"></div>
        <div class="modal-success-failure">
            <div class="img-contain modal-emojiz"></div>
            <div class="upload-headr">
                Супер!
            </div>
            <div class="modal-txtd"><?=(isset($_GET['upload-success']) ? 'Изображение загружено. Ожидайте модерации.' : '')?></div>
        </div>
    </div>
</div>

<div class="typical-modal modal-alert modal-congratulate">
    <div class="typical-modal-overlay"></div>
    <div class="typical-modal-body-wrap">
        <div class="modal-xcross"></div>
        <div class="modal-success-failure">
            <div class="img-contain modal-emojiz"></div>
            <div class="upload-headr">Поздравляем!</div>
            <div class="modal-txtd">Вы выиграли <span>Нежный ролл с курицей при заказе от 799 р. в подарок.</span></div>
			<div id="item-to-copy"  class="promo-code" id="inputText">NK052AZ</div>
			<div onclick="copyToClipboard()" class="copy-code">Скопировать промокод</div>
			<div  class="my-code">Все мои промокоды</div>
        </div>
    </div>
</div> 




<script src="<?php bloginfo('template_url'); ?>/assets/lib/swiper-bundle.min.js"></script>
<script src="<?php bloginfo('template_url'); ?>/assets/scripts.js?t=<?=time();?>"></script>
<script src="<?php bloginfo('template_url'); ?>/assets/gifts.js?t=<?=time();?>"></script>
<script>
function copyToClipboard() {
    const str = document.getElementById('item-to-copy').innerText;
    const el = document.createElement('textarea');
    el.value = str;
    el.setAttribute('readonly', '');
    el.style.position = 'absolute';
    el.style.left = '-9999px';
    document.body.appendChild(el);
    el.select();
    document.execCommand('copy');
    document.body.removeChild(el);
	
}
</script>
<?php wp_footer(); ?>
</body>
</html>