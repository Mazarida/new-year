<?php // Template Name: Главная
get_header(); ?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <div class="sc1__tree-block">
        <div class="typical-cntainer">
            <div class="sc1__left">
                <h2 class="sc1__header-title">
                    Разыгрываем <span class="sc1__header-title-accent">более 5000</span>
                    <br>разных призов!
                </h2>
                <div class="sc1__win-prize">
                    <a href="javascript:void(0);" class="sc1__cta-tree-block">Испытать удачу</a>
                    <div class="sc1__meta-header">Кол-во попыток:
                        <span class="tries-count"><?php
                            if (get_field('tries_wheel', 'user_'.get_current_user_id())) {
                                echo get_field('tries_wheel', 'user_'.get_current_user_id());
                            } else {
                                echo '0';
                            }
                            ?></span>
                    </div>
                </div>
            </div>
            <div class="sc1__tree">
                <div class="tree"><!--<img class="element" src="<?php bloginfo('template_url'); ?>/assets/img/tree.png" alt="">--></div>
                <div class="gifts">
                    <div class="gift"><div class="item" data-text="Подарок номер 1"><img class="element" src="<?php bloginfo('template_url'); ?>/assets/img/gift-1.png" alt=""></div></div>
                    <div class="gift"><div class="item" data-text="Подарок номер 2"><img class="element" src="<?php bloginfo('template_url'); ?>/assets/img/gift-2.png" alt=""></div></div>
                    <div class="gift"><div class="item" data-text="Подарок номер 3"><img class="element" src="<?php bloginfo('template_url'); ?>/assets/img/gift-3.png" alt=""></div></div>
                    <div class="gift"><div class="item" data-text="Подарок номер 4"><img class="element" src="<?php bloginfo('template_url'); ?>/assets/img/gift-4.png" alt=""></div></div>
                    <div class="gift"><div class="item" data-text="Подарок номер 5"><img class="element" src="<?php bloginfo('template_url'); ?>/assets/img/gift-5.png" alt=""></div></div>
                    <div class="gift"><div class="item" data-text="Подарок номер 6"><img class="element" src="<?php bloginfo('template_url'); ?>/assets/img/gift-6.png" alt=""></div></div>
                </div>
                <div class="sc1__win-prize_m">
                    <a href="javascript:void(0);" class="sc1__cta-tree-block">Испытать удачу</a>
                    <div class="sc1__meta-header">
                        Кол-во попыток: <span class="tries-count"><?php
                            if (get_field('tries_wheel', 'user_'.get_current_user_id())) {
                                echo get_field('tries_wheel', 'user_'.get_current_user_id());
                            } else {
                                echo '0';
                            }
                            ?></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="sc2__info-block">
        <h2 class="sc2__hrader">
            Получите <span class="accent">дополнительные</span> <br>
            <span class="accent">попытки</span> выполняя задания
        </h2>
        <div class="flex-row typical-cntainer sc2__wheel-meta">
            <div class="sc2__meta-r">
                <div class="sc2__meta-header">Всего попыток: <span class="tries-count"><?php
                        if (get_field('tries_wheel', 'user_'.get_current_user_id())) {
                            echo get_field('tries_wheel', 'user_'.get_current_user_id());
                        } else {
                            echo '0';
                        }
                        ?></span> </div>
                <div class="sc2__meta-legend"> Выполните задание и нажмите кнопку “Готово”, чтобы получить дополнительную попытку крутить колесо </div>
                <div class="sc2__tasks">
                    <div class="flex-row sc2__task task-not-finished">
                        <div class="flex-row sc2__task-name-try">
                            <div class="sc2__task-name"> Подпишитесь на <a href="https://vk.com/sushi_takeaway" target="_blank" style="text-decoration: underline;">сообщество</a> </div>
                            <div class="sc2__task-try"> + 1 попытка </div>
                        </div>
                        <div class="sc2__task-status" data-check-action="check-ingroup"> Готово </div>
                    </div>
                    <div class="flex-row sc2__task task-not-finished">
                        <div class="flex-row sc2__task-name-try">
                            <div class="sc2__task-name"> Подпишитесь на <a href="https://vk.com/app5898182_-68535127#s=1411799" target="_blank" style="text-decoration: underline;">рассылку</a> </div>
                            <div class="sc2__task-try"> + 1 попытка </div>
                        </div>
                        <div class="sc2__task-status" data-check-action="check-subscribe"> Готово </div>
                    </div>
                    <div class="flex-row sc2__task task-not-finished" data-check-action="check-repost">
                        <div class="flex-row sc2__task-name-try">
                            <div class="sc2__task-name"> Сделайте репост о конкурсе ВК </div>
                            <div class="sc2__task-try"> + 1 попытка </div>
                        </div>
                        <div class="sc2__task-status"> Готово </div>
                    </div>
                    <div class="flex-row sc2__task task-not-finished" data-check-action="goto-site">
                        <div class="flex-row sc2__task-name-try">
                            <div class="sc2__task-name"> Переход на <a class="lik-goto" href="https://sushi-master.ru/?utm_source=site&amp;utm_medium=landing&amp;utm_campaign=roulettefortune" target="_blank">сайт</a> </div>
                            <div class="sc2__task-try"> + 1 попытка </div>
                        </div>
                        <div class="sc2__task-status"> Готово </div>
                    </div>
                    <div class="flex-row sc2__task task-not-finished" data-check-action="check-checks">
                        <div class="flex-row sc2__task-name-try">
                            <div class="sc2__task-name"> Загрузите чек </div>
                            <div class="sc2__task-try"> + 1 попытка </div>
                        </div>
                        <div class="sc2__task-status"> Загрузить </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php endwhile; endif; ?>
<?php get_footer(); ?>