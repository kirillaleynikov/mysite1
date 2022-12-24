<?php
/**
 * Основные параметры WordPress.
 *
 * Скрипт для создания wp-config.php использует этот файл в процессе установки.
 * Необязательно использовать веб-интерфейс, можно скопировать файл в "wp-config.php"
 * и заполнить значения вручную.
 *
 * Этот файл содержит следующие параметры:
 *
 * * Настройки базы данных
 * * Секретные ключи
 * * Префикс таблиц базы данных
 * * ABSPATH
 *
 * @link https://ru.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Параметры базы данных: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define( 'DB_NAME', 'shopp' );

/** Имя пользователя базы данных */
define( 'DB_USER', 'admin2' );

/** Пароль к базе данных */
define( 'DB_PASSWORD', '1234' );

/** Имя сервера базы данных */
define( 'DB_HOST', 'localhost' );

/** Кодировка базы данных для создания таблиц. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Схема сопоставления. Не меняйте, если не уверены. */
define( 'DB_COLLATE', '' );

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу. Можно сгенерировать их с помощью
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}.
 *
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными.
 * Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'aL3JLcCbfcvh`(_WFR9ke_pdiP$`g:JII4#HC-Io@m0|48G?pWx2$Kc,ec!U78{@' );
define( 'SECURE_AUTH_KEY',  '`)r~}o{C!u1IhR-MctphB+kWnld+ghHM=RZRpRWK=TCn6A9QmP/O49luO+t|=+Ed' );
define( 'LOGGED_IN_KEY',    'Zqj;X&E&,A)Gf!`i/M&IfdLwIzin[Cr^<}$2])uSufm`T/!-9~ _w]y*5d^1+k!5' );
define( 'NONCE_KEY',        's.q3ecbj]`?X)i~@;7($d#*bRjk)Cj1[lw[GS3&}o!pZ=~(6sBZONT9ZDW{+DZ{!' );
define( 'AUTH_SALT',        '2*%.=%o4dxJXBT.Um<#E2NH.ML6~kmWJHHF5nK1]Qft:Q3qaauiXJH7k}<&5JX8c' );
define( 'SECURE_AUTH_SALT', 'SJDOlr `t<nu/~Q`l%J*3cfYN:Hby}WZaSN^m>}AuFXe9-CQ@wB0c2CL!,.#&MH~' );
define( 'LOGGED_IN_SALT',   'eW&gc I)4A&v6m7w[!J-1M7sWlB]HN$ q&p+R;w_<<f6EE}GSMc6%x=$>7*)`i@V' );
define( 'NONCE_SALT',       '|`h&FAgvHuq2~j#%!_a)ZlA6E;p48zRjolnhZ|Db0@]aK`N#W)S</{#<zi*#?O]I' );

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix = 'wp_';

/**
 * Для разработчиков: Режим отладки WordPress.
 *
 * Измените это значение на true, чтобы включить отображение уведомлений при разработке.
 * Разработчикам плагинов и тем настоятельно рекомендуется использовать WP_DEBUG
 * в своём рабочем окружении.
 *
 * Информацию о других отладочных константах можно найти в документации.
 *
 * @link https://ru.wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Произвольные значения добавляйте между этой строкой и надписью "дальше не редактируем". */



/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once ABSPATH . 'wp-settings.php';
