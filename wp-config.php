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
define( 'DB_NAME', 'news_site' );

/** Имя пользователя MySQL */
define( 'DB_USER', 'root' );

/** Пароль к базе данных MySQL */
define( 'DB_PASSWORD', '' );

/** Имя сервера MySQL */
define( 'DB_HOST', 'localhost' );

/** Кодировка базы данных для создания таблиц. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Схема сопоставления. Не меняйте, если не уверены. */
define( 'DB_COLLATE', '' );

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу.
 * Можно сгенерировать их с помощью {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными. Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '/3Q>n14(W:-Q*y}9`=U}^$}DA1<A>I`!jL_9dwcq}>-BC/[b[EX?d3$$snzV@L;z' );
define( 'SECURE_AUTH_KEY',  'ISvOIO8>y.Y)]{PNbm+?A+{26F_Y3P?>X+*Q[7 B>#HFq#]x3S2x$Y!vS|d[I.6(' );
define( 'LOGGED_IN_KEY',    'hbyqUeVLi!!uh6$T17J^kczTmAZ,TV>B/>n% 1z{2~G+]Xj!)zzx4| n&OR0s2TU' );
define( 'NONCE_KEY',        'ToBXk,&[|83E3p->Ac+JK#8}cC)QC@PwOV[I9 +xE)Gs+pb~).AlPCj[~P+;;;ll' );
define( 'AUTH_SALT',        'NW:S&+HF@p&rbyFTWVs}o5f@uX7)tz,vd>:3$oS{PGP`eh$P%#)#pC=>!@s[yb*x' );
define( 'SECURE_AUTH_SALT', '=m!S?4b*YL8@CmU_:zt@@SI`2]4,ycR53&[N^$f/ir0-G`}deCkHgQWdS+0gv#{D' );
define( 'LOGGED_IN_SALT',   'FT+i/3(<!tu<QZe!#/:g?Lw[FkKd.tv;=%t+gTY,:|>)Z&d4|Bx)*a<B.(f(GSKp' );
define( 'NONCE_SALT',       'tGCJ3hEzeUR1~Y;z; *S-cG11Q$Rpb%!aZ`XP]excXb]32{zMBW%<kOO0}8UI^6T' );

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
 * Информацию о других отладочных константах можно найти в Кодексе.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once( ABSPATH . 'wp-settings.php' );
