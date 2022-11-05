<?php
/**
 * Основные параметры WordPress.
 *
 * Скрипт для создания wp-config.php использует этот файл в процессе
 * установки. Необязательно использовать веб-интерфейс, можно
 * скопировать файл в "wp-config.php" и заполнить значения вручную.
 *
 * Этот файл содержит следующие параметры:
 *
 * * Настройки MySQL
 * * Секретные ключи
 * * Префикс таблиц базы данных
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** Параметры MySQL: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define('DB_NAME', 'toaster_b1shmstr2');

/** Имя пользователя MySQL */
define('DB_USER', 'toaster_b1shmstr2');

/** Пароль к базе данных MySQL */
define('DB_PASSWORD', 'a48d1347f');

/** Имя сервера MySQL */
define('DB_HOST', 'sqlnew.101bot.ru');

/** Кодировка базы данных для создания таблиц. */
define('DB_CHARSET', 'utf8mb4');

/** Схема сопоставления. Не меняйте, если не уверены. */
define('DB_COLLATE', '');

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу.
 * Можно сгенерировать их с помощью {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными. Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '(:CZ_pcE6ShqbiIST{|% k}B 7cB8~+*j.$j@3yBTQ53oyiM$JR_jH:k]8T<f^qH');
define('SECURE_AUTH_KEY',  'm3Y1Z38SBw7^ubLes@Zk&^>Q06<p]cjba`$I0KCwJyeRTqAwbhKFNPzu~nQ1Ni+Y');
define('LOGGED_IN_KEY',    '@An>k;r!]Zuh[rGS7LHnzy~d3B{X=xf&4O[Q0CF@|)NYwREgcp{2Wt*>1_Ovy3D$');
define('NONCE_KEY',        '5dT,MBOZXo46q0{We;oYpcxJ[yk6M=L}_aT9-tC0I@(2c*m*@jX*[KZ{ix&fOM*o');
define('AUTH_SALT',        '~FLnr+7:El #*0#jLBiiQzNE;oTB3hf]OkgG3GYop;t>gZ)&E4Ds5)HX4Zv4`3;|');
define('SECURE_AUTH_SALT', '{Ls_hkF%7Jhp`c+o)X]O$yDj^o b()KZWm75QQ|`>KEbcQ}$/e>U829t( S|J%:n');
define('LOGGED_IN_SALT',   'DoP1yXo`2I8LnXs4t+tZjuyutk}TM7aAVva4;+jM^k<s8%.QUsStlZpOVd7FtyS5');
define('NONCE_SALT',       'Ir.*W_syXs<&ylW(X^1kY q$%Gm~ s(=!;Gi@p@k9QLwF4H#$E9v-/iN]@*[Lio#');

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix  = 'wp_';

/**
 * Для разработчиков: Режим отладки WordPress.
 *
 * Измените это значение на true, чтобы включить отображение уведомлений при разработке.
 * Разработчикам плагинов и тем настоятельно рекомендуется использовать WP_DEBUG
 * в своём рабочем окружении.
 *
 * Информацию о других отладочных константах можно найти в Кодексе.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

//define( 'WP_CONTENT_URL', '/assets' );
define( 'WP_DEFAULT_THEME', 'ma' );

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Инициализирует переменные WordPress и подключает файлы. */
require_once(ABSPATH . 'wp-settings.php');
